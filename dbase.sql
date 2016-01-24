-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2016 at 10:27 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi_lth`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `noanggota` char(10) NOT NULL,
  `namaanggota` varchar(50) NOT NULL,
  `jk` char(2) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `hp` char(30) NOT NULL,
  `noidentitas` char(30) NOT NULL,
  `agama` int(5) DEFAULT NULL,
  `perusahaan` int(5) DEFAULT NULL,
  `tgl_join` datetime DEFAULT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`noanggota`, `namaanggota`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `rt`, `rw`, `hp`, `noidentitas`, `agama`, `perusahaan`, `tgl_join`, `petugas`, `pwd`) VALUES
('A00001', 'MUHAMMAD ILYAS', 'L', 'Manado', '1990-12-12', 'Manyar', '8', '7', '990009', '35655', 1, 21, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29'),
('B00002', 'DANIS PUTRA PRAMUDIA', 'L', 'Malang', '1990-01-01', 'Girri Purno', 'f', '', '0877748', '123456', 3, 2, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29'),
('A00002', 'Muhammad jamal', 'L', 'Jepara', '1986-02-03', 'Jl. Gading', '', '', '16667', '9909999', 1, 2, '2015-01-19 00:00:00', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('B00001', 'Afif M', 'L', 'Malang', '2007-01-13', '', '3', '2', '55', '99888', 1, 4, '2016-01-19 00:00:00', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('A00003', 'Lisa', 'P', 'Pati', '1987-01-19', 'Magelang', '001', '4', '4455', '98999', 1, 4, '2016-01-19 12:21:48', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('A00004', 'Susi S', 'P', 'Jepara', '1989-01-19', 'JL. JALAN', '11', '1', '123', '0009', 2, 23, '2016-01-19 12:23:44', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('B00003', 'Budi Rahardjo', 'L', '', '2016-01-12', '', '', '', '', '9989', 6, 1, '2016-01-19 18:25:29', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('B00004', 'ACHMAD', 'L', 'MANADO', '1990-12-12', '', '12', '11', 'DDD', '999999', 0, 0, '2016-01-21 17:58:03', 'achmad', '4739c5c11d833bb199c16ff95a92b267'),
('B00005', 'AKI', 'L', '', '0000-00-00', '', '', '', '081', '123', 0, 0, '2016-01-23 19:02:46', 'achmad', '4739c5c11d833bb199c16ff95a92b267'),
('B00006', 'M. LATIF', 'L', 'Malang', '1988-05-15', 'Jakarta', '1', '1', '4444', '344444', 1, 19, '2016-01-23 21:11:43', 'achmad', '4739c5c11d833bb199c16ff95a92b267'),
('B00007', 'A. Latif', 'L', 'Malang', '1988-05-15', 'Jakarta', '1', '1', '4444', '344444', 1, 19, '2016-01-23 21:11:43', 'achmad', '4739c5c11d833bb199c16ff95a92b267'),
('B00008', 'MUHAMMAD ILYAS', 'L', 'Manado', '1990-12-12', 'Manyar', '8', '7', '990009', '35655', 1, 21, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29'),
('B00009', 'DANIS PUTRA PRAMUDIA', 'L', 'Malang', '1990-01-01', 'Girri Purno', 'f', '', '0877748', '123456', 3, 2, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29'),
('B00011', 'AKI', 'L', '', '0000-00-00', '', '', '', '081', '123', 0, 0, '2016-01-23 19:02:46', 'achmad', '4739c5c11d833bb199c16ff95a92b267'),
('B00012', 'Muhammad jamal', 'L', 'Jepara', '1986-02-03', 'Jl. Gading', '', '', '16667', '9909999', 1, 2, '2015-01-19 00:00:00', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('B00013', 'MUHAMMAD ILYAS', 'L', 'Manado', '1990-12-12', 'Manyar', '8', '7', '990009', '35655', 1, 21, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29'),
('B00015', 'Afif M', 'L', 'Malang', '2007-01-13', '', '3', '2', '55', '99888', 1, 4, '2016-01-19 00:00:00', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('B00014', 'ACHMAD', 'L', 'MANADO', '1990-12-12', '', '12', '11', 'DDD', '999999', 0, 0, '2016-01-21 17:58:03', 'achmad', '4739c5c11d833bb199c16ff95a92b267'),
('B00010', 'Muhammad jamal', 'L', 'Jepara', '1986-02-03', 'Jl. Gading', '', '', '16667', '9909999', 1, 2, '2015-01-19 00:00:00', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('B00016', 'MUHAMMAD ILYAS', 'L', 'Manado', '1990-12-12', 'Manyar', '8', '7', '990009', '35655', 1, 21, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29'),
('B00017', 'DANIS PUTRA PRAMUDIA', 'L', 'Malang', '1990-01-01', 'Girri Purno', 'f', '', '0877748', '123456', 3, 2, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29'),
('B00018', 'Susi S', 'P', 'Jepara', '1989-01-19', 'JL. JALAN', '11', '1', '123', '0009', 2, 23, '2016-01-19 12:23:44', 'admin', '4739c5c11d833bb199c16ff95a92b267'),
('B00019', 'ACHMAD', 'L', 'MANADO', '1990-12-12', '', '12', '11', 'DDD', '999999', 0, 0, '2016-01-21 17:58:03', 'achmad', '4739c5c11d833bb199c16ff95a92b267'),
('B00020', 's', 'l', '', '2016-01-23', '', '6', '6', '666', '66666', 7, 7, '2016-01-23 23:08:02', NULL, NULL),
('B00021', 'MUHAMMAD ILYAS', 'L', 'Manado', '1990-12-12', 'Manyar', '8', '7', '990009', '35655', 1, 21, '2015-01-19 00:00:00', 'admin', '4b2770de9b8e1d12df1be94c096cfc29');

-- --------------------------------------------------------

--
-- Table structure for table `d_bpkb`
--

CREATE TABLE IF NOT EXISTS `d_bpkb` (
  `id` int(11) DEFAULT NULL,
  `idpinjam` int(11) DEFAULT NULL,
  `jeniskendaraan` varchar(30) NOT NULL,
  `merk` varchar(30) DEFAULT NULL,
  `tahun` varchar(2) DEFAULT NULL,
  `no_bpkb` varchar(50) DEFAULT NULL,
  `no_rangkah` varchar(50) DEFAULT NULL,
  `no_mesin` varchar(50) DEFAULT NULL,
  `nopol` varchar(12) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `an` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_simpan`
