-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 07:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_assist`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `status` int(2) NOT NULL,
  `title` varchar(65) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `doctorId` bigint(15) UNSIGNED NOT NULL,
  `patientId` bigint(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `status`, `title`, `date`, `description`, `doctorId`, `patientId`) VALUES
(9, 0, '', '0000-00-00', '', 4, 11),
(10, 0, '', '0000-00-00', '', 4, 11),
(11, 0, 'title', '0000-00-00', '', 3, 11),
(12, 0, 'one', '0000-00-00', '', 3, 16),
(13, 0, '', '0000-00-00', 'two', 4, 16),
(14, 0, '', '0000-00-00', 'three', 5, 16),
(15, 0, 'new appointment', '0000-00-00', '', 3, 16),
(16, 0, 'my throat problem', '0000-00-00', 'askdhasidhaoihsdasiho', 4, 16),
(17, 0, '', '0000-00-00', '', 0, 17),
(18, 0, 'Programming Language Quiz App', '0000-00-00', 'kiikik', 3, 17),
(19, 0, 'Programming Language Quiz App', '0000-00-00', 'kiikik', 4, 21);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `username` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `firstName` varchar(65) NOT NULL,
  `lastName` varchar(65) NOT NULL,
  `placeName` varchar(65) NOT NULL,
  `city` varchar(65) NOT NULL,
  `fee` int(65) NOT NULL,
  `phoneNo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `username`, `email`, `firstName`, `lastName`, `placeName`, `city`, `fee`, `phoneNo`) VALUES
(3, 'Nishad', 'nishadsur@gmail.com', 'Nishad', 'Patil', 'Bhusawal', 'jalgaon', 50, 99999999),
(4, 'Neel', 'neel99khalade@gmail.com', 'Neel', 'Khalade', 'Bhosari', 'Pune', 999, 465465465),
(5, 'Sumeet', 'neel99khalade@gmail.com', 'Sumeet', 'Jadhav', 'Dapodi', 'Pimpri-Chinchwad', 50, 54654654);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` bigint(15) UNSIGNED NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `firstName` varchar(65) NOT NULL,
  `lastName` varchar(65) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `smoke` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `username`, `password`, `email`, `firstName`, `lastName`, `phoneNo`, `age`, `gender`, `blood`, `smoke`) VALUES
(16, 'nk', '7220d65820839700b6c9ae74f87b48e0', 'nk@gmail.com', 'nk', 'khalade', 2147483647, 0, '', '', ''),
(21, 'a@gm.com', 'e10adc3949ba59abbe56e057f20f883e', 'aditya.india.dev@gmail.com', 'Aditya', 'Gupta', 5, 6, '5', '42', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` bigint(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
