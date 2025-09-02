-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 05:51 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nobp` varchar(14) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jekel` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nobp`, `nama`, `jekel`, `alamat`, `telp`, `agama`, `foto`) VALUES
('24101152610011', 'Andi', 'Laki-laki', '08987976865', ' Palembang', 'Kristen', '28102024163047LAB 1.png'),
('24101152610034', 'retrt', 'Laki-laki', 'Bukittinggi', '09808087', 'Islam', '28102024174143LAB 1.png'),
('24101152610039', 'Abdullah Arrozy Syofyan', 'Laki-laki', '090895786575', ' Jambi', 'Islam', '28102024162547LAB 1.png'),
('24101152610051', 'Fikri Novriadi', 'Laki-laki', '098644789978', ' Padang', 'Islam', '28102024162336LAB 1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nobp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
