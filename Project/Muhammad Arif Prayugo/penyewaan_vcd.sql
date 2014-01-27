-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2014 pada 06.49
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `penyewaan_vcd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `idfilm` int(10) NOT NULL DEFAULT '0',
  `judul_film` varchar(25) DEFAULT NULL,
  `genre` varchar(15) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL,
  PRIMARY KEY (`idfilm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`idfilm`, `judul_film`, `genre`, `jumlah`) VALUES
(511, 'Tali Pocong Perawan', 'Horor', 27),
(512, 'Bruce Lee', 'Action', 15),
(513, 'Faling In Love', 'Romantis', 20),
(515, 'The Raid', 'Action', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
