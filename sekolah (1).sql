-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 12:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(40) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `mata_pelajaran` enum('Bahasa Indonesia','Bahasa Inggris','IPA','Matematika') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `no_hp`, `alamat`, `mata_pelajaran`, `foto`) VALUES
(9, 'Cynthia', '+6211222233', '      Batam         ', 'Bahasa Indonesia', 'sejarah-hari-guru-nasional-diperingati-tiap-tanggal-25-november_169.jpeg'),
(10, 'Jhon', '+62112002', '  Batam   ', 'Matematika', 'download (1).jpeg'),
(12, 'Sari', '2000000000', 'Batam', 'IPA', 'download.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `no_hp`, `alamat`, `pekerjaan`, `foto`) VALUES
(1, 'Dawn', '+620000000', '      Batam         ', 'Administrasi', 'images.jpeg'),
(5, 'James', '+620000000', 'Batam', 'Kebersihan', 'download (2).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `vegetarian` enum('Iya','Tidak') NOT NULL,
  `nis` int(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `vegetarian`, `nis`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kelas`, `foto`) VALUES
(10, 'Winrich', 'L', 'Iya', 2222, 'Batam', '2008-04-05', '    Ruko Trafalgar Blok T No.8C Dutamas, Batam 29431 - Indonesia   ', '9', 'foto_2.jpg'),
(11, 'Gary', 'L', 'Iya', 2002, 'Batam', '2008-04-03', '      Batam         ', '8', 'download2.jpeg'),
(14, 'Anita', 'P', 'Iya', 2000, 'Batam', '2010-01-14', '        Perumahan Beverly Blok. A No. 1 Batam Centre            ', '3', '4-strategi-persiapkan-diri-untuk-hadapi-anbk-2022-siswa-harus-tahu-MScLSFRnOc2.jpg'),
(18, 'Dina', 'P', 'Iya', 2000, 'Batam', '2023-01-06', '              Batam               ', '1', 'siswa-smp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'winrich', '11223344'),
(2, 'Haris', '11223344');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
