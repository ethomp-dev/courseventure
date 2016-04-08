-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 12:54 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courselist_8016`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--
CREATE DATABASE courselist_8016;
USE courselist_8016;

CREATE TABLE `accounts` (
  `name` varchar(9) NOT NULL,
  `school` varchar(34) NOT NULL,
  `userName` varchar(34) NOT NULL,
  `email` varchar(34) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `school`, `userName`, `email`, `password`) VALUES
('Testt', 'UNC Charlotte', 'testt73', 'testt@gmail.com', '12345'),
('test', 'UNC Charlotte', 'testUser', 'test@uncc.edu', 'pw');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CRN` varchar(5) NOT NULL,
  `subject` varchar(5) NOT NULL,
  `course` varchar(6) NOT NULL,
  `section` varchar(4) NOT NULL,
  `credits` varchar(5) NOT NULL,
  `title` varchar(70) NOT NULL,
  `days` varchar(5) NOT NULL,
  `time` varchar(18) NOT NULL,
  `capacity` varchar(4) NOT NULL,
  `instructor` varchar(34) NOT NULL,
  `instructorID` int(11) NOT NULL,
  `location` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CRN`, `subject`, `course`, `section`, `credits`, `title`, `days`, `time`, `capacity`, `instructorID`, `location`) VALUES
('20030', 'ITIS ', '6999', '1', '3', 'SFS Research ', 'R ', '12:30 pm-01:45 pm ', '15', 0, 'WOODW 135 '),
('21246', 'ITIS ', '3130', '1', '3', 'Human-Computer Interfaces ', 'MW ', '02:00 pm-03:15 pm ', '125', 2059461, 'KNNDY 236 '),
('21249', 'ITIS ', '3200', '92', '3', 'Intro to Info Security & Priv ', 'TR ', '05:00 pm-06:15 pm ', '50', 0, 'WOODW 140 '),
('21254', 'ITIS ', '4250', '91', '3', 'Computer Forensics ', 'T ', '06:30 pm-09:15 pm ', '25', 2096224, 'WOODW 125 '),
('21255', 'ITIS ', '5166', 'UOL ', '3', 'Network Based Appl Dvlpmnt ', '  ', 'TBA ', '125', 2056818, 'TBA '),
('21256', 'ITIS ', '5250', '91', '3', 'Computer Forensics ', 'T ', '06:30 pm-09:15 pm ', '15', 2096224, 'WOODW 125 '),
('21257', 'ITIS ', '6200', 'UOL ', '3', 'Prin Info Security & Privacy ', '  ', 'TBA ', '83', 1703144, 'TBA '),
('21263', 'ITIS ', '8200', '91', '3', 'Prin Info Security & Privacy ', 'T ', '06:30 pm-09:15 pm ', '10', 2090731, 'WOODW 135 '),
('21893', 'ITIS ', '2110', '90', '3', 'IT Infrastructure I: Design and Practice ', 'MW ', '05:00 pm-06:15 pm ', '100', 919817, 'CHHS 380 '),
('21894', 'ITIS ', '3320', '1', '3', 'Intro Software Testing & Assur ', 'MW ', '06:30 pm-07:45 pm ', '50', 2090731, 'CHHS 159 '),
('21897', 'ITIS ', '4221', '1', '3', 'Secure Programming and Penetration Testing ', 'TR ', '02:00 pm-03:15 pm ', '20', 0, 'WOODW 140 '),
('21899', 'ITIS ', '6342', '91', '3', 'Info Tech Project Mgmt ', 'T ', '06:30 pm-09:15 pm ', '30', 2070073, 'SMITH 325 '),
('22317', 'ITIS ', '2110L ', 'L01 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'M ', '09:30 am-12:15 pm ', '20', 919817, 'WOODW 302 '),
('22318', 'ITIS ', '2110L ', 'L02 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'T ', '09:30 am-12:15 pm ', '20', 919817, 'WOODW 302 '),
('22319', 'ITIS ', '2110L ', 'L03 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'M ', '02:00 pm-04:45 pm ', '20', 919817, 'WOODW 302 '),
('22320', 'ITIS ', '2300', '1', '3', 'Web Based Application Dvlpment ', 'T ', '12:30 pm-01:45 pm ', '100', 1082549, 'CHHS 380 '),
('22321', 'ITIS ', '3110', '1', '3', 'IT Infrastructure II: Design and Practice ', 'F ', '09:30 am-12:15 pm ', '60', 919817, 'WOODW 155 '),
('22322', 'ITIS ', '3110L ', 'L01 ', '0', 'IT Infrast II: Design/Prac Lab ', 'W ', '02:00 pm-04:45 pm ', '20', 919817, 'WOODW 302 '),
('22323', 'ITIS ', '3110L ', 'L02 ', '0', 'IT Infrast II: Design/Prac Lab ', 'T ', '06:30 pm-09:15 pm ', '20', 919817, 'WOODW 302 '),
('22324', 'ITIS ', '3300', '91', '3', 'Software Req & Project Mgmt ', 'M ', '06:30 pm-09:15 pm ', '50', 0, 'WOODW 125 '),
('22720', 'ITIS ', '2110L ', 'L04 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'T ', '02:00 pm-04:45 pm ', '20', 919817, 'WOODW 302 '),
('23114', 'ITIS ', '4490', '1', '6', 'Professional Internship ', '  ', 'TBA ', '15', 41378, 'TBA '),
('23172', 'ITIS ', '3200', '1', '3', 'Intro to Info Security & Priv ', 'F ', '03:30 pm-06:15 pm ', '50', 2077229, 'WOODW 140 '),
('23573', 'ITIS ', '3110L ', 'L03 ', '0', 'IT Infrast II: Design/Prac Lab ', 'F ', '12:30 pm-03:15 pm ', '20', 919817, 'WOODW 302 '),
('23574', 'ITIS ', '3310', '91', '3', 'Software Arch & Design ', 'W ', '06:30 pm-09:15 pm ', '50', 2070741, 'WOODW 130 '),
('23575', 'ITIS ', '8500', '91', '3', 'Complex Adaptive Systems ', 'R ', '06:30 pm-09:15 pm ', '5', 82114, 'WOODW 135'),
('23591', 'ITIS ', '2211', '260', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'T ', '03:30 pm-06:15 pm ', '20',  336364, 'FRIDY 383 '),
('23592', 'ITIS ', '2211', '264', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'TR ', '03:30 pm-04:45 pm ', '20', 1663146, 'FRET 405 '),
('23602', 'ITIS ', '4180', '91', '3', 'Mobile Application Development ', 'M ', '06:30 pm-09:15 pm ', '20', 1665043, 'KNNDY 236 '),
('23603', 'ITIS ', '5180', '91', '3', 'Mobile Application Development ', 'M ', '06:30 pm-09:15 pm ', '30', 1665043, 'KNNDY 236 '),
('24187', 'ITIS ', '2110L ', 'L05 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'R ', '06:30 pm-09:15 pm ', '20', 919817, 'WOODW 302 '),
('24191', 'ITIS ', '2300L ', 'L01 ', '0', 'Web-Based Application Development Lab ', 'F ', '12:30 pm-01:45 pm ', '50', 1082549, 'WOODW 140 '),
('24192', 'ITIS ', '2300L ', 'L02 ', '0', 'Web-Based Application Development Lab ', 'F ', '02:00 pm-03:15 pm ', '50', 1082549, 'WOODW 140 '),
('24193', 'ITIS ', '3105', '1', '3', 'Server-Side Applications and Data Management ', 'TR ', '03:30 pm-04:45 pm ', '50', 1082549, 'WOODW 140 '),
('24196', 'ITIS ', '1212', '1', '3', 'Intro to Media Programming ', 'F ', '08:00 am-10:45 am ', '100', 41378, 'KNNDY 236'),
('24197', 'ITIS ', '1212L ', 'L01 ', '1', 'Intro to Media Programming Lab ', 'M ', '03:30 pm-06:15 pm ', '50', 41378, 'WOODW 140 '),
('24198', 'ITIS ', '1212L ', 'L02 ', '1', 'Intro to Media Programming Lab ', 'M ', '06:30 pm-09:15 pm ', '50', 41378, 'WOODW 140 '),
('24204', 'ITIS ', '5221', '1', '3', 'Secure Prog Penetr Testing ', 'TR ', '02:00 pm-03:15 pm ', '30', 0, 'WOODW 140 '),
('24212', 'ITIS ', '6410', '91', '3', 'Personaliz and Recomender Syst ', 'W ', '06:30 pm-09:15 pm ', '30', 253779, 'KNNDY 234 '),
('24215', 'ITIS ', '6500', '91', '3', 'Complex Adaptive Systems ', 'R ', '06:30 pm-09:15 pm ', '14', 82114, 'WOODW 135 '),
('24220', 'ITIS ', '2211', '261', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'T ', '06:30 pm-09:15 pm ', '20', 336364, 'DENNY 102 '),
('24224', 'ITIS ', '2211', '266', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'WF ', '09:30 am-10:45 am ', '20', 1759479, 'FRIDY 142 '),
('24226', 'ITIS ', '2211', '267', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'WF ', '11:00 am-12:45 pm ', '20', 1759479, 'FRIDY 116 '),
('24382', 'ITIS ', '6011', '1', '4', 'Interaction Design Studio ', 'F ', '08:00 am-10:45 am ', '10', 2059461, 'WOODW 308 '),
('24383', 'ITIS ', '8011', '1', '4', 'Interaction Design Studio ', 'F ', '08:00 am-10:45 am ', '5', 2059461, 'WOODW 308 '),
('24402', 'ITIS ', '4011', '1', '4', 'Interaction Design Studio ', 'F ', '08:00 am-10:45 am ', '15', 2059461, 'WOODW 308 '),
('25487', 'ITIS ', '1213', '1', '4', 'Media Programming ', 'F ', '02:00 pm-04:45 pm ', '100', 41378, 'KNNDY 236 '),
('25488', 'ITIS ', '1213L ', 'L01 ', '0', 'Media Programming Lab ', 'W ', '12:30 pm-03:15 pm ', '50', 41378, 'WOODW 140 '),
('25489', 'ITIS ', '1213L ', 'L02 ', '0', 'Media Programming Lab ', 'W ', '03:30 pm-06:15 pm ', '50', 41378, 'WOODW 140 '),
('25522', 'ITIS ', '3150', '91', '3', 'Rapid Prototyping and Interface Building ', 'W ', '06:30 pm-09:15 pm ', '30',  2059461, 'WOODW 140 '),
('25633', 'ITIS ', '6112', '2', '3', 'Software Syst Des & Impl ', 'TR ', '05:00 pm-06:15 pm ', '10',  1964428, 'KNNDY 236 '),
('25634', 'ITIS ', '6112', '91', '3', 'Software Syst Des & Impl ', 'F ', '06:30 pm-09:15 pm ', '25',  1735860, 'WOODW 125 '),
('25635', 'ITIS ', '8112', '91', '3', 'Software Syst Des & Impl ', 'F ', '06:30 pm-09:15 pm ', '5',  1735860, 'WOODW 125 '),
('25636', 'ITIS ', '6200', '91', '3', 'Prin Info Security & Privacy ', 'T ', '06:30 pm-09:15 pm ', '30', 2090731, 'WOODW 135 '),
('25639', 'ITIS ', '6230', '91', '3', 'Info Infrastructure Protection ', 'R ', '06:30 pm-09:15 pm ', '25', 1408118, 'WOODW 155 '),
('25640', 'ITIS ', '6362', '91', '3', 'Info Tech Eth, Pol & Secur ', 'M ', '06:30 pm-09:15 pm ', '25', 0, 'WOODW 155 '),
('25744', 'ITIS ', '6177', '91', '3', 'System Integration ', 'W ', '06:30 pm-09:15 pm ', '30', 1952803, 'WOODW 155 '),
('25885', 'ITIS ', '6342', '92', '3', 'Info Tech Project Mgmt ', 'R ', '06:30 pm-09:15 pm ', '30', 2070073, 'SMITH 201 '),
('25890', 'ITIS ', '8230', '91', '3', 'Info Infrastructure Protection ', 'R ', '06:30 pm-09:15 pm ', '10', 2077229, 'WOODW 155 '),
('27191', 'ITIS ', '6112', '1', '3', 'Software Syst Des & Impl ', 'TR ', '08:00 am-09:15 am ', '10',  2094002, 'KNNDY 236 '),
('27306', 'ITIS ', '6320', '91', '3', 'Cloud Data Storage ', 'F ', '06:30 pm-09:15 pm ', '30', 1512368, 'WOODW 154 '),
('27307', 'ITIS ', '8320', '91', '3', 'Cloud Data Storage ', 'F ', '06:30 pm-09:15 pm ', '5', 1512368, 'WOODW 154 '),
('27351', 'ITIS ', '6162', '1', '3', 'Knowledge Discovery in Databases ', 'F ', '11:00 am-01:45 pm ', '10', 0, 'WOODW 130 '),
('27352', 'ITIS ', '6162', '91', '3', 'Knowledge Discovery in Databases ', 'T ', '05:00 pm-07:45 pm ', '10', 1944396, 'WOODW 130 '),
('27428', 'ITIS ', '6163', '91', '3', 'Data Warehousing ', 'F ', '06:30 pm-09:15 pm ', '10', 0, 'WOODW 155 '),
('27506', 'ITIS ', '6010', '1', '3', 'Topics in Software & Info Syst: Foundations of Health Informatics ', 'TR ', '03:30 pm-04:45 pm ', '20', 0, 'WOODW 135 '),
('27509', 'ITIS ', '8010', '1', '3', 'Topics in Software & Info Syst: Foundations of Health Informatics ', 'TR ', '03:30 pm-04:45 pm ', '20', 0, 'WOODW 135 '),
('27512', 'ITIS ', '6120', 'U91 ', '3', 'Applied Databases ', 'R ', '06:30 pm-09:15 pm ', '25', 253779, 'CITY 902 '),
('27515', 'ITIS ', '8120', 'U91 ', '3', 'Applied Databases ', 'R ', '06:30 pm-09:15 pm ', '5', 253779, 'CITY 902 '),
('27517', 'ITIS ', '6162', '92', '3', 'Knowledge Discovery in Databases ', 'R ', '06:30 pm-09:15 pm ', '30', 0, 'WOODW 125 '),
('27522', 'ITIS ', '8410', '91', '3', 'Personaliz and Recomender Syst ', 'W ', '06:30 pm-09:15 pm ', '5', 253779, 'KNNDY 234 '),
('27527', 'ITIS ', '4166', '1', '3', 'Network Based App Dvlpment ', 'TR ', '02:00 pm-03:15 pm ', '50', 2077229, 'WOODW 135 '),
('27535', 'ITIS ', '6420', '1', '3', 'Usable Security and Privacy ', 'W ', '03:30 pm-06:15 pm ', '25', 1377271, 'SMITH 306 '),
('27536', 'ITIS ', '8420', '1', '3', 'Usable Security and Privacy ', 'W ', '03:30 pm-06:15 pm ', '5',  1377271, 'SMITH 306 '),
('27658', 'ITIS ', '2211', '263', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'TR ', '02:00 pm-03:15 pm ', '20', 1663146, 'BURSN 116 '),
('27661', 'ITIS ', '2211', '262', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', ' ', 'TBA ', '20', 50213, 'TBA '),
('27696', 'ITIS ', '6150', '2', '3', 'Software Assurance ', 'MW ', '03:30 pm-04:45 pm ', '25', 1936465, 'SMITH 352 '),
('27697', 'ITIS ', '8150', '1', '3', 'Software Assurance ', 'MW ', '03:30 pm-04:42 pm ', '5', 1936465, 'SMITH 352 '),
('27805', 'ITIS ', '4420', '1', '3', 'Usable Security & Privacy ', 'W ', '03:30 pm-06:15 pm ', '10', 1377271, 'SMITH 306 '),
('27854', 'ITIS ', '8200', 'UOL ', '3', 'Prin Info Security & Privacy ', '  ', 'TBA ', '15', 1703144, 'TBA '),
('27866', 'ITIS ', '6350', '91', '3', 'Rapid Prototyping Des Patterns ', 'W ', '06:30 pm-09:15 pm ', '13', 2059461, 'WOODW 140 '),
('27867', 'ITIS ', '8350', '91', '3', 'Rapid Prototyping Des Patterns ', 'W ', '06:30 pm-09:15 pm ', '2', 2059461, 'WOODW 140 ');

-- --------------------------------------------------------

--
-- Table structure for table `coursestaught`
--

CREATE TABLE `coursestaught` (
  `teacherID` varchar(9) NOT NULL,
  `CRN` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `CRN` varchar(5) NOT NULL,
  `instructor` varchar(34) NOT NULL,
  `studentID` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentName` varchar(34) NOT NULL,
  `studentID` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `index` int(20) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(34) NOT NULL,
  `middleName` varchar(34),
  `lastName` varchar(34) NOT NULL,
  `teacherID` varchar(9) NOT NULL,
  `email` varchar(34) NOT NULL,
  PRIMARY KEY (`index`)
);

