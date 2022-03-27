-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.6.4-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sikemas1
CREATE DATABASE IF NOT EXISTS `sikemas1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sikemas1`;

-- Dumping structure for table sikemas1.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `opd_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.categories: ~23 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `opd_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Biodata Kependudukan', 'biodata-kependudukan', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(2, 1, 'Pelayanan Cetak Akta Kelahiran', 'pelayanan-cetak-akta-kelahiran', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(3, 1, 'Pelayanan Cetak Akta Kematian', 'pelayanan-cetak-akta-kematian', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(4, 1, 'Pelayanan Cetak Akta Perkawinan', 'pelayanan-cetak-akta-perkawinan', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(5, 1, 'Pelayanan Cetak Akta Perceraian', 'pelayanan-cetak-akta-perceraian', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(6, 2, 'Pelayanan Izin Mendirikan Perusahaan Angkutan Umum Orang', 'pelayanan-izin-mendirikan-perusahaan-angkutan-umum-orang', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(7, 2, 'Pelayanan Izin Trayek Angkutan Kode', 'pelayanan-izin-trayek', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(8, 2, 'Pelayanan Pengujian Kendaraan Bermotor', 'pelayanan-pengujian-kendaraan-bermotor', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(9, 3, 'Administrasi Surat Keluar', 'Administrasi Surat Keluar', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(10, 3, 'Administrasi Surat Masuk', 'Administrasi Surat Masuk', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(11, 3, 'Baliho/Spanduk', 'Baliho/Spanduk', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(12, 3, 'Data dan Informasi Akses Publik', 'Data dan Informasi Akses Publik', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(13, 3, 'Peliputan Berita', 'Peliputan Berita', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(14, 4, 'Informasi Kinerja Pengelolaan Lingkungan Hidup Daerah (KPLHD)', 'Informasi Kinerja Pengelolaan Lingkungan Hidup Daerah (KPLHD)', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(15, 4, 'Pengaduan dan Penyelesaian Sengketa Lingkungan Hidup', 'Pengaduan dan Penyelesaian Sengketa Lingkungan Hidup', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(16, 4, 'Rekomendasi Izin Lingkungan', 'Rekomendasi Izin Lingkungan', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(17, 4, 'Rekomendasi Izin Pembuangan Limbah Cair', 'Rekomendasi Izin Pembuangan Limbah Cair', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(18, 4, 'Rekomendasi Izin Tempat Penyimpanan Sementara Limbah Berbahaya dan Beracun', 'Rekomendasi Izin Tempat Penyimpanan Sementara Limbah Berbahaya dan Beracun', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(19, 5, 'Bus Sekolah', 'bus-sekolah', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(20, 5, 'DAPODIK', 'dapodik', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(21, 5, 'Pensiun', 'pensiun', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(22, 5, 'Kenaikan Pangkat', 'kenaikan-pangkat', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(23, 5, 'Pengesahan Potocopy Izasah', 'pengesahan-potocopy-izasah', '2021-11-08 13:04:03', '2021-11-08 13:04:03');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table sikemas1.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table sikemas1.infokeluhans
CREATE TABLE IF NOT EXISTS `infokeluhans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `opd_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `infokeluhans_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.infokeluhans: ~7 rows (approximately)
/*!40000 ALTER TABLE `infokeluhans` DISABLE KEYS */;
INSERT INTO `infokeluhans` (`id`, `opd_id`, `category_id`, `user_id`, `subject`, `slug`, `body`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 'Perihal Biodata', 'perihal-biodata', 'Saya mengalami keluhan pada perihal biodata yang bermasalah..........', '2021-11-08 13:04:03', '2021-11-08 13:04:03'),
	(2, 1, 2, 2, 'Perihal akta lahir', 'perihal-aktalahor', 'Saya mengalami keluhan pada perihal akta kelahir yang bermasalah..........', '2021-11-08 13:04:03', '2021-11-08 13:04:03'),
	(3, 1, 3, 1, 'Perihal akta kematian', 'perihal-akta-lematian', 'Saya mengalami keluhan pada perihal akta kematian yang bermasalah..........', '2021-11-08 13:04:03', '2021-11-08 13:04:03'),
	(4, 1, 4, 2, 'Perihal akta Perkawaninan', 'perihal-akta-perkawinan', 'Saya mengalami keluhan pada perihal akta perkawinan yang bermasalah..........', '2021-11-08 13:04:03', '2021-11-08 13:04:03'),
	(5, 1, 5, 1, 'Perihal akta lahir', 'perihala-akta-perceraian', 'Saya mengalami keluhan pada perihal akta perceraian yang bermasalah..........', '2021-11-08 13:04:03', '2021-11-08 13:04:03'),
	(6, 1, 6, 2, 'Perihal Cetak kk', 'perihal-cetak-KK', 'Saya mengalami keluhan pada perihal kartu keluarga yang bermasalah..........', '2021-11-08 13:04:03', '2021-11-08 13:04:03'),
	(7, 1, 7, 1, 'Perihal cetak ktp', 'perihal-cetak-ktp', 'Saya mengalami keluhan pada perihal ktp yang bermasalah..........', '2021-11-08 13:04:03', '2021-11-08 13:04:03');
/*!40000 ALTER TABLE `infokeluhans` ENABLE KEYS */;

-- Dumping structure for table sikemas1.kuesioner
CREATE TABLE IF NOT EXISTS `kuesioner` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opd_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `A1` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A2` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A3` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A4` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `A5` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.kuesioner: ~0 rows (approximately)
/*!40000 ALTER TABLE `kuesioner` DISABLE KEYS */;
/*!40000 ALTER TABLE `kuesioner` ENABLE KEYS */;

