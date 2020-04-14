-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Apr 2020 pada 04.45
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubes_193040055`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE IF NOT EXISTS `pakaian` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `ukuran` varchar(50) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL,
  `stok_tersedia` int(10) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `foto`, `nama_produk`, `brand`, `ukuran`, `warna`, `stok_tersedia`, `harga`) VALUES
(1, 'hm_blazer.jpg', 'Skinny Fit Blazer', 'H&M', '34R, 36R, 38R, 40R, 42R, 44R, 46R, 48R, 50R', 'Dark Blue, Blue Melange, Black, Light Gray Melange', 347, 1106000),
(2, 'hm_coat.jpg', 'Wool-Blend Coat', 'H&M', 'XS, S, M, L, XL', 'Beige', 564, 1900000),
(3, 'hm_jacket.jpg', 'Biker Jacket', 'H&M', 'XS, S, M, L, XL', 'Black', 289, 1100000),
(4, 'hm_sweater.jpg', 'Jacquard-knit Sweater', 'H&M', 'XS, S, M', 'Dark Taupe', 250, 300000),
(5, 'levis_cropped.jpg', 'Cropped Cool Trucker Jacket', 'Levis', 'XS, S, M, L', 'Cool Sephia Rose', 624, 1199900),
(6, 'levis_jacket.jpg', 'Vintage Fit Trucker Jacket', 'Levis', 'S, M, L, XL', 'Gang Trucker', 476, 1799900),
(7, 'levis_jeans.jpg', 'Slim Taper Fit Jeans', 'Levis', '27, 28, 29, 30, 31, 32, 34, 36', 'Saint Lime ADV', 543, 849900),
(8, 'lois_kaos.jpg', 'Kaos Raglan Jersey', 'Lois', 'S, M, L, XL', 'Dominant White', 475, 240500),
(9, 'lois_kemeja.jpg', 'Kemeja Hoodie', 'Lois', 'S, M, L, XL', 'Black', 632, 410500),
(10, 'rubylicius_dress.jpg', 'Faelin Maxi Dress', 'Rubylicious', 'All size fit to L', 'Milo, Maroon, Blue', 573, 115000),
(11, 'rubylicius_tutu.jpg', 'Diamond Tutu Maxi Skirt', 'Rubylicious', 'All size fit to L', 'Black', 358, 145000),
(12, 'rubylicius_skirt.jpg', 'Sahapa Skirt', 'Rubylicious', 'All size fit to L', 'Dark Grey, Light Grey, Cream', 643, 109000),
(13, 'uniqlo_pants.jpg', 'Men U Cotton Linen Wide-Fit Tapered Pants', 'Uniqlo', 'S, M, L, XL', 'Black, Navy, Brown', 609, 472500),
(14, 'uniqlo_skirt.jpg', 'Women Twist Pleated Long Skirt', 'Uniqlo', 'XS, S, M, L, XXL', 'Off-White, Black, Natural, Blue', 923, 630500),
(15, 'zara_atasan.jpg', 'Atasan Cropped Organza', 'Zara', 'S, M, L', 'Grey', 876, 479900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