--
-- Indexes for dumped tables
--
INSERT INTO `teacher` (`firstName`,`middleName`,`lastName`, `teacherID`, `email`) VALUES
('Norman', 'Bruce', 'Long',41378, 'nblong@uncc.edu'),
('Alberto','','Gonzalez',2059461,'agonza32@uncc.edu'),
('Angelina','Asenova','Tzacheva',1944396,'aatzache@uncc.edu'),
('Anthony','James','Kombol',919817,'tkombol@uncc.edu'),
('Atif','','Mohammad',0,'amoham19@uncc.edu'),
('Bei-Tseng','','Chu',81469,'billchu@uncc.edu'),
('Cynthia','Leigh','Burke',0,'cmoore87@uncc.edu'),
('Dai','Chun','Cheng',1735860,'dccheng@uncc.edu'),
('Dale-Marie','Cretia','Anne Wilson',1082549,'DaleMarie.Wilson@uncc.edu'),
('David','Casey','Wilson',253779,'davils@uncc.edu'),
('Ehab','','Al-Shaer',1408118,'ealshaer@uncc.edu'),
('Eleanor','L','Ritterskamp',336364,'elritter@uncc.edu'),
('Fadi','Fuad','Moshen',0,'fmohsen@uncc.edu'),
('Fredric','B','Williams',0,'FWilliams@uncc.edu'),
('Harini','','Ramaprasad',0,'hramapra@uncc.edu'),
('Heather','Richter','Lipford',1377271,'richter@uncc.edu'),
('Iosif','Ivanovich','Yeremulk',1952803,'iiyeremu@uncc.edu'),
('Jayne','A','Tristan',50213,'jatrista@uncc.edu'),
('Lance','Scott','Peterman',2070741,'lspeterm@uncc.edu'),
('Meera','','Sridhar',1936465,'msridhar@uncc.edu'),
('Mirsad','','Hadzikadic',82114,'mirsad@uncc.edu'),
('Mohamed','','Shehab',1665043,'mshehab@uncc.edu'),
('Moshen','M','Dorodchi',1964428,'Mohsen.Dorodchi@uncc.edu'),
('Saad','Dawoud','Hamdan',2090731,'shamdan@uncc.edu'),
('Sean','E','Riley',1759479,'seriley@uncc.edu'),
('Thomas','J','Kitrick',15459,'tjkitric@uncc.edu'),
('Victor','Gibson','Grose',2096224,'vggrose@uncc.edu'),
('Weichao','','Wang',1703144,'WeichaoWang@uncc.edu'),
('William','Ray','Jarrett',1663146,'wjarret3@uncc.edu'),
('Xi','','Niu',0,'xniu2@uncc.edu'),
('Yaorong','','Ge',0,'yge@uncc.edu'),
('Yong','','Ge',0,'yge1@uncc.edu'),
('Yongge','','Wang',1512368,'yonwang@uncc.edu'),
('Zahid','','Anwar',2077229,'zanwar@uncc.edu');

