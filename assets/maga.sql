-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 08:12 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` varchar(255) DEFAULT NULL,
  `category_status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_desc`, `category_status`) VALUES
(1, 'CU', 'Control Units', 1),
(2, 'Monitor', 'Monitors', 1),
(3, 'Printer', 'Printers', 1),
(4, 'Keyboard', 'Keyboards', 1),
(5, 'Mouse', 'Mouses', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment_register`
--

CREATE TABLE `tbl_equipment_register` (
  `id` int(5) NOT NULL,
  `equipment_id` varchar(10) NOT NULL,
  `serial_no` int(20) DEFAULT NULL,
  `category` int(2) DEFAULT NULL,
  `supplier` int(3) DEFAULT NULL,
  `invoice_no` int(10) DEFAULT NULL,
  `equipment_status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_equipment_register`
--

INSERT INTO `tbl_equipment_register` (`id`, `equipment_id`, `serial_no`, `category`, `supplier`, `invoice_no`, `equipment_status`) VALUES
(2, 'C-10001', 12121, 1, 1, 1112, 1),
(3, 'C-10002', 12122, 2, 2, 1113, 1),
(7, 'C-10003', 12123, 3, 1, 1124, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maintenance`
--

CREATE TABLE `tbl_maintenance` (
  `maintenance_id` int(11) NOT NULL,
  `maintenance_desc` varchar(100) DEFAULT NULL,
  `maintenance_equipment` int(5) NOT NULL,
  `maintenance_date` varchar(20) DEFAULT NULL,
  `maintenance_cost` decimal(10,2) DEFAULT NULL,
  `maintenance_invoice` varchar(255) DEFAULT NULL COMMENT 'Invoice Attachement',
  `maintenance_reported_by` int(11) NOT NULL,
  `maintenance_modified_by` int(11) DEFAULT NULL,
  `maintenance_modified_date` datetime DEFAULT NULL,
  `maintenance_status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_maintenance`
--

INSERT INTO `tbl_maintenance` (`maintenance_id`, `maintenance_desc`, `maintenance_equipment`, `maintenance_date`, `maintenance_cost`, `maintenance_invoice`, `maintenance_reported_by`, `maintenance_modified_by`, `maintenance_modified_date`, `maintenance_status`) VALUES
(1, 'Power cable replaced', 3, '12/05/2020', '2000.00', '1212/sss', 1, NULL, NULL, 1),
(2, 'Power', 7, '12/06/2020', '1500.00', 'c40d4e297da4c2905eab84514a152c61.jpg', 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(25) DEFAULT NULL,
  `status_active` int(1) DEFAULT 1 COMMENT 'Is active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`, `status_active`) VALUES
(1, 'Active', 1),
(2, 'In-Use', 1),
(3, 'In-Repair', 1),
(4, 'Deactive', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `supplier_tel_no` int(12) DEFAULT NULL,
  `supplier_email` varchar(255) DEFAULT NULL,
  `supplier_address` varchar(100) DEFAULT NULL,
  `supplier_country` varchar(255) DEFAULT NULL,
  `supplier_status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`supplier_id`, `supplier_name`, `supplier_tel_no`, `supplier_email`, `supplier_address`, `supplier_country`, `supplier_status`) VALUES
(1, 'AB Company', 112234234, 'info@absupplier.lk', '45/2, K Road, Colombo', 'Sri Lanka', 1),
(2, 'JK Holdings', 112344562, 'info@jkh.lk', '3, Road, Colombo', 'Sri Lanka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `user_type` int(1) DEFAULT 1,
  `user_status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `password`, `user_type`, `user_status`) VALUES
(1, 'uditha', 'pass123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(20) NOT NULL,
  `user_type_desc` varchar(50) DEFAULT NULL,
  `user_type_status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_equipment_register`
--
ALTER TABLE `tbl_equipment_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  ADD PRIMARY KEY (`maintenance_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_equipment_register`
--
ALTER TABLE `tbl_equipment_register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_maintenance`
--
ALTER TABLE `tbl_maintenance`
  MODIFY `maintenance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
