-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2022 at 09:07 AM
-- Server version: 5.7.25-log
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `status` enum('0','1','2','3') NOT NULL DEFAULT '0' COMMENT '0:pending,1:accepted,2:reject,3:block',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `from_user_id`, `to_user_id`, `status`, `created_at`, `last_update`) VALUES
(1, 6, 3, '0', '2022-01-23 14:13:07', '2022-01-23 14:13:07'),
(2, 6, 4, '0', '2022-01-23 14:26:22', '2022-01-23 14:26:22'),
(3, 6, 5, '0', '2022-01-23 14:26:41', '2022-01-23 14:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `post_privacy` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `post`, `post_privacy`, `created_at`, `last_update`) VALUES
(9, 3, '', 1, '2022-01-10 07:18:34', '2022-01-10 07:18:34'),
(20, 3, 'Post for the day', 1, '2022-01-11 07:46:53', '2022-01-11 07:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `post_id`, `comment`, `user_id`, `created_at`, `last_update`) VALUES
(1, 20, 'Ok , But let me know what is the post.', 3, '2022-01-16 13:52:37', '2022-01-16 13:52:37'),
(2, 20, 'this is new comment', 3, '2022-01-16 14:06:36', '2022-01-16 14:06:36'),
(3, 9, 'this is new comment', 3, '2022-01-16 14:06:52', '2022-01-16 14:06:52'),
(4, 9, 'nice pic', 3, '2022-01-16 14:14:17', '2022-01-16 14:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `image`, `created_at`, `last_update`) VALUES
(12, 9, '20220110014834.jpg', '2022-01-10 07:18:34', '2022-01-10 07:18:34'),
(13, 9, '202201100148341.jpg', '2022-01-10 07:18:34', '2022-01-10 07:18:34'),
(14, 9, '202201100148342.jpg', '2022-01-10 07:18:34', '2022-01-10 07:18:34'),
(15, 9, '202201100148343.jpg', '2022-01-10 07:18:34', '2022-01-10 07:18:34'),
(16, 9, '20220110014834.png', '2022-01-10 07:18:34', '2022-01-10 07:18:34'),
(17, 10, '20220111020810', '2022-01-11 07:38:10', '2022-01-11 07:38:10'),
(18, 11, '20220111020839', '2022-01-11 07:38:39', '2022-01-11 07:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE `post_like` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_like`
--

INSERT INTO `post_like` (`id`, `post_id`, `user_id`, `created_at`) VALUES
(16, 9, 3, '2022-01-11 08:31:44'),
(18, 20, 3, '2022-01-16 12:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('female','male','other') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `password`, `profile_image`, `address`, `education`, `city`, `skills`, `notes`, `created_at`, `last_update`) VALUES
(3, 'Surya Kant', 'Shukla', 'male', 'surya@solutionpoints.co.in', 'e10adc3949ba59abbe56e057f20f883e', '3.png', 'Indore, Madhya Pradesh', 'BE', '', 'PHP, javascript,CSS, HTML', 'This is all about me.', '2022-01-02 08:38:08', '2022-01-11 07:37:38'),
(4, 'Ravendra', 'Kushwaha', 'male', 'ravendra@solutionpoints.co.in', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '2022-01-02 08:43:28', '2022-01-02 08:43:28'),
(5, 'satanand', 'tiwari', 'male', 'satanand.t@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '2022-01-02 09:09:45', '2022-01-02 09:09:45'),
(6, 'Solution', 'Points', 'male', 'learn@solutionpoints.co.in', 'e10adc3949ba59abbe56e057f20f883e', '6.jpg', '', '', '', '', '', '2022-01-23 13:04:18', '2022-01-23 13:33:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
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
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
