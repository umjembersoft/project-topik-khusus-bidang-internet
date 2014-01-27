-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2014 at 01:22 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `distroyii`
--

-- --------------------------------------------------------

--
-- Table structure for table `distroku`
--

CREATE TABLE IF NOT EXISTS `distroku` (
  `kode_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(20) NOT NULL,
  `stok` varchar(5) NOT NULL,
  `harga` int(12) NOT NULL,
  `kondisi` varchar(11) NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10009 ;

--
-- Dumping data for table `distroku`
--

INSERT INTO `distroku` (`kode_barang`, `nama_barang`, `stok`, `harga`, `kondisi`) VALUES
(10001, 'celana jeans', '12', 265000, 'ready'),
(10002, 'topi', '20', 55000, 'ready'),
(10003, 'sepatu', '20', 245000, 'ready'),
(10004, 'Tas', '30', 175000, 'ready'),
(10005, 'baju', '20', 50000, 'ready'),
(10007, 'kemeja', '10', 125000, 'ready'),
(10008, 'topi 4', '20', 55000, 'ready');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
