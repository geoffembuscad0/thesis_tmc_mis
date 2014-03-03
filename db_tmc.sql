-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2014 at 06:36 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tmc`
--
CREATE DATABASE IF NOT EXISTS `db_tmc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_tmc`;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE IF NOT EXISTS `audit_trail` (
  `audit_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `action_taken` varchar(75) DEFAULT NULL,
  `datetime_taken` datetime DEFAULT NULL,
  PRIMARY KEY (`audit_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`audit_no`, `username`, `action_taken`, `datetime_taken`) VALUES
(1, 'admin-crm.admin', 'Exported Surveys ratings', '2014-02-19 09:10:43'),
(2, 'globio.santos@yahoo.com', 'Logged In', '2014-02-19 09:15:38'),
(3, 'globio.santos@yahoo.com', 'Logged Out', '2014-02-19 09:22:58'),
(4, 'admin-ems.admin', 'Logged In', '2014-02-19 09:23:07'),
(5, 'admin-ems.admin', 'Removed Employee', '2014-02-19 09:29:50'),
(6, 'admin-ems.admin', 'Logged Out', '2014-02-19 09:31:31'),
(7, 'admin-ems.admin', 'Logged In', '2014-02-19 13:33:44'),
(8, 'admin-ems.admin', 'Logged In', '2014-02-20 19:52:52'),
(9, 'admin-ems.admin', 'Logged In', '2014-02-21 11:42:35'),
(10, 'admin-ems.admin', 'Logged Out', '2014-02-21 14:01:04'),
(11, 'admin-ems.admin', 'Logged In', '2014-02-21 14:01:53'),
(12, 'admin-ems.admin', 'Logged Out', '2014-02-21 14:02:11'),
(13, 'globio@yahoo.com', 'Logged In', '2014-02-21 14:04:19'),
(14, 'admin-ems.admin', 'Logged In', '2014-02-21 14:10:30'),
(15, 'admin-ems.admin', 'Logged In', '2014-02-21 16:37:43'),
(16, 'admin-ems.admin', 'Logged In', '2014-02-23 01:44:00'),
(17, 'admin-ems.admin', 'Logged In', '2014-02-23 21:12:33'),
(18, 'admin-ems.admin', 'Logged Out', '2014-02-23 21:17:07'),
(19, 'admin-pms.admin', 'Logged In', '2014-02-23 21:19:01'),
(20, 'admin-pms.admin', 'Logged In', '2014-02-23 21:27:21'),
(21, 'admin-pms.admin', 'Logged In', '2014-02-23 21:34:57'),
(22, 'admin-ems.admin', 'Logged In', '2014-02-23 22:08:09'),
(23, 'globio.santos@yahoo.com', 'Logged In', '2014-02-25 17:42:53'),
(24, 'globio.santos@yahoo.com', 'Logged Out', '2014-02-25 17:49:31'),
(25, 'admin-ems.admin', 'Logged In', '2014-02-25 17:51:15'),
(26, 'admin-ems.admin', 'Logged In', '2014-02-25 21:11:43'),
(27, 'admin-crm.admin', 'Logged In', '2014-02-26 14:43:40'),
(28, 'admin-crm.admin', 'Logged In', '2014-02-26 15:16:18'),
(29, 'admin-ems.admin', 'Logged In', '2014-02-27 14:06:09'),
(30, 'admin-ems.admin', 'Logged Out', '2014-02-27 14:06:35'),
(31, 'admin-ems.admin', 'Logged In', '2014-02-27 14:32:04'),
(32, 'admin-ems.admin', 'Logged Out', '2014-02-27 14:53:30'),
(33, 'globio@yahoo.com', 'Logged In', '2014-02-27 14:53:49'),
(34, 'globio@yahoo.com', 'Logged In', '2014-02-27 15:08:24'),
(35, 'admin-ems.admin', 'Logged In', '2014-02-27 15:40:45'),
(36, 'admin-ems.admin', 'Logged Out', '2014-02-27 16:59:15'),
(37, 'globio.santos@yahoo.com', 'Logged In', '2014-02-27 16:59:23'),
(38, 'globio.santos@yahoo.com', 'Logged Out', '2014-02-27 17:02:21'),
(39, 'admin-ems.admin', 'Logged In', '2014-02-27 22:18:51'),
(40, 'globio.santos@yahoo.com', 'Logged In', '2014-02-28 12:43:48'),
(41, 'admin-ems.admin', 'Logged In', '2014-03-02 17:51:27'),
(42, 'admin-ems.admin', 'Logged Out', '2014-03-02 19:33:31'),
(43, 'globio.santos@yahoo.com', 'Logged In', '2014-03-02 19:33:47'),
(44, 'globio.santos@yahoo.com', 'Logged Out', '2014-03-02 20:00:22'),
(45, 'admin-ems.admin', 'Logged In', '2014-03-02 20:00:40'),
(46, 'admin-ems.admin', 'Logged Out', '2014-03-02 20:25:17'),
(47, 'admin-ems.admin', 'Logged In', '2014-03-02 20:26:32'),
(48, 'admin-ems.admin', 'Logged In', '2014-03-02 20:40:04'),
(49, 'admin-ems.admin', 'Logged Out', '2014-03-02 21:02:01'),
(50, 'globio.santos@yahoo.com', 'Logged In', '2014-03-02 21:02:16'),
(51, 'globio.santos@yahoo.com', 'Logged Out', '2014-03-02 21:04:10'),
(52, 'admin-ems.admin', 'Logged In', '2014-03-02 21:06:37'),
(53, 'admin-ems.admin', 'Logged Out', '2014-03-02 21:06:58'),
(54, 'globio.santos@yahoo.com', 'Logged In', '2014-03-02 21:07:14'),
(55, 'globio.santos@yahoo.com', 'Logged Out', '2014-03-02 22:37:00'),
(56, 'admin-ems.admin', 'Logged In', '2014-03-02 23:02:32'),
(57, 'admin-ems.admin', 'Logged Out', '2014-03-02 23:02:52'),
(58, 'admin-ems.admin', 'Logged In', '2014-03-02 23:14:12'),
(59, 'admin-ems.admin', 'Logged Out', '2014-03-02 23:15:56'),
(60, 'admin-ems.admin', 'Logged In', '2014-03-03 00:04:44'),
(61, 'admin-ems.admin', 'Logged Out', '2014-03-03 00:06:25'),
(62, 'globio.santos@yahoo.com', 'Logged In', '2014-03-03 00:06:39'),
(63, 'globio.santos@yahoo.com', 'Logged Out', '2014-03-03 00:50:38'),
(64, 'admin-ems.admin', 'Logged In', '2014-03-03 00:50:50'),
(65, 'admin-ems.admin', 'Logged Out', '2014-03-03 00:51:04'),
(66, 'globio.santos@yahoo.com', 'Logged In', '2014-03-03 00:51:16'),
(67, 'globio.santos@yahoo.com', 'Logged Out', '2014-03-03 10:39:23'),
(68, 'admin-ems.admin', 'Logged In', '2014-03-03 10:40:02'),
(69, 'admin-ems.admin', 'Logged Out', '2014-03-03 10:40:53'),
(70, 'globio.santos@yahoo.com', 'Logged In', '2014-03-03 10:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `crm_accounts`
--

CREATE TABLE IF NOT EXISTS `crm_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) NOT NULL,
  `user_password` char(40) DEFAULT NULL,
  `origpassword` varchar(75) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`),
  KEY `user_lvl` (`user_lvl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crm_accounts`
--

INSERT INTO `crm_accounts` (`account_id`, `username`, `user_password`, `origpassword`, `firstname`, `middlename`, `lastname`, `user_lvl`) VALUES
(1, 'admin-crm.admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Ryan', '', 'Derilo', 1),
(2, 'globio@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Globioz', '', 'Santos', 2);

-- --------------------------------------------------------

--
-- Table structure for table `crm_client_type`
--

CREATE TABLE IF NOT EXISTS `crm_client_type` (
  `client_type` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`client_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crm_client_type`
--

INSERT INTO `crm_client_type` (`client_type`, `type_name`) VALUES
(1, 'Business'),
(2, 'Consumer');

-- --------------------------------------------------------

--
-- Table structure for table `crm_cs`
--

CREATE TABLE IF NOT EXISTS `crm_cs` (
  `cs_no` int(11) NOT NULL AUTO_INCREMENT,
  `primary_name` varchar(75) NOT NULL,
  `type_of_stone` varchar(75) NOT NULL,
  `color_range` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `water_absorption` decimal(65,30) DEFAULT NULL,
  `density` bigint(20) DEFAULT NULL,
  `compressive_str` bigint(20) DEFAULT NULL,
  `filename` varchar(75) NOT NULL,
  PRIMARY KEY (`cs_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `crm_email_rater`
--

CREATE TABLE IF NOT EXISTS `crm_email_rater` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `crm_feedback`
--

