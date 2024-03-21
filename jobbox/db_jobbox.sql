-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 10:54 AM
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
-- Database: `db_jobbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `Id` int(11) NOT NULL,
  `Profileimage` varchar(1000) DEFAULT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `Profession` varchar(255) DEFAULT NULL,
  `Ratings` int(11) DEFAULT 1,
  `Description` text DEFAULT NULL,
  `Skills` text DEFAULT NULL,
  `Location` varchar(500) DEFAULT NULL,
  `Salary` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`Id`, `Profileimage`, `Fullname`, `Profession`, `Ratings`, `Description`, `Skills`, `Location`, `Salary`) VALUES
(1, 'user1.png', 'Robert Fox', 'UI/UX Designer', 5, '| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?', NULL, 'Chicago, US', 45),
(2, 'user2.png', 'Cody Fisher', 'Python developer', 5, '| Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni, atque delectus molestias quis?', NULL, 'Chicago, US', 45);

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `Id` int(11) NOT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Map` varchar(1000) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvmanage`
--

CREATE TABLE `cvmanage` (
  `CvId` int(11) NOT NULL,
  `UploadedFile` varchar(1000) DEFAULT NULL,
  `Educationfrom` varchar(255) DEFAULT NULL,
  `Educationto` varchar(255) DEFAULT NULL,
  `College` varchar(255) NOT NULL,
  `EducationDescription` text DEFAULT NULL,
  `Experiancefrom` varchar(255) DEFAULT NULL,
  `Experianceto` varchar(255) DEFAULT NULL,
  `Company` varchar(255) NOT NULL,
  `ExperianceDescription` text DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cvmanage`
--

INSERT INTO `cvmanage` (`CvId`, `UploadedFile`, `Educationfrom`, `Educationto`, `College`, `EducationDescription`, `Experiancefrom`, `Experianceto`, `Company`, `ExperianceDescription`, `UserId`) VALUES
(1, NULL, '2024-08-10', '2018-08-20', 'University of Example', 'Bachelor\'s Degree in Computer Science', '2019-11-20', '2022-02-29', 'Tech Solutions Inc.', 'Worked as a Software Engineer, primarily focused on web development projects.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `JobsId` int(11) NOT NULL,
  `Compname` varchar(255) NOT NULL,
  `Jobtitle` varchar(255) DEFAULT NULL,
  `Jobdescription` text DEFAULT NULL,
  `Joblocation` varchar(255) DEFAULT NULL,
  `Workplace` varchar(20) DEFAULT NULL,
  `Salary` bigint(20) DEFAULT NULL,
  `Tags` text DEFAULT NULL,
  `Uploadefile` varchar(1000) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JobsId`, `Compname`, `Jobtitle`, `Jobdescription`, `Joblocation`, `Workplace`, `Salary`, `Tags`, `Uploadefile`, `created_date`) VALUES
(1, 'LinkedIn', 'UI / UX Designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur', 'New York, US', 'Fulltime', 500, 'Figma', 'brand-1.png', '2024-03-19 10:14:13'),
(2, 'Adobe Ilustrator', 'Full Stack Engineer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.\r\n\r\n', 'New York, US', 'Part time', 800, 'Asp.Net MVC', 'brand-2.png', '2024-03-19 10:14:13'),
(3, 'Suzuki', 'Mechanical Engineer', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, sint.', 'Pakistan', 'Fulltime', 7000, 'engineer', 'suzuki.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE `recruiters` (
  `RecruiterId` int(11) NOT NULL,
  `Brandlogo` varchar(1000) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Location` varchar(500) DEFAULT NULL,
  `Ratings` int(11) DEFAULT 1,
  `JobOffers` bigint(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`RecruiterId`, `Brandlogo`, `Name`, `Location`, `Ratings`, `JobOffers`) VALUES
(1, 'brand-1.png', 'Car Toys', 'New York, US', 5, 12),
(2, 'brand-2.png', 'Carols Daughter', 'London, UK', 5, 25);

-- --------------------------------------------------------

--
-- Table structure for table `socialnetwork`
--

CREATE TABLE `socialnetwork` (
  `Id` int(11) NOT NULL,
  `Facebook` varchar(500) DEFAULT NULL,
  `Twitter` varchar(500) DEFAULT NULL,
  `Instagram` varchar(500) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `TaskId` int(11) NOT NULL,
  `Logo` varchar(1000) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Startdate` date DEFAULT NULL,
  `Rates` enum('High','Medium','Low') DEFAULT NULL,
  `TaskStatus` enum('pending','In progress','Completed') DEFAULT NULL,
  `TaskCompletion` bigint(100) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`TaskId`, `Logo`, `Name`, `Startdate`, `Rates`, `TaskStatus`, `TaskCompletion`, `UserId`) VALUES
(1, 'img1.png', '\r\nSenior Full Stack Engineer, Creator Success', '2024-03-06', 'High', 'pending', 30, 1),
(2, 'img2.png', 'Senior Full Stack Engineer, Creator Success', '2024-03-08', 'Medium', 'In progress', 68, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserRole` enum('Admin','Candidate','Recruiter') NOT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(12) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Website` text DEFAULT NULL,
  `Bio` text DEFAULT NULL,
  `Experiance` varchar(50) DEFAULT NULL,
  `Education` varchar(50) DEFAULT NULL,
  `Skills` text DEFAULT NULL,
  `Languages` varchar(255) DEFAULT NULL,
  `Categories` varchar(255) DEFAULT NULL,
  `CurrentSalary` bigint(20) DEFAULT NULL,
  `ExpectedSalary` bigint(20) DEFAULT NULL,
  `ProfileImage` varchar(255) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserRole`, `FullName`, `Username`, `Email`, `Password`, `Phone`, `Website`, `Bio`, `Experiance`, `Education`, `Skills`, `Languages`, `Categories`, `CurrentSalary`, `ExpectedSalary`, `ProfileImage`) VALUES
(1, 'Admin', 'Steven Job', 'stevenjob', 'steven@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'profile.png'),
(6, 'Candidate', 'John', 'john_1', 'john@gmail.com', '12345', '+1234567890', 'portfolio.com', 'Hello, I\'m interested in the job opportunity.', '2 years', 'Bachelors', NULL, 'English Urdu', 'UI UX Designer', 7000, 9000, 'wallhaven-577p39_1440x900.png'),
(8, 'Admin', 'Michael Brown', 'michbro', 'michael@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `cvmanage`
--
ALTER TABLE `cvmanage`
  ADD PRIMARY KEY (`CvId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`JobsId`);

--
-- Indexes for table `recruiters`
--
ALTER TABLE `recruiters`
  ADD PRIMARY KEY (`RecruiterId`);

--
-- Indexes for table `socialnetwork`
--
ALTER TABLE `socialnetwork`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`TaskId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cvmanage`
--
ALTER TABLE `cvmanage`
  MODIFY `CvId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `JobsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recruiters`
--
ALTER TABLE `recruiters`
  MODIFY `RecruiterId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socialnetwork`
--
ALTER TABLE `socialnetwork`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `TaskId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD CONSTRAINT `contactinfo_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `cvmanage`
--
ALTER TABLE `cvmanage`
  ADD CONSTRAINT `cvmanage_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `socialnetwork`
--
ALTER TABLE `socialnetwork`
  ADD CONSTRAINT `socialnetwork_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
