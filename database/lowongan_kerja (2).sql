-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2018 at 02:04 PM
-- Server version: 10.1.30-MariaDB-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowongan_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `tgl_daftar`, `level`) VALUES
(1, 'herwanto@gmail.com', '$2a$10$paW2eLms72s.40DaW.HcgesesUUupfQskhIIloFrLxSPdtYWN1igK', 'Herwanto', '2016-06-30', 'admin'),
(4, 'masrial', '$2a$10$qoXicD7wbMZ8D.cZvp5q7OLNdnTi8r7HdJ8GiGO25RBU7cRAtF/Ue', 'Masrial', '2018-02-21', 'admin'),
(5, 'root', '$2a$10$zooY6cUbUnF18SBr62wLqOYC4/oCATXGjQx1r/BoV8L5yF4K6QSDi', 'root', '2018-03-22', 'root'),
(6, 'tyo', '$2a$10$a2iFz9C1k5ZCldoURzWRwOk9BouitxNop4g0emLFvY79KfhZRW6dq', 'Prasetyo Nugroho', '2018-03-22', 'perusahaan'),
(7, 'dayat96', '$2a$10$RLTjhHdvKib2eljj/y2P8.eYn4N3eavnq7vN.wc0r46wD2XoAUuEe', 'M Ikhsan Hidayat', '2018-03-23', 'admin'),
(10, 'testes', '$2a$10$fpFOXN4VQn1WVJiGT7NmUObi1tyHhLQmJkc/PzW2lgRmicX9VIOny', 'tes aja', '2018-03-23', 'admin'),
(11, 'amin', '$2a$10$RliRcE41w3oiHOkRBTSvFetgapMAPZFZ/FHKY/jItEJDTNmadp3RK', 'Aminn', '2018-04-10', 'admin'),
(12, 'salam', '$2a$10$bnYr2SDNeX1zRgG0pfSPbOOzGk75SWs0NBxFs76FTq/dGIWpj/fcG', 'M salam harahap', '2018-04-10', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan_pendidikan`
--

CREATE TABLE `jurusan_pendidikan` (
  `id_jurusan` int(5) NOT NULL,
  `nama_jurusan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan_pendidikan`
--

INSERT INTO `jurusan_pendidikan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Manajemen Informatika'),
(2, 'Sistem Informasi'),
(3, 'Komputer Akuntansi'),
(4, 'Teknik Komputer'),
(5, 'Teknik Sipil'),
(6, 'Bahasa Indonesia'),
(7, 'Akuntansi'),
(8, 'Multimedia'),
(9, 'Matematika'),
(10, 'Bahasa Inggris'),
(11, 'Bahasa Mandarin'),
(12, 'Musik'),
(13, 'Kimia'),
(14, 'Biologi'),
(15, 'Ilmu Hukum'),
(16, 'Ilmu Komunikasi'),
(17, 'Kecantikan'),
(18, 'Tata Boga'),
(19, 'Ekonomi'),
(20, 'Sejarah'),
(21, 'Kedokteran'),
(22, 'Pemasaran'),
(23, 'Ilmu Pengtahuan Bisnis'),
(24, 'Geografi'),
(25, 'Pertanian'),
(26, 'Arsitektur'),
(27, 'Transportasi'),
(28, 'Telekomunikasi'),
(29, 'Ilmu Komputer'),
(30, 'Teknik mesin mantap');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Teknologi Informatika'),
(2, 'Pemasaran dan Penjualan'),
(3, 'Akuntansi dan Perpajakan'),
(4, 'Pertanian dan Perkebunan'),
(5, 'Hukum'),
(6, 'Kesehatan dan Kecantikan'),
(7, 'Pendidikan dan Pelatihan'),
(8, 'Transportasi dan Logistik'),
(9, 'Konstruksi dan Bangunan'),
(10, 'Laboratorium'),
(11, 'Layanan Pelanggan'),
(12, 'Lainnya'),
(13, 'Teknologi kimia mantap');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(5) NOT NULL,
  `nama_kota` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Aceh Barat'),
(2, 'Aceh Barat Daya'),
(3, 'Banda Aceh'),
(4, 'Langsang'),
(5, 'Lokseumawe'),
(6, 'Sabang'),
(7, 'Subulussalam'),
(8, 'Aceh Besar'),
(9, 'Aceh Jaya'),
(10, 'Aceh Selatan'),
(11, 'Aceh Singkil'),
(12, 'Aceh Tamiang'),
(13, 'Aceh Tengah'),
(14, 'Aceh Tenggara'),
(15, 'Aceh Timur'),
(16, 'Aceh Utara'),
(17, 'Bener Meriah'),
(18, 'Bireuen'),
(19, 'Gayo Luwes'),
(20, 'Nagan Raya'),
(21, 'Pidie'),
(22, 'Pidie Jaya'),
(23, 'Simeulue'),
(24, 'Binjai'),
(25, 'Gunungsitoli'),
(26, 'Medan'),
(27, 'Padangsidempuan'),
(28, 'Pematangsiantar'),
(29, 'Sibolga'),
(30, 'Tanjungbalai'),
(31, 'Tebing Tinggi'),
(32, 'Asahan'),
(33, 'Batu Bara'),
(34, 'Dairi'),
(35, 'Deli Serdang'),
(36, 'Humbang Hasundutan'),
(37, 'Karo'),
(38, 'Labuhanbatu'),
(39, 'Langkat'),
(40, 'Mandailing Natal'),
(41, 'Nias'),
(42, 'Padang Lawas'),
(43, 'Pakpak Bharat'),
(44, 'Samosir'),
(45, 'Serdang Bedagai'),
(46, 'Simalungun'),
(47, 'Tapanuli'),
(48, 'Toba Samosir'),
(49, 'Bukittinggi'),
(50, 'Padang'),
(51, 'Padangpanjang'),
(52, 'Pariaman'),
(53, 'Payakumbuh'),
(54, 'Sawahlunto'),
(55, 'Solok'),
(56, 'Agam'),
(57, 'Dharmasraya'),
(58, 'Kepulauan Mentawai'),
(59, 'Lima Puluh Kota'),
(60, 'Padang Pariaman'),
(61, 'Pasaman'),
(62, 'Pesisir Selatan'),
(63, 'Sijunjung'),
(64, 'Solok'),
(65, 'Tanah Datar'),
(66, 'Dumai'),
(67, 'Pekan Baru'),
(68, 'Batam'),
(69, 'Tanjung Pinang'),
(70, 'Jambi'),
(71, 'Sungai Penuh'),
(72, 'Bengkulu'),
(73, 'Lubuklinggau'),
(74, 'Pagar Alam'),
(75, 'Palembang'),
(76, 'Prabumulih'),
(77, 'Pangkal Pinang'),
(78, 'Bandar Lampung'),
(79, 'Metro'),
(80, 'Cilegon'),
(81, 'Serang'),
(82, 'Tangerang'),
(83, 'Pandeglang'),
(84, 'Bandung'),
(85, 'Banjar'),
(86, 'Bekasi'),
(87, 'Bogor'),
(88, 'Cimahi'),
(89, 'Cirebon'),
(90, 'Depok'),
(91, 'Sukabumi'),
(92, 'Tasikmalaya'),
(93, 'Jakarta Barat'),
(94, 'Jakarta Timur'),
(95, 'Jakarta Pusat'),
(96, 'Jakarta Selatan'),
(97, 'Jakarta Utara'),
(98, 'Magelang'),
(99, 'Pekalongan'),
(100, 'Salatiga'),
(101, 'Semarang'),
(102, 'Surakarta'),
(103, 'Tegal'),
(104, 'Bantul'),
(105, 'Gunungkidul'),
(106, 'Kulon Progo'),
(107, 'Sleman'),
(108, 'Yogyakarta'),
(109, 'Blitar'),
(110, 'Kediri'),
(111, 'Madiun'),
(112, 'Malang'),
(113, 'Mojokerto'),
(114, 'Pasuruan'),
(115, 'Probolinggo'),
(116, 'Surabaya'),
(117, 'Denpasar'),
(118, 'Karangasem'),
(119, 'Badung'),
(120, 'Bima'),
(121, 'Mataram'),
(122, 'Kupang'),
(123, 'Malaka'),
(124, 'Sumba'),
(125, 'Pontianak'),
(126, 'Singkawang'),
(127, 'Banjarmasin'),
(128, 'Banjarbaru'),
(129, 'Palangka Raya'),
(130, 'Balikpapan'),
(131, 'Bontang'),
(132, 'Samarinda'),
(133, 'Tarakan'),
(134, 'Gorontalo'),
(135, 'Makasar'),
(136, 'Palopo'),
(137, 'Parepare'),
(138, 'Bau Bau'),
(139, 'Kendari'),
(140, 'Palu'),
(141, 'Bitung'),
(142, 'Kotamobagu'),
(143, 'Manado'),
(144, 'Tomohon'),
(145, 'Mamuju'),
(146, 'Ambon'),
(147, 'Tual'),
(148, 'Ternate'),
(149, 'Tidore'),
(150, 'Jayapura'),
(151, 'Sorong'),
(152, 'Klaten'),
(153, 'Pekanbaru Mantap');

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id_lamaran` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `tgl_lamar` date NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Process'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id_lamaran`, `id_pelamar`, `id_lowongan`, `tgl_lamar`, `lampiran`, `status`) VALUES
(1, 1, 1, '2018-05-01', '1-1.zip', 'Diterima'),
(2, 2, 1, '2018-05-01', '2-1.zip', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `id_kota` int(5) NOT NULL,
  `id_jurusan` int(5) NOT NULL,
  `tgl_buat` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tipe_pekerjaan` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `persyaratan` text NOT NULL,
  `tawaran_gaji` varchar(25) NOT NULL,
  `usia_max` char(2) NOT NULL,
  `jenis_kelamin` char(3) NOT NULL,
  `batas_lamaran` date NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Process',
  `tgl_panggilan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `id_kategori`, `id_perusahaan`, `id_kota`, `id_jurusan`, `tgl_buat`, `pekerjaan`, `tipe_pekerjaan`, `deskripsi`, `persyaratan`, `tawaran_gaji`, `usia_max`, `jenis_kelamin`, `batas_lamaran`, `status`, `tgl_panggilan`) VALUES
