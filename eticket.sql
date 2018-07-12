-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2011 at 03:48 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE IF NOT EXISTS `bus_info` (
  `bus_name` varchar(30) NOT NULL,
  `bus_number` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`bus_name`, `bus_number`) VALUES
('TOYOTA', 'LF346AAA'),
('MECURY', 'DF567HF'),
('LAG/Toyota Camry', 'LAG/AA123kJA');

-- --------------------------------------------------------

--
-- Table structure for table `bus_type`
--

CREATE TABLE IF NOT EXISTS `bus_type` (
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_type`
--

INSERT INTO `bus_type` (`name`) VALUES
('AC'),
('NON-AC');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE IF NOT EXISTS `company_info` (
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`name`, `address`, `email`, `phone`) VALUES
('Hertz Car Rental', 'Muritala Muhammad Airport Ikeja Lagos', 'info@c-ileasing.com', '080887766');

-- --------------------------------------------------------

--
-- Table structure for table `dep_time`
--

CREATE TABLE IF NOT EXISTS `dep_time` (
  `time` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_time`
--

INSERT INTO `dep_time` (`time`) VALUES
('12:00a.m'),
('12:00p.m');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `name` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`name`, `contact`, `phone`) VALUES
('Lagos', 'Jibowu', '2345656778899'),
('ABUJA', 'ftgvbhnjk', '3456789'),
('KANO', '3456789', '4356789');

-- --------------------------------------------------------

--
-- Table structure for table `pos_bus`
--

CREATE TABLE IF NOT EXISTS `pos_bus` (
  `date` date NOT NULL,
  `route` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  `bus_type` varchar(30) NOT NULL,
  `bus_number` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pos_bus`
--


-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `bus_type` varchar(30) NOT NULL,
  `route` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`bus_type`, `route`, `amount`) VALUES
('AC', 'ABJ-ABR', '4000'),
('NON-AC', 'ABJ-ABR', '3500'),
('AC', 'ABJ-BEN', '6000'),
('NON-AC', 'ABJ-BEN', '5500'),
('AC', 'ABJ-EKT', '5500'),
('NON-AC', 'ABJ-EKT', '5000'),
('AC', 'ABJ-LAG', '7000'),
('NON-AC', 'ABJ-LAG', '6500'),
('AC', 'ABJ-SOK', '8500'),
('NON-AC', 'ABJ-SOK', '8000'),
('AC', 'LAG-BEN', '10000'),
('NON-AC', 'LAG-BEN', '9000');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `name` varchar(30) NOT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`name`) VALUES
('Administrator'),
('User');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `code` varchar(30) NOT NULL,
  `route_name` varchar(30) NOT NULL,
  UNIQUE KEY `code` (`code`),
  UNIQUE KEY `route_name` (`route_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`code`, `route_name`) VALUES
