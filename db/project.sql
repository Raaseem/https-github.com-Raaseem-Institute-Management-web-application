-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2014 at 11:15 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(15) NOT NULL,
  `adm_fname` char(30) NOT NULL,
  `adm_lname` char(30) NOT NULL,
  `a_house_no` int(3) NOT NULL,
  `a_street_name` char(30) NOT NULL,
  `a_city` char(30) NOT NULL,
  `a_mobile_no` int(10) NOT NULL,
  `a_land_no` int(10) NOT NULL,
  `a_email_id` varchar(30) NOT NULL,
  `a_location` longblob,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `adm_fname`, `adm_lname`, `a_house_no`, `a_street_name`, `a_city`, `a_mobile_no`, `a_land_no`, `a_email_id`, `a_location`, `username`, `password`) VALUES
('adm001', 'Tharani', 'Tharan', 3, 'Temple Road', 'Kalmunai', 774385151, 678954301, 'tharanitharan@gmail.com', 0x75706c6f6164732f6e65796d61722d6272617a696c2d77616c6c70617065722d636f6e66656465726174696f6e732d6375702d323031332e6a7067, 'adm001', 'adm001');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batch_id` varchar(15) NOT NULL,
  `sub_id` varchar(15) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  PRIMARY KEY (`batch_id`),
  KEY `sub_id` (`sub_id`,`grade`,`tutor_id`),
  KEY `tutor_id` (`tutor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `sub_id`, `grade`, `tutor_id`) VALUES
