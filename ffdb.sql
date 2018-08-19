-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 02:49 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--


-- --------------------------------------------------------

--
-- Table structure for table `srishop_balas`
--

CREATE TABLE IF NOT EXISTS `srishop_balas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `balas` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `srishop_cart`
--

CREATE TABLE IF NOT EXISTS `srishop_cart` (
  `kodebarang` varchar(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `pengunjung` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `srishop_cart`
--

INSERT INTO `srishop_cart` (`kodebarang`, `jumlah`, `harga`, `pengunjung`, `id`) VALUES
('001', 5, 125000, '1', 1),
('003', 1, 30000000, 'handayaniputrii12@gm', 2),
('005', 1, 65000000, 'handayaniputrii12@gm', 3),
('005', 1, 65000000, '1', 4),
('003', 1, 30000000, '1', 5),
('003', 1, 30000000, '1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `srishop_checkout`
--

CREATE TABLE IF NOT EXISTS `srishop_checkout` (
  `idorder` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kodebarang` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `srishop_checkout`
--

INSERT INTO `srishop_checkout` (`idorder`, `nama`, `alamat`, `kodebarang`, `jumlah`, `telepon`, `email`, `harga`) VALUES
(4, 'Handayani Putri', 'jl.mandiwacana', '001 / 005 ', '5 / 1 / 1 ', '089636369383', '1', 125125000);

-- --------------------------------------------------------

--
-- Table structure for table `srishop_pengunjung`
--

CREATE TABLE IF NOT EXISTS `srishop_pengunjung` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jam` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `srishop_pengunjung`
--

INSERT INTO `srishop_pengunjung` (`id`, `nama`, `password`, `alamat`, `email`, `jam`, `jk`) VALUES
(1, 'Handayani Putri', '0987654321', 'ah', 'handayaniputrii12@gmail.com', '2015-05-18', 'Perempuan'),
(2, 'adhad', 'popo', 'aa', 'admin@gmail.com', '2015-05-18', 'Perempuan'),
(3, 'pupuytrytagdkada', 'asdfg', 'ljkk', 'hai@kl.vom', '2015-05-18', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `srishop_pesan`
--

CREATE TABLE IF NOT EXISTS `srishop_pesan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `srishop_simpan`
--

CREATE TABLE IF NOT EXISTS `srishop_simpan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `srishop_simpan`
--

INSERT INTO `srishop_simpan` (`id`, `gambar`, `keterangan`, `title`, `harga`) VALUES
(1, '25k.png', 'Buat mancungin hidung', 'Nose Up', '25000'),
(2, '25rb.png', 'Cetakan alis , isi 3', 'Cetakan Alis', '15000'),
(3, '30rb.png', 'Liptin', 'Obdo Tint and Gloss', '30000'),
(5, '65.png', 'Bahan : rajut halus | seri 60rb . ecer 65rb', 'Plain Colar Pink', '65000'),
(6, '50rb.png', 'Krim Wajah', 'Temulawak Day and Night Cream', '50000'),
(7, '65rb.png', 'Bahan : rajut halus | seri 60rb . ecer 65rb', 'Abstract Black', '65000'),
(8, '68rb.png', 'Bahan : twiscone chap | seri 63rb . ecer 68rb', 'Kemeja Twiscone', '68000'),
(9, '70rb.png', '2 pilihan warna : BLACK -> hasilnya menjadi coklat', 'Monomola tatoo eyebrow', '70000'),
(15, '88rb.png', 'Bahan : RAJUT  | Harga : 88.000 | Ukuran : allsize', 'POTTER TOSCA', '88000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
