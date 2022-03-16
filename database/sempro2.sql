-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 07:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sempro2`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `iid` int(11) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `iprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iid`, `iname`, `iprice`) VALUES
(301, 'Half Vaat', 3),
(302, 'Full Vaat', 5),
(303, 'Murgi', 20),
(304, 'Pangash', 18),
(305, 'Laau-Daal', 12),
(306, 'Daal', 5),
(307, 'Laal Shak', 7),
(308, 'uo', 89);

-- --------------------------------------------------------

--
-- Table structure for table `orditm`
--

CREATE TABLE `orditm` (
  `oiid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `qntt` int(11) NOT NULL,
  `oiprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orditm`
--

INSERT INTO `orditm` (`oiid`, `oid`, `iid`, `qntt`, `oiprice`) VALUES
(501, 201, 301, 1, 3),
(502, 201, 302, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ordr`
--

CREATE TABLE `ordr` (
  `oid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date` date NOT NULL,
  `oprice` int(11) NOT NULL,
  `credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordr`
--

INSERT INTO `ordr` (`oid`, `sid`, `date`, `oprice`, `credit`) VALUES
(201, 101, '2019-02-24', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shokal`
--

CREATE TABLE `shokal` (
  `iid` int(11) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `iprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shokal`
--

INSERT INTO `shokal` (`iid`, `iname`, `iprice`) VALUES
(301, 'Half Vaat', 3),
(303, 'Murgi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `batch` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `room` int(11) DEFAULT NULL,
  `baki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `mail`, `phone`, `dept`, `batch`, `reg`, `room`, `baki`) VALUES
(101, 'Kazi Sati', 'kswati.arcturus@gmail.com', '01756091663', 'IIT', 48, 1111, 606, -45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `orditm`
--
ALTER TABLE `orditm`
  ADD PRIMARY KEY (`oiid`);

--
-- Indexes for table `ordr`
--
ALTER TABLE `ordr`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `shokal`
--
ALTER TABLE `shokal`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `orditm`
--
ALTER TABLE `orditm`
  MODIFY `oiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `ordr`
--
ALTER TABLE `ordr`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `shokal`
--
ALTER TABLE `shokal`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
