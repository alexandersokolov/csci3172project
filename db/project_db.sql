-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2016 at 01:46 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `csci3172project`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditCards`
--

CREATE TABLE `creditCards` (
  `number` varchar(64) NOT NULL,
  `username` varchar(128) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `type` varchar(32) NOT NULL,
  `expMonth` varchar(3) NOT NULL,
  `expYear` varchar(3) NOT NULL,
  `csv` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `addressTwo` varchar(256) DEFAULT NULL,
  `province` varchar(5) NOT NULL,
  `postCode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creditCards`
--
ALTER TABLE `creditCards`
  ADD PRIMARY KEY (`number`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `creditCards`
--
ALTER TABLE `creditCards`
  ADD CONSTRAINT `creditcards_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);