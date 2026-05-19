-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 19 mei 2026 om 10:08
-- Serverversie: 8.4.8
-- PHP-versie: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Flight_Company`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `FLights`
--

CREATE TABLE `flights` (
  `flightid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Trip`
--

CREATE TABLE `trip` (
  `tripID` int NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` double DEFAULT NULL,
  `flightid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `FLights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flightid`);

--
-- Indexen voor tabel `Trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`tripid`),
  ADD KEY `fk_Flight` (`flightid`);

--
-- Indexen voor tabel `Users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Trip`
--
ALTER TABLE `trip`
  MODIFY `tripid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `Users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `Trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `fk_flight` FOREIGN KEY (`flightid`) REFERENCES `flights` (`flightid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
