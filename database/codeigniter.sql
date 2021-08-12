-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 01:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'deep', 'deep');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `clientname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sales_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created` datetime NOT NULL,
  `datetimepicker` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `clientname`, `address`, `contact_no`, `review`, `sales_name`, `feedback`, `date`, `created`, `datetimepicker`, `modified`, `user_id`) VALUES
(82, 'l', 'l', 'l', 'l', 'ln', 'Interested', '2021-05-28 14:53:05', '2021-05-28 14:53:05', '05/26/2021 1:48 PM', '2021-05-28 14:53:05', 8),
(94, 'na', 'n', 'n', 'nn', 'n', 'Interested', '2021-05-28 14:53:22', '2021-05-28 14:53:22', '05/28/2021 2:53 PM', '2021-05-28 14:53:22', 8),
(98, 'o', 'o', 'o', 'o', 'on', 'Follow_Up', '2021-05-28 15:33:01', '2021-05-28 15:33:01', '05/28/2021 3:32 PM', '2021-05-28 15:33:01', 8),
(101, 'f', 'f', 'f', 'f', 'f', 'Interested', '2021-05-28 16:52:03', '2021-05-28 16:52:03', '05/28/2021 4:52 PM', '2021-05-28 16:52:03', 12),
(102, 'l', 'l', '5566558890', 'l', 'l', 'Follow_Up', '2021-05-28 16:55:02', '2021-05-28 16:55:02', '05/28/2021 4:54 PM', '2021-05-28 16:55:02', 12),
(103, 'h', 'h', '1122332211', 'h', 'h', 'Interested', '2021-05-29 18:13:29', '2021-05-29 18:13:29', '05/29/2021 6:13 PM', '2021-05-29 18:13:29', 8),
(104, 'klmn', 'opqr', '2233551144', 'stuv', 'wxyz', 'Interested', '2021-06-04 10:55:27', '2021-06-04 10:55:27', '06/04/2021 10:55 AM', '2021-06-04 10:55:27', 10),
(106, 'o', 'o', '7777441100', 'o', 'o', 'Interested', '2021-07-14 20:56:14', '2021-07-14 20:56:14', 'o', '2021-07-14 20:56:14', 8),
(107, 'p', 'p', '9999887744', 'p', 'p', 'Interested', '2021-08-10 16:16:45', '2021-08-10 16:16:45', '08/13/2021 4:16 PM', '2021-08-10 16:16:45', 2);

-- --------------------------------------------------------

--
-- Table structure for table `salesusers`
--

CREATE TABLE `salesusers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salesusers`
--

INSERT INTO `salesusers` (`id`, `name`, `username`, `password`, `phone`) VALUES
(3, 'yoyo', 'yoyo', 'yoyo', 'yoyo'),
(5, 'ok', 'okok', 'b73fdaa1fb7669da760b49600c45d9be', 'ok'),
(8, 'okok3', 'okok3', '5bab6a5b903630a6aef89efaf9c8a905', 'okok3'),
(9, 'deepak', 'deepak', '498b5924adc469aa7b660f457e0fc7e5', '0000000033'),
(10, 'nana', 'nana', '518d5f3401534f5c6c21977f12f60989', '5544112263');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesusers`
--
ALTER TABLE `salesusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `salesusers`
--
ALTER TABLE `salesusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
