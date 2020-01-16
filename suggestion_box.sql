-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 11:34 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suggestion_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `created_date`) VALUES
(1, 'shovo', '1234', '2020-01-09'),
(2, 'user', '123', '2020-01-09'),
(3, 'admin', 'afaf', '2001-09-20'),
(4, 'shovo', '1234', '2001-09-20'),
(5, 'shovo', '1234', '2001-09-20'),
(6, 'shovo123', 'b02cce6739ce51ef5032d9c7f7ba85c3', '2001-09-20'),
(7, 'user', '202cb962ac59075b964b07152d234b70', '2001-10-20'),
(8, 'user', '202cb962ac59075b964b07152d234b70', '2001-10-20'),
(9, 'shovo', '81dc9bdb52d04dc20036dbd8313ed055', '2001-10-20'),
(10, '123', '9fc3d7152ba9336a670e36d0ed79bc43', '2001-10-20'),
(11, '123', '9fc3d7152ba9336a670e36d0ed79bc43', '2001-10-20'),
(12, '123', '9fc3d7152ba9336a670e36d0ed79bc43', '2001-10-20'),
(13, 'shovo', '1234', '2001-10-20'),
(14, '', '', '2001-10-20'),
(15, 'shovo', '1234', '2001-10-20'),
(16, '', '', '2001-10-20'),
(17, '', '', '2001-10-20'),
(18, '', '', '2001-10-20'),
(19, 'shovo', '81dc9bdb52d04dc20036dbd8313ed055', '2001-11-20'),
(20, '', 'd41d8cd98f00b204e9800998ecf8427e', '2001-11-20'),
(21, 'shovo1234', '1234', '0000-00-00'),
(22, 's1', 'MTE=', '0000-00-00'),
(23, 'shuv', 'MTIzNA==', '0000-00-00'),
(24, 'abc', 'MTIz', '2013-01-20'),
(25, '112', 'MTEy', '2013-01-20'),
(26, 'user1', 'MTIzNA==', '2013-01-20'),
(27, '121', '$2y$10$FajrF9YvW9wlv2RIvLiwPuWw0uih6PhgQS4dbb4z6N9iiG6k1jeIK', '2013-01-20'),
(28, '11111', '$2y$10$gq9KRecqtMOpy1UYUIWLQ.yEyjAcP7J2jK/Ll.qI9bb39hNUw.JMC', '2013-01-20'),
(29, '12233', 'MQ==', '2013-01-20'),
(30, '12121', 'MTIx', '2013-01-20'),
(31, '1212121', '$2y$10$kFBHadYXfbflT5wAD2WwGOdJLvZDa.ggGPuqT/lwxnLydLUFh..Zi', '2013-01-20'),
(32, 'shovo921@', '$2y$10$KwDA72pwWsg0VPYpY33TNufa5S.b2RsJJwljx0LvvhjhxEzpPal7u', '2013-01-20'),
(33, 'ashik', '$2y$10$j1pUncb3l1PVbdtvY8WGyeb3MHLwAAptUwDM8Yv1am8MHBUcbB63q', '2013-01-20'),
(34, 'nitai', '$2y$10$rK5Pn1QAVjE8NeRiEh2EE.BR5CzXaOzn20soWina5tf7a2CuAWRxC', '2014-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `sugesstion_type`
--

CREATE TABLE `sugesstion_type` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sugesstion_type`
--

INSERT INTO `sugesstion_type` (`id`, `name`, `created_date`) VALUES
(3, 'good', '2020-01-08'),
(4, 'bad', '2020-01-08'),
(5, 'Best', '2020-01-09'),
(6, 'Better', '2020-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(100) NOT NULL,
  `details` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `sugesstion_type_id` int(100) NOT NULL,
  `login_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `details`, `created_date`, `sugesstion_type_id`, `login_id`) VALUES
(80, 'Best Wishes for You !', '2001-09-20', 5, 0),
(81, 'hello ', '2001-09-20', 4, 0),
(82, '', '2001-09-20', 0, 0),
(83, '', '0000-00-00', 0, 21),
(84, 'best wishes ', '0000-00-00', 5, 21),
(85, '\nWhen everyone we know, everyone we encounter toda', '2013-01-20', 6, 21),
(86, 'abc', '2013-01-20', 4, 21),
(87, 'adsdavsdc', '2013-01-20', 5, 21),
(88, ' nv,fyu,futdf,yc', '2013-01-20', 3, 33),
(89, 'best wishes for you  guys', '2014-01-20', 6, 34),
(90, 'hei', '2014-01-20', 5, 34),
(91, 'hello', '2014-01-20', 5, 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugesstion_type`
--
ALTER TABLE `sugesstion_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sugesstion_type`
--
ALTER TABLE `sugesstion_type`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
