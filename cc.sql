-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 12:18 PM
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

DROP TABLE IF EXISTS `file_management`;
CREATE TABLE IF NOT EXISTS `file_management` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_owner` varchar(10) NOT NULL,
  `file_upload_time` varchar(30) DEFAULT NULL,
  `file_name` varchar(30) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `file_type` varchar(5) NOT NULL,
  PRIMARY KEY (`file_id`),
  UNIQUE KEY `file_id` (`file_id`),
  KEY `file_type` (`file_type`),
  KEY `file_owner` (`file_owner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Truncate table before insert `file_management`
--

TRUNCATE TABLE `file_management`;
--
-- Dumping data for table `file_management`
--

INSERT INTO `file_management` (`file_id`, `file_owner`, `file_upload_time`, `file_name`, `file_path`, `file_type`) VALUES
(1, '12345678', '2016-05-25 23:52:31', 'Binery.cpp', 'myfiles/Binery.cpp', 'cpp'),
(2, '12345678', '2016-05-26 00:00:29', 'doubly.cpp', 'myfiles/doubly.cpp', 'cpp'),
(3, '12345678', '2016-05-26 00:02:31', 'doubly.cpp', 'myfiles/doubly.cpp', 'cpp'),
(4, '12345678', '2016-05-26 00:14:59', 'files.php', 'myfiles/files.php', 'php'),
(5, '11303229', '2016-05-26 01:31:23', 'posts.php', 'myfiles/posts.php', 'php'),
(6, '12345678', '2016-05-26 01:49:10', 'jquery.min.js', 'myfiles/jquery.min.js', 'js'),
(7, '12345678', '2016-05-26 01:49:37', 'jquerry.html', 'myfiles/jquerry.html', 'html'),
(8, '11301852', '2016-05-26 11:58:45', 'Binery.cpp', 'myfiles/Binery.cpp', 'cpp'),
(9, '11301852', '2016-05-26 11:59:22', 'index.php', 'myfiles/index.php', 'php'),
(10, '12345678', '2016-05-26 12:32:26', 'demoslider.html', 'myfiles/demoslider.html', 'html'),
(11, '11306023', '2016-05-26 12:54:14', 'codes.php', 'myfiles/codes.php', 'php'),
(12, '11305801', '2016-05-26 14:18:20', 'about.php', 'myfiles/about.php', 'php'),
(13, '11305801', '2016-05-26 14:18:53', 'jobs.php', 'myfiles/jobs.php', 'php'),
(14, '11305801', '2016-05-26 14:19:28', 'mailhtml.html', 'myfiles/mailhtml.html', 'html');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `l_id` int(3) NOT NULL AUTO_INCREMENT,
  `lang` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ext` varchar(4) NOT NULL,
  `links` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`lang`),
  UNIQUE KEY `l_id` (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Truncate table before insert `language`
--

TRUNCATE TABLE `language`;
--
-- Dumping data for table `language`
--

INSERT INTO `language` (`l_id`, `lang`, `ext`, `links`) VALUES
(104, 'batch', 'bat', 'http://localhost/CC/Batch_Compiler.php'),
(106, 'c', 'c', 'http://localhost/CC/c_Compiler.php'),
(107, 'c++', 'cpp', 'http://localhost/CC/C++_Compiler.php'),
(109, 'html', 'html', 'http://localhost/CC/HTML_Compiler.php'),
(108, 'java', 'java', 'http://localhost/CC/Java_Compiler.php'),
(105, 'javascript', 'js', 'http://localhost/CC/Javascript_Compiler.php'),
(101, 'mysql', 'sql', 'http://localhost/CC/SQL_Compiler.php'),
(100, 'php', 'php', 'http://localhost/CC/PHP_Compiler.php'),
(103, 'plsql', 'sql', 'http://localhost/CC/plsql_Compiler.php');

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
-- Truncate table before insert `tokens`
--

TRUNCATE TABLE `tokens`;
--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`user_id`, `session_start`, `session_end`, `token`) VALUES
('12345678', '2016-04-28 03:23:36', NULL, 'd9ca086bfce54a3bddce4ea874e3d95e'),
('12345678', '2016-04-28 10:15:54', NULL, 'f24cf02801ad96b2e3f015582be2beb2'),
('12345678', '2016-04-28 10:47:33', NULL, '44835ead0854c88ff144d8ad07951888'),
('12345678', '2016-04-28 10:48:38', NULL, '874cda54f3f7e96aad0d6f6873fc50b3'),
('12345678', '2016-04-28 13:12:57', NULL, '53294613cc789bd03dcdce33b83f916b'),
('12345678', '2016-04-29 10:38:18', NULL, 'f8f0feb82230294ebae6aa9dd148fadf'),
('12345678', '2016-04-29 10:38:31', NULL, '511ece482c7dd2a59cd494d778bf0253'),
('12345678', '2016-04-29 10:39:39', NULL, 'da264d55e29c748b6d0f7cb47b57193a'),
('12345678', '2016-04-29 11:50:33', NULL, 'b5188d4f2d3a980c4181336aaab02424'),
('12345678', '2016-04-29 13:29:22', NULL, '25d80d646290c18c83e05ffb56dae066'),
('12345678', '2016-04-29 15:17:33', NULL, '24f84e425c6892cc93ac601b36954f01'),
('12345678', '2016-05-05 12:09:03', NULL, 'e0d34d5c78af96dc7918007cf709a01d'),
('12345678', '2016-05-24 02:04:56', NULL, 'e1a60b084df65432e786fccf5d4b4b44'),
('12345678', '2016-05-24 11:20:39', NULL, 'd56ffaa91a04536934a986026af619e4'),
('12345678', '2016-05-24 12:44:18', NULL, 'e670f2feed1a3c58b340802de2213e6c'),
('12345678', '2016-05-25 14:28:18', NULL, '1ef2882885fcb70d742eea007abda938'),
('12345678', '2016-05-25 17:42:54', NULL, '570a6b9948bdf9c2ca63da8061fc2aaf'),
('12345678', '2016-05-25 17:51:26', NULL, '04c76633034f75643c8cead60ac67987'),
('12345678', '2016-05-25 17:54:29', NULL, '708ba0c50bd07cee8e507739913d9948'),
('12345678', '2016-05-25 17:58:05', NULL, '1d1fa80dc2cc145fbcc1118ceac3deb3'),
('12345678', '2016-05-25 18:10:56', NULL, '45134d40c027195de932090d5fea192a'),
('12345678', '2016-05-25 18:13:39', NULL, 'e31ce20e77178725dfe7b14cd51d867e'),
('12345678', '2016-05-25 19:20:22', NULL, '2cff4b7557df8fdf2ef034f687307951'),
('12345678', '2016-05-25 20:19:09', NULL, '6db123af60ed4be29cc21c047bd1ca9e'),
('12345678', '2016-05-25 21:04:26', NULL, 'dd8b3d2214154bb2deeddea77bd530b8'),
('12345678', '2016-05-25 21:33:22', NULL, '028f038994843a26e042da3736aae386'),
('12345678', '2016-05-25 22:42:02', NULL, '1546dca8b110b8d61684f260809c6ba2'),
('12345678', '2016-05-25 23:08:54', NULL, '0c01315deb84ae3048f807411c02752e'),
('12345678', '2016-05-26 00:11:17', NULL, '18fdcccd16dad52aa9af6436888a5a57'),
('12345678', '2016-05-26 01:12:14', NULL, 'ed4d04665e5d137845cefd7627b3e8bd'),
('12345678', '2016-05-26 01:29:33', NULL, 'cb1351d014d8bdc6b972e3a70cc406a1'),
('11303229', '2016-05-26 01:31:01', NULL, '61185acd0108569bbcb754d2a6d132df'),
('12345678', '2016-05-26 01:40:01', NULL, '13e97fbac43bae940482e4691af5cce1'),
('12345678', '2016-05-26 10:58:27', NULL, '8577bd9913f5e2f3af33e6ec033b80e5'),
('12345678', '2016-05-26 11:11:32', NULL, 'ef55b06cf73a535824b490df617b44e9'),
('11301852', '2016-05-26 11:57:26', NULL, 'e750bb90edbdbbbedab02c2d8b10b0ba'),
('12345678', '2016-05-26 12:13:02', NULL, '282ad7baac2d576d8f5825190b9b017a'),
('12345678', '2016-05-26 12:30:24', NULL, 'b88f6e8c106e2c2d3c4e83ed769a077d'),
('12345678', '2016-05-26 12:42:54', NULL, 'ac27c6eb11e5771455e26341bb53b379'),
('11306023', '2016-05-26 12:53:15', NULL, '0dc49e93d3e5b39b18a270a2cccd46a9'),
('12345678', '2016-05-26 14:03:50', NULL, 'dbbbe8d4c41fd46c0ef57279fd06bff0'),
('11305801', '2016-05-26 14:15:38', NULL, '4a1a01a453fdafa0027d74fb9c040e88'),
('11305801', '2016-05-26 14:26:03', NULL, '81c80bd01e497da5aa70f3947479c760'),
('11305801', '2016-05-26 14:46:32', NULL, 'bdeccfa751b4a8dd105c0cd4439e3c3c'),
('11305801', '2016-05-26 14:48:22', NULL, '8761f1195cd590bb03075a29d7e05843'),
('12345678', '2016-05-26 15:00:44', NULL, '6f2d3d296ad41541f2f9f068d2428b1b'),
('12345678', '2016-05-26 15:04:13', NULL, '10954d1a7f1226efb5136d303902fa3d'),
('12345678', '2016-05-26 15:34:53', NULL, 'ca593c665a717eda0892b95dd4256f1b'),
('12345678', '2016-05-26 22:55:13', NULL, '143ffa31eebc955cc2645f952ec0c9d6'),
('12345678', '2016-05-27 02:35:03', NULL, '3eb4484a3c436ad88462811e4932325b'),
('12345678', '2016-05-27 10:56:26', NULL, '62b68279096b5b0569ecb0680a5f981f'),
('12345678', '2016-05-27 11:30:39', NULL, '2c1c2ba733316bcfaa418a20c6a20578'),
('12345678', '2016-05-27 13:11:43', NULL, 'b4cca7ecbca338d42701b584144762a5'),
('12345678', '2016-05-27 14:16:14', NULL, '8977ed521e33cc898f765f2b9a19e12f'),
('12345678', '2016-05-28 22:08:39', NULL, '798207bf9db36f6d73fd0318e1b3c0a2');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_information`
--

