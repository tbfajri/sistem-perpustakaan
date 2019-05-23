-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 11:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem-perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_anggota`
--

CREATE TABLE `t_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_anggota`
--

INSERT INTO `t_anggota` (`id_anggota`, `nama`, `status`) VALUES
(2, 'Yayan', 'aktif'),
(3, 'Tb Fajri', 'aktif'),
(5, 'Yayan', 'aktif'),
(6, 'Tb Fajri Mulyana', 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `t_buku`
--

CREATE TABLE `t_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_buku`
--

INSERT INTO `t_buku` (`id_buku`, `nama_buku`, `penerbit`, `stok`) VALUES
(6, 'cara hack', 'imam buku store', 6),
(7, 'Harry Foter', 'gramedia', 6),
(8, 'cara hackk', 'hacker', 3);

-- --------------------------------------------------------

--
-- Table structure for table `t_pustakawan`
--

CREATE TABLE `t_pustakawan` (
  `id_pustakawan` int(11) NOT NULL,
  `nama_pustakawan` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pustakawan`
--

INSERT INTO `t_pustakawan` (`id_pustakawan`, `nama_pustakawan`, `username`, `password`) VALUES
(1, 'tbfajri', 'tbfajri', '31f648bb69a1019ceee1379794de22fc03273a0e');

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_pustakawan` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `tgl_pinjam` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `tgl_kembali` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `tgl_maksimal` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `denda` int(11) NOT NULL,
  `status` enum('Dipinjam','Kembalikan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `t_transaksi` (`id_transaksi`, `id_anggota`, `id_pustakawan`, `nama_anggota`, `nama_petugas`, `nama_buku`, `tgl_pinjam`, `tgl_kembali`, `tgl_maksimal`, `denda`, `status`) VALUES
(4, 0, 1, 'Yayan', 'tbfajri', 'Harry Foter', '2019-05-23 07:16:31', '2019-05-22 17:00:00', '2019-05-23 07:16:31', 0, 'Kembalikan'),
(6, 0, 1, 'Yayan', 'tbfajri', 'Harry Foter', '2019-05-23 07:16:26', '2019-05-22 17:00:00', '2019-05-23 07:16:26', 0, 'Kembalikan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `t_pustakawan`
--
ALTER TABLE `t_pustakawan`
  ADD PRIMARY KEY (`id_pustakawan`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `t_transaksi_ibfk_3` (`id_pustakawan`),
  ADD KEY `t_transaksi_ibfk_4` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_anggota`
--
ALTER TABLE `t_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_buku`
--
ALTER TABLE `t_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_pustakawan`
--
ALTER TABLE `t_pustakawan`
  MODIFY `id_pustakawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
