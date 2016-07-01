-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 11:28 AM
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
-- Table structure for table `file_management`
--

CREATE TABLE IF NOT EXISTS `file_management` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_owner` varchar(10) NOT NULL,
  `file_upload_time` varchar(30) DEFAULT NULL,
  `file_path` varchar(50) NOT NULL,
  `file_type` varchar(5) NOT NULL,
  PRIMARY KEY (`file_id`),
  UNIQUE KEY `file_id` (`file_id`),
  KEY `file_type` (`file_type`),
  KEY `file_owner` (`file_owner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE IF NOT EXISTS `hits` (
  `hits_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `hit_by` int(11) NOT NULL,
  PRIMARY KEY (`hits_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `l_id` int(3) NOT NULL AUTO_INCREMENT,
  `lang` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ext` varchar(4) NOT NULL,
  PRIMARY KEY (`lang`),
  UNIQUE KEY `l_id` (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`l_id`, `lang`, `ext`) VALUES
(104, 'batch', 'bat'),
(106, 'c', 'c'),
(107, 'c++', 'cpp'),
(109, 'html', 'html'),
(108, 'java', 'java'),
(105, 'javascript', 'js'),
(101, 'mysql', 'sql'),
(100, 'php', 'php'),
(103, 'plsql', 'sql');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

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
('12345678', '2016-04-28 03:23:36', NULL, 'd9ca086bfce54a3bddce4ea874e3d95e'),
('12345678', '2016-04-28 10:15:54', NULL, 'f24cf02801ad96b2e3f015582be2beb2'),
('12345678', '2016-04-28 10:47:33', NULL, '44835ead0854c88ff144d8ad07951888'),
('12345678', '2016-04-28 10:48:38', NULL, '874cda54f3f7e96aad0d6f6873fc50b3');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_information`
--

CREATE TABLE IF NOT EXISTS `user_login_information` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_reg` varchar(10) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_type` varchar(2) DEFAULT NULL,
  `user_mail` varchar(35) NOT NULL,
  PRIMARY KEY (`user_reg`),
  UNIQUE KEY `user_id` (`user_id`,`user_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1007 ;

--
-- Dumping data for table `user_login_information`
--

INSERT INTO `user_login_information` (`user_id`, `user_reg`, `user_name`, `user_password`, `user_type`, `user_mail`) VALUES
(1000, '11300578', 'ronakjain2012', 'root', 'a', 'ronakjain2012@gmail.com'),
(1006, '12345678', 'bc26e1d58eeb8a07c9710694f46495f2', '63a9f0ea7bb98050796b649e85481845', 'l', 'ac332d34f8cb839ad851a1befb775bee');

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_information`
--

CREATE TABLE IF NOT EXISTS `user_personal_information` (
  `user_id` varchar(30) NOT NULL,
  `u_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `u_nameID` varchar(30) NOT NULL,
  `u_tel` varchar(13) DEFAULT NULL,
  `u_mail` varchar(40) NOT NULL,
  `u_sex` varchar(1) DEFAULT NULL,
  `u_profile` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `u_mail` (`u_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_personal_information`
--

INSERT INTO `user_personal_information` (`user_id`, `u_name`, `u_nameID`, `u_tel`, `u_mail`, `u_sex`, `u_profile`) VALUES
('12345678', 'Ronak Bokaria', 'ronakjain', '8568918757', 'rkrdx@rk.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE IF NOT EXISTS `user_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(32) NOT NULL,
  `post_content` varchar(5000) NOT NULL,
  `post_category` varchar(15) DEFAULT NULL,
  `post_time` varchar(20) NOT NULL,
  `hits` int(11) DEFAULT NULL,
  `post_owner` varchar(10) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_owner` (`post_owner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`post_id`, `post_title`, `post_content`, `post_category`, `post_time`, `hits`, `post_owner`) VALUES
(40, 'hello world', '&lt;?php \necho &quot;hello&quot;;\n?&gt;', 'php', '2016-04-28 10:16:29', NULL, '12345678'),
(41, 'hello world1', '&lt;?php \necho &quot;hello world&quot;;\n?&gt;', 'php', '2016-04-28 10:17:10', NULL, '12345678'),
(42, 'Php', 'Write Something you want to share ...', 'php', '2016-04-28 10:49:01', NULL, '12345678');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file_management`
--
ALTER TABLE `file_management`
  ADD CONSTRAINT `file_management_ibfk_1` FOREIGN KEY (`file_owner`) REFERENCES `user_login_information` (`user_reg`);

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
