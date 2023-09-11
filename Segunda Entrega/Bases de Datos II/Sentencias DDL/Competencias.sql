CREATE DATABASE  IF NOT EXISTS `ImagineAllTech` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ImagineAllTech`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 192.168.2.195    Database: ImagineAllTech
-- ------------------------------------------------------
-- Server version	5.5.68-MariaDB

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
-- Table structure for table `Asiste`
--

DROP TABLE IF EXISTS `Asiste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Asiste` (
  `IDJ` int(3) DEFAULT NULL,
  `ID` int(4) DEFAULT NULL,
  KEY `IDJ` (`IDJ`),
  KEY `ID` (`ID`),
  CONSTRAINT `Asiste_ibfk_1` FOREIGN KEY (`IDJ`) REFERENCES `Juez` (`IDJ`),
  CONSTRAINT `Asiste_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `Competencia` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Asiste`
--

LOCK TABLES `Asiste` WRITE;
/*!40000 ALTER TABLE `Asiste` DISABLE KEYS */;
/*!40000 ALTER TABLE `Asiste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Competencia`
--

DROP TABLE IF EXISTS `Competencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Competencia` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `Tipo` set('Individual','Equipos') DEFAULT NULL,
  `Categoría` set('12/13','14/15','16/17','Mayores') DEFAULT NULL,
  `CatSexo` set('Masculino','Femenino','Otro') DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Competencia`
--

