-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 03:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_13_180355_create_products_table', 2),
(6, '2021_10_15_081928_create_clients_table', 3),
(7, '2021_10_18_103546_create_featured_product_table', 4),
(8, '2021_10_19_132625_products_feature', 5),
(9, '2021_10_19_134646_product_feature', 6);

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
-- Table structure for table `productfeature`
--

CREATE TABLE `productfeature` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productsName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discountPrice` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productfeature`
--

INSERT INTO `productfeature` (`id`, `productsName`, `imageUrl`, `name`, `code`, `price`, `discountPrice`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Feature Products', '', 'safdsfds', 'cd-334', 222, 0, '', NULL, NULL),
(2, '', '../image/img1.png', 'products', 'cod-3899', 444, 0, '', NULL, NULL),
(3, '', '../image/img6.png', 'Comfort Handy Craft', '', 123, 111, '', NULL, NULL),
(5, '', '../image/img6.png', 'Comfort', 'cod-99', 88, 55, '', NULL, NULL),
(6, 'Leatest Products', '../image/img2.png', 'Comfort Craft', 'code-1234', 88, 65, '', NULL, NULL),
(7, 'Leatest Products', '../image/img2.png', 'Sofa', 'code-98', 54, 35, '', NULL, NULL),
(8, 'Leatest Products', '../image/img6.png', 'AADsfds', 'code-3', 45, 23, '', NULL, NULL),
(9, 'Leatest Products', '../image/img2.png', 'Dfhfghdgd', 'code-4', 67, 56, '', NULL, NULL),
(10, 'Leatest Products', '../image/img2.png', 'Fdsfsf', 'code-8', 345, 232, '', NULL, NULL),
(11, 'Feature Products', '../image/img3.png', 'Cantilevel chair', 'Code - Y4657', 42, 0, '', NULL, NULL),
(12, 'Feature Products', '../image/img3.png', 'Chair', 'code-4343', 21, 12, '', NULL, NULL),
(13, 'Feature Products', '../image/img3.png', 'Chair', 'code-234', 222, 211, '', NULL, NULL),
(14, 'Trending Products', '../image/image32.png', 'Cantilever chair', 'cod-32', 42, 26, '', NULL, NULL),
(15, 'Trending Products', '../image/image32.png', 'Chair', '3434', 42, 25, '', NULL, NULL),
(16, 'Trending Products', '../image/image32.png', 'Chair', '8787', 423, 213, '', NULL, NULL),
(17, 'Trending Products', '../image/image32.png', 'Chair', 'aw-22', 22, 11, '', NULL, NULL),
(18, 'Trending Products', '../image/image32.png', 'ChAIR', 'code-32', 33, 32, '', NULL, NULL),
(19, 'Top Categories', '../image/image32.png', 'Chair', 'cd-23', 123, 111, '', NULL, NULL),
(20, 'Top Categories', '../image/img4.png', 'Djhks', 'cd-44', 99, 88, '', NULL, NULL),
(21, 'Top Categories', '../image.image32.png', 'Adfdfdf', 'code-111', 23, 22, '', NULL, NULL),
(22, 'Top Categories', '../image/img4.png', 'Tiufdsv', 'cod-1', 67, 56, '', NULL, NULL),
(23, 'Feature Products', '../image/img5.png', 'Swatch', 'cod-341', 123, 111, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', NULL, NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Edison Hoxha', 'edii@edi.com', NULL, '$2y$10$p0CJkGgYxZU/xcmlKVf/K.v/SrFg.gK67QuZWY3sWn4vvsJQ1cm3i', NULL, '2021-10-25 06:22:23', '2021-10-25 06:22:23'),
(2, 'userAdmin', 'admin1@admin.com', NULL, '$2y$10$4.YV0kkmgOsUoeE5hK132e/jqdgOMdkbyVChY8j3CZnS5wRT3ksKO', NULL, '2021-10-25 06:30:15', '2021-10-25 06:30:15'),
(5, 'edison', 'name1@name.com', NULL, '$2y$10$82Vhk8HymJNc9g0D5qpWveHlqrlqp8T6gfq7Bm/V/imiOHTd0WEAa', NULL, '2021-10-25 06:31:19', '2021-10-25 06:31:19'),
(6, 'sdsfdsdfsd', 'hoxhaedison125@gmail.com', NULL, '$2y$10$Qdl/2pSpCBS/z2Q3lquCPuuUlbUDSZPwKmGGYH5UrACJYp33gIDT.', NULL, '2021-10-25 06:33:16', '2021-10-25 06:33:16'),
(7, 'Edison', 'edisdddddddd@edi.com', NULL, '$2y$10$39VJAajX0f1/Vd7sEnU43.GqZIl3XcT2yaSOFoE/tgqgrXQ9uK5ha', NULL, '2021-10-29 07:07:27', '2021-10-29 07:07:27'),
(8, 'Edison', 'edisddddd@edi.com', NULL, '$2y$10$vAs1RZQfDQDFBkb0cB9ZReTQv72oJOErIs/z1Lr28oIZ7KpWONqqG', NULL, '2021-10-29 07:08:04', '2021-10-29 07:08:04'),
(9, 'Edison', 'edi1@edi.com', NULL, '$2y$10$EZQNv5kHcb3eIfoCCXcDluul11lLzj3VHXAaFUSnZ.9mQ1VzKcAPm', NULL, '2021-10-29 07:08:28', '2021-10-29 07:08:28'),
(10, 'Edison', 'admin2@admin.com', NULL, '$2y$10$S4i8ogSzg.7aufK4RBFbpuskGOUNtssZ7plVZlA1nIyMLVP7bs9Wu', NULL, '2021-10-29 07:26:52', '2021-10-29 07:26:52'),
(11, 'Edison', 'admin21@admin.com', NULL, '$2y$10$IE4rVccHGAYpzjzH0LJZ2uI1KsdEtY1hR3QhFSn25WlQGM7lZlPPS', NULL, '2021-10-29 07:27:19', '2021-10-29 07:27:19');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `productfeature`
--
ALTER TABLE `productfeature`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productfeature`
--
ALTER TABLE `productfeature`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
