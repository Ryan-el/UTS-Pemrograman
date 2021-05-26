-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(11) NOT NULL,
  `jadwalid` int(4) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `thnakademik` varchar(10) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `kodemk` varchar(12) NOT NULL,
  `sesi` char(1) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `kelassesi` varchar(8) NOT NULL,
  `kodedosen` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljadwal`
--

INSERT INTO `tbljadwal` (`id`, `jadwalid`, `hari`, `thnakademik`, `semester`, `kodemk`, `sesi`, `jammasuk`, `jamkeluar`, `kelas`, `ruang`, `status`, `kelassesi`, `kodedosen`) VALUES
(156, 5665, 'senin', '2020', '4', '45122', 'A', '00:00:09', '00:00:11', 'SI', '104', 0, 'Ansi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblprodi`
--

CREATE TABLE `tblprodi` (
  `kodeprodi` varchar(1) NOT NULL,
  `namaprodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprodi`
--

INSERT INTO `tblprodi` (`kodeprodi`, `namaprodi`) VALUES
('y', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ab`
--

CREATE TABLE `tbl_ab` (
  `idabsen` int(5) NOT NULL,
  `tglabsen` date NOT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `kodedosen` varchar(5) NOT NULL,
  `sesi` char(1) NOT NULL,
  `kelassesi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ab`
--

INSERT INTO `tbl_ab` (`idabsen`, `tglabsen`, `masuk`, `keluar`, `kodedosen`, `sesi`, `kelassesi`) VALUES
(24545, '2021-05-05', '09:00:00', '11:00:00', '87446', 'A', 'Ansi'),
(24678, '0000-00-00', '00:00:07', '00:00:09', '55224', 'A', ''),
(24678, '0000-00-00', '00:00:07', '00:00:09', '55224', 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `kodedosen` varchar(5) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nipy` varchar(50) NOT NULL,
  `namadosen` varchar(50) NOT NULL,
  `kodeprodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mk`
--

CREATE TABLE `tbl_mk` (
  `kodemk` varchar(50) NOT NULL,
  `namamk` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `smt` int(11) NOT NULL,
  `kodeprodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD KEY `kodemk` (`kodemk`),
  ADD KEY `kodedosen` (`kodedosen`);

--
-- Indexes for table `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Indexes for table `tbl_ab`
--
ALTER TABLE `tbl_ab`
  ADD KEY `kodedosen` (`kodedosen`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`kodedosen`),
  ADD UNIQUE KEY `kodedosen` (`kodedosen`);

--
-- Indexes for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD PRIMARY KEY (`kodemk`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD CONSTRAINT `tbl_mhs_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbl_ab` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD CONSTRAINT `tbl_mk_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `tblprodi` (`kodeprodi`),
  ADD CONSTRAINT `tbl_mk_ibfk_2` FOREIGN KEY (`kodemk`) REFERENCES `tbljadwal` (`kodemk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
