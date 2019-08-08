-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2011 at 12:43 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userT` varchar(1) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `TP` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `cardnumbr` double NOT NULL,
  PRIMARY KEY  (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userT`, `Lname`, `Email`, `pw`, `TP`, `address`, `province`, `city`, `nic`, `cardnumbr`) VALUES
('U', 'somathilaka', 'pavimks@gmail.com', 'XgA9q', 716307308, 'No:98,Aruppola,Kandy', 'Kandy', '', '897263696V', 7287786541),
('A', 'Rathnayake', 'pavithrasomathilaka@yahoo.com', '123', 718908909, 'Gampaha road,Colombo', 'Gampaha', 'Gampaha', '807678908V', 1234);