DROP TABLE IF EXISTS `user_login_information`;
CREATE TABLE IF NOT EXISTS `user_login_information` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_reg` varchar(10) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_type` varchar(2) DEFAULT NULL,
  `user_mail` varchar(35) NOT NULL,
  PRIMARY KEY (`user_reg`),
  UNIQUE KEY `user_id` (`user_id`,`user_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1013 ;

--
-- Truncate table before insert `user_login_information`
--

TRUNCATE TABLE `user_login_information`;
--
-- Dumping data for table `user_login_information`
--

INSERT INTO `user_login_information` (`user_id`, `user_reg`, `user_name`, `user_password`, `user_type`, `user_mail`) VALUES
(1007, '11224', 'cac5ff630494aa784ce97b9fafac2500', '202cb962ac59075b964b07152d234b70', 'l', 'a7b0d96a51d11c8822a14ab1e63e968c'),
(1000, '11300578', 'ronakjain2012', 'root', 'a', 'ronakjain2012@gmail.com'),
(1010, '11301852', '576ff83021506aa687dc36b6202bf116', '25f9e794323b453885f5181f1b624d0b', 'l', '9191def7f871921dc4ed12cba265a0bb'),
(1009, '11303229', '4d069b4e77b1d1804bead1d3bea762b8', '4d069b4e77b1d1804bead1d3bea762b8', 'l', '1762c2acf8724ee326d2aa89642d3b2a'),
(1012, '11305801', 'c676be341a6b0d515529dac3a8d3081f', '06170874d4195c552ddb88579b092f3f', 'l', '36ef0b008ba428772076d1d60c024cec'),
(1011, '11306023', 'f685454f94f2c480df9512a3ae907596', 'e10adc3949ba59abbe56e057f20f883e', 'l', '778495fb15a70c2705f844ed2c1bb841'),
(1008, '11310009', '3b6beb51e76816e632a40d440eab0097', '63a9f0ea7bb98050796b649e85481845', 'l', 'eccba1b60b918cab2a3a689b403144c3'),
(1006, '12345678', 'bc26e1d58eeb8a07c9710694f46495f2', '63a9f0ea7bb98050796b649e85481845', 'l', 'ac332d34f8cb839ad851a1befb775bee');

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_information`
--

DROP TABLE IF EXISTS `user_personal_information`;
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
-- Truncate table before insert `user_personal_information`
--

TRUNCATE TABLE `user_personal_information`;
--
-- Dumping data for table `user_personal_information`
--

INSERT INTO `user_personal_information` (`user_id`, `u_name`, `u_nameID`, `u_tel`, `u_mail`, `u_sex`, `u_profile`) VALUES
('11224', 'raj', 'raj123', '987654311', 'raj@raj.com', NULL, NULL),
('11301852', 'jiwan', 'jiwan90', '3456786890', 'sanja@12gmail.com', NULL, NULL),
('11303229', 'Jayesh', 'jayesh', '123123123', 'j@j.com', NULL, NULL),
('11305801', 'Sukhvendra Singh', 'Sukhvendra Singh', '8699077810', 'sukhvendrasingh6@gmail.com', NULL, NULL),
('11306023', 'akshada', 'aksh', '892374983', 'akshada.hp@gmail.com', NULL, NULL),
('11310009', 'Shubham', 'shubham', '1211121212', 'shu@shu.com', NULL, NULL),
('12345678', 'Ronak Bokaria', 'ronakjain', '8568918757', 'rkrdx@rk.com', 'M', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

DROP TABLE IF EXISTS `user_posts`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Truncate table before insert `user_posts`
--

TRUNCATE TABLE `user_posts`;
--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`post_id`, `post_title`, `post_content`, `post_category`, `post_time`, `hits`, `post_owner`) VALUES
(61, 'hello', '&lt;?php\necho hello\n?&gt;', 'php', '2016-05-27 14:18:14', NULL, '12345678'),
(62, 'C hello ', '    \n#include&lt;stdio.h&gt;\nvoid main() {\n    printf(&quot;Hello World&quot;);\n}\n    ', 'c', '2016-05-28 22:09:22', NULL, '12345678');

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
