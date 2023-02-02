-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 04:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `fb_id` int(11) NOT NULL,
  `football_type` text NOT NULL,
  `football_co` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`fb_id`, `football_type`, `football_co`) VALUES
(1, 'fifa', 'reebok'),
(2, 'fifa', 'adidas'),
(3, 'fifa ', 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `hardball`
--

CREATE TABLE `hardball` (
  `hardball_id` int(11) NOT NULL,
  `ball_type` text NOT NULL,
  `ball_co` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hardball`
--

INSERT INTO `hardball` (`hardball_id`, `ball_type`, `ball_co`) VALUES
(1, 'hardball', 'CA'),
(2, 'hardball ', 'icc');

-- --------------------------------------------------------

--
-- Table structure for table `hardbat`
--

CREATE TABLE `hardbat` (
  `hid` int(11) NOT NULL,
  `h_type` varchar(22) NOT NULL,
  `bat_c` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hardbat`
--

INSERT INTO `hardbat` (`hid`, `h_type`, `bat_c`) VALUES
(1, 'hardbat', 'css'),
(3, 'hard', 'ssc'),
(4, 'hard ball bat', 'HS');

-- --------------------------------------------------------

--
-- Table structure for table `racket`
--

CREATE TABLE `racket` (
  `rac_id` int(11) NOT NULL,
  `racket_type` text NOT NULL,
  `rac_com` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `racket`
--

INSERT INTO `racket` (`rac_id`, `racket_type`, `rac_com`) VALUES
(1, 'racket', 'scc'),
(2, 'racket', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `shuttle`
--

CREATE TABLE `shuttle` (
  `sh_id` int(11) NOT NULL,
  `shuttle_type` text NOT NULL,
  `shuttle_com` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shuttle`
--

INSERT INTO `shuttle` (`sh_id`, `shuttle_type`, `shuttle_com`) VALUES
(1, 'plastic', 'addidas'),
(2, ' plastic', 'addidas'),
(3, 'non plastic', 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bat`
--

CREATE TABLE `tb_bat` (
  `Tbat_id` int(11) NOT NULL,
  `bat_type` text NOT NULL,
  `bat_co` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bat`
--

INSERT INTO `tb_bat` (`Tbat_id`, `bat_type`, `bat_co`) VALUES
(1, 'tennis ball', 'icc'),
(17, 'tenis bat', 'HS'),
(19, 'tenis', 'hs');

-- --------------------------------------------------------

--
-- Table structure for table `tennisball`
--

CREATE TABLE `tennisball` (
  `ball_id` int(11) NOT NULL,
  `ball_type` text NOT NULL,
  `ball_co` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tennisball`
--

INSERT INTO `tennisball` (`ball_id`, `ball_type`, `ball_co`) VALUES
(1, 'tennis', 'css'),
(2, 'tennis ball', 'HS'),
(3, 'tennis ball', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(20) NOT NULL,
  `uname` varchar(22) NOT NULL,
  `pass` varchar(22) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `pass`, `created_at`) VALUES
(21, 'ahmad', '1122', '2023-01-28 03:24:39'),
(23, 'ahmad', '1122', '2023-01-28 06:20:54'),
(29, 'ahmad', '1122', '2023-01-29 00:14:11'),
(30, 'ALI', '1122', '2023-01-29 00:15:00'),
(31, 'ahmad', '3b712de48137572f3849aa', '2023-01-31 01:24:03'),
(32, 'ahmad', '3b712de48137572f3849aa', '2023-01-31 01:25:15'),
(33, 'ahmad ashraf', '6512bd43d9caa6e02c990b', '2023-01-31 01:26:12'),
(34, 'ahmad ashraf', '11', '2023-01-31 01:27:02'),
(35, 'ahmad', '202cb962ac59075b964b07', '2023-01-31 20:56:54'),
(36, 'ahmad ashraf', 'c20ad4d76fe97759aa27a0', '2023-01-31 20:58:20'),
(37, 'ahmad ashraf', '3b712de48137572f3849aa', '2023-01-31 20:59:22'),
(38, 'ahmad', '81dc9bdb52d04dc20036db', '2023-01-31 21:00:40'),
(39, 'ALI', '81dc9bdb52d04dc20036db', '2023-01-31 21:02:31'),
(40, 'ahmad', '1234', '2023-01-31 21:03:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `hardball`
--
ALTER TABLE `hardball`
  ADD PRIMARY KEY (`hardball_id`);

--
-- Indexes for table `hardbat`
--
ALTER TABLE `hardbat`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `racket`
--
ALTER TABLE `racket`
  ADD PRIMARY KEY (`rac_id`);

--
-- Indexes for table `shuttle`
--
ALTER TABLE `shuttle`
  ADD PRIMARY KEY (`sh_id`);

--
-- Indexes for table `tb_bat`
--
ALTER TABLE `tb_bat`
  ADD PRIMARY KEY (`Tbat_id`);

--
-- Indexes for table `tennisball`
--
ALTER TABLE `tennisball`
  ADD PRIMARY KEY (`ball_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football`
--
ALTER TABLE `football`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hardball`
--
ALTER TABLE `hardball`
  MODIFY `hardball_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hardbat`
--
ALTER TABLE `hardbat`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `racket`
--
ALTER TABLE `racket`
  MODIFY `rac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shuttle`
--
ALTER TABLE `shuttle`
  MODIFY `sh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_bat`
--
ALTER TABLE `tb_bat`
  MODIFY `Tbat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tennisball`
--
ALTER TABLE `tennisball`
  MODIFY `ball_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
