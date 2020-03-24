-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2020 at 01:39 AM
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
-- Table structure for table `2020_reviews`
--

CREATE TABLE `2020_reviews` (
  `rid` int(11) NOT NULL,
  `comment` longtext NOT NULL,
  `eventid` int(11) NOT NULL,
  `memberid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_reviews`
--

INSERT INTO `2020_reviews` (`rid`, `comment`, `eventid`, `memberid`) VALUES
(1, 'This event so very nice', 101, 1001),
(2, 'I really like the music', 102, 1002),
(3, 'I love United Kingdom', 103, 1003),
(4, 'I think another event is better', 104, 1002),
(6, 'I like the environment so much ', 107, 1002),
(7, 'This is amazing, OMG!', 108, 1002),
(8, 'YES I LOVE IT LOVE IT ', 100, 1003),
(9, 'Talking to the moon', 106, 1003);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_reviews`
--
ALTER TABLE `2020_reviews`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `eventid` (`eventid`),
  ADD KEY `memberid` (`memberid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_reviews`
--
ALTER TABLE `2020_reviews`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `2020_reviews`
--
ALTER TABLE `2020_reviews`
  ADD CONSTRAINT `2020_reviews` FOREIGN KEY (`memberid`) REFERENCES `2020_member` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
