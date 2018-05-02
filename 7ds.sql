-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 07:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `descreption`, `image`, `created_at`, `updated_at`) VALUES
(4, 'first Article', 'this is the first Article', '18-01-09e3039f248dd555899a396179b51a05be377f9973.png', '2018-01-09 09:52:51', '2018-01-09 09:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `teams_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `title`, `descreption`, `image`, `created_at`, `updated_at`, `teams_id`) VALUES
(1, 'basem', 'new title', 'basem', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-08 13:56:33', '2018-01-10 17:01:44', 1),
(2, 'karem', 'mobile app', 'moooooooobile apppppps', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 11:38:12', '2018-01-09 11:38:12', 2),
(3, 'shaban', 'website', 'web design', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 11:38:43', '2018-01-09 11:38:43', 1),
(4, 'ahmed', 'ios', 'mobile app', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 11:39:20', '2018-01-09 11:39:20', 4),
(6, 'admin', 'new title', 'new', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 09:47:48', '2018-01-10 17:09:20', 1),
(7, 'facebook', 'new title', 'asd', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 12:08:46', '2018-01-10 12:08:46', 3),
(8, 'php', 'web developer', 'php 7 ', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 12:28:42', '2018-01-10 17:02:31', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'web', '2018-01-08 11:58:24', '2018-01-08 11:58:24'),
(8, 'mobile application', '2018-01-10 07:56:11', '2018-01-10 16:06:39'),
(9, 'web design', '2018-01-10 15:48:43', '2018-01-10 15:48:43'),
(10, 'ERP', '2018-01-11 07:20:11', '2018-01-11 07:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(4, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56'),
(5, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(6, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56'),
(7, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(8, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56'),
(9, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(10, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56'),
(11, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(12, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56'),
(13, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(14, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56'),
(15, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(16, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56'),
(17, 'ahmed', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:56:16', '2018-01-09 06:56:16'),
(18, 'facebook', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-10 18:37:28', '2018-01-10 18:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `title`, `descreption`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Web developer', 'web developer jobs11', 'Consectetur Adipisicing Elit, Sed Do Eiusmod', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 07:28:05', '2018-01-11 10:33:21'),
(2, 'front-end', 'web developer jobs', 'front end job', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 07:29:02', '2018-01-09 07:29:02'),
(3, 'mobile apps', 'mobile app jobs', 'mobile app job', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 07:32:10', '2018-01-09 07:32:10'),
(7, 'seo', 'seo jobs', 'seo job in my company', '18-01-1114bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-11 10:03:59', '2018-01-11 10:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `job_cvs`
--

CREATE TABLE `job_cvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_07_001341_create_products_table', 2),
(4, '2017_12_26_115443_add_prod_id_to_product', 3),
(5, '2018_01_07_004244_create_categories_table', 3),
(6, '2018_01_07_023734_create_blogs_table', 4),
(7, '2018_01_07_121408_create_sliders_table', 5),
(8, '2018_01_07_161030_create_contact_uses_table', 6),
(9, '2018_01_07_161612_create_contacts_table', 7),
(10, '2018_01_08_154842_create_blogs_table', 8),
(11, '2018_01_08_221735_create_testimonials_table', 9),
(12, '2018_01_08_235632_create_teams_table', 10),
(13, '2018_01_09_075121_create_services_table', 11),
(14, '2018_01_09_083517_create_clients_table', 12),
(15, '2018_01_09_091218_create_jobs_table', 13),
(16, '2018_01_09_094645_create_questions_table', 14),
(17, '2018_01_09_111658_create_articles_table', 15),
(18, '2017_12_26_115443_add_team_id_to_blog', 16),
(19, '2018_01_11_081127_create_subscribes_table', 17),
(20, '2018_01_11_130033_create_job_cvs_table', 18),
(21, '2018_01_13_165549_create_settings_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `descreption`, `image`, `created_at`, `updated_at`, `categories_id`) VALUES
(6, 'website', 'first website', '18-01-08d944dd7c2c04f1519b221b4768e236c472e18ae4.jpeg', '2018-01-08 12:00:43', '2018-01-11 07:27:17', 10),
(7, 'scend website', 'scend website', '18-01-08c7c2d6650fe8dd3125b1541cb39af56649bd56fa.jpg', '2018-01-08 12:01:31', '2018-01-08 12:01:31', 6),
(8, 'mobile app', 'first mobile app', '18-01-08d944dd7c2c04f1519b221b4768e236c472e18ae4.jpeg', '2018-01-08 12:02:23', '2018-01-08 12:02:23', 7);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'first question', 'first answer', '2018-01-09 08:07:52', '2018-01-09 08:07:52'),
(4, 'last', 'last answer', '2018-01-09 09:01:27', '2018-01-10 18:49:20'),
(5, 'first question', 'مش هجاوب', '2018-01-11 13:22:55', '2018-01-11 13:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `descreption`, `image`, `created_at`, `updated_at`) VALUES
(1, 'mobile apps', 'Globally Incubate Standards Compliant Channels Before Scalable Benefits. Quickly Disseminate Superior Del', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 06:21:32', '2018-01-09 06:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `googlepluse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instegrame` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `facebook`, `twitter`, `linkedin`, `googlepluse`, `instegrame`, `telephone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'https://twitter.com', 'https://www.linkedin.com', 'https://www.google.com', 'https://www.instagram.com', '01000000009', '7DS@7DS.com', NULL, '2018-01-13 17:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `descreption`, `img`, `created_at`, `updated_at`) VALUES
(3, 'first image', 'first slider', '18-01-10556fbe029c2853d0af1f04ea98ae7f05375b74c3.PNG', '2018-01-07 12:13:00', '2018-01-11 10:27:30'),
(4, 'first image1', 'first', '18-01-10556fbe029c2853d0af1f04ea98ae7f05375b74c3.PNG', '2018-01-10 08:04:22', '2018-01-10 08:04:22'),
(5, 'sliders', 'new slider', '18-01-10556fbe029c2853d0af1f04ea98ae7f05375b74c3.PNG', '2018-01-10 16:22:44', '2018-01-10 16:28:53'),
(7, 'sssssssss', 'karamany', '18-01-11556fbe029c2853d0af1f04ea98ae7f05375b74c3.PNG', '2018-01-11 07:33:38', '2018-01-11 07:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'user@user.com', '2018-01-11 06:52:18', '2018-01-11 06:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `job`, `image`, `created_at`, `updated_at`) VALUES
(1, 'basem', 'php developer', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-08 22:16:15', '2018-01-10 18:57:08'),
(2, 'shaban', 'web designer', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 12:27:31', '2018-01-09 12:27:31'),
(3, 'karamane', 'web developer', '18-01-0914bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 12:27:51', '2018-01-09 12:27:51'),
(4, 'Basem Mahmoud Hassen', 'php developer', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-09 12:28:10', '2018-01-10 18:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opinion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `opinion`, `image`, `created_at`, `updated_at`) VALUES
(1, 'basem', 'web developer', 'goood\"', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-08 21:21:30', '2018-01-10 17:39:52'),
(2, 'ahmed', 'mobile app', 'very goooooooood', '18-01-0814bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-08 21:24:25', '2018-01-08 21:24:25'),
(3, 'mohamed', 'mobile developer', 'good', '18-01-0814bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-08 21:43:56', '2018-01-08 21:43:56'),
(4, 'basem', 'web developer', 'goood', '18-01-088619bce5ead7029a84d82ab50569f7a87dd27b92.jpg', '2018-01-08 21:21:30', '2018-01-08 21:21:30'),
(5, 'ahmed', 'mobile app', 'very goooooooood', '18-01-0814bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-08 21:24:25', '2018-01-08 21:24:25'),
(6, 'mohamed', 'mobile developer', 'good', '18-01-1014bf79bda1a0d12332769f72bb5544ff71d3c246.png', '2018-01-08 21:43:56', '2018-01-10 17:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Is_admin` int(11) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `Is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'ahmed', 'a@a.com', 1, '$2y$10$0xc4zcZTDVghZyWwwnKdjuiWBtWP39JlOP5xrJ/M4A0W.swHcaoj2', '$2y$10$yuSTDYwuysS/7NHp7HRPTu/emOcefFK70Dw4A11abpP1rjow6kdS6', '2018-01-06 17:32:22', '2018-01-10 14:11:53'),
(16, 'Basem', 'admin12311@admin.com', 1, '$2y$10$n2KkkY7p2nu/2uUbrIH5vubkDQcCgxdVQKUH1FJ/slv2F/q688FfS', '28KsA0TU74QIOPhEGzYq9YUrAxewxubfDAJr9UXVQArVIe8Jl68f6tUqHIsu', '2018-01-10 14:05:40', '2018-01-11 07:12:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_cvs`
--
ALTER TABLE `job_cvs`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_cvs`
--
ALTER TABLE `job_cvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
