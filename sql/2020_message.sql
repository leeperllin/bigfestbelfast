-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2020 at 01:41 AM
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
-- Table structure for table `2020_message`
--

CREATE TABLE `2020_message` (
  `msgid` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `msgcontent` longtext NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_message`
--

INSERT INTO `2020_message` (`msgid`, `sender`, `receiver`, `msgcontent`, `datetime`) VALUES
(4, '1001', '101', ' Hello bitch\r\n', '2020-03-25 00:05:00'),
(5, '1001', '101', ' Hello dick', '2020-03-25 00:07:00'),
(6, '1001', '101', ' Hello dick', '2020-03-25 00:27:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_message`
--
ALTER TABLE `2020_message`
  ADD PRIMARY KEY (`msgid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_message`
--
ALTER TABLE `2020_message`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
