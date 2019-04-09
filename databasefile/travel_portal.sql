-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2019 at 10:18 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.3.3

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
  `tour_duration` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_price` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_itnry` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_include` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkg_exclude` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `dest_ID`, `pkg_name`, `pkg_thumbnail`, `tour_duration`, `tour_price`, `pkg_itnry`, `pkg_include`, `pkg_exclude`) VALUES
(8, 73, 'Jodhpur Rajasthan', 'jaipur-tour.jpg', '4 Days and 1 Night', 'Rs. : 10,000', 'Day 1 : Pick-up from Ahmedabad. Drive towards Jodhpur (444 Kms/ 8 Hrs). Overnight Jodhpur\r\nDay 2 : Visit to Mehrangarh Fort and other places. Then depart for Jaisalmer. Overnight Jaisalmer\r\nDay 3 : Visit to Jaisalmer Fort. Visit Khuri for desert safari. Overnight Jaisalmer\r\nDay 4 : Visit to Bada Bagh Shrine. Depart for Ahmedabad', 'Hotel Stay\r\nFood(as per package)\r\nAir Ticket', 'Personal expense\r\nPassport OR VISA'),
(9, 73, 'Spiritual Gujarat', 'siv.jpg', '8 Night and 9 Days', 'Rs. : 90,000', 'Day 1: Ahmedabad – Jamnagar\r\nDay 2: Jamnagar – Dwarka\r\nDay 3: Dwarka – Porbandar - Somnath\r\nDay 4: Somnath – Diu\r\nDay 5: Diu – SasanGir\r\nDay 6: Junagadh – Virpur – Gondal – Ahmedabad', '07 Breakfast at the hotels mentioned\r\nAccommodation for 7nights 8 days on double sharing basis\r\nAll Transfers, excursions & sightseeing as per the itinerary by private TOYOTA Innova in Standard Package\r\nAll Transport & Hotels Related Taxes', 'Personal expense\r\nPassport OR VISA'),
(10, 76, 'American Discovery East & West', 'Washington-4.jpg', '11 Nights / 12 Days', 'Rs. : 5,00,000', 'DAY 1: Arrive New York - The Big Apple\r\nDAY 2: New York - Statue Of Liberty - City Tour - Empire State Building 86th Floor Observatory\r\nDAY 3: New York - Washington D.C. - Smithsonian Air And Space Museum - City Tour\r\nDAY 4: Washington - Hersheys - Niagara Falls USA\r\nDAY 5: Niagara Falls - Maid Of The Mist - Cave Of The Winds\r\nDAY 6: Niagara - Las Vegas\r\nDAY 7: Las Vegas - Free Day\r\nDAY 8: Las Vegas - Los Angeles - City Tour\r\nDAY 9: Universal Studios\r\nDAY 10: Los Angeles - San Francisco\r\nDAY 11: San Francisco - Bay Cruise - City Tour\r\nDAY 12: San Francisco - Back Home', 'Baggage handling fee charged by the Internal Airlines for travel within USA. One check inn baggage of 20 kg per person.\r\nInternal Airfare\r\nInternational flight.\r\nUSA Visa Charges', '5% G.S.T will be applicable on Tour Cost.\r\nAny additional Domestic Internal Flight\r\nAny personal expenses i.e. Laundry, Phone etc.\r\nAny Surcharge if applicable on your Travel Dates.\r\nAnything which is not Mentioned in Inclusion.\r\nDeviation charges levied by Airlines\r\nMedical Insurance\r\nPorterage – passengers need to carry their own Luggage at Airport, Hotel , Cruise Port & Coaches\r\nTips 03 USD per person per day'),
(11, 76, 'American Explorer– East Only', 'Montreal.jpg', '9 Nights / 10 Days', 'Rs. : 3,00,000', 'DAY 1: Arrive New York - The Big Apple\r\nDAY 2: Statue Of Liberty - Empire State Building - New York City Tour - Times Square\r\nDAY 3: New York - Washington D.C - City Tour\r\nDAY 4: Washington - Hershey’s Chocolate World - Niagara Falls Canada\r\nDAY 5: Niagara Falls\r\nDAY 6: Niagara Falls - Toronto\r\nDAY 7: Toronto - 1000 Islands - Ottawa\r\nDAY 8: Ottawa - Montreal\r\nDAY 9: Montreal - Quebec City - Montreal\r\nDAY 10: Back Home', 'Baggage handling fee charged by the Internal Airlines for travel within USA. One check inn baggage of 20 kg per person.\r\nEconomy Class Return Airfare\r\nInternal Airfare\r\nInternational flight.\r\nMeals as per Itinerary\r\nUSA & Canada FIT Visa charges', '5% G.S.T will be applicable on Tour Cost.\r\nAny additional Domestic Internal Flight\r\nAny Surcharge if applicable on your Travel Dates.\r\nAnything which is not Mentioned in Inclusion.\r\nDeviation charges levied by Airlines\r\nMedical Insurance\r\nPersonal expenses such as alcoholic and other beverages, telephone calls, tips and laundry\r\nPorterage – passengers need to carry their own Luggage at Airport, Hotel , Cruise Port & Coaches\r\nTips 03 USD per person per day'),
(12, 75, 'Jewels of Britain', 'backingham_palace.jpg', '7 Nights / 8 Days', 'Rs. : 3,50,000', 'DAY 1: India - London\r\nDAY 2: London\r\nDAY 3: London\r\nDAY 4: London - Edinburgh\r\nDAY 5: Edinburgh\r\nDAY 6: Edinburgh\r\nDAY 7: Edinburgh\r\nDAY 8: Edinburgh - Glasgow - India', '07 Continental Cold Buffet Breakfast\r\nAll Airport to Hotel and Hotel to Station transfers on Private Basis\r\nOne way 2nd Class train from London to Edinburgh', '5% GST on total tour cost\r\nAirfare & Taxes\r\nAll Museums and Monuments are from outside unless mentioned in inclusions.\r\nAny personal expenses i.e. Laundry, Tips, And Phone calls etc.\r\nAny surcharge applicable during your travel dates.\r\nAnything which is not mentioned in Inclusions.\r\nCity tax – to be paid directly at the hotel.\r\nCost of Sightseeing (Except Above)\r\nNo Porterage Included. You have to carry your luggage on your own to your room.\r\nTravel Insurance\r\nVisa Cost'),
(13, 75, 'British Explorer', 'City-Tour-4.jpg', '8 Nights / 9 Days', 'Rs. : 5,00,000', 'DAY 1: India - London\r\nDAY 2: London\r\nDAY 3: London\r\nDAY 4: London - York\r\nDAY 5: York - Howard Castle - Windermere\r\nDAY 6: Windermere - Edinburgh\r\nDAY 7: Edinburgh\r\nDAY 8: Edinburgh\r\nDAY 9: Edinburgh - Glasgow - India', 'One Way Hotel to Airport Transfer in Edinburgh on SIC Basis', '5% G.S.T will be applicable on Tour Cost.\r\nAny other services not mentioned above\r\nAny surcharge applicable during your travel dates.\r\nCost of Lunch & Dinner (Expect mentioned above)\r\nEntrance to Sightseeing (Except Above)\r\nInternational Airfare & Visa Charges\r\nMedical Insurance\r\nPersonal expenses such as alcoholic and other beverages, telephone calls, tips and laundry\r\nTips for Guide & Driver\r\nTourist city tax payable directly by the passenger only at each hotel.\r\nTransfers to the departure point of Tours and Attraction.'),
(14, 74, ' Singapore with Genting Dream Cruise', 'Singapore-Flyer.jpg', '6 Nights / 7 Days', 'Rs. : 3,00,000', 'DAY 1 to 4: Singapore\r\nDAY 5: Singapore - Cruise\r\nDAY 6: Cruise\r\nDAY 7: Back Home', 'All Transfer and Sightseeing on SIC Basis\r\nEconomy Class Return Airfare\r\nSingapore Visa Fees', '5% G.S.T will be applicable on Tour Cost.\r\nAny other item except package rates includes\r\nCost of lunch and dinner (Except Above)\r\nCost of sightseeing except above\r\nCruise gratuities per night 21sgd per person directly payable\r\nGuide tips & Portages\r\nPersonal expenses such as alcoholic and other beverages, telephone calls, tips and laundry\r\nTravel Insurance\r\nupplement cost applicable for Airport transfers between 2200hrs to 0730hrs\r\nUsage of Minibar or Paid Channels'),
(15, 74, 'Southeast Delight Singapore Malaysia', 'batu-caves.jpg', '6 Nights / 7 Days', 'Rs. : 2,50,000', 'DAY 1: Singapore\r\nDAY 2: Singapore\r\nDAY 3: Singapore\r\nDAY 4: Singapore - Kuala Lumpur - ( Approx 400 Kilometers )\r\nDAY 5: Kuala Lumpur - Genting Highlands - Kuala Lumpur\r\nDAY 6: Kuala Lumpur - Sunway Lagoon - Kuala Lumpur\r\nDAY 7: Kuala Lumpur - Singapore - Back Home', 'Economy Class Return Airfare\r\nIn House Gujarati Tour Manager\r\nSingapore, Malaysia Visa Charges', '5% G.S.T will be applicable on Tour Cost.\r\nAny increase in Aiport taxes\r\nAny increase in Government Tax, Fuel Charges or any other Tax.\r\nAny other item except package rates includes\r\nAny Surcharge if applicable on your Travel Dates.\r\nGuide tips & Portages\r\nPersonal expenses such as alcoholic and other beverages, telephone calls, tips and laundry\r\nTravel Insurance\r\nUsage of Minibar or Paid Channels');

-- --------------------------------------------------------

--
-- Table structure for table `pkg_request`
--

CREATE TABLE `pkg_request` (
  `id` int(20) NOT NULL,
  `place_name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_days` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `users` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pkg_request`
--

INSERT INTO `pkg_request` (`id`, `place_name`, `tour_days`, `users`, `users_id`) VALUES
(1, 'explore the great tajmahel', '12Days and 12 Nights', 'harshil patel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `users_fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `users_fullname`, `users_email`, `users_username`, `users_password`) VALUES
(1, 'harshil patel', 'harshil@gmail.com', 'harshil', '$2y$10$zxpNWpA05vA6e1oJ5.5Y4eML2jliRqLWvM2EW3u1iwuhbe3OZl4C.');

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
-- Indexes for table `pkg_request`
--
ALTER TABLE `pkg_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pkg_request`
--
ALTER TABLE `pkg_request`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
