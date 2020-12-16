-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: inventario_blast
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `talla_forma` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `material` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `nota` varchar(100) DEFAULT NULL,
  `tmsp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES (1,'Taza','Negro','Conica','',10,'','2020-12-16 14:00:13'),(2,'Termos ','Blanco',NULL,'Plastico',8,NULL,'2020-12-16 13:46:53'),(3,'Tazas grandes','Transparente',NULL,'Vidrio',11,NULL,'2020-12-16 13:46:53'),(4,'Sueter cuello V','Gris','Medium','65% Poliester - 35% Algodon',100,NULL,'2020-12-16 13:46:53'),(5,'Sueter cuello V','Gris','Small','65% Poliester - 35% Algodon',93,NULL,'2020-12-16 13:46:53'),(6,'Sueter cuello V','Gris','Xlarge','65% Poliester - 35% Algodon',94,NULL,'2020-12-16 13:46:53'),(7,'Sueter cuello V','Gris','Large','65% Poliester - 35% Algodon',90,NULL,'2020-12-16 13:46:53'),(8,'Sueter cuello V','Negro','Small','65% Poliester - 35% Algodon',92,NULL,'2020-12-16 13:46:53'),(9,'Sueter cuello V','Negro','Medium','65% Poliester - 35% Algodon',90,NULL,'2020-12-16 13:46:53'),(10,'Sueter cuello V','Negro','Large','65% Poliester - 35% Algodon',80,NULL,'2020-12-16 13:46:53'),(11,'Sueter cuello V','Negro','Xlarge','65% Poliester - 35% Algodon',93,NULL,'2020-12-16 13:46:53'),(12,'Sueter cuello V','Navy','Small','65% Poliester - 35% Algodon',65,NULL,'2020-12-16 13:46:53'),(13,'Sueter cuello V','Navy','Medium','65% Poliester - 35% Algodon',90,NULL,'2020-12-16 13:46:53'),(14,'Sueter cuello V','Navy','Large','65% Poliester - 35% Algodon',98,NULL,'2020-12-16 13:46:53'),(15,'Sueter cuello V','Navy','Xlarge','65% Poliester - 35% Algodon',97,NULL,'2020-12-16 13:46:53'),(16,'Sueter cuello V','Blanco','Small','100% Poliester ',70,NULL,'2020-12-16 13:46:53'),(17,'Sueter cuello V','Blanco','Medium','100% Poliester ',60,NULL,'2020-12-16 13:46:53'),(18,'Sueter cuello V','Blanco','Large','100% Poliester ',78,NULL,'2020-12-16 13:46:53'),(19,'Sueter cuello V','Blanco','Xlarge','100% Poliester ',84,NULL,'2020-12-16 13:46:53');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `sueters_after_insert` AFTER INSERT ON `articulos` FOR EACH ROW BEGIN
insert into historial (accion, articulo, id_articulo) values('INSERT', NEW.nombre, NEW.id);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`superUser`@`localhost`*/ /*!50003 TRIGGER `sueters_after_update` AFTER UPDATE ON `articulos` FOR EACH ROW begin
if NEW.tmsp <> OLD.tmsp then
insert into historial (tmsp, accion, articulo,id_articulo) values(NEW.tmsp, 'UPDATE',NEW.nombre, NEW.id);
end if;
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `sueters_after_delete` AFTER DELETE ON `articulos` FOR EACH ROW BEGIN
INSERT INTO historial (accion, articulo, id_articulo) VALUES ('DELETE',OLD.nombre,OLD.id);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `articulos_oficina`
--

DROP TABLE IF EXISTS `articulos_oficina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulos_oficina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `id_oficina` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_oficina` (`id_oficina`),
  CONSTRAINT `articulos_oficina_ibfk_1` FOREIGN KEY (`id_oficina`) REFERENCES `oficinas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=298 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos_oficina`
--

LOCK TABLES `articulos_oficina` WRITE;
/*!40000 ALTER TABLE `articulos_oficina` DISABLE KEYS */;
INSERT INTO `articulos_oficina` VALUES (1,'Computadora',NULL,NULL,'Microsoft',1,100,1),(2,'Monitor','Samsung',NULL,NULL,1,NULL,1),(3,'Mouse','Microsoft',NULL,NULL,1,NULL,1),(4,'Teclado ','Compaq',NULL,NULL,1,NULL,1),(5,'Interfaz de audio','ZOOM','U22',NULL,1,NULL,1),(6,'Regleta','Master Electrician ',NULL,NULL,1,NULL,1),(7,'Bocina','Wharfedale','Diamon 8.1 Pro-Active ',NULL,1,NULL,1),(8,'Hum eliminator','Allen Avionics ','HEC-2000',NULL,2,85,1),(9,'Telefono fijo','Panasonic ','kx-tf730',NULL,1,NULL,1),(10,'Aire acondicionado ','Carrier ',NULL,NULL,1,NULL,1),(11,'AC/DC Adaptador','Mean Well','GP50A13D','',1,25,1),(12,'Consola de Radio','Arrakis Systems Inc.','ARC-10',NULL,1,NULL,1),(13,'Transmisor','OMB','MR DIG Platinum','Hay dos dañados',6,NULL,1),(14,'Transmisor ','OMB','MT DIG Platinum ',NULL,3,NULL,1),(15,'Transmisor','OMB','EM 2030 ',NULL,1,NULL,1),(16,'Transmisor','RVR','RXRL-NV',NULL,2,NULL,1),(17,'Gabinete para transmisores',NULL,NULL,'Color azul',1,NULL,1),(18,'Consola de radio ','AEQ','Bravo 67G74',NULL,1,NULL,1),(19,'Analizador de microondas ','AVCOM','PSA-65C','1250 MHz',1,NULL,1),(20,'Grabadora de dos pistas','TASCAM','3030 Serial. 10011891','Analoga',1,NULL,1),(21,'Stand de Microfono ','PROEL',NULL,NULL,1,NULL,1),(22,'Stand de microfono',NULL,NULL,NULL,1,NULL,1),(23,'Microfono SAMSON','Q7',NULL,NULL,1,NULL,1),(24,'Stand de micro ','REMAX',NULL,NULL,1,NULL,1),(25,'Microfono ','SHURE','P658',NULL,1,NULL,1),(26,'Stand de microfono pequeño',NULL,NULL,NULL,1,NULL,1),(27,'Amplificador','Audio Arts Engineering ','8400',NULL,1,NULL,1),(28,'Fuente de poder','AudioArts ','PS-6040',NULL,1,NULL,1),(29,'Consola de Radio ','AudioArts Engineering ','R55e',NULL,1,NULL,1),(30,'Pedestal amplificado ','SKY','CSM-540',NULL,1,NULL,1),(31,'Stand de microfono pequeño ',NULL,NULL,'Pequeño',1,NULL,1),(32,'Teclado','Apple','PRO',NULL,1,NULL,1),(33,'Estuche de Guitarra ','CNB',NULL,NULL,1,NULL,1),(34,'Bateria (Instrumento)','Ludwig','Accent CS','Color dorado',1,NULL,1),(35,'Kit de platillos','Zidjian','Planet Z',NULL,1,NULL,1),(36,'Pedal de bombo ','TKO',NULL,NULL,1,NULL,1),(37,'Computadora','IMAC','Apple',NULL,1,NULL,1),(38,'Stand de microfono ',NULL,'HM-50','En caja',3,NULL,1),(39,'Transmisor','RVR ','PJRL40/1',NULL,1,NULL,1),(40,'Transmisor','Moseley','PCL 6010',NULL,1,NULL,1),(41,'Puerta de Enlace analoga','ITS Telecom','CGW-T',NULL,1,NULL,1),(42,'APT','WorldCast Systems',NULL,NULL,3,NULL,1),(43,'Reproductor DVD','LG','DVZ-9411N',NULL,1,NULL,1),(44,'Controlador ','Miami Braker ','X4130',NULL,1,NULL,1),(45,'Panel para brakers','OMB',NULL,NULL,1,NULL,1),(46,'Enlaces APT','World Cast Horizon ',NULL,NULL,3,NULL,1),(47,'Contador universal','OMB','Goldstar',NULL,1,NULL,1),(48,'Instant Replay','360 Systems ','DR-552-24',NULL,1,NULL,1),(49,'Crossover digital ','American Bass','ARX-3.0R',NULL,1,NULL,1),(50,'Reproductor Blu-Ray','Sony','BDP-51100',NULL,1,NULL,1),(51,'Divisor de Señal HDMI 2x8',NULL,NULL,'Color negro',1,NULL,1),(52,'Controlador','Behringer','Ultra drive pro DCX2496',NULL,1,NULL,1),(53,'Panel nexys ll VDO',NULL,NULL,NULL,1,NULL,1),(54,'Luz de escenario','Big Dipper','LM70LG',NULL,1,NULL,1),(55,'Controlador DMX','ZYD','DMX512',NULL,1,NULL,1),(56,'Luz de escenario ','Big Dipper','LP005',NULL,1,NULL,1),(57,'Luz rotaria pequeña','Big Dipper',NULL,NULL,1,NULL,1),(58,'Maquina de Humo ','MTE Audio','900-FMB',NULL,1,NULL,1),(59,'Osciloscopio','BK precision ','2190 Serial. 194-01115','100 MHz',1,NULL,1),(60,'Medidor de frecuencia y poder','BIRD','4715 Serial. 12667','200 Amps',1,NULL,1),(61,'Medidor de frecuencia y poder','BIRD','4314B Serial. 5002',NULL,1,NULL,1),(62,'Transmisor portatil RPU','OMB','MRI20',NULL,1,NULL,1),(63,'Cajas con libro \"T\'Cha\"','Cajas de libro \"T\'cha\"',NULL,NULL,10,NULL,1),(64,'Impresora ','EPSON','L3150',NULL,1,NULL,2),(65,'DigitalTV level Meter','Teleman','1500',NULL,1,NULL,2),(66,'Teléfono ','Panasonic','KX-T7730',NULL,1,NULL,2),(67,'Tinta de sublimacion','TINEC',NULL,'Colores CYMK',4,NULL,2),(68,'Computadora','Apple','Imac',NULL,1,NULL,2),(69,'Monitor','Apple',NULL,NULL,1,NULL,2),(70,'Cámara fotografica','Canon','SX40HS','Lente de 35mm',1,NULL,2),(71,'Trituradora de papel','Fellowes',NULL,NULL,1,NULL,2),(72,'UPS','APC','Es-650',NULL,1,NULL,2),(73,'Impresora','HP','DesignJet T120 ePrinter',NULL,1,NULL,2),(74,'Impresora','Sawgrass','SG400',NULL,1,NULL,2),(75,'Toca Discos','Crosley',NULL,NULL,1,NULL,2),(76,'UPS','APC','600',NULL,1,NULL,2),(77,'UPS','APC','RS1200',NULL,1,NULL,2),(78,'Stand de microfono ','Hercules',NULL,NULL,1,NULL,2),(79,'Protector de voltaje','Prime',NULL,NULL,1,NULL,2),(80,'Heat press machine','Tinec','TN22-2938CPIN17506','Impresión 8 en 1',1,NULL,2),(81,'Heat press machine','Tinec',NULL,NULL,1,NULL,2),(82,'Impresora ','Graphtec','CE6000-60 plus',NULL,1,NULL,2),(83,'Impresora ','Epson ','sureColor F2100',NULL,1,NULL,2),(84,'UPS ','APC','Smart 2200',NULL,1,NULL,2),(85,'Lampara de escritorio',NULL,NULL,'Color: negro',1,NULL,2),(86,'Protector de voltaje','Forza',NULL,NULL,1,NULL,2),(87,'Guitarra electrica','Ibanez','Gio',NULL,1,NULL,2),(88,'Amplificador de guitarra','Fender','15G',NULL,1,NULL,2),(89,'Aire acondicionado ','Samsung',NULL,NULL,1,NULL,2),(90,'Tinta de impresora EPSON f2100',NULL,NULL,'Blanca',2,NULL,2),(91,'Tinta de impresora EPSON f2101',NULL,NULL,'Negra',2,NULL,2),(92,'Tinta de impresora EPSON f2102',NULL,NULL,'Magenta',1,NULL,2),(93,'Tinta de impresora EPSON f2103',NULL,NULL,'Amarillo',1,NULL,2),(94,'Tinta de impresora EPSON f2104',NULL,NULL,'Cyanogen',1,NULL,2),(95,'Impresora ','Canon','F164802',NULL,1,NULL,3),(96,'Impresora ','Panasonic','Kx-P1150',NULL,1,NULL,3),(97,'Impresora ','Hasat',NULL,'Se usa para recibos',1,NULL,3),(98,'Telefono','Panasonic','KX-Tf730',NULL,1,NULL,3),(99,'Computadora','HP',NULL,'windows',1,NULL,3),(100,'Caja fiscal portatil',NULL,NULL,NULL,1,NULL,3),(101,'UPS','ACP','ES 650',NULL,2,NULL,3),(102,'Aire acondicionado','Sankey',NULL,NULL,1,NULL,3),(103,'Televisor','Nisato',NULL,NULL,1,NULL,3),(104,'Router','Linksys','E2500',NULL,1,NULL,3),(105,'Celular ','Alcatel','OneTouch',NULL,2,NULL,3),(106,'UPS','CDP',NULL,NULL,1,NULL,3),(107,'Backing',NULL,NULL,NULL,2,NULL,4),(108,'Banderola',NULL,NULL,NULL,4,NULL,4),(109,'Boot de DJ',NULL,NULL,NULL,2,NULL,4),(110,'Toldas',NULL,NULL,NULL,3,NULL,4),(111,'Aire acondicionado','Sankey',NULL,NULL,1,NULL,5),(112,'Telefono fijo','Panasonic','KX-T7703',NULL,1,NULL,5),(113,'Computador',NULL,NULL,'Windows',1,NULL,5),(114,'Stand de microfno','REMAX','CK100','En caja',5,NULL,5),(115,'Celular','Alcatel','OneTouch Pixi',NULL,2,NULL,5),(116,'Pouch Laminator','GMP','MR-9',NULL,1,NULL,5),(117,'Tripode ',NULL,NULL,NULL,1,NULL,6),(118,'Flashes','Neewer',NULL,NULL,1,NULL,6),(119,'Interfaz de audio','FocusRite','Scarlett 2i4 2da Gen',NULL,1,NULL,6),(120,'Monitor','Samsung','C32F391FWL',NULL,1,NULL,6),(121,'Computadora',NULL,NULL,'Windows',1,NULL,6),(122,'Stand para microfono',NULL,NULL,NULL,1,NULL,6),(123,'Microfono ','Shure','PG58',NULL,1,NULL,6),(124,'Stand de microfono',NULL,NULL,NULL,1,NULL,6),(125,'Microfono','Shure','PG48',NULL,1,NULL,6),(126,'Microfono','Rode','Procaster',NULL,1,NULL,6),(127,'Radio','Phillips',NULL,NULL,1,NULL,6),(128,'Bluetooth audio gadget',NULL,NULL,NULL,1,NULL,6),(129,'Consola de audio','XENY','X1002B',NULL,1,NULL,6),(130,'UPS','APC','1500',NULL,1,NULL,6),(131,'Bocina','Samson','Resolv 65a',NULL,1,NULL,6),(132,'Passive direct box','bdk',NULL,NULL,1,NULL,6),(133,'Fuente de Poder ','Audio Arts Engineering','SPS-100',NULL,1,NULL,6),(134,'Telefono fijo ','Panasonic','KX-T7703',NULL,1,NULL,6),(135,'Procesador de audio ','dbk','286A',NULL,1,NULL,6),(136,'Consola de radio','Audio Arts Engineering','R55e',NULL,1,NULL,6),(137,'Instant Reaplay','360 System ','DR-552-24',NULL,1,NULL,6),(138,'Aire acondicionado ','Sankey ',NULL,NULL,1,NULL,6),(139,'Televisor ','Samsung',NULL,NULL,1,NULL,6),(140,'Celular','Xiaomi','Redmi 9',NULL,1,NULL,6),(141,'Tablet','Huawei',NULL,NULL,1,NULL,6),(142,'Stand de microfono ',NULL,NULL,NULL,1,NULL,6),(143,'Computadora ','Apple','IMac',NULL,1,NULL,7),(144,'Bocina','Shure','BX3a',NULL,1,NULL,7),(145,'Consola de audio','Yamaha','MG12XU',NULL,1,NULL,7),(146,'Smart switch','TP-Link','TL-SG222WEB',NULL,1,NULL,7),(147,'Computadora','HP',NULL,NULL,1,NULL,7),(148,'UPS','APC','Pro700',NULL,1,NULL,7),(149,'Telefono','UTStarCom','FWG-408',NULL,1,NULL,7),(150,'Telefono','Panasonic','KX-TS520LXW',NULL,1,NULL,7),(151,'Impresora ','Canon','Pixma G4100',NULL,1,NULL,7),(152,'Aire acondicionado ','Sankey',NULL,NULL,1,NULL,7),(153,'Vido 5 playback server',NULL,NULL,NULL,1,NULL,7),(154,'Teclado','Gate',NULL,NULL,1,NULL,7),(155,'Teclado','Logitech',NULL,NULL,1,NULL,7),(156,'Monitor','Samsung','632NW',NULL,2,NULL,7),(157,'Pedestal bum',NULL,NULL,NULL,1,NULL,7),(158,'Microfono','Rode','Procaster',NULL,1,NULL,7),(159,'Computadora','Cooler Master',NULL,'windows',1,NULL,7),(160,'Computadora ',NULL,NULL,'Windows',1,NULL,7),(161,'Monitor ','NOC',NULL,NULL,1,NULL,7),(162,'Transmisor','OMB','EM25DIG',NULL,1,NULL,7),(163,'Eleno ETG3500',NULL,NULL,NULL,1,NULL,7),(164,'Eleno indium Series',NULL,NULL,NULL,1,NULL,7),(165,'Sistema de Telemetria','OMB','REM 2',NULL,1,NULL,7),(166,'Sistema Hibrido','Panasonic','KX-TES824',NULL,1,NULL,7),(167,'Router','Linksys','WRT 3200 ACM',NULL,1,NULL,7),(168,'Router','Mas movil',NULL,'Color blanco',1,NULL,7),(169,'Modulo de distribucion de poder','DOD','828',NULL,1,NULL,7),(170,'Transmisor','OMB','MT DIG',NULL,2,NULL,7),(171,'Bric - Link ll','Comrex',NULL,NULL,3,NULL,7),(172,'Switch','Linksys','LGS124P','24 puertos gigabit',1,NULL,7),(173,'Transmisor','OMB','DIG Platinum',NULL,1,NULL,7),(174,'OMNIA','Volt',NULL,NULL,2,NULL,7),(175,'Enhanced APT-x','World Cast Horizon',NULL,NULL,1,NULL,7),(176,'APT ','World Cast Horizon',NULL,NULL,2,NULL,7),(177,'APG biquad',NULL,NULL,NULL,1,NULL,7),(178,'Interfaz ','Behringer','UltraLink Pro',NULL,1,NULL,7),(179,'Router ','Linkys','EAG350',NULL,1,NULL,7),(180,'Band Scanner','DEVA',NULL,NULL,1,NULL,7),(181,'Yellowtec PUC2',NULL,NULL,NULL,1,NULL,7),(182,'Panel de corriente','American Sound','AS-MT815',NULL,1,NULL,7),(183,'Movil comrex',NULL,NULL,NULL,1,NULL,7),(184,'Switch ','TP-Link','TL-SG1016','16 puertos gigabit',1,NULL,7),(185,'interfaz','Lorex','4K ULTRA HD NVR',NULL,1,NULL,7),(186,'Procesador de audio ','INOVONICS',NULL,NULL,1,NULL,7),(187,'Panel','American DJ Professionals','PC-100A',NULL,1,NULL,7),(188,'Rack para equipos',NULL,NULL,NULL,3,NULL,7),(189,'Pantalla','LG',NULL,NULL,1,NULL,7),(190,'Aire de ventana','samsung',NULL,NULL,1,NULL,7),(191,'Unidad movil','Comrex',NULL,NULL,1,NULL,7),(192,'Microondas','Panasonic','inverter',NULL,1,NULL,8),(193,'Refrigerador','Panasonic','Clase ST NR-B580X',NULL,1,NULL,8),(194,'Cafetera','Lotus',NULL,NULL,1,NULL,8),(195,'Aire Acondicionado','Premium ',NULL,NULL,1,NULL,9),(196,'Luces rotativas ','Big Dipper','LM70LG',NULL,5,NULL,9),(197,'Regleta','Master Electrician',NULL,'12 tomas',1,NULL,9),(198,'Flash fotografico','Godex','V1c',NULL,1,NULL,9),(199,'Flas fotografico','Pro Studio Selection','AD400Pro',NULL,1,NULL,9),(200,'Flash fotografico','LS Photography','Pro Studio',NULL,4,NULL,9),(201,'Panel LED','Neewer','NL600',NULL,4,NULL,9),(202,'Televisor','Nisato',NULL,NULL,1,NULL,9),(203,'Televisor','JVC',NULL,NULL,1,NULL,9),(204,'Instant Replay 2','360 Systems ',NULL,NULL,1,NULL,9),(205,'Mnotor','Samsung','S24F350FHL',NULL,2,NULL,9),(206,'Mouse',NULL,NULL,NULL,1,NULL,9),(207,'Teclado','Maxell',NULL,NULL,1,NULL,9),(208,'Computadora',NULL,NULL,'Componentes de alta gama',1,NULL,9),(209,'Multi camera live producer','Sony','MCX-500',NULL,1,NULL,9),(210,'Camara industrial','Mokose','C100',NULL,1,NULL,9),(211,'Consola de audio','Yamaha','MG12XU',NULL,1,NULL,9),(212,'Microfono inhalamnbrico','Shure','SM50',NULL,1,NULL,9),(213,'Microfono','Shure','CVL Lavalier',NULL,1,NULL,9),(214,'Receptor de señal','Shure','BLxlj10',NULL,1,NULL,9),(215,'Microfono inhalamnbrico','AKG','C420',NULL,1,NULL,9),(216,'Controlador DMX','ZYD','DMX512',NULL,1,NULL,9),(217,'UPS',NULL,NULL,NULL,1,NULL,9),(218,'Bocina','Panasonic','SC-CMAX5',NULL,1,NULL,9),(219,'Tascam CD',NULL,'OIU profesional',NULL,1,NULL,9),(220,'Switch ','Linksys',NULL,NULL,1,NULL,9),(221,'Receptor','Shure','BLX4RJ10',NULL,1,NULL,9),(222,'Receptor','Shure','BLX4J10',NULL,1,NULL,9),(223,'Lampara','Soho',NULL,NULL,1,NULL,9),(224,'Aire acondicionado ','Sankey',NULL,NULL,1,NULL,10),(225,'Tripode','Fogiox',NULL,NULL,1,NULL,10),(226,'Consola de audio','Mackie','DFX-6',NULL,1,NULL,10),(227,'Difusor de Flash',NULL,NULL,NULL,1,NULL,10),(228,'Pedestal de piano',NULL,NULL,NULL,1,NULL,10),(229,'Piano electronico','Casio','CTK-240',NULL,1,NULL,10),(230,'Tripode ','Libec','T72',NULL,1,NULL,10),(231,'Bocinas ','Bose','L1 Compact',NULL,1,NULL,10),(232,'Gabinete','Harmony Cases','HCDDJSBLT',NULL,1,NULL,10),(233,'DJ Controller ','Pionner','DDJ-SB3',NULL,1,NULL,10),(234,'Gabinete',NULL,NULL,'Color: azul',1,NULL,10),(235,'Conectores 110v',NULL,NULL,NULL,1,NULL,10),(236,'Gabinete','NSP Case',NULL,NULL,1,NULL,10),(237,'Laptop','Apple','Macbook Pro',NULL,1,NULL,10),(238,'Gabinete',NULL,NULL,'Color: negro',1,NULL,10),(239,'Procesador LED 5',NULL,NULL,NULL,1,NULL,10),(240,'Estuche ','Neewer',NULL,NULL,1,NULL,10),(241,'Cables',NULL,NULL,'LAN, HDMI, XLR',1,NULL,10),(242,'Estuche ','Gator case',NULL,NULL,2,NULL,10),(243,'Interfaz ','Furman ','M-8Lx',NULL,2,NULL,10),(244,'Interfaz ','dbx','DriveRack PA',NULL,2,NULL,10),(245,'Computadora','Apple','Imac','El equipo esta desarmado',1,NULL,10),(246,'Reproducto Blu-ray','Sony','BDP-SG700',NULL,1,NULL,10),(247,'Luz rotativa','Big Dipper ','LM7016',NULL,1,NULL,10),(248,'Stand de Luz','Neewer',NULL,NULL,4,NULL,10),(249,'Luces LED',NULL,NULL,NULL,2,NULL,10),(250,'Luz de escenario','Chauvet','SlimPar G4',NULL,1,NULL,10),(251,'Tripode ','Lime Studio',NULL,NULL,3,NULL,10),(252,'Barra LED','Chauvet','Satellite collorstrip',NULL,2,NULL,10),(253,'Consola de audio','Mackie','1202-VLZ pro',NULL,1,NULL,10),(254,'Rollos de papel manila',NULL,NULL,NULL,4,NULL,10),(255,'Bolsas de papel - caja','BBRANDS',NULL,'5-1/4*3-1/2*8-1/4\"',6,NULL,10),(256,'Bolsas de papel - caja','BBRANDS',NULL,'16*6*12\"',6,NULL,10),(257,'Bolsas de papel - caja','BBRANDS',NULL,'8-3/4*4-1/4*10-1/4\"',5,NULL,10),(258,'Lamparas LED','Vintager',NULL,NULL,1,NULL,11),(259,'Rollo de Cable de 1\"',NULL,NULL,NULL,3,NULL,11),(260,'Rack de equipos',NULL,NULL,NULL,1,NULL,11),(261,'Puerta de madera',NULL,NULL,NULL,1,NULL,11),(262,'Motocicleta','Piaggio','Scooter',NULL,1,NULL,11),(263,'Estructura para eventos',NULL,NULL,NULL,1,NULL,11),(264,'SWR power meter','Daiva',NULL,NULL,1,NULL,11),(265,'Switch','TP-Link','SG1008D',NULL,1,NULL,11),(266,'Aspiradora','Panasonic','MC-CG301',NULL,1,NULL,11),(267,'Mesas plegables','Lifetime',NULL,NULL,3,NULL,11),(268,'Pedestal de Mic ',NULL,NULL,'Pequeño',1,NULL,11),(269,'Rollo de cable de 1/2\"',NULL,NULL,NULL,1,NULL,11),(270,'Conos de seguridad',NULL,NULL,NULL,3,NULL,11),(271,'Amplificador FM','OMB','AM1000',NULL,1,NULL,11),(272,'Baterias 12V','Vision',NULL,NULL,17,NULL,11),(273,'Componente','Sony','S-Master',NULL,1,NULL,11),(274,'Gabinete',NULL,NULL,NULL,1,NULL,11),(275,'Cable HDMI','Postta','Ultra HD 2.0V',NULL,2,NULL,11),(276,'Tripode ','Zomei',NULL,NULL,1,NULL,11),(277,'Caja de bombillo fluorecentes',NULL,NULL,NULL,1,NULL,11),(278,'Gabinetes',NULL,NULL,NULL,4,NULL,11),(279,'Subwoofer','JBL','SRX818SP',NULL,4,NULL,11),(280,'Gabinetes ',NULL,NULL,NULL,4,NULL,11),(281,'Bocinas medios','JBL','SRX818P',NULL,4,NULL,11),(282,'Bandpass Cavitiy',NULL,'WP-440-1',NULL,3,NULL,11),(283,'Power transfer switch ','ASCO',NULL,NULL,1,NULL,11),(284,'Antenas 5GHz',NULL,NULL,NULL,1,NULL,11),(285,'UPS','Liebert ','GXT',NULL,1,NULL,11),(286,'Boot de DJ LED',NULL,NULL,NULL,2,NULL,11),(287,'Automovil','Volkswagen','Transporter TDI','Unidad movil',1,NULL,12),(288,'Automovil','Peugeot ','Boxer',NULL,1,NULL,12),(289,'Automovil','Volkswagen','Amarok',NULL,1,NULL,12),(290,'Planta de electricidad','Yamaha','EDL1360TE',NULL,2,NULL,12),(291,'Mantenedores de bateria','Shumacher','SC1355',NULL,2,NULL,12),(292,'Hidrolavadora','Karcher',NULL,NULL,1,NULL,12),(293,'Power System Transfer switch','Kohler',NULL,NULL,1,NULL,12);
/*!40000 ALTER TABLE `articulos_oficina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial`
--

DROP TABLE IF EXISTS `historial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `historial` (
  `tmsp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `articulo` varchar(50) DEFAULT NULL,
  `id_articulo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial`
--

LOCK TABLES `historial` WRITE;
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
INSERT INTO `historial` VALUES ('2020-12-16 13:40:02','INSERT','Taza',17),('2020-12-16 13:40:14','DELETE','Taza',17),('2020-12-16 13:43:25','INSERT','Taza',1),('2020-12-16 13:46:53','INSERT','Termos ',2),('2020-12-16 13:46:53','INSERT','Tazas grandes',3),('2020-12-16 13:46:53','INSERT','Sueter cuello V',4),('2020-12-16 13:46:53','INSERT','Sueter cuello V',5),('2020-12-16 13:46:53','INSERT','Sueter cuello V',6),('2020-12-16 13:46:53','INSERT','Sueter cuello V',7),('2020-12-16 13:46:53','INSERT','Sueter cuello V',8),('2020-12-16 13:46:53','INSERT','Sueter cuello V',9),('2020-12-16 13:46:53','INSERT','Sueter cuello V',10),('2020-12-16 13:46:53','INSERT','Sueter cuello V',11),('2020-12-16 13:46:53','INSERT','Sueter cuello V',12),('2020-12-16 13:46:53','INSERT','Sueter cuello V',13),('2020-12-16 13:46:53','INSERT','Sueter cuello V',14),('2020-12-16 13:46:53','INSERT','Sueter cuello V',15),('2020-12-16 13:46:53','INSERT','Sueter cuello V',16),('2020-12-16 13:46:53','INSERT','Sueter cuello V',17),('2020-12-16 13:46:53','INSERT','Sueter cuello V',18),('2020-12-16 13:46:53','INSERT','Sueter cuello V',19),('2020-12-16 14:00:03','UPDATE','Taza',1),('2020-12-16 14:00:13','UPDATE','Taza',1);
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficinas`
--

DROP TABLE IF EXISTS `oficinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficinas`
--

LOCK TABLES `oficinas` WRITE;
/*!40000 ALTER TABLE `oficinas` DISABLE KEYS */;
INSERT INTO `oficinas` VALUES (1,'Estudio #2',NULL),(2,'Gerencia',NULL),(3,'Recepción',NULL),(4,'Baño',NULL),(5,'Administración',NULL),(6,'Cabina',NULL),(7,'Estudio #1',NULL),(8,'Cocina',NULL),(9,'Estudio de tv',NULL),(10,'Bodega climatizada',NULL),(11,'Depósito',NULL),(12,'Garaje - exterior',NULL);
/*!40000 ALTER TABLE `oficinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retiros`
--

DROP TABLE IF EXISTS `retiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `retiros` (
  `id_retiro` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad_retiro` int(11) DEFAULT NULL,
  `cliente` varchar(30) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `estado` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Activo',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `nom_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id_retiro`),
  KEY `id_producto` (`id_producto`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `retiros_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `articulos` (`id`),
  CONSTRAINT `retiros_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retiros`
--

LOCK TABLES `retiros` WRITE;
/*!40000 ALTER TABLE `retiros` DISABLE KEYS */;
/*!40000 ALTER TABLE `retiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adm` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'root','$2y$10$o8oO4DvOGy5fy0oU9r2TDODstIyNhvBlABsw2BuYyJMNKhTBCIeYi',1),(13,'froy','$2y$10$U04ZYruA1NIx.HyNM3PjSuHo7RWkF42lgoxlefOTGAy70dwcilbyO',0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'inventario_blast'
--

--
-- Dumping routines for database 'inventario_blast'
--
/*!50003 DROP PROCEDURE IF EXISTS `add_retiro` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_retiro`(
	IN `id_prod` INT,
	IN `_cant` INT,
	IN `_cliente` VARCHAR(30),
	IN `_username` VARCHAR(15),
	IN `_cant_nueva` INT,
	IN `user_id` INT
)
BEGIN
INSERT INTO retiros (id_producto, cantidad_retiro, cliente, nom_usuario, id_usuario) VALUES(id_prod,_cant,_cliente,_username,user_id);
UPDATE articulos SET cantidad = _cant_nueva WHERE id = id_prod;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `add_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = cp850 */ ;
/*!50003 SET character_set_results = cp850 */ ;
/*!50003 SET collation_connection  = cp850_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`superUser`@`localhost` PROCEDURE `add_usuario`(IN _user varchar(20), IN _pwd varchar(255), IN _rol boolean)
begin
insert into usuarios (username, password, adm) values (_user, _pwd, _rol);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `anular_retiro` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `anular_retiro`(
	IN `_id_retiro` INT,
	IN `id_art` INT,
	IN `cant_total` INT
)
BEGIN
UPDATE retiros SET estado = "Anulado" WHERE id_retiro = _id_retiro;
UPDATE articulos SET cantidad = cant_total WHERE id = id_art;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `del_articulo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `del_articulo`(
	IN `_id` INT
)
BEGIN
DELETE FROM `inventario_blast`.`articulos` WHERE  `id`= _id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `del_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = cp850 */ ;
/*!50003 SET character_set_results = cp850 */ ;
/*!50003 SET collation_connection  = cp850_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`superUser`@`localhost` PROCEDURE `del_usuario`(IN _id int)
begin
delete from usuarios where id = _id;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `read_retiros` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`superUser`@`localhost` PROCEDURE `read_retiros`()
SELECT retiros.id_retiro, articulos.id, articulos.cantidad, articulos.nombre, articulos.talla_forma, articulos.color, retiros.cantidad_retiro, retiros.cliente, retiros.fecha, usuarios.username, retiros.estado FROM ((retiros inner join articulos  on retiros.id_producto = articulos.id) inner join usuarios on retiros.id_usuario = usuarios.id) ORDER BY retiros.estado, retiros.fecha DESC ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `upd_articulo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`superUser`@`localhost` PROCEDURE `upd_articulo`(
	IN `_id` int,
	IN `_nombre` varchar(20),
	IN `_color` varchar(20),
	IN `_talla` VARCHAR(15),
	IN `_material` varchar(30),
	IN `_cantidad` int,
	IN `_nota` VARCHAR(100)
)
begin
update articulos set nombre = _nombre, color = _color, talla_forma = _talla, material = _material, cantidad = _cantidad, nota = _nota where id = _id;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `upd_usuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = cp850 */ ;
/*!50003 SET character_set_results = cp850 */ ;
/*!50003 SET collation_connection  = cp850_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`superUser`@`localhost` PROCEDURE `upd_usuarios`(IN _id int, IN _username varchar(20), IN _pwd varchar(250), IN _adm boolean)
begin 
update usuarios set username = _username, password = _pwd, adm = _adm where id = _id;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-16 10:04:45
