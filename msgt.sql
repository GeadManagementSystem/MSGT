-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2018 at 02:34 AM
-- Server version: 5.7.20
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventlog`
--

CREATE TABLE `eventlog` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_in_charge` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlog`
--

INSERT INTO `eventlog` (`event_id`, `event_time`, `user_in_charge`, `description`) VALUES
(1, '2018-06-14 23:42:03', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(2, '2018-06-14 23:42:19', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(3, '2018-06-14 23:43:05', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(4, '2018-06-14 23:43:35', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(5, '2018-06-14 23:44:02', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(6, '2018-06-14 23:44:08', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(7, '2018-06-14 23:52:23', 'Manager', '<b>Staff Member</b>: Abebe Kebede <b class=\'text-success\'> [Added]<b>'),
(8, '2018-06-14 23:52:53', 'Manager', '<b>Staff Member</b>: Abebe Kebede <b class=\'text-danger\'> [Deleted]<b>'),
(9, '2018-06-14 23:53:15', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(10, '2018-06-14 23:53:34', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Unit Price:</b> 1000, <b>Quanity: </b>12 <b class=\'text-success\'> [Added]<b>'),
(11, '2018-06-14 23:53:56', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Old Price:</b> 1000.00, <b>New Price:</b> 2,000.00 <b class=\'text-success\'> [Price Updated]<b>'),
(12, '2018-06-14 23:54:03', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Unit Price:</b> 2000.00, <b>Quanity: </b>12 <b class=\'text-danger\'> [Deleted]<b>'),
(13, '2018-06-14 23:54:07', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(14, '2018-06-14 23:56:48', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(15, '2018-06-14 23:57:14', 'Stockmanager', '<b>Item Name: </b>Television, <b>Unit Price:</b> 10,000.00, <b>Quanity: </b>12 <b class=\'text-success\'> [Added]<b>'),
(16, '2018-06-14 23:57:42', 'Stockmanager', '<b>Item Name: </b>Television, <b>Old Price:</b> 10,000.00, <b>New Price:</b> 300,000.00 <b class=\'text-success\'> [Price Updated]<b>'),
(17, '2018-06-14 23:57:47', 'Stockmanager', '<b>Item Name: </b>Television, <b>Unit Price:</b> 300000.00, <b>Quanity: </b>12 <b class=\'text-danger\'> [Deleted]<b>'),
(18, '2018-06-14 23:59:06', 'Stockmanager', '<b>Item Name: </b>Refrigirator, <b>Unit Price:</b> 30,000,000,000,000.00, <b>Quanity: </b>12 <b class=\'text-success\'> [Added]<b>'),
(19, '2018-06-14 23:59:17', 'Stockmanager', '<b>Item Name: </b>Refrigirator, <b>Unit Price:</b> 99,999,999.99, <b>Quanity: </b>12 <b class=\'text-danger\'> [Deleted]<b>'),
(20, '2018-06-15 00:00:38', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(21, '2018-06-16 18:00:32', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(22, '2018-06-16 18:36:50', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(23, '2018-06-16 19:57:33', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(24, '2018-06-16 19:57:47', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(25, '2018-06-16 19:57:57', 'Stockmanager', '<b>Item Name: </b>123, <b>Unit Price:</b> 3,443.00, <b>Quanity: </b>43 <b class=\'text-success\'> [Added]<b>'),
(26, '2018-06-16 19:58:00', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(27, '2018-06-16 19:58:12', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(28, '2018-06-16 19:59:27', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(29, '2018-06-16 19:59:39', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Unit Price:</b> 312,321.00, <b>Quanity: </b>12 <b class=\'text-success\'> [Added]<b>'),
(30, '2018-06-16 19:59:48', 'Stockmanager', '<b>Item Name: </b>TV, <b>Unit Price:</b> 1,323.00, <b>Quanity: </b>231 <b class=\'text-success\'> [Added]<b>'),
(31, '2018-06-16 20:12:06', 'Stockmanager', '<b>Item Name: </b>123, <b>Unit Price:</b> 3,443.00, <b>Quanity: </b>43 <b class=\'text-danger\'> [Deleted]<b>'),
(32, '2018-06-16 21:27:40', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Unit Price:</b> 312,321.00, <b>Quanity: </b>12 <b class=\'text-danger\'> [Deleted]<b>'),
(33, '2018-06-16 21:27:42', 'Stockmanager', '<b>Item Name: </b>TV, <b>Unit Price:</b> 1,323.00, <b>Quanity: </b>231 <b class=\'text-danger\'> [Deleted]<b>'),
(34, '2018-06-16 21:28:11', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Unit Price:</b> 100.00, <b>Quanity: </b>12 <b class=\'text-success\'> [Added]<b>'),
(35, '2018-06-16 21:28:37', 'Stockmanager', '<b>Item Name: </b>TV, <b>Unit Price:</b> 5.00, <b>Quanity: </b>100 <b class=\'text-success\'> [Added]<b>'),
(36, '2018-06-16 21:43:57', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Unit Price:</b> 12,000.00, <b>Quanity: </b>5000 <b class=\'text-success\'> [Added]<b>'),
(37, '2018-06-18 11:07:04', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(38, '2018-06-18 11:07:34', 'Stockmanager', '<b>Item Name: </b>Mewe TV, <b>Unit Price:</b> 1,212.00, <b>Quanity: </b>12 <b class=\'text-success\'> [Added]<b>'),
(39, '2018-06-18 11:11:29', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `salary` int(6) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `quantity` int(6) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`item_id`, `item_name`, `unit_price`, `quantity`, `date_added`) VALUES
(4, 'Radio', '100.00', 12, '2018-06-16 21:28:11'),
(5, 'TV', '5.00', 100, '2018-06-16 21:28:37'),
(6, 'Laptop', '12000.00', 5000, '2018-06-16 21:43:57'),
(7, 'Mewe TV', '1212.00', 12, '2018-06-18 11:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(60) NOT NULL,
  `role` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `username`, `password`, `role`) VALUES
('manager', 'test', 'manager', 'manager', 'mgr'),
('salesperon', 'test', 'salesperson', 'salesperson', 'sper'),
('stock manager', 'test', 'stockmgr', 'stockmgr', 'smgr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventlog`
--
ALTER TABLE `eventlog`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventlog`
--
ALTER TABLE `eventlog`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
