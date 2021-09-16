-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 12:17 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sspms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(50) DEFAULT NULL,
  `User_Email` varchar(50) DEFAULT NULL,
  `User_Age` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`User_ID`, `User_Name`, `User_Email`, `User_Age`) VALUES
(1, 'Blankson', 'uyohoiniblankson11@gmail.com', '23'),
(2, 'Blankson', 'uyohoiniblankson11@gmail.com', '23'),
(3, 'Blankson', 'uyohoiniblankson11@gmail.com', '23'),
(4, 'Blankson', 'uyohoiniblankson11@gmail.com', '23'),
(5, 'Blankson', 'uyohoiniblankson11@gmail.com', '23');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `name` text DEFAULT NULL,
  `abbr` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` text NOT NULL,
  `state` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL,
  `funding` text NOT NULL,
  `estYear` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `logo`, `name`, `abbr`, `email`, `location`, `state`, `address`, `tel`, `funding`, `estYear`) VALUES
(1, '', 'University of Cross River State', 'UNICROSS', 'info@crutech.edu.ng', 'Calabar', 'Abia', '12 ekpo abasi', '+23487656435342', 'Federal', '2021-02-07'),
(2, 'unicross.jpg', 'Cross River University of Technology', 'CRUTECH ', 'info@crutech.edu.ng', 'Calabar', 'Cross River', '12 ekpo abasi', '+23485868457', 'State', '2002-02-07'),
(7, 'unicross.jpg', 'University of Ibadan', 'UI', 'info@ui.edu.ng', 'Ibadan', 'Oyo', '234 uyiyi', '+4534343333', 'Federal', '1808-05-03'),
(8, 'food.PNG', 'Auther Javis', 'AJU', 'info@authurjavis.com', 'Akpabuyo', 'Cross River', 'wqrewtr3423', '+23243423424', 'Private', '2015-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` bigint(20) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `profileImage` varchar(400) NOT NULL,
  `regDate` datetime NOT NULL,
  `userType` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `email`, `password`, `profileImage`, `regDate`, `userType`) VALUES
(22, 'admin', 'SSPMS', 'admin@sspms.com', '1234', './assest/img/profile/beard.png', '0000-00-00 00:00:00', 1),
(23, 'Uyohoini ', 'Blankson ', 'uyohoiniblankson11@gmail.com', 'qwerty', './assets/img/profile/beards.jpg', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
