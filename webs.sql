-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 09:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webs`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_id` int(23) NOT NULL,
  `First Name` varchar(56) NOT NULL,
  `Last Name` varchar(67) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `code` varchar(45) NOT NULL,
  `status` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `First Name`, `Last Name`, `Email`, `Username`, `Password`, `code`, `status`) VALUES
(17, 'Nsanzimana', 'Emmanuel', 'Christian', 'nsanzimanaofficial@gmail.com', 'bd14fc739e93de91fb6cfd00e1ccc2690603c3b6', '493504', 'Verfied'),
(19, 'Izere', 'Clovis', 'Chriss', 'nsanzimanaofficial4@gmail.com', 'eced270d16312c86917f9585a6525187cd597ae5', '264228', 'Not verfied');

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

CREATE TABLE `rec` (
  `prid` int(12) NOT NULL,
  `email` varchar(23) NOT NULL,
  `token` varchar(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec`
--

INSERT INTO `rec` (`prid`, `email`, `token`) VALUES
(1, 'nsanzimanaofficial@gmai', '91b34a557da3ca68'),
(2, 'nsanzimanaofficial@gmai', 'da03ddc05c7294ec'),
(3, 'nsanzimanaofficial@gmai', '343dfaaf8ad96afd'),
(4, 'nsanzimanaofficial@gmai', '4be7594aceb95874'),
(5, 'nsanzimanaofficial@gmai', 'c23d0c762cefea14'),
(6, 'nsanzimanaofficial@gmai', '9441a0240f672465'),
(7, 'nsanzimanaofficial@gmai', '8a0066a4032c084f'),
(8, 'nsanzimanaofficial@gmai', 'aa6f9669010d28eb'),
(9, 'nsanzimanaofficial@gmai', 'eb8b76b81e71e2c7'),
(10, 'nsanzimanaofficial@gmai', 'e8d1fd17ddf33ccf'),
(11, 'nsanzimanaofficial@gmai', '5258648a02a57c50'),
(12, 'nsanzimanaofficial@gmai', '6b7705e985d5d497'),
(13, 'nsanzimanaofficial@gmai', 'c18078ad54cb9711'),
(14, 'nsanzimanaofficial@gmai', '3767b7c6c67c5d04'),
(15, 'nsanzimanaofficial@gmai', '5e5df3cc32a3bfde'),
(16, 'nsanzimanaofficial@gmai', 'fa06abd667d1812a'),
(17, 'nsanzimanaofficial@gmai', 'efb27f8e446a20aa'),
(18, 'nsanzimanaofficial@gmai', '42007de744b9ec8f'),
(19, 'nsanzimanaofficial@gmai', '92d06e9a187b88db'),
(20, 'nsanzimanaofficial@gmai', '9eb9a969b05e831e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `rec`
--
ALTER TABLE `rec`
  ADD PRIMARY KEY (`prid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rec`
--
ALTER TABLE `rec`
  MODIFY `prid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
