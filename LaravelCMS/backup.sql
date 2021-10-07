-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: laravelcms
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Data Science','data - science - para - negocios','As melhores práticas de python'),(2,'FrontEnd','frontend','As melhores práticas de desenvolvimento de projetos usando HTML e CSS'),(3,'Dataclisma','dataclisma','Quem somos ? quando achamos que ninguém está vendo.');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'title','Dev Ops'),(2,'subtitle','Novas Tecnologias'),(3,'email','tecnologia@site.com'),(4,'bgcolor','#f5f5f5'),(5,'textcolor','#1f2647');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Marcos Lamberti da Silva','lamberti.marcos049@gmail.com','$2y$10$osnUFkpIl0OQYRxJ3re2y.r5W6WhRi.wVihRipvQwJtIg4nqvLGzu','wITq74WV4PGrbCkV9iJmrb0LyQF260IbvBr2aIIeBavsJ88O1IzxPhVAtSmG',1),(2,'Pedro Alvares Cabral','pedro.cabral@hotmail.com','$2y$10$WBVCYHkuxjLTvLbJyaMm9e.XozO1yYfeiJfpm1JfRLvf8wZPqeXwy',NULL,0),(3,'Ana Maria','ana@gmail.com','$2y$10$sbmcrC6eYJMPpW3eZAj9leTmzDwQ6/pp8y3yjnNbuyu1lSogjVbO6',NULL,0),(4,'Ian da Silva','ian@gmail.com','$2y$10$JFJOpQZwLmaMaQE4lDwOBu/Y3UWi7OYyD2cGPu2xkxkv434n6gvUW',NULL,0),(5,'Fernando pessoa','fernando@hotmail.com.br','$2y$10$KYumod.Ypkw5jmpAUtoRneTl4G4V5bsvDIIdgUR6u8CwmBltDXghm',NULL,0),(6,'Ayrton Senna','senna@gmail.com','$2y$10$KAVOX32xadmLHnIqZjREB..fYCEbn8OeiFJ6wwXwToIGTFgmP0LIy',NULL,0),(7,'Monteiro Lobato','lobato@gmail.com','$2y$10$aFWyc8qLCDFRRyh8t9veGu/bqu29ozHEd9xXuVOzZ39cwD0nWSnl6',NULL,0),(8,'Cecília Meireles','cecilia@gmail.com','$2y$10$h6nFUrFSX22b.5ReqGFuzubzaENWc3P2U6KKY45Ns1GK30F5GctDS',NULL,0),(9,'Carlos Drummond de Andrade','drummond@gmail.com','$2y$10$y7/7vZeAHO8/lodkMMg4deCUYvVJEQfepCFkvDbn.BL263wu.2RAC',NULL,0),(10,'Machado de Assis','machado@gmail.com','$2y$10$oQWf7TQ94npHiFnkmINrt.OSLANia4ci1lgvrjmi4j252XCSj2qWi',NULL,0),(11,'Graciliano Ramos','ramos@hotmail.com','$2y$10$ckiE3eQFtRbGaBMto71oEuVb.5TISMQQIhdnU1m/zZBU4dTenjblO',NULL,0),(12,'Luis Fernando Veríssimo','verissimo@hotmail.com','$2y$10$VFnuf0b/YQRnPDL3lXmlheDFoO26jF63Vb/.gIvvNfew8jhVqt6Mq',NULL,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) DEFAULT NULL,
  `date_access` datetime DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitors`
--

LOCK TABLES `visitors` WRITE;
/*!40000 ALTER TABLE `visitors` DISABLE KEYS */;
INSERT INTO `visitors` VALUES (1,'1','2021-10-02 15:29:17','/'),(2,'1','2021-10-01 15:29:17','/'),(3,'1','2021-08-12 20:44:52','/painel/settings'),(4,'1','2021-09-02 11:46:19','/painel/profile'),(5,'1','2021-10-02 10:16:53','/painel/profile'),(6,'1','2021-10-04 09:37:18','/painel/pages'),(7,'1','2021-10-02 08:09:27','/painel/pages'),(8,'1','2021-10-04 17:03:55','/painel/pages'),(9,'1','2021-06-13 09:09:50','/painel/pages'),(10,'1','2021-05-13 12:10:14','/'),(11,'1','2021-06-03 18:16:53','/'),(12,'1','2021-06-19 22:17:34','/painel/settings');
/*!40000 ALTER TABLE `visitors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-06 22:07:04