('BEN', 'BENIN'),
('LAG', 'LAGOS'),
('SOK', 'SOKOTO'),
('ABJ', 'ABUJA'),
('ABR', 'ANAMBRA'),
('EKT', 'EKITI'),
('WAR', 'WARRI');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `date_issue` date NOT NULL,
  `date_travel` date NOT NULL,
  `route` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `ticketid` varchar(30) NOT NULL,
  `fare_amount` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `total_amount` varchar(30) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `vehicle_number` varchar(30) NOT NULL,
  `dep_time` varchar(30) NOT NULL,
  `bus_type` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  UNIQUE KEY `ticketid` (`ticketid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`date_issue`, `date_travel`, `route`, `firstname`, `lastname`, `ticketid`, `fare_amount`, `phone_number`, `total_amount`, `payment_status`, `vehicle_number`, `dep_time`, `bus_type`, `user`, `location`) VALUES
('2010-01-07', '2010-01-07', 'ABJ-BEN', 'henry', 'Amedu', 'ABJ-BEN0023', '6000', '456', '6000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2010-01-07', '2010-01-07', 'ABJ-BEN', 'kenneth', 'Emordi', 'ABJ-BEN0024', '5500', '456789090-', '5500', 'Paid', 'DF567HF', ' 12:00p.m', 'NON-AC', 'admin', 'Abuja'),
('2010-01-08', '2010-01-07', 'LAG-BEN', 'kenneth', 'Emordi', 'LAG-BEN0026', '9000', '43567890', '9000', 'Paid', 'DF567HF', ' 12:00a.m', 'NON-AC', 'tagbo', 'Lagos'),
('2010-01-08', '2010-01-08', 'ABJ-SOK', 'henry', 'Seun', 'ABJ-SOK0027', '8000', '546789', '8000', 'Paid', 'DF567HF', ' 12:00a.m', 'NON-AC', 'peter', 'ABUJA'),
('2010-01-08', '2010-01-08', 'ABJ-SOK', 'Nosa', 'Emordi', 'ABJ-SOK0028', '8500', '54678', '8500', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'peter', 'ABUJA'),
('2010-01-13', '2010-01-13', 'ABJ-BEN', 'kenneth', 'Emordi', 'ABJ-BEN0029', '6000', '5456777777', '6000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2010-10-02', '2010-10-02', 'ABJ-ABR', 'Fami', 'kenneth', 'ABJ-ABR0030', '4000', '2348062583326', '4000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-05-16', '0000-00-00', '', '', '', '0031', '', '', '', 'Pending', '', ' ', '', '', ''),
('2011-06-02', '2011-06-02', 'ABJ-ABR', 'ii', 'iiiqi', 'ABJ-ABR0037', '4000', 'i', '4000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-06-02', '2011-06-02', 'ABJ-ABR', 'uu', 'iuu', 'ABJ-ABR0038', '3500', 'u', '3500', 'Paid', 'DF567HF', ' 12:00a.m', 'NON-AC', 'admin', 'Abuja'),
('2011-06-02', '2011-06-02', 'ABJ-ABR', 'uu', 'iuu', 'ABJ-ABR0039', '3500', 'u', '3500', 'Paid', 'DF567HF', ' 12:00a.m', 'NON-AC', 'admin', 'Abuja'),
('2011-06-02', '2011-06-02', 'ABJ-ABR', 'io', 'ioioioio', 'ABJ-ABR0040', '4000', 'io', '4000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-06-02', '2011-06-02', 'ABJ-ABR', 'io', 'ioioioio', 'ABJ-ABR0041', '4000', 'io', '4000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-06-02', '2011-06-02', 'ABJ-ABR', 'io', 'ioioioio', 'ABJ-ABR0042', '4000', 'io', '4000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-06-02', '2011-06-02', 'ABJ-ABR', 'io', 'ioioioio', 'ABJ-ABR0043', '4000', 'io', '4000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-07-25', '2011-07-25', 'ABJ-ABR', 'erer', 'tt', 'ABJ-ABR0044', '3500', 'ee', '3500', 'Paid', 'DF567HF', ' 12:00a.m', 'NON-AC', 'admin', 'Abuja'),
('2011-08-10', '0000-00-00', '', 'nhhh', 'juuj', '0046', '', 'hh', '', 'Pending', '', ' ', '', '', ''),
('2011-08-24', '2011-08-24', 'ABJ-ABR', 'jj', 'ade', 'ABJ-ABR0047', '4000', 'j8888', '4000', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-08-29', '2011-08-29', 'ABJ-EKT', 'Ojo', 'ade', 'ABJ-EKT0048', '5500', '098877', '5500', 'Paid', 'DF567HF', ' 12:00a.m', 'AC', 'admin', 'Abuja'),
('2011-08-29', '0000-00-00', '', 'u', 'uu', '0049', '', 'jjj', '', 'Paid', '', ' ', '', '', ''),
('2011-08-29', '2011-08-30', 'ABJ-EKT', 'j', 'j', 'ABJ-EKT0052', '5009', 'j', '5009', 'Paid', 'DF567HF', ' 12:00a.m', 'NON-AC', 'admin', 'Abuja'),
('2011-08-29', '2011-08-29', 'ABJ-BEN', 'ii', 'ii', 'ABJ-BEN0053', '55', 'i', '55', 'Paid', 'LAG/AA123kJA', ' 12:00a.m', 'NON-AC', 'admin', 'Abuja');

-- --------------------------------------------------------

--
-- Table structure for table `ticketid`
--

CREATE TABLE IF NOT EXISTS `ticketid` (
  `number` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketid`
--

INSERT INTO `ticketid` (`number`) VALUES
('54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `location` varchar(50) NOT NULL,
  `right` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `location`, `right`) VALUES
('admin', 'netdata', 'Abuja', 'Administrator'),
('ola', 'ola', 'Lagos Zone 1', 'User'),
('ife', 'ife', 'Abuja', 'User'),
('olaife', 'olaife', 'Maiduguri', 'Administrator'),
('seun', 'biyi', 'Lekki Lagos', 'Administrator'),
('kemi', 'otubu', 'Lekki Lagos', 'User'),
('funmi', 'olakunle', 'Lekki Lagos', 'User'),
('akeem', 'netdata', 'Lagos', 'Administrator'),
('tagbo', '1234', 'Lagos', 'User'),
('peter', '1234', 'ABUJA', 'User'),
('johnson', '1234', 'KANO', 'User');
