-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 09:32 AM
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
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan_brg` varchar(225) NOT NULL,
  `kategori_brg` varchar(60) NOT NULL,
  `harga_brg` int(11) NOT NULL,
  `stok_brg` int(4) NOT NULL,
  `gambar_brg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan_brg`, `kategori_brg`, `harga_brg`, `stok_brg`, `gambar_brg`) VALUES
(17, 'Polo Tommy Hillfiger', 'Ukuran Pakaian L', 'Pakaian Pria', 150000, 1, '1.jpg'),
(18, 'Polo Converse', 'Tersedia Ukuran M', 'Pakaian Pria', 130000, 3, '2.jpg'),
(19, 'Polo Simpson', 'Tersedia Ukuran L', 'Pakaian Pria', 200000, 3, '3.jpg'),
(27, 'Polo', 'Tersedia Ukuran XL', 'Pakaian Pria', 120000, 6, '4.jpg'),
(28, 'Polo', 'Tersedia Ukuran M', 'Pakaian Pria', 130000, 11, '5.jpg'),
(29, 'Leqoc', 'Tersedia Ukuran L', 'Pakaian Pria', 125000, 7, 'leqoc.jpg'),
(30, 'Nike', 'Tersedia Ukuran M', 'Pakaian Pria', 130000, 9, 'nike.jpg'),
(31, 'Uniqlo', 'Tersedia Ukuran M', 'Pakaian Pria', 120000, 8, 'uniqlo.jpg'),
(32, 'Uniqlo31', 'Tersedia Ukuran XL', 'Pakaian Pria', 150000, 8, 'uniqlo31.jpg'),
(33, 'Pakaian Wanita', 'Tersedia Ukuran L', 'Pakaian Wanita', 130000, 8, 'cewe.jpg'),
(34, 'Pakaian Wanita', 'Tersedia Ukuran L', 'Pakaian Wanita', 140000, 9, 'cewew.jpg'),
(35, 'Pakaian Wanita', 'Tersedia Ukuran M', 'Pakaian Wanita', 125000, 5, 'cwai.jpg'),
(36, 'Pakaian Anak', 'Tersedia Ukuran M', 'Pakaian Anak', 70000, 5, 'anak.jpg'),
(37, 'Pakaian Anak', 'Tersedia Ukuran M', 'Pakaian Anak', 70000, 8, 'anakk.jpg'),
(38, 'Pakaian Anak', 'Tersedia Ukuran M', 'Pakaian Anak', 70000, 7, 'anakkkk.jpg'),
(39, 'Pakaian Anak', 'Tersedia Ukuran M', 'Pakaian Anak', 100000, 6, 'ank.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(11, 'Jajang Jamaludin', 'dusun kawungluwuk', '2020-06-09 13:00:45', '2020-06-10 13:00:45'),
(12, 'Deyan S', 'Sukatali', '2020-06-09 13:05:32', '2020-06-10 13:05:32'),
(13, 'Jajang Jamaludin', 'dusun kawungluwuk', '2020-06-09 13:44:38', '2020-06-10 13:44:38'),
(14, 'Jajang Jamaludin', 'dusun kawungluwuk', '2020-06-10 12:47:07', '2020-06-11 12:47:07'),
(15, 'hiahsiaiha', 'ajdgajda', '2020-06-10 12:49:03', '2020-06-11 12:49:03'),
(16, 'ajdgada', 'adh3euq', '2020-06-10 13:35:32', '2020-06-11 13:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah_brg` int(3) NOT NULL,
  `harga_brg` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah_brg`, `harga_brg`, `pilihan`) VALUES
(9, 8, 8, 'Laptop Dewa', 1, 680000, ''),
(10, 8, 13, 'Henphone', 1, 245000, ''),
(11, 8, 14, 'Sepatu Boljug', 2, 120000, ''),
(12, 8, 15, 'Sepatu Lagi Dungz', 1, 35000, ''),
(13, 9, 8, 'Laptop Dewa', 3, 680000, ''),
(14, 9, 15, 'Sepatu Lagi Dungz', 1, 35000, ''),
(15, 9, 14, 'Sepatu Boljug', 2, 120000, ''),
(16, 9, 3, 'Kamera', 1, 450000, ''),
(17, 10, 13, 'Henphone', 1, 245000, ''),
(18, 11, 17, 'Polo Tommy Hillfiger', 1, 150000, ''),
(19, 12, 17, 'Polo Tommy Hillfiger', 1, 150000, ''),
(20, 12, 18, 'Polo Converse', 1, 130000, ''),
(21, 13, 18, 'Polo Converse', 1, 130000, ''),
(22, 13, 22, 'Nike', 1, 90000, ''),
(23, 14, 19, 'Polo Simpson', 1, 200000, ''),
(24, 14, 21, 'Leqoc', 1, 120000, ''),
(25, 15, 19, 'Polo Simpson', 1, 200000, ''),
(26, 15, 21, 'Leqoc', 1, 120000, ''),
(27, 16, 17, 'Polo Tommy Hillfiger', 1, 150000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
		UPDATE tb_barang SET stok_brg = stok_brg-NEW.jumlah_brg
    	WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(56) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin123', 1),
(2, 'Bambank Surapadia', 'UcupKucup', '1234321', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
