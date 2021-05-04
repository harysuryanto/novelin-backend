-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2021 pada 19.48
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_novelin_sementara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `curhat`
--

CREATE TABLE IF NOT EXISTS `curhat` (
`id_curhat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `mood` varchar(64) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_diubah` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `curhat`
--

INSERT INTO `curhat` (`id_curhat`, `id_user`, `isi`, `mood`, `tanggal_dibuat`, `tanggal_diubah`) VALUES
(1, 1, 'Ini adalah contoh isi curhat', 'Sangat Bersemangat', '2019-05-11 14:02:55', NULL),
(2, 1, 'Nyieun program teh lieur euy. Tapi kudu semangs lah... Hahaha', 'Pusing', '2019-05-11 15:06:32', NULL),
(3, 4, 'Kangen Sumi gins euy. Pengen ketemu... :v', 'Kangen', '2019-05-11 15:07:41', NULL),
(4, 1, 'For someone special, have you seen my drawing?', 'Galau', '2019-05-11 16:48:02', NULL),
(5, 1, 'tes', 'galau', '2019-06-02 15:19:17', NULL),
(6, 3, 'saya', 'malas', '2019-06-02 17:44:21', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `curhat_like`
--

CREATE TABLE IF NOT EXISTS `curhat_like` (
  `id_curhat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `curhat_like`
--

INSERT INTO `curhat_like` (`id_curhat`, `id_user`, `tanggal_dibuat`) VALUES
(3, 1, '2019-06-08 22:45:29'),
(6, 1, '2019-06-08 22:47:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `dari_id_user` int(11) NOT NULL,
  `ke_id_use` int(11) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nama` varchar(64) DEFAULT NULL,
  `tanggal_lahir` datetime DEFAULT NULL,
  `jenis_kelamin` enum('pria','wanita') DEFAULT NULL,
  `foto` text,
  `bio` text,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_diubah` timestamp NULL DEFAULT NULL,
  `waktu_terakhir_login` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `foto`, `bio`, `tanggal_dibuat`, `tanggal_diubah`, `waktu_terakhir_login`) VALUES
(1, 'harysuryanto', '12341234', 'hary.suryanto01@gmail.com', 'Hary Suryanto', '1999-10-11 00:00:00', 'pria', NULL, NULL, '2019-05-11 13:18:00', NULL, '2019-06-08 23:53:57'),
(2, 'coba_aja', '12341234', '', 'Coba Aja', '0000-00-00 00:00:00', '', NULL, NULL, '2019-05-11 13:50:42', NULL, '2019-05-11 22:47:46'),
(3, 'affifahjay', '12341234', 'affifah@gmail.com', 'Affifah Jayanthi', '2019-05-14 00:00:00', 'wanita', NULL, NULL, '2019-05-11 13:53:12', NULL, '2019-06-08 22:45:58'),
(4, 'rivalthea', '12341234', 'rivaleuy@gmail.com', 'Rival', '1212-12-12 00:00:00', 'pria', NULL, NULL, '2019-05-11 13:54:17', NULL, '2019-05-11 22:47:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curhat`
--
ALTER TABLE `curhat`
 ADD PRIMARY KEY (`id_curhat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curhat`
--
ALTER TABLE `curhat`
MODIFY `id_curhat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
