-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 10:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r_voting_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `admin_name`, `admin_password`, `datetime`) VALUES
(1, 'admin', 'admin123', '2020-12-23 14:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories_db`
--

CREATE TABLE `categories_db` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories_db`
--

INSERT INTO `categories_db` (`category_id`, `category_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `female_candidates_db`
--

CREATE TABLE `female_candidates_db` (
  `candidate_id_f` int(11) NOT NULL,
  `candidate_name_f` varchar(255) NOT NULL,
  `candidate_usn_f` varchar(255) NOT NULL,
  `candidate_email_f` varchar(255) NOT NULL,
  `candidate_gender_f` varchar(255) NOT NULL,
  `candidate_sem_f` varchar(255) NOT NULL,
  `candidate_branch_f` varchar(255) NOT NULL,
  `candidate_about_f` varchar(255) NOT NULL,
  `candidate_vote_f` varchar(255) NOT NULL,
  `datetime` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `female_candidates_db`
--

INSERT INTO `female_candidates_db` (`candidate_id_f`, `candidate_name_f`, `candidate_usn_f`, `candidate_email_f`, `candidate_gender_f`, `candidate_sem_f`, `candidate_branch_f`, `candidate_about_f`, `candidate_vote_f`, `datetime`) VALUES
(1, 'fathima', '1va18is011', 'fathima@gmail.com', 'Female', '5', 'ISE', 'Name : Fathima\r\nUSN :1va18is012\r\nCollege : VTU\r\nBranch  : ISE', '', '2020-12-23 14:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `male_candidates_db`
--

CREATE TABLE `male_candidates_db` (
  `candidate_id_m` int(11) NOT NULL,
  `candidate_name_m` varchar(255) NOT NULL,
  `candidate_usn_m` varchar(255) NOT NULL,
  `candidate_email_m` varchar(255) NOT NULL,
  `candidate_gender_m` varchar(255) NOT NULL,
  `candidate_sem_m` varchar(255) NOT NULL,
  `candidate_branch_m` varchar(255) NOT NULL,
  `candidate_about_m` varchar(255) NOT NULL,
  `candidate_votes_m` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `male_candidates_db`
--

INSERT INTO `male_candidates_db` (`candidate_id_m`, `candidate_name_m`, `candidate_usn_m`, `candidate_email_m`, `candidate_gender_m`, `candidate_sem_m`, `candidate_branch_m`, `candidate_about_m`, `candidate_votes_m`, `datetime`) VALUES
(1, 'imran', '1va18is013', 'imran@gmail.com', 'Male', '5', 'ISE', 'user_db', '1', '2020-11-26 00:30:46'),
(2, 'Mohammed', '1va18is012', 'mohammed@gmail.com', 'Male', '5', 'ISE', 'user_db', '2', '2020-11-26 00:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `users_applied_job_db`
--

CREATE TABLE `users_applied_job_db` (
  `user_applied_job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_usn` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `f_vote` tinyint(4) NOT NULL,
  `m_vote` tinyint(4) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`user_id`, `user_name`, `user_usn`, `user_email`, `user_gender`, `f_vote`, `m_vote`, `user_password`, `datetime`) VALUES
(2, 'mohammed', '1va18is013', 'mohammedimran@gmail.com', 'Male', 0, 1, '1234', '2020-11-25 18:55:56'),
(3, 'test', '1va18is01', 'test@gmail.com', 'Male', 0, 1, '1234', '2020-11-26 05:42:51'),
(4, 'test2', '1va18is012', 'test2@gmail.com', 'Male', 0, 1, '1234', '2020-11-26 05:44:17'),
(5, 'khan', '1va18is022', 'khan@gmail.com', 'Male', 0, 1, '1234', '2020-12-23 09:16:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories_db`
--
ALTER TABLE `categories_db`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `female_candidates_db`
--
ALTER TABLE `female_candidates_db`
  ADD PRIMARY KEY (`candidate_id_f`);

--
-- Indexes for table `male_candidates_db`
--
ALTER TABLE `male_candidates_db`
  ADD PRIMARY KEY (`candidate_id_m`);

--
-- Indexes for table `users_applied_job_db`
--
ALTER TABLE `users_applied_job_db`
  ADD PRIMARY KEY (`user_applied_job_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories_db`
--
ALTER TABLE `categories_db`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `female_candidates_db`
--
ALTER TABLE `female_candidates_db`
  MODIFY `candidate_id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `male_candidates_db`
--
ALTER TABLE `male_candidates_db`
  MODIFY `candidate_id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_applied_job_db`
--
ALTER TABLE `users_applied_job_db`
  MODIFY `user_applied_job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_applied_job_db`
--
ALTER TABLE `users_applied_job_db`
  ADD CONSTRAINT `users_applied_job_db_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `jobportal_db`.`company_db` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_applied_job_db_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobportal_db`.`job_db` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
