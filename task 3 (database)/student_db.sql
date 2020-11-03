-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2020 at 05:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `semesterDetails`
--

CREATE TABLE `semesterDetails` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Semester` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `Credit` int(11) DEFAULT NULL,
  `Faculty` varchar(10) DEFAULT NULL,
  `Grade` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesterDetails`
--

INSERT INTO `semesterDetails` (`ID`, `Name`, `Semester`, `Course`, `Credit`, `Faculty`, `Grade`) VALUES
(1, 'XYZ', 'Spring2018', 'CSE332', 3, 'SFM', 0),
(2, 'Soha', 'Spring2020', 'CSE332', 3, 'RRN', 4),
(3, 'Zawad', 'Summer2016', 'CSE482', 3, 'TRR', 3),
(4, 'Faisal', 'Spring1998', 'CSE232', 3, 'ALH', 4),
(5, 'Sabrina', 'Fall2019', 'CSE115', 3, 'MLE', 3.75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `semesterDetails`
--
ALTER TABLE `semesterDetails`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `semesterDetails`
--
ALTER TABLE `semesterDetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
