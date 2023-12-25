-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 ديسمبر 2023 الساعة 09:48
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fe9al`
--

-- --------------------------------------------------------

--
-- بنية الجدول `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `email`, `password`) VALUES
(1, 'ms', 'meshaldwas1423@gmail.com', '$2y$10$FP6OFHnYEnbQD4RcIQmrferYTTcNhs0sNiAmsUWnKs9XBhZOvq5ky'),
(3, 'm263', 'mshlaldwas348@gmail.com', '$2y$10$tnLeGRxkuPSnkt7yqJJU1OxD3zUCiOyQiD/wiwu0mg9Doc6HpPsoe'),
(4, 'm2634', 'm2@gmail.com', '$2y$10$J/Kl1m97e4InLs6znoHQG.4EzwXUlj.98pwgfy3XnnK7y3fFOvsuq');

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `profession_service` varchar(100) NOT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employee_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `profession_service`, `employee_email`, `employee_password`) VALUES
(1, 'اسم الموظف', 'المهنة/الخدمة المقدمة', 'employee@example.com', 'hashed_password'),
(2, 'تركي', 'مكنك ', 'm@gmail.com', '$2y$10$OnzRCO6YubreE/VPnAonMuscC0nI5J0tQHip7H87aFqul2wTsr6bi'),
(13, 'خالد ', 'مبرمج', 'kald@gmail.com', '$2y$10$EESikYBTB/tpCYcnSBc0e.Y5Ap.uBlL2IqaFVX9/Mxy1H2wuUETcu'),
(2300, 'خالد ', 'مبرمج', 'kkald@gmail.com', '$2y$10$0GF1f5UoojLjUox.17Tev.fwFoC/hqmRBtzFeauhmMpVy1pcbyW1y'),
(8888, 'عبدالله', 'فتغرافي ', 'abood@gmail.com', '$2y$10$y2c9ajcUqDEL5Of9LBjP1eRNXOgA6nsRYAoDg5fJTkZaSvAB9gP5i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employee_email` (`employee_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
