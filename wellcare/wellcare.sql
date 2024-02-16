-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 01:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wellcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('yash', 'yash');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `message` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `mobile_no`, `message`, `email`) VALUES
(4, 'jethalal', '8279121', 'iqdfpncc f[r9g ', 'tyaW@gmail.com'),
(5, 'deep sanchela', '2147483647', ' kem chho majama....?\r\n', 'iamdeepsanchela@gmail.com'),
(6, 'dev', '2147483647', 'hieee hiee ', 'hello@gmail.com'),
(10, 'chotuu', '9033614663', 'hellooo mottoooo', 'chotu@gmai.com'),
(11, 'jaydeep khunt', '8128931323', 'hi', 'jaydeeprkhunt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home_visit`
--

CREATE TABLE `home_visit` (
  `id` int(10) NOT NULL,
  `therapy_type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pain_type` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_visit`
--

INSERT INTO `home_visit` (`id`, `therapy_type`, `name`, `email`, `pain_type`, `mobile`, `address`, `gender`) VALUES
(6, '', 'Rishi lakhyani', 'rishi@gmail.com', 'Knee Pain', 2147483647, 'Ambavadi , Junagadh', 'male'),
(9, '', 'deep sanchela', 'iamdeepsanchela@gmail.com', 'back pain', 983946932, 'bkde fl', 'female'),
(10, 'home_visit', 'yash', 'deep@gmail.com', 'back pain', 2147483647, 'gipuook;llkcsac mcjkndcjka cm, asjkcnjask,', 'male'),
(11, 'both', 'dev', 'devo@gmail.com', 'Knee pain', 2147483647, 'jnd', 'male'),
(12, '', 'Deep sanchela', 'ds@gmail.com', 'backpain', 2147483647, 'jnd', 'male'),
(13, 'clinic', 'Deep sanchela', 'ds@gmail.com', 'backpain', 2147483647, 'jnd', 'male'),
(14, 'clinic', 'Deep sanchela', 'ds@gmail.com', 'backpain', 2147483647, 'jnd', 'male'),
(15, 'home_visit', 'Yash', 'yash@gmail.com', 'back', 2147483647, 'joshiputa', 'male'),
(16, 'home_visit', 'Yash', 'yash@gmail.com', 'back', 2147483647, 'joshiputa', 'male'),
(17, 'home_visit', 'Yash', 'yash@gmail.com', 'back', 2147483647, 'joshiputa', 'male'),
(18, 'home visit', 'chhotu', 'chotu@gmail.com', 'back pain', 2147483647, 'junagadh', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `therapy`
--

CREATE TABLE `therapy` (
  `therapy_id` bigint(12) NOT NULL,
  `therapy_name` varchar(50) NOT NULL,
  `therapy_image` text NOT NULL,
  `therapy_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `therapy`
--

INSERT INTO `therapy` (`therapy_id`, `therapy_name`, `therapy_image`, `therapy_description`) VALUES
(1, 'back pain', 'uploads/backpain1.png', 'bjabhckckldjvjv'),
(2, 'golu', 'uploads/doctor1.jpeg', 'mbshhkzxm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_visit`
--
ALTER TABLE `home_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapy`
--
ALTER TABLE `therapy`
  ADD PRIMARY KEY (`therapy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_visit`
--
ALTER TABLE `home_visit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `therapy`
--
ALTER TABLE `therapy`
  MODIFY `therapy_id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
