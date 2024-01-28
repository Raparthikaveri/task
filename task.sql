-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 01:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `balls`
--

CREATE TABLE `balls` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `volume` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balls`
--

INSERT INTO `balls` (`id`, `name`, `volume`, `created_at`, `updated_at`) VALUES
(1, 'Red', 2, '2024-01-25', '2024-01-25'),
(2, 'Blue', 2, '2024-01-25', '2024-01-25'),
(3, 'Pink', 4, '2024-01-26', '2024-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `buckets`
--

CREATE TABLE `buckets` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `volume` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buckets`
--

INSERT INTO `buckets` (`id`, `name`, `volume`, `created_at`, `updated_at`) VALUES
(1, 'Bucket A', '10', '2024-01-25', '2024-01-25'),
(2, 'Bucket  B', '10.5', '2024-01-25', '2024-01-25'),
(3, 'Bucket C', '15', '2024-01-25', '2024-01-25'),
(4, 'Bucket  D', '20', '2024-01-25', '2024-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `bucket_id` int(11) NOT NULL,
  `placed_balls` text NOT NULL,
  `filled_space` text NOT NULL,
  `remaiming_space` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balls`
--
ALTER TABLE `balls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buckets`
--
ALTER TABLE `buckets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balls`
--
ALTER TABLE `balls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buckets`
--
ALTER TABLE `buckets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