--

CREATE TABLE IF NOT EXISTS `jenis_simpan` (
  `id_jenis` char(2) NOT NULL,
  `jenis_simpanan` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_simpan`
--

INSERT INTO `jenis_simpan` (`id_jenis`, `jenis_simpanan`, `jumlah`) VALUES
('01', 'Simpanan Wajib', 50000),
('02', 'Simpanan Pokok', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `penagihan`
--

CREATE TABLE IF NOT EXISTS `penagihan` (
`id` int(11) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_pinjam` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `tgl_penagihan` date DEFAULT NULL,
  `kunjunganke` int(2) DEFAULT NULL,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `pengambilan`
--

CREATE TABLE IF NOT EXISTS `pengambilan` (
`id_ambil` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `noanggota` char(10) NOT NULL,
  `id_jenis` char(2) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `tglinsert` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengambilan`
--

INSERT INTO `pengambilan` (`id_ambil`, `tgl`, `noanggota`, `id_jenis`, `jumlah`, `user_id`, `tglinsert`) VALUES
(28, '2016-01-01', 'A00001', '01', 50000, 'admin', '2016-01-21 22:41:15'),
(27, '2016-01-01', 'A002', '02', 10000, 'admin', '2016-01-19 12:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman_detail`
--

CREATE TABLE IF NOT EXISTS `pinjaman_detail` (
  `id_pinjam` char(10) NOT NULL,
  `cicilan` smallint(6) NOT NULL,
  `angsuran` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `tgl_jatuh_tempo` date DEFAULT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman_detail`
--

INSERT INTO `pinjaman_detail` (`id_pinjam`, `cicilan`, `angsuran`, `bunga`, `tgl_jatuh_tempo`, `tgl_bayar`, `jumlah_bayar`, `ket`) VALUES
('P0002', 19, 416667, 41667, '2017-08-21', '0000-00-00', 0, '2017-08-21'),
('P0002', 17, 416667, 41667, '2017-06-21', '0000-00-00', 0, '2017-06-21'),
('P0002', 15, 416667, 41667, '2017-04-21', '0000-00-00', 0, '2017-04-21'),
('P0002', 16, 416667, 41667, '2017-05-21', '0000-00-00', 0, '2017-05-21'),
('P0002', 14, 416667, 41667, '2017-03-21', '0000-00-00', 0, '2017-03-21'),
('P0002', 18, 416667, 41667, '2017-07-21', '0000-00-00', 0, '2017-07-21'),
('P0002', 9, 416667, 41667, '2016-10-21', '0000-00-00', 0, '2016-10-21'),
('P0002', 10, 416667, 41667, '2016-11-21', '0000-00-00', 0, '2016-11-21'),
('P0002', 12, 416667, 41667, '2017-01-21', '0000-00-00', 0, '2017-01-21'),
('P0002', 11, 416667, 41667, '2016-12-21', '0000-00-00', 0, '2016-12-21'),
('P0002', 13, 416667, 41667, '2017-02-21', '0000-00-00', 0, '2017-02-21'),
('P0002', 8, 416667, 41667, '2016-09-21', '0000-00-00', 0, '2016-09-21'),
('P0002', 7, 416667, 41667, '2016-08-21', '0000-00-00', 0, '2016-08-21'),
('P0002', 6, 416667, 41667, '2016-07-21', '0000-00-00', 0, '2016-07-21'),
('P0002', 1, 416667, 41667, '2016-02-21', '0000-00-00', 0, '2016-02-21'),
('P0002', 5, 416667, 41667, '2016-06-21', '0000-00-00', 0, '2016-06-21'),
('P0002', 4, 416667, 41667, '2016-05-21', '0000-00-00', 0, '2016-05-21'),
('P0002', 3, 416667, 41667, '2016-04-21', '0000-00-00', 0, '2016-04-21'),
('P0002', 2, 416667, 41667, '2016-03-21', '0000-00-00', 0, '2016-03-21'),
('P0001', 5, 1667, 83, '2016-06-01', '2016-01-21', 1750, '2016-06-01'),
('P0001', 6, 1667, 83, '2016-07-01', '2016-01-21', 1750, '2016-07-01'),
('P0001', 2, 1667, 83, '2016-03-01', '2016-01-21', 1750, '2016-03-01'),
('P0001', 4, 1667, 83, '2016-05-01', '2016-01-21', 1750, '2016-05-01'),
('P0001', 3, 1667, 83, '2016-04-01', '2016-01-21', 1750, '2016-04-01'),
('P0001', 1, 1667, 83, '2016-02-01', '2016-01-19', 1750, '2016-02-01'),
('P0002', 21, 416667, 41667, '2017-10-21', '0000-00-00', 0, '2017-10-21'),
('P0002', 22, 416667, 41667, '2017-11-21', '0000-00-00', 0, '2017-11-21'),
('P0002', 23, 416667, 41667, '2017-12-21', '0000-00-00', 0, '2017-12-21'),
('P0002', 20, 416667, 41667, '2017-09-21', '0000-00-00', 0, '2017-09-21'),
('P0002', 24, 416667, 41667, '2018-01-21', '0000-00-00', 0, '2018-01-21'),
('P0003', 5, 41667, 10417, '2016-06-21', '0000-00-00', 0, '2016-06-21'),
('P0003', 3, 41667, 10417, '2016-04-21', '0000-00-00', 0, '2016-04-21'),
('P0003', 4, 41667, 10417, '2016-05-21', '0000-00-00', 0, '2016-05-21'),
('P0003', 2, 41667, 10417, '2016-03-21', '0000-00-00', 0, '2016-03-21'),
('P0003', 8, 41667, 10417, '2016-09-21', '0000-00-00', 0, '2016-09-21'),
('P0003', 10, 41667, 10417, '2016-11-21', '0000-00-00', 0, '2016-11-21'),
('P0003', 1, 41667, 10417, '2016-02-21', '2015-01-21', 52084, '2016-02-21'),
('P0003', 6, 41667, 10417, '2016-07-21', '0000-00-00', 0, '2016-07-21'),
('P0003', 7, 41667, 10417, '2016-08-21', '0000-00-00', 0, '2016-08-21'),
('P0003', 9, 41667, 10417, '2016-10-21', '0000-00-00', 0, '2016-10-21'),
('P0003', 12, 41667, 10417, '2017-01-21', '0000-00-00', 0, '2017-01-21'),
('P0003', 11, 41667, 10417, '2016-12-21', '0000-00-00', 0, '2016-12-21'),
('P0003', 13, 41667, 10417, '2017-02-21', '0000-00-00', 0, '2017-02-21'),
('P0003', 14, 41667, 10417, '2017-03-21', '0000-00-00', 0, '2017-03-21'),
('P0003', 15, 41667, 10417, '2017-04-21', '0000-00-00', 0, '2017-04-21'),
('P0003', 17, 41667, 10417, '2017-06-21', '0000-00-00', 0, '2017-06-21'),
('P0003', 18, 41667, 10417, '2017-07-21', '0000-00-00', 0, '2017-07-21'),
('P0003', 16, 41667, 10417, '2017-05-21', '0000-00-00', 0, '2017-05-21'),
('P0003', 19, 41667, 10417, '2017-08-21', '0000-00-00', 0, '2017-08-21'),
('P0003', 21, 41667, 10417, '2017-10-21', '0000-00-00', 0, '2017-10-21'),
('P0003', 24, 41667, 10417, '2018-01-21', '0000-00-00', 0, '2018-01-21'),
('P0003', 20, 41667, 10417, '2017-09-21', '0000-00-00', 0, '2017-09-21'),
('P0003', 22, 41667, 10417, '2017-11-21', '0000-00-00', 0, '2017-11-21'),
('P0003', 23, 41667, 10417, '2017-12-21', '0000-00-00', 0, '2017-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman_header`
--

CREATE TABLE IF NOT EXISTS `pinjaman_header` (
  `id_pinjam` char(10) NOT NULL,
  `tgl` date NOT NULL,
  `noanggota` char(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `lama` smallint(6) NOT NULL,
  `bunga` smallint(6) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman_header`
--

INSERT INTO `pinjaman_header` (`id_pinjam`, `tgl`, `noanggota`, `jumlah`, `lama`, `bunga`, `user_id`) VALUES
('P0003', '2016-01-21', 'A00001', 1000000, 24, 25, 'admin'),
('P0002', '2016-01-21', 'A00002', 10000000, 24, 10, 'achmad'),
('P0001', '2016-01-01', 'A00002', 10000, 6, 5, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
`id` int(11) NOT NULL,
  `koperasi` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `hp` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pimpinan` varchar(50) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `koperasi`, `alamat`, `kota`, `hp`, `fax`, `email`, `pimpinan`, `logo`) VALUES
(1, 'KSP SUMBER DANA MANDIRI', 'Jl. DR. WAHIDIN SH', 'GRESIK', '', '', 'kspsdmgresik@gmail.com', 'Tumaji', NULL),
(2, 'KSP SUMBER DANA MANDIRI CABANG PONGANGAN', 'Jl. KH. Syafi''i', 'GRESIK', NULL, NULL, NULL, 'Budi Hartono', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE IF NOT EXISTS `simpanan` (
`id_simpanan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `noanggota` char(10) NOT NULL,
  `id_jenis` char(2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `tglinsert` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `tgl`, `noanggota`, `id_jenis`, `jumlah`, `user_id`, `tglinsert`) VALUES
(57, '2016-01-21', 'A00001', '02', 1000000, 'admin', '2016-01-21 22:40:52'),
(56, '2016-01-21', 'A00001', '01', 50000, 'achmad', '2016-01-21 18:38:19'),
(55, '2016-01-21', 'A00001', '01', 50000, 'achmad', '2016-01-21 16:45:17'),
(54, '2016-01-21', 'A00002', '01', 50000, 'achmad', '2016-01-21 14:04:08'),
(53, '2016-01-01', 'A00002', '02', 100000, 'admin', '2016-01-19 11:59:14'),
(52, '2016-01-01', 'A00002', '01', 50000, 'admin', '2016-01-19 11:59:09'),
(51, '2016-01-01', 'A00001', '01', 500000, 'admin', '2016-01-19 11:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `t_agama`
--

CREATE TABLE IF NOT EXISTS `t_agama` (
`id` int(5) NOT NULL,
  `nama_agama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `t_agama`
--

INSERT INTO `t_agama` (`id`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen Protestan'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Buddha'),
(6, 'Kong Hu Cu'),
(7, 'LainNya');

-- --------------------------------------------------------

--
-- Table structure for table `t_bank`
--

CREATE TABLE IF NOT EXISTS `t_bank` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `t_jabatan`
--

CREATE TABLE IF NOT EXISTS `t_jabatan` (
`id` int(5) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `t_jabatan`
--

INSERT INTO `t_jabatan` (`id`, `nama_jabatan`) VALUES
(1, 'Administrator'),
(2, 'Kepala'),
(3, 'Customer Service'),
(4, 'Kasir'),
(5, 'Kolektor');

-- --------------------------------------------------------

--
-- Table structure for table `t_jpinjaman`
--

CREATE TABLE IF NOT EXISTS `t_jpinjaman` (
  `id` int(11) NOT NULL,
  `jenis_pinjaman` varchar(50) NOT NULL,
  `besar` int(11) NOT NULL,
  `lama` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `bungah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `t_jpinjaman`
--

INSERT INTO `t_jpinjaman` (`id`, `jenis_pinjaman`, `besar`, `lama`, `denda`, `bungah`) VALUES
(0, 'Modal Usaha', 5000000, 24, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `t_perusahaan`
--

CREATE TABLE IF NOT EXISTS `t_perusahaan` (
`id` int(5) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `gaji1` int(2) DEFAULT NULL,
  `gaji2` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=ascii;

--
-- Dumping data for table `t_perusahaan`
--

INSERT INTO `t_perusahaan` (`id`, `nama`, `alamat`, `gaji1`, `gaji2`) VALUES
(1, 'AJG', NULL, NULL, NULL),
(2, 'Altus', NULL, NULL, NULL),
(3, 'Anta Mas', NULL, NULL, NULL),
(4, 'Astom', NULL, NULL, NULL),
(5, 'Auto Korindo', NULL, NULL, NULL),
(6, 'BAP', NULL, NULL, NULL),
(7, 'BHS', NULL, NULL, NULL),
(8, 'Bina Karya Prima', NULL, NULL, NULL),
(9, 'BPKB', NULL, NULL, NULL),
(10, 'BSB', NULL, NULL, NULL),
(11, 'Citra Bhakti', NULL, NULL, NULL),
(12, 'DABN', NULL, NULL, NULL),
(13, 'DSN', NULL, NULL, NULL),
(14, 'Hasil Bantuan', NULL, NULL, NULL),
(15, 'Hess', NULL, NULL, NULL),
(16, 'Indobaja', NULL, NULL, NULL),
(17, 'Indospring', NULL, NULL, NULL),
(18, 'Internit', NULL, NULL, NULL),
(19, 'ISS', NULL, NULL, NULL),
(20, 'JEBEKOKO', NULL, NULL, NULL),
(21, 'Kertas', NULL, NULL, NULL),
(22, 'KSS', NULL, NULL, NULL),
(23, 'Lain-Lain', NULL, NULL, NULL),
(24, 'Mahakam', NULL, NULL, NULL),
(25, 'Maspion', NULL, NULL, NULL),
(26, 'Meta', NULL, NULL, NULL),
(27, 'Mie Sedap', NULL, NULL, NULL),
(28, 'MJS', NULL, NULL, NULL),
(29, 'MK. Prima', NULL, NULL, NULL),
(30, 'MKM', NULL, NULL, NULL),
(31, 'MKS', NULL, NULL, NULL),
(32, 'Modul', NULL, NULL, NULL),
(33, 'Nankai', NULL, NULL, NULL),
(34, 'Olimpic', NULL, NULL, NULL),
(35, 'Oto', NULL, NULL, NULL),
(36, 'Puspetindo', NULL, NULL, NULL),
(37, 'Putra Baru', NULL, NULL, NULL),
(38, 'Raja Global', NULL, NULL, NULL),
(39, 'Rakindo', NULL, NULL, NULL),
(40, 'Raplin', NULL, NULL, NULL),
(41, 'Reterindo', NULL, NULL, NULL),
(42, 'Samator', NULL, NULL, NULL),
(43, 'Satria Niaga', NULL, NULL, NULL),
(44, 'Semen Indonesia', NULL, NULL, NULL),
(45, 'Sertifikat', NULL, NULL, NULL),
(46, 'Smelting', NULL, NULL, NULL),
(47, 'SPL', NULL, NULL, NULL),
(48, 'Sumber Mas', NULL, NULL, NULL),
(49, 'Swabina', NULL, NULL, NULL),
(50, 'Swadaya', NULL, NULL, NULL),
(51, 'Tri Sakti', NULL, NULL, NULL),
(52, 'Varia Usaha', NULL, NULL, NULL),
(53, 'Wilmar Nabati', NULL, NULL, NULL),
(54, 'Marina', NULL, NULL, NULL),
(55, 'Baja', NULL, NULL, NULL),
(56, 'Hungsheng', NULL, NULL, NULL),
(57, 'Batu Bara', NULL, NULL, NULL),
(58, 'Gema Sutera', NULL, NULL, NULL),
(59, 'Giant', NULL, NULL, NULL),
(60, 'Hypermart', NULL, NULL, NULL),
(61, 'Columbia', NULL, NULL, NULL),
(62, 'Miyako', NULL, NULL, NULL),
(63, 'Pertamina', NULL, NULL, NULL),
(64, 'Petok D', NULL, NULL, NULL),
(65, 'Pipa', NULL, NULL, NULL),
(66, 'PJB', NULL, NULL, NULL),
(67, 'SHELTER', NULL, NULL, NULL),
(68, 'Petro', NULL, NULL, NULL),
(69, 'Jindal', NULL, NULL, NULL),
(70, 'Kayu Multi', NULL, NULL, NULL),
(71, 'Slamet Putra', NULL, NULL, NULL),
(72, 'Artawa', NULL, NULL, NULL),
(73, 'CAB', NULL, NULL, NULL),
(74, 'FUGUI', NULL, NULL, NULL),
(75, 'Inter Global', NULL, NULL, NULL),
(76, 'Sucofindo', NULL, NULL, NULL),
(77, 'Hikmah', NULL, NULL, NULL),
(78, 'PT. SEJATI', NULL, NULL, NULL),
(79, 'KDK', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_zona`
--

CREATE TABLE IF NOT EXISTS `t_zona` (
  `id` int(11) DEFAULT NULL,
  `kode_kab` int(11) DEFAULT NULL,
  `kode_kec` int(11) DEFAULT NULL,
  `kode_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(50) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  `cabang` int(11) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `namalengkap`, `password`, `tempat_lahir`, `tgl_lahir`, `level`, `cabang`, `foto`) VALUES
('admin', 'Mas Admin', '21232f297a57a5a743894a0e4a801fc3', 'Malang', '1988-05-15', 1, 1, 'g.jpg'),
('achmad', 'Achmad Sholehan', '21232f297a57a5a743894a0e4a801fc3', 'Gresik', '1988-12-01', 1, 2, ''),
('sholehan', 'ACHMAD SHOLEHAN', '21232f297a57a5a743894a0e4a801fc3', 'Malang', '1988-01-12', 3, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`noanggota`);

--
-- Indexes for table `jenis_simpan`
--
ALTER TABLE `jenis_simpan`
 ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `penagihan`
--
ALTER TABLE `penagihan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengambilan`
--
ALTER TABLE `pengambilan`
 ADD PRIMARY KEY (`id_ambil`);

--
-- Indexes for table `pinjaman_detail`
--
ALTER TABLE `pinjaman_detail`
 ADD PRIMARY KEY (`id_pinjam`,`cicilan`), ADD KEY `id_pinjam` (`id_pinjam`,`cicilan`);

--
-- Indexes for table `pinjaman_header`
--
ALTER TABLE `pinjaman_header`
 ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
 ADD PRIMARY KEY (`id_simpanan`), ADD KEY `noanggota` (`noanggota`);

--
-- Indexes for table `t_agama`
--
ALTER TABLE `t_agama`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jabatan`
--
ALTER TABLE `t_jabatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jpinjaman`
--
ALTER TABLE `t_jpinjaman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_perusahaan`
--
ALTER TABLE `t_perusahaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penagihan`
--
ALTER TABLE `penagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengambilan`
--
ALTER TABLE `pengambilan`
MODIFY `id_ambil` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `t_agama`
--
ALTER TABLE `t_agama`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_jabatan`
--
ALTER TABLE `t_jabatan`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_perusahaan`
--
ALTER TABLE `t_perusahaan`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
