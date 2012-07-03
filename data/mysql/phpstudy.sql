-- phpMyAdmin SQL Dump
-- version 4.0.0-dev
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2012 at 02:45 PM
-- Server version: 5.5.18-log
-- PHP Version: 5.3.8-ZS5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpstudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE IF NOT EXISTS `tree` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL,
  `position` bigint(20) unsigned NOT NULL,
  `left` bigint(20) unsigned NOT NULL,
  `right` bigint(20) unsigned NOT NULL,
  `level` bigint(20) unsigned NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `parent_id`, `position`, `left`, `right`, `level`, `title`, `type`) VALUES
(6, 1, 1, 12, 13, 1, 'D:', 'drive'),
(4, 3, 0, 4, 5, 3, 'index.html', 'default'),
(5, 2, 1, 7, 10, 2, '_docs', 'folder'),
(3, 2, 0, 3, 6, 2, '_demo', 'folder'),
(2, 1, 0, 2, 11, 1, 'C:', 'drive'),
(1, 0, 2, 1, 14, 0, 'ROOT', ''),
(13, 1, 2, 12, 13, 1, 'E:', 'folder');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
