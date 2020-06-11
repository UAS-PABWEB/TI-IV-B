-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Jun 2020 pada 15.41
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelsembilan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `NO_DISPOSISI` varchar(16) NOT NULL,
  `NO_AGENDASM` varchar(15) NOT NULL,
  `NO_AGENDADP` varchar(15) NOT NULL,
  `NO_SURAT` varchar(15) NOT NULL,
  `KEPADA` varchar(30) NOT NULL,
  `KETERANGAN` varchar(150) NOT NULL,
  `STATUS_SURAT` varchar(15) NOT NULL,
  `TANGGAPAN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`NO_DISPOSISI`, `NO_AGENDASM`, `NO_AGENDADP`, `NO_SURAT`, `KEPADA`, `KETERANGAN`, `STATUS_SURAT`, `TANGGAPAN`) VALUES
('DP.01', 'SM.01', 'P.01', 'R/039/K/30', 'Ani Azizah', 'Surat undangan pernikahan', 'Dikirim', 'Diterima'),
('DP.02', 'SM.02', 'P.02', 'R/104/M/64', 'Ismi Nurfadilah', 'Surat undangan perlombaan antar SMP', 'Dikirim', 'Ditunda'),
('DP.03', 'SM.03', 'P.03', 'P/064/K/37', 'Lily Amalia', 'Surat penerimaan karyawan', 'Dikirim', 'Dikirim'),
('DP.04', 'SM.04', 'P.04', 'R/621/M/36', 'Yani Nurjannah', 'Surat pemberitahuan rapat kerja kantor Utara', 'Dikirim', 'Ditunda'),
('DP.05', 'SM.05', 'P.05', 'P/634/K/74', 'Omaar Zeinal', 'Surat pribadi', 'Dikirim', 'Diterima'),
('DP.06', 'SM.06', 'P.06', 'R/064/K/37', 'Siska Amalia', 'Surat undangan peresmian toko  baru', 'Dikirim', 'Diterima'),
('DP.07', 'SM.07', 'P.07', 'R/064/K/37', 'Firly Mustika', 'Surat undangan peresmian toko  baru', 'Dikirim', 'Diterima'),
('DP.08', 'SM.08', 'P.08', 'R/485/K/01', 'Hamdani Ridwan', 'Surat pemberitahuan rapat kerja kantor Barat', 'Dikirim', 'Diterima'),
('DP.09', 'SM.09', 'P.09', 'R/066/M/38', 'Wina Mulyana', 'Surat pemberitahuan acara seminar Universitas Timur', 'Dikirim', 'Ditunda'),
('DP.10', 'SM.10', 'P.10', 'P/642/M/24', 'Gilang Nugraha', 'Surat penerimaan Mahasiswa', 'Dikirim', 'Terkirim');

--
-- Trigger `disposisi`
--
DELIMITER $$
CREATE TRIGGER `log_disposisi` BEFORE INSERT ON `disposisi` FOR EACH ROW BEGIN
	INSERT INTO log_disposisi SET NOMOR_DISPOSISI=new.NO_DISPOSISI,
    WAKTU_CATAT=now();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `lap_sk2`
--
CREATE TABLE `lap_sk2` (
`ID` varchar(15)
,`NO_AGENDASK` varchar(15)
,`JENIS_SURAT` varchar(30)
,`TANGGAL_KIRIM` date
,`NO_SURAT` varchar(15)
,`PENGIRIM` varchar(30)
,`PERIHAL` varchar(150)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lap_sm2`
--
CREATE TABLE `lap_sm2` (
`ID` varchar(15)
,`NO_AGENDASM` varchar(15)
,`JENIS_SURAT` varchar(30)
,`TANGGAL_KIRIM` date
,`TANGGAL_TERIMA` date
,`NO_SURAT` varchar(15)
,`PENGIRIM` varchar(30)
,`PERIHAL` varchar(150)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_disposisi`
--

CREATE TABLE `log_disposisi` (
  `NOMOR_DISPOSISI` varchar(15) NOT NULL,
  `WAKTU_CATAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_disposisi`
--

INSERT INTO `log_disposisi` (`NOMOR_DISPOSISI`, `WAKTU_CATAT`) VALUES
('DP.01', '2018-02-12 01:48:04'),
('DP.02', '2018-02-12 02:23:50'),
('DP.03', '2018-02-12 07:10:01'),
('DP.04', '2018-02-12 07:11:34'),
('DP.05', '2018-02-13 06:14:07'),
('DP.06', '2018-02-14 01:03:49'),
('DP.07', '2018-02-14 01:06:07'),
('DP.08', '2018-02-14 01:12:09'),
('DP.09', '2018-02-14 01:14:48'),
('DP.10', '2018-02-14 01:43:59'),
('DP.11', '2018-02-14 06:52:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `ID` varchar(15) NOT NULL,
  `NAMA_DEPAN` varchar(30) NOT NULL,
  `NAMA_BELAKANG` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`ID`, `NAMA_DEPAN`, `NAMA_BELAKANG`, `password`, `username`, `status`) VALUES
('Pet.01', 'Salsabilla', 'Saadah', '123', 'caca', 'Admin'),
('Pet.02', 'Hana', 'Fauziyah', '321', 'hanfa', 'Admin'),
('Pet.03', 'Bima', 'Maulana', '51', 'Beem', 'Admin'),
('Pet.04', 'Vergin', 'Herlangga', '32', 'vhiee', 'Admin'),
('Pet.05', 'Lambang', 'Permana', '64', 'bambang', 'User'),
('Pet.06', 'Rio', 'Hendra', '65', 'riot', 'Admin'),
('Pet.07', 'Sita', 'Yusnia', '346', 'sitey', 'Admin'),
('Pet.08', 'Ifah', 'Latifah', '35466', 'ipah', 'User'),
('Pet.09', 'Indra', 'Rimbawan', '12365', 'inbawan', 'User'),
('Pet.10', 'Siti', 'Fatimah', '387', 'patim', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `NO_AGENDASK` varchar(15) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `JENIS_SURAT` varchar(30) NOT NULL,
  `TANGGAL_KIRIM` date NOT NULL,
  `NO_SURAT` varchar(15) NOT NULL,
  `PENGIRIM` varchar(30) NOT NULL,
  `PERIHAL` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`NO_AGENDASK`, `ID`, `JENIS_SURAT`, `TANGGAL_KIRIM`, `NO_SURAT`, `PENGIRIM`, `PERIHAL`) VALUES
('SK.01', 'Pet.01', 'Pribadi', '2018-02-01', 'P/013/K/01', 'Tita Nurasyifa', 'Surat Pribadi'),
('SK.02', 'Pet.02', 'Pribadi', '2018-02-10', 'P/034/K/78', 'Rita Nurlaila', 'Surat pribadi'),
('SK.03', 'Pet.03', 'Resmi', '2018-02-08', 'R/064/K/37', 'Lila Rosita', 'Surat undangan peresmian toko baru'),
('SK.04', 'Pet.04', 'Pribadi', '2018-02-17', 'P/634/K/74', 'Rosita', 'Surat Pribadi'),
('SK.05', 'Pet.05', 'Pribadi', '2018-02-09', 'P/064/K/37', 'Gunther Bow', 'Surat penerimaan karyawan'),
('SK.06', 'Pet.06', 'Resmi', '2018-02-01', 'R/039/K/30', 'Deva ', 'Surat undangan pernikahan'),
('SK.07', 'Pet.07', 'Pribadi', '2018-02-15', 'P/842/K/31', 'Kaka Bachteriawan', 'Surat izin cuti kerja'),
('SK.08', 'Pet.08', 'Pribadi', '2018-02-16', 'P/369/K/48', 'Gege Dian', 'Surat Pribadi'),
('SK.09', 'Pet.09', 'Resmi', '2018-02-27', 'R/485/K/01', 'Mahmud Toyib', 'Surat pemberitahuan rapat kerja kantor Barat'),
('SK.10', 'Pet.10', 'Pribadi', '2018-02-20', 'P/877/K/45', 'Hilmi Fauzi', 'Surat Pribadi'),
('SK.12', 'Pet.05', 'Resmi', '2018-02-14', 'R/035/K/54', 'Firly', 'Surat undangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `NO_AGENDASM` varchar(15) NOT NULL,
  `ID` varchar(15) NOT NULL,
  `JENIS_SURAT` varchar(30) NOT NULL,
  `TANGGAL_KIRIM` date NOT NULL,
  `TANGGAL_TERIMA` date NOT NULL,
  `NO_SURAT` varchar(15) NOT NULL,
  `PENGIRIM` varchar(30) NOT NULL,
  `PERIHAL` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`NO_AGENDASM`, `ID`, `JENIS_SURAT`, `TANGGAL_KIRIM`, `TANGGAL_TERIMA`, `NO_SURAT`, `PENGIRIM`, `PERIHAL`) VALUES
('SM.01', 'Pet.01', 'Resmi', '2018-02-16', '2018-02-16', 'R/067/M/36', 'Mauidhah', 'Surat undangan pernikahan'),
('SM.02', 'Pet.02', 'Pribadi', '2018-02-24', '2018-02-25', 'P/049/M/35', 'Tiyan Numboro', 'Surat keterangan sakit'),
('SM.03', 'Pet.03', 'Resmi', '2018-02-08', '2018-02-09', 'R/034/M/45', 'Olla Puspita', 'Surat pemberitahuan acara seminar Universitas Timur'),
('SM.04', 'Pet.04', 'Resmi', '2018-02-08', '2018-02-09', 'R/066/M/38', 'Graha Bintang ', 'Surat pemberitahuan Universitas'),
('SM.05', 'Pet.05', 'Resmi', '2018-02-08', '2018-02-09', 'R/065/M/17', 'Olla Puspita', 'Surat pemberitahuan Universitas'),
('SM.06', 'Pet.06', 'Pribadi', '2018-02-22', '2018-02-22', 'P/652/M/32', 'Popy Milia', 'Surat keterangan sakit'),
('SM.07', 'Pet.07', 'Resmi', '2018-02-23', '2018-02-24', 'R/104/M/64', 'Gina Ulmiyati', 'Surat undangan perlombaan antar SMP'),
('SM.09', 'Pet.09', 'Pribadi', '2018-02-16', '2018-02-17', 'P/642/M/24', 'Itny Khairina', 'Surat penerimaan mahasiswa'),
('SM.10', 'Pet.10', 'Resmi', '2018-02-23', '2018-02-24', 'R/621/M/36', 'Lola Bellen', 'Surat pemberitahuan rapat kerja kantor Utara'),
('SM.11', 'Pet.07', 'Pribadi', '2018-02-15', '2018-02-16', 'P/035/M/65', 'Susilawati', 'Surat pribadi'),
('SM.12', 'Pet.08', 'Pribadi', '2018-02-08', '2018-02-16', 'P/645/M/97', 'Lily Mia', 'Surat pribadi');

-- --------------------------------------------------------

--
-- Struktur untuk view `lap_sk2`
--
DROP TABLE IF EXISTS `lap_sk2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_sk2`  AS  select `petugas`.`ID` AS `ID`,`surat_keluar`.`NO_AGENDASK` AS `NO_AGENDASK`,`surat_keluar`.`JENIS_SURAT` AS `JENIS_SURAT`,`surat_keluar`.`TANGGAL_KIRIM` AS `TANGGAL_KIRIM`,`surat_keluar`.`NO_SURAT` AS `NO_SURAT`,`surat_keluar`.`PENGIRIM` AS `PENGIRIM`,`surat_keluar`.`PERIHAL` AS `PERIHAL` from (`petugas` join `surat_keluar`) where (`petugas`.`ID` = `surat_keluar`.`ID`) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `lap_sm2`
--
DROP TABLE IF EXISTS `lap_sm2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_sm2`  AS  select `petugas`.`ID` AS `ID`,`surat_masuk`.`NO_AGENDASM` AS `NO_AGENDASM`,`surat_masuk`.`JENIS_SURAT` AS `JENIS_SURAT`,`surat_masuk`.`TANGGAL_KIRIM` AS `TANGGAL_KIRIM`,`surat_masuk`.`TANGGAL_TERIMA` AS `TANGGAL_TERIMA`,`surat_masuk`.`NO_SURAT` AS `NO_SURAT`,`surat_masuk`.`PENGIRIM` AS `PENGIRIM`,`surat_masuk`.`PERIHAL` AS `PERIHAL` from (`petugas` join `surat_masuk`) where (`petugas`.`ID` = `surat_masuk`.`ID`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`NO_DISPOSISI`),
  ADD KEY `NO_AGENDASM` (`NO_AGENDASM`);

--
-- Indexes for table `log_disposisi`
--
ALTER TABLE `log_disposisi`
  ADD PRIMARY KEY (`NOMOR_DISPOSISI`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`NO_AGENDASK`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`NO_AGENDASM`),
  ADD KEY `ID` (`ID`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `petugas` (`ID`);

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `petugas` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
