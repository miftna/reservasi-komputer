-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 07.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `desk_reservasi` varchar(25) NOT NULL,
  `biaya` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nama_pelanggan`, `desk_reservasi`, `biaya`, `status`, `tanggal`) VALUES
(1, 'andi', 'lcd rusak', 200000, 'selesai', '2024-01-08 19:01:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `jk`, `hp`, `email`, `alamat`) VALUES
(1, 'Budi', 'laki-laki', '081111111112', 'andi@gmai.com', 'Bagu'),
(2, 'Andi', 'laki-laki', '081111111112', 'andi@gmai.com', 'Bagu'),
(4, 'vgbhnjm', 'laki-laki', '009877896543', 'agus@gmail.com', 'Selong'),
(5, 'Budi', 'laki-laki', '009877896543', 'budi@gmail.com', 'Mesaleng'),
(6, 'Alea', 'perempuan', '8956', 'lii@gmail.com', 'Selong'),
(7, 'qfsgyg', 'laki-laki', '009877891234', 'budi@gmail.com', 'h');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_toko`
--

CREATE TABLE `profil_toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `telepon_toko` varchar(13) NOT NULL,
  `email_toko` varchar(25) NOT NULL,
  `alamat_toko` varchar(50) NOT NULL,
  `rating` int(5) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_toko`
--

INSERT INTO `profil_toko` (`id`, `nama_toko`, `telepon_toko`, `email_toko`, `alamat_toko`, `rating`, `tgl_daftar`) VALUES
(1, 'newborn', '12345', 'newborn@gmail.com', 'tegal', 4, '2024-01-08 08:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  `status` enum('menunggu konfirmasi','dikonfirmasi','selesai') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id`, `nama_pelanggan`, `keluhan`, `status`, `tanggal`) VALUES
(1, 'andi', 'keyboard rusak', 'dikonfirmasi', '2024-01-08 07:05:54'),
(3, 'Agus', 'LCD rusak', 'selesai', '2024-01-08 16:59:00'),
(5, 'Budi', 'Black screen', 'selesai', '2024-01-08 18:05:00'),
(6, 'Alea', 'lowbat', 'selesai', '2024-01-08 18:07:00'),
(7, 'Ali', 'Black screen', 'dikonfirmasi', '2024-01-09 05:41:00'),
(8, 'Ari', 'Black screen', 'selesai', '2024-01-14 03:25:00'),
(9, 'Fitri', 'keyboard rusak', 'selesai', '2024-01-15 10:36:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `Id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`Id_pelanggan`, `nama`, `alamat`, `no_hp`) VALUES
(0, 'mifta', 'bagu', '726739283'),
(0, 'andi', 'aikmel', '081111111113'),
(0, 'mifta', 'aikmel', '081111111113');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_toko`, `email`, `telepon`, `deskripsi`, `level`) VALUES
(3, 'admin', 'admin', '', 'admin@gmail.com', '', '', 'admin'),
(15, 'pimpinan', 'pimpinan', '', 'pimpinan@gmail.com', '', '', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_toko`
--
ALTER TABLE `profil_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `profil_toko`
--
ALTER TABLE `profil_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
