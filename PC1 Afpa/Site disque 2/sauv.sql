-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: APPLICATION_SAV_DIRUY
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Client` (
  `Client_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Client_Nom` varchar(40) NOT NULL,
  `Client_Prenom` varchar(40) DEFAULT NULL,
  `Client_Adress1` varchar(40) NOT NULL,
  `Client_Adress2` varchar(40) DEFAULT NULL,
  `Client_Code_Post` varchar(5) NOT NULL,
  `Client_Ville` varchar(40) NOT NULL,
  PRIMARY KEY (`Client_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Client`
--

LOCK TABLES `Client` WRITE;
/*!40000 ALTER TABLE `Client` DISABLE KEYS */;
INSERT INTO `Client` VALUES (1,'Dupuis','Léo','1 Rue Guerard','/','80000','Amiens'),(2,'Duclos','Gabriel','3 Rue Lito','/','80800','Amiens'),(3,'Patum','Henri','10 Rue Basse','/','80070','Amiens'),(4,'Salomont','Anais','17 Rue Haute','/','80090','Villers-Bocage'),(13,'VAN DEN EYNDE','Paul','186 Rue Saint-Fuscien','/','80000','Amiens');
/*!40000 ALTER TABLE `Client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SAV`
--

DROP TABLE IF EXISTS `SAV`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SAV` (
  `Client_Id` int(11) DEFAULT NULL,
  `SAV_Nom` varchar(40) NOT NULL,
  `SAV_Prenom` varchar(40) DEFAULT NULL,
  `SAV_Adress1` varchar(40) NOT NULL,
  `SAV_Adress2` varchar(40) DEFAULT NULL,
  `SAV_Code_Post` varchar(5) NOT NULL,
  `SAV_ville` varchar(40) NOT NULL,
  `SAV_Probleme` text NOT NULL,
  `Dt_Crea` date NOT NULL,
  `SAV_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`SAV_id`),
  KEY `Client_Id` (`Client_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SAV`
--

LOCK TABLES `SAV` WRITE;
/*!40000 ALTER TABLE `SAV` DISABLE KEYS */;
INSERT INTO `SAV` VALUES (4,'Salomont','Anais','17 Rue Haute','/','80090','Amiens','Portail bloqué','2022-05-15',2),(1,'Dupuis','Léo','1 Rue Guerard','/','80000','Amiens','Fenetre de mauvaise dimention','2022-05-14',3),(18,'vde','paul','21 rue batreux','21 rue Trunois','80560','Amiens','Alarme Defectueuse','2022-06-30',13);
/*!40000 ALTER TABLE `SAV` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-30 17:17:31