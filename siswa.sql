-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 01:39 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `Nama` varchar(100) NOT NULL,
  `Jenis` varchar(50) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `Nilai` decimal(50,0) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`Nama`, `Jenis`, `Asal`, `Nilai`, `Jurusan`, `Alamat`) VALUES
('Bagus Ulya', 'Laki-laki', 'SMP 5 Kudus', '85', 'Teknik Informatika', 'Kudus'),
('Coba', 'Laki-laki', 'SMP 5 Jepara', '89', 'Sistem Informatika', 'Jepara'),
('Fuad', 'Laki-laki', 'MTS', '87', 'Sistem Informatika', 'Kudus'),
('Hilda', 'Perempuan', 'SMP', '87', 'Teknik Informatika', 'Kudus'),
('Lana', 'Laki-laki', 'SMP', '43', 'Teknik Informatika', 'Kudus'),
('Leonanta', 'Laki-laki', 'SMPN 2 Nalumsari', '87', 'Sistem Informatika', 'Jepara'),
('Nana', 'Perempuan', 'SMPN 1 Gebog', '87', 'Sistem Informatika', 'Kudus'),
('Nopel', 'Laki-laki', 'MTS NU TBS', '54', 'Sistem Informatika', 'Demaan'),
('Nova', 'Laki-laki', 'SMP', '67', 'Sistem Informatika', 'Kudus'),
('Yapi', 'Laki-laki', 'SMP', '78', 'Teknik Informatika', 'Jepara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`) VALUES
('admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
