-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2013 at 12:15 AM
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
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(50) NOT NULL,
  `avtar` varchar(150) NOT NULL DEFAULT 'no-image.png',
  `last_login_details` datetime NOT NULL,
  `created_datetime` datetime NOT NULL,
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sc_admin`
--

INSERT INTO `sc_admin` (`adminid`, `username`, `email`, `password`, `avtar`, `last_login_details`, `created_datetime`, `modify_datetime`) VALUES
(1, 'Soyab Rana', 'ranasoyab@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'soyab.jpeg', '2013-10-10 23:31:20', '2013-10-10 22:07:02', '2013-10-10 22:07:11'),
(2, 'Chandubhai Rana', 'ranachandubhai@gmail.com', '7b38aade7a181efd234869aa1f5570f8', 'no-image.png', '0000-00-00 00:00:00', '2013-10-10 22:07:40', '2013-10-10 22:07:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
