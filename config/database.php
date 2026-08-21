<?php

class Database {
    private static $connection = null;

    /**
     * Get the database PDO connection instance
     * 
     * @return PDO
     * @throws PDOException
     */
    public static function getConnection() {
        if (self::$connection === null) {
            // Load environment variables from .env file if it exists
            self::loadEnv();

            $host = getenv('DB_HOST') ?: '127.0.0.1';
            $port = getenv('DB_PORT') ?: '3306';
            $dbName = getenv('DB_NAME') ?: 'app_db';
            $username = getenv('DB_USER') ?: 'app_user';
            $password = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : 'app_password';

            $dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8mb4";
            
            // Connect to database using PDO
            self::$connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        }

        return self::$connection;
    }

    /**
     * Load variables from local .env file
     */
    private static function loadEnv() {
        $envPath = dirname(__DIR__) . '/.env';
        if (file_exists($envPath)) {
            $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                $line = trim($line);
                if ($line === '' || strpos($line, '#') === 0) {
                    continue; // Skip comments and empty lines
                }
                
                if (strpos($line, '=') !== false) {
                    list($name, $value) = explode('=', $line, 2);
                    $name = trim($name);
                    $value = trim($value);
                    
                    // Remove quotes if present
                    $value = trim($value, "\"'");
                    
                    if (getenv($name) === false) {
                        putenv("{$name}={$value}");
                        $_ENV[$name] = $value;
                        $_SERVER[$name] = $value;
                    }
                }
            }
        }
    }
}
