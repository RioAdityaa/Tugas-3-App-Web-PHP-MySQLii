-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2023 pada 06.44
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasruko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelpenyewa`
--

CREATE TABLE `tabelpenyewa` (
  `namapenyewa` text NOT NULL,
  `nomorpenyewa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelpenyewa`
--

INSERT INTO `tabelpenyewa` (`namapenyewa`, `nomorpenyewa`) VALUES
('test', 111),
('rioaditya', 333),
('rioaditya', 333),
('rioaditya', 333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelruko`
--

CREATE TABLE `tabelruko` (
  `koderuko` int(11) NOT NULL,
  `lokasi` int(11) NOT NULL,
  `namaruko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelruko`
--

INSERT INTO `tabelruko` (`koderuko`, `lokasi`, `namaruko`) VALUES
(333, 333, 333);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabelruko`
--
ALTER TABLE `tabelruko`
  ADD PRIMARY KEY (`koderuko`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
