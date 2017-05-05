-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 12:57 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostelmanagement`
--
/*CREATE DATABASE `hostelmanagement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;*/
/*USE `hostelmanagement`;*/

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `billid` int(10) NOT NULL AUTO_INCREMENT,
  `reg_id` int(10) NOT NULL,
  `bill_type` varchar(20) NOT NULL,
  `paid_amt` double(10,2) NOT NULL,
  `paid_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`billid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billid`, `reg_id`, `bill_type`, `paid_amt`, `paid_date`, `status`) VALUES
(4, 10, 'Cash', 6000.00, '2014-03-07', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `block_allotment`
--

DROP TABLE IF EXISTS `block_allotment`;
CREATE TABLE IF NOT EXISTS `block_allotment` (
  `allotment_id` int(10) NOT NULL AUTO_INCREMENT,
  `block_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  PRIMARY KEY (`allotment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `block_allotment`
--

INSERT INTO `block_allotment` (`allotment_id`, `block_id`, `course_id`, `status`, `Gender`) VALUES
(57, 5, 4, 'Enabled', 'Female'),
(58, 4, 8, 'Enabled', 'Female'),
(59, 3, 2, 'Enabled', 'Male'),
(60, 2, 6, 'Enabled', 'Male'),
(61, 5, 7, 'Enabled', 'Female'),
(62, 1, 1, 'Enabled', 'Male'),
(63, 4, 5, 'Enabled', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `block_id` int(10) NOT NULL AUTO_INCREMENT,
  `block_name` varchar(25) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `Fees` int(10) NOT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`block_id`, `block_name`, `gender`, `status`, `course_id`, `Fees`) VALUES
(1, 'Birla', 'Male', 'Enabled', 1, 15000),
(2, 'Tamirabharani', 'Male', 'Enabled', 2, 22000),
(3, 'Marutham', 'Male', 'Enabled', 3, 10000),
(4, 'Vaigai', 'Female', 'Enabled', 4, 13000),
(5, 'Cauvery', 'Female', 'Enabled', 5, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) NOT NULL,
  `no_of_year` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `no_of_year`, `status`) VALUES
(1, 'cse', 2013, 'Enabled'),
(2, 'mca', 3, 'Enabled'),
(3, 'ba', 3, 'Enabled'),
(4, 'it', 3, 'Enabled'),
(5, 'bcom', 3, 'Enabled'),
(6, 'bbm', 3, 'Enabled'),
(7, 'bsc', 2, 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `block_id` int(10) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emp_type` varchar(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `designation` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `salary` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `block_id`, `login_id`, `password`, `emp_type`, `emp_name`, `gender`, `dob`, `doj`, `designation`, `address`, `salary`, `status`) VALUES
(1, 5, 'admin', 'admin', 'Administrator', 'Rajesh', 'Male', '1986-01-15', '2014-01-01', 'Super Administrator', '3rd cross, Mangalore', 50000.00, 'Enabled'),
(3, 2, 'emp', 'emp', 'Employee', 'Peter king', 'Male', '2014-02-20', '2014-02-28', 'Warden', 'Mangalore', 50000.00, 'Enabled'),
(4, 1, 'geethanjali', 'hakki', 'Warden', 'Gheeta', 'Female', '2014-03-12', '2014-03-01', 'Deputy Warden', 'Tiruchy', 200000.00, 'Enabled'),
(5, 3, 'efhjgf', '111111111', 'Warden', 'Sundar', 'Male', '1879-03-19', '0000-00-00', 'Deputy Warden', 'Chennai', 40000.00, 'Enabled'),
(6, 5, 'aaa', '11111', 'Administrator', 'Peter hudson', 'Male', '2014-03-12', '2015-09-21', 'Warden', 'Chennai', 70000.00, 'Enabled'),
(7, 4, 'asd', '11', 'Warden', 'Ramya', 'Female', '1986-03-13', '2014-03-12', 'Assitant Prof.', 'Tirunelveli', 75000.00, 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `fee_id` int(10) NOT NULL AUTO_INCREMENT,
  `reg_id` int(10) NOT NULL,
  `fee_str_id` int(10) NOT NULL,
  `total_fees` double(10,2) NOT NULL,
  `invoice_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fee_id`, `reg_id`, `fee_str_id`, `total_fees`, `invoice_date`, `status`) VALUES
(1, 5, 12, 100.00, '2014-01-02', 'Enabled'),
(2, 4, 12, 100.00, '2014-01-02', 'Enabled'),
(7, 6, 1, 3000.00, '2014-03-02', 'Enabled'),
(8, 7, 1, 3000.00, '2014-03-06', 'Enabled'),
(9, 8, 1, 3000.00, '2014-03-06', 'Enabled'),
(10, 9, 1, 3000.00, '2014-03-06', 'Enabled'),
(11, 10, 1, 3000.00, '2014-03-07', 'Enabled'),
(12, 11, 3, 3000.00, '2014-03-07', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `fees_structure`
--

DROP TABLE IF EXISTS `fees_structure`;
CREATE TABLE IF NOT EXISTS `fees_structure` (
  `fee_str_id` int(10) NOT NULL AUTO_INCREMENT,
  `course_id` int(10) NOT NULL,
  `fee_type` varchar(25) NOT NULL,
  `cost` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`fee_str_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fees_structure`
--

INSERT INTO `fees_structure` (`fee_str_id`, `course_id`, `fee_type`, `cost`, `status`) VALUES
(1, 1, 'Room rent', 3000.00, 'Enabled'),
(2, 1, 'Mess bill', 5000.00, 'Enabled'),
(3, 7, 'Establishment Fee', 3000.00, 'Enabled'),
(4, 7, 'Mess bill', 5000.00, 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `mess_bill`
--

DROP TABLE IF EXISTS `mess_bill`;
CREATE TABLE IF NOT EXISTS `mess_bill` (
  `mess_bill_id` int(10) NOT NULL AUTO_INCREMENT,
  `reg_id` int(10) NOT NULL,
  `fee_str_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `mess_bill` double(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`mess_bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mess_bill`
--

INSERT INTO `mess_bill` (`mess_bill_id`, `reg_id`, `fee_str_id`, `date`, `mess_bill`, `status`) VALUES
(1, 4, 2, '2014-03-19', 5000.00, 'Enabled'),
(2, 5, 2, '2014-03-19', 5000.00, 'Enabled'),
(6, 6, 2, '2014-03-02', 5000.00, 'Enabled'),
(7, 7, 2, '2014-03-06', 5000.00, 'Enabled'),
(8, 8, 2, '2014-03-06', 5000.00, 'Enabled'),
(9, 9, 2, '2014-03-06', 5000.00, 'Enabled'),
(10, 10, 2, '2014-03-07', 5000.00, 'Enabled'),
(11, 11, 4, '2014-03-07', 5000.00, 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `messcard`
--

DROP TABLE IF EXISTS `messcard`;
CREATE TABLE IF NOT EXISTS `messcard` (
  `messcardid` int(10) NOT NULL AUTO_INCREMENT,
  `rollno` int(10) NOT NULL,
  `messcard_type` varchar(15) NOT NULL,
  `start_date` date NOT NULL,
  `enddate` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `Mess_Bill` int(10) NOT NULL,
  PRIMARY KEY (`messcardid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `messcard`
--

INSERT INTO `messcard` (`messcardid`, `rollno`, `messcard_type`, `start_date`, `enddate`, `status`, `Mess_Bill`) VALUES
(26, 3001, 'Permenent', '2014-03-21', '2018-03-26', 'Enabled', 25000),
(27, 3002, 'Temporary', '2014-03-12', '2018-03-06', 'Enabled', 45000),
(28, 3004, 'Temporary', '2014-03-27', '2018-03-03', 'Enabled', 14200),
(29, 3005, 'Temporary', '2014-03-20', '2018-03-11', 'Enabled', 30000),
(30, 3006, 'Temporary', '2014-03-20', '2018-03-27', 'Enabled', 21400),
(31, 3007, 'Temporary', '2014-03-20', '2018-03-27', 'Enabled', 34015),
(32, 3008, 'Temporary', '2014-08-01', '2018-04-20', 'Enabled', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(10) NOT NULL AUTO_INCREMENT,
  `stid` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `stud_type` varchar(25) NOT NULL COMMENT 'hosteler, day scholar',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `food_type` varchar(25) NOT NULL,
  `beverage_type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `stid`, `room_id`, `stud_type`, `start_date`, `end_date`, `food_type`, `beverage_type`, `status`) VALUES
(1, 2, 4, 'Hosteler', '2015-09-22', '2018-09-21', 'Vegeterian', 'Tea', 'Enabled'),
(4, 3, 2, 'Hosteler', '2014-02-13', '2014-03-02', 'Vegeterian', 'Milk', 'Enabled'),
(5, 4, 1, 'Hosteler', '2014-03-13', '2014-03-13', 'Non-vegeterian', 'Milk', 'Enabled'),
(6, 6, 7, 'Hosteler', '2014-03-05', '2014-03-26', 'Vegeterian', 'Milk', 'Enabled'),
(7, 1, 3, 'Hosteler', '2014-03-06', '2014-03-28', 'Vegeterian', 'Milk', 'Enabled'),
(8, 4, 9, 'Hosteler', '2014-03-19', '2014-03-28', 'Vegeterian', 'Milk', 'Enabled'),
(9, 8, 10, 'Hosteler', '2014-02-26', '2014-04-03', 'Vegeterian', 'Tea', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(10) NOT NULL AUTO_INCREMENT,
  `block_id` int(10) NOT NULL,
  `room_no` int(10) NOT NULL,
  `no_of_beds` int(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`room_id`),
  UNIQUE KEY `room_no` (`room_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `block_id`, `room_no`, `no_of_beds`, `status`) VALUES
(1, 1, 101, 3, 'Occupied'),
(2, 2, 102, 2, 'Occupied'),
(3, 2, 1001, 3, 'Occupied'),
(4, 2, 1002, 3, 'Occupied'),
(5, 3, 11, 3, 'Occupied'),
(6, 3, 12, 4, 'Occupied'),
(7, 4, 121, 4, 'Occupied'),
(8, 4, 122, 3, 'Unoccupied'),
(9, 5, 111, 3, 'Occupied'),
(10, 5, 112, 3, 'Occupied');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `stid` int(10) NOT NULL,
  `courseid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `Year` int(1) NOT NULL,
  `dob` date NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `parents_no` varchar(15) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`stid`),
  UNIQUE KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stid`, `courseid`, `name`, `password`, `rollno`, `Year`, `dob`, `father_name`, `mother_name`, `gender`, `address`, `contact_no`, `parents_no`, `blood_group`, `status`) VALUES
(0, 1, 'shivakumar', 'gsdfdf', '3055', 2, '1996-07-18', 'Nedumaran', 'xyz', 'Male', 'Chennai', '1231232333', '8829382922', 'O+ve', 'Enabled'),
(2, 1, 'Aishwarya', 'asdasd', '3002', 2, '2014-12-31', 'madhan', 'malika', 'Female', 'Trichy', '9098768990', '9878767889', 'A+', 'Enabled'),
(4, 2, 'Anand', 'dfasdf', '3004', 2, '1997-12-16', 'rajesh', 'preeta', 'Male', 'Trichy', '9988745632', '9896362145', 'A+', 'Enabled'),
(5, 3, 'Arul', 'gsdf', '3005', 2, '1997-12-31', 'Ram', 'Ramya', 'Female', 'Tirunelveli', '7896541230', '8085241256', 'A+', 'Enabled'),
(6, 5, 'Arun', 'sdfd', '3006', 2, '2014-05-21', 'Annand', 'mallika', 'Male', 'Coimbatore', '7894756123', '9645814524', 'A+', 'Enabled'),
(7, 4, 'Arun', 'ertre', '3007', 2, '1997-12-31', 'Ram', 'Rekha', 'Male', 'Vanniyambadi', '7489456142', '9874561231', 'A+', 'Enabled'),
(8, 1, 'Hariharan', 'hari', '3008', 2, '1996-06-18', 'Rajaram', 'Latha', 'Male', 'Chennai', '9098789099', '9998765554', 'A+', 'Enabled');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
CREATE TABLE IF NOT EXISTS `visitor` (
  `visitorid` int(10) NOT NULL AUTO_INCREMENT,
  `stid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`visitorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitorid`, `stid`, `name`, `type`, `username`, `password`, `contactno`, `status`) VALUES
(1, 1, 'Sridhar', 'Parents', 'visitor', '12345', '9983384222', 'Enabled'),
(2, 2, 'malika', 'Parents', 'aaa', '111', '8383838394', 'Enabled'),
(3, 3, 'peter', 'Parents', 'peter', '123456', '9585885431', 'Enabled'),
(4, 4, 'Rmaya', 'Parents', 'abcdtest', '45645645', '9878765453', 'Enabled'),
(5, 5, 'malika', 'Cousin', 'abc', '123', '9878987321', 'Disabled'),
(6, 6, 'Rekha', 'Sister', 'abc ', '123', '987678987', 'Disabled');
