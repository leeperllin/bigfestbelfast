-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2020 at 12:29 AM
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
  `sendername` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `msgcontent` longtext NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_message`
--

INSERT INTO `2020_message` (`msgid`, `sender`, `sendername`, `receiver`, `msgcontent`, `datetime`) VALUES
(46, '1001', 'leeperllin3029@hotmail.com', '102', ' Hello', '2020-03-26 20:39:00'),
(47, '1001', 'leeperllin3029@hotmail.com', '102', ' hello', '2020-03-26 20:40:00'),
(48, '1001', 'leeperllin3029@hotmail.com', '102', ' Hello fuker', '2020-03-26 20:47:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_message`
--
ALTER TABLE `2020_message`
  ADD PRIMARY KEY (`msgid`),
  ADD KEY `sender` (`sender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_message`
--
ALTER TABLE `2020_message`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
