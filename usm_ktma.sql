-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2025 at 11:03 PM
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
-- Database: `usm_ktma`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang_muhammadiyah`
--

CREATE TABLE `cabang_muhammadiyah` (
  `id` int(11) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabang_muhammadiyah`
--

INSERT INTO `cabang_muhammadiyah` (`id`, `nama_cabang`, `daerah`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat`, `kontak`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Cabang A1', 'Daerah Istimewa Yogyakarta', 'DI Yogyakarta', 'Yogyakarta', 'Gondokusuman', 'Kotabaru', 'Jl. Ahmad Dahlan No. 10', '081234567890', 'a1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(2, 'Cabang A2', 'Daerah Istimewa Yogyakarta', 'DI Yogyakarta', 'Bantul', 'Kasihan', 'Tamantirto', 'Jl. KH Ahmad Dahlan No. 15', '081234567891', 'a2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(3, 'Cabang B1', 'Jawa Tengah', 'Jawa Tengah', 'Semarang', 'Tembalang', 'Sendangmulyo', 'Jl. KH Ahmad Dahlan No. 25', '081234567892', 'b1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(4, 'Cabang B2', 'Jawa Tengah', 'Jawa Tengah', 'Solo', 'Laweyan', 'Kerten', 'Jl. KH Ahmad Dahlan No. 30', '081234567893', 'b2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(5, 'Cabang C1', 'Jawa Timur', 'Jawa Timur', 'Surabaya', 'Wonokromo', 'Darmo', 'Jl. KH Ahmad Dahlan No. 35', '081234567894', 'c1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(6, 'Cabang C2', 'Jawa Timur', 'Jawa Timur', 'Malang', 'Blimbing', 'Purwodadi', 'Jl. KH Ahmad Dahlan No. 40', '081234567895', 'c2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(7, 'Cabang D1', 'Sumatera Barat', 'Sumatera Barat', 'Padang', 'Kuranji', 'Lubuk Lintah', 'Jl. KH Ahmad Dahlan No. 45', '081234567896', 'd1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(8, 'Cabang D2', 'Sumatera Barat', 'Sumatera Barat', 'Bukittinggi', 'Guguk Panjang', 'Aur Kuning', 'Jl. KH Ahmad Dahlan No. 50', '081234567897', 'd2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(9, 'Cabang E1', 'Sulawesi Selatan', 'Sulawesi Selatan', 'Makassar', 'Tamalanrea', 'Biringkanaya', 'Jl. KH Ahmad Dahlan No. 55', '081234567898', 'e1@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42'),
(10, 'Cabang E2', 'Sulawesi Selatan', 'Sulawesi Selatan', 'Gowa', 'Somba Opu', 'Tamalate', 'Jl. KH Ahmad Dahlan No. 60', '081234567899', 'e2@muhammadiyah.or.id', '2025-02-09 17:08:42', '2025-02-09 17:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `ktam`
--

CREATE TABLE `ktam` (
  `nik` int(16) NOT NULL,
  `nama_lengkap` varchar(32) NOT NULL,
  `gelar_depan` varchar(12) DEFAULT NULL,
  `gelar_belakang` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `status_perkawinan` enum('Menikah','Belum Menikah','Janda','Duda') NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(32) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kelurahan` varchar(32) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `daerah` varchar(32) NOT NULL,
  `cabang` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `profesi` varchar(50) DEFAULT NULL,
  `profesi_lainnya` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `tempat_kerja` varchar(64) DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL,
  `riwayat_sd` varchar(50) DEFAULT NULL,
  `riwayat_smp` varchar(50) DEFAULT NULL,
  `riwayat_sma` varchar(50) DEFAULT NULL,
  `riwayat_diploma` varchar(50) DEFAULT NULL,
  `riwayat_s1` varchar(50) DEFAULT NULL,
  `riwayat_s2` varchar(50) DEFAULT NULL,
  `riwayat_s3` varchar(50) DEFAULT NULL,
  `pernah_belajar_ponpes` enum('Pernah','Tidak Pernah','','') DEFAULT NULL,
  `bahasa_indonesia` enum('Pasif','Aktif') DEFAULT NULL,
  `bahasa_arab` enum('Pasif','Aktif') DEFAULT NULL,
  `bahasa_inggris` enum('Pasif','Aktif') DEFAULT NULL,
  `bahasa_lainnya` enum('Pasif','Aktif') DEFAULT NULL,
  `organisasi_lain` text DEFAULT NULL,
  `pas_foto` text DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `surat_rekomendasi` text DEFAULT NULL,
  `status_bayar` varchar(32) DEFAULT NULL,
  `status_approve` varchar(32) DEFAULT NULL,
  `approve_by` varchar(32) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ktam`
--

INSERT INTO `ktam` (`nik`, `nama_lengkap`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status_perkawinan`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kode_pos`, `daerah`, `cabang`, `email`, `nomor_hp`, `profesi`, `profesi_lainnya`, `pekerjaan`, `tempat_kerja`, `pendidikan_terakhir`, `riwayat_sd`, `riwayat_smp`, `riwayat_sma`, `riwayat_diploma`, `riwayat_s1`, `riwayat_s2`, `riwayat_s3`, `pernah_belajar_ponpes`, `bahasa_indonesia`, `bahasa_arab`, `bahasa_inggris`, `bahasa_lainnya`, `organisasi_lain`, `pas_foto`, `bukti_bayar`, `surat_rekomendasi`, `status_bayar`, `status_approve`, `approve_by`, `created_at`) VALUES
(1000239, 'Rio Naditra', 'DR', 'M.PD', 'Semarang', '0000-00-00', 'Laki-laki', 'Belum Menikah', 'jl.cijahe rt 02 rw 01 no 01', '13', '1302', '1302020', '1302020006', '16113', 'Sumatera Barat', '8', 'naditrario@gmail.com', '089513716046', 'Wiraswasta', 'prof lainnya', 'Belum Bekerja', 'PT. DARO DATA', 'SMA', 'SD 1', 'SMP 1', 'SMA 1', 'D1', 'SAINTEK M', 'S2', 'S3', 'Tidak Pernah', 'Aktif', 'Aktif', 'Pasif', 'Pasif', 'ORG LAIN', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-09 21:55:17'),
(567890123, 'Rahmat Hidayat', 'Drs.', 'mpd', 'Medan', '1982-03-30', 'Laki-laki', 'Menikah', 'Jl. Sisingamangaraja 8', 'Sumatera Utara', 'Medan', 'Medan Kota', 'Sei Rengas', '20212', 'Medan Kota', 'Cabang E', 'rahmat@example.com', '081678901234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-09 15:29:01'),
(1234567890, 'Budi Santoso', 'Dr.', 'M.Sc.', 'Jakarta', '1985-07-10', 'Laki-laki', 'Menikah', 'Jl. Merdeka No. 10', 'DKI Jakarta', 'Jakarta', 'Menteng', 'Kebon Sirih', '10110', 'Jakarta Pusat', 'Cabang A', 'budi@example.com', '081234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-09 14:54:05'),
(2147483647, 'Siti Aminah', '', 'S.Kom.', 'Bandung', '1990-02-15', 'Perempuan', 'Belum Menikah', 'Jl. Sudirman No. 15', 'Jawa Barat', 'Bandung', 'Coblong', 'Dago', '40135', 'Bandung Utara', 'Cabang B', 'siti@example.com', '081345678901', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-09 15:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-02-09-120058', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1739102697, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `org_id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pusat` tinyint(1) NOT NULL,
  `wilayah` tinyint(1) NOT NULL,
  `daerah` tinyint(1) NOT NULL,
  `cabang` tinyint(1) NOT NULL,
  `ranting` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`org_id`, `nama`, `pusat`, `wilayah`, `daerah`, `cabang`, `ranting`) VALUES
(1, 'Muhammadiyah', 1, 1, 1, 1, 1),
(2, 'Aisyiyah', 1, 1, 1, 1, 1),
(3, 'Hizzbul Wathan', 1, 1, 1, 1, 1),
(4, 'Pemuda Muhammadiyah', 1, 1, 1, 1, 1),
(5, 'Nasyiatul \'Aisyiyah', 1, 1, 1, 1, 1),
(6, 'Ikatan Mahasiswa Muhammadiyah', 1, 1, 1, 1, 1),
(7, 'Tapak Suci Putra Muhammadiyah', 1, 1, 1, 1, 1),
(8, 'Ikatan Pelajar Muhammadiyah', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi_anggota`
--

CREATE TABLE `organisasi_anggota` (
  `id` int(11) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `org_id` varchar(16) NOT NULL,
  `pusat` tinyint(1) NOT NULL DEFAULT 0,
  `wilayah` tinyint(1) NOT NULL DEFAULT 0,
  `daerah` tinyint(1) NOT NULL DEFAULT 0,
  `cabang` tinyint(1) NOT NULL DEFAULT 0,
  `ranting` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi_anggota`
--

INSERT INTO `organisasi_anggota` (`id`, `nik`, `org_id`, `pusat`, `wilayah`, `daerah`, `cabang`, `ranting`) VALUES
(65, '1000239', '1', 1, 1, 1, 1, 1),
(66, '1000239', '2', 1, 1, 1, 1, 1),
(67, '1000239', '3', 1, 0, 0, 0, 1),
(68, '1000239', '4', 1, 0, 0, 0, 1),
(69, '1000239', '5', 1, 1, 0, 0, 0),
(70, '1000239', '6', 1, 0, 0, 0, 1),
(71, '1000239', '7', 1, 0, 0, 0, 1),
(72, '1000239', '8', 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', '$2y$10$.dKipnvGxMuM5ksX07WS9OJP.Kiu4GimcotIS8oSR/9uWPipUgvUu', 'admin', NULL, NULL),
(2, 'Regular User', 'user@example.com', '$2y$10$W01eeQwegJSw5tGlydvqS.Al2QdxY5wU6AJrpuWOSAAYrIG/gwz8y', 'user', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang_muhammadiyah`
--
ALTER TABLE `cabang_muhammadiyah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ktam`
--
ALTER TABLE `ktam`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `organisasi_anggota`
--
ALTER TABLE `organisasi_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang_muhammadiyah`
--
ALTER TABLE `cabang_muhammadiyah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `org_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organisasi_anggota`
--
ALTER TABLE `organisasi_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
