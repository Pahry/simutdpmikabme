-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2020 pada 23.42
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

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
-- Struktur dari tabel `droppingbdrs`
--

CREATE TABLE `droppingbdrs` (
  `iddroppingbdrs` int(11) NOT NULL,
  `tanggaldropping` date DEFAULT NULL,
  `nomorberitaacara` varchar(50) DEFAULT NULL,
  `namapenerima` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `volumekantongdarah` varchar(15) NOT NULL,
  `tanggalpenyadapan` date NOT NULL,
  `tanggalexpired` date NOT NULL,
  `jeniskolf` varchar(10) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL,
  `idpasien` int(11) NOT NULL,
  `idpendonor` int(11) NOT NULL,
  `idpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `droppingbdrs`
--

INSERT INTO `droppingbdrs` (`iddroppingbdrs`, `tanggaldropping`, `nomorberitaacara`, `namapenerima`, `alamat`, `volumekantongdarah`, `tanggalpenyadapan`, `tanggalexpired`, `jeniskolf`, `keterangan`, `idpasien`, `idpendonor`, `idpetugas`) VALUES
(6, '2020-09-04', 'BA/UTD/PMI-ME/1/2020', 'Roni', 'Muara Enim', '230 CC', '2020-08-29', '2020-10-30', 'Double', 'Oke', 7, 23, 37),
(7, '2020-08-14', 'BA/UTD/PMI-ME/7/2020', 'Herdi', 'Muara Enim', '350 CC', '2020-08-27', '2020-10-29', 'Single', 'Oke', 8, 25, 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `droppingselainbdrs`
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
  `keterangan` varchar(50) NOT NULL,
  `idpasien` int(11) NOT NULL,
  `idpetugasutdpmi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `droppingselainbdrs`
--

INSERT INTO `droppingselainbdrs` (`iddropping`, `jenisjaminandropping`, `dokterdropping`, `zaaldropping`, `jumlahkantongdropping`, `tanggaldropping`, `jamdropping`, `namapetugasrs`, `keterangan`, `idpasien`, `idpetugasutdpmi`) VALUES
(1, 'BPJS', 'dr. Pahry', 'A', 12, '2020-08-05', '13:00:08', 'Pahry', 'OK', 7, 33),
(2, 'Asuransi', 'dr.Dila', 'B', 2, '2020-08-05', '00:00:06', 'Dila', '', 9, 37),
(8, 'Asuransi', 'dr. Pahry', 'X', 3, '2020-08-29', '18:42:00', 'Herdi', 'Oke', 8, 36),
(9, 'Umum', 'dr. X', 'Y', 2, '2020-08-29', '23:17:00', 'perawat Y', 'Jos', 8, 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `flebotomi`
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
-- Dumping data untuk tabel `flebotomi`
--

INSERT INTO `flebotomi` (`idflebotomi`, `tanggaldonorflebotomi`, `nomorktpflebotomi`, `namaflebotomi`, `jeniskelaminflebotomi`, `alamatflebotomi`, `nomorteleponflebotomi`, `pekerjaanflebotomi`, `tanggallahirflebotomi`, `umurflebotomi`, `sysflebotomi`, `diaflebotomi`, `hbflebotomi`, `goldaflebotomi`, `nomorkantongflebotomi`, `jeniskantongflebotomi`, `sebanyakflebotomi`, `pengambilanflebotomi`, `reaksiflebotomi`, `idpetugasutdpmi`, `idparamedis`) VALUES
(18, '2020-08-27', '123', 'Feri', 'Laki-laki', 'Merinim', '0898', 'Polisi', '1890-08-20', 30, 22, 33, 44, 'B (+)', '54545', 'small', '350cc', 'bagus', 'bagus', 29, 10),
(19, '2020-09-22', '0', 'Dini', 'Perempuan', 'Tanjung Raman', '0', 'Swasta', '2020-12-31', 18, 32, 3, 4, 'A (+)', '2', '1', '1', '1', '1', 30, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedis`
--

CREATE TABLE `paramedis` (
  `idparamedis` int(11) NOT NULL,
  `namaparamedis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paramedis`
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
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `tanggalpermintaanpasien` date DEFAULT NULL,
  `kodepasien` varchar(20) NOT NULL,
  `namapasien` varchar(30) DEFAULT NULL,
  `rumahsakitpasien` varchar(15) DEFAULT NULL,
  `goldapasien` varchar(7) DEFAULT NULL,
  `komponenpasien` varchar(7) DEFAULT NULL,
  `jumlahkantongpasien` int(2) DEFAULT NULL,
  `keteranganpasien` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`idpasien`, `tanggalpermintaanpasien`, `kodepasien`, `namapasien`, `rumahsakitpasien`, `goldapasien`, `komponenpasien`, `jumlahkantongpasien`, `keteranganpasien`) VALUES
(7, '2020-08-29', 'PASIEN007', 'Si A', 'RSUD Rabain', 'A (+)', 'PRC', 2, 'a'),
(8, '2020-08-06', 'PASIEN008', 'Si B', 'RS BAM', 'B (+)', 'WB', 2, 'b'),
(9, '2020-08-05', 'PASIEN009', 'Si AB', 'Klinik KIM', 'AB (+)', 'PRC', 4, 'b'),
(12, '2020-08-19', 'PASIEN0012', 'Si O', 'Umum', 'O (+)', 'PRC', 4, 'd'),
(14, '2020-08-25', 'PASIEN0014', 'wq', 'Klinik KIM', 'AB (+)', 'TC', 3, 'wawa'),
(15, '2020-08-18', 'PASIEN0015', 'Ivan', 'RSUD Rabain', 'B (+)', 'PRC', 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendonor`
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
-- Dumping data untuk tabel `pendonor`
--

INSERT INTO `pendonor` (`idpendonor`, `tempatpenyumbanganpendonor`, `tanggalpendonor`, `nomorktppendonor`, `namapendonor`, `jeniskelaminpendonor`, `alamatpendonor`, `nomorteleponpendonor`, `pekerjaanpendonor`, `tanggallahirpendonor`, `umurpendonor`, `donorkependonor`, `sistolependonor`, `diastolependonor`, `hbpendonor`, `goldapendonor`, `nomorkantongpendonor`, `jeniskantongpendonor`, `sebanyakpendonor`, `pengambilanpendonor`, `reaksipendonor`, `idpetugasutdpmi`, `idparamedis`) VALUES
(23, 'UTD PMI Kabupaten Muara Enim', '2020-08-27', 123131, 'Pahry', 'Laki-laki', 'Muara Enim', '08080808', 'Wiraswasta', '1996-06-26', 22, '3', 3, 4, 4, 'O (+)', 'K11122', 'Kecil', '250 CC', 'Baik', 'Baik', 31, 6),
(24, 'PAMA', '2020-08-27', 0, 'Pak Frengky', 'Laki-laki', 'Tanjung Enim', '0', 'PAMA', '1990-08-08', 33, '7', 7, 7, 7, 'AB (+)', 'O101', 'Sedang', '300 CC', 'Baik', 'Baik', 32, 7),
(25, '2020-08-28', '0000-00-00', 1603010000, 'Andi', 'Laki-laki', 'Muara Enim', '08122222', 'Rumah Makan', '2020-02-12', 24, '5', 13, 9, 10, 'B (+)', 'K101010', 'Kecil', '200 CC', 'Baik', 'Baik', 34, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugasutdpmi`
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
-- Dumping data untuk tabel `petugasutdpmi`
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
(39, 'Geri Leo Saputra', '2020-02-03', 'AB (+)', 'DIII Analis Kesehatan', 'Staff Teknis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokdarah`
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
-- Dumping data untuk tabel `stokdarah`
--

INSERT INTO `stokdarah` (`idstokdarah`, `komponenstokdarah`, `goldaa`, `goldab`, `goldaab`, `goldao`) VALUES
(1, 'PRC', 0, 1, 1, 1),
(2, 'TC', 0, 0, 0, 0),
(3, 'WB', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujisaringdarah`
--

CREATE TABLE `ujisaringdarah` (
  `idujisaringdarah` int(11) NOT NULL,
  `tanggalujisaring` date NOT NULL,
  `komponenujisaring` varchar(10) NOT NULL,
  `hiv` varchar(5) DEFAULT NULL,
  `hcv` varchar(5) DEFAULT NULL,
  `hbsag` varchar(5) DEFAULT NULL,
  `syphilis` varchar(5) DEFAULT NULL,
  `malaria` varchar(5) DEFAULT NULL,
  `crossmatching` varchar(20) DEFAULT NULL,
  `idpendonor` int(11) NOT NULL,
  `idpetugasutdpmi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ujisaringdarah`
--

INSERT INTO `ujisaringdarah` (`idujisaringdarah`, `tanggalujisaring`, `komponenujisaring`, `hiv`, `hcv`, `hbsag`, `syphilis`, `malaria`, `crossmatching`, `idpendonor`, `idpetugasutdpmi`) VALUES
(4, '2020-08-29', 'TC', '(-)', '(-)', '(-)', '(-)', '(-)', 'Cocok', 24, 37),
(6, '2020-09-05', 'WB', '(-)', '(-)', '(-)', '(-)', '(-)', 'Cocok', 23, 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`) VALUES
(8, 'pahry', 'pahryonutdpmi2020'),
(9, 'yu', '$2y$10$qIhfaSOWNR7I7ek5Ga.bfOuzd.NlpbT8AABvFqlVk.o3P5TSPLm2G'),
(10, 'ere', '$2y$10$DQ8nDkLnlfGOVRpYZbDTNOkJ0qjX27auYtxvTYOFa15BXND/.Dx6m'),
(11, 'uy', '$2y$10$vTaDb0sRb4t.TmLygnrlj.NilaBbTMXXLUb7oGqrXANnlIvFci7UO'),
(12, 'w', '$2y$10$zVaLbuaawK8HvjHK3cJtoueIj2EmiyqDutG6Di7W79RdDudAsOX5S'),
(13, 'k', '$2y$10$nnHXfqBmnwbWDFOBF31y..Xul1qSn.Je5.a9LFzYAHjZMQCxb.Cze'),
(14, 'j', '$2y$10$DfFQOfmcQSGMs89NkSk21u2s4P.oI5fK2QyDOkaEftc.PuiH3jl8C'),
(15, 'm', '$2y$10$iXqgFKisufpHFKqsIkxS9udGdO743PbVdAy8p29.cY20733ik/.Te'),
(16, 'q', '$2y$10$bEIjRhOGrVAC2hWpmiI5DOF/b.YzuUiy6JgFki0MO3blF5TWk4Axq'),
(17, 'n', '$2y$10$/E0fvyW98X2cZW2Vx0KLxOycg39qfRWJaz6myPFkmPclQjmOxiMKq'),
(18, 're', 're'),
(19, 'b', 'b'),
(20, 'E', 'E'),
(21, 'en', '$2y$10$XUFej3ww./dp06TJT6hHCOIMZNaw3ZzLK01WJFzsPzH1BQOLybY3u'),
(22, 'pwk', '$2y$10$EaJ3TlF0ew.ZxgN0ctSfy./r3qqkea6wO3HLT4P/7C2c0lfZL.Ge6'),
(23, '12', '$2y$10$RqkcJ.is.cTwYViJ/KpP8.pQ5jHyGgZAzCI/hZsUJwxbaLSGFkVMK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `droppingbdrs`
--
ALTER TABLE `droppingbdrs`
  ADD PRIMARY KEY (`iddroppingbdrs`),
  ADD KEY `idpasien` (`idpasien`),
  ADD KEY `idpendonor` (`idpendonor`),
  ADD KEY `idpetugas` (`idpetugas`);

--
-- Indeks untuk tabel `droppingselainbdrs`
--
ALTER TABLE `droppingselainbdrs`
  ADD PRIMARY KEY (`iddropping`),
  ADD KEY `idpasien` (`idpasien`),
  ADD KEY `idpetugasutdpmi` (`idpetugasutdpmi`);

--
-- Indeks untuk tabel `flebotomi`
--
ALTER TABLE `flebotomi`
  ADD PRIMARY KEY (`idflebotomi`),
  ADD KEY `idpetugasutdpmi` (`idpetugasutdpmi`),
  ADD KEY `idparamedis` (`idparamedis`);

--
-- Indeks untuk tabel `paramedis`
--
ALTER TABLE `paramedis`
  ADD PRIMARY KEY (`idparamedis`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indeks untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`idpendonor`),
  ADD KEY `idpetugasutdpmi` (`idpetugasutdpmi`),
  ADD KEY `idparamedis` (`idparamedis`);

--
-- Indeks untuk tabel `petugasutdpmi`
--
ALTER TABLE `petugasutdpmi`
  ADD PRIMARY KEY (`idpetugasutdpmi`);

--
-- Indeks untuk tabel `stokdarah`
--
ALTER TABLE `stokdarah`
  ADD PRIMARY KEY (`idstokdarah`);

--
-- Indeks untuk tabel `ujisaringdarah`
--
ALTER TABLE `ujisaringdarah`
  ADD PRIMARY KEY (`idujisaringdarah`),
  ADD KEY `idpendonor` (`idpendonor`),
  ADD KEY `idpetugasutdpmi` (`idpetugasutdpmi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `droppingbdrs`
--
ALTER TABLE `droppingbdrs`
  MODIFY `iddroppingbdrs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `droppingselainbdrs`
--
ALTER TABLE `droppingselainbdrs`
  MODIFY `iddropping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `flebotomi`
--
ALTER TABLE `flebotomi`
  MODIFY `idflebotomi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `paramedis`
--
ALTER TABLE `paramedis`
  MODIFY `idparamedis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `idpendonor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `petugasutdpmi`
--
ALTER TABLE `petugasutdpmi`
  MODIFY `idpetugasutdpmi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `stokdarah`
--
ALTER TABLE `stokdarah`
  MODIFY `idstokdarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ujisaringdarah`
--
ALTER TABLE `ujisaringdarah`
  MODIFY `idujisaringdarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `droppingbdrs`
--
ALTER TABLE `droppingbdrs`
  ADD CONSTRAINT `droppingbdrs_ibfk_1` FOREIGN KEY (`idpasien`) REFERENCES `pasien` (`idpasien`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `droppingbdrs_ibfk_2` FOREIGN KEY (`idpetugas`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `droppingbdrs_ibfk_3` FOREIGN KEY (`idpendonor`) REFERENCES `pendonor` (`idpendonor`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `droppingselainbdrs`
--
ALTER TABLE `droppingselainbdrs`
  ADD CONSTRAINT `droppingselainbdrs_ibfk_1` FOREIGN KEY (`idpasien`) REFERENCES `pasien` (`idpasien`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `droppingselainbdrs_ibfk_2` FOREIGN KEY (`idpetugasutdpmi`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `flebotomi`
--
ALTER TABLE `flebotomi`
  ADD CONSTRAINT `flebotomi_ibfk_1` FOREIGN KEY (`idpetugasutdpmi`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `flebotomi_ibfk_2` FOREIGN KEY (`idparamedis`) REFERENCES `paramedis` (`idparamedis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  ADD CONSTRAINT `pendonor_ibfk_1` FOREIGN KEY (`idpetugasutdpmi`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pendonor_ibfk_2` FOREIGN KEY (`idparamedis`) REFERENCES `paramedis` (`idparamedis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ujisaringdarah`
--
ALTER TABLE `ujisaringdarah`
  ADD CONSTRAINT `ujisaringdarah_ibfk_1` FOREIGN KEY (`idpendonor`) REFERENCES `pendonor` (`idpendonor`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ujisaringdarah_ibfk_2` FOREIGN KEY (`idpetugasutdpmi`) REFERENCES `petugasutdpmi` (`idpetugasutdpmi`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
