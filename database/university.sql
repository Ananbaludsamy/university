-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 01:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `classtb`
--

CREATE TABLE `classtb` (
  `classid` varchar(20) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employeetb`
--

CREATE TABLE `employeetb` (
  `emid` int(11) NOT NULL,
  `emname` varchar(50) DEFAULT NULL,
  `emsurname` varchar(50) DEFAULT NULL,
  `emage` varchar(50) DEFAULT NULL,
  `emvillage` varchar(50) DEFAULT NULL,
  `emdistrict` varchar(50) DEFAULT NULL,
  `emprovince` varchar(50) DEFAULT NULL,
  `emphone` varchar(50) DEFAULT NULL,
  `emposition` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `classid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feetb`
--

CREATE TABLE `feetb` (
  `feeid` int(11) NOT NULL,
  `stid` varchar(50) NOT NULL,
  `year` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studenttb`
--

CREATE TABLE `studenttb` (
  `stid` varchar(50) NOT NULL,
  `stname` varchar(50) DEFAULT NULL,
  `stsurname` varchar(50) DEFAULT NULL,
  `stage` varchar(50) DEFAULT NULL,
  `stdob` date DEFAULT NULL,
  `stvillage` varchar(50) DEFAULT NULL,
  `stdistrict` varchar(50) DEFAULT NULL,
  `stprovince` varchar(50) DEFAULT NULL,
  `streligion` varchar(50) DEFAULT NULL,
  `sttribe` varchar(50) DEFAULT NULL,
  `classid` varchar(20) DEFAULT NULL,
  `yearid` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `stphone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classtb`
--
ALTER TABLE `classtb`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `employeetb`
--
ALTER TABLE `employeetb`
  ADD PRIMARY KEY (`emid`);

--
-- Indexes for table `feetb`
--
ALTER TABLE `feetb`
  ADD PRIMARY KEY (`feeid`),
  ADD KEY `stid` (`stid`);

--
-- Indexes for table `studenttb`
--
ALTER TABLE `studenttb`
  ADD PRIMARY KEY (`stid`),
  ADD KEY `classid` (`classid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeetb`
--
ALTER TABLE `employeetb`
  MODIFY `emid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feetb`
--
ALTER TABLE `feetb`
  MODIFY `feeid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feetb`
--
ALTER TABLE `feetb`
  ADD CONSTRAINT `stid` FOREIGN KEY (`stid`) REFERENCES `studenttb` (`stid`);

--
-- Constraints for table `studenttb`
--
ALTER TABLE `studenttb`
  ADD CONSTRAINT `classid` FOREIGN KEY (`classid`) REFERENCES `classtb` (`classid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
