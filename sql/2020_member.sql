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
-- Table structure for table `2020_member`
--

CREATE TABLE `2020_member` (
  `mid` int(11) NOT NULL,
  `mfirstname` varchar(255) NOT NULL,
  `mlastname` varchar(255) NOT NULL,
  `memail` varchar(255) NOT NULL,
  `mpass` varchar(255) NOT NULL,
  `mquestion` varchar(255) NOT NULL,
  `manswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_member`
--

INSERT INTO `2020_member` (`mid`, `mfirstname`, `mlastname`, `memail`, `mpass`, `mquestion`, `manswer`) VALUES
(1001, 'Perl Lin ', 'Lee', 'leeperllin3029@hotmail.com', 'happy3029', 'What is your dog name?', 'Lucky'),
(1002, 'Li', 'Qin', 'liqin3029@hotmail.com', '000000', 'What were the last four digits of your telephone number?', '0000'),
(1003, 'Desmond', 'Sim', 'desmondsim@gmail.com', '123456', 'What primary school did you attend?', 'Queens Belfast');

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
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
