-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 01:45 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dice_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `result` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `username`, `result`) VALUES
(24, 'Jonas', '0.80'),
(25, 'Antanas', '0.80'),
(26, 'Cre8or', '2.00'),
(27, 'Vincas', '0.80'),
(28, 'Jonas', '2.20'),
(29, 'Antanas', '1.20'),
(30, 'Antanas', '1.00'),
(31, 'Vincas', '1.20'),
(32, 'Vincas', '2.00'),
(33, 'Cre8or', '2.60'),
(34, 'Jonas', '1.20'),
(35, 'Jonas', '0.60'),
(36, 'Jonas', '1.00'),
(37, 'Jonas', '1.40'),
(38, 'Jonas', '3.40'),
(39, 'Jonas', '1.80'),
(40, 'Jonas', '2.00'),
(41, 'Jonas', '1.00'),
(42, 'Jonas', '0.00'),
(43, 'Jonas', '0.20'),
(44, 'Jonas', '1.40'),
(45, 'Jonas', '3.20'),
(46, 'Cre8or', '1.40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `surname`, `email`, `level`) VALUES
(1, 'Jonas', '$2y$10$GoKJaadkxA3neu4sypFQ0uzpP.uGZR0rQC2jtWjzh3g7cHVGfWgym', 'Jonas', 'Jablonskis', 'jablonskis@gmail.com', 1),
(2, 'Antanas', '$2y$10$3f8njHjtHTD1xSiNVgj41.H/JWsq06e1Bfpuj78Mbnc3EAZK46n4e', 'Antanas', 'Vienuolis', 'vienuolis@gmail.com', 1),
(3, 'Vincas', '$2y$10$HJRN8k34UUtO97BHwsY.MOtn9r0wfwJVcHluvxeeHlysCAPRULuWC', 'Vincas', 'Mykolaitis', 'putinas@gmail.com', 1),
(4, 'Cre8or', '$2y$10$J.hw44hxuXAOsJxsjUYf7u.5n3cID9Y.nyk1LtOx7sHdN6tJCCakK', 'Kazys', 'Saja', 'saja@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
