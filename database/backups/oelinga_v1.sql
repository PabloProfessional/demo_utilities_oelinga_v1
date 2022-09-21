-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: oelinga_v1
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accounts_payables`
--

DROP TABLE IF EXISTS `accounts_payables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accounts_payables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_unit_id` int NOT NULL,
  `user_id` int NOT NULL,
  `credit` int DEFAULT NULL,
  `debit` int DEFAULT NULL,
  `balance` int DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts_payables`
--

LOCK TABLES `accounts_payables` WRITE;
/*!40000 ALTER TABLE `accounts_payables` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts_payables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accounts_receivables`
--

DROP TABLE IF EXISTS `accounts_receivables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accounts_receivables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_unit_id` int NOT NULL,
  `user_id` int NOT NULL,
  `credit` int DEFAULT NULL,
  `debit` int DEFAULT NULL,
  `balance` int DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts_receivables`
--

LOCK TABLES `accounts_receivables` WRITE;
/*!40000 ALTER TABLE `accounts_receivables` DISABLE KEYS */;
/*!40000 ALTER TABLE `accounts_receivables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asset_banks`
--

DROP TABLE IF EXISTS `asset_banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asset_banks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_unit_id` int NOT NULL,
  `user_id` int NOT NULL,
  `credit` int DEFAULT NULL,
  `debit` int DEFAULT NULL,
  `balance` int DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asset_banks`
--

LOCK TABLES `asset_banks` WRITE;
/*!40000 ALTER TABLE `asset_banks` DISABLE KEYS */;
/*!40000 ALTER TABLE `asset_banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asset_cashes`
--

DROP TABLE IF EXISTS `asset_cashes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asset_cashes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_unit_id` int NOT NULL,
  `user_id` int NOT NULL,
  `credit` int DEFAULT NULL,
  `debit` int DEFAULT NULL,
  `balance` int DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asset_cashes`
--

LOCK TABLES `asset_cashes` WRITE;
/*!40000 ALTER TABLE `asset_cashes` DISABLE KEYS */;
/*!40000 ALTER TABLE `asset_cashes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `electricity_metre_readings`
--

DROP TABLE IF EXISTS `electricity_metre_readings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `electricity_metre_readings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `metre_id` int NOT NULL,
  `reading` bigint NOT NULL,
  `measurement_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Litres',
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `electricity_metre_readings`
--

LOCK TABLES `electricity_metre_readings` WRITE;
/*!40000 ALTER TABLE `electricity_metre_readings` DISABLE KEYS */;
INSERT INTO `electricity_metre_readings` VALUES (504,6,102877,'Wh','ADVZQHFN7IXGyDyEDcmiWheqMmL8i7w1FSPXomWNL5fty1n54avnIfP95T0i3gCi2voXhwNWVqTuJ5SWdFN0pOd1J36oj37aV2AK','2022-01-13 00:00:00','2022-08-11 08:49:01'),(505,6,102977,'Wh','o7VMuAEfSo6NBFas6abWXjxo82IxANKCzxrDJJyCHMal7YlzR9XPOLEG0V9G1B027maarwEPqBMdtCQvljqJQ1hWAYtEJuz4Zst2','2022-02-10 00:00:00','2022-08-11 08:49:02'),(506,6,103877,'Wh','Qd0SQ3v45sbaUHTXRrggvB47I1nzvBDgq59sbh6exNvNW3VsaReBrLMtoHBaZB60et6ExW2csoSmqfdWWUa629BlBTUN4hM0CpOb','2022-03-23 00:00:00','2022-08-11 08:49:02'),(507,6,112877,'Wh','2llCEsn8lMBt8H7NJNTj5jGadj2ZZO8J2TXleyQvYVykvUO40hesHSK5nR1qcMLxwmuJkE1H0r4gpzT5Uo7bjr7VpqOGw4ktFIBD','2022-04-13 00:00:00','2022-08-11 08:49:02'),(508,6,113877,'Wh','zdlgIFGJeHahHJsSVHGI5Gd2OpWozeUWKfQoPuUsTp8o3s6CLYf2C3tB1SPhpMW4YOI9cE69TYRIjXO3dW9S0ZF0xiWsXn77Q5Su','2022-05-28 00:00:00','2022-08-11 08:49:02'),(509,6,113900,'Wh','rjkJYfncgnVjDLys9dZxlQzEJHhJuZuPLdwwVrLtEsn4zZFCuMslqjo0U9KMxrYKzjJaBwOQhtEbcnBt287Nmh5KlZK5B1ZFlViS','2022-06-13 00:00:00','2022-08-11 08:49:02'),(510,6,115877,'Wh','v2H9WN6SS8ALCYGHF0Uc1D3BgkH34IP7OtOpypcNihhScvp9E5EifwfLbkjBuR3LyDyswdPAbD8pY7pxwL51ICTcd3FkrZHZAhq8','2022-07-03 00:00:00','2022-08-11 08:49:02'),(511,6,122877,'Wh','L3Rssoy0hq2zXipQ3xETX9wdwcbpxxXxLrwRv4UlrAOW5ODdVb27AJ7rl6WZ6bQ1etA50ek5AlZXQJfndG7UH8KxVvCfNF7ikUDa','2022-08-03 00:00:00','2022-08-11 08:49:02');
/*!40000 ALTER TABLE `electricity_metre_readings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `generator_metre_readings`
--

DROP TABLE IF EXISTS `generator_metre_readings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `generator_metre_readings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `metre_id` int NOT NULL,
  `reading` bigint NOT NULL,
  `measurement_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Wh',
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generator_metre_readings`
--

LOCK TABLES `generator_metre_readings` WRITE;
/*!40000 ALTER TABLE `generator_metre_readings` DISABLE KEYS */;
INSERT INTO `generator_metre_readings` VALUES (1,16,5678,'Wh',NULL,NULL,NULL),(2,16,10678,'Wh',NULL,NULL,NULL);
/*!40000 ALTER TABLE `generator_metre_readings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metre_brands`
--

DROP TABLE IF EXISTS `metre_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metre_brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metre_brands`
--

LOCK TABLES `metre_brands` WRITE;
/*!40000 ALTER TABLE `metre_brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `metre_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metre_types`
--

DROP TABLE IF EXISTS `metre_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metre_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metre_types`
--

LOCK TABLES `metre_types` WRITE;
/*!40000 ALTER TABLE `metre_types` DISABLE KEYS */;
INSERT INTO `metre_types` VALUES (1,'Electricity',NULL,'2022-07-22 08:20:45','2022-07-22 08:20:45','elect_sample.jpg',NULL),(2,'Water',NULL,'2022-07-22 08:20:45','2022-07-22 08:20:45','water_sample.jpg',NULL),(3,'Solar Panel Metre',NULL,NULL,NULL,'solar_panel_sample.jpg',NULL),(4,'Generator Metre',NULL,NULL,NULL,'generator_sample.jpg',NULL);
/*!40000 ALTER TABLE `metre_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metres`
--

DROP TABLE IF EXISTS `metres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `property_id` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `metre_type_id` int NOT NULL,
  `metre_brand_id` int NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metres`
--

LOCK TABLES `metres` WRITE;
/*!40000 ALTER TABLE `metres` DISABLE KEYS */;
INSERT INTO `metres` VALUES (1,'Electricity Metre',1,4,NULL,1,1,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(2,'Electricity Metre',1,5,NULL,1,1,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(3,'Water Metre',1,4,NULL,2,2,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(4,'Water Metre',1,5,NULL,2,2,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(5,'Electricity Metre',2,1,NULL,1,1,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(6,'Electricity Metre',2,2,NULL,1,1,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(7,'Electricity Metre',2,3,NULL,1,1,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(8,'Water Metre',2,1,NULL,2,2,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(9,'Water Metre',2,2,NULL,2,2,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(10,'Water Metre',2,3,NULL,2,2,NULL,'2022-07-22 08:38:57','2022-07-22 08:38:57',''),(11,'Solar Panel',2,1,NULL,3,3,NULL,NULL,NULL,'solar_panel_sample.jpg'),(12,'Diesel Generator',2,1,NULL,4,4,NULL,NULL,NULL,'generator_sample.jpg'),(13,'Municipal Metre No. 2832',3,6,NULL,1,1,NULL,NULL,NULL,'elect_sample.jpg'),(14,'Joburg Water',3,6,NULL,2,2,NULL,NULL,NULL,'water_sample.jpg'),(15,'SuperSolar Series 11',3,6,NULL,3,3,NULL,NULL,NULL,'solar_panel_sample.jpg'),(16,'Caterpillar Diesel - Model:C2.2 | D3',3,6,NULL,4,4,NULL,NULL,NULL,'cat_generator_sample.png');
/*!40000 ALTER TABLE `metres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(13,'2022_07_21_061251_create_property_groups_table',2),(14,'2022_07_21_062846_create_properties_table',2),(15,'2022_07_21_063013_create_metres_table',2),(16,'2022_07_21_063117_create_metre_types_table',2),(17,'2022_07_21_063344_create_property_types_table',2),(18,'2022_07_21_063714_create_property_group_users_table',2),(19,'2022_07_21_063754_create_property_users_table',2),(20,'2022_07_21_070209_create_metre_brands_table',2),(24,'2022_07_22_082733_create_electricity_metre_readings_table',3),(25,'2022_07_22_082905_create_water_metre_readings_table',3),(26,'2022_07_26_062002_add_picture_column_to_metre_types',4),(27,'2022_07_26_062201_add_picture_column_to_metres',4),(28,'2022_07_26_064527_create_solar_panel_metre_readings_table',5),(29,'2022_07_26_065615_create_generator_metre_readings_table',6),(30,'2022_07_28_035452_create_property_units_table',7),(31,'2022_07_28_040019_create_property_unit_tenants_table',7),(32,'2022_08_10_074433_create_property_unit_leases_table',7),(42,'2022_08_10_075025_create_property_unit_bills_table',8),(43,'2022_08_10_075343_create_accounts_receivables_table',8),(44,'2022_08_10_075433_create_accounts_payables_table',8),(45,'2022_08_10_075641_create_asset_cashes_table',8),(46,'2022_08_10_075719_create_asset_banks_table',8),(47,'2022_08_10_080320_create_property_unit_bill_items_table',8),(48,'2022_08_10_080833_create_property_unit_metres_table',8),(49,'2022_08_10_131331_create_property_unit_water_metre_readings_table',8),(50,'2022_08_10_131426_create_property_unit_electricity_metre_readings_table',8),(51,'2022_08_11_104141_add_units_consumed_colum_to_billing_items',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `properties` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `property_group_id` int NOT NULL,
  `property_type_id` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gps_coordinates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (2,'Oaklands Office Park',2,1,4,'Professional managed office spaces.','-26.0955212,27.9483853','Building E, Ballyoaks Office Park, 35 Ballyclare Dr, Johannesburg, 2021, South Africa','2022-07-22 06:38:40','2022-07-22 06:38:40');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_group_users`
--

DROP TABLE IF EXISTS `property_group_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_group_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_group_id` int NOT NULL,
  `user_id` int NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_group_users`
--

LOCK TABLES `property_group_users` WRITE;
/*!40000 ALTER TABLE `property_group_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_group_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_groups`
--

DROP TABLE IF EXISTS `property_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_groups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_groups`
--

LOCK TABLES `property_groups` WRITE;
/*!40000 ALTER TABLE `property_groups` DISABLE KEYS */;
INSERT INTO `property_groups` VALUES (1,'The Persona Group',NULL,2,'2022-07-22 06:17:01','2022-07-22 06:17:01'),(2,'Pablo Inc',NULL,1,'2022-07-22 06:17:01','2022-07-22 06:17:01'),(3,'The Mining Co.',NULL,3,NULL,NULL);
/*!40000 ALTER TABLE `property_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_types`
--

DROP TABLE IF EXISTS `property_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_types`
--

LOCK TABLES `property_types` WRITE;
/*!40000 ALTER TABLE `property_types` DISABLE KEYS */;
INSERT INTO `property_types` VALUES (1,'Retail',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(2,'Warehousing',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(3,'Health facility',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(4,'Office block',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(5,'Residential',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(6,'Sports facility',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(7,'Storage facility',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(8,'Manufacturing',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(9,'Food processing',NULL,NULL,'2022-07-22 06:16:53','2022-07-22 06:16:53'),(10,'Mine',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `property_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_unit_bill_items`
--

DROP TABLE IF EXISTS `property_unit_bill_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_unit_bill_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_bill_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `amount` int NOT NULL,
  `currency_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `units_consumed` int NOT NULL,
  `metre_type_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_unit_bill_items`
--

LOCK TABLES `property_unit_bill_items` WRITE;
/*!40000 ALTER TABLE `property_unit_bill_items` DISABLE KEYS */;
INSERT INTO `property_unit_bill_items` VALUES (1,1,'Electricity consumed in Kwh',NULL,2110,NULL,'2022-08-11 10:54:24','2022-08-11 10:54:24',1745,1),(2,9,'Electricity consumed in Kwh',NULL,2110,NULL,'2022-08-11 11:01:44','2022-08-11 11:01:44',1745,1),(3,10,'Electricity consumed in Kwh',NULL,1209,NULL,'2022-08-11 11:03:34','2022-08-11 11:03:34',1000,1),(4,11,'Electricity consumed in Kwh',NULL,602,NULL,'2022-08-11 11:05:49','2022-08-11 11:05:49',498,1),(5,12,'Electricity consumed in Kwh',NULL,742,NULL,'2022-08-11 11:06:35','2022-08-11 11:06:35',614,1),(6,13,'Electricity consumed in Kwh',NULL,215,NULL,'2022-08-11 11:07:53','2022-08-11 11:07:53',178,1),(7,14,'Electricity consumed in Kwh',NULL,1109,NULL,'2022-08-11 11:08:34','2022-08-11 11:08:34',917,1),(8,15,'Electricity consumed in Kwh',NULL,1377,NULL,'2022-08-11 11:09:49','2022-08-11 11:09:49',1139,1),(9,16,'Electricity consumed in Kwh',NULL,1887,NULL,'2022-08-11 11:10:38','2022-08-11 11:10:38',1561,1);
/*!40000 ALTER TABLE `property_unit_bill_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_unit_bills`
--

DROP TABLE IF EXISTS `property_unit_bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_unit_bills` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_unit_id` int NOT NULL,
  `property_unit_metre_id` int NOT NULL,
  `user_id` int NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_unit_bills`
--

LOCK TABLES `property_unit_bills` WRITE;
/*!40000 ALTER TABLE `property_unit_bills` DISABLE KEYS */;
INSERT INTO `property_unit_bills` VALUES (1,'Electricity Bill for January 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:32','2022-08-11 10:26:32'),(2,'Electricity Bill for February 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:33','2022-08-11 10:26:33'),(3,'Electricity Bill for March 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:33','2022-08-11 10:26:33'),(4,'Electricity Bill for April 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:33','2022-08-11 10:26:33'),(5,'Electricity Bill for May 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:33','2022-08-11 10:26:33'),(6,'Electricity Bill for June 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:33','2022-08-11 10:26:33'),(7,'Electricity Bill for July 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:33','2022-08-11 10:26:33'),(8,'Electricity Bill for August 2022',7,7,4,'Notes from billing.','2022-08-11 10:26:33','2022-08-11 10:26:33'),(9,'Electricity Bill for January 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41'),(10,'Electricity Bill for February 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41'),(11,'Electricity Bill for March 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41'),(12,'Electricity Bill for April 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41'),(13,'Electricity Bill for May 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41'),(14,'Electricity Bill for June 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41'),(15,'Electricity Bill for July 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41'),(16,'Electricity Bill for August 2022',7,1,4,'Notes from billing.','2022-08-11 10:34:41','2022-08-11 10:34:41');
/*!40000 ALTER TABLE `property_unit_bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_unit_electricity_metre_readings`
--

DROP TABLE IF EXISTS `property_unit_electricity_metre_readings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_unit_electricity_metre_readings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `metre_id` int NOT NULL,
  `reading` bigint NOT NULL,
  `measurement_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Wh',
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_unit_electricity_metre_readings`
--

LOCK TABLES `property_unit_electricity_metre_readings` WRITE;
/*!40000 ALTER TABLE `property_unit_electricity_metre_readings` DISABLE KEYS */;
INSERT INTO `property_unit_electricity_metre_readings` VALUES (1,7,15999,'Wh','hRWsvqcfP2ja4DeONxVKdDlS0sHqg5Gvom5oeKbBh132pVskzBp7DQW8fKNBJqDo2unWQd2OANDOyb0WaKcu73hkPSp0SJHQKEIe','2022-01-31 00:00:00','2022-08-11 10:25:22'),(2,7,16999,'Wh','p8JWZLcxldvXMyZ9juxty0HZ9BwZTcAwfNje7l6ILTGz0TM3vXuGjRfBHHA4hsJkavGeMwIVSxrvtAZ4RAAN4EtQmbZ6e5Vihmc6','2022-02-28 00:00:00','2022-08-11 10:25:22'),(3,7,17497,'Wh','Mf1F35035OWvkzg4jlhy6oJQxgBcKurahL9Kv7fRkbqxcvp7H30BlSlfeYW3eY67kWDhKNHRLWxnViLrEeHrjnQ3mzSQItH2wnVR','2022-03-31 00:00:00','2022-08-11 10:25:23'),(4,7,18111,'Wh','GU7Lr1paoj5e8LhuDmvTjPt50sAZSqnyvDMSFRZkTUboDOTiYIISikFrWKLqcZgl99w2xidWeYLAmCvV7RUp5aY5cO78urtZmTVU','2022-04-30 00:00:00','2022-08-11 10:25:23'),(5,7,18289,'Wh','Wtehv7J8ONPGryPxxTWLNnHzvUoKVr8YQq8bnVITilPyvIVrPqgMxxYmoYME7Km9kZgQra1Fcv0ML4zoi11e6DCC28omprvhCBHv','2022-05-31 00:00:00','2022-08-11 10:25:23'),(6,7,19206,'Wh','AMsZ3CB4HXLsLN5Z5J73f5jm5UPeAOtPwx2PyeyzqbbT0JGoiuMmiiYGkzAMYJweWSHbi8QWOBHIrnxOVAtk56NDVRgdK8pAArjL','2022-06-30 00:00:00','2022-08-11 10:25:23'),(7,7,20345,'Wh','Tk42nqZ178AspGwSwxc9iqrmfMp4rHPkljSKYGyU9F8WrGbacCosmBdn0ISiduM7fRPwrZY9e8ukCG69BUVnYvzkNkcQjLHpqZ9g','2022-07-31 00:00:00','2022-08-11 10:25:23'),(8,7,21906,'Wh','rjwqaDaz34squjPAxWSECL5OoDrZVjuMNNM0g0RX519cUQEAqI8aWT9RwiifqqCyjwYbjTyjBCTBEfXCU7zEg8i3jdPPQxhMBpAA','2022-08-31 00:00:00','2022-08-11 10:25:23'),(9,7,15999,'Wh','eRv1a2gYW68F9iN4MxKhXSz34Fs46YeITYzE13Zid0I34UuNg0HGK2GMpZ6nfa7iMgLLRoMUMC8msuHx1EJ98biTdbOGcQEL8kwV','2022-01-31 00:00:00','2022-08-11 10:32:12'),(10,7,16999,'Wh','ONdRZeNrjd8gGc08YMSblMlIDBAmdByf9vAJu0O6kgB08U2xM6LMSdmxIkXKtHKyeHRuQIYxdZ4mUr6R9dMjJglMQrrTOiIkMMHe','2022-02-28 00:00:00','2022-08-11 10:32:12'),(11,7,17497,'Wh','xvD7sAU0FAQbW5yFMrbiOlaYR9iPQxFWgz58SnYf782PheLFN0SzPt6rHrbxZktGQe9fLasIOswxxnd5WfUzU7cSHqZmsHJmoYyy','2022-03-31 00:00:00','2022-08-11 10:32:12'),(12,7,18111,'Wh','eg53Ip1KjnQ6yYaY6kdb1XEGkML2mVVMWYJJWWKm8Y62H5fhvfSqIw1KlgkGuwO6d5GirjMqz8SAlRf0TqF8RTHse5zR7t0MhfBr','2022-04-30 00:00:00','2022-08-11 10:32:12'),(13,7,18289,'Wh','8JCHqMltzkWMJ2lydaETGt3wXx61AquAb1ml5ATceJXvNsMKjqHqu6G6zRGymoZpZYE1lddhDv3m82vCoOQ4lEd7ONviFUVBPlEy','2022-05-31 00:00:00','2022-08-11 10:32:12'),(14,7,19206,'Wh','a2LEK14BuIjksjtwKpIko1XPO7ZZywPVFupURWlvQtGYersg8C8vFF70Un3f1GwzmJB4qpSrY1PTwMwIMx1mfiVcTFW7TlTdyq8y','2022-06-30 00:00:00','2022-08-11 10:32:12'),(15,7,20345,'Wh','rIWo2UI7EKo7G8VGMf6M67IHgn4TpNySqmx9fbKb38cnkZdRmXgOoTAGR7RIjUNtCFWR8pjPuo4EBpKf9jSMgiPGRRZIlSYiAvH2','2022-07-31 00:00:00','2022-08-11 10:32:12'),(16,7,21906,'Wh','PuUySsf2FYcQdOjynY1WkArOBe2WOLXGGEThj0MnqOAvCt7fLd3AZgt4MKfuzT0Fwovj5x9lMGVKZl6AO8ltt8GIturCJsxaTY7w','2022-08-31 00:00:00','2022-08-11 10:32:12'),(17,1,15999,'Wh','q0vqgg16Rk2G09yvVU4lckQdSosCt4N92sePUtYg7GtnB7GIUUK6Y4Tb5jn7xRTgpeiGt2YDalJlBAUzPPC39aGaboBgLjXYJlWu','2022-01-31 00:00:00','2022-08-11 10:33:15'),(18,1,16999,'Wh','67knIB1snRwZwweRWf7RyGhBRElYuP6QshmG6SCKRcJzIBIgyNwluTTIp4OX4OotNDWFETvk0ii1jH399GzR5ruA3Y9SBIJZp5Lj','2022-02-28 00:00:00','2022-08-11 10:33:15'),(19,1,17497,'Wh','4MBb4EpkJgT4Aa7D7CIT7OpgiSdGmf0mXAGxYFplIjd5oivYoi070WNmKdKKA5CMfsQEJd0DohQGUz0XQe5TU7dygU88E2rdb9tq','2022-03-31 00:00:00','2022-08-11 10:33:15'),(20,1,18111,'Wh','kbqmPks8gmsMKgBlZVxrlwsRn7fM227ecWxtdqjnakkVfFS3V5EjsMOKG9olTrWk3C3J1CkcbtKvUm4ND9feetrbiDtlnutBBfgj','2022-04-30 00:00:00','2022-08-11 10:33:15'),(21,1,18289,'Wh','bfAG979CihZr1nJNPlY3tus1GXWfXeiAG3rQBLt0O10ly9UvOBfgs1auWKg7dC6Zh9jO4lvKXVZKKYR9oKEFwwvgcpALgY12Z75h','2022-05-31 00:00:00','2022-08-11 10:33:15'),(22,1,19206,'Wh','p2LlPRQ1KHllMXsFULb0NJP3jKHqvJid6ggirrp74MYWvXKRgSvl7hwEqbOQnGSFo8wCnJ2T04zXoFAfSkrgseo1LDBqpPlamqWa','2022-06-30 00:00:00','2022-08-11 10:33:15'),(23,1,20345,'Wh','TkVJzWEiERDJB07gMNAScyKN8vjzq5OuIbgjINQkOMXdgizxhSG4EwG9ZG6xJ6uRRKU6IU5Yq3ybP4gGpjYYg6u4CxdImnDBLSxs','2022-07-31 00:00:00','2022-08-11 10:33:15'),(24,1,21906,'Wh','Q0ENLEYUzB4fnqqMSf50jXdIzVKACTVlNhTHLcGXZsoGr3zDLVm3NiUR3PRyWrvo6ZQCyeVUumZ5O9QQdPHS1UnhsaLlRFb6zr9l','2022-08-31 00:00:00','2022-08-11 10:33:15');
/*!40000 ALTER TABLE `property_unit_electricity_metre_readings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_unit_leases`
--

DROP TABLE IF EXISTS `property_unit_leases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_unit_leases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_unit_id` int NOT NULL,
  `user_id` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_unit_leases`
--

LOCK TABLES `property_unit_leases` WRITE;
/*!40000 ALTER TABLE `property_unit_leases` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_unit_leases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_unit_metres`
--

DROP TABLE IF EXISTS `property_unit_metres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_unit_metres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_unit_id` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `metre_type_id` int NOT NULL,
  `metre_brand_id` int NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_unit_metres`
--

LOCK TABLES `property_unit_metres` WRITE;
/*!40000 ALTER TABLE `property_unit_metres` DISABLE KEYS */;
INSERT INTO `property_unit_metres` VALUES (1,'Electricity Metre',7,NULL,1,1,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42'),(2,'Water Metre',7,NULL,2,2,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42'),(3,'Water Metre',8,NULL,2,2,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42'),(4,'Electricity Metre',8,NULL,1,1,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42'),(5,'Electricity Metre',9,NULL,1,1,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42'),(6,'Water Metre',9,NULL,2,2,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42'),(7,'Electricity Metre',10,NULL,1,1,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42'),(8,'Water Metre',10,NULL,2,2,NULL,'2022-08-11 10:30:42','2022-08-11 10:30:42');
/*!40000 ALTER TABLE `property_unit_metres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_unit_tenants`
--

DROP TABLE IF EXISTS `property_unit_tenants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_unit_tenants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_unit_id` int NOT NULL,
  `user_id` int NOT NULL,
  `property_unit_lease_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_unit_tenants`
--

LOCK TABLES `property_unit_tenants` WRITE;
/*!40000 ALTER TABLE `property_unit_tenants` DISABLE KEYS */;
INSERT INTO `property_unit_tenants` VALUES (6,7,4,1,'2022-08-11 09:03:36','2022-08-11 09:03:36'),(7,8,5,2,'2022-08-11 09:03:36','2022-08-11 09:03:36'),(8,9,6,1,'2022-08-11 09:03:36','2022-08-11 09:03:36'),(9,10,4,1,'2022-08-11 09:03:36','2022-08-11 09:03:36'),(10,2,7,2,'2022-08-11 09:03:36','2022-08-11 09:03:36'),(11,6,4,1,'2022-08-11 09:03:36','2022-08-11 09:03:36');
/*!40000 ALTER TABLE `property_unit_tenants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_unit_water_metre_readings`
--

DROP TABLE IF EXISTS `property_unit_water_metre_readings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_unit_water_metre_readings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `metre_id` int NOT NULL,
  `reading` bigint NOT NULL,
  `measurement_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'l',
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_unit_water_metre_readings`
--

LOCK TABLES `property_unit_water_metre_readings` WRITE;
/*!40000 ALTER TABLE `property_unit_water_metre_readings` DISABLE KEYS */;
INSERT INTO `property_unit_water_metre_readings` VALUES (1,8,150897,'l','RzOVwWLIeRlrE76GOAt5USyqOGZ3XqF0DxB0VHYVPhZ7rrL4Fx8HjY7c3PcusDsrcELEgRhccblMkBdaPaUCAPiSHtTMsQYWisAQ','2022-01-14 00:00:00','2022-08-11 10:25:13'),(2,8,161897,'l','SWXYBkHo3sC8FjL2aPTHZDIUJxduAEDiPP2k4a0JwBAeyD8D2vRWWPb0RJElOYTkAuQU0CZ504QHm53FbBn7JePJn51f9MrcaGwy','2022-02-24 00:00:00','2022-08-11 10:25:13'),(3,8,170197,'l','EAz7bUi5WybinRF7hd6Oj6iUisEL4NoBQUJWPI5f9HBUj92QYvftZJu2fzXiuAeCwElLhNGlrNBFb1RjsDKJn3HbOuoMcLCrigAq','2022-03-23 00:00:00','2022-08-11 10:25:13'),(4,8,184001,'l','kjx13GeESpdu9V9Mi5Hiub2MrYjRhBIkxwYdM1K6xog7zzqD8kkgHXPYO43abMJoBTqU9BxisP7DtTU5SJ7gVCCwEGvxc84yJjMv','2022-04-14 00:00:00','2022-08-11 10:25:13'),(5,8,186345,'l','GNUrdGuLXmkt29XaLPXRTZy1CKTLfqo7Jbc66l48STSnnciFEiD1el3XprqyF7HaVZB1HpGoVHR29go1SUE5H6S6Yti6jC1NxBSm','2022-05-24 00:00:00','2022-08-11 10:25:13'),(6,8,190100,'l','TyxMqGNoHUZvG10PNcraHY2UR3R7SLTpHynOQt3fzG6iIRs7zLsTX9A0VXwGvqYIxuSWh3lCzPfwhVWt1elTu0FbixvoqQqIZG1L','2022-06-04 00:00:00','2022-08-11 10:25:13'),(7,8,200145,'l','NaSc0cwi1yix7bDZtR5nqSnxcvhZXU71QkZb3nbpND2TBSWJn4T7p0ewbWvqmyDuZQAzyWs8gPMoH2FGyzqc2iBrZOPbJNb3vHF6','2022-07-13 00:00:00','2022-08-11 10:25:13'),(8,8,200866,'l','Vf2GaIuCmnoBPfgY0g97HT8Qc6aK3GuSFnnHXzMkBk03GBNNlUDMdHeoPNOtCzyqQvNHZs4OKXfLZTVWJiLkHqnPjPuiaKm3Fu79','2022-08-04 00:00:00','2022-08-11 10:25:13'),(9,2,150897,'l','cXQGjkae3wncMlUdxoKkCex6vCUSFO5O1WjEkmZ0tc1XxFUcDhEK40I8CImH7CoTU4v3foPswC5KNVXoAon5sztot1eAnIl6OM7r','2022-01-14 00:00:00','2022-08-11 10:33:54'),(10,2,161897,'l','L0WcZpX12ckynvBDsTZl7iqk9VmHAf4IPk0e8Wb2Dde3YvalSYBMgiEZ0OxRdXaxR7dp4GgNSgmknx2Pl1lhMVT5mlMM2YZgONSA','2022-02-24 00:00:00','2022-08-11 10:33:54'),(11,2,170197,'l','awG5BgHAxh4FmY3r2qjWp0rkxoPAEBT2Bi1GeBRdKXk4D6L3LdOku4biELHrdkBA7orUEh3sCKpr4SjSpzVC1fjAEF2YydpicLNZ','2022-03-23 00:00:00','2022-08-11 10:33:54'),(12,2,184001,'l','aFwXKWQo1MQgC1uJ9SY3JWzFuTBQIpOqNUgkSDxPrN7dGKrKkGxryUgRIB4bGPg5k5qvl11zir1IyIwOQiEMPYCnGPm3R9hRz8qd','2022-04-14 00:00:00','2022-08-11 10:33:54'),(13,2,186345,'l','1VlCMdHP9l8Tay25fO2grRi6y7mUnEce6uo9MAKyg9i9ARpF5ORG8kSoVu6bSiDqus2xCDfimUOfTWZ2BEwwt9HzLI6TsoE3dQ2Z','2022-05-24 00:00:00','2022-08-11 10:33:54'),(14,2,190100,'l','z2MTvaa9VLBD4m9GPNkJVF5qAcPImjPTh1kt5z7J8WbGvlKYGWZpDv2IjxZpxg1xSYdFnMhmdbsFI2BpNElctUVgNgMNG4x8KwvO','2022-06-04 00:00:00','2022-08-11 10:33:54'),(15,2,200145,'l','gamhQIpvUGn07qThG311RzBoR6JQVMUhXvhRiFOjqfDPT90gzj3arle1UxI17hFmrFIMBWLc4wzpuxqPfnx1x7sMxLkZCwfauR7m','2022-07-13 00:00:00','2022-08-11 10:33:54'),(16,2,200866,'l','NRNfhOul9RV5vWz69nitqJG5tOkj6P9PEPpiJxgmlPYipvo7jLA00bHeQ1s0QOwMy6MVL6mMpi5IYbHdqVFReUhRkzRdECc6lURY','2022-08-04 00:00:00','2022-08-11 10:33:54');
/*!40000 ALTER TABLE `property_unit_water_metre_readings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_units`
--

DROP TABLE IF EXISTS `property_units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_units`
--

LOCK TABLES `property_units` WRITE;
/*!40000 ALTER TABLE `property_units` DISABLE KEYS */;
INSERT INTO `property_units` VALUES (1,1,'Shop #524',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(2,1,'Shop #27827',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(3,1,'Shop #54',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(4,1,'Shop #24',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(5,1,'Shop #50024',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(6,1,'Shop #98287',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(7,2,'Office A',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(8,2,'Office B',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(9,2,'Office C',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36'),(10,2,'Canteen',NULL,'2022-08-10 08:35:36','2022-08-10 08:35:36');
/*!40000 ALTER TABLE `property_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_users`
--

DROP TABLE IF EXISTS `property_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `user_id` int NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_users`
--

LOCK TABLES `property_users` WRITE;
/*!40000 ALTER TABLE `property_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solar_panel_metre_readings`
--

DROP TABLE IF EXISTS `solar_panel_metre_readings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solar_panel_metre_readings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `metre_id` int NOT NULL,
  `reading` bigint NOT NULL,
  `measurement_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Wh',
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solar_panel_metre_readings`
--

LOCK TABLES `solar_panel_metre_readings` WRITE;
/*!40000 ALTER TABLE `solar_panel_metre_readings` DISABLE KEYS */;
INSERT INTO `solar_panel_metre_readings` VALUES (1,15,1827267,'Wh',NULL,NULL,NULL),(2,15,345672,'Wh',NULL,NULL,NULL);
/*!40000 ALTER TABLE `solar_panel_metre_readings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Muigai','muigzn@gmail.com',NULL,'$2y$10$cSGfn6oqu2tZT/DYc/ZikOmwjzy1qHW5l1kUzSXWCyZZOrNcWWrsK',NULL,'2022-07-21 09:21:20','2022-07-21 09:21:20'),(2,'Persona One','persona.one@email.test',NULL,'$2y$10$W4DNdhg93iGHaB3nUJ1.F.idf79RP5bWZej43Nb2xvQJ0P2ckNMSW',NULL,'2022-07-21 09:31:47','2022-07-21 09:31:47'),(3,'Persona Two','persona.two@email.test',NULL,'$2y$10$emN5djVVB9kcGl8/yCkm1OB2Dv1Ryp8m.86t2xXoiP1cETe8m8bKq',NULL,'2022-07-28 04:15:25','2022-07-28 04:15:25'),(4,'Tenant Persona','tenant.one@email.test',NULL,'$2y$10$vWr020FPn4q2pPewPyQW2.5BOmeYGE3zyOT7y.U5imBS/zoIw72qO',NULL,'2022-08-10 08:42:17','2022-08-10 08:42:17'),(5,'Second Tenant Persona','tenant.two@email.test',NULL,'$2y$10$0/ycG3LyJYZV62NlvM9OHO0cZ5Habqf3Xwn1toBEIV/UmnqyYz7jm',NULL,'2022-08-10 08:42:57','2022-08-10 08:42:57'),(6,'Third Tenant Persona','tenant.three@email.test',NULL,'$2y$10$DYWC5eq82rsiurwReNjt0u55NugG6t80V0LQB2uuyBGPjfS7Z57IC',NULL,'2022-08-10 08:43:35','2022-08-10 08:43:35'),(7,'Fourth Tenant Persona','tenant.four@email.test',NULL,'$2y$10$awS0l5RrYQhJbVf/GJMUQu4uturIwPg8yNacdkfBb0GrmMFN7gZxq',NULL,'2022-08-10 08:44:07','2022-08-10 08:44:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `water_metre_readings`
--

DROP TABLE IF EXISTS `water_metre_readings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `water_metre_readings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `metre_id` int NOT NULL,
  `reading` bigint NOT NULL,
  `measurement_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Litres',
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=628 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `water_metre_readings`
--

LOCK TABLES `water_metre_readings` WRITE;
/*!40000 ALTER TABLE `water_metre_readings` DISABLE KEYS */;
INSERT INTO `water_metre_readings` VALUES (620,9,102889,'Litres','jWBLhqHl7mmFNBYFOYl6zsE63RBjiOteixOURW2BpNBfZO6PHBbV5Es21sPNpfnlxGZx0DI4TmanntbQWvS78ZqLbx1mPJPpAxct','2022-01-13 00:00:00','2022-08-11 09:00:24'),(621,9,102935,'Litres','9kmyCs7TCRfjY47Mgg2Ldk3U5lz4LVo20SPmCaMBjspuOfhg9BaZG6qazJBPhIHQQESZ0vstJQ3rDiH0gwEKU5HHqXsfH9y9sJv3','2022-02-10 00:00:00','2022-08-11 09:00:24'),(622,9,103867,'Litres','b16WIlMQi8Jvxr0jfIB7T4dzUlelXRYtY7AW0QAXd7hcMelHf4HjPq3NaGEmopFjrOQAkHO3Zv1Mgfq8pkjWugGpSS0AMTRCYPNa','2022-03-23 00:00:00','2022-08-11 09:00:24'),(623,9,112918,'Litres','duYeTyn4vE4tmUMztRJPHKH1EZQGMjP3Et3eQWBkpILaYyvMKYyu0z8jCm2KV4YRvs61FxYkNVcppXOnivFmQFP9l4nujqTxbUKi','2022-04-13 00:00:00','2022-08-11 09:00:24'),(624,9,113876,'Litres','FrwYOAa0x1V4duclQlQCUw7VwFgtScF2QerBveL1XvPvWICOnZ52Vvf9zmCsKsMq0vIzE71LcFwkyOLTPXXDA7aYtBFkpManV0AD','2022-05-28 00:00:00','2022-08-11 09:00:24'),(625,9,113904,'Litres','lVsq2GTeYRvXBz9YlEChzKv3Xak4pJQQuesyOwIpszBxwKraUxTHkUnG6iYEZnhRtblirGoopW01hYsBjYIiUYpBni5QFWCQIb59','2022-06-13 00:00:00','2022-08-11 09:00:24'),(626,9,115870,'Litres','LiiRWxeXk3ajMqJ0ml5X3diGe8SCS69LlZntIsIbQb1FuOUdv3gi9Mc3Ekf5U4rS2hO9Sgkh95lTbTDZblOtFJe5xcPF6Qkq1tmn','2022-07-03 00:00:00','2022-08-11 09:00:24'),(627,9,122877,'Litres','73UVE8LZAlxGxwvbkIQcJhyNAQbRKVMJIA8bqlphAj8ePxEidmdw7j2awQPjQQoPFylrcxQtQF5ve5eiZcjXOa8hNk9JkkDStWd0','2022-08-03 00:00:00','2022-08-11 09:00:24');
/*!40000 ALTER TABLE `water_metre_readings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-11 15:02:41
