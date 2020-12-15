-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `laminas`;
CREATE DATABASE `laminas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `laminas`;

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`) VALUES
(1,	'hello world',	'asdfjasdlf jlska fjas fljasdklf jasdfasldk f',	'0000-00-00 00:00:00'),
(2,	'hello world',	'asdfjasdlf jlska fjas fljasdklf jasdfasldk f',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(2,	'TEST 5',	'0000-00-00 00:00:00'),
(3,	'TEST 6',	'2020-12-15 06:20:53'),
(4,	'TEST 7',	'2020-12-15 06:20:56'),
(5,	'TEST 8',	'2020-12-15 06:20:58'),
(6,	'TEST 9',	'2020-12-15 06:21:00'),
(7,	'TEST 10',	'2020-12-15 06:21:20'),
(8,	'TEST 12',	'2020-12-15 06:21:22'),
(9,	'TEST 11',	'2020-12-15 06:21:23'),
(10,	'TEST 13',	'2020-12-15 06:21:25'),
(11,	'TEST 14',	'2020-12-15 06:21:26'),
(12,	'TEST 15',	'2020-12-15 06:21:28'),
(13,	'TEST 16',	'2020-12-15 06:21:29'),
(14,	'TEST 17',	'2020-12-15 06:21:30'),
(15,	'TEST 18',	'2020-12-15 06:21:32'),
(16,	'TEST 19',	'2020-12-15 06:21:33'),
(17,	'TEST 20',	'2020-12-15 06:21:35'),
(18,	'TEST 21',	'2020-12-15 06:21:38');

-- 2020-12-15 13:35:10
