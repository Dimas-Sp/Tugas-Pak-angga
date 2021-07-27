-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 09:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_smkn4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jns_kel` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` enum('B','M') NOT NULL,
  `mulai_kerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`nip`, `nama`, `jns_kel`, `tgl_lahir`, `status`, `mulai_kerja`) VALUES
(67432, 'vivi', 'P', '1999-08-12', 'M', '2017-11-12'),
(123123, 'feri', 'L', '2000-12-15', 'B', '2016-06-23'),
(123134, 'wedi', 'L', '2000-02-23', 'B', '2017-11-12'),
(431123, 'nisa', 'P', '1994-11-19', 'M', '2015-10-16'),
(534343, 'tori', 'L', '1988-09-05', 'B', '2003-11-12'),
(646345, 'riri', 'P', '1997-05-16', 'M', '2017-11-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=646346;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
