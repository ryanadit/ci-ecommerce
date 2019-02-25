-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Feb 2019 pada 19.51
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokobangunan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `barang_id` varchar(15) NOT NULL,
  `barang_nama` varchar(150) DEFAULT NULL,
  `barang_satuan` varchar(30) DEFAULT NULL,
  `barang_harpok` double DEFAULT NULL,
  `barang_harjul` double DEFAULT NULL,
  `barang_harjul_grosir` double DEFAULT NULL,
  `barang_stok` int(11) DEFAULT '0',
  `barang_min_stok` int(11) DEFAULT '0',
  `barang_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `barang_tgl_last_update` datetime DEFAULT NULL,
  `barang_kategori_id` int(11) DEFAULT NULL,
  `barang_user_id` int(11) DEFAULT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`barang_id`, `barang_nama`, `barang_satuan`, `barang_harpok`, `barang_harjul`, `barang_harjul_grosir`, `barang_stok`, `barang_min_stok`, `barang_tgl_input`, `barang_tgl_last_update`, `barang_kategori_id`, `barang_user_id`, `gambar`) VALUES
('BR000001', 'Spon', 'Sachet', 2000, 5000, 3000, 18, 1, '2019-01-28 15:04:06', NULL, 3, 1, 'spongebob1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_jual`
--

