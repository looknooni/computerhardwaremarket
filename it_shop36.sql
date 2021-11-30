-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_shop36`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ซีพียู', '2021-11-27 14:05:30', '2021-11-27 14:05:30'),
(2, 'แรม', '2021-11-27 14:05:46', '2021-11-27 14:05:46'),
(3, 'ฮาร์ดดิส', '2021-11-27 14:05:53', '2021-11-27 14:10:56'),
(4, 'เอสเอสดี', '2021-11-27 14:06:02', '2021-11-27 14:06:02'),
(5, 'จอคอม', '2021-11-27 14:06:10', '2021-11-27 14:06:10'),
(6, 'พาวเวอร์ซัพพลาย', '2021-11-27 14:06:20', '2021-11-27 14:06:20'),
(7, 'แป้นพิมพ์', '2021-11-27 14:06:27', '2021-11-27 14:06:27'),
(8, 'เมาส์', '2021-11-27 14:06:35', '2021-11-27 14:06:35'),
(9, 'หูฟัง', '2021-11-27 14:06:40', '2021-11-27 14:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2014_10_12_000000_create_users_table', 2),
(5, '2021_11_25_094918_add_admin_feild', 3),
(6, '2021_11_27_204911_create_products_table', 4),
(7, '2021_11_27_205345_create_categories_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `category_id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'intel55', '999955', '1VHFIOB00V.jpg', '2021-11-27 14:16:21', '2021-11-27 15:15:13'),
(2, 3, 'Acer12', '1333', 'DtymPWY0HL.jpg', '2021-11-27 14:19:00', '2021-11-27 15:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `promotes`
--

CREATE TABLE `promotes` (
  `promote_id` bigint(10) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotes2`
--

CREATE TABLE `promotes2` (
  `promote2_id` bigint(20) NOT NULL,
  `image` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `email_verified_at`, `address`, `phone`, `password`, `Admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chhcompany', 'กูคือ', 'ประธานบริษัท', 'phamnuk@gmail.com', NULL, NULL, NULL, '$2y$10$7wD7SevSsGr1oAe/yUyav.JNmbovqujKQRWAUgBup578Y6BobXk06', 1, NULL, '2021-11-25 03:43:00', '2021-11-25 03:43:00'),
(2, 'agustaxnn', 'นิภาพร', 'พำนัก', 'bdobabyqueen@gmail.com', NULL, NULL, NULL, '$2y$10$VWzLkS3.rzPhkQEs0y8Ju.hT/Y/NsuUmJhhacIj.CbYd.Bhsfotta', 1, NULL, '2021-11-25 03:59:28', '2021-11-25 03:59:28'),
(3, 'lynnel', 'Nipaporn', 'Phamnuk', 'test@gmail.com', NULL, NULL, NULL, '$2y$10$KeASg4ykVYbNsxgUjej9SeYcpw83U/cz6y0pozb20ag/bLenR4gte', 0, NULL, '2021-11-25 05:01:44', '2021-11-25 05:01:44'),
(4, 'testtest', 'l', 'n', 'testtest@gmail.com', NULL, NULL, NULL, '$2y$10$hzNTVFC50fX7nNFhObxzmetQqhi85m2a6e6yZt5ag/YxKYJIBcCCm', 0, NULL, '2021-11-25 05:31:10', '2021-11-25 05:31:10'),
(5, 'agustaxnn', 'l', 'l', 'phamnukoo@gmail.com', NULL, NULL, NULL, '$2y$10$obrlMpiJI/wRzex7yQ8KpenKhT7XpcUwSypf3SRL5E0AxZMLYr5Gm', 0, NULL, '2021-11-25 05:50:49', '2021-11-25 05:50:49'),
(6, '1', '1', '1', '21212@g.com', NULL, NULL, NULL, '$2y$10$H9JUGRbEierMlV5W0PiTveCFglPPYwcuDt4FuosE82UWCxldpyFBW', 0, NULL, '2021-11-25 06:19:31', '2021-11-25 06:19:31'),
(7, '1', '1', '1', '1@ga.com', NULL, NULL, NULL, '$2y$10$W/q1s4GujxqsKtTzUUGcbeiBVGrU27p7hmVnKMjsic3Gj4/eDo6ha', 0, NULL, '2021-11-25 06:21:20', '2021-11-25 06:21:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `promotes`
--
ALTER TABLE `promotes`
  ADD PRIMARY KEY (`promote_id`);

--
-- Indexes for table `promotes2`
--
ALTER TABLE `promotes2`
  ADD PRIMARY KEY (`promote2_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `promotes`
--
ALTER TABLE `promotes`
  MODIFY `promote_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotes2`
--
ALTER TABLE `promotes2`
  MODIFY `promote2_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
