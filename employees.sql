-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 02:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `EmpID` int(255) NOT NULL,
  `ProjectID` int(255) NOT NULL,
  `DateFrom` date NOT NULL,
  `DateTo` date DEFAULT NULL,
  `No` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`EmpID`, `ProjectID`, `DateFrom`, `DateTo`, `No`) VALUES
(143, 12, '2013-01-11', '2014-01-05', 50),
(218, 10, '2012-05-16', '2020-03-20', 51),
(143, 10, '2009-01-01', '2011-04-27', 53),
(120, 12, '2015-05-04', '2019-03-14', 54),
(135, 11, '2011-12-10', '2018-03-21', 55),
(122, 15, '2011-11-10', '2012-12-11', 56),
(120, 10, '2008-12-31', '2011-04-24', 57),
(122, 12, '2013-10-09', '2015-07-05', 58),
(175, 13, '2009-05-19', '2010-11-19', 59),
(170, 11, '2011-12-09', '2018-03-21', 60),
(175, 10, '2012-12-11', '2020-03-19', 61),
(170, 15, '2011-11-09', '2012-10-09', 62);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