CREATE TABLE IF NOT EXISTS `crm_feedback` (
  `feedback_code` char(40) NOT NULL DEFAULT '',
  `user_ip` varchar(18) DEFAULT NULL,
  `recommend` int(11) DEFAULT NULL,
  `recommend_no` text,
  `comment` text,
  `rate_satisfaction` int(11) DEFAULT NULL,
  `rate_business` int(11) DEFAULT NULL,
  `order_product` int(11) DEFAULT NULL,
  `email_feedback` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`feedback_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crm_feedback`
--

INSERT INTO `crm_feedback` (`feedback_code`, `user_ip`, `recommend`, `recommend_no`, `comment`, `rate_satisfaction`, `rate_business`, `order_product`, `email_feedback`) VALUES
('019e2f695629c018bd6d286f1e79457b4eb887b7', '212.220.2.32', 1, NULL, NULL, 5, 3, 2, NULL),
('0214814a1232cb381d9c3aa3902156d859b2a4e8', '212.297.2.32', 1, NULL, NULL, 5, 4, 1, NULL),
('030753827d3de5c195b9116495b031e8a9f98bbd', '212.210.2.32', 1, NULL, NULL, 3, 3, 2, NULL),
('03288b7a4f7c3c40a7268518a55b0a995cf820d2', '212.256.2.32', 2, NULL, NULL, 3, 2, 2, NULL),
('03561325242cfb78808a6240c914555401c7ae49', '212.271.2.32', 1, NULL, NULL, 2, 5, 2, NULL),
('037627cbca8a1db93688e7f1201d9e300e40d7fb', '212.252.2.32', 2, NULL, NULL, 3, 2, 2, NULL),
('0ec09ef9836da03f1add21e3ef607627e687e790', '212.25.2.14', 2, NULL, NULL, 3, 3, 2, NULL),
('10f7f5d90ea9d378000c0f965349c2309b802773', '212.290.2.32', 1, NULL, NULL, 3, 2, 2, NULL),
('13594725fefd79f99e9f4ae79061f342fce6bafb', '212.286.2.32', 1, NULL, NULL, 3, 2, 2, NULL),
('14593ce8d7a0831ea2b86e53b6bbd9bf7a2118bd', '212.208.2.32', 2, NULL, NULL, 3, 4, 1, NULL),
('1a5ee64dc275ad3f2698982f64ef30fd812109b5', '212.282.2.32', 2, NULL, NULL, 3, 4, 2, NULL),
('1c22789efd07914d88d252a1d9c22af270261ee2', '::1', 1, '', 'thanks', 5, 4, 1, NULL),
('1ddf19cc7b11c770331767e7da93dd55cfc192d7', '212.200.2.32', 1, NULL, NULL, 3, 4, 1, NULL),
('22b0011cd86b8a8e2140e6a41bd4833a12f49b62', '212.296.2.32', 2, NULL, NULL, 2, 1, 2, NULL),
('25312b440f0f7763272c3b2b24e0a124a4d9b4d8', '212.218.2.32', 1, NULL, NULL, 5, 5, 1, NULL),
('294a6cc7ebcaea2581272391185766b09dc3efec', '212.275.2.32', 1, NULL, NULL, 3, 4, 2, NULL),
('2a4ac2df5ae96d90fbdb561b3bf84b8837f2bc3b', '212.244.2.32', 2, NULL, NULL, 1, 5, 2, NULL),
('2c476e6b29ca676d36c1a37062dbfea7a3b4f249', '212.225.2.32', 2, NULL, NULL, 3, 1, 2, NULL),
('2d5b6a9ad575866ce5b584035c08e5dae4db7523', '212.212.2.32', 2, NULL, NULL, 3, 1, 2, NULL),
('311cee850d73dc61a6ac949ba693c39385dd345e', '212.5.2.18', 1, NULL, NULL, 3, 3, 1, NULL),
('31ed0febc847d2b4146b9f0af9aec41d4c168676', '212.266.2.32', 2, NULL, NULL, 3, 5, 2, NULL),
('32171269e0f0a9852f2041f73618c50c837da185', '212.238.2.32', 2, NULL, NULL, 3, 5, 2, NULL),
('33a40a4154a942f35b83b2cd95baefa0e8eb114e', '212.234.2.32', 2, NULL, NULL, 2, 2, 2, NULL),
('344195cd6d9a5d561ad98a8f66db6a68f9cf1f58', '212.249.2.32', 1, NULL, NULL, 1, 5, 1, NULL),
('3496c6495aa2dd31cd86b628a1b85dc40353fc18', '212.35.2.15', 1, NULL, NULL, 2, 4, 1, NULL),
('35139ef894b28b73bea022755166a23933c7d9cb', '212.35.2.15', 1, NULL, NULL, 2, 4, 1, NULL),
('38a8594c5e6b1995aaef9d0eec964529fbb9655c', '212.231.2.32', 1, NULL, NULL, 4, 1, 1, NULL),
('3cbd076f7a225c04026d4090d7f7c2bf99691b8d', '212.274.2.32', 1, NULL, NULL, 5, 1, 1, NULL),
('40bd001563085fc35165329ea1ff5c5ecbdbbeef', '212.15.2.13', 1, NULL, NULL, 4, 2, 1, NULL),
('4336a3fdfa4e211c2f87a316d5be13874a0fe614', '212.213.2.32', 1, NULL, NULL, 3, 4, 2, NULL),
('48bfac4385e5e43ed89fd6dcccb625910262763c', '212.281.2.32', 1, NULL, NULL, 1, 3, 2, NULL),
('5095f303353c70e62dee8568245741be053577f5', '212.216.2.32', 1, NULL, NULL, 5, 4, 2, NULL),
('51eac6b471a284d3341d8c0c63d0f1a286262a18', '212.45.2.16', 2, NULL, NULL, 1, 5, 2, NULL),
('544e26eea95e3b88b4a6b72a14cd06614c046c12', '212.5.2.12', 2, NULL, NULL, 5, 1, 2, NULL),
('548acafd2f2daf923ea4d91b0e3df7bbe1410106', '212.215.2.32', 1, NULL, NULL, 4, 4, 1, NULL),
('56671c3257c310e0b8a1194fb63dd2c1f424c414', '212.278.2.32', 2, NULL, NULL, 1, 2, 1, NULL),
('56c245fe0c9950c5af56f50ce133b3ad73e81bc3', '212.201.2.32', 1, NULL, NULL, 3, 4, 1, NULL),
('57e58b61ee0cfad29bd1c960747f998ff82efd94', '212.246.2.32', 1, NULL, NULL, 5, 1, 2, NULL),
('5f6955d227a320c7f1f6c7da2a6d96a851a8118f', '212.235.2.32', 1, NULL, NULL, 1, 5, 1, NULL),
('64cba2407df596240ae7775fb41fd1e8fac31230', '212.211.2.32', 1, NULL, NULL, 4, 3, 1, NULL),
('6512e1bdc91cb6524eeb4141f8d2548037188dc8', '127.0.0.1', 1, '', 'yiueahkdnasd', 4, 4, 1, 'meow@yahoo.com'),
('6643521711328a1e282daf5a5da43970eb11a089', '212.566.2.16', 1, NULL, NULL, 5, 1, 1, NULL),
('66667c23de51063949021881c63f6451ba145eb3', '212.300.2.32', 1, NULL, NULL, 1, 5, 2, NULL),
('67cfedd21247d34a5e89c0a327cadcb4324c273c', '212.45.2.16', 2, NULL, NULL, 1, 5, 2, NULL),
('69f8b3ad132d2dcab8a08a1ee0c212d873d7bdf1', '212.272.2.32', 2, NULL, NULL, 5, 5, 1, NULL),
('6c8290960d5d5726f6e917c10b86b47463ac77d5', '212.203.2.32', 2, NULL, NULL, 3, 4, 1, NULL),
('6cf7d132b9588c12ed60451dc03105fee9226189', '212.233.2.32', 2, NULL, NULL, 1, 5, 1, NULL),
('6fead90aa061349b9874d904c108b59c79d12d76', '212.235.2.32', 1, NULL, NULL, 1, 5, 1, NULL),
('72db8df225153086098c5f9b4742c3e12c82135c', '212.254.2.32', 2, NULL, NULL, 5, 1, 2, NULL),
('73e1a161b920c3dac162e9560059a1b41b9f17b3', '212.217.2.32', 2, NULL, NULL, 5, 5, 1, NULL),
('76a2370d44dc8d431bfd2e66277eebee7b656b83', '212.229.2.32', 2, NULL, NULL, 4, 3, 1, NULL),
('78598244ca6bead7f5e1d1cde182d6e22ac76be5', '212.241.2.32', 2, NULL, NULL, 1, 4, 2, NULL),
('789901087c2beb9a9739bd70e6eea1e34ee2e23e', '212.5.2.12', 2, NULL, NULL, 5, 1, 2, NULL),
('7ad762f8f5da52d29485666e09c92efaa72b4dfd', '212.270.2.32', 1, NULL, NULL, 3, 3, 1, NULL),
('7adf20750f5db9ed402fd555aba105a87d2c19c9', '212.265.2.32', 2, NULL, NULL, 3, 3, 1, NULL),
('7b278c5bbe65c68d9c7588af48c5fb365f8b031b', '212.258.2.32', 2, NULL, NULL, 2, 5, 1, NULL),
('7d09988be289a6a5cee14d0b18a103dbd709e9fe', '212.276.2.32', 2, NULL, NULL, 5, 5, 2, NULL),
('8102d71412d6620673033b119451f05c3c173c8d', '212.268.2.32', 2, NULL, NULL, 4, 1, 1, NULL),
('8106c9226cc4fa757eea2c29a615bd080e293dc1', '212.262.2.32', 2, NULL, NULL, 2, 2, 2, NULL),
('817968fb0b49ccbc51d7f047b27a4e437d1b1395', '212.204.2.32', 1, NULL, NULL, 2, 1, 1, NULL),
('83cb400ae026dd656f97f5a7256e5d1e6dacd4ae', '212.25.2.14', 2, NULL, NULL, 3, 3, 2, NULL),
('847a796c05bf784d33354541ee37730ac5888ff9', '212.209.2.32', 1, NULL, NULL, 1, 5, 2, NULL),
('86f8b69d847384a44fc48988130f6a646d1406bc', '::1', 2, 'nothing', 'nope', 3, 4, 2, NULL),
('89b074cbea9acce725e2aa5ef1c0b1ed985bb6cb', '212.255.2.32', 1, NULL, NULL, 1, 1, 1, NULL),
('8ddc3c79f3b1ee85d0e613effec8bf268d2c2d4e', '212.294.2.32', 2, NULL, NULL, 2, 2, 2, NULL),
('8e9ea75bb7a3965ab5b1b7d2d72ddda8203d9190', '212.287.2.32', 2, NULL, NULL, 2, 2, 2, NULL),
('8fad9dc6dc773f837a6f19d2f69e23ab32637ae1', '212.228.2.32', 1, NULL, NULL, 5, 1, 2, NULL),
('907dfb2dcd1253897ebd64b347132d8403b89482', '212.285.2.32', 1, NULL, NULL, 4, 5, 2, NULL),
('928129b77e50f3124d17e165c524473979fd7734', '212.245.2.32', 1, NULL, NULL, 3, 5, 1, NULL),
('96846d65c53e3fa939781f4b42cab30d791efbb8', '212.243.2.32', 1, NULL, NULL, 3, 5, 2, NULL),
('96bfa70399e0f67cb171a0eb72a6b563a5a3603f', '212.289.2.32', 1, NULL, NULL, 1, 5, 1, NULL),
('9941ba4efa8a9df6ba73016b03bb5a4b8f8d46fa', '212.269.2.32', 2, NULL, NULL, 3, 2, 1, NULL),
('9a7d137b821b49e9a151ddce293ec8710e7252e2', '::1', 1, '', 'oh yeah men', 5, 4, 1, NULL),
('9d1fb8a79a459b6b377cae45e57c69107436f06a', '212.247.2.32', 2, NULL, NULL, 5, 4, 2, NULL),
('9e82eea3cbfc82e91ef5797b18bdd571a52ccd52', '212.277.2.32', 1, NULL, NULL, 4, 5, 2, NULL),
('a10a12f0711412839fa9cd33864f89c6fc1943fd', '212.257.2.32', 1, NULL, NULL, 2, 5, 1, NULL),
('a2dfcac4a951d2fe1593ad19845ce96373bed17c', '212.259.2.32', 1, NULL, NULL, 1, 3, 2, NULL),
('a2fe2a2fc270aaa944d45a7008064543f35156c5', '212.566.2.16', 1, NULL, NULL, 5, 1, 1, NULL),
('a4be5c3ecab8cf0373cb018e4f8bbf9ec692022f', '212.253.2.32', 1, NULL, NULL, 4, 5, 1, NULL),
('a8adfb88ba6418058b2f816747a3337b7eac4808', '212.230.2.32', 2, NULL, NULL, 1, 2, 2, NULL),
('ab131d95c71a8482c6689d0f9485aa77a4d5b7bd', '212.261.2.32', 2, NULL, NULL, 3, 1, 1, NULL),
('adef3bd88de756ab21e792854e4b169569bad87e', '212.288.2.32', 1, NULL, NULL, 4, 4, 1, NULL),
('b0104c0a8e68970115342276cf2fa970005e6ad9', '212.207.2.32', 2, NULL, NULL, 2, 2, 1, NULL),
('b2029ba5ea1042d78c96d3888897571eea8c27fa', '212.55.2.17', 2, NULL, NULL, 4, 2, 2, NULL),
('b22d01ade9b1333bfcf752ecb38aaee8cc2772fd', '212.251.2.32', 2, NULL, NULL, 1, 1, 2, NULL),
('b325b19ffbdef56880d6011d3bd34257e458777d', '212.224.2.32', 1, NULL, NULL, 2, 2, 2, NULL),
('b75ed374ced83dce428cf109b22603efeec22805', '212.227.2.32', 2, NULL, NULL, 1, 1, 1, NULL),
('b9ed1cd7efe33d2ad4efe0502fac0e4960afdfa7', '212.242.2.32', 1, NULL, NULL, 4, 1, 2, NULL),
('b9ff1174195dcab4f4c9e1bcb48e392eeb9efd75', '212.248.2.32', 1, NULL, NULL, 1, 5, 2, NULL),
('bab72ebd57e941a9ee6f2702481dac914de95cf6', '212.239.2.32', 2, NULL, NULL, 4, 1, 2, NULL),
('bb2f0beb0e61d772b9dde3637f2f519c502f30a3', '212.214.2.32', 1, NULL, NULL, 3, 1, 2, NULL),
('bfdf9bc6ecf1e531a0d43a2646372710f603f1a3', '212.299.2.32', 1, NULL, NULL, 3, 3, 1, NULL),
('c0fc0acc775371b5496e90dd5c7383e482924fbe', '212.291.2.32', 2, NULL, NULL, 2, 2, 2, NULL),
('c19e8a9eb2a60d3131c603f9e83b244577b57f07', '212.283.2.32', 2, NULL, NULL, 1, 5, 1, NULL),
('c2ad7c7d55e52b21f9598cfee095a7c26e32adb7', '212.206.2.32', 1, NULL, NULL, 2, 4, 2, NULL),
('c2b5d851e5d221447ce4c690faa108cacd8c6730', '::1', 1, '', 'another comment', 4, 4, 1, NULL),
('c510ee0ce06c3970a14770b70bfcacb5245a4a75', '127.0.0.1', 1, '', 'uybjhhoo', 4, 5, 1, 'meoow@live.com'),
('cf02e2f1c6b850d22325eb185e9ea707610c1543', '212.263.2.32', 1, NULL, NULL, 4, 1, 1, NULL),
('d1cd4214e08f63493753ddb4e7d3209c85f426bb', '212.205.2.32', 1, NULL, NULL, 3, 4, 1, NULL),
('d2548dad22ebe67fa5a3a3d45b2af2d758f6fc65', '212.264.2.32', 1, NULL, NULL, 5, 4, 1, NULL),
('d61dc0e71a3ce19f4d176e366b06d28b235e71ec', '212.235.2.32', 2, NULL, NULL, 4, 2, 1, NULL),
('d6530129713177f5c8e313ea48d3303dc99bb64b', '212.221.2.32', 2, NULL, NULL, 4, 2, 2, NULL),
('d8949ffc0ff07255b1351a138f433cfb4c004840', '212.240.2.32', 1, NULL, NULL, 4, 2, 2, NULL),
('d894b568646eada80747ecfb30255931fa9b9e35', '212.5.2.352', 2, NULL, NULL, 5, 1, 2, NULL),
('da6205163cf951853d4c2e5115c016968fa887c7', '212.284.2.32', 1, NULL, NULL, 1, 4, 2, NULL),
('db39ce4b7452df94cdc57bd9326997e5aed44069', '212.55.2.17', 2, NULL, NULL, 4, 2, 2, NULL),
('dbc0f004854457f59fb16ab863a3a1722cef553f', '212.523.2.22', 2, NULL, NULL, 2, 4, 2, NULL),
('dc8ae4d2039b7200e98bf0847d51af8859e3c15d', '212.223.2.32', 1, NULL, NULL, 4, 4, 1, NULL),
('dfbf82d3ed7de548326defe416b9b4d3ddd58f47', '212.295.2.32', 2, NULL, NULL, 4, 1, 1, NULL),
('dfc8b2665e9dc7642fc73e13d55d479ef84a0c3b', '212.523.2.22', 2, NULL, NULL, 2, 4, 2, NULL),
('e1314eb613cc95ee1a58615d96f7f9dc4084b09e', '212.222.2.32', 1, NULL, NULL, 5, 3, 1, NULL),
('e59540286758b4afc293e6ea57a93d9e9779416a', '212.279.2.32', 1, NULL, NULL, 2, 5, 2, NULL),
('e5c374464ddebd17ab1c94c52ebb8c49ebbe5c76', '212.202.2.32', 2, NULL, NULL, 3, 5, 1, NULL),
('e726e795f9f204cfe192c8e3be777f9161135d41', '212.219.2.32', 2, NULL, NULL, 5, 2, 2, NULL),
('e8e31f0ac8d118c6d81076164ad68ea0809324a7', '212.292.2.32', 1, NULL, NULL, 4, 3, 2, NULL),
('e8f7222204cf09d0c529bf5002430ecd34ccd32b', '212.293.2.32', 2, NULL, NULL, 5, 3, 2, NULL),
('eb82ac43917866b085b9424753bb7bfd8e724e1f', '212.232.2.32', 2, NULL, NULL, 5, 5, 2, NULL),
('ecef6f33a74e2937caed13cadeadf09282fac1cc', '212.260.2.32', 2, NULL, NULL, 4, 3, 1, NULL),
('ed2f1ba56f60b90fd58cac1e3a21b58deb88a402', '212.15.2.13', 1, NULL, NULL, 4, 2, 1, NULL),
('f0ad06d38254c3697285ea1de4ec300838ab8e18', '212.236.2.32', 2, NULL, NULL, 3, 3, 1, NULL),
('f0c91809ff2d1e3bedaf23147d649cdefe53eb2d', '212.226.2.32', 2, NULL, NULL, 1, 1, 1, NULL),
('f3e89222e6c1f76359694af0a44bf1f92bc4a236', '212.280.2.32', 1, NULL, NULL, 3, 5, 1, NULL),
('f4e60a8c24a3465a588ebcff320593d3a08b79a8', '212.237.2.32', 2, NULL, NULL, 5, 1, 1, NULL),
('f7602e3a408371510f6a926b8a2bb00664d538ba', '212.298.2.32', 1, NULL, NULL, 5, 4, 2, NULL),
('f79b16c02b0b12e8a0ba924107923c59e6867902', '212.273.2.32', 1, NULL, NULL, 3, 2, 1, NULL),
('f7ca7a74973514251235dc58bb24094fea3c9bc4', '::1', 1, '', 'ok', 5, 5, 1, NULL),
('f92a54f45e0b5d784e53176cb694cd192fe46bed', '212.522.2.18', 1, NULL, NULL, 3, 3, 1, NULL),
('f93cbeeb853d2aa4ef83e543bcf26183d9e44422', '212.267.2.32', 1, NULL, NULL, 5, 2, 1, NULL),
('f95da54eb1911857da70530a3beed0912ef85afb', '212.250.2.32', 1, NULL, NULL, 2, 2, 1, NULL),
('fc1200c7a7aa52109d762a9f005b149abef01479', '212.522.2.18', 1, NULL, NULL, 3, 3, 1, NULL),
('fc221328cb1f9d2b83600379a779521286706557', '127.0.0.1', 1, '', 'nope', 5, 5, 1, 'genesis@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `crm_inq_clients`
--

CREATE TABLE IF NOT EXISTS `crm_inq_clients` (
  `inq_no` char(12) NOT NULL DEFAULT '',
  `client_type` int(11) DEFAULT NULL,
  `business_name` varchar(75) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `mobile` char(11) DEFAULT NULL,
  `telephone` char(7) DEFAULT NULL,
  PRIMARY KEY (`inq_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crm_inq_clients`
--

INSERT INTO `crm_inq_clients` (`inq_no`, `client_type`, `business_name`, `firstname`, `middlename`, `lastname`, `address`, `email`, `mobile`, `telephone`) VALUES
('59O88DuzN06m', 2, '', 'john', 'roan', 'castro', '6 aurellana, bagong ilog, pasig', 'admin@localhost', '09203231321', '6723231'),
('Fcd7mDJseWjH', 2, '', 'Globio', 'Marquez', 'Santos', '8,daang bakal,mandaluyong', 'globiosantos@live.com', '09123172381', '6723012'),
('mT5bNXlHE8kO', 2, '', 'Sally', 'Mendiola', 'Castro', '6 Aurellana St., Bagon Ilog, Pasig city', 'sallycastro@live.com', '09102931231', '6712391'),
('W4QNeqe4vP9V', 2, '', 'Baley', 'Samson', 'Magues', 'pasig city', 'bmarg@yahoo.com', '09192839172', '6717293'),
('WOXdW8KR8Zou', 2, '', 'babeh', 'babeh', 'babeh', '6 aurellana, bagong ilog, pasig city', 'admin@localhost', '09232312312', '6723231'),
('xcnvotWtQHRw', 2, '', 'lester', 'Kempis', 'Soriano', '123,pasig city', 'lester@yahoo.com', '77987719187', '9898989');

-- --------------------------------------------------------

--
-- Table structure for table `crm_inq_docs`
--

CREATE TABLE IF NOT EXISTS `crm_inq_docs` (
  `inq_no` char(12) NOT NULL,
  `date_issued` datetime NOT NULL,
  `date_approved` datetime DEFAULT NULL,
  `inq_status` smallint(6) DEFAULT NULL,
  `date_denied` datetime DEFAULT NULL,
  PRIMARY KEY (`inq_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crm_inq_docs`
--

INSERT INTO `crm_inq_docs` (`inq_no`, `date_issued`, `date_approved`, `inq_status`, `date_denied`) VALUES
('59O88DuzN06m', '2013-09-04 23:18:27', NULL, 2, '2013-11-23 15:04:14'),
('Fcd7mDJseWjH', '2013-11-10 14:08:39', '2014-01-06 03:11:58', 1, NULL),
('mT5bNXlHE8kO', '2014-02-03 01:43:06', '2014-02-03 01:57:04', 1, '2014-02-03 01:55:57'),
('W4QNeqe4vP9V', '2014-02-27 15:08:08', NULL, NULL, '0000-00-00 00:00:00'),
('WOXdW8KR8Zou', '2013-09-07 15:59:38', '2013-09-23 02:27:28', 2, '2014-02-19 09:09:21'),
('xcnvotWtQHRw', '2014-01-16 13:06:29', '2014-01-16 13:07:09', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crm_inq_products`
--

CREATE TABLE IF NOT EXISTS `crm_inq_products` (
  `inq_no` char(12) DEFAULT NULL,
  `product_no` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crm_inq_products`
--

INSERT INTO `crm_inq_products` (`inq_no`, `product_no`) VALUES
('59O88DuzN06m', 1),
('59O88DuzN06m', 2),
('WOXdW8KR8Zou', 1),
('WOXdW8KR8Zou', 2),
('Fcd7mDJseWjH', 1),
('Fcd7mDJseWjH', 2),
('xcnvotWtQHRw', 2),
('xcnvotWtQHRw', 3),
('mT5bNXlHE8kO', 1),
('mT5bNXlHE8kO', 2),
('W4QNeqe4vP9V', 2),
('W4QNeqe4vP9V', 3);

-- --------------------------------------------------------

--
-- Table structure for table `crm_products`
--

CREATE TABLE IF NOT EXISTS `crm_products` (
  `product_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(75) DEFAULT NULL,
  `description` text,
  `price` decimal(65,2) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`product_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `crm_products`
--

INSERT INTO `crm_products` (`product_no`, `product_name`, `description`, `price`, `filename`) VALUES
(1, 'Fabricated Stone', 'Raw stones which are ready made.', '2700.00', 'fabricated_stone.jpg'),
(2, 'Marble Powder', 'Marble stones and live stones into powder.', '2250.00', 'marble_powder.jpg'),
(3, 'Slabs', 'Thick live stones ready made.', '3200.50', 'slabs.jpg'),
(4, 'Titles', 'Designed stones, good for churches and chapels.', '3200.75', 'tiles.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `crm_product_scores`
--

CREATE TABLE IF NOT EXISTS `crm_product_scores` (
  `score_code` bigint(20) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `datetime_taken` datetime NOT NULL,
  `product_no` int(11) NOT NULL,
  PRIMARY KEY (`score_code`),
  KEY `product_no` (`product_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `crm_product_scores`
--

INSERT INTO `crm_product_scores` (`score_code`, `score`, `ip_address`, `datetime_taken`, `product_no`) VALUES
(1, 4, '::1', '2013-10-05 12:40:52', 1),
(2, 4, '::1', '2013-10-05 12:40:52', 1),
(3, 3, '::1', '2013-10-05 12:41:06', 2),
(4, 5, '::1', '2013-11-10 14:04:53', 1),
(5, 5, '::1', '2013-11-10 14:04:53', 1),
(6, 5, '::1', '2013-11-10 14:04:54', 1),
(7, 5, '::1', '2013-11-10 14:04:54', 1),
(8, 4, '::1', '2013-11-12 12:54:26', 2),
(9, 4, '::1', '2013-11-12 12:54:26', 2),
(10, 4, '::1', '2013-11-12 12:54:26', 2),
(11, 5, '::1', '2013-11-21 17:25:20', 2),
(12, 5, '::1', '2013-11-21 17:25:20', 2),
(13, 5, '::1', '2013-11-21 17:25:20', 2),
(14, 5, '127.0.0.1', '2013-12-27 00:58:24', 1),
(15, 5, '127.0.0.1', '2013-12-27 00:58:28', 1),
(16, 5, '127.0.0.1', '2013-12-27 00:58:29', 1),
(17, 5, '127.0.0.1', '2013-12-27 00:58:29', 1),
(18, 5, '127.0.0.1', '2013-12-27 00:58:29', 2),
(19, 5, '127.0.0.1', '2013-12-27 00:58:29', 2),
(20, 5, '127.0.0.1', '2013-12-27 00:58:29', 2),
(21, 5, '127.0.0.1', '2013-12-27 01:03:38', 3),
(22, 4, '127.0.0.1', '2013-12-27 01:04:48', 3),
(23, 4, '127.0.0.1', '2013-12-27 02:06:06', 3),
(24, 4, '127.0.0.1', '2014-01-04 12:36:50', 2),
(25, 4, '127.0.0.1', '2014-01-04 12:37:21', 4),
(26, 4, '127.0.0.1', '2014-01-04 15:46:09', 2),
(27, 5, '127.0.0.1', '2014-01-19 14:02:52', 2),
(28, 5, '127.0.0.1', '2014-01-19 14:10:53', 2),
(29, 5, '127.0.0.1', '2014-01-19 14:23:29', 2),
(30, 3, '127.0.0.1', '2014-01-19 14:32:55', 3),
(31, 1, '127.0.0.1', '2014-01-19 14:33:30', 1),
(32, 4, '127.0.0.1', '2014-02-19 08:52:18', 2),
(33, 4, '127.0.0.1', '2014-02-19 08:54:30', 2),
(34, 4, '127.0.0.1', '2014-02-19 09:03:57', 3),
(35, 4, '127.0.0.1', '2014-02-19 09:04:53', 2);

-- --------------------------------------------------------

--
-- Table structure for table `crm_product_storage`
--

CREATE TABLE IF NOT EXISTS `crm_product_storage` (
  `product_no` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) DEFAULT NULL,
  `avail_stat` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`product_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `crm_product_storage`
--

INSERT INTO `crm_product_storage` (`product_no`, `quantity`, `avail_stat`) VALUES
(1, 10, 'Available'),
(2, 23, 'Available'),
(3, 12, 'Available'),
(4, 19, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `ems_accounts`
--

CREATE TABLE IF NOT EXISTS `ems_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `user_password` char(40) DEFAULT NULL,
  `origpassword` varchar(75) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ems_accounts`
--

INSERT INTO `ems_accounts` (`account_id`, `username`, `user_password`, `origpassword`, `firstname`, `middlename`, `lastname`, `user_lvl`) VALUES
(1, 'admin-ems.admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Lester', NULL, 'Soriano', 1),
(2, 'globio.santos@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Globio', NULL, 'Santos', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ems_applicants`
--

CREATE TABLE IF NOT EXISTS `ems_applicants` (
  `applicant_no` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` text,
  `mobile` char(11) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `time_reach` varchar(14) DEFAULT NULL,
  `starting_date` datetime NOT NULL,
  `position` varchar(75) DEFAULT NULL,
  `pending_status` int(11) NOT NULL,
  `resume_filename` text,
  `interview_schedule` datetime DEFAULT NULL,
  `marital_Status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`applicant_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ems_applicants`
--

INSERT INTO `ems_applicants` (`applicant_no`, `firstname`, `middlename`, `lastname`, `address`, `mobile`, `email`, `time_reach`, `starting_date`, `position`, `pending_status`, `resume_filename`, `interview_schedule`, `marital_Status`) VALUES
(00000000000000000001, 'Marcos', 'Siliman', 'Maruja', '7, aurellana st., bagong ilog, pasig city', '09123671827', 'marcosmaruja@live.com', 'morning', '2014-02-04 00:00:00', 'Accounting Assistant', 1, 'myfinalreportojt.doc', '2014-02-05 13:00:00', 1),
(00000000000000000002, 'RaidenRose', 'Kaiser', 'Woru', 'pasig city', '09012381248', 'awtsu@live.com', 'morning', '2014-02-24 00:00:00', 'Clerk', 1, 'My Narrative Reporrt-fufu-updated.doc', '2014-02-19 00:00:00', 1),
(00000000000000000003, 'RaidenRose', 'Cruz', 'Santos', 'pasig city', '10930192031', 'awtsu@live.com', 'morning', '2014-02-24 00:00:00', 'Clerk', 0, 'cristy_resume.doc', NULL, 1),
(00000000000000000004, 'RaidenRose', 'Cruz', 'Santos', 'pasig city', '10930192031', 'awtsu@live.com', 'morning', '2014-02-24 00:00:00', 'Clerk', 0, 'sample_Resumes.docx', NULL, 1),
(00000000000000000005, 'RaidenRose', 'Cruz', 'Santos', 'pasig city', '10930192031', 'awtsu@live.com', 'morning', '2014-02-24 00:00:00', 'Clerk', 0, 'sample_Resumes.docx', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ems_departments`
--

CREATE TABLE IF NOT EXISTS `ems_departments` (
  `dept_no` tinyint(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`dept_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `ems_departments`
--

INSERT INTO `ems_departments` (`dept_no`, `dept_name`) VALUES
(005, 'Human Resource'),
(007, 'Production'),
(008, 'Finance'),
(009, 'Accounting'),
(010, 'Corporate Accounting'),
(011, 'MIS'),
(012, 'Purchasing'),
(013, 'Local Sales'),
(014, 'Export'),
(015, 'Admin'),
(016, 'Tenement'),
(017, 'MAMC');

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee`
--

CREATE TABLE IF NOT EXISTS `ems_employee` (
  `employee_id` varchar(175) NOT NULL DEFAULT '',
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `position_no` smallint(5) unsigned zerofill DEFAULT NULL,
  `employee_type` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `relation_stat` int(11) NOT NULL,
  `place_of_birth` varchar(75) DEFAULT NULL,
  `religion` varchar(75) DEFAULT NULL,
  `citizenship` varchar(75) DEFAULT NULL,
  `emergency_name` varchar(75) DEFAULT NULL,
  `emergency_contact` varchar(75) DEFAULT NULL,
  `emergency_sec_contact` varchar(75) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `address` varchar(75) DEFAULT NULL,
  `employee_rate` float DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee`
--

INSERT INTO `ems_employee` (`employee_id`, `firstname`, `middlename`, `lastname`, `position_no`, `employee_type`, `date_added`, `birthdate`, `date_modified`, `status`, `relation_stat`, `place_of_birth`, `religion`, `citizenship`, `emergency_name`, `emergency_contact`, `emergency_sec_contact`, `sex`, `address`, `employee_rate`) VALUES
('00f924', 'Paolo', 'Cruz', 'Amandilino', 00016, 1, '2013-12-15 18:25:45', '1989-11-15 00:00:00', '2014-03-03 02:27:41', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'm', 'pasig city', 75.5),
('025222', 'Michael', 'Cruz', 'Amoura', 00015, 1, '2013-12-15 18:25:45', '1986-10-22 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('05f94c', 'Moose', 'Cruz', 'Amoura', 00015, 1, '2013-12-15 18:25:44', '1987-10-14 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75.25),
('0e3ad2', 'Ronnie', 'Cruz', 'Duncan', 00015, 1, '2013-12-15 18:25:45', '1980-12-10 00:00:00', '2014-01-05 19:12:36', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('11233845', 'Rennai', 'Cruz', 'Cruz', 00015, 2, '2014-01-01 07:01:00', '1990-01-10 00:00:00', '2014-01-01 07:01:00', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1433d2', 'Claud', 'Cruz', 'Nelito', 00015, 1, '2013-12-15 18:25:45', '1986-10-17 00:00:00', '2014-01-05 19:12:36', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('15129a', 'Max', 'Cruz', 'Asperas', 00015, 1, '2013-12-15 18:25:44', '1985-10-13 00:00:00', '2014-01-05 19:12:36', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('27b30f', 'Sandra', 'Cruz', 'Manzano', 00015, 1, '2013-12-15 18:25:44', '1992-10-19 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75.25),
('33583d', 'Alvin', 'Cruz', 'Taylor', 00015, 1, '2013-12-15 18:25:44', '1986-12-14 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3443c7', 'Selena', 'Cruz', 'Lorenzo', 00015, 1, '2013-12-15 18:25:44', '1984-11-23 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3e3b8b', 'Mitch', 'Cruz', 'Cruz', 00015, 1, '2013-12-15 18:25:45', '1990-12-28 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3f9031', 'Grace', 'Cruz', 'Andaya', 00015, 1, '2013-12-15 18:25:45', '1983-10-14 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('42dda7', 'Corey', 'Cruz', 'Rodriguez', 00015, 1, '2013-12-15 18:25:45', '1990-11-26 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75.25),
('477f69', 'Renaldo', 'Cruz', 'Padilla', 00015, 1, '2013-12-15 18:25:44', '1992-11-26 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('49949b', 'Michael', 'Cruz', 'Lucio', 00015, 1, '2013-12-15 18:25:45', '1981-11-23 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('52d7c9', 'Michael', 'Cruz', 'Cruz', 00015, 1, '2013-12-15 18:25:45', '1983-12-13 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75.25),
('56abda', 'Ronnelyn', 'Cruz', 'Nelito', 00015, 1, '2013-12-15 18:25:45', '1991-11-21 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75.25),
('5e8185', 'Jonnathan', 'Cruz', 'Rodriguez', 00015, 1, '2013-12-15 18:25:45', '1987-10-22 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('609fdb', 'Paula', 'Cruz', 'Rodriguez', 00015, 1, '2013-12-15 18:25:44', '1987-12-20 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6a5915', 'Ronnie', 'Cruz', 'Cruz', 00015, 1, '2013-12-15 18:25:45', '1981-10-17 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6de808', 'Alvin', 'Cruz', 'Nelito', 00015, 1, '2013-12-15 18:25:45', '1981-12-29 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('6fe386', 'Paolo', 'Cruz', 'Duncan', 00015, 1, '2013-12-15 18:25:44', '1982-12-23 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('72e678', 'Mitch', 'Cruz', 'Nelito', 00015, 1, '2013-12-15 18:25:45', '1988-12-17 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('740617176216', 'Ravenous', 'Cruz', 'Speaker', 00015, 1, '2014-01-25 20:35:03', '1983-01-05 00:00:00', '2014-01-25 20:35:03', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('7b912d', 'Claud', 'Cruz', 'Soriano', 00015, 1, '2013-12-15 18:25:45', '1987-10-10 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('83856e', 'Selena', 'Cruz', 'Rincon', 00015, 1, '2013-12-15 18:25:44', '1980-11-10 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('872a32', 'Paolo', 'Cruz', 'Taylor', 00015, 1, '2013-12-15 18:25:44', '1981-11-16 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('88d23f', 'Mitch', 'Cruz', 'Amandilio', 00015, 1, '2013-12-15 18:25:44', '1986-12-20 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('9015e5', 'Michael', 'Cruz', 'Nelito', 00015, 1, '2013-12-15 18:25:44', '1983-10-26 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('91318273', 'Paolo', 'Cruz', 'Amandilino', 00014, 1, '2014-02-21 13:52:01', '1992-02-07 00:00:00', '2014-03-03 12:59:58', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'm', 'Pasig city', 75.25),
('99921371', 'Paolo', 'Cruz', 'Amandilino', 00012, 1, '2013-12-15 18:25:44', '1985-11-17 00:00:00', '2014-03-03 13:01:22', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'm', 'pasig city', 75.25),
('9b5ebb', 'Jude', 'Cruz', 'Alvarez', 00015, 1, '2013-12-15 18:25:44', '1985-12-24 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75.25),
('9ded77', 'Selena', 'Cruz', 'Rincon', 00015, 1, '2013-12-15 18:25:44', '1988-12-29 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75.25),
('a01598', 'Max', 'Cruz', 'Amoura', 00015, 1, '2013-12-15 18:25:44', '1984-12-22 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a0dce5', 'Grace', 'Cruz', 'Amoura', 00015, 1, '2013-12-15 18:25:45', '1991-12-23 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a688d5', 'Claud', 'Cruz', 'Manzano', 00015, 1, '2013-12-15 18:25:45', '1986-11-15 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('a6c1ce', 'Aiden', 'Cruz', 'Argente', 00015, 1, '2013-12-15 18:25:44', '1984-12-23 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('b6f63c', 'Moose', 'Cruz', 'Lorenzo', 00015, 1, '2013-12-15 18:25:45', '1989-11-18 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('bas0A5', 'Janine', 'Cruz', 'Santinidad', 00015, 1, '2013-11-22 16:08:44', '1989-11-21 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('c44b45', 'Aris', 'Cruz', 'Lorenzo', 00015, 1, '2013-12-15 18:25:44', '1985-10-14 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ccd9b2', 'Renaldo', 'Cruz', 'Amandilio', 00015, 1, '2013-12-15 18:25:44', '1990-12-25 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('d124f2', 'Rose', 'Cruz', 'Rincon', 00015, 1, '2013-12-15 18:25:44', '1990-10-27 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('d6dd84', 'Rose', 'Cruz', 'Amandilio', 00015, 1, '2013-12-15 18:25:45', '1986-12-19 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('d93794', 'Selena', 'Cruz', 'Cruz', 00015, 1, '2013-12-15 18:25:45', '1981-12-29 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('dd23e9', 'Paula', 'Cruz', 'Lanuza', 00015, 1, '2013-12-15 18:25:44', '1982-10-11 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('e4ab23', 'Michael', 'Cruz', 'Padilla', 00015, 1, '2013-12-15 18:25:44', '1986-11-28 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('e6ca0e', 'Lucas', 'Cruz', 'Lorenzo', 00015, 1, '2013-12-15 18:25:44', '1980-12-12 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ed76e4', 'Jason', 'Cruz', 'Amandilio', 00015, 1, '2013-12-15 18:25:44', '1991-12-19 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('edfd34', 'Paula', 'Cruz', 'Amoura', 00015, 1, '2013-12-15 18:25:45', '1991-10-14 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('f2e310', 'Ronnelyn', 'Cruz', 'Alvarez', 00015, 1, '2013-12-15 18:25:44', '1988-11-22 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('f47321', 'Renaldo', 'Cruz', 'Lucio', 00015, 1, '2013-12-15 18:25:44', '1980-10-18 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('f593df', 'Ronnelyn', 'Cruz', 'Tuazon', 00015, 1, '2013-12-15 18:25:44', '1982-11-27 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('fba3f9', 'Rose', 'Cruz', 'Argente', 00015, 1, '2013-12-15 18:25:45', '1992-11-25 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('Qa5iew', 'Renny', 'Cruz', 'Cruz', 00015, 1, '2013-11-24 17:49:03', '1990-11-07 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('trVHh3', 'Lester', 'Cruz', 'Soriano', 00005, 1, '2013-11-10 14:55:17', '1991-11-13 00:00:00', '2014-01-05 19:12:36', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('V23f31', 'Pierrot', 'Cruz', 'Mendiola', 00015, 1, '2014-01-25 20:08:34', '1989-08-17 00:00:00', '2014-01-25 20:08:34', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee_contact`
--

CREATE TABLE IF NOT EXISTS `ems_employee_contact` (
  `employee_id` varchar(175) DEFAULT NULL,
  `mobile` char(11) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee_contact`
--

INSERT INTO `ems_employee_contact` (`employee_id`, `mobile`, `telephone`, `email`) VALUES
('t2uSuf', '09203293123', NULL, 'jonathanlanuza@yahoo.com'),
('bas0A5', '09809087283', NULL, 'janinecortez@yahoo.com'),
('trVHh3', '09388888881', NULL, 'lester.soriano@jru.edu'),
('Qa5iew', '09123671827', NULL, 'rennycruz@yahoo.com'),
('d124f2', '09139999665', '', 'jason.tuazon@yahoo.com'),
('dd23e9', '09115322444', '', 'rose.asperas@yahoo.com'),
('ed76e4', '09684948919', '', 'mitch.tuazon@yahoo.com'),
('f2e310', '09986621631', '', 'rose.amoura@yahoo.com'),
('f47321', '09911540068', '', 'rose.tuazon@yahoo.com'),
('9ded77', '09768315160', '', 'alvin.cruz@yahoo.com'),
('609fdb', '09503363015', '', 'moose.manzano@yahoo.com'),
('477f69', '09530071762', '', 'paul.taylor@yahoo.com'),
('9015e5', '09100341941', '', 'paula.reyes@yahoo.com'),
('f593df', '09116625951', '', 'ronnelyn.nelito@yahoo.com'),
('05f94c', '09868220788', '', 'christine.lucio@yahoo.com'),
('6fe386', '09140470582', '', 'jude.asperas@yahoo.com'),
('15129a', '09856754903', '', 'paula.rincon@yahoo.com'),
('99921371', '09610021527', '672-2323', 'alvin.padilla@yahoo.com'),
('c44b45', '09140601659', '', 'selena.castro@yahoo.com'),
('83856e', '09121122888', '', 'claud.duncan@yahoo.com'),
('33583d', '09686805218', '', 'max.reyes@yahoo.com'),
('a6c1ce', '09590903528', '', 'aris.manzano@yahoo.com'),
('ccd9b2', '09663625078', '', 'corey.castro@yahoo.com'),
('27b30f', '09877327410', '', 'alvin.castro@yahoo.com'),
('e4ab23', '09115293942', '', 'moose.amoura@yahoo.com'),
('88d23f', '09994089340', '', 'alvin.lorenzo@yahoo.com'),
('9b5ebb', '09415992321', '', 'selena.padilla@yahoo.com'),
('a01598', '09541989139', '', 'aris.asperas@yahoo.com'),
('e6ca0e', '09876176739', '', 'grace.andaya@yahoo.com'),
('3443c7', '09133004957', '', 'corey.rodriguez@yahoo.com'),
('872a32', '09938488987', '', 'aiden.velasco@yahoo.com'),
('d6dd84', '09130675921', '', 'aiden.abalos@yahoo.com'),
('00f924', '09100578205', '', 'christine.rincon@yahoo.com'),
('0e3ad2', '09120065604', '', 'christine.taylor@yahoo.com'),
('d93794', '09694096480', '', 'paul.amandilio@yahoo.com'),
('a688d5', '09555126046', '', 'claud.padilla@yahoo.com'),
('72e678', '09656272071', '', 'aris.amandilio@yahoo.com'),
('b6f63c', '09135506015', '', 'jason.velasco@yahoo.com'),
('a0dce5', '09506581109', '', 'rose.amandilio@yahoo.com'),
('1433d2', '09106942342', '', 'grace.alvarez@yahoo.com'),
('edfd34', '09116744434', '', 'grace.velasco@yahoo.com'),
('3f9031', '09536760369', '', 'jude.santos@yahoo.com'),
('6de808', '09623158374', '', 'paul.asperas@yahoo.com'),
('3e3b8b', '09435498727', '', 'paul.andaya@yahoo.com'),
('7b912d', '09136715971', '', 'corey.duncan@yahoo.com'),
('5e8185', '09803414679', '', 'mitch.castro@yahoo.com'),
('025222', '09140096196', '', 'paolo.reyes@yahoo.com'),
('56abda', '09617678427', '', 'jonnathan.alvarez@yahoo.com'),
('42dda7', '09520547651', '', 'max.argente@yahoo.com'),
('49949b', '09132806300', '', 'corey.andaya@yahoo.com'),
('52d7c9', '09121241184', '', 'aris.nelito@yahoo.com'),
('bd0467', '09119783525', '', 'paolo.daracen@yahoo.com'),
('fba3f9', '09871921734', '', 'corey.lanuza@yahoo.com'),
('6a5915', '09126349932', '', 'alvin.amandilio@yahoo.com'),
('bb6bbc', '09137694513', '', 'alvin.asperas@yahoo.com'),
('a4ae13', '09118029681', '', 'selena.daracen@yahoo.com'),
('28487e', '09436134748', '', 'jason.andaya@yahoo.com'),
('e207ec', '09132893753', '', 'michael.lucio@yahoo.com'),
('fb7f1e', '09927275263', '', 'aris.abalos@yahoo.com'),
('0b3c05', '09124232955', '', 'aris.duncan@yahoo.com'),
('e25d48', '09986830951', '', 'moose.rodriguez@yahoo.com'),
('fa9310', '09106131523', '', 'grace.manzano@yahoo.com'),
('72a1df', '09104500595', '', 'jonnathan.abalos@yahoo.com'),
('213b5a', '09106344690', '', 'james.tuazon@yahoo.com'),
('ab6b21', '09132428130', '', 'aris.rincon@yahoo.com'),
('d2ce15', '09736365376', '', 'renaldo.padilla@yahoo.com'),
('9ff3c9', '09132035917', '', 'james.soriano@yahoo.com'),
('b4e3bc', '09112167164', '', 'jude.manzano@yahoo.com'),
('7159fc', '09103066691', '', 'ronnelyn.reyes@yahoo.com'),
('78a988', '09918018838', '', 'jude.santos@yahoo.com'),
('5ce022', '09137881731', '', 'paula.andaya@yahoo.com'),
('2de5fe', '09776381785', '', 'christine.reyes@yahoo.com'),
('18ed22', '09136988817', '', 'renaldo.castro@yahoo.com'),
('13afea', '09564888069', '', 'mitch.castro@yahoo.com'),
('e84502', '09118879102', '', 'ronnie.andaya@yahoo.com'),
('d735ca', '09128306902', '', 'grace.santos@yahoo.com'),
('1f2926', '09833953444', '', 'michael.abalos@yahoo.com'),
('e8a155', '09900257549', '', 'aiden.asperas@yahoo.com'),
('c95cfb', '09799232200', '', 'paul.abalos@yahoo.com'),
('da0a23', '09100677844', '', 'paolo.rincon@yahoo.com'),
('bcc6b5', '09596270413', '', 'aiden.castro@yahoo.com'),
('1742f0', '09748685317', '', 'grace.castro@yahoo.com'),
('41d366', '09109489963', '', 'paula.argente@yahoo.com'),
('33d2b4', '09115195317', '', 'rose.lorenzo@yahoo.com'),
('9cfdcf', '09111184559', '', 'lucas.manzano@yahoo.com'),
('7b48fd', '09473633968', '', 'sandra.velasco@yahoo.com'),
('b22006', '09873457450', '', 'renaldo.soriano@yahoo.com'),
('e357e8', '09671045965', '', 'moose.cruz@yahoo.com'),
('adfcdf', '09119589672', '', 'sandra.lanuza@yahoo.com'),
('a30ddf', '09110811365', '', 'paul.taylor@yahoo.com'),
('03d318', '09124527569', '', 'ronnelyn.padilla@yahoo.com'),
('1fa667', '09117408820', '', 'sandra.abalos@yahoo.com'),
('75f364', '09954870212', '', 'moose.manzano@yahoo.com'),
('a6380f', '09496912692', '', 'ronnelyn.santos@yahoo.com'),
('12c08b', '09124915573', '', 'jason.cruz@yahoo.com'),
('cb1e71', '09677624056', '', 'selena.abalos@yahoo.com'),
('b4a98c', '09128315287', '', 'grace.daracen@yahoo.com'),
('2e71d5', '09726187362', '', 'michael.asperas@yahoo.com'),
('77f1ee', '09758154006', '', 'paul.amandilio@yahoo.com'),
('886d27', '09112277370', '', 'james.rodriguez@yahoo.com'),
('3441a1', '09696683685', '', 'claud.reyes@yahoo.com'),
('b56e58', '09128919398', '', 'lucas.amandilio@yahoo.com'),
('b04767', '09104190852', '', 'aris.alvarez@yahoo.com'),
('f54ecb', '09840233399', '', 'renaldo.cruz@yahoo.com'),
('5e5bad', '09102836403', '', 'max.lorenzo@yahoo.com'),
('f5a35d', '09113559160', '', 'paolo.duncan@yahoo.com'),
('8f6025', '09121797555', '', 'jonnathan.andaya@yahoo.com'),
('e4cece', '09618474838', '', 'corey.castro@yahoo.com'),
('0ce329', '09133546986', '', 'jonnathan.manzano@yahoo.com'),
('346fd2', '09123247038', '', 'jason.abalos@yahoo.com'),
('bfc971', '09801711253', '', 'james.soriano@yahoo.com'),
('70dc24', '09473928709', '', 'paolo.cruz@yahoo.com'),
('2c927b', '09119129831', '', 'michael.rodriguez@yahoo.com'),
('474073', '09107223522', '', 'alvin.rincon@yahoo.com'),
('b22b9e', '09461655045', '', 'ronnie.cruz@yahoo.com'),
('ef505d', '09133875226', '', 'renaldo.rincon@yahoo.com'),
('d29018', '09483180380', '', 'paul.santos@yahoo.com'),
('2a0006', '09502352782', '', 'max.duncan@yahoo.com'),
('fb0c67', '09564777192', '', 'ronnie.santos@yahoo.com'),
('0b0a22', '09997011425', '', 'rose.lorenzo@yahoo.com'),
('bf76c1', '09119639555', '', 'paul.velasco@yahoo.com'),
('7fd80d', '09110796682', '', 'corey.duncan@yahoo.com'),
('4ff604', '09137436321', '', 'rose.rodriguez@yahoo.com'),
('93b9f0', '09124241137', '', 'jonnathan.lucio@yahoo.com'),
('6434eb', '09414515994', '', 'ronnie.castro@yahoo.com'),
('986c6f', '09417172836', '', 'lucas.argente@yahoo.com'),
('388817', '09454046670', '', 'aiden.andaya@yahoo.com'),
('76b77e', '09137302966', '', 'claud.daracen@yahoo.com'),
('202359', '09582604954', '', 'ronnie.cruz@yahoo.com'),
('ef28aa', '09953368357', '', 'jason.rodriguez@yahoo.com'),
('b52faa', '09832992211', '', 'lucas.lanuza@yahoo.com'),
('bf7a80', '09535793907', '', 'aiden.asperas@yahoo.com'),
('56dfc4', '09560251223', '', 'renaldo.duncan@yahoo.com'),
('de745b', '09769641227', '', 'selena.taylor@yahoo.com'),
('6a7a2f', '09439588656', '', 'aris.rincon@yahoo.com'),
('7edf37', '09814637580', '', 'james.padilla@yahoo.com'),
('93f38d', '09104963405', '', 'christine.alvarez@yahoo.com'),
('31dd54', '09685579083', '', 'paula.daracen@yahoo.com'),
('6c8cc8', '09931681994', '', 'corey.lucio@yahoo.com'),
('7e3733', '09428820948', '', 'mitch.padilla@yahoo.com'),
('c87b2f', '09129781378', '', 'claud.castro@yahoo.com'),
('4d5a77', '09104208169', '', 'christine.reyes@yahoo.com'),
('5d213b', '09108395154', '', 'claud.taylor@yahoo.com'),
('f0f431', '09880824445', '', 'christine.alvarez@yahoo.com'),
('1e80e4', '09129689570', '', 'paul.castro@yahoo.com'),
('4e590c', '09710906079', '', 'jude.nelito@yahoo.com'),
('8d9c57', '09433244033', '', 'paolo.duncan@yahoo.com'),
('396e12', '09624711969', '', 'claud.padilla@yahoo.com'),
('43e0a4', '09116313019', '', 'aris.asperas@yahoo.com'),
('2a112b', '09580686906', '', 'christine.daracen@yahoo.com'),
('2d46c5', '09839219174', '', 'corey.cruz@yahoo.com'),
('d565a2', '09850116628', '', 'selena.amandilio@yahoo.com'),
('e092b6', '09136173622', '', 'moose.andaya@yahoo.com'),
('6a02aa', '09451765383', '', 'alvin.rodriguez@yahoo.com'),
('58bc53', '09120071926', '', 'max.castro@yahoo.com'),
('04f897', '09610624651', '', 'claud.rodriguez@yahoo.com'),
('7a0cb8', '09113449726', '', 'ronnelyn.cruz@yahoo.com'),
('fd6964', '09792480684', '', 'moose.duncan@yahoo.com'),
('7709b4', '09462827422', '', 'lucas.lucio@yahoo.com'),
('e354c9', '09615666851', '', 'selena.taylor@yahoo.com'),
('e35257', '09126292145', '', 'mitch.andaya@yahoo.com'),
('744a87', '09733496621', '', 'jason.tuazon@yahoo.com'),
('3ca621', '09117191945', '', 'alvin.velasco@yahoo.com'),
('689179', '09663786781', '', 'aris.rodriguez@yahoo.com'),
('84aa98', '09481108950', '', 'corey.santos@yahoo.com'),
('0535ef', '09129223087', '', 'selena.amandilio@yahoo.com'),
('987483', '09582599594', '', 'mitch.velasco@yahoo.com'),
('85f58e', '09126508700', '', 'alvin.padilla@yahoo.com'),
('10f458', '09575310806', '', 'sandra.alvarez@yahoo.com'),
('c40882', '09761397401', '', 'jude.nelito@yahoo.com'),
('c67a28', '09414490206', '', 'aiden.padilla@yahoo.com'),
('574add', '09834929098', '', 'michael.daracen@yahoo.com'),
('ecbce3', '09124438133', '', 'corey.tuazon@yahoo.com'),
('807c6a', '09113649257', '', 'max.tuazon@yahoo.com'),
('ddd6cc', '09121232315', '', 'renaldo.velasco@yahoo.com'),
('7efd8f', '09107494601', '', 'selena.cruz@yahoo.com'),
('67730d', '09720452685', '', 'paul.castro@yahoo.com'),
('90b78c', '09103047138', '', 'mitch.lucio@yahoo.com'),
('181184', '09109658376', '', 'ronnelyn.taylor@yahoo.com'),
('ca9444', '09459705025', '', 'sandra.taylor@yahoo.com'),
('347b95', '09950877892', '', 'aris.reyes@yahoo.com'),
('539027', '09599463099', '', 'jonnathan.andaya@yahoo.com'),
('774732', '09100071800', '', 'alvin.daracen@yahoo.com'),
('3967f1', '09122614756', '', 'paul.daracen@yahoo.com'),
('4c09a5', '09524934686', '', 'sandra.cruz@yahoo.com'),
('62e779', '09518171048', '', 'max.daracen@yahoo.com'),
('38c05e', '09725268862', '', 'moose.lorenzo@yahoo.com'),
('c8888d', '09916986703', '', 'rose.abalos@yahoo.com'),
('16fa1d', '09113450616', '', 'rose.santos@yahoo.com'),
('a1615a', '09120408183', '', 'renaldo.manzano@yahoo.com'),
('ac89fc', '09108117843', '', 'paolo.abalos@yahoo.com'),
('ea17d3', '09106640703', '', 'selena.nelito@yahoo.com'),
('362804', '09913167210', '', 'jonnathan.lanuza@yahoo.com'),
('fcd0da', '09111226327', '', 'jason.manzano@yahoo.com'),
('20deb0', '09553608139', '', 'christine.lanuza@yahoo.com'),
('880c94', '09136772404', '', 'jude.daracen@yahoo.com'),
('1afcb9', '09843655781', '', 'paul.padilla@yahoo.com'),
('575ac6', '09820850714', '', 'aris.lucio@yahoo.com'),
('b3ea0b', '09109807506', '', 'aris.soriano@yahoo.com'),
('07455e', '09723993421', '', 'alvin.nelito@yahoo.com'),
('bee01f', '09968921431', '', 'jason.taylor@yahoo.com'),
('c1b782', '09135051825', '', 'claud.lorenzo@yahoo.com'),
('29fdc2', '09754727172', '', 'jonnathan.lanuza@yahoo.com'),
('94782f', '09412877283', '', 'claud.velasco@yahoo.com'),
('a7f037', '09134335144', '', 'james.alvarez@yahoo.com'),
('edf3e8', '09105959271', '', 'paolo.castro@yahoo.com'),
('7218ba', '09427683560', '', 'corey.rincon@yahoo.com'),
('28eccb', '09772383542', '', 'claud.asperas@yahoo.com'),
('7bdb8a', '09913979971', '', 'claud.reyes@yahoo.com'),
('9c43d3', '09135121632', '', 'rose.amoura@yahoo.com'),
('57c318', '09138370641', '', 'max.reyes@yahoo.com'),
('02eb13', '09108225092', '', 'renaldo.tuazon@yahoo.com'),
('3cbb9b', '09690710248', '', 'paula.manzano@yahoo.com'),
('60e19f', '09442598199', '', 'james.amandilio@yahoo.com'),
('46bd70', '09814911659', '', 'grace.asperas@yahoo.com'),
('1be9ba', '09525395793', '', 'corey.santos@yahoo.com'),
('93e65c', '09113903613', '', 'ronnelyn.amoura@yahoo.com'),
('dd6913', '09137624525', '', 'claud.abalos@yahoo.com'),
('abd8da', '09614366887', '', 'jason.soriano@yahoo.com'),
('f1c05c', '09723640344', '', 'christine.padilla@yahoo.com'),
('07ecff', '09100726628', '', 'corey.duncan@yahoo.com'),
('7a05d5', '09125838226', '', 'paula.cruz@yahoo.com'),
('0f381d', '09873038164', '', 'paula.rincon@yahoo.com'),
('687b83', '09454392550', '', 'jude.cruz@yahoo.com'),
('7c1b60', '09982613279', '', 'jason.castro@yahoo.com'),
('0c6436', '09801456577', '', 'claud.asperas@yahoo.com'),
('249101', '09123236227', '', 'paolo.andaya@yahoo.com'),
('4cb72d', '09589916944', '', 'moose.alvarez@yahoo.com'),
('876db7', '09106689919', '', 'lucas.castro@yahoo.com'),
('e260e7', '09113368645', '', 'jason.lanuza@yahoo.com'),
('8b6eb9', '09473410366', '', 'alvin.velasco@yahoo.com'),
('5efbae', '09990720931', '', 'paula.alvarez@yahoo.com'),
('39132d', '09798517231', '', 'paula.nelito@yahoo.com'),
('054d2b', '09112759033', '', 'aiden.lucio@yahoo.com'),
('b62f0f', '09672270848', '', 'selena.santos@yahoo.com'),
('1d9d59', '09549127677', '', 'jonnathan.andaya@yahoo.com'),
('4f806c', '09895197380', '', 'paul.rincon@yahoo.com'),
('fd38e2', '09100518280', '', 'grace.asperas@yahoo.com'),
('a8bccd', '09879462104', '', 'jude.rodriguez@yahoo.com'),
('00d8d6', '09550755550', '', 'alvin.rodriguez@yahoo.com'),
('11ee26', '09902121813', '', 'jason.cruz@yahoo.com'),
('eadec7', '09137102234', '', 'sandra.alvarez@yahoo.com'),
('5d86b4', '09106202255', '', 'moose.castro@yahoo.com'),
('2d6099', '09124931017', '', 'rose.soriano@yahoo.com'),
('6ccde8', '09952535037', '', 'ronnie.rodriguez@yahoo.com'),
('c6dfb8', '09730945643', '', 'james.santos@yahoo.com'),
('3d23a2', '09112864900', '', 'lucas.padilla@yahoo.com'),
('852b12', '09100912931', '', 'alvin.padilla@yahoo.com'),
('6bf704', '09751033393', '', 'max.lorenzo@yahoo.com'),
('570ef6', '09121306163', '', 'james.amoura@yahoo.com'),
('d492fb', '09114935851', '', 'aiden.soriano@yahoo.com'),
('745843', '09110053008', '', 'aiden.alvarez@yahoo.com'),
('90fd2b', '09529264561', '', 'jude.manzano@yahoo.com'),
('87a6df', '09119834836', '', 'ronnelyn.rodriguez@yahoo.com'),
('29ca57', '09686226115', '', 'michael.tuazon@yahoo.com'),
('4d0669', '09882557965', '', 'rose.daracen@yahoo.com'),
('9cb356', '09986388547', '', 'paula.santos@yahoo.com'),
('ddfb3a', '09119941367', '', 'sandra.argente@yahoo.com'),
('8e6a3a', '09821629300', '', 'alvin.amoura@yahoo.com'),
('e5e70a', '09105754304', '', 'rose.tuazon@yahoo.com'),
('3ae2a9', '09562242867', '', 'aris.abalos@yahoo.com'),
('c4744f', '09115035380', '', 'sandra.velasco@yahoo.com'),
('3a1d92', '09677276516', '', 'paula.nelito@yahoo.com'),
('21ffd7', '09973985669', '', 'grace.tuazon@yahoo.com'),
('5bb1f7', '09123241789', '', 'alvin.soriano@yahoo.com'),
('e78bbe', '09424114334', '', 'paolo.lucio@yahoo.com'),
('a571b7', '09958632771', '', 'aris.alvarez@yahoo.com'),
('840c45', '09138425030', '', 'claud.lorenzo@yahoo.com'),
('828c0a', '09114746639', '', 'paul.lucio@yahoo.com'),
('5e11cf', '09652273719', '', 'james.taylor@yahoo.com'),
('840446', '09101551440', '', 'aris.lanuza@yahoo.com'),
('aa2e6b', '09520176666', '', 'jonnathan.asperas@yahoo.com'),
('4c30ee', '09568709491', '', 'christine.castro@yahoo.com'),
('16df84', '09113447002', '', 'moose.nelito@yahoo.com'),
('7e943f', '09118751575', '', 'renaldo.padilla@yahoo.com'),
('c3e739', '09103444678', '', 'jonnathan.tuazon@yahoo.com'),
('cb8fc8', '09951714677', '', 'max.duncan@yahoo.com'),
('9036cc', '09121922201', '', 'ronnelyn.velasco@yahoo.com'),
('9a5d22', '09684352345', '', 'max.abalos@yahoo.com'),
('76f5a6', '09865462909', '', 'christine.lorenzo@yahoo.com'),
('426a72', '09133530483', '', 'moose.lorenzo@yahoo.com'),
('38c1ba', '09776153539', '', 'paolo.santos@yahoo.com'),
('a38fa8', '09736036871', '', 'moose.alvarez@yahoo.com'),
('56a422', '09818278901', '', 'rose.lorenzo@yahoo.com'),
('03e4d9', '09834335184', '', 'sandra.abalos@yahoo.com'),
('3a859b', '09693208422', '', 'grace.asperas@yahoo.com'),
('1fdd06', '09848693663', '', 'mitch.velasco@yahoo.com'),
('e66005', '09589091061', '', 'alvin.cruz@yahoo.com'),
('d0eb47', '09122102872', '', 'paula.abalos@yahoo.com'),
('d5a5b5', '09121920904', '', 'lucas.cruz@yahoo.com'),
('7d6682', '09884208556', '', 'jonnathan.santos@yahoo.com'),
('f0b7cf', '09125408352', '', 'jude.duncan@yahoo.com'),
('aa1d53', '09957558425', '', 'christine.manzano@yahoo.com'),
('26438f', '09505436950', '', 'mitch.rincon@yahoo.com'),
('4dc350', '09136428983', '', 'alvin.reyes@yahoo.com'),
('8c02eb', '09128730189', '', 'alvin.santos@yahoo.com'),
('58398a', '09864024483', '', 'jude.abalos@yahoo.com'),
('3fe32a', '09116292705', '', 'rose.reyes@yahoo.com'),
('19990f', '09108429673', '', 'alvin.taylor@yahoo.com'),
('ef7e8c', '09125582142', '', 'ronnie.argente@yahoo.com'),
('2d0c12', '09107796774', '', 'aiden.tuazon@yahoo.com'),
('88de31', '09941824037', '', 'james.lucio@yahoo.com'),
('e4c8fc', '09125973278', '', 'corey.lorenzo@yahoo.com'),
('886bf4', '09522436764', '', 'rose.andaya@yahoo.com'),
('1fb237', '09432499145', '', 'rose.amandilio@yahoo.com'),
('4dbc48', '09761238064', '', 'mitch.rodriguez@yahoo.com'),
('a8c754', '09102026384', '', 'james.lucio@yahoo.com'),
('06f094', '09648239792', '', 'jude.duncan@yahoo.com'),
('ed3a70', '09117807817', '', 'paula.argente@yahoo.com'),
('097082', '09969714699', '', 'ronnie.santos@yahoo.com'),
('ae274f', '09136923020', '', 'jason.asperas@yahoo.com'),
('ed25b0', '09870281588', '', 'michael.abalos@yahoo.com'),
('d99637', '09123989198', '', 'claud.daracen@yahoo.com'),
('ff72a2', '09815828950', '', 'jude.asperas@yahoo.com'),
('803d64', '09140573812', '', 'selena.andaya@yahoo.com'),
('045619', '09698610047', '', 'ronnie.nelito@yahoo.com'),
('34c43f', '09714110948', '', 'lucas.nelito@yahoo.com'),
('0cea28', '09461304494', '', 'jonnathan.amoura@yahoo.com'),
('8b635c', '09504457219', '', 'alvin.soriano@yahoo.com'),
('73830f', '09127651367', '', 'max.alvarez@yahoo.com'),
('30aeca', '09827288048', '', 'christine.soriano@yahoo.com'),
('71a10e', '09114533978', '', 'ronnie.duncan@yahoo.com'),
('c1fcb9', '09791646511', '', 'aiden.tuazon@yahoo.com'),
('b96825', '09499256644', '', 'michael.rincon@yahoo.com'),
('7339ca', '09129055103', '', 'jonnathan.soriano@yahoo.com'),
('8eea5e', '09126537060', '', 'claud.taylor@yahoo.com'),
('6c4735', '09941072960', '', 'jason.lorenzo@yahoo.com'),
('782d26', '09482693340', '', 'alvin.castro@yahoo.com'),
('f33bed', '09518332439', '', 'ronnelyn.nelito@yahoo.com'),
('193fef', '09126106878', '', 'paolo.rodriguez@yahoo.com'),
('64693c', '09479485647', '', 'corey.nelito@yahoo.com'),
('184b56', '09130818947', '', 'selena.alvarez@yahoo.com'),
('9e7e3c', '09134426712', '', 'paul.nelito@yahoo.com'),
('c19568', '09136359130', '', 'corey.reyes@yahoo.com'),
('19fb49', '09105536117', '', 'ronnie.tuazon@yahoo.com'),
('3a0f97', '09117899504', '', 'aiden.reyes@yahoo.com'),
('4000c1', '09756804666', '', 'jonnathan.cruz@yahoo.com'),
('fefbc2', '09137522274', '', 'max.padilla@yahoo.com'),
('94968e', '09119126806', '', 'renaldo.andaya@yahoo.com'),
('3d86b9', '09109399781', '', 'aris.castro@yahoo.com'),
('fb988f', '09577284122', '', 'paula.rincon@yahoo.com'),
('9337cd', '09583758286', '', 'paul.lanuza@yahoo.com'),
('d74fc0', '09130104925', '', 'corey.asperas@yahoo.com'),
('055aa4', '09440477169', '', 'james.reyes@yahoo.com'),
('8ffdb3', '09784431196', '', 'alvin.amandilio@yahoo.com'),
('cb8712', '09596235700', '', 'mitch.duncan@yahoo.com'),
('01964c', '09109501444', '', 'aris.castro@yahoo.com'),
('63cd2a', '09470079024', '', 'paul.rodriguez@yahoo.com'),
('827027', '09132411472', '', 'moose.nelito@yahoo.com'),
('9997bf', '09134716029', '', 'lucas.padilla@yahoo.com'),
('5b8f41', '09439878021', '', 'alvin.amandilio@yahoo.com'),
('d0e75d', '09984445575', '', 'max.amandilio@yahoo.com'),
('29e280', '09129607648', '', 'lucas.tuazon@yahoo.com'),
('060ebc', '09503074646', '', 'paolo.nelito@yahoo.com'),
('27b4d3', '09645511208', '', 'renaldo.rodriguez@yahoo.com'),
('271906', '09932545215', '', 'jonnathan.soriano@yahoo.com'),
('3940d8', '09781312496', '', 'paula.taylor@yahoo.com'),
('795e03', '09133617229', '', 'rose.taylor@yahoo.com'),
('e0e970', '09464537983', '', 'alvin.castro@yahoo.com'),
('51d865', '09673612044', '', 'jude.rodriguez@yahoo.com'),
('26b54f', '09129537822', '', 'aiden.abalos@yahoo.com'),
('09dc80', '09706961554', '', 'lucas.amoura@yahoo.com'),
('7829ac', '09594637484', '', 'paul.asperas@yahoo.com'),
('f3835b', '09111418855', '', 'corey.alvarez@yahoo.com'),
('0ecc1d', '09138314937', '', 'moose.abalos@yahoo.com'),
('15e808', '09118508615', '', 'sandra.alvarez@yahoo.com'),
('70e433', '09544354735', '', 'claud.rodriguez@yahoo.com'),
('07a111', '09618831214', '', 'jonnathan.asperas@yahoo.com'),
('a2531d', '09853547749', '', 'paolo.alvarez@yahoo.com'),
('bafb15', '09704598815', '', 'aiden.rincon@yahoo.com'),
('6bc5e6', '09132198121', '', 'claud.manzano@yahoo.com'),
('a27d41', '09484354212', '', 'selena.taylor@yahoo.com'),
('f33ad8', '09717056580', '', 'alvin.soriano@yahoo.com'),
('3432b5', '09738225943', '', 'paolo.lucio@yahoo.com'),
('aca58d', '09475064186', '', 'james.reyes@yahoo.com'),
('4bef57', '09718776155', '', 'moose.soriano@yahoo.com'),
('299adb', '09855601776', '', 'aris.cruz@yahoo.com'),
('33d290', '09103037879', '', 'lucas.velasco@yahoo.com'),
('dcff8c', '09523003284', '', 'sandra.lucio@yahoo.com'),
('8d7be6', '09129892080', '', 'ronnie.daracen@yahoo.com'),
('3e030e', '09131691552', '', 'mitch.rincon@yahoo.com'),
('7aeca9', '09836878096', '', 'jonnathan.argente@yahoo.com'),
('429753', '09130875140', '', 'james.asperas@yahoo.com'),
('8966fe', '09924654059', '', 'jude.tuazon@yahoo.com'),
('8fa2d4', '09518171429', '', 'renaldo.tuazon@yahoo.com'),
('3c7be3', '09992150717', '', 'lucas.taylor@yahoo.com'),
('67ad77', '09115712053', '', 'corey.taylor@yahoo.com'),
('de59c6', '09676779785', '', 'max.argente@yahoo.com'),
('78d3dd', '09468971543', '', 'ronnie.argente@yahoo.com'),
('98ef6c', '09620808117', '', 'christine.abalos@yahoo.com'),
('c472c7', '09132575532', '', 'lucas.rincon@yahoo.com'),
('76642a', '09459651280', '', 'grace.castro@yahoo.com'),
('a94d49', '09581947171', '', 'jonnathan.amoura@yahoo.com'),
('e958b9', '09733280842', '', 'selena.amandilio@yahoo.com'),
('042a09', '09109091862', '', 'paul.lorenzo@yahoo.com'),
('157e09', '09633439704', '', 'grace.lanuza@yahoo.com'),
('0f1800', '09667035456', '', 'jude.rincon@yahoo.com'),
('c6e6e5', '09102008637', '', 'rose.duncan@yahoo.com'),
('73f99e', '09681878701', '', 'mitch.nelito@yahoo.com'),
('52a5c8', '09101770357', '', 'rose.lanuza@yahoo.com'),
('938eb5', '09839195087', '', 'ronnie.andaya@yahoo.com'),
('8b0750', '09132443485', '', 'paul.asperas@yahoo.com'),
('4f2a03', '09947952039', '', 'rose.amoura@yahoo.com'),
('365a32', '09669781358', '', 'ronnelyn.amoura@yahoo.com'),
('V23f31', '09123671827', NULL, 'pierrotmendiola@yahoo.com'),
('740617176216', '09192637190', NULL, 'ravenous@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee_locations`
--

CREATE TABLE IF NOT EXISTS `ems_employee_locations` (
  `employee_id` varchar(175) DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee_locations`
--

INSERT INTO `ems_employee_locations` (`employee_id`, `address`) VALUES
('trVHh3', '6, aurellana st., bagong ilog, pasig city'),
('bas0A5', '6, aurellana st., bagong ilog, pasig city'),
('t2uSuf', '6 aurellana st., bagong ilog, pasig city'),
('Qa5iew', '6, aurellana st., bagong ilog, pasig city'),
('d124f2', '6, aurellana st., bagong ilog, pasig city'),
('dd23e9', '6, aurellana st., bagong ilog, pasig city'),
('ed76e4', '6, aurellana st., bagong ilog, pasig city'),
('f2e310', '6, aurellana st., bagong ilog, pasig city'),
('f47321', '6, aurellana st., bagong ilog, pasig city'),
('9ded77', '6, aurellana st., bagong ilog, pasig city'),
('609fdb', '6, aurellana st., bagong ilog, pasig city'),
('477f69', '6, aurellana st., bagong ilog, pasig city'),
('9015e5', '6, aurellana st., bagong ilog, pasig city'),
('f593df', '6, aurellana st., bagong ilog, pasig city'),
('05f94c', '6, aurellana st., bagong ilog, pasig city'),
('6fe386', '6, aurellana st., bagong ilog, pasig city'),
('15129a', '6, aurellana st., bagong ilog, pasig city'),
('99921371', '6, aurellana st., bagong ilog, pasig city'),
('c44b45', '6, aurellana st., bagong ilog, pasig city'),
('83856e', '6, aurellana st., bagong ilog, pasig city'),
('33583d', '6, aurellana st., bagong ilog, pasig city'),
('a6c1ce', '6, aurellana st., bagong ilog, pasig city'),
('ccd9b2', '6, aurellana st., bagong ilog, pasig city'),
('27b30f', '6, aurellana st., bagong ilog, pasig city'),
('e4ab23', '6, aurellana st., bagong ilog, pasig city'),
('88d23f', '6, aurellana st., bagong ilog, pasig city'),
('9b5ebb', '6, aurellana st., bagong ilog, pasig city'),
('a01598', '6, aurellana st., bagong ilog, pasig city'),
('e6ca0e', '6, aurellana st., bagong ilog, pasig city'),
('3443c7', '6, aurellana st., bagong ilog, pasig city'),
('872a32', '6, aurellana st., bagong ilog, pasig city'),
('d6dd84', '6, aurellana st., bagong ilog, pasig city'),
('00f924', '6, aurellana st., bagong ilog, pasig city'),
('0e3ad2', '6, aurellana st., bagong ilog, pasig city'),
('d93794', '6, aurellana st., bagong ilog, pasig city'),
('a688d5', '6, aurellana st., bagong ilog, pasig city'),
('72e678', '6, aurellana st., bagong ilog, pasig city'),
('b6f63c', '6, aurellana st., bagong ilog, pasig city'),
('a0dce5', '6, aurellana st., bagong ilog, pasig city'),
('1433d2', '6, aurellana st., bagong ilog, pasig city'),
('edfd34', '6, aurellana st., bagong ilog, pasig city'),
('3f9031', '6, aurellana st., bagong ilog, pasig city'),
('6de808', '6, aurellana st., bagong ilog, pasig city'),
('3e3b8b', '6, aurellana st., bagong ilog, pasig city'),
('7b912d', '6, aurellana st., bagong ilog, pasig city'),
('5e8185', '6, aurellana st., bagong ilog, pasig city'),
('025222', '6, aurellana st., bagong ilog, pasig city'),
('56abda', '6, aurellana st., bagong ilog, pasig city'),
('42dda7', '6, aurellana st., bagong ilog, pasig city'),
('49949b', '6, aurellana st., bagong ilog, pasig city'),
('52d7c9', '6, aurellana st., bagong ilog, pasig city'),
('bd0467', '6, aurellana st., bagong ilog, pasig city'),
('fba3f9', '6, aurellana st., bagong ilog, pasig city'),
('6a5915', '6, aurellana st., bagong ilog, pasig city'),
('bb6bbc', '6, aurellana st., bagong ilog, pasig city'),
('a4ae13', '6, aurellana st., bagong ilog, pasig city'),
('28487e', '6, aurellana st., bagong ilog, pasig city'),
('e207ec', '6, aurellana st., bagong ilog, pasig city'),
('fb7f1e', '6, aurellana st., bagong ilog, pasig city'),
('0b3c05', '6, aurellana st., bagong ilog, pasig city'),
('e25d48', '6, aurellana st., bagong ilog, pasig city'),
('fa9310', '6, aurellana st., bagong ilog, pasig city'),
('72a1df', '6, aurellana st., bagong ilog, pasig city'),
('213b5a', '6, aurellana st., bagong ilog, pasig city'),
('ab6b21', '6, aurellana st., bagong ilog, pasig city'),
('d2ce15', '6, aurellana st., bagong ilog, pasig city'),
('9ff3c9', '6, aurellana st., bagong ilog, pasig city'),
('b4e3bc', '6, aurellana st., bagong ilog, pasig city'),
('7159fc', '6, aurellana st., bagong ilog, pasig city'),
('78a988', '6, aurellana st., bagong ilog, pasig city'),
('5ce022', '6, aurellana st., bagong ilog, pasig city'),
('2de5fe', '6, aurellana st., bagong ilog, pasig city'),
('18ed22', '6, aurellana st., bagong ilog, pasig city'),
('13afea', '6, aurellana st., bagong ilog, pasig city'),
('e84502', '6, aurellana st., bagong ilog, pasig city'),
('d735ca', '6, aurellana st., bagong ilog, pasig city'),
('1f2926', '6, aurellana st., bagong ilog, pasig city'),
('e8a155', '6, aurellana st., bagong ilog, pasig city'),
('c95cfb', '6, aurellana st., bagong ilog, pasig city'),
('da0a23', '6, aurellana st., bagong ilog, pasig city'),
('bcc6b5', '6, aurellana st., bagong ilog, pasig city'),
('1742f0', '6, aurellana st., bagong ilog, pasig city'),
('41d366', '6, aurellana st., bagong ilog, pasig city'),
('33d2b4', '6, aurellana st., bagong ilog, pasig city'),
('9cfdcf', '6, aurellana st., bagong ilog, pasig city'),
('7b48fd', '6, aurellana st., bagong ilog, pasig city'),
('b22006', '6, aurellana st., bagong ilog, pasig city'),
('e357e8', '6, aurellana st., bagong ilog, pasig city'),
('adfcdf', '6, aurellana st., bagong ilog, pasig city'),
('a30ddf', '6, aurellana st., bagong ilog, pasig city'),
('03d318', '6, aurellana st., bagong ilog, pasig city'),
('1fa667', '6, aurellana st., bagong ilog, pasig city'),
('75f364', '6, aurellana st., bagong ilog, pasig city'),
('a6380f', '6, aurellana st., bagong ilog, pasig city'),
('12c08b', '6, aurellana st., bagong ilog, pasig city'),
('cb1e71', '6, aurellana st., bagong ilog, pasig city'),
('b4a98c', '6, aurellana st., bagong ilog, pasig city'),
('2e71d5', '6, aurellana st., bagong ilog, pasig city'),
('77f1ee', '6, aurellana st., bagong ilog, pasig city'),
('886d27', '6, aurellana st., bagong ilog, pasig city'),
('3441a1', '6, aurellana st., bagong ilog, pasig city'),
('b56e58', '6, aurellana st., bagong ilog, pasig city'),
('b04767', '6, aurellana st., bagong ilog, pasig city'),
('f54ecb', '6, aurellana st., bagong ilog, pasig city'),
('5e5bad', '6, aurellana st., bagong ilog, pasig city'),
('f5a35d', '6, aurellana st., bagong ilog, pasig city'),
('8f6025', '6, aurellana st., bagong ilog, pasig city'),
('e4cece', '6, aurellana st., bagong ilog, pasig city'),
('0ce329', '6, aurellana st., bagong ilog, pasig city'),
('346fd2', '6, aurellana st., bagong ilog, pasig city'),
('bfc971', '6, aurellana st., bagong ilog, pasig city'),
('70dc24', '6, aurellana st., bagong ilog, pasig city'),
('2c927b', '6, aurellana st., bagong ilog, pasig city'),
('474073', '6, aurellana st., bagong ilog, pasig city'),
('b22b9e', '6, aurellana st., bagong ilog, pasig city'),
('ef505d', '6, aurellana st., bagong ilog, pasig city'),
('d29018', '6, aurellana st., bagong ilog, pasig city'),
('2a0006', '6, aurellana st., bagong ilog, pasig city'),
('fb0c67', '6, aurellana st., bagong ilog, pasig city'),
('0b0a22', '6, aurellana st., bagong ilog, pasig city'),
('bf76c1', '6, aurellana st., bagong ilog, pasig city'),
('7fd80d', '6, aurellana st., bagong ilog, pasig city'),
('4ff604', '6, aurellana st., bagong ilog, pasig city'),
('93b9f0', '6, aurellana st., bagong ilog, pasig city'),
('6434eb', '6, aurellana st., bagong ilog, pasig city'),
('986c6f', '6, aurellana st., bagong ilog, pasig city'),
('388817', '6, aurellana st., bagong ilog, pasig city'),
('76b77e', '6, aurellana st., bagong ilog, pasig city'),
('202359', '6, aurellana st., bagong ilog, pasig city'),
('ef28aa', '6, aurellana st., bagong ilog, pasig city'),
('b52faa', '6, aurellana st., bagong ilog, pasig city'),
('bf7a80', '6, aurellana st., bagong ilog, pasig city'),
('56dfc4', '6, aurellana st., bagong ilog, pasig city'),
('de745b', '6, aurellana st., bagong ilog, pasig city'),
('6a7a2f', '6, aurellana st., bagong ilog, pasig city'),
('7edf37', '6, aurellana st., bagong ilog, pasig city'),
('93f38d', '6, aurellana st., bagong ilog, pasig city'),
('31dd54', '6, aurellana st., bagong ilog, pasig city'),
('6c8cc8', '6, aurellana st., bagong ilog, pasig city'),
('7e3733', '6, aurellana st., bagong ilog, pasig city'),
('c87b2f', '6, aurellana st., bagong ilog, pasig city'),
('4d5a77', '6, aurellana st., bagong ilog, pasig city'),
('5d213b', '6, aurellana st., bagong ilog, pasig city'),
('f0f431', '6, aurellana st., bagong ilog, pasig city'),
('1e80e4', '6, aurellana st., bagong ilog, pasig city'),
('4e590c', '6, aurellana st., bagong ilog, pasig city'),
('8d9c57', '6, aurellana st., bagong ilog, pasig city'),
('396e12', '6, aurellana st., bagong ilog, pasig city'),
('43e0a4', '6, aurellana st., bagong ilog, pasig city'),
('2a112b', '6, aurellana st., bagong ilog, pasig city'),
('2d46c5', '6, aurellana st., bagong ilog, pasig city'),
('d565a2', '6, aurellana st., bagong ilog, pasig city'),
('e092b6', '6, aurellana st., bagong ilog, pasig city'),
('6a02aa', '6, aurellana st., bagong ilog, pasig city'),
('58bc53', '6, aurellana st., bagong ilog, pasig city'),
('04f897', '6, aurellana st., bagong ilog, pasig city'),
('7a0cb8', '6, aurellana st., bagong ilog, pasig city'),
('fd6964', '6, aurellana st., bagong ilog, pasig city'),
('7709b4', '6, aurellana st., bagong ilog, pasig city'),
('e354c9', '6, aurellana st., bagong ilog, pasig city'),
('e35257', '6, aurellana st., bagong ilog, pasig city'),
('744a87', '6, aurellana st., bagong ilog, pasig city'),
('3ca621', '6, aurellana st., bagong ilog, pasig city'),
('689179', '6, aurellana st., bagong ilog, pasig city'),
('84aa98', '6, aurellana st., bagong ilog, pasig city'),
('0535ef', '6, aurellana st., bagong ilog, pasig city'),
('987483', '6, aurellana st., bagong ilog, pasig city'),
('85f58e', '6, aurellana st., bagong ilog, pasig city'),
('10f458', '6, aurellana st., bagong ilog, pasig city'),
('c40882', '6, aurellana st., bagong ilog, pasig city'),
('c67a28', '6, aurellana st., bagong ilog, pasig city'),
('574add', '6, aurellana st., bagong ilog, pasig city'),
('ecbce3', '6, aurellana st., bagong ilog, pasig city'),
('807c6a', '6, aurellana st., bagong ilog, pasig city'),
('ddd6cc', '6, aurellana st., bagong ilog, pasig city'),
('7efd8f', '6, aurellana st., bagong ilog, pasig city'),
('67730d', '6, aurellana st., bagong ilog, pasig city'),
('90b78c', '6, aurellana st., bagong ilog, pasig city'),
('181184', '6, aurellana st., bagong ilog, pasig city'),
('ca9444', '6, aurellana st., bagong ilog, pasig city'),
('347b95', '6, aurellana st., bagong ilog, pasig city'),
('539027', '6, aurellana st., bagong ilog, pasig city'),
('774732', '6, aurellana st., bagong ilog, pasig city'),
('3967f1', '6, aurellana st., bagong ilog, pasig city'),
('4c09a5', '6, aurellana st., bagong ilog, pasig city'),
('62e779', '6, aurellana st., bagong ilog, pasig city'),
('38c05e', '6, aurellana st., bagong ilog, pasig city'),
('c8888d', '6, aurellana st., bagong ilog, pasig city'),
('16fa1d', '6, aurellana st., bagong ilog, pasig city'),
('a1615a', '6, aurellana st., bagong ilog, pasig city'),
('ac89fc', '6, aurellana st., bagong ilog, pasig city'),
('ea17d3', '6, aurellana st., bagong ilog, pasig city'),
('362804', '6, aurellana st., bagong ilog, pasig city'),
('fcd0da', '6, aurellana st., bagong ilog, pasig city'),
('20deb0', '6, aurellana st., bagong ilog, pasig city'),
('880c94', '6, aurellana st., bagong ilog, pasig city'),
('1afcb9', '6, aurellana st., bagong ilog, pasig city'),
('575ac6', '6, aurellana st., bagong ilog, pasig city'),
('b3ea0b', '6, aurellana st., bagong ilog, pasig city'),
('07455e', '6, aurellana st., bagong ilog, pasig city'),
('bee01f', '6, aurellana st., bagong ilog, pasig city'),
('c1b782', '6, aurellana st., bagong ilog, pasig city'),
('29fdc2', '6, aurellana st., bagong ilog, pasig city'),
('94782f', '6, aurellana st., bagong ilog, pasig city'),
('a7f037', '6, aurellana st., bagong ilog, pasig city'),
('edf3e8', '6, aurellana st., bagong ilog, pasig city'),
('7218ba', '6, aurellana st., bagong ilog, pasig city'),
('28eccb', '6, aurellana st., bagong ilog, pasig city'),
('7bdb8a', '6, aurellana st., bagong ilog, pasig city'),
('9c43d3', '6, aurellana st., bagong ilog, pasig city'),
('57c318', '6, aurellana st., bagong ilog, pasig city'),
('02eb13', '6, aurellana st., bagong ilog, pasig city'),
('3cbb9b', '6, aurellana st., bagong ilog, pasig city'),
('60e19f', '6, aurellana st., bagong ilog, pasig city'),
('46bd70', '6, aurellana st., bagong ilog, pasig city'),
('1be9ba', '6, aurellana st., bagong ilog, pasig city'),
('93e65c', '6, aurellana st., bagong ilog, pasig city'),
('dd6913', '6, aurellana st., bagong ilog, pasig city'),
('abd8da', '6, aurellana st., bagong ilog, pasig city'),
('f1c05c', '6, aurellana st., bagong ilog, pasig city'),
('07ecff', '6, aurellana st., bagong ilog, pasig city'),
('7a05d5', '6, aurellana st., bagong ilog, pasig city'),
('0f381d', '6, aurellana st., bagong ilog, pasig city'),
('687b83', '6, aurellana st., bagong ilog, pasig city'),
('7c1b60', '6, aurellana st., bagong ilog, pasig city'),
('0c6436', '6, aurellana st., bagong ilog, pasig city'),
('249101', '6, aurellana st., bagong ilog, pasig city'),
('4cb72d', '6, aurellana st., bagong ilog, pasig city'),
('876db7', '6, aurellana st., bagong ilog, pasig city'),
('e260e7', '6, aurellana st., bagong ilog, pasig city'),
('8b6eb9', '6, aurellana st., bagong ilog, pasig city'),
('5efbae', '6, aurellana st., bagong ilog, pasig city'),
('39132d', '6, aurellana st., bagong ilog, pasig city'),
('054d2b', '6, aurellana st., bagong ilog, pasig city'),
('b62f0f', '6, aurellana st., bagong ilog, pasig city'),
('1d9d59', '6, aurellana st., bagong ilog, pasig city'),
('4f806c', '6, aurellana st., bagong ilog, pasig city'),
('fd38e2', '6, aurellana st., bagong ilog, pasig city'),
('a8bccd', '6, aurellana st., bagong ilog, pasig city'),
('00d8d6', '6, aurellana st., bagong ilog, pasig city'),
('11ee26', '6, aurellana st., bagong ilog, pasig city'),
('eadec7', '6, aurellana st., bagong ilog, pasig city'),
('5d86b4', '6, aurellana st., bagong ilog, pasig city'),
('2d6099', '6, aurellana st., bagong ilog, pasig city'),
('6ccde8', '6, aurellana st., bagong ilog, pasig city'),
('c6dfb8', '6, aurellana st., bagong ilog, pasig city'),
('3d23a2', '6, aurellana st., bagong ilog, pasig city'),
('852b12', '6, aurellana st., bagong ilog, pasig city'),
('6bf704', '6, aurellana st., bagong ilog, pasig city'),
('570ef6', '6, aurellana st., bagong ilog, pasig city'),
('d492fb', '6, aurellana st., bagong ilog, pasig city'),
('745843', '6, aurellana st., bagong ilog, pasig city'),
('90fd2b', '6, aurellana st., bagong ilog, pasig city'),
('87a6df', '6, aurellana st., bagong ilog, pasig city'),
('29ca57', '6, aurellana st., bagong ilog, pasig city'),
('4d0669', '6, aurellana st., bagong ilog, pasig city'),
('9cb356', '6, aurellana st., bagong ilog, pasig city'),
('ddfb3a', '6, aurellana st., bagong ilog, pasig city'),
('8e6a3a', '6, aurellana st., bagong ilog, pasig city'),
('e5e70a', '6, aurellana st., bagong ilog, pasig city'),
('3ae2a9', '6, aurellana st., bagong ilog, pasig city'),
('c4744f', '6, aurellana st., bagong ilog, pasig city'),
('3a1d92', '6, aurellana st., bagong ilog, pasig city'),
('21ffd7', '6, aurellana st., bagong ilog, pasig city'),
('5bb1f7', '6, aurellana st., bagong ilog, pasig city'),
('e78bbe', '6, aurellana st., bagong ilog, pasig city'),
('a571b7', '6, aurellana st., bagong ilog, pasig city'),
('840c45', '6, aurellana st., bagong ilog, pasig city'),
('828c0a', '6, aurellana st., bagong ilog, pasig city'),
('5e11cf', '6, aurellana st., bagong ilog, pasig city'),
('840446', '6, aurellana st., bagong ilog, pasig city'),
('aa2e6b', '6, aurellana st., bagong ilog, pasig city'),
('4c30ee', '6, aurellana st., bagong ilog, pasig city'),
('16df84', '6, aurellana st., bagong ilog, pasig city'),
('7e943f', '6, aurellana st., bagong ilog, pasig city'),
('c3e739', '6, aurellana st., bagong ilog, pasig city'),
('cb8fc8', '6, aurellana st., bagong ilog, pasig city'),
('9036cc', '6, aurellana st., bagong ilog, pasig city'),
('9a5d22', '6, aurellana st., bagong ilog, pasig city'),
('76f5a6', '6, aurellana st., bagong ilog, pasig city'),
('426a72', '6, aurellana st., bagong ilog, pasig city'),
('38c1ba', '6, aurellana st., bagong ilog, pasig city'),
('a38fa8', '6, aurellana st., bagong ilog, pasig city'),
('56a422', '6, aurellana st., bagong ilog, pasig city'),
('03e4d9', '6, aurellana st., bagong ilog, pasig city'),
('3a859b', '6, aurellana st., bagong ilog, pasig city'),
('1fdd06', '6, aurellana st., bagong ilog, pasig city'),
('e66005', '6, aurellana st., bagong ilog, pasig city'),
('d0eb47', '6, aurellana st., bagong ilog, pasig city'),
('d5a5b5', '6, aurellana st., bagong ilog, pasig city'),
('7d6682', '6, aurellana st., bagong ilog, pasig city'),
('f0b7cf', '6, aurellana st., bagong ilog, pasig city'),
('aa1d53', '6, aurellana st., bagong ilog, pasig city'),
('26438f', '6, aurellana st., bagong ilog, pasig city'),
('4dc350', '6, aurellana st., bagong ilog, pasig city'),
('8c02eb', '6, aurellana st., bagong ilog, pasig city'),
('58398a', '6, aurellana st., bagong ilog, pasig city'),
('3fe32a', '6, aurellana st., bagong ilog, pasig city'),
('19990f', '6, aurellana st., bagong ilog, pasig city'),
('ef7e8c', '6, aurellana st., bagong ilog, pasig city'),
('2d0c12', '6, aurellana st., bagong ilog, pasig city'),
('88de31', '6, aurellana st., bagong ilog, pasig city'),
('e4c8fc', '6, aurellana st., bagong ilog, pasig city'),
('886bf4', '6, aurellana st., bagong ilog, pasig city'),
('1fb237', '6, aurellana st., bagong ilog, pasig city'),
('4dbc48', '6, aurellana st., bagong ilog, pasig city'),
('a8c754', '6, aurellana st., bagong ilog, pasig city'),
('06f094', '6, aurellana st., bagong ilog, pasig city'),
('ed3a70', '6, aurellana st., bagong ilog, pasig city'),
('097082', '6, aurellana st., bagong ilog, pasig city'),
('ae274f', '6, aurellana st., bagong ilog, pasig city'),
('ed25b0', '6, aurellana st., bagong ilog, pasig city'),
('d99637', '6, aurellana st., bagong ilog, pasig city'),
('ff72a2', '6, aurellana st., bagong ilog, pasig city'),
('803d64', '6, aurellana st., bagong ilog, pasig city'),
('045619', '6, aurellana st., bagong ilog, pasig city'),
('34c43f', '6, aurellana st., bagong ilog, pasig city'),
('0cea28', '6, aurellana st., bagong ilog, pasig city'),
('8b635c', '6, aurellana st., bagong ilog, pasig city'),
('73830f', '6, aurellana st., bagong ilog, pasig city'),
('30aeca', '6, aurellana st., bagong ilog, pasig city'),
('71a10e', '6, aurellana st., bagong ilog, pasig city'),
('c1fcb9', '6, aurellana st., bagong ilog, pasig city'),
('b96825', '6, aurellana st., bagong ilog, pasig city'),
('7339ca', '6, aurellana st., bagong ilog, pasig city'),
('8eea5e', '6, aurellana st., bagong ilog, pasig city'),
('6c4735', '6, aurellana st., bagong ilog, pasig city'),
('782d26', '6, aurellana st., bagong ilog, pasig city'),
('f33bed', '6, aurellana st., bagong ilog, pasig city'),
('193fef', '6, aurellana st., bagong ilog, pasig city'),
('64693c', '6, aurellana st., bagong ilog, pasig city'),
('184b56', '6, aurellana st., bagong ilog, pasig city'),
('9e7e3c', '6, aurellana st., bagong ilog, pasig city'),
('c19568', '6, aurellana st., bagong ilog, pasig city'),
('19fb49', '6, aurellana st., bagong ilog, pasig city'),
('3a0f97', '6, aurellana st., bagong ilog, pasig city'),
('4000c1', '6, aurellana st., bagong ilog, pasig city'),
('fefbc2', '6, aurellana st., bagong ilog, pasig city'),
('94968e', '6, aurellana st., bagong ilog, pasig city'),
('3d86b9', '6, aurellana st., bagong ilog, pasig city'),
('fb988f', '6, aurellana st., bagong ilog, pasig city'),
('9337cd', '6, aurellana st., bagong ilog, pasig city'),
('d74fc0', '6, aurellana st., bagong ilog, pasig city'),
('055aa4', '6, aurellana st., bagong ilog, pasig city'),
('8ffdb3', '6, aurellana st., bagong ilog, pasig city'),
('cb8712', '6, aurellana st., bagong ilog, pasig city'),
('01964c', '6, aurellana st., bagong ilog, pasig city'),
('63cd2a', '6, aurellana st., bagong ilog, pasig city'),
('827027', '6, aurellana st., bagong ilog, pasig city'),
('9997bf', '6, aurellana st., bagong ilog, pasig city'),
('5b8f41', '6, aurellana st., bagong ilog, pasig city'),
('d0e75d', '6, aurellana st., bagong ilog, pasig city'),
('29e280', '6, aurellana st., bagong ilog, pasig city'),
('060ebc', '6, aurellana st., bagong ilog, pasig city'),
('27b4d3', '6, aurellana st., bagong ilog, pasig city'),
('271906', '6, aurellana st., bagong ilog, pasig city'),
('3940d8', '6, aurellana st., bagong ilog, pasig city'),
('795e03', '6, aurellana st., bagong ilog, pasig city'),
('e0e970', '6, aurellana st., bagong ilog, pasig city'),
('51d865', '6, aurellana st., bagong ilog, pasig city'),
('26b54f', '6, aurellana st., bagong ilog, pasig city'),
('09dc80', '6, aurellana st., bagong ilog, pasig city'),
('7829ac', '6, aurellana st., bagong ilog, pasig city'),
('f3835b', '6, aurellana st., bagong ilog, pasig city'),
('0ecc1d', '6, aurellana st., bagong ilog, pasig city'),
('15e808', '6, aurellana st., bagong ilog, pasig city'),
('70e433', '6, aurellana st., bagong ilog, pasig city'),
('07a111', '6, aurellana st., bagong ilog, pasig city'),
('a2531d', '6, aurellana st., bagong ilog, pasig city'),
('bafb15', '6, aurellana st., bagong ilog, pasig city'),
('6bc5e6', '6, aurellana st., bagong ilog, pasig city'),
('a27d41', '6, aurellana st., bagong ilog, pasig city'),
('f33ad8', '6, aurellana st., bagong ilog, pasig city'),
('3432b5', '6, aurellana st., bagong ilog, pasig city'),
('aca58d', '6, aurellana st., bagong ilog, pasig city'),
('4bef57', '6, aurellana st., bagong ilog, pasig city'),
('299adb', '6, aurellana st., bagong ilog, pasig city'),
('33d290', '6, aurellana st., bagong ilog, pasig city'),
('dcff8c', '6, aurellana st., bagong ilog, pasig city'),
('8d7be6', '6, aurellana st., bagong ilog, pasig city'),
('3e030e', '6, aurellana st., bagong ilog, pasig city'),
('7aeca9', '6, aurellana st., bagong ilog, pasig city'),
('429753', '6, aurellana st., bagong ilog, pasig city'),
('8966fe', '6, aurellana st., bagong ilog, pasig city'),
('8fa2d4', '6, aurellana st., bagong ilog, pasig city'),
('3c7be3', '6, aurellana st., bagong ilog, pasig city'),
('67ad77', '6, aurellana st., bagong ilog, pasig city'),
('de59c6', '6, aurellana st., bagong ilog, pasig city'),
('78d3dd', '6, aurellana st., bagong ilog, pasig city'),
('98ef6c', '6, aurellana st., bagong ilog, pasig city'),
('c472c7', '6, aurellana st., bagong ilog, pasig city'),
('76642a', '6, aurellana st., bagong ilog, pasig city'),
('a94d49', '6, aurellana st., bagong ilog, pasig city'),
('e958b9', '6, aurellana st., bagong ilog, pasig city'),
('042a09', '6, aurellana st., bagong ilog, pasig city'),
('157e09', '6, aurellana st., bagong ilog, pasig city'),
('0f1800', '6, aurellana st., bagong ilog, pasig city'),
('c6e6e5', '6, aurellana st., bagong ilog, pasig city'),
('73f99e', '6, aurellana st., bagong ilog, pasig city'),
('52a5c8', '6, aurellana st., bagong ilog, pasig city'),
('938eb5', '6, aurellana st., bagong ilog, pasig city'),
('8b0750', '6, aurellana st., bagong ilog, pasig city'),
('4f2a03', '6, aurellana st., bagong ilog, pasig city'),
('365a32', '6, aurellana st., bagong ilog, pasig city'),
('V23f31', '7, aurellana st., bagong ilog, pasig city'),
('740617176216', '12, aurellana st., bagong ilog, pasig city');

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee_type`
--

CREATE TABLE IF NOT EXISTS `ems_employee_type` (
  `employee_type` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(75) DEFAULT NULL,
  `working_hours` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`employee_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ems_employee_type`
--

INSERT INTO `ems_employee_type` (`employee_type`, `type`, `working_hours`) VALUES
(1, 'Fulltime', 8),
(2, 'Part-Time', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ems_leaves`
--

CREATE TABLE IF NOT EXISTS `ems_leaves` (
  `leave_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(75) DEFAULT NULL,
  `leave_type` varchar(75) DEFAULT NULL,
  `date_leave` datetime DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `reason` text,
  `status` tinyint(4) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_given_status` datetime DEFAULT NULL,
  PRIMARY KEY (`leave_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ems_leaves`
--

INSERT INTO `ems_leaves` (`leave_no`, `employee_id`, `leave_type`, `date_leave`, `no_of_days`, `reason`, `status`, `date_added`, `date_given_status`) VALUES
(1, '025222', 'emergency leave', '2014-01-22 00:00:00', 7, 'family problems', 1, NULL, NULL),
(2, '11233845', 'emergency leave', '2014-02-04 00:00:00', 1, 'meow', 0, '2014-02-03 02:34:11', '2014-02-03 02:34:11'),
(3, '11233845', 'sick leave', '2014-02-20 00:00:00', 2, 'emergency lang', 0, '2014-02-19 09:21:41', '2014-02-19 09:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `ems_positions`
--

CREATE TABLE IF NOT EXISTS `ems_positions` (
  `position_no` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `pos_name` varchar(75) DEFAULT NULL,
  `dept_no` tinyint(3) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`position_no`),
  KEY `dept_no` (`dept_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `ems_positions`
--

INSERT INTO `ems_positions` (`position_no`, `pos_name`, `dept_no`) VALUES
(00005, 'HR Head', 005),
(00009, 'Producer Worker', 007),
(00011, 'Finance Manager', 008),
(00012, 'Finance Assistant', 008),
(00013, 'Assets and Treasury Manager', 008),
(00014, 'Assets and Treasury Assistant', 008),
(00015, 'Liaison', 008),
(00016, 'Treasury Clerk', 008),
(00017, 'Senior Bookeeper', 009),
(00018, 'Bookeeper', 009),
(00019, 'Senior Accounting Clerk', 009),
(00020, 'Accounting Clerk', 009),
(00021, 'Billing Clerk', 009),
(00022, 'Shift Accountant', 009),
(00023, 'Supervisor', 011),
(00024, 'IT Staff', 011),
(00025, 'Manager', 012),
(00026, 'Supervisor', 012),
(00027, 'Coordinator', 012),
(00028, 'Purchasing Assistant', 012),
(00029, 'Driver', 012),
(00030, 'Sales and Admin Manager', 013),
(00031, 'Sales and Admin Assistant', 013),
(00032, 'Account Executive', 013),
(00033, 'General Clerk', 013),
(00034, 'Receptionist', 013),
(00035, 'Warehouse Staff', 013),
(00036, 'Marketing Manager', 013),
(00037, 'Marketing Assistant', 013),
(00038, 'Sales Engineer', 013),
(00039, 'Driver', 013),
(00047, 'Assistant General Manager', 014),
(00048, 'General Manager', 014),
(00049, 'Sales and Marketing Head', 014),
(00050, 'Sales and Marketing Assistant', 014),
(00051, 'Export Assistant', 014),
(00052, 'Export Delivery Coordinator', 014),
(00053, 'Export Clerk', 014),
(00054, 'Executive Driver', 015),
(00055, 'Utility', 015),
(00056, 'Secretary', 015),
(00057, 'Driver', 015),
(00058, 'Legal Officer', 016),
(00059, 'Project Coordinator', 016),
(00060, 'Secretary', 016),
(00061, 'HR Assistant', 005),
(00062, 'Messenger', 017),
(00063, 'Secretary', 017),
(00064, 'MAMC Clerk', 017),
(00065, 'Driver', 017),
(00066, 'Bookeeper', 010);

-- --------------------------------------------------------

--
-- Table structure for table `mis_accounts`
--

CREATE TABLE IF NOT EXISTS `mis_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `user_password` char(40) DEFAULT NULL,
  `origpassword` varchar(75) DEFAULT NULL,
  `firstname` varchar(75) DEFAULT NULL,
  `middlename` varchar(75) DEFAULT NULL,
  `lastname` varchar(75) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mis_accounts`
--

INSERT INTO `mis_accounts` (`account_id`, `username`, `user_password`, `origpassword`, `firstname`, `middlename`, `lastname`, `user_lvl`) VALUES
(1, 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Super', NULL, 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_prefixes`
--

CREATE TABLE IF NOT EXISTS `module_prefixes` (
  `module_prefix` varchar(10) NOT NULL,
  `desccription` varchar(75) NOT NULL,
  PRIMARY KEY (`module_prefix`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_prefixes`
--

INSERT INTO `module_prefixes` (`module_prefix`, `desccription`) VALUES
('crm.admin', 'Admin module of Customer Relationship Management'),
('ems.admin', 'Admin module of Employee Management'),
('pay.admin', 'Admin module of Payroll Management');

-- --------------------------------------------------------

--
-- Table structure for table `pms_accounts`
--

CREATE TABLE IF NOT EXISTS `pms_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `user_password` char(40) DEFAULT NULL,
  `origpassword` varchar(75) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(75) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pms_accounts`
--

INSERT INTO `pms_accounts` (`account_id`, `username`, `user_password`, `origpassword`, `firstname`, `middlename`, `lastname`, `user_lvl`) VALUES
(1, 'admin-pms.admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Lester', NULL, 'Soriano', 1),
(2, 'ryan.derilo@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Lester', NULL, 'Soriano', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pms_attendance_monitoring`
--

CREATE TABLE IF NOT EXISTS `pms_attendance_monitoring` (
  `attend_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `emp_no` varchar(175) DEFAULT NULL,
  `time_in` datetime DEFAULT NULL,
  `timeout` datetime DEFAULT NULL,
  `mins_late` int(11) DEFAULT NULL,
  PRIMARY KEY (`attend_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pms_attendance_monitoring`
--

INSERT INTO `pms_attendance_monitoring` (`attend_no`, `emp_no`, `time_in`, `timeout`, `mins_late`) VALUES
(6, '00f924', '2014-03-02 23:26:27', '2014-03-03 23:26:38', 20486366);

-- --------------------------------------------------------

--
-- Table structure for table `pms_bir_tax`
--

CREATE TABLE IF NOT EXISTS `pms_bir_tax` (
  `ded_no` int(11) NOT NULL AUTO_INCREMENT,
  `exemption` decimal(10,2) DEFAULT NULL,
  `status` decimal(10,2) DEFAULT NULL,
  `sme` decimal(10,2) DEFAULT NULL,
  `me_one` decimal(10,2) DEFAULT NULL,
  `me_two` decimal(10,2) DEFAULT NULL,
  `me_three` decimal(10,2) DEFAULT NULL,
  `me_four` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`ded_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pms_bir_tax`
--

INSERT INTO `pms_bir_tax` (`ded_no`, `exemption`, `status`, `sme`, `me_one`, `me_two`, `me_three`, `me_four`) VALUES
(1, '0.00', '0.00', '1.00', '1.00', '1.00', '1.00', '1.00'),
(2, '0.00', '0.05', '4167.00', '6250.00', '8333.00', '10417.00', '12500.00'),
(3, '41.67', '0.10', '5000.00', '7083.00', '9167.00', '11250.00', '13333.00'),
(4, '208.33', '0.15', '6667.00', '8750.00', '10333.00', '12917.00', '15000.00'),
(5, '708.33', '0.20', '10000.00', '12083.00', '14167.00', '16250.00', '18333.00'),
(6, '1875.00', '0.25', '15833.00', '17917.00', '20000.00', '22083.00', '24167.00'),
(7, '4167.67', '0.30', '25000.00', '27083.00', '29167.00', '31250.00', '33333.00'),
(8, '10416.67', '0.32', '458333.00', '47917.00', '50000.00', '52083.00', '54167.00');

-- --------------------------------------------------------

--
-- Table structure for table `pms_deduction`
--

CREATE TABLE IF NOT EXISTS `pms_deduction` (
  `deduction_no` int(11) NOT NULL AUTO_INCREMENT,
  `from_range` decimal(8,2) DEFAULT NULL,
  `to_range` decimal(8,2) DEFAULT NULL,
  `sss` decimal(8,2) DEFAULT NULL,
  `pagibig` decimal(8,2) DEFAULT NULL,
  `philhealth` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`deduction_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pms_deduction`
--

INSERT INTO `pms_deduction` (`deduction_no`, `from_range`, `to_range`, `sss`, `pagibig`, `philhealth`) VALUES
(1, '1000.00', '1249.00', '104.00', '80.00', '80.00'),
(2, '1250.00', '1749.00', '156.00', '100.00', '100.00'),
(3, '1750.00', '2249.00', '208.00', '150.00', '150.00');

-- --------------------------------------------------------

--
-- Table structure for table `pms_deduction_pagibig`
--

CREATE TABLE IF NOT EXISTS `pms_deduction_pagibig` (
  `deduction` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pms_deduction_pagibig`
--

INSERT INTO `pms_deduction_pagibig` (`deduction`) VALUES
('100.00');

-- --------------------------------------------------------

--
-- Table structure for table `pms_deduction_philhealth`
--

CREATE TABLE IF NOT EXISTS `pms_deduction_philhealth` (
  `ded_no` int(11) NOT NULL AUTO_INCREMENT,
  `from_range` decimal(10,2) DEFAULT NULL,
  `to_range` decimal(10,2) DEFAULT NULL,
  `deduction` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`ded_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `pms_deduction_philhealth`
--

INSERT INTO `pms_deduction_philhealth` (`ded_no`, `from_range`, `to_range`, `deduction`) VALUES
(1, '100.00', '4999.99', '25.00'),
(2, '5000.00', '5999.99', '50.00'),
(3, '6000.00', '6999.99', '150.00'),
(4, '7000.00', '7999.99', '175.00'),
(5, '8000.00', '8999.99', '200.00'),
(6, '9000.00', '9999.99', '225.00'),
(7, '10000.00', '11999.99', '275.00'),
(8, '12000.00', '12999.99', '300.00'),
(9, '13000.00', '13999.99', '325.00'),
(10, '14000.00', '14999.99', '350.00'),
(11, '15000.00', '15999.99', '375.00'),
(12, '16000.00', '16999.99', '400.00'),
(13, '17000.00', '17999.99', '425.00'),
(14, '20000.00', '20999.99', '500.00'),
(15, '21000.00', '21999.99', '525.00'),
(16, '22000.00', '22999.99', '550.00'),
(17, '23000.00', '23999.99', '575.00'),
(18, '24000.00', '24999.99', '600.00'),
(19, '25000.00', '25999.99', '650.00'),
(20, '27000.00', '27999.99', '675.00'),
(21, '29000.00', '29999.99', '725.00'),
(22, '30000.00', '999999.99', '750.00');

-- --------------------------------------------------------

--
-- Table structure for table `pms_deduction_sss`
--

CREATE TABLE IF NOT EXISTS `pms_deduction_sss` (
  `ded_no` int(11) NOT NULL AUTO_INCREMENT,
  `from_range` decimal(10,2) DEFAULT NULL,
  `to_range` decimal(10,2) DEFAULT NULL,
  `deduction_value` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`ded_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `pms_deduction_sss`
--

INSERT INTO `pms_deduction_sss` (`ded_no`, `from_range`, `to_range`, `deduction_value`) VALUES
(1, '1000.00', '1249.99', '105.00'),
(2, '1250.00', '1749.99', '104.30'),
(3, '1750.00', '2249.99', '208.00'),
(4, '2250.00', '2749.99', '260.00'),
(5, '2750.00', '3249.99', '312.00'),
(6, '3250.00', '3749.99', '364.00'),
(7, '3750.00', '4249.99', '416.00'),
(8, '4250.00', '4749.99', '468.00'),
(9, '4750.00', '5249.99', '520.00'),
(10, '5250.00', '5749.99', '572.00'),
(11, '5750.00', '6249.99', '624.00'),
(12, '6250.00', '6749.99', '624.00'),
(14, '6750.00', '7249.99', '728.00'),
(15, '7250.00', '7749.99', '780.00'),
(16, '7750.00', '8249.99', '832.00'),
(17, '8250.00', '8749.99', '832.00'),
(18, '8250.00', '8749.99', '884.00'),
(19, '8750.00', '9249.99', '936.00'),
(20, '9250.00', '9749.99', '988.00'),
(21, '9750.00', '10249.99', '1040.00'),
(22, '10250.00', '10749.99', '1092.00'),
(23, '10750.00', '11249.99', '1144.00'),
(24, '11250.00', '11749.99', '1196.00'),
(25, '11750.00', '12249.99', '1248.00'),
(26, '12250.00', '12749.99', '1300.00'),
(27, '12750.00', '13249.99', '1352.00'),
(28, '13750.00', '14249.99', '1404.00'),
(29, '13750.00', '14249.99', '1456.00'),
(30, '14250.00', '14749.99', '1508.00'),
(31, '14750.00', '1000000.99', '1560.00');

-- --------------------------------------------------------

--
-- Table structure for table `pms_logged_employee`
--

CREATE TABLE IF NOT EXISTS `pms_logged_employee` (
  `employee_id` varchar(175) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pms_logged_employee`
--

INSERT INTO `pms_logged_employee` (`employee_id`) VALUES
('05f94c');

-- --------------------------------------------------------

--
-- Table structure for table `pms_position_rate`
--

CREATE TABLE IF NOT EXISTS `pms_position_rate` (
  `position_no` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `rate` float DEFAULT NULL,
  PRIMARY KEY (`position_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `pms_position_rate`
--

INSERT INTO `pms_position_rate` (`position_no`, `rate`) VALUES
(00005, 75.25),
(00009, 75.25),
(00011, 75.25),
(00012, 75.25),
(00013, 75.25),
(00014, 75.25),
(00015, 75.25),
(00016, 75.25),
(00017, 75.25),
(00018, 75.25),
(00019, 75.25),
(00020, 75.25),
(00021, 75.25),
(00022, 75.25),
(00023, 75.25),
(00024, 75.25),
(00025, 75.25),
(00026, 75.25),
(00027, 75.25),
(00028, 75.25),
(00029, 75.25),
(00030, 75.25),
(00031, 75.25),
(00032, 75.25),
(00033, 75.25),
(00034, 75.25),
(00035, 75.25),
(00036, 75.25),
(00037, 75.25),
(00038, 75.25),
(00039, 75.25),
(00040, 75.25),
(00041, 75.25),
(00042, 75.25),
(00043, 75.25),
(00044, 75.25),
(00045, 75.25),
(00046, 75.25),
(00047, 75.25),
(00048, 75.25),
(00049, 75.25),
(00050, 75.25),
(00051, 75.25),
(00052, 75.25),
(00053, 75.25),
(00054, 75.25),
(00055, 75.25),
(00056, 75.25),
(00057, 75.25),
(00058, 75.25),
(00059, 75.25),
(00060, 75.25),
(00061, 75.25),
(00062, 75.25),
(00063, 75.25),
(00064, 75.25),
(00065, 75.25),
(00066, 75.25),
(00067, 75.25);

-- --------------------------------------------------------

--
-- Table structure for table `pms_schedule_time`
--

CREATE TABLE IF NOT EXISTS `pms_schedule_time` (
  `time_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `grace_period` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pms_schedule_time`
--

INSERT INTO `pms_schedule_time` (`time_in`, `grace_period`) VALUES
('2014-01-29 02:00:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE IF NOT EXISTS `user_levels` (
  `user_lvl` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_lvl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`user_lvl`, `level_name`) VALUES
(1, 'Admin'),
(2, 'Employee'),
(3, 'Customer');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ems_positions`
--
ALTER TABLE `ems_positions`
  ADD CONSTRAINT `ems_positions_ibfk_1` FOREIGN KEY (`dept_no`) REFERENCES `ems_departments` (`dept_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
