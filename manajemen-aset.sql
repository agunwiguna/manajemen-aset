-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 08, 2023 at 05:09 PM
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
  `gambar` varchar(128) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id`, `kode_aset`, `nama_barang`, `merek`, `kondisi`, `tahun_perolehan`, `jumlah`, `ruangan_id`, `gambar`, `is_active`) VALUES
(4, '12345', 'Komputer', 'Xiaomi', 'Rusak Ringan', 2023, 1, 2, 'e37ac5ef12612b1b592c6f3d12f0f9a8.jpg', '0'),
(8, '023.18.3300.677635.000.KD 76', 'Lemari Buku', 'INFORMA', 'Baik', 2017, 1, 8, 'e5b190c23b30b730c63a94a521bd0112.jpeg', '1'),
(9, '023.18.3300.677635.000.KD 1', 'Rak Meja Buku', 'ORBITREND', 'Baik', 2013, 1, 8, 'efa6998682040422c4e2e9c201b6cc4d.jpeg', '1'),
(10, '023.18.3300.677635.000.KD 27', 'KURSI KULIAH', 'ELVIRON', 'Baik', 0000, 1, 8, '9793ac8dc39d2e42abfd701b94802c1d.jpeg', '1'),
(11, '023.18.3300.677635.000.KD 1', 'RAK MEJA BUKU', 'ORBITREND', 'Baik', 2013, 1, 8, '7251a844da276595d5a8b877cf79565a.jpeg', '1'),
(12, '023.18.3300.677635.000.KD ', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, 'bcb1f9696de74da2f4aa13fa53ffcb26.jpeg', '1'),
(13, '3.05.02.01.003.425', 'KURSI ', 'FUTURA', 'Baik', 0000, 1, 8, 'f9fbd07b0bede09c4e7f6b20d35c0827.jpeg', '1'),
(14, '-', 'CPU', 'HP', 'Rusak Berat', 0000, 64, 9, 'fdbc2a015cccdf71c5871b5b3fca8d7d.jpeg', '1'),
(15, '-', 'CPU', 'CAMEROON', 'Rusak Berat', 0000, 2, 9, 'a0c872638fd3f9323aa6f7cdc4aea6ea.jpeg', '1'),
(16, '-', 'KOMPUTER', 'LENOVO', 'Rusak Berat', 0000, 10, 9, '155a6dc78ee19cb1fac10ba9388e57f5.jpeg', '1'),
(17, '-', 'KOMPUTER', 'HP', 'Rusak Berat', 0000, 38, 9, 'f5c516ff1495f6cf1a451148103f0e8c.jpeg', '1'),
(18, '-', 'CPU', 'ASUS', 'Rusak Berat', 0000, 1, 9, '85dff57fedfb0d6a0df27cb9a753a6b5.jpeg', '1'),
(21, '-', 'abc', 'ACER', '', 2001, 1, 0, 'cde67efa48cc8159ff21691790c69215.jpeg', '1'),
(22, '-', '1bc', 'ACER', 'Baik', 2006, 1, 0, '2e924347f4eb5301190dc2e98385d837.png', '1'),
(23, '-', 'CPU', 'SIMBADDA', 'Rusak Berat', 0000, 10, 9, '1ee0f61d2488d3632a4a1eb71d51aaa3.jpeg', '1'),
(24, '-', 'CPU', 'LG', 'Rusak Berat', 0000, 3, 9, 'e12cbb16443910270020004fea3405ec.jpeg', '0'),
(25, '023.18.3300.677635.000KD', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, 'ffcab103ee101e12d345222853952d5a.jpeg', '1'),
(26, '023.18.3300.677635.000KD', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, 'a36b3bfbdee304758d6f464617d007ce.jpeg', '1'),
(27, '023.18.3300.677635.000KD 75', 'MEJA DOSEN', 'INFORMA', 'Baik', 0000, 1, 8, 'bf70117ef1483aaf236fee78d01126f0.jpeg', '1'),
(28, '023.18.3300.677635.000KD 79', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, '2777ef0a9dd798879d66e899324fa6f2.jpeg', '1'),
(29, '-', 'KOMPUTER', 'LENOVO', 'Baik', 0000, 1, 8, 'e777c4311cd046313d93e9c1da1e2bd9.jpeg', '1'),
(30, '3.05.02.01.003.425', 'KURSI', 'FUTURA', 'Baik', 0000, 1, 8, 'ee787eb75cdc9e5a8ef92c4361984837.jpeg', '1'),
(31, '023.18.3300.677635.000.KD', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 8, '8c7814f748699002f63037aebdff6af0.jpeg', '1'),
(32, '023.18.3300.677635.000.KD 06', 'RAK MEJA BIKU', 'ORBITREND', 'Baik', 2013, 1, 8, 'f5820956cd4567f61076f5462d3aabbd.jpeg', '1'),
(33, '023.18.3300.677635.000KD 76', 'MEJA DOSEN', 'INFORMA', 'Baik', 2007, 1, 8, '854d781e4de2d60ac6071d01f9b5c024.jpeg', '1'),
(34, '023.18.3300.677635.000KD 77', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, '41c02da9e84345b985afd0974f607965.jpeg', '1'),
(35, '023.18.3300.677635.000KD', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, '60c805f686c2b37802c03bbf8c9900f2.jpeg', '1'),
(36, '023.18.3300.677635.000.KD', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, 'f89ff1752c5853a291229d07484a6b26.jpeg', '1'),
(37, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 8, 'fc421387d09e916481dfe1929407ea9f.jpeg', '1'),
(38, '023.18.3300.677635.000.KD', 'MEJA DOSEN', 'INFORMA', '', 2017, 1, 8, '66ac1667bd477f4c0ca23b46389addd0.jpeg', '1'),
(39, '023.18.3300.677635.000.KD 09', 'RAK MEJA BUKU', 'ORBITREND', 'Baik', 2013, 1, 8, 'f011d086c4b1ec5bbeea63373784064d.jpeg', '1'),
(40, '023.18.3300.677635.000.KD 03', 'RAK MEJA BUKU', 'ORBITREND', 'Baik', 2013, 1, 8, '04af9305e27f976395555d7d760b9c3c.jpeg', '1'),
(41, '023.18.3300.677635.000 KD 45', 'MEJA DOSEN', 'INFORMA', 'Baik', 2013, 1, 8, '9f87f4caf4923e6373b18974f12f795a.jpeg', '1'),
(42, '023.18.3300.677635.000 KD 74', 'MEJA DOSEN', 'INFORMA', 'Baik', 2017, 1, 8, '0cf6b4be20edad12038f2be238246427.jpeg', '1'),
(43, '023.18.3300.677635.000 KD ', 'AC', 'SHARP', 'Baik', 0000, 1, 8, '57d5d82432ff4356e3fdc4d2252b3f76.jpeg', '1'),
(44, '-', 'PRINTER', 'BROTHER', 'Baik', 0000, 1, 8, 'c7fa89a0cd2eba1f954c07611e1b0528.jpeg', '1'),
(45, '023.18.3300.677635.000 KD 720', 'KURSI DOSEN', 'INFORMA', 'Baik', 2013, 1, 8, '58025cd6f8335f82041241b8810e4a30.jpeg', '1'),
(46, '-', 'MEJA DOSEN', '', 'Baik', 0000, 1, 8, '467ea0545f90cfa8dd8d4cfe9769a663.jpeg', '1'),
(47, '023.18.3300.677635.000 KD 31', 'LEMARI BUKU', 'VIP', 'Baik', 2013, 1, 8, '706213f7f33c7159c3cd10d2cb11580a.jpeg', '1'),
(48, '023.18.3300.677635.000 KD 720', 'KURSI DOSEN', 'ELVIRON', 'Baik', 2013, 1, 8, '52002263ba995172f8f98ab98748371d.jpeg', '1'),
(49, '023.18.3300.677635.000 KD 40', 'LEMARI BUKU', 'INFORMA', 'Baik', 2017, 1, 8, '4b0b15be98ee7d31ea71361b49387a7f.jpeg', '1'),
(50, '042.01.3300.400915.000 KD ', 'MEJA DOSEN', '', 'Baik', 2016, 1, 8, '6ed19444822fc401c1604877dfde6045.jpeg', '0'),
(53, '-', 'PAPAN TULIS', 'IT-BOARD', 'Baik', 0000, 1, 1, 'e7605f09345a4ce59c6bc3e4a9bbd133.jpeg', '1'),
(57, '023.18.3300.677635.000.KD', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 1, 'ee658592189b289d2b3d12cd20461da8.jpeg', '1'),
(58, '-', 'MOUSE', 'LOGITECH', 'Baik', 0000, 1, 1, '5f34e8096dd386453632cafaf1fbdefe.jpeg', '1'),
(59, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 1, '343381d2712af606a2be80c9684f0920.jpeg', '1'),
(60, '042.01.3300.400915.000 KB', 'CPU', 'ACER', 'Baik', 2017, 1, 2, '0f6cd94b406303ed3e880d631626d357.jpeg', '0'),
(61, '-', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 2, '1921f81d67f9379d0b6174f0cd32fc4e.jpeg', '0'),
(62, '-', 'KEYBOARD', 'ACER', 'Baik', 0000, 1, 2, '30d464c7387376672bcdc2a36d8ff24f.jpeg', '0'),
(63, '023.18.3300.677635.000.KD', 'CPU', 'ACER', 'Rusak Ringan', 0000, 1, 2, '3efa31c8d95fedac25f4a0342aaf08d5.jpeg', '0'),
(64, '023.18.3300.677635.000.KD', 'CPU', 'ACER', 'Baik', 0000, 1, 2, '5d714d730910df0a540cbea26ce16e53.jpeg', '0'),
(65, '-', 'CPU', 'ACER', 'Rusak Ringan', 0000, 1, 2, 'ce8f6371382fbd8c93052a8bb476f6e6.jpeg', '0'),
(66, '023.18.3300.677635.000 KD 1', 'MEJA RAPAT', 'INFORMA', 'Baik', 2013, 1, 8, 'efadfac87754ba56cd8e9bf60f3ecc77.jpeg', '1'),
(67, '023.18.3300.677635.000.KD 635', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 8, 'd3bc68422c60e343b60809b0dd2bed2d.jpeg', '1'),
(68, '023.18.3300.677635.000.KD 735', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 8, '7e56870aa8171692cd235564b6bb703f.jpeg', '1'),
(69, '3.05.02.01.003.425', 'KURSI', 'FUTURA', 'Baik', 0000, 1, 8, '08363be9462e251fc7ebc499cef24a3c.jpeg', '1'),
(70, '3.05.02.01.003.425', 'KURSI', 'FUTURA', 'Baik', 0000, 1, 8, '365b924b58f9e4cc40f94fb6e37a2134.jpeg', '1'),
(71, '-', 'KOMPUTER', 'LG', 'Baik', 0000, 1, 8, '678d6ef2f7e7bf5196c2f3a77ff29f71.jpeg', '1'),
(72, '-', 'KOMPUTER', 'LG', 'Rusak Ringan', 0000, 1, 8, 'ccc55825e5321e8f7b3a047120588848.jpeg', '1'),
(74, '023.18.3300.677635.000.KD 73', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, 'c2c254f40772db13bb2c804862bb1017.jpeg', '1'),
(75, '023.18.3300.677635.000.KD 76', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, 'b499bacaf42d97ad827dafbee58fc841.jpeg', '1'),
(76, '023.18.3300.677635.000.KD 51', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '96ef93635e1ee3d0ae696e40747a8fec.jpeg', '1'),
(77, '023.18.3300.677635.000. 80', 'MEJA KOMPUTER', '', 'Rusak Ringan', 0000, 1, 6, '4980e5ddde716e0ccc8915f17abb25fe.jpeg', '1'),
(78, '023.18.3300.677635.000.KD', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '8852b1c138accc54d3742b26650981d0.jpeg', '1'),
(79, '023.18.3300.677635.000.KD 61', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, 'd132dccb3ea955c9d1c8ac0064fa08fb.jpeg', '1'),
(80, '023.18.3300.677635.000.KD 60', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, 'e6c381af730661dbf3555d276e7395d6.jpeg', '1'),
(81, '023.18.3300.677635.000.KD', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '91b5022cd3b18df72f7586b406b6b9a2.jpeg', '1'),
(82, '023.18.3300.677635.000.KD 53', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '7c026175dc7d9632d6b9c5c81e60ce8c.jpeg', '1'),
(83, '023.18.3300.677635.000.KD 27', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '7bc088ede0e381b291b3ec28af8731b5.jpeg', '1'),
(84, '023.18.3300.677635.000.KD 64', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '1e38210f4b78138638166461c5c56606.jpeg', '1'),
(85, '023.18.3300.677635.000.KD', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '6a9a599ee954ff523f04a8dc1ea49fe2.jpeg', '1'),
(86, '023.18.3300.677635.000.KD 75', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '99feccd8fe209373315669f3046356c9.jpeg', '1'),
(87, '023.18.3300.677635.000.KD', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, 'adf92f9d92e10687a31b652d9a0cebe0.jpeg', '1'),
(88, '023.18.3300.677635.000.KD 63', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 6, '84b1b99bc0ba297b1015d368146bb495.jpeg', '1'),
(89, '023.18.3300.677635.000.KD 44', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'fed153641429a692162c845210bd3b6a.jpeg', '1'),
(90, '023.18.3300.677635.000.KD 101', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'f300bbdb05a488de8d22806baa64c249.jpeg', '1'),
(91, '023.18.3300.677635.000.KD ', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'f8e6540b074ca568154f388d523d0cf6.jpeg', '1'),
(92, '023.18.3300.677635.000.KD 96', 'CPU', 'HP', 'Baik', 2013, 1, 6, '1296e25a23ff0b4c1f0ad754a5d6d347.jpeg', '1'),
(93, '023.18.3300.677635.000.KD 86', 'CPU', 'HP', 'Baik', 2013, 1, 6, '25228710e0115d99be89bb7800de8d8e.jpeg', '1'),
(94, '023.18.3300.677635.000.KD 90', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'd95382f790740f56b9b7f95ce2cad914.jpeg', '1'),
(95, '023.18.3300.677635.000.KD 89', 'CPU', 'HP', 'Baik', 2013, 1, 6, '98b79b6506d9c80738b768510ff0657f.jpeg', '1'),
(96, '023.18.3300.677635.000.KD', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'a37f1e504fc84a40e0e037c4537a64c7.jpeg', '1'),
(97, '023.18.3300.677635.000.KD 76', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'ecb6dd5cec6940bc49043f40436e708b.jpeg', '1'),
(98, '023.18.3300.677635.000.KD ', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'cef75ba8a111c468e34097b25a2dfaad.jpeg', '1'),
(99, '023.18.3300.677635.000.KD 103', 'CPU', 'HP', 'Baik', 2013, 1, 6, '97e55cb60a29c401add267cd9fb968b5.jpeg', '1'),
(100, '023.18.3300.677635.000.KD 36', 'CPU', 'HP', 'Baik', 2013, 1, 6, '2598e3c5b0b487fbae81cec010fbbacb.jpeg', '1'),
(101, '023.18.3300.677635.000.KD 93', 'CPU', 'HP', 'Baik', 2013, 1, 6, '6d729fe814af82b4cf20fd7c974239b6.jpeg', '1'),
(102, '023.18.3300.677635.000.KD 92', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'f49c9d21052e5f453a2535ca972e99ce.jpeg', '1'),
(103, '023.18.3300.677635.000.KD 46', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'f80b4854a75a50f76c0e75ef529ebab3.jpeg', '1'),
(104, '023.18.3300.677635.000.KD', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'beea6f7d1bceea717f1c0dffcf3686cf.jpeg', '1'),
(105, '023.18.3300.677635.000.KD 98', 'CPU', 'HP', 'Baik', 2013, 1, 6, 'b4b63be9d02eab746744b7bdf59baa87.jpeg', '1'),
(106, '023.18.3300.677635.000.KD  671', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 6, '6c4e184661a63315a7e8aa38e69c453b.jpeg', '1'),
(107, '023.18.3300.677635.000.KD 678', 'KURSI KULIAH ', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, 'c7c333d0501b36a6b5efbccc086408e2.jpeg', '1'),
(108, '023.18.3300.677635.000.KD 669', 'CPU', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, 'a6e919364ded15b83684b77abcb82229.jpeg', '1'),
(109, '023.18.3300.677635.000.KD 630', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '38e79f18fbc10db119f952d54e73a3f4.jpeg', '1'),
(110, '023.18.3300.677635.000.KD 630', 'KURSI KULIAH', 'HP', 'Rusak Ringan', 2013, 1, 6, '87514beaf59da079d546acd7a4f492e7.jpeg', '1'),
(111, '023.18.3300.677635.000.KD 672', 'KURSI KULIAH ', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '00d9e24633cd86e48c2aebfbfab4346a.jpeg', '1'),
(112, '023.18.3300.677635.000.KD 736', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '5e72b3590c61a1a5f5acd2577c3acc84.jpeg', '1'),
(113, '023.18.3300.677635.000.KD 740', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, 'a181294d6dcfd131832a0c3563f3927e.jpeg', '1'),
(114, '023.18.3300.677635.000.KD 59', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '035712fcb93bb76ebee5a9e22345641f.jpeg', '1'),
(115, '023.18.3300.677635.000.KD 777', 'KURSI KULIAH', 'ELVIRON', '', 2013, 1, 6, '4c18c1b561460b91acc3f16c4ee7f7e3.jpeg', '1'),
(116, '023.18.3300.677635.000.KD 724', 'KURSI KULIAH', 'DELL', 'Rusak Ringan', 2013, 1, 6, '2d5e309b20b311294d40887939fec9ee.jpeg', '1'),
(117, '023.18.3300.677635.000.KD 651', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '75b2936180f734aa37f6f7a9ba00d52e.jpeg', '1'),
(118, '023.18.3300.677635.000.KD 677', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, 'f2a0fc8ca16750986d6c666e0570e3c9.jpeg', '1'),
(119, '023.18.3300.677635.000.KD 726', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '50c085b71fc80df40a5e6db2da2c974a.jpeg', '1'),
(120, '023.18.3300.677635.000.KD 659', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '31d0f793f7f417f60b3d2fa720a4ec04.jpeg', '1'),
(121, '023.18.3300.677635.000.KD 739', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, 'ec586b740a30b8d21acf126d5d4454cf.jpeg', '1'),
(122, '023.18.3300.677635.000.KD 644', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '762edc88e6f443590b421f54ee96b2b8.jpeg', '1'),
(123, '023.18.3300.677635.000.KD 715', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, 'ccb60cdada5dfa0c8f4a35b5a60aa23c.jpeg', '1'),
(124, '023.18.3300.677635.000.KD 737', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 6, '8839f7bee2daf6d29d5fcb4e897527a0.jpeg', '1'),
(125, '023.18.3300.677635.000.KD  49', 'MEJA DOSEN', '', 'Baik', 2001, 1, 6, 'f1d7b4013885106bef7213214d2f4a6f.jpeg', '1'),
(126, '-', 'INFOCUS', 'X-GA', 'Baik', 0000, 1, 6, '13ff87ae8ae1dfaf87a2d09679a47ba4.jpeg', '1'),
(127, '-', 'SPIKER ', 'BMB', '', 0000, 1, 6, '5280f04cd6b6a953ec60274d39a5e119.jpeg', '1'),
(128, '-', 'AC', 'PANASONIC', 'Baik', 0000, 1, 6, 'd22c10a7be5ba5a74709216c8d60f154.jpeg', '1'),
(129, '023.18.3300.677635.000.KD 725', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 8, 'dc40b586a41971b3e15467c6d5435698.jpeg', '1'),
(130, '-', 'KOMPUTER', 'LG', '', 0000, 1, 8, '8406d570f504948e5aac18ab15054c8d.jpeg', '1'),
(131, '-', 'KOMPUTER', 'HP', 'Rusak Ringan', 0000, 1, 8, 'b3472665977fb3a209e59f9ad4446759.jpeg', '1'),
(132, '-', 'KOMPUTER', 'HP', '', 0000, 1, 8, '70debf4b02ab0a003a6dedbe4d61f716.jpeg', '1'),
(133, '-', 'KOMPUTER', 'ACER', 'Baik', 0000, 1, 8, '6105b3e67ebb326e8e734b1c983d2e41.jpeg', '1'),
(134, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 8, 'c0e6e0de6cf9486800eb01d6bddd8c48.jpeg', '1'),
(135, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 8, '89e43269dabf2e4918a476ee1f91527a.jpeg', '1'),
(136, '023.18.3300.677635.000.KD ', 'PAPAN TULIS', 'IT-BOARD', 'Baik', 2013, 1, 8, '7b68f39462941624c238c264c6670db8.jpeg', '1'),
(137, '042.01.3300.400915.000 KD', 'KOMPUTER', 'APPLE', 'Baik', 2018, 1, 8, '9700a3c7662401f810e83476e0d7f8a0.jpeg', '1'),
(138, '-', 'SPIKER', 'AUBERN', 'Baik', 0000, 1, 8, '0fe98300829c7e2c606b6eca15e66c90.jpeg', '1'),
(139, '042.01.3300.400915.000 KD ', 'PRINTER', 'EPSON', 'Baik', 2018, 1, 8, 'bcee023e918d99d05d182bcea2faf32b.jpeg', '1'),
(140, '-', 'YU-PIES', 'PROLINK', 'Baik', 0000, 1, 8, '27f164671e12c329641f728ca66fd358.jpeg', '1'),
(141, '-', 'YU-PIES', 'PROLINK', 'Baik', 0000, 1, 8, '15bac87765b59f747d45c76e05fae306.jpeg', '1'),
(142, '-', 'SPIKER', 'BMB', 'Baik', 0000, 1, 8, '7f5dc15f2119820413203fef8a99b838.jpeg', '1'),
(143, '042.01.3330.400915.000 KD', 'MEJA DOSEN', '', '', 2016, 1, 8, '57aeb1c9c466487b326397c7c96dea22.jpeg', '1'),
(144, '023.18.3300.677635.000.KD', 'PAPAN TULIS', 'IT-BOARD', 'Baik', 0000, 1, 6, '6b9833f24f0a8b80dc7ce594efb7820e.jpeg', '1'),
(145, '-', 'KEYBOARD', 'LENOVO', 'Baik', 0000, 1, 6, 'c4598485a60b97ca2a2619c8f30ebb72.jpeg', '1'),
(146, '-', 'KEYBOARD', 'LENOVO', 'Baik', 0000, 1, 6, '46cac5694c5cc35ed062c74be4c61d4d.jpeg', '1'),
(147, '-', 'KEYBOARD', 'LENOVO', 'Baik', 0000, 1, 6, 'ad8325cfdeca59a0f82b3e346ee5760d.jpeg', '1'),
(148, '-', 'KEYBOARD', 'LOGITECH', 'Baik', 0000, 1, 6, 'c5a89170e295e5536ab83d7a981331ae.jpeg', '1'),
(149, '-', 'KEYBOARD', 'LOGITECH', 'Baik', 0000, 1, 6, '3910be73efd051fbb08a936925a25138.jpeg', '1'),
(150, '-', 'KEYBOARD', 'LOGITECH', 'Baik', 0000, 1, 6, '21db4bda44a15ece589139688e4cacfd.jpeg', '1'),
(151, '-', 'KEYBOARD', 'LOGITECH', 'Baik', 0000, 1, 6, 'cf0afcef3e7cc755585aff1b68138e0e.jpeg', '1'),
(152, '-', 'KEYBOARD', 'LOGITECH', 'Baik', 0000, 1, 6, '07b0ee13e3c8e1c8b23678ef8ee36e92.jpeg', '1'),
(153, '-', 'KEYBOARD', 'LOGITECH', 'Baik', 0000, 1, 6, '3f934c80bf83e02add8a8215694d6d42.jpeg', '1'),
(154, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 6, '4dc0c5f3c4c844fc88574299661403a5.jpeg', '1'),
(155, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 6, 'a7e28a34c3606142dde6d4d23f190340.jpeg', '1'),
(156, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 6, '2a3ca3df36afe88bef12656fcda5e7e1.jpeg', '1'),
(157, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 6, '0de899568dc68ed5e3d7a5a82a7bf626.jpeg', '1'),
(158, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 6, 'ca33297690793a546f1ca9bdf0c6a367.jpeg', '1'),
(159, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 6, '652e1054c2381619f44217023a551260.jpeg', '1'),
(160, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 6, '7ac7f1a099e89f1f7699df92a7152647.jpeg', '1'),
(161, '-', 'KOMPUTER', 'ACER', 'Baik', 0000, 1, 6, 'f6ff15cb126413878e1e6ce7a73efb0e.jpeg', '1'),
(162, '-', 'KOMPUTER', 'HP', 'Baik', 0000, 1, 6, '6836d45e64f7d4fbf8b935c3b6fedcf7.jpeg', '1'),
(163, '-', 'KOMPUTER', 'HP', '', 0000, 1, 6, '0cee9536fce5f92e295839532cc5956d.jpeg', '1'),
(164, '-', 'KOMPUTER', 'HP', 'Baik', 0000, 1, 6, 'ccc9628f8fae26149dcc7d828f2cbf86.jpeg', '1'),
(165, '-', 'KOMPUTER', 'HP', 'Baik', 0000, 1, 6, '5dd6a415f935906adcdec6181918c3d2.jpeg', '1'),
(166, '-', 'KOMPUTER', 'HP', '', 0000, 1, 6, 'cfd6b5c4c49b68f9425610ea3fd77742.jpeg', '1'),
(174, '042.01.3300.400915.000 KB ', 'CPU', 'SIMBADDA', 'Baik', 2013, 1, 1, 'b4a16bc24c8fecdc0de0e2d3bbda5605.jpeg', '1'),
(175, '023.18.3300.677635.000.KD ', 'CPU', 'HP', 'Baik', 2013, 1, 1, '3ad4937979575299bcb0998e58f50154.jpeg', '1'),
(176, '042.01.3300.400915.000 KB', 'CPU', 'ACER', 'Baik', 2013, 1, 1, '6a28fd3b849295ca5a1b261f5760ff8e.jpeg', '1'),
(177, '-', 'INFOCUS', 'EPSON', 'Baik', 0000, 1, 1, 'f4551d10422bd3999a6b281cafbc5ba5.jpeg', '1'),
(178, '023.18.3300.677635.000.KD', 'PAPAN TULIS', 'IT-BOARD', 'Baik', 2013, 1, 1, '67081d0495a36be22a0e2206679288ff.jpeg', '0'),
(179, '-', 'AC', 'PANASONIC', 'Baik', 0000, 1, 1, '1d998376e3f8cef6868163261672c35f.jpeg', '1'),
(180, '-', 'SPIKER', 'BMB', 'Baik', 0000, 1, 1, '18c42f6257733904b15cf13848510361.jpeg', '1'),
(182, '-', 'KOMPUTER', 'HP', 'Baik', 0000, 1, 1, 'c125baddf7c81843110a82ba2b121963.jpeg', '0'),
(183, '-', 'KOMPUTER', 'ACER', 'Baik', 0000, 1, 1, '047f8110584c2cf7eea9cbad534e3ac9.jpeg', '0'),
(184, '-', 'KOMPUTER', 'ACER', 'Baik', 0000, 1, 1, 'ab0838eff00be77fb852feb9250bab66.jpeg', '0'),
(185, '023.18.3300.677635.000.KD 620', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 1, '06be8502a56408631e04e5b6a73ec814.jpeg', '0'),
(186, '023.18.3300.677635.000.KD 653', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 1, '6e418e80cb08b0db2823d7d80d74411a.jpeg', '0'),
(187, '023.18.3300.677635.000.KD 666', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 1, 'db7e516fff5c186c5b7b2e2e9392bca7.jpeg', '0'),
(188, '-', 'MOUSE', 'LOGITECH', 'Baik', 0000, 1, 1, '9a23d4ae571b62f7d69b111f22f02c0d.jpeg', '0'),
(189, '042.01.3300.400915.000 KB', 'CPU', 'ACER', '', 2017, 1, 2, '24baaebad30491f8f52d37fb507a1f2d.jpeg', '1'),
(190, '-', 'MOUSE', 'LOGITECH', 'Baik', 0000, 1, 2, 'e1e59b14d17882dec3607473d3e46666.jpeg', '1'),
(191, '023.18.3300.677635.000.KD', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 2, '40385fc9e300b7f1ab532106e569684e.jpeg', '1'),
(193, '023.18.3300.677635.000.KD', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 2, 'fcca1385f968330c4d9f940c6a95d959.jpeg', '1'),
(194, '023.18.3300.677635.000.KD', 'CPU', 'ACER', 'Baik', 2018, 1, 2, '0d7f53aa5a177f6fd60877f99f95c29b.jpeg', '1'),
(195, '023.18.3300.677635.000.KD', 'PAPAN TULIS', 'IT-BOARD', 'Baik', 2013, 1, 3, '6485b91dd6ef21c1e7ef9d454936d836.jpeg', '0'),
(196, '023.18.3300.677635.000.KD', 'MEJA KOMPUTER', '', 'Baik', 2013, 1, 3, '6e8ac94c8f826cbda31631ad8ff7ed46.jpeg', '0'),
(197, '023.18.3300.677635.000.KD', 'KOMPUTER', 'ACER', 'Baik', 0000, 1, 3, 'd9c4089288841505fc1cd2848eecec71.jpeg', '0'),
(198, '-', 'MEJA DOSEN', '', 'Baik', 0000, 1, 3, 'b13e5fe9818d6042cc6150a78ee1339b.jpeg', '0'),
(200, '-', 'MEJA KOMPUTER', '', 'Rusak Ringan', 0000, 1, 5, '3a7b5d2c87671f2c7d2ccdf56353ae48.jpeg', '1'),
(201, '-', 'MEJA KOMPUTER', '', 'Rusak Ringan', 0000, 1, 5, '3dc4bad4af1d1ea6b9db7fe077dd06df.jpeg', '1'),
(202, '-', 'MEJA DOSEN', '', 'Baik', 0000, 1, 5, '2866b110aac495a83fa99a212dd223ed.jpeg', '1'),
(203, '-', 'KIPAS ANGIN', 'KRISBOW', 'Baik', 0000, 1, 5, '722ffcc873bbc942d07ac1a8a9395644.jpeg', '1'),
(204, '-', 'MEJA KURSI KULIAH', 'CHITOSE', 'Rusak Ringan', 0000, 1, 5, '0ab82bf76b0751465daffcc7109caf47.jpeg', '1'),
(205, '-', 'MEJA KOMPUTER', '', 'Rusak Ringan', 0000, 1, 5, 'fcef678f00847c029f5638b6b46b0b84.jpeg', '1'),
(206, '-', 'MEJA KOMPUTER', '', 'Rusak Ringan', 0000, 1, 5, 'f5cafaaf79d784398b5f9faa6b8b4d6c.jpeg', '1'),
(207, '-', 'MEJA KOMPUTER', '', 'Rusak Ringan', 0000, 1, 5, '606e1f2c62f77dea0c37929ede827058.jpeg', '1'),
(208, '-', 'MEJA KURSI KULIAH', 'CHITOSE', 'Baik', 0000, 1, 5, '9796e28bdbf088d9f168a4d5f8c9dbc5.jpeg', '1'),
(209, '-', 'MEJA KURSI KULIAH', 'CHITOSE', 'Rusak Ringan', 0000, 1, 5, 'f6226af634aac27e68cf4ced8695d311.jpeg', '1'),
(210, '023.18.3300.677635.000.KD', 'PAPAN TULIS', 'IT-BOARD', 'Baik', 2013, 1, 5, 'c577a9ed4529892c63b6ff3f40248c0d.jpeg', '1'),
(211, '-', 'TELEVISI', 'Samsung', 'Rusak Ringan', 0000, 1, 5, '541b116e062d72f938b1bffeca2d51cd.jpeg', '1'),
(212, '-', 'AC', 'PANASONIC', 'Baik', 0000, 1, 5, '0315923810234648746964f3cae1d6a7.jpeg', '1'),
(213, '-', 'KURSI KULIAH', 'CHITOSE', 'Rusak Ringan', 0000, 1, 5, '957a5403f35da25f11f683990299782f.jpeg', '1'),
(214, '-', 'KURSI KULIAH', 'CHITOSE', 'Rusak Ringan', 0000, 1, 5, 'c6de90bc3b4dec69b7f59b4fe39cd19b.jpeg', '1'),
(215, '-', 'YU-PIES', 'KENIKE', 'Rusak Berat', 0000, 1, 9, 'ce73b2fcf5564e539f6019d5a32e1714.jpeg', '1'),
(216, '-', 'YU-PIES', 'POWER TREE', 'Rusak Berat', 0000, 1, 9, '46365db5a2175bba913c6b6197ac8056.jpeg', '1'),
(217, '-', 'YU-PIES', 'APC', '', 0000, 1, 9, 'f3a43d2a93fca072d0fe4479e4d92c52.jpeg', '1'),
(218, '-', 'KOMPUTER', 'LENOVO', 'Baik', 0000, 1, 10, 'fdcf4193ca20ce80e88439948bce59e2.jpeg', '1'),
(219, '023.18.3300.677635.000.KD', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 10, '24be81c602eb2c3b0081cf8f57d3880e.jpeg', '0'),
(220, '-', 'MEJA DOSEN', '', 'Baik', 0000, 1, 10, '3c6439591fed49e343dabd6d26b5380c.jpeg', '1'),
(221, '023.18.3300.677635.000.KD 795', ' KURSI ', 'CHITOSE', 'Rusak Ringan', 2014, 1, 8, 'c844435c90abc18de63e1ba8c19d1c3e.jpeg', '1'),
(222, '023.18.3300.677635.000.KD', 'KURSI', 'CHITOSE', 'Rusak Ringan', 2014, 1, 12, 'ddca5cca282e5b773c0530764d3d08a7.jpeg', '1'),
(223, '023.18.3300.677635.000.KD', 'KURSI', 'CHITOSE', 'Rusak Ringan', 2014, 1, 8, '64e5e4631805c90cd9aa005fc0ddc7f4.jpeg', '1'),
(224, '023.18.3300.677635.000.KD', 'KURSI', 'CHITOSE', 'Rusak Ringan', 2014, 1, 12, '784b0db9dc3c3be5f0782040bed5ab28.jpeg', '1'),
(225, '023.18.3300.677635.000.KD 07', 'MEJA RAPAT', 'INFORMA', 'Baik', 0000, 1, 12, 'b820bbc512ab9d00e3379f2380d415ef.jpeg', '1'),
(226, '023.18.3300.677635.000.KD 42', 'MEJA DOSEN', '', 'Baik', 2017, 1, 12, '1e6dcc4d5179b3ce83d0359a98150b13.jpeg', '1'),
(227, '023.18.3300.677635.000.KD 729', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 12, '936534d232be170d831203b13267805e.jpeg', '1'),
(228, '023.18.3300.677635.000.KD 180', 'KOMPUTER', 'DELL', 'Baik', 2021, 1, 7, '09e79fe7815f902550eb464ccfcc7f83.jpeg', '1'),
(229, '023.18.3300.677635.000.KD 176', 'KOMPUTER', 'DELL', 'Baik', 2021, 1, 7, '67c984c2afc82da211f2e4c3168ca31e.jpeg', '1'),
(230, '023.18.3300.677635.000.KD 174', 'KOMPUTER', 'DELL', 'Baik', 2021, 1, 7, 'bbe3e18935a5604ca9c06a25ec54848a.jpeg', '1'),
(231, '023.18.3300.677635.000.KD', 'KOMPUTER', 'ASUS', 'Baik', 0000, 1, 7, 'a5d4071b16aba1dbc50b010e0a31ec69.jpeg', '1'),
(234, '-', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 7, '41804b1a717fca7d2273f4b8ed1b6634.jpeg', '0'),
(235, '-', 'Meja Komputer', '', 'Rusak Ringan', 0000, 1, 1, '2dadde3b3bfe52958e7b598446ea2107.jpeg', '1'),
(236, '023.18.3300.677635.000.KD 58', 'MEJA KOMPUTER', '', 'Baik', 2013, 1, 1, 'ccbe601ca711f5146f768f20341808f2.jpeg', '1'),
(237, '023.18.3300.677635.000.KD 67', 'MEJA KOMPUTER', '', 'Baik', 2013, 1, 1, 'f37389b0a43acdff0427d80b2de65d07.jpeg', '1'),
(238, '023.18.3300.677635.000.KD 55', 'MEJA KOMPUTER', '', 'Baik', 2013, 1, 1, '8208811ce2db5d81d120a71bdac9a631.jpeg', '1'),
(239, '023.18.3300.677635.000.KD 63', 'MEJA KOMPUTER', '', 'Baik', 2013, 1, 1, '214401079c28d5022719201cc7f2c5d3.jpeg', '1'),
(240, '-', 'MEJA KOMPUTER', '', 'Baik', 2013, 1, 1, 'bdac9439ad8640ceee30ecf5425e166c.jpeg', '1'),
(241, '-', 'MEJA KOMPUTER', '', 'Baik', 2013, 1, 1, 'c350ebc7159d6d0f15b1764d9890c2dd.jpeg', '1'),
(242, '023.18.3300.677635.000.KD 65', 'MEJA KULIAH', '', 'Baik', 2013, 1, 1, '9ce36d768443a18f85ba31b74922d435.jpeg', '1'),
(243, '023.18.3300.677635.000.KD 69', 'MEJA KULIAH', '', 'Baik', 2013, 1, 1, 'ee5fb157f34622035880f0873fc54180.jpeg', '1'),
(244, '023.18.3300.677635.000.KD 48', 'MEJA KULIAH', '', 'Baik', 2013, 1, 1, 'e3f9f322fea7abb153034984e2c0fba9.jpeg', '1'),
(245, '023.18.3300.677635.000.KD 56', 'MEJA KULIAH', '', 'Baik', 2013, 1, 1, '68b4d4b62a23df48869f79e8db03e6f1.jpeg', '1'),
(246, '-', 'kursi kuliah', 'APC', 'Baik', 2023, 1, 5, 'f69b259131009de8b954144db1bbcda4.jpeg', '0'),
(247, '042.01.3300.400915.000 KB', 'CPU', 'SIMBADDA', 'Baik', 2018, 1, 1, 'fecbb7b325a4b3b1da5ccab16979c762.jpeg', '1'),
(248, '-', 'KOMPUTER', 'ACER', 'Baik', 0000, 1, 1, '779aebc022a3d015310369bb89602b3d.jpeg', '1'),
(249, '-', 'KOMPUTER', 'ACER', 'Baik', 0000, 1, 1, '6043c4de2dd1aa7769922ab61a654280.jpeg', '1'),
(250, '023.18.3300.677635.000.KD 662', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 1, '7a5d63ec16d45ae3393a1e3bac2e0ce2.jpeg', '1'),
(251, '023.18.3300.677635.000.KD 38', 'CPU', 'HP', '', 2013, 1, 1, '6d91382c3531dc80f3e133be5125aadb.jpeg', '1'),
(252, '023.18.3300.677635.000.KD 53', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 1, '2bba6c7ea28a68cfaf8ad558f47836fb.jpeg', '1'),
(253, '023.18.3300.677635.000.KD 661', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 1, 'a8bfad9ffdcb8ec20c61e98bc19ab4c0.jpeg', '1'),
(254, '023.18.3300.677635.000.KD 711', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 1, '96e0185026b2069c43dcad5221bc52d0.jpeg', '1'),
(255, '042.01.3300.400915.000 KB	', 'CPU', 'ACER', 'Baik', 2018, 1, 1, '454ab02d79b0d1db3898645b102f004b.jpeg', '1'),
(256, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 1, '143c0fd3c818428547b57b184105de9e.jpeg', '1'),
(257, '-', 'KOMPUTER', 'HP', 'Baik', 0000, 1, 1, 'd5c5722dee82edf44f778321d177a220.jpeg', '1'),
(258, '-', 'MOUSE', 'LOGITECH', 'Baik', 2001, 1, 1, 'e01c5ede8a5c76750b41b0f89bce291a.jpeg', '1'),
(259, '-', 'MOUSE', 'LOGITECH', 'Baik', 0000, 1, 1, '85cca65163fbfa59423c447bc1b044e8.jpeg', '1'),
(260, '-', 'MOUSE', 'LOGITECH', 'Baik', 0000, 1, 1, 'eabe2a31700b12620d0980016ffd5569.jpeg', '1'),
(261, '-', 'KOMPUTER', 'HP', 'Baik', 0000, 1, 1, 'ddf7e281443ea6144c42533b8921d02b.jpeg', '1'),
(262, '023.18.3300.677635.000.KD 43', 'MEJA DOSEN', '', 'Baik', 2013, 1, 1, '6418294107eaf1329a2554d543c9d4a7.jpeg', '1'),
(263, '023.18.3300.677635.000.KD 656', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 1, 'ae3bae4efe8b3d5fe6482802319db8dc.jpeg', '1'),
(264, '-', 'MOUSE', 'LOGITECH', 'Baik', 0000, 1, 1, 'e1cab7d4c551b92fc675698d0b3cbf16.jpeg', '1'),
(265, '-', 'MOUSE', 'LOGITECH', 'Baik', 0000, 1, 1, '097e248fd4f7e39c8bd1f604c6d809c3.jpeg', '1'),
(266, '-', 'MEJA KOMPUTER', '', 'Rusak Ringan', 0000, 1, 7, '4e39abe81806512d3f21b416ad4b4399.jpeg', '1'),
(267, '023.18.3300.677635.000.KD 732', 'KURSI KULIAH', 'ELVIRON', 'Baik', 2013, 1, 1, '0cbc563bf5b663400479e42b2a267397.jpeg', '1'),
(268, '-', 'MOUSE', 'ACER', 'Baik', 0000, 1, 1, 'ce5bd22ca604dc00f84bb48a0c469bdd.jpeg', '1'),
(269, '023.18.3300.677635.000.KD 183', 'KOMPUTER ', 'DELL', 'Baik', 2021, 1, 1, '1ea3e0cc2b0fadbbae1615e776d270ce.jpeg', '1'),
(270, '023.18.3300.677635.000.KD 177', 'KOMPUTER', 'DELL', 'Baik', 2021, 1, 7, '25b1cf20c232af60fa8451e1478b866b.jpeg', '1'),
(271, '023.18.3300.677635.000.KD 40', 'MEJA KULIAH', '', 'Baik', 0000, 1, 7, 'ac16b6dae72f0e7ba478607457984c33.jpeg', '1'),
(272, '-', 'KEYBOARD', 'HP', 'Baik', 0000, 1, 7, '43a1e4cfa8021d2d90208baccec0fbdc.jpeg', '1'),
(273, '023.18.3300.677635.000.KD 723', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 7, '9b4352faac9100cea3e731a37d3f6a8e.jpeg', '1'),
(274, '023.18.3300.677635.000.KD 66', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 7, 'd92770f688d3252ee35ac0120ffb5c07.jpeg', '1'),
(275, '023.18.3300.677635.000.KD 731', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 7, 'e10d4a69a4acb55305a61103d06961f8.jpeg', '1'),
(276, '023.18.3300.677635.000.KD 665', 'KURSI KULIAH', 'ELVIRON', 'Rusak Ringan', 2013, 1, 7, '23c3a0f5e56820fc85e18e2bc36b182b.jpeg', '1'),
(277, '023.18.3300.677635.000.KD 247', 'CPU', 'ACER', 'Baik', 2022, 1, 7, 'f7c20a94de3ad22a3f4234621286aa99.jpeg', '1'),
(278, '023.18.3300.677635.000.KD 2', 'YU-PIES', 'ICA', 'Baik', 2019, 1, 7, '4d8e75a20fa48a4614084da59c198329.jpeg', '1'),
(279, '023.18.3300.677635.000.KD 246', 'CPU', 'ACER', 'Baik', 2022, 1, 7, '7eef7290cd6025b8b9a26673fbaacd98.jpeg', '1'),
(280, '-', 'KEYBOARD', 'ACER', 'Baik', 0000, 1, 7, '227c8c2cb85706ba802756635022f03e.jpeg', '1'),
(281, '-', 'KEYBOARD', 'ASUS', 'Baik', 0000, 1, 7, 'c7abf3324f4fd6bfdcf0c662e7c80495.jpeg', '1'),
(282, '-', 'KOMPUTER', 'ASUS', 'Baik', 0000, 1, 7, 'd9798f51a4d72d07276b4dfc40746c46.jpeg', '1'),
(283, '-', 'KEYBOARD', 'ASUS', 'Baik', 0000, 1, 7, 'cb5c9b517ca019dfeee3164ae4e26225.jpeg', '1'),
(284, '-', 'KOMPUTER', 'ASUS', 'Baik', 0000, 1, 7, 'c4b8da83914afd606cdba72c247aac3f.jpeg', '1'),
(285, '-', 'KOMPUTER', 'ASUS', 'Baik', 0000, 1, 7, '8d3f50f6fb6da389b2afd2f868f14319.jpeg', '1'),
(286, '-', 'KEYBOARD', 'LOGITECH', 'Baik', 0000, 1, 7, '4919d7770242a15028082228faee6587.jpeg', '1'),
(287, '-', 'MOUSE', 'ACER', 'Baik', 0000, 1, 7, 'ec0b9855992da1344ad83cac37dfa7e4.jpeg', '1'),
(288, '023.18.3300.677635.000.KD 179', 'KOMPUTER', 'DELL', 'Baik', 2021, 1, 7, '89da307f40bd74ddd6dc7517022b989f.jpeg', '1'),
(289, '023.18.3300.677635.000.KD 22', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 7, 'ace00da6b00a2b2b5f3d0f67eab7d3a8.jpeg', '1'),
(290, '023.18.3300.677635.000.KD 33', 'MEJA KOMPUTER', '', 'Baik', 0000, 1, 7, '5e169b0c98dbc1e041fbc122288a0c09.jpeg', '1'),
(291, '-', 'PAPAN TULIS', '', 'Baik', 0000, 1, 7, 'e6f474300a95fa6f8923a95b4d53f231.jpeg', '1'),
(292, '-', 'INFOCUS', 'EPSON', 'Baik', 0000, 1, 7, '2ce6c5e9a117fbada8cf372f585af269.jpeg', '1'),
(293, '-', 'SPIKER', 'BMB', 'Baik', 0000, 1, 7, '5e0a84580c69d708b7318e31c07798d9.jpeg', '1'),
(294, '023.18.3300.677635.000.KD 40', 'MEJA DOSEN', '', 'Baik', 0000, 1, 7, '7d69c18980da6f8589fedcbe68b2b4eb.jpeg', '1'),
(295, '-', 'KURSI KULIAH', 'ELVIRON', 'Baik', 0000, 1, 7, '75bfef56ce47351dc818560696951856.jpeg', '1'),
(296, '-', 'KURSI KULIAH', 'ELVIRON', 'Baik', 0000, 1, 7, '33f61405c10cf0011ed872386779ffc6.jpeg', '1'),
(297, '023.18.3300.677635.000.KD', 'PAPAN TULIS', 'IT-BOARD', 'Baik', 2013, 1, 7, '023ea2d18e44b58be81107f1001ea2bd.jpeg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_monitoring`
--

