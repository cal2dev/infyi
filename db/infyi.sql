-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2015 at 06:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infyi`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_sessions`
--

CREATE TABLE IF NOT EXISTS `app_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `app_sessions`
--

INSERT INTO `app_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('12db45471d371496d214f486a8da33b76638f9d2', '::1', 1443531782, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333533313631303b),
('5bd9e236b3f6ac061b9d0f29e67ebddbafcd1bb5', '::1', 1443530704, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333533303638383b),
('74eddc9b45417c5f364716275c4cae378c03ae3f', '::1', 1443531955, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333533313935323b),
('b1ce7d39b8d165b228c16439ad594563a42f288d', '::1', 1443529076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313434333532393037323b);

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE IF NOT EXISTS `login_data` (
  `login_data_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `record_hash` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `cookie_hash` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `sess_id` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cstamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ustamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remark` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rest_keys`
--

CREATE TABLE IF NOT EXISTS `rest_keys` (
  `id` int(11) NOT NULL,
  `key_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rest_keys`
--

INSERT INTO `rest_keys` (`id`, `key_name`, `key`, `level`, `ignore_limits`, `date_created`) VALUES
(1, 'board', '123456', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rest_logs`
--

CREATE TABLE IF NOT EXISTS `rest_logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `params` text COLLATE utf8_unicode_ci,
  `api_key` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rtime` double DEFAULT NULL,
  `authorized` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `response_code` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rest_logs`
--

INSERT INTO `rest_logs` (`id`, `uri`, `method`, `params`, `api_key`, `ip_address`, `time`, `rtime`, `authorized`, `response_code`) VALUES
(1, 'start/signup', 'get', NULL, '', '::1', '2015-09-29 18:30:10', 0.471027135849, '0', 403),
(2, 'start/signup', 'get', NULL, '', '::1', '2015-09-29 18:30:36', 0.87205004692078, '0', 403),
(3, 'start/signup', 'get', NULL, '123456', '::1', '2015-09-29 18:33:02', 0.91105198860168, '1', 0),
(4, 'start/signup', 'get', NULL, '123456', '::1', '2015-09-29 18:35:53', 1.0380589962006, '1', 0),
(5, 'start/login', 'get', NULL, '123456', '::1', '2015-09-29 18:35:55', 0.12300705909729, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `data_id` int(11) NOT NULL,
  `register_id` int(11) DEFAULT NULL,
  `record_hash` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unique_id` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_id` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cstamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ustamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE IF NOT EXISTS `user_register` (
  `register_id` int(11) NOT NULL,
  `unique_id` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `record_hash` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_id` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reg_active` tinyint(1) NOT NULL DEFAULT '0',
  `reg_status` int(11) NOT NULL DEFAULT '0',
  `reg_now` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cstamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ustamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_sessions`
--
ALTER TABLE `app_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`login_data_id`);

--
-- Indexes for table `rest_keys`
--
ALTER TABLE `rest_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_logs`
--
ALTER TABLE `rest_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`data_id`), ADD UNIQUE KEY `UNIQ_D772BFAA4976CB7E` (`register_id`), ADD KEY `data_id` (`data_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `login_data_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rest_keys`
--
ALTER TABLE `rest_keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rest_logs`
--
ALTER TABLE `rest_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
ADD CONSTRAINT `FK_D772BFAA4976CB7E` FOREIGN KEY (`register_id`) REFERENCES `user_register` (`register_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
