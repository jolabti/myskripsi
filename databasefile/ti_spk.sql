-- phpMyAdmin SQL Dump
-- version 4.3.8deb0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2016 at 10:28 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.6.22-1+donate.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ti_spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon_asisten`
--

CREATE TABLE IF NOT EXISTS `tb_calon_asisten` (
  `npm` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_calon_asisten`
--

INSERT INTO `tb_calon_asisten` (`npm`, `nama`, `kelas`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `status`) VALUES
('10010092', 'Muhamad Yogi', '4ia14', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 108', 1),
('12332312', 'Arif Rahman', '4ia10', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 104', 1),
('12923918', 'Ruhbi Anugrah Putraguna', '4ia07', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 101', 1),
('12988734', 'Abdul Wahid', '4ia16', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 110', 1),
('14313245', 'Febrina Rahma', '4ia13', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 107', 1),
('24434456', 'Noviandri', '4ia18', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 112', 0),
('28327384', 'Ade Mulyanto', '4ia08', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 102', 1),
('32435465', 'M Teguh Erianto', '4ia19', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 113', 0),
('34540001', 'Erwin Sulistiono', '4ia17', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 111', 0),
('34587621', 'Mochamad Ichratyarsyah', '4ia12', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 106', 0),
('51412261', 'MAHASISWA 1', '4IA02', 'Pria', '0000-00-00', 'DEPOK', 0),
('51412262', 'MAHASISWA 2', '4IA01', 'Pria', '0000-00-00', 'DEPOK', 0),
('51412263', 'MAHASISWA 3', '3IA01', 'Pria', '0000-00-00', 'DEPOK', 0),
('51412264', 'MAHASISWA 4', '4IA01', 'Pria', '0000-00-00', 'BOGOR', 0),
('51412265', 'MAHASISWA 5', '4KA01', 'Pria', '0000-00-00', 'BOGOR', 0),
('51412266', 'MAHASISWA 6', '3IA01', 'Wanita', '0000-00-00', 'BOJONG', 0),
('51412267', 'MAHASISWA 7', '3KA01', 'Pria', '0000-00-00', 'DEPOK', 0),
('51412268', 'MAHASISWA 8', 'NON K', 'Pria', '0000-00-00', 'JAKARTA', 0),
('51412269', 'MAHASISWA 9', '3KA01', 'Pria', '0000-00-00', 'JAKARTA', 0),
('51412270', 'MAHASISWA 10', '3IA02', 'Pria', '0000-00-00', 'DEPOK', 0),
('56564578', 'Aviv Arifian Darmanto', '4ia11', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 105', 0),
('56756711', 'Budi Wertijo', '4ia06', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 100', 0),
('88877764', 'Al Araf', '4ia15', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 109', 0),
('88893872', 'Rachmat Adi Prakoso', '4ia09', 'Pria', '0000-00-00', 'Jl.Singosari Dalam No 103', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tb_calon_asisten_normalisasi`
--
CREATE TABLE IF NOT EXISTS `tb_calon_asisten_normalisasi` (
`npm` varchar(50)
,`nama` varchar(50)
,`total_nilai` float
,`nilai_c6` float
,`nilai_c5` float
,`nilai_c4` float
,`nilai_c3` float
,`nilai_c2` float
,`nilai_c1` float
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_himpunan`
--

CREATE TABLE IF NOT EXISTS `tb_himpunan` (
  `id_himpunan` varchar(150) NOT NULL,
  `batas_atas` int(11) NOT NULL,
  `batas_bawah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_himpunan`
--

INSERT INTO `tb_himpunan` (`id_himpunan`, `batas_atas`, `batas_bawah`, `nilai`) VALUES
('1', 1, 20, 0.2),
('2', 21, 40, 0.4),
('3', 41, 60, 0.6),
('4', 61, 80, 0.8),
('5', 81, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria` (
  `id_kriteria` varchar(150) NOT NULL,
  `kriteria` varchar(10) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`, `bobot`) VALUES
('1', 'c1', 15),
('2', 'c2', 25),
('3', 'c3', 30),
('4', 'c4', 35),
('5', 'c5', 10),
('6', 'c6', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_calon_asisten`
--

CREATE TABLE IF NOT EXISTS `tb_nilai_calon_asisten` (
  `id_nilai` varchar(150) NOT NULL,
  `c1` float NOT NULL,
  `c2` float NOT NULL,
  `c3` float NOT NULL,
  `c4` float NOT NULL,
  `c5` float NOT NULL,
  `c6` float NOT NULL,
  `nilai_asli_c1` float NOT NULL,
  `nilai_asli_c2` float NOT NULL,
  `nilai_asli_c3` float NOT NULL,
  `nilai_asli_c4` float NOT NULL,
  `nilai_asli_c5` float NOT NULL,
  `nilai_asli_c6` varchar(20) NOT NULL,
  `npm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai_calon_asisten`
--

INSERT INTO `tb_nilai_calon_asisten` (`id_nilai`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `nilai_asli_c1`, `nilai_asli_c2`, `nilai_asli_c3`, `nilai_asli_c4`, `nilai_asli_c5`, `nilai_asli_c6`, `npm`) VALUES
('1057051580', 0.8, 1, 1, 0.8, 1, 0.2, 77, 84, 88, 74, 3.67, '0', '51412261'),
('1216651337', 1, 1, 1, 1, 0.2, 0.2, 96, 82, 86, 88, 3.05, '0', '51412266'),
('1318398901', 1, 1, 1, 1, 0.4, 0.2, 95, 91, 92, 89, 3.21, '0', '51412267'),
('165781529', 0.8, 0.8, 0.8, 0.8, 0.2, 0.2, 69, 77, 76, 64, 2.88, '0', '51412269'),
('1815827576', 0.8, 0.8, 1, 1, 0.2, 0.2, 72, 70, 88, 92, 2.98, '0', '51412268'),
('1837656130', 1, 1, 1, 1, 0.2, 0.2, 94, 81, 85, 92, 2.92, '0', '51412265'),
('2037031888', 0.8, 0.8, 0.8, 0.8, 0.4, 0.2, 80, 67, 78, 76, 3.21, '0', '51412270'),
('678398257', 1, 1, 1, 1, 1, 0.2, 90, 94, 88, 94, 3.84, '0', '51412263'),
('786668041', 1, 1, 0.8, 0.8, 0.4, 0.2, 90, 91, 74, 77, 3.12, '0', '51412262'),
('977078882', 1, 1, 1, 1, 1, 0.2, 91, 81, 91, 92, 3.77, '0', '51412264');

-- --------------------------------------------------------

--
-- Table structure for table `tb_normalisasi`
--

CREATE TABLE IF NOT EXISTS `tb_normalisasi` (
  `id_normalisasi` varchar(150) NOT NULL,
  `nilai_c1` float NOT NULL,
  `nilai_c2` float NOT NULL,
  `nilai_c3` float NOT NULL,
  `nilai_c4` float NOT NULL,
  `nilai_c5` float NOT NULL,
  `nilai_c6` float NOT NULL,
  `total_nilai` float NOT NULL,
  `npm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_normalisasi`
--

INSERT INTO `tb_normalisasi` (`id_normalisasi`, `nilai_c1`, `nilai_c2`, `nilai_c3`, `nilai_c4`, `nilai_c5`, `nilai_c6`, `total_nilai`, `npm`) VALUES
('1050966159', 0.990745, 0.981577, 1, 1, 0.66874, 0.625365, 0.0834976, '51412268'),
('1136050642', 1, 1, 1, 1, 1, 0.625365, 0.12839, '51412263'),
('1186696011', 1, 1, 1, 1, 0.795271, 0.625365, 0.102105, '51412267'),
('1212621214', 0.990745, 0.981577, 0.972492, 0.954576, 0.795271, 0.625365, 0.0921782, '51412270'),
('1406670949', 1, 1, 1, 1, 0.66874, 0.625365, 0.0858594, '51412266'),
('1685755102', 0.990745, 0.981577, 0.972492, 0.954576, 0.66874, 0.625365, 0.0775123, '51412269'),
('1830770082', 1, 1, 0.972492, 0.954576, 0.795271, 0.625365, 0.0947855, '51412262'),
('1904040539', 1, 1, 1, 1, 0.66874, 0.625365, 0.0858594, '51412265'),
('445507015', 1, 1, 1, 1, 1, 0.625365, 0.12839, '51412264'),
('489281300', 0.990745, 1, 1, 0.954576, 1, 0.625365, 0.121424, '51412261');

-- --------------------------------------------------------

--
-- Structure for view `tb_calon_asisten_normalisasi`
--
DROP TABLE IF EXISTS `tb_calon_asisten_normalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_calon_asisten_normalisasi` AS select `tb_calon_asisten`.`npm` AS `npm`,`tb_calon_asisten`.`nama` AS `nama`,`tb_normalisasi`.`total_nilai` AS `total_nilai`,`tb_normalisasi`.`nilai_c6` AS `nilai_c6`,`tb_normalisasi`.`nilai_c5` AS `nilai_c5`,`tb_normalisasi`.`nilai_c4` AS `nilai_c4`,`tb_normalisasi`.`nilai_c3` AS `nilai_c3`,`tb_normalisasi`.`nilai_c2` AS `nilai_c2`,`tb_normalisasi`.`nilai_c1` AS `nilai_c1` from (`tb_calon_asisten` join `tb_normalisasi` on((`tb_calon_asisten`.`npm` = `tb_normalisasi`.`npm`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_calon_asisten`
--
ALTER TABLE `tb_calon_asisten`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `tb_himpunan`
--
ALTER TABLE `tb_himpunan`
  ADD PRIMARY KEY (`id_himpunan`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_nilai_calon_asisten`
--
ALTER TABLE `tb_nilai_calon_asisten`
  ADD PRIMARY KEY (`id_nilai`), ADD KEY `npm` (`npm`);

--
-- Indexes for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`), ADD KEY `npm` (`npm`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_nilai_calon_asisten`
--
ALTER TABLE `tb_nilai_calon_asisten`
ADD CONSTRAINT `tb_nilai_calon_asisten_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `tb_calon_asisten` (`npm`);

--
-- Constraints for table `tb_normalisasi`
--
ALTER TABLE `tb_normalisasi`
ADD CONSTRAINT `tb_normalisasi_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `tb_calon_asisten` (`npm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
