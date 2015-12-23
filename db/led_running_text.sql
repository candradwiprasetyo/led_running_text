-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 07:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `led_running_text`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
`building_id` int(11) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `building_img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`building_id`, `building_name`, `building_img`) VALUES
(1, 'Gateway Teluk Lamong', '20150414010408_new.png');

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE IF NOT EXISTS `colour` (
`colour_id` int(11) NOT NULL,
  `colour_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`colour_id`, `colour_name`) VALUES
(1, 'Hijau'),
(2, 'Merah'),
(3, 'Kuning');

-- --------------------------------------------------------

--
-- Table structure for table `master_values`
--

CREATE TABLE IF NOT EXISTS `master_values` (
`value_id` int(11) NOT NULL,
  `value_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_values`
--

INSERT INTO `master_values` (`value_id`, `value_name`) VALUES
(2, 'int');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
`table_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `table_ip` varchar(100) NOT NULL,
  `data_x` int(11) NOT NULL,
  `data_y` int(11) NOT NULL,
  `table_description` text NOT NULL,
  `table_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`table_id`, `tt_id`, `table_name`, `table_ip`, `data_x`, `data_y`, `table_description`, `table_status`) VALUES
(22, 1, 'Gate 1', '192.168.1.1', 244, 201, '', 0),
(43, 1, 'Gate 2', '192.168.1.2', 547, 200, '', 1),
(44, 1, 'Gate 3', '192.168.1.3', 838, 201, '\r\n', 1),
(45, 1, 'Gate 4', '192.168.1.4', 250, 311, '', 1),
(46, 1, 'Gate 5', '192.168.1.5', 544, 309, '', 0),
(47, 1, 'Gate 6', '192.168.1.6', 834, 311, '', 0),
(48, 1, 'Gate 7', '192.168.1.7', 253, 478, '', 0),
(49, 1, 'Gate 8', '192.168.1.8', 540, 475, '', 0),
(50, 1, 'Gate 9', '192.168.1.9', 830, 472, '', 0),
(51, 1, 'Gate 10', '192.168.1.10', 253, 564, '', 0),
(52, 1, 'Gate 11', '192.168.1.11', 543, 560, '', 0),
(53, 1, 'Gate 12', '192.168.1.13', 830, 554, '', 0),
(54, 1, 'Gate 13', '192.168.1.14', 543, 646, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_blocks`
--

CREATE TABLE IF NOT EXISTS `table_blocks` (
`tb_id` int(11) NOT NULL,
  `tb_name` varchar(100) NOT NULL,
  `building_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_blocks`
--

INSERT INTO `table_blocks` (`tb_id`, `tb_name`, `building_id`) VALUES
(1, 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_types`
--

CREATE TABLE IF NOT EXISTS `table_types` (
`tt_id` int(11) NOT NULL,
  `tt_name` varchar(100) NOT NULL,
  `tb_id` int(11) NOT NULL,
  `tt_img` text NOT NULL,
  `tt_color` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_types`
--

INSERT INTO `table_types` (`tt_id`, `tt_name`, `tb_id`, `tt_img`, `tt_color`) VALUES
(1, 'Tipe 30', 1, '20150415020442_30.jpg', '#333');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
`transaction_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `value` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `table_id`, `value`, `date`) VALUES
(1, 22, 'test', '2015-12-22 14:58:17'),
(2, 22, '1 INT X', '2015-12-22 14:58:47'),
(3, 22, '1 INT X', '2015-12-22 15:13:03'),
(4, 48, '1 INT X', '2015-12-22 15:29:48'),
(5, 22, '2 INT X', '2015-12-22 15:33:26'),
(6, 46, '1 test 2', '2015-12-23 07:59:13'),
(7, 46, '1 test 3', '2015-12-23 07:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `user_login` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_code` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_img` text NOT NULL,
  `user_active_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type_id`, `user_login`, `user_password`, `user_name`, `user_code`, `user_phone`, `user_img`, `user_active_status`) VALUES
(11, 1, 'melon', '3a2cf27458c9aa3e358f8fc0f002bff6', 'melon', 'A0001', '03125435432', '', 1),
(12, 2, 'andri', '6bd3108684ccc9dfd40b126877f850b0', 'Andri Febri', '', '0858 3030 2123', 'images.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
 ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
 ADD PRIMARY KEY (`colour_id`);

--
-- Indexes for table `master_values`
--
ALTER TABLE `master_values`
 ADD PRIMARY KEY (`value_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
 ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `table_blocks`
--
ALTER TABLE `table_blocks`
 ADD PRIMARY KEY (`tb_id`);

--
-- Indexes for table `table_types`
--
ALTER TABLE `table_types`
 ADD PRIMARY KEY (`tt_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
 ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
MODIFY `building_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
MODIFY `colour_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master_values`
--
ALTER TABLE `master_values`
MODIFY `value_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `table_blocks`
--
ALTER TABLE `table_blocks`
MODIFY `tb_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_types`
--
ALTER TABLE `table_types`
MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
