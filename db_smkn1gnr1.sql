-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2022 at 09:18 AM
-- Server version: 5.7.18
-- PHP Version: 7.4.19

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `doc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
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
(62, 'Motor', NULL),
(63, 'sds', ''),
(64, 'sdfsd', ''),
(65, 'asdasds', NULL),
(66, 'addasds', ''),
(67, 'asdasd', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `pass`, `nama`) VALUES
(2, 'Hafizh31', '6feff5b478b92cd4efd0bc567ef73ff1', 'Hafizh Hadiayana Wijaya'),
(6, 'Admin Lab', 'e10adc3949ba59abbe56e057f20f883e', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arsip`
--

CREATE TABLE `tbl_arsip` (
  `id_arsip` int(11) NOT NULL,
  `nm_arsip` varchar(50) NOT NULL,
  `doc_arsip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_arsip`
--

INSERT INTO `tbl_arsip` (`id_arsip`, `nm_arsip`, `doc_arsip`) VALUES
(3, 'Form Pinjam 2', 'Dokumen-220721-dde0c2cb4d.pdf'),
(4, 'Form pengajuan', 'Dokumen-220723-8d72d38bad.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
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
  `id_tempat` int(11) NOT NULL,
  `doc_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nm_barang`, `no_seri`, `jml_barang`, `unit`, `kat_barang`, `kat_anggaran`, `thn_pengadaan`, `id_tempat`, `doc_barang`) VALUES
(1, 'Laptop DELL', '12345678910', 3, 'Pcs', 'Elektronik', 'Sekolah', '2022-07-01', 1, 'item-220727-1f897eeb7f.jpg'),
(2, 'Sapu Lidi', '', 5, 'PCS', 'Cunsumable', 'Sekolah', '2022-07-01', 3, 'item-220719-e4da8c7877.jpg'),
(3, 'Pengki', '', 5, 'pcs', 'consumable', '', '2022-07-08', 5, 'item-220727-991e392deb.jpg'),
(4, 'Sabun Cuci Tangan', '', 5, 'pcs', 'consumable', '', '2022-07-08', 2, 'item-220727-1ae315270d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_rusak`
--

CREATE TABLE `tbl_barang_rusak` (
  `id_br` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `unit` varchar(30) DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_rusak`
--

INSERT INTO `tbl_barang_rusak` (`id_br`, `id_barang`, `jml_barang`, `unit`, `keterangan`) VALUES
(1, 1, 1, 'Pcs', 'Dimusnahkan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id_project` int(11) NOT NULL,
  `nm_project` varchar(30) NOT NULL,
  `tgl_project` date NOT NULL,
  `doc_project` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id_project`, `nm_project`, `tgl_project`, `doc_project`) VALUES
(1, 'Membangun Mushola 2', '2022-09-01', 'Project-220720-01dbf61ef0.pdf'),
(6, 'Renovasi Toilet', '2022-07-29', 'Project-220720-ef76a26f2f.pdf'),
(7, 'Renovasi Lapangan', '2022-07-29', 'Project-220721-9ba3abfd63.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tempat`
--

CREATE TABLE `tbl_tempat` (
  `id_tempat` int(11) NOT NULL,
  `nm_tempat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tempat`
--

INSERT INTO `tbl_tempat` (`id_tempat`, `nm_tempat`) VALUES
(1, 'LAB TKJ'),
(2, 'Gudang'),
(3, 'Bengkel'),
(4, 'Kelas'),
(5, 'R.Kantor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nm_penerima` varchar(50) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_barang`, `jml_barang`, `unit`, `tgl_transaksi`, `nm_penerima`, `id_admin`, `keterangan`) VALUES
(1, 1, 1, 'Pcs', '2022-07-01', 'Julian', 2, 'Laptop Lenovo Yoga Inventaris'),
(2, 2, 1, 'Pcs', '2022-07-08', 'Rudi', 2, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(2, 'kusno', '2bbddb34531d10d36417d4a7bd4e85ec', 'Kusno Rahayu'),
(3, 'kusna', 'b506c6b3796e5a3f9aee672c7ffbdf6d', 'Kusna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_barang_rusak`
--
ALTER TABLE `tbl_barang_rusak`
  ADD PRIMARY KEY (`id_br`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `tbl_tempat`
--
ALTER TABLE `tbl_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_barang_rusak`
--
ALTER TABLE `tbl_barang_rusak`
  MODIFY `id_br` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_tempat`
--
ALTER TABLE `tbl_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
