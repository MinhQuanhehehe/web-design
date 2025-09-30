-- SQL file for PHP User Management System
-- Database: LoginReg
-- Table: table1

-- Create database
CREATE DATABASE IF NOT EXISTS `LoginReg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LoginReg`;

-- Create table1 for user data
CREATE TABLE IF NOT EXISTS `table1` (
                                        `id` int(11) NOT NULL AUTO_INCREMENT,
                                        `firstname` varchar(100) NOT NULL,
                                        `lastname` varchar(100) NOT NULL,
                                        `email` varchar(150) NOT NULL,
                                        `contact` varchar(20) NOT NULL,
                                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `table2` (
                                        `id` int(11) NOT NULL AUTO_INCREMENT,
                                        `model` varchar(20) NOT NULL,
                                        `cpu` varchar(30) NOT NULL,
                                        `ram` varchar(20) NOT NULL,
                                        `ssd` varchar(20) NOT NULL,
                                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO `table1` (`firstname`, `lastname`, `email`, `contact`) VALUES
                                                                       ('John', 'Doe', 'john.doe@example.com', '1234567890'),
                                                                       ('Jane', 'Smith', 'jane.smith@example.com', '0987654321'),
                                                                       ('Mike', 'Johnson', 'mike.johnson@example.com', '5555555555');

INSERT INTO table2 (model, cpu, ram, ssd) VALUES
                                              ('Dell XPS 13', 'Intel Core i7-1360P', '16GB DDR5', '512GB SSD'),
                                              ('MacBook Air M2', 'Apple M2 8-core', '8GB Unified', '256GB SSD'),
                                              ('ASUS ZenBook 14', 'Intel Core i5-1240P', '8GB DDR5', '512GB SSD'),
                                              ('Lenovo ThinkPad X1', 'Intel Core i7-1260P', '16GB DDR5', '1TB SSD'),
                                              ('HP Spectre x360', 'Intel Core i7-1255U', '16GB DDR4', '512GB SSD');