(1, 12, 1033, 1471, 4, '2018-05-01', 'Programmer', 'Kontrak', 'Dabsdbadbasjdbasdsa bb b ab jdb ab bjh', 'S1, pengalaman 2 tahun.', '100.000.000 - 200.000.000', '30', 'L', '2018-05-02', 'Publik', '2018-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi_lamaran`
--

CREATE TABLE `notifikasi_lamaran` (
  `id_lamaran` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `sudah_dibaca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi_lamaran`
--

INSERT INTO `notifikasi_lamaran` (`id_lamaran`, `waktu`, `sudah_dibaca`) VALUES
(1, '2018-05-01 12:13:39', 0),
(2, '2018-05-01 12:23:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(5) NOT NULL,
  `id_kota` int(5) NOT NULL,
  `id_jurusan` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_ktp` char(16) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` char(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `id_telegram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `id_kota`, `id_jurusan`, `username`, `password`, `no_ktp`, `tgl_daftar`, `nama_lengkap`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_hp`, `photo`, `level`, `id_telegram`) VALUES
(1, 1471, 4, 'iyall', '$2a$10$/A5YMdMYQr9znoHjwQzbaeAeUtPrkk2ZXLPIP4t7bNuGVUWS/bt9C', '123', '2018-05-01', 'Masrial', 'L', '1990-12-08', 'Jl Garuda Sakti', '081300000000', 'qrcode.jpeg', 'pelamar', 386016720),
(2, 1409, 4, 'amin', '$2a$10$ObcBXNmohTNn8zUrBtifguTI1H7bfG275UK.Q8fxwHZ19zq9ArvSW', '11111111111111', '2018-05-01', 'amminnn', 'L', '1996-01-01', 'Jl Garuda Sakti', '11221212121', 'user.png', 'pelamar', 168838163);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(5) NOT NULL,
  `id_kota` int(5) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` char(12) NOT NULL,
  `situs` varchar(40) NOT NULL,
  `nama_kontak` varchar(15) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_kota`, `username`, `password`, `tgl_daftar`, `nama_perusahaan`, `alamat`, `no_telp`, `situs`, `nama_kontak`, `no_hp`, `level`) VALUES
(1033, 1471, 'iyall', '$2a$10$cbP8TJVyKcgY.kj6MIh4gukuq27z41/xTXTSrG1gJSPIdWvQKgame', '2018-05-01', 'PT Iyall', 'Jl Mantap', '0761123456', 'www.mantap.com', 'Masmantap', '081234567890', 'perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabkota`
--

CREATE TABLE `tb_kabkota` (
  `id_kabkota` int(5) NOT NULL,
  `id_provinsi` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_kabkota`
--

INSERT INTO `tb_kabkota` (`id_kabkota`, `id_provinsi`, `name`) VALUES
(1101, '11', 'KABUPATEN SIMEULUE'),
(1102, '11', 'KABUPATEN ACEH SINGKIL'),
(1103, '11', 'KABUPATEN ACEH SELATAN'),
(1104, '11', 'KABUPATEN ACEH TENGGARA'),
(1105, '11', 'KABUPATEN ACEH TIMUR'),
(1106, '11', 'KABUPATEN ACEH TENGAH'),
(1107, '11', 'KABUPATEN ACEH BARAT'),
(1108, '11', 'KABUPATEN ACEH BESAR'),
(1109, '11', 'KABUPATEN PIDIE'),
(1110, '11', 'KABUPATEN BIREUEN'),
(1111, '11', 'KABUPATEN ACEH UTARA'),
(1112, '11', 'KABUPATEN ACEH BARAT DAYA'),
(1113, '11', 'KABUPATEN GAYO LUES'),
(1114, '11', 'KABUPATEN ACEH TAMIANG'),
(1115, '11', 'KABUPATEN NAGAN RAYA'),
(1116, '11', 'KABUPATEN ACEH JAYA'),
(1117, '11', 'KABUPATEN BENER MERIAH'),
(1118, '11', 'KABUPATEN PIDIE JAYA'),
(1171, '11', 'KOTA BANDA ACEH'),
(1172, '11', 'KOTA SABANG'),
(1173, '11', 'KOTA LANGSA'),
(1174, '11', 'KOTA LHOKSEUMAWE'),
(1175, '11', 'KOTA SUBULUSSALAM'),
(1201, '12', 'KABUPATEN NIAS'),
(1202, '12', 'KABUPATEN MANDAILING NATAL'),
(1203, '12', 'KABUPATEN TAPANULI SELATAN'),
(1204, '12', 'KABUPATEN TAPANULI TENGAH'),
(1205, '12', 'KABUPATEN TAPANULI UTARA'),
(1206, '12', 'KABUPATEN TOBA SAMOSIR'),
(1207, '12', 'KABUPATEN LABUHAN BATU'),
(1208, '12', 'KABUPATEN ASAHAN'),
(1209, '12', 'KABUPATEN SIMALUNGUN'),
(1210, '12', 'KABUPATEN DAIRI'),
(1211, '12', 'KABUPATEN KARO'),
(1212, '12', 'KABUPATEN DELI SERDANG'),
(1213, '12', 'KABUPATEN LANGKAT'),
(1214, '12', 'KABUPATEN NIAS SELATAN'),
(1215, '12', 'KABUPATEN HUMBANG HASUNDUTAN'),
(1216, '12', 'KABUPATEN PAKPAK BHARAT'),
(1217, '12', 'KABUPATEN SAMOSIR'),
(1218, '12', 'KABUPATEN SERDANG BEDAGAI'),
(1219, '12', 'KABUPATEN BATU BARA'),
(1220, '12', 'KABUPATEN PADANG LAWAS UTARA'),
(1221, '12', 'KABUPATEN PADANG LAWAS'),
(1222, '12', 'KABUPATEN LABUHAN BATU SELATAN'),
(1223, '12', 'KABUPATEN LABUHAN BATU UTARA'),
(1224, '12', 'KABUPATEN NIAS UTARA'),
(1225, '12', 'KABUPATEN NIAS BARAT'),
(1271, '12', 'KOTA SIBOLGA'),
(1272, '12', 'KOTA TANJUNG BALAI'),
(1273, '12', 'KOTA PEMATANG SIANTAR'),
(1274, '12', 'KOTA TEBING TINGGI'),
(1275, '12', 'KOTA MEDAN'),
(1276, '12', 'KOTA BINJAI'),
(1277, '12', 'KOTA PADANGSIDIMPUAN'),
(1278, '12', 'KOTA GUNUNGSITOLI'),
(1301, '13', 'KABUPATEN KEPULAUAN MENTAWAI'),
(1302, '13', 'KABUPATEN PESISIR SELATAN'),
(1303, '13', 'KABUPATEN SOLOK'),
(1304, '13', 'KABUPATEN SIJUNJUNG'),
(1305, '13', 'KABUPATEN TANAH DATAR'),
(1306, '13', 'KABUPATEN PADANG PARIAMAN'),
(1307, '13', 'KABUPATEN AGAM'),
(1308, '13', 'KABUPATEN LIMA PULUH KOTA'),
(1309, '13', 'KABUPATEN PASAMAN'),
(1310, '13', 'KABUPATEN SOLOK SELATAN'),
(1311, '13', 'KABUPATEN DHARMASRAYA'),
(1312, '13', 'KABUPATEN PASAMAN BARAT'),
(1371, '13', 'KOTA PADANG'),
(1372, '13', 'KOTA SOLOK'),
(1373, '13', 'KOTA SAWAH LUNTO'),
(1374, '13', 'KOTA PADANG PANJANG'),
(1375, '13', 'KOTA BUKITTINGGI'),
(1376, '13', 'KOTA PAYAKUMBUH'),
(1377, '13', 'KOTA PARIAMAN'),
(1401, '14', 'KABUPATEN KUANTAN SINGINGI'),
(1402, '14', 'KABUPATEN INDRAGIRI HULU'),
(1403, '14', 'KABUPATEN INDRAGIRI HILIR'),
(1404, '14', 'KABUPATEN PELALAWAN'),
(1405, '14', 'KABUPATEN S I A K'),
(1406, '14', 'KABUPATEN KAMPAR'),
(1407, '14', 'KABUPATEN ROKAN HULU'),
(1408, '14', 'KABUPATEN BENGKALIS'),
(1409, '14', 'KABUPATEN ROKAN HILIR'),
(1410, '14', 'KABUPATEN KEPULAUAN MERANTI'),
(1471, '14', 'KOTA PEKANBARU'),
(1473, '14', 'KOTA D U M A I'),
(1501, '15', 'KABUPATEN KERINCI'),
(1502, '15', 'KABUPATEN MERANGIN'),
(1503, '15', 'KABUPATEN SAROLANGUN'),
(1504, '15', 'KABUPATEN BATANG HARI'),
(1505, '15', 'KABUPATEN MUARO JAMBI'),
(1506, '15', 'KABUPATEN TANJUNG JABUNG TIMUR'),
(1507, '15', 'KABUPATEN TANJUNG JABUNG BARAT'),
(1508, '15', 'KABUPATEN TEBO'),
(1509, '15', 'KABUPATEN BUNGO'),
(1571, '15', 'KOTA JAMBI'),
(1572, '15', 'KOTA SUNGAI PENUH'),
(1601, '16', 'KABUPATEN OGAN KOMERING ULU'),
(1602, '16', 'KABUPATEN OGAN KOMERING ILIR'),
(1603, '16', 'KABUPATEN MUARA ENIM'),
(1604, '16', 'KABUPATEN LAHAT'),
(1605, '16', 'KABUPATEN MUSI RAWAS'),
(1606, '16', 'KABUPATEN MUSI BANYUASIN'),
(1607, '16', 'KABUPATEN BANYU ASIN'),
(1608, '16', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
(1609, '16', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
(1610, '16', 'KABUPATEN OGAN ILIR'),
(1611, '16', 'KABUPATEN EMPAT LAWANG'),
(1612, '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
(1613, '16', 'KABUPATEN MUSI RAWAS UTARA'),
(1671, '16', 'KOTA PALEMBANG'),
(1672, '16', 'KOTA PRABUMULIH'),
(1673, '16', 'KOTA PAGAR ALAM'),
(1674, '16', 'KOTA LUBUKLINGGAU'),
(1701, '17', 'KABUPATEN BENGKULU SELATAN'),
(1702, '17', 'KABUPATEN REJANG LEBONG'),
(1703, '17', 'KABUPATEN BENGKULU UTARA'),
(1704, '17', 'KABUPATEN KAUR'),
(1705, '17', 'KABUPATEN SELUMA'),
(1706, '17', 'KABUPATEN MUKOMUKO'),
(1707, '17', 'KABUPATEN LEBONG'),
(1708, '17', 'KABUPATEN KEPAHIANG'),
(1709, '17', 'KABUPATEN BENGKULU TENGAH'),
(1771, '17', 'KOTA BENGKULU'),
(1801, '18', 'KABUPATEN LAMPUNG BARAT'),
(1802, '18', 'KABUPATEN TANGGAMUS'),
(1803, '18', 'KABUPATEN LAMPUNG SELATAN'),
(1804, '18', 'KABUPATEN LAMPUNG TIMUR'),
(1805, '18', 'KABUPATEN LAMPUNG TENGAH'),
(1806, '18', 'KABUPATEN LAMPUNG UTARA'),
(1807, '18', 'KABUPATEN WAY KANAN'),
(1808, '18', 'KABUPATEN TULANGBAWANG'),
(1809, '18', 'KABUPATEN PESAWARAN'),
(1810, '18', 'KABUPATEN PRINGSEWU'),
(1811, '18', 'KABUPATEN MESUJI'),
(1812, '18', 'KABUPATEN TULANG BAWANG BARAT'),
(1813, '18', 'KABUPATEN PESISIR BARAT'),
(1871, '18', 'KOTA BANDAR LAMPUNG'),
(1872, '18', 'KOTA METRO'),
(1901, '19', 'KABUPATEN BANGKA'),
(1902, '19', 'KABUPATEN BELITUNG'),
(1903, '19', 'KABUPATEN BANGKA BARAT'),
(1904, '19', 'KABUPATEN BANGKA TENGAH'),
(1905, '19', 'KABUPATEN BANGKA SELATAN'),
(1906, '19', 'KABUPATEN BELITUNG TIMUR'),
(1971, '19', 'KOTA PANGKAL PINANG'),
(2101, '21', 'KABUPATEN KARIMUN'),
(2102, '21', 'KABUPATEN BINTAN'),
(2103, '21', 'KABUPATEN NATUNA'),
(2104, '21', 'KABUPATEN LINGGA'),
(2105, '21', 'KABUPATEN KEPULAUAN ANAMBAS'),
(2171, '21', 'KOTA B A T A M'),
(2172, '21', 'KOTA TANJUNG PINANG'),
(3101, '31', 'KABUPATEN KEPULAUAN SERIBU'),
(3171, '31', 'KOTA JAKARTA SELATAN'),
(3172, '31', 'KOTA JAKARTA TIMUR'),
(3173, '31', 'KOTA JAKARTA PUSAT'),
(3174, '31', 'KOTA JAKARTA BARAT'),
(3175, '31', 'KOTA JAKARTA UTARA'),
(3201, '32', 'KABUPATEN BOGOR'),
(3202, '32', 'KABUPATEN SUKABUMI'),
(3203, '32', 'KABUPATEN CIANJUR'),
(3204, '32', 'KABUPATEN BANDUNG'),
(3205, '32', 'KABUPATEN GARUT'),
(3206, '32', 'KABUPATEN TASIKMALAYA'),
(3207, '32', 'KABUPATEN CIAMIS'),
(3208, '32', 'KABUPATEN KUNINGAN'),
(3209, '32', 'KABUPATEN CIREBON'),
(3210, '32', 'KABUPATEN MAJALENGKA'),
(3211, '32', 'KABUPATEN SUMEDANG'),
(3212, '32', 'KABUPATEN INDRAMAYU'),
(3213, '32', 'KABUPATEN SUBANG'),
(3214, '32', 'KABUPATEN PURWAKARTA'),
(3215, '32', 'KABUPATEN KARAWANG'),
(3216, '32', 'KABUPATEN BEKASI'),
(3217, '32', 'KABUPATEN BANDUNG BARAT'),
(3218, '32', 'KABUPATEN PANGANDARAN'),
(3271, '32', 'KOTA BOGOR'),
(3272, '32', 'KOTA SUKABUMI'),
(3273, '32', 'KOTA BANDUNG'),
(3274, '32', 'KOTA CIREBON'),
(3275, '32', 'KOTA BEKASI'),
(3276, '32', 'KOTA DEPOK'),
(3277, '32', 'KOTA CIMAHI'),
(3278, '32', 'KOTA TASIKMALAYA'),
(3279, '32', 'KOTA BANJAR'),
(3301, '33', 'KABUPATEN CILACAP'),
(3302, '33', 'KABUPATEN BANYUMAS'),
(3303, '33', 'KABUPATEN PURBALINGGA'),
(3304, '33', 'KABUPATEN BANJARNEGARA'),
(3305, '33', 'KABUPATEN KEBUMEN'),
(3306, '33', 'KABUPATEN PURWOREJO'),
(3307, '33', 'KABUPATEN WONOSOBO'),
(3308, '33', 'KABUPATEN MAGELANG'),
(3309, '33', 'KABUPATEN BOYOLALI'),
(3310, '33', 'KABUPATEN KLATEN'),
(3311, '33', 'KABUPATEN SUKOHARJO'),
(3312, '33', 'KABUPATEN WONOGIRI'),
(3313, '33', 'KABUPATEN KARANGANYAR'),
(3314, '33', 'KABUPATEN SRAGEN'),
(3315, '33', 'KABUPATEN GROBOGAN'),
(3316, '33', 'KABUPATEN BLORA'),
(3317, '33', 'KABUPATEN REMBANG'),
(3318, '33', 'KABUPATEN PATI'),
(3319, '33', 'KABUPATEN KUDUS'),
(3320, '33', 'KABUPATEN JEPARA'),
(3321, '33', 'KABUPATEN DEMAK'),
(3322, '33', 'KABUPATEN SEMARANG'),
(3323, '33', 'KABUPATEN TEMANGGUNG'),
(3324, '33', 'KABUPATEN KENDAL'),
(3325, '33', 'KABUPATEN BATANG'),
(3326, '33', 'KABUPATEN PEKALONGAN'),
(3327, '33', 'KABUPATEN PEMALANG'),
(3328, '33', 'KABUPATEN TEGAL'),
(3329, '33', 'KABUPATEN BREBES'),
(3371, '33', 'KOTA MAGELANG'),
(3372, '33', 'KOTA SURAKARTA'),
(3373, '33', 'KOTA SALATIGA'),
(3374, '33', 'KOTA SEMARANG'),
(3375, '33', 'KOTA PEKALONGAN'),
(3376, '33', 'KOTA TEGAL'),
(3401, '34', 'KABUPATEN KULON PROGO'),
(3402, '34', 'KABUPATEN BANTUL'),
(3403, '34', 'KABUPATEN GUNUNG KIDUL'),
(3404, '34', 'KABUPATEN SLEMAN'),
(3471, '34', 'KOTA YOGYAKARTA'),
(3501, '35', 'KABUPATEN PACITAN'),
(3502, '35', 'KABUPATEN PONOROGO'),
(3503, '35', 'KABUPATEN TRENGGALEK'),
(3504, '35', 'KABUPATEN TULUNGAGUNG'),
(3505, '35', 'KABUPATEN BLITAR'),
(3506, '35', 'KABUPATEN KEDIRI'),
(3507, '35', 'KABUPATEN MALANG'),
(3508, '35', 'KABUPATEN LUMAJANG'),
(3509, '35', 'KABUPATEN JEMBER'),
(3510, '35', 'KABUPATEN BANYUWANGI'),
(3511, '35', 'KABUPATEN BONDOWOSO'),
(3512, '35', 'KABUPATEN SITUBONDO'),
(3513, '35', 'KABUPATEN PROBOLINGGO'),
(3514, '35', 'KABUPATEN PASURUAN'),
(3515, '35', 'KABUPATEN SIDOARJO'),
(3516, '35', 'KABUPATEN MOJOKERTO'),
(3517, '35', 'KABUPATEN JOMBANG'),
(3518, '35', 'KABUPATEN NGANJUK'),
(3519, '35', 'KABUPATEN MADIUN'),
(3520, '35', 'KABUPATEN MAGETAN'),
(3521, '35', 'KABUPATEN NGAWI'),
(3522, '35', 'KABUPATEN BOJONEGORO'),
(3523, '35', 'KABUPATEN TUBAN'),
(3524, '35', 'KABUPATEN LAMONGAN'),
(3525, '35', 'KABUPATEN GRESIK'),
(3526, '35', 'KABUPATEN BANGKALAN'),
(3527, '35', 'KABUPATEN SAMPANG'),
(3528, '35', 'KABUPATEN PAMEKASAN'),
(3529, '35', 'KABUPATEN SUMENEP'),
(3571, '35', 'KOTA KEDIRI'),
(3572, '35', 'KOTA BLITAR'),
(3573, '35', 'KOTA MALANG'),
(3574, '35', 'KOTA PROBOLINGGO'),
(3575, '35', 'KOTA PASURUAN'),
(3576, '35', 'KOTA MOJOKERTO'),
(3577, '35', 'KOTA MADIUN'),
(3578, '35', 'KOTA SURABAYA'),
(3579, '35', 'KOTA BATU'),
(3601, '36', 'KABUPATEN PANDEGLANG'),
(3602, '36', 'KABUPATEN LEBAK'),
(3603, '36', 'KABUPATEN TANGERANG'),
(3604, '36', 'KABUPATEN SERANG'),
(3671, '36', 'KOTA TANGERANG'),
(3672, '36', 'KOTA CILEGON'),
(3673, '36', 'KOTA SERANG'),
(3674, '36', 'KOTA TANGERANG SELATAN'),
(5101, '51', 'KABUPATEN JEMBRANA'),
(5102, '51', 'KABUPATEN TABANAN'),
(5103, '51', 'KABUPATEN BADUNG'),
(5104, '51', 'KABUPATEN GIANYAR'),
(5105, '51', 'KABUPATEN KLUNGKUNG'),
(5106, '51', 'KABUPATEN BANGLI'),
(5107, '51', 'KABUPATEN KARANG ASEM'),
(5108, '51', 'KABUPATEN BULELENG'),
(5171, '51', 'KOTA DENPASAR'),
(5201, '52', 'KABUPATEN LOMBOK BARAT'),
(5202, '52', 'KABUPATEN LOMBOK TENGAH'),
(5203, '52', 'KABUPATEN LOMBOK TIMUR'),
(5204, '52', 'KABUPATEN SUMBAWA'),
(5205, '52', 'KABUPATEN DOMPU'),
(5206, '52', 'KABUPATEN BIMA'),
(5207, '52', 'KABUPATEN SUMBAWA BARAT'),
(5208, '52', 'KABUPATEN LOMBOK UTARA'),
(5271, '52', 'KOTA MATARAM'),
(5272, '52', 'KOTA BIMA'),
(5301, '53', 'KABUPATEN SUMBA BARAT'),
(5302, '53', 'KABUPATEN SUMBA TIMUR'),
(5303, '53', 'KABUPATEN KUPANG'),
(5304, '53', 'KABUPATEN TIMOR TENGAH SELATAN'),
(5305, '53', 'KABUPATEN TIMOR TENGAH UTARA'),
(5306, '53', 'KABUPATEN BELU'),
(5307, '53', 'KABUPATEN ALOR'),
(5308, '53', 'KABUPATEN LEMBATA'),
(5309, '53', 'KABUPATEN FLORES TIMUR'),
(5310, '53', 'KABUPATEN SIKKA'),
(5311, '53', 'KABUPATEN ENDE'),
(5312, '53', 'KABUPATEN NGADA'),
(5313, '53', 'KABUPATEN MANGGARAI'),
(5314, '53', 'KABUPATEN ROTE NDAO'),
(5315, '53', 'KABUPATEN MANGGARAI BARAT'),
(5316, '53', 'KABUPATEN SUMBA TENGAH'),
(5317, '53', 'KABUPATEN SUMBA BARAT DAYA'),
(5318, '53', 'KABUPATEN NAGEKEO'),
(5319, '53', 'KABUPATEN MANGGARAI TIMUR'),
(5320, '53', 'KABUPATEN SABU RAIJUA'),
(5321, '53', 'KABUPATEN MALAKA'),
(5371, '53', 'KOTA KUPANG'),
(6101, '61', 'KABUPATEN SAMBAS'),
(6102, '61', 'KABUPATEN BENGKAYANG'),
(6103, '61', 'KABUPATEN LANDAK'),
(6104, '61', 'KABUPATEN MEMPAWAH'),
(6105, '61', 'KABUPATEN SANGGAU'),
(6106, '61', 'KABUPATEN KETAPANG'),
(6107, '61', 'KABUPATEN SINTANG'),
(6108, '61', 'KABUPATEN KAPUAS HULU'),
(6109, '61', 'KABUPATEN SEKADAU'),
(6110, '61', 'KABUPATEN MELAWI'),
(6111, '61', 'KABUPATEN KAYONG UTARA'),
(6112, '61', 'KABUPATEN KUBU RAYA'),
(6171, '61', 'KOTA PONTIANAK'),
(6172, '61', 'KOTA SINGKAWANG'),
(6201, '62', 'KABUPATEN KOTAWARINGIN BARAT'),
(6202, '62', 'KABUPATEN KOTAWARINGIN TIMUR'),
(6203, '62', 'KABUPATEN KAPUAS'),
(6204, '62', 'KABUPATEN BARITO SELATAN'),
(6205, '62', 'KABUPATEN BARITO UTARA'),
(6206, '62', 'KABUPATEN SUKAMARA'),
(6207, '62', 'KABUPATEN LAMANDAU'),
(6208, '62', 'KABUPATEN SERUYAN'),
(6209, '62', 'KABUPATEN KATINGAN'),
(6210, '62', 'KABUPATEN PULANG PISAU'),
(6211, '62', 'KABUPATEN GUNUNG MAS'),
(6212, '62', 'KABUPATEN BARITO TIMUR'),
(6213, '62', 'KABUPATEN MURUNG RAYA'),
(6271, '62', 'KOTA PALANGKA RAYA'),
(6301, '63', 'KABUPATEN TANAH LAUT'),
(6302, '63', 'KABUPATEN KOTA BARU'),
(6303, '63', 'KABUPATEN BANJAR'),
(6304, '63', 'KABUPATEN BARITO KUALA'),
(6305, '63', 'KABUPATEN TAPIN'),
(6306, '63', 'KABUPATEN HULU SUNGAI SELATAN'),
(6307, '63', 'KABUPATEN HULU SUNGAI TENGAH'),
(6308, '63', 'KABUPATEN HULU SUNGAI UTARA'),
(6309, '63', 'KABUPATEN TABALONG'),
(6310, '63', 'KABUPATEN TANAH BUMBU'),
(6311, '63', 'KABUPATEN BALANGAN'),
(6371, '63', 'KOTA BANJARMASIN'),
(6372, '63', 'KOTA BANJAR BARU'),
(6401, '64', 'KABUPATEN PASER'),
(6402, '64', 'KABUPATEN KUTAI BARAT'),
(6403, '64', 'KABUPATEN KUTAI KARTANEGARA'),
(6404, '64', 'KABUPATEN KUTAI TIMUR'),
(6405, '64', 'KABUPATEN BERAU'),
(6409, '64', 'KABUPATEN PENAJAM PASER UTARA'),
(6411, '64', 'KABUPATEN MAHAKAM HULU'),
(6471, '64', 'KOTA BALIKPAPAN'),
(6472, '64', 'KOTA SAMARINDA'),
(6474, '64', 'KOTA BONTANG'),
(6501, '65', 'KABUPATEN MALINAU'),
(6502, '65', 'KABUPATEN BULUNGAN'),
(6503, '65', 'KABUPATEN TANA TIDUNG'),
(6504, '65', 'KABUPATEN NUNUKAN'),
(6571, '65', 'KOTA TARAKAN'),
(7101, '71', 'KABUPATEN BOLAANG MONGONDOW'),
(7102, '71', 'KABUPATEN MINAHASA'),
(7103, '71', 'KABUPATEN KEPULAUAN SANGIHE'),
(7104, '71', 'KABUPATEN KEPULAUAN TALAUD'),
(7105, '71', 'KABUPATEN MINAHASA SELATAN'),
(7106, '71', 'KABUPATEN MINAHASA UTARA'),
(7107, '71', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
(7108, '71', 'KABUPATEN SIAU TAGULANDANG BIARO'),
(7109, '71', 'KABUPATEN MINAHASA TENGGARA'),
(7110, '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
(7111, '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
(7171, '71', 'KOTA MANADO'),
(7172, '71', 'KOTA BITUNG'),
(7173, '71', 'KOTA TOMOHON'),
(7174, '71', 'KOTA KOTAMOBAGU'),
(7201, '72', 'KABUPATEN BANGGAI KEPULAUAN'),
(7202, '72', 'KABUPATEN BANGGAI'),
(7203, '72', 'KABUPATEN MOROWALI'),
(7204, '72', 'KABUPATEN POSO'),
(7205, '72', 'KABUPATEN DONGGALA'),
(7206, '72', 'KABUPATEN TOLI-TOLI'),
(7207, '72', 'KABUPATEN BUOL'),
(7208, '72', 'KABUPATEN PARIGI MOUTONG'),
(7209, '72', 'KABUPATEN TOJO UNA-UNA'),
(7210, '72', 'KABUPATEN SIGI'),
(7211, '72', 'KABUPATEN BANGGAI LAUT'),
(7212, '72', 'KABUPATEN MOROWALI UTARA'),
(7271, '72', 'KOTA PALU'),
(7301, '73', 'KABUPATEN KEPULAUAN SELAYAR'),
(7302, '73', 'KABUPATEN BULUKUMBA'),
(7303, '73', 'KABUPATEN BANTAENG'),
(7304, '73', 'KABUPATEN JENEPONTO'),
(7305, '73', 'KABUPATEN TAKALAR'),
(7306, '73', 'KABUPATEN GOWA'),
(7307, '73', 'KABUPATEN SINJAI'),
(7308, '73', 'KABUPATEN MAROS'),
(7309, '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
(7310, '73', 'KABUPATEN BARRU'),
(7311, '73', 'KABUPATEN BONE'),
(7312, '73', 'KABUPATEN SOPPENG'),
(7313, '73', 'KABUPATEN WAJO'),
(7314, '73', 'KABUPATEN SIDENRENG RAPPANG'),
(7315, '73', 'KABUPATEN PINRANG'),
(7316, '73', 'KABUPATEN ENREKANG'),
(7317, '73', 'KABUPATEN LUWU'),
(7318, '73', 'KABUPATEN TANA TORAJA'),
(7322, '73', 'KABUPATEN LUWU UTARA'),
(7325, '73', 'KABUPATEN LUWU TIMUR'),
(7326, '73', 'KABUPATEN TORAJA UTARA'),
(7371, '73', 'KOTA MAKASSAR'),
(7372, '73', 'KOTA PAREPARE'),
(7373, '73', 'KOTA PALOPO'),
(7401, '74', 'KABUPATEN BUTON'),
(7402, '74', 'KABUPATEN MUNA'),
(7403, '74', 'KABUPATEN KONAWE'),
(7404, '74', 'KABUPATEN KOLAKA'),
(7405, '74', 'KABUPATEN KONAWE SELATAN'),
(7406, '74', 'KABUPATEN BOMBANA'),
(7407, '74', 'KABUPATEN WAKATOBI'),
(7408, '74', 'KABUPATEN KOLAKA UTARA'),
(7409, '74', 'KABUPATEN BUTON UTARA'),
(7410, '74', 'KABUPATEN KONAWE UTARA'),
(7411, '74', 'KABUPATEN KOLAKA TIMUR'),
(7412, '74', 'KABUPATEN KONAWE KEPULAUAN'),
(7413, '74', 'KABUPATEN MUNA BARAT'),
(7414, '74', 'KABUPATEN BUTON TENGAH'),
(7415, '74', 'KABUPATEN BUTON SELATAN'),
(7471, '74', 'KOTA KENDARI'),
(7472, '74', 'KOTA BAUBAU'),
(7501, '75', 'KABUPATEN BOALEMO'),
(7502, '75', 'KABUPATEN GORONTALO'),
(7503, '75', 'KABUPATEN POHUWATO'),
(7504, '75', 'KABUPATEN BONE BOLANGO'),
(7505, '75', 'KABUPATEN GORONTALO UTARA'),
(7571, '75', 'KOTA GORONTALO'),
(7601, '76', 'KABUPATEN MAJENE'),
(7602, '76', 'KABUPATEN POLEWALI MANDAR'),
(7603, '76', 'KABUPATEN MAMASA'),
(7604, '76', 'KABUPATEN MAMUJU'),
(7605, '76', 'KABUPATEN MAMUJU UTARA'),
(7606, '76', 'KABUPATEN MAMUJU TENGAH'),
(8101, '81', 'KABUPATEN MALUKU TENGGARA BARAT'),
(8102, '81', 'KABUPATEN MALUKU TENGGARA'),
(8103, '81', 'KABUPATEN MALUKU TENGAH'),
(8104, '81', 'KABUPATEN BURU'),
(8105, '81', 'KABUPATEN KEPULAUAN ARU'),
(8106, '81', 'KABUPATEN SERAM BAGIAN BARAT'),
(8107, '81', 'KABUPATEN SERAM BAGIAN TIMUR'),
(8108, '81', 'KABUPATEN MALUKU BARAT DAYA'),
(8109, '81', 'KABUPATEN BURU SELATAN'),
(8171, '81', 'KOTA AMBON'),
(8172, '81', 'KOTA TUAL'),
(8201, '82', 'KABUPATEN HALMAHERA BARAT'),
(8202, '82', 'KABUPATEN HALMAHERA TENGAH'),
(8203, '82', 'KABUPATEN KEPULAUAN SULA'),
(8204, '82', 'KABUPATEN HALMAHERA SELATAN'),
(8205, '82', 'KABUPATEN HALMAHERA UTARA'),
(8206, '82', 'KABUPATEN HALMAHERA TIMUR'),
(8207, '82', 'KABUPATEN PULAU MOROTAI'),
(8208, '82', 'KABUPATEN PULAU TALIABU'),
(8271, '82', 'KOTA TERNATE'),
(8272, '82', 'KOTA TIDORE KEPULAUAN'),
(9101, '91', 'KABUPATEN FAKFAK'),
(9102, '91', 'KABUPATEN KAIMANA'),
(9103, '91', 'KABUPATEN TELUK WONDAMA'),
(9104, '91', 'KABUPATEN TELUK BINTUNI'),
(9105, '91', 'KABUPATEN MANOKWARI'),
(9106, '91', 'KABUPATEN SORONG SELATAN'),
(9107, '91', 'KABUPATEN SORONG'),
(9108, '91', 'KABUPATEN RAJA AMPAT'),
(9109, '91', 'KABUPATEN TAMBRAUW'),
(9110, '91', 'KABUPATEN MAYBRAT'),
(9111, '91', 'KABUPATEN MANOKWARI SELATAN'),
(9112, '91', 'KABUPATEN PEGUNUNGAN ARFAK'),
(9171, '91', 'KOTA SORONG'),
(9401, '94', 'KABUPATEN MERAUKE'),
(9402, '94', 'KABUPATEN JAYAWIJAYA'),
(9403, '94', 'KABUPATEN JAYAPURA'),
(9404, '94', 'KABUPATEN NABIRE'),
(9408, '94', 'KABUPATEN KEPULAUAN YAPEN'),
(9409, '94', 'KABUPATEN BIAK NUMFOR'),
(9410, '94', 'KABUPATEN PANIAI'),
(9411, '94', 'KABUPATEN PUNCAK JAYA'),
(9412, '94', 'KABUPATEN MIMIKA'),
(9413, '94', 'KABUPATEN BOVEN DIGOEL'),
(9414, '94', 'KABUPATEN MAPPI'),
(9415, '94', 'KABUPATEN ASMAT'),
(9416, '94', 'KABUPATEN YAHUKIMO'),
(9417, '94', 'KABUPATEN PEGUNUNGAN BINTANG'),
(9418, '94', 'KABUPATEN TOLIKARA'),
(9419, '94', 'KABUPATEN SARMI'),
(9420, '94', 'KABUPATEN KEEROM'),
(9426, '94', 'KABUPATEN WAROPEN'),
(9427, '94', 'KABUPATEN SUPIORI'),
(9428, '94', 'KABUPATEN MAMBERAMO RAYA'),
(9429, '94', 'KABUPATEN NDUGA'),
(9430, '94', 'KABUPATEN LANNY JAYA'),
(9431, '94', 'KABUPATEN MAMBERAMO TENGAH'),
(9432, '94', 'KABUPATEN YALIMO'),
(9433, '94', 'KABUPATEN PUNCAK'),
(9434, '94', 'KABUPATEN DOGIYAI'),
(9435, '94', 'KABUPATEN INTAN JAYA'),
(9436, '94', 'KABUPATEN DEIYAI'),
(9471, '94', 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jurusan_pendidikan`
--
ALTER TABLE `jurusan_pendidikan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD UNIQUE KEY `lampiran` (`lampiran`),
  ADD KEY `id_pelamar` (`id_pelamar`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_bidang` (`id_jurusan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `notifikasi_lamaran`
--
ALTER TABLE `notifikasi_lamaran`
  ADD PRIMARY KEY (`id_lamaran`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`),
  ADD UNIQUE KEY `email` (`username`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_bidang` (`id_jurusan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD UNIQUE KEY `email` (`username`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `tb_kabkota`
--
ALTER TABLE `tb_kabkota`
  ADD PRIMARY KEY (`id_kabkota`),
  ADD KEY `regencies_province_id_index` (`id_provinsi`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jurusan_pendidikan`
--
ALTER TABLE `jurusan_pendidikan`
  MODIFY `id_jurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id_lamaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1034;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `FK_lowonganKabkota` FOREIGN KEY (`id_kota`) REFERENCES `tb_kabkota` (`id_kabkota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_lowonganPerusahaan` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lowongan_ibfk_4` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `notifikasi_lamaran`
--
ALTER TABLE `notifikasi_lamaran`
  ADD CONSTRAINT `FK_lamaranNotifikasi` FOREIGN KEY (`id_lamaran`) REFERENCES `lamaran` (`id_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD CONSTRAINT `FK_pelamarJurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan_pendidikan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pelamarKabkota` FOREIGN KEY (`id_kota`) REFERENCES `tb_kabkota` (`id_kabkota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `FK_perusahaanKabkota` FOREIGN KEY (`id_kota`) REFERENCES `tb_kabkota` (`id_kabkota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kabkota`
--
ALTER TABLE `tb_kabkota`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
