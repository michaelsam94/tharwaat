-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: thrawaat
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Super Admin','admin@tharawat.com','$2y$10$U9e46QPXwFnPyEuVOiZ8l.hlCC4dkyyKe3r4R6XuyaPozVyJ12hFi',NULL,'2025-09-13 12:39:19','2025-09-13 12:39:19');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
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
-- Table structure for table `content_blocks`
--

DROP TABLE IF EXISTS `content_blocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_blocks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `content_blocks_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_blocks`
--

LOCK TABLES `content_blocks` WRITE;
/*!40000 ALTER TABLE `content_blocks` DISABLE KEYS */;
INSERT INTO `content_blocks` VALUES (1,'hero_title','Main Hero Title','Welcome to Thrawaat International Investment Corporation',NULL,'text',1,1,'2025-09-13 13:11:38','2025-09-13 13:11:38'),(2,'hero_subtitle','Hero Subtitle','Your trusted partner in comprehensive business solutions',NULL,'text',1,2,'2025-09-13 13:11:38','2025-09-13 13:11:38'),(3,'about_text','About Us Text','We are a leading business solutions provider with years of experience in various industries.',NULL,'text',1,3,'2025-09-13 13:11:38','2025-09-13 13:11:38'),(4,'contact_address','Contact Address','Egypt Office: 40 Autostrad Rd. Maadi, Cairo, Egypt.',NULL,'text',1,4,'2025-09-13 13:11:38','2025-09-13 13:15:23'),(5,'footer_copyright','Footer Copyright','© 2025 by THRAWAAT INT\'L INVESTMENT CORP',NULL,'text',1,5,'2025-09-13 13:11:38','2025-09-13 13:11:38');
/*!40000 ALTER TABLE `content_blocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `group_contents`
--

DROP TABLE IF EXISTS `group_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_contents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `reverse` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_contents`
--

