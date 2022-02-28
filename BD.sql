-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6321
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para asistencia
CREATE DATABASE IF NOT EXISTS `asistencia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `asistencia`;

-- Volcando estructura para tabla asistencia.asistencia_docente
CREATE TABLE IF NOT EXISTS `asistencia_docente` (
  `dni` char(9) NOT NULL DEFAULT '0',
  `fechaMarcacion` date NOT NULL,
  `HoraInicio` varchar(8) NOT NULL DEFAULT '',
  `HoraFin` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`dni`,`fechaMarcacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla asistencia.docente
CREATE TABLE IF NOT EXISTS `docente` (
  `dni` char(9) NOT NULL,
  `apellidos` varchar(80) NOT NULL DEFAULT '',
  `nombre` varchar(70) NOT NULL DEFAULT '',
  PRIMARY KEY (`dni`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
