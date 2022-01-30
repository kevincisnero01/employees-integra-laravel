-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para db-test-integra
CREATE DATABASE IF NOT EXISTS `db-test-integra` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;
USE `db-test-integra`;

-- Volcando estructura para tabla db-test-integra.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrated` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla db-test-integra.employees: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `last_name`, `name`, `phone`, `email`, `contrated`, `created_at`, `updated_at`) VALUES
	(1, 'Cisnero', 'Kevin', '+584161234567', 'test@gmail.com', '2021-01-02', '2022-01-30 17:31:01', '2022-01-30 17:31:10'),
	(2, 'Gonzalez', 'Yheisson', '+584123404757', 'yhei@gmail.com', '2021-01-11', '2022-01-30 17:30:35', '2022-01-30 17:30:35'),
	(3, 'Gonzalez', 'Maria', '+584161234567', 'mari@gmail.com', '2022-01-02', '2022-01-30 21:23:36', '2022-01-30 21:23:36'),
	(4, 'Torres', 'Jose', '+584161234567', 'jose@gmail.com', '2022-01-03', '2022-01-30 21:24:59', '2022-01-30 21:24:59'),
	(5, 'Guzman', 'Eduardo', '+584161234567', 'eduardo@gmail.com', '2022-01-04', '2022-01-30 21:25:07', '2022-01-30 21:25:07'),
	(6, 'Martinez', 'Maria', '+584161234567', 'maria@gmail.com', '2022-01-30', '2022-01-30 17:36:50', NULL);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Volcando estructura para tabla db-test-integra.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla db-test-integra.migrations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2022_01_30_135715_create_employees_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
