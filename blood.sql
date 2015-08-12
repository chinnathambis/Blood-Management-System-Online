-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2014 at 01:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood`
--
CREATE DATABASE IF NOT EXISTS `blood` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blood`;

-- --------------------------------------------------------

--
-- Table structure for table `dregister`
--

CREATE TABLE IF NOT EXISTS `dregister` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(75) NOT NULL,
  `pwd` varchar(50) NOT NULL DEFAULT '',
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`pwd`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `fname` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dregister`
--

INSERT INTO `dregister` (`username`, `name`, `sex`, `dob`, `bgroup`, `address`, `mobile`, `email`, `pwd`, `comment`) VALUES
('knnhhh', 'kkvkvkv', 'Female', '1990-04-01', 'O-', 'kjkjbkjjkkj', 66, '\r\n', '', ''),
('a', 'b', 'Male', '1988-04-17', 'O-', 'calicut', 2147483647, 'abc@gmail.com\r\n', '123', 'hii'),
('a1', 'kkvkvkv', 'Female', '1990-04-01', 'O-', 'kjkjbkjjkkj', 66545452, 'jhvhjvjvj\r\n', '123456', 'bbvkvkvhv'),
('amit', 'yadav', 'Male', '1992-09-18', 'AB-', 'u.p.', 123123123, 'lkjnvdskjfnvjkdk@gmail.com\r\n', '123456789', 'ascacajcbasaj aksbabsh '),
('abc', 'abc', 'Male', '1990-04-08', 'B-', 'nitc ', 1236547800, 'abcz@gmail.com\r\n', '321', 'hurry!!!'),
('cxx', 'xsxs', 'Female', '1990-04-16', 'AB+', 'hulululu', 1234665850, 'ew@nac.com\r\n', '456321', 'sdka skcas'),
('parwej', 'alam', 'Male', '1991-11-02', 'AB-', 'fd-5 nitc hostel nit calicut ', 2147483647, 'parvejalam123@gmail.com\r\n', 'abc', 'hii'),
('', '', 'Male', '1990-04-08', 'B-', 'nitc ', 1236547800, 'abczvc@gmail.com\r\n', 'hii', 'hurry!!!');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalregister`
--

CREATE TABLE IF NOT EXISTS `hospitalregister` (
  `username` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `haddress` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  PRIMARY KEY (`passwd`),
  UNIQUE KEY `contact` (`contact`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalregister`
--

INSERT INTO `hospitalregister` (`username`, `hname`, `haddress`, `state`, `city`, `contact`, `email`, `passwd`) VALUES
('kmct1', 'kmct', 'katangal calicut kerala', 'kerala', 'calicut', 123456, 'kmct@yahoo.com\r\n', '123'),
('pmch1', 'pmch', 'ashok rajpath ', 'bihar', 'patna', 1234657890, 'xyz@abc.com\r\n', '123456'),
('bms5', 'BMS Hospital', 'calicut', 'kerala', 'calicut', 2147483647, 'kjmah.com\r\n', '526341'),
('aiims', 'AIIMS', 'AIIMS , new delhi', 'delhi', 'delhi', 412536987, 'aiims.com\r\n', 'aiims');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetail`
--

CREATE TABLE IF NOT EXISTS `patientdetail` (
  `pname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `pgender` text NOT NULL,
  `bgroup` text NOT NULL,
  `disease` varchar(50) NOT NULL,
  `requiredate` date NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdetail`
--

INSERT INTO `patientdetail` (`pname`, `age`, `pgender`, `bgroup`, `disease`, `requiredate`, `comment`) VALUES
('ravi', 22, 'Male', 'A-', 'maleria', '2014-04-27', 'urgent requirement hurry up !'),
('ravi', 22, 'Male', 'A-', 'maleria', '2014-04-27', 'urgent requirement hurry up !'),
('ravi', 22, 'Male', 'A-', 'maleria', '2014-04-27', 'urgent requirement hurry up !'),
('shabbir', 23, 'Male', 'B+', 'maleria', '2014-04-30', 'urgently require!!!!'),
('', 0, 'Male', 'A-', '', '0000-00-00', ''),
('fdvsd', 45, 'Male', 'A-', 'fs', '2014-04-08', 'fs'),
('bfgv', 45, 'Male', 'A-', 'fgh', '0000-00-00', 'dfgh'),
('bfgv', 45, 'Male', 'A-', 'fgh', '0000-00-00', 'dfgh'),
('fgnf', 22, 'Male', 'A-', 'maleria', '0000-00-00', 'trgertg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
