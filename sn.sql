-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 07:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `migrasiv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `sn`
--

CREATE TABLE `sn` (
  `NO` int(11) NOT NULL,
  `TIPE` varchar(100) NOT NULL,
  `SN` varchar(100) NOT NULL,
  `ID_MITRA_SN` varchar(15) NOT NULL,
  `ID_STATUS_SN` varchar(4) NOT NULL,
  `ND_SN` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sn`
--
ALTER TABLE `sn`
  ADD PRIMARY KEY (`NO`),
  ADD KEY `fk_id_status_sn` (`ID_STATUS_SN`),
  ADD KEY `fk_id_mitra_sn` (`ID_MITRA_SN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sn`
--
ALTER TABLE `sn`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sn`
--
ALTER TABLE `sn`
  ADD CONSTRAINT `fk_id_mitra_sn` FOREIGN KEY (`ID_MITRA_SN`) REFERENCES `mitra` (`id_mitra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_status_sn` FOREIGN KEY (`ID_STATUS_SN`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
