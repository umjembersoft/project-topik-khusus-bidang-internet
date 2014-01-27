-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2013 at 05:27 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kuistopik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelmhs`
--

CREATE TABLE IF NOT EXISTS `tabelmhs` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pembimbing` varchar(30) NOT NULL,
  `penguji` varchar(30) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelmhs`
--

INSERT INTO `tabelmhs` (`nim`, `nama`, `judul`, `status`, `pembimbing`, `penguji`) VALUES
('100631026', 'helmi', 'sistem informasi parkir kendaraan', 'lulus', 'dudi irawan', 'victor wahanggara'),
('100631030', 'deni', 'sistem monitoring ta', 'tidak lulus', 'eko fajar', 'yeni dwi'),
('1100631005', 'sari', 'sistem infomasi manajemen keuangan keluarga berbasis android', 'lulus', 'yeni dwi rahayu', 'eko fajar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
