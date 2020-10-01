-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 06:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stoke`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(10) NOT NULL,
  `bill_to` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `invoice_no` varchar(10) NOT NULL,
  `invoice_date` varchar(25) NOT NULL,
  `po_no` varchar(35) NOT NULL,
  `state_code` varchar(25) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gst_no` varchar(23) NOT NULL,
  `stoke` varchar(22) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `product` varchar(244) NOT NULL,
  `sub_sub_category` varchar(244) NOT NULL,
  `qty` varchar(22) NOT NULL,
  `rate` varchar(22) NOT NULL,
  `total` varchar(222) NOT NULL,
  `tax` varchar(22) NOT NULL,
  `cgst` varchar(22) NOT NULL,
  `sgst` varchar(22) NOT NULL,
  `total_gst` varchar(22) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `bill_to`, `name`, `address`, `invoice_no`, `invoice_date`, `po_no`, `state_code`, `category`, `gst_no`, `stoke`, `sub_category`, `product`, `sub_sub_category`, `qty`, `rate`, `total`, `tax`, `cgst`, `sgst`, `total_gst`, `dt_created`, `dt_updated`) VALUES
(1, 'riyapate', 'nikunj', 'B-301, Samruddhi Complex, Near Geeta Khaman HouseBeside Makarpura depo', '', '25/09/20', 'erser', 'Central', 'AK', 'rser', '', 'AK', 'AK', 'AK', '32323', '332', '10731236', 'AK', '9', '9', '', '2020-09-25 02:37:59', '2020-09-25 14:37:59'),
(2, 'riyapate', 'Stegenga + PARTNERS A Professional Studio', 'B-301, Samruddhi Complex, Near Geeta Khaman HouseBeside Makarpura depo', '<br /><b>W', '25/09/20', 'erfwer', 'Central', 'AK', 'fswef', '', 'AK', 'AK', 'AK', '544', '54', '29376', '1', '', '', '', '2020-09-25 02:57:56', '2020-09-25 14:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `add_stoke`
--

CREATE TABLE `add_stoke` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `sub_sub_category` varchar(255) NOT NULL,
  `stoke` varchar(25) NOT NULL,
  `rate` varchar(25) NOT NULL,
  `total` varchar(25) NOT NULL,
  `today_dt` varchar(24) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_stoke`
--

INSERT INTO `add_stoke` (`id`, `category`, `sub_category`, `product`, `sub_sub_category`, `stoke`, `rate`, `total`, `today_dt`, `dt_created`, `dt_updated`) VALUES
(1, 'AK', 'AK', 'AK', 'AK', '34234', '43324', '1483153816', '25/09/20', '2020-09-25 02:34:16', '2020-09-25 14:34:16'),
(2, 'AK', 'AK', 'AK', 'AK', '33434', '244', '8157896', '25/09/20', '2020-09-25 02:35:10', '2020-09-25 14:35:10'),
(3, 'AK', 'AK', 'AK', 'AK', '33434', '244', '8157896', '25/09/20', '2020-09-25 02:36:54', '2020-09-25 14:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `dt_created`) VALUES
(1, 'admin', 'e6e061838856bf47e1de730719fb2609', '2019-04-17 15:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(25) NOT NULL,
  `address` varchar(2555) NOT NULL,
  `remark` varchar(2555) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `code`, `address`, `remark`, `dt_created`, `dt_updated`) VALUES
(2, 'sdd', 'cdsd', 'dsdrfrd dfsdfsd', 'sdfsd', '2020-09-25 01:07:34', '2020-09-25 04:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `dt_created`, `dt_updated`) VALUES
(1, 'cake', '2020-09-25 02:29:50', '2020-09-25 14:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `sub_sub_category` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `sub_category`, `sub_sub_category`, `product`, `dt_created`, `dt_updated`) VALUES
(1, 'Clothes', 'Man', 'AK', 'gfhfg', '2020-09-25 02:32:51', '2020-09-25 14:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `id` int(10) NOT NULL,
  `product` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `sel_amt` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `cgst` varchar(20) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `total_gst` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `loss` varchar(255) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profit`
--

INSERT INTO `profit` (`id`, `product`, `total`, `sel_amt`, `tax`, `cgst`, `sgst`, `total_gst`, `profit`, `loss`, `dt_created`, `dt_updated`) VALUES
(1, 'HI', 'sdfsdfdfssdf', '5', 'AK', '454', '45', '', '454', '456456', '2020-09-25 02:38:46', '2020-09-25 14:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category`, `sub_category`, `dt_created`, `dt_updated`) VALUES
(1, 'Clothes', 'fgfd', '2020-09-25 02:30:18', '2020-09-25 14:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_category`
--

CREATE TABLE `sub_sub_category` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `sub_sub_category` varchar(255) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_category`
--

INSERT INTO `sub_sub_category` (`id`, `category`, `sub_category`, `sub_sub_category`, `dt_created`, `dt_updated`) VALUES
(1, 'Clothes', 'Man', 'dfgtdf', '2020-09-25 02:30:46', '2020-09-25 14:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(10) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `total_gst` varchar(255) NOT NULL,
  `dt_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `dt_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `tax`, `cgst`, `sgst`, `total_gst`, `dt_created`, `dt_updated`) VALUES
(4, 'gfgtd', '9', '9', '18', '2020-09-25 02:25:39', '2020-09-25 14:25:39'),
(5, 'dgtdrg', '9', '9', '18', '2020-09-25 03:52:50', '2020-09-25 15:52:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_stoke`
--
ALTER TABLE `add_stoke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_stoke`
--
ALTER TABLE `add_stoke`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profit`
--
ALTER TABLE `profit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
