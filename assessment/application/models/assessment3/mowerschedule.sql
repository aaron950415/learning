-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 01:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mowerschedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `s_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `booking_price` double NOT NULL,
  `booking_suburb` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `booking_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`s_id`, `r_id`, `booking_id`, `booking_price`, `booking_suburb`, `booking_date`) VALUES
(343, 0, 3, 0, '', '0'),
(3423, 0, 4, 0, '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `resident_availabilities`
--

CREATE TABLE `resident_availabilities` (
  `r_id` int(11) NOT NULL,
  `date` varchar(43) NOT NULL,
  `time_from` varchar(43) NOT NULL,
  `time_to` varchar(34) NOT NULL,
  `suburb` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `hourly_rate` int(11) NOT NULL,
  `r_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `r_phoneNumber` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_availabilities`
--

INSERT INTO `resident_availabilities` (`r_id`, `date`, `time_from`, `time_to`, `suburb`, `hourly_rate`, `r_name`, `r_phoneNumber`, `type`) VALUES
(145, '344', '12:53', '777', '3s', 0, '34sdf', 88, 'resident'),
(146, '344', '12:53', '666', 'dwd22', 0, 'dei', 46666, 'resident'),
(148, '344', '12:53', '666', 'dwd22', 0, 'dei', 99888, 'resident');

-- --------------------------------------------------------

--
-- Table structure for table `student_availabilities`
--

CREATE TABLE `student_availabilities` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time_from` varchar(10) NOT NULL,
  `time_to` varchar(10) NOT NULL,
  `suburb` varchar(150) NOT NULL,
  `hourly_rate` float NOT NULL,
  `type` varchar(10) NOT NULL,
  `s_phoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_availabilities`
--

INSERT INTO `student_availabilities` (`s_id`, `s_name`, `date`, `time_from`, `time_to`, `suburb`, `hourly_rate`, `type`, `s_phoneNumber`) VALUES
(146, 'etnfg', '11', '12:53', '11', 'tvw', 452, 'student', 12564),
(356, 'dei', '3', '12:53', '666', 'dwd', 0, 'student', 0),
(453, 'etnfg', '11', '12:53', '11', 'tvw', 452, 'student', 12564),
(4343, '', '', '', '', '', 0, 'student', 0),
(4534, 'etnfg', '11', '12:53', '11', 'tvw', 452, 'student', 12564);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `resident_availabilities`
--
ALTER TABLE `resident_availabilities`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `student_availabilities`
--
ALTER TABLE `student_availabilities`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resident_availabilities`
--
ALTER TABLE `resident_availabilities`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
