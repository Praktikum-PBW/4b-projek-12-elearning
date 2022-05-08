-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 07:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(6, '10'),
(7, '11'),
(8, '12');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(50) NOT NULL,
  `nama_pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_pelajaran`) VALUES
(1, 'Matematika'),
(12, 'Biologi'),
(13, 'Kimia'),
(14, 'Bahasa Indonesia'),
(15, 'Bahasa Inggris'),
(16, 'PPKN'),
(18, 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `nip` int(50) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nip`, `kelas_id`, `nama_guru`, `nama_mapel`, `video`, `deskripsi`, `kelas`) VALUES
(1, 12333, 6, 'guruku', 'Matematika', 'istockphoto-915549928-640_adpp_is.mp4', 'Matematika dasar untuk kelas 10', '6'),
(2, 12333, 7, 'guruku', 'Matematika', 'istockphoto-1187389800-640_adpp_is.mp4', 'Materi dasar untuk kelas 11', '7'),
(3, 12333, 8, 'guruku', 'Matematika', 'istockphoto-1220773324-640_adpp_is.mp4', 'Materi dasar untuk kelas 12', '8'),
(12, 12334, 6, 'Hara Juniyar', 'Bahasa Indonesia', 'istockphoto-915549928-640_adpp_is.mp4', 'Materi Bahasa Indonesia kelas 10\r\n', '6'),
(13, 12357, 6, 'Nusa Prasaja', 'Kimia', 'istockphoto-980314170-640_adpp_is.mp4', 'Materi kimia dasar kelas 10\r\n', '6'),
(14, 12356, 6, 'Raka Wijaya', 'Bahasa Inggris', 'istockphoto-1155315977-640_adpp_is.mp4', 'Materi Bahasa Inggris dasar kelas 10\r\n', '6'),
(15, 12336, 6, 'Anjar Fatma', 'Biologi', 'istockphoto-163172080-640_adpp_is.mp4', 'Materi dasar Biologi kelas 10', '6'),
(16, 12346, 6, 'Kartika', 'Fisika', 'istockphoto-473022983-640_adpp_is.mp4', 'Materi dasar fisika kelas 10', '6'),
(17, 12346, 7, 'Kartika', 'Fisika', 'istockphoto-145783610-640_adpp_is.mp4', 'Materi dasar Fisika kelas 11', '7');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(50) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tingkat` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `kelas_id`, `nama`, `email`, `username`, `password`, `tingkat`) VALUES
(8, 6, 'Ardianto Nugroho', 'siswa@gmail.com', 'Ardianto', '7ea584a18bef8c220357fc2ba344d29549aff971', '6'),
(10, 6, 'siswa2', 'siswa2@gmail.com', 'siswa2', '7ea584a18bef8c220357fc2ba344d29549aff971', '6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`, `alamat`) VALUES
(1, 'Ardianto Nugroho', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 'Solo, Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip` int(255) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nama_guru` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`nip`, `mapel_id`, `nama_guru`, `password`, `email`, `nama_mapel`, `alamat`, `foto`) VALUES
(12333, 1, 'guruku', '14687844c1e10d3b37334b983fb9a2ad968b37df', 'guruku@gmail.com', '1', 'Solo', '1.jpg'),
(12334, 14, 'Hara Juniyar', '930dc1fdc26b2c632d43b195a84df06683b935d2', 'hara12@gmail.com', '14', 'Jakarta', '6.jpg'),
(12336, 12, 'Anjar Fatma', '3c799f3f4eaf96c4a207a5318e9ff66154592840', 'anjar@gmail.com', '12', 'Yogyakarta', '2.jpg'),
(12346, 18, 'Kartika', '451024c6ae4569f9aff45e9bac3b873831a91ee0', 'Kartika@gmail.com', '18', 'Medan', 'profile.png'),
(12348, 18, 'Lala Karmila', 'baa5ad721a74eb3dd652136d4e6e67e3dda48dcd', 'Karmila@gmail.com', '18', 'Manado', 'art-hauntington-jzY0KRJopEI-unsplash.jpg'),
(12356, 15, 'Raka Wijaya', '28ac87ae63315371e92701df46137a88f69c41a2', 'raka@gmail.com', '15', 'Jakarta Barat', 'amir-seilsepour-Pc0ToyoR5Xo-unsplash.jpg'),
(12357, 13, 'Nusa Prasaja', 'b6bbfea7f85a2bdbc2527efce41a07767fe85c4d', 'Nusa@gmail.com', '13', 'Karawang', 'ivan-perez-uMYCyYNP4q8-unsplash.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `mapel_id` (`nip`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id_2` (`kelas_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `mapel_id` (`mapel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `nip` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12358;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tb_guru` (`nip`) ON DELETE CASCADE,
  ADD CONSTRAINT `materi_ibfk_2` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE;

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
