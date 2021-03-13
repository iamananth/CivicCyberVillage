-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2020 at 09:56 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `civic`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `rentid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `rentid`, `companyid`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `companyjob`
--

CREATE TABLE IF NOT EXISTS `companyjob` (
  `jobid` int(11) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(50) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`jobid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `companyjob`
--

INSERT INTO `companyjob` (`jobid`, `jobname`, `descr`, `qualification`, `experience`, `cid`) VALUES
(2, 'Share Point Developer', 'we want a share point developer', 'MCA', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `companyreg`
--

CREATE TABLE IF NOT EXISTS `companyreg` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `companyreg`
--

INSERT INTO `companyreg` (`cid`, `cname`, `address`, `phone`, `email`, `password`, `status`) VALUES
(1, 'CCS', 'Infopark', '7412589630', 'ccs@gmail.com', '123', 1),
(2, 'LCC', 'Maraindrive', '7485142500', 'lcc@gmail.com', '123', 1),
(3, 'Soft Solution', 'Kochi Maraindrive', '8522741100', 'soft@gmail.com', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_reg`
--

CREATE TABLE IF NOT EXISTS `employee_reg` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(50) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `adhar` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee_reg`
--

INSERT INTO `employee_reg` (`empid`, `jobname`, `ename`, `adhar`, `gender`, `phone`, `email`, `password`) VALUES
(1, 'Tile', 'Vinod', '147852963000', 'Male', '8529631470', 'vinod@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE IF NOT EXISTS `jobapply` (
  `jid` int(11) NOT NULL AUTO_INCREMENT,
  `jobid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `resume` varchar(50) NOT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`jid`, `jobid`, `sid`, `resume`) VALUES
(1, 2, 1, 'photo-1545447011-a875021237ea.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`, `utype`) VALUES
('vishnu@gmail.com', '123', 'Student'),
('ccs@gmail.com', '123', 'Company'),
('admin@gmail.com', 'admin', 'Admin'),
('lcc@gmail.com', '123', 'Company'),
('soft@gmail.com', '123', 'Company'),
('vinod@gmail.com', '123', 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE IF NOT EXISTS `maintenance` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `compid` int(11) NOT NULL,
  `maintenance` varchar(50) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `completiondate` varchar(50) NOT NULL,
  `design` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`mid`, `compid`, `maintenance`, `descr`, `budget`, `completiondate`, `design`, `status`) VALUES
(1, 1, 'Tile', 'We want to change all the tiles in our floor', '25000', '2019-08-30', 'marazzi_sistemu_000.jpg', 'Alloted');

-- --------------------------------------------------------

--
-- Table structure for table `rent_request`
--

CREATE TABLE IF NOT EXISTS `rent_request` (
  `rentreqid` int(11) NOT NULL AUTO_INCREMENT,
  `rentid` int(11) NOT NULL,
  `companyid` int(11) NOT NULL,
  PRIMARY KEY (`rentreqid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rent_request`
--

INSERT INTO `rent_request` (`rentreqid`, `rentid`, `companyid`) VALUES
(4, 1, 2),
(6, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rent_space`
--

CREATE TABLE IF NOT EXISTS `rent_space` (
  `rentid` int(11) NOT NULL AUTO_INCREMENT,
  `compid` int(11) NOT NULL,
  `space` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`rentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rent_space`
--

INSERT INTO `rent_space` (`rentid`, `compid`, `space`, `amount`, `status`) VALUES
(1, 1, '900', 25000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE IF NOT EXISTS `studentreg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `passout` int(11) NOT NULL,
  `workexp` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`sid`, `sname`, `house`, `district`, `location`, `phone`, `email`, `qualification`, `passout`, `workexp`, `password`) VALUES
(1, 'Vishnu', 'LCC', 'Ernakulam', 'Menaka', '7418529630', 'vishnu@gmail.com', 'MCA', 2017, 0, '123');

-- --------------------------------------------------------

--
-- Table structure for table `work_allotment`
--

CREATE TABLE IF NOT EXISTS `work_allotment` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `work_allotment`
--

INSERT INTO `work_allotment` (`wid`, `mid`, `eid`) VALUES
(1, 1, 1);
