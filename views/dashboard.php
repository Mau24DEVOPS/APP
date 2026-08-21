<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Risk Score & Core App</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.1.0/tabler-icons.min.css">
    <!-- Chart.js for graphics -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
    <!-- Tabulator CSS & JS for Task Manager & Admin Directory -->
    <link href="https://unpkg.com/tabulator-tables@5.5.2/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.5.2/dist/js/tabulator.min.js"></script>
    <style>
        :root {
            --navy: #0f2b5b;
            --blue: #1a4fa0;
            --blue-m: #2563c3;
            --blue-lt: #dbeafe;
            --teal: #0d7a6e;
            --teal-lt: #ccfbf1;
            --amber: #b45309;
            --amber-lt: #fef3c7;
            --red: #b91c1c;
            --red-lt: #fee2e2;
            --green: #15803d;
            --green-lt: #dcfce7;
        }

        body {
            background-color: #0b0f19;
            color: #f8fafc;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        /* Top Header & Navigation */
        .app-navbar {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            font-size: 1.15rem;
            color: #fff;
            text-decoration: none;
        }

        .navbar-brand span {
            color: #60a5fa;
        }

        .navbar-tabs {
            display: flex;
            gap: 6px;
            height: 100%;
            align-items: center;
        }

        .nav-tab-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 8px;
            border: none;
            background: transparent;
            color: #94a3b8;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .nav-tab-btn:hover {
            color: #f8fafc;
            background: rgba(255, 255, 255, 0.05);
        }

        .nav-tab-btn.active {
            color: #ffffff;
            background: #6366f1;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .user-panel-pill {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(30, 41, 59, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            padding: 4px 14px 4px 6px;
            font-size: 0.85rem;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #fff;
        }

        .badge-role {
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .badge-role.admin {
            background: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .badge-role.client {
            background: rgba(16, 185, 129, 0.2);
            color: #6ee7b7;
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        /* Container & Modules */
        .app-main-content {
            max-width: 1300px;
            margin: 0 auto;
            padding: 2rem 1.5rem;
        }

        .module-section {
            display: none;
            animation: fadeIn 0.3s ease-out;
        }

        .module-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Login Modal & Role Switcher */
        .auth-modal {
            position: fixed;
            inset: 0;
            background: rgba(11, 15, 25, 0.85);
            backdrop-filter: blur(8px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            pointer-events: none;
            transition: all 0.25s ease;
        }

        .auth-modal.open {
            opacity: 1;
            pointer-events: auto;
        }

        .auth-card {
            background: #1e293b;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            width: 100%;
            max-width: 440px;
            padding: 32px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        /* Cards & Forms */
        .card-custom {
            background: rgba(30, 41, 59, 0.45);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 20px;
        }

        /* STEPPER & WIZARD STYLES */
        .m1-stepper-wrap {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 20px;
            background: #0f172a;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 10px;
        }

        .m1-step-tab {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 14px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            cursor: pointer;
            transition: all 0.2s;
            text-align: left;
        }

        .m1-step-tab:hover {
            border-color: #6366f1;
            background: rgba(99, 102, 241, 0.1);
        }

        .m1-step-tab.active {
            background: rgba(99, 102, 241, 0.2);
            border-color: #6366f1;
            box-shadow: 0 0 0 1px #6366f1;
        }

        .m1-step-tab.completed {
            background: rgba(16, 185, 129, 0.15);
            border-color: #10b981;
        }

        .m1-step-num {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .m1-step-tab.active .m1-step-num {
            background: #6366f1;
            color: #fff;
        }

        .m1-step-tab.completed .m1-step-num {
            background: #10b981;
            color: #fff;
        }

        .m1-substep {
            display: none;
        }

        .m1-substep.active {
            display: block;
            animation: fadeIn 0.25s ease-out;
        }

        /* WIZARD QUESTION STEPPER */
        .mod-stepper-bar {
            background: #0f172a;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 16px 20px;
            margin-bottom: 20px;
        }

        .msb-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            flex-wrap: wrap;
            gap: 8px;
        }

        .msb-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: #f8fafc;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .msb-stats {
            font-size: 0.85rem;
            font-weight: 600;
            color: #94a3b8;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .msb-pill-stat {
            background: rgba(99, 102, 241, 0.2);
            color: #a5b4fc;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .msb-track {
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 14px;
        }

        .msb-fill {
            height: 100%;
            background: linear-gradient(90deg, #6366f1, #3b82f6);
            border-radius: 3px;
            transition: width 0.3s;
        }

        .step-pills-row {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            align-items: center;
        }

        .step-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.82rem;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
            cursor: pointer;
            transition: all 0.2s;
        }

        .step-pill:hover {
            border-color: #6366f1;
            color: #ffffff;
            background: rgba(99, 102, 241, 0.15);
        }

        .step-pill.active {
            background: #6366f1;
            color: #ffffff;
            border-color: #6366f1;
            box-shadow: 0 2px 8px rgba(99, 102, 241, 0.4);
        }

        .step-pill.completed {
            background: rgba(16, 185, 129, 0.2);
            border-color: #10b981;
            color: #6ee7b7;
        }

        .stat-card {
            background: #0f172a;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
        }

        .stat-val {
            font-size: 2rem;
            font-weight: 800;
            color: #6366f1;
            margin-top: 4px;
        }

        .stat-lbl {
            font-size: 0.85rem;
            color: #94a3b8;
        }
    </style>
</head>
<body>

    <!-- TOP NAVBAR WITH MODULAR NAVIGATION -->
    <header class="app-navbar">
        <a href="#" class="navbar-brand">
            <i class="ti ti-shield-check" style="font-size: 24px; color: #6366f1;"></i>
            Legal <span>Risk Score</span> & Core
        </a>

        <!-- MODULE TABS DYNAMICALLY RENDERED BY PERMISSIONS -->
        <nav class="navbar-tabs" id="module-tabs">
            <?php if (hasPerm($currentUser, 'perm_tasks')): ?>
                <button class="nav-tab-btn active" data-target="module-tasks">
                    <i class="ti ti-list-check"></i> Gestor de Tareas
                </button>
            <?php endif; ?>

            <?php if (hasPerm($currentUser, 'perm_bsr_score')): ?>
                <button class="nav-tab-btn <?= !hasPerm($currentUser, 'perm_tasks') ? 'active' : '' ?>" data-target="module-bsr-score">
                    <i class="ti ti-file-analytics"></i> Autodiagnóstico
                </button>
            <?php endif; ?>

            <?php if (hasPerm($currentUser, 'perm_bsr_panel')): ?>
                <button class="nav-tab-btn" data-target="module-bsr-panel">
                    <i class="ti ti-dashboard"></i> Panel Consultor
                </button>
            <?php endif; ?>

            <?php if (hasPerm($currentUser, 'perm_admin_users')): ?>
                <button class="nav-tab-btn" data-target="module-admin-users">
                    <i class="ti ti-user-cog"></i> Permisos & Roles
                </button>
            <?php endif; ?>
        </nav>

        <!-- USER PROFILE & LOGIN BUTTON -->
        <div class="user-panel-pill">
            <div class="user-avatar">
                <?= strtoupper(substr($currentUser['name'], 0, 1)) ?>
            </div>
            <div>
                <div style="font-weight: 700; color: #f8fafc; font-size: 0.85rem; max-width: 140px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                    <?= htmlspecialchars($currentUser['name']) ?>
                </div>
                <span class="badge-role <?= strtolower($currentUser['role']) ?>">
                    <?= htmlspecialchars($currentUser['role']) ?>
                </span>
            </div>
            <button onclick="openAuthModal()" style="background: rgba(255,255,255,0.1); border: none; color: #cbd5e1; padding: 6px; border-radius: 50%; cursor: pointer;" title="Cambiar usuario / Login">
                <i class="ti ti-logout" style="font-size: 16px;"></i>
            </button>
        </div>
    </header>

    <!-- MAIN APPLICATION CONTAINER -->
    <main class="app-main-content">

        <!-- ============================================================ -->
        <!-- MODULO 1: GESTOR DE TAREAS (PROYECTO ACTUAL)                  -->
        <!-- ============================================================ -->
        <?php if (hasPerm($currentUser, 'perm_tasks')): ?>
        <section id="module-tasks" class="module-section active">
            <div class="card-custom">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                    <div>
                        <h2 style="margin: 0; font-size: 1.4rem; color: #f8fafc; display: flex; align-items: center; gap: 8px;">
                            <i class="ti ti-list-check" style="color: #6366f1;"></i> Módulo: Tareas del Proyecto
                        </h2>
                        <p style="margin: 4px 0 0 0; color: #94a3b8; font-size: 0.88rem;">Funcionalidad del sistema estructurada en vista de grilla con Tabulator</p>
                    </div>
                    <button id="refresh-tasks-btn" class="btn btn-primary" style="font-size: 0.85rem; padding: 8px 14px; display: flex; align-items: center; gap: 6px; width: auto;">
                        <i class="ti ti-refresh"></i> Recargar Tabla
                    </button>
                </div>

                <!-- New Task Form -->
                <div style="background: #0f172a; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 20px; margin-bottom: 1.5rem;">
                    <h3 style="margin-top: 0; font-size: 1.05rem; color: #a5b4fc; margin-bottom: 1rem;">Agregar Nueva Tarea</h3>
                    <form id="task-form">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 1rem;">
                            <div class="form-group" style="margin-bottom: 0;">
                                <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 4px;">Título de la Tarea</label>
                                <input type="text" id="task-title" class="form-control" placeholder="Ej: Revisar matriz de riesgo legal" required style="width: 100%; box-sizing: border-box;">
                            </div>
                            <div class="form-group" style="margin-bottom: 0;">
                                <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 4px;">Descripción</label>
                                <input type="text" id="task-desc" class="form-control" placeholder="Detalles u observaciones..." style="width: 100%; box-sizing: border-box;">
                            </div>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button type="submit" class="btn btn-primary" style="width: auto; padding: 10px 24px;">Guardar Tarea</button>
                        </div>
                    </form>
                </div>

                <!-- Tabulator Table -->
                <div id="tasks-table-container"></div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ============================================================ -->
        <!-- MODULO 2: AUTODIAGNÓSTICO LEGAL (CON FORMULARIO MULTI-PASO)   -->
        <!-- ============================================================ -->
        <?php if (hasPerm($currentUser, 'perm_bsr_score')): ?>
        <section id="module-bsr-score" class="module-section <?= !hasPerm($currentUser, 'perm_tasks') ? 'active' : '' ?>">
            <div class="card-custom">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 1rem;">
                    <div>
                        <h2 style="margin: 0; font-size: 1.4rem; color: #f8fafc; display: flex; align-items: center; gap: 8px;">
                            <i class="ti ti-file-analytics" style="color: #6366f1;"></i> Autodiagnóstico de Riesgo Laboral (Multi-Paso)
                        </h2>
                        <p style="margin: 4px 0 0 0; color: #94a3b8; font-size: 0.88rem;">Evaluación relacional paso a paso por módulos y nivel de empresa (N1 - N6)</p>
                    </div>
                </div>

                <!-- RESUME SAVED DRAFT BANNER -->
                <div id="draft-resume-container"></div>

                <!-- SUB-STEPPER FOR MODULE 1 (CONFIGURACIÓN) -->
                <div class="m1-stepper-wrap">
                    <div class="m1-step-tab active" id="m1-tab-1" onclick="setM1Substep(1)">
                        <div class="m1-step-num">1</div>
                        <div>
                            <div style="font-weight: 700; font-size: 0.85rem; color: #f8fafc;">Empresa</div>
                            <div style="font-size: 0.75rem; color: #94a3b8;">Datos generales</div>
                        </div>
                    </div>
                    <div class="m1-step-tab" id="m1-tab-2" onclick="setM1Substep(2)">
                        <div class="m1-step-num">2</div>
                        <div>
                            <div style="font-weight: 700; font-size: 0.85rem; color: #f8fafc;">Dotación</div>
                            <div style="font-size: 0.75rem; color: #94a3b8;">Trabajadores y Sindicato</div>
                        </div>
                    </div>
                    <div class="m1-step-tab" id="m1-tab-3" onclick="setM1Substep(3)">
                        <div class="m1-step-num">3</div>
                        <div>
                            <div style="font-weight: 700; font-size: 0.85rem; color: #f8fafc;">Categorización</div>
                            <div style="font-size: 0.75rem; color: #94a3b8;">Nivel de Empresa N1-N6</div>
                        </div>
                    </div>
                </div>

                <!-- SUB-STEP 1: DATOS DE EMPRESA -->
                <div id="m1-substep-1" class="m1-substep active">
                    <div style="background: #0f172a; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 24px;">
                        <h3 style="margin-top: 0; color: #a5b4fc; font-size: 1.1rem; margin-bottom: 1rem;">Paso 1: Identificación de la Empresa</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 1.5rem;">
                            <div>
                                <label style="display: block; font-size: 0.82rem; color: #94a3b8; margin-bottom: 4px;">Razón Social *</label>
                                <input type="text" id="bsr-razon" class="form-control" value="<?= htmlspecialchars($currentUser['company_name'] ?? '') ?>" required style="width: 100%; box-sizing: border-box;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.82rem; color: #94a3b8; margin-bottom: 4px;">RUT Empresa</label>
                                <input type="text" id="bsr-rut" class="form-control" value="<?= htmlspecialchars($currentUser['rut'] ?? '') ?>" style="width: 100%; box-sizing: border-box;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.82rem; color: #94a3b8; margin-bottom: 4px;">Correo Electrónico *</label>
                                <input type="email" id="bsr-email" class="form-control" value="<?= htmlspecialchars($currentUser['email'] ?? '') ?>" required style="width: 100%; box-sizing: border-box;">
                            </div>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button onclick="setM1Substep(2)" class="btn btn-primary" style="width: auto; padding: 10px 24px;">Siguiente Paso ➔</button>
                        </div>
                    </div>
                </div>

                <!-- SUB-STEP 2: DOTACIÓN Y SINDICATO -->
                <div id="m1-substep-2" class="m1-substep">
                    <div style="background: #0f172a; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 24px;">
                        <h3 style="margin-top: 0; color: #a5b4fc; font-size: 1.1rem; margin-bottom: 1rem;">Paso 2: Dotación y Relación Sindical</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 1.5rem;">
                            <div>
                                <label style="display: block; font-size: 0.82rem; color: #94a3b8; margin-bottom: 4px;">Número de Trabajadores *</label>
                                <input type="number" id="bsr-workers" class="form-control" value="<?= (int)($currentUser['num_workers'] ?? 10) ?>" min="1" onchange="onWorkersChange()" style="width: 100%; box-sizing: border-box;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.82rem; color: #94a3b8; margin-bottom: 4px;">¿Cuenta con Sindicato?</label>
                                <select id="bsr-sindicato" class="form-control" style="width: 100%; box-sizing: border-box;">
                                    <option value="no" <?= ($currentUser['has_sindicato'] ?? '') === 'no' ? 'selected' : '' ?>>No</option>
                                    <option value="si" <?= ($currentUser['has_sindicato'] ?? '') === 'si' ? 'selected' : '' ?>>Sí</option>
                                </select>
                            </div>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <button onclick="setM1Substep(1)" class="btn btn-primary" style="background: rgba(255,255,255,0.1); width: auto; padding: 10px 24px;">← Paso Anterior</button>
                            <button onclick="setM1Substep(3)" class="btn btn-primary" style="width: auto; padding: 10px 24px;">Siguiente Paso ➔</button>
                        </div>
                    </div>
                </div>

                <!-- SUB-STEP 3: CATEGORIZACIÓN Y CARGA DE WIZARD -->
                <div id="m1-substep-3" class="m1-substep">
                    <div style="background: #0f172a; border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 24px;">
                        <h3 style="margin-top: 0; color: #a5b4fc; font-size: 1.1rem; margin-bottom: 1rem;">Paso 3: Categorización de Empresa y Diagnóstico</h3>
                        <div id="nivel-card-box" style="margin-bottom: 1.5rem;"></div>
                        <div style="display: flex; justify-content: space-between;">
                            <button onclick="setM1Substep(2)" class="btn btn-primary" style="background: rgba(255,255,255,0.1); width: auto; padding: 10px 24px;">← Paso Anterior</button>
                            <button onclick="iniciarDiagnosticoBSR()" class="btn btn-primary" style="width: auto; padding: 10px 24px;">🚀 Cargar Cuestionario Multi-Paso</button>
                        </div>
                    </div>
                </div>

                <!-- QUESTIONNAIRE MULTI-STEP WIZARD CONTAINER -->
                <div id="bsr-questionnaire-area" style="margin-top: 1.5rem;"></div>

                <!-- DIAGNOSTIC RESULT SCREEN -->
                <div id="bsr-result-area" style="display: none; margin-top: 1.5rem; background: #0f172a; border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; padding: 32px; text-align: center;">
                    <h3 style="color: #6366f1; font-size: 1.5rem; margin-top: 0;">Resultado de Evaluación</h3>
                    <div id="bsr-score-val" style="font-size: 4.5rem; font-weight: 900; line-height: 1; margin: 16px 0; color: #10b981;">0</div>
                    <div id="bsr-risk-level" style="font-size: 1.3rem; font-weight: 700; color: #f8fafc; margin-bottom: 1rem;">Nivel de Riesgo: -</div>
                    <p id="bsr-risk-desc" style="color: #94a3b8; max-width: 600px; margin: 0 auto 1.5rem auto;">Cálculo completado con éxito y registrado en la base de datos.</p>
                    
                    <div id="bsr-modules-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; margin-bottom: 2rem;"></div>

                    <div style="display: flex; justify-content: center; gap: 12px; flex-wrap: wrap;">
                        <button id="btn-ver-respuestas-actual" class="btn btn-primary" style="background: rgba(99,102,241,0.2); border: 1px solid #6366f1; color: #a5b4fc; width: auto; padding: 10px 24px; display: inline-flex; align-items: center; gap: 6px;">
                            <i class="ti ti-eye"></i> Ver Desglose de Respuestas
                        </button>
                        <button onclick="setM1Substep(1); document.getElementById('bsr-result-area').style.display='none';" class="btn btn-primary" style="width: auto; padding: 10px 24px;">
                            <i class="ti ti-plus"></i> Nueva Evaluación
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ============================================================ -->
        <!-- MODULO 3: PANEL CONSULTOR (ADMIN)                              -->
        <!-- ============================================================ -->
        <?php if (hasPerm($currentUser, 'perm_bsr_panel')): ?>
        <section id="module-bsr-panel" class="module-section">
            <div class="card-custom">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 1rem;">
                    <div>
                        <h2 style="margin: 0; font-size: 1.4rem; color: #f8fafc; display: flex; align-items: center; gap: 8px;">
                            <i class="ti ti-dashboard" style="color: #6366f1;"></i> Panel Consultor
                        </h2>
                        <p style="margin: 4px 0 0 0; color: #94a3b8; font-size: 0.88rem;">Resumen de cartera, distribución de riesgo y exportación a Excel / CSV</p>
                    </div>
                    <a href="index.php?api=1&action=export_csv" class="btn btn-primary" style="font-size: 0.85rem; padding: 8px 16px; text-decoration: none; display: flex; align-items: center; gap: 6px; width: auto;">
                        <i class="ti ti-download"></i> Exportar Cartera Excel/CSV
                    </a>
                </div>

                <!-- KPI STATS GRID -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-bottom: 1.5rem;">
                    <div class="stat-card">
                        <div class="stat-lbl">Total Empresas</div>
                        <div class="stat-val" id="stat-empresas">0</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-lbl">Total Diagnósticos</div>
                        <div class="stat-val" id="stat-diagnosticos">0</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-lbl">Score Promedio Cartera</div>
                        <div class="stat-val" id="stat-score-promedio">0</div>
                    </div>
                </div>

                <!-- EVALUATIONS HISTORY TABLE -->
                <h3 style="color: #a5b4fc; font-size: 1.1rem; margin-bottom: 1rem;">Historial de Evaluaciones de Empresas</h3>
                <div id="evaluations-table-container"></div>
            </div>
        </section>
        <?php endif; ?>

        <!-- ============================================================ -->
        <!-- MODULO 4: GESTIÓN DE PERMISOS Y ROLES                          -->
        <!-- ============================================================ -->
        <?php if (hasPerm($currentUser, 'perm_admin_users')): ?>
        <section id="module-admin-users" class="module-section">
            <div class="card-custom">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 1rem;">
                    <div>
                        <h2 style="margin: 0; font-size: 1.4rem; color: #f8fafc; display: flex; align-items: center; gap: 8px;">
                            <i class="ti ti-user-cog" style="color: #6366f1;"></i> Gestión de Permisos y Roles de Usuarios
                        </h2>
                        <p style="margin: 4px 0 0 0; color: #94a3b8; font-size: 0.88rem;">Activa o desactiva módulos por usuario para personalizar la experiencia de cada cliente</p>
                    </div>
                    <button onclick="loadUsersList()" class="btn btn-primary" style="font-size: 0.85rem; padding: 8px 14px; display: flex; align-items: center; gap: 6px; width: auto;">
                        <i class="ti ti-refresh"></i> Actualizar Lista
                    </button>
                </div>

                <div id="users-table-container"></div>
            </div>
        </section>
        <?php endif; ?>

    </main>

    <!-- AUTHENTICATION / LOGIN MODAL -->
    <div class="auth-modal" id="auth-modal">
        <div class="auth-card">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <h3 style="margin: 0; color: #f8fafc; font-size: 1.2rem;">Iniciar Sesión</h3>
                <button onclick="closeAuthModal()" style="background: transparent; border: none; color: #94a3b8; cursor: pointer; font-size: 1.2rem;">✕</button>
            </div>
            
            <form id="auth-form" onsubmit="handleLogin(event)">
                <div class="form-group" style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 4px;">Correo Electrónico</label>
                    <input type="email" id="login-email" class="form-control" value="admin@bsr.cl" required style="width: 100%; box-sizing: border-box;">
                </div>
                <div class="form-group" style="margin-bottom: 1.5rem;">
                    <label style="display: block; font-size: 0.85rem; color: #cbd5e1; margin-bottom: 4px;">Contraseña</label>
                    <input type="password" id="login-password" class="form-control" value="password123" required style="width: 100%; box-sizing: border-box;">
                </div>
                
                <div style="font-size: 0.8rem; color: #94a3b8; margin-bottom: 1rem; background: #0f172a; padding: 10px 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
                    <strong>Credenciales de prueba:</strong><br>
                    • Admin: <code>admin@bsr.cl</code> / <code>password123</code><br>
                    • Cliente: <code>empresa@cliente.cl</code> / <code>password123</code>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 10px;">Ingresar al Sistema</button>
            </form>
        </div>
    </div>

    <!-- EVALUATION DETAIL & ANSWERS BREAKDOWN MODAL -->
    <div class="auth-modal" id="eval-detail-modal" style="z-index: 10001;">
        <div class="auth-card" style="max-width: 960px; width: 90%; max-height: 90vh; display: flex; flex-direction: column; padding: 0; overflow: hidden; background: #0f172a; border: 1px solid rgba(255,255,255,0.15); box-shadow: 0 25px 60px rgba(0,0,0,0.7);">
            <!-- Modal Header -->
            <div style="padding: 20px 28px; background: #1e293b; border-bottom: 1px solid rgba(255,255,255,0.1); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(99,102,241,0.2); color: #818cf8; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; flex-shrink: 0;">
                        <i class="ti ti-report-analytics"></i>
                    </div>
                    <div>
                        <h3 id="modal-eval-empresa" style="margin: 0; color: #f8fafc; font-size: 1.2rem; font-weight: 800;">Detalle de Respuestas y Evaluación</h3>
                        <div id="modal-eval-meta" style="font-size: 0.82rem; color: #94a3b8; margin-top: 2px;">Cargando datos...</div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <button onclick="window.print()" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: #cbd5e1; border-radius: 8px; padding: 8px 14px; font-size: 0.82rem; cursor: pointer; display: flex; align-items: center; gap: 6px;">
                        <i class="ti ti-printer"></i> Imprimir / PDF
                    </button>
                    <button onclick="closeEvalDetailModal()" style="background: transparent; border: none; color: #94a3b8; font-size: 1.4rem; cursor: pointer; padding: 4px 8px;">✕</button>
                </div>
            </div>

            <!-- Modal Content (Scrollable) -->
            <div id="eval-detail-modal-body" style="padding: 24px 28px; overflow-y: auto; flex: 1;">
                <div style="text-align: center; color: #94a3b8; padding: 40px 0;">Cargando respuestas...</div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT APPLICATION CONTROLLER -->
    <script>
        // TAB CONTROLLER
        document.querySelectorAll('.nav-tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.nav-tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.module-section').forEach(m => m.classList.remove('active'));
                
                this.classList.add('active');
                const targetId = this.getAttribute('data-target');
                const targetModule = document.getElementById(targetId);
                if (targetModule) {
                    targetModule.classList.add('active');
                }

                if (targetId === 'module-bsr-score') {
                    checkAndShowDraftBanner();
                }
                if (targetId === 'module-bsr-panel') {
                    loadPanelSummary();
                }
                if (targetId === 'module-admin-users') {
                    loadUsersList();
                }
            });
        });

        // AUTH MODAL LOGIC
        function openAuthModal() {
            document.getElementById('auth-modal').classList.add('open');
        }
        function closeAuthModal() {
            document.getElementById('auth-modal').classList.remove('open');
        }

        async function handleLogin(e) {
            e.preventDefault();
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;

            try {
                const res = await fetch('index.php?api=1&action=login', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email, password })
                });
                const data = await res.json();
                if (data.success) {
                    window.location.reload();
                } else {
                    alert('Error: ' + data.message);
                }
            } catch (err) {
                alert('Error al conectar con el servidor.');
            }
        }

        // M1 SUBSTEP WIZARD CONTROLLER
        function setM1Substep(step) {
            document.querySelectorAll('.m1-substep').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.m1-step-tab').forEach(el => el.classList.remove('active'));

            const targetSub = document.getElementById('m1-substep-' + step);
            const targetTab = document.getElementById('m1-tab-' + step);
            if (targetSub) targetSub.classList.add('active');
            if (targetTab) targetTab.classList.add('active');

            if (step >= 2) document.getElementById('m1-tab-1')?.classList.add('completed');
            if (step >= 3) {
                document.getElementById('m1-tab-2')?.classList.add('completed');
                onWorkersChange();
            }
        }

        function onWorkersChange() {
            const n = parseInt(document.getElementById('bsr-workers').value || 10);
            let nivelNombre = 'Microempresa (n1)';
            let desc = '1 a 9 trabajadores';
            let color = '#6366f1';

            if (n >= 200) { nivelNombre = 'Gran Empresa (n6)'; desc = '200+ trabajadores'; color = '#ef4444'; }
            else if (n >= 100) { nivelNombre = 'Mediana Empresa Grande (n5)'; desc = '100 a 199 trabajadores'; color = '#f97316'; }
            else if (n >= 50) { nivelNombre = 'Mediana Empresa (n4)'; desc = '50 a 99 trabajadores'; color = '#f59e0b'; }
            else if (n >= 10) { nivelNombre = 'Pequeña Empresa (n3)'; desc = '10 a 49 trabajadores'; color = '#10b981'; }
            else if (n >= 5) { nivelNombre = 'Pequeña Empresa Inicial (n2)'; desc = '5 a 9 trabajadores'; color = '#06b6d4'; }

            const box = document.getElementById('nivel-card-box');
            if (box) {
                box.innerHTML = `
                    <div style="background: rgba(15,23,42,0.8); border: 2px solid ${color}; border-radius: 12px; padding: 18px; display: flex; align-items: center; gap: 16px;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: ${color}; color: #fff; font-size: 1.2rem; font-weight: 800; display: flex; align-items: center; justify-content: center;">N</div>
                        <div>
                            <div style="font-weight: 700; font-size: 1.1rem; color: ${color};">${nivelNombre}</div>
                            <div style="font-size: 0.85rem; color: #cbd5e1;">Dotación: ${n} trabajadores (${desc})</div>
                        </div>
                    </div>
                `;
            }
        }

        // TASK MANAGER TABULATOR SETUP
        let tasksTable = null;
        function initTasksTable() {
            if (!document.getElementById('tasks-table-container')) return;
            tasksTable = new Tabulator("#tasks-table-container", {
                ajaxURL: "index.php?api=1&action=list_tasks",
                layout: "fitColumns",
                placeholder: "<span>No hay tareas registradas.</span>",
                columns: [
                    { title: "ID", field: "id", width: 70 },
                    { title: "Título de la Tarea", field: "title", headerFilter: "input" },
                    { title: "Descripción", field: "description" },
                    { 
                        title: "Estado", 
                        field: "status", 
                        formatter: cell => cell.getValue() === 'completed' 
                            ? '<span style="color: #10b981; font-weight: 700;">✅ Completada</span>' 
                            : '<span style="color: #f59e0b; font-weight: 700;">⏳ Pendiente</span>' 
                    },
                    { title: "Fecha", field: "created_at" },
                    {
                        title: "Acción",
                        formatter: cell => `<button class="btn btn-danger" style="padding: 4px 10px; font-size: 0.78rem; width: auto;">Eliminar</button>`,
                        cellClick: async (e, cell) => {
                            if (confirm('¿Eliminar esta tarea?')) {
                                await fetch('index.php?api=1&action=delete_task', {
                                    method: 'POST',
                                    headers: { 'Content-Type': 'application/json' },
                                    body: JSON.stringify({ id: cell.getRow().getData().id })
                                });
                                tasksTable.setData();
                            }
                        }
                    }
                ]
            });
        }

        document.getElementById('task-form')?.addEventListener('submit', async function(e) {
            e.preventDefault();
            const title = document.getElementById('task-title').value;
            const description = document.getElementById('task-desc').value;

            const res = await fetch('index.php?api=1&action=add_task', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ title, description })
            });
            const data = await res.json();
            if (data.success) {
                document.getElementById('task-title').value = '';
                document.getElementById('task-desc').value = '';
                if (tasksTable) tasksTable.setData();
            } else {
                alert(data.message);
            }
        });

        document.getElementById('refresh-tasks-btn')?.addEventListener('click', () => {
            if (tasksTable) tasksTable.setData();
        });

        // ============================================================
        // AUTODIAGNÓSTICO MULTI-STEP WIZARD LOGIC & DRAFT PERSISTENCE
        // ============================================================
        const Q_PER_STEP = 5;
        const DRAFT_KEY = 'bsr_score_dashboard_draft_v3';
        let currentCuestionario = null;
        let currentAnswers = {};
        let currentModuleIndex = 0;
        let currentStepInModule = 1;
        let moduleKeys = [];

        // TOAST NOTIFICATION HELPER
        function showToast(msg, type = 'success') {
            let toast = document.getElementById('toast-notification');
            if (!toast) {
                toast = document.createElement('div');
                toast.id = 'toast-notification';
                toast.style.cssText = 'position: fixed; bottom: 24px; right: 24px; background: #10b981; color: #fff; padding: 12px 20px; border-radius: 8px; font-weight: 600; font-size: 0.88rem; box-shadow: 0 10px 25px rgba(0,0,0,0.4); display: none; align-items: center; gap: 8px; z-index: 10000; animation: fadeIn 0.2s;';
                document.body.appendChild(toast);
            }
            toast.style.background = type === 'error' ? '#ef4444' : (type === 'info' ? '#6366f1' : '#10b981');
            toast.innerHTML = `<i class="ti ${type === 'error' ? 'ti-alert-triangle' : (type === 'info' ? 'ti-info-circle' : 'ti-circle-check')}"></i> ${msg}`;
            toast.style.display = 'flex';
            setTimeout(() => { toast.style.display = 'none'; }, 3500);
        }

        // SAVE PROGRESS DRAFT
        function saveDraft(manual = false) {
            if (!currentCuestionario) return;
            const draft = {
                m1: {
                    razon: document.getElementById('bsr-razon')?.value || '',
                    rut: document.getElementById('bsr-rut')?.value || '',
                    email: document.getElementById('bsr-email')?.value || '',
                    workers: document.getElementById('bsr-workers')?.value || 10,
                    sindicato: document.getElementById('bsr-sindicato')?.value || 'no'
                },
                answers: currentAnswers,
                moduleIndex: currentModuleIndex,
                stepInModule: currentStepInModule,
                moduleKeys: moduleKeys,
                cuestionario: currentCuestionario,
                ts: Date.now()
            };
            try {
                localStorage.setItem(DRAFT_KEY, JSON.stringify(draft));
                if (manual) {
                    showToast('💾 Progreso guardado. Puedes continuar cuando quieras.', 'success');
                }
            } catch (e) {
                console.warn('No se pudo guardar borrador en localStorage', e);
            }
        }

        // CHECK AND RENDER RESUME DRAFT BANNER ON LOAD
        function checkAndShowDraftBanner() {
            const bannerContainer = document.getElementById('draft-resume-container');
            if (!bannerContainer) return;
            
            try {
                const saved = localStorage.getItem(DRAFT_KEY);
                if (!saved) {
                    bannerContainer.innerHTML = '';
                    return;
                }
                const draft = JSON.parse(saved);
                const answeredCount = Object.keys(draft.answers || {}).length;
                if (answeredCount === 0 && !draft.cuestionario) {
                    bannerContainer.innerHTML = '';
                    return;
                }

                const fecha = new Date(draft.ts).toLocaleString('es-CL', { day: 'numeric', month: 'short', hour: '2-digit', minute: '2-digit' });
                bannerContainer.innerHTML = `
                    <div style="background: linear-gradient(135deg, rgba(30,27,75,0.95), rgba(49,46,129,0.95)); border: 1.5px solid #6366f1; border-radius: 12px; padding: 18px 24px; margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
                        <div style="display: flex; align-items: center; gap: 14px;">
                            <div style="width: 44px; height: 44px; border-radius: 50%; background: rgba(99,102,241,0.25); color: #818cf8; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; flex-shrink: 0;"><i class="ti ti-history"></i></div>
                            <div>
                                <div style="font-weight: 700; color: #f8fafc; font-size: 1.05rem;">Diagnóstico en curso guardado</div>
                                <div style="font-size: 0.85rem; color: #cbd5e1; margin-top: 2px;">
                                    Empresa: <strong style="color: #a5b4fc;">${draft.m1?.razon || 'Empresa evaluada'}</strong> · 
                                    <span style="color: #10b981; font-weight: 700;">${answeredCount} preguntas respondidas</span> · 
                                    Guardado el ${fecha}
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; gap: 10px; align-items: center;">
                            <button onclick="reanudarDiagnosticoGuardado()" class="btn btn-primary" style="padding: 9px 18px; font-size: 0.88rem; display: flex; align-items: center; gap: 6px; width: auto; font-weight: 700;">
                                <i class="ti ti-player-play"></i> Continuar donde quedaste
                            </button>
                            <button onclick="descartarDiagnosticoGuardado()" style="background: transparent; border: 1px solid rgba(255,255,255,0.2); color: #94a3b8; border-radius: 8px; padding: 9px 14px; font-size: 0.85rem; cursor: pointer; display: flex; align-items: center; gap: 4px;">
                                <i class="ti ti-trash"></i> Descartar
                            </button>
                        </div>
                    </div>
                `;
            } catch (e) {
                console.error(e);
            }
        }

        function reanudarDiagnosticoGuardado() {
            try {
                const saved = localStorage.getItem(DRAFT_KEY);
                if (!saved) return;
                const draft = JSON.parse(saved);

                if (draft.m1) {
                    if (document.getElementById('bsr-razon')) document.getElementById('bsr-razon').value = draft.m1.razon || '';
                    if (document.getElementById('bsr-rut')) document.getElementById('bsr-rut').value = draft.m1.rut || '';
                    if (document.getElementById('bsr-email')) document.getElementById('bsr-email').value = draft.m1.email || '';
                    if (document.getElementById('bsr-workers')) document.getElementById('bsr-workers').value = draft.m1.workers || 10;
                    if (document.getElementById('bsr-sindicato')) document.getElementById('bsr-sindicato').value = draft.m1.sindicato || 'no';
                }

                currentAnswers = draft.answers || {};
                currentModuleIndex = draft.moduleIndex || 0;
                currentStepInModule = draft.stepInModule || 1;
                currentCuestionario = draft.cuestionario;
                moduleKeys = draft.moduleKeys || Object.keys(draft.cuestionario || {});

                const bannerContainer = document.getElementById('draft-resume-container');
                if (bannerContainer) bannerContainer.innerHTML = '';

                renderWizardCurrentStep();
                showToast('▶ Diagnóstico reanudado exitosamente.', 'info');
            } catch (e) {
                alert('Error al reanudar diagnóstico guardado.');
            }
        }

        function descartarDiagnosticoGuardado() {
            if (confirm('¿Estás seguro de descartar el borrador guardado y comenzar un nuevo diagnóstico?')) {
                localStorage.removeItem(DRAFT_KEY);
                currentAnswers = {};
                const bannerContainer = document.getElementById('draft-resume-container');
                if (bannerContainer) bannerContainer.innerHTML = '';
                showToast('Borrador descartado.', 'info');
            }
        }

        async function iniciarDiagnosticoBSR() {
            const numWorkers = document.getElementById('bsr-workers').value;
            const hasSindicato = document.getElementById('bsr-sindicato').value;

            const res = await fetch(`index.php?api=1&action=get_cuestionario&num_workers=${numWorkers}&has_sindicato=${hasSindicato}`);
            const data = await res.json();

            if (!data.success) {
                alert(data.message || 'Error al obtener el cuestionario.');
                return;
            }

            currentCuestionario = data.cuestionario;
            currentAnswers = {};
            moduleKeys = Object.keys(data.cuestionario);
            currentModuleIndex = 0;
            currentStepInModule = 1;

            const bannerContainer = document.getElementById('draft-resume-container');
            if (bannerContainer) bannerContainer.innerHTML = '';

            saveDraft(false);
            renderWizardCurrentStep();
        }

        // OPTION SELECTION WITHOUT FULL DOM DESTRUCTION
        function selectOption(qId, oIdx) {
            currentAnswers[qId] = Number(oIdx);
            
            // Highlight selected label immediately
            const card = document.getElementById(`qc-${qId}`);
            if (card) {
                card.querySelectorAll('label').forEach((lbl, idx) => {
                    const isSel = (idx === Number(oIdx));
                    lbl.style.background = isSel ? 'rgba(99,102,241,0.2)' : 'rgba(0,0,0,0.3)';
                    lbl.style.borderColor = isSel ? '#6366f1' : 'rgba(255,255,255,0.06)';
                    lbl.style.color = isSel ? '#f8fafc' : '#cbd5e1';
                });
            }

            saveDraft(false);
            updateWizardStatusUI();
        }

        // UPDATE PILLS AND STATUS LIVE
        function updateWizardStatusUI() {
            if (!moduleKeys.length) return;
            const modId = moduleKeys[currentModuleIndex];
            const mod = currentCuestionario[modId] || {};
            const questions = mod.questions || [];
            const totalQ = questions.length;
            const totalSteps = Math.max(1, Math.ceil(totalQ / Q_PER_STEP));

            for (let s = 1; s <= totalSteps; s++) {
                const sStart = (s - 1) * Q_PER_STEP;
                const sEnd = Math.min(s * Q_PER_STEP, totalQ);
                const sQs = questions.slice(sStart, sEnd);
                const sAnswered = sQs.filter(q => currentAnswers[q.id] !== undefined).length;
                const isComplete = (sQs.length > 0 && sAnswered === sQs.length);
                const pill = document.getElementById(`step-pill-${s}`);
                if (pill) {
                    if (isComplete) {
                        pill.classList.add('completed');
                        pill.innerHTML = `✓ Paso ${s} (${sStart + 1}–${sEnd})`;
                    } else {
                        pill.classList.remove('completed');
                        pill.innerHTML = `• Paso ${s} (${sStart + 1}–${sEnd})`;
                    }
                }
            }

            // Calculate global diagnostic stats
            let allQCount = 0;
            let allAnsweredCount = 0;
            moduleKeys.forEach(mKey => {
                const qs = currentCuestionario[mKey]?.questions || [];
                allQCount += qs.length;
                qs.forEach(q => {
                    if (currentAnswers[q.id] !== undefined) allAnsweredCount++;
                });
            });

            const statEl = document.getElementById('global-progress-stat');
            if (statEl) {
                const pct = allQCount > 0 ? Math.round((allAnsweredCount / allQCount) * 100) : 0;
                statEl.innerText = `${allAnsweredCount} / ${allQCount} respondidas (${pct}%)`;
            }
        }

        function renderWizardCurrentStep() {
            const area = document.getElementById('bsr-questionnaire-area');
            if (!moduleKeys.length) return;

            const modId = moduleKeys[currentModuleIndex];
            const mod = currentCuestionario[modId] || {};
            const modTitle = mod.title || mod.name || modId;
            const questions = mod.questions || [];
            const totalQ = questions.length;
            const totalSteps = Math.max(1, Math.ceil(totalQ / Q_PER_STEP));

            if (currentStepInModule > totalSteps) currentStepInModule = totalSteps;
            if (currentStepInModule < 1) currentStepInModule = 1;

            const startIdx = (currentStepInModule - 1) * Q_PER_STEP;
            const endIdx = Math.min(currentStepInModule * Q_PER_STEP, totalQ);
            const stepQuestions = questions.slice(startIdx, endIdx);

            // Calculate global stats
            let allQCount = 0;
            let allAnsweredCount = 0;
            moduleKeys.forEach(mKey => {
                const qs = currentCuestionario[mKey]?.questions || [];
                allQCount += qs.length;
                qs.forEach(q => {
                    if (currentAnswers[q.id] !== undefined) allAnsweredCount++;
                });
            });
            const globalPct = allQCount > 0 ? Math.round((allAnsweredCount / allQCount) * 100) : 0;

            // Build Step Pills
            let pillsHtml = '';
            for (let s = 1; s <= totalSteps; s++) {
                const sStart = (s - 1) * Q_PER_STEP;
                const sEnd = Math.min(s * Q_PER_STEP, totalQ);
                const sQs = questions.slice(sStart, sEnd);
                const sAnswered = sQs.filter(q => currentAnswers[q.id] !== undefined).length;
                const isComplete = (sQs.length > 0 && sAnswered === sQs.length);
                const isActive = (s === currentStepInModule);

                pillsHtml += `
                    <div id="step-pill-${s}" class="step-pill ${isActive ? 'active' : ''} ${isComplete ? 'completed' : ''}" onclick="goToStep(${s})" style="cursor: pointer; padding: 6px 14px; border-radius: 20px; font-size: 0.82rem; font-weight: 600; border: 1px solid ${isActive ? '#6366f1' : (isComplete ? '#10b981' : 'rgba(255,255,255,0.1)')}; background: ${isActive ? '#6366f1' : (isComplete ? 'rgba(16,185,129,0.15)' : 'rgba(255,255,255,0.04)')}; color: ${isActive ? '#fff' : (isComplete ? '#34d399' : '#cbd5e1')}; transition: all 0.2s;">
                        ${isComplete ? '✓' : '•'} Paso ${s} (${sStart + 1}–${sEnd})
                    </div>
                `;
            }

            const stepAnswered = stepQuestions.filter(q => currentAnswers[q.id] !== undefined).length;
            const pctProgress = totalQ > 0 ? Math.round((endIdx / totalQ) * 100) : 0;

            let html = `
                <div class="mod-stepper-bar" style="background: #0f172a; border: 1px solid rgba(255,255,255,0.1); border-radius: 14px; padding: 20px; margin-bottom: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.2);">
                    <div class="msb-top" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; flex-wrap: wrap; gap: 10px;">
                        <div>
                            <div style="font-size: 0.78rem; font-weight: 700; color: #818cf8; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 3px;">
                                Módulo ${currentModuleIndex + 1} de ${moduleKeys.length}
                            </div>
                            <div class="msb-title" style="font-size: 1.15rem; font-weight: 800; color: #f8fafc; display: flex; align-items: center; gap: 8px;">
                                <i class="ti ti-file-text" style="color: #6366f1;"></i> ${modTitle}
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                            <div style="text-align: right;">
                                <div style="font-size: 0.75rem; color: #94a3b8;">Progreso total del diagnóstico</div>
                                <div id="global-progress-stat" style="font-size: 0.88rem; font-weight: 700; color: #10b981;">${allAnsweredCount} / ${allQCount} respondidas (${globalPct}%)</div>
                            </div>
                            <button onclick="saveDraft(true)" style="background: rgba(99,102,241,0.15); border: 1px solid #6366f1; color: #a5b4fc; padding: 7px 14px; border-radius: 8px; font-size: 0.82rem; font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 6px; transition: all 0.15s;" onmouseover="this.style.background='#6366f1';this.style.color='#fff'" onmouseout="this.style.background='rgba(99,102,241,0.15)';this.style.color='#a5b4fc'">
                                <i class="ti ti-device-floppy"></i> Guardar para después
                            </button>
                        </div>
                    </div>

                    <!-- PROGRESS BAR -->
                    <div style="display: flex; align-items: center; justify-content: space-between; font-size: 0.8rem; color: #94a3b8; margin-bottom: 6px;">
                        <span>Paso ${currentStepInModule} de ${totalSteps} (Preguntas ${startIdx + 1} a ${endIdx} de ${totalQ})</span>
                        <span>${stepAnswered} de ${stepQuestions.length} respondidas en este paso</span>
                    </div>
                    <div class="msb-track" style="height: 6px; background: rgba(255,255,255,0.08); border-radius: 3px; overflow: hidden; margin-bottom: 14px;">
                        <div class="msb-fill" style="width: ${pctProgress}%; height: 100%; background: linear-gradient(90deg, #6366f1, #818cf8); border-radius: 3px; transition: width 0.3s ease;"></div>
                    </div>
                    <div class="step-pills-row" style="display: flex; gap: 8px; flex-wrap: wrap;">${pillsHtml}</div>
                </div>

                <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.1); border-radius: 14px; padding: 24px; margin-bottom: 20px;">
                    ${mod.desc ? `<div style="background: rgba(99,102,241,0.08); border-left: 3px solid #6366f1; border-radius: 0 8px 8px 0; padding: 12px 16px; font-size: 0.88rem; color: #cbd5e1; margin-bottom: 1.5rem; line-height: 1.5;"><i class="ti ti-info-circle" style="color: #6366f1; margin-right: 6px;"></i>${mod.desc}</div>` : ''}
            `;

            stepQuestions.forEach((q, idx) => {
                const qGlobalIdx = startIdx + idx + 1;
                const qText = q.text || q.txt || '';
                const rc = q.risk === 'a' ? '#ef4444' : (q.risk === 'm' ? '#f59e0b' : '#10b981');
                const rl = q.risk === 'a' ? 'Riesgo Alto' : (q.risk === 'm' ? 'Riesgo Medio' : 'Riesgo Bajo');
                const selectedVal = currentAnswers[q.id];

                html += `
                    <div id="qc-${q.id}" style="background: #1e293b; border-radius: 12px; padding: 20px; margin-bottom: 16px; border: 1px solid rgba(255,255,255,0.08); transition: border-color 0.2s;">
                        <div style="display: flex; gap: 10px; align-items: flex-start; margin-bottom: 12px;">
                            <span style="background: rgba(99,102,241,0.2); color: #818cf8; font-weight: 700; font-size: 0.8rem; padding: 3px 9px; border-radius: 6px; flex-shrink: 0; margin-top: 2px;">P${qGlobalIdx}</span>
                            <span style="background: ${rc}22; color: ${rc}; font-weight: 700; font-size: 0.75rem; padding: 3px 9px; border-radius: 6px; flex-shrink: 0; margin-top: 2px; text-transform: uppercase;">${rl}</span>
                            <div style="flex: 1;">
                                <div style="font-weight: 700; font-size: 0.96rem; color: #f8fafc; line-height: 1.4;">${qText}</div>
                                ${q.norm ? `<div style="font-size: 0.8rem; color: #94a3b8; margin-top: 5px;"><i class="ti ti-book" style="color: #6366f1;"></i> ${q.norm}</div>` : ''}
                            </div>
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 8px; margin-top: 14px;">
                `;

                (q.opts || []).forEach((opt, oIdx) => {
                    const isChecked = (selectedVal !== undefined && Number(selectedVal) === oIdx);
                    html += `
                        <label style="font-size: 0.88rem; color: ${isChecked ? '#f8fafc' : '#cbd5e1'}; cursor: pointer; display: flex; align-items: flex-start; gap: 10px; background: ${isChecked ? 'rgba(99,102,241,0.2)' : 'rgba(0,0,0,0.3)'}; border: 1px solid ${isChecked ? '#6366f1' : 'rgba(255,255,255,0.06)'}; padding: 11px 16px; border-radius: 8px; transition: all 0.15s ease;" onclick="selectOption('${q.id}', ${oIdx})">
                            <input type="radio" name="q_${q.id}" value="${oIdx}" ${isChecked ? 'checked' : ''} style="margin-top: 3px; accent-color: #6366f1; cursor: pointer;">
                            <div style="flex: 1; line-height: 1.4;">
                                ${opt.l ? `<span style="font-weight: 700; color: #818cf8; margin-right: 4px;">${opt.l})</span>` : ''}
                                ${opt.t}
                            </div>
                        </label>
                    `;
                });

                if (q.cons) {
                    html += `
                        </div>
                        <div style="margin-top: 12px; padding-top: 10px; border-top: 1px dashed rgba(255,255,255,0.08); font-size: 0.82rem; color: #94a3b8; display: flex; gap: 6px; align-items: flex-start;">
                            <i class="ti ti-alert-triangle" style="color: #f59e0b; margin-top: 2px;"></i>
                            <span><strong style="color: #fcd34d;">Consecuencia legal:</strong> ${q.cons}</span>
                        </div>
                    `;
                } else {
                    html += `</div>`;
                }

                html += `</div>`;
            });

            const isLastModule = (currentModuleIndex === moduleKeys.length - 1);
            const isLastStep = (currentStepInModule === totalSteps);

            html += `
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 24px; padding-top: 16px; border-top: 1px solid rgba(255,255,255,0.08); flex-wrap: wrap; gap: 12px;">
                    <div style="display: flex; gap: 10px;">
                        <button onclick="prevStep()" class="btn btn-primary" style="background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); width: auto; padding: 10px 20px;" ${currentModuleIndex === 0 && currentStepInModule === 1 ? 'disabled style="opacity:0.4;cursor:not-allowed;"' : ''}>
                            ← Paso Anterior
                        </button>
                        <button onclick="saveDraft(true)" style="background: transparent; border: 1px solid rgba(255,255,255,0.15); color: #cbd5e1; border-radius: 8px; padding: 10px 16px; font-size: 0.85rem; cursor: pointer; display: flex; align-items: center; gap: 6px;">
                            <i class="ti ti-device-floppy"></i> Guardar progreso
                        </button>
                    </div>

                    <div>
                        ${(isLastModule && isLastStep) 
                            ? `<button onclick="finalizarEvaluacionBSR()" class="btn btn-primary" style="background: linear-gradient(135deg, #10b981, #059669); width: auto; padding: 11px 28px; font-weight: 700; font-size: 0.95rem; box-shadow: 0 4px 14px rgba(16,185,129,0.3);">
                                <i class="ti ti-circle-check"></i> Finalizar y Obtener Resultados
                               </button>`
                            : `<button onclick="nextStep()" class="btn btn-primary" style="width: auto; padding: 11px 24px; font-weight: 700; display: flex; align-items: center; gap: 6px;">
                                ${isLastStep ? `Guardar y Pasar al Módulo ${currentModuleIndex + 2} ➔` : 'Siguiente Paso ➔'}
                               </button>`}
                    </div>
                </div>
                </div>
            `;

            area.innerHTML = html;
            document.getElementById('bsr-result-area').style.display = 'none';
        }

        function goToStep(s) {
            currentStepInModule = s;
            saveDraft(false);
            renderWizardCurrentStep();
            const area = document.getElementById('bsr-questionnaire-area');
            if (area) area.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function nextStep() {
            const modId = moduleKeys[currentModuleIndex];
            const questions = currentCuestionario[modId]?.questions || [];
            const totalSteps = Math.max(1, Math.ceil(questions.length / Q_PER_STEP));

            if (currentStepInModule < totalSteps) {
                currentStepInModule++;
            } else if (currentModuleIndex < moduleKeys.length - 1) {
                currentModuleIndex++;
                currentStepInModule = 1;
                showToast(`✅ Módulo completado. Avanzando a Módulo ${currentModuleIndex + 1}`, 'success');
            }

            saveDraft(false);
            renderWizardCurrentStep();
            const area = document.getElementById('bsr-questionnaire-area');
            if (area) area.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function prevStep() {
            if (currentStepInModule > 1) {
                currentStepInModule--;
            } else if (currentModuleIndex > 0) {
                currentModuleIndex--;
                const prevQuestions = currentCuestionario[moduleKeys[currentModuleIndex]]?.questions || [];
                currentStepInModule = Math.max(1, Math.ceil(prevQuestions.length / Q_PER_STEP));
            }

            saveDraft(false);
            renderWizardCurrentStep();
            const area = document.getElementById('bsr-questionnaire-area');
            if (area) area.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        async function finalizarEvaluacionBSR() {
            const razon = document.getElementById('bsr-razon').value;
            const rut = document.getElementById('bsr-rut').value;
            const numWorkers = document.getElementById('bsr-workers').value;
            const hasSindicato = document.getElementById('bsr-sindicato').value;

            const res = await fetch('index.php?api=1&action=save_evaluation', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    razon_social: razon,
                    rut: rut,
                    num_workers: numWorkers,
                    has_sindicato: hasSindicato,
                    answers: currentAnswers
                })
            });

            const data = await res.json();
            if (data.success) {
                // Clear draft after successful completion
                localStorage.removeItem(DRAFT_KEY);

                document.getElementById('bsr-questionnaire-area').innerHTML = '';
                const resArea = document.getElementById('bsr-result-area');
                resArea.style.display = 'block';

                document.getElementById('bsr-score-val').innerText = data.result.global + '%';
                document.getElementById('bsr-risk-level').innerText = 'Nivel de Riesgo: ' + data.result.level.level;
                document.getElementById('bsr-score-val').style.color = data.result.level.color;

                let modsHtml = '';
                for (const mId in data.result.scores) {
                    const modName = currentCuestionario?.[mId]?.title || currentCuestionario?.[mId]?.name || mId;
                    const mScore = data.result.scores[mId];
                    const sColor = mScore >= 80 ? '#10b981' : (mScore >= 50 ? '#f59e0b' : '#ef4444');
                    modsHtml += `
                        <div style="background: #1e293b; border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 14px 16px; text-align: center; display: flex; flex-direction: column; justify-content: center;">
                            <div style="font-size: 1.4rem; font-weight: 800; color: ${sColor}; margin-bottom: 4px;">${mScore}%</div>
                            <div style="font-size: 0.78rem; color: #cbd5e1; font-weight: 600; line-height: 1.3;">${modName}</div>
                        </div>
                    `;
                }
                document.getElementById('bsr-modules-grid').innerHTML = modsHtml;
                
                const btnVerResp = document.getElementById('btn-ver-respuestas-actual');
                if (btnVerResp && data.evaluation_id) {
                    btnVerResp.onclick = () => verDetalleEvaluacion(data.evaluation_id);
                }

                showToast('🎉 ¡Diagnóstico completado y registrado exitosamente!', 'success');
                const resAreaTop = document.getElementById('bsr-result-area');
                if (resAreaTop) resAreaTop.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                alert(data.message || 'Error al guardar la evaluación.');
            }
        }

        // PANEL CONSULTOR SUMMARY & TABLE
        let evaluationsTable = null;
        async function loadPanelSummary() {
            try {
                const res = await fetch('index.php?api=1&action=get_panel_summary');
                const data = await res.json();
                if (data.success) {
                    if (document.getElementById('stat-empresas')) document.getElementById('stat-empresas').innerText = data.total_empresas;
                    if (document.getElementById('stat-diagnosticos')) document.getElementById('stat-diagnosticos').innerText = data.total_diagnosticos;
                    if (document.getElementById('stat-score-promedio')) document.getElementById('stat-score-promedio').innerText = data.promedio_score + '%';
                }
            } catch (e) {
                console.error("Error al cargar resumen del panel:", e);
            }

            if (document.getElementById('evaluations-table-container')) {
                if (evaluationsTable) {
                    evaluationsTable.setData();
                } else {
                    evaluationsTable = new Tabulator("#evaluations-table-container", {
                        ajaxURL: "index.php?api=1&action=list_evaluations",
                        layout: "fitColumns",
                        placeholder: "<span>No hay evaluaciones registradas.</span>",
                        pagination: "local",
                        paginationSize: 10,
                        columns: [
                            { title: "ID", field: "id", width: 60 },
                            { title: "Razón Social", field: "razon_social", headerFilter: "input" },
                            { title: "RUT", field: "rut" },
                            { title: "Email", field: "email" },
                            { 
                                title: "Score Global", 
                                field: "score", 
                                formatter: cell => {
                                    const val = cell.getValue();
                                    const col = val >= 80 ? '#10b981' : (val >= 50 ? '#f59e0b' : '#ef4444');
                                    return `<strong style="color: ${col}; font-size: 1rem;">${val}%</strong>`;
                                }
                            },
                            { title: "Nivel", field: "nivel" },
                            { title: "Fecha", field: "created_at" },
                            {
                                title: "Acciones",
                                formatter: () => `<button class="btn btn-primary" style="padding: 5px 12px; font-size: 0.8rem; width: auto; display: flex; align-items: center; gap: 4px;"><i class="ti ti-eye"></i> Ver Respuestas</button>`,
                                cellClick: (e, cell) => {
                                    verDetalleEvaluacion(cell.getRow().getData().id);
                                }
                            }
                        ]
                    });
                }
            }
        }

        // EVALUATION DETAIL AND ANSWERS MODAL CONTROLLER
        async function verDetalleEvaluacion(evalId) {
            const modal = document.getElementById('eval-detail-modal');
            const body = document.getElementById('eval-detail-modal-body');
            if (!modal || !body) return;

            modal.classList.add('open');
            body.innerHTML = '<div style="text-align: center; color: #94a3b8; padding: 50px 0;"><div style="font-size: 2rem; color: #6366f1; margin-bottom: 10px;">⏳</div><div>Cargando respuestas y desglose...</div></div>';

            try {
                const res = await fetch(`index.php?api=1&action=get_evaluation&id=${evalId}`);
                const data = await res.json();
                if (!data.success || !data.evaluation) {
                    body.innerHTML = '<div style="color: #ef4444; text-align: center; padding: 30px;">Error al cargar la evaluación.</div>';
                    return;
                }

                const ev = data.evaluation;
                const m1 = ev.m1 || {};
                const score = ev.score || 0;
                const scoreColor = score >= 80 ? '#10b981' : (score >= 50 ? '#f59e0b' : '#ef4444');
                const riskLevel = ev.scores_json?.level?.level || (score >= 80 ? 'Riesgo Bajo' : (score >= 50 ? 'Riesgo Medio' : 'Riesgo Alto'));

                document.getElementById('modal-eval-empresa').innerText = ev.razon_social || 'Empresa Evaluada';
                document.getElementById('modal-eval-meta').innerHTML = `
                    <strong>RUT:</strong> ${ev.rut || 'No registrado'} · 
                    <strong>Dotación:</strong> ${ev.num_workers || m1.num_workers || '-'} trabajadores · 
                    <strong>Sindicato:</strong> ${(ev.has_sindicato || m1.has_sindicato) === 'si' ? 'Sí' : 'No'} · 
                    <strong>Fecha:</strong> ${ev.created_at || '-'}
                `;

                let html = `
                    <!-- Score Summary Banner -->
                    <div style="background: #1e293b; border-radius: 12px; padding: 20px 24px; margin-bottom: 24px; border: 1px solid rgba(255,255,255,0.08); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                        <div>
                            <div style="font-size: 0.82rem; color: #94a3b8; text-transform: uppercase; font-weight: 700; letter-spacing: 0.05em;">Puntaje Global Obtenido</div>
                            <div style="font-size: 2.5rem; font-weight: 900; color: ${scoreColor}; line-height: 1.1; margin-top: 4px;">
                                ${score}% <span style="font-size: 1.1rem; font-weight: 700; color: #f8fafc; margin-left: 8px;">(${riskLevel})</span>
                            </div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 0.8rem; color: #94a3b8;">Nivel de categorización</div>
                            <div style="font-size: 1rem; font-weight: 700; color: #818cf8;">${ev.nivel || 'Estándar'}</div>
                        </div>
                    </div>

                    <!-- Module Scores Grid -->
                    <h4 style="color: #f8fafc; font-size: 1rem; margin-top: 0; margin-bottom: 12px; display: flex; align-items: center; gap: 6px;">
                        <i class="ti ti-layout-grid" style="color: #6366f1;"></i> Cumplimiento por Módulos Evaluados
                    </h4>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 10px; margin-bottom: 28px;">
                `;

                for (const mId in ev.breakdown || {}) {
                    const m = ev.breakdown[mId];
                    const mScore = m.score !== null ? m.score : (ev.scores_json?.scores?.[mId] ?? '-');
                    const numScore = parseInt(mScore, 10);
                    const sCol = isNaN(numScore) ? '#94a3b8' : (numScore >= 80 ? '#10b981' : (numScore >= 50 ? '#f59e0b' : '#ef4444'));

                    html += `
                        <div style="background: rgba(30,41,59,0.7); border: 1px solid rgba(255,255,255,0.06); border-radius: 10px; padding: 12px; text-align: center;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: ${sCol};">${mScore}%</div>
                            <div style="font-size: 0.76rem; color: #cbd5e1; margin-top: 2px; font-weight: 600;">${m.title}</div>
                        </div>
                    `;
                }

                html += `</div>`;

                // Questions and Answers List
                html += `
                    <h4 style="color: #f8fafc; font-size: 1.05rem; margin-top: 0; margin-bottom: 16px; display: flex; align-items: center; gap: 6px; border-top: 1px solid rgba(255,255,255,0.08); padding-top: 20px;">
                        <i class="ti ti-list-check" style="color: #6366f1;"></i> Respuestas Detalladas y Normativa
                    </h4>
                `;

                for (const mId in ev.breakdown || {}) {
                    const m = ev.breakdown[mId];
                    html += `
                        <div style="margin-bottom: 24px; background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 18px;">
                            <div style="font-weight: 800; font-size: 0.95rem; color: #a5b4fc; margin-bottom: 14px; display: flex; align-items: center; gap: 8px;">
                                <i class="ti ti-folder" style="color: #6366f1;"></i> ${m.title}
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 14px;">
                    `;

                    m.questions.forEach((q, qIdx) => {
                        const selOpt = q.selected_option;
                        const optText = selOpt ? selOpt.t : 'No respondida';
                        const optPts = selOpt ? selOpt.p : 0;
                        const optLabel = selOpt && selOpt.l ? selOpt.l + ')' : '';
                        const rc = q.risk === 'a' ? '#ef4444' : (q.risk === 'm' ? '#f59e0b' : '#10b981');
                        const rl = q.risk === 'a' ? 'Alto' : (q.risk === 'm' ? 'Medio' : 'Bajo');

                        html += `
                            <div style="background: #1e293b; border-radius: 10px; padding: 16px; border: 1px solid rgba(255,255,255,0.06);">
                                <div style="display: flex; gap: 8px; align-items: flex-start; margin-bottom: 8px;">
                                    <span style="background: rgba(99,102,241,0.2); color: #818cf8; font-weight: 700; font-size: 0.75rem; padding: 2px 7px; border-radius: 4px; flex-shrink: 0; margin-top: 2px;">#${qIdx + 1}</span>
                                    <span style="background: ${rc}22; color: ${rc}; font-weight: 700; font-size: 0.72rem; padding: 2px 7px; border-radius: 4px; flex-shrink: 0; margin-top: 2px; text-transform: uppercase;">Riesgo ${rl}</span>
                                    <div style="flex: 1;">
                                        <div style="font-weight: 700; font-size: 0.92rem; color: #f8fafc; line-height: 1.4;">${q.text}</div>
                                        ${q.norm ? `<div style="font-size: 0.78rem; color: #94a3b8; margin-top: 3px;"><i class="ti ti-book"></i> ${q.norm}</div>` : ''}
                                    </div>
                                </div>

                                <!-- Selected Answer Box -->
                                <div style="margin-top: 10px; background: rgba(99,102,241,0.12); border: 1px solid #6366f1; border-radius: 8px; padding: 10px 14px; display: flex; justify-content: space-between; align-items: center; gap: 10px;">
                                    <div style="font-size: 0.88rem; color: #f8fafc;">
                                        <strong style="color: #818cf8;">Respuesta seleccionada:</strong> ${optLabel} ${optText}
                                    </div>
                                    <span style="background: #6366f1; color: #fff; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 6px; flex-shrink: 0;">${optPts} pts</span>
                                </div>

                                ${q.cons ? `
                                    <div style="margin-top: 8px; font-size: 0.78rem; color: #94a3b8; display: flex; gap: 6px; align-items: flex-start;">
                                        <i class="ti ti-alert-triangle" style="color: #f59e0b; margin-top: 2px; flex-shrink: 0;"></i>
                                        <span><strong style="color: #fcd34d;">Consecuencia:</strong> ${q.cons}</span>
                                    </div>
                                ` : ''}
                            </div>
                        `;
                    });

                    html += `</div></div>`;
                }

                body.innerHTML = html;
            } catch (e) {
                console.error(e);
                body.innerHTML = '<div style="color: #ef4444; text-align: center; padding: 30px;">Error de conexión al cargar el detalle de la evaluación.</div>';
            }
        }

        function closeEvalDetailModal() {
            document.getElementById('eval-detail-modal')?.classList.remove('open');
        }

        // USER PERMISSIONS TABLE
        function loadUsersList() {
            if (!document.getElementById('users-table-container')) return;

            new Tabulator("#users-table-container", {
                ajaxURL: "index.php?api=1&action=list_users",
                layout: "fitColumns",
                placeholder: "<span>No hay usuarios registrados.</span>",
                columns: [
                    { title: "ID", field: "id", width: 60 },
                    { title: "Nombre", field: "name" },
                    { title: "Email", field: "email" },
                    { title: "Rol", field: "role", formatter: cell => `<span class="badge-role ${cell.getValue().toLowerCase()}">${cell.getValue()}</span>` },
                    {
                        title: "Permiso: Tareas",
                        formatter: cell => cell.getRow().getData().permissions.perm_tasks 
                            ? '<span style="color: #10b981; font-weight: 700;">✅ Habilitado</span>' 
                            : '<span style="color: #ef4444; font-weight: 700;">❌ Deshabilitado</span>'
                    },
                    {
                        title: "Permiso: Autodiagnóstico",
                        formatter: cell => cell.getRow().getData().permissions.perm_bsr_score 
                            ? '<span style="color: #10b981; font-weight: 700;">✅ Habilitado</span>' 
                            : '<span style="color: #ef4444; font-weight: 700;">❌ Deshabilitado</span>'
                    },
                    {
                        title: "Acciones",
                        formatter: cell => `<button class="btn btn-primary" style="padding: 4px 10px; font-size: 0.78rem; width: auto;">Modificar Permisos</button>`,
                        cellClick: async (e, cell) => {
                            const u = cell.getRow().getData();
                            const toggleTasks = confirm(`¿${u.permissions.perm_tasks ? 'Deshabilitar' : 'Habilitar'} el Módulo de Tareas para ${u.name}?`);
                            const newPerms = {
                                ...u.permissions,
                                perm_tasks: toggleTasks ? !u.permissions.perm_tasks : u.permissions.perm_tasks
                            };
                            await fetch('index.php?api=1&action=update_user_permissions', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/json' },
                                body: JSON.stringify({ user_id: u.id, role: u.role, permissions: newPerms })
                            });
                            loadUsersList();
                        }
                    }
                ]
            });
        }

        // INITIALIZE APPLICATION ON LOAD
        document.addEventListener('DOMContentLoaded', () => {
            initTasksTable();
            checkAndShowDraftBanner();
        });
    </script>
</body>
</html>
