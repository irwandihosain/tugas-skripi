-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2022 pada 11.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas-skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_mahasiswas`
--

CREATE TABLE `daftar_mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'axel', 'axel@gmail.com', NULL, '$2y$10$ueBh8B8QHZovvz0XFnvAcOFVwXes0JxYU8UYXrz8rKU.QVBn9aJ3O', NULL, '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, 'irwandi', 'irwandi@gmail.com', NULL, '$2y$10$zsnxaFVU/qNHwEyR5ZCmPuteJUokss4rAucVomlTmlemGERlBIu2i', NULL, '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(3, 'tom', 'tom@gmail.com', NULL, '$2y$10$G9LBMhb1ZtfrvZSgOFnFaOCPEAyW3XjUz0tMvzoyqJvDuSUr1IxYi', NULL, '2022-04-03 23:54:07', '2022-04-03 23:54:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teknik', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, 'Ekonomi dan Ilmu Sosial', '2022-04-03 23:54:07', '2022-04-03 23:54:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `haris`
--

CREATE TABLE `haris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `haris`
--

INSERT INTO `haris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, 'Selasa', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(3, 'Rabu', '2022-04-03 23:54:07', '2022-04-03 23:54:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Elektro 1', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, 'Teknik Elektro 2', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(3, 'Teknik Elektro 3', '2022-04-03 23:54:07', '2022-04-03 23:54:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matakuliah_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliahs`
--

CREATE TABLE `matakuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaMatakuliah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahPertemuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalMulai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalSelesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matakuliahs`
--

INSERT INTO `matakuliahs` (`id`, `uuid`, `ruangan`, `jam`, `namaMatakuliah`, `jumlahPertemuan`, `kelas`, `tanggalMulai`, `tanggalSelesai`, `created_at`, `updated_at`) VALUES
(2, '74b2c864-fab4-429c-b460-4289ed0bfcde', '401', '17:28', 'Bahasa Indonesia', '12', 'Teknik Elektro 1', '2022-04-04', '2022-05-04', '2022-04-04 01:29:27', '2022-04-04 01:41:49'),
(3, '88519067-c3bb-4b11-8b86-b77f4c5c4cf8', '402', '17:42', 'Matematika', '11', 'Teknik Elektro 2', '2022-04-04', '2022-05-04', '2022-04-04 01:42:55', '2022-04-04 01:42:55');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_18_064510_create_matakuliahs_table', 1),
(6, '2022_03_18_070433_create_dosens_table', 1),
(7, '2022_03_19_092545_create_kelas_table', 1),
(8, '2022_03_19_092900_create_ruangans_table', 1),
(9, '2022_03_19_093022_create_real_matakuliahs_table', 1),
(10, '2022_03_19_093039_create_fakultas_table', 1),
(11, '2022_03_19_093057_create_haris_table', 1),
(12, '2022_03_19_093124_create_pertemuans_table', 1),
(13, '2022_03_21_061848_create_relasi_models_table', 1),
(14, '2022_03_22_080307_create_mahasiswas_table', 1),
(15, '2022_03_28_071444_create_daftar_mahasiswas_table', 1),
(16, '2022_03_28_071828_create_qr_codes_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertemuans`
--

CREATE TABLE `pertemuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertemuans`
--

INSERT INTO `pertemuans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '1', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, '2', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(3, '3', '2022-04-03 23:54:07', '2022-04-03 23:54:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `qr_codes`
--

CREATE TABLE `qr_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qrcode_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_daftarMahasiswa` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `qr_codes`
--

INSERT INTO `qr_codes` (`id`, `qrcode_img`, `id_daftarMahasiswa`, `created_at`, `updated_at`) VALUES
(1, 'file-image/E4hwN558uicdj2SDG3xYEPgUEMy95pGwt0GG1GLl.jpg', NULL, '2022-04-03 23:58:05', '2022-04-03 23:58:05'),
(2, 'file-image/DwxnT5LCblOzjYTgUZo9VCQ1i9OaZqAhZbgEGssF.jpg', NULL, '2022-04-04 00:10:38', '2022-04-04 00:10:38'),
(3, 'file-image/dZB6hr9BUCX9JGkwv8NfhbkUJ12h2AZecsulyOkO.jpg', NULL, '2022-04-04 01:04:23', '2022-04-04 01:04:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `real_matakuliahs`
--

CREATE TABLE `real_matakuliahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `real_matakuliahs`
--

INSERT INTO `real_matakuliahs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Indonesia', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, 'Matematika', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(3, 'Programming', '2022-04-03 23:54:07', '2022-04-03 23:54:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_models`
--

CREATE TABLE `relasi_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matakuliah_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `relasi_models`
--

INSERT INTO `relasi_models` (`id`, `matakuliah_id`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, '6f12f763-a20b-4777-b9e7-578523b094cd', 1, '2022-04-04 01:28:34', '2022-04-04 01:28:34'),
(2, '6f12f763-a20b-4777-b9e7-578523b094cd', 2, '2022-04-04 01:28:34', '2022-04-04 01:28:34'),
(3, 'cf1476bb-7b9c-45a8-875a-6248550f5e6a', 1, '2022-04-04 01:29:27', '2022-04-04 01:29:27'),
(4, 'cf1476bb-7b9c-45a8-875a-6248550f5e6a', 2, '2022-04-04 01:29:27', '2022-04-04 01:29:27'),
(5, '64bb32a5-428e-4b0d-97de-666acb91abd1', 1, '2022-04-04 01:41:28', '2022-04-04 01:41:28'),
(6, '64bb32a5-428e-4b0d-97de-666acb91abd1', 2, '2022-04-04 01:41:28', '2022-04-04 01:41:28'),
(7, '64bb32a5-428e-4b0d-97de-666acb91abd1', 3, '2022-04-04 01:41:28', '2022-04-04 01:41:28'),
(8, '74b2c864-fab4-429c-b460-4289ed0bfcde', 1, '2022-04-04 01:41:49', '2022-04-04 01:41:49'),
(9, '74b2c864-fab4-429c-b460-4289ed0bfcde', 2, '2022-04-04 01:41:49', '2022-04-04 01:41:49'),
(10, '88519067-c3bb-4b11-8b86-b77f4c5c4cf8', 1, '2022-04-04 01:42:55', '2022-04-04 01:42:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangans`
--

CREATE TABLE `ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangans`
--

INSERT INTO `ruangans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '401', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, '402', '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(3, '403', '2022-04-03 23:54:07', '2022-04-03 23:54:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'irwandi hosain', 'irwandihhosain@gmail.com', NULL, '$2y$10$0Mu9.PCL84ttBl3U4JiTyeJBs8WcTNKT.G7aOdNqPlklOcVLO0Qca', NULL, '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(2, 'tom cruise', 'tomcruise@gmail.com', NULL, '$2y$10$Kp2PhPpE8FzDpcH4G9V0.OhV4TVg8RUvEX4MkQUzIIDcRlY5FPx5K', NULL, '2022-04-03 23:54:07', '2022-04-03 23:54:07'),
(3, 'jennifer anniston', 'jenniferanniston@gmail.com', NULL, '$2y$10$S5MqBPMwSwM2Qgy3l4gy6eYWA.hGF6TvfipWVfHmoxUa4WAucV3ei', NULL, '2022-04-03 23:54:07', '2022-04-03 23:54:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_mahasiswas`
--
ALTER TABLE `daftar_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `haris`
--
ALTER TABLE `haris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliahs`
--
ALTER TABLE `matakuliahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matakuliahs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `pertemuans`
--
ALTER TABLE `pertemuans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `real_matakuliahs`
--
ALTER TABLE `real_matakuliahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `relasi_models`
--
ALTER TABLE `relasi_models`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
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
-- AUTO_INCREMENT untuk tabel `daftar_mahasiswas`
--
ALTER TABLE `daftar_mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `haris`
--
ALTER TABLE `haris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `matakuliahs`
--
ALTER TABLE `matakuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertemuans`
--
ALTER TABLE `pertemuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `real_matakuliahs`
--
ALTER TABLE `real_matakuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `relasi_models`
--
ALTER TABLE `relasi_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
