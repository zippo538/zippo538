-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 03:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NPM` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `kd_prodi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `nama`, `kelas`, `semester`, `kd_prodi`) VALUES
(212400093, 'Marasdhika Salman', '2P42', 2, 2400),
(212400100, 'Deny Iswanto', '2P42', 2, 2400),
(212400124, 'Mahindra Irvan Saputra', '2P42', 2, 2400),
(212400133, 'krishna pradigta', '2P42', 2, 2400);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kd_mataKuliah` int(4) NOT NULL,
  `nm_mataKuliah` varchar(20) NOT NULL,
  `sks` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kd_mataKuliah`, `nm_mataKuliah`, `sks`) VALUES
(4002, 'Web Programming', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `NPM` int(10) NOT NULL,
  `kd_mataKuliah` int(4) NOT NULL,
  `nilai_latihan` int(3) NOT NULL,
  `nilai_tugas` int(3) NOT NULL,
  `nilai_kuis` int(3) NOT NULL,
  `nilai_uts` int(3) NOT NULL,
  `nilai_uas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NPM`, `kd_mataKuliah`, `nilai_latihan`, `nilai_tugas`, `nilai_kuis`, `nilai_uts`, `nilai_uas`) VALUES
(212400093, 4002, 80, 60, 50, 70, 30),
(212400100, 4002, 50, 30, 50, 80, 60),
(212400124, 4002, 80, 50, 70, 90, 60),
(212400133, 4002, 50, 50, 80, 90, 60);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kd_prodi` int(4) NOT NULL,
  `nm_prodi` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nm_prodi`) VALUES
(2400, 'TI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_mataKuliah`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NPM`,`kd_mataKuliah`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kd_prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
