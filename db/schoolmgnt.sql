-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 08:24 AM
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
-- Table structure for table `schoolapplication`
--

CREATE TABLE `schoolapplication` (
  `id` int(11) NOT NULL,
  `stu_id` varchar(30) NOT NULL,
  `school_id` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolapplication`
--

INSERT INTO `schoolapplication` (`id`, `stu_id`, `school_id`, `status`) VALUES
(1, '1', '2', 1),
(2, '1', '1', 1),
(3, '1', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
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
(1, 'Narayana e-Techno School', 'narayana@gmail.com', '9876543210', 'narayana-e-techno-school-bangalore-tfhorc9hfr.jpg', 'coimbatore\r\ngandhipuram', '5', '12345', '', '', '', '', 1),
(2, 'CMC International School', 'cmcinternationalschool@gmail.com', '9876567890', 'cmc-international-school-coimbatore-yibd17y4rg.jpg', 'Madurai', '6', '12345', '', '', '', '', 1),
(3, 'Air Force School', 'airforceschool@gmail.com', '98456783210', 'images.jpeg', 'Chennai', '3', '12345', '', '', '', '', 1),
(5, 'ALG School', 'algschool@admin.com', '9789452839', 'alg.jpg', 'Coimbatore', '3', '123', '', '', '', '', 1);

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
  `yearsrun` varchar(30) NOT NULL,
  `selectyear` varchar(30) NOT NULL,
  `selectedu` varchar(30) NOT NULL,
  `popularity` varchar(30) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugpreference`
--

INSERT INTO `ugpreference` (`id`, `stuname`, `staffname`, `staffid`, `yearsrun`, `selectyear`, `selectedu`, `popularity`, `active`) VALUES
(1, '234', '34', 5, '5', 'goverment ', 'boys', '5', 1),
(2, '345', '28', 1, '5', 'goverment ', 'boys', '5', 1),
(3, '232', '33', 2, '5', 'goverment ', 'boys', '5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schoolapplication`
--
ALTER TABLE `schoolapplication`
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
-- AUTO_INCREMENT for table `schoolapplication`
--
ALTER TABLE `schoolapplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
