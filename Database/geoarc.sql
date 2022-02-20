-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 05:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geoarc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cushub`
--

CREATE TABLE `cushub` (
  `CReq_id` int(15) NOT NULL,
  `id` int(11) NOT NULL,
  `Pro_pic` varchar(40) NOT NULL,
  `Designfor` varchar(30) NOT NULL,
  `Soil` varchar(30) NOT NULL,
  `Altitude` varchar(30) NOT NULL,
  `Topography` varchar(30) NOT NULL,
  `Price` varchar(40) NOT NULL,
  `Oth_spec` varchar(60) NOT NULL,
  `Plot_img` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cushub`
--

INSERT INTO `cushub` (`CReq_id`, `id`, `Pro_pic`, `Designfor`, `Soil`, `Altitude`, `Topography`, `Price`, `Oth_spec`, `Plot_img`) VALUES
(3, 0, '', '$design', '$soil', '$altitude', '$topography', '$price', '$others', '$plot'),
(5, 0, '', '1', '1', '1212', 'sss', '1', 'aqaq', ''),
(6, 0, '', '1', '1', '1212', 'sss', '1', 'aqaq', ''),
(7, 0, '', '1', '1', '12', 'asa', '1', 'asasasasa', ''),
(8, 0, '', '1', '1', '12', 'asa', '1', 'asasasasa', ''),
(9, 0, '', '1', '1', '12', 'asa', '1', 'asasasasa', ''),
(10, 6, 'ash.png', '1', '1', '99', 'Aqwe', '1', 'zxc', '');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'ash', 'ash@gmail.com', '12345', 'customer'),
(2, 'waka', 'waka@waka.com', 'wakawaka', 'customer'),
(3, 'wakaarc', 'warc@waka.com', '123456', 'architects'),
(4, 'cust', 'cust@gmail.com', '123456', 'customer'),
(5, 'arc', 'arc@gmail.com', '123456', 'architects'),
(6, 'wooow', 'wooow@gmail.com', '12345678', 'architects'),
(7, 'abcd', 'abcd@gmail.com', '12345', 'architects');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profile` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `registerdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `name`, `gender`, `phone`, `address`, `email`, `password`, `profile`, `image`, `registerdate`) VALUES
(1, 'admin', 'Admin', '0', 790766900, 'Admin House', 'Admin@gmail.com', 'admin', '0', '', '2022-02-19'),
(3, 'Arc', 'Architect', '0', 2147483647, '  \r\nArc House', 'arc@gmail.com', '12345', '2', 'IMG-621095bd3a81a0.86760100.jpg', '2022-02-19'),
(4, 'Contra', 'Contractor', '0', 2147483647, '  \r\nContra House', 'con@gmail.com', '123456', '3', 'IMG-6210961e8ed0a5.38114414.jpg', '2022-02-19'),
(5, 'kuttusan', 'bibin', '0', 2147483647, 'ramakkal', 'bibin@gmail.com', '234rew', '1', '', '2022-02-19'),
(6, 'waka', 'Waka King', '0', 2147483647, 'Waka City  \r\n', 'waka@gmail.com', '12345', '1', '', '2022-02-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cushub`
--
ALTER TABLE `cushub`
  ADD PRIMARY KEY (`CReq_id`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cushub`
--
ALTER TABLE `cushub`
  MODIFY `CReq_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
