-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 06:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `password` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `member_models`
--

INSERT INTO `member_models` (`id`, `name`, `address`, `telp`, `email`, `status`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Faisal Rahma Dana Widiana Putra', 'Beringin Telaga', '085806690137', 'Faisalrahma531@gmail.com', 'user', '1234', NULL, NULL),
(14, 'Koret Deka', 'Manhattan Ninth St. 23', '082377172772', 'koretdeka@gmail.com', NULL, NULL, NULL, NULL),
(17, 'Suryo Atmojo', 'Semampir St. 83', '082472732', 'suryoatmojo3@gmail.com', NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `product_category_models`
--

INSERT INTO `product_category_models` (`id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alat Tulis', 'Ready', NULL, NULL),
(2, 'Buku Tulis', 'Tidak Ready', NULL, NULL),
(3, 'Minuman', 'Ready', NULL, NULL);

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
(10, '1', 'Gunting', 'Gunting Kecil', NULL, 5000, 24, NULL, NULL, NULL),
(11, '1', 'Penggaris 30CM', 'Penggaris Kaca', NULL, 4000, 74, NULL, NULL, NULL),
(12, '1', 'Bolpoint Merah', 'Snowman Merah', NULL, 5500, 25, NULL, NULL, NULL);

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
-- Dumping data for table `voucher_models`
--

INSERT INTO `voucher_models` (`id`, `voucher_name`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Alat Tulis 50%', '50%', 'Aktif', NULL, NULL),
(2, 'Diskon Buku Sinar Duni', '10%', 'Aktif', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_category_models`
--
ALTER TABLE `product_category_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_models`
--
ALTER TABLE `product_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `voucher_models`
--
ALTER TABLE `voucher_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
