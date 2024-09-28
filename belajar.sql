-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 01:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` varchar(10) NOT NULL,
  `nm_obat` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `harga`) VALUES
('OB01', 'Paracetamol', 20000),
('OB02', 'Bodrex', 10000),
('OB03', 'Paramex', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nopas` varchar(5) NOT NULL,
  `nm_pas` varchar(35) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nopas`, `nm_pas`, `tgl_lahir`, `alamat`) VALUES
('PAS01', 'Mimin', '2024-09-03', 'Aceh'),
('PAS02', 'Wowon', '2024-09-08', 'Jakarta'),
('PAS03', 'wewen', '2003-09-09', 'SELECT pemeriksaan.tgl_periksa, pemeriksaan.nopas, pasien.nm_pas, pemeriksaan.kd_obat, obat.nm_obat, obat.harga, pemeriksaan.jum_obat, pemeriksaan.biaya_periksa, (obat.harga*pemeriksaan.jum_obat)+pemeriksaan.biaya_periksa as totalbiaya from pemeriksaan join pasien on pemeriksaan.nopas=pasien.nopas join obat on pemeriksaan.kd_obat=obat.kd_obat;');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_periksa` int(11) NOT NULL,
  `tgl_periksa` date DEFAULT NULL,
  `nopas` varchar(10) DEFAULT NULL,
  `id_penyakit` varchar(5) DEFAULT NULL,
  `kd_obat` varchar(10) DEFAULT NULL,
  `jum_obat` int(11) DEFAULT NULL,
  `biaya_periksa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_periksa`, `tgl_periksa`, `nopas`, `id_penyakit`, `kd_obat`, `jum_obat`, `biaya_periksa`) VALUES
(1, '2024-05-05', 'PAS01', 'PEN01', 'OB01', 4, 80000),
(2, '2024-04-04', 'PAS02', 'PEN02', 'OB02', 2, 40000),
(3, '2024-03-03', 'PAS03', 'PEN03', 'OB03', 5, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(5) NOT NULL,
  `nm_penyakit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nm_penyakit`) VALUES
('PEN01', 'Kolestrol'),
('PEN02', 'Flu'),
('PEN03', 'Demam');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vbiaya_dnil`
-- (See below for the actual view)
--
CREATE TABLE `vbiaya_dnil` (
`tgl_periksa` date
,`nopas` varchar(10)
,`nm_pas` varchar(35)
,`kd_obat` varchar(10)
,`nm_obat` varchar(50)
,`harga` int(11)
,`jum_obat` int(11)
,`biaya_periksa` int(11)
,`totalbiaya` bigint(22)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpasein_dnil`
-- (See below for the actual view)
--
CREATE TABLE `vpasein_dnil` (
`nm_pas` varchar(35)
,`nm_penyakit` varchar(50)
,`nm_obat` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `vbiaya_dnil`
--
DROP TABLE IF EXISTS `vbiaya_dnil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vbiaya_dnil`  AS SELECT `pemeriksaan`.`tgl_periksa` AS `tgl_periksa`, `pemeriksaan`.`nopas` AS `nopas`, `pasien`.`nm_pas` AS `nm_pas`, `pemeriksaan`.`kd_obat` AS `kd_obat`, `obat`.`nm_obat` AS `nm_obat`, `obat`.`harga` AS `harga`, `pemeriksaan`.`jum_obat` AS `jum_obat`, `pemeriksaan`.`biaya_periksa` AS `biaya_periksa`, `obat`.`harga`* `pemeriksaan`.`jum_obat` + `pemeriksaan`.`biaya_periksa` AS `totalbiaya` FROM ((`pemeriksaan` join `pasien` on(`pemeriksaan`.`nopas` = `pasien`.`nopas`)) join `obat` on(`pemeriksaan`.`kd_obat` = `obat`.`kd_obat`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vpasein_dnil`
--
DROP TABLE IF EXISTS `vpasein_dnil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpasein_dnil`  AS SELECT `pasien`.`nm_pas` AS `nm_pas`, `penyakit`.`nm_penyakit` AS `nm_penyakit`, `obat`.`nm_obat` AS `nm_obat` FROM (((`pemeriksaan` join `pasien` on(`pemeriksaan`.`nopas` = `pasien`.`nopas`)) join `penyakit` on(`pemeriksaan`.`id_penyakit` = `penyakit`.`id_penyakit`)) join `obat` on(`pemeriksaan`.`kd_obat` = `obat`.`kd_obat`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nopas`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
