-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 03:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `nama_barang` varchar(500) NOT NULL,
  `harga` varchar(500) NOT NULL,
  `jumlahbarang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_barang`, `nama`, `gambar`, `nama_barang`, `harga`, `jumlahbarang`) VALUES
(2, 'admin', 'bismillah', 'kacamata', '120002', '80'),
(3, 'admin', 'awowkwkkw', 'mobil', '75000', '6'),
(4, 'admin2', 'hahahah', 'sepeda', '65700', '34'),
(5, 'admin', 'hp xiamo', 'redminote 8', '1300000', '3'),
(6, 'ifan', 'pigura', 'pigura 12R', '9000', '6');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `level` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `alamat`, `email`, `jenis`, `level`) VALUES
('a', 'a', 'a', 'a', 'a@gmail.com', 'perempuan', 'penjual'),
('admin', 'admin', 'admin', 'glatik', 'ifanputrarama@gmail.com', 'laki-laki', 'penjual'),
('admin2', 'admin2', 'admin2', 'magetan', 'admin2@gmail.com', 'perempuan', 'penjual'),
('ifan', 'ifan', 'ifan', 'ifan', 'ifanputrarama@gmail.com', 'laki-laki', 'penjual'),
('user', 'user', 'user', 'surabaya', 'user@gmail.com', 'perempuan', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
