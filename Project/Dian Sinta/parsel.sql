-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2014 at 01:42 
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `parsel`
--

CREATE TABLE IF NOT EXISTS `parsel` (
  `namabarang` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `lama_pesan` varchar(20) NOT NULL,
  PRIMARY KEY (`namabarang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parsel`
--

INSERT INTO `parsel` (`namabarang`, `harga`, `ukuran`, `lama_pesan`) VALUES
('Boneka', 50000, 'kecil', '3'),
('gelas', 100000, 'sedang', '4'),
('Makanan', 200000, 'besar', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
