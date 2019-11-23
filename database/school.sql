-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 06:26 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(25) NOT NULL,
  `admin_phone` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL,
  `admin_address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_password`, `admin_address`) VALUES
(101, 'Md Kamran Ahmad', 'j.kamran14@gmail.com', '01717929270', '12345', 'Borni');

-- --------------------------------------------------------

--
-- Table structure for table `admission_student`
--

CREATE TABLE `admission_student` (
  `admission_id` int(11) NOT NULL,
  `admission_class` varchar(30) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `previous_school` varchar(20) NOT NULL,
  `previous_result` decimal(4,2) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `relegion` varchar(15) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `nid_no` varchar(25) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `division` varchar(60) NOT NULL,
  `district` varchar(60) NOT NULL,
  `thana` varchar(60) NOT NULL,
  `post_code` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `payment_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applicant_teacher`
--

CREATE TABLE `applicant_teacher` (
  `applicant_id` int(11) NOT NULL,
  `applicant_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `relegion` varchar(15) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `nid_no` varchar(25) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `applicant_email` varchar(25) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `division` varchar(60) NOT NULL,
  `district` varchar(60) NOT NULL,
  `thana` varchar(60) NOT NULL,
  `post_code` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `ssc` varchar(255) NOT NULL,
  `hsc` varchar(255) NOT NULL,
  `graduation` varchar(255) NOT NULL,
  `payment_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` datetime DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `notice_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission_student`
--
ALTER TABLE `admission_student`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `applicant_teacher`
--
ALTER TABLE `applicant_teacher`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `admission_student`
--
ALTER TABLE `admission_student`
  MODIFY `admission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicant_teacher`
--
ALTER TABLE `applicant_teacher`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
