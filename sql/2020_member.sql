-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2020 at 02:04 AM
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
-- Table structure for table `2020_member`
--

CREATE TABLE `2020_member` (
  `mid` int(11) NOT NULL,
  `mfirstname` varchar(255) NOT NULL,
  `mlastname` varchar(255) NOT NULL,
  `memail` varchar(255) NOT NULL,
  `mpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_member`
--

INSERT INTO `2020_member` (`mid`, `mfirstname`, `mlastname`, `memail`, `mpass`) VALUES
(1001, 'Perl Lin 0000', 'Lee', 'leeperllin3029@hotmail.com', 'happy3029'),
(1002, 'Li', 'Qin', 'liqin3029@hotmail.com', '123456'),
(1003, 'Desmond', 'Sim', 'desmondsim@gmail.com', '123456'),
(1004, '', '', '', ''),
(1005, 'Desmond1234', 'Sim', 'desmondsim@gmail.com', '123456'),
(1006, 'Desmond', 'Sim 000', 'desmondsim123@gmail.com', '123456'),
(1007, 'Perl Lin', 'Lee', 'leeperllin3029@hotmail.com', 'happy3029'),
(1008, 'Desmond', 'Sim', 'desmondsim@gmail.com', '123456'),
(1009, 'Perl Lin', 'Lee', 'leeperllin3029@hotmail.com', 'happy3029');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_member`
--
ALTER TABLE `2020_member`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_member`
--
ALTER TABLE `2020_member`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
