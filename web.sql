-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 09:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Open',
  `votes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `user_name`, `img_url`, `description`, `date`, `location`, `status`, `votes`) VALUES
(16, 14, 'yogindra', 'IMG-6382581a921627.46766327.jpg', 'Road side is filled with pile of garbage', '2022-11-26 18:16:58', 'salur', 'Submitted to newspaper', 3),
(17, 14, 'yogindra', 'IMG-638258342d9ec8.37633368.jpeg', 'Roads are not good', '2022-11-26 18:17:24', 'salur', 'Resolved', 1),
(18, 3, 'surya', 'IMG-63825a03a4bd84.29092170.jpeg', 'Roads are not good', '2022-11-26 18:25:07', 'vizag', 'Submitted to newspaper', 4),
(19, 3, 'surya', 'IMG-63825a7b2ab525.40403376.jpg', 'Huge pile of garbage beside the road', '2022-11-26 18:27:07', 'salur', 'No Action Taken', 3),
(24, 20, 'bharat', 'IMG-6382720c61dc04.47353566.jpg', 'Roads are not good', '2022-11-26 20:07:40', 'salur', 'Submitted to newspaper', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `acc_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `gender`, `acc_type`) VALUES
(1, 'Pranay Naidu', 'Pachipenta', 'pranay11@gmail.com', 'pranay', 'male', 'admin'),
(3, 'surya', 'Inaparthi', 'surya44@gmail.com', 'surya', 'male', 'user'),
(14, 'yogindra', 'Addanki', 'yogi42@gmail.com', 'pranay', 'male', 'user'),
(15, 'Teja Vinay', 'Gembali', 'teja64@yahoo.com', 'pranay', 'female', 'user'),
(16, 'Ram', 'pachipenta', 'ram24@gmail.com', 'pranay', 'male', 'user'),
(17, 'krishna', 'pola', 'krishna23@gmail.com', 'pranay', 'male', 'user'),
(18, 'sita', 'kada', 'sita12@gmail.com', 'pranay', 'female', 'user'),
(19, 'laxman', 'yerra', 'laxman74@gmail.com', 'pranay', 'male', 'user'),
(20, 'bharat', 'vulli', 'bharat27@gmail.com', 'pranay', 'male', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `post_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`post_id`, `status`, `user_id`) VALUES
(10, 1, 2),
(13, 1, 2),
(11, 1, 2),
(10, 1, 3),
(11, 1, 3),
(15, 1, 3),
(16, 1, 3),
(19, 1, 3),
(16, 1, 15),
(19, 1, 15),
(18, 1, 15),
(16, 1, 16),
(19, 1, 18),
(18, 1, 18),
(18, 1, 19),
(17, 1, 20),
(18, 1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
