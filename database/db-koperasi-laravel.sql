-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 03:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-koperasi-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_models`
--

CREATE TABLE `member_models` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_category_models`
--

CREATE TABLE `product_category_models` (
  `id` int(11) NOT NULL,
  `category` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `product_models`
--

CREATE TABLE `product_models` (
  `id` int(11) NOT NULL,
  `id_category` varchar(255) DEFAULT NULL,
  `product` text DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `product_models`
--

INSERT INTO `product_models` (`id`, `id_category`, `product`, `description`, `image`, `price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'nuvo', NULL, NULL, 1000, 100, NULL, NULL, NULL),
(2, '1', 'lifebuoy', NULL, NULL, 10000, 100, NULL, NULL, NULL),
(3, '2', 'sabun', 'sabun', 'f75c896b-6f70-4abe-bd21-ab5b228b8894ppp.png', 10000, 10, 'ready', NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1', 'sabun', 'oke', '812ecb93-087f-460e-a204-1700a6d7ce94ppp.png', 42000, 10, 'oke', NULL, NULL),
(7, '4', 'kabel', 'kabel', 'e4f02032-3db8-41c0-9189-4ff49e96f5b1canva business.png', 100000, 1, 'Ready', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'teknologi', '2023-01-19 15:07:04', '2023-01-19 15:07:04'),
(2, 'brainware', '2023-01-19 15:07:13', '2023-01-19 15:07:13'),
(3, 'software', '2023-01-19 15:07:13', '2023-01-19 15:07:13'),
(4, 'Machine Learning', '2023-01-19 21:38:49', '2023-01-19 21:38:49'),
(6, 'machine cuy', '2023-01-20 12:13:40', '2023-01-20 12:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `id_category`, `tittle`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'elon musk teknologi', 'pada tanggal xxxx', '2023-01-19 15:07:35', '2023-01-19 15:07:35'),
(2, 2, 'indonesia', 'hardware', '2023-01-19 15:07:54', '2023-01-19 15:07:54'),
(3, 3, 'softwareeee', 'softwareee', '2023-01-19 15:08:21', '2023-01-19 15:08:21'),
(4, 2, 'testing bosss', 'iyah bosssss', '2023-01-19 21:32:01', '2023-01-19 21:32:01'),
(5, 2, '312', 'iyah bosssss312312312', '2023-01-20 11:54:06', '2023-01-20 11:54:06'),
(6, 3121, '312', '312312', '2023-01-20 11:59:48', '2023-01-20 11:59:48'),
(7, 3121, '312', '312312', '2023-01-20 11:59:50', '2023-01-20 11:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) CHARACTER SET macroman COLLATE macroman_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin123', '0'),
(2, 'nando', '11223344', '0'),
(3, 'nando', 'nando111', '0'),
(4, 'frenky', 'frenk@gmail.com', '123456'),
(5, 'prengki', 'frenk@gmail.com', '$2y$10$t1uJ6/5/q3Ltg7qublgvs.Iwew4pASSdPUv5apKdDRWdB3mxmc6uu'),
(6, 'prengkiy', 'frenk@gmail.com', '$2y$10$0UMkVa/IKJcI.9Sbs1AOk.LB7lF5NqLKlCoydTenhV9wmVN3x9sYG'),
(7, 'riki', 'riki@gmail.com', '$2y$10$Rm799osGksyCwnNPcYmjUuxsTNKW.QZyJz1FzzC.TGRwJj.lKuhPS'),
(8, 'ponari', 'mari@gmail.com', '$2y$10$W0mJ3lf3QOg3Qeqc/RGONentfwER0x2f8NZgEmilUx.Gq5DwWPaAK'),
(9, 'hendro', 'kartiko@gmail.com', '$2y$10$ITtfvo.9jj873TWy922/uO8Vug1rFPO.w2jBgzKomTx4u2rGJeUji');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `firstname`, `lastname`, `address`, `phone`) VALUES
(1, 1, 'admin', 'admin', 'admin', '08973256432');

-- --------------------------------------------------------

--
-- Table structure for table `voucher_models`
--

CREATE TABLE `voucher_models` (
  `id` int(11) NOT NULL,
  `voucher_name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_models`
--
ALTER TABLE `member_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `product_category_models`
--
ALTER TABLE `product_category_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `product_models`
--
ALTER TABLE `product_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher_models`
--
ALTER TABLE `voucher_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_models`
--
ALTER TABLE `member_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category_models`
--
ALTER TABLE `product_category_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_models`
--
ALTER TABLE `product_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voucher_models`
--
ALTER TABLE `voucher_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
