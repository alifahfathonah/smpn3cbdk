-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 03:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `isi` varchar(1024) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tag` varchar(24) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `waktu`, `tag`, `gambar`) VALUES
(1, 'Lab Komputer SMP Negeri 3 Selesai Direnovasi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tellus quam, bibendum sit amet tristique a, efficitur a lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent feugiat lobortis tortor, a tempor diam imperdiet in. Nunc egestas eleifend elit, at aliquet nisl tristique ut. Vestibulum consequat vel urna at hendrerit. Phasellus id enim a nisi pretium tristique. Duis id ante mauris. Nullam lacinia consectetur lorem, sit amet accumsan nibh. Etiam finibus dolor non erat finibus pretium. Phasellus vehicula pulvinar quam id suscipit. Suspendisse semper pretium ex, in mollis purus hendrerit in.', '2019-01-28 06:51:02', 'fasilitas', 'assets/img/upload/komputer.jpg'),
(2, 'SMP Negeri 3 Peduli Terhadap Anak Yatim', 'Sit quot dolores eu, ei autem philosophia qui. Cu eam denique scribentur conclusionemque. Cum ea numquam senserit intellegam. Ea habeo solet atomorum has, ad his quis paulo similique. Eruditi nusquam voluptua mea ex, falli dicam cu his, te eum omittam voluptatibus.', '2019-01-28 06:52:48', 'amal', 'assets/img/upload/berita.jpg'),
(3, '2500 Buku Baru Telah Sampai di Perpustakaan', 'Nec te erant virtute deserunt, sit in percipitur disputando. At primis quaerendum scriptorem vel, et sea vidit singulis constituam. Ad vel quis phaedrum interesset, et exerci facete luptatum pri. Eos in wisi indoctum suavitate, quas novum ei pri. Aeterno omittam mel ea, semper nostrud sapientem mei no.\r\n', '2019-01-28 06:56:21', 'fasilitas', 'assets/img/upload/book-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `teks` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `gambar`, `teks`, `waktu`) VALUES
(1, 'assets/img/galeri/perpustakaan1.jpg', 'Perpustakaan #1', '2019-01-29 07:03:31'),
(2, 'assets/img/galeri/perpustakaan2.jpg', 'Perpustakaan #2', '2019-01-29 08:14:11'),
(3, 'assets/img/galeri/perpustakaan3.jpg', 'Perpustakaan #3', '2019-01-29 08:14:16'),
(4, 'assets/img/galeri/anak1.jpg', 'Acara Amal Peduli Anak #1', '2019-01-29 08:14:19'),
(5, 'assets/img/galeri/anak2.jpg', 'Acara Amal Anak #2', '2019-01-29 08:14:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
