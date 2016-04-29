-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2016 at 03:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courseventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--
CREATE DATABASE courseventure;
USE courseventure;

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
('Andrew De', 'UNC Charlotte', 'adennis9', 'adennis9@uncc.edu', 'a'),
('Testt', 'UNC Charlotte', 'testt73', 'testt@gmail.com', '12345'),
('test', 'UNC Charlotte', 'testUser', 'test@uncc.edu', 'pw'),
('andrew', 'UNC Charlotte', 'x', 'adennis9@uncc.edu', 'pw');

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
  `location` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CRN`, `subject`, `course`, `section`, `credits`, `title`, `days`, `time`, `capacity`, `location`) VALUES
('20030', 'ITIS ', '6999', '1', '3', 'SFS Research ', 'R ', '12:30 pm-01:45 pm ', '15', 'WOODW 135 '),
('21246', 'ITIS ', '3130', '1', '3', 'Human-Computer Interfaces ', 'MW ', '02:00 pm-03:15 pm ', '125', 'KNNDY 236 '),
('21249', 'ITIS ', '3200', '92', '3', 'Intro to Info Security & Priv ', 'TR ', '05:00 pm-06:15 pm ', '50', 'WOODW 140 '),
('21254', 'ITIS ', '4250', '91', '3', 'Computer Forensics ', 'T ', '06:30 pm-09:15 pm ', '25', 'WOODW 125 '),
('21255', 'ITIS ', '5166', 'UOL ', '3', 'Network Based Appl Dvlpmnt ', '  ', 'TBA ', '125', 'TBA '),
('21256', 'ITIS ', '5250', '91', '3', 'Computer Forensics ', 'T ', '06:30 pm-09:15 pm ', '15', 'WOODW 125 '),
('21257', 'ITIS ', '6200', 'UOL ', '3', 'Prin Info Security & Privacy ', '  ', 'TBA ', '83', 'TBA '),
('21263', 'ITIS ', '8200', '91', '3', 'Prin Info Security & Privacy ', 'T ', '06:30 pm-09:15 pm ', '10', 'WOODW 135 '),
('21893', 'ITIS ', '2110', '90', '3', 'IT Infrastructure I: Design and Practice ', 'MW ', '05:00 pm-06:15 pm ', '100', 'CHHS 380 '),
('21894', 'ITIS ', '3320', '1', '3', 'Intro Software Testing & Assur ', 'MW ', '06:30 pm-07:45 pm ', '50', 'CHHS 159 '),
('21897', 'ITIS ', '4221', '1', '3', 'Secure Programming and Penetration Testing ', 'TR ', '02:00 pm-03:15 pm ', '20', 'WOODW 140 '),
('21899', 'ITIS ', '6342', '91', '3', 'Info Tech Project Mgmt ', 'T ', '06:30 pm-09:15 pm ', '30', 'SMITH 325 '),
('22317', 'ITIS ', '2110L ', 'L01 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'M ', '09:30 am-12:15 pm ', '20', 'WOODW 302 '),
('22318', 'ITIS ', '2110L ', 'L02 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'T ', '09:30 am-12:15 pm ', '20', 'WOODW 302 '),
('22319', 'ITIS ', '2110L ', 'L03 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'M ', '02:00 pm-04:45 pm ', '20', 'WOODW 302 '),
('22320', 'ITIS ', '2300', '1', '3', 'Web Based Application Dvlpment ', 'T ', '12:30 pm-01:45 pm ', '100', 'CHHS 380 '),
('22321', 'ITIS ', '3110', '1', '3', 'IT Infrastructure II: Design and Practice ', 'F ', '09:30 am-12:15 pm ', '60', 'WOODW 155 '),
('22322', 'ITIS ', '3110L ', 'L01 ', '0', 'IT Infrast II: Design/Prac Lab ', 'W ', '02:00 pm-04:45 pm ', '20', 'WOODW 302 '),
('22323', 'ITIS ', '3110L ', 'L02 ', '0', 'IT Infrast II: Design/Prac Lab ', 'T ', '06:30 pm-09:15 pm ', '20', 'WOODW 302 '),
('22324', 'ITIS ', '3300', '91', '3', 'Software Req & Project Mgmt ', 'M ', '06:30 pm-09:15 pm ', '50', 'WOODW 125 '),
('22720', 'ITIS ', '2110L ', 'L04 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'T ', '02:00 pm-04:45 pm ', '20', 'WOODW 302 '),
('23114', 'ITIS ', '4490', '1', '6', 'Professional Internship ', '  ', 'TBA ', '15', 'TBA '),
('23172', 'ITIS ', '3200', '1', '3', 'Intro to Info Security & Priv ', 'F ', '03:30 pm-06:15 pm ', '50', 'WOODW 140 '),
('23573', 'ITIS ', '3110L ', 'L03 ', '0', 'IT Infrast II: Design/Prac Lab ', 'F ', '12:30 pm-03:15 pm ', '20', 'WOODW 302 '),
('23574', 'ITIS ', '3310', '91', '3', 'Software Arch & Design ', 'W ', '06:30 pm-09:15 pm ', '50', 'WOODW 130 '),
('23575', 'ITIS ', '8500', '91', '3', 'Complex Adaptive Systems ', 'R ', '06:30 pm-09:15 pm ', '5', 'WOODW 135'),
('23591', 'ITIS ', '2211', '260', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'T ', '03:30 pm-06:15 pm ', '20', 'FRIDY 383 '),
('23592', 'ITIS ', '2211', '264', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'TR ', '03:30 pm-04:45 pm ', '20', 'FRET 405 '),
('23602', 'ITIS ', '4180', '91', '3', 'Mobile Application Development ', 'M ', '06:30 pm-09:15 pm ', '20', 'KNNDY 236 '),
('23603', 'ITIS ', '5180', '91', '3', 'Mobile Application Development ', 'M ', '06:30 pm-09:15 pm ', '30', 'KNNDY 236 '),
('24187', 'ITIS ', '2110L ', 'L05 ', '0', 'IT Infrastrct I:Desn/Pract Lab ', 'R ', '06:30 pm-09:15 pm ', '20', 'WOODW 302 '),
('24191', 'ITIS ', '2300L ', 'L01 ', '0', 'Web-Based Application Development Lab ', 'F ', '12:30 pm-01:45 pm ', '50', 'WOODW 140 '),
('24192', 'ITIS ', '2300L ', 'L02 ', '0', 'Web-Based Application Development Lab ', 'F ', '02:00 pm-03:15 pm ', '50', 'WOODW 140 '),
('24193', 'ITIS ', '3105', '1', '3', 'Server-Side Applications and Data Management ', 'TR ', '03:30 pm-04:45 pm ', '50', 'WOODW 140 '),
('24196', 'ITIS ', '1212', '1', '3', 'Intro to Media Programming ', 'F ', '08:00 am-10:45 am ', '100', 'KNNDY 236'),
('24197', 'ITIS ', '1212L ', 'L01 ', '1', 'Intro to Media Programming Lab ', 'M ', '03:30 pm-06:15 pm ', '50', 'WOODW 140 '),
('24198', 'ITIS ', '1212L ', 'L02 ', '1', 'Intro to Media Programming Lab ', 'M ', '06:30 pm-09:15 pm ', '50', 'WOODW 140 '),
('24204', 'ITIS ', '5221', '1', '3', 'Secure Prog Penetr Testing ', 'TR ', '02:00 pm-03:15 pm ', '30', 'WOODW 140 '),
('24212', 'ITIS ', '6410', '91', '3', 'Personaliz and Recomender Syst ', 'W ', '06:30 pm-09:15 pm ', '30', 'KNNDY 234 '),
('24215', 'ITIS ', '6500', '91', '3', 'Complex Adaptive Systems ', 'R ', '06:30 pm-09:15 pm ', '14', 'WOODW 135 '),
('24220', 'ITIS ', '2211', '261', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'T ', '06:30 pm-09:15 pm ', '20', 'DENNY 102 '),
('24224', 'ITIS ', '2211', '266', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'WF ', '09:30 am-10:45 am ', '20', 'FRIDY 142 '),
('24226', 'ITIS ', '2211', '267', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'WF ', '11:00 am-12:45 pm ', '20', 'FRIDY 116 '),
('24382', 'ITIS ', '6011', '1', '4', 'Interaction Design Studio ', 'F ', '08:00 am-10:45 am ', '10', 'WOODW 308 '),
('24383', 'ITIS ', '8011', '1', '4', 'Interaction Design Studio ', 'F ', '08:00 am-10:45 am ', '5', 'WOODW 308 '),
('24402', 'ITIS ', '4011', '1', '4', 'Interaction Design Studio ', 'F ', '08:00 am-10:45 am ', '15', 'WOODW 308 '),
('25487', 'ITIS ', '1213', '1', '4', 'Media Programming ', 'F ', '02:00 pm-04:45 pm ', '100', 'KNNDY 236 '),
('25488', 'ITIS ', '1213L ', 'L01 ', '0', 'Media Programming Lab ', 'W ', '12:30 pm-03:15 pm ', '50', 'WOODW 140 '),
('25489', 'ITIS ', '1213L ', 'L02 ', '0', 'Media Programming Lab ', 'W ', '03:30 pm-06:15 pm ', '50', 'WOODW 140 '),
('25522', 'ITIS ', '3150', '91', '3', 'Rapid Prototyping and Interface Building ', 'W ', '06:30 pm-09:15 pm ', '30', 'WOODW 140 '),
('25633', 'ITIS ', '6112', '2', '3', 'Software Syst Des & Impl ', 'TR ', '05:00 pm-06:15 pm ', '10', 'KNNDY 236 '),
('25634', 'ITIS ', '6112', '91', '3', 'Software Syst Des & Impl ', 'F ', '06:30 pm-09:15 pm ', '25', 'WOODW 125 '),
('25635', 'ITIS ', '8112', '91', '3', 'Software Syst Des & Impl ', 'F ', '06:30 pm-09:15 pm ', '5', 'WOODW 125 '),
('25636', 'ITIS ', '6200', '91', '3', 'Prin Info Security & Privacy ', 'T ', '06:30 pm-09:15 pm ', '30', 'WOODW 135 '),
('25639', 'ITIS ', '6230', '91', '3', 'Info Infrastructure Protection ', 'R ', '06:30 pm-09:15 pm ', '25', 'WOODW 155 '),
('25640', 'ITIS ', '6362', '91', '3', 'Info Tech Eth, Pol & Secur ', 'M ', '06:30 pm-09:15 pm ', '25', 'WOODW 155 '),
('25744', 'ITIS ', '6177', '91', '3', 'System Integration ', 'W ', '06:30 pm-09:15 pm ', '30', 'WOODW 155 '),
('25885', 'ITIS ', '6342', '92', '3', 'Info Tech Project Mgmt ', 'R ', '06:30 pm-09:15 pm ', '30', 'SMITH 201 '),
('25890', 'ITIS ', '8230', '91', '3', 'Info Infrastructure Protection ', 'R ', '06:30 pm-09:15 pm ', '10', 'WOODW 155 '),
('27191', 'ITIS ', '6112', '1', '3', 'Software Syst Des & Impl ', 'TR ', '08:00 am-09:15 am ', '10', 'KNNDY 236 '),
('27306', 'ITIS ', '6320', '91', '3', 'Cloud Data Storage ', 'F ', '06:30 pm-09:15 pm ', '30', 'WOODW 154 '),
('27307', 'ITIS ', '8320', '91', '3', 'Cloud Data Storage ', 'F ', '06:30 pm-09:15 pm ', '5', 'WOODW 154 '),
('27351', 'ITIS ', '6162', '1', '3', 'Knowledge Discovery in Databases ', 'F ', '11:00 am-01:45 pm ', '10', 'WOODW 130 '),
('27352', 'ITIS ', '6162', '91', '3', 'Knowledge Discovery in Databases ', 'T ', '05:00 pm-07:45 pm ', '10', 'WOODW 130 '),
('27428', 'ITIS ', '6163', '91', '3', 'Data Warehousing ', 'F ', '06:30 pm-09:15 pm ', '10', 'WOODW 155 '),
('27506', 'ITIS ', '6010', '1', '3', 'Topics in Software & Info Syst: Foundations of Health Informatics ', 'TR ', '03:30 pm-04:45 pm ', '20', 'WOODW 135 '),
('27509', 'ITIS ', '8010', '1', '3', 'Topics in Software & Info Syst: Foundations of Health Informatics ', 'TR ', '03:30 pm-04:45 pm ', '20', 'WOODW 135 '),
('27512', 'ITIS ', '6120', 'U91 ', '3', 'Applied Databases ', 'R ', '06:30 pm-09:15 pm ', '25', 'CITY 902 '),
('27515', 'ITIS ', '8120', 'U91 ', '3', 'Applied Databases ', 'R ', '06:30 pm-09:15 pm ', '5', 'CITY 902 '),
('27517', 'ITIS ', '6162', '92', '3', 'Knowledge Discovery in Databases ', 'R ', '06:30 pm-09:15 pm ', '30', 'WOODW 125 '),
('27522', 'ITIS ', '8410', '91', '3', 'Personaliz and Recomender Syst ', 'W ', '06:30 pm-09:15 pm ', '5', 'KNNDY 234 '),
('27527', 'ITIS ', '4166', '1', '3', 'Network Based App Dvlpment ', 'TR ', '02:00 pm-03:15 pm ', '50', 'WOODW 135 '),
('27535', 'ITIS ', '6420', '1', '3', 'Usable Security and Privacy ', 'W ', '03:30 pm-06:15 pm ', '25', 'SMITH 306 '),
('27536', 'ITIS ', '8420', '1', '3', 'Usable Security and Privacy ', 'W ', '03:30 pm-06:15 pm ', '5', 'SMITH 306 '),
('27658', 'ITIS ', '2211', '263', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', 'TR ', '02:00 pm-03:15 pm ', '20', 'BURSN 116 '),
('27661', 'ITIS ', '2211', '262', '3', 'Ethical Issues in Personal, Professional, and Public Life: Technology ', ' ', 'TBA ', '20', 'TBA '),
('27696', 'ITIS ', '6150', '2', '3', 'Software Assurance ', 'MW ', '03:30 pm-04:45 pm ', '25', 'SMITH 352 '),
('27697', 'ITIS ', '8150', '1', '3', 'Software Assurance ', 'MW ', '03:30 pm-04:42 pm ', '5', 'SMITH 352 '),
('27805', 'ITIS ', '4420', '1', '3', 'Usable Security & Privacy ', 'W ', '03:30 pm-06:15 pm ', '10', 'SMITH 306 '),
('27854', 'ITIS ', '8200', 'UOL ', '3', 'Prin Info Security & Privacy ', '  ', 'TBA ', '15', 'TBA '),
('27866', 'ITIS ', '6350', '91', '3', 'Rapid Prototyping Des Patterns ', 'W ', '06:30 pm-09:15 pm ', '13', 'WOODW 140 '),
('27867', 'ITIS ', '8350', '91', '3', 'Rapid Prototyping Des Patterns ', 'W ', '06:30 pm-09:15 pm ', '2', 'WOODW 140 ');

-- --------------------------------------------------------

--
-- Table structure for table `coursestaught`
--

CREATE TABLE `coursestaught` (
  `teacherID` varchar(9) NOT NULL,
  `CRN` varchar(5) NOT NULL,
  `semesterID` int(11) DEFAULT '1016',
  `coursestaughtID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursestaught`
--

INSERT INTO `coursestaught` (`teacherID`, `CRN`, `semesterID`, `coursestaughtID`) VALUES
('41378', '24196', 1016, 1),
('41378', '24198', 1016, 2),
('41378', '24197', 1016, 3),
('41378', '25487', 1016, 4),
('41378', '25489', 1016, 5),
('41378', '25488', 1016, 6),
('919817', '21893', 1016, 7),
('919817', '22319', 1016, 8),
('919817', '24187', 1016, 9),
('919817', '22720', 1016, 10),
('919817', '22318', 1016, 11),
('919817', '22317', 1016, 12),
('336364', '24220', 1016, 13),
('1663146', '27658', 1016, 14),
('1663146', '23592', 1016, 15),
('336364', '23591', 1016, 16),
('1759479', '24226', 1016, 17),
('1759479', '24224', 1016, 18),
('50213', '27661', 1016, 19),
('1082549', '22320', 1016, 20),
('1082549', '24192', 1016, 21),
('1082549', '24191', 1016, 22),
('1082549', '24193', 1016, 23),
('919817', '22321', 1016, 24),
('919817', '22323', 1016, 25),
('919817', '22322', 1016, 26),
('919817', '23573', 1016, 27),
('2059461', '21246', 1016, 28),
('2059461', '25522', 1016, 29),
('81469', '21249', 1016, 30),
('2077229', '23172', 1016, 31),
('2130060', '22324', 1016, 32),
('2070741', '23574', 1016, 33),
('2090731', '21894', 1016, 34),
('2059461', '24402', 1016, 35),
('2077229', '27527', 1016, 36),
('1665043', '23602', 1016, 37),
('81469', '21897', 1016, 38),
('2096224', '21254', 1016, 39),
('1377271', '27805', 1016, 40),
('41378', '23114', 1016, 41),
('1665043', '23603', 1016, 42),
('81469', '24204', 1016, 43),
('2096224', '21256', 1016, 44),
('2130068', '27506', 1016, 45),
('2059461', '24382', 1016, 46),
('1964428', '25633', 1016, 47),
('1735860', '25634', 1016, 48),
('253779', '27512', 1016, 49),
('1936465', '27696', 1016, 50),
('1944396', '27352', 1016, 51),
('2130066', '27517', 1016, 52),
('2130069', '27351', 1016, 53),
('2130059', '27428', 1016, 54),
('1952803', '25744', 1016, 55),
('2090731', '25636', 1016, 56),
('1703144', '21257', 1016, 57),
('1408118', '25639', 1016, 58),
('1512368', '27306', 1016, 59),
('2059461', '27866', 1016, 60),
('2130063', '25640', 1016, 61),
('253779', '24212', 1016, 62),
('1377271', '27535', 1016, 63),
('82114', '24215', 1016, 64),
('81469', '20030', 1016, 65),
('2130068', '27509', 1016, 66),
('2059461', '24383', 1016, 67),
('1735860', '25635', 1016, 68),
('253779', '27515', 1016, 69),
('1936465', '27697', 1016, 70),
('2090731', '21263', 1016, 71),
('1703144', '27854', 1016, 72),
('2077229', '25890', 1016, 73),
('1512368', '27307', 1016, 74),
('2059461', '27867', 1016, 75),
('253779', '27522', 1016, 76),
('1377271', '27536', 1016, 77),
('82114', '23575', 1016, 78),
('2130062', '21255', 1016, 79);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `userName` varchar(34) NOT NULL,
  `coursestaughtID` int(11) NOT NULL,
  `enrollmentID` int(11) NOT NULL
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
  `index` int(20) NOT NULL,
  `firstName` varchar(34) NOT NULL,
  `middleName` varchar(34) DEFAULT NULL,
  `lastName` varchar(34) NOT NULL,
  `teacherID` varchar(9) NOT NULL,
  `email` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`index`, `firstName`, `middleName`, `lastName`, `teacherID`, `email`) VALUES
(1, 'Norman', 'Bruce', 'Long', '41378', 'nblong@uncc.edu'),
(2, 'Alberto', '', 'Gonzalez', '2059461', 'agonza32@uncc.edu'),
(3, 'Angelina', 'Asenova', 'Tzacheva', '1944396', 'aatzache@uncc.edu'),
(4, 'Anthony', 'James', 'Kombol', '919817', 'tkombol@uncc.edu'),
(5, 'Atif', '', 'Mohammad', '2130059', 'amoham19@uncc.edu'),
(6, 'Bei-Tseng', '', 'Chu', '81469', 'billchu@uncc.edu'),
(7, 'Cynthia', 'Leigh', 'Burke', '2130060', 'cmoore87@uncc.edu'),
(8, 'Dai', 'Chun', 'Cheng', '1735860', 'dccheng@uncc.edu'),
(9, 'Dale-Marie', 'Cretia', 'Anne Wilson', '1082549', 'DaleMarie.Wilson@uncc.edu'),
(10, 'David', 'Casey', 'Wilson', '253779', 'davils@uncc.edu'),
(11, 'Ehab', '', 'Al-Shaer', '1408118', 'ealshaer@uncc.edu'),
(12, 'Eleanor', 'L', 'Ritterskamp', '336364', 'elritter@uncc.edu'),
(13, 'Fadi', 'Fuad', 'Moshen', '2130062', 'fmohsen@uncc.edu'),
(14, 'Fredric', 'B', 'Williams', '2130063', 'FWilliams@uncc.edu'),
(15, 'Harini', '', 'Ramaprasad', '2130064', 'hramapra@uncc.edu'),
(16, 'Heather', 'Richter', 'Lipford', '1377271', 'richter@uncc.edu'),
(17, 'Iosif', 'Ivanovich', 'Yeremulk', '1952803', 'iiyeremu@uncc.edu'),
(18, 'Jayne', 'A', 'Tristan', '50213', 'jatrista@uncc.edu'),
(19, 'Lance', 'Scott', 'Peterman', '2070741', 'lspeterm@uncc.edu'),
(20, 'Meera', '', 'Sridhar', '1936465', 'msridhar@uncc.edu'),
(21, 'Mirsad', '', 'Hadzikadic', '82114', 'mirsad@uncc.edu'),
(22, 'Mohamed', '', 'Shehab', '1665043', 'mshehab@uncc.edu'),
(23, 'Moshen', 'M', 'Dorodchi', '1964428', 'Mohsen.Dorodchi@uncc.edu'),
(24, 'Saad', 'Dawoud', 'Hamdan', '2090731', 'shamdan@uncc.edu'),
(25, 'Sean', 'E', 'Riley', '1759479', 'seriley@uncc.edu'),
(26, 'Thomas', 'J', 'Kitrick', '15459', 'tjkitric@uncc.edu'),
(27, 'Victor', 'Gibson', 'Grose', '2096224', 'vggrose@uncc.edu'),
(28, 'Weichao', '', 'Wang', '1703144', 'WeichaoWang@uncc.edu'),
(29, 'William', 'Ray', 'Jarrett', '1663146', 'wjarret3@uncc.edu'),
(30, 'Xi', '', 'Niu', '2130066', 'xniu2@uncc.edu'),
(31, 'Yaorong', '', 'Ge', '2130068', 'yge@uncc.edu'),
(32, 'Yong', '', 'Ge', '2130069', 'yge1@uncc.edu'),
(33, 'Yongge', '', 'Wang', '1512368', 'yonwang@uncc.edu'),
(34, 'Zahid', '', 'Anwar', '2077229', 'zanwar@uncc.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `coursestaught`
--
ALTER TABLE `coursestaught`
  ADD PRIMARY KEY (`coursestaughtID`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollmentID`),
  ADD KEY `FK_accounts` (`userName`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursestaught`
--
ALTER TABLE `coursestaught`
  MODIFY `coursestaughtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollmentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `index` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `FK_accounts` FOREIGN KEY (`userName`) REFERENCES `accounts` (`userName`),
  ADD CONSTRAINT `FK_coursestaught` FOREIGN KEY (`enrollmentID`) REFERENCES `coursestaught` (`coursestaughtID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