LOCK TABLES `Competencia` WRITE;
/*!40000 ALTER TABLE `Competencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `Competencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Competidor`
--

DROP TABLE IF EXISTS `Competidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Competidor` (
  `CI` int(8) NOT NULL DEFAULT '0',
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Fnac` date DEFAULT NULL,
  `Sexo` set('Masculino','Femenino','Otro') DEFAULT NULL,
  PRIMARY KEY (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Competidor`
--

LOCK TABLES `Competidor` WRITE;
/*!40000 ALTER TABLE `Competidor` DISABLE KEYS */;
/*!40000 ALTER TABLE `Competidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Elige`
--

DROP TABLE IF EXISTS `Elige`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Elige` (
  `CI` int(8) DEFAULT NULL,
  `NumeroKata` int(3) DEFAULT NULL,
  KEY `CI` (`CI`),
  KEY `NumeroKata` (`NumeroKata`),
  CONSTRAINT `Elige_ibfk_1` FOREIGN KEY (`CI`) REFERENCES `Competidor` (`CI`),
  CONSTRAINT `Elige_ibfk_2` FOREIGN KEY (`NumeroKata`) REFERENCES `Kata` (`NumeroKata`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Elige`
--

LOCK TABLES `Elige` WRITE;
/*!40000 ALTER TABLE `Elige` DISABLE KEYS */;
/*!40000 ALTER TABLE `Elige` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Escuela`
--

DROP TABLE IF EXISTS `Escuela`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Escuela` (
  `NombreEscuela` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`NombreEscuela`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Escuela`
--

LOCK TABLES `Escuela` WRITE;
/*!40000 ALTER TABLE `Escuela` DISABLE KEYS */;
/*!40000 ALTER TABLE `Escuela` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Forma`
--

DROP TABLE IF EXISTS `Forma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Forma` (
  `ID` int(4) DEFAULT NULL,
  `CI` int(8) DEFAULT NULL,
  KEY `ID` (`ID`),
  KEY `CI` (`CI`),
  CONSTRAINT `Forma_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Grupo` (`ID`),
  CONSTRAINT `Forma_ibfk_2` FOREIGN KEY (`CI`) REFERENCES `Competidor` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Forma`
--

LOCK TABLES `Forma` WRITE;
/*!40000 ALTER TABLE `Forma` DISABLE KEYS */;
/*!40000 ALTER TABLE `Forma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Grupo`
--

DROP TABLE IF EXISTS `Grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Grupo` (
  `ID` int(4) DEFAULT NULL,
  `NumeroGrupo` int(3) DEFAULT NULL,
  `Color` set('Aka','Ao') DEFAULT NULL,
  KEY `ID` (`ID`),
  CONSTRAINT `Grupo_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `Competencia` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Grupo`
--

LOCK TABLES `Grupo` WRITE;
/*!40000 ALTER TABLE `Grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `Grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Integra`
--

DROP TABLE IF EXISTS `Integra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Integra` (
  `NombreEscuela` varchar(30) DEFAULT NULL,
  `CI` int(8) DEFAULT NULL,
  `Dojo` varchar(30) DEFAULT NULL,
  KEY `NombreEscuela` (`NombreEscuela`),
  KEY `CI` (`CI`),
  CONSTRAINT `Integra_ibfk_1` FOREIGN KEY (`NombreEscuela`) REFERENCES `Escuela` (`NombreEscuela`),
  CONSTRAINT `Integra_ibfk_2` FOREIGN KEY (`CI`) REFERENCES `Competidor` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Integra`
--

LOCK TABLES `Integra` WRITE;
/*!40000 ALTER TABLE `Integra` DISABLE KEYS */;
/*!40000 ALTER TABLE `Integra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Juez`
--

DROP TABLE IF EXISTS `Juez`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Juez` (
  `IDJ` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDJ`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Juez`
--

LOCK TABLES `Juez` WRITE;
/*!40000 ALTER TABLE `Juez` DISABLE KEYS */;
/*!40000 ALTER TABLE `Juez` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Juzga`
--

DROP TABLE IF EXISTS `Juzga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Juzga` (
  `IDJ` int(3) DEFAULT NULL,
  `CI` int(8) DEFAULT NULL,
  `NumeroKata` int(3) DEFAULT NULL,
  `Puntaje` decimal(3,1) DEFAULT NULL,
  `Ronda` int(1) DEFAULT NULL,
  KEY `IDJ` (`IDJ`),
  KEY `CI` (`CI`),
  KEY `NumeroKata` (`NumeroKata`),
  CONSTRAINT `Juzga_ibfk_1` FOREIGN KEY (`IDJ`) REFERENCES `Juez` (`IDJ`),
  CONSTRAINT `Juzga_ibfk_2` FOREIGN KEY (`CI`) REFERENCES `Competidor` (`CI`),
  CONSTRAINT `Juzga_ibfk_3` FOREIGN KEY (`NumeroKata`) REFERENCES `Kata` (`NumeroKata`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Juzga`
--

LOCK TABLES `Juzga` WRITE;
/*!40000 ALTER TABLE `Juzga` DISABLE KEYS */;
/*!40000 ALTER TABLE `Juzga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Kata`
--

DROP TABLE IF EXISTS `Kata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Kata` (
  `NumeroKata` int(3) NOT NULL DEFAULT '0',
  `NombreKata` enum('Anan','Anan Dai','Ananko','Aoyagi','Bassai','Bassai Dai','Bassai Sho','Chatanyara Kusanku','Chibana No Kushanku','Chinte','Chinto','Enpi','Fukyugata Ichi','Fukyugata Ni','Gankaku','Garyu','Gekisai (Geksai) 1','Gekisai (Geksai) 2','Gojushiho','Gojushiho Dai','Gojushiho Sho','Hakusho','Hangetsu','Haufa (Haffa)','Heian Shodan','Heian Nidan','Heian Sandan','Heian Yondan','Heian Godan','Heiku','Ishimine Bassai','Itosu Rohai Shodan','Itosu Rohai Nidan','Itosu Rohai Sandan','Jiin','Jion','Jitte','Juroku','Kanchin','Kanku Dai','Kanku Sho','Kanshu','Kishimono No Kushanku','Kousoukun','Kousoukun Dai','Kousoukun Sho','Kururunfa','Kusanku','Kyan No Chinto','Kyan No Wanshu','Matsukaze','Matsumura Bassai','Matsumura Rohai','Meikyo','Myojo','Naifanchin Shodan','Naifanchin Nidan','Naifanchin Sandan','Naihanchi','Nijushiho','Nipaipo','Niseishi','Ohan','Ohan Dai','Oyadomari No Passai','Pachu','Paiku','Papuren','Passai','Pinan Shodan','Pinan Nidan','Pinan Sandan','Pinan Yondan','Pinan Godan','Rohai','Saifa','Sanchin','Sansai','Sanseiru','Sanseru','Seichin','Seienchin (Seiyunchin)','Seipai','Seiryu','Seishan','Seisan (Sesan)','Shiho Kousoukun','Shinpa','Shinsei','Shisochin','Sochin','Suparinpei','Tekki Shodan','Tekki Nidan','Tekki Sandan','Tensho','Tomari Bassai','Unshu','Unsu','Useishi','Wankan','Wanshu') DEFAULT NULL,
  PRIMARY KEY (`NumeroKata`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Kata`
--

LOCK TABLES `Kata` WRITE;
/*!40000 ALTER TABLE `Kata` DISABLE KEYS */;
/*!40000 ALTER TABLE `Kata` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-06 11:47:02
