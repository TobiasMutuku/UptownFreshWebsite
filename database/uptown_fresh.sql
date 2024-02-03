-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 10:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uptown_fresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `picture`) VALUES
(0, 'ernest@gmail.com', 'shouldbehash', '/assests/admin/ouma.png'),
(1, 'elgarmokaya@github.com', 'shouldbehash', '/assets/admin/elgar.tiff'),
(2, 'sly@egerton.ac.ke', 'shouldbehash', '/assets/admin/sly.bitmap');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `firstname`, `lastname`, `password`, `phone`, `address`, `email`) VALUES
(1, 'duncan', 'ndegwa', 'shouldbehash', 799725502, '640 kenyatta avenue', 'whizydan@gmail.com'),
(2, 'james', 'doe', 'shouldbehash', 799725502, 'jika 45 avenue', 'doe@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `buyerID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `buyerID`, `quantity`, `product`, `price`, `productID`) VALUES
(1, 1, 20, 'carrot', 2400, 1),
(2, 2, 20, 'eggs', 240, 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `sellerID` int(11) NOT NULL,
  `payingnumber` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `product` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `date`, `status`, `sellerID`, `payingnumber`, `amount`, `product`, `quantity`) VALUES
(1, '10/9/2022', 'paid', 1, 799725502, 2400, 'eggs', 65),
(2, '11/9/2022', 'unpaid', 1, 799725502, 2400, 'eggs', 35),
(3, '13/9/2022', 'delivered', 1, 799725502, 2400, 'eggs', 35),
(4, '13/9/2022', 'unpaid', 2, 799825502, 65000, 'maize', 86);

-- --------------------------------------------------------

--
-- Table structure for table `pickup_station`
--

CREATE TABLE `pickup_station` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `time` text NOT NULL,
  `location` text NOT NULL,
  `county` text NOT NULL,
  `description` text NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_station`
--

INSERT INTO `pickup_station` (`id`, `name`, `time`, `location`, `county`, `description`, `phone`, `address`) VALUES
(1, 'kalami', '08:00 to 17:00', 'njokerio', 'nakuru', 'next to booster along njokerio egerton road.', 735687534, '236 - 2100 ahero'),
(2, 'lydias store', '9:00 to 18:00', 'cbd', 'nakuru', 'found next to biston centre to the right.Crowned with a yellow band along the face of the store', 754357427, '2340 nakuru');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `grade` char(1) NOT NULL,
  `picture` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `description`, `grade`, `picture`, `type`) VALUES
(1, 'carrot', 120, 65, 'soft cameroon yellow crispy carrpts.', 'A', '/assets/sell/carrots.jpg', 'tuber'),
(2, 'eggs', 12, 35, 'hatchable eggs available for inbreeding.', 'A', '/assets/sell/eggs.jpeg', 'animal produce');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(40) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `firstname`, `lastname`, `password`, `phone`, `address`, `description`) VALUES
(1, 'james', 'ndegwa', 'shouldbehash', 790775502, '640 kenyatta avenue', 'providing quality feed'),
(2, 'cynthia', 'jadudi', 'shouldbehash', 756825502, 'jika 45 avenue', 'feed the nation campaign');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `MerchantRequestID` varchar(30) NOT NULL,
  `CheckoutRequestID` varchar(30) NOT NULL,
  `ResponseCode` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `phone` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `ReceiptNumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `MerchantRequestID`, `CheckoutRequestID`, `ResponseCode`, `amount`, `date`, `phone`, `balance`, `ReceiptNumber`) VALUES
(1, 'FFGJHH', 'ASFGN', 0, 2400, '13/9/2022', 799725502, 65400, 'PQERTYYFC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_station`
--
ALTER TABLE `pickup_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pickup_station`
--
ALTER TABLE `pickup_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
