-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mei 2017 pada 11.17
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
-- Struktur dari tabel `confirmpayment`
--

CREATE TABLE `confirmpayment` (
  `orderID` int(11) DEFAULT NULL,
  `bank` varchar(40) DEFAULT NULL,
  `transferMethod` varchar(40) DEFAULT NULL,
  `dateTransfer` date DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `struk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `confirmpayment`
--

INSERT INTO `confirmpayment` (`orderID`, `bank`, `transferMethod`, `dateTransfer`, `amount`, `struk`) VALUES
(8, 'bri', 'atm', '2919-02-03', 12312, 'img/14337776449331.jpg'),
(9, 'bri', 'atm', '1996-01-23', 23, 'img/6.png'),
(11, 'bri', 'atm', '2017-05-17', 20000, 'img/S__12894213.jpg'),
(14, 'bri', 'atm', '2017-04-23', 2000000, 'img/3059911.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `salt` varchar(40) NOT NULL,
  `hash` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`customerID`, `gender`, `email`, `name`, `dob`, `salt`, `hash`) VALUES
(1, 'female', 'nia@nia.com', 'Nia Elvina', '2010-10-17', '1234', '5f00113f472b3fd6d3a9039ffc30a92d'),
(2, 'male', 'joko@joko.com', 'Joko', '2012-04-17', '1122', 'a721973cba7d8c5febe7360d55ecb15f'),
(3, 'male', 'kenny@kenny.com', 'Kenny Babi', '2012-04-17', '2345', '0f0560678f44d19d43accac255b2999f'),
(4, 'male', 'nia@jobmine.id', 'Nathania Elvina', '1996-04-22', '9765', 'e68007d66ae40db9813ea0dd2da11e40'),
(5, 'male', 'yuda@yuda.com', 'yth', '2017-05-19', '6503', '96505128dab88892b7f24447a3968e8b'),
(6, 'male', 'yudateguh@yuda.com', 'yudaa', '1996-05-17', '8220', '4041f23723f7f8de4ee5618a3dacbbd0'),
(7, 'male', 'keja@keja.com', 'keja', '2017-05-03', '7147', '8ef44973e434bb65629205a60b5bc927'),
(8, 'female', 'cantik@cantik.com', 'nia', '2017-05-01', '1977', 'd51093a1fe798ea8d92221b3bf18d47d'),
(9, 'male', 'niania@nia.com', 'nia', '2017-05-01', '6819', '6553888675897a7ab4278a64df5b9f10'),
(10, 'male', 'joan@gmail.com', 'joan', '2017-05-03', '8759', '47222a87a27d80ce36ba2121e028a90a'),
(11, 'male', 'ico@ico.com', 'ico', '1996-02-21', '7266', 'd18a4007419987b368e3c6e0992ad0a7'),
(12, 'male', 'janita@janita.com', 'janita', '2017-05-15', '2303', '334ac7806dc3811f8593e3ece5c3e4dc'),
(13, 'male', 'kenny_wantara@yahoo.com', 'kenny', '1996-04-23', '4255', '78fb6271c0d48dd70e71abe9160365fe'),
(14, 'male', 'kenny.wantara@student.umn.ac.id', 'kenny', '1996-04-23', '741', '7337fe7f2d31599196f431462a48fff0'),
(15, 'female', 'evan@evan.com', 'evan', '1996-10-20', '5899', '60f1568d1bff76baf71e3fa0132d8a59'),
(16, 'male', 'vendy@a.com', 'vendy', '1996-10-10', '7332', '991944ffa355faf34100e53ffe7697d1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order-details`
--

CREATE TABLE `order-details` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order-details`
--

INSERT INTO `order-details` (`orderID`, `productID`, `quantity`, `price`) VALUES
(2, 2, 1, 400000),
(2, 3, 1, 500000),
(2, 4, 1, 250000),
(3, 5, 1, 300000),
(4, 5, 1, 300000),
(4, 2, 1, 400000),
(5, 5, 1, 300000),
(5, 2, 1, 400000),
(5, 3, 1, 500000),
(5, 1, 1, 500000),
(6, 1, 1, 500000),
(6, 2, 1, 400000),
(7, 2, 1, 400000),
(7, 4, 1, 250000),
(8, 5, 1, 300000),
(8, 3, 1, 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderdetails`
--

INSERT INTO `orderdetails` (`orderID`, `productID`, `quantity`, `price`) VALUES
(9, 2, 1, 400000),
(11, 3, 1, 500000),
(12, 2, 1, 400000),
(13, 2, 1, 400000),
(14, 2, 1, 400000),
(15, 2, 1, 400000),
(16, 2, 2, 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `deliveryAddress` varchar(100) NOT NULL,
  `status` varchar(40) DEFAULT NULL,
  `totalPrice` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `deliveryAddress`, `status`, `totalPrice`) VALUES
(1, 9, 'alamatttttt', 'WaitingConfirmation', 1150000),
(2, 9, 'asdasdasd', 'WaitingConfirmation', 1150000),
(3, 11, 'citra', 'WaitingConfirmation', 1450000),
(4, 11, 'sdfsdf', 'WaitingConfirmation', 700000),
(5, 11, 'sdfs', 'WaitingConfirmation', 1700000),
(6, 1, 'asdasd', 'WaitingConfirmation', 900000),
(7, 1, 'gdfgdfg', 'WaitingConfirmation', 650000),
(8, 12, 'ewrwerwe', 'WaitingConfirmation', 800000),
(9, 1, 'asd', 'WaitingConfirmation', 400000),
(10, 1, 'fdgfdgdf', 'WaitingConfirmation', 500000),
(11, 1, 'fdgfdgdf', 'WaitingConfirmation', 500000),
(12, 14, 'UMN', 'WaitingConfirmation', 700000),
(13, 14, 'umn', 'WaitingConfirmation', 700000),
(14, 14, 'umn', 'Delivery', 700000),
(15, 15, 'ewewfesedf', 'WaitingConfirmation', 400000),
(16, 16, 'sdfsdf', 'WaitingConfirmation', 800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
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
(1, 'Blue Rose Heart ', 'Hand Bouquet', 500000, 'Blue Bouquet with a Big Heart', 'img/bunga4.png'),
(2, 'Purple Tiger Lily', 'Hand Bouquet', 400000, 'Purple Bouquet with Lily', 'img/bunga5.png'),
(3, 'White Blue Rose', 'Hand Bouquet', 500000, 'Mix of Blue and White Rose', 'img/bunga3.png'),
(4, 'PinkWhite Rose Bouquet', 'Hand Bouquet', 250000, 'Mawar Pink Putih', 'img/bunga7.png'),
(5, 'Red Flower Box', 'Flower Box', 300000, '', 'img/bungamerah.png'),
(6, 'Couple Teddy Bouquet', 'Hand Bouquet', 200000, 'Bunga Teddy bear', 'img/bunga8.png'),
(7, 'White Teddy Bear', 'Graduation Boquet', 2000000, 'White Full Graduation Boquet', 'img/bunga17.png'),
(8, 'Yellow Lily', 'Graduation Boquet', 150000, 'Graduation Boquet for loved ones', 'img/gr4.png'),
(9, 'Valentine Box', 'Flower Box', 250000, 'Heart shape flower in a box', 'da608-fb1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `customerID` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `customerID`, `created`) VALUES
(2, '4c4c98d45456f28e3f32fb649107fb', 13, '2017-05-18'),
(3, '538c3c31f7aee0b80deb6e15e8418f', 13, '2017-05-18'),
(4, '40e98260822d2497a02059effc901b', 13, '2017-05-18'),
(5, '17ba0791499db908433b80f37c5fbc', 13, '2017-05-18'),
(6, '13c80015875a668e8fc059517ffd12', 13, '2017-05-18'),
(7, 'ee65654df0897cec27b01ba4b97aa1', 13, '2017-05-18'),
(8, '1731b7db7fc702e4d82afa665a25d3', 14, '2017-05-18'),
(9, '8c93ce1d07259934298ea47da50451', 14, '2017-05-18'),
(10, '5c94ec528a6508a63c9bf84f30734c', 4, '2017-05-18');

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
-- Indexes for table `confirmpayment`
--
ALTER TABLE `confirmpayment`
  ADD KEY `FK_orderPayment` (`orderID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `order-details`
--
ALTER TABLE `order-details`
  ADD KEY `FK_productOrderDetails` (`productID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_productOrderDetails3` (`productID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_customerOrder` (`customerID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `confirmpayment`
--
ALTER TABLE `confirmpayment`
  ADD CONSTRAINT `FK_orderPayment` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`);

--
-- Ketidakleluasaan untuk tabel `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_orderOrderDetails3` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `FK_productOrderDetails3` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_customerOrder` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
