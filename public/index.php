<?php
session_start();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/ScoringEngine.php';

$dbConnected = false;
$dbError = null;

try {
    $db = Database::getConnection();
    $dbConnected = true;
} catch (Exception $e) {
    $dbError = $e->getMessage();
}

// Fetch current session user if logged in
$currentUser = null;
if ($dbConnected && !empty($_SESSION['user_id'])) {
    $stmt = $db->prepare("SELECT id, name, email, role, permissions_json, company_name, rut, num_workers, has_sindicato, expert_mode FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $userRow = $stmt->fetch();
    if ($userRow) {
        $userRow['permissions'] = json_decode($userRow['permissions_json'] ?? '{}', true) ?: [];
        unset($userRow['permissions_json']);
        $currentUser = $userRow;
    }
}

// Default permissions for Guest / Unauthenticated testing
if (!$currentUser) {
    $currentUser = [
        'id' => 0,
        'name' => 'Invitado',
        'email' => 'guest@local',
        'role' => 'ADMIN', // Default to ADMIN view so guest can explore all modules
        'permissions' => [
            'perm_tasks' => true,
            'perm_bsr_score' => true,
            'perm_bsr_panel' => true,
            'perm_admin_users' => true
        ],
        'company_name' => 'Empresa Demostración',
        'rut' => '76.000.000-0',
        'num_workers' => 25,
        'has_sindicato' => 'no',
        'expert_mode' => 0
    ];
}

// Helper to check permission
function hasPerm($currentUser, $permKey) {
    if (($currentUser['role'] ?? '') === 'ADMIN') {
        return true;
    }
    return !empty($currentUser['permissions'][$permKey]);
}

// Check if this is an API request
$isApi = isset($_GET['api']) || isset($_GET['action']) || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);

