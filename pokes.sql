CREATE DATABASE  IF NOT EXISTS `pokes` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pokes`;
-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pokes
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Peter Kang','pete','pete@kang.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 19:58:09','2016-03-06 19:58:09'),(2,'john smith','hemsworth','john@hems.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(3,'dorothy col','dore','dor@dor.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(4,'col dam','oneer','col@con.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(5,'connor edsall','connor','con@con.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(6,'billy kid','kidd','mon@mon.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(7,'killbill','bill','ban@ban.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(8,'rocket john','rock','wam@wam.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(9,'stone cold','cold','cam@cam.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13'),(10,'the rock','chef','moon@shine.com','5f4dcc3b5aa765d61d8327deb882cf99',NULL,'2016-03-06 20:39:13','2016-03-06 20:39:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_pokes`
--

DROP TABLE IF EXISTS `users_pokes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_pokes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `poke_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_pokes_users_idx` (`user_id`),
  CONSTRAINT `fk_pokes_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_pokes`
--

LOCK TABLES `users_pokes` WRITE;
/*!40000 ALTER TABLE `users_pokes` DISABLE KEYS */;
INSERT INTO `users_pokes` VALUES (1,1,2,8),(2,1,3,9),(3,1,4,13),(4,2,1,23),(5,2,5,34),(6,2,7,44);
/*!40000 ALTER TABLE `users_pokes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-06 23:09:40
