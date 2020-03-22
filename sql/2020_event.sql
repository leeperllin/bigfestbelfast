-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2020 at 04:14 AM
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
  `edes` longtext NOT NULL,
  `edate` date NOT NULL,
  `etime` time NOT NULL,
  `eimage` longtext NOT NULL,
  `ecatid` int(11) NOT NULL,
  `evmid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_event`
--

INSERT INTO `2020_event` (`eid`, `etitle`, `evenue`, `edes`, `edate`, `etime`, `eimage`, `ecatid`, `evmid`) VALUES
(100, 'The Fire Boys', 'Belfast Concert Hall', 'Banging hard-house, hard-techno & trance from the party pumpers residents. Flat out rave hoover madness.\r\n\r\nFull visual production from the Visual Spectrum crew.\r\n\r\nBanging Party Pumpers decor\r\n\r\nLineup:\r\n\r\nChunkers & Decky\r\n\r\nTurlo & Ryno\r\n\r\nScath', '2020-03-31', '16:00:00', '01.jpeg', 3, 102),
(101, 'The Fire Girls', 'London Opera Music House', 'Both Cash and Elvis started their career under Sun Records in the 50s and went on to forge long and immense careers for themselves amassing an unprecedented fanbase between them all over the globe with their mixture of rock n roll, gospel, country, blues songs.', '2020-04-02', '15:00:00', '02.jpeg', 2, 101),
(102, 'The Cold Boys', 'Malaysia Opera Music House', 'Phil Kieran presents Life Cycles 002  A Love From Outer Space Featuring Andrew Weatherall and Sean Johnston makes a welcome return to Belfast on the Saturday the 20th of June.', '2020-04-17', '20:00:00', '03.jpeg', 3, 102),
(103, 'The Cold Girls', 'USA Opera Music House', 'Live Free Bookings in association with Shizznigh Promotions & Rackus Rattus Promo present:  Michale Graves (Ex Misfits Lead Singer) performing “American Psycho” & “Famous Monsters” albums in full  Friday 5th June  Limelight 2 Belfast  Doors 6:30pm  £20 tickets at eventbrite.com or £25 OTD', '2020-05-07', '16:00:00', '04.jpeg', 2, 103),
(104, 'The Impossible Man', 'Dublin House', 'The Bjorn Identity exceed all expectations as a sensational Abba tribute band! This is a truly stunning show with replica costumes, vocal likeness and Abba style choreography. The Björn Identity® with their Swedish humour & professionalism are committed to re-creating the music of their tribute idols ', '2020-05-17', '18:00:00', '05.jpeg', 1, 103),
(105, 'The Superman', 'London City Hall', 'A night dedicated to worshipping at the altar of Taylor Swift: non-stop Swifty all night: deep cuts, extended mixes, fan favourites and all the hits.  Do you have a Blank Space in your diary for 15 May? Then this night is Taylor-made for you! Join fellow fans in a celebration of the genius of the Swift - because she will never go out of Style.', '2020-04-22', '19:00:00', '06.jpeg', 3, 101),
(106, 'Dancing Monkey', 'Malaysia Hutan Hall', 'Pauline Scanlon and The Whileaways will celebrate many of Cohen’s best-loved life works. They lead a masterful collective including Will Merrigan on bass, Dave Clancy on keys, Beoga legend, Eamon Murray on drums, together with strings and brass sections.', '2020-05-02', '20:00:00', '07.jpeg', 2, 103),
(107, 'Can You Hear Me?', 'Belfast City Hall', 'The Whileaways are three powerful forces in Irish roots music, Noelie McDonnell, Noriana Kennedy and Nicola Joyce combine to create a beguiling tapestry of harmonies, tradition and beautifully crafted original songs. Their sound is simply captivating, enthralling live audiences and securing their firm footing in roots music both in Ireland and internationally.', '2020-06-02', '15:00:00', '08.jpeg', 1, 102),
(108, 'Love Yourself', 'China Wuhan ', 'That photo captures the spirit of Be Good. While all of Off With Their Heads previous work shares a common thread of being rooted in Young fatalistic view of the world, Be Good at least allows a tiny glimmer of hope to peek through.', '2020-06-12', '18:00:00', '09.jpeg', 3, 101);

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
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

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
