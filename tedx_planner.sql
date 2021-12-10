-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 02:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tedx_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`id`, `filename`, `created`) VALUES
(1, '10.4 Cover.png', '2021-12-09 12:09:48'),
(2, '20200925_135159 (1).jpg', '2021-12-09 12:10:52'),
(3, 'app 11.jpg', '2021-12-09 12:25:58'),
(4, '960x0.jpg', '2021-12-09 12:33:06'),
(5, 'App2.jpg', '2021-12-09 12:33:53'),
(6, 'download (1).jpg', '2021-12-09 12:37:50'),
(7, 'pam (2).jpg', '2021-12-09 12:44:41'),
(8, 'app 11.jpg', '2021-12-09 12:47:34'),
(9, 'GROUP 6 APPRAISAL.pdf', '2021-12-09 13:48:22'),
(10, 'Pamela_Niyongere_FE.pdf', '2021-12-09 13:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `tedusers`
--

CREATE TABLE `tedusers` (
  `user_id` int(11) NOT NULL,
  `about` longtext DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confpassword` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `profile_pc` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tedusers`
--

INSERT INTO `tedusers` (`user_id`, `about`, `first_name`, `last_name`, `event_name`, `role`, `country`, `address`, `Phone`, `email`, `username`, `password`, `confpassword`, `twitter`, `facebook`, `instagram`, `linkedin`, `profile_pc`) VALUES
(33, '  Catherine is an ambitious person, goal-oriented, and always striving for gender equality and better understanding of each other.', 'Catherine ', ' Delight', 'TEDx Ashesi University', 'Licensee and Lead Organizer', 'Kenya', '1 university avenue', '0554401917', 'catherine.delight@ashesi.edu.gh', 'catherine', 'Love12345', 'Love12345', 'google.com', 'Google.com', 'goolge.com', 'linkdin.com', ''),
(34, '   She is amazing, and she likes eating. Her name is Nkuru', 'Divine', '  Nkurunziza', 'TEDx SOS Muyinga', 'manager DATABANK', 'Burundi', '1 university avenue', '+257 79900586', 'divine.niyongere@ashesi.edu.gh', 'divine', 'Love1234', 'Love1234', 'google.com', 'Google.com', 'goolge.com', 'linkdin.com', ''),
(35, '  Her name is Miranda', 'Pamela', ' Niyongere', 'Tedx Burundi', 'Head of Finance', 'Burundi', 'Bujumbura, Burundi', '+257 79900582', 'pamela@gmail.com', 'pamela.niyongere', 'Love12345', 'Love12345', 'google.com', 'google.com', 'google.com', 'google.com', ''),
(36, '         She has a nice smile       ', 'Mary', '        Favour', 'TEDx Paclans', 'Licensee and Lead Organizer', 'Kenya', 'Mombasa, Kenya', '+2330145789521', 'maryfavour@gmail.com', 'mary', 'Love123456', 'Love123456', 'https://twitter.com/catherine', 'https://facebook.com/pamela', 'google.com', 'google.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `confpassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `event_name`, `email`, `username`, `password`, `confpassword`) VALUES
(2, 'Pamela', 'Niyongere', 'Loverer', 'pamela.niyongere@ashesi.edu.gh', 'Pams@45', 'Love1234', 'Love1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tedusers`
--
ALTER TABLE `tedusers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tedusers`
--
ALTER TABLE `tedusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