('math/10/01', 'math01', '10', 'tut001'),
('math/10/02', 'math01', '10', 'tut002'),
('math/10/03', 'math01', '10', 'tut002'),
('math/11/01', 'math01', '11', 'tut001'),
('math/11/02', 'math01', '11', 'tut002'),
('math/09/01', 'math01', '9', 'tut001'),
('math/09/02', 'math01', '9', 'tut001'),
('math/09/03', 'math01', '9', 'tut002');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` varchar(15) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
('cls001', 'Thiruvalluvar Hall'),
('cls002', 'Nallathamby Hall');

-- --------------------------------------------------------

--
-- Table structure for table `class_test`
--

CREATE TABLE IF NOT EXISTS `class_test` (
  `class_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(15) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `year` int(4) NOT NULL,
  `month` char(10) NOT NULL,
  `class_test_no` int(1) NOT NULL,
  `mark` int(3) DEFAULT NULL,
  PRIMARY KEY (`class_test_id`),
  KEY `stu_id` (`stu_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` varchar(15) NOT NULL,
  `event_date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` varchar(15) NOT NULL,
  `year` char(10) NOT NULL,
  `performance` int(2) NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE IF NOT EXISTS `forum_answer` (
  `ques_id` int(4) NOT NULL,
  `ans_id` int(4) NOT NULL,
  `ans_name` varchar(65) NOT NULL,
  `ans_email` varchar(65) NOT NULL,
  `ans_answer` longtext NOT NULL,
  `ans_datetime` varchar(25) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`ques_id`, `ans_id`, `ans_name`, `ans_email`, `ans_answer`, `ans_datetime`) VALUES
(2, 1, 'mano', 'smiles4mano@yahoo.com', '2+2=4', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE IF NOT EXISTS `forum_question` (
  `ques_id` int(4) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `datetime` varchar(25) NOT NULL,
  `view` int(4) NOT NULL,
  `reply` int(4) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`ques_id`, `topic`, `detail`, `name`, `email`, `datetime`, `view`, `reply`) VALUES
(1, 'Maths', 'what is 2+2', '', 'nishanthinisimon@yahoo.com', '', 11, 0),
(2, 'Maths', 'what is 4+4', 'mano', 'smiles4mano@yahoo.com', '09/10/14 08:09:04', 27, 0),
(3, 'Maths', 'What is 3+3?', 'Nisha', 'nishanthinisimon@yahoo.com', '28/10/14 07:35:57', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `learning_material`
--

CREATE TABLE IF NOT EXISTS `learning_material` (
  `lm_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  `location` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  PRIMARY KEY (`lm_id`),
  KEY `sub_id` (`batch_id`),
  KEY `tutor_id` (`tutor_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`, `fname`, `lname`) VALUES
('par001', 'par001', 'Kamalapushani', 'Sangaralingam'),
('par004', 'par004', 'Sutharsan', 'Kumar'),
('par04', 'par04', 'Kamal', 'Raj'),
('stu001', 'stu001', 'Nisha', 'Simon'),
('stu002', 'stu002', 'Thiluxie', 'Sangaralingam'),
('stu003', 'stu003', 'Thiru', 'Karan'),
('stu004', 'stu004', 'Rajvini', 'Thirukaran'),
('stu005', 'stu005', 'Kala', 'Nirmal'),
('stu011', 'stu011', 'Nila', 'Sutharsan'),
('stu012', 'stu012', 'Raja', 'Kannan');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) DEFAULT NULL,
  `sender_id` varchar(15) DEFAULT NULL,
  `mess_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mess_id`, `receiver_id`, `sender_id`, `mess_date`, `subject`, `description`) VALUES
(1, NULL, 'par001', '2014-10-29', 'Fees', 'I want to make sure did my daughter Nisha Simon (stu001) paid her fees for the month of May for the class math/09/01'),
(2, 'par001', NULL, '2014-10-29', 'Reply To Fees', 'Yes, your daughter Nisha Simon(stu001) has paid her fees for the month of May for the class math/09/01'),
(3, 'par002', NULL, '2014-10-30', 'Parents Meeting', 'Dear parent,\r\nWe highly appreciate your participation on 1st of November for the parents meeting.'),
(4, 'par001', NULL, '2014-10-30', 'hi', 'how are you'),
(5, 'adm001', 'par001', '2014-10-30', 'Parents Meeting', 'Can I please know when is the parent meeting for batch/0/01'),
(6, 'stu001', NULL, '2014-10-30', 'hi', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `message_parent`
--

CREATE TABLE IF NOT EXISTS `message_parent` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `message_parent`
--

INSERT INTO `message_parent` (`mess_id`, `receiver_id`, `sender_id`, `subject`, `description`, `mess_date`) VALUES
(1, 'par001', 'adm001', 'hi', 'how are you', '2014-10-30'),
(2, 'adm001', 'par001', 'Parents Meeting', 'Can I please know when is the parent meeting for batch/0/01', '2014-10-30'),
(3, 'stu001', 'adm001', 'hi', 'hi', '2014-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `message_staff`
--

CREATE TABLE IF NOT EXISTS `message_staff` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_staff`
--

INSERT INTO `message_staff` (`mess_id`, `receiver_id`, `sender_id`, `subject`, `description`, `mess_date`) VALUES
(1, 'adm001', 'par001', 'Parents Meeting', 'Can I please know when is the parent meeting for batch/0/01', '2014-10-30'),
(2, 'stu001', 'adm001', 'hi', 'hi', '2014-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `message_student`
--

CREATE TABLE IF NOT EXISTS `message_student` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_student`
--

INSERT INTO `message_student` (`mess_id`, `receiver_id`, `sender_id`, `subject`, `description`, `mess_date`) VALUES
(1, 'adm001', 'par001', 'Parents Meeting', 'Can I please know when is the parent meeting for batch/0/01', '2014-10-30'),
(2, 'stu001', 'adm001', 'hi', 'hi', '2014-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `message_tutor`
--

CREATE TABLE IF NOT EXISTS `message_tutor` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message_tutor`
--

INSERT INTO `message_tutor` (`mess_id`, `receiver_id`, `sender_id`, `subject`, `description`, `mess_date`) VALUES
(1, 'adm001', 'par001', 'Parents Meeting', 'Can I please know when is the parent meeting for batch/0/01', '2014-10-30'),
(2, 'stu001', 'adm001', 'hi', 'hi', '2014-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `parent_id` varchar(15) NOT NULL,
  `par_fname` char(30) NOT NULL,
  `par_lname` char(30) NOT NULL,
  `p_house_no` int(3) NOT NULL,
  `p_street_name` char(30) NOT NULL,
  `p_city` char(30) NOT NULL,
  `p_mobile_no` int(10) DEFAULT NULL,
  `p_land_no` int(10) DEFAULT NULL,
  `p_email_id` varchar(30) NOT NULL,
  `p_location` longblob,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `par_fname`, `par_lname`, `p_house_no`, `p_street_name`, `p_city`, `p_mobile_no`, `p_land_no`, `p_email_id`, `p_location`, `username`, `password`) VALUES
('par001', 'Rani', 'Simon', 3, 'puttady road', 'KoddaiKallar', 773967543, 658765432, 'rani@gmail.com', 0x75706c6f6164732f416d6d612e6a7067, 'par001', 'par001'),
('par002', 'Kamalapushani', 'Sangaralingam', 3, 'Temple Road', 'Kalmunai', 716796417, 672229080, 'skamalapushani@yahoo.com', 0x75706c6f6164732f696d616765732e6a7067, 'par002', 'par002'),
('par003', 'Thiru', 'Karan', 3, 'Hospital Road', 'Kalmunai', 778943208, 672229062, 'thirukaran@gmail.com', 0x75706c6f6164732f3637335f333630333037332e6a7067, 'par003', 'par003'),
('par004', 'Sutharsan', 'Kumar', 5, 'Main Street', 'Karaitivu', 779874410, 672228954, 'sutharsank@gmail.com', 0x75706c6f6164732f313337383633385f3539363931313733373033393636315f3637383735303031395f6e2e6a7067, 'par004', 'par004');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `pay_date` date NOT NULL,
  `year` int(4) NOT NULL,
  `month` char(10) NOT NULL,
  `stu_id` varchar(15) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `staff_id` varchar(15) NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `stu_id` (`stu_id`),
  KEY `sub_id` (`batch_id`),
  KEY `admin_id` (`staff_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `amount`, `pay_date`, `year`, `month`, `stu_id`, `batch_id`, `staff_id`) VALUES
(2, 400, '2014-01-10', 2014, 'January', 'stu001', 'math/09/01', 'stf001'),
(3, 400, '2014-10-16', 2014, 'march', 'stu002', 'math/09/01', 'stf001'),
(4, 400, '2014-10-18', 2013, 'may', 'stu002', 'math/10/01', 'stf001'),
(5, 400, '2014-10-17', 2013, 'may', 'stu001', 'math/09/01', 'stf001');

-- --------------------------------------------------------

--
-- Table structure for table `salary_tutor`
--

CREATE TABLE IF NOT EXISTS `salary_tutor` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `year` int(4) NOT NULL,
  `month` char(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  PRIMARY KEY (`sal_id`),
  KEY `tutor_id` (`tutor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `salary_tutor`
--

INSERT INTO `salary_tutor` (`sal_id`, `amount`, `year`, `month`, `status`, `tutor_id`) VALUES
(4, 20000, 2013, 'November', 'Paid', 'tut001'),
(6, 20000, 2014, 'February', 'Paid', 'tut002'),
(7, 25000, 2014, 'March', 'Paid', 'tut003'),
(8, 20000, 2014, 'May', 'Not Paid', 'tut001');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` varchar(15) NOT NULL,
  `stf_fname` char(30) NOT NULL,
  `stf_lname` char(30) NOT NULL,
  `s_house_no` int(4) NOT NULL,
  `s_street_name` char(30) NOT NULL,
  `s_city` char(30) NOT NULL,
  `s_mobile_no` int(10) NOT NULL,
  `s_land_no` int(10) NOT NULL,
  `s_email_id` varchar(30) NOT NULL,
  `s_location` longblob NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `stf_fname`, `stf_lname`, `s_house_no`, `s_street_name`, `s_city`, `s_mobile_no`, `s_land_no`, `s_email_id`, `s_location`, `username`, `password`) VALUES
('stf001', 'Vijay', 'Varathan', 9, 'Bakery Road', 'Periya Kallar', 776589543, 655432890, 'varatanvijay@gmail.com', 0x75706c6f6164732f4e65796d61722d3030382e6a7067, 'stf001', 'stf001');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` varchar(15) NOT NULL,
  `stu_fname` char(30) NOT NULL,
  `stu_lname` char(30) NOT NULL,
  `house_no` int(3) NOT NULL,
  `street_name` char(30) NOT NULL,
  `city` char(30) NOT NULL,
  `mobile_no` int(10) DEFAULT NULL,
  `land_no` int(10) DEFAULT NULL,
  `email_id` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `reg_date` date NOT NULL,
  `location` longblob,
  `parent_id` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_fname`, `stu_lname`, `house_no`, `street_name`, `city`, `mobile_no`, `land_no`, `email_id`, `dob`, `reg_date`, `location`, `parent_id`, `username`, `password`) VALUES
('stu001', 'Nisha', 'Simon', 3, 'Puttady Road', 'KoddaiKallar', 773921092, 658765432, 'nishanthinisimon@yahoo.com', '1990-05-28', '2014-10-01', 0x75706c6f6164732f4453435f30313037202d20436f70792e6a7067, 'par001', 'stu001', 'stu001'),
('stu002', 'Thiluxie', 'Sangaralingam', 2, 'Temple Road', 'Kalmunai', 774385151, 678765432, 'sthiluxie@yahoo.com', '1999-01-10', '2013-06-12', 0x75706c6f6164732f5768656e206b69647320656d626172726173732e6a7067, 'par002', 'stu002', 'stu002'),
('stu004', 'Rajvini', 'Thirukaran', 25, 'Hospital Road', 'Kalmunai', 773921092, 672225699, 'vinithiru@gmail.com', '1999-09-21', '2013-05-09', 0x75706c6f6164732f3030322e4a5047, 'par003', 'stu004', 'stu004'),
('stu011', 'Nila', 'Sutharsan', 7, 'Main Street', 'Karaitivu', 724567890, 672225699, 'nilas@gmail.com', '1999-09-21', '2013-01-03', 0x75706c6f6164732f3430305f465f33383338303931335f5832536c3434596e704369373361545a7a75665a4230567358533553695671352e6a7067, 'par004', 'stu011', 'stu011'),
('stu012', 'Raja', 'Kannan', 3, 'Beach Road', 'Kalmunai', 773921092, 678765432, 'rajakannan@yahoo.com', '2000-05-12', '2014-01-03', 0x75706c6f6164732f696e6e6f63656e742e706e67, 'par003', 'stu012', 'stu012');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE IF NOT EXISTS `student_attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(15) NOT NULL,
  `stu_name` char(65) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `stu_id` (`stu_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_batch`
--

CREATE TABLE IF NOT EXISTS `student_batch` (
  `stu_bat_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(15) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  PRIMARY KEY (`stu_bat_id`),
  KEY `stu_id` (`stu_id`,`batch_id`),
  KEY `stu_id_2` (`stu_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_batch`
--

INSERT INTO `student_batch` (`stu_bat_id`, `stu_id`, `batch_id`) VALUES
(1, 'stu001', 'math/09/01'),
(2, 'stu002', 'math/09/03');

-- --------------------------------------------------------

--
-- Table structure for table `student_mcq`
--

CREATE TABLE IF NOT EXISTS `student_mcq` (
  `lm_id` varchar(15) NOT NULL,
  `stu_id` varchar(15) NOT NULL,
  `mark` int(3) NOT NULL,
  `q1` tinyint(1) DEFAULT NULL,
  `q2` tinyint(1) DEFAULT NULL,
  `q3` tinyint(1) DEFAULT NULL,
  `q4` tinyint(1) DEFAULT NULL,
  `q5` tinyint(1) DEFAULT NULL,
  `q6` tinyint(1) DEFAULT NULL,
  `q7` tinyint(1) DEFAULT NULL,
  `q8` tinyint(1) DEFAULT NULL,
  `q9` tinyint(1) DEFAULT NULL,
  `q10` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`lm_id`,`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` varchar(15) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`) VALUES
('eng01', 'English'),
('his01', 'History'),
('math01', 'Maths'),
('sci01', 'Science'),
('tam01', 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `summary_mcq`
--

CREATE TABLE IF NOT EXISTS `summary_mcq` (
  `lm_id` varchar(15) NOT NULL,
  `que_no` int(2) NOT NULL,
  `answer` int(2) NOT NULL,
  `no_attempts` int(3) NOT NULL,
  `correct` int(3) NOT NULL,
  `wrong` int(3) NOT NULL,
  PRIMARY KEY (`lm_id`,`que_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` varchar(15) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `timeslot` varchar(17) NOT NULL,
  `day` char(10) NOT NULL,
  PRIMARY KEY (`tt_id`),
  KEY `class_id` (`class_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tt_id`, `class_id`, `batch_id`, `timeslot`, `day`) VALUES
(1, 'cls001', 'math/10/01', '7.30am - 8.30am', 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `tutor_id` varchar(15) NOT NULL,
  `tut_fname` char(30) NOT NULL,
  `tut_lname` char(30) NOT NULL,
  `t_house_no` int(3) NOT NULL,
  `t_street_name` char(30) NOT NULL,
  `t_city` char(30) NOT NULL,
  `t_mobile_no` int(10) DEFAULT NULL,
  `t_land_no` int(10) DEFAULT NULL,
  `t_email_id` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `basic_sal` double NOT NULL,
  `reg_date` date NOT NULL,
  `t_location` longblob NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`tutor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutor_id`, `tut_fname`, `tut_lname`, `t_house_no`, `t_street_name`, `t_city`, `t_mobile_no`, `t_land_no`, `t_email_id`, `qualification`, `basic_sal`, `reg_date`, `t_location`, `username`, `password`) VALUES
('tut001', 'Karuna', 'Karan', 2, 'Temple Road', 'kalmunai', 2147483647, 685665432, 'karunakaran@gmail.com', 'BSc Maths', 20000, '2014-09-25', 0x75706c6f6164732f677269642e6a7067, 'tut001', 'tut001'),
('tut002', 'Inba', 'Raj', 4, 'VV Road', 'Kalmunai', 778654320, 67865430, 'inba@gmail.com', 'BSc', 100000, '2014-09-02', 0x75706c6f6164732f3637335f333630333037332e6a7067, 'tut002', 'tut002'),
('tut003', 'Manoj', 'Kanth', 6, 'Temple Road', 'Karaitivu', 77654876, 67895432, 'manoj@gmail.com', 'PhD', 25000, '2014-08-04', '', 'tut003', 'tut003');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_attendance`
--

CREATE TABLE IF NOT EXISTS `tutor_attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `tutor_name` char(65) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `status` char(7) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `tutor_id` (`tutor_id`),
  KEY `sub_id` (`batch_id`),
  KEY `batch_id` (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tutor_attendance`
--

INSERT INTO `tutor_attendance` (`att_id`, `date`, `tutor_id`, `tutor_name`, `batch_id`, `status`) VALUES
(1, '2014-10-05', 'tut001', 'Karuna Karan', 'math/09/01', 'Present'),
(3, '2014-10-12', 'tut001', 'Karuna Karan', 'math/09/01', 'Present'),
(7, '2014-10-04', 'tut001', 'Karuna Karan', 'math/09/02', 'Absent');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `batch_ibfk_2` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_test`
--
ALTER TABLE `class_test`
  ADD CONSTRAINT `class_test_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_test_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `learning_material`
--
ALTER TABLE `learning_material`
  ADD CONSTRAINT `learning_material_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `learning_material_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary_tutor`
--
ALTER TABLE `salary_tutor`
  ADD CONSTRAINT `salary_tutor_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`parent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD CONSTRAINT `student_attendance_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_attendance_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_batch`
--
ALTER TABLE `student_batch`
  ADD CONSTRAINT `student_batch_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_batch_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `timetable_ibfk_3` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutor_attendance`
--
ALTER TABLE `tutor_attendance`
  ADD CONSTRAINT `tutor_attendance_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutor_attendance_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
