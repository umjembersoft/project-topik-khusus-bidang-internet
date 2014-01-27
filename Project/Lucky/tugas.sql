-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2014 at 02:03 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `IDBUKU` varchar(20) NOT NULL,
  `JUDULBUKU` varchar(20) DEFAULT NULL,
  `JENISBUKU` varchar(20) DEFAULT NULL,
  `GENRE` varchar(20) DEFAULT NULL,
  `TAHUNTERBIT` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDBUKU`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`IDBUKU`, `JUDULBUKU`, `JENISBUKU`, `GENRE`, `TAHUNTERBIT`) VALUES
('B001', 'Surat kecil', 'Novel', 'Sadden', '2012'),
('B002', 'Mengapa berbedah', 'Novel', 'Sadden', '2012'),
('B003', 'Perahu kertas', 'Novel', 'Romantis', '2012'),
('B004', 'Falling in love', 'Novel', 'Romantis', '2012');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `IDCUSTOMER` varchar(20) NOT NULL,
  `IDPENERBIT` varchar(20) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `NAMACUSTOMER` varchar(20) DEFAULT NULL,
  `ALAMATCUSTOMER` varchar(20) DEFAULT NULL,
  `KODEPOS` int(11) DEFAULT NULL,
  `NOTLPCUSTOMER` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`IDCUSTOMER`),
  KEY `FK_MEMINTA` (`HARGA`),
  KEY `FK_MENGHUBINGI` (`IDPENERBIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`IDCUSTOMER`, `IDPENERBIT`, `HARGA`, `NAMACUSTOMER`, `ALAMATCUSTOMER`, `KODEPOS`, `NOTLPCUSTOMER`) VALUES
('C001', 'P001', 17000, 'Iin', 'Kalisat', 68193, '081999888777'),
('C002', 'P002', 20000, 'Kinda', 'Kalisat', 68193, '085234556709'),
('C003', 'P003', 16000, 'Wawan', 'Jinggawa', 68156, '089876550990'),
('C004', 'P004', 15000, 'Riki', 'Arjasa', 68123, '085676877991'),
('C005', 'P005', 15500, 'Randy', 'Bondowoso', 68456, '085236546778');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
  `IDEDITOR` varchar(20) NOT NULL,
  `IDPENERBIT` varchar(20) DEFAULT NULL,
  `NAMAEDITOR` varchar(20) DEFAULT NULL,
  `NAMABUKU` varchar(20) DEFAULT NULL,
  `KOTABUKU` varchar(20) DEFAULT NULL,
  `GENREBUKU` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDEDITOR`),
  KEY `FK_MENGERJAKAN` (`IDPENERBIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`IDEDITOR`, `IDPENERBIT`, `NAMAEDITOR`, `NAMABUKU`, `KOTABUKU`, `GENREBUKU`) VALUES
