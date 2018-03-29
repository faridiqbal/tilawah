# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: tilawah
# Generation Time: 2018-03-29 15:09:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `minggu` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `nama`, `description`, `created_at`, `updated_at`, `minggu`)
VALUES
	(1,'Raudatul Jannah 1','Ini adalah kumpulan pertama','2018-03-27 23:42:53','2018-03-29 14:06:37',3),
	(2,'Raudatul Jannah 2','Ini adalah kumpulan kedua','2018-03-28 00:33:39','2018-03-29 15:02:58',1);

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table members
# ------------------------------------------------------------

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `juz` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;

INSERT INTO `members` (`id`, `group_id`, `nama`, `juz`, `created_at`, `updated_at`)
VALUES
	(1,1,'Arpah Badros',3,NULL,'2018-03-29 14:06:37'),
	(2,1,'Hazrina Hassan',10,'2018-03-29 02:11:32','2018-03-29 14:06:37'),
	(3,1,'Azlina Aziz',4,'2018-03-29 04:47:32','2018-03-29 14:06:37'),
	(4,1,'Faradiba Sudari',5,'2018-03-29 04:49:20','2018-03-29 14:06:37'),
	(5,1,'Fathiah A. Bakar',6,'2018-03-29 04:50:00','2018-03-29 14:06:37'),
	(6,1,'Fatimah Harun',7,'2018-03-29 04:50:12','2018-03-29 14:06:37'),
	(7,1,'Fuziah Darwis',8,'2018-03-29 04:50:29','2018-03-29 14:06:37'),
	(8,1,'Fuziah Harun',9,'2018-03-29 06:29:21','2018-03-29 14:06:37'),
	(9,1,'Hazwani Alihuddin',11,'2018-03-29 06:29:34','2018-03-29 14:06:37'),
	(10,1,'Juliana',12,'2018-03-29 06:29:44','2018-03-29 14:06:37'),
	(11,1,'Kasih Pangat',13,'2018-03-29 06:29:50','2018-03-29 14:06:37'),
	(12,1,'Latipah Salleh',14,'2018-03-29 06:29:58','2018-03-29 14:06:37'),
	(13,1,'Misah Ramli',15,'2018-03-29 06:30:09','2018-03-29 14:06:37'),
	(14,1,'Sahida Saad',23,'2018-03-29 06:30:20','2018-03-29 14:06:37'),
	(15,1,'Nor Shamsida',17,'2018-03-29 06:31:18','2018-03-29 14:06:37'),
	(16,1,'Nor Hamidah',16,'2018-03-29 06:31:25','2018-03-29 14:06:37'),
	(17,1,'Robitah Ismail',18,'2018-03-29 06:31:37','2018-03-29 14:06:37'),
	(18,1,'Rokiah A. Ghani',19,'2018-03-29 06:31:44','2018-03-29 14:06:37'),
	(19,1,'Ros Amiza',20,'2018-03-29 06:31:50','2018-03-29 14:06:37'),
	(20,1,'Rozaini Omar',21,'2018-03-29 06:31:59','2018-03-29 14:06:37'),
	(21,1,'Russita Ahmad',22,'2018-03-29 06:40:51','2018-03-29 14:06:37'),
	(22,1,'Saniah Awang',24,'2018-03-29 06:40:59','2018-03-29 14:06:37'),
	(23,1,'Siti Maryam',25,'2018-03-29 06:41:10','2018-03-29 14:06:37'),
	(24,1,'Siti Noraini',26,'2018-03-29 06:41:16','2018-03-29 14:06:37'),
	(25,1,'Siti Nurul',27,'2018-03-29 06:41:37','2018-03-29 14:06:37'),
	(26,1,'Siti Rodziah',28,'2018-03-29 06:41:45','2018-03-29 14:06:37'),
	(27,1,'Siti Yuhanis',29,'2018-03-29 06:41:51','2018-03-29 14:06:37'),
	(28,1,'Zaini Idris',30,'2018-03-29 06:41:58','2018-03-29 14:06:37'),
	(29,1,'Zaiton Othman',1,'2018-03-29 06:42:07','2018-03-29 14:06:37'),
	(30,1,'Zakiah Ashari',2,'2018-03-29 06:42:16','2018-03-29 14:06:37'),
	(32,2,'Amnah',1,'2018-03-29 14:10:06','2018-03-29 15:02:58'),
	(33,2,'Asiah Taib',2,'2018-03-29 14:10:13','2018-03-29 15:02:58'),
	(34,2,'Che Sam M. Sharif',3,'2018-03-29 14:10:23','2018-03-29 15:02:58'),
	(35,2,'Fatimah',4,'2018-03-29 14:10:32','2018-03-29 15:02:58'),
	(36,2,'Fazilah Ismail',5,'2018-03-29 14:10:41','2018-03-29 15:02:58'),
	(37,2,'Hjh Noraini GB',6,'2018-03-29 14:10:51','2018-03-29 15:02:58'),
	(38,2,'Hamidah Ismail',7,'2018-03-29 14:10:59','2018-03-29 15:02:58'),
	(39,2,'Hamzaiton Taib',8,'2018-03-29 14:11:11','2018-03-29 15:02:58'),
	(40,2,'Sarimah Kastor',9,'2018-03-29 14:11:18','2018-03-29 15:04:47'),
	(41,2,'Jamilah Harun',10,'2018-03-29 14:11:28','2018-03-29 15:02:58'),
	(42,2,'Kalsom Seman',11,'2018-03-29 14:11:35','2018-03-29 15:02:58'),
	(43,2,'Kartini Musman',12,'2018-03-29 14:11:46','2018-03-29 15:02:58'),
	(44,2,'Maznah Pagoh',13,'2018-03-29 14:11:54','2018-03-29 15:02:58'),
	(45,2,'Miskiah Satari',14,'2018-03-29 14:12:15','2018-03-29 15:02:58'),
	(46,2,'Noorida Ibrahim',15,'2018-03-29 14:12:25','2018-03-29 15:02:58'),
	(47,2,'Noraini Yaacob',16,'2018-03-29 14:12:34','2018-03-29 15:02:58'),
	(48,2,'Norhazan M. Said',17,'2018-03-29 14:12:46','2018-03-29 15:02:58'),
	(49,2,'Nuradila Hamid',18,'2018-03-29 14:12:56','2018-03-29 15:02:58'),
	(50,2,'Rohaiza Abdullah',19,'2018-03-29 14:13:15','2018-03-29 15:02:58'),
	(51,2,'Rohani Abdullah',20,'2018-03-29 14:13:29','2018-03-29 15:02:58'),
	(52,2,'Rokiah Husin',21,'2018-03-29 14:13:39','2018-03-29 15:02:58'),
	(53,2,'Rubiah Kam',22,'2018-03-29 14:13:52','2018-03-29 15:02:58'),
	(54,2,'Saadiah Taib',23,'2018-03-29 14:14:00','2018-03-29 15:02:58'),
	(55,2,'Sualmi Miskam',24,'2018-03-29 14:14:11','2018-03-29 15:02:58'),
	(56,2,'Marian Sis',25,'2018-03-29 14:14:19','2018-03-29 15:02:58'),
	(57,2,'Syalina Talib',26,'2018-03-29 14:14:29','2018-03-29 15:02:58'),
	(58,2,'Zaidah Omar',27,'2018-03-29 14:14:37','2018-03-29 15:02:58'),
	(59,2,'Zalamah Ran',28,'2018-03-29 14:14:47','2018-03-29 15:02:58'),
	(60,2,'Arpah Badros*',29,'2018-03-29 14:15:54','2018-03-29 15:02:58'),
	(61,2,'Zakiah Ashari',30,'2018-03-29 14:16:07','2018-03-29 15:02:58');

/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_03_27_142218_create_members_table',1),
	(4,'2018_03_27_142227_create_groups_table',1),
	(5,'2018_03_29_081254_add_minggu_to_groups',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
