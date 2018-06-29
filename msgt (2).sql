-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2018 at 12:04 PM
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
(39, '2018-06-18 11:11:29', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(40, '2018-06-19 23:15:54', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(41, '2018-06-19 23:16:40', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(42, '2018-06-19 23:16:57', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(43, '2018-06-19 23:34:35', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(44, '2018-06-19 23:34:54', 'Stockmanager', '<b>Item Name: </b>Mewe TV, <b>Old Price:</b> 1,212.00, <b>New Price:</b> 100.00 <b class=\'text-success\'> [Price Updated]<b>'),
(45, '2018-06-19 23:36:18', 'Stockmanager', '<b>Item Name: </b>Mewe TV, <b>Unit Price:</b> 100.00, <b>Quanity: </b>12 <b class=\'text-danger\'> [Deleted]<b>'),
(46, '2018-06-19 23:36:57', 'Stockmanager', '<b>Item Name: </b>test, <b>Unit Price:</b> 100.00, <b>Quanity: </b>18 <b class=\'text-success\'> [Added]<b>'),
(47, '2018-06-19 23:47:19', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(48, '2018-06-19 23:47:28', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(49, '2018-06-19 23:49:10', 'Manager', '<b>Staff Member</b>: Joe Doe <b class=\'text-success\'> [Added]<b>'),
(50, '2018-06-20 00:30:50', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(51, '2018-06-20 00:31:06', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(52, '2018-06-20 00:31:37', 'Stockmanager', '<b>Item Name: </b>test 2, <b>Unit Price:</b> 332.00, <b>Quanity: </b>6 <b class=\'text-success\'> [Added]<b>'),
(53, '2018-06-20 00:32:57', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(54, '2018-06-20 00:33:09', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(55, '2018-06-20 00:34:00', 'Stockmanager', '<b>Item Name: </b>test 2, <b>Old Price:</b> 332.00, <b>New Price:</b> 231.00 <b class=\'text-success\'> [Price Updated]<b>'),
(56, '2018-06-20 00:34:24', 'Stockmanager', '<b>Item Name: </b>test 2, <b>Unit Price:</b> 231.00, <b>Quanity: </b>6 <b class=\'text-danger\'> [Deleted]<b>'),
(57, '2018-06-20 00:34:38', 'Stockmanager', '<b>Item Name: </b>test 2, <b>Unit Price:</b> 12,121,212.00, <b>Quanity: </b>21 <b class=\'text-success\'> [Added]<b>'),
(58, '2018-06-20 00:35:14', 'Stockmanager', '<b>Item Name: </b>test 2, <b>Unit Price:</b> 12,121,212.00, <b>Quanity: </b>21 <b class=\'text-danger\'> [Deleted]<b>'),
(59, '2018-06-20 00:35:36', 'Stockmanager', '<b>Item Name: </b>test2, <b>Unit Price:</b> 22.00, <b>Quanity: </b>2 <b class=\'text-success\'> [Added]<b>'),
(60, '2018-06-20 19:00:47', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(61, '2018-06-20 19:51:36', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(62, '2018-06-21 00:04:55', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(63, '2018-06-25 19:20:41', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(64, '2018-06-25 19:50:42', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(65, '2018-06-25 19:50:50', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(66, '2018-06-25 19:52:37', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(67, '2018-06-25 19:52:49', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(68, '2018-06-25 19:52:59', 'Stockmanager', '<b>Item Name: </b>1, <b>Unit Price:</b> 33.00, <b>Quanity: </b>12 <b class=\'text-success\'> [Added]<b>'),
(69, '2018-06-25 19:53:02', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(70, '2018-06-25 19:53:12', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(71, '2018-06-25 23:54:07', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 886, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(72, '2018-06-25 23:54:07', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 97665, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(73, '2018-06-25 23:54:07', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Recipt:</b> 9754, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(74, '2018-06-25 23:55:36', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(75, '2018-06-25 23:55:47', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(76, '2018-06-26 00:06:57', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(77, '2018-06-26 00:07:06', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(78, '2018-06-26 00:07:40', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 42890, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(79, '2018-06-26 00:10:11', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 86924, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(80, '2018-06-26 00:10:11', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 86924, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(81, '2018-06-26 00:10:11', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Recipt:</b> 86924, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(82, '2018-06-26 00:28:14', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(83, '2018-06-26 00:29:56', 'Stockmanager', '<b>Item Name: </b>1, <b>Recipt:</b> 10766, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(84, '2018-06-26 00:29:56', 'Stockmanager', '<b>Item Name: </b>test2, <b>Recipt:</b> 10766, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(85, '2018-06-26 00:29:56', 'Stockmanager', '<b>Item Name: </b>test, <b>Recipt:</b> 10766, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(86, '2018-06-26 00:29:57', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 10766, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(87, '2018-06-26 00:29:57', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 10766, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(88, '2018-06-26 00:29:57', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Recipt:</b> 10766, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(89, '2018-06-26 00:34:56', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(90, '2018-06-26 00:35:05', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(91, '2018-06-26 14:38:29', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(92, '2018-06-26 14:39:12', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 91431, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(93, '2018-06-26 14:39:13', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Recipt:</b> 91431, <b>Customer Name: </b>Joe Doe <b class=\'text-success\'> [Transaction Added]<b>'),
(94, '2018-06-26 14:40:45', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(95, '2018-06-26 14:40:54', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(96, '2018-06-26 14:41:23', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(97, '2018-06-26 14:41:35', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(98, '2018-06-26 14:52:39', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 23106, <b>Customer Name: </b>Joe Doe2 <b class=\'text-success\'> [Transaction Added]<b>'),
(99, '2018-06-26 14:52:39', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 23106, <b>Customer Name: </b>Joe Doe2 <b class=\'text-success\'> [Transaction Added]<b>'),
(100, '2018-06-26 14:52:40', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Recipt:</b> 23106, <b>Customer Name: </b>Joe Doe2 <b class=\'text-success\'> [Transaction Added]<b>'),
(101, '2018-06-26 21:02:23', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(102, '2018-06-26 21:02:46', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(103, '2018-06-26 21:04:08', 'Stockmanager', '<b>Username: </b>stockmgr, <b>Role: </b>Stockmanager<b class=\'text-success\'> [Logged in]<b>'),
(104, '2018-06-26 22:06:14', 'Stockmanager', '<b>Username: </b>stockmgr<b class=\'text-danger\'> [Logged out]<b>'),
(105, '2018-06-26 22:06:25', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(106, '2018-06-26 22:25:29', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(107, '2018-06-26 22:25:37', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(108, '2018-06-27 00:36:33', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(109, '2018-06-27 00:36:42', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(110, '2018-06-27 00:37:04', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 11376, <b>Customer Name: </b>ee <b class=\'text-success\'> [Transaction Added]<b>'),
(111, '2018-06-27 00:37:04', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Recipt:</b> 11376, <b>Customer Name: </b>ee <b class=\'text-success\'> [Transaction Added]<b>'),
(112, '2018-06-27 00:44:20', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(113, '2018-06-27 00:44:28', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(114, '2018-06-27 00:50:46', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(115, '2018-06-27 00:50:59', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(116, '2018-06-27 02:40:46', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(117, '2018-06-27 02:41:39', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 47783, <b>Customer Name: </b>dd <b class=\'text-success\'> [Transaction Added]<b>'),
(118, '2018-06-27 02:41:39', 'Stockmanager', '<b>Item Name: </b>Radio, <b>Recipt:</b> 47783, <b>Customer Name: </b>dd <b class=\'text-success\'> [Transaction Added]<b>'),
(119, '2018-06-27 19:06:34', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(120, '2018-06-27 19:24:59', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(121, '2018-06-27 19:25:08', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(122, '2018-06-27 19:44:22', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 57686, <b>Customer Name: </b>ee <b class=\'text-success\'> [Transaction Added]<b>'),
(123, '2018-06-27 19:45:19', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(124, '2018-06-27 20:53:51', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(125, '2018-06-27 21:13:17', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(126, '2018-06-27 21:26:37', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(127, '2018-06-27 21:46:55', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(128, '2018-06-27 21:47:08', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(129, '2018-06-27 23:01:13', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(130, '2018-06-27 23:01:25', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(131, '2018-06-27 23:01:35', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(132, '2018-06-27 23:33:00', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 14747, <b>Customer Name: </b>32 <b class=\'text-success\'> [Transaction Added]<b>'),
(133, '2018-06-27 23:42:55', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(134, '2018-06-27 23:43:05', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(135, '2018-06-28 00:51:36', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(136, '2018-06-28 01:44:51', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(137, '2018-06-28 18:49:31', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(138, '2018-06-28 18:50:22', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(139, '2018-06-28 18:50:34', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(140, '2018-06-28 19:23:38', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 24754, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(141, '2018-06-28 19:27:14', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 24102, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(142, '2018-06-28 19:28:17', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 300, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(143, '2018-06-28 19:30:34', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 28918, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(144, '2018-06-28 19:30:57', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 26566, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(145, '2018-06-28 19:32:05', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 37396, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(146, '2018-06-28 19:32:50', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 62525, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(147, '2018-06-28 19:33:14', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 60131, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(148, '2018-06-28 19:34:09', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 81114, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(149, '2018-06-28 19:34:27', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 58004, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(150, '2018-06-28 19:35:02', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 94061, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(151, '2018-06-28 19:35:34', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 78147, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(152, '2018-06-28 19:35:58', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 8798, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(153, '2018-06-28 19:36:18', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 52402, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(154, '2018-06-28 19:36:30', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 99064, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(155, '2018-06-28 19:36:58', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 15725, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(156, '2018-06-28 19:37:05', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 12184, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(157, '2018-06-28 19:37:17', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 34308, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(158, '2018-06-28 19:37:27', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 24351, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(159, '2018-06-28 19:37:59', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 78621, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(160, '2018-06-28 19:38:55', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 89116, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(161, '2018-06-28 19:39:26', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 13274, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(162, '2018-06-28 19:39:45', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 31949, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(163, '2018-06-28 19:40:18', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 37663, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(164, '2018-06-28 19:40:30', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 97227, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(165, '2018-06-28 19:40:52', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 15356, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(166, '2018-06-28 19:41:28', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 51285, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(167, '2018-06-28 19:41:45', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 7416, <b>Customer Name: </b>goo <b class=\'text-success\'> [Transaction Added]<b>'),
(168, '2018-06-28 19:42:59', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(169, '2018-06-28 19:43:29', 'Stockmanager', '<b>Item Name: </b>test, <b>Recipt:</b> 99653, <b>Customer Name: </b>hhhhhhhhhhhhhh <b class=\'text-success\'> [Transaction Added]<b>'),
(170, '2018-06-28 19:44:33', 'Stockmanager', '<b>Item Name: </b>test2, <b>Recipt:</b> 77958, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(171, '2018-06-28 19:44:33', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 77958, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(172, '2018-06-28 19:45:18', 'Stockmanager', '<b>Item Name: </b>test2, <b>Recipt:</b> 3200, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(173, '2018-06-28 19:45:18', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 3200, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(174, '2018-06-28 19:45:34', 'Stockmanager', '<b>Item Name: </b>test2, <b>Recipt:</b> 46975, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(175, '2018-06-28 19:45:34', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 46975, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(176, '2018-06-28 19:46:46', 'Stockmanager', '<b>Item Name: </b>test2, <b>Recipt:</b> 90907, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(177, '2018-06-28 19:46:47', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 90907, <b>Customer Name: </b>fdsfdfsd <b class=\'text-success\'> [Transaction Added]<b>'),
(178, '2018-06-28 19:53:28', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(179, '2018-06-28 19:54:38', 'Stockmanager', '<b>Item Name: </b>test, <b>Recipt:</b> 50012, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(180, '2018-06-28 19:54:38', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 50012, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(181, '2018-06-28 19:54:39', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 50012, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(182, '2018-06-28 19:55:56', 'Stockmanager', '<b>Item Name: </b>test, <b>Recipt:</b> 20986, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(183, '2018-06-28 19:55:56', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 20986, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(184, '2018-06-28 19:55:56', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 20986, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(185, '2018-06-28 19:56:16', 'Stockmanager', '<b>Item Name: </b>test, <b>Recipt:</b> 1461, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(186, '2018-06-28 19:56:16', 'Stockmanager', '<b>Item Name: </b>Laptop, <b>Recipt:</b> 1461, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(187, '2018-06-28 19:56:16', 'Stockmanager', '<b>Item Name: </b>TV, <b>Recipt:</b> 1461, <b>Customer Name: </b>weeeeeeeeeeeeeee <b class=\'text-success\'> [Transaction Added]<b>'),
(188, '2018-06-28 20:47:02', 'Manager', '<b>Staff Member</b>: first_name last_name <b class=\'text-success\'> [Added]<b>'),
(189, '2018-06-28 20:48:45', 'Manager', '<b>Staff Member</b>: first_name last_name <b class=\'text-success\'> [Added]<b>'),
(190, '2018-06-28 20:49:16', 'Manager', '<b>Staff Member</b>: first_name last_name <b class=\'text-success\'> [Added]<b>'),
(191, '2018-06-28 20:53:17', 'Manager', '<b>Staff Member</b>: first_name last_name <b class=\'text-success\'> [Added]<b>'),
(192, '2018-06-28 20:57:45', 'Manager', '<b>Staff Member</b>: first_name last_name <b class=\'text-success\'> [Added]<b>'),
(193, '2018-06-28 20:57:47', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(194, '2018-06-28 20:57:59', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>'),
(195, '2018-06-28 21:04:34', 'Stockmanager', '<b>Username: </b>manager<b class=\'text-danger\'> [Logged out]<b>'),
(196, '2018-06-28 21:04:45', 'Stockmanager', '<b>Username: </b>salesperson, <b>Role: </b>Salesperson<b class=\'text-success\'> [Logged in]<b>'),
(197, '2018-06-28 21:16:21', 'Stockmanager', '<b>Username: </b>salesperson<b class=\'text-danger\'> [Logged out]<b>'),
(198, '2018-06-28 21:16:30', 'Stockmanager', '<b>Username: </b>manager, <b>Role: </b>Manager<b class=\'text-success\'> [Logged in]<b>');

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

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `salary`, `address`) VALUES
(1, 'Joe', 'Doe', 1000, 'Addis Ababa, Ethiopia');

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
(4, 'Radio', '100.00', 0, '2018-06-16 21:28:11'),
(5, 'TV', '5.00', -4, '2018-06-16 21:28:37'),
(6, 'Laptop', '12000.00', 4901, '2018-06-16 21:43:57'),
(8, 'test', '100.00', -7, '2018-06-19 23:36:57'),
(11, 'test2', '22.00', -3, '2018-06-20 00:35:36'),
(12, '1', '33.00', 11, '2018-06-25 19:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` bigint(20) UNSIGNED NOT NULL,
  `recipt_no` varchar(10) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(6) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `discount_percentage` decimal(10,2) NOT NULL,
  `vat_percentage` decimal(10,2) NOT NULL,
  `cust_name` varchar(20) DEFAULT NULL,
  `cust_phone` varchar(15) DEFAULT NULL,
  `cust_tin` varchar(50) DEFAULT NULL,
  `trans_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trans_id`, `recipt_no`, `item_name`, `quantity`, `unit_price`, `total_price`, `discount_percentage`, `vat_percentage`, `cust_name`, `cust_phone`, `cust_tin`, `trans_date`) VALUES
(1, '86924', 'Laptop', 2, '12000.00', '24000.00', '7.00', '4.00', 'Joe Doe', '+2510000000', '2231321132', '2018-06-23 21:10:11'),
(2, '86924', 'TV', 6, '5.00', '30.00', '7.00', '4.00', 'Joe Doe', '+2510000000', '2231321132', '2018-06-24 21:10:11'),
(3, '86924', 'Radio', 8, '100.00', '800.00', '7.00', '4.00', 'Joe Doe', '+2510000000', '2231321132', '2018-06-25 21:10:11'),
(15, '11376', 'TV', 2, '5.00', '10.00', '0.00', '0.00', 'ee', '355454', '3333', '2018-06-26 21:37:04'),
(16, '11376', 'Radio', 3, '100.00', '300.00', '0.00', '0.00', 'ee', '355454', '3333', '2018-06-26 21:37:04'),
(17, '47783', 'Laptop', 64, '12000.00', '768000.00', '0.00', '4.00', 'dd', '324', '4', '2018-06-26 23:41:39'),
(18, '47783', 'Radio', 3, '100.00', '300.00', '0.00', '4.00', 'dd', '324', '4', '2018-06-26 23:41:39'),
(19, '57686', 'Laptop', 1, '12000.00', '12000.00', '0.00', '0.00', 'ee', '34534', '15', '2018-06-27 16:44:22'),
(20, '14747', 'TV', 1, '5.00', '5.00', '0.00', '0.00', '32', '34234', '23', '2018-06-27 20:33:00'),
(21, '24754', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:23:38'),
(22, '24102', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:27:14'),
(23, '300', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:28:17'),
(24, '28918', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:30:34'),
(25, '26566', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:30:57'),
(26, '37396', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:32:05'),
(27, '62525', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:32:50'),
(28, '60131', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:33:14'),
(29, '81114', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:34:09'),
(30, '58004', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:34:26'),
(31, '94061', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:35:02'),
(32, '78147', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:35:33'),
(33, '8798', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:35:58'),
(34, '52402', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:36:18'),
(35, '99064', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:36:29'),
(36, '15725', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:36:58'),
(37, '12184', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:37:05'),
(38, '34308', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:37:16'),
(39, '24351', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:37:27'),
(40, '78621', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:37:59'),
(41, '89116', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:38:55'),
(42, '13274', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:39:25'),
(43, '31949', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:39:45'),
(44, '37663', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:40:18'),
(45, '97227', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:40:30'),
(46, '15356', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:40:51'),
(47, '51285', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:41:28'),
(48, '7416', 'TV', 3, '5.00', '15.00', '0.00', '0.00', 'goo', '21121', '1233', '2018-06-28 16:41:45'),
(49, '99653', 'test', 3, '100.00', '300.00', '3.00', '3.00', 'hhhhhhhhhhhhhh', '222222222222222', '1111111111111111111', '2018-06-28 16:43:29'),
(50, '77958', 'test2', 1, '22.00', '22.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:44:33'),
(51, '77958', 'Laptop', 4, '12000.00', '48000.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:44:33'),
(52, '3200', 'test2', 1, '22.00', '22.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:45:18'),
(53, '3200', 'Laptop', 4, '12000.00', '48000.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:45:18'),
(54, '46975', 'test2', 1, '22.00', '22.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:45:33'),
(55, '46975', 'Laptop', 4, '12000.00', '48000.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:45:34'),
(56, '90907', 'test2', 1, '22.00', '22.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:46:46'),
(57, '90907', 'Laptop', 4, '12000.00', '48000.00', '0.00', '0.00', 'fdsfdfsd', '343243242', '23432432', '2018-06-28 16:46:47'),
(58, '50012', 'test', 7, '100.00', '700.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:54:38'),
(59, '50012', 'Laptop', 5, '12000.00', '60000.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:54:38'),
(60, '50012', 'TV', 4, '5.00', '20.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:54:38'),
(61, '20986', 'test', 7, '100.00', '700.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:55:56'),
(62, '20986', 'Laptop', 5, '12000.00', '60000.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:55:56'),
(63, '20986', 'TV', 4, '5.00', '20.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:55:56'),
(64, '1461', 'test', 7, '100.00', '700.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:56:15'),
(65, '1461', 'Laptop', 5, '12000.00', '60000.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:56:16'),
(66, '1461', 'TV', 4, '5.00', '20.00', '0.00', '0.00', 'weeeeeeeeeeeeeee', '122222222222', '2111111111', '2018-06-28 16:56:16');

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
  ADD UNIQUE KEY `item_name` (`item_name`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

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
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trans_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
