-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 26 jan 2024 om 10:29
-- Serverversie: 8.0.31
-- PHP-versie: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meldingen`
--

DROP TABLE IF EXISTS `meldingen`;
CREATE TABLE IF NOT EXISTS `meldingen` (
  `Tekst` text NOT NULL,
  `Tijdstempel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `meldingen`
--

INSERT INTO `meldingen` (`Tekst`, `Tijdstempel`, `name`) VALUES
('dit is een zeer mooi bericht jaja', '2024-01-23 12:09:00', 'fe'),
('hallo allemaal vandaag is een vrije dag! joejoe!', '2024-01-23 12:09:40', 'fe'),
('esfdgrtfhgyjhukj', '2024-01-23 16:22:00', 'fe'),
('ja', '2024-01-24 11:57:16', 'fe'),
('ja1', '2024-01-24 11:57:42', 'fe');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`) VALUES
(1, 'fr', 'fr@fr.com', '82a9e4d26595c87ab6e442391d8c5bba'),
(2, 'fe', 'fe@fe.com', '2d917f5d1275e96fd75e6352e26b1387'),
(3, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'test1', 'test1@test1.com', '098f6bcd4621d373cade4e832627b4f6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
