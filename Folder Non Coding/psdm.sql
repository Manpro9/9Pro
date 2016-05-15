-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 06:07 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `description`, `image`, `type`, `content`, `status`, `created_at`, `updated_at`) VALUES
(41, 'Pembekalan Pegawai Akademik (PA) dan Pegawai Pendukung Akademik (PPA) UKDW 2015', 'Pengenalan terhadap visi dan misi serta sejarah singkat UKDW kepada para pegawai yang baru  yang akan bekerja di Universitas Kristen Duta Wacana.', '\\public\\images\\ukdw_icon.jpg', 'kegiatan', '<p>Kegiatan ini berlangsung dengan lancar selama 3 hari di &nbsp;Ruang Harun 9-10 Juli 2015 dari Pkl. 09.00 - selesai.<br></p>', 'published', '2016-05-10 03:15:32', '2016-05-10 03:15:53'),
(42, 'Pelatihan Bahasa Inggris oleh PPA 3-14 Agustus 2015', 'Kegiatan ini dilaksanakan untuk membuat para pegawai UKDW dapat berbahasa inggris baik dan benar', '\\public\\images\\kegiatan\\kegiatan_pelatihan-bahasa-inggris-oleh-ppa-3-14-agustus-2015.jpg', 'kegiatan', '<p>Kegiatan ini dilaksana selama 2 minggu dibawah mentor dosen Theodora Septiani H. S.Pd. dan Andreas Winardi M.A.,</p>', 'published', '2016-05-10 03:21:19', '2016-05-10 03:21:19'),
(43, 'UKDW Raih Hibah Tracer Study 2016', 'Karena Track Record Karir alumni UKDW sangat baik, maka oleh sebab itu mendapat Tracer Study', '\\public\\images\\ukdw_icon.jpg', 'berita', '<p style="text-indent: 30px; font-family: Arial, Calibri, Helvetica, sans-serif; font-size: 12px; line-height: 21px; text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Berdasarkan surat Direktorat Jenderal Pembelajaran dan Kemahasiswaan nomor 81.B.B3/II/2016 tanggal 12 Februari 2016 perihal tawaran bantuan Pusat Karir dan Pusat Karir Lanjutan&nbsp;<i>(Tracer Study)&nbsp;</i>tahun 2016, Direktorat Kemahasiswaan, Ditjen Belmawa, telah menerima sejumlah 481 proposal. Dari hasil seleksi dan evaluasi telah ditentukan 276 proposal dari Perguruan Tinggi yang akan dibantu sesuai dengan Surat Keputusan (SK) Direktur Jenderal Pembelajaran dan Kemahasiswaan, Kemenristekdikti nomor: 009/B1/SK/2016 tanggal 22 April 2016 tentang Penetapan Perguruan Tinggi Penerima Bantuan Pengembangan Layanan Pusat Karir dan Pusat Karir Lanjutan&nbsp;<i>(Tracer Study</i>&nbsp;).</span></p><p style="text-indent: 30px; font-family: Arial, Calibri, Helvetica, sans-serif; font-size: 12px; line-height: 21px; text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">UKDW tahun 2016 ini menerima lagi bantuan Hibah Tracer Study tersebut. Tim pelaksana Tracer Study ini dibawah koordinasi Kepala PPKPK, ibu Ambar Kusuma Astuti.</span></p><p style="text-indent: 30px; font-family: Arial, Calibri, Helvetica, sans-serif; font-size: 12px; line-height: 21px; text-align: justify;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Tracer study ditujukan untuk melacak jejak lulusan/alumni yang dilakukan 2 tahun setelah lulus dan bertujuan untuk mengetahui:<br><br>a. Outcome pendidikan dalam bentuk transisi dari dunia pendidikan tinggi ke dunia kerja (termasuk masa tunggu kerja dan proses pencarian kerja pertama), situasi kerja terakhir, dan aplikasi kompetensi di dunia kerja.&nbsp;<br>b. Output pendidikan yaitu penilaian diri terhadap penguasaan dan pemerolehan kompetensi.<br>c. Proses pendidikan berupa evaluasi proses pembelajaran dan kontribusi pendidikan tinggi terhadap pemerolehan kompetensi.<br><br>Hasil tracer study akan membantu PT dalam mengetahui posisi lulusan yang telah terserap dalam dunia kerja serta menyiapkan lulusan sesuai dengan kompetansi yang diperlukan di dunia kerja. Hasil tracer study yang kemudian dilaporkan ke Dikti akan membantu program Pemerintah dalam rangka memetakan kebutuhan dunia kerja dengan pembangunan pendidikan di Indonesia.&nbsp;</span><span style="font-family: arial, helvetica, sans-serif; font-size: small;">(Sumber:&nbsp;<a href="http://tracerstudy.dikti.go.id/" target="_blank" style="color: rgb(93, 27, 43); text-decoration: underline;">http://tracerstudy.dikti.go.id/</a>)</span></p>', 'published', '2016-05-10 03:35:08', '2016-05-10 03:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `type`, `description`, `path`, `created_at`, `updated_at`) VALUES
(1, 'Tugas dan Fungsi Unit di UKDW', 'pdf', 'Berisi secara detail tugas dan fungsi dari tiap-tiap unit yang ada di Universitas Kristen Duta Wacana', 'public\\documents\\Tugas dan Fungsi Unit di UKDW.pdf', '2016-05-10 03:22:47', '2016-05-10 03:22:47'),
(2, 'Jadwal - Pelatihan Bahasa Inggris - 3-14 Agustus 2015', 'pdf', 'Aturan waktu setiap kegiatan Pelatihan Bahasa Inggris', 'public\\documents\\Jadwal - Pelatihan Bahasa Inggris - 3-14 Agustus 2015.pdf', '2016-05-10 03:24:31', '2016-05-10 03:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_15_145634_create_table_artikel', 1),
('2016_05_05_185519_create_table_documents', 1),
('2016_05_07_125004_create_table_comments', 1),
('2016_05_08_034107_create_table_agenda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `auth_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin PSDM', 'Admin', 'admin@admin.com', '$2y$10$RVtvZCCvKAoDpEkbs9YgmuS7nulJNKs3qfDrIF19DQb3dhpxeAZtS', 1, 'Lr7IMwrjCHb3xAQi4GSVT419RgIDe6c6qeRUMAcFIJsE2pH252SoQrJZjbM6', '2016-05-09 22:31:59', '2016-05-10 03:43:37'),
(2, '1', 'Username 1', '1@1.com', '$2y$10$TbSY0DB4fpz0fLvT.80VVuTznVU8CULZrdEGAJkDbzR9daVSCvwX6', 2, NULL, '2016-05-09 22:31:59', '2016-05-09 22:31:59'),
(3, '2', 'Username 2', '2@2.com', '$2y$10$LI6u.3hGaqvbqoz9VH8H6efhztynUihcnUt.lhkPZNU2AuTsh19X2', 2, NULL, '2016-05-09 22:31:59', '2016-05-09 22:31:59'),
(4, '3', 'Username 3', '3@3.com', '$2y$10$z.TgWa29cx6JxlHVCH93Ku3iDZtzsXT.eD5.e7YQJd7WElCfJiWiW', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(5, '4', 'Username 4', '4@4.com', '$2y$10$Ygi0bI.gfasWnKUGIUPli.jl8LD9Zfgd5M6tprrcC61q5AqXKX3DG', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(6, '5', 'Username 5', '5@5.com', '$2y$10$SNLcCT9g2mK9ScV7lCNL3OYb5f5RN4mTCa1KKITiYzNI4mZnkC.By', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(7, '6', 'Username 6', '6@6.com', '$2y$10$dcduuUHfYziVgSHPZhogLOw0vMKiEWTBJ8rT3/jJpYIr4569CJNhG', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(8, '7', 'Username 7', '7@7.com', '$2y$10$1IZhrLyiqisHPtqvD3/UGOIEgMZRU5UpjuslvXe8v55.NvxCtYrU.', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(9, '8', 'Username 8', '8@8.com', '$2y$10$a0v0E2ov5ioWee3ch.jxLOVelS2tyVXc9b.V/W7bAFSkM7Sw/xZJ2', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(10, '9', 'Username 9', '9@9.com', '$2y$10$ZEB22/.U9dx6jBKuby4Dg.j51TI/kW8E/5l5GrZuKoP3XDiy3SoM2', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(11, '10', 'Username 10', '10@10.com', '$2y$10$LZGtSppUYk2teAW1TOTrzusW.db0EwJdekLW6CJ7uIkT/iAYAmLbu', 2, NULL, '2016-05-09 22:32:00', '2016-05-09 22:32:00'),
(12, '11', 'Username 11', '11@11.com', '$2y$10$d2V8n41bpI9nY0.A8yNEIuLhfWQvRRGTjXqKgH6OHglkHzTw/2iUa', 2, NULL, '2016-05-09 22:32:01', '2016-05-09 22:32:01'),
(13, '12', 'Username 12', '12@12.com', '$2y$10$Ar1RuFAB7Ej2ptDnsDZdN.ztX1qh2YkxXYyeGqzC4c0Ub.xIQjzYu', 2, NULL, '2016-05-09 22:32:01', '2016-05-09 22:32:01'),
(14, '13', 'Username 13', '13@13.com', '$2y$10$6jwqPyVbubvYlKb4O5aNx.209S6kdCjBh3liXqcJZ6qgu8AAGXApG', 2, NULL, '2016-05-09 22:32:01', '2016-05-09 22:32:01'),
(15, '14', 'Username 14', '14@14.com', '$2y$10$MkTCFEnjM/Iq/sBFJ6U1t.ZnzvEQ9vLrtQpsfVIL6/hXT8Ubxv4HG', 2, NULL, '2016-05-09 22:32:01', '2016-05-09 22:32:01'),
(16, '15', 'Username 15', '15@15.com', '$2y$10$tTRyP2XsqkfO16o9721IHOt8oUZsBWbn5wgckgSxQGF8FdaxK5yV6', 2, NULL, '2016-05-09 22:32:01', '2016-05-09 22:32:01'),
(17, '16', 'Username 16', '16@16.com', '$2y$10$4I9qVBaGjM2qMY92132ss.eJhJ2ZaFsF4p0dgb5Gkd58keuBVc.jO', 2, NULL, '2016-05-09 22:32:02', '2016-05-09 22:32:02'),
(18, '17', 'Username 17', '17@17.com', '$2y$10$YPiwPW5dbP9.2bbSdIPPWe5.89Vg/C8Ts6DC7T5OxJSUC68ANvria', 2, NULL, '2016-05-09 22:32:02', '2016-05-09 22:32:02'),
(19, '18', 'Username 18', '18@18.com', '$2y$10$xI1llrfNIIQn/IYB8Y5Un.o.bBfmIGI5lRYZ4OIQsJxf3LNE77F02', 2, NULL, '2016-05-09 22:32:02', '2016-05-09 22:32:02'),
(20, '19', 'Username 19', '19@19.com', '$2y$10$IpWvqsR5EbCffZb6neI0guQk.4gmkGefIKZJ/cXtXMT4cnkwPYWgW', 2, NULL, '2016-05-09 22:32:03', '2016-05-09 22:32:03'),
(21, '20', 'Username 20', '20@20.com', '$2y$10$knjEugPnl4809hDYw.N/z.aX.lecM3ZeY06Id9MHzI5IDlLG9yyxG', 2, NULL, '2016-05-09 22:32:03', '2016-05-09 22:32:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_artikel_id_index` (`artikel_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
