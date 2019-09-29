-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2019 at 01:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
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
-- Table structure for table `pgpreference`
--

CREATE TABLE `pgpreference` (
  `id` int(11) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `staffid` int(11) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `subject2` varchar(30) NOT NULL,
  `subject3` varchar(30) NOT NULL,
  `lab` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pgpreference`
--

INSERT INTO `pgpreference` (`id`, `dept`, `year`, `semester`, `staffid`, `experience`, `subject1`, `subject2`, `subject3`, `lab`, `status`) VALUES
(1, 'PG', '1', '1', 1, '5', '18NN01', '18NN02', '18NN02', '18NN51', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pgtimetable`
--

CREATE TABLE `pgtimetable` (
  `id` int(11) NOT NULL,
  `staffid` varchar(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `lab` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pgtimetable`
--

INSERT INTO `pgtimetable` (`id`, `staffid`, `image`, `subject`, `lab`, `dept`, `year`, `sem`, `status`) VALUES
(1, '2', 'function/uploads/avatar-2.jpg', '18NN06', '', 'PG', '1', '2', 1),
(2, '4', 'function/uploads/avatar-7.jpg', '18NN07', '18NN52', 'PG', '1', '2', 1),
(3, '3', 'function/uploads/avatar-7.jpg', '18NN08', '', 'PG', '1', '2', 1),
(4, '1', 'function/uploads/avatar-5.jpg', '18NN29', '18NN61', 'PG', '1', '2', 1);

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
(4, 'manikandan', 'kavinesh@gmail.com', '9843276891', 'avatar-7.jpg', 'coimbatore\r\ngandhipuram', '4', 'kavi', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ugpreference`
--

CREATE TABLE `ugpreference` (
  `id` int(11) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `staffid` int(11) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `subject1` varchar(30) NOT NULL,
  `subject2` varchar(30) NOT NULL,
  `subject3` varchar(30) NOT NULL,
  `lab` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugpreference`
--

INSERT INTO `ugpreference` (`id`, `dept`, `year`, `semester`, `staffid`, `experience`, `subject1`, `subject2`, `subject3`, `lab`, `status`) VALUES
(1, 'UG', '2', '3', 2, '6', '15I301', '15I302', '15I701', '', 2),
(2, 'UG', '2', '3', 4, '5', '15I301', '15I302', '15I701', '15I310', 2),
(3, 'UG', '2', '3', 3, '4', '15I303', '15I304', '15I701', '', 2),
(4, 'UG', '2', '3', 1, '5', '15I304', '15I304', '15I701', '15I311', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ugtimetable`
--

CREATE TABLE `ugtimetable` (
  `id` int(11) NOT NULL,
  `staffid` varchar(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `lab` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugtimetable`
--

INSERT INTO `ugtimetable` (`id`, `staffid`, `image`, `subject`, `lab`, `dept`, `year`, `sem`, `status`) VALUES
(1, '2', 'function/uploads/avatar-2.jpg', '15I301', '', 'UG', '2', '3', 1),
(2, '4', 'function/uploads/avatar-7.jpg', '15I302', '15I310', 'UG', '2', '3', 1),
(3, '3', 'function/uploads/avatar-7.jpg', '15I303', '', 'UG', '2', '3', 1),
(4, '1', 'function/uploads/avatar-5.jpg', '15I304', '15I311', 'UG', '2', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ug_sub`
--

CREATE TABLE `ug_sub` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `subject` varchar(60) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug_sub`
--

INSERT INTO `ug_sub` (`id`, `code`, `subject`, `sem`, `year`, `dept`, `status`) VALUES
(1, '15I301', 'Linear algebra and numerical analysis', '3', '2', 'UG', 1),
(2, '15I302', 'Computer architecture', '3', '2', 'UG', 1),
(3, '15I303', 'Data structures', '3', '2', 'UG', 1),
(4, '151304', 'Analog and digital communication', '3', '2', 'UG', 1),
(5, '15I305', 'Environmental science and engineering', '3', '2', 'UG', 1),
(6, '15I070', 'Economic for engineering', '3', '2', 'UG', 1),
(7, '15I310', 'Data structures laboratory', '3', '2', 'UG', 1),
(8, '15I311', 'Digital logic design laboratory', '3', '2', 'UG', 1),
(9, '15I401', 'Probability, statistics and random processes', '4', '2', 'UG', 1),
(10, '15I402', 'Digital signal processing', '4', '2', 'UG', 1),
(11, '15I403', 'Operating systems', '4', '2', 'UG', 1),
(12, '15I404', 'Database management systems', '4', '2', 'UG', 1),
(13, '15I405', 'Software engineering', '4', '2', 'UG', 1),
(14, '15I410', 'Operating systems laboratory', '4', '2', 'UG', 1),
(15, '15I411', 'Database management systems laboratory', '4', '2', 'UG', 1),
(16, '15I501', 'Microprocessors and interfacing', '5', '3', 'UG', 1),
(17, '15I502', 'Computer communication networks', '5', '3', 'UG', 1),
(18, '15I503', 'Object oriented modelling and design', '5', '3', 'UG', 1),
(19, '15I504', ' Java programming', '5', '3', 'UG', 1),
(20, '15I505', 'Design and analysis of algorithms', '5', '3', 'UG', 1),
(21, '15I510', 'Microprocessors and interfacing laboratory', '5', '3', 'UG', 1),
(22, '15I511', 'Java programming laboratory', '5', '3', 'UG', 1),
(23, '15I601', 'Advanced data structures', '6', '3', 'UG', 1),
(24, '15I602', 'Theory of computing', '6', '3', 'UG', 1),
(25, '15I603', 'Web technologies', '6', '3', 'UG', 1),
(26, '15I604', 'Mobile communication and computing ', '6', '3', 'UG', 1),
(27, '15I610', 'Advanced data structures laboratory', '6', '3', 'UG', 1),
(28, '15I611', 'Open source computing laboratory', '6', '3', 'UG', 1),
(29, '15I701', 'Information security', '7', '4', 'UG', 1),
(30, '15I702', 'Data mining', '7', '4', 'UG', 1),
(31, '15I703', 'Internet of things', '7', '4', 'UG', 1),
(32, '15I003', 'Soft computing', '7', '4', 'UG', 1),
(33, '15I005', 'Software process management', '7', '4', 'UG', 1),
(34, '15I009', 'Cloud computing', '7', '4', 'UG', 1),
(35, '15I010', 'TCP/IP and network management', '7', '4', 'UG', 1),
(36, '15I011', 'Digital image processing', '7', '4', 'UG', 1),
(37, '15I012', 'Unix internals', '7', '4', 'UG', 1),
(38, '15I018', 'Client server computing', '7', '4', 'UG', 1),
(39, '15I019', ' Embedded systems', '7', '4', 'UG', 1),
(40, '15I004', 'Information retrieval', '8', '4', 'UG', 1),
(41, '15I007', 'Web services and service oriented architecture', '8', '4', 'UG', 1),
(42, '15I013', 'Multicore computing', '8', '4', 'UG', 1),
(43, '15I016', 'Network and internet security', '8', '4', 'UG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgpreference`
--
ALTER TABLE `pgpreference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgtimetable`
--
ALTER TABLE `pgtimetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ugpreference`
--
ALTER TABLE `ugpreference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ugtimetable`
--
ALTER TABLE `ugtimetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ug_sub`
--
ALTER TABLE `ug_sub`
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
-- AUTO_INCREMENT for table `pgpreference`
--
ALTER TABLE `pgpreference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pgtimetable`
--
ALTER TABLE `pgtimetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ugpreference`
--
ALTER TABLE `ugpreference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ugtimetable`
--
ALTER TABLE `ugtimetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ug_sub`
--
ALTER TABLE `ug_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
