-- MySQL dump 10.13  Distrib 9.0.1, for macos14.4 (x86_64)
--
-- Host: localhost    Database: gratech
-- ------------------------------------------------------
-- Server version	9.0.1

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `google2fa_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `google2fa_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'general/images/IbR0TAV20IAsrX0Fk4lg.jpg','Super','Admin','admin@coevs.com',NULL,'$2y$12$szdK7JKgEeKOPgRY0yB3mexoLtnHvTr9bGlHlj6D9nfnyC2LnQKm.','eyJpdiI6Ind2TS8zOVRMdFVuOVk4ejZ0TU1SV0E9PSIsInZhbHVlIjoiT1N2NUtKcWVtbGIzaktGYm1KUDRqR3VrbDkrTmdMU2F1anh3Zkd5UGpxND0iLCJtYWMiOiJiNmQwMDQ4OGFjNzkyYWQ3Zjk4MzcyNmE2ZWQ4NjgzNmE5ZWQxNGFkOGRkZTdmYjVmMWQ4NzQ0ODhjMDkxN2Y0IiwidGFnIjoiIn0=',0,1,'RUOLa1ch4WrbOsElu8IWTqkKhaacTUmWzN04puQezlWuW85ZZSFOmyc1vRoa','2024-10-02 16:37:59','2024-11-24 15:01:43'),(2,'general/images/syAndmUsRKOFlMdk8BzG.png','John','Doe','john.doe@gmail.com',NULL,'$2y$12$FBCO7rtL7aoC.yCmld0yDO36PTuSGYLlR0WW3PGXZl/r6a1zkodyG',NULL,0,1,NULL,'2024-10-03 02:22:54','2024-10-22 03:34:08'),(3,'general/images/3ogxu86DoucfO3gaKLYZ.png','Lucy','Green','lucy.green@gmail.com',NULL,'$2y$12$qklQanMX/TqjOSam.zdZDu8OwqgWLLyDeaeDsAjnnxWNoUD9qCoGC',NULL,0,1,'sN9TiLJH0gwGRd5JwcDioTtJ4ASdiexrKTgISthzTb3Te5YFEAGI99k6DSvj','2024-10-03 02:23:29','2024-10-22 03:52:49'),(4,'general/images/HlhYhxDu9j2S8d2aUtQk.jpg','Tom','White','tom.white@mailinator.com',NULL,'$2y$12$JNDs68QKeEcz5RIUl0S8Y.p3zSTObJbANAn/TXAYr3BONCK7QClVq',NULL,0,1,NULL,'2024-10-03 02:25:07','2024-10-22 03:54:04'),(7,'general/images/vZsCEQRB2xVFeX5fmSyL.jpg','Anna','Bell','anna.bell@gmail.com',NULL,'$2y$12$yiJ.GwiAaE5xdEj8YvMmzeXtc1/Eyt/8APvKMiaqsHL9IPV.YUlBi',NULL,0,1,NULL,'2024-10-22 03:55:50','2024-10-22 03:57:05');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_categories`
--

LOCK TABLES `blog_categories` WRITE;
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component_contents`
--

DROP TABLE IF EXISTS `component_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `component_contents` (
  `id` bigint unsigned NOT NULL,
  `component_id` int unsigned NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component_contents`
--

LOCK TABLES `component_contents` WRITE;
/*!40000 ALTER TABLE `component_contents` DISABLE KEYS */;
/*!40000 ALTER TABLE `component_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposit_methods`
--

DROP TABLE IF EXISTS `deposit_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deposit_methods` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `payment_gateway_id` int NOT NULL COMMENT 'Payment gateway id',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('auto','manual') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'auto = automatic, manual = manual',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_limit` double NOT NULL,
  `max_limit` double NOT NULL,
  `rate_type` enum('fixed','live') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'fixed = fixed rate, live = live rate',
  `rate` double NOT NULL,
  `charge_type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'fixed = fixed charge, percent = percent charge',
  `charge` double NOT NULL,
  `fields` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposit_methods`
--

LOCK TABLES `deposit_methods` WRITE;
/*!40000 ALTER TABLE `deposit_methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `deposit_methods` ENABLE KEYS */;
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
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `is_rtl` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (13,'English','en',1,0,1,'2024-04-18 15:20:22','2024-07-24 17:52:35'),(19,'Spanish','es',0,0,1,'2024-04-30 21:01:46','2024-07-24 17:52:35');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` bigint unsigned DEFAULT NULL,
  `ticket_id` bigint unsigned NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_02_14_084421_create_settings_table',2),(6,'2024_02_17_083615_create_navigations_table',2),(7,'2024_02_17_170813_create_pages_table',3),(8,'2024_02_20_062543_create_page_components_table',4),(9,'2024_02_20_091051_create_component_contents_table',5),(10,'2024_03_01_065918_create_plugins_table',6),(11,'2024_03_01_134341_create_socials_table',6),(12,'2024_03_01_172009_create_subscriptions_table',7),(13,'2024_03_14_153750_create_blogs_table',7),(14,'2024_03_14_153804_create_blog_categories_table',7),(15,'2024_04_14_200114_create_languages_table',8),(16,'2024_05_05_085819_create_site_customs_table',8),(17,'2024_08_28_160357_create_admins_table',9),(18,'2024_08_31_175511_create_payment_gateways_table',9),(19,'2024_08_31_175540_create_deposit_methods_table',9),(20,'2024_09_08_103917_create_transactions_table',9),(21,'2024_09_12_080045_create_notifications_table',9),(22,'2024_09_13_143456_create_services_table',9),(23,'2024_09_13_143843_create_plans_table',10),(24,'2024_09_23_082641_create_orders_table',10),(25,'2024_09_23_104607_create_tasks_table',10),(26,'2024_09_28_154642_create_subscribers_table',10),(27,'2024_10_03_032043_create_permission_tables',10),(28,'2024_10_04_155114_create_tickets_table',10),(29,'2024_10_04_155126_create_messages_table',11),(30,'2024_10_05_165535_create_support_categories_table',11),(31,'2024_10_14_144410_create_notify_templates_table',11),(32,'2024_11_24_200629_add_category_to_permissions_table',12),(33,'2024_11_24_201142_add_description_to_roles_table',13),(34,'2024_11_24_092700_add_is_active_to_site_customs_table',14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\Admin',1),(10,'App\\Models\\Admin',2),(11,'App\\Models\\Admin',3),(12,'App\\Models\\Admin',4),(12,'App\\Models\\Admin',7);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navigations`
--

DROP TABLE IF EXISTS `navigations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navigations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int DEFAULT NULL,
  `header_order` int NOT NULL DEFAULT '0',
  `footer_order` int NOT NULL DEFAULT '0',
  `display` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'header',
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navigations`
--

