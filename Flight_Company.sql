-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 26 mei 2026 om 10:04
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
-- Tabelstructuur voor tabel `accommodations`
--

CREATE TABLE `accommodations` (
  `accommodationid` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `peopleamount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `accommodations`
--

INSERT INTO `accommodations` (`accommodationid`, `name`, `type`, `peopleamount`) VALUES
(1, 'Hotel V Nesplein', 'Hotel', 4),
(2, 'Hotel Le Marais', 'Hotel', 2),
(3, 'The Manhattan Hotel', 'Hotel', 10),
(4, 'Tokyo Guesthouse Asakusa', 'Guesthouse', 5),
(5, 'Hotel Arts Barcelona', 'Hotel', 6),
(6, 'The Savoy', 'Hotel', 3),
(7, 'Sydney Harbour Lodge', 'Lodge', 8),
(8, 'Hotel Bella Roma', 'Hotel', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `flights`
--

CREATE TABLE `flights` (
  `flightid` int NOT NULL,
  `departure` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `flights`
--

INSERT INTO `flights` (`flightid`, `departure`, `destination`) VALUES
(1, 'Amsterdam', 'Parijs'),
(2, 'Amsterdam', 'New York'),
(3, 'Amsterdam', 'Tokyo'),
(4, 'Amsterdam', 'Barcelona'),
(5, 'Amsterdam', 'Londen'),
(6, 'Amsterdam', 'Sydney'),
(7, 'Amsterdam', 'Rome');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `locations`
--

CREATE TABLE `locations` (
  `locationid` int NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `locations`
--

INSERT INTO `locations` (`locationid`, `city`, `country`) VALUES
(1, 'Amsterdam', 'Nederland'),
(2, 'Parijs', 'Frankrijk'),
(3, 'New York', 'Verenigde Staten'),
(4, 'Tokyo', 'Japan'),
(5, 'Barcelona', 'Spanje'),
(6, 'Londen', 'Verenigd Koninkrijk'),
(7, 'Sydney', 'Australië'),
(8, 'Rome', 'Italië');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `orderid` int NOT NULL,
  `orderdate` datetime NOT NULL,
  `Sum` double NOT NULL,
  `userid` int DEFAULT NULL,
  `tripid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int NOT NULL,
  `review` text NOT NULL,
  `userid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `trips`
--

CREATE TABLE `trips` (
  `tripid` int NOT NULL,
  `maxpersons` int NOT NULL,
  `price` double DEFAULT NULL,
  `startdate` datetime NOT NULL,
  `duration` int NOT NULL,
  `description` text NOT NULL,
  `flightid` int DEFAULT NULL,
  `accommodationid` int NOT NULL,
  `locationid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`accommodationid`);

--
-- Indexen voor tabel `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flightid`);

--
-- Indexen voor tabel `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locationid`);

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `fk_orders_user` (`userid`),
  ADD KEY `fk_orders_trip` (`tripid`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `fk_reviews_user` (`userid`);

--
-- Indexen voor tabel `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`tripid`),
  ADD KEY `fk_Flight` (`flightid`),
  ADD KEY `fk_users_accommodation` (`accommodationid`),
  ADD KEY `fk_trips_locations` (`locationid`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `accommodationid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `flights`
--
ALTER TABLE `flights`
  MODIFY `flightid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `locations`
--
ALTER TABLE `locations`
  MODIFY `locationid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `trips`
--
ALTER TABLE `trips`
  MODIFY `tripid` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_trips` FOREIGN KEY (`tripid`) REFERENCES `trips` (`tripid`),
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Beperkingen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_users` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Beperkingen voor tabel `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `fk_trips_locations` FOREIGN KEY (`locationid`) REFERENCES `locations` (`locationid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
