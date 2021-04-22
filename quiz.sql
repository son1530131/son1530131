-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2020 at 11:30 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `aid` (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `answer`, `ans_id`) VALUES
(1, 'class', '1'),
(2, ' interface', '1'),
(3, ' extends', '1'),
(4, 'integer ', '1'),
(5, ' Thread', '2'),
(6, ' Date', '2'),
(7, ' Calender', '2'),
(8, 'Time', '2'),
(9, ' Sun', '3'),
(10, ' Oracle', '3'),
(11, ' Adobe', '3'),
(12, 'sql', '3'),
(13, ' 32 bit', '4'),
(14, '16 bit ', '4'),
(15, ' None', '4'),
(16, 'html', '4'),
(17, ' true', '5'),
(18, 'false', '5'),
(19, '0', '5'),
(20, ' abobe', '5');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Quiz_Title` varchar(250) DEFAULT NULL,
  `Total_Question` varchar(250) DEFAULT NULL,
  `Right_Answer` varchar(250) DEFAULT NULL,
  `N_Marks` varchar(250) DEFAULT NULL,
  `Time_Limit` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `ans_id`) VALUES
(1, ' Which of the following a is not a keyword in Java ', 1),
(2, 'Which of the following is an interface ?', 5),
(3, ' Which company released Java Version 8 ?', 9),
(4, ' What is the length of Java datatype int ?', 13),
(5, ' What is the default value of Java datatype boolean?', 17);

-- --------------------------------------------------------

--
-- Table structure for table `regstation`
--

CREATE TABLE IF NOT EXISTS `regstation` (
  `Name` varchar(250) DEFAULT NULL,
  `Father` varchar(250) DEFAULT NULL,
  `Gender` varchar(250) DEFAULT NULL,
  `Phone` varchar(250) NOT NULL,
  `Password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regstation`
--

INSERT INTO `regstation` (`Name`, `Father`, `Gender`, `Phone`, `Password`) VALUES
('sonu', 'm', 'Gender', '', ''),
('sonu kumar', 'Mahipal', 'Male', '123456', '123'),
('sonu', 'Mahipal', 'Male', '8126578172', '12345'),
('chandramohan', 'zyz', 'Male', '9999999999', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answercoract` int(250) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answercoract`) VALUES
(1, '123456', 5, 3),
(2, '123456', 5, 0),
(3, '123456', 5, 2),
(4, '123456', 5, 2),
(5, '123456', 5, 2),
(6, '123456', 5, 2),
(7, '123456', 5, 2),
(8, '123456', 5, 2),
(9, '123456', 5, 2),
(10, '123456', 5, 2),
(11, '8126578172', 5, 3),
(12, '8126578172', 5, 2),
(13, '8126578172', 5, 2),
(14, '8126578172', 5, 2),
(15, '8126578172', 5, 1),
(16, '8126578172', 5, 1),
(17, '8126578172', 5, 3),
(18, '8126578172', 5, 0),
(19, '8126578172', 5, 0),
(20, '8126578172', 5, 0),
(21, '8126578172', 5, 0),
(22, '8126578172', 5, 0),
(23, '8126578172', 5, 2),
(24, '8126578172', 5, 2),
(25, '8126578172', 5, 2),
(26, '8126578172', 5, 1),
(27, '8126578172', 5, 1),
(28, '8126578172', 5, 1),
(29, '8126578172', 5, 5),
(30, '8126578172', 5, 0),
(31, '8126578172', 5, 5),
(32, '8126578172', 5, 5),
(33, '8126578172', 5, 0),
(34, '8126578172', 5, 0),
(35, '8126578172', 5, 0),
(36, '8126578172', 5, 0),
(37, '8126578172', 5, 5),
(38, '8126578172', 5, 5),
(39, '8126578172', 5, 5),
(40, '8126578172', 5, 0),
(41, '8126578172', 5, 5),
(42, '8126578172', 5, 4),
(43, '8126578172', 5, 5),
(44, '8126578172', 5, 5),
(45, '8126578172', 5, 4),
(46, '8126578172', 5, 1),
(47, '8126578172', 5, 4),
(48, '8126578172', 5, 4),
(49, '8126578172', 5, 4),
(50, '8126578172', 5, 0),
(51, '8126578172', 5, 4),
(52, '8126578172', 5, 1),
(53, '8126578172', 5, 0),
(54, '8126578172', 5, 1),
(55, '8126578172', 5, 1),
(56, '8126578172', 5, 1),
(57, '8126578172', 5, 1),
(58, '8126578172', 5, 1),
(59, '8126578172', 5, 3),
(60, '8126578172', 5, 3),
(61, '8126578172', 5, 3),
(62, '8126578172', 5, 3),
(63, '8126578172', 5, 0),
(64, '8126578172', 5, 0),
(65, '8126578172', 5, 1),
(66, '8126578172', 5, 1),
(67, '8126578172', 5, 1),
(68, '8126578172', 5, 2),
(69, '8126578172', 5, 0),
(70, '8126578172', 5, 1),
(71, '8126578172', 5, 1),
(72, '8126578172', 5, 0),
(73, '8126578172', 5, 0),
(74, '8126578172', 5, 2),
(75, '8126578172', 5, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
