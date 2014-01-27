-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 25, 2014 at 06:13 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataabsensi`
--

CREATE TABLE IF NOT EXISTS `dataabsensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peserta_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `pertemuanke` int(11) NOT NULL,
  `absensi` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `dataabsensi`
--

INSERT INTO `dataabsensi` (`id`, `peserta_id`, `kelas_id`, `pertemuanke`, `absensi`) VALUES
(1, 1, 2, 1, '*'),
(2, 2, 3, 1, '*'),
(3, 2, 3, 2, '*'),
(4, 2, 3, 3, '*'),
(5, 2, 3, 4, '*'),
(6, 2, 3, 5, '*'),
(7, 2, 3, 6, '!'),
(8, 2, 3, 7, '*'),
(9, 2, 3, 8, '*'),
(10, 2, 3, 9, '!'),
(11, 2, 3, 10, '!'),
(12, 3, 4, 1, '!'),
(13, 3, 4, 2, '*'),
(14, 3, 4, 3, '*'),
(15, 3, 4, 4, '*'),
(16, 3, 4, 5, '*'),
(17, 3, 4, 6, '*'),
(18, 3, 4, 7, '!'),
(19, 3, 4, 8, '*'),
(20, 3, 4, 9, '*'),
(21, 3, 4, 10, '*'),
(22, 4, 5, 1, '*'),
(23, 4, 5, 2, '*'),
(24, 4, 5, 3, '*'),
(25, 4, 5, 4, '*'),
(26, 4, 5, 5, '*'),
(27, 5, 8, 1, '*'),
(28, 6, 7, 1, '!'),
(29, 6, 7, 2, '*'),
(30, 6, 7, 3, '*'),
(31, 6, 7, 4, '*'),
(32, 6, 7, 5, '!'),
(33, 6, 7, 6, '!'),
(34, 6, 7, 7, '!'),
(35, 6, 7, 8, '!'),
(36, 6, 7, 9, '!'),
(37, 6, 7, 10, '!'),
(38, 7, 9, 1, '*'),
(39, 7, 9, 2, '*'),
(40, 7, 9, 3, '*'),
(41, 7, 9, 4, '*'),
(42, 7, 9, 5, '!');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namakelas` varchar(45) NOT NULL,
  `jambelajar` varchar(36) NOT NULL,
  `cost` int(11) NOT NULL,
  `jumlahpertemuan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `namakelas`, `jambelajar`, `cost`, `jumlahpertemuan`) VALUES
(5, 'HIPNOTIS A', '15.00-16.30', 1000000, 5),
(6, 'HIPNOTIS B', '17.00 - 18.30', 1000000, 5),
(7, 'MENTALISM', '08.00 - 09.30', 800000, 10),
(8, 'CARD MAGIC', '10.00 - 11.30', 700000, 7),
(9, 'ILUSIONIS', '15.00 - 17.00', 900000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_id` int(11) NOT NULL,
  `namapeserta` varchar(555) NOT NULL,
  `alamat` text NOT NULL,
  `jeniskelamin` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `kelas_id`, `namapeserta`, `alamat`, `jeniskelamin`) VALUES
(4, 5, 'Dimas Bakti', 'Jl. Karimata No 49 Jember', 'L'),
(5, 8, 'Wawan Kurniawan', 'Jl. Jendral Sudirman Jember', 'L'),
(6, 7, 'Ricky Anas Prayogo', 'Jelbuk', 'L'),
(7, 9, 'Indra Gunawan', 'Situbondo', 'L');
