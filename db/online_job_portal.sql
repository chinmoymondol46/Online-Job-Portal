-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 06:38 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `u_id`, `name`, `gender`, `email`, `contact`) VALUES
(1, 1, 'Admin', 'male', 'admin@gmail.com', '01779641115');

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `j_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `f_id`, `j_id`, `date`) VALUES
(3, 7, 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `j_id` int(11) NOT NULL,
  `cmt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `complain` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` varchar(30) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `work_done` int(5) DEFAULT 0,
  `portfolio_link` varchar(500) DEFAULT NULL,
  `nid_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`id`, `u_id`, `name`, `gender`, `email`, `joining_date`, `skills`, `work_done`, `portfolio_link`, `nid_number`) VALUES
(7, 5, 'Chinmoy Mondol', 'male', 'chinmoy@gmail.com', '2020/09/27', 'Graphics Design', 0, 'xyz1.com', '0544618418'),
(8, 6, 'Ayon Hasan', 'male', 'ayon@gmail.com', '2020/09/27', 'AutoCAD', 0, 'xyz2.com', '56456678645'),
(9, 7, 'Muktasid Hasan', 'male', 'muktasid@gmail.com', '2020/09/27', 'Photo Editing', 0, 'xyz3.com', '669974556952');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `amount` int(7) NOT NULL,
  `duration` int(2) NOT NULL DEFAULT 3,
  `status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `o_id`, `title`, `description`, `amount`, `duration`, `status`) VALUES
(10, 8, 'Graphics Design', 'Have to design T-shirt', 500, 7, 'pending'),
(11, 8, 'Video Editing ', 'Have to edit a documentary', 300, 5, 'pending'),
(12, 9, 'AutoCAD', 'Have to design an electrical plan', 700, 10, 'active'),
(13, 9, 'Photo Editing', 'Have to edit photos of a wedding ceremony', 650, 10, 'available'),
(14, 10, 'WordPress Website ', 'Have to design a portfolio website', 150, 3, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `outsources`
--

CREATE TABLE `outsources` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `website` varchar(50) DEFAULT NULL,
  `nid_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outsources`
--

INSERT INTO `outsources` (`id`, `u_id`, `name`, `gender`, `email`, `joining_date`, `website`, `nid_number`) VALUES
(8, 2, 'Saiful Islam', 'male', 'saiful@gmail.com', '2020-09-26 18:00:00', 'abcd1.com', 2147483647),
(9, 3, 'Zahin Bhuiyan', 'male', 'zahin@gmail.com', '2020-09-26 18:00:00', 'abcd2.com', 544618415),
(10, 4, 'Siam Kabir', 'male', 'siam@gmail.com', '2020-09-26 18:00:00', 'abcd3.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `usertype`) VALUES
(1, 'admin@gmail.com', '12345678', 'admin'),
(2, 'saiful@gmail.com', '12345678', 'outsourcer'),
(3, 'zahin@gmail.com', '12345678', 'outsourcer'),
(4, 'siam@gmail.com', '12345678', 'outsourcer'),
(5, 'chinmoy@gmail.com', '12345678', 'freelancer'),
(6, 'ayon@gmail.com', '12345678', 'freelancer'),
(7, 'muktasid@gmail.com', '12345678', 'freelancer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outsources`
--
ALTER TABLE `outsources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `outsources`
--
ALTER TABLE `outsources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
