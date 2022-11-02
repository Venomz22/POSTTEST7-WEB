-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesangame`
--

CREATE TABLE `pesangame` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pesan` varchar(15) NOT NULL,
  `lewat` varchar(15) NOT NULL,
  `bayar` varchar(15) NOT NULL,
  `files` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesangame`
--

INSERT INTO `pesangame` (`id`, `nama`, `pesan`, `lewat`, `bayar`, `files`, `tanggal`) VALUES
(36, 'GTA 5', '1', 'Flashdisk', 'Atm', 'Grand_Theft_Auto_V.png', '2022-10-27'),
(37, 'Stray', '10', 'Gdrive', 'Kredit', 'stray-cover_w480.jpg', '2022-10-27'),
(38, 'God of War', '5', 'DVD', 'DANA', 'God_of_War_4_cover.jpg', '2022-10-27'),
(39, 'CyberPunk', '2', 'Gdrive', 'OVO', 'Cyberpunk_2077_capa.png', '2022-10-27'),
(40, 'Bioshock', '20', 'FlaskDisk', 'ShopeePay', 'BioShock_cover.jpg', '2022-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesangame`
--
ALTER TABLE `pesangame`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesangame`
--
ALTER TABLE `pesangame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
