-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 01:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `no` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`no`, `nama`, `alamat`, `harga`, `keterangan`, `foto`) VALUES
('1', 'Bakso', 'Rp.5000-50000', 'Malang', 'Makanan Khas Malang', '24042019132003Bakaso.jpg'),
('2', 'Angsle', 'Rp.7000-10.000', 'Malang', 'Minuman Khas Malang', '24042019132723Angsle.jpg'),
('3', 'Rawon Nguling', 'Rp.14.000-30.000', 'Malang', 'Makanan khas malang\r\n', '24042019133025rawon.jpg'),
('4', 'STMJ', 'Rp.5000-10.000', 'Malang', 'Minuman Khas Malang', '24042019133134STMJ.jpg'),
('5', 'Ronde', 'Rp.4.000-7.000', 'Malang', 'Makanan Khas malang', '24042019133532Ronde.jpg'),
('6', 'Tempe', 'Rp.2.000-5.000', 'Malang', 'Makanan Khas Malang', '24042019133615tempe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khas`
--

CREATE TABLE `khas` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nama_makanan` text NOT NULL,
  `alamat` text NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `khas`
--
ALTER TABLE `khas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khas`
--
ALTER TABLE `khas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
