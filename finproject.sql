-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 10:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `aid` int(11) NOT NULL,
  `theme` varchar(200) DEFAULT NULL,
  `activitycol` varchar(45) DEFAULT NULL,
  `activitydesc` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`aid`, `theme`, `activitycol`, `activitydesc`, `date`, `uid`) VALUES
(1, 'pronounciation', 'English', 'reading 3 letter words', '2019-07-19', 1),
(2, 'Word formation', 'English', 'Building a 3 letter word', '2019-07-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `name` varchar(45) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`name`, `contact`, `email`, `password`, `role`, `uid`) VALUES
('PranavGor', 2147483647, 'test@gmail.com', 'pass@123', 'mentor', 1),
('YogeshLulla', 774402200, 'yogeshlulla@gmail.com', '1234', 'mentor', 2),
('SahilSad', 774402544, 'Sahil@gmail.com', '1212', 'mentor', 3),
('SanjayJan', 457103245, 'Sanjay@gmail.com', '6532', 'mentor', 4);

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `testname` varchar(45) DEFAULT NULL,
  `sid` int(11) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `datee` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`testname`, `sid`, `grade`, `datee`) VALUES
('English', 1, 3, '2019-07-16'),
('Mathematics', 2, 4, '2019-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `PA` varchar(45) DEFAULT NULL,
  `sid` int(11) NOT NULL,
  `datee` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`PA`, `sid`, `datee`) VALUES
('P', 1, '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `courseid` int(11) NOT NULL,
  `coursename` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_master`
--

INSERT INTO `course_master` (`courseid`, `coursename`) VALUES
(1, 'beginning'),
(2, 'foundation'),
(3, 'transit'),
(4, 'discovery'),
(5, 'dream'),
(6, 'comm1'),
(7, 'comm2'),
(8, 'comm3');

-- --------------------------------------------------------

--
-- Table structure for table `course_user_master`
--

CREATE TABLE `course_user_master` (
  `uid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `yearr` int(11) DEFAULT NULL,
  `coid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_user_master`
--

INSERT INTO `course_user_master` (`uid`, `courseid`, `yearr`, `coid`) VALUES
(1, 1, 2019, 1),
(2, 2, 2019, 2),
(3, 3, 2019, 3),
(4, 4, 2019, 4);

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE `parameter` (
  `pid` int(11) NOT NULL,
  `parametername` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`pid`, `parametername`) VALUES
(1, 'Cleanliness'),
(2, 'Sincerity');

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `uid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `datee` date DEFAULT NULL,
  `amt` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`uid`, `sid`, `datee`, `amt`) VALUES
(1, 1, '2019-07-19', 6),
(1, 1, '2019-07-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `stars` int(11) DEFAULT NULL,
  `datee` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`pid`, `sid`, `stars`, `datee`) VALUES
(1, 1, 3, '2019-07-18'),
(2, 1, 2, '2019-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourse`
--

CREATE TABLE `studentcourse` (
  `sid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `yearr` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentcourse`
--

INSERT INTO `studentcourse` (`sid`, `courseid`, `yearr`) VALUES
(1, 1, 2019),
(2, 2, 2019),
(3, 1, 2019),
(4, 2, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `name` varchar(45) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `school` varchar(45) DEFAULT NULL,
  `std` varchar(45) DEFAULT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`name`, `phoneno`, `address`, `school`, `std`, `sid`) VALUES
('Jayesh Ahuja', 98745632, 'ThaneW', 'Spit', '1', 1),
('Piyush Makhija', 4455678, 'ThaneE', 'HH high school', '2', 2),
('Mohit Makhija', 5588421, 'Airoli', 'JK High School', '1', 3),
('Dhiren Motwani', 78369412, 'ThaneW', 'M vidhyala', '2', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `course_master`
--
ALTER TABLE `course_master`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `course_user_master`
--
ALTER TABLE `course_user_master`
  ADD PRIMARY KEY (`coid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `savings`
--
ALTER TABLE `savings`
  ADD KEY `sid` (`sid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD KEY `sid` (`sid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD KEY `sid` (`sid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_master`
--
ALTER TABLE `course_master`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_user_master`
--
ALTER TABLE `course_user_master`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parameter`
--
ALTER TABLE `parameter`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `assessments_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `studentdetails` (`sid`) ON DELETE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `studentdetails` (`sid`) ON DELETE CASCADE;

--
-- Constraints for table `course_user_master`
--
ALTER TABLE `course_user_master`
  ADD CONSTRAINT `course_user_master_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `app_users` (`uid`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_user_master_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course_master` (`courseid`) ON DELETE CASCADE;

--
-- Constraints for table `savings`
--
ALTER TABLE `savings`
  ADD CONSTRAINT `savings_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `studentdetails` (`sid`),
  ADD CONSTRAINT `savings_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `app_users` (`uid`) ON DELETE CASCADE;

--
-- Constraints for table `stars`
--
ALTER TABLE `stars`
  ADD CONSTRAINT `stars_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `studentdetails` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `stars_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `parameter` (`pid`) ON DELETE CASCADE;

--
-- Constraints for table `studentcourse`
--
ALTER TABLE `studentcourse`
  ADD CONSTRAINT `studentcourse_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `studentdetails` (`sid`) ON DELETE CASCADE,
  ADD CONSTRAINT `studentcourse_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course_master` (`courseid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
