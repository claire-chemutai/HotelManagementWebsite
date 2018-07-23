-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 10:36 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akofena`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--
create database webtech_claire_chemutai;

CREATE TABLE `bookingdetails` (
  `id` int(11) NOT NULL,
  `datein` int(11) NOT NULL,
  `monthin` varchar(255) NOT NULL,
  `yearin` varchar(255) NOT NULL,
  `dateout` int(11) NOT NULL,
  `monthout` varchar(255) NOT NULL,
  `yearout` int(11) NOT NULL,
  `adults` int(11) NOT NULL,
  `kid` int(11) NOT NULL,
  `roomtype` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`id`, `datein`, `monthin`, `yearin`, `dateout`, `monthout`, `yearout`, `adults`, `kid`, `roomtype`, `firstname`, `lastname`, `email`, `address`) VALUES
(4, 16, 'November', '2017', 18, 'November', 2017, 3, 0, 'Double', 'Claire', 'Chemutai', 'claire.chemutai@ashesi.edu.gh', 'kingoli 33'),
(5, 9, 'january', '2018', 12, 'january', 2018, 2, 1, 'Deluxe', 'mary', 'melly', 'mary@melly', 'kilimani'),
(6, 9, 'january', '2018', 12, 'january', 2018, 2, 0, 'Double', 'Anne', 'Rerai', 'anne@Rerai', 'maru'),
(7, 10, 'December', '2017', 12, 'December', 2017, 3, 1, 'Double', 'Diane', 'Kendy', 'diane@kendy', 'mins'),
(8, 1, 'january', '2017', 1, 'january', 2017, 1, 0, 'Single', 'henry', 'kosgei', 'henry@kosgei', 'jsdk');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES
('claire', 'claire@chemutai', 'services', 'Perfect sevices'),
('mary', 'mary@ndeto', 'cleanliness', 'very clean hotel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

use webtech_claire_chemutai;
