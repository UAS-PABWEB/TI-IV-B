-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jun 2020 pada 08.29
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polikelinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `kodedokter` varchar(15) NOT NULL,
  `nmdokter` text NOT NULL,
  `almdokter` varchar(30) NOT NULL,
  `telpdokter` int(14) NOT NULL,
  `kodepoll` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kodedokter`, `nmdokter`, `almdokter`, `telpdokter`, `kodepoll`) VALUES
('1', 'Drg.Sinta Manah', 'Cisitu', 0, '102');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalpraktek`
--

CREATE TABLE `jadwalpraktek` (
  `kodejadwal` varchar(20) NOT NULL,
  `hari` text NOT NULL,
  `jammulai` int(15) NOT NULL,
  `jamselesai` int(15) NOT NULL,
  `kodedokter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `kodedokter` varchar(20) NOT NULL,
  `nmdokter` text NOT NULL,
  `namapoll` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisbiaya`
--

CREATE TABLE `jenisbiaya` (
  `idjenisbiaya` varchar(20) NOT NULL,
  `namabiaya` varchar(20) NOT NULL,
  `tarif` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kodeobat` varchar(20) NOT NULL,
  `nmobat` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `satuan` int(15) NOT NULL,
  `hargajual` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `nopasien` int(15) NOT NULL,
  `namapas` text NOT NULL,
  `almpas` varchar(30) NOT NULL,
  `telppas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(20) NOT NULL,
  `namapeg` text NOT NULL,
  `almpeg` varchar(30) NOT NULL,
  `telppeg` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `nopemeriksaan` int(15) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `perawatan` varchar(30) NOT NULL,
  `tindakan` varchar(30) NOT NULL,
  `nopendaftaran` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nopendaftaran` int(15) NOT NULL,
  `tglpendaftaran` int(15) NOT NULL,
  `nourut` int(15) NOT NULL,
  `NI` int(20) NOT NULL,
  `namapeg` text NOT NULL,
  `nopasien` int(15) NOT NULL,
  `kodejadwal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `polikelinik`
--

CREATE TABLE `polikelinik` (
  `kodepoll` int(20) NOT NULL,
  `namapoll` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `polikelinik`
--

INSERT INTO `polikelinik` (`kodepoll`, `namapoll`) VALUES
(102, 'politek sejahtera'),
(103, 'politek nugraha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `noresep` int(15) NOT NULL,
  `dosis` varchar(20) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `kodeobat` varchar(20) NOT NULL,
  `nopemeriksaan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincianbiaya`
--

CREATE TABLE `rincianbiaya` (
  `idrincianbiaya` varchar(30) NOT NULL,
  `idjenisbiaya` varchar(30) NOT NULL,
  `nopendaftaran` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kodedokter`);

--
-- Indexes for table `jadwalpraktek`
--
ALTER TABLE `jadwalpraktek`
  ADD PRIMARY KEY (`kodejadwal`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`kodedokter`);

--
-- Indexes for table `jenisbiaya`
--
ALTER TABLE `jenisbiaya`
  ADD PRIMARY KEY (`idjenisbiaya`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kodeobat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nopasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`nopemeriksaan`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nopendaftaran`);

--
-- Indexes for table `polikelinik`
--
ALTER TABLE `polikelinik`
  ADD PRIMARY KEY (`kodepoll`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`noresep`);

--
-- Indexes for table `rincianbiaya`
--
ALTER TABLE `rincianbiaya`
  ADD PRIMARY KEY (`idrincianbiaya`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
