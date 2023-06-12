-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 03:07 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slotbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `addonservices`
--

CREATE TABLE `addonservices` (
  `serviceid` smallint(6) NOT NULL,
  `servicename` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addonservices`
--

INSERT INTO `addonservices` (`serviceid`, `servicename`, `price`, `description`) VALUES
(1, 'service1', 500.00, ''),
(2, 'service2', 1000.00, ''),
(3, 'service3', 800.00, ''),
(4, 'service4', 1500.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `icadmin` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adminId` int(3) NOT NULL,
  `adminFirstName` varchar(50) NOT NULL,
  `adminLastName` varchar(50) NOT NULL,
  `adminAddress` varchar(100) NOT NULL,
  `adminPhone` varchar(15) NOT NULL,
  `adminEmail` varchar(20) NOT NULL,
  `adminDOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`icadmin`, `password`, `adminId`, `adminFirstName`, `adminLastName`, `adminAddress`, `adminPhone`, `adminEmail`, `adminDOB`) VALUES
(123456789, '123', 123, 'admin', 'Sehgal', 'kuala lumpur', '0173567758', 'dsehgal@gmail.com', '1990-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `adminschedule`
--

CREATE TABLE `adminschedule` (
  `scheduleId` int(11) NOT NULL,
  `scheduleDate` date NOT NULL,
  `slot_id` smallint(6) NOT NULL,
  `scheduleprice` double(9,2) NOT NULL,
  `bookAvail` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminschedule`
--

INSERT INTO `adminschedule` (`scheduleId`, `scheduleDate`, `slot_id`, `scheduleprice`, `bookAvail`) VALUES
(40, '2015-12-13', 1, 0.00, 'notavail'),
(41, '2015-12-13', 3, 0.00, 'available'),
(42, '2015-12-13', 1, 0.00, 'available'),
(43, '2015-12-14', 1, 0.00, 'available'),
(44, '2015-12-13', 4, 0.00, 'available'),
(45, '2022-05-10', 1, 10000.00, 'notavail'),
(46, '2022-05-14', 1, 10000.00, 'notavail'),
(47, '2022-05-16', 4, 5000.00, 'notavail'),
(48, '2022-05-17', 3, 3000.00, 'notavail'),
(49, '2022-05-15', 1, 10000.00, 'notavail'),
(50, '2022-05-16', 3, 10000.00, 'notavail'),
(51, '2022-05-17', 3, 5000.00, 'notavail'),
(52, '2022-05-22', 1, 10000.00, 'notavail'),
(53, '2022-05-22', 3, 10000.00, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `appId` int(3) NOT NULL,
  `userIc` bigint(12) NOT NULL,
  `scheduleId` int(10) NOT NULL,
  `netamt` double(9,2) NOT NULL,
  `appComment` varchar(100) NOT NULL,
  `cardholder` varchar(100) NOT NULL,
  `cardno` bigint(12) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`appId`, `userIc`, `scheduleId`, `netamt`, `appComment`, `cardholder`, `cardno`, `status`) VALUES
(86, 920517105553, 40, 0.00, 'Bila doktor free?', '', 0, 'done'),
(87, 920517105554, 45, 0.00, '', '', 0, 'process'),
(88, 920517105554, 46, 0.00, 'this is test', '', 0, 'process'),
(89, 920517105554, 47, 6300.00, 'test2', '', 0, 'done'),
(90, 920517105554, 48, 5300.00, 'test', '', 0, 'process'),
(91, 920517105554, 51, 7600.00, '', '', 0, 'process'),
(92, 920517105554, 50, 10000.00, '', 'asdkf', 1223459699707060606, 'process'),
(94, 920517105554, 52, 12500.00, '', 'adsfljd', 1231321231313123131, 'process');

-- --------------------------------------------------------

--
-- Table structure for table `booking_services`
--

CREATE TABLE `booking_services` (
  `book_services_id` int(11) NOT NULL,
  `booking_id` smallint(6) NOT NULL,
  `service_id` smallint(6) NOT NULL,
  `serviceprice` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_services`
--

INSERT INTO `booking_services` (`book_services_id`, `booking_id`, `service_id`, `serviceprice`) VALUES
(1, 0, 1, 500.00),
(2, 0, 1, 500.00),
(3, 0, 2, 1000.00),
(4, 88, 1, 500.00),
(5, 88, 2, 1000.00),
(6, 89, 1, 500.00),
(7, 89, 3, 800.00),
(8, 91, 2, 1000.00),
(9, 91, 3, 800.00),
(10, 91, 3, 800.00),
(11, 92, 1, 500.00),
(12, 92, 2, 1000.00),
(13, 94, 2, 1000.00),
(14, 94, 4, 1500.00);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `slot_id` smallint(6) NOT NULL,
  `slot_name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `slot_name`, `Description`) VALUES
(1, 'fulllday', ''),
(3, 'morning', ''),
(4, 'evening', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_addon_services`
--

CREATE TABLE `temp_addon_services` (
  `temp_service_id` int(11) NOT NULL,
  `userId` bigint(11) NOT NULL,
  `scheduleid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `tempprice` double(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_addon_services`
--

INSERT INTO `temp_addon_services` (`temp_service_id`, `userId`, `scheduleid`, `serviceid`, `tempprice`) VALUES
(29, 0, 51, 1, 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `icuser` bigint(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userFirstName` varchar(20) NOT NULL,
  `userLastName` varchar(20) NOT NULL,
  `userMaritialStatus` varchar(10) NOT NULL,
  `userDOB` date NOT NULL,
  `userGender` varchar(10) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userPhone` varchar(15) NOT NULL,
  `userEmail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`icuser`, `password`, `userFirstName`, `userLastName`, `userMaritialStatus`, `userDOB`, `userGender`, `userAddress`, `userPhone`, `userEmail`) VALUES
(920517105553, '123', 'Mohd', 'Mazlan', 'single', '1992-05-17', 'male', 'NO 153 BLOK MURNI\r\nKOLEJ CANSELOR UNIVERSITI PUTRA MALAYSIA', '173567758', 'lan.psis@gmail.com'),
(920517105554, 'test123', 'Nikhil', 'Deokute', 'single', '1981-01-01', 'male', 'Trimbakeshwar', '90218910920000', 'nikdeokute@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addonservices`
--
ALTER TABLE `addonservices`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`icadmin`);

--
-- Indexes for table `adminschedule`
--
ALTER TABLE `adminschedule`
  ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`appId`),
  ADD UNIQUE KEY `scheduleId_2` (`scheduleId`),
  ADD KEY `userIc` (`userIc`),
  ADD KEY `scheduleId` (`scheduleId`);

--
-- Indexes for table `booking_services`
--
ALTER TABLE `booking_services`
  ADD PRIMARY KEY (`book_services_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `temp_addon_services`
--
ALTER TABLE `temp_addon_services`
  ADD PRIMARY KEY (`temp_service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`icuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addonservices`
--
ALTER TABLE `addonservices`
  MODIFY `serviceid` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminschedule`
--
ALTER TABLE `adminschedule`
  MODIFY `scheduleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `appId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `booking_services`
--
ALTER TABLE `booking_services`
  MODIFY `book_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp_addon_services`
--
ALTER TABLE `temp_addon_services`
  MODIFY `temp_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `icuser` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_5` FOREIGN KEY (`scheduleId`) REFERENCES `adminschedule` (`scheduleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
