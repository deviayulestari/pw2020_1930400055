-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Apr 2020 pada 08.46
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pw_193040055`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Devi Ayu Lestari', '193040055', '193040055@mail.unpas.ac.id', 'Teknik Informatika', 'devi.jpg'),
(2, 'Salsabila Nada Adzani', '193040050', '193040050@mail.unpas.ac.id', 'Teknik Informatika', 'salsabila.jpg'),
(3, 'Muhammad Angga Saputra', '193040070', '193040070@mail.unpas.ac.id', 'Teknik Pangan', 'angga.jpg'),
(4, 'Aldi Ageng ', '193040054', '193040054@mail.unpas.ac.id', 'Teknik Industri', 'aldi.jpg'),
(5, 'Aji Nuansa Sengarie', '193040046', '193040046@mail.unpas.ac.id', 'Teknik Mesin', 'aji.jpg'),
(6, 'Sulthan Jihad Abiyyu', '193040048', '193040048@mail.unpas.ac.id', 'Teknik Industri', 'sulthan.jpg'),
(7, 'Suhendani', '193040042', '193040042@mail.unpas.ac.id', 'Teknik Mesin', 'suhendani.jpg'),
(8, 'Agam Febriansyah', '193040069', '193040692@mail.unpas.ac.id', 'Teknik Informatika', 'agam.jpg'),
(9, 'Rifki Gema', '193040062', '193040062@mail.unpas.ac.id', 'Teknik Pangan', 'rifki.jpg'),
(10, 'Bayu Cucan', '193040058', '193040058@mail.unpas.ac.id', 'Teknik Lingkungan', 'bayu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
