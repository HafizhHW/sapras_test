-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2022 at 06:46 AM
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
(9, 'Hafizh31', '19aa5743549767f04cb028f2326dc4d0', 'Hafizh Hadiayana Wijaya'),
(10, 'Ridwan123', '192c9eb2d8f7c69cea17bf43da133668', 'Ridwan Kamil'),
(11, 'Imam123', '02c71015956894a2b08f87120e2fcbb9', 'Imam Hamami'),
(12, 'Ryan123', 'Ryan123', 'Ryan D\'masiv'),
(14, 'Neptunus123', 'Neptunus123', 'Neptunus'),
(15, 'Jupiter123', 'Jupiter123', 'Jupri'),
(17, 'Rizal123', 'Rizal123', 'Rizal'),
(18, 'Faisal', 'Faisal123', 'Faisal'),
(19, 'Herdi', 'Herdi123', 'Herdi'),
(20, 'Silvi123', 'Silvi123', 'Silvi w'),
(21, 'Imam', 'Imam123', 'Imam123');

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
(4, 'Form Pengajuan Pinjam Barang', 'Dokumen-220723-8d72d38bad.pdf');

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
  `id_jurusan` int(11) NOT NULL,
  `doc_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nm_barang`, `no_seri`, `jml_barang`, `unit`, `kat_barang`, `kat_anggaran`, `thn_pengadaan`, `id_tempat`, `id_jurusan`, `doc_barang`) VALUES
(1, 'Laptop DELL', '12345678910', 7, 'PCS', 'Elektronik', 'Sekolah', '2022-07-01', 1, 1, 'item-220727-1f897eeb7f.jpg'),
(2, 'Sapu Lidi', '', 4, 'PCS', 'Cunsumable', 'Sekolah', '2022-07-01', 3, 6, 'item-220719-e4da8c7877.jpg'),
(3, 'Pengki', '', 5, 'pcs', 'consumable', '', '2022-07-08', 5, 2, 'item-220727-991e392deb.jpg'),
(5, 'mouse', '', 6, 'PCS', 'test', 'test', '2022-08-03', 1, 3, 'item-220808-ee4d141cad.jpg'),
(6, 'Monitor LCD', '12314', 4, 'PCS', 'Elektronik', 'BOS', '2022-08-05', 1, 4, 'item-220812-5322886ce3.jpg'),
(7, 'Keyboard', NULL, 2, NULL, 'Electronik', 'Tahunan', '2022-10-01', 1, 1, NULL),
(8, 'Test 5', '', 2, 'PCS', 'Test', '', '2022-10-07', 2, 2, 'item-221030-a3505100fb.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_rusak`
--

CREATE TABLE `tbl_barang_rusak` (
  `id_br` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_rusak`
--

INSERT INTO `tbl_barang_rusak` (`id_br`, `id_barang`, `jml_barang`, `id_tempat`, `keterangan`) VALUES
(1, 1, 1, 1, 'Dimusnahkan'),
(4, 1, 2, 1, 'Dimusnahkan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nm_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nm_jurusan`) VALUES
(1, 'TEKNIK KOPUTER JARINGAN'),
(2, 'MULTIMEDIA'),
(3, 'TEKNIK MESIN'),
(4, 'TEKNIK KENDARAAN RINGAN'),
(5, 'ADMINISTRASI PERKANTORAN'),
(6, 'AKUNTANSI');

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
(6, 'Renovasi Toilet', '2022-07-29', 'Project-220720-ef76a26f2f.pdf');

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
(5, 'R. Guru');

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
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_barang`, `jml_barang`, `unit`, `tgl_transaksi`, `nm_penerima`, `id_admin`, `keterangan`) VALUES
(4, 4, 2, 'PCS', '2022-08-01', 'Rahmat', 2, ''),
(5, 1, 3, 'PCS', '2022-08-09', 'Nandang', 2, 'test 2'),
(6, 1, 4, 'PCS', '2022-08-23', 'UDIN', 9, '');

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
(4, 'Ariss123', '89f8fee7460326776f83bc2a5e5aadde', 'Aris Saputra'),
(5, 'Jupri123', 'b7fbe9da8cad7132ef6598b4b6285270', 'Jupri Maulana'),
(9, 'Testing123', 'ac1c8d64fd23ae5a7eac5b7f7ffee1fa', 'Testing User');

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
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_barang_rusak`
--
ALTER TABLE `tbl_barang_rusak`
  MODIFY `id_br` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_tempat`
--
ALTER TABLE `tbl_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
