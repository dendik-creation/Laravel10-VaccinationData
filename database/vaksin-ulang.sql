-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2023 pada 15.31
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
-- Database: `vaksin-ulang`
--

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
-- Struktur dari tabel `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat_lokasi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lokasis`
--

INSERT INTO `lokasis` (`id`, `nama`, `alamat_lokasi`, `created_at`, `updated_at`) VALUES
(1, 'RSUD Pati', 'Jl. RSUD Pati', NULL, NULL),
(2, 'RS KSH Pati', 'Jl. RS KSH Pati', NULL, NULL),
(3, 'Puskesmas Pati 1', 'Puskesmas Pati 1', NULL, NULL),
(5, 'RSU Fastabiq Sehat', 'RSU Fastabiq Sehat', NULL, NULL),
(7, 'RSU Ngawi Selatan', 'Arah barat dari Jl. Sukma Kusuma No.23', '2023-03-14 00:02:10', '2023-03-14 00:02:10'),
(8, 'Puskesmas Pati 2', 'Puskesmas Pati 2', '2023-03-16 05:34:27', '2023-03-16 05:34:27'),
(9, 'RS Sehat Gembira', 'Jl. Susiolo Hadiyono No.23, Klompongan, Jawa Utara', '2023-03-17 09:09:37', '2023-03-17 09:09:37');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_13_140314_create_penduduks_table', 1),
(6, '2023_03_13_140426_create_vaksins_table', 1),
(7, '2023_03_13_140438_create_lokasis_table', 1),
(8, '2023_03_13_140446_create_vaksinasis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduks`
--

CREATE TABLE `penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penduduks`
--

INSERT INTO `penduduks` (`id`, `nik`, `nama`, `gender`, `alamat`, `pekerjaan`, `no_telp`, `created_at`, `updated_at`) VALUES
(2, '2222222222', 'Surya\'s Wish', 'Laki-Laki', 'Ds.Banggalan,Ngawi,Jawa Timur', 'Petani', '08953256874', NULL, NULL),
(3, '3333333333', 'Adit Kompresor', 'Laki-laki', 'Jl. Dukuh Waringin No.23, Kudus, Jawa Tengah', 'Pegawai Kantor', '083482949472', '2023-03-14 00:30:19', '2023-03-14 00:30:19'),
(4, '4444444444', 'Nayla Bilek', 'Perempuan', 'Ds. Purwobilek RT2/1 Dawe Kudus', 'Psatir Handal', '0892382328', '2023-03-14 00:45:27', '2023-03-14 00:45:27'),
(5, '5555555555', 'Tuan Matriks', 'Laki-laki', 'Jl. Andromeda No.34, Metropolitan, Jawa Modern', 'Pemandu Game', '089345729183', '2023-03-15 06:08:03', '2023-03-15 19:26:32'),
(6, '6666666666', 'Yanto Bilaiks', 'Laki-laki', 'Jl. Yani No.34, Dawai, Jawa Utara', 'Pertambangan', '089123271812', '2023-03-15 19:25:54', '2023-03-15 19:25:54'),
(7, '7777777777', 'Ilham Penyu', 'Laki-laki', 'Jl. Kepenyuan No.24, Dawe, Kudus', 'Cospalyer Penyu', '08923219298', '2023-03-17 06:03:41', '2023-03-17 06:03:41'),
(8, '8888888888', 'Farhan Kebab', 'Perempuan', 'Jl. Jawa Bilaiks No.34, Indonesia', 'Pedagang Kebab', '08928481918', '2023-03-17 09:12:00', '2023-03-17 09:12:00');

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
  `expires_at` timestamp NULL DEFAULT NULL,
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
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$b6XAxn31.nWyjejmxxMswuxF2PckfweS2eJSB11h11r8ZRwmnl6dS', '2023-03-14 00:51:58', '2023-03-18 03:45:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksinasis`
--

CREATE TABLE `vaksinasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penduduk_id` bigint(20) UNSIGNED NOT NULL,
  `vaksin_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_id` bigint(20) UNSIGNED NOT NULL,
  `vaksin_ke` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vaksinasis`
--

INSERT INTO `vaksinasis` (`id`, `penduduk_id`, `vaksin_id`, `lokasi_id`, `vaksin_ke`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, '2023-03-17 07:47:35', '2023-03-17 07:47:35'),
(2, 3, 3, 2, 1, '2023-03-17 07:47:46', '2023-03-17 07:47:46'),
(3, 4, 5, 3, 1, '2023-03-17 07:47:58', '2023-03-17 07:47:58'),
(4, 5, 8, 5, 1, '2023-03-17 07:48:14', '2023-03-17 07:48:14'),
(5, 3, 9, 5, 2, '2023-03-17 07:48:24', '2023-03-17 07:48:24'),
(6, 3, 8, 8, 3, '2023-03-17 07:48:39', '2023-03-17 07:48:39'),
(7, 4, 5, 3, 2, '2023-03-17 07:48:48', '2023-03-17 07:48:48'),
(8, 3, 3, 7, 4, '2023-03-17 07:49:01', '2023-03-17 07:49:01'),
(9, 8, 3, 5, 1, '2023-03-17 09:27:22', '2023-03-17 09:27:22'),
(12, 7, 8, 7, 1, '2023-04-03 06:12:17', '2023-04-03 06:12:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksins`
--

CREATE TABLE `vaksins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vaksins`
--

INSERT INTO `vaksins` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Sinovac', 'Vaksin Sinovac adalah vaksin untuk melindungi Anda dari virus SARS-CoV-2 atau COVID-19. Vaksin Sinovac yang dikenal juga dengan nama CoronaVac sudah mendapat izin penggunaan dari Badan Pengawas Obat dan Makanan (BPOM) RI.', NULL, '2023-03-13 09:27:51'),
(3, 'Pfizer', 'Vaksin Pfizer atau BNT162b2 adalah vaksin untuk melindungi Anda dari SARS-CoV-2 atau COVID-19. Vaksin ini bisa digunakan sebagai vaksin primer (dosis 1 dan 2) dan juga sebagai vaksin booster.', NULL, NULL),
(5, 'Moderna', 'Vaksin Moderna adalah vaksin untuk melindungi Anda dari SARS-CoV-2 atau COVID-19. Vaksin ini bisa digunakan sebagai vaksin primer (dosis 1 dan 2) dan juga sebagai vaksin booster.', '2023-03-13 09:16:05', '2023-03-13 09:16:05'),
(8, 'AstraZeneca', 'Vaksin AstraZeneca atau AZD1222 adalah vaksin untuk mencegah penyakit COVID-19. Vaksin ini merupakan hasil kerja sama antara Universitas Oxford dan AstraZeneca yang dikembangkan sejak Februari 2020.', '2023-03-13 09:33:59', '2023-03-13 09:33:59'),
(9, 'Sinoparhm', 'Vaksin Sinopharm adalah vaksin untuk mencegah infeksi virus Corona atau COVID-19. Vaksin ini bisa digunakan sebagai vaksin primer (dosis 1 dan 2) dan juga sebagai vaksin booster.', '2023-03-13 23:49:06', '2023-03-13 23:49:06'),
(11, 'Novavax', 'Vaksin Novavax mengandung protein subunit yang dibuat khusus untuk menyerupai protein alami pada virus Corona. Setelah disuntikkan ke dalam tubuh, protein tersebut akan memicu tubuh untuk menghasilkan antibodi untuk melawan virus Corona.', '2023-03-17 07:52:27', '2023-03-17 07:52:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vaksinasis`
--
ALTER TABLE `vaksinasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vaksinasis_penduduk_id_foreign` (`penduduk_id`),
  ADD KEY `vaksinasis_vaksin_id_foreign` (`vaksin_id`),
  ADD KEY `vaksinasis_lokasi_id_foreign` (`lokasi_id`);

--
-- Indeks untuk tabel `vaksins`
--
ALTER TABLE `vaksins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `vaksinasis`
--
ALTER TABLE `vaksinasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `vaksins`
--
ALTER TABLE `vaksins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `vaksinasis`
--
ALTER TABLE `vaksinasis`
  ADD CONSTRAINT `vaksinasis_lokasi_id_foreign` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasis` (`id`),
  ADD CONSTRAINT `vaksinasis_penduduk_id_foreign` FOREIGN KEY (`penduduk_id`) REFERENCES `penduduks` (`id`),
  ADD CONSTRAINT `vaksinasis_vaksin_id_foreign` FOREIGN KEY (`vaksin_id`) REFERENCES `vaksins` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
