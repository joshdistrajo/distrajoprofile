-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 01:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--
CREATE DATABASE IF NOT EXISTS `id21974656_jwosh` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `id21974656_jwosh`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientID` int(11) NOT NULL,
  `lname` text NOT NULL,
  `fname` text NOT NULL,
  `lot` text NOT NULL,
  `street` text NOT NULL,
  `subd` text NOT NULL,
  `brgy` text NOT NULL,
  `city` text NOT NULL,
  `prov` text NOT NULL,
  `country` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientID`, `lname`, `fname`, `lot`, `street`, `subd`, `brgy`, `city`, `prov`, `country`, `phone`, `email`, `password`, `status`) VALUES
(1, 'Ajh', 'Anb', '3A', 'Random St.', '', '535', 'Sampaloc', 'Manila', 'Philippines', '09123456789', 'robbietalagatof@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0),
(2, 'Ajh', 'Anb', '3A', 'Random St.', '', '535', 'Sampaloc', 'Manila', 'Philippines', '09123456788', 'robbietalagato@gmail.co', '03c7c0ace395d80182db07ae2c30f034', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientID`),
  ADD UNIQUE KEY `phone` (`phone`,`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