LOCK TABLES `navigations` WRITE;
/*!40000 ALTER TABLE `navigations` DISABLE KEYS */;
/*!40000 ALTER TABLE `navigations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notify_templates`
--

DROP TABLE IF EXISTS `notify_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notify_templates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `variables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_status` tinyint(1) NOT NULL DEFAULT '0',
  `push_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notify_templates`
--

LOCK TABLES `notify_templates` WRITE;
/*!40000 ALTER TABLE `notify_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `notify_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `service_id` bigint unsigned NOT NULL,
  `transaction_id` bigint unsigned NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `orders_order_number_unique` (`order_number`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_service_id_foreign` (`service_id`),
  KEY `orders_transaction_id_foreign` (`transaction_id`),
  CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  CONSTRAINT `orders_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_components`
--

DROP TABLE IF EXISTS `page_components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_components` (
  `id` bigint unsigned NOT NULL,
  `content_id` bigint DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(196) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dynamic',
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'static',
  `content_fields` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'this fields for component contents table',
  `with_modal` tinyint NOT NULL DEFAULT '1',
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `sort` int NOT NULL DEFAULT '60',
  `preview` varchar(196) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_components`
--

LOCK TABLES `page_components` WRITE;
/*!40000 ALTER TABLE `page_components` DISABLE KEYS */;
INSERT INTO `page_components` VALUES (1,NULL,'general/static/component/banner.png','Banner Defualt','banner','banner','{\"en\":{\"background\":{\"type\":\"img\",\"value\":\"general\\/images\\/eYXIYYvGq4j0T5lsKJee.png\",\"class\":\"col-md-3\"},\"left_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/7F6ZcrzzmUevyrVvXOWB.png\",\"class\":\"col-md-3\"},\"left_image\":{\"type\":\"img\",\"value\":\"general\\/images\\/Ph7kTCg55ISxqArcboWD.png\",\"class\":\"col-md-3\"},\"right_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/nNQrrwtTkLgw8eEbo7pR.png\",\"class\":\"col-md-3\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"TECHNOLOGY RELETED CONSULTANCY\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Make The Easiest Solution For You\",\"class\":\"col-md-6\"},\"content\":{\"type\":\"textarea\",\"value\":\"Consectetur adipiscing elit Aenean scelerisque at augue vitae consequat\\r\\nquisque eget congue velit in cursus leo Sed sodales\",\"class\":\"col-md-12\"},\"button_title\":{\"type\":\"text\",\"value\":\"Explore More\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"#\",\"class\":\"col-md-6\",\"trans\":false},\"video_button_title\":{\"type\":\"text\",\"value\":\"How It Works\",\"class\":\"col-md-6\"},\"video_button_link\":{\"type\":\"text\",\"value\":\"https:\\/\\/www.youtube.com\\/watch?v=iVqz_4M5mA0\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"sub_heading\":{\"type\":\"text\",\"value\":\"CONSULTOR\\u00cdA RELETADA EN TECNOLOG\\u00cdA\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Haga la soluci\\u00f3n m\\u00e1s sencilla para usted\",\"class\":\"col-md-6\"},\"content\":{\"type\":\"textarea\",\"value\":\"Consectetur adipiscing elit Aenean scelerisque at augue vitae consequat\\r\\nquisque eget congue velit in cursus leo Sed sodales\",\"class\":\"col-md-12\"},\"button_title\":{\"type\":\"text\",\"value\":\"Explora m\\u00e1s\",\"class\":\"col-md-6\"},\"video_button_title\":{\"type\":\"text\",\"value\":\"C\\u00f3mo funciona\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',1,'general/images/5hXmO370Xk3ZJq4IrY9i.jpg',NULL,'2024-05-13 21:47:48'),(2,NULL,'general/static/component/service.png','Service area','service','service','{\"en\":{\"shape\":{\"type\":\"img\",\"value\":null,\"class\":\"col-md-6\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/ceExPRVyCQvC5bMf6Qcc.png\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"FROM OUR CASE studies\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"We Delivered Best Solution\",\"class\":\"col-md-6\"},\"limit_list\":{\"type\":\"text\",\"value\":\"3\",\"class\":\"col-md-6\"},\"limit_summary\":{\"type\":\"text\",\"value\":\"80\",\"class\":\"col-md-6\"}},\"es\":{\"sub_heading\":{\"type\":\"text\",\"value\":\"DE NUESTROS CASOS\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Entregamos la mejor soluci\\u00f3n\",\"class\":\"col-md-6\"}}}','static',NULL,0,'1',2,'general/images/1JjLmIWqL5mUVMFKLSxi.jpg',NULL,'2024-10-19 03:52:58'),(3,NULL,'general/static/component/brand.png','Brand area','brand','brand','{\"en\":{\"case_background\":{\"type\":\"img\",\"value\":\"general\\/images\\/DDzFTPgp6U8QdcTjLGcT.jpg\",\"class\":\"col-md-6\"},\"brand_line_1\":{\"type\":\"img\",\"value\":\"general\\/images\\/oia3dcYaIx2qBm0ngutd.png\",\"class\":\"col-md-6\"},\"brand_line_2\":{\"type\":\"img\",\"value\":\"general\\/images\\/M7XMzCVy1kAsO0hC0v8o.png\",\"class\":\"col-md-4\"},\"brand_shape_1\":{\"type\":\"img\",\"value\":\"general\\/images\\/ZBsLl7p91vFBctHvGv5t.png\",\"class\":\"col-md-4\"},\"brand_shape_2\":{\"type\":\"img\",\"value\":\"general\\/images\\/IowR0yHrBRbk7nn3NANh.png\",\"class\":\"col-md-4\"}}}','static','{\"brand_logo\":{\"type\":\"img\",\"class\":\"col-md-12\"},\"brand_name\":{\"type\":\"text\",\"class\":\"col-md-12\"}}',1,'1',3,'general/images/FMKiku7lp69YYSCYOhV0.jpg',NULL,'2024-05-07 05:16:53'),(4,NULL,'general/static/component/about.png','About area','about','about','{\"en\":{\"line_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/WoIdnnO6Sdvh2iPcQ1Gr.png\",\"class\":\"col-md-6\"},\"box_up_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/r1eiyh7VshM5NU2OdN2u.png\",\"class\":\"col-md-6\"},\"box_down_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/E6LLzSPcbuBhZBBLD8zm.png\",\"class\":\"col-md-4\"},\"section_title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/2w2YVw3fQ3oiAXA1JE1u.png\",\"class\":\"col-md-4\"},\"right_item_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/IQyJTXkyL1D5GD445Fiy.png\",\"class\":\"col-md-4\"},\"right_item_icon_2\":{\"type\":\"img\",\"value\":\"general\\/images\\/QLZfs81HZY4ciXxZFUuO.png\",\"class\":\"col-md-4\"},\"center_item_avatar\":{\"type\":\"img\",\"value\":\"general\\/images\\/lehRAASdGlEl2oACFQhb.png\",\"class\":\"col-md-4\"},\"dot_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/jlk9SbvrzRdSnaROyQgl.png\",\"class\":\"col-md-4\"},\"count_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/yzBJyIcquJ1ZTyQGKKQI.png\",\"class\":\"col-md-4\"},\"faq_line\":{\"type\":\"img\",\"value\":\"general\\/images\\/AR4qBRWmgCOWHac7I0BQ.png\",\"class\":\"col-md-4\"},\"main_image\":{\"type\":\"img\",\"value\":\"general\\/images\\/9u660LPq1htqp3epDbVc.png\",\"class\":\"col-md-4\"},\"section_heading\":{\"type\":\"text\",\"value\":\"Selecting the Finest IT Service Provider\",\"class\":\"col-md-6\"},\"section_sub_heading\":{\"type\":\"text\",\"value\":\"ABOUT gratech\",\"class\":\"col-md-6\"},\"section_description\":{\"type\":\"text\",\"value\":\"It is a long established fact that a reader will be distracted the readable content of a page \\twhen looking at layout the point of using lorem the is Ipsum less normal.\",\"class\":\"col-md-12\"},\"right_item_heading\":{\"type\":\"text\",\"value\":\"Business Growth\",\"class\":\"col-md-6\"},\"right_item_heading_2\":{\"type\":\"text\",\"value\":\"Technology Consultancy\",\"class\":\"col-md-6\"},\"center_item_heading\":{\"type\":\"text\",\"value\":\"Ronald Richards\",\"class\":\"col-md-6\"},\"center_item_sub_heading\":{\"type\":\"text\",\"value\":\"Co, Founder\",\"class\":\"col-md-6\"},\"center_item_heading_2\":{\"type\":\"text\",\"value\":\"Call Us Now\",\"class\":\"col-md-6\"},\"center_item_sub_heading_2\":{\"type\":\"text\",\"value\":\"+208-555-0112\",\"class\":\"col-md-6\"},\"count_heading\":{\"type\":\"text\",\"value\":\"6,561\",\"class\":\"col-md-6\"},\"count_sub_heading\":{\"type\":\"text\",\"value\":\"Satisfied Clients\",\"class\":\"col-md-6\"}},\"es\":{\"section_heading\":{\"type\":\"text\",\"value\":\"Seleccionar el mejor proveedor de servicios de TI\",\"class\":\"col-md-6\"},\"section_sub_heading\":{\"type\":\"text\",\"value\":\"ACERCA DE gratech\",\"class\":\"col-md-6\"},\"section_description\":{\"type\":\"text\",\"value\":\"Es un hecho establecido desde hace mucho tiempo que un lector se distraer\\u00e1 con el contenido legible de una p\\u00e1gina cuando mire el dise\\u00f1o; el punto de usar lorem es Ipsum menos normal.\",\"class\":\"col-md-12\"},\"right_item_heading\":{\"type\":\"text\",\"value\":\"crecimiento del neg\",\"class\":\"col-md-6\"},\"right_item_heading_2\":{\"type\":\"text\",\"value\":\"Consultor\\u00eda Tecnol\\u00f3gica\",\"class\":\"col-md-6\"},\"center_item_heading\":{\"type\":\"text\",\"value\":\"Ronald Richards\",\"class\":\"col-md-6\"},\"center_item_sub_heading\":{\"type\":\"text\",\"value\":\"Co, fundador\",\"class\":\"col-md-6\"},\"center_item_heading_2\":{\"type\":\"text\",\"value\":\"Ll\\u00e1manos ahora\",\"class\":\"col-md-6\"},\"center_item_sub_heading_2\":{\"type\":\"text\",\"value\":\"+208-555-0112\",\"class\":\"col-md-6\"},\"count_heading\":{\"type\":\"text\",\"value\":\"6,561\",\"class\":\"col-md-6\"},\"count_sub_heading\":{\"type\":\"text\",\"value\":\"Clientes satisfechos\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',4,'general/images/wprPOsrugaOaoivfQpNa.jpg',NULL,'2024-05-14 17:33:00'),(5,NULL,'general/static/component/counter.png','Counter area','counter','counter','{\"en\":{\"shape_background\":{\"type\":\"img\",\"value\":\"general\\/images\\/n8yh3FA4QkUlPIlbY00T.png\",\"class\":\"col-md-6\"}}}','static','{\"icon\":{\"type\":\"img\",\"class\":\"col-md-12\"},\"counter\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"title\":{\"type\":\"text\",\"class\":\"col-md-6\"}}',1,'1',5,'general/images/NDbnD4dVdEXSZv2PQZps.jpg',NULL,'2024-05-07 05:23:38'),(6,NULL,'general/static/component/project.png','Case Study','project','project','{\"en\":{\"left_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/aOLm18rpCB4ujsinwiBv.png\",\"class\":\"col-md-4\"},\"right_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/IVkX1Jk5U5ujqQfgRYwK.png\",\"class\":\"col-md-4\"},\"sub_heading_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/0qOtiDIKFqZI0Uzhdgoj.png\",\"class\":\"col-md-4\"},\"heading\":{\"type\":\"text\",\"value\":\"FROM OUR CASE studies\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Latest Project Are Here\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"DE NUESTROS CASOS\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"El \\u00faltimo proyecto est\\u00e1 aqu\\u00ed\",\"class\":\"col-md-6\"}}}','static','{\"cover_image\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"details_image\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"class\":\"col-md-12\"},\"summary\":{\"type\":\"textarea\",\"class\":\"col-md-12\"},\"completed_date\":{\"type\":\"date\",\"class\":\"col-md-6\"},\"category\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"client\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"location\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"details\":{\"type\":\"rich_text\",\"class\":\"col-md-12\"}}',0,'1',6,'general/images/JOH3CGoIL01MEDD7kHWc.jpg',NULL,'2024-05-14 19:46:03'),(7,NULL,'general/static/component/video_banner.png','VIdeo Banner area','video_banner','banner','{\"en\":{\"video_image\":{\"type\":\"img\",\"value\":\"general\\/images\\/8SfaYrNhk5Ina79NXJ82.jpg\",\"class\":\"col-md-6\"},\"video_link\":{\"type\":\"text\",\"value\":\"https:\\/\\/www.youtube.com\\/watch?v=iVqz_4M5mA0\",\"class\":\"col-md-12\",\"trans\":false}}}','static',NULL,1,'1',7,'general/images/oqcnac9ObF7SfSJz8Czs.jpg',NULL,'2024-05-07 05:44:00'),(8,NULL,'general/static/component/pricing.png','Pricing area','pricing','pricing','{\"en\":{\"shape_up\":{\"type\":\"img\",\"value\":\"general\\/images\\/F9ERm7kxz8BqP3sWhayl.png\",\"class\":\"col-md-6\"},\"shape_down\":{\"type\":\"img\",\"value\":\"general\\/images\\/ujWFzGo4uZfMcrs0BWCi.png\",\"class\":\"col-md-6\"},\"shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/a7aszCO6zq4r2Kf5SSH4.png\",\"class\":\"col-md-6\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/9p0NsXiK0MM6qWJspWtg.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"PRICE PLANS\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Flexible Pricing Plans\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"PLANES DE PRECIOS\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Planes de precios flexibles\",\"class\":\"col-md-6\"}}}','static','{\"plan_shape\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"plan_icon\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"name\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"price\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"duration\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"feature_1\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"feature_2\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"feature_3\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"feature_4\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"feature_5\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"button_name\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"class\":\"col-md-6\"}}',1,'1',8,'general/images/mC22t7CEv67FOXnULO3x.jpg',NULL,'2024-05-14 15:41:14'),(9,NULL,'general/static/component/testimonial.png','Testimonial area','testimonial','testimonial','{\"en\":{\"testimonial_background\":{\"type\":\"img\",\"value\":\"general\\/images\\/KfihrKKhovXEX2pqOdCl.png\",\"class\":\"col-md-6\"},\"testimonial_title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/MGfO48SazkGw7Y6lrYPq.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Hundreds of clients worldwide trust our IT solution\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Testimonials\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Cientos de clientes en todo el mundo conf\\u00edan en nuestra soluci\\u00f3n TI\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Testimonios\",\"class\":\"col-md-6\"}}}','static','{\"testimonial_item_avatar\":{\"type\":\"img\",\"class\":\"col-md-12\"},\"name\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"profession\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"rating\":{\"type\":\"text\",\"class\":\"col-md-12\"},\"comment\":{\"type\":\"textarea\",\"class\":\"col-md-12\"}}',1,'1',9,'general/images/BFfSsg98rID59p19kKV8.jpg',NULL,'2024-05-14 15:41:31'),(10,NULL,'general/static/component/blog.png','Blog area','blog','blog','{\"en\":{\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/8CWx8hxBlsFPblsrbKXm.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Explore Blogs and News\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Blog & news\",\"class\":\"col-md-12\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Explora blogs y noticias\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Blog y noticias\",\"class\":\"col-md-12\"}}}','static',NULL,1,'1',10,'general/images/HzRHIw2hcxtsMd5NLyul.jpg',NULL,'2024-05-14 15:41:51'),(11,NULL,'general/static/component/blog-list.png','Blog Standard','blog_list','blog','{\"en\":{\"per_page_blog\":{\"type\":\"text\",\"value\":\"2\",\"class\":\"col-md-6\",\"trans\":false}}}','static',NULL,1,'1',10,'general/images/YtLbeD5MLKMlOZAWUdm4.jpg',NULL,'2024-05-07 06:41:57'),(12,NULL,'general/static/component/who-we-are.png','Who We Are','who_we_are','we are','{\"en\":{\"big_image\":{\"type\":\"img\",\"value\":\"general\\/images\\/NinGN5tMJNryGDGpv1ZM.jpg\",\"class\":\"col-md-6\"},\"sm_image\":{\"type\":\"img\",\"value\":\"general\\/images\\/Ds3WFgHFWx7itimvQHcI.png\",\"class\":\"col-md-6\"},\"shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/VRUJYT10pzK1Ba6ZAadm.png\",\"class\":\"col-md-4\"},\"dot\":{\"type\":\"img\",\"value\":\"general\\/images\\/vjjksYs3OD22xjgJvSvL.png\",\"class\":\"col-md-4\"},\"circle\":{\"type\":\"img\",\"value\":\"general\\/images\\/XSr7XtTUTBWo4XCtgTgv.png\",\"class\":\"col-md-4\"},\"circle_two\":{\"type\":\"img\",\"value\":\"general\\/images\\/KioIYRQSg8I28X9QVomi.png\",\"class\":\"col-md-4\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/6ANlZimaQlmDjBqhVmkA.png\",\"class\":\"col-md-4\"},\"signature\":{\"type\":\"img\",\"value\":\"general\\/images\\/bxc6ptmmoLSZMeojbANk.png\",\"class\":\"col-md-4\"},\"heading\":{\"type\":\"text\",\"value\":\"Ensuring Your Success Through Reliable IT Solutions\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"WHO WE ARE\",\"class\":\"col-md-12\"},\"summary\":{\"type\":\"textarea\",\"value\":\"Aonsectetur adipiscing elit aenean scelerisque augue vitae consequat aisque eget congue velit in cursus sodales the turpis euismod quis sapien euismod is sapien the condimentum nec lorem nulla augue.\",\"class\":\"col-md-12\"},\"list_line_1\":{\"type\":\"text\",\"value\":\"Technology Consultancy\",\"class\":\"col-md-6\"},\"list_line_2\":{\"type\":\"text\",\"value\":\"We Provide best services\",\"class\":\"col-md-6\"},\"list_line_3\":{\"type\":\"text\",\"value\":\"Maintenance And Support\",\"class\":\"col-md-6\"},\"list_line_4\":{\"type\":\"text\",\"value\":\"Requirements Gathering\",\"class\":\"col-md-6\"},\"button_text\":{\"type\":\"text\",\"value\":\"Explore More\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"#\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Garantizar su \\u00e9xito a trav\\u00e9s de soluciones de TI confiables\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"QUIENES SOMOS\",\"class\":\"col-md-12\"},\"summary\":{\"type\":\"textarea\",\"value\":\"Aonsectetur adipiscing elit aenean scelerisque auge vitae consequat aisque eget congue velit in cursus miembros the turpis euismod quis sapien euismod is sapien the condimentum nec lorem no ague\",\"class\":\"col-md-12\"},\"list_line_1\":{\"type\":\"text\",\"value\":\"Consultor\\u00eda Tecnol\\u00f3gica\",\"class\":\"col-md-6\"},\"list_line_2\":{\"type\":\"text\",\"value\":\"Brindamos los mejores servicios\",\"class\":\"col-md-6\"},\"list_line_3\":{\"type\":\"text\",\"value\":\"Mantenimiento y soporte\",\"class\":\"col-md-6\"},\"list_line_4\":{\"type\":\"text\",\"value\":\"Recopilaci\\u00f3n de requisitos\",\"class\":\"col-md-6\"},\"button_text\":{\"type\":\"text\",\"value\":\"Explora m\\u00e1s\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',11,'general/images/6jp8uyrLbNKU4aYrgt7O.jpg',NULL,'2024-05-14 15:44:32'),(13,NULL,'general/static/component/our-offering.png','Our Offering','our_offering','offering','{\"en\":{\"shadow_shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/9XOjHQrBVZpehzZP1Dqx.png\",\"class\":\"col-md-6\"},\"shape_left\":{\"type\":\"img\",\"value\":\"general\\/images\\/frcJyZBV6mi916YfgDSS.png\",\"class\":\"col-md-6\"},\"shape_right\":{\"type\":\"img\",\"value\":\"general\\/images\\/WRBtw8ujtjk4WjxLlKDn.png\",\"class\":\"col-md-6\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/Rr8EWeBIeRqNUjuidvQx.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Enhance And Pioneer Using Technology Trends\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"OUR OFFERING\",\"class\":\"col-md-12\"},\"button_text\":{\"type\":\"text\",\"value\":\"Explore More\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"#\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Mejorar y ser pionero en el uso de las tendencias tecnol\\u00f3gicas\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"NUESTRA OFERTA\",\"class\":\"col-md-12\"},\"button_text\":{\"type\":\"text\",\"value\":\"Explora m\\u00e1s\",\"class\":\"col-md-6\"}}}','static','{\"shape_top\":{\"type\":\"img\",\"class\":\"col-md-4\"},\"shape_bottom\":{\"type\":\"img\",\"class\":\"col-md-4\"},\"svg_icon\":{\"type\":\"img\",\"class\":\"col-md-4\"},\"title\":{\"type\":\"text\",\"class\":\"col-md-12\"}}',1,'1',12,'general/images/t5IhyYtpE04dDmeAwt4B.jpg',NULL,'2024-05-14 15:46:18'),(14,NULL,'general/static/component/our-team.png','Our Team','our_team','team','{\"en\":{\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/B7TppyyLdxL1l499WBec.png\",\"class\":\"col-md-12\"},\"heading\":{\"type\":\"text\",\"value\":\"Our Leadership Team\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"OUR TEAM\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Nuestro equipo de liderazgo\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"NUESTRO EQUIPO\",\"class\":\"col-md-6\"}}}','static','{\"avatar\":{\"type\":\"img\",\"class\":\"col-md-12\"},\"name\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"work_at\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"facebook_profile\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"instagram_profile\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"linkedin_profile\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"pinterest_profile\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"info_title\":{\"type\":\"text\",\"class\":\"col-md-12\"},\"info\":{\"type\":\"textarea\",\"class\":\"col-md-12\"},\"skill_1\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"skill_experience_1\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"skill_2\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"skill_experience_2\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"skill_3\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"skill_experience_3\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"skill_4\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"skill_experience_4\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"description_title\":{\"type\":\"text\",\"class\":\"col-md-12\"},\"description\":{\"type\":\"rich_text\",\"class\":\"col-md-12\"}}',0,'1',13,'general/images/zD7luDKPBwLi3uv4uYb9.jpg',NULL,'2024-05-14 15:46:47'),(15,2,'general/static/component/service-grid.png','Service Grid','service_grid','service','{}','static',NULL,0,'1',2,'general/images/e5CXq30dktclNLqNUTyA.jpg',NULL,'2024-05-07 15:46:52'),(16,NULL,'general/static/component/faq.png','Faq','faq','faq','{\"en\":{\"shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/cIqaFgCE3M7T5bKSCiIz.png\",\"class\":\"col-md-6\"},\"image\":{\"type\":\"img\",\"value\":\"general\\/images\\/WlxQpHouZMaxujW6w3yP.png\",\"class\":\"col-md-6\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/RGT1KFoJs6nlbDkwr2HB.png\",\"class\":\"col-md-6\"},\"line\":{\"type\":\"img\",\"value\":\"general\\/images\\/xuwXnEUQjNnOWTS5JMhq.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Most Common  Question?\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"FAQ\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Preguntas m\\u00e1s frecuentes\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"\\u00bfPregunta m\\u00e1s com\\u00fan?\",\"class\":\"col-md-6\"}}}','static','{\"question\":{\"type\":\"text\",\"class\":\"col-md-12\"},\"answer\":{\"type\":\"textarea\",\"class\":\"col-md-12\"}}',1,'1',14,'general/images/G8H4xjjYkpmxqljlMwsl.jpg',NULL,'2024-05-14 18:34:13'),(17,NULL,'general/static/component/contact.png','Contact','contact','contact','{\"en\":{\"contact_number\":{\"type\":\"text\",\"value\":\"+208-6666-0112, +308-5555-0113\",\"class\":\"col-md-6\"},\"support_mail\":{\"type\":\"text\",\"value\":\"support@gratech.com\",\"class\":\"col-md-6\"},\"button_title\":{\"type\":\"text\",\"value\":\"GET IN TOUCH\",\"class\":\"col-md-12\"},\"left_headding\":{\"type\":\"text\",\"value\":\"Contact Information\",\"class\":\"col-md-6\"},\"right_headding\":{\"type\":\"text\",\"value\":\"Ready To Get Started?\",\"class\":\"col-md-6\"},\"left_information\":{\"type\":\"textarea\",\"value\":\"Nullam varius, erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis. Quisque.\",\"class\":\"col-md-6\"},\"right_information\":{\"type\":\"textarea\",\"value\":\"varius,erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis.Quisque rhoncus, eros in auctor ultrices,\",\"class\":\"col-md-6\"},\"opening_hours\":{\"type\":\"text\",\"value\":\"Mon - Sat: 10.00 AM - 4.00 PM\",\"class\":\"col-md-12\"},\"address\":{\"type\":\"text\",\"value\":\"4517 Washington ave.\",\"class\":\"col-md-12\"},\"Latitude\":{\"type\":\"text\",\"value\":\"52.5069386\",\"class\":\"col-md-6\"},\"Longitude\":{\"type\":\"text\",\"value\":\"13.2599276\",\"class\":\"col-md-6\"},\"footer_description\":{\"type\":\"textarea\",\"value\":\"Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis\",\"class\":\"col-md-12\"}},\"es\":{\"contact_number\":{\"type\":\"text\",\"value\":\"+208-6666-0112, +308-5555-0113\",\"class\":\"col-md-6\"},\"button_title\":{\"type\":\"text\",\"value\":\"PONERSE EN CONTACTO\",\"class\":\"col-md-12\"},\"left_headding\":{\"type\":\"text\",\"value\":\"Informaci\\u00f3n del contacto\",\"class\":\"col-md-6\"},\"right_headding\":{\"type\":\"text\",\"value\":\"\\u00bfListo para empezar?\",\"class\":\"col-md-6\"},\"left_information\":{\"type\":\"textarea\",\"value\":\"No hay juego, se dec\\u00eda a los blancos, el eros urn eros eros, como halago el odio futbol\\u00edstico en lo feo. Todos\",\"class\":\"col-md-6\"},\"right_information\":{\"type\":\"textarea\",\"value\":\"varius, se dec\\u00eda al objetivo, eros urn eros eros, como halago el odio futbol\\u00edstico en el turpis.\",\"class\":\"col-md-6\"},\"opening_hours\":{\"type\":\"text\",\"value\":\"Lunes a s\\u00e1bado: 10:00 a. m. - 4:00 p. m.\",\"class\":\"col-md-12\"},\"address\":{\"type\":\"text\",\"value\":\"4517 avenida Washington.\",\"class\":\"col-md-12\"},\"footer_description\":{\"type\":\"textarea\",\"value\":\"Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis\",\"class\":\"col-md-12\"}}}','static',NULL,0,'1',15,'general/images/upawnP7bHhYBM6H1zELi.jpg',NULL,'2024-07-15 19:00:48'),(18,NULL,'general/static/component/banner2.png','Banner Classic Slider','banner_classic_slider','banner','{\"en\":{\"banner_line\":{\"type\":\"img\",\"value\":\"general\\/images\\/X1iWi49xY3UifirbV9JP.png\",\"class\":\"col-md-6\"}}}','static','{\"regular_left_shape\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"solid_left_shape\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"shape_left\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"shape_right_line\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"shape_right\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"right_line1\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"right_line2\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"right_line3\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"right_line4\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"slide_bg\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"description\":{\"type\":\"textarea\",\"class\":\"col-md-12\"},\"button_title\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"class\":\"col-md-6\"}}',0,'1',1,'general/images/ajNu1H1lPUzdhZz9AdC0.jpg',NULL,'2024-05-08 05:15:04'),(19,NULL,'general/static/component/banner3.png','Banner Elegant Slider','banner_elegant_slider','banner','{\"en\":{\"banner_line\":{\"type\":\"img\",\"value\":\"general\\/images\\/H3wcidxsCpOM8SQ274ax.png\",\"class\":\"col-md-6\"}}}','static','{\"left_line\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"solid_right_down\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"solid_right_up\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"right_shape\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"circle_solid\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"circle_regular\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"background\":{\"type\":\"img\",\"class\":\"col-md-12\"},\"heading\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"summary\":{\"type\":\"textarea\",\"class\":\"col-md-12\"},\"button_text\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"class\":\"col-md-6\"}}',0,'1',1,'general/images/zweUxnA4X2Yr1ePUd9Ss.jpg',NULL,'2024-05-11 16:44:02'),(20,NULL,'general/static/component/service2.png','Service Classic','service_classic','service','{\"en\":{\"shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/pS7mPAStmiND1Ve9lyhJ.png\",\"class\":\"col-md-6\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/4SyDa9CZNsdLzCr0qeip.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"FROM OUR CASE studies\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"We Delivered Best Solution\",\"class\":\"col-md-6\"},\"button_title\":{\"type\":\"text\",\"value\":\"View All Services\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"#\",\"class\":\"col-md-6\"},\"limit_list\":{\"type\":\"text\",\"value\":\"3\",\"class\":\"col-md-6\"},\"limit_summary\":{\"type\":\"text\",\"value\":\"80\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"DE NUESTROS CASOS\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Entregamos la mejor soluci\\u00f3n\",\"class\":\"col-md-6\"},\"button_title\":{\"type\":\"text\",\"value\":\"Ver todos los servicios\",\"class\":\"col-md-6\"}}}','static',NULL,0,'1',2,'general/images/HKvBZtlVekOKYwcF6WIk.jpg',NULL,'2024-10-22 05:41:07'),(21,6,'general/static/component/project2.png','Case Study Classic','project_classic','project','{\"en\":{\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/WMrNAfomeXbJDirIukFu.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"FROM OUR CASE studies\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Latest Project Are Here\",\"class\":\"col-md-12\"},\"button_title\":{\"type\":\"text\",\"value\":\"view All Case\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"#\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"DE NUESTROS CASOS\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"El \\u00faltimo proyecto est\\u00e1 aqu\\u00ed\",\"class\":\"col-md-12\"},\"button_title\":{\"type\":\"text\",\"value\":\"ver todos los casos\",\"class\":\"col-md-6\"}}}','static',NULL,0,'1',6,'general/images/POsr9CJiOc00DOGYf4rs.jpg',NULL,'2024-05-14 16:08:11'),(22,NULL,'general/static/component/process.png','Work Process','work_process','process','{\"en\":{\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/Q9v2lsQvua3Ef4nkuS5L.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"Hundreds of clients worldwide trust our IT solution\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Testimonials\",\"class\":\"col-md-12\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Cientos de clientes en todo el mundo conf\\u00edan en nuestra soluci\\u00f3n TI\",\"class\":\"col-md-12\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Testimonios\",\"class\":\"col-md-12\"}}}','static','{\"array_icon\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"process_icon\":{\"type\":\"img\",\"class\":\"col-md-6\"},\"process_number\":{\"type\":\"text\",\"class\":\"col-md-6\"},\"title\":{\"type\":\"text\",\"class\":\"col-md-12\"},\"description\":{\"type\":\"textarea\",\"class\":\"col-md-12\"}}',1,'1',16,'general/images/MZLb306V4Gsyg3ql2AFW.jpg',NULL,'2024-05-14 16:08:32'),(23,9,'general/static/component/testimonial2.png','Testimonial Premium','testimonial_premium','testimonial','{\"en\":{\"background\":{\"type\":\"img\",\"value\":\"general\\/images\\/KmDVDiqGycOIXHBzrbUK.png\",\"class\":\"col-md-6\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/Hxcu7FNf5HHLFL80GCIC.png\",\"class\":\"col-md-6\"},\"left_heading\":{\"type\":\"text\",\"value\":\"How May We Help You!\",\"class\":\"col-md-6\"},\"left_sub_heading\":{\"type\":\"text\",\"value\":\"TALK TO US\",\"class\":\"col-md-6\"},\"right_heading\":{\"type\":\"text\",\"value\":\"What They Say   About Our\",\"class\":\"col-md-6\"},\"right_sub_heading\":{\"type\":\"text\",\"value\":\"CLIENTS REVIEW\",\"class\":\"col-md-6\"},\"right_description\":{\"type\":\"textarea\",\"value\":\"It is a long\\r\\n                                established fact that a reader will be distracted the readable content\\r\\n                                of a page when looking at layout the\\r\\n                                point of using lorem the is Ipsum less normal distribution of letters.\",\"class\":\"col-md-12\"}},\"es\":{\"left_heading\":{\"type\":\"text\",\"value\":\"\\u00a1C\\u00f3mo podemos ayudarle!\",\"class\":\"col-md-6\"},\"left_sub_heading\":{\"type\":\"text\",\"value\":\"H\\u00c1BLANOS\",\"class\":\"col-md-6\"},\"right_heading\":{\"type\":\"text\",\"value\":\"Lo que dicen de nuestra\",\"class\":\"col-md-6\"},\"right_sub_heading\":{\"type\":\"text\",\"value\":\"OPINI\\u00d3N DE CLIENTES\",\"class\":\"col-md-6\"},\"right_description\":{\"type\":\"textarea\",\"value\":\"es un largo\\r\\n                                 hecho establecido de que un lector se distraer\\u00e1 con el contenido legible\\r\\n                                 de una p\\u00e1gina al mirar el dise\\u00f1o\\r\\n                                 El punto de usar lorem es la distribuci\\u00f3n de letras menos normal de Ipsum.\",\"class\":\"col-md-12\"}}}','static',NULL,1,'1',9,'general/images/HqNSJLutoXp5iu1Pdxur.jpg',NULL,'2024-05-14 16:09:19'),(24,NULL,'general/static/component/choose.png','Why Choose Us','why_choose_us','choose','{\"en\":{\"video_link\":{\"type\":\"text\",\"value\":\"https:\\/\\/www.youtube.com\\/watch?v=iVqz_4M5mA0\",\"class\":\"col-md-12\",\"trans\":false},\"cover_photo\":{\"type\":\"img\",\"value\":\"general\\/images\\/M8colm1a32dMlohG0wse.png\",\"class\":\"col-md-6\"},\"shape_right\":{\"type\":\"img\",\"value\":\"general\\/images\\/xZpa4EJdfVzzCLaBjtie.png\",\"class\":\"col-md-6\"},\"shape_right2\":{\"type\":\"img\",\"value\":\"general\\/images\\/UnbqWjDTj86Dr2v3a56v.png\",\"class\":\"col-md-6\"},\"shape_left\":{\"type\":\"img\",\"value\":\"general\\/images\\/ENU3RNEYAgc2qUMfmLcQ.png\",\"class\":\"col-md-6\"},\"right_item_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/EXWrohcQ1zeOelap0sIS.png\",\"class\":\"col-md-6\"},\"right_item_icon2\":{\"type\":\"img\",\"value\":\"general\\/images\\/ttefQx7IVW1YABvz48N8.png\",\"class\":\"col-md-6\"},\"section_heading\":{\"type\":\"text\",\"value\":\"Elevate Your  Achievements Using Premier IT Solutions\",\"class\":\"col-md-6\"},\"section_sub_heading\":{\"type\":\"text\",\"value\":\"WHY Choose US\",\"class\":\"col-md-6\"},\"right_item_heading\":{\"type\":\"text\",\"value\":\"Best Services\",\"class\":\"col-md-6\"},\"right_item_description\":{\"type\":\"text\",\"value\":\"Scelerisque augue the consequat sodales\",\"class\":\"col-md-6\"},\"right_item_heading2\":{\"type\":\"text\",\"value\":\"24\\/7 Call Support\",\"class\":\"col-md-6\"},\"right_item_description2\":{\"type\":\"text\",\"value\":\"Scelerisque augue the consequat sodales\",\"class\":\"col-md-6\"},\"progress_title\":{\"type\":\"text\",\"value\":\"Information Technology\",\"class\":\"col-md-6\"},\"progress_count\":{\"type\":\"text\",\"value\":\"86\",\"class\":\"col-md-6\",\"trans\":false},\"progress2_title\":{\"type\":\"text\",\"value\":\"Technology Consultant\",\"class\":\"col-md-6\"},\"progress2_count\":{\"type\":\"text\",\"value\":\"95\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"section_heading\":{\"type\":\"text\",\"value\":\"Eleve sus logros utilizando soluciones de TI de primer nivel\",\"class\":\"col-md-6\"},\"section_sub_heading\":{\"type\":\"text\",\"value\":\"Por qu\\u00e9 elegirnos\",\"class\":\"col-md-6\"},\"right_item_heading\":{\"type\":\"text\",\"value\":\"Mejores Servicios\",\"class\":\"col-md-6\"},\"right_item_description\":{\"type\":\"text\",\"value\":\"Los chocolates promocionan\",\"class\":\"col-md-6\"},\"right_item_heading2\":{\"type\":\"text\",\"value\":\"Soporte telef\\u00f3ni\",\"class\":\"col-md-6\"},\"right_item_description2\":{\"type\":\"text\",\"value\":\"Los chocolates promocionan a\",\"class\":\"col-md-6\"},\"progress_title\":{\"type\":\"text\",\"value\":\"Tecnolog\\u00edas de la informaci\\u00f3n\",\"class\":\"col-md-6\"},\"progress2_title\":{\"type\":\"text\",\"value\":\"Consultor Tecnol\\u00f3gico\",\"class\":\"col-md-6\"}}}','static',NULL,0,'1',18,'general/images/1Mmz0vicVRHYyo6uHfhY.jpg',NULL,'2024-05-14 16:15:10'),(25,6,'general/static/component/project3.png','Case Study Elegent','project_elegent','project','{\"en\":{\"background\":{\"type\":\"img\",\"value\":\"general\\/images\\/wwA6L1gw1J182zm72MCQ.png\",\"class\":\"col-md-12\"},\"heading\":{\"type\":\"text\",\"value\":\"FROM OUR CASE studies\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"We Delivered Best Solution\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"DE NUESTROS CASOS\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Entregamos la mejor soluci\\u00f3n\",\"class\":\"col-md-6\"}}}','static',NULL,0,'1',6,'general/images/m64VpnFpkbPGpuUUwwg5.jpg',NULL,'2024-05-14 16:15:43'),(26,9,'general/static/component/testimonial3.png','Testimonial Simple','testimonial_simple','testimonial','{\"en\":{\"heading\":{\"type\":\"text\",\"value\":\"What Our Client\\u2019s Say About Us\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"TESTIMONIALS\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Lo que dice nuestro cliente\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"TESTIMONIOS\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',9,'general/images/rcRYgXw2s7SyMM3Sk9nZ.jpg',NULL,'2024-05-14 16:21:55'),(27,NULL,'general/static/component/blog2.png','Blog Grid','blog_grid','blog','{\"en\":{\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/F9FZQsqoG0iSSlVymDne.png\",\"class\":\"col-md-12\"},\"heading\":{\"type\":\"text\",\"value\":\"Explore Blogs and News\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Blog & news\",\"class\":\"col-md-6\"},\"button_text\":{\"type\":\"text\",\"value\":\"View All News\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"\\/blog\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Explora blogs y noticias\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Blog y noticias\",\"class\":\"col-md-6\"},\"button_text\":{\"type\":\"text\",\"value\":\"Ver todas las noticias\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',10,'general/images/huPncsj85U5OEDF8w9IW.jpg',NULL,'2024-05-14 16:22:51'),(28,NULL,'general/static/component/touch.png','Get Touch','get_touch','touch','{\"en\":{\"shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/dEjySiIQZM6sqvjje7Bo.png\",\"class\":\"col-md-6\"},\"shape2\":{\"type\":\"img\",\"value\":\"general\\/images\\/3HG2tginvT0bVt1AvtI7.png\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"We Take Care Of Your <br\\/> Technology\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"GET IN TOUCH\",\"class\":\"col-md-6\"},\"button_title\":{\"type\":\"text\",\"value\":\"get A Quote\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"\\/contact\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Nosotras cuidamos de tu <br\\/> tecnologia\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"PONERSE EN CONT\",\"class\":\"col-md-6\"},\"button_title\":{\"type\":\"text\",\"value\":\"Consigue una\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',18,'general/images/K3yWC4C4G1a0UP99Av3c.jpg',NULL,'2024-05-14 16:23:41'),(29,NULL,'general/static/component/about2.png','About Pro','about_pro','about','{\"en\":{\"left_line\":{\"type\":\"img\",\"value\":\"general\\/images\\/JPe12TF8UksTbdahq9oH.png\",\"class\":\"col-md-6\"},\"big_image\":{\"type\":\"img\",\"value\":\"general\\/images\\/tuZ0L5S7Kf3griiHKqUo.jpg\",\"class\":\"col-md-6\"},\"image_2\":{\"type\":\"img\",\"value\":\"general\\/images\\/026c0zTV6YuJbyiSeQBD.png\",\"class\":\"col-md-6\"},\"circle\":{\"type\":\"img\",\"value\":\"general\\/images\\/XKYT20q6wQwMI6sQPiUK.png\",\"class\":\"col-md-6\"},\"title_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/Q9pkhd9i9u6hXzsgExKJ.png\",\"class\":\"col-md-6\"},\"right_item_icon\":{\"type\":\"img\",\"value\":\"general\\/images\\/tlFxE1YrRUZ21nx6TTqv.png\",\"class\":\"col-md-6\"},\"right_item_icon_2\":{\"type\":\"img\",\"value\":\"general\\/images\\/Talgs5tlMF1l0HptknWu.png\",\"class\":\"col-md-6\"},\"items_center_image\":{\"type\":\"img\",\"value\":\"general\\/images\\/bENZDZBhn8oYHOhsv9nY.png\",\"class\":\"col-md-6\"},\"video_popup_link\":{\"type\":\"text\",\"value\":\"https:\\/\\/www.youtube.com\\/watch?v=iVqz_4M5mA0\",\"class\":\"col-md-12\",\"trans\":false},\"heading\":{\"type\":\"text\",\"value\":\"We Strive to Offer Intelligent Business Solutions\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"ABOUT Gratech\",\"class\":\"col-md-6\"},\"summary\":{\"type\":\"textarea\",\"value\":\"Aonsectetur\\r\\n                                adipiscing elit aenean scelerisque augue vitae consequat aisque eget congue\\r\\n                                velit in cursus sodales the\\r\\n                                turpis euismod quis sapien euismod\\r\\n                                quis sapien the condimentum nec lorem nulla augue.\",\"class\":\"col-md-12\"},\"right_item_title\":{\"type\":\"text\",\"value\":\"Best Services\",\"class\":\"col-md-6\"},\"right_item_summary\":{\"type\":\"text\",\"value\":\"Scelerisque augue the consequat sodales\",\"class\":\"col-md-6\"},\"right_item_title_2\":{\"type\":\"text\",\"value\":\"24\\/7 Call Support\",\"class\":\"col-md-6\"},\"right_item_summary_2\":{\"type\":\"text\",\"value\":\"Scelerisque augue the consequat sodales\",\"class\":\"col-md-6\"},\"button_link\":{\"type\":\"text\",\"value\":\"\\/about\",\"class\":\"col-md-6\",\"trans\":false},\"button_title\":{\"type\":\"text\",\"value\":\"Explore More\",\"class\":\"col-md-6\"},\"items_center_title\":{\"type\":\"text\",\"value\":\"Ronald Richards\",\"class\":\"col-md-6\"},\"items_center_sub_title\":{\"type\":\"text\",\"value\":\"Co, Founder\",\"class\":\"col-md-6\"}},\"es\":{\"heading\":{\"type\":\"text\",\"value\":\"Nos esforzamos por ofrecer soluciones\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"ACERCA DE Gratech\",\"class\":\"col-md-6\"},\"summary\":{\"type\":\"textarea\",\"value\":\"ser\\u00e1 seguido\\r\\n                                 adipiscing elit aenean chocolate augue vitae consecutio esque essere tarea\\r\\n                                 quiero unirme al curso\\r\\n                                 \\u00bfCu\\u00e1l es la calidad del euismod?\\r\\n                                 nadie conoce la salsa ni el sitio web.\",\"class\":\"col-md-12\"},\"right_item_title\":{\"type\":\"text\",\"value\":\"Mejores Servicios\",\"class\":\"col-md-6\"},\"right_item_summary\":{\"type\":\"text\",\"value\":\"Los chocolates promocionan a\",\"class\":\"col-md-6\"},\"right_item_title_2\":{\"type\":\"text\",\"value\":\"Soporte telef\\u00f3n\",\"class\":\"col-md-6\"},\"right_item_summary_2\":{\"type\":\"text\",\"value\":\"Los chocolates promocionan a los\",\"class\":\"col-md-6\"},\"button_title\":{\"type\":\"text\",\"value\":\"Explora m\\u00e1s\",\"class\":\"col-md-6\"},\"items_center_title\":{\"type\":\"text\",\"value\":\"Ronald Richards\",\"class\":\"col-md-6\"},\"items_center_sub_title\":{\"type\":\"text\",\"value\":\"Co, Founder\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',4,'general/images/ElGFEupkSbld6yviK7mk.jpg',NULL,'2024-05-14 17:36:11'),(30,NULL,'general/static/component/service4.png','Service Slider','service_slider','service','{\"en\":{\"shape_left\":{\"type\":\"img\",\"value\":\"general\\/images\\/tTSP041jTwBVmzFOZ3CL.png\",\"class\":\"col-md-6\"},\"shape_right\":{\"type\":\"img\",\"value\":\"general\\/images\\/qHd9xRHc2pEjSFnWlfWG.png\",\"class\":\"col-md-6\"},\"sub_heading\":{\"type\":\"text\",\"value\":\"Exclusive IT Services\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"SERVICES WE\\u2019RE OFFERING\",\"class\":\"col-md-6\"},\"limit_summary\":{\"type\":\"text\",\"value\":\"80\",\"class\":\"col-md-6\",\"trans\":false}},\"es\":{\"sub_heading\":{\"type\":\"text\",\"value\":\"Servicios TI exclusivos\",\"class\":\"col-md-6\"},\"heading\":{\"type\":\"text\",\"value\":\"SERVICIOS QUE OFRECEMOS\",\"class\":\"col-md-6\"}}}','static',NULL,0,'1',2,'general/images/C5H8rQknsGEvFGRsO8eK.jpg',NULL,'2024-05-14 16:27:08'),(31,3,'general/static/component/brand2.png','Brand Classic','brand_classic','brand','{\"en\":{\"shape\":{\"type\":\"img\",\"value\":\"general\\/images\\/FllACBjyLdGWBdDkApJg.png\",\"class\":\"col-md-6\"}}}','static',NULL,1,'1',3,'general/images/9ZqHGlCPQ6e2ZuGCj5AB.jpg',NULL,'2024-05-11 01:57:15');
/*!40000 ALTER TABLE `page_components` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL,
  `is_breadcrumb` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `component_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('static','dynamic') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dynamic',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Home','/','[\"18\",\"20\",\"29\",\"5\",\"21\",\"13\",\"49\",\"22\",\"23\",\"10\"]','static',1,NULL,NULL,NULL,'2024-03-05 01:58:05','2024-11-26 04:56:25'),(3,1,'Blog','blog','[\"11\"]','dynamic',1,NULL,NULL,NULL,'2024-03-15 13:17:34','2024-05-09 01:04:16'),(4,1,'About','about','[\"12\",\"13\",\"5\",\"14\"]','dynamic',1,NULL,NULL,NULL,'2024-03-17 19:34:34','2024-03-17 21:23:59'),(5,1,'Service','service','[\"15\"]','dynamic',1,NULL,NULL,NULL,'2024-03-18 12:11:51','2024-03-18 12:11:51'),(6,1,'Contact','contact','[\"17\"]','dynamic',1,NULL,NULL,NULL,'2024-03-19 20:20:29','2024-05-17 00:05:33'),(7,1,'FAQ','faq','[\"16\"]','dynamic',1,NULL,NULL,NULL,'2024-03-20 21:55:37','2024-03-20 21:55:37'),(8,1,'Terms & Condition','terms-condition','[\"46\"]','dynamic',1,NULL,NULL,NULL,'2024-03-21 19:00:49','2024-05-12 19:32:46'),(9,1,'Privacy Policy','privacy-policy','[\"32\"]','dynamic',1,NULL,NULL,NULL,'2024-03-21 19:28:29','2024-04-24 17:51:40'),(11,0,'Home 2','home-2','[\"18\",\"20\",\"29\",\"5\",\"21\",\"13\",\"49\",\"22\",\"23\",\"10\"]','dynamic',1,NULL,NULL,NULL,'2024-05-08 23:35:11','2024-05-11 15:19:56'),(12,0,'home-3','home-3','[\"19\",\"12\",\"30\",\"24\",\"14\",\"16\",\"25\",\"26\",\"27\",\"28\"]','dynamic',1,NULL,NULL,NULL,'2024-05-11 16:28:19','2024-05-11 23:53:45'),(13,0,'Dark Home','dark-home','[\"19\",\"31\",\"12\",\"30\",\"24\",\"14\",\"16\",\"25\",\"26\",\"27\",\"28\"]','dynamic',1,NULL,NULL,NULL,'2024-05-14 18:13:46','2024-05-14 18:17:46');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_gateways`
--

DROP TABLE IF EXISTS `payment_gateways`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_gateways` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Code for payment gateway e.g. paypal, stripe, razorpay',
  `currencies` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Json encoded currencies',
  `credentials` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Json encoded credentials',
  `is_withdraw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_gateways`
--

LOCK TABLES `payment_gateways` WRITE;
/*!40000 ALTER TABLE `payment_gateways` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_gateways` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'dashboard-view','dashboard','admin',NULL,NULL),(2,'statistics_card','dashboard','admin',NULL,NULL),(3,'transaction_chart','dashboard','admin',NULL,NULL),(4,'top_services_chart','dashboard','admin',NULL,NULL),(5,'latest_user','dashboard','admin',NULL,NULL),(6,'latest_order_chart','dashboard','admin',NULL,NULL),(7,'user-list','user-management','admin',NULL,NULL),(8,'user-manage','user-management','admin',NULL,NULL),(9,'user-balance-manage','user-management','admin',NULL,NULL),(10,'user-as-login','user-management','admin',NULL,NULL),(11,'user-send-notification','user-management','admin',NULL,NULL),(12,'staff-list','staff-management','admin',NULL,NULL),(13,'staff-create','staff-management','admin',NULL,NULL),(14,'staff-edit','staff-management','admin',NULL,NULL),(15,'role-list','role-management','admin',NULL,NULL),(16,'role-create','role-management','admin',NULL,NULL),(17,'role-edit','role-management','admin',NULL,NULL),(18,'role-delete','role-management','admin',NULL,NULL),(19,'payment-gateway-list','payment-gateway','admin',NULL,NULL),(20,'payment-gateway-manage','payment-gateway','admin',NULL,NULL),(21,'deposit-method-list','deposit','admin',NULL,NULL),(22,'deposit-method-manage','deposit','admin',NULL,NULL),(23,'deposit-list','deposit','admin',NULL,NULL),(24,'deposit-action','deposit','admin',NULL,NULL),(25,'deposit-notification','deposit','admin',NULL,NULL),(26,'service-list','service','admin',NULL,NULL),(27,'service-manage','service','admin',NULL,NULL),(28,'order-list','service','admin',NULL,NULL),(29,'order-manage','service','admin',NULL,NULL),(30,'service-notification','service','admin',NULL,NULL),(31,'transaction-list','transaction','admin',NULL,NULL),(32,'plan-list','subscription','admin',NULL,NULL),(33,'plan-manage','subscription','admin',NULL,NULL),(34,'subscription-list','subscription','admin',NULL,NULL),(35,'subscription-manage','subscription','admin',NULL,NULL),(36,'subscription-notification','subscription','admin',NULL,NULL),(37,'site-settings-view','settings','admin',NULL,NULL),(38,'site-settings-manage','settings','admin',NULL,NULL),(39,'plugin-list','settings','admin',NULL,NULL),(40,'plugin-manage','settings','admin',NULL,NULL),(41,'mail-provider-manage','settings','admin',NULL,NULL),(42,'notification-plugin-manage','settings','admin',NULL,NULL),(43,'exchange-rate-plugin-manage','settings','admin',NULL,NULL),(44,'language-list','language','admin',NULL,NULL),(45,'language-manage','language','admin',NULL,NULL),(46,'list-notification','notification','admin',NULL,NULL),(47,'notification-template-list','notification','admin',NULL,NULL),(48,'notification-template-manage','notification','admin',NULL,NULL),(49,'theme-list','site-essentials','admin',NULL,NULL),(50,'theme-manage','site-essentials','admin',NULL,NULL),(51,'navigation-list','site-essentials','admin',NULL,NULL),(52,'navigation-manage','site-essentials','admin',NULL,NULL),(53,'page-list','site-essentials','admin',NULL,NULL),(54,'page-manage','site-essentials','admin',NULL,NULL),(55,'component-list','site-essentials','admin',NULL,NULL),(56,'component-manage','site-essentials','admin',NULL,NULL),(57,'blog-category-list','site-essentials','admin',NULL,NULL),(58,'blog-category-manage','site-essentials','admin',NULL,NULL),(59,'blog-list','site-essentials','admin',NULL,NULL),(60,'blog-manage','site-essentials','admin',NULL,NULL),(61,'seo-list','site-essentials','admin',NULL,NULL),(62,'seo-manage','site-essentials','admin',NULL,NULL),(63,'social-list','site-essentials','admin',NULL,NULL),(64,'social-manage','site-essentials','admin',NULL,NULL),(65,'support-category-list','support-ticket','admin',NULL,NULL),(66,'support-category-manage','support-ticket','admin',NULL,NULL),(67,'support-list','support-ticket','admin',NULL,NULL),(68,'support-manage','support-ticket','admin',NULL,NULL),(69,'support-notification','support-ticket','admin',NULL,NULL),(70,'email-subscriber','application','admin',NULL,NULL),(71,'site-customize','application','admin',NULL,NULL),(72,'app-optimize','application','admin',NULL,NULL),(73,'app-clear-cache','application','admin',NULL,NULL),(74,'app-info','application','admin',NULL,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
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
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_shape` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_price` double NOT NULL,
  `yearly_price` double NOT NULL,
  `features` longtext COLLATE utf8mb4_unicode_ci,
  `badge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plugins`
--

DROP TABLE IF EXISTS `plugins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plugins` (
  `id` bigint unsigned NOT NULL,
  `type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(196) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fields_blade` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `credentials` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plugins`
--

LOCK TABLES `plugins` WRITE;
/*!40000 ALTER TABLE `plugins` DISABLE KEYS */;
INSERT INTO `plugins` VALUES (1,'general','Google reCAPTCHA v3','google-recaptcha',NULL,'{\"recaptcha_key\":null,\"recaptcha_secret\":null}','general/static/plugins/google-recaptcha.svg','reCAPTCHA v3 helps you detect abusive traffic on your website without user interaction\r\n',0,NULL,'2024-10-23 00:12:36'),(2,'general','Facebook Messenger','fb',NULL,'{\"page_id\":\"990335491009901\"}','general/static/plugins/fb.png','Messenger is a proprietary instant messaging app and platform developed by Meta\r\n\r\n',0,NULL,'2024-09-02 02:28:13'),(3,'general','Google Analytics 4','google-analytics',NULL,'{\"ga_measurement_id\":\"G-XXXXXXXXXX\"}','general/static/plugins/google-analytics.png','Google Analytics 4 is an analytics service that lets you to measure traffic and engagement across your websites and apps\n\n',0,NULL,'2024-10-23 00:12:40'),(4,'general','Tawk Chat','tawk',NULL,'{\"property_id\":\"65e857468d261e1b5f6953aa\",\"widget_id\":\"1ho9p9rq8\"}','general/static/plugins/tawk.png','Free Instant Messaging system\r\n',0,NULL,'2024-05-20 06:06:58'),(5,'exchange_rate','Currencylayer','currencylayer','_exchange_rate','{\"api_key\":null,\"fields\":{\"auto_update_time\":\"2\",\"auto_update_time_unit\":\"1\",\"auto_update_status\":\"0\"}}','general/static/plugins/currencylayer.jpg','With over 15 exchange rate data sources, the Exchangerates API is delivering exchanging rates data for more than 170 world currencies.',0,NULL,'2024-10-23 00:13:10'),(6,'exchange_rate','Coinmarketcap','coinmarketcap','_exchange_rate','{\"api_key\":null,\"fields\":{\"auto_update_time\":\"1\",\"auto_update_time_unit\":\"1\",\"auto_update_status\":\"0\"}}','general/static/plugins/coinmarketcap.png','The worlds cryptocurrency data authority has a professional API',0,NULL,'2024-10-23 00:13:17'),(7,'notification','Pusher','pusher',NULL,'{\"pusher_app_id\":null,\"pusher_app_key\":null,\"pusher_app_secret\":null,\"pusher_app_cluster\":\"ap2\"}','general/static/plugins/pusher.svg','Leader In Realtime Technologies.Simple, scalable and reliable.Hosted realtime APIs loved by developers',0,NULL,'2024-10-23 00:12:53'),(9,'mail_provider','Smtp Config','smtp','_smtp_info','{\"email_from\":\"noreply@coevs.com\",\"mail_username\":\"noreply@coevs.com\",\"mail_password\":null,\"mail_host\":\"smtp.gmail.com\",\"mail_port\":\"465\",\"fields\":{\"encryption\":\"tls\"}}','general/static/plugins/smtp.png','SMTP is the standard protocol for sending and receiving email over the Internet.\r\n',0,NULL,'2024-11-01 04:44:32');
/*!40000 ALTER TABLE `plugins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1),(64,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(1,10),(2,10),(3,10),(4,10),(5,10),(6,10),(1,11),(2,11),(3,11),(4,11),(5,11),(6,11),(1,12),(2,12),(3,12),(4,12),(5,12),(6,12);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super-admin','admin','2024-10-02 16:36:19','2024-10-02 16:36:19','Super Admin role that can manage all aspects\n'),(10,'Admin','admin','2024-10-22 03:20:58','2024-10-22 03:27:13','Full control over the system, including user and content management.'),(11,'Editor','admin','2024-10-22 03:27:32','2024-10-22 03:27:32','Reviews, edits, and publishes content. No administrative access.'),(12,'Moderator','admin','2024-10-22 03:27:54','2024-10-22 03:28:22','Monitors and moderates user-generated content, such as Service Orders.');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `light_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dark_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_content` longtext COLLATE utf8mb4_unicode_ci,
  `side_content` text COLLATE utf8mb4_unicode_ci,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `val` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'string',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'mail_host','smtp.gmail.com','string','2024-03-02 05:04:33','2024-03-02 05:05:14'),(2,'mail_port','465','integer','2024-03-02 05:04:33','2024-03-02 05:04:33'),(3,'mail_secure','ssl','string','2024-03-02 05:04:33','2024-04-05 20:26:25'),(4,'email_from_name','Coevs','string','2024-03-02 05:04:38','2024-04-05 19:55:35'),(5,'email_from_address','coevs.info@gmail.com','string','2024-03-02 05:04:38','2024-03-02 05:04:59'),(6,'mail_username','coevs.info@gmail.com','string','2024-03-02 05:04:38','2024-03-03 21:00:10'),(7,'mail_password','wasm tpdz uwqw uwhf','string','2024-03-02 05:04:38','2024-03-02 05:04:38'),(8,'site_logo','general/images/wvufGLnYBwrryFIbVYEX.png','string','2024-03-02 07:02:58','2024-03-04 16:38:42'),(9,'site_favicon','general/images/gMMgvkYxdwRkR6D8At7Q.png','string','2024-03-02 07:02:58','2024-11-26 05:04:26'),(10,'login_bg','general/images/2b6omw73Wbesdg3idAlN.svg','string','2024-03-02 07:02:58','2024-03-05 05:38:29'),(11,'site_title','Gulfsaudiexpo','string','2024-03-02 07:02:58','2024-11-26 05:04:26'),(12,'support_email','support@gratech.com','string','2024-03-02 07:02:58','2024-03-25 02:41:55'),(13,'address','demo address','string','2024-03-02 17:11:31','2024-03-02 17:11:39'),(14,'opening_hours','Mon - Sat: 10.00 AM - 4.00 PM','string','2024-03-02 17:11:31','2024-03-02 17:11:48'),(15,'phone_call','208-6666-0112, 308-5555-0113','string','2024-03-02 17:11:31','2024-03-02 17:11:31'),(16,'header_contact_title','Call Us','string','2024-03-05 05:24:48','2024-03-05 05:42:18'),(17,'header_contact','+208-555-0112','string','2024-03-05 05:24:48','2024-03-05 05:27:17'),(18,'header_button_title','Get A Quote','string','2024-03-05 05:54:17','2024-03-05 05:54:51'),(19,'header_button_link','/contact','string','2024-03-05 05:54:17','2024-04-30 22:19:11'),(20,'footer_slide_left_regular','general/images/BAQVgLnU7QvZtTJjG4Jh.png','string','2024-03-05 13:53:41','2024-03-05 14:05:38'),(21,'footer_slide_left_solid','general/images/x8UL5jR65pUMjCNXZayT.png','string','2024-03-05 13:53:41','2024-03-05 14:06:33'),(22,'footer_left_regular','general/images/7M3hW5ujcUBOy7o1R82F.png','string','2024-03-05 13:53:41','2024-03-05 13:53:41'),(23,'footer_right_solid','general/images/UqVx6L4239ct7n3yeXfe.png','string','2024-03-05 13:53:41','2024-03-05 14:12:54'),(24,'footer_shadow_shape','general/images/Il3Ju0hJ6BFqI4lRFh62.png','string','2024-03-05 13:53:41','2024-03-05 14:13:23'),(25,'footer_description','Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia curabitur lacinia mollis','string','2024-03-05 13:53:41','2024-03-21 19:03:53'),(26,'copyright','© All Copyright 2024 by','string','2024-03-05 13:53:41','2024-10-07 20:18:30'),(27,'terms_condition_button','Terms & Condition','string','2024-03-05 13:53:41','2024-03-05 14:21:45'),(28,'terms_condition_link','/terms-condition','string','2024-03-05 13:53:41','2024-04-30 21:16:39'),(29,'privacy_policy_button','Privacy Policy','string','2024-03-05 13:53:41','2024-03-05 14:21:45'),(30,'privacy_policy_link','/privacy-policy','string','2024-03-05 13:53:41','2024-04-24 17:54:00'),(31,'footer_right_regular','general/images/NM5dHWi3A6tYT1Qwx1wy.png','string','2024-03-05 14:12:54','2024-03-05 14:12:54'),(32,'copyright_text','All Copyright 2024 by','string','2024-03-05 14:18:23','2024-03-05 14:19:28'),(33,'contact_address','4517 Washington Ave. Manchester, Kentucky 39495','string','2024-03-05 17:26:15','2024-03-05 17:26:38'),(34,'footer_navigation_title_1','Quick Link','string','2024-03-05 18:48:33','2024-03-05 18:49:52'),(35,'footer_navigation_title_2','Other Link','string','2024-03-05 18:48:33','2024-03-05 18:49:52'),(36,'error_background','general/images/zVbWUa5RROX4VhLihmbH.jpg','string','2024-03-05 22:22:49','2024-03-05 22:24:06'),(37,'error_breadcrumb_title','Home','string','2024-03-05 22:22:49','2024-03-05 22:22:49'),(38,'error_breadcrumb_link','/','string','2024-03-05 22:22:49','2024-03-05 22:22:49'),(39,'error_button_title','Go Back Home','string','2024-03-05 22:22:49','2024-03-05 22:27:47'),(40,'error_button_link','/','string','2024-03-05 22:22:49','2024-03-05 22:22:49'),(41,'error_404','general/images/rsSzvbxSnji0KOKvexMM.png','string','2024-03-05 22:25:03','2024-03-05 22:25:03'),(42,'error_banner_shape_1','general/images/cSldlNHJ2tvKAO3zOW4z.png','string','2024-03-05 22:25:39','2024-03-05 22:25:39'),(43,'error_banner_shape_2','general/images/2td2373sJb8SHOW7zRF7.png','string','2024-03-05 22:25:39','2024-03-05 22:25:39'),(44,'error_banner_shape_3','general/images/6JMhnPgb2Uj61uOE4oDv.png','string','2024-03-05 22:25:39','2024-03-05 22:25:39'),(45,'error_heading','Oops! Looks like you followed a bad link. If you think this is a problem with us, please tell us.','string','2024-03-05 22:27:31','2024-03-05 22:40:30'),(46,'breadcrumb_background','general/images/QCm3zzbme5hta1zbNLJs.jpg','string','2024-03-12 06:26:27','2024-03-12 06:26:27'),(47,'breadcrumb_shape_one','general/images/lvmLc2mZ9vhkwUGBVeBM.png','string','2024-03-12 06:27:35','2024-03-12 06:27:35'),(48,'breadcrumb_shape_two','general/images/pxzAm9rA4BuWjccbttrU.png','string','2024-03-12 06:27:35','2024-03-12 06:27:35'),(49,'breadcrumb_shape_three','general/images/6vSu4fkkvCyLfBNRNH1T.png','string','2024-03-12 06:27:35','2024-03-12 06:27:35'),(50,'light_logo','general/images/ef8KUukULo0rLn8nzjEY.png','string','2024-03-24 22:43:08','2024-11-26 05:04:26'),(51,'dark_logo','general/images/dAfS1unEr1iMesPSQoYg.png','string','2024-03-24 22:43:08','2024-11-26 05:04:26'),(52,'secret_key','secret','string','2024-04-05 13:29:03','2024-06-12 07:07:19'),(53,'maintenance_title','This site currently undergoing maintenance','string','2024-04-05 13:29:03','2024-04-05 15:18:44'),(54,'maintenance_text','No problem! The site will be live again shortly.','string','2024-04-05 13:29:03','2024-04-05 14:02:24'),(55,'maintenance_mode','0','bool','2024-04-05 13:32:34','2024-06-14 21:43:59'),(56,'maintenance_cover','general/images/Y8rdSTUHdRK8PkCQZAus.svg','string','2024-04-05 15:10:39','2024-04-05 15:17:38'),(57,'home_redirect','/','string','2024-04-05 23:06:38','2024-05-22 01:24:45'),(58,'development_mode','1','bool','2024-04-06 02:42:26','2024-11-24 04:22:55'),(59,'site_color','#3c72fc','string','2024-04-06 06:24:45','2024-04-06 07:13:24'),(60,'site_mode','production','string','2024-04-06 07:21:26','2024-04-06 07:21:26'),(61,'site_environment','local','string','2024-04-06 07:29:27','2024-10-18 17:34:31'),(62,'footer_visibility','1','bool','2024-05-01 23:57:57','2024-05-01 23:59:03'),(63,'header_style','style_2','string','2024-05-02 08:49:16','2024-11-26 04:56:25'),(64,'get_quote_link','#','string','2024-05-02 08:49:16','2024-05-02 08:49:16'),(65,'call_us','#','string','2024-05-02 08:49:16','2024-05-02 08:49:16'),(66,'header_top_bar','0','bool','2024-05-02 08:49:16','2024-05-03 00:31:36'),(67,'header_visibility','1','bool','2024-05-02 08:49:16','2024-05-02 19:35:24'),(68,'site_preloader','basic','string','2024-05-03 01:35:50','2024-05-07 22:32:27'),(69,'site_animation','1','bool','2024-05-04 06:21:39','2024-05-04 06:34:59'),(70,'img_error','1','bool','2024-05-04 06:21:39','2024-05-20 12:42:03'),(71,'site_appearance','light_mode','string','2024-05-05 15:06:28','2024-11-26 04:56:08'),(72,'scroll_up','1','bool','2024-05-05 15:23:55','2024-05-05 15:24:19'),(73,'primary_color','#3c72fc','string','2024-05-07 23:16:19','2024-05-07 23:16:19'),(74,'secondary_color','#0f0d1d','string','2024-05-07 23:16:19','2024-05-07 23:16:19'),(75,'cookie_title','Cookies Consent','string','2024-05-12 19:24:14','2024-05-12 19:24:14'),(76,'cookie_summary','This website use cookies to help you have a superior and more relevant browsing experience on the website.','string','2024-05-12 19:24:14','2024-05-12 19:24:14'),(77,'cookie_page','terms-condition','string','2024-05-12 19:24:14','2024-05-12 19:24:14'),(78,'cookie_status','1','bool','2024-05-12 19:24:14','2024-05-12 19:28:39'),(79,'admin_prefix','admin','string','2024-05-13 21:21:37','2024-05-13 21:28:05'),(80,'color','dark_mode','string','2024-05-20 05:41:18','2024-05-20 05:42:02'),(81,'language_visibility','1','bool','2024-05-28 22:36:52','2024-10-22 19:25:55'),(82,'meta_title','coevs','string','2024-06-03 05:03:23','2024-06-03 05:03:53'),(83,'meta_description','coevs gratech','string','2024-06-03 05:03:23','2024-06-03 05:03:53'),(84,'meta_keyword','[{\"value\":\"coevs\"},{\"value\":\"gratech\"}]','string','2024-06-03 05:03:23','2024-06-03 05:03:53'),(85,'meta_charset','UTF-8','string','2024-06-03 05:03:23','2024-06-03 05:03:23'),(86,'meta_author','coevs gratech','string','2024-06-03 05:03:23','2024-06-03 05:03:53'),(87,'site_currency_type','fiat','string','2024-05-13 21:21:37','2024-09-10 03:57:46'),(88,'site_currency','USD','string','2024-05-13 21:21:37','2024-09-10 03:57:46'),(93,'currency_symbol','$','string','2024-09-01 14:20:33','2024-09-01 14:20:33'),(94,'site_timezone','Asia/Karachi','string','2024-11-01 04:45:16','2024-11-26 05:04:26');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_customs`
--

DROP TABLE IF EXISTS `site_customs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_customs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `site_customs_type_unique` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_customs`
--

LOCK TABLES `site_customs` WRITE;
/*!40000 ALTER TABLE `site_customs` DISABLE KEYS */;
INSERT INTO `site_customs` VALUES (1,'css','//The Custom CSS will be added on the site head tag \r\n.site-head-tag {\r\n	margin: 0;\r\n  	padding: 0;\r\n}','0','2024-05-05 06:00:36','2024-05-05 07:29:29'),(2,'script','function generateSlug(value) {\r\n    return value.toLowerCase().replace(/\\s+/g, \'-\').replace(/[^a-z0-9-]/g, \'\');\r\n}','0','2024-05-05 06:00:36','2024-05-05 07:29:02');
/*!40000 ALTER TABLE `site_customs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socials`
--

DROP TABLE IF EXISTS `socials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `socials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socials`
--

LOCK TABLES `socials` WRITE;
/*!40000 ALTER TABLE `socials` DISABLE KEYS */;
/*!40000 ALTER TABLE `socials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscribers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `plan_id` bigint unsigned NOT NULL,
  `transaction_id` bigint unsigned NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_foreign` (`user_id`),
  CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support_categories`
--

DROP TABLE IF EXISTS `support_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `support_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support_categories`
--

LOCK TABLES `support_categories` WRITE;
/*!40000 ALTER TABLE `support_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `support_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tasks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `assigned_to` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'low',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tasks_order_id_foreign` (`order_id`),
  CONSTRAINT `tasks_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tickets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_resolved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tickets_uuid_unique` (`uuid`),
  KEY `tickets_user_id_foreign` (`user_id`),
  CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `txid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `fee` decimal(15,2) DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USD',
  `pay_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `array_data` text COLLATE utf8mb4_unicode_ci,
  `action_cause` text COLLATE utf8mb4_unicode_ci,
  `status` enum('pending','completed','failed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'assets/general/static/profile.jpg',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google2fa_secret` text COLLATE utf8mb4_unicode_ci,
  `google2fa_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `balance` double NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'general/images/ug9Yq22Ynn5I2yZQQm4l.png','nans','kjd','admin@coevs.com','2024-11-26 05:08:30',NULL,NULL,NULL,NULL,'Bangladesh',NULL,'$2y$12$AYznCYxzHBHf4UP9ySCk8OC5f7xHYW1KnaMbfR0fq7uaq7qPis/Ue','eyJpdiI6ImVzMlZURCtVcmdCR0JuSllQd21YdHc9PSIsInZhbHVlIjoiV0tzejE4TUd5M29CdlhvclFCd1NIUT09IiwibWFjIjoiN2JlNDlkMTVhZDU0ZjI4ZjM5NWIwMGY2NzlmYmJiYzJlNTBjNGY5YzA0ZThhMmViM2JiODI5ZDA0OWQ3NTMwYyIsInRhZyI6IiJ9',0,1234,1,NULL,'2024-11-26 05:06:28','2024-11-26 05:08:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'gratech'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-27  2:28:36
