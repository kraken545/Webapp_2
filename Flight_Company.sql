-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 18, 2026 at 11:13 AM
-- Server version: 9.7.0
-- PHP Version: 8.3.31

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
-- Table structure for table `accommodations`
--

CREATE TABLE `accommodations` (
  `accommodationid` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `peopleamount` int NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accommodations`
--

INSERT INTO `accommodations` (`accommodationid`, `name`, `type`, `peopleamount`, `image`) VALUES
(1, 'Hotel V Nesplein', 'Hotel', 4, '/assets/img/hotel.png'),
(2, 'Hotel Le Marais', 'Hotel', 2, NULL),
(3, 'The Manhattan Hotel', 'Hotel', 10, NULL),
(4, 'Tokyo Guesthouse Asakusa', 'Guesthouse', 5, NULL),
(5, 'Hotel Arts Barcelona', 'Hotel', 6, NULL),
(6, 'The Savoy', 'Hotel', 3, NULL),
(7, 'Sydney Harbour Lodge', 'Lodge', 8, NULL),
(8, 'Hotel Bella Roma', 'Hotel', 4, NULL),
(24, 'Tropicana', 'Hostel', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flightid` int NOT NULL,
  `departure` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flightid`, `departure`, `destination`) VALUES
(1, 'Amsterdam', 'Parijs'),
(2, 'Amsterdam', 'New York'),
(3, 'Amsterdam', 'Tokyo'),
(4, 'Amsterdam', 'Barcelona'),
(5, 'Amsterdam', 'Londen'),
(6, 'Amsterdam', 'Sydney'),
(7, 'Amsterdam', 'Rome'),
(8, 'Amsterdam', 'Argentina'),
(9, 'Amsterdam', 'Colombia'),
(11, 'Amsterdam', 'Venezuela'),
(12, 'Amsterdam', 'Argentina');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `locationid` int NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locationid`, `city`, `country`) VALUES
(1, 'Amsterdam', 'Nederland'),
(2, 'Parijs', 'Frankrijk'),
(3, 'New York', 'Verenigde Staten'),
(4, 'Tokyo', 'Japan'),
(5, 'Barcelona', 'Spanje'),
(6, 'Londen', 'Verenigd Koninkrijk'),
(7, 'Sydney', 'Australië'),
(8, 'Rome', 'Italië'),
(9, 'Buenos aires', 'Argentina'),
(10, 'Venezuela', 'Caracas'),
(12, 'Colombia', 'Bogota'),
(13, 'Santo Domingo', 'Dominicaanse Republic');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int NOT NULL,
  `orderdate` datetime NOT NULL,
  `Sum` double NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `userid` varchar(50) DEFAULT NULL,
  `tripid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `orderdate`, `Sum`, `quantity`, `userid`, `tripid`) VALUES
(2, '2026-06-16 19:17:27', 1299.99, 1, 'user_6a27f1a1be426', 1),
(3, '2026-06-16 19:20:06', 1299.99, 1, 'user_6a27f1a1be426', 1),
(4, '2026-06-16 19:20:43', 3899.97, 3, 'user_6a27f1a1be426', 1),
(5, '2026-06-16 19:24:25', 1299.99, 1, 'user_6a27f1a1be426', 1),
(6, '2026-06-16 19:45:17', 1799, 2, 'user_6a27f1d1f340f', NULL),
(7, '2026-06-16 19:46:18', 1799, 2, 'user_6a27f1d1f340f', 2),
(9, '2026-06-18 11:10:08', 2599.98, 2, 'user_6a33d200169e8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewid` int NOT NULL,
  `userid` varchar(50) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewid`, `userid`, `name`, `email`, `subject`, `review`) VALUES
(1, NULL, 'Alice Johnson', 'alice@example.com', 'Amazing Trip!', 'The trip to Paris was absolutely wonderful. The hotel was great and the flight was smooth.'),
(2, NULL, 'Bob Smith', 'bob@example.com', 'Good service', 'Very good customer service. The booking process was simple and fast. Will definitely use again.'),
(3, NULL, 'Charlie Davis', 'charlie@example.com', 'Unforgettable experience', 'Tokyo is a beautiful city. Thank you Voyage for organizing such an unforgettable experience!'),
(4, NULL, 'Alice Johnson', 'alice@example.com', 'Amazing Trip!', 'The trip to Paris was absolutely wonderful. The hotel was great and the flight was smooth.'),
(5, NULL, 'Bob Smith', 'bob@example.com', 'Good service', 'Very good customer service. The booking process was simple and fast. Will definitely use again.'),
(6, NULL, 'Charlie Davis', 'charlie@example.com', 'Unforgettable experience', 'Tokyo is a beautiful city. Thank you Voyage for organizing such an unforgettable experience!'),
(7, NULL, 'test', 'test@gmail.com', 'test', 'test van de testen om te kijken als de test is getest om niet later t gaan testen wat al getest is. moraleja van de tester: test nooit iets wat je niet wil testen anders word je getest door de testements'),
(8, NULL, 'test', 'test@gmail.com', 'test', 'fd badg d '),
(9, NULL, 'testadfvadfv', 'testzvfdsv@gmail.com', 'testadaf', 'adfbgbsdbadbadadfvhvblakrbv vnka,v .fkvjfbvkf vfvbvuvbivukef vuefv vhevliufvh ee;fveufvhfv;q eufve fvfovuvqev;o vq;vofuqh;vlkquevjhleoivu\r\n'),
(10, NULL, 'test', 'test@gmail.com', 'test', 'rerrvervqerrvwqerfv');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
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

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`tripid`, `maxpersons`, `price`, `startdate`, `duration`, `description`, `flightid`, `accommodationid`, `locationid`) VALUES
(1, 4, 1299.99, '2026-07-10 08:00:00', 7, 'Zomervakantie in Amsterdam', NULL, 1, 1),
(2, 6, 900, '2026-08-15 10:30:00', 5, 'Romantische stedentrip naar Parijs', 1, 2, 2),
(3, 10, 2150, '2026-09-01 06:45:00', 14, 'Avontuurlijke reis naar New York', 2, 3, 3),
(4, 5, 3200.75, '2026-10-05 09:15:00', 21, 'Culturele reis door Tokyo', 3, 4, 4),
(5, 6, 750, '2026-11-12 07:00:00', 10, 'Citytrip naar Barcelona', 4, 5, 5),
(6, 3, 1100, '2026-12-24 15:00:00', 7, 'Kerstvakantie in Londen', 5, 6, 6),
(7, 8, 1850, '2027-01-08 11:00:00', 12, 'Zomervakantie in Sydney', 6, 7, 7),
(8, 4, 990, '2027-02-14 09:00:00', 6, 'Romantische valentijnsreis naar Rome', 7, 8, 8),
(20, 2, 700, '2026-06-26 17:52:00', 2, 'test', NULL, 1, 1),
(21, 3, 600, '2026-07-03 19:38:00', 3, 'test', 11, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `phone`, `password`, `role`) VALUES
('user_6a27f1a1be426', 'admin', 'admin', 'admin@gmail.com', '', '$argon2id$v=19$m=65536,t=4,p=1$d0lHamc1ZnJ2YVRWTldNRw$r9RZsO1Ju6ZLwTulL2ZHn8USrUjdEk7g245PjHsLmsQ', 'admin'),
('user_6a27f1d1f340f', 'test', 'test', 'test@gmail.com', '', '$argon2id$v=19$m=65536,t=4,p=1$Y1lTZVJxWGVWdFk5aUJWSw$IWRjh+fXxRsGjywyvK7MhGacOyTk8StFALskPUnT9Qs', 'user'),
('user_6a33d200169e8', 'kali', 'kali', 'kali@gmail.com', '8739826349', '$argon2id$v=19$m=65536,t=4,p=1$Nmc4eTN1bDFid3IuamUuZw$0aX0rkQR+wgOvk206RzyK2Vqbs/f1bqyGVGeVfalmao', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`accommodationid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`flightid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locationid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `fk_orders_user` (`userid`),
  ADD KEY `fk_orders_trip` (`tripid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `fk_reviews_user` (`userid`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`tripid`),
  ADD KEY `fk_users_accommodation` (`accommodationid`),
  ADD KEY `fk_trips_locations` (`locationid`),
  ADD KEY `fk_trips_flights` (`flightid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `accommodationid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `flightid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locationid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `tripid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_trips` FOREIGN KEY (`tripid`) REFERENCES `trips` (`tripid`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE SET NULL;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_users` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE SET NULL;

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `fk_trips_accommodations` FOREIGN KEY (`accommodationid`) REFERENCES `accommodations` (`accommodationid`) ON DELETE RESTRICT,
  ADD CONSTRAINT `fk_trips_flights` FOREIGN KEY (`flightid`) REFERENCES `flights` (`flightid`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_trips_locations` FOREIGN KEY (`locationid`) REFERENCES `locations` (`locationid`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