if ($isApi) {
    header('Content-Type: application/json; charset=UTF-8');
    
    if (!$dbConnected) {
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'message' => 'Error de conexión a la base de datos: ' . $dbError
        ]);
        exit;
    }

    $inputData = json_decode(file_get_contents('php://input'), true) ?? [];
    $requestData = array_merge($_POST, $_GET, $inputData);
    $action = $requestData['action'] ?? '';

    try {
        // --- AUTH ENDPOINTS ---
        if ($action === 'login') {
            $email = trim($requestData['email'] ?? '');
            $password = $requestData['password'] ?? '';
            
            $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();
            
            if ($user && password_verify($password, $user['password_hash'])) {
                $_SESSION['user_id'] = $user['id'];
                $perms = json_decode($user['permissions_json'] ?? '{}', true) ?: [];
                echo json_encode([
                    'success' => true,
                    'message' => 'Sesión iniciada correctamente.',
                    'user' => [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'role' => $user['role'],
                        'permissions' => $perms,
                        'company_name' => $user['company_name'],
                        'rut' => $user['rut'],
                        'num_workers' => $user['num_workers'],
                        'has_sindicato' => $user['has_sindicato'],
                        'expert_mode' => $user['expert_mode']
                    ]
                ]);
            } else {
                http_response_code(401);
                echo json_encode(['success' => false, 'message' => 'Credenciales inválidas.']);
            }
            exit;
        }

        if ($action === 'logout') {
            unset($_SESSION['user_id']);
            session_destroy();
            echo json_encode(['success' => true, 'message' => 'Sesión cerrada.']);
            exit;
        }

        if ($action === 'me') {
            echo json_encode(['success' => true, 'user' => $currentUser]);
            exit;
        }

        if ($action === 'register') {
            $name = trim($requestData['name'] ?? '');
            $email = trim($requestData['email'] ?? '');
            $password = $requestData['password'] ?? '';
            $company = trim($requestData['company_name'] ?? '');
            $rut = trim($requestData['rut'] ?? '');
            $numWorkers = (int)($requestData['num_workers'] ?? 10);
            $hasSindicato = ($requestData['has_sindicato'] ?? 'no') === 'si' ? 'si' : 'no';

            if ($email === '' || $password === '' || $name === '') {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Nombre, correo y contraseña son obligatorios.']);
                exit;
            }

            $stmt = $db->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'El correo ya está registrado en el sistema.']);
                exit;
            }

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $defaultPerms = json_encode([
                'perm_tasks' => false,
                'perm_bsr_score' => true,
                'perm_bsr_panel' => false,
                'perm_admin_users' => false
            ]);

            $stmt = $db->prepare("INSERT INTO users (name, email, password_hash, role, permissions_json, company_name, rut, num_workers, has_sindicato) VALUES (?, ?, ?, 'CLIENT', ?, ?, ?, ?, ?)");
            $stmt->execute([$name, $email, $hash, $defaultPerms, $company, $rut, $numWorkers, $hasSindicato]);

            $newId = $db->lastInsertId();
            $_SESSION['user_id'] = $newId;

            echo json_encode([
                'success' => true,
                'message' => 'Registro completado con éxito.',
                'user_id' => $newId
            ]);
            exit;
        }

        // --- TASK MANAGER (MODULO ACTUAL) ENDPOINTS ---
        if ($action === 'list_tasks') {
            if (!hasPerm($currentUser, 'perm_tasks')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'No tienes permiso para acceder al módulo de Tareas.']);
                exit;
            }
            $stmt = $db->query("SELECT * FROM tasks ORDER BY created_at DESC");
            echo json_encode($stmt->fetchAll());
            exit;
        }

        if ($action === 'add_task') {
            if (!hasPerm($currentUser, 'perm_tasks')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Acceso denegado al módulo de Tareas.']);
                exit;
            }
            $title = trim($requestData['title'] ?? '');
            $desc = trim($requestData['description'] ?? '');
            if ($title !== '') {
                $stmt = $db->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
                $stmt->execute([$title, $desc]);
                echo json_encode(['success' => true, 'message' => 'Tarea creada exitosamente.']);
            } else {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'El título de la tarea es requerido.']);
            }
            exit;
        }

        if ($action === 'delete_task') {
            if (!hasPerm($currentUser, 'perm_tasks')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Acceso denegado.']);
                exit;
            }
            $id = (int)($requestData['id'] ?? 0);
            if ($id > 0) {
                $stmt = $db->prepare("DELETE FROM tasks WHERE id = ?");
                $stmt->execute([$id]);
                echo json_encode(['success' => true, 'message' => 'Tarea eliminada.']);
            }
            exit;
        }

        // --- BSR SCORE ENDPOINTS ---
        if ($action === 'get_cuestionario') {
            if (!hasPerm($currentUser, 'perm_bsr_score')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'No tienes permiso para acceder al Autodiagnóstico BSR.']);
                exit;
            }

            $modsJson = file_get_contents(__DIR__ . '/../data/mods.json');
            $nivelesJson = file_get_contents(__DIR__ . '/../data/niveles.json');
            $mods = json_decode($modsJson, true) ?: [];
            $niveles = json_decode($nivelesJson, true) ?: [];

            $numWorkers = (int)($requestData['num_workers'] ?? $currentUser['num_workers'] ?? 10);
            $modoExperto = !empty($requestData['expert_mode']) || !empty($currentUser['expert_mode']);
            $sindicato = $requestData['has_sindicato'] ?? $currentUser['has_sindicato'] ?? 'no';

            $nivelObj = ScoringEngine::getNivelByWorkers($niveles, $numWorkers);
            $nivelId = $nivelObj['id'] ?? 'n1';

            $modulosEvaluados = ScoringEngine::modulosActivos($nivelObj);
            $cuestionario = [];

            foreach ($modulosEvaluados as $mId) {
                if (isset($mods[$mId])) {
                    $qs = ScoringEngine::getQuestions($mods, $mId, $nivelId, $modoExperto);
                    $cuestionario[$mId] = [
                        'title' => $mods[$mId]['name'] ?? $mods[$mId]['title'] ?? $mId,
                        'name' => $mods[$mId]['name'] ?? $mId,
                        'desc' => $mods[$mId]['objetivo'] ?? $mods[$mId]['desc'] ?? ($mods[$mId]['riesgoEvaluado'] ?? ''),
                        'questions' => $qs
                    ];
                }
            }

            // Check if user has previous evaluation
            $prevEval = null;
            if ($currentUser['id'] > 0) {
                $stmt = $db->prepare("SELECT * FROM evaluations WHERE user_id = ? ORDER BY created_at DESC LIMIT 1");
                $stmt->execute([$currentUser['id']]);
                $prevEval = $stmt->fetch();
                if ($prevEval) {
                    $prevEval['answers'] = json_decode($prevEval['answers'] ?? '{}', true);
                }
            }

            echo json_encode([
                'success' => true,
                'nivel' => $nivelObj,
                'nivel_id' => $nivelId,
                'cuestionario' => $cuestionario,
                'es_rediagnostico' => !empty($prevEval),
                'prev_eval' => $prevEval
            ]);
            exit;
        }

        if ($action === 'save_evaluation') {
            if (!hasPerm($currentUser, 'perm_bsr_score')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Acceso denegado.']);
                exit;
            }

            $razon = trim($requestData['razon_social'] ?? $currentUser['company_name'] ?? '');
            $rut = trim($requestData['rut'] ?? $currentUser['rut'] ?? '');
            $email = trim($requestData['email'] ?? $currentUser['email'] ?? '');
            $numWorkers = (int)($requestData['num_workers'] ?? $currentUser['num_workers'] ?? 10);
            $sindicato = $requestData['has_sindicato'] ?? $currentUser['has_sindicato'] ?? 'no';
            $modoExperto = !empty($requestData['expert_mode']) || !empty($currentUser['expert_mode']);

            $answers = $requestData['answers'] ?? [];
            if (is_string($answers)) {
                $answers = json_decode($answers, true) ?: [];
            }

            $m1 = $requestData['m1'] ?? [
                'razon_social' => $razon,
                'rut' => $rut,
                'email' => $email,
                'num_workers' => $numWorkers,
                'has_sindicato' => $sindicato
            ];

            // Calculate exact score using PHP ScoringEngine
            $mods = json_decode(file_get_contents(__DIR__ . '/../data/mods.json'), true) ?: [];
            $niveles = json_decode(file_get_contents(__DIR__ . '/../data/niveles.json'), true) ?: [];

            $nivelObj = ScoringEngine::getNivelByWorkers($niveles, $numWorkers);
            $nivelId = $nivelObj['id'] ?? 'n1';

            $result = ScoringEngine::compute($mods, $niveles, $nivelId, $modoExperto, $answers, $sindicato);

            $score = $result['global'];
            $nivelNombre = $nivelObj['nombre'] ?? $nivelId;
            $scoresJson = json_encode($result);
            $answersJson = json_encode($answers);
            $m1Json = json_encode($m1);
            $userId = $currentUser['id'] > 0 ? $currentUser['id'] : null;

            $stmt = $db->prepare("INSERT INTO evaluations (user_id, razon_social, rut, email, num_workers, has_sindicato, expert_mode, score, nivel, scores_json, answers, m1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$userId, $razon, $rut, $email, $numWorkers, $sindicato, $modoExperto ? 1 : 0, $score, $nivelNombre, $scoresJson, $answersJson, $m1Json]);

            $evalId = $db->lastInsertId();

            echo json_encode([
                'success' => true,
                'message' => '¡Autodiagnóstico guardado con éxito!',
                'evaluation_id' => $evalId,
                'result' => $result
            ]);
            exit;
        }

        if ($action === 'list_evaluations') {
            if (!hasPerm($currentUser, 'perm_bsr_score') && !hasPerm($currentUser, 'perm_bsr_panel')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Acceso denegado.']);
                exit;
            }

            if ($currentUser['role'] === 'ADMIN') {
                $stmt = $db->query("SELECT id, razon_social, rut, email, score, nivel, created_at FROM evaluations ORDER BY created_at DESC");
            } else {
                $stmt = $db->prepare("SELECT id, razon_social, rut, email, score, nivel, created_at FROM evaluations WHERE user_id = ? OR email = ? ORDER BY created_at DESC");
                $stmt->execute([$currentUser['id'], $currentUser['email']]);
            }
            echo json_encode($stmt->fetchAll());
            exit;
        }

        if ($action === 'get_evaluation') {
            $id = (int)($requestData['id'] ?? $_GET['id'] ?? 0);
            $stmt = $db->prepare("SELECT * FROM evaluations WHERE id = ?");
            $stmt->execute([$id]);
            $eval = $stmt->fetch();
            if ($eval) {
                $eval['answers'] = json_decode($eval['answers'] ?? '{}', true) ?: [];
                $eval['scores_json'] = json_decode($eval['scores_json'] ?? '{}', true) ?: [];
                $eval['m1'] = json_decode($eval['m1'] ?? '{}', true) ?: [];

                $mods = json_decode(file_get_contents(__DIR__ . '/../data/mods.json'), true) ?: [];
                $niveles = json_decode(file_get_contents(__DIR__ . '/../data/niveles.json'), true) ?: [];

                // Build detailed breakdown of all questions and the selected answer
                $breakdown = [];
                foreach ($mods as $mId => $m) {
                    $modQuestions = [];
                    // Gather all questions in module
                    $allQs = $m['questions'] ?? [];
                    if (isset($m['questionsByLevel'])) {
                        foreach ($m['questionsByLevel'] as $lvl => $qs) {
                            $allQs = array_merge($allQs, $qs);
                        }
                    }
                    
                    // Deduplicate questions by ID
                    $qMap = [];
                    foreach ($allQs as $q) {
                        $qMap[$q['id']] = $q;
                    }

                    foreach ($eval['answers'] as $qId => $selectedOptIdx) {
                        if (isset($qMap[$qId])) {
                            $qObj = $qMap[$qId];
                            $selectedOpt = $qObj['opts'][$selectedOptIdx] ?? null;
                            $modQuestions[] = [
                                'id' => $qId,
                                'text' => $qObj['text'] ?? $qObj['txt'] ?? '',
                                'norm' => $qObj['norm'] ?? '',
                                'risk' => $qObj['risk'] ?? 'm',
                                'peso' => $qObj['peso'] ?? 0,
                                'cons' => $qObj['cons'] ?? '',
                                'opts' => $qObj['opts'] ?? [],
                                'selected_index' => $selectedOptIdx,
                                'selected_option' => $selectedOpt
                            ];
                        }
                    }

                    if (!empty($modQuestions)) {
                        $breakdown[$mId] = [
                            'title' => $m['name'] ?? $m['title'] ?? $mId,
                            'score' => $eval['scores_json']['scores'][$mId] ?? null,
                            'questions' => $modQuestions
                        ];
                    }
                }

                $eval['breakdown'] = $breakdown;

                echo json_encode(['success' => true, 'evaluation' => $eval]);
            } else {
                http_response_code(404);
                echo json_encode(['success' => false, 'message' => 'Evaluación no encontrada.']);
            }
            exit;
        }

        if ($action === 'compare_evaluations') {
            $idA = (int)($requestData['a'] ?? 0);
            $idB = (int)($requestData['b'] ?? 0);

            $stmt = $db->prepare("SELECT * FROM evaluations WHERE id IN (?, ?)");
            $stmt->execute([$idA, $idB]);
            $items = $stmt->fetchAll();

            if (count($items) === 2) {
                $evalA = $items[0]['id'] == $idA ? $items[0] : $items[1];
                $evalB = $items[0]['id'] == $idB ? $items[0] : $items[1];

                $scoresA = json_decode($evalA['scores_json'] ?? '{}', true);
                $scoresB = json_decode($evalB['scores_json'] ?? '{}', true);

                $deltaGlobal = ($evalB['score'] ?? 0) - ($evalA['score'] ?? 0);

                $deltasModulos = [];
                $allMods = array_unique(array_merge(array_keys($scoresA['scores'] ?? []), array_keys($scoresB['scores'] ?? [])));
                foreach ($allMods as $m) {
                    $sA = $scoresA['scores'][$m] ?? 0;
                    $sB = $scoresB['scores'][$m] ?? 0;
                    $deltasModulos[$m] = [
                        'score_previo' => $sA,
                        'score_nuevo' => $sB,
                        'delta' => $sB - $sA,
                        'estado' => ($sB > $sA) ? 'Mejoró' : (($sB < $sA) ? 'Empeoró' : 'Sin cambios')
                    ];
                }

                echo json_encode([
                    'success' => true,
                    'eval_prev' => $evalA,
                    'eval_new' => $evalB,
                    'delta_global' => $deltaGlobal,
                    'deltas_modulos' => $deltasModulos
                ]);
            } else {
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Se requieren dos evaluaciones válidas para comparar.']);
            }
            exit;
        }

        // --- PANEL CONSULTOR BSR (ADMIN) ENDPOINTS ---
        if ($action === 'get_panel_summary') {
            if (!hasPerm($currentUser, 'perm_bsr_panel')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Acceso denegado al Panel Consultor.']);
                exit;
            }

            $totalEmpresas = $db->query("SELECT COUNT(DISTINCT email) FROM evaluations")->fetchColumn();
            $totalDiagnosticos = $db->query("SELECT COUNT(*) FROM evaluations")->fetchColumn();
            $promedioScore = round((float)($db->query("SELECT AVG(score) FROM evaluations")->fetchColumn() ?: 0));

            $evals = $db->query("SELECT score, nivel FROM evaluations ORDER BY created_at DESC")->fetchAll();

            $distribucionRiesgo = [
                'Excelente' => 0,
                'Riesgo Bajo' => 0,
                'Riesgo Medio' => 0,
                'Riesgo Alto' => 0,
                'Riesgo Crítico' => 0
            ];

            foreach ($evals as $ev) {
                $r = ScoringEngine::riskLevel((int)$ev['score']);
                $lvlName = $r['level'];
                if (isset($distribucionRiesgo[$lvlName])) {
                    $distribucionRiesgo[$lvlName]++;
                }
            }

            echo json_encode([
                'success' => true,
                'total_empresas' => (int)$totalEmpresas,
                'total_diagnosticos' => (int)$totalDiagnosticos,
                'promedio_score' => $promedioScore,
                'distribucion_riesgo' => $distribucionRiesgo
            ]);
            exit;
        }

        if ($action === 'list_users' || $action === 'update_user_permissions') {
            if (!hasPerm($currentUser, 'perm_admin_users')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Acceso denegado a la gestión de permisos.']);
                exit;
            }

            if ($action === 'list_users') {
                $stmt = $db->query("SELECT id, name, email, role, permissions_json, company_name, created_at FROM users ORDER BY id ASC");
                $users = $stmt->fetchAll();
                foreach ($users as &$u) {
                    $u['permissions'] = json_decode($u['permissions_json'] ?? '{}', true) ?: [];
                }
                echo json_encode(['success' => true, 'users' => $users]);
                exit;
            }

            if ($action === 'update_user_permissions') {
                $userId = (int)($requestData['user_id'] ?? 0);
                $role = $requestData['role'] ?? 'CLIENT';
                $perms = $requestData['permissions'] ?? [];
                $permsJson = json_encode($perms);

                $stmt = $db->prepare("UPDATE users SET role = ?, permissions_json = ? WHERE id = ?");
                $stmt->execute([$role, $permsJson, $userId]);

                echo json_encode(['success' => true, 'message' => 'Permisos y rol actualizados correctamente.']);
                exit;
            }
        }

        // --- EXPORT CARTERA CSV ---
        if ($action === 'export_csv') {
            if (!hasPerm($currentUser, 'perm_bsr_panel')) {
                http_response_code(403);
                echo json_encode(['success' => false, 'message' => 'Acceso denegado.']);
                exit;
            }

            header('Content-Type: text/csv; charset=UTF-8');
            header('Content-Disposition: attachment; filename="cartera_bsr_score_' . date('Y-m-d') . '.csv"');

            $output = fopen('php://output', 'w');
            // BOM for Excel UTF-8 display
            fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

            fputcsv($output, ['ID', 'Razón Social', 'RUT', 'Email', 'Dotación', 'Sindicato', 'Score Global', 'Nivel Riesgo', 'Categoría Nivel', 'Fecha Diagnóstico']);

            $stmt = $db->query("SELECT * FROM evaluations ORDER BY created_at DESC");
            while ($row = $stmt->fetch()) {
                $risk = ScoringEngine::riskLevel((int)$row['score']);
                fputcsv($output, [
                    $row['id'],
                    $row['razon_social'],
                    $row['rut'],
                    $row['email'],
                    $row['num_workers'],
                    $row['has_sindicato'],
                    $row['score'],
                    $risk['level'],
                    $row['nivel'],
                    $row['created_at']
                ]);
            }
            fclose($output);
            exit;
        }

        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Acción API no reconocida.']);
        exit;

    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Error en el servidor: ' . $e->getMessage()]);
        exit;
    }
}

// Set UTF-8 Content-Type header
header('Content-Type: text/html; charset=UTF-8');

// Load main combined application view
require_once __DIR__ . '/../views/dashboard.php';
