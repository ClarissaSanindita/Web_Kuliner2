-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 01:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_kuliner2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Makanan Kering'),
(11, 'Snack'),
(12, 'Brownis'),
(13, 'Biskuit'),
(14, 'Gorengan'),
(19, 'Donat'),
(20, 'Makanan Basah');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_cover` text NOT NULL,
  `pembuat` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `id_kategori`, `harga`, `foto_cover`, `pembuat`, `stok`) VALUES
(63, 'Giat UN2018', 0, 10000, 'product11.png', '123', 100),
(64, 'Giat UN2018', 0, 10000, 'port01.jpg', 'erlangga', 100),
(69, 'Web Programming', 17, 200000, 'buku4.jpg', 'erlangga', 4),
(70, 'Basisdata ', 17, 20000, 'buku5.jpg', 'erlangga', 96),
(71, 'Matahari Bulan', 16, 200000, 'buku1.png', 'Togamas', 10),
(73, 'Martabak', 14, 20000, 'martabak1.png', '', 0),
(74, 'Lapis Malang', 12, 30000, 'lapis1.jpg', '', 10),
(75, 'Sang Pisang', 11, 25000, 'sang1.png', '', 3),
(76, 'Brownis Amanda', 12, 26000, 'amanda1.png', '', 25),
(77, 'Dunkin Donuts', 19, 50000, 'donat1.png', '', 111),
(78, 'Martabak Manis', 20, 28000, 'bulan1.jpg', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id_nota`, `id_transaksi`, `id_makanan`, `jumlah`) VALUES
(157, 77, 69, 2),
(158, 77, 70, 2),
(161, 83, 69, 1),
(162, 84, 69, 1),
(163, 85, 69, 1),
(164, 85, 70, 1),
(165, 86, 70, 1),
(166, 87, 69, 1),
(167, 88, 74, 20),
(168, 89, 73, 11);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `bukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `nama_pembeli`, `total`, `tanggal_beli`, `status`, `bukti`) VALUES
(15, 1, 'Toriq', 200222, '2019-01-09', 'Lunas', '-'),
(17, 1, 'Toldo', 200222, '2019-01-19', 'Lunas', '-'),
(18, 1, 'yan', 200222, '2018-05-09', 'Lunas', '-'),
(74, 3, 'Suherman', 40000, '2018-05-09', '', ''),
(77, 3, 'Bramantyo', 500000, '2018-05-09', '', ''),
(79, 1, 'David', 200222, '2018-05-09', 'Lunas', '-'),
(80, 3, 'Bramantyo', 500000, '2019-01-01', '', ''),
(81, 3, 'naili', 10000, '2019-02-11', '', ''),
(82, 3, 'rizky', 10000, '2019-02-11', '', ''),
(83, 3, 'rizky', 200000, '2019-02-11', '', ''),
(84, 3, 'riska', 200000, '2019-02-11', '', ''),
(85, 3, 'bocil', 220000, '2019-02-11', '', ''),
(86, 3, 'hm', 20000, '2019-02-11', '', ''),
(87, 3, 'nanan', 200000, '2019-02-12', '', ''),
(88, 3, 'ami', 600000, '2019-02-12', '', ''),
(89, 3, 'Pak Arifin', 220000, '2019-02-12', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Andre', 'yuda', 'yuda123', 'admin'),
(3, 'Clarissa Sanindita', 'kasir', 'kasir', 'kasir'),
(4, 'Anisah Nabila', 'admin', 'admin', 'admin'),
(5, 'Andre', 'yuda', 'yuda123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_buku` (`id_makanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
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
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
