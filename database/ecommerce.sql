-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 12:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `generic_category_id` bigint(20) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `generic_category_id`) VALUES
(3, 'Mobile Phones', '2019-05-11 15:56:15', '2019-05-11 15:56:15', 1),
(4, 'Laptops', '2019-05-11 16:06:43', '2019-05-11 16:06:43', 1),
(5, 'Desktops', '2019-05-11 16:07:15', '2019-05-11 16:07:15', 1),
(6, 'Cameras', '2019-05-11 16:12:10', '2019-05-11 16:12:10', 1),
(7, 'TV & Home Audio', '2019-05-11 16:13:01', '2019-05-11 16:13:01', 1),
(8, 'MP3 Players', '2019-05-11 16:13:23', '2019-05-11 16:13:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `generic_categories`
--

CREATE TABLE `generic_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generic_categories`
--

INSERT INTO `generic_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '2019-05-11 15:50:20', '2019-05-11 15:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '107646_apple_512x512.png', 3, '2019-05-11 15:52:19', '2020-09-11 09:56:13'),
(2, 'Canon', 'Canon Service Centre (1).gif.jpg', 6, '2019-05-11 16:17:11', '2020-09-11 09:56:05'),
(3, 'Hewlett-Packard', 'numix-circle-for-windows-hp-logo-icon-png-icon.jpg', 4, '2019-05-11 16:18:54', '2020-09-11 09:55:56'),
(4, 'HTC', 'htc-226427.png', 3, '2019-05-11 16:19:04', '2020-09-11 09:55:39'),
(6, 'Sony', 'SONY-LOGO.jpg', 7, '2019-05-11 16:19:21', '2020-09-11 09:55:26'),
(7, 'Samsung', 'samsung-226432.webp', 3, '2019-05-11 16:19:33', '2020-09-11 10:11:05'),
(8, 'Oppo', 'stwhonqithrbfkmucxz0.jpg', 3, '2019-05-11 16:19:40', '2020-09-11 10:10:53'),
(9, 'Asus', '803edf9669cc4a8a3d180d582def8217.png', 4, '2020-09-11 09:47:57', '2020-09-11 09:54:25'),
(10, 'Acer', 'tải xuống.png', 4, '2020-09-11 09:57:31', '2020-09-11 10:11:42');

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
(2, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `ship_name` varchar(255) DEFAULT NULL,
  `ship_address` varchar(255) DEFAULT NULL,
  `ship_address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `shipper` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `is_shipped?` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `cart_desc` varchar(255) DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL,
  `long_desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `sell_times` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `old_price` varchar(255) DEFAULT NULL,
  `manufacturer_id` bigint(20) DEFAULT NULL,
  `mini_image` varchar(255) DEFAULT NULL,
  `big_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `weight`, `cart_desc`, `short_desc`, `long_desc`, `image`, `category_id`, `amount`, `sell_times`, `created_at`, `updated_at`, `old_price`, `manufacturer_id`, `mini_image`, `big_image`) VALUES
