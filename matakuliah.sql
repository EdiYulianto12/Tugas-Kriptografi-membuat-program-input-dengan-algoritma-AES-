-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 15.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kriptografi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `matakuliah` varchar(100) NOT NULL,
  `hari` datetime NOT NULL,
  `kodesks` varchar(100) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `sks` varchar(100) NOT NULL,
  `ruang` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`matakuliah`, `hari`, `kodesks`, `dosen`, `sks`, `ruang`, `kelas`) VALUES
('Digital Forensik', '0000-00-00 00:00:00', 'e5F6lCmg', 'Harry Witriyono, M.Kom', '3', 'eOcei3vwet0=', '6'),
('Animasi 3D', '2022-03-24 10:35:00', 'EshRh4Ot', 'Agung Kharisma Hidayah, M.Kom', '3', 'BrU3/tScdxI=', '6'),
('pengolahan audio dan vidio digital', '2022-11-25 10:00:00', 'fKk0+ciH6g==', 'Agung Kharisma Hidayah, M.Kom', '3', 'f9pf0ZrR/oo=', '7'),
('Keamanan Sistem Dan Jaringan', '0000-00-00 00:00:00', 'jsNWQTz8', 'Harry Witriyono', '3', 'iLYg', '5'),
('pengolahan audio dan vidio digital', '0000-00-00 00:00:00', 'kSCSBu93sw==', 'Agung Kharisma Hidayah, M.Kom', '3', 'klP5Lr0hp3s=', '7'),
('Game Animasi 3D', '2022-06-16 21:21:00', 'SV52TRKe', 'M. Imanullah, M.Kom', '3', 'RCMRNEWPask=', '6'),
('Pongolahan citra digital', '2022-11-02 20:31:00', 'zIUrTp4=', 'Yuza Reswan', '3', 'yudf', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodesks`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
