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
-- Table structure for table `2020_booking`
--

CREATE TABLE `2020_booking` (
  `bid` int(11) NOT NULL,
  `bmemberid` int(11) NOT NULL,
  `beventid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_booking`
--

INSERT INTO `2020_booking` (`bid`, `bmemberid`, `beventid`) VALUES
(16, 1001, 108),
(17, 1001, 107),
(19, 1001, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_booking`
--
ALTER TABLE `2020_booking`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `beventid` (`beventid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_booking`
--
ALTER TABLE `2020_booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `2020_booking`
--
ALTER TABLE `2020_booking`
  ADD CONSTRAINT `2020_booking` FOREIGN KEY (`beventid`) REFERENCES `2020_event` (`eid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