(4, 'Điện thoại iPhone XR 64gb', 23000000, NULL, '', '', '', 'iphonexr.jpeg', 3, NULL, 3, '2019-05-11 16:39:59', '2020-09-11 10:25:15', '', 1, 'iphonexrm.jpeg', 'iphonexrb.jpeg'),
(5, 'Điện thoại iPhone 8 Plus 64GB', 14850000, NULL, '', '', '', 'iphone8plus.jpeg', 3, NULL, 1, '2019-05-11 16:41:24', '2019-05-11 17:44:30', '', 1, 'iphone8plusm.jpeg', 'iphone8plusb.jpeg'),
(6, 'Điện Thoại iPhone 7 32GB', 7520000, NULL, '', '', '', 'iphone7.jpeg', 3, NULL, 0, '2019-05-11 16:44:38', '2019-05-11 17:44:43', '', 1, 'iphone7m.jpeg', 'iphone7b.jpeg'),
(7, 'Điện Thoại iPhone X 64GB', 16890000, NULL, '', '', '', 'iphonex.jpeg', 3, NULL, 0, '2019-05-11 16:47:20', '2019-05-11 17:44:55', '', 1, 'iphonexm.jpeg', 'iphonexb.jpeg'),
(8, 'Điện Thoại Oppo 9009 32gb', 7850000, NULL, '', '', '', 'oppo9009.jpeg', 3, NULL, 6, '2019-05-11 16:48:13', '2020-09-14 06:55:06', '', 8, 'oppo9009m.jpeg', 'oppo9009b.jpeg'),
(10, 'Điện Thoại Oppo A3s 32GB', 3890000, NULL, '', '', '', 'oppoa3s.jpeg', 3, NULL, 5, '2019-05-11 16:51:22', '2019-05-11 17:45:33', '', 8, 'oppoa3sm.jpeg', 'oppoa3sb.jpeg'),
(11, 'Điện Thoại Oppo A7 Chính Hãng', 4590000, NULL, '', '', '', 'oppoa7.jpeg', 3, NULL, 0, '2019-05-11 16:53:11', '2019-05-11 17:45:48', '', 8, 'oppoa7m.jpeg', 'oppoa7b.jpeg'),
(12, 'Điện Thoại Oppo F5 Chính Hãng', 2980000, NULL, '', '', '', 'oppof5.jpeg', 3, NULL, 0, '2019-05-11 16:54:02', '2019-05-11 17:46:06', '', 8, 'oppof5m.jpeg', 'oppof5b.jpeg'),
(13, 'Điện Thoại Oppo F9 Chính Hãng', 6570000, NULL, '', '', '', 'oppof9.jpeg', 3, NULL, 0, '2019-05-11 16:54:39', '2019-05-11 17:46:21', '', 8, 'oppof9m.jpeg', 'oppof9b.jpeg'),
(14, 'Điện Thoại Oppo F11 64GB Chính Hãng ', 8760000, NULL, '', '', '', 'oppof11.jpeg', 3, NULL, 0, '2019-05-11 16:55:28', '2019-05-11 17:46:33', '', 8, 'oppof11m.jpeg', 'oppof11b.jpeg'),
(15, 'Điện Thoại Samsung Galaxy A6 Chính Hãng', 3290000, NULL, '', '', '', 'ssa6.jpeg', 3, NULL, 0, '2019-05-11 16:57:07', '2019-05-11 17:46:43', '', 7, 'ssa6m.jpeg', 'ssa6b.jpeg'),
(16, 'Điện Thoại Samsung Galaxy A8 Star Chính Hãng', 4830000, NULL, '', '', '', 'ssa8star.jpeg', 3, NULL, 0, '2019-05-11 16:57:39', '2019-05-11 17:47:00', '', 7, 'ssa8starm.jpeg', 'ssa8starb.jpeg'),
(17, 'Điện Thoại Samsung Galaxy A9 Chính Hãng', 6320000, NULL, '', '', '', 'ssa9.jpeg', 3, NULL, 0, '2019-05-11 16:58:16', '2019-05-11 17:47:12', '', 7, 'ssa9m.jpeg', 'ssa9b.jpeg'),
(18, 'Điện Thoại Samsung Galaxy A20 64Gb Chính Hãng', 9890000, NULL, '', '', '', 'ssa20.jpeg', 3, NULL, 0, '2019-05-11 16:58:55', '2019-05-11 17:47:22', '', 7, 'ssa20m.jpeg', 'ssa20b.jpeg'),
(19, 'Điện Thoại HTC One X10', 7820000, NULL, '', '', '', 'htcx10.jpeg', 3, NULL, 0, '2019-05-11 17:00:40', '2019-05-11 17:47:32', '', 4, 'htcx10m.jpeg', 'htcx10b.jpeg'),
(20, 'Điện Thoại HTC One M9 Plus 32GB Chính Hãng', 6970000, NULL, '', '', '', 'htcm9.jpeg', 3, NULL, 10, '2019-05-11 17:05:11', '2019-05-11 17:47:42', '', 4, 'htcm9m.jpeg', 'htcm9b.jpeg'),
(21, 'Điện Thoại HTC One M8 32GB Chính Hãng', 3970000, NULL, '', '', '', 'htcm8.jpeg', 3, NULL, 7, '2019-05-11 17:07:11', '2019-05-11 17:47:52', '', 4, 'htcm8m.jpeg', 'htcm8b.jpeg'),
(27, 'Laptop Acer Aspire 5 (A514 51-525E NX.H6VSV.002) (i5 8265U/4GB RAM/1TB HDD/14', 11599000, NULL, NULL, NULL, NULL, 'acer1.jpg', 4, NULL, 0, '2020-09-11 09:19:56', '2020-09-11 09:57:48', NULL, 10, NULL, NULL),
(28, 'Laptop Acer Aspire 3 A315-23G-R33Y (NX.HVSSV.001) ( Ryzen 5 3500U/8GBRAM/512GB', 14489000, NULL, NULL, NULL, NULL, 'acer2.jpg', 4, NULL, 0, '2020-09-11 09:20:27', '2020-09-11 09:57:59', NULL, 10, NULL, NULL),
(29, 'Laptop Acer Swift SF314-42-R5Z6 (NX.HSESV.001) (R5 4500U/8GBRAM/512GB SSD/14.0 inch FHD', 17689000, NULL, NULL, NULL, NULL, 'acer3.jpeg', 4, NULL, 0, '2020-09-11 09:23:04', '2020-09-11 09:23:04', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schema_migrations`
--

CREATE TABLE `schema_migrations` (
  `version` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schema_migrations`
--

INSERT INTO `schema_migrations` (`version`) VALUES
('20190511133410'),
('20190511133416'),
('20190511133423'),
('20190511133556'),
('20190511134208'),
('20190511144240'),
('20190511145549'),
('20190511145600'),
('20190511151810'),
('20190511151857'),
('20190511155924'),
('20190511170125'),
('20190511170240');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', '2019-05-11 16:01:54', '2019-05-11 16:01:54'),
(2, 'Iphone', '2019-05-11 16:01:59', '2019-05-11 16:01:59'),
(3, 'HTC', '2019-05-11 16:20:40', '2019-05-11 16:20:40'),
(4, 'Canon', '2019-05-11 16:20:59', '2019-05-11 16:20:59'),
(5, 'Palm', '2019-05-11 16:21:08', '2019-05-11 16:21:08'),
(6, 'Sony', '2019-05-11 16:21:11', '2019-05-11 16:21:11'),
(7, 'Hewlett-Packard', '2019-05-11 16:21:26', '2019-05-11 16:21:26'),
(8, 'Oppo', '2019-05-11 16:21:52', '2019-05-11 16:21:52');

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
  `role` int(11) NOT NULL DEFAULT 2,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'truong', 'truong@gmail.com', NULL, '$2y$10$PSXi1AT5kYlZgjUVF6vequPbG/gc4DXFGlj8zmW2DNBTVD1H5/n7y', 2, 'uRyw4WVzH1Q3TceAs4v6RGrYARXXint1BdiTxemzdcMpU3kHcsL9bpMySleS', '2020-09-09 06:21:08', '2020-09-09 06:21:08'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$lcExzYlDrLON6z4z/0cuRelE.fP30B9vQN41pSdi9DLNcaLAXe/gq', 1, 'dZ52Q5ZvP6ljymfcg0exU5cHQmja3fpkyxQetiOvuCOrXx5qqmue61Znij3F', '2020-09-10 06:48:25', '2020-09-10 06:48:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_categories_on_generic_category_id` (`generic_category_id`);

--
-- Indexes for table `generic_categories`
--
ALTER TABLE `generic_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_orders_on_user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_order_details_on_order_id` (`order_id`),
  ADD KEY `index_order_details_on_product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_products_on_category_id` (`category_id`),
  ADD KEY `index_products_on_manufacturer_id` (`manufacturer_id`);

--
-- Indexes for table `schema_migrations`
--
ALTER TABLE `schema_migrations`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `generic_categories`
--
ALTER TABLE `generic_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_rails_d05b8666c6` FOREIGN KEY (`generic_category_id`) REFERENCES `generic_categories` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_rails_4f2ac9473b` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_rails_e5976611fd` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_rails_33082c31de` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`),
  ADD CONSTRAINT `fk_rails_fb915499a4` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
