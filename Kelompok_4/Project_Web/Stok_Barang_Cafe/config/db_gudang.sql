-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 01:36 PM
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
-- Database: `db_gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama`, `jenis`, `merk`, `harga`, `tgl_masuk`, `deskripsi`, `stok`, `foto`) VALUES
('BR101', 'Susu Krimer', 'Bahan Makanan', 'Bendera', '5000', '2020-06-12', 'Baru', 50, 'SUSU BENDERA.jpg'),
('BR111', 'Cokelat', 'Bahan Makanan', 'Nutella', '32800', '2020-06-03', 'Baru', 25, 'nuttela.jpg'),
('BR202', 'Keju Cheddar', 'Bahan Makanan', 'Kraft', '9800', '2020-06-13', 'Baru', 15, 'kraft.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nim` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`nim`, `username`, `email`, `password`, `name`, `foto`) VALUES
('A2.1400097', 'Rizar', 'rizar97@gmail.com', 'rizar97', 'Rizar Naufal B', 'default.svg'),
('A2.1800000', 'Admin', 'admin@gmail.com', 'admin', 'Admin Stok', 'default.svg'),
('A2.1800014', 'Alif', 'alif14@gmail.com', 'alif14', 'Alif Yudis R', 'default.svg'),
('A2.1800075', 'Krisman', 'krisman75@gmail.com', 'krisman75', 'Krisman Nurslamet', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
