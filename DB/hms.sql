-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 06:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--
CREATE DATABASE IF NOT EXISTS `hms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hms`;

-- --------------------------------------------------------

--
-- Table structure for table `admail`
--

CREATE TABLE `admail` (
  `mid` int(200) NOT NULL,
  `aid` varchar(200) NOT NULL,
  `did` varchar(200) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(2) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `apass` varchar(100) NOT NULL,
  `amob` varchar(11) NOT NULL,
  `aadd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apass`, `amob`, `aadd`) VALUES
(1, 'MD. EZAZUL ISLAM', 'ezazul@aiub.edu', '123456', '01777777777', 'Kuratoli, Kuril, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `appid` int(200) NOT NULL,
  `pid` int(200) NOT NULL,
  `did` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `demail` varchar(100) NOT NULL,
  `dpass` varchar(100) NOT NULL,
  `dadd` varchar(100) NOT NULL,
  `dspecial` varchar(100) NOT NULL,
  `dcontact` varchar(11) NOT NULL,
  `dgen` varchar(10) NOT NULL,
  `dfrom` varchar(5) NOT NULL,
  `dto` varchar(5) NOT NULL,
  `delete` varchar(2) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `demail`, `dpass`, `dadd`, `dspecial`, `dcontact`, `dgen`, `dfrom`, `dto`, `delete`, `time`) VALUES
(12, 'Dr. XYZ', 'xyz@ohms.com', '123456', 'Dhaka', 'Heart', '01888888888', 'male', '10:00', '17:00', 'y', '21:52:32'),
(13, 'Dr. ABC', 'abc@ohms.com', '123456', 'Dhaka', 'Medicine', '01777777777', 'male', '16:00', '22:00', 'y', '21:53:24'),
(14, 'Dr. CDE', 'cde@ohms.com', '123458', 'Dhaka', 'Nurologist', '01555555555', 'male', '14:00', '20:00', 'n', '21:54:41'),
(15, 'Dr. IJK', 'ijk@ohms.com', '123456', 'Dhaka', 'Kedney', '01999999999', 'female', '10:00', '2:00', 'n', '21:58:18'),
(16, 'Dr. AB', 'ab@ohms.com', '123456', 'Dhaka', 'Nurologist', '01888888888', 'female', '10:00', '8:00', 'y', '22:10:45'),
(17, 'Dr. Salam', 'salam@ohms.com', '123456', 'Dhaka', 'Medicine', '01555555555', 'male', '10:00', '5:00', 'n', '18:32:18'),
(18, 'Dr. Abul', 'abul@ohms.com', '123456', 'Rajshahi', 'Heart', '01666666666', 'male', '8:00', '10:00', 'y', '18:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(100) NOT NULL,
  `pfname` varchar(100) NOT NULL,
  `plname` varchar(100) NOT NULL,
  `pdob` date NOT NULL,
  `pgender` varchar(10) NOT NULL,
  `pms` varchar(12) NOT NULL,
  `pbg` varchar(10) NOT NULL,
  `padd` varchar(100) NOT NULL,
  `pmob` varchar(11) NOT NULL,
  `ppass` varchar(100) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `delete` varchar(2) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pfname`, `plname`, `pdob`, `pgender`, `pms`, `pbg`, `padd`, `pmob`, `ppass`, `pemail`, `delete`, `time`) VALUES
(10, 'Akash', 'Mondal', '1996-12-18', 'male', 'single', 'O+', 'Dhaka', '01756098984', '123456', 'am@ohms.com', 'y', '22:04:40'),
(11, 'Anika', 'Azad', '1994-12-13', 'female', 'single', 'B+', 'Dhaka', '01748208137', '123456', 'an@ohms.com', 'y', '22:06:10'),
(12, 'Mandira', 'Das', '1996-05-13', 'female', 'married', 'O+', 'Dhaka', '01777777777', '123456', 'man@ohms.com', 'y', '22:07:00'),
(13, 'Ankan', 'Mondal', '2017-04-11', 'male', 'single', 'A+', 'Dhaka', '01711111111', '123456', 'ankan@ohms.com', 'y', '20:23:27'),
(14, 'Ela', 'Sarker', '1971-12-15', 'female', 'single', 'O+', 'DHaka', '01777777777', '123456', 'ela@ohms.com', 'y', '11:47:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admail`
--
ALTER TABLE `admail`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admail`
--
ALTER TABLE `admail`
  MODIFY `mid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `appid` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
