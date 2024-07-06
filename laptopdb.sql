-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2024 pada 10.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptopdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `C1` varchar(255) NOT NULL,
  `C2` varchar(255) NOT NULL,
  `C3` varchar(255) NOT NULL,
  `C4` varchar(255) NOT NULL,
  `C5` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nama`, `C1`, `C2`, `C3`, `C4`, `C5`, `created_at`, `updated_at`) VALUES
(5, 'Dell XPS 13', '100', '98', '93', '92', '90', '2024-07-05 22:06:50', '2024-07-05 23:30:17'),
(6, 'MacBook Pro 2019', '98', '80', '93', '87', '83', '2024-07-05 22:07:27', '2024-07-05 23:31:01'),
(7, 'HP Envy Pro 2019', '98', '80', '83', '90', '78', '2024-07-05 22:09:24', '2024-07-05 23:32:28'),
(8, 'Asus Zenbook 14', '100', '100', '98', '100', '95', '2024-07-05 22:11:37', '2024-07-05 23:32:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` float NOT NULL,
  `atribut` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `kode`, `nama`, `bobot`, `atribut`, `created_at`, `updated_at`) VALUES
(7, '1', 'harga', 30, 'Semakin rendah semakin baik', '2024-07-05 04:21:06', '2024-07-05 23:27:57'),
(8, '2', 'Kondisi fisik', 25, 'Semakin tinggi semakin baik', '2024-07-05 04:22:14', '2024-07-05 23:28:06'),
(9, '3', 'Spesifikasi', 20, 'Semakin tinggi semakin baik', '2024-07-05 04:22:59', '2024-07-05 23:28:20'),
(10, '4', 'Umur laptop', 15, 'Semakin muda semakin baik', '2024-07-05 04:23:28', '2024-07-05 23:28:29'),
(11, '5', 'Daya tahan batterai', 10, 'Semakin lama semakin baik', '2024-07-05 04:23:59', '2024-07-05 04:23:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `kondisi_fisik` varchar(255) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `umur_laptop` varchar(255) NOT NULL,
  `daya_tahan_batterai` int(11) NOT NULL,
  `Ketersediaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id`, `nama`, `slug`, `harga`, `kondisi_fisik`, `spesifikasi`, `umur_laptop`, `daya_tahan_batterai`, `Ketersediaan`, `created_at`, `updated_at`) VALUES
(1, 'Dell XPS 13', '1', 10, 'Baik', 'Intel i7, 16GB RAM, 512GB SSD, 13.3\" FHD Display', '2', 6, 'tersedia', '2024-06-26 02:44:44', '2024-06-26 02:44:44'),
(2, 'Acer Aspire 3', '2', 3, 'Baik', 'Intel i3, 4GB RAM, 1TB HDD, 15.6\" HD Display', '4', 3, 'tersedia', '2024-06-26 02:48:10', '2024-06-26 02:48:10'),
(6, 'MacBook Pro 2019', '3', 6, 'Cukup', 'Intel i5, 8GB RAM, 128GB SSD, 13\" Retina Display', '4', 5, 'tersedia', '2024-06-26 02:54:30', '2024-07-05 22:08:35'),
(7, 'HP Envy Pro 2019', '4', 5, 'Baik', 'Jelek', '1', 6, 'tersedia', '2024-06-26 03:01:26', '2024-07-05 22:08:14'),
(8, 'Asus Zenbook 14', '5', 11, 'Baik', 'Bagus', '3', 5, 'tersedia', '2024-06-26 03:03:17', '2024-07-05 22:10:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_18_150042_create_mobils_table', 1),
(6, '2023_06_21_122720_create_kriterias_table', 1),
(7, '2023_06_21_122739_create_alternatifs_table', 1),
(8, '2023_06_28_090513_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mochfarriiiz@gmail.com', '$2y$10$f48IUM.ee7J8eFobwCw6Fuo8DqoB8L/E9W7jgfFDgMwoDlqLPboV6', '2024-06-25 23:51:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fariz', 'mohfariz88@gmail.com', NULL, '$2y$10$jRNyVbjtQ.rCZG4bKq/DGeEOQ31Q7qjLf59.Syfw6xiAGrZG1jR8u', 1, 'zdvfLs2HFSmfpMQ66Sqh0mZsR6qPSGarRP13wxOdyRNbj0UtplqTBYsDrgLa', '2024-06-23 23:59:24', '2024-06-26 00:32:18'),
(2, 'mohfariz', 'mochfarriiiz@gmail.com', NULL, '$2y$10$xExY5Uo6eajD0pbgAyyUvOKIrVtLFwfz7Y.raor7/rDAA3YMNQkI2', 0, NULL, '2024-06-25 23:50:02', '2024-06-25 23:50:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laptop_nama_unique` (`nama`),
  ADD UNIQUE KEY `laptop_slug_unique` (`slug`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
