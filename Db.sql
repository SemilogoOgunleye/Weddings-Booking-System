-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 07:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coa123wdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE IF NOT EXISTS `catering` (
  `venue_id` int(11) NOT NULL,
  `grade` enum('1','2','3','4','5') NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`venue_id`, `grade`, `cost`) VALUES
(1, '2', 15),
(2, '3', 20),
(3, '5', 40.2),
(4, '3', 50.1),
(5, '3', 70.3),
(6, '5', 120.2),
(7, '3', 39.4),
(8, '1', 45.2),
(9, '4', 45.87),
(10, '2', 78.9);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `capacity` int(11) NOT NULL,
  `weekend_price` decimal(10,0) NOT NULL,
  `weekday_price` decimal(10,0) NOT NULL,
  `licensed` tinyint(4) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `name`, `capacity`, `weekend_price`, `weekday_price`, `licensed`) VALUES
(1, 'Central Plaza', 200, '2000', '1750', 1),
(2, 'Pacific Towers Hotel', 250, '3000', '2400', 1),
(3, 'Haslegrave Hotel', 200, '2000', '1500', 0),
(4, 'Forest Inn', 260, '1800', '1600', 1),
(5, 'Ashby Castle', 1000, '8000', '7000', 1),
(6, 'Fawlty Towers', 50, '600', '400', 1),
(7, 'Hilltop Mansion', 120, '3000', '2200', 0),
(8, 'Sea View Tavern', 300, '2200', '2000', 0),
(9, 'Sky Centre Complex', 100, '2500', '1900', 0),
(10, 'Southwestern Estate ', 500, '4000', '3000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `venue_booking`
--

CREATE TABLE IF NOT EXISTS `venue_booking` (
  `venue_id` int(11) NOT NULL,
  `booking_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue_booking`
--

INSERT INTO `venue_booking` (`venue_id`, `booking_date`) VALUES
(1, 4),
(1, 3),
(2, 7),
(2, 6),
(2, 6),
(1, 4),
(2, 4),
(2, 4),
(3, 5),
(3, 6),
(4, 1),
(4, 8),
(5, 9),
(5, 12),
(6, 9),
(6, 3),
(7, 2),
(7, 10),
(8, 12),
(8, 11),
(9, 1),
(9, 2),
(10, 5),
(10, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