CREATE TABLE `tbl_detail_jual` (
  `d_jual_id` int(11) NOT NULL,
  `d_jual_nofak` varchar(15) DEFAULT NULL,
  `d_jual_barang_id` varchar(15) DEFAULT NULL,
  `d_jual_barang_nama` varchar(150) DEFAULT NULL,
  `d_jual_barang_satuan` varchar(30) DEFAULT NULL,
  `d_jual_barang_harpok` double DEFAULT NULL,
  `d_jual_barang_harjul` double DEFAULT NULL,
  `d_jual_qty` int(11) DEFAULT NULL,
  `d_jual_diskon` double DEFAULT NULL,
  `d_jual_total` double DEFAULT NULL,
  `d_nama_jual` varchar(100) DEFAULT NULL,
  `d_alamat_jual` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_jual`
--

INSERT INTO `tbl_detail_jual` (`d_jual_id`, `d_jual_nofak`, `d_jual_barang_id`, `d_jual_barang_nama`, `d_jual_barang_satuan`, `d_jual_barang_harpok`, `d_jual_barang_harjul`, `d_jual_qty`, `d_jual_diskon`, `d_jual_total`, `d_nama_jual`, `d_alamat_jual`) VALUES
(15, '291116000002', 'BR000030', 'MCB Sheineder 20A SNI', 'PCS', 47500, 70000, 1, 2000, 68000, NULL, NULL),
(16, '291116000003', 'BR000012', 'Klem kabel Steel No 8', 'Bks', 4200, 8000, 1, 0, 8000, NULL, NULL),
(17, '291116000004', 'BR000032', 'Saklar Engkel Visalux B', 'PCS', 7250, 10000, 1, 0, 10000, NULL, NULL),
(18, '291116000005', 'BR000045', 'Stok Kontak Omi KK', 'PCS', 5700, 10000, 1, 0, 10000, NULL, NULL),
(19, '291116000006', 'BR000024', 'Stop Kontak Sheineder B', 'PCS', 16000, 20000, 1, 0, 20000, NULL, NULL),
(20, '291116000006', 'BR000038', 'Saklar Arde Visalux 2L', 'PCS', 8200, 9000, 1, 0, 9000, NULL, NULL),
(21, '291116000007', 'BR000038', 'Saklar Arde Visalux 2L', 'PCS', 8200, 9000, 1, 0, 9000, NULL, NULL),
(24, '290317000001', 'BR000034', 'Stop Kontak Visalux B', 'PCS', 10250, 12000, 1, 0, 12000, NULL, NULL),
(25, '290317000001', 'BR000043', 'Saklar Engkel Omi KK', 'PCS', 4500, 10000, 1, 0, 10000, NULL, NULL),
(30, '110119000002', 'BR000043', 'Saklar Engkel Omi KK', 'PCS', 4500, 10000, 1, 0, 10000, 'Sopo', 'Jalan Godean Km 4,5 Gamping Sleman'),
(31, '110119000003', 'BR000043', 'Saklar Engkel Omi KK', 'PCS', 4500, 10000, 1, 0, 10000, 'Jarwo', 'Ngayogyakarto'),
(32, '110119000003', 'BR000044', 'Saklar Seri Omi KK', 'PCS', 5700, 10000, 1, 0, 10000, 'Jarwo', 'Ngayogyakarto'),
(33, '110119000003', 'BR000045', 'Stok Kontak Omi KK', 'PCS', 5700, 10000, 1, 0, 10000, 'Jarwo', 'Ngayogyakarto'),
(34, '140119000001', 'BR000043', 'Saklar Engkel Omi KK', 'PCS', 4500, 10000, 1, 0, 10000, 'Paijo', 'Gowok'),
(35, '280119000001', 'BR000001', 'Spon', 'Sachet', 2000, 5000, 1, 0, 5000, 'Susanto', 'Banyumeneng'),
(36, '290119000001', 'BR000001', 'Spon', 'Sachet', 2000, 5000, 1, 0, 5000, 'Susanto', 'Jogja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jual`
--

CREATE TABLE `tbl_jual` (
  `jual_nofak` varchar(15) NOT NULL,
  `jual_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `jual_total` double DEFAULT NULL,
  `jual_user_id` int(11) DEFAULT NULL,
  `jual_keterangan` varchar(20) DEFAULT NULL,
  `nama_jual` varchar(100) DEFAULT NULL,
  `alamat_jual` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jual`
--

INSERT INTO `tbl_jual` (`jual_nofak`, `jual_tanggal`, `jual_total`, `jual_user_id`, `jual_keterangan`, `nama_jual`, `alamat_jual`) VALUES
('100119000001', '2019-01-10 10:08:16', 32000, 3, 'eceran', NULL, NULL),
('100119000002', '2019-01-10 10:09:38', 10000, 0, 'eceran', 'Tama', 'Yogya'),
('110119000001', '2019-01-11 08:41:14', 10000, 1, 'eceran', 'Jay', 'Jayakartta'),
('110119000002', '2019-01-11 08:58:30', 10000, 1, 'eceran', 'Sopo', 'Jalan Godean Km 4,5 Gamping Sleman'),
('110119000003', '2019-01-11 09:36:55', 30000, 1, 'eceran', 'Jarwo', 'Ngayogyakarto'),
('140119000001', '2019-01-14 15:26:08', 10000, 0, 'eceran', 'Paijo', 'Gowok'),
('140119000002', '2019-01-14 15:35:08', 10000, 0, 'eceran', 'Paijo', 'Gowok'),
('140119000003', '2019-01-14 15:45:20', 10000, 0, 'eceran', 'Paijo', 'Gowok'),
('140119000004', '2019-01-14 15:50:26', 10000, 0, 'eceran', 'Paijo', 'Gowok'),
('140119000005', '2019-01-14 15:57:16', 10000, 0, 'eceran', 'Paijo', 'Gowok'),
('140119000006', '2019-01-14 16:06:44', 10000, 0, 'eceran', 'Paijo', 'Gowok'),
('240117000001', '2017-01-24 15:07:07', 10000, 1, 'eceran', NULL, NULL),
('240117000002', '2017-01-24 15:07:26', 10000, 1, 'eceran', NULL, NULL),
('280119000001', '2019-01-28 15:37:45', 5000, 1, 'eceran', 'Susanto', 'Banyumeneng'),
('290119000001', '2019-01-29 10:36:29', 5000, 0, 'eceran', 'Susanto', 'Jogja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Material'),
(2, 'Tambahan'),
(3, 'Peralatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(35) DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_password` varchar(35) DEFAULT NULL,
  `user_level` varchar(2) DEFAULT NULL,
  `user_status` varchar(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`, `user_status`) VALUES
(1, 'administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `barang_user_id` (`barang_user_id`),
  ADD KEY `barang_kategori_id` (`barang_kategori_id`);

--
-- Indexes for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  ADD PRIMARY KEY (`d_jual_id`),
  ADD KEY `d_jual_barang_id` (`d_jual_barang_id`),
  ADD KEY `d_jual_nofak` (`d_jual_nofak`);

--
-- Indexes for table `tbl_jual`
--
ALTER TABLE `tbl_jual`
  ADD PRIMARY KEY (`jual_nofak`),
  ADD KEY `jual_user_id` (`jual_user_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  MODIFY `d_jual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
