-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. Januari 2014 jam 13:24
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kursus` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `student`
--

INSERT INTO `student` (`id`, `nama`, `alamat`, `tanggal`, `kursus`, `harga`) VALUES
(4, 'Yolanda Retditiasari', 'banyuwangi', '2014-01-19', 'Perangkat Keras', 150000),
(5, 'Dita Maya Mafita', 'Kencong', '2014-01-20', 'Pemrograman', 200000),
(6, 'Wardatul Husnia', 'Rambipuji', '2014-01-22', 'Sistem Basis Data', 150000),
(7, 'Dian Sinta Agustin', 'Besuki', '2014-01-25', 'Matematika Diskrit', 250000),
(8, 'Muhammad Arif Prayugo', 'Situbondo', '2014-01-24', 'Pemrograman', 175000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
