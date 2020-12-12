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

-- Volcando estructura para procedimiento inventario_blast.add_retiro
DELIMITER //
CREATE PROCEDURE `add_retiro`(
	IN `_id` INT,
	IN `_cant` INT,
	IN `_cliente` VARCHAR(30),
	IN `_user` VARCHAR(15),
	IN `_cant_nueva` INT,
	IN `user_id` INT
)
BEGIN
INSERT INTO retiros (id_producto, cantidad_retiro, cliente, id_usuario, nom_usuario) VALUES(_id,_cant,_cliente,_user,user_id);
UPDATE articulos SET cantidad = _cant_nueva WHERE id = _id;
END//
DELIMITER ;

-- Volcando estructura para procedimiento inventario_blast.anular_retiro
DELIMITER //
CREATE PROCEDURE `anular_retiro`(
	IN `_id_retiro` INT,
	IN `id_art` INT,
	IN `cant_total` INT
)
BEGIN
UPDATE retiros SET anular = 1 WHERE id_retiro = _id_retiro;
UPDATE articulos SET cantidad = cant_total WHERE id = id_art;
END//
DELIMITER ;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla inventario_blast.articulos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` (`id`, `nombre`, `color`, `talla_forma`, `material`, `cantidad`, `nota`, `tmsp`) VALUES
	(1, 'camiseta', 'rojo', 'M', 'polyester', 65, 'test nuevo', '2020-12-11 14:42:29'),
	(3, 'Sueter', 'blanco', 'L', '65% Polyester', 666, '', '2020-12-12 09:50:43'),
	(4, 'Sueter', 'blanco', 'M', '65% Polyester', 84, NULL, '2020-12-12 10:04:34'),
	(5, 'Sueter', 'blanco', 'S', '65% Polyester', 74, NULL, '2020-12-11 11:45:42'),
	(6, 'Sueter', 'blanco', 'XL', '65% Polyester', 94, NULL, '2020-12-04 16:38:30'),
	(7, 'Sueter', 'gris', 'XL', '65% Polyester', 35, NULL, '2020-12-11 11:29:20'),
	(8, 'Sueter', 'gris', 'L', '65% Polyester', 80, NULL, '2020-12-07 11:49:40'),
	(9, 'Sueter', 'gris', 'M', '65% Polyester', 89, NULL, '2020-12-04 16:44:43'),
	(10, 'Taza', 'Blanca', '', '', 18, '', '2020-12-11 14:29:10');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;

-- Volcando estructura para procedimiento inventario_blast.del_articulo
DELIMITER //
CREATE PROCEDURE `del_articulo`(
	IN `_id` INT
)
BEGIN
DELETE FROM `inventario_blast`.`articulos` WHERE  `id`= _id;
END//
DELIMITER ;

-- Volcando estructura para tabla inventario_blast.historial
CREATE TABLE IF NOT EXISTS `historial` (
  `tmsp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `articulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla inventario_blast.historial: ~29 rows (aproximadamente)
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` (`tmsp`, `accion`, `articulo`) VALUES
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
	('2020-12-04 16:44:43', 'UPDATE', 'Sueter'),
	('2020-12-07 11:44:07', 'UPDATE', 'camiseta'),
	('2020-12-07 11:47:06', 'UPDATE', 'camiseta'),
	('2020-12-07 11:48:55', 'UPDATE', 'camiseta'),
	('2020-12-07 11:49:27', 'UPDATE', 'camiseta'),
	('2020-12-07 11:49:40', 'UPDATE', 'Sueter'),
	('2020-12-07 11:51:12', 'UPDATE', 'Mouse pad'),
	('2020-12-07 11:51:29', 'UPDATE', 'camiseta'),
	('2020-12-07 11:53:18', 'UPDATE', 'camiseta'),
	('2020-12-07 11:58:10', 'UPDATE', 'Sueter'),
	('2020-12-07 11:58:42', 'UPDATE', 'Sueter'),
	('2020-12-07 12:51:03', 'UPDATE', 'camiseta'),
	('2020-12-07 13:02:47', 'UPDATE', 'camiseta'),
	('2020-12-07 13:04:51', 'UPDATE', 'camiseta'),
	('2020-12-07 13:18:55', 'DELETE', 'Mouse pad'),
	('2020-12-07 13:24:43', 'DELETE', 'Termo'),
	('2020-12-11 11:29:20', 'UPDATE', 'Sueter'),
	('2020-12-11 11:39:22', 'UPDATE', 'camiseta'),
	('2020-12-11 11:42:50', 'UPDATE', 'camiseta'),
	('2020-12-11 11:43:28', 'UPDATE', 'Sueter'),
	('2020-12-11 11:45:42', 'UPDATE', 'Sueter'),
	('2020-12-11 11:50:11', 'UPDATE', 'camiseta'),
	('2020-12-11 13:28:53', 'UPDATE', 'Sueter'),
	('2020-12-11 13:33:44', 'UPDATE', 'Sueter'),
	('2020-12-11 14:24:52', 'INSERT', 'Camisetas'),
	('2020-12-11 14:29:10', 'UPDATE', 'Taza'),
	('2020-12-11 14:42:29', 'UPDATE', 'camiseta'),
	('2020-12-11 14:43:07', 'DELETE', 'Camisetas'),
	('2020-12-12 09:50:43', 'UPDATE', 'Sueter'),
	('2020-12-12 10:04:34', 'UPDATE', 'Sueter');
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;

