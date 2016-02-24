-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2016 at 04:10 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SQL_Homework`
--
CREATE DATABASE IF NOT EXISTS `SQL_Homework` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `SQL_Homework`;

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

DROP TABLE IF EXISTS `Clients`;
CREATE TABLE IF NOT EXISTS `Clients` (
  `id` int(15) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(100) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`id`, `name`, `age`) VALUES
(1, 'John', 30),
(2, 'Isabel', 20),
(3, 'Leticia', 25),
(4, 'Kevin', 18),
(5, 'Samantha', 22),
(6, 'Delilah', 24),
(7, 'Kristie', 28),
(8, 'Victor', 19),
(9, 'Jonathan', 65),
(10, 'Luke', 26),
(11, 'Geralt', 80),
(12, 'Monica', 36),
(13, 'Ted', 57),
(14, 'Holy', 29),
(15, 'James', 45);

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

DROP TABLE IF EXISTS `Food`;
CREATE TABLE IF NOT EXISTS `Food` (
  `id` int(15) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`id`, `name`, `price`) VALUES
(1, 'Banana', 2.5),
(2, 'Apple', 1.5),
(3, 'Pear', 2.5),
(4, 'Pie', 4.5),
(5, 'Beef', 10.5),
(6, 'Pork', 20.5),
(7, 'Bacon', 15.5),
(8, 'Hamburguer', 3.5),
(9, 'Pizza', 1),
(10, 'Tomato', 0.5),
(11, 'Cheese', 0.7),
(12, 'Milk', 3.5),
(13, 'Butter', 1.75),
(14, 'Orange', 1),
(15, 'Grape', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `Wearables`
--

DROP TABLE IF EXISTS `Wearables`;
CREATE TABLE IF NOT EXISTS `Wearables` (
  `id` int(15) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Wearables`
--

INSERT INTO `Wearables` (`id`, `name`, `price`) VALUES
(1, 'Hat', 15),
(2, 'Beanie', 10),
(3, 'Shirt', 28),
(4, 'Tank', 18),
(5, 'Long Sleeve', 27),
(6, 'Jeans', 30),
(7, 'Shorts', 18),
(8, 'Pants', 25),
(9, 'Socks', 5),
(10, 'Boots', 40),
(11, 'Sneakers', 23),
(12, 'High Heels', 60),
(13, 'Top', 15),
(14, 'Wristband', 7),
(15, 'Ring', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Wearables`
--
ALTER TABLE `Wearables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `id` int(15) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `Food`
--
ALTER TABLE `Food`
  MODIFY `id` int(15) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `Wearables`
--
ALTER TABLE `Wearables`
  MODIFY `id` int(15) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
