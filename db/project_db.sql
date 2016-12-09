-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 04:56 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `date`, `text`, `rating`) VALUES
(1, 'testCommentUser', '2016-12-08', 'This product is greaaaaat', 5),
(2, 'testCommentUser', '2016-12-07', 'This product was baaad', 1);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `firstName`, `lastName`, `addressOne`, `addressTwo`, `province`, `postCode`) VALUES
('Alexander', '$2y$10$TLfqsWruN2CzEFNK7xHyBeMjdX/5h54bwds9qfHfdICEQtxgMH3ku', 'alexander.sokolov@dal.ca', 'Alexander', 'Sokolov', '123 FakeStreet', '', 'NS', 'B3P 0K9'),
('bob', '$2y$10$Zf.NwTDGI/omX7UuhAtxGeSzz0.JrbFGcYvrYwdlApmiUbc7wba3i', 'bob@bob.com', 'bob', 'bob', '111 asaa', '111', 'NS', 'B3P0E2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creditcards`
--
ALTER TABLE `creditcards`
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
-- Constraints for table `creditcards`
--
ALTER TABLE `creditcards`
  ADD CONSTRAINT `creditcards_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