-- Volcando estructura para procedimiento inventario_blast.read_retiros
DELIMITER //
CREATE PROCEDURE `read_retiros`()
SELECT retiros.id_retiro, articulos.id, articulos.cantidad, articulos.nombre, articulos.talla_forma, articulos.color, retiros.cantidad_retiro, retiros.cliente, retiros.fecha, usuarios.username, retiros.anular FROM ((retiros inner join articulos  on retiros.id_producto = articulos.id) inner join usuarios on retiros.id_usuario = usuarios.id) ORDER BY retiros.anular//
DELIMITER ;

-- Volcando estructura para tabla inventario_blast.retiros
CREATE TABLE IF NOT EXISTS `retiros` (
  `id_retiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad_retiro` int(11) DEFAULT NULL,
  `cliente` varchar(30) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `anular` tinyint(4) DEFAULT '0',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nom_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id_retiro`),
  KEY `id_producto` (`id_producto`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `retiros_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `articulos` (`id`),
  CONSTRAINT `retiros_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla inventario_blast.retiros: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `retiros` DISABLE KEYS */;
INSERT INTO `retiros` (`id_retiro`, `id_producto`, `cantidad_retiro`, `cliente`, `id_usuario`, `anular`, `fecha`, `nom_usuario`) VALUES
	(1, 4, 4, 'Banistmo', 1, 1, '2020-12-05 15:42:14', ''),
	(2, 6, 5, 'BBrands', 1, 0, '2020-12-05 16:05:55', ''),
	(3, 1, 2, '', 1, 1, '2020-12-07 14:29:57', 'root'),
	(4, 1, 4, 'rodelag', 1, 0, '2020-12-11 11:09:44', 'root'),
	(5, 1, 5, 'TVN', 1, 0, '2020-12-11 11:50:11', '1'),
	(6, 4, 7, 'pruebas', 1, 0, '2020-12-11 13:28:53', '1'),
	(7, 1, 5, 'test', 1, 0, '2020-12-12 09:05:04', 'root');
/*!40000 ALTER TABLE `retiros` ENABLE KEYS */;

-- Volcando estructura para procedimiento inventario_blast.upd_articulo
DELIMITER //
CREATE PROCEDURE `upd_articulo`(
	IN `_id` int,
	IN `_nombre` varchar(20),
	IN `_color` varchar(20),
	IN `_talla` VARCHAR(5),
	IN `_material` varchar(30),
	IN `_cantidad` int,
	IN `_nota` VARCHAR(100)
)
begin
update articulos set nombre = _nombre, color = _color, talla_forma = _talla, material = _material, cantidad = _cantidad, nota = _nota where id = _id;
end//
DELIMITER ;

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
insert into historial (tmsp, accion, articulo) values(NEW.tmsp, 'UPDATE',NEW.nombre);
end if;
end//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
