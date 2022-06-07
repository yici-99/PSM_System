-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 10:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psm`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignindustry`
--

CREATE TABLE `assignindustry` (
  `studentID` varchar(100) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentTitle` varchar(100) NOT NULL,
  `SvName` varchar(100) NOT NULL,
  `IndusName` varchar(255) NOT NULL,
  `IndusTypr` varchar(255) NOT NULL,
  `Reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carnival`
--

CREATE TABLE `carnival` (
  `coordinatorID` varchar(100) NOT NULL,
  `coordinatorName` varchar(100) NOT NULL,
  `studentID` varchar(100) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentPhone` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `appointmentID` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `coordinatorID` varchar(100) NOT NULL,
  `coordinatorname` varchar(100) NOT NULL,
  `coordinatorphonenum` varchar(100) NOT NULL,
  `coordinatoremail` varchar(100) NOT NULL,
  `coordinatordepartment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `deadlineID` int(11) NOT NULL,
  `psmType` varchar(255) NOT NULL,
  `svDeadline` date NOT NULL,
  `evDeadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psm1result`
--

CREATE TABLE `psm1result` (
  `resultID` int(11) NOT NULL,
  `studentID` varchar(100) NOT NULL,
  `svMark1` float NOT NULL,
  `svMark2` float NOT NULL,
  `evMark` float NOT NULL,
  `totalMark` float NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `psm2result`
--

CREATE TABLE `psm2result` (
  `resultID` int(11) NOT NULL,
  `studentID` varchar(100) NOT NULL,
  `svMark` float NOT NULL,
  `svmark2` float NOT NULL,
  `evMark` float NOT NULL,
  `totalMark` float NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ptaresult`
--

CREATE TABLE `ptaresult` (
  `resultID` int(11) NOT NULL,
  `studentID` varchar(100) NOT NULL,
  `svMark` float NOT NULL,
  `evMark` float NOT NULL,
  `totalMark` float NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportID` int(11) NOT NULL,
  `studentID` varchar(100) NOT NULL,
  `supervisorID` varchar(100) NOT NULL,
  `resultID` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rubric`
--

CREATE TABLE `rubric` (
  `rubricID` int(11) NOT NULL,
  `competency` varchar(1000) NOT NULL,
  `excellentDesc` varchar(1000) NOT NULL,
  `goodDesc` varchar(1000) NOT NULL,
  `modDesc` varchar(1000) NOT NULL,
  `weakDesc` varchar(1000) NOT NULL,
  `veryweakDesc` varchar(1000) NOT NULL,
  `weight` float NOT NULL,
  `rubricType` varchar(50) NOT NULL,
  `psmType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` varchar(100) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `stdaddress` varchar(100) NOT NULL,
  `studentPhone` varchar(100) NOT NULL,
  `stdemail` varchar(100) NOT NULL,
  `stdfaculty` varchar(100) NOT NULL,
  `stdyear` int(11) NOT NULL,
  `stdsupervisor` varchar(100) NOT NULL,
  `stdpsmtitle` varchar(100) NOT NULL,
  `psmType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentresult`
--

CREATE TABLE `studentresult` (
  `studentID` varchar(100) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `studentTitle` varchar(100) NOT NULL,
  `SvName` varchar(100) NOT NULL,
  `psm1Marks` float NOT NULL,
  `psm2Marks` float NOT NULL,
  `ptaMarks` float NOT NULL,
  `psm1Ev` float NOT NULL,
  `psm1Sv` float NOT NULL,
  `psm2Ev` float NOT NULL,
  `psm2Sv` float NOT NULL,
  `ptaEv` float NOT NULL,
  `ptaSv` float NOT NULL,
  `psmFinalResult` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supervisorID` varchar(100) NOT NULL,
  `svbiography` varchar(100) NOT NULL,
  `svname` varchar(100) NOT NULL,
  `svphonenum` varchar(100) NOT NULL,
  `svemail` varchar(100) NOT NULL,
  `svdepartment` varchar(100) NOT NULL,
  `svexpertise` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignindustry`
--
ALTER TABLE `assignindustry`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `carnival`
--
ALTER TABLE `carnival`
  ADD PRIMARY KEY (`coordinatorID`),
  ADD KEY `studentID_fr4` (`studentID`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`coordinatorID`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`deadlineID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `psm1result`
--
ALTER TABLE `psm1result`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `studentID_fr` (`studentID`);

--
-- Indexes for table `psm2result`
--
ALTER TABLE `psm2result`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `studentID_fr2` (`studentID`);

--
-- Indexes for table `ptaresult`
--
ALTER TABLE `ptaresult`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `studentID_fr3` (`studentID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `studentID_fr7` (`studentID`),
  ADD KEY `supervisorID_fr1` (`supervisorID`),
  ADD KEY `resultID_fr1` (`resultID`);

--
-- Indexes for table `rubric`
--
ALTER TABLE `rubric`
  ADD PRIMARY KEY (`rubricID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`supervisorID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psm1result`
--
ALTER TABLE `psm1result`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psm2result`
--
ALTER TABLE `psm2result`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptaresult`
--
ALTER TABLE `ptaresult`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignindustry`
--
ALTER TABLE `assignindustry`
  ADD CONSTRAINT `studentID_fr6` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `carnival`
--
ALTER TABLE `carnival`
  ADD CONSTRAINT `studentID_fr4` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `psm1result`
--
ALTER TABLE `psm1result`
  ADD CONSTRAINT `studentID_fr` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `psm2result`
--
ALTER TABLE `psm2result`
  ADD CONSTRAINT `studentID_fr2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `ptaresult`
--
ALTER TABLE `ptaresult`
  ADD CONSTRAINT `studentID_fr3` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `resultID_fr1` FOREIGN KEY (`resultID`) REFERENCES `psm1result` (`resultID`),
  ADD CONSTRAINT `studentID_fr7` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`),
  ADD CONSTRAINT `supervisorID_fr1` FOREIGN KEY (`supervisorID`) REFERENCES `supervisor` (`supervisorID`);

--
-- Constraints for table `studentresult`
--
ALTER TABLE `studentresult`
  ADD CONSTRAINT `studentID_fr5` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
