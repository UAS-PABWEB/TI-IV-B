-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2018 at 09:04 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(3) NOT NULL,
  `nm_anggota` varchar(32) DEFAULT NULL,
  `alamat` text,
  `ttl_anggota` text,
  `status_anggota` varchar(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nm_anggota`, `alamat`, `ttl_anggota`, `status_anggota`) VALUES
(10, 'Dean Opik', 'Karawang', 'Karawang, 20 februari 1998', '1'),
(11, 'Igni Mustofa', 'Banyu Sari', 'Karawang, 10 juni 1999', '1'),
(12, 'irvan', 'kedoya', 'bekasi 20-07-1998', '1');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kd_buku` int(5) NOT NULL,
  `judul_buku` varchar(32) DEFAULT NULL,
  `pengarang` varchar(32) DEFAULT NULL,
  `jenis_buku` varchar(32) DEFAULT NULL,
  `penerbit` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul_buku`, `pengarang`, `jenis_buku`, `penerbit`) VALUES
(1, 'Basis Data', 'Irvan', 'Buku Cetak', 'Yudhistira'),
(2, 'Desain Photoshop', 'Dicky', 'Buku Cetak', 'Yudhistira'),
(3, 'Pemrograman PHP', 'Irvan', 'Buku Cetak', 'Yudhistira');

-- --------------------------------------------------------

--
-- Table structure for table `meminjam`
--

CREATE TABLE IF NOT EXISTS `meminjam` (
  `id_pinjam` int(3) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `jumlah_pinjam` int(2) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `id_anggota` int(3) DEFAULT NULL,
  `kd_buku` varchar(5) DEFAULT NULL,
  `kembali` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meminjam`
--

INSERT INTO `meminjam` (`id_pinjam`, `tgl_pinjam`, `jumlah_pinjam`, `tgl_kembali`, `id_anggota`, `kd_buku`, `kembali`) VALUES
(1, '2015-02-03', 1, '2015-02-04', 2, '12', 2),
(22, '2018-12-11', 1, '2018-12-11', 10, '1', 2),
(12, '2015-02-02', 1, '2015-02-02', 3, '23', 2),
(11, '2015-02-02', 1, '2015-02-02', 6, '12', 2),
(10, '2015-02-02', 1, '2015-02-02', 6, '34', 2),
(9, '2015-02-02', 1, '2015-02-03', 5, '123', 2),
(13, '2015-02-03', 1, '2015-02-03', 3, '34', 2),
(14, '2015-02-03', 1, '2015-02-03', 3, '23', 2),
(24, '2018-12-11', 1, '2018-12-19', 10, '2', 2),
(16, '2015-02-17', 1, '2015-02-17', 8, '200', 2),
(17, '2015-04-28', 1, '2015-04-28', 4, '12', 2),
(18, '2015-04-28', 1, '2015-04-28', 5, '12', 2),
(23, '2018-12-11', 1, '2018-12-11', 11, '2', 2),
(20, '2015-05-11', 1, '2018-12-11', 2, '12', 2),
(28, '2018-12-19', 1, '0000-00-00', 12, '2', 1),
(25, '2018-12-11', 1, '2018-12-11', 11, '3', 2),
(27, '2018-12-11', 1, '2018-12-11', 14, '99', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `meminjam`
--
ALTER TABLE `meminjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `meminjam`
--
ALTER TABLE `meminjam`
  MODIFY `id_pinjam` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
