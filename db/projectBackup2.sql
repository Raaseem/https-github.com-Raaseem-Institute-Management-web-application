/*
SQLyog Community v12.2.6 (64 bit)
MySQL - 5.6.16 : Database - project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `project`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
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

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`adm_fname`,`adm_lname`,`a_house_no`,`a_street_name`,`a_city`,`a_mobile_no`,`a_land_no`,`a_email_id`,`a_location`,`username`,`password`) values 
('adm001','Zafwath','Maharij',3,'Manalthotam','Kalpitiya',774385151,678954301,'zmaharij@gmail.com','uploads/neymar-brazil-wallpaper-confederations-cup-2013.jpg','adm001','adm001');

/*Table structure for table `batch` */

DROP TABLE IF EXISTS `batch`;

CREATE TABLE `batch` (
  `batch_id` varchar(15) NOT NULL,
  `sub_id` varchar(15) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  PRIMARY KEY (`batch_id`),
  KEY `sub_id` (`sub_id`,`grade`,`tutor_id`),
  KEY `tutor_id` (`tutor_id`),
  CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `batch_ibfk_2` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `batch` */

insert  into `batch`(`batch_id`,`sub_id`,`grade`,`tutor_id`) values 
('his/08/01','his01','8','tut004'),
('math/10/01','math01','10','tut001'),
('math/10/02','math01','10','tut002'),
('math/10/03','math01','10','tut002'),
('math/11/01','math01','11','tut001'),
('math/11/02','math01','11','tut002'),
('math/09/01','math01','9','tut001'),
('math/09/02','math01','9','tut001'),
('math/09/03','math01','9','tut002');

/*Table structure for table `class` */

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `class_id` varchar(15) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `class` */

insert  into `class`(`class_id`,`class_name`) values 
('cls001','Main Hall'),
('cls002','Mansoor Hall'),
('cls003','c3'),
('cls004','asddas');

/*Table structure for table `class_test` */

DROP TABLE IF EXISTS `class_test`;

CREATE TABLE `class_test` (
  `class_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(15) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `year` int(4) NOT NULL,
  `month` char(10) NOT NULL,
  `class_test_no` int(1) NOT NULL,
  `mark` int(3) DEFAULT NULL,
  PRIMARY KEY (`class_test_id`),
  KEY `stu_id` (`stu_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `class_test_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `class_test_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `class_test` */

insert  into `class_test`(`class_test_id`,`stu_id`,`batch_id`,`year`,`month`,`class_test_no`,`mark`) values 
(1,'stu001','math/09/01',2018,'May',1,78);

/*Table structure for table `event` */

DROP TABLE IF EXISTS `event`;

CREATE TABLE `event` (
  `event_id` varchar(15) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `event_date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `event` */

insert  into `event`(`event_id`,`title`,`event_date`,`time`,`location`,`description`) values 
('','globalization','2018-09-29','11:00:00','main hall','bkdjgbkdssf');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` varchar(15) NOT NULL,
  `year` char(10) NOT NULL,
  `performance` int(2) NOT NULL,
  `stu_id` varchar(10) DEFAULT NULL,
  `rating1` varchar(2) DEFAULT NULL,
  `rating2` varchar(2) DEFAULT NULL,
  `rating3` varchar(2) DEFAULT NULL,
  `rating4` varchar(2) DEFAULT NULL,
  `rating5` varchar(2) DEFAULT NULL,
  `rating6` varchar(2) DEFAULT NULL,
  `rating7` varchar(2) DEFAULT NULL,
  `rating8` varchar(2) DEFAULT NULL,
  `rating9` varchar(2) DEFAULT NULL,
  `rating10` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`feedback_id`,`batch_id`,`year`,`performance`,`stu_id`,`rating1`,`rating2`,`rating3`,`rating4`,`rating5`,`rating6`,`rating7`,`rating8`,`rating9`,`rating10`) values 
(1,'math/10/01','2018',83,'stu002','3','4','4','3','3','3','4','3','3','3');

/*Table structure for table `forum_answer` */

DROP TABLE IF EXISTS `forum_answer`;

CREATE TABLE `forum_answer` (
  `ques_id` int(4) NOT NULL,
  `ans_id` int(4) NOT NULL,
  `batch_id` varchar(10) NOT NULL,
  `ans_name` varchar(65) NOT NULL,
  `ans_email` varchar(65) NOT NULL,
  `ans_answer` longtext NOT NULL,
  `ans_datetime` varchar(25) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `forum_answer` */

insert  into `forum_answer`(`ques_id`,`ans_id`,`batch_id`,`ans_name`,`ans_email`,`ans_answer`,`ans_datetime`) values 
(0,1,'math/09/01','Najeeb Ameen','','pie*r2','29/09/18');

/*Table structure for table `forum_question` */

DROP TABLE IF EXISTS `forum_question`;

CREATE TABLE `forum_question` (
  `ques_id` int(4) NOT NULL,
  `batch_id` varchar(10) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `datetime` varchar(25) NOT NULL,
  `view` int(4) NOT NULL,
  `reply` int(4) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `forum_question` */

insert  into `forum_question`(`ques_id`,`batch_id`,`topic`,`detail`,`name`,`email`,`datetime`,`view`,`reply`) values 
(0,'math/09/01','Area','what is the equation for area of a circle?','Zeina Zhawa','','29/09/18',9,1);

/*Table structure for table `learning_material` */

DROP TABLE IF EXISTS `learning_material`;

CREATE TABLE `learning_material` (
  `lm_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  `location` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  PRIMARY KEY (`lm_id`),
  KEY `sub_id` (`batch_id`),
  KEY `tutor_id` (`tutor_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `learning_material_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `learning_material_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `learning_material` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `user_id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`user_id`,`password`,`fname`,`lname`) values 
('stu003','stu003','Zherawat','Isha'),
('stu004','stu004','asd','dfsd'),
('tut004','tut004','Mohamed','Aqlam');

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) DEFAULT NULL,
  `sender_id` varchar(15) DEFAULT NULL,
  `mess_date` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `message` */

insert  into `message`(`mess_id`,`receiver_id`,`sender_id`,`mess_date`,`subject`,`description`) values 
(1,NULL,'par001','2014-10-29','Fees','I want to make sure did my daughter Nisha Simon (stu001) paid her fees for the month of May for the class math/09/01'),
(2,'par001',NULL,'2014-10-29','Reply To Fees','Yes, your daughter Nisha Simon(stu001) has paid her fees for the month of May for the class math/09/01'),
(3,'par002',NULL,'2014-10-30','Parents Meeting','Dear parent,\r\nWe highly appreciate your participation on 1st of November for the parents meeting.'),
(4,'par001',NULL,'2014-10-30','hi','how are you'),
(5,'adm001','par001','2014-10-30','Parents Meeting','Can I please know when is the parent meeting for batch/0/01'),
(6,'stu001',NULL,'2014-10-30','hi','hi'),
(7,'stu002',NULL,'2018-09-28','Hi','Welcome to Kensington Academy'),
(8,'par002',NULL,'2018-09-29','asd','kjshdkfbskd'),
(9,'par001',NULL,'2018-09-29','Hello','kjkjsbdkja');

/*Table structure for table `message_parent` */

DROP TABLE IF EXISTS `message_parent`;

CREATE TABLE `message_parent` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `message_parent` */

insert  into `message_parent`(`mess_id`,`receiver_id`,`sender_id`,`subject`,`description`,`mess_date`) values 
(1,'par001','adm001','hi','how are you','2014-10-30'),
(2,'adm001','par001','Parents Meeting','Can I please know when is the parent meeting for batch/0/01','2014-10-30'),
(3,'stu001','adm001','hi','hi','2014-10-30'),
(4,'stu002','adm001','Hi','Welcome to Kensington Academy','2018-09-28'),
(5,'par002','adm001','asd','kjshdkfbskd','2018-09-29');

/*Table structure for table `message_staff` */

DROP TABLE IF EXISTS `message_staff`;

CREATE TABLE `message_staff` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `message_staff` */

insert  into `message_staff`(`mess_id`,`receiver_id`,`sender_id`,`subject`,`description`,`mess_date`) values 
(1,'adm001','par001','Parents Meeting','Can I please know when is the parent meeting for batch/0/01','2014-10-30'),
(2,'stu001','adm001','hi','hi','2014-10-30'),
(3,'stu002','adm001','Hi','Welcome to Kensington Academy','2018-09-28'),
(4,'par002','adm001','asd','kjshdkfbskd','2018-09-29'),
(5,'par001','adm001','Hello','kjkjsbdkja','2018-09-29');

/*Table structure for table `message_student` */

DROP TABLE IF EXISTS `message_student`;

CREATE TABLE `message_student` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `message_student` */

insert  into `message_student`(`mess_id`,`receiver_id`,`sender_id`,`subject`,`description`,`mess_date`) values 
(1,'adm001','par001','Parents Meeting','Can I please know when is the parent meeting for batch/0/01','2014-10-30'),
(2,'stu001','adm001','hi','hi','2014-10-30'),
(3,'stu002','adm001','Hi','Welcome to Kensington Academy','2018-09-28'),
(4,'par002','adm001','asd','kjshdkfbskd','2018-09-29'),
(5,'par001','adm001','Hello','kjkjsbdkja','2018-09-29');

/*Table structure for table `message_tutor` */

DROP TABLE IF EXISTS `message_tutor`;

CREATE TABLE `message_tutor` (
  `mess_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver_id` varchar(15) NOT NULL,
  `sender_id` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `mess_date` date NOT NULL,
  PRIMARY KEY (`mess_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `message_tutor` */

insert  into `message_tutor`(`mess_id`,`receiver_id`,`sender_id`,`subject`,`description`,`mess_date`) values 
(1,'adm001','par001','Parents Meeting','Can I please know when is the parent meeting for batch/0/01','2014-10-30'),
(2,'stu001','adm001','hi','hi','2014-10-30'),
(3,'stu002','adm001','Hi','Welcome to Kensington Academy','2018-09-28'),
(4,'par002','adm001','asd','kjshdkfbskd','2018-09-29'),
(5,'par001','adm001','Hello','kjkjsbdkja','2018-09-29');

/*Table structure for table `parent` */

DROP TABLE IF EXISTS `parent`;

CREATE TABLE `parent` (
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

/*Data for the table `parent` */

insert  into `parent`(`parent_id`,`par_fname`,`par_lname`,`p_house_no`,`p_street_name`,`p_city`,`p_mobile_no`,`p_land_no`,`p_email_id`,`p_location`,`username`,`password`) values 
('par001','Mohamed','Nusry',3,'UMU Road','Kalpitiya',773967543,658765432,'nusry@gmail.com','uploads/443px-Rasmus_Lerdorf_cropped.jpg','par001','par001'),
('par002','Marikkar','Haris',70,'Periyakudiruppy Road','Kalpitiya',773171607,322260862,'haris@yahoo.com','uploads/images (3).jpg','par002','par002');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
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
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`pay_id`,`amount`,`pay_date`,`year`,`month`,`stu_id`,`batch_id`,`staff_id`) values 
(2,500,'2014-01-10',2014,'January','stu001','math/09/01','stf001'),
(5,600,'2014-10-17',2013,'January','stu001','math/09/01','stf001'),
(7,500,'2018-09-28',2018,'October','stu002','math/10/01','stf001'),
(9,600,'2018-09-29',2018,'February','stu002','math/10/01','stf001'),
(10,800,'2018-09-29',2018,'March','stu002','math/10/02','stf001'),
(11,400,'2018-09-29',2018,'February','stu002','math/09/02','stf001'),
(12,900,'2018-09-29',2018,'February','stu002','math/10/02','stf001'),
(13,500,'2018-09-29',2018,'February','stu002','math/10/01','stf001');

/*Table structure for table `salary_tutor` */

DROP TABLE IF EXISTS `salary_tutor`;

CREATE TABLE `salary_tutor` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `year` int(4) NOT NULL,
  `month` char(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  PRIMARY KEY (`sal_id`),
  KEY `tutor_id` (`tutor_id`),
  CONSTRAINT `salary_tutor_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `salary_tutor` */

insert  into `salary_tutor`(`sal_id`,`amount`,`year`,`month`,`status`,`tutor_id`) values 
(4,20000,2013,'November','Paid','tut001'),
(6,20000,2014,'February','Paid','tut002'),
(7,25000,2014,'March','Paid','tut003'),
(8,20000,2014,'May','Not Paid','tut001'),
(9,20000,2019,'January','paid','tut004'),
(10,15000,2019,'May','paid','tut004');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
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

/*Data for the table `staff` */

insert  into `staff`(`staff_id`,`stf_fname`,`stf_lname`,`s_house_no`,`s_street_name`,`s_city`,`s_mobile_no`,`s_land_no`,`s_email_id`,`s_location`,`username`,`password`) values 
('stf001','Haidar','Mundir',9,'New masjid Road','Kalpitiya',776589543,322260328,'hmundir@gmail.com','uploads/Neymar-008.jpg','stf001','stf001');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
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
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parent` (`parent_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`stu_id`,`stu_fname`,`stu_lname`,`house_no`,`street_name`,`city`,`mobile_no`,`land_no`,`email_id`,`dob`,`reg_date`,`location`,`parent_id`,`username`,`password`) values 
('stu001','Zeina','Zhawa',3,'UMU Road','Kalpitiya',773921092,322260531,'zeinaz@yahoo.com','1990-05-28','2014-10-01','uploads/553328_452259688161463_631161759_n.jpg','par001','stu001','stu001'),
('stu002','Mohamed','Shibran',70,'Periyakudiruppy Road','Puttalam',711449969,322262547,'mshibran@gmail.com','1994-09-07','2018-09-28','uploads/','par002','stu002','stu002'),
('stu003','Zherawat','Isha',70,'UMU Road','Nuraicholai',714598356,322260874,'zisha@gmail.com','1996-10-23','2018-09-29','uploads/','par001','stu003','stu003'),
('stu004','asd','dfsd',8,'xzc','Kalpitiya',781245987,322265984,'asd@gmail.com','1994-05-12','2018-09-29','uploads/','par002','stu004','stu004');

/*Table structure for table `student_attendance` */

DROP TABLE IF EXISTS `student_attendance`;

CREATE TABLE `student_attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(15) NOT NULL,
  `stu_name` char(65) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `stu_id` (`stu_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `student_attendance_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_attendance_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `student_attendance` */

insert  into `student_attendance`(`att_id`,`stu_id`,`stu_name`,`batch_id`,`date`,`status`) values 
(1,'stu001','','math/09/01','2018-09-29',0),
(2,'stu001','','math/09/01','2018-09-29',0),
(3,'stu002','','math/10/01','2018-09-29',0);

/*Table structure for table `student_batch` */

DROP TABLE IF EXISTS `student_batch`;

CREATE TABLE `student_batch` (
  `stu_bat_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(15) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  PRIMARY KEY (`stu_bat_id`),
  KEY `stu_id` (`stu_id`,`batch_id`),
  KEY `stu_id_2` (`stu_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `student_batch_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `student` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `student_batch_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `student_batch` */

insert  into `student_batch`(`stu_bat_id`,`stu_id`,`batch_id`) values 
(1,'stu001','math/09/01'),
(6,'stu002','math/09/02'),
(2,'stu002','math/10/01'),
(4,'stu002','math/10/01'),
(5,'stu002','math/10/02');

/*Table structure for table `student_mcq` */

DROP TABLE IF EXISTS `student_mcq`;

CREATE TABLE `student_mcq` (
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

/*Data for the table `student_mcq` */

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `sub_id` varchar(15) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`sub_id`,`sub_name`) values 
('eng01','English'),
('his01','History'),
('math01','Maths'),
('sci01','Science'),
('tam01','Tamil');

/*Table structure for table `summary_mcq` */

DROP TABLE IF EXISTS `summary_mcq`;

CREATE TABLE `summary_mcq` (
  `lm_id` varchar(15) NOT NULL,
  `que_no` int(2) NOT NULL,
  `answer` int(2) NOT NULL,
  `no_attempts` int(3) NOT NULL,
  `correct` int(3) NOT NULL,
  `wrong` int(3) NOT NULL,
  PRIMARY KEY (`lm_id`,`que_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `summary_mcq` */

/*Table structure for table `timetable` */

DROP TABLE IF EXISTS `timetable`;

CREATE TABLE `timetable` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` varchar(15) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `timeslot` varchar(17) NOT NULL,
  `day` char(10) NOT NULL,
  PRIMARY KEY (`tt_id`),
  KEY `class_id` (`class_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `timetable_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `timetable_ibfk_3` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `timetable` */

insert  into `timetable`(`tt_id`,`class_id`,`batch_id`,`timeslot`,`day`) values 
(1,'cls001','math/10/01','7.30am - 8.30am','Sunday'),
(2,'cls001','his/08/01','8.30am - 9.30am','Monday'),
(3,'cls002','math/09/03','11.30am - 12.30pm','Tuesday'),
(4,'cls003','math/09/01','4.30pm - 5.30pm','Monday'),
(5,'cls002','math/10/02','3.30pm - 4.30pm','Monday'),
(6,'cls001','math/10/03','3.30pm - 4.30pm','Monday'),
(7,'cls004','math/10/01','8.30am - 9.30 am','Monday'),
(8,'cls004','his/08/01','8.30am - 9.30 am','Monday');

/*Table structure for table `tutor` */

DROP TABLE IF EXISTS `tutor`;

CREATE TABLE `tutor` (
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

/*Data for the table `tutor` */

insert  into `tutor`(`tutor_id`,`tut_fname`,`tut_lname`,`t_house_no`,`t_street_name`,`t_city`,`t_mobile_no`,`t_land_no`,`t_email_id`,`qualification`,`basic_sal`,`reg_date`,`t_location`,`username`,`password`) values 
('tut001','Najeeb','Ameen',2,'sea Street','Kalpitiya',778965423,685665432,'nAmeen@gmail.com','BSc Maths',20000,'2014-09-25','uploads/grid.jpg','tut001','tut001'),
('tut002','Akram','Mubarak',4,'Main Road','Kurinjipitty',778654320,67865430,'akram@gmail.com','BSc',30000,'2014-09-02','uploads/673_3603073.jpg','tut002','tut002'),
('tut003','Manoj','Kanth',6,'Temple Road','Kalpitiya',77654876,67895432,'manoj@gmail.com','BSc',25000,'2014-08-04','','tut003','tut003'),
('tut004','Mohamed','Aqlam',56,'Kandalkuli Road','Kalpitiya',754865791,322263587,'aqlam@yahoo.com','BA',20000,'2018-09-28','uploads/images (3).jpg','tut004','tut004');

/*Table structure for table `tutor_attendance` */

DROP TABLE IF EXISTS `tutor_attendance`;

CREATE TABLE `tutor_attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `tutor_id` varchar(15) NOT NULL,
  `tutor_name` char(65) NOT NULL,
  `batch_id` varchar(15) NOT NULL,
  `status` char(7) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `tutor_id` (`tutor_id`),
  KEY `sub_id` (`batch_id`),
  KEY `batch_id` (`batch_id`),
  CONSTRAINT `tutor_attendance_ibfk_1` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tutor_attendance_ibfk_2` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tutor_attendance` */

insert  into `tutor_attendance`(`att_id`,`date`,`tutor_id`,`tutor_name`,`batch_id`,`status`) values 
(1,'2014-10-05','tut001','Karuna Karan','math/09/01','Present'),
(3,'2014-10-12','tut001','Karuna Karan','math/09/01','Present'),
(7,'2014-10-04','tut001','Karuna Karan','math/09/02','Absent'),
(8,'2018-09-29','tut001','Najeeb Ameen','math/10/01','Present'),
(9,'2018-09-29','tut002','Akram Mubarak','math/09/01','Absent');

/*Table structure for table `upload` */

DROP TABLE IF EXISTS `upload`;

CREATE TABLE `upload` (
  `name` varchar(30) DEFAULT NULL,
  `batch_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `upload` */

insert  into `upload`(`name`,`batch_id`) values 
('Final Report.pdf','math/09/01');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
