-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para demo
CREATE DATABASE IF NOT EXISTS `demo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `demo`;

-- Volcando estructura para tabla demo.divisiones
CREATE TABLE IF NOT EXISTS `divisiones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dsup_id` int(11) DEFAULT NULL,
  `nombre_Dsup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_subd` int(11) DEFAULT NULL,
  `nivel` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `embajador` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0-Inactivo/1-Activo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla demo.divisiones: ~5 rows (aproximadamente)
DELETE FROM `divisiones`;
/*!40000 ALTER TABLE `divisiones` DISABLE KEYS */;
INSERT INTO `divisiones` (`id`, `nombre`, `Dsup_id`, `nombre_Dsup`, `num_subd`, `nivel`, `cantidad`, `embajador`, `estado`, `created_at`, `updated_at`) VALUES
	(1, 'CEO', NULL, NULL, 2, 1, 1, 'David Lopez', '1', NULL, NULL),
	(2, 'Direccion General', 1, 'CEO', 2, 2, 3, 'Luis Lopez', '1', NULL, NULL),
	(3, 'Division de Marketing', 1, 'CEO', 2, 2, 2, 'Maria Lopez', '1', NULL, NULL),
	(4, 'Produccion', 3, 'Division de Marketing', 0, 3, 10, 'Cesar Lopez', '1', NULL, NULL),
	(5, 'Diseñp', 3, 'Division de Marketing', 0, 3, 10, 'Luna Lopez', '1', NULL, NULL);
/*!40000 ALTER TABLE `divisiones` ENABLE KEYS */;

-- Volcando estructura para tabla demo.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla demo.migrations: ~1 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2021_10_19_230838_create_division_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
