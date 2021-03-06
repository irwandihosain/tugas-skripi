-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2022 pada 14.26
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
-- Struktur dari tabel `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `matakuliah_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensis`
--

INSERT INTO `absensis` (`id`, `created_at`, `updated_at`, `matakuliah_id`, `nim`, `keterangan`, `pertemuan`) VALUES
(2, '2022-04-07 04:20:13', '2022-04-07 04:20:13', NULL, '1720221089', 'hadir', '1');

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
(1, 'axel', 'axel@gmail.com', NULL, '$2y$10$Ed2/dGNGst065Ch6tdVwFuzY858wglwv55NXLZ65tUCZoSqKjHzNC', NULL, '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(2, 'irwandi', 'irwandi@gmail.com', NULL, '$2y$10$aVLVM5yqtVpnzlTdXtjTeu4cSnYXo7iDZmV38M9g1/TCTfNRkXwTC', NULL, '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(3, 'tom', 'tom@gmail.com', NULL, '$2y$10$nQxxrfUfbyILExWWcnDYF.raxiEWAdvcFGP32aQl29o625zZGQ7gu', NULL, '2022-04-07 04:12:23', '2022-04-07 04:12:23');

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
(1, 'Teknik', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(2, 'Ekonomi dan Ilmu Sosial', '2022-04-07 04:12:23', '2022-04-07 04:12:23');

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
(1, 'Senin', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(2, 'Selasa', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(3, 'Rabu', '2022-04-07 04:12:23', '2022-04-07 04:12:23');

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
(1, 'Teknik Elektro 1', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(2, 'Teknik Elektro 2', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(3, 'Teknik Elektro 3', '2022-04-07 04:12:23', '2022-04-07 04:12:23');

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

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nama`, `nim`, `matakuliah_id`, `created_at`, `updated_at`) VALUES
(1, 'Denny', '1720221089', '1', '2022-04-07 04:26:23', '2022-04-07 04:26:23'),
(2, 'Marhandam', '17221086', '2', '2022-04-07 04:26:48', '2022-04-07 04:26:48');

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
(1, 'cf98c73e-d39b-421b-8137-ed0a1a6a232b', '402', '20:24', 'Matematika', '12', 'Teknik Elektro 2', '2022-04-07', '2022-07-07', '2022-04-07 04:25:07', '2022-04-07 04:25:07'),
(2, '921e7e38-eed3-4f4b-a218-c6f69ef7323c', '401', '20:25', 'Programming', '11', 'Teknik Elektro 1', '2022-04-07', '2022-11-07', '2022-04-07 04:25:42', '2022-04-07 04:25:42');

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
(16, '2022_03_28_071828_create_qr_codes_table', 1),
(17, '2022_04_07_114448_create_absensis_table', 1);

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
(1, '1', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(2, '2', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(3, '3', '2022-04-07 04:12:23', '2022-04-07 04:12:23');

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
(1, 'Bahasa Indonesia', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(2, 'Matematika', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(3, 'Programming', '2022-04-07 04:12:23', '2022-04-07 04:12:23');

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
(1, 'cf98c73e-d39b-421b-8137-ed0a1a6a232b', 1, '2022-04-07 04:25:07', '2022-04-07 04:25:07'),
(2, 'cf98c73e-d39b-421b-8137-ed0a1a6a232b', 2, '2022-04-07 04:25:07', '2022-04-07 04:25:07'),
(3, '921e7e38-eed3-4f4b-a218-c6f69ef7323c', 3, '2022-04-07 04:25:42', '2022-04-07 04:25:42');

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
(1, '401', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(2, '402', '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(3, '403', '2022-04-07 04:12:23', '2022-04-07 04:12:23');

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
(1, 'irwandi hosain', 'irwandihhosain@gmail.com', NULL, '$2y$10$LrNMHciZZbtMwVs/cqt9TOXcDDCmyd4L4uv8mdyLuSifws0wqoojq', NULL, '2022-04-07 04:12:22', '2022-04-07 04:12:22'),
(2, 'tom cruise', 'tomcruise@gmail.com', NULL, '$2y$10$UPWjtjV/deJ7DglLTxAAQO1CKCvbQFe6jwZkSTvu83gouQses1Uy.', NULL, '2022-04-07 04:12:23', '2022-04-07 04:12:23'),
(3, 'jennifer anniston', 'jenniferanniston@gmail.com', NULL, '$2y$10$HPg6Ge0Gvur/0X5CMuEfdO8gpIkOKPjaHL3fBfX1ittWoovVLiwiK', NULL, '2022-04-07 04:12:23', '2022-04-07 04:12:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `matakuliahs`
--
ALTER TABLE `matakuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `real_matakuliahs`
--
ALTER TABLE `real_matakuliahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `relasi_models`
--
ALTER TABLE `relasi_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
