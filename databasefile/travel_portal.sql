-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 05:16 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
(1, 'india', 'india.jpg'),
(2, 'india', 'india.jpg'),
(3, 'india', 'india.jpg'),
(7, 'love it', 'india.jpg'),
(8, 'fdgdfg', 'india.jpg'),
(9, 'fdgdfg', 'india.jpg'),
(10, 'fdgggggggggggggggggggggg', 'india.jpg'),
(11, 'cxvcxv', 'india.jpg'),
(12, 'test', 'featured-img-1.jpg'),
(13, 'this is awesome test', 'featured-img-3.jpg'),
(14, 'awesome ;)', 'recent-car-5.jpg'),
(15, 'dddddddddddddddddddd', 'support_faq_bg.jpg'),
(16, 'visa visa visa', 'blog_img4.jpg'),
(17, 'visa visa visa', 'blog_img4.jpg'),
(18, 'visa visa', '118.jpg'),
(19, 'Taj Mahal', '126.jpg'),
(20, 'this is final test', '115.jpg'),
(21, 'Taj Mahal', '126.jpg'),
(22, 'niagra', '113.jpg'),
(23, 'niagra', '113.jpg'),
(31, '', 'blog_img4.jpg'),
(35, 'test', 'blog_img4.jpg'),
(37, 'Taj Mahal', '4.jpg'),
(38, 'Taj Mahal', '4.jpg'),
(43, 'Santa Santa', '24.jpg'),
(44, 'Taj Mahal', '4.jpg'),
(54, 'different', 'girl9.jpg'),
(55, 'fdgdfg', 'banner-image-1.jpg'),
(56, 'la la la la la la la la la la la la la la', 'listing_img5.jpg'),
(57, 'different', '59.jpg');

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
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
