-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 05:03 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `large` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `user_id`, `large`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, 10, '2019-11-16 03:40:44', NULL, NULL),
(2, 9, 15, '2019-11-16 03:40:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `article` text NOT NULL,
  `img` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'tes coba coba coba', 'qwe', '1571120082-GAGA.jpg', '2019-10-14 23:14:42', '2019-10-14 23:14:42', NULL),
(2, 'lorem ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1571291644-B.png', '2019-10-16 22:54:04', '2019-10-16 22:54:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id`, `kriteria`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'Suhu', 20, '2019-11-06 23:55:48', '2019-11-06 23:55:48'),
(2, 'Curah Hujan', 20, '2019-11-07 00:10:22', '2019-11-07 00:10:22'),
(3, 'Tekstur Tanah', 10, '2019-11-07 00:11:08', '2019-11-07 00:11:08'),
(4, 'Kedalaman Tanah', 10, '2019-11-07 00:11:21', '2019-11-07 00:11:21'),
(5, 'PH', 5, '2019-11-07 00:11:28', '2019-11-07 00:11:28'),
(6, 'Bahaya Erosi', 5, '2019-11-07 00:11:45', '2019-11-07 00:11:45'),
(7, 'Ketebalan Gambut', 5, '2019-11-07 00:11:56', '2019-11-07 00:11:56'),
(8, 'Drainase', 5, '2019-11-07 00:12:06', '2019-11-07 00:12:06'),
(9, 'Rotasi Tanam', 20, '2019-11-07 00:12:14', '2019-11-07 00:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `value` varchar(191) NOT NULL,
  `parameter` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `plant_id`, `criteria_id`, `value`, `parameter`, `created_at`, `updated_at`) VALUES
(36, 1, 1, '22 - 25', 1, '2019-11-12 09:45:31', '2019-11-12 09:45:31'),
(37, 1, 1, '20 - 22', 2, '2019-11-12 09:46:35', '2019-11-12 09:46:35'),
(38, 1, 1, '25 - 27', 2, '2019-11-12 09:46:42', '2019-11-12 09:46:42'),
(39, 1, 1, '18 - 20', 3, '2019-11-12 09:46:56', '2019-11-12 09:46:56'),
(40, 1, 1, '27 - 29', 3, '2019-11-12 09:47:06', '2019-11-12 09:47:06'),
(41, 1, 1, '> 29', 4, '2019-11-12 09:47:28', '2019-11-12 09:47:28'),
(42, 1, 1, '< 18', 4, '2019-11-12 09:47:36', '2019-11-12 09:47:36'),
(43, 1, 2, '1500 - 2000', 1, '2019-11-12 09:49:08', '2019-11-12 09:49:08'),
(44, 1, 2, '1000 - 1500', 2, '2019-11-15 17:09:03', '2019-11-15 17:09:03'),
(45, 1, 2, '2000 - 2500', 2, '2019-11-15 17:09:17', '2019-11-15 17:09:17'),
(46, 1, 2, '700 - 1000', 3, '2019-11-15 17:09:31', '2019-11-15 17:09:31'),
(47, 1, 2, '2500 - 3000', 3, '2019-11-15 17:09:42', '2019-11-15 17:09:42'),
(48, 1, 2, '< 700', 4, '2019-11-15 17:10:01', '2019-11-15 17:10:01'),
(49, 1, 2, '> 3000', 4, '2019-11-15 17:10:18', '2019-11-15 17:10:18'),
(50, 1, 3, 'Halus', 1, '2019-11-15 17:10:30', '2019-11-15 17:10:30'),
(51, 1, 3, 'Sedang', 2, '2019-11-15 17:10:37', '2019-11-15 17:10:37'),
(52, 1, 3, 'Agak Kasar', 3, '2019-11-15 17:10:55', '2019-11-15 17:10:55'),
(53, 1, 3, 'Kasar', 4, '2019-11-15 17:11:01', '2019-11-15 17:11:01'),
(54, 1, 4, '> 50', 1, '2019-11-15 17:11:32', '2019-11-15 17:11:32'),
(55, 1, 4, '40 - 50', 2, '2019-11-15 17:11:39', '2019-11-15 17:11:39'),
(56, 1, 4, '25 - 40', 3, '2019-11-15 17:12:07', '2019-11-15 17:12:07'),
(57, 1, 4, '< 25', 4, '2019-11-15 17:12:20', '2019-11-15 17:12:20'),
(58, 1, 5, '5,5 - 7', 1, '2019-11-15 17:12:36', '2019-11-15 17:12:36'),
(59, 1, 5, '5 - 5,5', 2, '2019-11-15 17:12:48', '2019-11-15 17:12:48'),
(60, 1, 5, '7 - 8', 2, '2019-11-15 17:13:02', '2019-11-15 17:13:02'),
(61, 1, 5, '< 5', 3, '2019-11-15 17:13:12', '2019-11-15 17:13:12'),
(62, 1, 5, '> 8', 3, '2019-11-15 17:13:22', '2019-11-15 17:13:22'),
(63, 1, 6, 'Tidak ada', 1, '2019-11-15 17:13:36', '2019-11-15 17:13:36'),
(64, 1, 6, 'Ringan', 2, '2019-11-15 17:13:43', '2019-11-15 17:13:43'),
(65, 1, 6, 'Sedang', 3, '2019-11-15 17:13:49', '2019-11-15 17:13:49'),
(66, 1, 6, 'Berat', 4, '2019-11-15 17:13:54', '2019-11-15 17:13:54'),
(67, 1, 7, '< 50', 1, '2019-11-15 17:14:03', '2019-11-15 17:14:03'),
(68, 1, 7, '50 - 100', 2, '2019-11-15 17:14:11', '2019-11-15 17:14:11'),
(69, 1, 7, '100 - 150', 3, '2019-11-15 17:14:19', '2019-11-15 17:14:19'),
(70, 1, 7, '> 150', 4, '2019-11-15 17:14:26', '2019-11-15 17:14:26'),
(71, 1, 8, 'Terhambat', 1, '2019-11-15 17:16:30', '2019-11-15 17:16:30'),
(72, 1, 8, 'Agak Terhambat', 2, '2019-11-15 17:16:50', '2019-11-15 17:16:50'),
(73, 1, 8, 'Agak Cepat', 3, '2019-11-15 17:17:21', '2019-11-15 17:17:21'),
(74, 1, 8, 'Cepat', 4, '2019-11-15 17:17:34', '2019-11-15 17:17:34'),
(75, 1, 9, 'Jagung', 1, '2019-11-15 17:18:39', '2019-11-15 17:18:39'),
(76, 1, 9, 'Kacang Tanah', 2, '2019-11-15 17:18:47', '2019-11-15 17:18:47'),
(77, 1, 9, 'Padi', 3, '2019-11-15 17:18:54', '2019-11-15 17:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `plantings`
--

CREATE TABLE `plantings` (
  `id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0: tanam, 1: panen',
  `profit` double DEFAULT NULL,
  `loss` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plantings`
--

INSERT INTO `plantings` (`id`, `area_id`, `plant_id`, `status`, `profit`, `loss`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 10000000, 200000, '2019-11-16 04:00:33', NULL),
(2, 1, 1, 0, NULL, NULL, '2019-11-16 04:00:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Padi', '2019-11-07 05:46:14', '2019-11-07 05:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `email_verified_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'Brian', 'brianrizqi@cs.unej.ac.id', 'brianrizqi', '$2y$10$gTtCDBb3navZBLtX4kzK6.MkD8f2hHOrokPG.Opnfdzeb6mHsgoDi', NULL, '2019-09-22 06:33:12', '2019-09-22 06:33:12', NULL),
(10, 'Miko', 'michaelmiko27@gmail.com', '123456', '$2y$10$qlws9IAsOvGedv9zo.a1KeK/SEG/vNd6Z3KcAOp0mccEsywZdcK8i', NULL, '2019-09-22 09:19:01', '2019-09-22 09:19:01', NULL),
(11, 'Tes', 'tes@tes.com', '123456789', '$2y$10$kA2cxccEZ06htsCMNiQJOuue.gQ/6Ewnd7yP8iPo9yT74OFna6uOC', NULL, '2019-10-15 06:07:48', '2019-10-15 06:07:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` int(11) NOT NULL,
  `value` varchar(20) NOT NULL,
  `parameter` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `value`, `parameter`, `created_at`, `updated_at`) VALUES
(1, 'Sangat Sesuai', 1, '2019-11-07 00:09:40', '2019-11-07 00:09:40'),
(2, 'Cukup Sesuai', 2, '2019-11-07 00:12:50', '2019-11-07 00:12:50'),
(3, 'Rata-rata', 3, '2019-11-07 00:12:57', '2019-11-07 00:12:57'),
(4, 'Tidak Sesuai', 4, '2019-11-07 00:13:05', '2019-11-07 00:13:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plant_id` (`plant_id`,`criteria_id`,`parameter`),
  ADD KEY `parameter` (`parameter`),
  ADD KEY `criteria_id` (`criteria_id`);

--
-- Indexes for table `plantings`
--
ALTER TABLE `plantings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `plant_id` (`plant_id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `plantings`
--
ALTER TABLE `plantings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_2` FOREIGN KEY (`parameter`) REFERENCES `values` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_3` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plantings`
--
ALTER TABLE `plantings`
  ADD CONSTRAINT `plantings_ibfk_1` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plantings_ibfk_2` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
