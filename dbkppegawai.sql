-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 12:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkppegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `ID` int(50) NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `TEMPAT_LAHIR` varchar(255) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `TANGGAL_LAHIR` varchar(20) NOT NULL,
  `AGAMA` varchar(10) NOT NULL,
  `GOLONGAN` varchar(10) NOT NULL,
  `JABATAN` varchar(30) NOT NULL,
  `NO_TELEPON` varchar(12) NOT NULL,
  `SPEGAWAI` varchar(10) NOT NULL,
  `UPLOAD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`ID`, `NAMA`, `NIP`, `TEMPAT_LAHIR`, `ALAMAT`, `TANGGAL_LAHIR`, `AGAMA`, `GOLONGAN`, `JABATAN`, `NO_TELEPON`, `SPEGAWAI`, `UPLOAD`) VALUES
(1, 'SISWANTO, ST, M.Si', '198005202000031001', 'WIROSARI', 'KOMPLEK BMKG JL. METEOROLOGI BANDAR UDARA MALIKUSSALEH, MUARA BATU - ACEH UTARA', '1980-05-20', 'Islam', 'III/d', 'Kepala Sta. Met. Kelas III Mal', '082369080515', 'Aktif', '35140122112754.jpeg'),
(2, 'BAHANUDDIN', '196404151987111001', 'Aceh Utara (Panigah)', 'Komplek Meteorologi BMKG Lhokseumawe, Jl. Bandara Malikussaleh, Desa Panigah, Kec. Muara Batu, Aceh Utara', '', 'Islam', 'III/d', 'PMG Penyelia', '085277562802', 'Aktif', '20140122113140.jpeg'),
(3, 'RASYIDIN', '196412311987031010', 'Aceh Utara (Panigah)', 'Desa Pinto Makmur, Kec. MuaraBatu , Aceh Utara', '', 'Islam', 'III/d', 'PMG Penyelia', '081360371122', 'Aktif', '10140122113229.jpeg'),
(4, 'SAIFUNDI', '197507021999031001', 'Aceh Timur (Bagok)', 'Komplek  Meteorologi BMKG Lhokseumawe', '', 'Islam', 'III/d', 'PMG Penyelia', '085275413585', 'Aktif', '56140122113647.jpeg'),
(5, 'KHARENDRA MUIZ, S.Si', '198805122009111001', 'Tangerang', 'Komplek Meteorologi BMKG Lhokseumawe', '', 'Islam', 'III/c', 'PMG Muda', '085281628190', 'Aktif', '79140122114124.jpeg'),
(6, 'MUHAMMAD KAMIL FIRDAUS, A.Md', '198607192008121003', 'Medan', 'Komplek Meteorologi Desa Panigah Kec Mura Batu Kab Aceh Utara N. A. D', '', 'Islam', 'III/c', 'PMG Penyelia', '085275413585', 'Aktif', '71140122113943.jpeg'),
(8, 'HANGRA TRAVERMA ULFI, S.Tr', '199306242013121001', 'Solok', 'Komplek Meteorologi BMKG Lhokseumawe, Jl. Bandara           Malikussaleh, Desa Panigah, Kec. Muara Batu, Aceh Utara', '', 'Islam', 'III/b', 'PMG Pertama', '085216540396', 'Aktif', '1140122114047.jpeg'),
(9, 'FEBRYANTO SIMANJUNTAK, S.Tr', '199502252013121001', 'PEKANBARU', 'Melur ujung gg asoka no.42', '', 'Kristen', 'III/b', 'PMG Pertama', '085355538970', 'Aktif', '15140122114224.jpeg'),
(10, 'HAIFA RAHMI ILAHI, S.Tr', '199708182020012001', 'PADANG', '-', '18-08-1997', 'Islam', 'III/a', 'SPT. PMG Pertama', '0', 'Aktif', ''),
(11, 'WIWIT NITA SARI, S.Tr, S.Tr', '199404012013122001', 'Pesawaran', 'Komplek Meteorologi BMKG Lhokseumawe, Jl. BandaraMalikussaleh, DesaPanigah, Kec. MuaraBatu , Aceh Utara', '', 'Islam', 'III/a', 'PMG Pertama', '082113318316', 'Aktif', '42140122114422.jpeg'),
(12, 'MUHAMMAD IMAM MUA`THO, S.Tr', '199506202014111001', 'TEGAL', 'KRESNA RT. 019 RW. 007', '', 'Islam', 'III/a', 'PMG Pertama', '085726943228', 'Aktif', '5140122114614.jpeg'),
(13, 'ARIJUDDIN, S.Tr', '199509182014111001', 'BANDA ACEH', 'BANDA ACEH-MEDAN KM .23', '', 'Islam', 'III/a', 'PMG Pertama', '085286683143', 'Aktif', '53140122114709.jpeg'),
(14, 'RICKY NADIANSYAH, S.Tr.Met', '199605012016011001', 'Palembang', 'ALI GATMIR LRG KEMANG NO.80 RT 03/RW 02', '', 'Islam', 'III/a', 'PMG Pelaksana Lanjutan', '081271451222', 'Aktif', '86140122121243.jpeg'),
(15, 'HASAN BASRI', '198606052012121003', 'Aceh Utara', '-', '', 'Islam', 'II/b', 'Pengadministrasi Umum', '085272693633', 'Aktif', '57140122114455.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(20) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', '$2y$10$Zegwjuul4UEMqxRYWsea2ehonRFX3GCBbu./9gJegtgsxb8jUN5la'),
(2, 'Mahasiswa', '$2y$10$FA1atJllgunAJNBHU8OraOVW049hhv9iImcvysbNE5FKn01TE/2Hy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
