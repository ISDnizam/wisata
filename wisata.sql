-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2018 at 03:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `module_category`
--

CREATE TABLE `module_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `icon` varchar(110) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_category`
--

INSERT INTO `module_category` (`id`, `category`, `icon`) VALUES
(1, 'Wisata Kuliner', 'fa fa-utensils'),
(2, 'Wisata Alam', 'fa fa-recycle'),
(3, 'Wisata Sejarah', 'fa fa-book-open'),
(4, 'Wisata Buatan', 'fa fa-swimming-pool');

-- --------------------------------------------------------

--
-- Table structure for table `module_comments`
--

CREATE TABLE `module_comments` (
  `id` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_comments`
--

INSERT INTO `module_comments` (`id`, `id_wisata`, `name`, `email`, `comments`, `date`) VALUES
(1, 3, 'dfdsf', 'ib@gmail.com', 'asddas', '2017-07-06 22:01:23'),
(2, 1, 'dfdfs', 'event@skalasound.com', 'fdsf', '2018-10-04 18:34:30'),
(3, 2, 'nizam', 'event@skalasound.com', 'as', '2018-10-12 08:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `module_images`
--

CREATE TABLE `module_images` (
  `id` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_images`
--

INSERT INTO `module_images` (`id`, `id_wisata`, `foto`) VALUES
(9, 11, 'Screen_Shot_2018-10-04_at_11_19_27.png'),
(10, 12, 'Screen_Shot_2018-10-06_at_09_12_41.png');

-- --------------------------------------------------------

--
-- Table structure for table `module_ratings`
--

CREATE TABLE `module_ratings` (
  `id` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_ratings`
--

INSERT INTO `module_ratings` (`id`, `id_wisata`, `id_users`, `review`, `rating`, `date`) VALUES
(1, 2, 2, 'dssdds', 4, '2018-10-11 09:11:41'),
(2, 2, 2, 'dsdsds', 1, '2018-10-11 09:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `module_users`
--

CREATE TABLE `module_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(130) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `access` enum('admin','user') NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_users`
--

INSERT INTO `module_users` (`id`, `username`, `password`, `name`, `address`, `access`, `email`, `foto`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'klatenn', 'admin', 'admin@gmail.com', 'Screen_Shot_2018-09-28_at_04_33_39.png', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'klaten', 'user', 'user@gmail.com', 'Screen_Shot_2018-09-28_at_04_33_39.png', 1),
(3, 'nizammm', '9777e83c601e5ca28c7aed83d66146e7', 'nizammm', 'nizammm', 'user', 'nizammm@gmail.com', 'Screen_Shot_2018-09-28_at_04_33_39.png', 1),
(4, 'executive@mailinator.com', '417230efda6c3062b0b149e070a7b02b', 'nizaammmmx', 'addsdsds', 'user', 'executive@mailinator.com', 'Screen_Shot_2018-10-01_at_20_30_151.png', 1),
(5, 'sssss@mailinator.com', '9acc46ee1512e3c4179ca0b3c855cc6b', 'sssss', 'sssss@mailinator.com', 'user', 'sssss@mailinator.com', 'Screen_Shot_2018-09-28_at_04_33_39.png', 1),
(6, 'execdfsfdutive@mailinator.com', 'de7682ceb51c0f58ee34f9a7ced77ad6', 'dfsfdsfds', 'dsdsdsds', 'user', 'execdfsfdutive@mailinator.com', 'Screen_Shot_2018-09-28_at_04_33_39.png', 0),
(7, 'execdfsfdutive@mailinator.com', 'de7682ceb51c0f58ee34f9a7ced77ad6', 'dfsfdsfds', 'dsdsdsds', 'user', 'execdfsfdutive@mailinator.com', 'Screen_Shot_2018-09-28_at_04_33_39.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_wisata`
--

CREATE TABLE `module_wisata` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zip_code` int(6) NOT NULL,
  `description` text NOT NULL,
  `lat` varchar(60) NOT NULL,
  `lng` varchar(60) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `counter` int(11) NOT NULL DEFAULT '0',
  `status` enum('publish','draft','decline') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_wisata`
--

INSERT INTO `module_wisata` (`id`, `id_users`, `id_category`, `name`, `address`, `zip_code`, `description`, `lat`, `lng`, `foto`, `date`, `counter`, `status`) VALUES
(1, 1, 1, 'Sop Ayam Pak Min', 'Jl. Klaten - Jatinom, Surobayan, Gedaren, Jatinom, Kabupaten Klaten, Jawa Tengah', 57481, 'desckripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '-7.6604965', '110.348027', 'sop-ayam-pak-min-klaten.jpg', '2017-03-16 00:00:00', 16, 'publish'),
(2, 1, 2, 'Pemandian Umbul Manten', 'Jalan Janti Boto, Boto, Wunut, Tulung, Kabupaten Klaten, Jawa Tengah', 0, 'dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi ', '-7.5916181', '110.6484218', 'surga-tersembunyi-klaten-unbul-manten-klaten_-by-danarsibolang.jpg', '2017-03-16 00:00:00', 37, 'publish'),
(3, 1, 3, 'Candi Prambanan', 'Kranggan, Bokoharjo, Kec. Prambanan, Kabupaten Klaten', 433434, 'dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi ', '-7.7520206', '110.4892787', 'Prambanan_Java245.jpg', '2017-03-16 00:00:00', 46, 'publish'),
(12, 2, 1, 'dgsgdsgds', 'dsgdgs', 434334, 'sgdsdg', '-7.743994194809896', '110.6282190978527', 'Screen_Shot_2018-10-04_at_00_26_34.png', '2018-10-06 21:29:02', 0, 'decline'),
(11, 4, 1, 'zzzdsdfdfsxxx', 'dsfdsdfsdfs', 34344, 'sgdgsdgs', '434343', '343434', 'Screen_Shot_2018-10-04_at_00_09_30.png', '2018-10-04 20:42:44', 0, 'decline'),
(13, 1, 2, 'Umbul Ponggok', 'Jl. Delanggu- Polanharjo No.Ds, Jeblogan, Ponggok, Polanharjo, Kabupaten Klaten, Jawa Tengah ', 57474, 'dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi ', '-7.6138103', '110.633676', 'Umbul-Ponggok-Lanang.jpg', '2018-10-13 06:52:51', 0, 'publish'),
(14, 1, 1, 'Sop Ayam Pak Slamet', 'Jalan Klaten - Jatinom, Gedaren, Jatinom, Dusun 1, Manjungan, Ngawen, Kabupaten Klaten, Jawa Tengah', 57481, 'desckripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi', '-7.2572138', '110.3861437', 'Warung-Sop-Ayam-Pak-Slamet-Klaten-Dari-Luar.jpg', '2018-10-13 07:04:16', 0, 'publish'),
(15, 1, 4, 'Rowo Jombor Klaten', 'Jl. Rw. Jombor, Waduk Jombor, Krakitan, Bayat, Kabupaten Klaten, Jawa Tengah', 57462, 'dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi dekripsi ', '-7.7520067', '110.6047295', 'waduk-rowo-jombor-jawa-tengah.jpg', '2018-10-13 07:09:37', 1, 'publish'),
(16, 1, 3, 'Candi Plaosan Klaten', 'Jl. Rw. Jombor, Waduk Jombor, Krakitan, Bayat, Kabupaten Klaten, Jawa Tengah', 57462, 'deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi deskripsi ', '-7.7405772', '110.5024144', 'Sejarah-Mitos-Tiket-Masuk-Candi-Plaosan-Klaten.jpg', '2018-10-13 07:29:38', 1, 'publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module_category`
--
ALTER TABLE `module_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_comments`
--
ALTER TABLE `module_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_images`
--
ALTER TABLE `module_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_ratings`
--
ALTER TABLE `module_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_users`
--
ALTER TABLE `module_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_wisata`
--
ALTER TABLE `module_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module_category`
--
ALTER TABLE `module_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `module_comments`
--
ALTER TABLE `module_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `module_images`
--
ALTER TABLE `module_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `module_ratings`
--
ALTER TABLE `module_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `module_users`
--
ALTER TABLE `module_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `module_wisata`
--
ALTER TABLE `module_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
