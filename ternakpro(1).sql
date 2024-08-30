-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 04:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ternakpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `awal`
--

CREATE TABLE `awal` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `email_aktif` varchar(50) NOT NULL,
  `rating` enum('⭐','⭐⭐','⭐⭐⭐','⭐⭐⭐⭐','⭐⭐⭐⭐⭐') NOT NULL,
  `pesan_saran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awal`
--

INSERT INTO `awal` (`id`, `nama_lengkap`, `no_tlp`, `email_aktif`, `rating`, `pesan_saran`) VALUES
(13, 'Agus Garnnindyo', '0882123439604', 'garnindyo@gmail.com', '⭐⭐⭐⭐⭐', 'Semoga sukses untuk ternakpro kedepan nya');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('nindya@gmail.com|127.0.0.1', 'i:1;', 1723618204),
('nindya@gmail.com|127.0.0.1:timer', 'i:1723618204;', 1723618204);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `usia` double NOT NULL,
  `level` varchar(50) NOT NULL,
  `berat` float NOT NULL,
  `kondisi_fisik` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `jenis`, `foto`, `usia`, `level`, `berat`, `kondisi_fisik`, `harga`, `kategori`, `status`) VALUES
(0, 'DOMBA AFRIKA SUPER', 'public/foto_hewan/sJzZZwE4zMjIDhyOOqskHaC5gw5LZypiBFi1LwSY.jpg', 4, 'super', 65, 'sehat', 4000000, 'JANTAN', 'TERSEDIA'),
(3, 'DOMBA GARUT SUPER', 'public/foto_hewan/wsYOPpfESgbfHYNFKuu2afU4P4m5OX1nRzJJvzKr.jpg', 6, 'SUPER', 56, 'SEHAT', 5700000, 'BETINA', 'TERSEDIA'),
(8, 'KAMBING SUMBA', 'public/foto_hewan/PGxeuNEpMyJmQbj6Mkm4SjUErAhLBHYPSk3PkT8c.jpg', 2, 'medium agak gemuk', 57, 'SEHAT BUGAR DAN BEROTOT', 6000000, 'BETINA', 'SOLD OUT'),
(13, 'KAMBING SUPER', 'public/foto_hewan/2rwnbUHn9qkHgPDH7DJluwiRBAIlwfZQN1KpOua5.jpg', 6, 'SUPER', 70, 'SEHAT WALFIAT', 4000000, 'JANTAN', 'SOLD OUT'),
(14, 'KAMBING ARAB SUKU BADUI', 'public/foto_hewan/WzvQlXsnKz3CAcUtlnkLB7fFXiQz32tTmVpBAHG9.jpg', 5, 'SUPER', 57, 'SEHAT BUGAR DAN BEROTOT', 4000000, 'JANTAN', 'TERSEDIA'),
(15, 'KAMBING DOMBA GARUT SUPER HIGHT', 'public/foto_hewan/lDu1BJpvCW4bTN0ztfoyZQOUjT9fcu8JCdSyi56l.jpg', 6, 'MEDIUM', 67, 'SEHAT BUGAR DAN BEROTOT', 7000000, 'JANTAN', 'TERSEDIA');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `tlp_pemilik` varchar(50) NOT NULL,
  `email_pemilik` varchar(50) NOT NULL,
  `jenis_hewan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_pemantauan` date NOT NULL,
  `berat_badan` float NOT NULL,
  `suhu_tubuh` float NOT NULL,
  `kondisi_kesehatan` varchar(255) NOT NULL,
  `perubahan_fisik` varchar(255) NOT NULL,
  `jenis_pakan` varchar(100) NOT NULL,
  `jumlah_pakan` float NOT NULL,
  `frekuensi_pakan` float NOT NULL,
  `kondisi_kandang` varchar(255) NOT NULL,
  `suhu_lingkungan` float NOT NULL,
  `kelembapan_lingkungan` float NOT NULL,
  `pemberian_obat` varchar(100) NOT NULL,
  `tindakan_perawatan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `status_kesehatan` varchar(50) NOT NULL,
  `rekomendasi_tindakan` varchar(255) NOT NULL,
  `tanggal_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `id` int(11) NOT NULL,
  `nama_investor` varchar(100) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_wa` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `tipe_entitas` enum('Investor','Pemasok') NOT NULL,
  `status` enum('Active','Non Active') NOT NULL,
  `nominal_investasi` double NOT NULL,
  `bukti_investasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('fakhrizalgarnindyo@gmail.com', '$2y$12$BdMmky7szkyRoG1PpAaymu9BlGf9un8Qq9VWqMV3coZBvywcebFrG', '2024-08-02 07:23:30'),
('garnindyo@gmail.com', '$2y$12$iCmITa1294ueA34bFu7akOQw.avh7ikGX7XPtG3bbiJIHD5Mw9Mq6', '2024-08-02 00:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `usia` double NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` double NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `foto`, `nama_lengkap`, `usia`, `jk`, `alamat`, `no_tlp`, `email`, `role`) VALUES
(1, 'public/fotos/wt0dA2Pi11Uo4cTiegU3SXuqxmoV519YPTayyrex.jpg', 'Darmawansyah', 40, 'L', 'Perumahan Pura Bojonggede, Kabupaten Bogor', 81284888239, 'darmawan@gmail.com', 'PEMILIK USAHA');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('o6HZlLefe4ZFNNKSXm8XhnQWlpyhYVQecN5Myvbp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVhPMG5qSUdRRVc5QkVBQmRxRmJoeVNIUXhZck1GRlYxejZyV2dGbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1724945390);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `harga` double NOT NULL,
  `metode_pembayaran` enum('Transfer via Bank','Cash On Delivery') NOT NULL,
  `status_pembayaran` enum('SUDAH LUNAS','BELUM LUNAS') NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `catatan_tambahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(20) DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Darmawansyah', 'admin@ternakpro.id', NULL, '$2y$12$HqHlcYBK24ejn1RPAFbcDeL.44EEMigy6eOyJscBgTDRQi.ws2b2a', NULL, '2024-08-01 09:24:25', '2024-08-10 08:24:50', 'administrator'),
(2, 'Agus Garnindyo', 'garnindyo@gmail.com', NULL, '$2y$12$XIq2DkgUtHhc/xH/Uh8Ifuw7McUdQTsdxZjkeN.kXxiXX4dUwHTMq', NULL, '2024-08-01 11:29:36', '2024-08-07 12:43:42', 'member'),
(3, 'Nindya Aisyah', 'nindyaaini@gmail.com', NULL, '$2y$12$EcHpRI/DKUmAh/IvdR8ny.ENcMk.jHGn425mNVYX62C9qAPaVYsUG', NULL, '2024-08-01 12:17:56', '2024-08-13 22:54:51', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awal`
--
ALTER TABLE `awal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT for table `awal`
--
ALTER TABLE `awal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
