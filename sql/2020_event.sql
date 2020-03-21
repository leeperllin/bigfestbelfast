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
-- Table structure for table `2020_event`
--

CREATE TABLE `2020_event` (
  `eid` int(11) NOT NULL,
  `etitle` varchar(255) NOT NULL,
  `evenue` varchar(255) NOT NULL,
  `edate` date NOT NULL,
  `etime` time NOT NULL,
  `eimage` longtext NOT NULL,
  `ecatid` int(11) NOT NULL,
  `evmid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_event`
--

INSERT INTO `2020_event` (`eid`, `etitle`, `evenue`, `edate`, `etime`, `eimage`, `ecatid`, `evmid`) VALUES
(100, 'The Fire Boys', 'Belfast Opera Musical House', '2020-03-31', '18:00:00', '01.jpeg', 1, 102),
(101, 'The Fire Girls', 'London Opera Music House', '2020-04-02', '15:00:00', '02.jpeg', 2, 101),
(102, 'The Cold Boys', 'Malaysia Opera Music House', '2020-04-17', '20:00:00', '03.jpeg', 3, 102),
(103, 'The Cold Girls', 'USA Opera Music House', '2020-05-07', '16:00:00', '04.jpeg', 2, 103),
(104, 'The Impossible Man', 'Dublin House', '2020-05-17', '18:00:00', '05.jpeg', 1, 103),
(105, 'The Superman', 'London City Hall', '2020-04-22', '19:00:00', '06.jpeg', 3, 101),
(106, 'Dancing Monkey', 'Malaysia Hutan Hall', '2020-05-02', '20:00:00', '07.jpeg', 2, 103),
(107, 'Can You Hear Me?', 'Belfast City Hall', '2020-06-02', '15:00:00', '08.jpeg', 1, 102),
(108, 'Love Yourself', 'China Wuhan ', '2020-06-12', '18:00:00', '09.jpeg', 3, 101);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2020_event`
--
ALTER TABLE `2020_event`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `ecatid` (`ecatid`),
  ADD KEY `evmid` (`evmid`),
  ADD KEY `evmid_2` (`evmid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2020_event`
--
ALTER TABLE `2020_event`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `2020_event`
--
ALTER TABLE `2020_event`
  ADD CONSTRAINT `2020_eventcat` FOREIGN KEY (`ecatid`) REFERENCES `2020_eventcat` (`etid`),
  ADD CONSTRAINT `2020_venuemanager` FOREIGN KEY (`evmid`) REFERENCES `2020_venuemanager` (`vmid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
