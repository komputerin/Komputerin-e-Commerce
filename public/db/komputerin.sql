-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2019 pada 07.09
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komputerin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `url`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, NULL, 'car', 'car category', '', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_12_09_065747_create_products_table', 6),
(12, '2019_12_09_071532_create_products_table', 7),
(13, '2019_12_09_073723_create_categories_table', 8),
(14, '2019_12_16_173556_create_users_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `kategori`, `nama`, `harga`, `spesifikasi`, `stok`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PSU', 'Thermaltake Toughpower Grand Digital 850W PSU 80+ Platinum', '2000000', 'Aku dalaha asdbbboasdasdasfacascsevrervvvvvvvvvvvvvvvv', '12', 'PS-TPG-0850FPCGEU-R_06.jpg', '2019-12-09 00:27:48', '2019-12-09 00:27:48'),
(2, 'PSU', 'Corsair', '750000', 'Aqwriewjndavlkjnavpodhn ponpvjsbvsivdb iDBVISDBV', '12', 'KK.jpg', '2019-12-10 03:14:12', '2019-12-10 03:14:12'),
(3, 'PSU', 'Corsair H', '750000', 'asacalscbascaacas', '12', 'KTP.jpg', '2019-12-10 05:11:10', '2019-12-10 05:11:10'),
(4, 'VGA', 'rtx', '15.000.000', 'mahal', '12', 'WhatsApp Image 2019-12-06 at 23.47.39.jpeg', '2019-12-18 08:20:33', '2019-12-18 08:20:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'asdadadadadadadad', 'cau@gmail.com', NULL, '$2y$10$MuYOw9g4a5RWPCTnk.XDSu1VMBz2hGqBPT/BzmFAPV8NBUnNCNQyG', NULL, '2019-12-21 19:07:56', '2019-12-21 19:07:56', 0),
(7, 'maman', 'maman@mail.com', NULL, '$2y$10$OxrN2HcvPPRcaw1ZpSSm.e730IgvuwW7j7km8PIvOutgvEIH3YFGW', NULL, '2019-12-09 19:53:59', '2019-12-09 19:53:59', 0),
(8, 'asep', 'asep@mail', NULL, '$2y$10$zCjdvMcD/WFlN8n/hjFeNOFm9Cat9pvtcNe3k5hiErxExZ4Hra4Kq', NULL, '2019-12-10 03:09:56', '2019-12-10 03:09:56', NULL),
(9, 'jaber', 'jaber@mail.com', NULL, '$2y$10$esoO/ny8Gl3sLb31PwMjoeo8opPgKBIlt0bdbMYXKi5gaQnX07w9G', NULL, '2019-12-10 03:14:05', '2019-12-10 03:14:05', NULL),
(10, 'pepek', 'pepek@mail.com', NULL, '$2y$10$ASu/qk6lxWiiY6MOt/moLeTl6KTtEG8UdQBDj5E9eF9JsUcQ7qg26', NULL, '2019-12-10 06:03:47', '2019-12-10 06:03:47', NULL),
(11, 'amel', 'amel@mail.com', NULL, '$2y$10$/hUh04x2Bsx45OR7JusMNObHHqdwv885FwPjRh6uE6ajJzBnymmq.', NULL, '2019-12-10 21:42:58', '2019-12-10 21:42:58', NULL),
(12, 'mamank', 'mamank@mail.com', NULL, '$2y$10$9Rw31ERuiYoiregRJ5LgyeHJAfEYNzTduxhTtggWQe4wdvMnAP9SS', NULL, '2019-12-13 01:43:13', '2019-12-13 01:43:13', NULL),
(13, 'jaenudin', 'jae@mail', NULL, '$2y$10$AaLtPKlr/oiO4CiMe/Qb8elX70IzJ8sHzZkcTp3EnagYQGraBAv4W', NULL, '2019-12-14 04:17:48', '2019-12-14 04:17:48', NULL),
(14, 'huda12', 'huda12@mail.com', NULL, '$2y$10$WHlNHCXYIWZ.KByUkuLJKeCGCsAGjyH7hywQ8IaVgFAvnpRjAcr8y', NULL, '2019-12-14 07:04:52', '2019-12-14 07:04:52', NULL),
(15, 'usosu', 'usosu@mail.com', NULL, '$2y$10$Y.u8A/Tt4E/gfSkwo.nXVOK5./EVywzzepAVunKOlXKBf5f2OJxl.', NULL, '2019-12-16 11:06:06', '2019-12-16 11:06:06', NULL),
(16, 'cauambon', 'cau@mail.com', NULL, '$2y$10$2Lc8rk/RFTLb90O.PTknPe0J6jd8.QXC3XQnmH.ZwPewegZH5kpaO', NULL, '2019-12-18 00:25:38', '2019-12-18 00:25:38', NULL),
(17, 'ambon', 'ambon@mail.com', NULL, '$2y$10$GgDpuF.I1jpREQZngeJePOfqbLakTVUch3jtS9hSLhTE.TrJ4ltza', NULL, '2019-12-18 00:26:56', '2019-12-18 00:26:56', NULL),
(18, 'ahmad', 'ahmad@mail.com', NULL, '$2y$10$2.MELvrB5y3wzhIiKfaCCOljHjkhQyxSjvgPB13DUt0md2hRZ1ioe', NULL, '2019-12-09 12:08:43', '2019-12-09 12:08:43', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`name`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
