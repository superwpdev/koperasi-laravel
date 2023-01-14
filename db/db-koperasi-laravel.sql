-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2023 pada 06.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

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
-- Struktur dari tabel `contact_models`
--

CREATE TABLE `contact_models` (
  `id` int(65) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_models`
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

--
-- Dumping data untuk tabel `member_models`
--

INSERT INTO `member_models` (`id`, `name`, `address`, `telp`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'baru', 'grogol', '08972739', 'bagusse@gmail.com', 'aktif', '2022-12-24 02:41:57', '2022-12-24 02:41:57'),
(3, 'bgs', 'grogol', '08930983', 'abgsu', 'tidak aktif', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_category_models`
--

CREATE TABLE `product_category_models` (
  `id` int(11) NOT NULL,
  `category` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `product_category_models`
--

INSERT INTO `product_category_models` (`id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'buku', 'ada', '2022-12-24 02:38:16', '2022-12-24 02:38:16'),
(2, 'alat tulis', 'ada', NULL, NULL),
(3, 'alat tulis', 'ada', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_models`
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
-- Dumping data untuk tabel `product_models`
--

INSERT INTO `product_models` (`id`, `id_category`, `product`, `description`, `image`, `price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'sinar dunia', 'sinar dunia 50 lbr', '', 5000, 5, 'ada', '2022-12-24 02:38:52', '2022-12-24 02:38:52'),
(2, '2', 'pensil', 'pensil 2b', '', 3000, 90, 'ada', NULL, NULL),
(3, NULL, 'komo', 'jajan komo', '', 3000, 90, 'ada', NULL, NULL),
(4, NULL, 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(5, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(6, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(7, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(8, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(9, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(10, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(11, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(12, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(13, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(14, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL),
(15, '3', 'kacang', 'kacang garuda', '', 10000, 90, 'ada', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `voucher_models`
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
-- Dumping data untuk tabel `voucher_models`
--

INSERT INTO `voucher_models` (`id`, `voucher_name`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mahasiswa', '5%', 'ada', '2022-12-24 02:40:08', '2022-12-24 02:40:08'),
(2, 'mhs_smstr5', '10%', 'ada', NULL, NULL),
(3, 'mhs_smstr5', '10%', 'ada', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact_models`
--
ALTER TABLE `contact_models`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member_models`
--
ALTER TABLE `member_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `product_category_models`
--
ALTER TABLE `product_category_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `product_models`
--
ALTER TABLE `product_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `voucher_models`
--
ALTER TABLE `voucher_models`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact_models`
--
ALTER TABLE `contact_models`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `member_models`
--
ALTER TABLE `member_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `product_category_models`
--
ALTER TABLE `product_category_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `product_models`
--
ALTER TABLE `product_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `voucher_models`
--
ALTER TABLE `voucher_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
