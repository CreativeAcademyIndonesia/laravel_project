-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for perkuliahan
CREATE DATABASE IF NOT EXISTS `perkuliahan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `perkuliahan`;

-- Dumping structure for table perkuliahan.appointment
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mahasiswa` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `dosen` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perkuliahan.appointment: ~2 rows (approximately)
INSERT INTO `appointment` (`id`, `mahasiswa`, `dosen`, `tanggal`, `created_at`, `updated_at`) VALUES
	(2, 'Agus Suganfi', 'andri', '2024-01-13 00:00:00', '2024-01-05 23:07:50', '2024-01-05 23:07:50'),
	(3, 'Agus Suganfi', 'andri', '2024-08-01 00:00:00', '2024-08-02 01:42:24', '2024-08-02 01:42:24');

-- Dumping structure for table perkuliahan.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perkuliahan.dosen: ~1 rows (approximately)
INSERT INTO `dosen` (`id`, `nip`, `nama`, `no_hp`, `created_at`, `updated_at`) VALUES
	(2, '3321', 'andri', '08973785', '2024-01-05 23:07:40', '2024-01-05 23:07:40');

-- Dumping structure for table perkuliahan.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `prodi` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenjang` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `semester` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_hp` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perkuliahan.mahasiswa: ~1 rows (approximately)
INSERT INTO `mahasiswa` (`id`, `nik`, `nama`, `email`, `prodi`, `jenjang`, `semester`, `gender`, `no_hp`, `created_at`, `updated_at`) VALUES
	(3, '332100185', 'Agus Suganfi', 'agus.sugandi95@gmail.com', 'Manajemen', 'S1', '7', 'L', '08814539925', '2024-01-05 22:18:22', '2024-01-05 22:18:22');

-- Dumping structure for table perkuliahan.mata_kuliah
CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_matkul` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perkuliahan.mata_kuliah: ~0 rows (approximately)

-- Dumping structure for table perkuliahan.prodi
CREATE TABLE IF NOT EXISTS `prodi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_prodi` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perkuliahan.prodi: ~0 rows (approximately)

-- Dumping structure for table perkuliahan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '$2y$12$.xhztb7ZelgrS2uneu.r5eap0Hc3QDBbkj9z1/UGSFHzot9HwQcyW',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perkuliahan.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'AGUS SUGANDI', 'agus.sugandi95@gmail.com', 'admin', '$2y$12$gF8pDcbq17rDuVH0ce56T.iZelLUwjjhQQOQOEi9PUFAyH1QSpGBC', '2024-01-05 21:16:20', '2024-01-05 21:16:20');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