-- Dumping structure for table sikemas1.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_10_05_021646_create_infokeluhans_table', 1),
	(6, '2021_10_05_023327_create_categories_table', 1),
	(7, '2021_10_21_032609_create_opds_table', 1),
	(8, '2021_10_21_155741_create_table_kuesioner', 1),
	(9, '2021_10_22_022755_add_is_admin_to_users_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table sikemas1.opds
CREATE TABLE IF NOT EXISTS `opds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `opds_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.opds: ~6 rows (approximately)
/*!40000 ALTER TABLE `opds` DISABLE KEYS */;
INSERT INTO `opds` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Dinas Kependudukan dan Catatan Sipil', 'dinas-kependudukan-dan-catatan-sipil', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(2, 'Dinas Perhubungan', 'dinas-perhubungan', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(3, 'Dinas Komunikasi dan Informatika', 'dinas-komuikasi-dan-informatika', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(4, 'Dinas Kesehatan', 'dinas-kesehatan', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(5, 'Dinas Lingkungan Hidup', 'dinas-lingkungan-hidup', '2021-11-08 13:04:02', '2021-11-08 13:04:02'),
	(6, 'Dinas Pendidikan dan Kebudayaan', 'dinas-pendidikan-dan-kebudayaan', '2021-11-08 13:04:02', '2021-11-08 13:04:02');
/*!40000 ALTER TABLE `opds` ENABLE KEYS */;

-- Dumping structure for table sikemas1.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table sikemas1.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table sikemas1.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sikemas1.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `name`, `address`, `nik`, `phonenumber`, `gender`, `image`, `created_at`, `updated_at`, `is_admin`) VALUES
	(1, 'anju@gmail.com', NULL, '$2y$10$HO5aRe7nnMkJsOaaAEEivOfA8Ne94/zy/6tAN0o5caqj9fa.ZioA.', 'Masyarakat', 'Anju Ucok Lubis', 'balige', '1209845764814567', '081256754677', 'laki-laki', 'default.jpg', '2021-11-08 13:04:02', '2021-11-08 13:04:02', 0),
	(2, 'anugerah@gmail.com', NULL, '$2y$10$bcGMV7F2bwpyJl6WHcT/JeZCxYtcTPcaxBi.gkKB30jjdI55y9td2', 'Masyarakat', 'Anugerah Simanjuntak', 'Medan', '1353567534566545', '081264567897', 'laki-laki', 'default.jpg', '2021-11-08 13:04:02', '2021-11-08 13:04:02', 0),
	(3, 'marwani@gmail.com', NULL, '$2y$10$HGTIy05wdWknnJdUQtukhOYcYqQbpEumP.EIKH5ivs8s/YD8s4cOa', 'Masyarakat', 'Marwani Napitupulu', 'Siantar', '123456435675431234', '081265678976', 'Perempuan', 'default.jpg', '2021-11-08 13:04:02', '2021-11-08 13:04:02', 0),
	(4, 'agnes@gmail.com', NULL, '$2y$10$.z0KHSMWayIGqN33Ii06aOmF1USqQCvFlXOHBJC8LxCOm0JO3ir/O', 'Masyarakat', 'Agnes Lumbantobing', 'Dolok Sanggul', '1235643564353456', '081245612345', 'Perempuan', 'default.jpg', '2021-11-08 13:04:02', '2021-11-08 13:04:02', 0),
	(5, 'agustina@gmail.com', NULL, '$2y$10$ia5e5XjMDYNSQKspeR7YNugiPIpyl3wrmMG.E223hbvP14HzGX2z2', 'Masyarakat', 'Agustina Hasibuan', 'Laguboti', '120988765678655677', '081256787653', 'Perempuan', 'default.jpg', '2021-11-08 13:04:02', '2021-11-08 13:04:02', 0),
	(6, 'admin@gmail.com', NULL, '$2y$10$nAWGvlbL2hKZv8AzEB1GZeqRA1PumkAqgIMW3FXOPcxlV.axy84Dq', 'Admin', 'Admin Sikemas', 'Laguboti', '1216060601231234', '084567657890', 'Perempuan', 'default.jpg', '2021-11-08 13:04:02', '2021-11-08 13:04:02', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
