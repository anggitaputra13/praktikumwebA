-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2020 pada 19.47
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paginationdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pagination`
--

CREATE TABLE `tb_pagination` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pagination`
--

INSERT INTO `tb_pagination` (`id`, `name`, `age`, `dept`) VALUES
(1, 'Anggita', 21, 'Information Technology'),
(2, 'Widari', 20, 'Matematika'),
(3, 'Suastika', 24, 'Information Technology'),
(4, 'Aryadi', 21, 'Information Technology'),
(5, 'Santhi', 20, 'Finance'),
(6, 'Sukma', 21, 'Finance'),
(7, 'Agus', 21, 'Information Technology'),
(8, 'Erwin', 22, 'Production'),
(9, 'Dewik', 24, 'Production'),
(10, 'Nadia', 23, 'Finance');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pagination`
--
ALTER TABLE `tb_pagination`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pagination`
--
ALTER TABLE `tb_pagination`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
