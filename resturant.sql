-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2024 at 07:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `dish` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `dish`, `amount`, `price`, `total`, `user`) VALUES
(1, 'ZITI', '0', '30', '0', 5),
(2, 'ZITI', '0', '30', '0', 5),
(3, 'ZITI', '0', '30', '0', 5),
(4, 'ZITI', '0', '30', '0', 5),
(5, 'ZITI', '0', '30', '0', 5),
(6, 'ZITI', '0', '30', '0', 5),
(7, 'ZITI', '0', '30', '0', 5),
(8, 'ZITI', '0', '30', '0', 5),
(9, 'ZITI', '', '30', '0', 5),
(10, 'ZITI', '', '30', '0', 5),
(11, 'ZITI', '', '30', '0', 5),
(12, 'ZITI', '', '30', '0', 5),
(13, 'ZITI', '4', '30', '120', 5),
(14, 'parmesan', '12', '50', '600', 5),
(15, 'Italian Meatballs', '33', '55', '1815', 5),
(16, 'Tortellini', '12', '45', '0', 5),
(17, 'lasagna', '5', '150', '750', 5);

-- --------------------------------------------------------

--
-- Table structure for table `userz`
--

CREATE TABLE `userz` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userz`
--

INSERT INTO `userz` (`id`, `name`, `email`, `password`) VALUES
(1, 'mohamed', 'mohamed.adel@gmail.com', '1122334455'),
(5, 'samy', 'samy@gmail.com', '12345'),
(7, 'ramy', 'ramy@gmail.com', '123456'),
(8, 'samsam', 'samsam@gmail.com', '$2y$10$5WL9K8OU/tk4zzjEGk1aEee47WdXopt6a5zncH./BCd6cMJG2tVcW'),
(9, 'stream', 'stream@gmail.com', '$2y$10$GkHf85CghlfFJe38hiGY5eWBpPxKqJ50sP363FX36Lwq.RcGV9ANi'),
(10, 'tasmania', 'tasmania@gmail.com', '$2y$10$hS5.G3hrmk.K5s2jz1NLNuwsWTrzGWJlaTXlnajIg0DzQliI24Oja'),
(13, 'swastika', 'swastika@gmail.com', '$2y$10$ZJodvpMwECzsnePlNAGT2OpYeKPGHhcvSupirK7Uuef9S6Y5UZuq2'),
(14, 'islamislam', 'islam.islam@gmail.com', '$2y$10$za7p27xbkDU6U5/mbTH/E.O2bteq3KRk66n55mq5.SxO08aVgqtaS'),
(15, 'kamalkamal', 'kamal.kamal@gmail.com', '$2y$10$wwqPq80gVNMDUM.PpnZDbu37mCsMiJJBrz0Y/0eXToP74/jRyU6cG'),
(16, 'omaradel', 'omar.adel@gmail.com', '$2y$10$nT.HRcX5YeP9JPkPairZ3u..sNC2oEzTAUnsfM4bN0LP0EBk.hbcK'),
(17, 'sabir', 'sabir@gmail.com', '$2y$10$WWQdnlBc/tMm3aqUs8gmFeBMLROZXws5LdIc.0HqCpnW7I1lEd16u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `userz`
--
ALTER TABLE `userz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `userz`
--
ALTER TABLE `userz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `userz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
