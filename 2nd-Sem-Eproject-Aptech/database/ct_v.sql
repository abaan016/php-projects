-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 12:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct&v`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `BookingID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `HospitalName` varchar(255) DEFAULT NULL,
  `VaccineName` varchar(255) DEFAULT NULL,
  `AppointmentDate` date DEFAULT NULL,
  `S_Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `BookingStatus` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`BookingID`, `Name`, `Email`, `Phone`, `HospitalName`, `VaccineName`, `AppointmentDate`, `S_Time`, `BookingStatus`) VALUES
(6, 'Emily', 'emily@gmail.com', '5132418351', '1- Aga Khan University Hospital', 'Sinopharm', '2023-10-19', '0000-00-00 00:00:00', 1),
(7, 'Ava ', 'ava.wilson@example.com', '3241651285', '2- Fatima Memorial Hospital', 'Pfizer', '2023-10-25', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `PatientID` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Dof` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Number` bigint(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `P_status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`PatientID`, `FullName`, `Email`, `password`, `Dof`, `Gender`, `Number`, `Address`, `P_status`) VALUES
(1, 'Emily jack', 'emily@gmail.com', '1234', '2003-10-08', 'Male', 32634523, 'New York', 0),
(2, 'Rony Forest', 'rony@gmail.com', '1234', '1998-10-20', 'Male', 32365432, 'Turkey', 0),
(3, 'Ali', 'ali@gmail.com', '1234', '2003-05-08', 'Male', 324168256, 'Karachi', 0),
(4, 'Ava Wilson', 'ava.wilson@example.com', '1234', '2003-06-19', 'Male', 3241651285, 'Karachi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reghospital`
--

CREATE TABLE `reghospital` (
  `Hid` int(11) NOT NULL,
  `HospitalName` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ContactNum` bigint(20) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `h_role` enum('h_active') DEFAULT NULL,
  `h_status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reghospital`
--

INSERT INTO `reghospital` (`Hid`, `HospitalName`, `Email`, `Password`, `Address`, `ContactNum`, `City`, `h_role`, `h_status`) VALUES
(1, 'Aga Khan University Hospital', 'aghakhan@gmail.com', 'aghakhan', 'Main Campus 24/7 Emergency, Stadium Road ', 325146512, 'karachi', 'h_active', 1),
(2, 'Fatima Memorial Hospital', 'fatimahospital@gmail.com', 'fatimahospital', 'Federal B Area Karimabad Block 3 Gulberg Town', 35431658, 'Karachi', 'h_active', 1),
(4, 'Ali Medical Center', 'alimedical@gmail.com', '', 'sector F-8 Markaz', 32165425, 'Islamabad', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `Name`, `Email`, `Comment`) VALUES
(1, 'emily', 'emily@gmail.com', 'Best online way to you are registeration for covid vaccination'),
(2, 'Alice Johnson', 'alice.johnson@email.com', 'Thank you to the healthcare workers for the efficient vaccination process. Feeling safer now!\r\n'),
(3, 'Robert Smith', 'robert.smith@gmail.com', 'Got my second dose today. Grateful for the efforts in making the vaccine accessible to everyone.'),
(4, 'Emily Davis', 'emily.davis@example.com', 'Quick and organized vaccination center. Kudos to the team!'),
(5, 'Olivia Taylor\r\n', 'olivia.taylor@example.com', 'Smooth registration and vaccination process. Feeling a sense of relief.'),
(6, 'Sophia Lee', 'sophia.lee@email.com', 'Grateful for the vaccination program. Let\'s protect ourselves and others.\r\n'),
(7, 'Jackson Miller', 'jackson.miller@example.com', 'Efficient vaccination process. Thank you for keeping our community safe.');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `Phone`, `Message`) VALUES
(3, 'John Doe', 'john.doe@email.com', 1234567890, 'Just got my COVID vaccine. Feeling relieved, ready to contribute to a safer community!'),
(4, 'Carlos Rodriguez', 'carlos.rodriguez@email.com', 34123456789, '¡Vacunado! Protegiéndonos y cuidando de los demás. Juntos superaremos esto.');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `VaccineID` int(11) NOT NULL,
  `VaccineName` varchar(50) DEFAULT NULL,
  `AvailabilityStatus` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`VaccineID`, `VaccineName`, `AvailabilityStatus`) VALUES
(1, 'Moderna Spikevax', 1),
(2, 'Pfizer', 1),
(3, 'CanSino Convidecia', 0),
(4, 'Gamaleya', 0),
(5, 'AstraZeneca', 0),
(6, 'Sinopharm ', 1),
(7, 'Sinovac', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`PatientID`),
  ADD KEY `idx_PatientID` (`PatientID`);

--
-- Indexes for table `reghospital`
--
ALTER TABLE `reghospital`
  ADD PRIMARY KEY (`Hid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`VaccineID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reghospital`
--
ALTER TABLE `reghospital`
  MODIFY `Hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `VaccineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
