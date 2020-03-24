-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2020 at 05:57 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plee07`
--

-- --------------------------------------------------------

--
-- Table structure for table `2020_support`
--

CREATE TABLE `2020_support` (
  `sid` int(11) NOT NULL,
  `sdes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_support`
--

INSERT INTO `2020_support` (`sid`, `sdes`) VALUES
(1, 'Every individual supporter is vital to our continued success. Each year we strive to ensure that the Fringe remains current, relevant and accessible, and continues to offer the best opportunities for participants and audiences.\r\n\r\nBank transfers - Our details are:\r\nAccount Name: Festival Fringe Society Ltd\r\nAccount Number: 00158761\r\nSort Code: 83-34-00\r\nBank: Royal Bank of Scotland, 30 Nicholson St, Edinburgh, Midlothian EH8 9DL\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_support`
--
ALTER TABLE `2020_support`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_support`
--
ALTER TABLE `2020_support`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
