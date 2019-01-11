-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 05:43 PM
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
  `dest_image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`dest_id`, `dest_name`, `dest_image`, `uploaded_on`) VALUES
(1, 'india', 'india.jpg', '0000-00-00 00:00:00'),
(2, 'india', 'india.jpg', '0000-00-00 00:00:00'),
(3, 'india', 'india.jpg', '0000-00-00 00:00:00'),
(4, 'lol test', 'about_us_icon.png', '0000-00-00 00:00:00'),
(5, 'dsfsdfdsf', 'about_us_icon.png', '0000-00-00 00:00:00'),
(6, '', 'india.jpg', '0000-00-00 00:00:00'),
(7, 'love it', 'india.jpg', '0000-00-00 00:00:00'),
(8, 'fdgdfg', 'india.jpg', '0000-00-00 00:00:00'),
(9, 'fdgdfg', 'india.jpg', '0000-00-00 00:00:00'),
(10, 'fdgggggggggggggggggggggg', 'india.jpg', '0000-00-00 00:00:00'),
(11, 'cxvcxv', 'india.jpg', '0000-00-00 00:00:00');

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
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
