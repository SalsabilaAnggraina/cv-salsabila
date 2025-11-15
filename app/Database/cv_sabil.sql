-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 10:41 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_sabil`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `github` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `bio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `email`, `github`, `instagram`, `linkedin`, `whatsapp`, `bio`) VALUES
(1, 'Salsabila Anggraina Putri', 'salsabilaanggrainaputri@gmail.com', 'https://github.com/SalsabilaAnggraina', 'https://www.instagram.com/slsblanggrnptr?igsh=bHNsYndybjBrZGN6', 'https://linkedin.com/in/salsabilaangrainaputri/', '6283819249343', 'Mahasiswi Teknik Informatika yang punya ketertarikan besar pada Data Science dan pemecahan masalah berbasis teknologi. Sebagai Wakil Gubernur BEM Fakultas Sains dan Teknologi, aku mengasah kemampuan kepemimpinan, komunikasi, dan berpikir analitis melalui pengelolaan proyek, kolaborasi lintas tim, serta memimpin berbagai inisiatif yang memberi dampak nyata.');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int NOT NULL,
  `nama_keahlian` varchar(100) NOT NULL,
  `level` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id`, `nama_keahlian`, `level`) VALUES
(1, 'Kepemimpinan', 93),
(2, 'Komunikasi Publik', 88),
(3, 'Koordinasi Proyek', 85),
(4, 'Manajemen Organisasi', 84),
(5, 'Kolaborasi Antar Divisi', 80),
(6, 'Pengambilan Keputusan Strategis', 78),
(7, 'CodeIgniter 4', 55),
(8, 'Bootstrap 5 (UI/UX Responsif)', 58),
(9, 'MySQL/MariaDB', 60),
(10, 'UI/UX Design', 73),
(11, 'Kerja Tim', 80),
(12, 'Manajemen Waktu & Multitasking', 80),
(13, 'Kreativitas', 70),
(14, 'Customer Service', 90);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun_masuk` varchar(10) NOT NULL,
  `tahun_lulus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `tingkat`, `institusi`, `jurusan`, `tahun_masuk`, `tahun_lulus`) VALUES
(1, 'SMA', 'SMA Negeri 1 Cicurug', 'Matematika & Ilmu Pengetahuan Alam', '2020', '2023'),
(2, 'S1', 'Universitas Muhammadiyah Sukabumi', 'Teknik Informatika', '2023', 'Sekarang');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama_peran` varchar(255) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `deskripsi` text,
  `tahun_mulai` varchar(10) NOT NULL,
  `tahun_selesai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `jenis`, `nama_peran`, `organisasi`, `deskripsi`, `tahun_mulai`, `tahun_selesai`) VALUES
(1, 'Magang', 'Asisten Dosen', 'Program Studi Sastra Inggris', 'Menyiapkan materi kuliah dan bahan ajar bersama dosen.\n\nMemeriksa penugasan mahasiswa dan memberikan feedback.\n\nMembantu kelancaran administrasi akademik dan mendukung proses belajar-mengajar.', 'Nov 2024', 'March 2025'),
(2, 'Magang', 'Barista Part-time', 'Kopi Merdeka', 'Menyajikan kopi dan minuman berbasis espresso dengan standar kualitas tinggi.\n\nMemberikan pelayanan ramah dan menjaga kepuasan pelanggan.\n\nMenjaga kebersihan dan efisiensi operasional kafe.', 'Feb 2025', 'June 2025'),
(3, 'Organisasi', 'Sekretaris Departemen Kaderisasi', 'HMIF UMMI', 'Mendukung perencanaan dan pelaksanaan program pengembangan mahasiswa dan kepemimpinan. Mengelola dokumentasi rapat, surat menyurat, dan laporan departemen. Berkoordinasi dengan divisi lain untuk memastikan kelancaran komunikasi dan organisasi proyek.', 'Jan 2025', 'Okt 2025'),
(4, 'Komunitas', 'Anggota', 'Remaja Tengah', 'Berkontribusi dalam perencanaan dan pelaksanaan pagelaran teater.\n\nTerlibat dalam penyelenggaraan berbagai event seni lainnya.\n\nBekerja sama dalam tim kreatif untuk menciptakan pengalaman seni yang menarik.', 'Mei 2025', 'sekarang'),
(5, 'Magang', 'Asisten Dosen', 'Program Studi Teknik Informatika', 'Membimbing mahasiswa saat praktikum dan menjelaskan konsep pemrograman.\n\nMemastikan praktikum berjalan lancar dan efektif.\n\nMemberikan bantuan teknis serta klarifikasi materi secara langsung.', 'Oct 2025', 'sekarang'),
(6, 'Organisasi', 'Wakil Gubernur', 'Badan Eksekutif Mahasiswa Fakultas Sains dan Teknologi Universitas Muhammadiyah Sukabumi', 'Memimpin dan mengoordinasikan berbagai program mahasiswa serta inisiatif organisasi di Fakultas Sains dan Teknologi. Bekerja sama dengan ketua departemen untuk memastikan komunikasi yang efektif dan keselarasan tujuan antar divisi. Mengelola perencanaan acara, pengambilan keputusan strategis, dan representasi publik untuk badan mahasiswa.', 'Sep 2025', 'sekarang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
