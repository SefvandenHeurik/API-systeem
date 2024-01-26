# TV dashboard


Developers: Vincent,Sef,Freek en Chokri

> Om dit te kunnen gebruiken moet je dit project in je wamp of xampp zetten, verder hebben we ook een database in phpmyadmin.
> dit project is gemaakt voor een opdracht van het gilde college.

## Keuzes

>Gebruikt iframe,  php, javascript, Html, css. verder hebben we gekozen voor een weer API, een docenten pagina en een NS api. 

## Code structure

>veel gebruik gemaakt van camelCases.


## Applicatie starten

> je hebt wamp/xamp nodig de database die hieronder is gegeven, verder heb je ook nog je localhost nodig, je moet het mapje van de files voor het project in de wamp doen. en dan moet je in de browser localhost/map_naam/File_naam

## database

>  -- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 26 jan 2024 om 10:15
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



