<?php
// Database Initialization Script
$envPath = __DIR__ . '/../.env';
$host = '127.0.0.1';
$port = '3306';
$username = 'root';
$password = '';

if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim(trim($value), "\"'");
            if ($name === 'DB_HOST') $host = $value;
            if ($name === 'DB_PORT') $port = $value;
            if ($name === 'DB_USER') $username = $value;
            if ($name === 'DB_PASSWORD') $password = $value;
        }
    }
}

header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicialización de Base de Datos</title>
    <style>
        body {
            background-color: #0b0f19;
            color: #f8fafc;
            font-family: system-ui, -apple-system, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .card {
            background: rgba(30, 41, 59, 0.45);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 30px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            text-align: center;
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #a5b4fc 0%, #6366f1 50%, #4338ca 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .status {
            padding: 12px;
            border-radius: 8px;
            margin: 20px 0;
            font-weight: 600;
        }
        .status-success {
            background: rgba(16, 185, 129, 0.15);
            color: #10b981;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }
        .status-danger {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
            text-align: left;
            font-family: monospace;
            font-size: 0.85rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        .btn {
            display: inline-block;
            background: #6366f1;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.2s;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #4f46e5;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Instalador de Base de Datos</h1>
        
        <?php
        try {
            $dsn = "mysql:host={$host};port={$port};charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
            
            $schemaPath = __DIR__ . '/../database/schema.sql';
            if (!file_exists($schemaPath)) {
                throw new Exception("No se encontró el archivo de esquema SQL en: " . $schemaPath);
            }
            
            $sql = file_get_contents($schemaPath);
            $pdo->exec($sql);
            
            echo '<div class="status status-success">¡Base de datos y tablas creadas con éxito!</div>';
            echo '<p>Se han importado los datos semilla para probar.</p>';
            echo '<a href="index.php" class="btn">Ir al Dashboard</a>';
            
        } catch (Exception $e) {
            echo '<div class="status status-danger">Error: ' . htmlspecialchars($e->getMessage()) . '</div>';
            echo '<p>Verifica que MySQL esté encendido en tu panel de Laragon y que el archivo .env tenga las credenciales correctas.</p>';
            echo '<button onclick="window.location.reload();" class="btn">Reintentar</button>';
        }
        ?>
    </div>
</body>
</html>
