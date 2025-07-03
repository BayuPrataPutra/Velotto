-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2024 pada 08.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `velotto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(20) NOT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `tipe`, `merk`, `harga`) VALUES
(5, 'Grand 2017', 'Jeep', 1000000.00),
(6, 'Landcruiser', 'Toyota', 800000.00),
(7, 'Agya', 'Daihatsu', 300000.00),
(8, 'Xenia', 'Daihatsu', 500000.00),
(9, 'Civic', 'Honda', 850000.00),
(10, 'CX5', 'Mazda', 750000.00),
(11, 'Xpander', 'Mitsubishi', 800000.00),
(12, 'Ertiga', 'Suzuki', 550000.00),
(13, 'Swift', 'Suzuki', 400000.00),
(14, 'Avanza', 'Toyota', 500000.00),
(15, 'Inova', 'Toyota', 600000.00),
(16, 'Rush', 'Toyota', 600000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id_orderan` int(20) NOT NULL,
  `tgl_ambil` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `id_paket` int(20) DEFAULT NULL,
  `id_sts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orderan`
--

INSERT INTO `orderan` (`id_orderan`, `tgl_ambil`, `tgl_kembali`, `id_paket`, `id_sts`) VALUES
(15, '2024-01-15', '2024-01-17', 2, 1),
(16, '2024-01-24', '2024-02-14', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(20) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `harga_pk` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `keterangan`, `harga_pk`) VALUES
(1, 'Tanpa Supir', 0.00),
(2, 'Dengan Supir', 50000.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(20) NOT NULL,
  `bukti` longblob NOT NULL,
  `id_transaksi` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `bukti`, `id_transaksi`) VALUES
(13, 0x7075626c69632f62756b74692f626570673172464556315859584846696f5531516237705747466d7546745254476b587a4d6369342e6a7067, 125882),
(14, 0x7075626c69632f62756b74692f4e42533744694e646153584a6c703166527854674d4d5158507677456d43354d4a643852507656672e6a7067, 125883);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `nik` char(30) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_telepon` char(13) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`nik`, `nama`, `no_telepon`, `alamat`) VALUES
('32141411111', 'M Pascha', '087777666335', 'Cikutra'),
('3277020504030201', 'Ganni Ginna', '08086742694', 'Cimahi edan bekasi welll no. 69');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_sts` int(11) NOT NULL,
  `ket_sts` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_sts`, `ket_sts`) VALUES
(1, 'On Progres'),
(2, 'Done'),
(3, 'Di Batalkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `nik` char(30) NOT NULL,
  `id_orderan` int(20) NOT NULL,
  `id_mobil` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `jumlah`, `nik`, `id_orderan`, `id_mobil`) VALUES
(125882, 1250000.00, '32141411111', 15, 16),
(125883, 21050000.00, '3277020504030201', 16, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id_orderan`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `id_sts` (`id_sts`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_sts`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `nik` (`nik`),
  ADD KEY `fk2` (`id_mobil`),
  ADD KEY `fk3` (`id_orderan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id_orderan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_sts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125884;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD CONSTRAINT `orderan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderan_ibfk_2` FOREIGN KEY (`id_sts`) REFERENCES `status` (`id_sts`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `penyewa` (`nik`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_orderan`) REFERENCES `orderan` (`id_orderan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
