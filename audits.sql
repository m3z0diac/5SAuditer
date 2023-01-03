-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 08:30 PM
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
-- Database: `audit5s`
--

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id_audit` int(11) NOT NULL,
  `id_auditeur` int(11) NOT NULL,
  `date_audit` datetime NOT NULL,
  `heure_debut` varchar(255) DEFAULT NULL,
  `heure_fin` varchar(255) DEFAULT NULL,
  `nbr_yes` int(11) DEFAULT 0,
  `nbr_no` int(11) DEFAULT 0,
  `id_engin` int(11) NOT NULL,
  `audited_chs` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audits`
--

INSERT INTO `audits` (`id_audit`, `id_auditeur`, `date_audit`, `heure_debut`, `heure_fin`, `nbr_yes`, `nbr_no`, `id_engin`, `audited_chs`, `created_at`, `updated_at`) VALUES
(19, 0, '2022-12-20 00:00:00', '00:48:57', '01:02:33', 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,', '2022-12-24 00:48:57', '2022-12-24 01:02:33'),
(25, 1, '2022-12-24 00:00:00', '17:16:51', '17:21:28', 60, 20, 2, '1,2,3,4,5,6,7,8,9,10,11,12,13,', '2022-12-24 17:16:51', '2022-12-24 17:21:28'),
(26, 1, '2022-12-22 00:00:00', '19:03:50', '19:09:09', 40, 40, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,', '2022-12-24 19:03:50', '2022-12-24 19:09:09'),
(30, 1, '2022-12-27 00:00:00', '21:05:22', '21:30:00', 43, 37, 1, '1,2,3,4,5,6,6,7,8,9,10,11,12,13,', '2022-12-24 21:05:22', '2022-12-24 21:30:00'),
(37, 1, '2022-12-26 00:00:00', '04:00:58', '04:04:31', 56, 26, 1, '14,15,', '2022-12-25 04:00:58', '2022-12-25 04:04:31'),
(44, 1, '2022-12-25 00:00:00', '15:37:00', '15:40:54', 15, 85, 1, '14,15,', '2022-12-25 15:37:00', '2022-12-25 15:40:54'),
(46, 2, '2022-12-21 00:00:00', '20:29:01', '20:29:34', 50, 30, 1, '14,15,', '2022-12-25 20:29:01', '2022-12-25 20:29:34'),
(49, 1, '2022-12-23 00:00:00', '02:44:47', '03:09:57', 77, 3, 1, '14,15,', '2022-12-30 02:44:48', '2022-12-30 03:09:57'),
(56, 1, '2023-01-01 00:00:00', '23:02:44', NULL, 70, 10, 1, '1,', '2023-01-01 23:02:44', '2023-01-01 23:04:29'),
(57, 1, '2023-01-01 00:00:00', '23:06:32', NULL, 27, 53, 1, '1,', '2023-01-01 23:06:32', '2023-01-01 23:08:46'),
(58, 1, '2023-01-03 00:00:00', '02:41:34', NULL, 0, 0, 1, NULL, '2023-01-03 02:41:34', '2023-01-03 02:41:34'),
(59, 1, '2023-01-03 00:00:00', '02:42:02', '03:45:31', 23, 10, 1, '14,', '2023-01-03 02:42:02', '2023-01-03 03:45:31'),
(60, 1, '2023-01-03 00:00:00', '03:45:42', NULL, 0, 0, 1, NULL, '2023-01-03 03:45:42', '2023-01-03 03:45:42'),
(61, 1, '2023-01-03 00:00:00', '03:45:46', '03:47:00', 16, 16, 1, '14,', '2023-01-03 03:45:46', '2023-01-03 03:47:00'),
(62, 1, '2023-01-03 00:00:00', '03:47:31', '03:49:05', 8, 25, 1, '14,', '2023-01-03 03:47:31', '2023-01-03 03:49:05'),
(63, 1, '2023-01-03 00:00:00', '19:06:44', '19:22:49', 32, 1, 2, '14,', '2023-01-03 19:06:44', '2023-01-03 19:22:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id_audit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id_audit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
