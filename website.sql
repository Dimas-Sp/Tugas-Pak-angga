-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2020 at 09:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `bn1`
--

CREATE TABLE `bn1` (
  `kd_bn` int(11) NOT NULL,
  `status_kd` int(1) NOT NULL,
  `bn_1` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bn1`
--

INSERT INTO `bn1` (`kd_bn`, `status_kd`, `bn_1`) VALUES
(1, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kd_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `status_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kd_menu`, `nama_menu`, `status_menu`) VALUES
(1, 'Beranda', 1),
(2, 'Profil', 1),
(3, 'kontak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_box`
--

CREATE TABLE `menu_box` (
  `nama_box` varchar(100) NOT NULL,
  `ket_box` varchar(100) NOT NULL,
  `kd_box` int(11) NOT NULL,
  `status_box` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_box`
--

INSERT INTO `menu_box` (`nama_box`, `ket_box`, `kd_box`, `status_box`) VALUES
('Kontak', 'sasdas', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bn1`
--
ALTER TABLE `bn1`
  ADD PRIMARY KEY (`kd_bn`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indexes for table `menu_box`
--
ALTER TABLE `menu_box`
  ADD PRIMARY KEY (`kd_box`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bn1`
--
ALTER TABLE `bn1`
  MODIFY `kd_bn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_box`
--
ALTER TABLE `menu_box`
  MODIFY `kd_box` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