LOCK TABLES `group_contents` WRITE;
/*!40000 ALTER TABLE `group_contents` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `mime_type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `alt_text` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'general',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (6,'1757779949_brAw1OSL5J.png','Screenshot 2024-08-04 111638.png','media/1757779949_brAw1OSL5J.png','image/png',339221,NULL,'general',1,'2025-09-13 13:12:29','2025-09-13 13:12:29'),(10,'1757780820_IQMdhfzqfk.png','Screenshot 2024-08-07 124231.png','media/1757780820_IQMdhfzqfk.png','image/png',38791,NULL,'blogs',1,'2025-09-13 13:27:00','2025-09-13 13:27:00');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_10_15_232154_create_admins_table',1),(6,'2021_10_16_205845_create_tags_table',1),(7,'2021_10_16_205912_create_blogs_table',1),(8,'2021_10_17_054713_create_tags_blogs_table',1),(9,'2021_10_20_025715_create_settings_table',1),(10,'2021_10_20_150007_create_groups_table',1),(11,'2021_10_20_160520_create_group_contents_table',1),(12,'2021_10_21_174658_create_messages_table',1),(13,'2021_10_21_184410_create_jobs_table',1),(14,'2025_09_13_144347_create_pages_table',1),(15,'2025_09_13_144429_create_content_blocks_table',1),(16,'2025_09_13_144440_create_media_table',1),(17,'2025_09_13_162901_create_website_contents_table',2),(18,'2025_09_13_162956_create_sliders_table',2),(19,'2025_09_13_163006_create_sections_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_subtitle` text DEFAULT NULL,
  `hero_image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'content',
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_bg` varchar(255) DEFAULT NULL,
  `content_en` text DEFAULT NULL,
  `content_ar` text DEFAULT NULL,
  `content_bg` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `button_text_en` varchar(255) DEFAULT NULL,
  `button_text_ar` varchar(255) DEFAULT NULL,
  `button_text_bg` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`settings`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'home_about','home','content','About Tharawat Investment Group','عن مجموعة ثروات الاستثمارية',NULL,'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.','نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.',NULL,NULL,'Learn More','اعرف المزيد',NULL,'/about-us',NULL,1,1,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(2,'home_services','home','content','Our Services','خدماتنا',NULL,'We offer a comprehensive range of investment and financial services to meet your needs.','نقدم مجموعة شاملة من الخدمات الاستثمارية والمالية لتلبية احتياجاتك.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,2,'2025-09-13 13:41:07','2025-09-13 13:41:07');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone_1` varchar(255) DEFAULT NULL,
  `phone_2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'##########','######','###@thrawaat.com','################################','#','#','#','#','tharawatlogo.png','2025-09-13 12:17:10','2025-09-13 12:17:10');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_bg` varchar(255) DEFAULT NULL,
  `subtitle_en` text DEFAULT NULL,
  `subtitle_ar` text DEFAULT NULL,
  `subtitle_bg` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `description_bg` text DEFAULT NULL,
  `button_text_en` varchar(255) DEFAULT NULL,
  `button_text_ar` varchar(255) DEFAULT NULL,
  `button_text_bg` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `mobile_image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Welcome to <span>Tharawat</span><br /><span>Investment Group</span>','مرحباً بكم في <span>ثروات</span><br /><span>مجموعة الاستثمار</span>',NULL,'Building the future through strategic investments and innovative solutions','بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة',NULL,'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.','نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.',NULL,'Learn More','اعرف المزيد',NULL,'/about-us','sliders/welcome-slider.jpg',NULL,1,1,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(2,'Welcome to <span>Tharawat</span><br /><span>Investment Group</span>','مرحباً بكم في <span>ثروات</span><br /><span>مجموعة الاستثمار</span>',NULL,'Building the future through strategic investments and innovative solutions','بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة',NULL,'We are a leading investment group focused on creating value through diversified portfolios and sustainable growth.','نحن مجموعة استثمارية رائدة تركز على خلق القيمة من خلال محافظ متنوعة ونمو مستدام.',NULL,'Learn More','اعرف المزيد',NULL,'/about-us','sliders/welcome-slider.jpg',NULL,1,1,'2025-09-16 08:13:19','2025-09-16 08:13:19');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_blogs`
--

DROP TABLE IF EXISTS `tags_blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags_blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` text NOT NULL,
  `tag_id` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_blogs`
--

LOCK TABLES `tags_blogs` WRITE;
/*!40000 ALTER TABLE `tags_blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags_blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `website_contents`
--

DROP TABLE IF EXISTS `website_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `website_contents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'text',
  `content_en` text DEFAULT NULL,
  `content_ar` text DEFAULT NULL,
  `content_bg` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `attributes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`attributes`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `website_contents_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `website_contents`
--

LOCK TABLES `website_contents` WRITE;
/*!40000 ALTER TABLE `website_contents` DISABLE KEYS */;
INSERT INTO `website_contents` VALUES (1,'home.about.header','home','about','text','About Tharawat','عن ثروات','На Трите',NULL,NULL,NULL,1,1,'2025-09-13 13:41:07','2025-09-13 17:33:16'),(2,'home.about.title','home','about','text','Your Trusted Investment Partner','شريكك الاستثماري الموثوق',NULL,NULL,NULL,NULL,1,2,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(3,'home.about.text1','home','about','text','Professional and versatile technical and engineering capability.','قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات.',NULL,NULL,NULL,NULL,1,3,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(4,'home.about.text2','home','about','text','Diversified range of Products & Services.','مجموعة متنوعة من المنتجات والخدمات.',NULL,NULL,NULL,NULL,1,4,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(5,'home.about.text3','home','about','text','Focus on Quality Brand Names, Solid Innovation & Customer Satisfaction.','التركيز على أسماء العلامات التجارية عالية الجودة والابتكار الراسخ ورضا العملاء.',NULL,NULL,NULL,NULL,1,5,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(6,'home.about.button','home','about','text','Read More','اقرأ المزيد',NULL,NULL,NULL,NULL,1,6,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(7,'home.about.image','home','about','image','About Tharawat Investment Group','عن مجموعة ثروات الاستثمارية',NULL,'website_images/about-image.jpg',NULL,NULL,1,7,'2025-09-13 13:41:07','2025-09-13 16:52:47'),(8,'home.join.title1','home','join','text','Join Our Team','انضم إلى فريقنا',NULL,NULL,NULL,NULL,1,1,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(9,'home.join.button1','home','join','text','Join Us','انضم إلينا',NULL,NULL,NULL,NULL,1,2,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(10,'home.join.title2','home','join','text','Contact Us','اتصل بنا',NULL,NULL,NULL,NULL,1,3,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(11,'home.join.button2','home','join','text','Get In Touch','تواصل معنا',NULL,NULL,NULL,NULL,1,4,'2025-09-13 13:41:07','2025-09-13 13:41:07'),(12,'footer.copyright','footer','main','text','© 2025 Tharawa Investment Group. All rights reserved.','©2026 مجموعة ثروات الاستثمارية. جميع الحقوق محفوظ.',NULL,NULL,NULL,NULL,1,1,'2025-09-13 13:41:07','2025-09-13 14:48:34'),(13,'footer.description','home','main','text','Building the future through strategic investments and innovative solutionss.','بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة.',NULL,NULL,NULL,NULL,1,2,'2025-09-13 13:41:07','2025-09-13 15:35:23'),(14,'footer.address1','home','main','text','Egypt Office: 39 Autostrad Rd. Maadi, Cairo, Egypt.','مكتب مصر: 39 طريق الأوتوستراد، المعادي، القاهرة، مصر.',NULL,NULL,NULL,NULL,1,3,'2025-09-13 13:57:54','2025-09-13 15:53:16'),(15,'footer.phone','home','main','text','+20 223589181','+20 223589181',NULL,NULL,NULL,NULL,1,4,'2025-09-13 13:57:54','2025-09-13 17:29:19'),(16,'footer.address2','footer','main','text','UAE Office: Business Bay, Dubai, UAE','مكتب الإمارات: الخليج التجاري، دبي، الإمارات',NULL,NULL,NULL,NULL,1,5,'2025-09-13 13:57:54','2025-09-13 13:58:23'),(17,'footer.phone2','footer','main','text','+971 4 123 4567','+971 4 123 4567',NULL,NULL,NULL,NULL,1,6,'2025-09-13 13:57:54','2025-09-13 13:57:54'),(18,'footer.email','footer','main','text','info@thrawaat.com','info@thrawaat.com',NULL,NULL,NULL,NULL,1,7,'2025-09-13 13:57:54','2025-09-13 13:57:54'),(19,'footer.join','footer','main','text','Join Us','انضم إلينا',NULL,NULL,NULL,NULL,1,8,'2025-09-13 13:57:54','2025-09-13 13:57:54'),(20,'home.join.image1','home','join','image',NULL,NULL,NULL,'website_images/join-image1.png',NULL,NULL,1,1,'2025-09-13 15:04:00','2025-09-13 16:52:47'),(21,'home.join.image2','home','join','image',NULL,NULL,NULL,'website_images/join-image2.png',NULL,NULL,1,2,'2025-09-13 15:05:30','2025-09-16 09:18:36'),(22,'header.logo','home','logo','image',NULL,NULL,NULL,'website_images/header_logo.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 16:41:28'),(23,'footer.logo','home','logo','image',NULL,NULL,NULL,'website_images/footer_logo.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(24,'footer.eu_flag','home','eu_flag','image',NULL,NULL,NULL,'website_images/footer_eu_flag.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(25,'lang.uk','home','uk','image',NULL,NULL,NULL,'website_images/lang_uk.svg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(26,'lang.france','home','france','image',NULL,NULL,NULL,'website_images/lang_france.svg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(27,'lang.egypt','home','egypt','image',NULL,NULL,NULL,'website_images/lang_egypt.svg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(28,'lang.bg','home','bg','image',NULL,NULL,NULL,'website_images/lang_bg.svg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(29,'home.counter.bg','home','bg','image',NULL,NULL,NULL,'website_images/home_counter_bg.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(30,'home.groups.g1','home','g1','image',NULL,NULL,NULL,'website_images/home_groups_g1.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(31,'home.groups.g2','home','g2','image',NULL,NULL,NULL,'website_images/home_groups_g2.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(32,'home.groups.g3','home','g3','image',NULL,NULL,NULL,'website_images/home_groups_g3.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(33,'home.groups.g4','home','g4','image',NULL,NULL,NULL,'website_images/home_groups_g4.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 18:31:35'),(34,'home.groups.g5','home','g5','image',NULL,NULL,NULL,'website_images/home_groups_g5.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(35,'home.groups.g6','home','g6','image',NULL,NULL,NULL,'website_images/home_groups_g6.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(36,'home.groups.g7','home','g7','image',NULL,NULL,NULL,'website_images/home_groups_g7.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(37,'home.groups.slider','home','slider','image',NULL,NULL,NULL,'website_images/home_groups_slider.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(38,'home.partners.1','home','1','image',NULL,NULL,NULL,'website_images/home_partners_1.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(39,'home.partners.2','home','2','image',NULL,NULL,NULL,'website_images/home_partners_2.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-16 09:08:37'),(40,'home.partners.3','home','3','image',NULL,NULL,NULL,'website_images/home_partners_3.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 17:13:40'),(41,'home.partners.4','home','4','image',NULL,NULL,NULL,'website_images/home_partners_4.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(42,'home.partners.5','home','5','image',NULL,NULL,NULL,'website_images/home_partners_5.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 19:23:31'),(43,'home.partners.6','home','6','image',NULL,NULL,NULL,'website_images/home_partners_6.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(44,'home.partners.7','home','7','image',NULL,'شريك 7',NULL,'website_images/home_partners_7.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 18:43:15'),(45,'home.partners.8','home','8','image',NULL,NULL,NULL,'website_images/home_partners_8.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 17:21:30'),(46,'home.partners.10','home','10','image',NULL,NULL,NULL,'website_images/home_partners_10.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(47,'home.partners.11','home','11','image',NULL,NULL,NULL,'website_images/home_partners_11.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(48,'home.partners.12','home','12','image',NULL,NULL,NULL,'website_images/home_partners_12.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 16:52:48'),(49,'home.partners.13','home','13','image',NULL,NULL,NULL,'website_images/home_partners_13.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(50,'home.partners.14','home','14','image',NULL,NULL,NULL,'website_images/home_partners_14.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 17:21:30'),(51,'pages.about.header','about','header','image',NULL,NULL,NULL,'website_images/pages_about_header.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-16 09:28:34'),(52,'pages.contact.header','contact','header','image',NULL,NULL,NULL,'website_images/pages_contact_header.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-16 09:29:19'),(53,'pages.join.header','join','header','image',NULL,NULL,NULL,'website_images/pages_join_header.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(54,'pages.tech.it','tech','it','image',NULL,NULL,NULL,'website_images/pages_tech_it.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(55,'pages.tech.ecommerce','tech','ecommerce','image',NULL,NULL,NULL,'website_images/pages_tech_ecommerce.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(56,'pages.tech.ads','tech','ads','image',NULL,NULL,NULL,'website_images/pages_tech_ads.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(57,'pages.energy.logo','energy','logo','image',NULL,NULL,NULL,'website_images/pages_energy_logo.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(58,'pages.energy.image1','energy','image1','image',NULL,NULL,NULL,'website_images/pages_energy_image1.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(59,'pages.energy.image2','energy','image2','image',NULL,NULL,NULL,'website_images/pages_energy_image2.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(60,'pages.energy.image3','energy','image3','image',NULL,NULL,NULL,'website_images/pages_energy_image3.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(61,'pages.energy.image4','energy','image4','image',NULL,NULL,NULL,'website_images/pages_energy_image4.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(62,'pages.financial.logo','financial','logo','image',NULL,NULL,NULL,'website_images/pages_financial_logo.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(63,'pages.financial.image1','financial','image1','image',NULL,NULL,NULL,'website_images/pages_financial_image1.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(64,'pages.financial.image2','financial','image2','image',NULL,NULL,NULL,'website_images/pages_financial_image2.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(65,'pages.atasoy.logo','home','logo','image',NULL,NULL,NULL,'website_images/pages_atasoy_logo.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-16 09:25:14'),(66,'pages.atasoy.image1','atasoy','image1','image',NULL,NULL,NULL,'website_images/pages_atasoy_image1.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(67,'pages.atasoy.image2','atasoy','image2','image',NULL,NULL,NULL,'website_images/pages_atasoy_image2.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(68,'pages.atasoy.image3','atasoy','image3','image',NULL,NULL,NULL,'website_images/pages_atasoy_image3.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(69,'pages.auto.logo','auto','logo','image',NULL,NULL,NULL,'website_images/pages_auto_logo.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(70,'pages.auto.image1','auto','image1','image',NULL,NULL,NULL,'website_images/pages_auto_image1.jpeg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(71,'pages.tourism.logo','tourism','logo','image',NULL,NULL,NULL,'website_images/pages_tourism_logo.jpg',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(72,'pages.adv.logo','adv','logo','image',NULL,NULL,NULL,'website_images/pages_adv_logo.png',NULL,NULL,1,0,'2025-09-13 15:10:07','2025-09-13 15:10:07'),(73,'home.slider.bg','home','slider','image','Home slider background image','صورة خلفية شريط التمرير الرئيسي','Фоново изображение на главния слайдер','website_images/slider2.jpg',NULL,NULL,1,1,'2025-09-13 18:17:54','2025-09-13 18:17:54'),(74,'home.join.fallback1','home','join','image','Join us fallback image 1','صورة احتياطية للانضمام إلينا 1','Резервно изображение за присъединяване 1','website_images/f2.png',NULL,NULL,1,2,'2025-09-13 18:17:54','2025-09-13 18:17:54'),(75,'home.join.fallback2','home','join','image','Join us fallback image 2','صورة احتياطية للانضمام إلينا 2','Резервно изображение за присъединяване 2','website_images/f1.png',NULL,NULL,1,3,'2025-09-13 18:17:54','2025-09-13 18:17:54'),(76,'home.about.fallback','home','about','image','About us fallback image','صورة احتياطية عنا','Резервно изображение за нас','website_images/about.jpeg',NULL,NULL,1,4,'2025-09-13 18:17:54','2025-09-13 18:17:54'),(78,'header.home','header','navigation','text','Home','الرئيسية','Начало',NULL,NULL,NULL,1,1,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(79,'header.about','header','navigation','text','About','عن الشركة','За нас',NULL,NULL,NULL,1,2,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(80,'header.group','header','navigation','text','The Group','المجموعة','Групата',NULL,NULL,NULL,1,3,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(81,'header.investor','header','navigation','text','Investor Relations','علاقات المستثمرين','Инвеститорски отношения',NULL,NULL,NULL,1,4,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(82,'header.join','header','navigation','text','Join Us','انضم إلينا','Присъединете се',NULL,NULL,NULL,1,5,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(83,'header.contact','header','navigation','text','Contact Us','اتصل بنا','Свържете се с нас',NULL,NULL,NULL,1,6,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(84,'home.silderSpan1','home','slider','text','Welcome to','مرحباً بكم في','Добре дошли в',NULL,NULL,NULL,1,1,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(85,'home.silderSpan2','home','slider','text','Tharawat Investment Group','مجموعة ثروات الاستثمارية','Инвестиционна група Тарават',NULL,NULL,NULL,1,2,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(86,'home.silderContent','home','slider','text','Building the future through strategic investments and innovative solutions','بناء المستقبل من خلال الاستثمارات الاستراتيجية والحلول المبتكرة','Изграждане на бъдещето чрез стратегически инвестиции и иновативни решения',NULL,NULL,NULL,1,3,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(87,'home.CTA','home','slider','text','Learn More','اعرف المزيد','Научете повече',NULL,NULL,NULL,1,4,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(88,'fullAbout.title','about','hero','text','Welcome to Thrawaat Int\'l Investment Corp S.A.E','مرحباً بكم في شركة ثروات الدولية للاستثمار ش.م.م','Добре дошли в Thrawaat International Investment Corp S.A.E',NULL,NULL,NULL,1,1,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(89,'fullAbout.header2','about','content','text','About us','عن الشركة','За нас',NULL,NULL,NULL,1,1,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(90,'fullAbout.title2','about','content','text','Your Trusted Investment Partner','شريكك الاستثماري الموثوق','Вашият доверен инвестиционен партньор',NULL,NULL,NULL,1,2,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(91,'fullAbout.title3',NULL,NULL,'text','Professional and versatile technical and engineering capability.','قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات.','Професионални и универсални технически и инженерни възможности.',NULL,NULL,NULL,1,3,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(92,'fullAbout.p1','about','content','text','a holding company currently in the process of incorporating. We have been a registered Egyptian Joint Stock Company since 1980, operating under the provisions of companies\' law no. 59 of 1981. Our company has shares in subsidiary companies established in the late 1970s in the Gulf area, specializing in construction and consultation. We have since expanded into the Egyptian markets, offering real estate development and petroleum services.','شركة قابضة حالياً في طور التأسيس. لقد كنا شركة مساهمة مصرية مسجلة منذ عام 1980، تعمل تحت أحكام قانون الشركات رقم 59 لسنة 1981. تمتلك شركتنا أسهم في شركات فرعية تأسست في أواخر السبعينيات في منطقة الخليج، متخصصة في البناء والاستشارات. لقد وسعنا منذ ذلك الحين في الأسواق المصرية، ونقدم خدمات تطوير العقارات والبترول.','холдингова компания, която в момента е в процес на учредяване. Ние сме регистрирана египетска акционерна компания от 1980 г., работеща под разпоредбите на закона за компаниите № 59 от 1981 г. Нашата компания притежава дялове в дъщерни компании, създадени в края на 70-те години в района на Персийския залив, специализирани в строителство и консултации. Оттогава разширихме в египетските пазари, предлагайки услуги за недвижими имоти и петролни услуги.',NULL,NULL,NULL,1,4,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(93,'fullAbout.p2','about','content','text','At Thrawaat Int\'l Investment Corp, we provide professional and versatile technical and engineering capabilities. We offer a diversified range of products and services and focus on quality brand names, solid innovation, and customer satisfaction.','في شركة ثروات الدولية للاستثمار، نقدم قدرات تقنية وهندسية مهنية ومتعددة الاستخدامات. نقدم مجموعة متنوعة من المنتجات والخدمات ونتحلى على أسماء العلامات التجارية عالية الجودة والابتكار الراسخ ورضا العملاء.','В Thrawaat International Investment Corp ние предоставяме професионални и универсални технически и инженерни възможности. Предлагаме разнообразна гама от продукти и услуги и се фокусираме върху качествени марки, солидна иновация и удовлетвореност на клиентите.',NULL,NULL,NULL,1,5,'2025-09-16 08:18:11','2025-09-16 08:18:11'),(94,'pages.richee.header','richee','hero','text','Richee Hospitality Group','مجموعة ريشي للضيافة','Richee Hospitality Group',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(95,'pages.richee.title','richee','content','text','Hospitality Management','إدارة الضيافة','Hospitality Management',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(96,'pages.richee.p1','richee','content','text','we gain NEDA development agreement with Wyndham -one of the world\'s largest- for Egypt and Morocco.','حصلنا على اتفاقية تطوير NEDA مع Wyndham -واحدة من أكبر الشركات في العالم- لمصر والمغرب.','we gain NEDA development agreement with Wyndham -one of the world\'s largest- for Egypt and Morocco.',NULL,NULL,NULL,1,3,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(97,'pages.richee.p2','richee','content','text','Our goal is to manage and operate 150 properties in Africa in the short-medium term','هدفنا هو إدارة وتشغيل 150 عقار في أفريقيا على المدى القصير والمتوسط','Our goal is to manage and operate 150 properties in Africa in the short-medium term',NULL,NULL,NULL,1,4,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(98,'pages.richee.button','richee','content','text','ABOUT WYNDHAM','حول WYNDHAM','ABOUT WYNDHAM',NULL,NULL,NULL,1,5,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(99,'pages.atasoy.header','atasoy','hero','text','ATASOY Real Estate development','أتاسوي لتطوير العقارات','ATASOY Real Estate development',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(100,'pages.atasoy.title1','atasoy','content','text','Stay Tuned','ترقبوا','Stay Tuned',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(101,'pages.atasoy.p1','atasoy','content','text','Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.','ترقبوا مشاريعنا الجديدة المثيرة! مع أكثر من أربعين عاماً من الخبرة في المقاولات والاستشارات الهندسية عبر مصر والسعودية والكويت، قررت شركة أتاسوي التوسع في تطوير العقارات.','Keep an eye out for our exciting new projects! With over forty years of experience in contracting and engineering consultancy across Egypt, Saudi Arabia, and Kuwait, Atasoy Company has decided to expand into real estate development.',NULL,NULL,NULL,1,3,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(102,'pages.atasoy.title2','atasoy','content','text','Le Paradis De Maadi','لو باراديس دي المعادي','Le Paradis De Maadi',NULL,NULL,NULL,1,4,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(103,'pages.atasoy.p2','atasoy','content','text','Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.','مشروع مجمعنا التجاري يقع في موقع متميز في المعادي أوتستراد. قيد الإنشاء حالياً، سيتضمن المشروع مطعماً فاخراً ومقهى ومنطقة تجارية وهايبرماركت.','Our commercial complex project is situated in the prime location of Maadi Autostrad. Currently under construction, the project will feature a luxurious restaurant, coffee shop, retail area, and hypermarket.',NULL,NULL,NULL,1,5,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(104,'pages.atasoy.title3','atasoy','content','text','New Administrative Capital','العاصمة الإدارية الجديدة','New Administrative Capital',NULL,NULL,NULL,1,6,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(105,'pages.atasoy.p3','atasoy','content','text','We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.','نحن متحمسون للإعلان عن إطلاق مشروعنا الأول قريباً في منطقة المدينة الإعلامية في العاصمة الإدارية الجديدة، المسمى برج WYNDHAM GRAND.','We are excited to announce the upcoming launch of our first project in the Media City zone of the new administrative capital, called WYNDHAM GRAND Tower.',NULL,NULL,NULL,1,7,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(106,'pages.atasoy.title4','atasoy','content','text','North Coast Egypt','الساحل الشمالي مصر','North Coast Egypt',NULL,NULL,NULL,1,8,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(107,'pages.atasoy.p4','atasoy','content','text','Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.','ترقبوا سنطلق مشروعنا الضخم الأول في الساحل الشمالي مصر قريباً برؤية جديدة لم يتم تطبيقها بعد في سوق العقارات المصري.','Stay tuned we will launch our first huge project in North Coast Egypt soon with a new perspective that has not yet been implemented in the Egyptian real estate market.',NULL,NULL,NULL,1,9,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(108,'pages.financial.header','financial','hero','text','Financial Investment','الاستثمار المالي','Financial Investment',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(109,'pages.financial.title1','financial','content','text','Custody Services','خدمات الحفظ','Custody Services',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(110,'pages.financial.p1','financial','content','text','Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.','تقدم شركتنا خدمات الحفظ لمساعدة عملائنا على الشعور بالثقة في قدرتهم على إدارة استثماراتهم.','Our company offers Custody Services to help our clients feel confident in their ability to manage their investments.',NULL,NULL,NULL,1,3,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(111,'pages.financial.title2','financial','content','text','Consultancy Services','خدمات الاستشارات','Consultancy Services',NULL,NULL,NULL,1,4,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(112,'pages.financial.p2','financial','content','text','Our duty is to monitor the country\'s development plans to assist investors in making well-informed decisions.','واجبنا هو مراقبة خطط التنمية في البلاد لمساعدة المستثمرين على اتخاذ قرارات مدروسة.','Our duty is to monitor the country\'s development plans to assist investors in making well-informed decisions.',NULL,NULL,NULL,1,5,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(113,'pages.financial.title3','financial','content','text','Fund & Portfolio Management','إدارة الصناديق والمحافظ','Fund & Portfolio Management',NULL,NULL,NULL,1,6,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(114,'pages.financial.p3','financial','content','text','we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.','لدينا فريق من الباحثين ذوي الخبرة والتكنولوجيا المتقدمة مخصص لإدارة محافظ الأفراد ذوي الثروات العالية والمؤسسات المالية.','we have a team of experienced researchers and advanced technology dedicated to managing the portfolios of high-net-worth individuals and financial institutions.',NULL,NULL,NULL,1,7,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(115,'pages.energy.header','energy','hero','text','Thrawaat Renewable Energy','ثروات للطاقة المتجددة','Thrawaat Renewable Energy',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(116,'pages.energy.title1','energy','content','text','Our company has formed a partnership with Univergy Solar','شكلت شركتنا شراكة مع Univergy Solar','Our company has formed a partnership with Univergy Solar',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(117,'pages.energy.p1','energy','content','text','A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.','مجموعة أعمال رائدة في قطاع الطاقة المتجددة. نركز على تطوير وبناء محطات كبيرة للطاقة الشمسية وطاقة الرياح.','A leading business group in the renewable energy sector. Our focus is on developing and constructing large solar and wind energy plants.',NULL,NULL,NULL,1,3,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(118,'pages.energy.cta','energy','content','text','Website','الموقع','Website',NULL,NULL,NULL,1,4,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(119,'pages.mining.header','mining','hero','text','Mining & petroleum services','خدمات التعدين والبترول','Mining & petroleum services',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(120,'pages.mining.p1','mining','content','text','Under Construction','قيد الإنشاء','Under Construction',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(121,'pages.tourism.header','tourism','hero','text','Tourism & Travel','السياحة والسفر','Tourism & Travel',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(122,'pages.tourism.title','tourism','content','text','Mon ami travel','مون آمي ترافل','Mon ami travel',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(123,'pages.tourism.p1','tourism','content','text','We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.','لسنا مؤسسة سياحية جديدة، ولا نحن هنا لتقييم أنشطتنا السياحية. مؤسستنا موجودة منذ فترة.','We are not a new tourist establishment, nor are we here to evaluate our tourist activities. Our foundation has been around for a while.',NULL,NULL,NULL,1,3,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(124,'pages.tourism.cta','tourism','content','text','WEBSITE','الموقع','WEBSITE',NULL,NULL,NULL,1,4,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(125,'pages.auto.header','auto','hero','text','Automotive','السيارات','Automotive',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(126,'pages.auto.title1','auto','content','text','Al Awad Automotive Group','مجموعة العواد للسيارات','Al Awad Automotive Group',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(127,'pages.auto.p1','auto','content','text','established 2004 with 3S facilities \"Showrooms, Services stations & Spare parts\" dealing with large automotive companies such as General Motors & Nissan Motors','تأسست عام 2004 مع مرافق 3S \"صالات عرض ومحطات خدمة وقطع غيار\" تتعامل مع شركات السيارات الكبيرة مثل جنرال موتورز و نيسان موتورز','established 2004 with 3S facilities \"Showrooms, Services stations & Spare parts\" dealing with large automotive companies such as General Motors & Nissan Motors',NULL,NULL,NULL,1,3,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(128,'pages.auto.title2','auto','content','text','OCTOPUS AUTO','أوكتوبوس أوتو','OCTOPUS AUTO',NULL,NULL,NULL,1,4,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(129,'pages.auto.p2','auto','content','text','The Octopus Company acts as the representative for Sinotruk trucks in Egypt.','تعمل شركة أوكتوبوس كممثل لشاحنات سينوتراك في مصر.','The Octopus Company acts as the representative for Sinotruk trucks in Egypt.',NULL,NULL,NULL,1,5,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(130,'pages.auto.cta','auto','content','text','WEBSITE','الموقع','WEBSITE',NULL,NULL,NULL,1,6,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(131,'pages.retail.header','retail','hero','text','Retail & Hypermarkets','التجزئة والهايبرماركت','Retail & Hypermarkets',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(132,'pages.retail.title','retail','content','text','Under Construction','قيد الإنشاء','Under Construction',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(133,'pages.tech.header','tech','hero','text','Telphoenix Business Solutions','تلفونيكس حلول الأعمال','Telphoenix Business Solutions',NULL,NULL,NULL,1,1,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(134,'pages.tech.title1','tech','content','text','Information Technology','تكنولوجيا المعلومات','Information Technology',NULL,NULL,NULL,1,2,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(135,'pages.tech.p1','tech','content','text','We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.','نصمم ونبني وندير أنظمة تكنولوجيا معلومات آمنة وقابلة للتوسع مصممة خصيصاً لنمو أعمالك.','We design, build, and manage secure, scalable IT ecosystems tailored to your business growth.',NULL,NULL,NULL,1,3,'2025-09-16 08:41:37','2025-09-16 08:41:37'),(136,'pages.tech.title2','tech','content','text','E‑Commerce Solutions','حلول التجارة الإلكترونية','E‑Commerce Solutions',NULL,NULL,NULL,1,4,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(137,'pages.tech.p2','tech','content','text','We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.','نطلق تجارب تجارية تركز على الإيرادات - من واجهات المتاجر إلى اللوجستيات والمدفوعات - حتى تبيع أكثر بأقل احتكاك.','We launch revenue‑focused commerce experiences—from storefronts to logistics and payments—so you sell more with less friction.',NULL,NULL,NULL,1,5,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(138,'pages.tech.title3','tech','content','text','Advertising & Creative','الإعلان والإبداع','Advertising & Creative',NULL,NULL,NULL,1,6,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(139,'pages.tech.p3','tech','content','text','Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.','حملات كاملة القمع تربط العلامة التجارية بالأداء. نحن نصنع خطط إبداعية ومحتوى وإعلامية تنمي الوعي وخط الأنابيب.','Full‑funnel campaigns that connect brand to performance. We craft creative, content, and media plans that grow awareness and pipeline.',NULL,NULL,NULL,1,7,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(140,'pages.contact.title','contact','hero','text','Contact us','اتصل بنا','Contact us',NULL,NULL,NULL,1,1,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(141,'pages.contact.form.title','contact','form','text','Send Message','إرسال رسالة','Send Message',NULL,NULL,NULL,1,2,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(142,'pages.contact.form.req','contact','form','text','* The following info is required *','* المعلومات التالية مطلوبة *','* The following info is required *',NULL,NULL,NULL,1,3,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(143,'pages.contact.form.firstName','contact','form','text','First Name *','الاسم الأول *','First Name *',NULL,NULL,NULL,1,4,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(144,'pages.contact.form.lastName','contact','form','text','Last Name *','الاسم الأخير *','Last Name *',NULL,NULL,NULL,1,5,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(145,'pages.contact.form.email','contact','form','text','Email *','البريد الإلكتروني *','Email *',NULL,NULL,NULL,1,6,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(146,'pages.contact.form.phone','contact','form','text','Phone','الهاتف','Phone',NULL,NULL,NULL,1,7,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(147,'pages.contact.form.message','contact','form','text','Message','الرسالة','Message',NULL,NULL,NULL,1,8,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(148,'pages.contact.form.cta','contact','form','text','Send Message','إرسال الرسالة','Send Message',NULL,NULL,NULL,1,9,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(149,'pages.join.title','join','hero','text','Join our team','انضم إلى فريقنا','Join our team',NULL,NULL,NULL,1,1,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(150,'pages.join.form.title','join','form','text','Upload your Resume','ارفع سيرتك الذاتية','Upload your Resume',NULL,NULL,NULL,1,2,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(151,'pages.join.form.req','join','form','text','* The following info is required *','* المعلومات التالية مطلوبة *','* The following info is required *',NULL,NULL,NULL,1,3,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(152,'pages.join.form.firstName','join','form','text','First Name *','الاسم الأول *','First Name *',NULL,NULL,NULL,1,4,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(153,'pages.join.form.lastName','join','form','text','Last Name *','الاسم الأخير *','Last Name *',NULL,NULL,NULL,1,5,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(154,'pages.join.form.email','join','form','text','Email *','البريد الإلكتروني *','Email *',NULL,NULL,NULL,1,6,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(155,'pages.join.form.phone','join','form','text','Phone','الهاتف','Phone',NULL,NULL,NULL,1,7,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(156,'pages.join.form.jobTitle','join','form','text','Job Title','المسمى الوظيفي','Job Title',NULL,NULL,NULL,1,8,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(157,'pages.join.form.cta','join','form','text','Send','إرسال','Send',NULL,NULL,NULL,1,9,'2025-09-16 08:41:38','2025-09-16 08:41:38'),(158,'contact.address1','contact','info','text','Egypt Office: 39 Autostrad Rd. Maadi, Cairo, Egypt.','مكتب مصر: 39 طريق الأوتوستراد، المعادي، القاهرة، مصر.','Egypt Office: 39 Autostrad Rd. Maadi, Cairo, Egypt.',NULL,NULL,NULL,1,1,'2025-09-16 08:48:49','2025-09-16 09:30:32'),(159,'contact.address2','contact','info','text','Morocco Office: 45 Rue Amir Abdelkader, Casablanca','مكتب المغرب: 45 شارع الأمير عبد القادر، الدار البيضاء','Morocco Office: 45 Rue Amir Abdelkader, Casablanca',NULL,NULL,NULL,1,2,'2025-09-16 08:48:49','2025-09-16 08:48:49'),(160,'contact.phone1','contact','info','text','Phone: +20 223589181 +2 012 7000 1764','هاتف: +20 223589181 +2 012 7000 1764','Phone: +20 223589181 +2 012 7000 1764',NULL,NULL,NULL,1,3,'2025-09-16 08:48:49','2025-09-16 08:48:49'),(161,'contact.phone2','contact','info','text','Phone: +212 614892033','هاتف: +212 614892033','Phone: +212 614892033',NULL,NULL,NULL,1,4,'2025-09-16 08:48:49','2025-09-16 08:48:49'),(162,'contact.email','contact','info','text','Email: info@thrawaat.com','البريد الإلكتروني: info@thrawaat.com','Email: info@thrawaat.com',NULL,NULL,NULL,1,5,'2025-09-16 08:48:49','2025-09-16 08:48:49'),(163,'contact.email_label','contact','info','text','Email:','البريد الإلكتروني:','Email:',NULL,NULL,NULL,1,6,'2025-09-16 08:48:49','2025-09-16 08:48:49'),(164,'contact.email_address','contact','info','text','info@thrawaat.com','info@thrawaat.com','info@thrawaat.com',NULL,NULL,NULL,1,7,'2025-09-16 08:48:49','2025-09-16 08:48:49'),(165,'blog.image1','blog','content','image','Blog image 1','صورة المدونة 1','Blog image 1',NULL,NULL,NULL,1,1,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(166,'blog.image2','blog','content','image','Blog image 2','صورة المدونة 2','Blog image 2',NULL,NULL,NULL,1,2,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(167,'blog.image3','blog','content','image','Blog image 3','صورة المدونة 3','Blog image 3',NULL,NULL,NULL,1,3,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(168,'blog.image4','blog','content','image','Blog image 4','صورة المدونة 4','Blog image 4',NULL,NULL,NULL,1,4,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(169,'blog.image5','blog','content','image','Blog image 5','صورة المدونة 5','Blog image 5',NULL,NULL,NULL,1,5,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(170,'groups.hardcoded.g1','groups','content','image','Group 1 image','صورة المجموعة 1','Group 1 image',NULL,NULL,NULL,1,1,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(171,'groups.hardcoded.g2','groups','content','image','Group 2 image','صورة المجموعة 2','Group 2 image',NULL,NULL,NULL,1,2,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(172,'groups.hardcoded.g3','groups','content','image','Group 3 image','صورة المجموعة 3','Group 3 image',NULL,NULL,NULL,1,3,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(173,'groups.hardcoded.g4','groups','content','image','Group 4 image','صورة المجموعة 4','Group 4 image',NULL,NULL,NULL,1,4,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(174,'groups.hardcoded.g5','groups','content','image','Group 5 image','صورة المجموعة 5','Group 5 image',NULL,NULL,NULL,1,5,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(175,'groups.hardcoded.g6','groups','content','image','Group 6 image','صورة المجموعة 6','Group 6 image',NULL,NULL,NULL,1,6,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(176,'groups.hardcoded.g7','groups','content','image','Group 7 image','صورة المجموعة 7','Group 7 image',NULL,NULL,NULL,1,7,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(177,'projects.image1','projects','content','image','Project 1 image','صورة المشروع 1','Project 1 image',NULL,NULL,NULL,1,1,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(178,'projects.image2','projects','content','image','Project 2 image','صورة المشروع 2','Project 2 image',NULL,NULL,NULL,1,2,'2025-09-16 09:03:29','2025-09-16 09:03:29'),(179,'projects.image3','projects','content','image','Project 3 image','صورة المشروع 3','Project 3 image',NULL,NULL,NULL,1,3,'2025-09-16 09:03:30','2025-09-16 09:03:30'),(180,'pages.atasoy.content.image1','atasoy','content','image','Atasoy content image 1','صورة محتوى أتاسوي 1','Atasoy content image 1',NULL,NULL,NULL,1,1,'2025-09-16 09:03:30','2025-09-16 09:03:30'),(181,'pages.atasoy.content.image2','atasoy','content','image','Atasoy content image 2','صورة محتوى أتاسوي 2','Atasoy content image 2',NULL,NULL,NULL,1,2,'2025-09-16 09:03:30','2025-09-16 09:03:30'),(182,'pages.atasoy.content.image3','atasoy','content','image','Atasoy content image 3','صورة محتوى أتاسوي 3','Atasoy content image 3',NULL,NULL,NULL,1,3,'2025-09-16 09:03:30','2025-09-16 09:03:30'),(183,'pages.atasoy.content.image4','atasoy','content','image','Atasoy content image 4','صورة محتوى أتاسوي 4','Atasoy content image 4',NULL,NULL,NULL,1,4,'2025-09-16 09:03:30','2025-09-16 09:03:30');
/*!40000 ALTER TABLE `website_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'thrawaat'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-09-23 17:45:14
