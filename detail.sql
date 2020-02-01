-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2020 pada 14.36
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `Cashier` varchar(30) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id`, `Cashier`, `Product`, `Category`, `Price`) VALUES
(1, 'Pevita Pearce', 'Latte', 'Drink', 10000),
(2, 'Raisa Andriana', 'Cake', 'Food', 15000),
(3, 'Raisa Andriana', 'Fried Rice', 'Food', 30000),
(4, 'Pevita Pearce ', 'Gudeg', 'Food', 35000),
(5, 'Joko Purwadi', 'Ice Tea', 'Drink', 55000),
(6, 'Mohamad Diki Alfin', 'Noodle Chicken', 'Food', 15000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
