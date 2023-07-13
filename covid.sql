-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 03:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_email_address` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_email_address`, `admin_password`) VALUES
('fionawekulo@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `appointment_id` int(200) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `patient_email_address` varchar(200) NOT NULL,
  `appointment_time` time(6) NOT NULL,
  `reason_for_appointment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_time`
--

CREATE TABLE `appointment_time` (
  `patient_email_address` varchar(200) NOT NULL,
  `comment` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `patient_email_address` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule_table`
--

CREATE TABLE `doctor_schedule_table` (
  `doctor_schedule_id` int(11) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `doctor_schedule_date` date NOT NULL,
  `doctor_schedule_start_time` time(6) NOT NULL,
  `doctor_schedule_end_time` time(6) NOT NULL,
  `average_consulting_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_schedule_table`
--

INSERT INTO `doctor_schedule_table` (`doctor_schedule_id`, `doctor_id`, `doctor_schedule_date`, `doctor_schedule_start_time`, `doctor_schedule_end_time`, `average_consulting_time`) VALUES
(1, '', '2023-03-16', '12:52:00.000000', '12:54:00.000000', 65);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `doctor_email_address` varchar(200) NOT NULL,
  `doctor_password` varchar(200) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `doctor_phone_no` varchar(200) NOT NULL,
  `doctor_address` varchar(200) NOT NULL,
  `doctor_date_of_birth` date NOT NULL,
  `doctor_degree` varchar(200) NOT NULL,
  `doctor_expert_in` varchar(200) NOT NULL,
  `doctor_status` varchar(200) NOT NULL,
  `doctor_added_on` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`doctor_email_address`, `doctor_password`, `doctor_name`, `doctor_phone_no`, `doctor_address`, `doctor_date_of_birth`, `doctor_degree`, `doctor_expert_in`, `doctor_status`, `doctor_added_on`) VALUES
('fionawekulo@gmail.com', '1234', 'Fiona', '0794802072', 'Nairobi', '2023-03-08', 'Medicine', 'Surgery', 'Available', '32:46:44.000000');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `patient_email_address` varchar(200) NOT NULL,
  `patient_password` varchar(200) NOT NULL,
  `patient_first_name` varchar(200) NOT NULL,
  `patient_last_name` varchar(200) NOT NULL,
  `patient_date_of_birth` varchar(200) NOT NULL,
  `patient_gender` varchar(200) NOT NULL,
  `patient_address` varchar(200) NOT NULL,
  `patient_phone_no` varchar(200) NOT NULL,
  `patient_maritial_status` varchar(200) NOT NULL,
  `patient_verification_code` varchar(200) NOT NULL,
  `email_verify` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`patient_email_address`, `patient_password`, `patient_first_name`, `patient_last_name`, `patient_date_of_birth`, `patient_gender`, `patient_address`, `patient_phone_no`, `patient_maritial_status`, `patient_verification_code`, `email_verify`) VALUES
('Oceania@gmail.com', '1234', 'Fiona', 'Wekulo', '', 'Male', 'Mwiki, Kasarani', '+254794802072', 'Single', 'f3e5fcd1de8f0286c1c5480960cf8a0b', 'No'),
('Alice', '0000', 'Agnes', 'Wekesa', '2023-03-02', 'Male', 'Action', '+10723812796', 'Single', '38601fb00efb655ac99f5189e032dcfa', 'No'),
('ndungu.murimi@gmail.com', '123456', 'jOHN', 'Ndungu', '2022-02-02', 'Male', 'Tests', '0713564851', 'Single', 'fde132cf8767a92ec2dfb1015d1ff266', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `vaccine` tinyint(1) NOT NULL,
  `wvaccine` tinyint(1) NOT NULL,
  `dose` tinyint(1) NOT NULL,
  `allergies` varchar(200) NOT NULL,
  `conditions` tinyint(1) NOT NULL,
  `conditions1` varchar(200) NOT NULL,
  `illness` tinyint(1) NOT NULL,
  `illness1` varchar(200) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `lmp` date NOT NULL,
  `pvaccine` tinyint(1) NOT NULL,
  `whospital` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`vaccine`, `wvaccine`, `dose`, `allergies`, `conditions`, `conditions1`, `illness`, `illness1`, `gender`, `lmp`, `pvaccine`, `whospital`) VALUES
(0, 0, 1, '', 0, 'asthma', 0, 'malaria', 0, '2023-03-09', 0, 'KNH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  ADD PRIMARY KEY (`doctor_schedule_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  MODIFY `doctor_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
