-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 05:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booklen`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `idBuku` varchar(70) NOT NULL,
  `namaBuku` varchar(100) NOT NULL,
  `genre` varchar(70) NOT NULL,
  `author` varchar(100) NOT NULL,
  `pinjam` date NOT NULL,
  `kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`idBuku`, `namaBuku`, `genre`, `author`, `pinjam`, `kembali`) VALUES
('BK-100', 'Programming In Here', 'Education', 'Tasya', '2022-09-23', '2022-09-23'),
('BK-102', 'Feel Your Design', 'Education', 'Caca', '2022-09-10', '2022-09-10'),
('BK-103', 'Tetap Semangat', 'Fiksi', 'Dian', '2022-09-10', '2022-09-10'),
('BK-105', 'Cerita Batu Putih', 'Legenda', 'Pidi', '2022-09-23', '2022-09-23'),
('BK-109', 'Cinta Dia, Dianya ngga', 'Fiksi', 'Caca', '2022-09-23', '2022-09-23'),
('BK-112', 'Friendzone', 'Novel', 'Tasyatjacep', '2022-09-11', '2022-09-11'),
('BK-190', 'Tutor Jago Ngoding', 'Education', 'Kiki', '2022-09-23', '2022-09-23'),
('BK-202', 'Design UI/UX keren', 'Education', 'Nisa', '2022-09-10', '2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `kelmas`
--

CREATE TABLE `kelmas` (
  `idPinjam` varchar(50) NOT NULL,
  `namaUser` varchar(90) NOT NULL,
  `namaBuku` varchar(70) NOT NULL,
  `status` enum('dipinjam','dikembalikan') NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelmas`
--

INSERT INTO `kelmas` (`idPinjam`, `namaUser`, `namaBuku`, `status`, `tgl_pinjam`, `tgl_kembali`) VALUES
('PJM-020', 'Tasya', 'Design UI/UX', 'dipinjam', '2022-08-02', '2022-08-03'),
('PJM-022', 'Reva', 'Truth or lies', 'dikembalikan', '2022-08-02', '2022-09-16'),
('PJM-123', 'Rizki', 'Jago HTML', 'dikembalikan', '2022-09-24', '2022-09-24'),
('PJM-143', 'Dhinta', 'Tutor Ngetik', 'dipinjam', '2022-09-24', '2022-09-24'),
('PJM-145', 'Zahra', 'Truth or Lies', 'dipinjam', '2022-09-24', '2022-09-24'),
('PJM-199', 'Caca', 'Lovely Boy', 'dipinjam', '2022-09-24', '2022-09-24'),
('PJM-241', 'Dian Sifa', 'Programming In Here', 'dikembalikan', '2022-09-23', '2022-09-23'),
('PJM-248', 'Dalica Hayoto', 'Besfriend Forever', 'dikembalikan', '2022-09-24', '2022-09-24'),
('PJM-303', 'Dalisya hayoto', 'Cinta Dia, Dianya ngga', 'dipinjam', '2022-09-23', '2022-09-23'),
('PJM-909', 'Vidi Ariel ', 'Friendzone 2022', 'dikembalikan', '2022-09-23', '2022-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `namaUser` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `namaUser`, `username`, `password`, `level`, `status`, `created_at`) VALUES
(4, 'Zahra Revana', 'zahra', '762434382de3825b08fe148aa65ea7c87c2ae480', 2, 'Aktif', '2022-09-02 09:42:29'),
(5, 'Tasya Ramadhinta', 'tasya', '7d19636b89246d5a90c4a7ceb0a7142345bbf020', 1, 'Aktif', '2022-09-02 09:43:15'),
(6, 'Dian Sifa', 'dian', '06dbf79c9eb722f43ab495cd5f6dc7fcea841e5d', 2, 'Aktif', '2022-09-03 02:35:24'),
(7, 'Dalisya Hayoto', 'dalisya', 'e879f53ef657d7e34a8222003e3eea3f483c2ece', 2, 'Aktif', '2022-09-03 02:42:52'),
(8, 'Vidi Ariel ', 'vidi', 'e8487cd3973a6215cdbd0335b33b6d4fa3717521', 2, 'Aktif', '2022-09-04 21:21:06'),
(9, 'Thomas Ariel', 'thomas', '5f50a84c1fa3bcff146405017f36aec1a10a9e38', 1, 'Aktif', '2022-09-04 21:23:42'),
(11, 'Khoirunnisa', 'nicaa', 'd28860a550adb588cbe8df5ba8f275290f84831c', 1, 'Aktif', '2022-09-05 10:39:35'),
(33, 'sasasya', 'sasasa', '7bf1ab1b8f7331ab5dc410e01f959d958bfd210e', 2, 'Tidak Aktif', '2022-09-08 09:50:01'),
(35, 'saripudin', 'sarip', '488ddabc2b8f6057d50a7d6766ce5fa268e7a371', 1, 'Tidak Aktif', '2022-09-15 02:44:32'),
(36, 'sasa', 'sasasya', '7bf1ab1b8f7331ab5dc410e01f959d958bfd210e', 2, 'Aktif', '2022-09-23 07:35:05'),
(37, 'dhinta', 'dhintasyacantik', '08a4c3101e4fc64e480d41586f05ca67ae472ec5', 2, 'Aktif', '2022-09-23 07:35:43'),
(38, 'sasya', 'sasyaaa', 'd6c76132bbc86106fef604e7430488e7c1e04bbd', 1, 'Tidak Aktif', '2022-09-23 07:36:13'),
(39, 'kiki', 'rzki', 'b5ea746ed46de78119c6397ec61745f87fe87d69', 1, 'Tidak Aktif', '2022-09-24 02:53:59'),
(40, 'Yanuar Rizki', 'ynrrzki', '95752f86c99f1055feba64e03924cb71f0c08315', 1, 'Aktif', '2022-09-24 02:54:33'),
(43, 'Jikss', 'Jikse', 'd6a9e964f1426cf3be39651bf23c0105bc403a4e', 2, 'Tidak Aktif', '2022-09-26 05:12:18'),
(44, 'caca', 'cacasa', 'a16358be6e2306b153b1f071477e68837266075e', 1, 'Aktif', '2022-09-26 05:12:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indexes for table `kelmas`
--
ALTER TABLE `kelmas`
  ADD PRIMARY KEY (`idPinjam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
