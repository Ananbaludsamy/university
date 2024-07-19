-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 01:43 AM
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
('en1', 'EN1/1'),
('en2', 'EN1/2'),
('en2-1', 'EN2/1'),
('en2-2', 'EN2/2'),
('en2-3', 'EN2/3'),
('en3', 'EN1/3'),
('en3-1', 'EN3/1'),
('en3-2', 'EN3/2'),
('en3-3', 'EN3/3');

-- --------------------------------------------------------

--
-- Table structure for table `employeetb`
--

CREATE TABLE `employeetb` (
  `emid` varchar(50) NOT NULL,
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

--
-- Dumping data for table `employeetb`
--

INSERT INTO `employeetb` (`emid`, `emname`, `emsurname`, `emsex`, `emage`, `emvillage`, `emdistrict`, `emprovince`, `emphone`, `emposition`, `salary`, `classid`) VALUES
('1', 'e', 'e', 'e', '2024-06-05', 'e', 'e', 'e', 'e', 'e', 200, 'en1'),
('2', 'A', 'A', 'A', '2024-06-11', 'A', 'A', 'A', 'A', 'A', 565, 'en2');

-- --------------------------------------------------------

--
-- Table structure for table `feeqty_tb`
--

CREATE TABLE `feeqty_tb` (
  `fid` int(11) NOT NULL,
  `classid` varchar(20) NOT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `feeqty_tb`
--

INSERT INTO `feeqty_tb` (`fid`, `classid`, `qty`) VALUES
(1, 'en1', 600000),
(2, 'en2', 600000),
(3, 'en3', 600000),
(4, 'en2-1', 800000),
(5, 'en2-2', 800000),
(6, 'en2-3', 800000),
(7, 'en3-1', 1000000),
(8, 'en3-2', 1000000),
(9, 'en3-3', 1000000);

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

--
-- Dumping data for table `feetb`
--

INSERT INTO `feetb` (`feeid`, `stid`, `year`, `status`, `qty`) VALUES
(2, 'ci15015', '2023-2024', 'ຈ່າຍແລ້ວ', '600000'),
(3, 'ci15016', '2023-2024', 'ຈ່າຍແລ້ວ', '0');

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
  `stphone` varchar(50) DEFAULT NULL,
  `stposition` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `studenttb`
--

INSERT INTO `studenttb` (`stid`, `stname`, `stsurname`, `stsex`, `stdob`, `stvillage`, `stdistrict`, `stprovince`, `streligion`, `sttribe`, `classid`, `yearid`, `stphone`, `stposition`) VALUES
('ci15015', 'ທົດສອບ', 'ລະບົບ', 'ຊາຍ', '2006-09-09', 'ນາເງິນ', 'ທຸລະຄົມ', 'ວຽງຈັນ', 'ພຸດ', 'ລາວ', 'en1', '2023-2024', '02078168482', 'ນັກຮຽນ'),
('ci15016', 'ດອກແກ້ວ', 'ບົວລະພາ', 'ຊາຍ', '2024-07-06', 'ພະໄຊ', 'ສີສັດຕະນາກ', 'ນະຄອນຫຼວງວຽງຈັນ', 'ພຸດ', 'ລາວ', 'en2', '2023-2024', '02078168482', 'ນັກຮຽນ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_course1`
--

CREATE TABLE `tb_course1` (
  `cid` int(11) NOT NULL,
  `stid` varchar(50) NOT NULL,
  `GE1` int(11) DEFAULT NULL,
  `PN` int(11) DEFAULT NULL,
  `ER` int(11) DEFAULT NULL,
  `GRM` int(11) DEFAULT NULL,
  `EC` int(11) DEFAULT NULL,
  `GE2` int(11) DEFAULT NULL,
  `totall` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_course1`
--

INSERT INTO `tb_course1` (`cid`, `stid`, `GE1`, `PN`, `ER`, `GRM`, `EC`, `GE2`, `totall`) VALUES
(2, 'ci15015', 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_course2`
--

CREATE TABLE `tb_course2` (
  `cid` int(11) NOT NULL,
  `stid` varchar(50) NOT NULL,
  `EB` int(11) DEFAULT NULL,
  `EW1` int(11) DEFAULT NULL,
  `LS` int(11) DEFAULT NULL,
  `AS2` int(11) DEFAULT NULL,
  `ED` int(11) DEFAULT NULL,
  `COM` int(11) DEFAULT NULL,
  `totall` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_course3`
--

CREATE TABLE `tb_course3` (
  `cid` int(11) NOT NULL,
  `stid` varchar(50) NOT NULL,
  `ETS` int(11) DEFAULT NULL,
  `ECC` int(11) DEFAULT NULL,
  `EHT` int(11) DEFAULT NULL,
  `EM` int(11) DEFAULT NULL,
  `EHR` int(11) DEFAULT NULL,
  `EA` int(11) DEFAULT NULL,
  `totall` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Indexes for table `tb_course1`
--
ALTER TABLE `tb_course1`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `tbcourse_to_st` (`stid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allyearscore_tb`
--
ALTER TABLE `allyearscore_tb`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeqty_tb`
--
ALTER TABLE `feeqty_tb`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feetb`
--
ALTER TABLE `feetb`
  MODIFY `feeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statustb`
--
ALTER TABLE `statustb`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_course1`
--
ALTER TABLE `tb_course1`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Constraints for table `tb_course1`
--
ALTER TABLE `tb_course1`
  ADD CONSTRAINT `tbcourse_to_st` FOREIGN KEY (`stid`) REFERENCES `studenttb` (`stid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
