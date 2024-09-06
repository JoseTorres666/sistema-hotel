-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: bdhotel
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `cobros`
--

DROP TABLE IF EXISTS `cobros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cobros` (
  `id` int NOT NULL,
  `id_estancia` int NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `monto` decimal(8,2) NOT NULL,
  `metodo_pago` varchar(45) NOT NULL,
  `tipo_cobro` varchar(45) NOT NULL,
  `detalle_cobro` varchar(255) DEFAULT NULL,
  `estado_cobro` varchar(45) NOT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cobros_estancia1_idx` (`id_estancia`),
  CONSTRAINT `fk_cobros_estancia1` FOREIGN KEY (`id_estancia`) REFERENCES `estancia` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cobros`
--

LOCK TABLES `cobros` WRITE;
/*!40000 ALTER TABLE `cobros` DISABLE KEYS */;
/*!40000 ALTER TABLE `cobros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_producto`
--

DROP TABLE IF EXISTS `detalle_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_producto` int NOT NULL,
  `id_venta` int NOT NULL,
  `catidad` int NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_producto_has_venta_venta1_idx` (`id_venta`),
  KEY `fk_producto_has_venta_producto1_idx` (`id_producto`),
  CONSTRAINT `fk_producto_has_venta_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  CONSTRAINT `fk_producto_has_venta_venta1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`idventa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_producto`
--

LOCK TABLES `detalle_producto` WRITE;
/*!40000 ALTER TABLE `detalle_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estancia`
--

DROP TABLE IF EXISTS `estancia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estancia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_huesped` int NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `fecha_salida` datetime NOT NULL,
  `descuento` decimal(8,2) DEFAULT NULL,
  `estado_estancia` varchar(50) NOT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_estancia_huesped1_idx` (`id_huesped`),
  KEY `fk_estancia_usuario1_idx` (`id_usuario`),
  CONSTRAINT `fk_estancia_huesped1` FOREIGN KEY (`id_huesped`) REFERENCES `huesped` (`id`),
  CONSTRAINT `fk_estancia_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estancia`
--

LOCK TABLES `estancia` WRITE;
/*!40000 ALTER TABLE `estancia` DISABLE KEYS */;
/*!40000 ALTER TABLE `estancia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitacion`
--

DROP TABLE IF EXISTS `habitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `habitacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `piso` varchar(45) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitacion`
--

LOCK TABLES `habitacion` WRITE;
/*!40000 ALTER TABLE `habitacion` DISABLE KEYS */;
INSERT INTO `habitacion` VALUES (1,'12',130.00,'2','DOBLE',NULL,1,'2024-09-03 03:50:09','2024-09-05 00:39:50',0),(2,'11',145.00,'2','INDIVIDUAL',NULL,2,'2024-09-03 04:33:48','2024-09-05 00:35:26',0),(3,'1',280.00,'PB','CUATRUPLE','3 CAMAS',1,'2024-09-04 03:41:58','2024-09-05 23:28:25',0),(4,'2',85.00,'PB','INDIVIDUAL','CAMA INDIVIDUAL',3,'2024-09-04 23:02:42','2024-09-05 23:26:43',0),(5,'3',160.00,'PB','MATRIMODIAN','CAMA MATRIMONIAL',2,'2024-09-05 22:41:34','2024-09-05 23:26:59',0),(6,'15',85.00,'1','INDIVIDUAL','INDIVIDUAL',4,'2024-09-05 22:42:06','2024-09-05 23:27:34',0),(7,'17',180.00,'1','DOBE',NULL,1,'2024-09-05 22:42:27','2024-09-05 22:42:27',0),(8,'19',160.00,'1','MATRIMONIAL',NULL,1,'2024-09-05 22:42:50','2024-09-05 22:42:50',0);
/*!40000 ALTER TABLE `habitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitacion_estancia`
--

DROP TABLE IF EXISTS `habitacion_estancia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `habitacion_estancia` (
  `id_habitacion` int NOT NULL,
  `id_estancia` int NOT NULL,
  PRIMARY KEY (`id_habitacion`,`id_estancia`),
  KEY `fk_habitacion_has_estancia_estancia1_idx` (`id_estancia`),
  KEY `fk_habitacion_has_estancia_habitacion1_idx` (`id_habitacion`),
  CONSTRAINT `fk_habitacion_has_estancia_estancia1` FOREIGN KEY (`id_estancia`) REFERENCES `estancia` (`id`),
  CONSTRAINT `fk_habitacion_has_estancia_habitacion1` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitacion_estancia`
--

LOCK TABLES `habitacion_estancia` WRITE;
/*!40000 ALTER TABLE `habitacion_estancia` DISABLE KEYS */;
/*!40000 ALTER TABLE `habitacion_estancia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huesped`
--

DROP TABLE IF EXISTS `huesped`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `huesped` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(55) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `nacionalidad` varchar(45) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `estado_civil` varchar(45) NOT NULL,
  `profesion` varchar(150) NOT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `numero_documento` varchar(45) NOT NULL,
  `procedencia` varchar(45) NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huesped`
--

LOCK TABLES `huesped` WRITE;
/*!40000 ALTER TABLE `huesped` DISABLE KEYS */;
INSERT INTO `huesped` VALUES (1,'JOSE','TORRES','BOLIVIANA','1999-06-03 00:00:00','SOLTERO','ESTUDIANTE','CEDULA_IDENTIDAD','1234567890','COCHABAMBA',1,'2024-09-03 01:17:37','2024-09-05 20:17:28',0),(2,'PEDRO','LOPEZ','BOLIVIANA','2023-02-01 00:00:00','SOLTERO','ESTUDIANTE','CEDULA_IDENTIDAD','1234567890','COCHABAMBA',1,'2024-09-04 03:44:20','2024-09-05 20:17:30',0),(3,'JUAN','PEREZ','CHILE','1999-06-03 00:00:00','SOLTERO','ESTUDIANTE','CEDULA_IDENTIDAD','1223','COCHABAMBA',1,'2024-09-05 19:24:21','2024-09-05 20:17:32',0),(4,'JUAN','FFD','ADASD','1988-12-12 00:00:00','SOLTERO','ESTUDIANTE','CEDULA_IDENTIDAD','1221321','COCHABAMBA',1,'2024-09-05 19:34:28','2024-09-05 20:17:35',0),(5,'DASDA','SADADAS','ADAS','1999-12-12 00:00:00','SOLTERO','ASDADA','CEDULA_IDENTIDAD','12231','WSDDSA',1,'2024-09-05 19:39:05','2024-09-05 20:17:39',0);
/*!40000 ALTER TABLE `huesped` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio_compra` decimal(7,2) NOT NULL,
  `stock` int NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `imagen` varchar(45) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (55,'AAAA','SSS',0.00,2,1,'55.jpg','2024-09-03 01:14:32','2024-09-03 01:15:57',NULL),(56,'COCA','DE VIDRIO 1/2 L',12.00,4,1,'','2024-09-03 01:15:41','2024-09-03 01:15:41',NULL),(57,'PEPSI','DE MEDIO LITRO',13.00,2,1,'57.jpg','2024-09-04 03:45:56','2024-09-04 03:46:09',NULL);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (29,'JOSE','TORRES','MAMANI','76415956','ADMINISTRADOR','torres.jose.13474@gmail.com','$2y$10$DXSxjXpvcb4HdRvdgergmOM.vtwOk3NIScuaj9ksC5JRil90orxM.',1,'2024-09-03 01:15:16','2024-09-03 01:15:16'),(30,'RAUL','VERA','','2222222','RECEPCIONISTA','yhosu597@gmail.com','$2y$10$xvFBh4EwrrRmbfUkHJv2X.K6i1Td/Jo42l6Q6TvzbMWluUMG0VDlG',1,'2024-09-04 03:47:18','2024-09-04 03:49:07');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `venta` (
  `idventa` int NOT NULL AUTO_INCREMENT,
  `id_estancia` int NOT NULL,
  `id_usuario` int NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`idventa`),
  KEY `fk_venta_estancia1_idx` (`id_estancia`),
  KEY `fk_venta_usuario1_idx` (`id_usuario`),
  CONSTRAINT `fk_venta_estancia1` FOREIGN KEY (`id_estancia`) REFERENCES `estancia` (`id`),
  CONSTRAINT `fk_venta_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-06 17:38:12
