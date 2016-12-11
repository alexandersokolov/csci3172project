-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 11, 2016 at 02:01 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `csci3172project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `rating` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `creditcards`
--

CREATE TABLE `creditcards` (
  `number` varchar(64) NOT NULL,
  `username` varchar(128) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `type` varchar(32) NOT NULL,
  `expMonth` varchar(3) NOT NULL,
  `expYear` varchar(3) NOT NULL,
  `csv` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `creditcards`
--

INSERT INTO `creditcards` (`number`, `username`, `firstName`, `lastName`, `type`, `expMonth`, `expYear`, `csv`) VALUES
('123456790123456', 'jason', 'jason', 'turner', 'MC', '06', '89', '123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `imagePath` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `type` int(11) NOT NULL,
  `subtype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `imagePath`, `description`, `price`, `quantity`, `available`, `type`, `subtype`) VALUES
(1, 'test laptop', '/test/path', 'this is just a test product', '100', 10, 1, 0, 5),
(2, 'testtop', '/test/path', 'this is a test laptop', '100', 10, 1, 0, 5),
(3, 'testtop2', '/test/path2', 'this is a test laptop2', '1001', 101, 1, 0, 5),
(4, 'phone1', 'media/phone/phone.jpg', 'im a phone', '100', 10, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(128) NOT NULL,
  `password` varchar(1028) NOT NULL,
  `email` varchar(128) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `addressOne` varchar(256) NOT NULL,
  `addressTwo` varchar(256) NOT NULL,
  `province` varchar(5) NOT NULL,
  `postCode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `firstName`, `lastName`, `addressOne`, `addressTwo`, `province`, `postCode`) VALUES
('jason', '$2y$10$Kv1LSKUZ75CCcx0Aq5Aid.nD5d.2mGpM9mseX4.5FbdTanDhlgirm', 'test@test.com', 'jason', 'jason', 'jason', 'jason', 'NS', 'b3m3m5'),
('test99', '$2y$10$x.AGMLygYDN.1b5smsOhjOgmVyfos/CegM.boRiz1tW.WTtn/6EXK', 'test@test.com', 'jason', 'turner', '101', '101', 'NS', 'B3M3M5'),
('testUser1', '$2y$10$Chg4lcXuVPvyTN89NBV97e4nGTLWrxoSA0D8PZKnsYY5EMcSdfd42', 'test@test.com', 'jason', 'test', 'test', 'test', 'NS', 'b3m3m5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `creditcards`
--
ALTER TABLE `creditcards`
  ADD PRIMARY KEY (`number`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
