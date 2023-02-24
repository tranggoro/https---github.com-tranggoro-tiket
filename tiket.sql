-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2020 at 02:51 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id_bukti` int(11) NOT NULL,
  `kodeTiket` varchar(30) NOT NULL,
  `norekening` varchar(50) NOT NULL,
  `atasnama` varchar(50) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id_bukti`, `kodeTiket`, `norekening`, `atasnama`, `jumlah`) VALUES
(1, '890670', '3000', 'lsalal', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `kode_kapal` varchar(20) NOT NULL,
  `keberangkatan` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `waktu_berangkat` varchar(7) NOT NULL,
  `harga` double NOT NULL,
  `kelas_kapal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kode_kapal`, `keberangkatan`, `tujuan`, `tanggal_berangkat`, `waktu_berangkat`, `harga`, `kelas_kapal`) VALUES
(1, 'KD001', 'surabaya', 'madura', '2020-06-17', '13:15', 7000, 'ekonomi'),
(2, 'KD001', 'Surabaya', 'Madura', '2020-06-25', '13:16', 7000, 'ekonomi'),
(3, 'KD002', 'Surabaya', 'Madura', '2020-06-30', '15:15', 8000, 'Premium');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `idTiket` int(11) NOT NULL,
  `kodeTiket` varchar(255) NOT NULL,
  `kodeKapal` varchar(255) NOT NULL,
  `namaPembeli` varchar(255) NOT NULL,
  `tglBerangkat` date NOT NULL,
  `waktuBerangkat` time NOT NULL,
  `waktuSampai` time NOT NULL,
  `harga` int(100) NOT NULL,
  `noKursi` int(100) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `berangkat` varchar(40) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`idTiket`, `kodeTiket`, `kodeKapal`, `namaPembeli`, `tglBerangkat`, `waktuBerangkat`, `waktuSampai`, `harga`, `noKursi`, `kelas`, `berangkat`, `tujuan`, `total`) VALUES
(9, '549246', 'KD002`', 'bambang', '2023-02-12', '15:12:00', '14:21:00', 200000, 49, 'Bisnis', 'Surabaya', 'sumatra', 200000),
(10, '890670', 'KD001`', 'rifki', '2021-12-12', '02:12:00', '12:21:00', 100000, 17, 'Eksekutif', 'Surabaya', 'jombang', 100000),
(15, '574674', 'KD001`', 'mar', '2020-06-25', '17:56:00', '13:01:00', 3000, 82, 'Eksekutif', 'Surabaya', 'semarang', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `kodeTiket` int(11) NOT NULL,
  `total` int(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `kodeTiket`, `total`, `status`) VALUES
(3, 549246, 200000, 'belum lunas'),
(4, 890670, 100000, 'lunas'),
(5, 574674, 3000, 'belum lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idTiket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `idTiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
