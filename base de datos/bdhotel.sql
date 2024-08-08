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
  `id` int NOT NULL AUTO_INCREMENT,
  `id_estancia` int NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` decimal(8,2) NOT NULL,
  `metodo_pago` varchar(45) NOT NULL,
  `tipo_transaccion` varchar(45) NOT NULL DEFAULT 'pago',
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL,
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
-- Table structure for table `detalle`
--

DROP TABLE IF EXISTS `detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalle` (
  `id_producto` int NOT NULL,
  `id_estancia` int NOT NULL,
  `cantidad` int NOT NULL,
  `precio_unitario` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id_producto`,`id_estancia`),
  KEY `fk_detalle_estancia1_idx` (`id_estancia`),
  CONSTRAINT `fk_detalle_estancia1` FOREIGN KEY (`id_estancia`) REFERENCES `estancia` (`id`),
  CONSTRAINT `fk_detalle_producto1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle`
--

LOCK TABLES `detalle` WRITE;
/*!40000 ALTER TABLE `detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle` ENABLE KEYS */;
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
  `id_habitacion` int NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  `fecha_salida` datetime NOT NULL,
  `precio_total` decimal(10,0) NOT NULL,
  `reserva` varchar(45) DEFAULT NULL,
  `penalidad` decimal(8,2) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `estado` tinyint GENERATED ALWAYS AS (_utf8mb3'1') VIRTUAL,
  `fecha_creacion` varchar(45) NOT NULL,
  `fecha_actualizacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estancia_huesped1_idx` (`id_huesped`),
  KEY `fk_estancia_habitacion1_idx` (`id_habitacion`),
  KEY `fk_estancia_usuario1_idx` (`id_usuario`),
  CONSTRAINT `fk_estancia_habitacion1` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`),
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
  `numero` varchar(4) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `piso` varchar(45) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitacion`
--

LOCK TABLES `habitacion` WRITE;
/*!40000 ALTER TABLE `habitacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `habitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huesped`
--

DROP TABLE IF EXISTS `huesped`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `huesped` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombres_apellidos` varchar(355) NOT NULL,
  `nacionalidad` varchar(45) NOT NULL,
  `edad` datetime NOT NULL,
  `estado_civil` varchar(45) NOT NULL,
  `profesion_ocupacion` varchar(150) NOT NULL,
  `tipo_documento` varchar(100) NOT NULL,
  `numero_documento` varchar(45) NOT NULL,
  `procedencia` varchar(45) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huesped`
--

LOCK TABLES `huesped` WRITE;
/*!40000 ALTER TABLE `huesped` DISABLE KEYS */;
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
  `descripcion` varchar(155) NOT NULL,
  `precio_compra` decimal(7,2) NOT NULL,
  `precio_venta` decimal(7,2) NOT NULL,
  `stock` int NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
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
  `nombres` varchar(20) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) NOT NULL,
  `sueldo` decimal(8,2) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (29,'JOSE','TORRES','MAMANI','76415956',9000.00,'ADMINISTRADOR','torres.jose.13474@gmail.com','$2y$10$jxbnCHZUDcQlbHXm5ASCaONj55RY4ij5rSA8jPCYygL32.LMXxyuu',1,'2024-08-08 23:40:26','2024-08-09 00:50:54');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-08 16:55:53
