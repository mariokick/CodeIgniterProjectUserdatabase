-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2015 at 03:27 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` varchar(4) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CountryCode` varchar(2) NOT NULL,
  `Budget` double NOT NULL,
  `Used` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `Username`, `Password`, `Name`, `Email`, `CountryCode`, `Budget`, `Used`) VALUES
('C001', 'win', 'win001', 'Win Weerachai', 'win.weerachai@thaicreate.com', 'TH', 1000000, 600000),
('C002', 'john', 'john002', 'John Smith', 'john.smith@thaicreate.com', 'EN', 2000000, 800000),
('C003', 'jame', 'jame003', 'Jame Born', 'jame.born@thaicreate.com', 'US', 3000000, 600000),
('C004', 'chalee', 'chalee004', 'Chalee Angel', 'chalee.angel@thaicreate.com', 'US', 4000000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `MemberID` int(2) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=564259164 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `Username`, `Password`, `Name`, `Tel`, `Email`) VALUES
(1, 'weerachai', 'weerachai@1', 'Weerachai Nukitram', '0819876107', 'weerachai@thaicreate.com'),
(3, 'surachai', 'surachai@3', 'Surachai Sirisart', '0876543210', 'surachai@thaicreate.com'),
(56259135, 'mariokick', 'mario103', 'Piyawat Pumpuang', '0914250644', 'mariokick@windowslive.com'),
(50359, 'lostsnow', 'mariokick', 'Somchai chainee', '0914250632', 'lostsnow@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=564259164;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
