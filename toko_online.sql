-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 04:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'Kimizuka', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id_deskripsi` int(11) NOT NULL,
  `dimension` varchar(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `battery` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deskripsi`
--

INSERT INTO `deskripsi` (`id_deskripsi`, `dimension`, `display`, `camera`, `platform`, `battery`) VALUES
(1, '165.3 x 76.8 x 9.4 mm (6.51 x 3.02 x 0.37 in)', 'IPS LCD, 120Hz, HDR10, 450 nits (typ)', '48MP Back Camera\r\n20MP front Camera', 'Qualcomm Snapdragon 860 (7 nm)', 'Li-Po 5160 mAh, non-removable'),
(2, '159.2 mm x 73.5 mm x 8.0/8.7 mm (depending on color)', 'Super AMOLED, 120Hz, 1000 nits (peak)', '64 MP back camera\r\n32 MP front camera', 'Qualcomm SM7325 Snapdragon 778G 5G (6 nm)', 'Li-Po 4300 mAh, non-removable'),
(3, '172.8 x 77.3 x 10.3 mm (6.80 x 3.04 x 0.41 in)', 'AMOLED, 1B colors, 144Hz, HDR10+, 800 nits (typ), 1200 nits (peak)', '64 MP back camera\r\n24 MP front camera', 'Qualcomm SM8350 Snapdragon 888 5G (5 nm)', 'Li-Po 6000 mAh, non-removable'),
(4, '163.3 x 77.9 x 8.9 mm (6.43 x 3.07 x 0.35 in)', 'Dynamic AMOLED 2X, 120Hz, HDR10+, 1750 nits (peak)', '108 MP back camera\r\n40 MP front camera', 'Exynos 2200 (4 nm) - Europe', 'Li-Ion 5000 mAh, non-removable'),
(5, '160.8 x 78.1 x 7.7 mm (6.33 x 3.07 x 0.30 in)', 'Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (HBM), 1200 nits (peak)', '12 MP back camera\r\n12 MP front camera', 'Apple A15 Bionic (5 nm)', 'Li-Ion 4352 mAh, non-removable (16.75 Wh)'),
(6, '160.8 x 78.1 x 7.4 mm (6.33 x 3.07 x 0.29 in)', 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)', '12 MP back camera\r\n12 MP front camera', 'Apple A14 Bionic (5 nm)', 'Li-Ion 3687 mAh, non-removable (14.13 Wh)'),
(7, '160.7 x 77.6 x 7.9 mm (6.33 x 3.06 x 0.31 in)', 'LTPO Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (typ), 2000 nits (HBM)', '48 MP back camera\r\n12 MP front camera', 'Apple A16 Bionic (4 nm)', 'Li-Ion 4323 mAh, non-removable (16.68 Wh)'),
(8, '162.5 x 76.7 x 8.5 mm (6.40 x 3.02 x 0.33 in)', 'AMOLED, 1B colors, 120Hz, HDR10+, 800 nits (HBM)', '64 MP back camera\r\n24 MP front camera', 'Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm)', 'Li-Po 4700 mAh, non-removable'),
(9, 'q', 'w', 'e', 'r', 't'),
(10, 'q', 'w', 'e', 'r', 't'),
(11, 'q', 'w', 'e', 'r', 't'),
(12, 'q', 'w', 'e', 'r', 't'),
(13, 'q', 'w', 'e', 'r', 't'),
(14, 'q', 'w', 'e', 'r', 't'),
(15, 'q', 'w', 'e', 'r', 't'),
(16, '1', '2', '3', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelian_hp`
--

CREATE TABLE `detail_pembelian_hp` (
  `id_detail_pembelian_hp` int(11) NOT NULL,
  `id_pembelian_hp` int(11) NOT NULL,
  `id_hp` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pembelian_hp`
--

INSERT INTO `detail_pembelian_hp` (`id_detail_pembelian_hp`, `id_pembelian_hp`, `id_hp`, `qty`) VALUES
(19, 19, 1, 1),
(20, 20, 1, 1),
(21, 21, 1, 1),
(22, 22, 1, 1),
(23, 23, 1, 1),
(24, 24, 3, 1),
(25, 24, 4, 1),
(26, 25, 8, 1),
(27, 25, 6, 1),
(28, 26, 6, 1),
(29, 26, 8, 1),
(30, 27, 3, 1),
(31, 28, 7, 1),
(32, 29, 1, 1),
(33, 30, 1, 1),
(34, 31, 3, 1),
(35, 32, 1, 1),
(36, 33, 5, 1),
(37, 33, 3, 1),
(38, 34, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `id_hp` int(11) NOT NULL,
  `seri_hp` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `id_deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hp`
--

INSERT INTO `hp` (`id_hp`, `seri_hp`, `harga`, `id_deskripsi`, `foto`) VALUES
(1, 'Poco X3 Pro', 3599000, '1', 'poco_x3_pro.jpg'),
(2, 'Realme GT ME', 5399000, '2', 'realme_gt_master_edition.jpg'),
(3, 'ROG Phone 5', 10000000, '3', 'rog_phone_5.jpg'),
(4, 'Samsung S22 Ultra', 17999000, '4', 'S22_ultra.jpg'),
(5, 'Iphone 13 Pro Max', 19499000, '5', 'ip13_pro_max.jpg'),
(6, 'Iphone 12 Pro Max', 17499000, '6', 'ip12_pro_max.jpg'),
(7, 'Iphone 14 Pro Max', 25999000, '7', 'ip14_pro_max.jpg'),
(8, 'Poco F4 GT', 7999000, '8', 'poco-f4-gt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_hp`
--

CREATE TABLE `pembayaran_hp` (
  `id_pembayaran_hp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pembelian_hp` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_hp`
--

INSERT INTO `pembayaran_hp` (`id_pembayaran_hp`, `id_user`, `id_pembelian_hp`, `tanggal_pembayaran`, `status`) VALUES
(0, 1, 24, '2022-10-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_hp`
--

CREATE TABLE `pembelian_hp` (
  `id_pembelian_hp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_hp`
--

INSERT INTO `pembelian_hp` (`id_pembelian_hp`, `id_user`, `tanggal_beli`) VALUES
(19, 1, '2022-10-06'),
(20, 1, '2022-10-07'),
(21, 1, '2022-10-19'),
(22, 1, '2022-10-21'),
(23, 1, '2022-10-21'),
(24, 1, '2022-10-22'),
(25, 1, '2022-10-24'),
(26, 1, '2022-10-24'),
(27, 1, '2022-10-26'),
(28, 2, '2022-10-26'),
(29, 1, '2022-10-26'),
(30, 1, '2022-10-28'),
(31, 1, '2022-10-28'),
(32, 1, '2022-10-28'),
(33, 1, '2022-10-28'),
(34, 1, '2022-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_email`, `gender`, `alamat`, `username`, `password`) VALUES
(1, 'parel', 'kimizuka', 'L', 'Wlingi', 'farel kebab', '202cb962ac59075b964b07152d234b70'),
(2, 'dewa', 'dewa', 'L', 'WLingi', 'dewa', '202cb962ac59075b964b07152d234b70'),
(7, 'funi', 'puni', 'L', 'puni', 'puni', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indexes for table `detail_pembelian_hp`
--
ALTER TABLE `detail_pembelian_hp`
  ADD PRIMARY KEY (`id_detail_pembelian_hp`),
  ADD KEY `id_hp` (`id_hp`),
  ADD KEY `id_pembelian_hp` (`id_pembelian_hp`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id_hp`),
  ADD KEY `id_deskripsi` (`id_deskripsi`(768));

--
-- Indexes for table `pembayaran_hp`
--
ALTER TABLE `pembayaran_hp`
  ADD PRIMARY KEY (`id_pembayaran_hp`),
  ADD KEY `id_pembelian_hp` (`id_pembelian_hp`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pembelian_hp`
--
ALTER TABLE `pembelian_hp`
  ADD PRIMARY KEY (`id_pembelian_hp`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id_deskripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detail_pembelian_hp`
--
ALTER TABLE `detail_pembelian_hp`
  MODIFY `id_detail_pembelian_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `hp`
--
ALTER TABLE `hp`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembelian_hp`
--
ALTER TABLE `pembelian_hp`
  MODIFY `id_pembelian_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
