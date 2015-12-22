-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2015 at 03:00 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `privileges` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `privileges`, `created_at`, `updated_at`) VALUES
(4, 'superadmin@email.com', '$2y$10$RVoaKI9y5rXvFyXxPNCL1ejr4Fckj2dURJjZRCs0LzMAM085wZrUm', 'all', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `translator` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shabak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_publish` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `basket` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `id_user`, `address`, `phone`, `created_at`, `updated_at`, `basket`) VALUES
(1, 4, 'تهران طرشت واحد ۲۰۰', '+989123236657', '0000-00-00 00:00:00', '2015-12-12 14:00:55', '[{"id":"8","pid":"100010011100204","num":12,"img_url":"http:\\/\\/static.bamilo.com\\/p\\/asus-4877-6933731-1-product.jpg","name":"test4","price":"0"},{"id":"9","pid":"100010011100204","num":8,"img_url":"http:\\/\\/static.bamilo.com\\/p\\/asus-4877-6933731-1-product.jpg","name":"test5","price":"0"},{"id":"7","pid":"100010011100204","num":4,"img_url":"http:\\/\\/static.bamilo.com\\/p\\/asus-4877-6933731-1-product.jpg","name":"test3","price":"0"}]'),
(5, 5, 'نیاوران پلاک ۳', '', '2015-12-12 18:11:38', '2015-12-12 18:45:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `cpu_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpu_f` double(8,2) DEFAULT NULL,
  `ram_gen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ram_cap` int(11) DEFAULT NULL,
  `hard_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hard_cap` int(11) DEFAULT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`id`, `id_product`, `cpu_type`, `cpu_f`, `ram_gen`, `ram_cap`, `hard_desc`, `hard_cap`, `region`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-12 12:14:23', '2015-12-12 12:14:23'),
(2, 7, 'Haswell', NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-12 12:19:44', '2015-12-12 12:19:44'),
(3, 8, 'Haswell', NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-12 12:22:02', '2015-12-12 12:22:02'),
(4, 9, 'Broadwell', NULL, NULL, NULL, NULL, NULL, NULL, '2015-12-12 12:23:50', '2015-12-12 12:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_11_092513_create_customers_table', 2),
('2015_12_11_101746_create_admins_table', 3),
('2015_12_11_145957_update_admins_table', 4),
('2015_12_11_164112_create_products_table', 5),
('2015_12_11_185846_update_product', 6),
('2015_12_11_190512_update_product', 7),
('2015_12_11_192440_update_product', 8),
('2015_12_11_193526_create_books_table', 9),
('2015_12_11_194015_create_laptops_table', 10),
('2015_12_11_194313_update_product', 11),
('2015_12_12_201725_add_basket_customer', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` text COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `img_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight` int(11) NOT NULL DEFAULT '0',
  `product_creation_date` date DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `price`, `available`, `category`, `tags`, `description`, `created_at`, `updated_at`, `img_path`, `color`, `creator`, `weight`, `product_creation_date`) VALUES
(1, 'macbook', 4700000, 1, 'laptop', NULL, NULL, '2015-12-11 15:43:48', '2015-12-11 15:43:48', '', NULL, NULL, 0, NULL),
(3, 'macbook air', 3000000, 1, 'laptop', NULL, NULL, '2015-12-11 15:47:21', '2015-12-11 15:47:21', '', NULL, NULL, 0, NULL),
(5, 'test1', 0, 1, 'laptop', NULL, NULL, '2015-12-11 16:33:49', '2015-12-11 16:33:49', '', '#000000', NULL, 0, NULL),
(6, 'test2', 20, 1, 'laptop', NULL, 'descccc <p>\r\n<pre><asdf>', '2015-12-12 12:14:23', '2015-12-12 12:14:23', '', '#000000', 'honda', 0, NULL),
(7, 'test3', 0, 1, 'laptop', NULL, '', '2015-12-12 12:19:44', '2015-12-12 12:19:44', '', '#000000', '', 0, NULL),
(8, 'test4', 0, 1, 'laptop', NULL, '', '2015-12-12 12:22:02', '2015-12-12 12:22:02', '', '#000000', '', 0, NULL),
(9, 'test5', 3500, 1, 'laptop', NULL, 'لیتیوم-یون با ظرفیت 41 واتساعت ', '2015-12-12 12:23:50', '2015-12-12 12:23:50', '', '#000000', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'شایان یوسفیان', 'shayan.yousefian1372@gmail.com', 'test123', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'superadmin', 'superadmin@email.com', '$2y$10$RVoaKI9y5rXvFyXxPNCL1ejr4Fckj2dURJjZRCs0LzMAM085wZrUm', 'SQGss7skIgMoTeYqM0Rn1d4Zz8LNcYjFoxwFjFnY4R7fulAxEviP8IuRx3hi', '2015-12-11 08:34:50', '2015-12-12 17:58:38'),
(5, 'shayan', 'shayan@gmail.com', '$2y$10$uJRADmYy3MbGKLCsDpKW7ewQqPH2Mhi0ZR3oGjiRzwiAaJhTvsQQm', 'yWs79YsluNVVO2m86Ur3H3G7HWM4meuGxARCABPXBiF2WHrFNF88SrYYrHGj', '2015-12-12 18:00:57', '2015-12-12 19:40:25');