CREATE TABLE `galeri_monitoring` (
  `id` int(11) NOT NULL,
  `monitoring_id` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_monitoring`
--

INSERT INTO `galeri_monitoring` (`id`, `monitoring_id`, `foto`) VALUES
(30, 19, '14afc92009c4212b56af6d25d1f41bb8.jpeg'),
(31, 20, '72fb067285d2e5b94f27bafed2f2e285.png'),
(40, 31, '8e4c63aa7852e76ad83a19f4cf85506e.jpeg'),
(41, 32, 'ab82e43b3af05460985e03f8fdfaa59d.jpeg'),
(42, 33, 'eeffc7b1fac4a2564e92a61c0d5f87bc.jpeg'),
(43, 34, 'cdd75e6578ac19ea17f28fd142095c77.jpeg'),
(44, 35, '51ac117d18ebd521ec92953c670e58bf.jpeg'),
(45, 36, '2fbcc1c16c34bbd80e9b35e71d2911aa.jpeg'),
(46, 37, '493ff57ebdabcb9185578b101c1de88a.jpg'),
(47, 38, '4c2e366275f6b67ea5f21401ce33ca8a.jpg'),
(48, 39, '25a989b040b467f1f8655f78b9886f67.jpg'),
(49, 40, '277cf2e492c9e2b2f07abdc82cc9bebc.jpeg'),
(50, 41, '5ac2d7f8df45568e2914af3a09bd75eb.jpeg'),
(51, 42, '0f08fa59f077668ef9624f6557fb60ba.jpeg'),
(52, 43, 'd4627ef814c1fd04122d183694caa526.jpeg'),
(53, 44, '5d19d236a784c73472918224c74fc103.jpeg'),
(54, 45, 'a8bba43e123b11762ec7e401aecfda7a.jpeg'),
(55, 46, '942aaf54c91f84257e2a24b4a55faa49.jpeg'),
(56, 47, 'c924693720314e06e782465b7fd655b5.jpeg'),
(57, 48, '39db7a94a1c0bc07c011babf2cadc0f3.jpeg'),
(58, 49, '840e12e35656d6e02202057c8a89dcde.jpeg');

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
(5, 'UNO', '2023-09-04 14:10:21'),
(6, 'DELL', '2023-09-04 14:10:28'),
(7, 'APPLE', '2023-09-04 14:10:35'),
(8, 'BMB', '2023-09-04 14:10:41'),
(9, 'AUBERN', '2023-09-04 14:10:52'),
(10, 'BRISTOL', '2023-09-04 14:10:59'),
(11, 'FUTURA', '2023-09-04 14:11:08'),
(12, 'CHITOSE', '2023-09-04 14:11:19'),
(13, 'SIMBADDA', '2023-09-04 14:11:31'),
(14, 'CAMEROON', '2023-09-04 14:11:43'),
(15, 'ASUS', '2023-09-04 14:12:00'),
(16, 'KENIKE', '2023-09-04 14:12:05'),
(17, 'POWER TREE', '2023-09-04 14:12:14'),
(18, 'APC', '2023-09-04 14:12:20'),
(19, 'ELVIRON', '2023-09-04 14:12:30'),
(20, 'EPSON', '2023-09-04 14:12:36'),
(21, 'KRISBOW', '2023-09-04 14:12:46'),
(22, 'PROLINK', '2023-09-04 14:12:58'),
(23, 'SHARP', '2023-09-04 14:13:13'),
(24, 'LG', '2023-09-04 14:13:19'),
(25, 'BROTHER', '2023-09-04 14:13:44'),
(26, 'VIP', '2023-09-04 14:13:50'),
(27, 'INFORMA', '2023-09-04 14:13:56'),
(28, 'PANASONIC', '2023-09-04 14:14:07'),
(29, 'ACER', '2023-09-04 14:14:13'),
(30, 'LENOVO', '2023-09-04 14:14:19'),
(31, 'HP', '2023-09-04 14:14:26'),
(32, 'LOGITECH', '2023-09-04 14:14:36'),
(33, 'BONDA', '2023-09-04 14:14:44'),
(34, 'POLYTRON', '2023-09-04 14:14:56'),
(35, 'ORBITREND', '2023-09-04 14:40:41'),
(36, 'IT-BOARD', '2023-09-05 14:36:30'),
(37, 'X-GA', '2023-09-06 08:59:02'),
(39, 'ICA', '2023-09-08 07:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `aset_id` int(11) NOT NULL,
  `kondisi_kerusakan` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `is_notif` int(11) NOT NULL,
  `is_repair` enum('0','1','2') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `aset_id`, `kondisi_kerusakan`, `status`, `is_notif`, `is_repair`, `created_at`) VALUES
(19, 20, 'Rusak Berat', '1', 1, '1', '2023-09-04 17:20:53'),
(20, 19, 'Rusak Berat', '1', 1, '1', '2023-09-05 00:50:23'),
(31, 187, 'Rusak Ringan', '0', 0, '2', '2023-09-06 17:19:17'),
(32, 188, 'Baik', '0', 0, '2', '2023-09-06 17:42:16'),
(33, 186, 'Baik', '0', 0, '2', '2023-09-06 20:51:58'),
(34, 185, 'Rusak Ringan', '0', 0, '2', '2023-09-06 21:30:02'),
(35, 184, 'Baik', '0', 0, '2', '2023-09-06 21:31:37'),
(36, 183, 'Baik', '1', 1, '2', '2023-09-06 21:35:55'),
(37, 234, 'Baik', '2', 1, '2', '2023-09-07 09:25:07'),
(38, 178, 'Baik', '1', 1, '2', '2023-09-07 09:35:49'),
(39, 182, 'Baik', '0', 0, '2', '2023-09-07 10:09:17'),
(40, 60, 'Baik', '0', 0, '2', '2023-09-07 13:14:43'),
(41, 219, 'Rusak Ringan', '1', 0, '2', '2023-09-07 15:01:02'),
(42, 246, 'Rusak Ringan', '2', 1, '0', '2023-09-07 15:04:47'),
(43, 198, 'Rusak Ringan', '1', 1, '2', '2023-09-07 15:08:28'),
(44, 197, 'Rusak Ringan', '1', 1, '1', '2023-09-07 15:13:23'),
(45, 195, 'Baik', '1', 1, '0', '2023-09-08 07:39:20'),
(46, 196, 'Baik', '3', 1, '0', '2023-09-08 07:40:44'),
(47, 197, 'Baik', '0', 0, '0', '2023-09-08 07:42:44'),
(48, 197, 'Baik', '0', 0, '0', '2023-09-08 07:43:43'),
(49, 197, 'Baik', '0', 0, '0', '2023-09-08 07:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `notif_perbaikan`
--

CREATE TABLE `notif_perbaikan` (
  `id` int(11) NOT NULL,
  `aset_id` int(128) NOT NULL,
  `is_notif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notif_perbaikan`
--

INSERT INTO `notif_perbaikan` (`id`, `aset_id`, `is_notif`) VALUES
(5, 63, '1'),
(6, 59, '1'),
(7, 197, '0');

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
(5, 'Lab mi 05', '2023-08-25 16:35:31'),
(6, 'Lab mi 06', '2023-08-25 16:35:36'),
(7, 'Lab mi 07', '2023-08-25 16:35:42'),
(8, 'Ruang Dosen', '2023-08-25 16:35:53'),
(9, 'Gudang', '2023-08-25 16:35:57'),
(10, 'Perpustakaan', '2023-09-04 14:08:51'),
(11, 'Lobby', '2023-09-04 14:09:03'),
(12, 'Ruangan Seminar', '2023-09-04 14:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Super Admin'),
(3, 'Kepala Lab', 'lab123', '081c49b8c66a69aad79f4bca8334e0ef', 'Kepala Lab'),
(4, 'Kajur', 'kajur123', 'fdd9dc91bf56e3376411fc7a54030075', 'Kajur'),
(5, 'BMN', 'bmn123', 'ccd4f3a9e989aabbec064edb1bb290d9', 'BMN'),
(6, 'PLP', 'plp', 'a20b8e5b618f463a9da71175cbf9aaf9', 'PLP');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_monitoring_ibfk_1` (`monitoring_id`);

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
-- Indexes for table `notif_perbaikan`
--
ALTER TABLE `notif_perbaikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aset_id` (`aset_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `galeri_monitoring`
--
ALTER TABLE `galeri_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `merek`
--
ALTER TABLE `merek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `notif_perbaikan`
--
ALTER TABLE `notif_perbaikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri_monitoring`
--
ALTER TABLE `galeri_monitoring`
  ADD CONSTRAINT `galeri_monitoring_ibfk_1` FOREIGN KEY (`monitoring_id`) REFERENCES `monitoring` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notif_perbaikan`
--
ALTER TABLE `notif_perbaikan`
  ADD CONSTRAINT `notif_perbaikan_ibfk_1` FOREIGN KEY (`aset_id`) REFERENCES `aset` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
