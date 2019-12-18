-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2019 pada 08.36
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmad', 'ahmad@mail.com', NULL, '$2y$10$2.MELvrB5y3wzhIiKfaCCOljHjkhQyxSjvgPB13DUt0md2hRZ1ioe', NULL, '2019-12-09 12:08:43', '2019-12-09 12:08:43'),
(7, 'maman', 'maman@mail.com', NULL, '$2y$10$OxrN2HcvPPRcaw1ZpSSm.e730IgvuwW7j7km8PIvOutgvEIH3YFGW', NULL, '2019-12-09 19:53:59', '2019-12-09 19:53:59'),
(8, 'asep', 'asep@mail', NULL, '$2y$10$zCjdvMcD/WFlN8n/hjFeNOFm9Cat9pvtcNe3k5hiErxExZ4Hra4Kq', NULL, '2019-12-10 03:09:56', '2019-12-10 03:09:56'),
(9, 'jaber', 'jaber@mail.com', NULL, '$2y$10$esoO/ny8Gl3sLb31PwMjoeo8opPgKBIlt0bdbMYXKi5gaQnX07w9G', NULL, '2019-12-10 03:14:05', '2019-12-10 03:14:05'),
(10, 'pepek', 'pepek@mail.com', NULL, '$2y$10$ASu/qk6lxWiiY6MOt/moLeTl6KTtEG8UdQBDj5E9eF9JsUcQ7qg26', NULL, '2019-12-10 06:03:47', '2019-12-10 06:03:47'),
(11, 'amel', 'amel@mail.com', NULL, '$2y$10$/hUh04x2Bsx45OR7JusMNObHHqdwv885FwPjRh6uE6ajJzBnymmq.', NULL, '2019-12-10 21:42:58', '2019-12-10 21:42:58'),
(12, 'mamank', 'mamank@mail.com', NULL, '$2y$10$9Rw31ERuiYoiregRJ5LgyeHJAfEYNzTduxhTtggWQe4wdvMnAP9SS', NULL, '2019-12-13 01:43:13', '2019-12-13 01:43:13'),
(13, 'jaenudin', 'jae@mail', NULL, '$2y$10$AaLtPKlr/oiO4CiMe/Qb8elX70IzJ8sHzZkcTp3EnagYQGraBAv4W', NULL, '2019-12-14 04:17:48', '2019-12-14 04:17:48'),
(14, 'huda12', 'huda12@mail.com', NULL, '$2y$10$WHlNHCXYIWZ.KByUkuLJKeCGCsAGjyH7hywQ8IaVgFAvnpRjAcr8y', NULL, '2019-12-14 07:04:52', '2019-12-14 07:04:52'),
(15, 'usosu', 'usosu@mail.com', NULL, '$2y$10$Y.u8A/Tt4E/gfSkwo.nXVOK5./EVywzzepAVunKOlXKBf5f2OJxl.', NULL, '2019-12-16 11:06:06', '2019-12-16 11:06:06'),
(16, 'cauambon', 'cau@mail.com', NULL, '$2y$10$2Lc8rk/RFTLb90O.PTknPe0J6jd8.QXC3XQnmH.ZwPewegZH5kpaO', NULL, '2019-12-18 00:25:38', '2019-12-18 00:25:38'),
(17, 'ambon', 'ambon@mail.com', NULL, '$2y$10$GgDpuF.I1jpREQZngeJePOfqbLakTVUch3jtS9hSLhTE.TrJ4ltza', NULL, '2019-12-18 00:26:56', '2019-12-18 00:26:56');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
