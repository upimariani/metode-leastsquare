-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 04:27 PM
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
(2, 'Manager', 'Laki - Laki', 'Kuningan', '2023-05-30', 'Alamat kuningan RT. 08 RW. 3', 'manajer', 'manajer', 2),
(4, 'Marketing', 'Laki - Laki', 'Kuningan', '2009-05-04', 'Kuningan, Jawa Barat', 'marketing', 'marketing', 3);

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
(1, 'Desember 2019', 116961, -18, -2105298, 324, 117658),
(2, 'Januari 2020', 117658, -17, -2000186, 289, 218999),
(3, 'Februari 2020', 91115, -16, -1457840, 256, 205483),
(4, 'Maret 2020', 99771, -15, -1496565, 225, 194458),
(5, 'April 2020', 77399, -14, -1083586, 196, 187623),
(6, 'Mei 2020', 114015, -13, -1482195, 169, 183833),
(7, 'Juni 2020', 82450, -12, -989400, 144, 177060),
(8, 'Juli 2020', 101156, -11, -1112716, 121, 174307),
(9, 'Agustus 2020', 120878, -10, -1208780, 100, 173082),
(10, 'September 2020', 126069, -9, -1134621, 81, 171688),
(11, 'Oktober 2020', 141426, -8, -1131408, 64, 169154),
(12, 'November 2020', 107782, -7, -754474, 49, 162612),
(13, 'Desember 2020', 99450, -6, -596700, 36, 155220),
(14, 'Januari 2021', 107414, -5, -537070, 25, 147785),
(15, 'Februari 2021', 84326, -4, -337304, 16, 138778),
(16, 'Maret 2021', 112021, -3, -336063, 9, 131356),
(17, 'April 2021', 123458, -2, -246916, 4, 124254),
(18, 'Mei 2021', 151750, -1, -151750, 1, 118287),
(19, 'Juni 2021', 136305, 1, 136305, 1, 111127),
(20, 'Juli 2021', 97726, 2, 195452, 4, 101931),
(21, 'Agustus 2021', 62876, 3, 188628, 9, 91320),
(22, 'September 2021', 78397, 4, 313588, 16, 81952),
(23, 'Oktober 2021', 74174, 5, 370870, 25, 73132),
(24, 'November 2021', 86433, 6, 518598, 36, 65352),
(25, 'Desember 2021', 53319, 7, 373233, 49, 57451),
(26, 'Januari 2022', 75428, 8, 603424, 64, 51414),
(27, 'Februari 2022', 63379, 9, 570411, 81, 47476),
(28, 'Maret 2022', 110209, 10, 1102090, 100, 46439),
(29, 'April 2022', 93960, 11, 1033560, 121, 47374),
(30, 'Mei 2022', 118617, 12, 1423404, 144, 51101),
(31, 'Juni 2022', 123432, 13, 1604616, 169, 56031),
(32, 'Juli 2022', 112898, 14, 1580572, 196, 63997),
(33, 'Agustus 2022', 148324, 15, 2224860, 225, 71800),
(34, 'September 2022', 107620, 16, 1721920, 256, 81017),
(35, 'Oktober 2022', 135069, 17, 2296173, 289, 86721),
(36, 'November 2022', 64732, 18, 1165176, 324, 93772),
(37, 'Desember 2023', 45231, 0, 0, 0, 93939),
(38, 'Januari', 1369, 18, 24642, 324, 98813);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_harian`
--

CREATE TABLE `penjualan_harian` (
  `id_harian` int(11) NOT NULL,
  `periode_hari` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan_harian`
--

INSERT INTO `penjualan_harian` (`id_harian`, `periode_hari`, `total`, `status`) VALUES
(1, '2023-09-06', 12, 1),
(2, '2023-09-07', 123, 1),
(3, '2023-09-09', 1234, 1);

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
-- Indexes for table `penjualan_harian`
--
ALTER TABLE `penjualan_harian`
  ADD PRIMARY KEY (`id_harian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `penjualan_harian`
--
ALTER TABLE `penjualan_harian`
  MODIFY `id_harian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
