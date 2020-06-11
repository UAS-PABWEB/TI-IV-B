-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 01:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplikasi_stok`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `nopenjualan` varchar(20) NOT NULL,
  `tglpenjualan` date NOT NULL,
  `id_produk` int(11) NOT NULL,
  `itemterjual` int(11) NOT NULL,
  `total_penjualan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`nopenjualan`, `tglpenjualan`, `id_produk`, `itemterjual`, `total_penjualan`) VALUES
('PJLN2016110001', '2017-02-08', 16, 8, 160000),
('PJLN2016110008', '2017-02-01', 16, 9, 180000),
('PJLN2018060003', '2018-06-16', 23, 2, 6000),
('PJLN2018060004', '2018-06-16', 25, 2, 60000),
('PJLN2018060005', '2018-06-24', 18, 2, 60000),
('PJLN2018060006', '2018-06-25', 26, 2, 40000),
('PJLN2018060007', '2018-06-26', 16, 1, 20000),
('PJLN2018060008', '2018-06-26', 16, 2, 40000),
('PJLN2020060009', '2020-05-04', 28, 1, 2100000),
('PJLN2020060010', '2020-05-04', 30, 1, 2100000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stokproduk` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `tglmasuk` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stokproduk`, `satuan`, `tglmasuk`) VALUES
(29, 'Redmi Note 8 pro / 64GB', 3320000, 25, 'box', '2020-04-30'),
(30, 'Redmi Note 8 / 64GB', 2100000, 19, 'box', '2020-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` enum('admin','user') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'Risky Amelia', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'fadjar', 'fadjar', 'b39a9f533bb047bb709d1c678edd239a', 'user'),
(9, 'ahmad khotib', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
 ADD PRIMARY KEY (`nopenjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
