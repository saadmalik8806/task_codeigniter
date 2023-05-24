-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 01:30 AM
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
-- Database: `task_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_info_sheet`
--

CREATE TABLE `emp_info_sheet` (
  `id` int(255) NOT NULL,
  `p_last_name` varchar(255) NOT NULL,
  `p_middle_name` varchar(255) NOT NULL,
  `p_first_name` varchar(255) NOT NULL,
  `P_Gender` varchar(255) NOT NULL,
  `P_D_O_B` varchar(255) NOT NULL,
  `P_Marital_status` varchar(255) NOT NULL,
  `P_Nationality` varchar(255) NOT NULL,
  `P_BG` varchar(255) NOT NULL,
  `N_name` varchar(255) NOT NULL,
  `N_Relationship` varchar(255) NOT NULL,
  `N_Preferred` varchar(255) NOT NULL,
  `N_Permanent_address` varchar(255) NOT NULL,
  `N_Current_address` varchar(255) NOT NULL,
  `N_Mobile_number` varchar(255) NOT NULL,
  `N_other_contact_number` int(255) NOT NULL,
  `N_ID_No` int(255) NOT NULL,
  `N_PAN` varchar(255) NOT NULL,
  `N_Driver_License_no` varchar(255) NOT NULL,
  `N_email` varchar(255) NOT NULL,
  `E_Last_Name` varchar(255) NOT NULL,
  `E_First_name` varchar(255) NOT NULL,
  `E_Relationship_to_you` varchar(500) NOT NULL,
  `E_Address` varchar(500) NOT NULL,
  `E_Phone` int(255) NOT NULL,
  `E_mobile_number` int(255) NOT NULL,
  `E_nominee_name` varchar(255) NOT NULL,
  `E_N_last_name` varchar(255) NOT NULL,
  `E_N_first_name` varchar(255) NOT NULL,
  `S_edu_schoolname` varchar(255) NOT NULL,
  `S_edu_Years_attended` int(255) NOT NULL,
  `P_S_edu_Institution_name` varchar(500) NOT NULL,
  `P_S_edu_years_attended` varchar(255) NOT NULL,
  `EP_name` varchar(255) NOT NULL,
  `EP_D_O_B` varchar(255) NOT NULL,
  `EP_Nickname` varchar(255) NOT NULL,
  `EP_family_background` varchar(500) NOT NULL,
  `PI_1` varchar(500) NOT NULL,
  `PI_2` varchar(255) NOT NULL,
  `PI_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_info_sheet`
--
ALTER TABLE `emp_info_sheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_info_sheet`
--
ALTER TABLE `emp_info_sheet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
