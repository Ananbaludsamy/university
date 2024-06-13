-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 06:01 PM
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
-- Table structure for table `allyearscore_tb`
--

CREATE TABLE `allyearscore_tb` (
  `scid` int(11) NOT NULL,
  `midterm1` varchar(50) NOT NULL,
  `term1` varchar(50) NOT NULL,
  `midterm2` varchar(50) NOT NULL,
  `term2` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `stid` varchar(50) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classtb`
--

CREATE TABLE `classtb` (
  `classid` varchar(20) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `classtb`
--

INSERT INTO `classtb` (`classid`, `classname`) VALUES
('en1', '2e'),
('en2', '3e');

-- --------------------------------------------------------

--
-- Table structure for table `employeetb`
--

CREATE TABLE `employeetb` (
  `emid` int(11) NOT NULL,
  `emname` varchar(50) DEFAULT NULL,
  `emsurname` varchar(50) DEFAULT NULL,
  `emsex` varchar(20) DEFAULT NULL,
  `emage` date NOT NULL,
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
-- Table structure for table `feeqty_tb`
--

CREATE TABLE `feeqty_tb` (
  `fid` int(11) NOT NULL,
  `classid` varchar(20) NOT NULL,
  `qty` int(11) DEFAULT NULL
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
-- Table structure for table `statustb`
--

CREATE TABLE `statustb` (
  `statusid` int(11) NOT NULL,
  `stid` varchar(50) NOT NULL,
  `statusname` varchar(50) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `classid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studenttb`
--

CREATE TABLE `studenttb` (
  `stid` varchar(50) NOT NULL,
  `stname` varchar(50) DEFAULT NULL,
  `stsurname` varchar(50) DEFAULT NULL,
  `stsex` varchar(20) DEFAULT NULL,
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
-- Dumping data for table `studenttb`
--

INSERT INTO `studenttb` (`stid`, `stname`, `stsurname`, `stsex`, `stdob`, `stvillage`, `stdistrict`, `stprovince`, `streligion`, `sttribe`, `classid`, `yearid`, `status`, `stphone`) VALUES
('11233', 'testt', 'test', NULL, '2024-06-12', 'test', 'test', 'test', 'test', 'teswt', 'en1', 'a2', 'ຍັງ', '02078'),
('112334414141', 'sg', 'test', 'on', '2024-06-13', 'sfgdg', 'test', 'test', 'sdfgsdg', 'teswt', 'en2', 'a2', 'ຍັງ', '020'),
('11233441414156', 'testt', 'test', 'ຊາຍ', '2024-06-13', 'sfgdg', 'test', 'sdfgsd', 'sdfgsdg', 'sdfgsdg', 'en2', 'a2', 'ຍັງ', '02078'),
('1123345', 'testt', 'test', NULL, '2024-06-12', 'test', 'test', 'test', 'test', 'teswt', 'en2', 'a2', 'ຍັງ', '02078'),
('en1', 'test', 'test', NULL, '2024-06-01', 'teswt', 'test', 'test', 'test', 'test', 'en1', 't1', 't', '020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allyearscore_tb`
--
ALTER TABLE `allyearscore_tb`
  ADD PRIMARY KEY (`scid`),
  ADD KEY `a_stid` (`stid`);

--
-- Indexes for table `classtb`
--
ALTER TABLE `classtb`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `employeetb`
--
ALTER TABLE `employeetb`
  ADD PRIMARY KEY (`emid`),
  ADD KEY `e_classid` (`classid`);

--
-- Indexes for table `feeqty_tb`
--
ALTER TABLE `feeqty_tb`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `f_classid` (`classid`);

--
-- Indexes for table `feetb`
--
ALTER TABLE `feetb`
  ADD PRIMARY KEY (`feeid`),
  ADD KEY `stid` (`stid`);

--
-- Indexes for table `statustb`
--
ALTER TABLE `statustb`
  ADD PRIMARY KEY (`statusid`),
  ADD KEY `s_stid` (`stid`);

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
-- AUTO_INCREMENT for table `allyearscore_tb`
--
ALTER TABLE `allyearscore_tb`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employeetb`
--
ALTER TABLE `employeetb`
  MODIFY `emid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeqty_tb`
--
ALTER TABLE `feeqty_tb`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feetb`
--
ALTER TABLE `feetb`
  MODIFY `feeid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statustb`
--
ALTER TABLE `statustb`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allyearscore_tb`
--
ALTER TABLE `allyearscore_tb`
  ADD CONSTRAINT `a_stid` FOREIGN KEY (`stid`) REFERENCES `studenttb` (`stid`);

--
-- Constraints for table `employeetb`
--
ALTER TABLE `employeetb`
  ADD CONSTRAINT `e_classid` FOREIGN KEY (`classid`) REFERENCES `classtb` (`classid`);

--
-- Constraints for table `feeqty_tb`
--
ALTER TABLE `feeqty_tb`
  ADD CONSTRAINT `f_classid` FOREIGN KEY (`classid`) REFERENCES `classtb` (`classid`);

--
-- Constraints for table `feetb`
--
ALTER TABLE `feetb`
  ADD CONSTRAINT `stid` FOREIGN KEY (`stid`) REFERENCES `studenttb` (`stid`);

--
-- Constraints for table `statustb`
--
ALTER TABLE `statustb`
  ADD CONSTRAINT `s_stid` FOREIGN KEY (`stid`) REFERENCES `studenttb` (`stid`);

--
-- Constraints for table `studenttb`
--
ALTER TABLE `studenttb`
  ADD CONSTRAINT `classid` FOREIGN KEY (`classid`) REFERENCES `classtb` (`classid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
