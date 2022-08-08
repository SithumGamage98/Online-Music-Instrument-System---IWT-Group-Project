-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 07:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `number`) VALUES
(1, 'Admin', '', '$2y$10$gueaonihWEHqq/bZkb9drOewAQJPSMmkUrqvYCy1IM7JkDjTRMUHa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_id` int(12) NOT NULL,
  `Item_name` varchar(100) NOT NULL,
  `Item_code` int(20) NOT NULL,
  `Item_description` varchar(200) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `Instrument` varchar(100) NOT NULL,
  `Cetegory` varchar(100) NOT NULL,
  `ProductID` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address1` varchar(250) NOT NULL,
  `Address2` varchar(250) NOT NULL,
  `City` varchar(100) NOT NULL,
  `fileds` varchar(100) NOT NULL,
  `Number` varchar(12) NOT NULL,
  `ProductID` varchar(100) NOT NULL,
  `pay` varchar(100) NOT NULL,
  `cNumber` varchar(100) NOT NULL,
  `CVC` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `acdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phandling`
--

CREATE TABLE `phandling` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_type` varchar(250) NOT NULL,
  `product_category` varchar(250) NOT NULL,
  `manufact` varchar(250) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phandling`
--

INSERT INTO `phandling` (`id`, `product_name`, `product_type`, `product_category`, `manufact`, `quantity`, `price`, `image`) VALUES
(4, 'Maonocaster', 'Brand New ', 'Studio & Recording Equipment', 'Yamaha Music', 10, '50000.00', 'maonocaster.jpg'),
(6, 'Guitar ', 'Second Hand', 'Western Music', 'Yamaha Music', 5, '10000.00', 'guitar.jpg'),
(7, 'Gata Bera', 'Brand New', 'Eastern Music', 'Nadra Creations new', 12, '12000.00', 'gata bera.jpg'),
(9, 'Microphone 2', 'Brand New ', 'Studio & Recording Equipment', 'Yamaha Music', 20, '7500.00', 'microphone.jpg'),
(10, 'Trumpet', 'Second Hand', 'Western Music', 'Yamaha Music', 22, '7500.00', 'trumpet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `repdetails`
--

CREATE TABLE `repdetails` (
  `prodCode` varchar(100) NOT NULL,
  `NumberOfSales` int(11) NOT NULL,
  `TotalProfit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ddddddd', '$2y$10$ZjDXOFkE8YuLzQIPp7ar5OC7mZIyQ2BGaPqJA23cc7W9rzKyqqaGO', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` datetime NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `phone`, `dob`, `password`) VALUES
(1, 'gimhani', 'gmhani@gmail.com', '0774357788', '0000-00-00 00:00:00', '78954');

-- --------------------------------------------------------

--
-- Table structure for table `user_coment`
--

CREATE TABLE `user_coment` (
  `user_cid` int(12) NOT NULL,
  `user_cname` varchar(100) NOT NULL,
  `user_cemail` varchar(100) NOT NULL,
  `user_cnumber` int(15) NOT NULL,
  `user_cdiscription` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_coment`
--

INSERT INTO `user_coment` (`user_cid`, `user_cname`, `user_cemail`, `user_cnumber`, `user_cdiscription`) VALUES
(1, 'sanul', 'sandul@gmail.com', 772508888, '             asdddggbhhnxnjadgjhvgdagchdacghvhjadghacxdhk,adjda       \r\n                  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `phandling`
--
ALTER TABLE `phandling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_coment`
--
ALTER TABLE `user_coment`
  ADD PRIMARY KEY (`user_cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Item_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phandling`
--
ALTER TABLE `phandling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_coment`
--
ALTER TABLE `user_coment`
  MODIFY `user_cid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
