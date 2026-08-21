-- Create Database if not exists
CREATE DATABASE IF NOT EXISTS `app_db`;
USE `app_db`;

-- Users table with Roles and Permissions
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password_hash` VARCHAR(255) NOT NULL,
    `role` ENUM('ADMIN', 'CLIENT') NOT NULL DEFAULT 'CLIENT',
    `permissions_json` TEXT NULL,
    `company_name` VARCHAR(255) NULL,
    `rut` VARCHAR(50) NULL,
    `num_workers` INT DEFAULT 10,
    `has_sindicato` VARCHAR(10) DEFAULT 'no',
    `expert_mode` TINYINT(1) DEFAULT 0,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Tasks table (Modulo Gestor de Tareas)
CREATE TABLE IF NOT EXISTS `tasks` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NULL,
    `status` ENUM('pending', 'completed') DEFAULT 'pending',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Seed tasks for testing
INSERT INTO `tasks` (`title`, `description`, `status`) VALUES
('Configurar Servidor PHP 8.3 & MySQL', 'Inicializar estructuras de carpetas y base de datos relacional.', 'completed'),
('Diseñar Interfaz Modular con Roles', 'Implementar navegación responsiva y gestión de visibilidad por permisos.', 'completed'),
('Verificar Diagnósticos BSR Score', 'Validar cálculo de puntaje de riesgo laboral y generación de reportes.', 'pending')
ON DUPLICATE KEY UPDATE id=id;

-- Evaluations table (Autodiagnósticos BSR Score)
CREATE TABLE IF NOT EXISTS `evaluations` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NULL,
    `razon_social` VARCHAR(255) NOT NULL,
    `rut` VARCHAR(50) NULL,
    `email` VARCHAR(255) NOT NULL,
    `num_workers` INT DEFAULT 0,
    `has_sindicato` VARCHAR(10) DEFAULT 'no',
    `expert_mode` TINYINT(1) DEFAULT 0,
    `score` INT NOT NULL,
    `nivel` VARCHAR(50) NOT NULL,
    `scores_json` TEXT NULL,
    `answers` LONGTEXT NOT NULL,
    `m1` TEXT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Seed default users
-- Admin User: admin@bsr.cl / password: password123
-- Client User: empresa@cliente.cl / password: password123
INSERT INTO `users` (`name`, `email`, `password_hash`, `role`, `permissions_json`, `company_name`, `rut`, `num_workers`, `has_sindicato`, `expert_mode`) VALUES
('Consultor BSR Admin', 'admin@bsr.cl', '$2y$10$4eojCIBk3VLG3H124N84YO9fNJHXOhgUY/xZxChubhpAWAB996GAO', 'ADMIN', '{"perm_tasks":true,"perm_bsr_score":true,"perm_bsr_panel":true,"perm_admin_users":true}', 'BSR Legal Advisory', '76.123.456-7', 50, 'si', 1),
('Empresa Ejemplo S.A.', 'empresa@cliente.cl', '$2y$10$4eojCIBk3VLG3H124N84YO9fNJHXOhgUY/xZxChubhpAWAB996GAO', 'CLIENT', '{"perm_tasks":false,"perm_bsr_score":true,"perm_bsr_panel":false,"perm_admin_users":false}', 'Empresa Ejemplo S.A.', '77.987.654-3', 25, 'no', 0)
ON DUPLICATE KEY UPDATE id=id;