('E001', 'P001', 'Joko', 'Surat kecil', 'Jakarta', 'Sadden'),
('E002', 'P002', 'Ferdinan', 'Mengapa berbedah', 'Bandung', 'Sadden'),
('E003', 'P003', 'Denova', 'Perahu kertas', 'Semarang', 'Romantis'),
('E004', 'P004', 'Siska', 'Falling in love', 'Bogor', 'Romantis'),
('E005', 'P005', 'Agung', 'The raid', 'Jakarta', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `kirim`
--

CREATE TABLE IF NOT EXISTS `kirim` (
  `HARGA` int(11) NOT NULL DEFAULT '0',
  `ONGKOSKIRIM` int(11) DEFAULT NULL,
  `ONGKOSBALIK` int(11) DEFAULT NULL,
  `TANGGALKIRIM` date DEFAULT NULL,
  `TANGGAKKEMBALI` date DEFAULT NULL,
  PRIMARY KEY (`HARGA`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kirim`
--

INSERT INTO `kirim` (`HARGA`, `ONGKOSKIRIM`, `ONGKOSBALIK`, `TANGGALKIRIM`, `TANGGAKKEMBALI`) VALUES
(17500, 5000, 3000, '2013-01-01', '2013-01-05'),
(20000, 4000, 3000, '2013-01-05', '2013-01-10'),
(16000, 6000, 4000, '2013-01-12', '2013-01-17'),
(15000, 4000, 2000, '2013-01-10', '2013-01-15'),
(15500, 3000, 2000, '2013-01-13', '2013-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `memilih`
--

CREATE TABLE IF NOT EXISTS `memilih` (
  `idbuku` varchar(20) NOT NULL,
  `idcustomer` varchar(20) NOT NULL,
  `ideditor` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `idpenerbit` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memilih`
--

INSERT INTO `memilih` (`idbuku`, `idcustomer`, `ideditor`, `harga`, `idpenerbit`) VALUES
('B001', 'C001', 'E001', 17500, 'P001');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tugas`.`pelanggan` AS select `tugas`.`customer`.`IDCUSTOMER` AS `idcustomer`,`tugas`.`customer`.`NAMACUSTOMER` AS `namacustomer`,`tugas`.`customer`.`ALAMATCUSTOMER` AS `alamatcustomer`,`tugas`.`customer`.`KODEPOS` AS `kodepos`,`tugas`.`customer`.`NOTLPCUSTOMER` AS `notlpcustomer`,`tugas`.`kirim`.`HARGA` AS `harga` from (`tugas`.`customer` join `tugas`.`kirim` on((`tugas`.`customer`.`HARGA` = `tugas`.`kirim`.`HARGA`)));

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idcustomer`, `namacustomer`, `alamatcustomer`, `kodepos`, `notlpcustomer`, `harga`) VALUES
('C002', 'Kinda', 'Kalisat', 68193, '085234556709', 20000),
('C003', 'Wawan', 'Jinggawa', 68156, '089876550990', 16000),
('C004', 'Riki', 'Arjasa', 68123, '085676877991', 15000),
('C005', 'Randy', 'Bondowoso', 68456, '085236546778', 15500);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `IDPENERBIT` varchar(20) NOT NULL,
  `IDCUSTOMER` varchar(20) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `NAMAPENERBIT` varchar(20) DEFAULT NULL,
  `ALAMATPENERBIT` varchar(20) DEFAULT NULL,
  `TGLLAHIRPENERBIT` varchar(20) DEFAULT NULL,
  `NOTLPPENERBIT` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`IDPENERBIT`),
  KEY `FK_MELAKUKAN` (`HARGA`),
  KEY `FK_MENGHUBINGI2` (`IDCUSTOMER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`IDPENERBIT`, `IDCUSTOMER`, `HARGA`, `NAMAPENERBIT`, `ALAMATPENERBIT`, `TGLLAHIRPENERBIT`, `NOTLPPENERBIT`) VALUES
('P001', 'C001', 17500, 'Erlangga', 'Jakarta', '2011', '085455601601'),
('P002', 'C002', 20000, 'Gemainsani', 'Bogor', '2012', '081455600909'),
('P003', 'C003', 16000, 'Teenlite', 'Bandung', '2012', '089981233400'),
('P004', 'C004', 15000, 'Serambi', 'Jakarta', '2010', '083909887009'),
('P005', 'C005', 15500, 'Erlangga', 'Jakarta', '2011', '085654776100');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tugas`.`view` AS select `tugas`.`customer`.`NAMACUSTOMER` AS `namacustomer`,`tugas`.`customer`.`ALAMATCUSTOMER` AS `alamatcustomer`,`tugas`.`kirim`.`ONGKOSKIRIM` AS `ongkoskirim`,`tugas`.`kirim`.`ONGKOSBALIK` AS `ongkosbalik` from (`tugas`.`customer` join `tugas`.`kirim` on((`tugas`.`customer`.`HARGA` = `tugas`.`kirim`.`HARGA`)));

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`namacustomer`, `alamatcustomer`, `ongkoskirim`, `ongkosbalik`) VALUES
('Kinda', 'Kalisat', 4000, 3000),
('Wawan', 'Jinggawa', 6000, 4000),
('Riki', 'Arjasa', 4000, 2000),
('Randy', 'Bondowoso', 3000, 2000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
