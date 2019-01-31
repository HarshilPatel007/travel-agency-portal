-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2019 at 06:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_fullname`, `admin_email`, `admin_username`, `admin_password`) VALUES
(2, 'Harshil Patel', 'harshil000004@gmail.com', 'admin', '$2y$10$GpHmsZ0q44KysNxSwtVDo.N5ukfaVV744vpa/ThoKRKzAwTKU7zxK'),
(3, 'fgdfg', 'fdgdf', 'fdgfd', '$2y$10$bgH4djsz3Fj9oHPCh4mzDugHOq3KkAgo1fzUJ8JIpC6MuqdZD6qkC');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `dest_id` int(11) NOT NULL,
  `dest_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest_image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`dest_id`, `dest_name`, `dest_image`) VALUES
(68, 'France', 'france.png'),
(69, 'Canada', 'canada.png'),
(70, 'Brazil', 'brazil.png'),
(71, 'Australia', 'australia.png'),
(72, 'Germany', 'germany.png'),
(73, 'India', 'india.png'),
(74, 'Singapore', 'singapore.png'),
(75, 'UK', '734511047_uk.png'),
(76, 'USA', 'us.png');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(20) NOT NULL,
  `dest_ID` int(20) NOT NULL,
  `pkg_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_thumbnail` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_image1` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_image2` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_image3` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_duration` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_price` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_itnry` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_include` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_exclude` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `dest_ID`, `pkg_name`, `pkg_thumbnail`, `pkg_image1`, `pkg_image2`, `pkg_image3`, `tour_duration`, `tour_price`, `pkg_itnry`, `pkg_include`, `pkg_exclude`) VALUES
(1, 73, 'explore the great tajmahel', '522642140_1.jpg', '522642140_', '522642140_', '522642140_', '12Days and 12 Nights', 'Rs. : 1,00,000', 'dsf\r\nsdf\r\nfsd', 'dsf\r\nsdf\r\ndsf', 'sdf\r\nsdf\r\nsdf'),
(2, 73, 'test', 'wall10.jpg', 'wall19.jpg', 'wall21.jpg', 'wall24.jpg', '12Days and 12 Nights', 'Rs. : 1,00,000', 'werewr\r\newrwer\r\newrwer\r\newrewr\r\newrwee', 'erewrewr\r\nerewrerre\r\newrewrer', 'rewrewr\r\newr\r\new\r\nr\r\ner\r\ner\r\ne\r\nr'),
(3, 73, 'test1', '1.jpg', '4.jpg', '18.jpg', '73.jpg', '12Days amd 12 Nights', 'Rs. : 1,00,000', 'sdf\r\ndsf\r\ndsf\r\nsdf\r\nsdf\r\ndsf\r\nsdf', 'fdg\r\nfdg\r\ndfg\r\ndfg\r\ndfg', 'fdg\r\ndfg\r\ndfg\r\ndfg\r\ndfg\r\ndfg'),
(4, 76, 'test2', '800452091_1.jpg', '800452091_4.jpg', '800452091_111.jpg', '800452091_113.jpg', '12Days and 12 Nights', 'Rs. : 1,00,000', 'sdf\r\ndsf\r\ndsf\r\ndf\r\ndf', 'dfg\r\nfdg\r\ndfg\r\ng', 'gd\r\nfgdf\r\nfg\r\ndfg\r\ndfg'),
(5, 74, 'test2', '414173794_1.jpg', '414173794_117.jpg', '414173794_118.jpg', '414173794_119.jpg', '12Days and 12 Nights', 'Rs. : 1,00,000', 'sdf\r\ndf\r\ndsf\r\ndsf\r\nsdf\r\ndsf', 'fg\r\nfdg\r\ndfg\r\ndf\r\ng\r\ndf', 'fdg\r\ndfg\r\ndfg\r\ndf\r\ngdf'),
(6, 72, 'test5', '2.jpg', '3.jpg', '4.jpg', '24.jpg', '12Days and 12 Nights', 'Rs. : 1,00,000', 'sdf\r\ndsf\r\ndf\r\ndsf\r\nsdf', 'dfg\r\nfdg\r\ndfg\r\ndfg', 'fdg\r\ndfg\r\ndfg\r\ndfg'),
(7, 69, 'test7', '45.jpg', '46.jpg', '47.jpg', '48.jpg', '12Days and 12 Nights', 'Rs. : 1,00,000', 'df\r\ndsf\r\ndsf\r\ndsf', 'sdf\r\ndsf\r\ndf\r\nsdf', 'sdf\r\ndsf\r\ndf\r\nsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
