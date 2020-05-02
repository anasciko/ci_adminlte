-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 06.19
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_bar` int(11) NOT NULL,
  `nama_bar` varchar(50) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `stok_bar` int(11) NOT NULL,
  `harga_bar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_bar`, `nama_bar`, `id_kat`, `stok_bar`, `harga_bar`) VALUES
(4, 'Mie Sedap', 6, 35, 3000),
(5, 'Teh Botol', 7, 200, 2000),
(6, 'Bodrek', 9, 3, 600),
(7, 'Paramex', 9, 42, 1000),
(8, 'Antangin', 9, 20, 3000),
(9, 'Adem Sari', 9, 7, 3200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(11) NOT NULL,
  `nama_cust` varchar(30) NOT NULL,
  `alamat_cust` varchar(50) NOT NULL,
  `no_tlp_cust` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `alamat_cust`, `no_tlp_cust`) VALUES
(4, 'Fahri', 'Semarang', '082241587033'),
(5, 'Santi', 'Jepara', '082241587011'),
(6, 'Laila', 'Demak', '082241585608');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_kar` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_kar` varchar(50) NOT NULL,
  `alamat_kar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_kar`, `username`, `password`, `nama_kar`, `alamat_kar`) VALUES
(437, 'mukidi', '4b1e8cae0add72583590b7c9c75065b5', 'Mukidi', 'Semarang'),
(438, 'anas', '60b348bb250144900f8c45be7f1284f8', 'Anas Wahyu', 'Jepara'),
(439, 'user', '6ad14ba9986e3615423dfca256d04e3f', 'User', 'Jepara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategory`
--

CREATE TABLE `kategory` (
  `id_kat` int(11) NOT NULL,
  `kategory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategory`
--

INSERT INTO `kategory` (`id_kat`, `kategory`) VALUES
(6, 'Makanan'),
(7, 'Minuman'),
(8, 'Pakaian'),
(9, 'Obat'),
(10, 'Sayur'),
(11, 'Buah-buahan'),
(12, 'Elektronik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_bar`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_kar`);

--
-- Indeks untuk tabel `kategory`
--
ALTER TABLE `kategory`
  ADD PRIMARY KEY (`id_kat`,`kategory`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_bar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_kar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT untuk tabel `kategory`
--
ALTER TABLE `kategory`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kat`) REFERENCES `kategory` (`id_kat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
