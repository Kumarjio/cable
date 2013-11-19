-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2013 at 11:18 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `s_c_star_cable`
--

-- --------------------------------------------------------

--
-- Table structure for table `sc_admin`
--

CREATE TABLE IF NOT EXISTS `sc_admin` (
  `adminid` varchar(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(50) NOT NULL,
  `avtar` varchar(150) NOT NULL DEFAULT 'no-image.png',
  `language` tinyint(2) NOT NULL DEFAULT '1',
  `last_login_details` datetime NOT NULL,
  `created_datetime` datetime NOT NULL,
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_admin`
--

INSERT INTO `sc_admin` (`adminid`, `username`, `email`, `password`, `avtar`, `language`, `last_login_details`, `created_datetime`, `modify_datetime`) VALUES
('SCADMIN0001', 'Soyab Rana', 'ranasoyab@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '273e59f3f638eb30c532beba210eb0e9.jpg', 1, '2013-11-20 02:20:16', '2013-10-10 22:07:02', '2013-11-02 22:56:05'),
('SCADMIN0002', 'Chandubhai Rana', 'ranachandubhai@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'no-image.png', 1, '2005-01-01 00:43:23', '2013-10-10 22:07:40', '2013-10-10 22:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `sc_customer`
--

CREATE TABLE IF NOT EXISTS `sc_customer` (
  `customerid` varchar(11) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `middlename` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `housenumber` varchar(10) NOT NULL,
  `society` varchar(11) NOT NULL,
  `date_of_reg` date NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `avtar` varchar(100) NOT NULL DEFAULT 'no-image.png',
  `language` tinyint(2) NOT NULL DEFAULT '1',
  `setup_box_id` varchar(11) NOT NULL,
  `monthly_rate` int(4) NOT NULL,
  `created_id` varchar(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `modify_id` varchar(11) NOT NULL,
  `modify_datetime` datetime NOT NULL,
  KEY `created_id` (`created_id`,`modify_id`),
  KEY `modify_id` (`modify_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_customer`
--

INSERT INTO `sc_customer` (`customerid`, `firstname`, `middlename`, `lastname`, `email`, `password`, `housenumber`, `society`, `date_of_reg`, `mobileno`, `avtar`, `language`, `setup_box_id`, `monthly_rate`, `created_id`, `created_datetime`, `modify_id`, `modify_datetime`) VALUES
('SC_C_0002', 'Chandubhai', 'R', 'Rana', 'ranachandubhai@gmail.com', NULL, '770', 'SC_SO_0001', '2013-12-11', '9974122333', 'no-image.png', 1, 'SC_SB_0002', 250, 'SCADMIN0001', '2005-01-01 01:23:32', 'SCADMIN0001', '2005-01-01 01:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `sc_monthly_payment`
--

CREATE TABLE IF NOT EXISTS `sc_monthly_payment` (
  `monthly_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(11) NOT NULL,
  `payment_year` int(4) NOT NULL,
  `payment_month` int(2) NOT NULL,
  `amount` int(5) NOT NULL,
  `created_id` varchar(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `modify_id` varchar(11) NOT NULL,
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`monthly_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sc_monthly_payment`
--


-- --------------------------------------------------------

--
-- Table structure for table `sc_setupbox`
--

CREATE TABLE IF NOT EXISTS `sc_setupbox` (
  `setup_box_id` varchar(11) NOT NULL,
  `model` varchar(25) NOT NULL,
  `type` enum('NR','HD') NOT NULL,
  `stb_no` varchar(25) NOT NULL,
  `cfa_no` varchar(25) NOT NULL,
  `date_of_purchase` date NOT NULL,
  `created_id` varchar(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `modify_id` varchar(11) NOT NULL,
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`setup_box_id`),
  KEY `created_id` (`created_id`,`modify_datetime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_setupbox`
--

INSERT INTO `sc_setupbox` (`setup_box_id`, `model`, `type`, `stb_no`, `cfa_no`, `date_of_purchase`, `created_id`, `created_datetime`, `modify_id`, `modify_datetime`) VALUES
('SC_SB_0001', 'DTC 2050', 'HD', '251121811582911', 'H 56465', '2013-11-03', 'SCADMIN0001', '2013-11-03 01:21:15', 'SCADMIN0001', '2013-11-03 10:40:58'),
('SC_SB_0002', 'DTC 2050', 'NR', '251121811551276', 'H 56451', '2013-11-03', 'SCADMIN0001', '2013-11-03 01:21:31', 'SCADMIN0001', '2013-11-03 02:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `sc_society`
--

CREATE TABLE IF NOT EXISTS `sc_society` (
  `societyid` varchar(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `created_id` varchar(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  `modify_id` varchar(11) NOT NULL,
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`societyid`),
  KEY `created_id` (`created_id`,`modify_id`),
  KEY `modify_id` (`modify_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_society`
--

INSERT INTO `sc_society` (`societyid`, `name`, `created_id`, `created_datetime`, `modify_id`, `modify_datetime`) VALUES
('SC_SO_0001', 'Shastrikunj', 'SCADMIN0001', '2013-11-03 02:16:32', 'SCADMIN0001', '2013-11-03 02:22:22'),
('SC_SO_0002', 'Chandralok', 'SCADMIN0001', '2005-01-01 00:10:14', 'SCADMIN0001', '2005-01-01 00:10:14');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sc_customer`
--
ALTER TABLE `sc_customer`
  ADD CONSTRAINT `sc_customer_ibfk_1` FOREIGN KEY (`created_id`) REFERENCES `sc_admin` (`adminid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sc_customer_ibfk_2` FOREIGN KEY (`modify_id`) REFERENCES `sc_admin` (`adminid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sc_society`
--
ALTER TABLE `sc_society`
  ADD CONSTRAINT `sc_society_ibfk_1` FOREIGN KEY (`created_id`) REFERENCES `sc_admin` (`adminid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sc_society_ibfk_2` FOREIGN KEY (`modify_id`) REFERENCES `sc_admin` (`adminid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
