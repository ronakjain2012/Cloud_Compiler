-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 12:56 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cc`
--
CREATE DATABASE IF NOT EXISTS `cc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cc`;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

DROP TABLE IF EXISTS `tokens`;
CREATE TABLE IF NOT EXISTS `tokens` (
  `user_id` varchar(10) NOT NULL,
  `session_start` varchar(30) NOT NULL,
  `session_end` varchar(30) DEFAULT NULL,
  `token` varchar(32) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`user_id`, `session_start`, `session_end`, `token`) VALUES
('11300578', '2016-04-24 21:05:55', NULL, 'f76ffcdd41f0b8ee23204ff1f2c4c7fe'),
('11300578', '2016-04-24 21:06:41', NULL, '70a5f4d79d27d04893972b818cb4f64b'),
('11300578', '2016-04-24 22:21:08', NULL, 'f13e458332fed4a53e1d5afbe46d3966'),
('11300578', '2016-04-24 22:35:00', NULL, 'f6444de27720e282562adc30e1f0b967'),
('11300578', '2016-04-25 00:44:30', NULL, 'eff17372f77e3b6f7d4f2f7743a6ea90'),
('11300578', '2016-04-25 22:44:33', NULL, '7d3aa8044d0642653afec0520e2805c5'),
('11300578', '2016-04-26 00:04:57', NULL, '106bf7cd9f60a5c35e0bb6d72225c98c');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_information`
--

DROP TABLE IF EXISTS `user_login_information`;
CREATE TABLE IF NOT EXISTS `user_login_information` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_reg` varchar(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_type` varchar(2) DEFAULT NULL,
  `user_mail` varchar(35) NOT NULL,
  PRIMARY KEY (`user_reg`),
  UNIQUE KEY `user_id` (`user_id`,`user_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `user_login_information`
--

INSERT INTO `user_login_information` (`user_id`, `user_reg`, `user_name`, `user_password`, `user_type`, `user_mail`) VALUES
(1000, '11300578', 'ronakjain2012', 'root', 'a', 'ronakjain2012@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_information`
--

DROP TABLE IF EXISTS `user_personal_information`;
CREATE TABLE IF NOT EXISTS `user_personal_information` (
  `user_id` varchar(30) NOT NULL,
  `u_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `u_tel` varchar(13) DEFAULT NULL,
  `u_mail` varchar(40) NOT NULL,
  `u_sex` varchar(1) DEFAULT NULL,
  `u_profile` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `u_mail` (`u_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login_information` (`user_reg`);

--
-- Constraints for table `user_personal_information`
--
ALTER TABLE `user_personal_information`
  ADD CONSTRAINT `user_personal_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login_information` (`user_reg`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
