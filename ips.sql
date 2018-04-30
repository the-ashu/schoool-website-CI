-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 08:16 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ips`
--

-- --------------------------------------------------------

--
-- Table structure for table `passbook`
--

CREATE TABLE `passbook` (
  `id` bigint(20) NOT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ACCOUNT` varchar(125) NOT NULL,
  `ACADFEE` varchar(125) DEFAULT NULL,
  `CONVFEE` varchar(125) DEFAULT NULL,
  `RECEIPT_ACAD` varchar(125) DEFAULT NULL,
  `RECEIPT_CONV` varchar(125) DEFAULT NULL,
  `AMOUNT` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passbook`
--

INSERT INTO `passbook` (`id`, `TIME`, `ACCOUNT`, `ACADFEE`, `CONVFEE`, `RECEIPT_ACAD`, `RECEIPT_CONV`, `AMOUNT`) VALUES
(1, '2018-04-29 11:37:16', '234', '12-2019', NULL, '789', NULL, '2000'),
(2, '2018-04-29 11:37:25', '234', '11-2018', NULL, '567', NULL, '2000'),
(3, '2018-04-29 11:37:31', '234', '11-2018', NULL, '567', NULL, '2000'),
(4, '2018-04-29 11:37:41', '234', NULL, '11-2018', NULL, '6789', '2000'),
(5, '2018-04-29 11:37:52', '334', '03-2017', NULL, '6789', NULL, '2000'),
(6, '2018-04-29 11:37:36', '234', NULL, '09-2019', NULL, '678', '2000'),
(7, '2018-04-29 11:37:46', '234', '05-2020', NULL, '678', NULL, '2000'),
(8, '2018-04-29 11:37:57', '234', '04-2018', NULL, '456', NULL, '2000');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) NOT NULL,
  `SESSION` varchar(120) DEFAULT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `FNAME` varchar(120) DEFAULT NULL,
  `MNAME` varchar(120) DEFAULT '',
  `CONTACT` varchar(100) DEFAULT NULL,
  `ROLL` varchar(125) DEFAULT NULL,
  `ACCOUNT` varchar(125) DEFAULT NULL,
  `CLASS` varchar(1000) DEFAULT NULL,
  `ACADFEE` varchar(125) DEFAULT NULL,
  `CONVFEE` varchar(125) DEFAULT NULL,
  `ADDRESS` varchar(125) DEFAULT NULL,
  `RECEIPT_ACAD` varchar(125) DEFAULT NULL,
  `RECEIPT_CONV` varchar(125) DEFAULT NULL,
  `CONVEYANCE` varchar(125) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `SESSION`, `NAME`, `FNAME`, `MNAME`, `CONTACT`, `ROLL`, `ACCOUNT`, `CLASS`, `ACADFEE`, `CONVFEE`, `ADDRESS`, `RECEIPT_ACAD`, `RECEIPT_CONV`, `CONVEYANCE`) VALUES
(3, '2016-17', 'Ashutosh Singh', 'sjdshfudhduh', 'pqr', '7068439075', '16215', '234', '7', '04-2018', '09-2019', 'kcvfkjfjj', '456', '678', 'Available'),
(4, '2016-17', 'Atharva', 'jfjidjidj', 'pqr', '9919345589', '16216', '234', '7', '04-2018', '09-2019', 'njkcndjfndjkfn', '456', '678', 'Available'),
(5, '2016-17', 'shivang', 'fkdfjdk', 'pqr', '6757575756', '16230', '334', '7', '03-2017', 'No fee submitted yet', 'mkdfmkdmkdmgk', '6789', '', 'Available'),
(6, '2016-17', 'Afzal Shaad', 'Naushad Ahmad ', 'pqr', '7068439075', '445', '33', '5', 'No fee submitted yet', 'No fee submitted yet', 'Saraiya', '', '', 'Available'),
(7, '2016-17', 'Habiba Shad', 'Naushad Ahmad ', 'pqr', '7068439075', '23', '33', 'Sr.', 'No fee submitted yet', 'No fee submitted yet', 'Saraiya', '', '', 'Available'),
(8, '2016-17', 'abc', 'xyz', 'pqr', '9919345589', '16230', '334', '7', 'No fee submitted yet', 'No fee submitted yet', 'kxckhdjfhdjh', '', '', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passbook`
--
ALTER TABLE `passbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passbook`
--
ALTER TABLE `passbook`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
