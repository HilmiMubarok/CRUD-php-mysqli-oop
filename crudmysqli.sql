-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 Jul 2017 pada 05.01
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudmysqli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `id` int(11) NOT NULL,
  `nama` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `alamat` varchar(22) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `coba`
--

INSERT INTO `coba` (`id`, `nama`, `email`, `alamat`, `reg_date`) VALUES
(1, 'hilmi', 'm.hilmimubarok@gmail.c', 'kendal', '2017-07-30 11:53:57'),
(2, 'sddsad', '?asdasd@sdf', 'fdsfdf', '2017-07-30 14:48:43'),
(3, 'asdasd', 'm.hilmi/@fghfg', 'dasdasd', '2017-07-31 02:43:38'),
(5, 'cvb', 'xvxcv@dfd.fgh', 'fgdf', '2017-07-30 14:14:28'),
(6, 'ghjg', 'dfgfdg@sfd.fh', 'dgdfg', '2017-07-30 14:15:54'),
(7, 'ghjg', 'dfgfdg@sfd.fh', 'dgdfg', '2017-07-30 14:16:39'),
(10, 'hhhh', 'hilmimi17@gmail.com', 'hhhhh', '2017-07-30 14:49:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
