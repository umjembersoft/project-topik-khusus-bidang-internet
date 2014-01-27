-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2014 pada 04.55
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `elektronik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarpembeli`
--

CREATE TABLE IF NOT EXISTS `daftarpembeli` (
  `idpembeli` int(10) NOT NULL DEFAULT '0',
  `namapembeli` varchar(20) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `Merk_Laptop` varchar(15) DEFAULT NULL,
  `Harga` int(9) DEFAULT NULL,
  `Tahun_Produksi` int(4) DEFAULT NULL,
  PRIMARY KEY (`idpembeli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarpembeli`
--

INSERT INTO `daftarpembeli` (`idpembeli`, `namapembeli`, `alamat`, `nohp`, `Merk_Laptop`, `Harga`, `Tahun_Produksi`) VALUES
(101, 'yuni', 'arjasa', '0899877383', 'Acer ci3', 4000000, 2009),
(106, 'mitha', 'kencong', '089989989989', 'toshiba', 10000000, 2014),
(107, 'merry', 'garahan', '0899899890', 'Linovo', 4000000, 2010),
(108, 'Rifqi', 'Ajung', '089098637739', 'Axio', 2000000, 2008),
(109, 'juwita', 'jakarta', '098909898', 'Apple ci7', 20000000, 2014),
(111, 'Kienda', 'Kalisat', '08994856171', 'Toshiba ci3', 4900000, 2011),
(1000, 'cinta', 'garahan', '009009980', 'acer', 2000000, 2014);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
