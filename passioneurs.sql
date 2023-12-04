-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 07:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passioneurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'abdulrahman issa', 'wassim@hotmail.com', '0540326313', '2023-11-30 09:28:09', '2023-12-02 10:59:06'),
(7, 'wassim', 'wassim@gmail.com', '0540326314', '2023-12-02 08:11:04', '2023-12-02 08:11:04'),
(8, 'Hdeal Issa', 'Hdeal@hotmail.com', '0540326314', '2023-12-02 08:14:02', '2023-12-02 08:14:02'),
(9, 'Nashat Issa', 'Nashat@hotmail.com', '0540326311', '2023-12-02 08:14:25', '2023-12-02 08:14:25'),
(10, 'Suad Issa', 'suad@hotmail.com', '0540326312', '2023-12-02 08:14:46', '2023-12-02 08:14:46'),
(11, 'khaled', 'khaled@gmail.com', '0540326319', '2023-12-02 11:43:04', '2023-12-02 11:43:04'),
(12, 'bilal', 'bilal@gmail.com', '0540326333', '2023-12-02 11:43:27', '2023-12-02 11:43:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
