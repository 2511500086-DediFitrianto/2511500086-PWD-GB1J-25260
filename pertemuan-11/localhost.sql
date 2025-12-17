-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2025 at 11:43 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025.`
--
CREATE DATABASE IF NOT EXISTS `db_pwd2025.` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_pwd2025.`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(1, 'Dedi Fitrianto', '2511500086@mahasiswa.atmaluhur.ac.id', 'saya adalah seorang desainer', '2025-12-18 05:58:05'),
(2, 'afdal', 'afdalslebew@gmail.com', 'ayooo mau kemana, aak kejar nih, ROWRRRR', '2025-12-18 05:58:05'),
(3, 'Sayyid', 'Sayyidgile@gmail.com', 'Lah sude men ne, Nangis bentar agik', '2025-12-18 05:58:05'),
(4, 'ijangile', 'Ijanbocilepep@gmail.com', 'ijan jago ngoding', '2025-12-18 05:58:05'),
(5, 'sachiogile', 'saciongepngep@gmail.com', 'bdjqadqdqwbdqwu', '2025-12-18 05:58:05'),
(6, 'Dedi', 'dedifitrianto@gmail.com', 'b jbjjjjjjjjjjjjjjjjj', '2025-12-18 05:58:05'),
(7, 'Dedi', 'dedifitrianto@gmail.com', 'gjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2025-12-18 05:58:05'),
(8, 'jj', 'dedifitrianto@gmail.com', 'naxjjsjsj', '2025-12-18 06:09:02'),
(9, 'te', 'asa@gmail.com', 'nhhv', '2025-12-18 06:12:49'),
(10, 'te', 'asa@gmail.com', 'jbjbjbi', '2025-12-18 06:16:59'),
(11, 'j1', 'dew@gmail.com', 'csj', '2025-12-18 06:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
