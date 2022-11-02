-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_admin(1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, '', '', 'lidyas', '$2y$10$v09X6j7ungX8eioE4I7fUucBUoHiz0Clsz2G.MmnG7X'),
(2, '', '', 'username', '$2y$10$jVxXkS4yxx0j4WTPm9vh.OiK.F5cXkDxzXzSbeDn5Hn');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(20) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tgl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `logo`, `posisi`, `perusahaan`, `alamat`, `tgl`) VALUES
(29, 'Bank BNI.jpg', 'COSTUMER SERVICE', 'Bank BNI', 'jakarta', '2022-10-27'),
(30, 'Bank BRI.jpg', 'Cleaning Service', 'Bank BRI', 'samarinda', '2022-10-27'),
(31, 'PT. BUMA.jpg', 'Trainee Manager', 'PT. BUMA', 'samarinda', '2022-10-27'),
(32, 'PT. PETROSEA.jpg', 'Manager', 'PETROSEA', 'pontianak', '2022-10-27'),
(33, 'PT. MCD INDONESIA.jpg', 'COSTUMER SERVICE', 'PT.MCD', ' samrinda', '2022-10-27'),
(34, 'PT. STARBUCK.jpg', 'Pegawai', 'STARBUCKS', 'samarinda', '2022-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
