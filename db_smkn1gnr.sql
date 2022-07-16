-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Jul 2022 pada 05.50
-- Versi server: 5.7.18
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smkn1gnr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `doc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `judul`, `doc`) VALUES
(14, 'Sapu 1', 'item-220705-a61692f48c.jpg'),
(15, 'Monitor 2', 'item-220705-b25410667e.jpg'),
(16, 'Mesin Rumput', 'item-220707-dc35ce28d6.jpg'),
(27, 'Test', 'item-220707-701f414d06.jpg'),
(29, 'Lepi', 'item-220707-bcd1352fc0.jpg'),
(30, 'Monitor', 'item-220708-d010a20466.jpg'),
(31, 'Motor', 'item-220708-092b613f03.jpg'),
(32, 'Motor', 'item-220708-f38451b351.jpg'),
(39, 'Monitor', 'item-220708-a3abbade77.jpg'),
(49, 'Monitor', 'item-220708-cfe0c43ed8.jpg'),
(57, 'Keyboard', NULL),
(58, 'Keyboard', NULL),
(59, 'Sapu 2', NULL),
(60, 'Motor', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `pass`, `nama`) VALUES
(1, 'admin', 'admin123', 'Super Admin'),
(2, 'Hafizh31', '2e9a061caff878f97268441f69fec65b', 'Hafizh Hadiayana Wijaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nm_barang` varchar(50) NOT NULL,
  `no_seri` varchar(50) DEFAULT NULL,
  `jml_barang` int(11) NOT NULL,
  `unit` varchar(30) DEFAULT NULL,
  `kat_barang` varchar(50) NOT NULL,
  `kat_anggaran` varchar(50) NOT NULL,
  `thn_pengadaan` date NOT NULL,
  `penempatan` varchar(50) NOT NULL,
  `doc_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nm_barang`, `no_seri`, `jml_barang`, `unit`, `kat_barang`, `kat_anggaran`, `thn_pengadaan`, `penempatan`, `doc_barang`) VALUES
(1, 'Monitor LCD', '0987654321', 50, NULL, 'Praktik', 'BOS', '2022-07-01', 'Lab', 'item-220707-2b404bca21.jpg'),
(2, 'Laptop Lenovo Yoga', 'LN-SMKN1GNR-001', 5, 'Pcs', 'Praktik', 'BOS', '2022-06-10', 'Lab', 'item-220707-e206d8b6ef.jpg'),
(3, 'Mesin Rumput', 'MSN_RP01', 5, NULL, 'Cunsumable', 'Sekolah', '2022-06-09', 'Gudang', 'item-220707-d7aebc4ab9.jpg'),
(4, 'CPU', 'CPU1_SMKN1GNR, CPU2_SMKN1GNR, CPU3_SMKN1GNR', 3, NULL, 'Elektronik', 'BOS', '2022-04-08', 'Lab', 'item-220707-ed41f1a1e1.jpg'),
(20, 'Barang', '', 5, NULL, 'Cunsumable', '', '2022-07-01', 'Gudang', NULL),
(21, 'Barang', 'MTRP01', 5, NULL, 'Praktik', 'test', '2022-07-01', 'Gudang', NULL),
(22, 'mouse', '', 5, 'Buah', 'test', '', '2022-07-01', 'Lab', NULL),
(23, 'Barang', 'MTRP01', 5, NULL, 'Praktik', 'Sekolah', '2022-07-02', 'Test', NULL),
(24, 'Monitor LCD', '0987654321', 5, NULL, 'Praktik', '', '2022-07-01', 'Lab', NULL),
(25, 'Motor Praktik Honda', '', 5, NULL, 'Elektronik', '', '2022-07-01', 'Lab', 'item-220710-63761a083f.jpg'),
(26, 'Sapu Lidi', '', 5, NULL, 'Cunsumable', '', '2022-07-01', 'Gudang', 'item-220710-434544d52c.jpg'),
(27, 'Monitor LCD', '', 5, NULL, 'Praktik', '', '2022-07-01', 'Lab', 'item-220710-02213b452d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nm_penerima` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_barang`, `tgl_transaksi`, `nm_penerima`, `id_admin`, `keterangan`) VALUES
(1, 2, '2022-07-01', 'Julian', 1, 'Laptop Lenovo Yoga Inventaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(1, 'user', 'user123', 'User'),
(2, 'Kusno', '07bccaa68a1121ecfe48bdd3138833dc', 'Kusno Rahayu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
