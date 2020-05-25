-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 01:43 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud_pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` char(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Hak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `username` char(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Hak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `Nama`, `Hak`) VALUES
('yuli', '123', 'yuli', 'a'),
('shofi', '123', 'shofi', 'operator 1'),
('intan', '123', 'intan', 'operator 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userr`
--

CREATE TABLE IF NOT EXISTS `tb_userr` (
  `username` char(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Hak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_userr`
--

INSERT INTO `tb_userr` (`username`, `password`, `Nama`, `Hak`) VALUES
('yuli', '123', 'yuli', 'admin'),
('shofi', '123', 'shofi', 'operator1'),
('intan', '123', 'intan', 'operator2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
