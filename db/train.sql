-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 07:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_details`
--

CREATE TABLE `p_details` (
  `pid` int(10) NOT NULL,
  `f_no` varchar(30) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `seatno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_details`
--

INSERT INTO `p_details` (`pid`, `f_no`, `p_name`, `gender`, `age`, `seatno`) VALUES
(2, '6E 3158', 'Prathamesh Vengurlekar', 'male', '22', 0),
(4, '6E 3158', 'Prathamesh Vengurlekar', 'male', '22', 0),
(6, '6E 316', 'Prathamesh Vengurlekar11', 'male', '22', 0),
(8, '6E 316', 'à¤ªà¥à¤°à¤­à¥à¤¤à¥‡à¤‚à¤¡à¥‹à¤²à¤•à¤° à¤¨à¤‚à¤¦à', 'male', '22', 0),
(10, '6E 316', 'à¤ªà¥à¤°à¤­à¥à¤¤à¥‡à¤‚à¤¡à¥‹à¤²à¤•à¤° à¤¨à¤‚à¤¦à', 'male', '22', 0),
(12, '6E 316', 'à¤ªà¥à¤°à¤­à¥à¤¤à¥‡à¤‚à¤¡à¥‹à¤²à¤•à¤° à¤¨à¤‚à¤¦à', 'male', '22', 0),
(14, '6E 316', 'à¤ªà¥à¤°à¤­à¥à¤¤à¥‡à¤‚à¤¡à¥‹à¤²à¤•à¤° à¤¨à¤‚à¤¦à', 'male', '22', 0),
(16, '256945', 'prathamesh', 'male', '22', 0),
(18, '256945', 'prathamesh', 'male', '22', -1),
(20, '256945', 'prathamesh', 'male', '22', 1),
(22, '256945', 'prathamesh', 'male', '22', 1),
(24, '256945', 'prathamesh', 'male', '22', 1),
(26, '256945', 'prathamesh', 'male', '22', 1),
(28, '256945', 'prathamesh', 'male', '22', 1),
(30, '256945', 'prathamesh', 'male', '22', 1),
(32, '256945', 'prathamesh', 'male', '22', 1),
(33, '256945', 'sad', 'male', '24', 0),
(34, '256945', 'ui', 'female', '52', 0),
(36, '256945', 'prathamesh', 'male', '22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(10) NOT NULL,
  `f_no` varchar(20) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `departure` datetime(6) NOT NULL,
  `arrival` datetime(6) NOT NULL,
  `frequency` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `f_no`, `source`, `destination`, `departure`, `arrival`, `frequency`) VALUES
(6, '6E 316', 'mumbai', '\r\n	delhi', '2016-10-13 00:00:00.000000', '2016-10-13 00:00:00.000000', 'daily'),
(7, '6E 275', 'goa', '\r\n	chennai', '2016-10-26 00:00:00.000000', '2016-10-27 00:00:00.000000', 'monday'),
(8, '6T 458', 'banglore', '\r\n	kolkata', '2016-10-30 00:00:00.000000', '2016-10-31 00:00:00.000000', 'monday, fr'),
(9, '6E 3158', 'delhi', '\r\n	mumbai', '2016-10-19 00:00:00.000000', '2016-10-19 00:00:00.000000', 'daily'),
(10, '6T 126', 'goa', '\r\n	delhi', '2016-10-26 00:00:00.000000', '2016-10-27 00:00:00.000000', 'saturday'),
(19, '256984', 'ratnagiri', '\r\n	mumbai', '2019-03-12 11:01:00.000000', '2019-03-12 11:04:00.000000', 'daily'),
(20, '256945', 'ratnagiri', '\r\n	delhi', '2019-03-11 14:59:00.000000', '2019-03-12 23:00:00.000000', 'daily');

-- --------------------------------------------------------

--
-- Table structure for table `train_details`
--

CREATE TABLE `train_details` (
  `id` int(10) NOT NULL,
  `seat_a` int(10) NOT NULL,
  `fair_a` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_details`
--

INSERT INTO `train_details` (`id`, `seat_a`, `fair_a`) VALUES
(6, -1, 500),
(7, -1, 1000),
(8, -1, 1500),
(9, -1, 500),
(10, -1, 2000),
(11, -1, 0),
(12, -1, 0),
(13, -1, 0),
(14, -1, 0),
(15, -1, 0),
(16, -1, 0),
(17, -1, 0),
(18, -1, 0),
(19, -1, 500),
(20, 195, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `email`, `address`) VALUES
('', '', '', ''),
('administrator', 'admin', 'admin111@gmail.com', 'a15'),
('prathamesh', '852', 'prathameshve5@gmail.com', 'ksjf'),
('prathamesh5', '963', 'prathameshve5@gmail.com', 'njj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p_details`
--
ALTER TABLE `p_details`
  ADD KEY `f_no` (`f_no`),
  ADD KEY `f_no_2` (`f_no`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_no` (`f_no`);

--
-- Indexes for table `train_details`
--
ALTER TABLE `train_details`
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
