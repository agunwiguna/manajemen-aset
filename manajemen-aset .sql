-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2023 at 05:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen-aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id` int(11) NOT NULL,
  `kode_aset` varchar(128) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `merek` varchar(128) NOT NULL,
  `kondisi` varchar(128) NOT NULL,
  `tahun_perolehan` year(4) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id`, `kode_aset`, `nama_barang`, `merek`, `kondisi`, `tahun_perolehan`, `jumlah`, `ruangan_id`, `gambar`) VALUES
(4, '12345', 'Komputer', 'Xiaomi', 'Rusak Ringan', 2023, 3, 2, 'e37ac5ef12612b1b592c6f3d12f0f9a8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_monitoring`
--

CREATE TABLE `galeri_monitoring` (
  `id` int(11) NOT NULL,
  `monitoring_id` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE `merek` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`id`, `nama`, `tgl_input`) VALUES
(1, 'Samsung', '2023-08-24 16:23:09'),
(3, 'Polytron', '2023-08-24 16:27:30'),
(4, 'Xiaomi', '2023-08-24 16:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `aset_id` int(11) NOT NULL,
  `kondisi_kerusakan` varchar(128) NOT NULL,
  `jml_kerusakan` int(11) NOT NULL,
  `status` varchar(128) NOT NULL,
  `is_notif` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id` int(11) NOT NULL,
  `aset_id` int(128) NOT NULL,
  `jumlah_perbaikan` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`id`, `aset_id`, `jumlah_perbaikan`, `foto`, `status`) VALUES
(2, 4, 1, '588317c9a48265ff52d27f8400b1acba.jpg', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama`, `tgl_input`) VALUES
(1, 'Lab mi 01', '2023-08-25 16:35:04'),
(2, 'Lab mi 02', '2023-08-25 16:35:14'),
(3, 'Lab mi 03', '2023-08-25 16:35:21'),
(4, 'Lab mi 04', '2023-08-25 16:35:26'),
(5, 'Lab mi 05', '2023-08-25 16:35:31'),
(6, 'Lab mi 06', '2023-08-25 16:35:36'),
(7, 'Lab mi 07', '2023-08-25 16:35:42'),
(8, 'Ruang Dosen', '2023-08-25 16:35:53'),
(9, 'Gudang', '2023-08-25 16:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL,
  `picture` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `picture`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', ''),
(3, 'Kepala Lab', 'lab123', '081c49b8c66a69aad79f4bca8334e0ef', 'Kepala Lab', ''),
(4, 'Kajur', 'kajur123', 'fdd9dc91bf56e3376411fc7a54030075', 'Kajur', ''),
(5, 'BMN', 'bmn123', 'ccd4f3a9e989aabbec064edb1bb290d9', 'BMN', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_monitoring`
--
ALTER TABLE `galeri_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri_monitoring`
--
ALTER TABLE `galeri_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
