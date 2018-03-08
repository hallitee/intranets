-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2018 at 03:06 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intranet`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_gm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compgm_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `comp_gm`, `compgm_email`, `location_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'NPRNL', NULL, NULL, NULL, 1, NULL, '2018-02-20 08:22:01', '2018-02-20 08:22:01', NULL),
(2, 'ESRNL', NULL, NULL, NULL, 1, NULL, '2018-02-20 08:25:16', '2018-02-20 08:25:16', NULL),
(3, 'PFNL', NULL, NULL, NULL, 1, NULL, '2018-02-20 08:25:30', '2018-02-20 08:25:30', NULL),
(4, 'GSNL', NULL, NULL, NULL, 1, NULL, '2018-02-20 08:26:17', '2018-02-20 08:26:17', NULL),
(7, 'GSNL', NULL, NULL, NULL, 3, NULL, '2018-02-20 08:27:07', '2018-02-20 08:27:07', NULL),
(8, 'ESRNL', NULL, NULL, NULL, 3, NULL, '2018-02-20 08:34:53', '2018-02-20 08:34:53', NULL),
(9, 'NPRNL', NULL, NULL, NULL, 3, NULL, '2018-02-20 08:35:07', '2018-02-20 08:35:07', NULL),
(10, 'PFNL', NULL, NULL, NULL, 3, NULL, '2018-02-20 08:35:29', '2018-02-20 08:35:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_hod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depthod_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `dept_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `descr`, `img1`, `img2`, `group`, `dept_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Waybill Manager', 'http://192.168.200.241', 'Waybill for transferred, loaned and repaired item between the group', 'KVmf3QWY6k8dF8uRRvqOuPXOGvm398SmkiZsQesI.jpg', NULL, NULL, NULL, '2018-03-01 08:52:41', '2018-03-01 08:52:41', NULL),
(4, 'CMANAGER', 'http://192.168.200.241:3000', 'Book conference room before usage.', 'index.png', NULL, NULL, NULL, '2018-03-01 09:16:13', '2018-03-01 09:16:13', NULL),
(6, 'Maintenace 5000', 'http://192.168.200.247:8000', NULL, 'ptPu6NaWbWHzDWpmGg6KEVX1UfbdjIzt0hFpnmO5.jpeg', NULL, NULL, NULL, '2018-03-01 09:22:01', '2018-03-01 09:22:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IKOYI', NULL, '2018-02-20 08:20:32', '2018-02-20 08:20:32', NULL),
(2, 'IKEJA', NULL, '2018-02-20 08:22:35', '2018-02-20 08:22:47', NULL),
(3, 'AGBARA', NULL, '2018-02-20 08:23:19', '2018-02-20 08:23:19', NULL);

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
(3, '2018_02_19_142502_create_locals_table', 1),
(4, '2018_02_19_142510_create_locations_table', 2),
(5, '2018_02_19_143131_create_companies_table', 2),
(6, '2018_02_19_144340_create_dept_table', 3),
(8, '2018_02_19_151410_dep', 4),
(9, '2018_02_19_151426_create_depts_table', 4),
(11, '2018_02_20_074723_create_depts_table', 5),
(12, '2018_02_20_074914_create_users_table', 6),
(13, '2018_02_20_075114_create_visitlogs_table', 7),
(14, '2018_02_20_075444_create_links_table', 8),
(15, '2018_02_20_082139_add_column', 9),
(16, '2018_02_20_082145_add_column_to_users', 9),
(17, '2018_02_20_101514_add_column_admin_to_users', 10),
(18, '2018_03_01_125923_add_links_to_visitlogs', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` int(11) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `dept_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group`, `admin`, `company_id`, `dept_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Taofik Alli-Balogun', 'taofik.alli-balogun@natural-prime.com', '$2y$10$orW82ZSMeVjLG7/daavFfusfjEC31TmTdFiO5gPDbv2.Me2O4NNV.', NULL, 1, 1, NULL, 'igzH4M11QCz2iSZUayYXQFnOX6Tkxh3LgWpUJLTlb2Nm7h6PQ6WFZoaJoIb3', '2018-02-20 09:08:49', '2018-02-20 09:08:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitlogs`
--

CREATE TABLE `visitlogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dest_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `link_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitlogs`
--

INSERT INTO `visitlogs` (`id`, `user_ip`, `dest_url`, `user_id`, `created_at`, `updated_at`, `deleted_at`, `link_id`) VALUES
(7, '192.168.200.77', 'http://192.168.200.247', 1, '2018-03-01 14:16:10', '2018-03-01 14:16:10', NULL, 3),
(15, '192.168.200.77', 'http://192.168.200.247:8000', 0, '2018-03-01 14:24:04', '2018-03-01 14:24:04', NULL, 6),
(16, '192.168.200.77', 'http://192.168.200.247:3000', 0, '2018-03-01 14:24:09', '2018-03-01 14:24:09', NULL, 4),
(22, '192.168.200.77', 'http://192.168.200.247:8000', 0, '2018-03-02 13:49:52', '2018-03-02 13:49:52', NULL, 6),
(23, '192.168.200.77', 'http://192.168.200.247:3000', 0, '2018-03-02 13:49:56', '2018-03-02 13:49:56', NULL, 4),
(24, '192.168.200.77', 'http://192.168.200.247:3000', 0, '2018-03-02 13:50:00', '2018-03-02 13:50:00', NULL, 4),
(25, '192.168.200.77', 'http://192.168.200.241:3000', 0, '2018-03-02 13:51:28', '2018-03-02 13:51:28', NULL, 4),
(26, '192.168.200.77', 'http://192.168.200.241', 0, '2018-03-02 14:00:04', '2018-03-02 14:00:04', NULL, 3),
(28, '192.168.200.77', 'http://192.168.200.241:3000', 0, '2018-03-02 14:00:10', '2018-03-02 14:00:10', NULL, 4),
(35, '192.168.200.77', 'http://192.168.200.241:3000', 0, '2018-03-05 08:38:10', '2018-03-05 08:38:10', NULL, 4),
(36, '192.168.200.77', 'http://192.168.200.241:3000', 0, '2018-03-05 13:07:17', '2018-03-05 13:07:17', NULL, 4),
(39, '192.168.200.77', 'http://192.168.200.241', 0, '2018-03-05 13:51:52', '2018-03-05 13:51:52', NULL, 3),
(40, '192.168.200.77', 'http://192.168.200.241:3000', 0, '2018-03-05 13:51:58', '2018-03-05 13:51:58', NULL, 4),
(47, '192.168.200.241', 'http://192.168.200.241', 0, '2018-03-06 09:05:38', '2018-03-06 09:05:38', NULL, 3),
(48, '192.168.200.241', 'http://192.168.200.241:3000', 0, '2018-03-06 09:05:50', '2018-03-06 09:05:50', NULL, 4),
(51, '192.168.200.241', 'http://192.168.200.241', 0, '2018-03-06 09:09:36', '2018-03-06 09:09:36', NULL, 3),
(53, '192.168.200.77', 'http://192.168.200.241:3000', 1, '2018-03-07 12:21:46', '2018-03-07 12:21:46', NULL, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_location_id_index` (`location_id`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `depts_name_unique` (`name`),
  ADD KEY `depts_company_id_index` (`company_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `links_name_unique` (`name`),
  ADD UNIQUE KEY `links_url_unique` (`url`),
  ADD KEY `links_dept_id_index` (`dept_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `locations_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_company_id_index` (`company_id`),
  ADD KEY `users_dept_id_index` (`dept_id`);

--
-- Indexes for table `visitlogs`
--
ALTER TABLE `visitlogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visitlogs_user_id_index` (`user_id`),
  ADD KEY `visitlogs_link_id_index` (`link_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitlogs`
--
ALTER TABLE `visitlogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`);

--
-- Constraints for table `depts`
--
ALTER TABLE `depts`
  ADD CONSTRAINT `depts_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `visitlogs`
--
ALTER TABLE `visitlogs`
  ADD CONSTRAINT `visitlogs_link_id_foreign` FOREIGN KEY (`link_id`) REFERENCES `links` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
