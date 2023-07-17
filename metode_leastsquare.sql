-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 04:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metode_leastsquare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `ttl_tempat` varchar(30) NOT NULL,
  `ttl_tgl` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jk`, `ttl_tempat`, `ttl_tgl`, `alamat`, `username`, `password`, `hak_akses`) VALUES
(1, 'Admin', 'Perempuan', 'Kuningan', '2023-06-07', 'Alamat kuningan RT. 08 RW. 3', 'admin', 'admin', 1),
(2, 'Manager', 'Laki - Laki', 'Kuningan', '2023-05-30', 'Alamat kuningan RT. 08 RW. 3', 'manajer', 'manejer', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `tot_penjualan` double DEFAULT NULL,
  `x` double NOT NULL,
  `xy` double NOT NULL,
  `x2` double NOT NULL,
  `hasil` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `bulan`, `tot_penjualan`, `x`, `xy`, `x2`, `hasil`) VALUES
(1, 'Desember 2019', 116961, 0, 0, 0, 117658),
(2, 'Januari 2020', 117658, 0, 0, 0, 218999),
(3, 'Februari 2020', 91115, 0, 0, 0, 205483),
(4, 'Maret 2020', 99771, 0, 0, 0, 194458),
(5, 'April 2020', 77399, 0, 0, 0, 187623),
(6, 'Mei 2020', 114015, 0, 0, 0, 183833),
(7, 'Juni 2020', 82450, 0, 0, 0, 177060),
(8, 'Juli 2020', 101156, 0, 0, 0, 174307),
(9, 'Agustus 2020', 120878, 0, 0, 0, 173082),
(10, 'September 2020', 126069, 0, 0, 0, 171688),
(11, 'Oktober 2020', 141426, 0, 0, 0, 169154),
(12, 'November 2020', 107782, 0, 0, 0, 162612),
(13, 'Desember 2020', 99450, 0, 0, 0, 155220),
(14, 'Januari 2021', 107414, 0, 0, 0, 147785),
(15, 'Februari 2021', 84326, 0, 0, 0, 138778),
(16, 'Maret 2021', 112021, 0, 0, 0, 131356),
(17, 'April 2021', 123458, 0, 0, 0, 124254),
(18, 'Mei 2021', 151750, 0, 0, 0, 118287),
(19, 'Juni 2021', 136305, 0, 0, 0, 111127),
(20, 'Juli 2021', 97726, 0, 0, 0, 101931),
(21, 'Agustus 2021', 62876, 0, 0, 0, 91320),
(22, 'September 2021', 78397, 0, 0, 0, 81952),
(23, 'Oktober 2021', 74174, 0, 0, 0, 73132),
(24, 'November 2021', 86433, 0, 0, 0, 65352),
(25, 'Desember 2021', 53319, 0, 0, 0, 57451),
(26, 'Januari 2022', 75428, 0, 0, 0, 51414),
(27, 'Februari 2022', 63379, 0, 0, 0, 47476),
(28, 'Maret 2022', 110209, 0, 0, 0, 46439),
(29, 'April 2022', 93960, 0, 0, 0, 47374),
(30, 'Mei 2022', 118617, 0, 0, 0, 51101),
(31, 'Juni 2022', 123432, 0, 0, 0, 56031),
(32, 'Juli 2022', 112898, 0, 0, 0, 63997),
(33, 'Agustus 2022', 148324, 0, 0, 0, 71800),
(34, 'September 2022', 107620, 0, 0, 0, 81017),
(35, 'Oktober 2022', 135069, 0, 0, 0, 86721),
(36, 'November 2022', 64732, 0, 0, 0, 93772),
(37, 'Desember 2023', 45231, 0, 0, 0, 93939);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
