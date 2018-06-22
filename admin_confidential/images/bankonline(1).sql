-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2016 at 11:49 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.10RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bankonline`
--
CREATE DATABASE IF NOT EXISTS `bankonline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bankonline`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

DROP TABLE IF EXISTS `trans`;
CREATE TABLE IF NOT EXISTS `trans` (
  `id` int(11) NOT NULL,
  `sender` int(11) DEFAULT NULL,
  `receiver` int(11) NOT NULL,
  `ref_no` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `trans_type` varchar(20) NOT NULL,
  `trans_descript` text NOT NULL,
  `transac_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_code`
--

DROP TABLE IF EXISTS `trans_code`;
CREATE TABLE IF NOT EXISTS `trans_code` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `code1` varchar(20) NOT NULL,
  `code_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_code1`
--

DROP TABLE IF EXISTS `trans_code1`;
CREATE TABLE IF NOT EXISTS `trans_code1` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `code1` varchar(20) NOT NULL,
  `code_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_code2`
--

DROP TABLE IF EXISTS `trans_code2`;
CREATE TABLE IF NOT EXISTS `trans_code2` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `code1` varchar(20) NOT NULL,
  `code_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_code3`
--

DROP TABLE IF EXISTS `trans_code3`;
CREATE TABLE IF NOT EXISTS `trans_code3` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `code1` varchar(20) NOT NULL,
  `code_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_code4`
--

DROP TABLE IF EXISTS `trans_code4`;
CREATE TABLE IF NOT EXISTS `trans_code4` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `code1` varchar(20) NOT NULL,
  `code_confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_acc`
--

DROP TABLE IF EXISTS `user_acc`;
CREATE TABLE IF NOT EXISTS `user_acc` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `acc_no` bigint(20) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_dp`
--

DROP TABLE IF EXISTS `user_dp`;
CREATE TABLE IF NOT EXISTS `user_dp` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `key` text NOT NULL,
  `activated` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indexes for table `trans_code`
--
ALTER TABLE `trans_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- Indexes for table `trans_code1`
--
ALTER TABLE `trans_code1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id_2` (`u_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `trans_code2`
--
ALTER TABLE `trans_code2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id_2` (`u_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `trans_code3`
--
ALTER TABLE `trans_code3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id_2` (`u_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `trans_code4`
--
ALTER TABLE `trans_code4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id_2` (`u_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `acc_no` (`acc_no`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- Indexes for table `user_dp`
--
ALTER TABLE `user_dp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_code`
--
ALTER TABLE `trans_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_code1`
--
ALTER TABLE `trans_code1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_code2`
--
ALTER TABLE `trans_code2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_code3`
--
ALTER TABLE `trans_code3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trans_code4`
--
ALTER TABLE `trans_code4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_dp`
--
ALTER TABLE `user_dp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `trans_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `user_login` (`id`),
  ADD CONSTRAINT `trans_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `trans_code`
--
ALTER TABLE `trans_code`
  ADD CONSTRAINT `trans_code_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `trans_code1`
--
ALTER TABLE `trans_code1`
  ADD CONSTRAINT `trans_code1_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `trans_code2`
--
ALTER TABLE `trans_code2`
  ADD CONSTRAINT `trans_code2_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `trans_code3`
--
ALTER TABLE `trans_code3`
  ADD CONSTRAINT `trans_code3_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `trans_code4`
--
ALTER TABLE `trans_code4`
  ADD CONSTRAINT `trans_code4_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_login` (`id`);

--
-- Constraints for table `user_acc`
--
ALTER TABLE `user_acc`
  ADD CONSTRAINT `user_acc_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_login` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_dp`
--
ALTER TABLE `user_dp`
  ADD CONSTRAINT `user_dp_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_login` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
