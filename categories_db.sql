-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: categories_db
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'autem',NULL,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(2,'est',NULL,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(3,'necessitatibus',NULL,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(4,'consequatur',NULL,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(5,'nobis',NULL,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(7,'consequatur',1,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(8,'omnis',1,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(9,'autem',2,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(10,'ut',2,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(11,'voluptatum',2,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(12,'consequatur',3,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(13,'placeat',3,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(14,'voluptatem',3,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(15,'quia',4,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(16,'dolorum',4,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(17,'officiis',4,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(18,'cumque',5,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(19,'dolor',5,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(20,'nulla',5,'2020-05-28 08:35:00','2020-05-28 08:35:00'),(21,'voluptatem',NULL,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(22,'voluptas',NULL,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(23,'in',NULL,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(24,'voluptatem',NULL,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(25,'quam',NULL,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(26,'dolor',21,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(27,'voluptate',21,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(28,'impedit',21,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(29,'consequuntur',22,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(30,'praesentium',22,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(31,'architecto',22,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(32,'voluptatibus',23,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(33,'quae',23,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(34,'sed',23,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(35,'natus',24,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(36,'consequatur',24,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(37,'ut',24,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(38,'incidunt',25,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(39,'error',25,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(40,'hic',25,'2020-05-28 08:36:44','2020-05-28 08:36:44'),(42,'Nowa',1,'2020-05-28 10:39:39','2020-05-28 10:40:24'),(43,'Nowa Nowa',42,'2020-05-28 10:40:02','2020-05-28 10:40:02'),(44,'Nowa Nowa Nowa',43,'2020-05-28 10:40:13','2020-05-28 10:40:13'),(45,'New Cat',7,'2020-05-29 09:45:54','2020-05-29 09:45:54'),(46,'Subcat for new cat',45,'2020-05-29 09:46:08','2020-05-29 09:46:08');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_05_23_065429_create_categories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'admin','admin@admin.com','2020-05-28 08:36:44','$2y$10$zr6evhp8nMyEK6gbNlD3J.tTMfa1wVAv6FIORAnQOPgeMr742Am9m',1,'2HabyCVz1DXVReJFJ4ARkl6IPJ4shle57KGRejIIcrWsoeu1Aev0MPZJ6zfK','2020-05-28 08:36:44','2020-05-28 08:36:44'),(4,'user','user@user.com',NULL,'$2y$10$CdJTyXFNCcHHkaj7oKowceJdX/T9SJmFoPHrWXa7dn/jduWh0NAga',0,NULL,'2020-05-28 08:58:22','2020-05-28 08:58:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-29 14:53:18
