-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2014 at 10:19 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maha`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(35) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1100631090 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`) VALUES
(1100631038, 'Rifqi Hanif Maulana', 'MI'),
(1100631004, 'Ricky Anas Prayoga', 'MI'),
(1100631015, 'Wawan Kurniawan', 'MI'),
(1100631020, 'Nanang Hidayat', 'Psikolog'),
(1100631024, 'Putri Lala ', 'Psikolog'),
(1100631031, 'Dita maya', 'mi'),
(1100631039, 'Jaka', 'FKIP'),
(1100631089, 'Ririn', 'mi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
