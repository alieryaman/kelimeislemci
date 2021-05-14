-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2021 at 07:19 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordlistingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `wordlist`
--

DROP TABLE IF EXISTS `wordlist`;
CREATE TABLE IF NOT EXISTS `wordlist` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `meaning` varchar(800) COLLATE utf8_turkish_ci DEFAULT NULL,
  `note` varchar(800) COLLATE utf8_turkish_ci DEFAULT NULL,
  `savedate` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `userId` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ogrenimdurum` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `wordlist`
--

INSERT INTO `wordlist` (`Id`, `word`, `meaning`, `note`, `savedate`, `userId`, `ogrenimdurum`) VALUES
(92, 'and', '', '2021-05-14 16:22:25', '2021-05-14 16:22:25', 'john@example.com', NULL),
(91, 'as', '', '2021-05-14 16:22:24', '2021-05-14 16:22:24', 'john@example.com', NULL),
(90, 'conciliator', '', '2021-05-14 16:22:23', '2021-05-14 16:22:23', 'john@example.com', NULL),
(89, 'lawyer', '', '2021-05-14 16:22:22', '2021-05-14 16:22:22', 'john@example.com', '1'),
(88, 'mediator', '', '2021-05-14 16:22:20', '2021-05-14 16:22:20', 'john@example.com', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
