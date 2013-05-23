-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 25 mrt 2013 om 11:43
-- Serverversie: 5.5.16
-- PHP-Versie: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `markregistration`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class` enum('AM1A','AM2A','AM3A','AM4A','MB1A','MB2A','MB3A','MB4A') NOT NULL,
  `mentor` int(10) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `UNIQUE_CLASS_YEAR` (`class`,`year`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Gegevens worden uitgevoerd voor tabel `class`
--

INSERT INTO `class` (`class_id`, `class`, `mentor`, `year`) VALUES
(1, 'AM1A', 1, 2012),
(3, 'AM2A', 1, 2012),
(6, 'AM3A', 1, 2012),
(8, 'MB3A', 1, 2012),
(12, 'MB4A', 1, 2014),
(14, 'MB2A', 1, 2013);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
