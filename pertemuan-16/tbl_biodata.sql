-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2026 at 06:16 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `KodePen` varchar(30) NOT NULL,
  `NmPengunjung` varchar(30) NOT NULL,
  `AlRmh` varchar(30) NOT NULL,
  `TglKunjungan` varchar(30) NOT NULL,
  `Hobi` varchar(30) NOT NULL,
  `AlS` varchar(30) NOT NULL,
  `Pekerjaan` varchar(30) NOT NULL,
  `Nama_Orang_Tua` varchar(30) NOT NULL,
  `Nama_Pacar` varchar(30) NOT NULL,
  `Mntn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`KodePen`, `NmPengunjung`, `AlRmh`, `TglKunjungan`, `Hobi`, `AlS`, `Pekerjaan`, `Nama_Orang_Tua`, `Nama_Pacar`, `Mntn`) VALUES
('adddddddddd', 'dedi', 'xswddw', '2026-01-06', 'hobi', 'njjjjjj', 'scsjgdusj', 'jgsdug\\', 'mbjbj', 'jhjhjhjhj'),
('dddddd', 'dhdhdhdh', 'dddddddd', '2026-01-06', 'ddddddddddd', 'dddddddddd', 'ddddddddddd', 'ddddddddddd', 'dddddddddd', 'ddddddddddd'),
('jbbbbbbbbb', 'sofjdwojfwjfj', 'jzdjaodh', '2026-01-01', 'hobi', 'tidak', 'scsjgdusj', 'jgsdugdwu', 'diwdiwuu2wdsojdo', 'hghghghg'),
('wwwww', 'wwwwwwwwwwww', 'wwwwwww', 'wwwwww', 'wwwwwwwwww', 'wwwwwwwwww', 'wwwwwwwwww', 'jjjjjjjjj', 'diwdiwuu2wdsojdo', 'hghghghg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`KodePen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
