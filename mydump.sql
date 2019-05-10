-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 10:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(15, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `parentsmobile` int(13) NOT NULL,
  `standered` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `parentsmobile`, `standered`, `image`) VALUES
(1, 23, 'lkjhgfds', 'rbse', 2147483647, 1, ''),
(2, 14109005, 'abhishek ', 'RBSE', 2147483647, 1, ''),
(3, 41234, 'sadfa', 'rtfgsd', 2147483647, 6, ''),
(4, 34524, 'sdfjaljl', 'asldfkj', 123456789, 1, ''),
(5, 0, '', '', 0, 1, ''),
(7, 21, 'hi this', 'mp', 1234567895, 3, ''),
(8, 11, 'sfdgsdfgsdfgsd', 'zxcvb', 2147483647, 1, ''),
(9, 8789, 'plmkoijnbhuygfdftyu', 'hakdhl', 976789987, 1, ''),
(10, 7980242, 'keshav ', 'up', 2147483647, 1, ''),
(11, 1234, 'WGSF', 'SDFGQ', 52435234, 1, ''),
(12, 455431, 'wsfdase', 'wrgfsdfg', 2147483647, 3, ''),
(13, 4323, 'punit batra', 'cbse', 2147483647, 2, ''),
(14, 29, 'keshav gupta ', 'upse', 2147483647, 1, ''),
(15, 31, 'kumar aditya', 'RBSE', 2147483647, 2, ''),
(16, 0, '', '', 0, 1, ''),
(17, 0, '', '', 0, 1, ''),
(18, 456, 'asdf', 'asdfjas', 2147483647, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
