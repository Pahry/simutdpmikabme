-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 07:11 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simutdpmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `droppingbdrs`
--

CREATE TABLE `droppingbdrs` (
  `iddroppingbdrs` int(11) NOT NULL,
  `tanggaldropping` date DEFAULT NULL,
  `nomorberitaacara` varchar(50) DEFAULT NULL,
  `namapenerimadroppingbdrs` varchar(30) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `idpasien` int(11) NOT NULL,
  `idpendonor` int(11) NOT NULL,
  `idpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `droppingbdrs`
--

INSERT INTO `droppingbdrs` (`iddroppingbdrs`, `tanggaldropping`, `nomorberitaacara`, `namapenerimadroppingbdrs`, `keterangan`, `idpasien`, `idpendonor`, `idpetugas`) VALUES
(3, '2020-08-21', '1-UTD/PMI/KAB-ME/V/2', 'Penerima A', 'Oke', 7, 1212, 38),
(4, '2020-08-04', '2-UTD/PMI/KAB-ME/V/2020', 'Penerima B', 'oke', 8, 12, 31);

-- --------------------------------------------------------

--
-- Table structure for table `droppingselainbdrs`
--

CREATE TABLE `droppingselainbdrs` (
  `iddropping` int(11) NOT NULL,
  `jenisjaminandropping` varchar(10) DEFAULT NULL,
  `dokterdropping` varchar(30) DEFAULT NULL,
  `zaaldropping` varchar(30) DEFAULT NULL,
  `jumlahkantongdropping` int(2) DEFAULT NULL,
  `tanggaldropping` date DEFAULT NULL,
  `jamdropping` time DEFAULT NULL,
  `namapetugasrs` varchar(30) DEFAULT NULL,
  `idpasien` int(11) NOT NULL,
  `idpetugasutdpmi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `droppingselainbdrs`
--

INSERT INTO `droppingselainbdrs` (`iddropping`, `jenisjaminandropping`, `dokterdropping`, `zaaldropping`, `jumlahkantongdropping`, `tanggaldropping`, `jamdropping`, `namapetugasrs`, `idpasien`, `idpetugasutdpmi`) VALUES
(1, 'BPJS', 'dr. Pahry', 'A', 12, '2020-08-05', '13:00:08', 'Pahry', 7, 33),
(2, 'Asuransi', 'dr.Dila', 'B', 2, '2020-08-05', '00:00:06', 'Dila', 9, 37);

-- --------------------------------------------------------

--
-- Table structure for table `flebotomi`
--

CREATE TABLE `flebotomi` (
  `idflebotomi` int(11) NOT NULL,
  `tanggaldonorflebotomi` date NOT NULL,
  `nomorktpflebotomi` char(16) NOT NULL,
  `namaflebotomi` varchar(30) DEFAULT NULL,
  `jeniskelaminflebotomi` varchar(30) DEFAULT NULL,
  `alamatflebotomi` text DEFAULT NULL,
  `nomorteleponflebotomi` varchar(15) DEFAULT NULL,
  `pekerjaanflebotomi` varchar(50) DEFAULT NULL,
  `tanggallahirflebotomi` date DEFAULT NULL,
  `umurflebotomi` int(3) DEFAULT NULL,
  `sysflebotomi` float NOT NULL,
  `diaflebotomi` float NOT NULL,
  `hbflebotomi` float NOT NULL,
  `goldaflebotomi` varchar(10) DEFAULT NULL,
  `nomorkantongflebotomi` varchar(10) DEFAULT NULL,
  `jeniskantongflebotomi` varchar(30) NOT NULL,
  `sebanyakflebotomi` varchar(10) DEFAULT NULL,
  `pengambilanflebotomi` varchar(20) NOT NULL,
  `reaksiflebotomi` varchar(15) NOT NULL,
  `idpetugasutdpmi` int(11) NOT NULL,
  `idparamedis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flebotomi`
--

INSERT INTO `flebotomi` (`idflebotomi`, `tanggaldonorflebotomi`, `nomorktpflebotomi`, `namaflebotomi`, `jeniskelaminflebotomi`, `alamatflebotomi`, `nomorteleponflebotomi`, `pekerjaanflebotomi`, `tanggallahirflebotomi`, `umurflebotomi`, `sysflebotomi`, `diaflebotomi`, `hbflebotomi`, `goldaflebotomi`, `nomorkantongflebotomi`, `jeniskantongflebotomi`, `sebanyakflebotomi`, `pengambilanflebotomi`, `reaksiflebotomi`, `idpetugasutdpmi`, `idparamedis`) VALUES
(18, '2020-08-27', '123', 'Feri', 'Laki-laki', 'Merinim', '0898', 'Polisi', '1890-08-20', 30, 22, 33, 44, 'B (+)', '54545', 'small', '350cc', 'bagus', 'bagus', 29, 10);

-- --------------------------------------------------------

--
-- Table structure for table `paramedis`
--

CREATE TABLE `paramedis` (
  `idparamedis` int(11) NOT NULL,
  `namaparamedis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paramedis`
--

INSERT INTO `paramedis` (`idparamedis`, `namaparamedis`) VALUES
(1, 'dr.hj. Novi Triana'),
(2, 'Sulastri'),
(3, 'Suriana'),
(4, 'Wike Dian Anggraini'),
(5, 'Ayu Abelia'),
(6, 'Arie Aswar'),
(7, 'Rika Dewi Sartika'),
(8, 'Rangga Dea Tama Raja'),
(9, 'Meriza Kara'),
(10, 'Helen Permata Sary'),
(11, 'Geri Leo Saputra');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `tanggalpermintaanpasien` date DEFAULT NULL,
  `namapasien` varchar(30) DEFAULT NULL,
  `rumahsakitpasien` varchar(15) DEFAULT NULL,
  `goldapasien` varchar(7) DEFAULT NULL,
  `komponenpasien` varchar(7) DEFAULT NULL,
  `jumlahkantongpasien` int(2) DEFAULT NULL,
  `keteranganpasien` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idpasien`, `tanggalpermintaanpasien`, `namapasien`, `rumahsakitpasien`, `goldapasien`, `komponenpasien`, `jumlahkantongpasien`, `keteranganpasien`) VALUES
(7, '2020-08-29', 'Si A', 'RSUD Rabain', 'A (+)', 'PRC', 2, 'a'),
(8, '2020-08-06', 'Si B', 'RS BAM', 'B (+)', 'WB', 2, 'b'),
(9, '2020-08-05', 'Si AB', 'Klinik KIM', 'AB (+)', 'PRC', 4, 'b'),
(12, '2020-08-19', 'Si O', 'Umum', 'O (+)', 'PRC', 4, 'd'),
(14, '2020-08-25', 'wq', 'Klinik KIM', 'AB (+)', 'TC', 3, 'wawa');

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `idpendonor` int(11) NOT NULL,
  `tempatpenyumbanganpendonor` varchar(50) DEFAULT NULL,
  `tanggalpendonor` date DEFAULT NULL,
  `nomorktppendonor` int(11) DEFAULT NULL,
  `namapendonor` varchar(30) DEFAULT NULL,
  `jeniskelaminpendonor` varchar(12) DEFAULT NULL,
  `alamatpendonor` text DEFAULT NULL,
  `nomorteleponpendonor` varchar(15) NOT NULL,
  `pekerjaanpendonor` varchar(50) DEFAULT NULL,
  `tanggallahirpendonor` date DEFAULT NULL,
  `umurpendonor` int(3) DEFAULT NULL,
  `donorkependonor` varchar(3) NOT NULL,
  `sistolependonor` float DEFAULT NULL,
  `diastolependonor` float DEFAULT NULL,
  `hbpendonor` float DEFAULT NULL,
  `goldapendonor` varchar(10) DEFAULT NULL,
  `nomorkantongpendonor` varchar(10) DEFAULT NULL,
  `jeniskantongpendonor` varchar(8) DEFAULT NULL,
  `sebanyakpendonor` varchar(10) DEFAULT NULL,
  `pengambilanpendonor` varchar(10) DEFAULT NULL,
  `reaksipendonor` varchar(20) DEFAULT NULL,
  `idpetugasutdpmi` int(11) DEFAULT NULL,
  `idparamedis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`idpendonor`, `tempatpenyumbanganpendonor`, `tanggalpendonor`, `nomorktppendonor`, `namapendonor`, `jeniskelaminpendonor`, `alamatpendonor`, `nomorteleponpendonor`, `pekerjaanpendonor`, `tanggallahirpendonor`, `umurpendonor`, `donorkependonor`, `sistolependonor`, `diastolependonor`, `hbpendonor`, `goldapendonor`, `nomorkantongpendonor`, `jeniskantongpendonor`, `sebanyakpendonor`, `pengambilanpendonor`, `reaksipendonor`, `idpetugasutdpmi`, `idparamedis`) VALUES
(23, 'UTD PMI Kabupaten Muara Enim', '2020-08-27', 123131, 'Pahry', 'Laki-laki', 'Muara Enim', '08080808', 'Wiraswasta', '1996-06-26', 22, '3', 3, 4, 4, 'O (+)', 'K11122', 'Kecil', '250 CC', 'Baik', 'Baik', 31, 6),
(24, 'PAMA', '2020-08-27', 0, 'Pak Frengky', 'Laki-laki', 'Tanjung Enim', '0', 'PAMA', '1990-08-08', 33, '7', 7, 7, 7, 'AB (+)', 'O101', 'Sedang', '300 CC', 'Baik', 'Baik', 32, 7);

-- --------------------------------------------------------

--
-- Table structure for table `petugasutdpmi`
--

CREATE TABLE `petugasutdpmi` (
  `idpetugasutdpmi` int(11) NOT NULL,
  `namapetugasutdpmi` varchar(30) DEFAULT NULL,
  `tanggallahirpetugasutdpmi` date DEFAULT NULL,
  `goldapetugasutdpmi` varchar(7) DEFAULT NULL,
  `pendidikanpetugasutdpmi` varchar(50) DEFAULT NULL,
  `jabatanpetugasutdpmi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugasutdpmi`
--

INSERT INTO `petugasutdpmi` (`idpetugasutdpmi`, `namapetugasutdpmi`, `tanggallahirpetugasutdpmi`, `goldapetugasutdpmi`, `pendidikanpetugasutdpmi`, `jabatanpetugasutdpmi`) VALUES
(28, 'dr. Hj. Novi Triana', '1970-11-03', 'A (+)', 'Dokter Spesialis Patologi Anotomi', 'Kepala UTD PMI '),
(29, 'Sulastri', '1984-01-24', 'AB (+)', 'DIII Kesehatan Lingkungan', 'Staff Teknis'),
(30, 'Suriana', '1983-06-15', 'O (+)', 'SLTA', 'Staff Teknis'),
(31, 'Wike Dian Anggraini', '1990-10-11', 'A (+)', 'S1 Ekonomi', 'Bendahara'),
(32, 'Ayu Abelia', '1993-04-15', 'A (+)', 'DIII Analis Kesehatan', 'Staff Teknis'),
(33, 'Arie Aswar', '1993-06-27', 'A (+)', 'DIII Keperawatan', 'Staff Teknis'),
(34, 'Rika Dewi Sartika', '1987-12-27', 'A (+)', 'DIII Keperawatan', 'Staff Teknis'),
(35, 'Rangga Dea Tama Raja', '1993-01-05', 'A (+)', 'DIII Analis Kesehatan', 'Staff Teknis'),
(36, 'Meriza Kara', '1994-05-23', 'A (+)', 'S1 Keperawatan Profesi Nurse', 'Staff Teknis'),
(37, 'Helen Permata Sary', '1999-04-24', 'A (+)', 'DIII Teknologi Bank Darah', 'Staff Teknis'),
(38, 'Pahridila Lintang', '1996-06-26', 'O (+)', 'S1 Informatika', 'Staff Administrasi'),
(39, 'Geri Leo Saputra', '2020-02-03', 'AB (+)', 'DIII Analis Kesehatan', 'Staff Teknis');

-- --------------------------------------------------------

--
-- Table structure for table `stokdarah`
--

CREATE TABLE `stokdarah` (
  `idstokdarah` int(11) NOT NULL,
  `komponenstokdarah` varchar(5) DEFAULT NULL,
  `goldaa` int(2) DEFAULT NULL,
  `goldab` int(2) DEFAULT NULL,
  `goldaab` int(2) DEFAULT NULL,
  `goldao` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stokdarah`
--

INSERT INTO `stokdarah` (`idstokdarah`, `komponenstokdarah`, `goldaa`, `goldab`, `goldaab`, `goldao`) VALUES
(1, 'TC', 5, 2, 3, 4),
(2, 'PRC', 1, 2, 3, 4),
(3, 'WB', 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `ujisaringdarah`
--

CREATE TABLE `ujisaringdarah` (
  `idujisaringdarah` int(11) NOT NULL,
  `komponenujisaring` varchar(10) NOT NULL,
  `hiv` varchar(5) DEFAULT NULL,
  `hcv` varchar(5) DEFAULT NULL,
  `hbsag` varchar(5) DEFAULT NULL,
  `syphilis` varchar(5) DEFAULT NULL,
  `malaria` varchar(5) DEFAULT NULL,
  `crossmatching` varchar(20) DEFAULT NULL,
  `idpendonor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ujisaringdarah`
--

INSERT INTO `ujisaringdarah` (`idujisaringdarah`, `komponenujisaring`, `hiv`, `hcv`, `hbsag`, `syphilis`, `malaria`, `crossmatching`, `idpendonor`) VALUES
(3, 'TC', '(-)', '(-)', '(-)', '(-)', '(-)', 'Cocok', 23);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'bendahara', 'bendahara'),
(3, 'aftap', 'aftap'),
(4, 'mutu', 'mutu'),
(5, 'labor', 'labor'),
(6, 'labor', 'labor'),
(7, 'logistik', 'logistik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `droppingbdrs`
--
ALTER TABLE `droppingbdrs`
  ADD PRIMARY KEY (`iddroppingbdrs`),
  ADD KEY `idpasien` (`idpasien`),
  ADD KEY `idpendonor` (`idpendonor`),
  ADD KEY `idpetugas` (`idpetugas`);

--
-- Indexes for table `droppingselainbdrs`
--
ALTER TABLE `droppingselainbdrs`
  ADD PRIMARY KEY (`iddropping`),
  ADD KEY `idpasien` (`idpasien`),
  ADD KEY `idpetugasutdpmi` (`idpetugasutdpmi`);

--
-- Indexes for table `flebotomi`
--
ALTER TABLE `flebotomi`
  ADD PRIMARY KEY (`idflebotomi`),
  ADD KEY `idpetugasutdpmi` (`idpetugasutdpmi`),
  ADD KEY `idparamedis` (`idparamedis`);

--
-- Indexes for table `paramedis`
--
ALTER TABLE `paramedis`
  ADD PRIMARY KEY (`idparamedis`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`idpendonor`),
  ADD KEY `idpetugasutdpmi` (`idpetugasutdpmi`),
  ADD KEY `idparamedis` (`idparamedis`);

--
-- Indexes for table `petugasutdpmi`
--
ALTER TABLE `petugasutdpmi`
  ADD PRIMARY KEY (`idpetugasutdpmi`);

--
-- Indexes for table `stokdarah`
--
ALTER TABLE `stokdarah`
  ADD PRIMARY KEY (`idstokdarah`);

--
-- Indexes for table `ujisaringdarah`
--
ALTER TABLE `ujisaringdarah`
  ADD PRIMARY KEY (`idujisaringdarah`),
  ADD KEY `idpendonor` (`idpendonor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `droppingbdrs`
--
ALTER TABLE `droppingbdrs`
  MODIFY `iddroppingbdrs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `droppingselainbdrs`
--
ALTER TABLE `droppingselainbdrs`
  MODIFY `iddropping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flebotomi`
--
ALTER TABLE `flebotomi`
  MODIFY `idflebotomi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `paramedis`
--
ALTER TABLE `paramedis`
  MODIFY `idparamedis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `idpendonor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `petugasutdpmi`
--
ALTER TABLE `petugasutdpmi`
  MODIFY `idpetugasutdpmi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `stokdarah`
--
ALTER TABLE `stokdarah`
  MODIFY `idstokdarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ujisaringdarah`
--
ALTER TABLE `ujisaringdarah`
  MODIFY `idujisaringdarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `droppingbdrs`
--
ALTER TABLE `droppingbdrs`
  ADD CONSTRAINT `droppingbdrs_ibfk_1` FOREIGN KEY (`idpasien`) REFERENCES `pasien` (`idpasien`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `droppingbdrs_ibfk_2` FOREIGN KEY (`idpetugas`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `droppingselainbdrs`
--
ALTER TABLE `droppingselainbdrs`
  ADD CONSTRAINT `droppingselainbdrs_ibfk_1` FOREIGN KEY (`idpasien`) REFERENCES `pasien` (`idpasien`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `droppingselainbdrs_ibfk_2` FOREIGN KEY (`idpetugasutdpmi`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `flebotomi`
--
ALTER TABLE `flebotomi`
  ADD CONSTRAINT `flebotomi_ibfk_1` FOREIGN KEY (`idpetugasutdpmi`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `flebotomi_ibfk_2` FOREIGN KEY (`idparamedis`) REFERENCES `paramedis` (`idparamedis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD CONSTRAINT `pendonor_ibfk_1` FOREIGN KEY (`idpetugasutdpmi`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pendonor_ibfk_2` FOREIGN KEY (`idparamedis`) REFERENCES `paramedis` (`idparamedis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ujisaringdarah`
--
ALTER TABLE `ujisaringdarah`
  ADD CONSTRAINT `ujisaringdarah_ibfk_1` FOREIGN KEY (`idpendonor`) REFERENCES `pendonor` (`idpendonor`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
