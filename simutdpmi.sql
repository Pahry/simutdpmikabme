-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2020 at 04:54 AM
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
(28, 'Hj. Novi Triana', '1970-11-03', 'B (+)', 'Dokter Spesialis Patologi Anotomi', 'Kepala UTD PMI '),
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
(39, 'Geri Leo Saputra', '2020-02-03', 'AB (+)', 'DIII Analis Kesehatan', 'Staff Teknis'),
(40, 'fsf', '2020-08-28', 'A (+)', 'fsf', 'fsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petugasutdpmi`
--
ALTER TABLE `petugasutdpmi`
  ADD PRIMARY KEY (`idpetugasutdpmi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugasutdpmi`
--
ALTER TABLE `petugasutdpmi`
  MODIFY `idpetugasutdpmi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
