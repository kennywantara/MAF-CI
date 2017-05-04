-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2017 pada 13.24
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `customerID` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `salt` varchar(40) NOT NULL,
  `hash` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `orderID` varchar(5) NOT NULL,
  `customerID` varchar(5) NOT NULL,
  `productID` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `productID`, `quantity`) VALUES
('O0001', 'C0004', '001', 1),
('O0002', 'C0003', '017', 1),
('O0002', 'C0003', '008', 2),
('O0003', 'C0001', '002', 1),
('O0004', 'C0004', '001', 1),
('O0004', 'C0004', '010', 2),
('O0005', 'C0006', '011', 1),
('O0006', 'C0010', '004', 2),
('O0006', 'C0010', '012', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `productID` varchar(5) NOT NULL,
  `productName` varchar(40) NOT NULL,
  `productCategory` varchar(20) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDescription` varchar(1000) NOT NULL,
  `productPicture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`productID`, `productName`, `productCategory`, `productPrice`, `productDescription`, `productPicture`) VALUES
('007', 'PinkWhite Rose Bouquet', 'Hand Bouquet', 250000, 'Mawar Pink Putih', 'img/bunga7.png'),
('008', 'Couple Teddy Bouquet', 'Hand Bouquet', 200000, 'Bunga Teddy bear', 'img/bunga8.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user-admin`
--

CREATE TABLE `user-admin` (
  `username` varchar(14) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user-admin`
--

INSERT INTO `user-admin` (`username`, `salt`, `hash`, `Nama`, `email`) VALUES
('niaelvina', 'hahaha', '54ee5bb2f6d9ebb4514a73be0154d7a0', 'Nathania', 'nia@jobmine.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user-admin`
--
ALTER TABLE `user-admin`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
