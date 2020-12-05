-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.18 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para inventario_blast
CREATE DATABASE IF NOT EXISTS `inventario_blast` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `inventario_blast`;

-- Volcando estructura para tabla inventario_blast.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `talla_forma` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `nota` varchar(100) DEFAULT NULL,
  `tmsp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla inventario_blast.articulos: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`id`, `nombre`, `color`, `talla_forma`, `material`, `cantidad`, `nota`, `tmsp`) VALUES
	(1, NULL, 'rojo', 'L', 'polyester', 36, NULL, '2020-12-04 16:29:53'),
	(3, 'Sueter', 'blanco', 'L', '65% Polyester', 44, NULL, '2020-12-04 16:37:50'),
	(4, 'Sueter', 'blanco', 'M', '65% Polyester', 87, NULL, '2020-12-04 16:38:06'),
	(5, 'Sueter', 'blanco', 'S', '65% Polyester', 77, NULL, '2020-12-04 16:38:13'),
	(6, 'Sueter', 'blanco', 'XL', '65% Polyester', 94, NULL, '2020-12-04 16:38:30'),
	(7, 'Sueter', 'gris', 'XL', '65% Polyester', 92, NULL, '2020-12-04 16:38:45'),
	(8, 'Sueter', 'gris', 'L', '65% Polyester', 90, NULL, '2020-12-04 16:38:55'),
	(9, 'Sueter', 'gris', 'M', '65% Polyester', 89, NULL, '2020-12-04 16:44:43'),
	(10, 'Taza', 'Blanca', '', '', 15, NULL, '2020-12-04 16:39:44'),
	(11, 'Termo', 'Blanca', '', '', 8, NULL, '2020-12-04 16:39:59'),
	(12, 'Mouse pad', '', '', '', 4, NULL, '2020-12-04 16:40:33');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

-- Volcando estructura para tabla inventario_blast.historial
CREATE TABLE IF NOT EXISTS `historial` (
  `tiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `articulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla inventario_blast.historial: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` (`tiempo`, `accion`, `articulo`) VALUES
	('2020-12-04 16:29:53', 'UPDATE', NULL),
	('2020-12-04 16:30:40', 'INSERT', NULL),
	('2020-12-04 16:30:50', 'DELETE', NULL),
	('2020-12-04 16:37:50', 'INSERT', NULL),
	('2020-12-04 16:38:06', 'INSERT', NULL),
	('2020-12-04 16:38:13', 'INSERT', NULL),
	('2020-12-04 16:38:30', 'INSERT', NULL),
	('2020-12-04 16:38:45', 'INSERT', NULL),
	('2020-12-04 16:38:55', 'INSERT', NULL),
	('2020-12-04 16:39:11', 'INSERT', NULL),
	('2020-12-04 16:39:44', 'INSERT', NULL),
	('2020-12-04 16:39:59', 'INSERT', NULL),
	('2020-12-04 16:40:33', 'INSERT', NULL),
	('2020-12-04 16:44:43', 'UPDATE', 'Sueter');
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;

-- Volcando estructura para tabla inventario_blast.retiros
CREATE TABLE IF NOT EXISTS `retiros` (
  `id_producto` int(11) NOT NULL,
  `cantidad_retiro` int(11) DEFAULT NULL,
  `cliente` varchar(30) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `anular` tinyint(4) DEFAULT '0',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `id_producto` (`id_producto`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `retiros_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `articulos` (`id`),
  CONSTRAINT `retiros_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla inventario_blast.retiros: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `retiros` DISABLE KEYS */;
INSERT INTO `retiros` (`id_producto`, `cantidad_retiro`, `cliente`, `id_usuario`, `anular`, `fecha`) VALUES
	(4, 4, 'Banistmo', 1, 0, '2020-12-05 15:42:14'),
	(6, 5, 'BBrands', 1, 0, '2020-12-05 16:05:55');
/*!40000 ALTER TABLE `retiros` ENABLE KEYS */;

-- Volcando estructura para tabla inventario_blast.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` blob NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla inventario_blast.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
	(1, 'root', _binary 0x243279243130246F386F4F3444764F4779356679306F5539723254444F44737449794E6876426C4142737732427559794A4D4E4B6854424349655969);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para disparador inventario_blast.sueters_after_delete
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `sueters_after_delete` AFTER DELETE ON `articulos` FOR EACH ROW BEGIN
INSERT INTO historial (accion, articulo) VALUES ('DELETE',OLD.nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador inventario_blast.sueters_after_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `sueters_after_insert` AFTER INSERT ON `articulos` FOR EACH ROW BEGIN
insert into historial (accion, articulo) values('INSERT', NEW.nombre);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Volcando estructura para disparador inventario_blast.sueters_after_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `sueters_after_update` AFTER UPDATE ON `articulos` FOR EACH ROW begin
if NEW.tmsp <> OLD.tmsp then
insert into historial values(NEW.tmsp, 'UPDATE',NEW.nombre);
end if;
end//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
