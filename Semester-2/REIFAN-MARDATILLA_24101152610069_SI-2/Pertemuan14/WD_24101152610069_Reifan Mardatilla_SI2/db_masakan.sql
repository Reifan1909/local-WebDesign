-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2025 at 01:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_masakan`
--

CREATE TABLE `tb_masakan` (
  `id_masakan` varchar(14) NOT NULL,
  `nama_masakan` varchar(30) NOT NULL,
  `jenis_masakan` varchar(15) NOT NULL,
  `komposisi` text NOT NULL,
  `harga` int(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_masakan`
--

INSERT INTO `tb_masakan` (`id_masakan`, `nama_masakan`, `jenis_masakan`, `komposisi`, `harga`, `foto`) VALUES
('001', 'Mie Goreng', 'Kering', 'Tepung, Telur, Penyedap Rasa', 10000, '01072025125523miegoreng.jpeg'),
('002', 'Nasi Goreng', 'Tradisional', 'Nasi, Telur, Sayur', 15000, '01072025125709nasigoreng.jpeg'),
('003', 'Mie Ayam', 'Basah', 'Tepung, Ayam, Penyedap Rasa', 18000, '01072025125753mieayam.jpeg'),
('004', 'Burger', 'Modern', 'Sayur, Saus, Roti, Daging', 12000, '01072025130158buger.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
