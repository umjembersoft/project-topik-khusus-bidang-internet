-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2014 at 05:40 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `kreta`
--

CREATE TABLE IF NOT EXISTS `kreta` (
  `idkreta` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(20) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL,
  `kota_asal` varchar(20) DEFAULT NULL,
  `kota_tujuan` varchar(20) DEFAULT NULL,
  `jam_keberangkatan` varchar(5) DEFAULT NULL,
  `jam_kedatangan` varchar(5) DEFAULT NULL,
  `harga_tiket` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idkreta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kreta`
--

INSERT INTO `kreta` (`idkreta`, `nama`, `tipe`, `kota_asal`, `kota_tujuan`, `jam_keberangkatan`, `jam_kedatangan`, `harga_tiket`) VALUES
(1, 'logwa', 'Ekonomi', 'jember', 'purwokerto', '05:30', '19:00', '50.000'),
(2, 'Sritanjung', 'Bisnis', 'Jember', 'Yogyakarta', '12:00', '20:00', '20000'),
(3, 'Tawang Alun', 'Executiv', 'Jember', 'Surabaya', '09:00', '15:00', '30000'),
(4, 'Jember indah', 'Ekonomi', 'Jember', 'Jakarta', '07:00', '10:00', '200000'),
(5, 'senopati', 'exspres', 'jember', 'surabaya', '06:00', '07:00', '70.000'),
(7, 'logawa', 'Ekonomi', 'Jember', 'purbalingga', '05:30', '08:00', '50.000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
