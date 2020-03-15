-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 15, 2020 at 07:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmgnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin@admin.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sub1` varchar(30) NOT NULL,
  `sub2` varchar(30) NOT NULL,
  `sub3` varchar(30) NOT NULL,
  `lab` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `mobile`, `profile`, `address`, `experience`, `password`, `sub1`, `sub2`, `sub3`, `lab`, `status`) VALUES
(1, 'Ramkumar', 'ram@gmail.com', '9876543210', 'avatar-5.jpg', 'coimbatore\r\ngandhipuram', '5', '12345', '', '', '', '', 1),
(2, 'Selva', 'selva@gmail.com', '9876567890', 'avatar-2.jpg', 'Madurai', '6', '12345', '', '', '', '', 1),
(3, 'Nisha', 'nisha@gmail.com', '98456783210', 'avatar-7.jpg', 'Chennai', '3', '12345', '', '', '', '', 1),
(5, 'dff', 'ho@admin.com', '9789452839', 'background-business-computer-connection-303383.jpg', 'Coimbatore', '3', '123', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `mobile`, `profile`, `address`, `password`, `status`) VALUES
(1, 'santhosh', 'ho@admin.com', '9789452839', 'Flying_Whale_by_Shu_Le.jpg', 'Coimbatore', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ugpreference`
--

CREATE TABLE `ugpreference` (
  `id` int(11) NOT NULL,
  `stuname` varchar(30) NOT NULL,
  `staffname` varchar(20) NOT NULL,
  `staffid` int(11) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `selectyear` varchar(30) NOT NULL,
  `selectedu` varchar(30) NOT NULL,
  `popularity` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugpreference`
--

INSERT INTO `ugpreference` (`id`, `stuname`, `staffname`, `staffid`, `experience`, `selectyear`, `selectedu`, `popularity`, `status`) VALUES
(1, '234', '34', 5, '3', 'private ', 'boys', '5', 1),
(2, '345', '28', 1, '5', 'goverment ', 'gendral', '5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ugpreference`
--
ALTER TABLE `ugpreference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ugpreference`
--
ALTER TABLE `ugpreference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
