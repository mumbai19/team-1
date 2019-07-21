-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2019 at 01:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `aid` int(11) NOT NULL,
  `theme` varchar(200) DEFAULT NULL,
  `activitycol` varchar(45) DEFAULT NULL,
  `activitydesc` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`aid`)
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

DROP TABLE IF EXISTS `app_users`;
CREATE TABLE IF NOT EXISTS `app_users` (
  `name` varchar(45) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`name`, `contact`, `email`, `password`, `role`, `uid`) VALUES
('abc', 1234567890, 'abc@g.c', '123', 'mentor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

DROP TABLE IF EXISTS `assessments`;
CREATE TABLE IF NOT EXISTS `assessments` (
  `testname` varchar(45) DEFAULT NULL,
  `sid` int(11) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `datee` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `PA` varchar(45) DEFAULT NULL,
  `sid` int(11) NOT NULL,
  `datee` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`PA`, `sid`, `datee`) VALUES
('P', 1, '2019-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

DROP TABLE IF EXISTS `course_master`;
CREATE TABLE IF NOT EXISTS `course_master` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_master`
--

INSERT INTO `course_master` (`courseid`, `coursename`) VALUES
(1, 'beginner'),
(2, 'dream'),
(3, 'foundation'),
(4, 'transit'),
(5, 'beginner'),
(6, 'beginner'),
(7, 'beginner');

-- --------------------------------------------------------

--
-- Table structure for table `course_user_master`
--

DROP TABLE IF EXISTS `course_user_master`;
CREATE TABLE IF NOT EXISTS `course_user_master` (
  `uid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `yearr` int(11) DEFAULT NULL,
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`coid`),
  KEY `uid` (`uid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_user_master`
--

INSERT INTO `course_user_master` (`uid`, `courseid`, `yearr`, `coid`) VALUES
(1, 1, 2019, 1),
(1, 5, 2018, 2),
(1, 7, 2017, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lectureconducted`
--

DROP TABLE IF EXISTS `lectureconducted`;
CREATE TABLE IF NOT EXISTS `lectureconducted` (
  `uid` int(11) NOT NULL,
  `datee` date NOT NULL,
  PRIMARY KEY (`uid`,`datee`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectureconducted`
--

INSERT INTO `lectureconducted` (`uid`, `datee`) VALUES
(1, '2019-07-20'),
(1, '2019-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

DROP TABLE IF EXISTS `parameter`;
CREATE TABLE IF NOT EXISTS `parameter` (
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

DROP TABLE IF EXISTS `savings`;
CREATE TABLE IF NOT EXISTS `savings` (
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

DROP TABLE IF EXISTS `stars`;
CREATE TABLE IF NOT EXISTS `stars` (
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

DROP TABLE IF EXISTS `studentcourse`;
CREATE TABLE IF NOT EXISTS `studentcourse` (
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

DROP TABLE IF EXISTS `studentdetails`;
CREATE TABLE IF NOT EXISTS `studentdetails` (
  `name` varchar(45) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `school` varchar(45) DEFAULT NULL,
  `std` varchar(45) DEFAULT NULL,
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`name`, `phoneno`, `address`, `school`, `std`, `sid`) VALUES
('karan', 1234567899, 'qertyuiopasdfghjk', 'cvhjfdsdfghj', '4', 1),
('pranav', 1234566777, 'suiokjbvcfghjk', 'jhgftyuj', '2', 2),
('maitri', 12340987, 'rtuijhgfdgyuik', 'wertgfdsdf', '3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

DROP TABLE IF EXISTS `student_course`;
CREATE TABLE IF NOT EXISTS `student_course` (
  `sid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `yearr` int(11) DEFAULT NULL,
  KEY `sid` (`sid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`sid`, `courseid`, `yearr`) VALUES
(1, 1, 2019),
(1, 1, 2019),
(3, 5, 2018),
(2, 7, 2018);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_user_master`
--
ALTER TABLE `course_user_master`
  ADD CONSTRAINT `course_user_master_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `app_users` (`uid`),
  ADD CONSTRAINT `course_user_master_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course_master` (`courseid`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `studentdetails` (`sid`),
  ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course_master` (`courseid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
