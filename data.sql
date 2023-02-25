-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 10:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `kode_obat` varchar(255) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `harga_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `kode_obat`, `nama_obat`, `stok_obat`, `tgl_masuk`, `harga_obat`) VALUES
(2, 'OB2', 'Antangin', 20, '2022-10-08', 20000),
(3, 'OB3', 'Komik', 20, '2022-10-08', 1000),
(4, 'OB4', 'handsaplas', 50, '2022-10-07', 500),
(5, 'OB5', 'Bodrex', 100, '2022-10-07', 8000),
(6, 'OB6', 'tes', 1, '2022-10-10', 15000),
(7, 'OB8', 'Antiomo', 10, '2022-10-05', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `rm` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `rm`, `nama_pasien`, `tgl_daftar`, `nama_pt`, `paket`, `harga`, `tgl_masuk`) VALUES
(1, 29972, 'makkweus nana sukarna', '2021-02-01', 'PRIVATE', 'PCR\r\n', 900000, '2022-11-28'),
(2, 75564, 'rohib', '2022-09-30', 'SMS', 'PAKET SMS', 650000, '2022-11-28'),
(3, 29971, 'ade chandra', '2021-02-01', 'PRIVATE', 'RAPID ANTIGEN', 300000, '2022-11-28'),
(5, 23123, 'aldy kurniawan', '2023-05-30', 'JASINDO MV. EVER CLEAR', 'PANAMA HERNIA HEMOROID', 1295000, '2022-11-28'),
(6, 66953, 'agus solihin', '2022-05-14', 'PAPAMITSOS', 'LAB DEP MARSHAL', 750000, '2022-11-28'),
(7, 66954, 'sandi rusmana', '2022-05-14', 'GURITA LINTAS SAMUDRA', 'DEP', 500000, '2022-11-28'),
(8, 66955, 'imam santoso', '2022-05-14', 'GURITA LINTAS SAMUDRA', 'DEP', 500000, '2022-11-28'),
(9, 66958, 'fandri', '2022-05-14', 'GURITA LINTAS SAMUDRA', 'DEPERLA', 500000, '2022-11-28'),
(10, 66959, 'ayup', '2022-05-14', 'SAMUDERA DAYA MARITIM', 'PCR FIT TO TRAVEL', 400000, '2022-11-28'),
(11, 66961, 'sunari', '2022-05-14', 'KRUINDO', 'PANAMA', 1100000, '2022-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Chori', 'chori@gmail.com', '5e8d671140b4cd12fd31aa82d383b46f'),
(3, 'tess', 'tes@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780'),
(5, 'Yulisa', 'yulis@gmail.com', '4a01a05a350e1c7710c989f1211245a8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
