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
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `psw`) VALUES
(5, 'dimasarya@gmail.com', 'dimas', '$2y$10$R3lsLZahmZv.uSg8I.zgtOSmIGoBzdTpk9qjyhBzMm1M96jjQz2qu'),
(6, 'nugrahaarya@gmail.com', 'nugraha', '$2y$10$jX9xUTQIX7X62kD8C3as8O.R6ZRkT.4jRM6tNGmYtjcIdJ1pln4Fa'),
(7, 'benjamin@gmail.com', 'ben', '$2y$10$cpIg4WzHgRtvxsuSpfDHMOMPpFU3bpV6MQTN8E7DOjkSiVnKZm976'),
(8, 'jotaro@gmail.com', 'jojo', '$2y$10$tiW9D8e6TNSoODHMT2gXu.b/PlrPtKNVOavCrozlMXXta2HxFK4fe'),
(9, 'diobrando@gmail.com', 'dio', '$2y$10$Sk9Oan/Fe5Figp205vus8eLGFHkD5PGNlAytb3jV3crinCqauqspa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
