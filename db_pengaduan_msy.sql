-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2023 pada 03.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan_msy`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_petugas` (IN `id_ptgs` INT(11), IN `nama_ptgs` VARCHAR(35), IN `username_ptgs` VARCHAR(25), IN `password_ptgs` VARCHAR(25), IN `telp_ptgs` VARCHAR(13), IN `level_ptgs` ENUM('admin','petugas','',''))  INSERT INTO petugas (id_petugas, nama_petugas, username, password, telp, level) VALUES (id_ptgs, nama_ptgs, username_ptgs, password_ptgs, telp_ptgs, level_ptgs)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `data_pengaduan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data_pengaduan` (
`nik` varchar(16)
,`nama` varchar(35)
,`tgl_pengaduan` date
,`isi_laporan` text
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('2021390299039029', 'Mursid', 'mursid', '202cb962ac59075b964b07152d234b70', '0846737267647'),
('2021634565624563', 'Doni weee', 'doni', '202cb962ac59075b964b07152d234b70', '0856787464578'),
('20218367487433', 'Muhid', 'muhid', '202cb962ac59075b964b07152d234b70', '0857847883843'),
('21123123132`3231', 'dede', 'dede', '202cb962ac59075b964b07152d234b70', '0879897878797');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(5) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('proses','selesai','ditolak') NOT NULL,
  `foto1` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`, `foto1`) VALUES
(17, '2023-03-09', '20218367487433', 'Longsor di Dusun 2 Bungurberes', 'ca38dc681f2261cf3a0efd7c2d043cd0.jpeg', 'selesai', ''),
(18, '2023-03-09', '2021390299039029', 'Terjadi longsor', 'ca38dc681f2261cf3a0efd7c2d043cd0_1.jpeg', 'selesai', ''),
(19, '2023-03-09', '2021390299039029', 'banjir', 'meja layanan informasi.png', 'selesai', ''),
(22, '2023-03-13', '20218367487433', 'aw', '6dd7a1b2f476a80c2969e0b49ff4e683_1.jpg', 'ditolak', ''),
(23, '2023-03-13', '2021390299039029', 'sunami', '6dd7a1b2f476a80c2969e0b49ff4e683_2.jpg', 'selesai', ''),
(24, '2023-03-16', '2021634565624563', 'Longsor di Rt 02', 'ca38dc681f2261cf3a0efd7c2d043cd0_2.jpeg', 'proses', ''),
(25, '2023-03-16', '2021634565624563', 'p', '6dd7a1b2f476a80c2969e0b49ff4e683_3.jpg', 'proses', ''),
(26, '2023-03-16', '2021634565624563', 'aa', '6dd7a1b2f476a80c2969e0b49ff4e683_4.jpg', 'proses', ''),
(27, '2023-03-16', '2021634565624563', 'aa', '0bc89c5a618322d4b6af1496eb3194ad.jpg', 'proses', ''),
(28, '2023-03-16', '2021634565624563', 'qqqqq', '630bd1b8e064f44b77bbe548_6266bd79b5b386771e4ec297_ti-booth-1.jpeg', 'proses', ''),
(29, '2023-03-16', '2021634565624563', 'aaaa', 'meja layanan informasi_1.png', 'proses', ''),
(30, '2023-03-16', '2021634565624563', 'eeee', '630bd1b8e064f44b77bbe548_6266bd79b5b386771e4ec297_ti-booth-1_1.jpeg', 'proses', ''),
(31, '2023-03-16', '20218367487433', '11', 'meja layanan informasi_2.png', 'proses', ''),
(32, '2023-03-16', '20218367487433', 'aaaaaa', '630bd1b8e064f44b77bbe548_6266bd79b5b386771e4ec297_ti-booth-1_2.jpeg', 'proses', ''),
(33, '2023-03-16', '20218367487433', 'ssss', '610c08f72bd01.jpg', 'proses', ''),
(34, '2023-03-16', '20218367487433', 'asasa', '394932-txt-k-pop-beomgyu-chaos-chapter-freeze.jpg', 'proses', ''),
(35, '2023-03-16', '20218367487433', 'ddd', 'apotek-dinkes-bone.jpg', 'proses', ''),
(36, '2023-03-16', '20218367487433', 'ccc', 'apotek-dinkes-bone_1.jpg', 'proses', ''),
(37, '2023-03-16', '20218367487433', 'vvvv', 'txt_1.jpg', 'proses', ''),
(38, '2023-03-16', '20218367487433', 'sssss', '610c08f72bd01_1.jpg', 'proses', ''),
(39, '2023-03-16', '20218367487433', 'qwqwq', '6dd7a1b2f476a80c2969e0b49ff4e683.jpg', 'proses', ''),
(40, '2023-03-16', '20218367487433', 'dsdsds', 'apotek-dinkes-bone.jpg', 'proses', ''),
(41, '2023-03-16', '20218367487433', 'fcadfsd', 'a3c9c786589189.5d9e03da6abb5.jpg', 'proses', ''),
(42, '2023-03-16', '2021390299039029', 'qqq', '630bd1b8e064f44b77bbe548_6266bd79b5b386771e4ec297_ti-booth-1_4.jpeg', 'proses', ''),
(43, '2023-03-16', '2021390299039029', 'ffff', 'surat pemberitahuan.jfif', 'proses', ''),
(44, '2023-03-16', '2021390299039029', 'ddd', 'Tampil.png', 'selesai', ''),
(45, '2023-03-16', '20218367487433', 'fg', 'mouse-with-hand-illustration-logo-computer-personal-free-vector-removebg-preview (1).png', 'proses', ''),
(46, '2023-03-16', '20218367487433', 'vcvc', 'mouse-with-hand-illustration-logo-computer-personal-free-vector-removebg-preview (1)_1.png', 'proses', ''),
(47, '2023-03-16', '20218367487433', 'bvbvb', 'Detail.png', 'proses', ''),
(48, '2023-03-16', '2021634565624563', 'vv', 'mouse-with-hand-illustration-logo-computer-personal-free-vector-removebg-preview (1)_2.png', 'proses', 'OIP.jpg'),
(49, '2023-03-16', '2021634565624563', 'bbb', 'jantung.jpg', 'proses', '12rpl2.jpg'),
(50, '2023-03-16', '20218367487433', 'vcvcv', 'images-removebg-preview.png', 'proses', 'mouse-with-hand-illustration-logo-computer-personal-free-vector-removebg-preview.png'),
(51, '2023-03-16', '21123123132`3231', 'banjir', '610c08f72bd01_2.jpg', 'proses', 'ca38dc681f2261cf3a0efd7c2d043cd0.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(5) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp_petugas` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp_petugas`, `level`) VALUES
(3, 'Administrator', 'admin', '202cb962ac59075b964b07152d234b70', '08999', 'admin'),
(5, 'sifdil', 'sifdil', '7b7a53e239400a13bd6be6c91c4f6c4e', '08652376763', 'admin'),
(6, 'Syifadillah', 'syifadillah', '7b7a53e239400a13bd6be6c91c4f6c4e', '086786', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(5) NOT NULL,
  `id_pengaduan` int(5) NOT NULL,
  `tgl_tanggapan` varchar(20) NOT NULL,
  `isi_tanggapan` text NOT NULL,
  `id_petugas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `isi_tanggapan`, `id_petugas`) VALUES
(11, 17, '2023-03-09', 'Segera Di Tangani', 6),
(12, 17, '2023-03-09', 'Sudah di tangani', 6),
(13, 18, '2023-03-09', 'selesai', 3),
(14, 19, '2023-03-13', 'qqww', 3),
(17, 22, '2023-03-13', 'ww', 3),
(18, 23, '2023-03-16', 'telah di tangani', 6),
(19, 44, '2023-03-16', 'q', 3);

-- --------------------------------------------------------

--
-- Struktur untuk view `data_pengaduan`
--
DROP TABLE IF EXISTS `data_pengaduan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_pengaduan`  AS   (select `masyarakat`.`nik` AS `nik`,`masyarakat`.`nama` AS `nama`,`pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`,`pengaduan`.`isi_laporan` AS `isi_laporan` from (`masyarakat` join `pengaduan`) where `masyarakat`.`nik` = `pengaduan`.`nik`)  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`,`id_petugas`),
  ADD KEY `tanggapan_ibfk_1` (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
