-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 12:20 AM
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
-- Database: `ecrush`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`sno`, `name`, `date`, `message`, `email`) VALUES
(3, 'me', 'today', 'nothinf', 'no@gmial.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `sno` int(11) NOT NULL,
  `notification_name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`sno`, `notification_name`, `date`, `message`, `link`, `active`) VALUES
(2, 'fun', '2022-08-02', 'gooo onnn', 'https://github.com/aruntejamenda', 'no'),
(4, 'fun2', '2022-09-02', 'nothing again', 'aruntejamenda@blogspot.com', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `special_wishes`
--

CREATE TABLE `special_wishes` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `file1_name` varchar(255) DEFAULT NULL,
  `file2_name` varchar(255) DEFAULT NULL,
  `file3_name` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_wishes`
--

INSERT INTO `special_wishes` (`sno`, `name`, `date`, `file1_name`, `file2_name`, `file3_name`, `active`) VALUES
(8, 'independence day', '2022-08-15', 'special_wishes_1 (7).jpg', 'special_wishes_1 (8).jpg', 'special_wishes_1 (9).jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `sno` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`sno`, `date`, `message`) VALUES
(2, 'tomorrow', 'just for fun');

-- --------------------------------------------------------

--
-- Table structure for table `weekend_trivia`
--

CREATE TABLE `weekend_trivia` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `winner1` varchar(255) DEFAULT NULL,
  `winner2` varchar(255) DEFAULT NULL,
  `winner3` varchar(255) DEFAULT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekend_trivia`
--

INSERT INTO `weekend_trivia` (`sno`, `name`, `date`, `link`, `winner1`, `winner2`, `winner3`, `active`) VALUES
(7, 'week1', '2022-08-15', 'github.com', 'a_A_AB_B_B_', 'B_B_B_', 'C_C_C', 'yes'),
(8, 'week2', '2022-08-16', 'aruntjaemda@gmail.com', 'z_z_z', 'y_Y_y', 'x_x_x', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `week_with_ecrush`
--

CREATE TABLE `week_with_ecrush` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `file1_name` varchar(255) NOT NULL,
  `file2_name` varchar(255) NOT NULL,
  `file3_name` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `week_with_ecrush`
--

INSERT INTO `week_with_ecrush` (`sno`, `name`, `date`, `file1_name`, `file2_name`, `file3_name`, `active`) VALUES
(19, 'none', '2022-08-10', 'week_with_ecrush__1 (1).jpg', 'week_with_ecrush__1 (2).jpg', 'week_with_ecrush__1 (3).jpg', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `special_wishes`
--
ALTER TABLE `special_wishes`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `weekend_trivia`
--
ALTER TABLE `weekend_trivia`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `week_with_ecrush`
--
ALTER TABLE `week_with_ecrush`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `special_wishes`
--
ALTER TABLE `special_wishes`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weekend_trivia`
--
ALTER TABLE `weekend_trivia`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `week_with_ecrush`
--
ALTER TABLE `week_with_ecrush`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
