-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 07:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_persuratan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_masyarakat`
--

CREATE TABLE `data_masyarakat` (
  `id_user` int(5) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `no_kk` varchar(17) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `jenkel` enum('P','L') NOT NULL,
  `status_keluarga` varchar(30) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_masyarakat`
--

INSERT INTO `data_masyarakat` (`id_user`, `nik`, `no_kk`, `nama`, `tempat_lhr`, `tanggal_lhr`, `jenkel`, `status_keluarga`, `status_perkawinan`, `nama_ortu`, `alamat`, `agama`, `pekerjaan`) VALUES
(2, '12787987682392987', '12787987682392977', 'Phadma Sadna P', 'Malang', '2020-05-30', 'L', 'Anak Kandung', 'Kawin', '', 'Lowokwaru', 'Buddha', 'Junior Programmer'),
(3, '78690887908600820', '00009088790860111', 'Rihanna', 'Malang', '2020-05-11', 'P', 'Anak Kandung', 'Kawin', '', 'hjksalasd', 'Islam', 'asa'),
(4, '00087987682392222', '00087987682392222', 'Reemar', 'Ambon', '2020-05-29', 'P', 'Anak Pungut', 'Janda', 'Reemar\'s Dad', 'Jl Pisang Ambon No. 21', 'Konghucu', 'Ibu Rumah Tangga');

-- --------------------------------------------------------

--
-- Table structure for table `data_permintaan_surat`
--

CREATE TABLE `data_permintaan_surat` (
  `id_permintaan` int(5) NOT NULL,
  `keperluan` int(3) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tgl_buat` date NOT NULL,
  `nik_pembuat` varchar(17) NOT NULL,
  `ket_1` text NOT NULL,
  `ket_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_permintaan_surat`
--

INSERT INTO `data_permintaan_surat` (`id_permintaan`, `keperluan`, `no_surat`, `tgl_buat`, `nik_pembuat`, `ket_1`, `ket_2`) VALUES
(0, 1, '03/SKM/2/20200203.n', '2020-05-30', '78690887908600820', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. ');

-- --------------------------------------------------------

--
-- Table structure for table `data_surat`
--

CREATE TABLE `data_surat` (
  `id_surat` int(5) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_surat`
--

INSERT INTO `data_surat` (`id_surat`, `jenis`, `keterangan`) VALUES
(1, 'Surat Keterangan Kemiskinan', 'TIDAK MAMPU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_masyarakat`
--
ALTER TABLE `data_masyarakat`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `data_permintaan_surat`
--
ALTER TABLE `data_permintaan_surat`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `keperluan` (`keperluan`),
  ADD KEY `nik_pembuat` (`nik_pembuat`);

--
-- Indexes for table `data_surat`
--
ALTER TABLE `data_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_masyarakat`
--
ALTER TABLE `data_masyarakat`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_permintaan_surat`
--
ALTER TABLE `data_permintaan_surat`
  ADD CONSTRAINT `data_permintaan_surat_ibfk_1` FOREIGN KEY (`keperluan`) REFERENCES `data_surat` (`id_surat`),
  ADD CONSTRAINT `data_permintaan_surat_ibfk_2` FOREIGN KEY (`nik_pembuat`) REFERENCES `data_masyarakat` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
