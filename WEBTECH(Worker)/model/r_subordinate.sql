-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 08:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r_subordinate`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subordinates`
--

CREATE TABLE `subordinates` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` int(255) NOT NULL,
  `mob` int(255) NOT NULL,
  `yob` int(255) NOT NULL,
  `Phone` int(255) NOT NULL,
  `Speciality` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subordinates`
--

INSERT INTO `subordinates` (`id`, `Name`, `gender`, `dob`, `mob`, `yob`, `Phone`, `Speciality`) VALUES
(0, 'Tasmim', 'Female', 11, 3, 1981, 1687675654, 'Seeding'),
(0, 'Arman', 'Male', 11, 11, 2011, 1687675689, 'Cutting'),
(0, 'Bangla', 'Others', 11, 3, 2001, 1724255329, 'Seeding'),
(0, 'Rahim', 'Male', 25, 12, 1971, 1724255356, 'Farmig'),
(0, 'Kaarim', 'Male', 11, 2, 1997, 1768909876, 'Plumbing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subordinates`
--
ALTER TABLE `subordinates`
  ADD PRIMARY KEY (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subordinates`
--
ALTER TABLE `subordinates`
  MODIFY `Phone` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1768909877;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
