-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 12:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nx`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(255) NOT NULL,
  `user_id` int(225) NOT NULL,
  `username` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `number_email` text NOT NULL,
  `email` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `ext` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `user_id`, `username`, `name`, `number_email`, `email`, `image_url`, `ext`, `image`, `price`, `message`) VALUES
(1, 6661, 'zaidanabbas', '', '', '', 'nxads-61ffafcd34e255.19493815.png', '', 'blank.png', '', 'Travis Scott '),
(2, 18527, 'zaidanabbas', '', '', '', 'nxads-61ffee48a25a84.93343589.jpg', '', 'blank.png', '', 'NYAN CAT '),
(3, 10784, 'zaidanabbas', '', '', '', 'nxads-61fff13ca4dd12.18995193.jpeg', '', 'blank.png', '', 'Bored ape'),
(4, 18205, 'zaidanabbas', '', '', '', 'nxads-62001ea53320f4.25328304.jpeg', '', 'blank.png', '', 'Wolf pack'),
(5, 8092, 'zaidanabbas', '', '', '', 'nxads-620039b4d036c6.45266724.gif', '', 'blank.png', '', 'NYAN CAT');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(25) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(255) NOT NULL,
  `user_id` int(225) NOT NULL,
  `username` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `number_email` text NOT NULL,
  `email` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images1`
--

CREATE TABLE `images1` (
  `id` int(255) NOT NULL,
  `user_id` int(225) NOT NULL,
  `username` varchar(500) NOT NULL,
  `name` text NOT NULL,
  `number_email` text NOT NULL,
  `email` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `ext` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `privat`
--

CREATE TABLE `privat` (
  `id` int(25) NOT NULL,
  `fromuser` text NOT NULL,
  `user_name` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `image_url` varchar(255) NOT NULL DEFAULT 'blank.png',
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `verified` varchar(255) NOT NULL DEFAULT 'no',
  `admin` varchar(255) NOT NULL DEFAULT 'no',
  `adminpanel` varchar(1000) NOT NULL DEFAULT 'no',
  `message` varchar(255) NOT NULL,
  `posts` varchar(500) NOT NULL DEFAULT 'no',
  `adminposts` varchar(255) NOT NULL DEFAULT 'no',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `image_url`, `name`, `user_name`, `email`, `number`, `password`, `verified`, `admin`, `adminpanel`, `message`, `posts`, `adminposts`, `date`) VALUES
(1, 1, 'blank.png', 'Abbas Zaidan', 'zaidanabbas', 'abbastzaidan08@gmail.com', '+32470360242', 'nizu$123@', 'yes', 'yes', 'yes', '', 'yes', 'yes', '2022-02-06 04:04:46'),
(2, 5163, 'blank.png', 'Adel Mroueh', 'adelmroueh', 'mrouehadel88@gmail.com', '', 'Adoula88', 'yes', 'yes', 'yes', '', 'yes', 'yes', '2022-02-06 11:57:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images1`
--
ALTER TABLE `images1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privat`
--
ALTER TABLE `privat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images1`
--
ALTER TABLE `images1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privat`
--
ALTER TABLE `privat`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
