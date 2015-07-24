-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.53-community-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for lazada_app
CREATE DATABASE IF NOT EXISTS `lazada_app` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lazada_app`;


-- Dumping structure for table lazada_app.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '0',
  `body` varchar(100) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table lazada_app.posts: ~11 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `body`, `updated_at`, `created_at`) VALUES
	(1, 'test', 'test', NULL, NULL),
	(2, 'test title', 'test body', NULL, NULL),
	(3, 'test title', 'test body', NULL, NULL),
	(4, 'test title', 'test body', NULL, NULL),
	(5, 'test title', 'test body', NULL, NULL),
	(6, 'hello title', 'hello body', '2015-07-23 13:16:10', '2015-07-23 13:16:10'),
	(8, 'hello title', 'hello body', '2015-07-23 13:19:16', '2015-07-23 13:19:16'),
	(9, 'hello title', 'hello body', '2015-07-23 13:19:28', '2015-07-23 13:19:28'),
	(10, 'hello title', 'hello body', '2015-07-23 13:20:16', '2015-07-23 13:20:16'),
	(12, 'hello', 'A Search Engine', '2015-07-23 13:21:23', '2015-07-23 13:21:23');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping structure for table lazada_app.post_tag
CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `tag_id` int(11) NOT NULL DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table lazada_app.post_tag: 2 rows
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `updated_at`, `created_at`) VALUES
	(1, 2, 1, '2015-07-24 00:53:18', '2015-07-24 00:53:21'),
	(2, 2, 2, '2015-07-24 00:53:53', '2015-07-24 00:53:55');
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;


-- Dumping structure for table lazada_app.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table lazada_app.tags: 4 rows
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `name`, `updated_at`, `created_at`) VALUES
	(1, 'red', '2015-07-23 19:14:58', '2015-07-23 19:14:58'),
	(2, 'blue', '2015-07-23 19:15:12', '2015-07-23 19:15:12'),
	(3, 'yellow', '2015-07-23 19:15:20', '2015-07-23 19:15:20'),
	(4, 'green', '2015-07-23 19:15:26', '2015-07-23 19:15:26');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
