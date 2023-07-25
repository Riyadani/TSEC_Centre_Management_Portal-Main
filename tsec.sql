-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsec`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_student`
--

CREATE TABLE `contact_student` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_student`
--

INSERT INTO `contact_student` (`first_name`, `last_name`, `phone_number`, `email`, `comment`) VALUES
('dhyey', 'mistry', 3988398888, '78dhey@kl.com', 'kkhhkjhkjh'),
('Dhyey', 'Mistry', 9696563251, 'dhyey@g.com', 'hello..'),
('abc', 'abc', 9876543214, 'abc@gmail.com', 'hello Good One Web...!');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `registration_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `emailaddress` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `city` varchar(30) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city_center` varchar(30) NOT NULL,
  `zipcode` bigint(6) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `faculty` varchar(30) NOT NULL,
  `t_and_c` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tsec_registration`
--

CREATE TABLE `tsec_registration` (
  `registration_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `emailaddress` varchar(30) NOT NULL,
  `passwrd` varchar(260) NOT NULL,
  `city` varchar(30) NOT NULL,
  `stat` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city_center` varchar(30) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `technical` varchar(30) NOT NULL,
  `commercial` varchar(30) NOT NULL,
  `t_and_c` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `emailaddress` (`emailaddress`);

--
-- Indexes for table `tsec_registration`
--
ALTER TABLE `tsec_registration`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `emailaddress` (`emailaddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `registration_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tsec_registration`
--
ALTER TABLE `tsec_registration`
  MODIFY `registration_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
