-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 10:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '2021-01-15 21:27:18', '2021-01-16 16:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_home` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` enum('Reg','Not-Reg') NOT NULL,
  `qty` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_attr_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_parent_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `desc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_des` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_parent_id`, `image`, `is_home`, `status`, `created_at`, `updated_at`, `desc`, `meta_des`, `meta_key`, `meta_title`) VALUES
(1, 'gold', 'golds', 0, '1669800975.jpg', NULL, 1, '2022-11-30 04:06:15', '2022-11-30 04:22:46', 'GOLD', 'GOLD', 'GOLD', 'GOLD'),
(2, 'EARRINGS', 'EARRINGS', 0, '1669801001.jpg', NULL, 1, '2022-11-30 04:06:41', '2022-11-30 04:06:41', 'EARRINGS', 'EARRINGS', 'EARRINGS', 'EARRINGS'),
(3, 'BANGLES', 'BANGLES', 1, '1669801044.jpg', NULL, 1, '2022-11-30 04:07:24', '2022-11-30 04:07:24', 'BANGLES', 'BANGLES', 'BANGLES', 'BANGLES'),
(4, 'JHUMKAS', 'JHUMKAS', 1, '1669801069.jpg', NULL, 1, '2022-11-30 04:07:49', '2022-11-30 04:07:49', 'JHUMKAS', 'JHUMKAS', 'JHUMKAS', 'JHUMKAS'),
(5, 'STUDS', 'STUDS', 2, '1669801145.jpg', NULL, 1, '2022-11-30 04:09:05', '2022-11-30 04:09:05', 'STUDS', 'STUDS', 'STUDS', 'STUDS'),
(6, 'test', 'test', 4, '1669801224.jpg', NULL, 1, '2022-11-30 04:10:24', '2022-11-30 04:10:24', 'bb', 'b', 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Red', 1, '2022-11-25 00:00:11', '2022-11-25 00:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Value','Per') COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_order_amt` int(11) NOT NULL,
  `is_one_time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gstin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `is_verify` int(11) NOT NULL,
  `is_forgot_password` int(11) NOT NULL,
  `rand_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_txt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2022_11_30_052813_create_nvabars_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nvabars`
--

CREATE TABLE `nvabars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_des` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nvabars`
--

INSERT INTO `nvabars` (`id`, `name`, `slug`, `image`, `desc`, `meta_key`, `meta_title`, `meta_des`, `status`, `created_at`, `updated_at`) VALUES
(1, 'blog', 'blogs', '1669801817.jpg', 'tt', 'tt', 'tt', 'tt', 1, '2022-11-30 00:19:54', '2022-11-30 04:20:17'),
(2, 'Home', 'bloga', '1669790056.jpg', 'a', 'a', 'a', 'a', 1, '2022-11-30 01:04:16', '2022-11-30 01:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(25) NOT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `coupon_value` int(11) DEFAULT NULL,
  `order_status` int(11) NOT NULL,
  `payment_type` enum('COD','Gateway') NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `txn_id` varchar(100) DEFAULT NULL,
  `total_amt` int(11) NOT NULL,
  `track_details` text DEFAULT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `products_attr_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_status`
--

CREATE TABLE `orders_status` (
  `id` int(11) NOT NULL,
  `orders_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_specification` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uses` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `is_promo` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `is_discounted` int(11) DEFAULT NULL,
  `is_tranding` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `image`, `slug`, `brand`, `model`, `short_desc`, `desc`, `keywords`, `technical_specification`, `uses`, `warranty`, `lead_time`, `tax_id`, `is_promo`, `is_featured`, `is_discounted`, `is_tranding`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Test', '1669354318.jpg', 'blogddd', 'Tests', 'Test', 'f', 'f', 'f', 'f', 'f', 'f', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-25 00:01:58', '2022-11-30 04:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `products_attr`
--

CREATE TABLE `products_attr` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `attr_image` varchar(255) DEFAULT NULL,
  `mrp` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `review` text NOT NULL,
  `status` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 'XL', 1, '2022-11-25 00:00:05', '2022-11-25 00:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `taxs`
--

CREATE TABLE `taxs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nvabars`
--
ALTER TABLE `nvabars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_status`
--
ALTER TABLE `orders_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attr`
--
ALTER TABLE `products_attr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxs`
--
ALTER TABLE `taxs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nvabars`
--
ALTER TABLE `nvabars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_status`
--
ALTER TABLE `orders_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products_attr`
--
ALTER TABLE `products_attr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taxs`
--
ALTER TABLE `taxs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
