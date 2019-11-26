-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 11:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kevo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `name`, `password`) VALUES
(1, 'admin21', 'admin@admin.com', 'Administrator', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `food_donation`
--

CREATE TABLE `food_donation` (
  `donation_id` int(11) NOT NULL,
  `donor` varchar(255) NOT NULL,
  `food_type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_donation`
--

INSERT INTO `food_donation` (`donation_id`, `donor`, `food_type`, `quantity`) VALUES
(1, 'ouda.wycliffe@gmail.com', 'Beans', '20kg');

-- --------------------------------------------------------

--
-- Table structure for table `money_donation`
--

CREATE TABLE `money_donation` (
  `donation_id` int(11) NOT NULL,
  `donor` varchar(255) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `other_amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_donation`
--

INSERT INTO `money_donation` (`donation_id`, `donor`, `amount`, `other_amount`) VALUES
(1, 'ouda.wycliffe@gmail.com', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `street_child`
--

CREATE TABLE `street_child` (
  `id` int(11) NOT NULL,
  `pic` blob NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `first_ass` int(11) DEFAULT NULL,
  `second_ass` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  `registered_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `street_child`
--

INSERT INTO `street_child` (`id`, `pic`, `name`, `gender`, `age`, `country`, `county`, `father`, `mother`, `first_ass`, `second_ass`, `final`, `registered_by`) VALUES
(1, 0x32343133322e6a7067, 'Job Chumo', 'Male', 12, 'Kenya', 'Nairobi County', 'Edwin', 'Jane', 1, 0, 1, ''),
(2, 0x32343133322e6a7067, 'Job Chumo', 'Male', 12, 'Kenya', 'Nairobi County', 'Edwin', 'Jane', 0, 1, 0, 'ouda.wycliffe@gmail.com'),
(3, 0x32343133392e6a7067, 'Marcy Grace', 'Female', 13, 'Kenya', 'Nairobi County', 'Edwin', 'Jane', 0, 0, 0, 'ouda.wycliffe@gmail.com'),
(4, 0x32343133392e6a7067, 'Marcy Grace', 'Female', 13, 'Kenya', 'Nairobi County', 'Edwin', 'Jane', 0, 0, 0, 'ouda.wycliffe@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `username`, `location`, `image`, `password`, `status`) VALUES
(1, NULL, NULL, 'ouda.wycliffe@gmail.com', NULL, 'ouda21', NULL, NULL, '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `national_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `rank` varchar(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `first_name`, `last_name`, `email`, `phone`, `national_id`, `gender`, `rank`, `password`, `status`) VALUES
(1, 'Ouda', 'Wycliffe', 'ouda.wycliffe@gmail.com', '746764503', 123456, 'Male', 'M', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Table structure for table `work_time`
--

CREATE TABLE `work_time` (
  `day` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time_in` int(11) DEFAULT NULL,
  `time_out` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_donation`
--
ALTER TABLE `food_donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `money_donation`
--
ALTER TABLE `money_donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `street_child`
--
ALTER TABLE `street_child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `last_name` (`last_name`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_donation`
--
ALTER TABLE `food_donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `money_donation`
--
ALTER TABLE `money_donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `street_child`
--
ALTER TABLE `street_child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
