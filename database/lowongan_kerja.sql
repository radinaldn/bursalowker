-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2018 at 11:29 AM
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
(10, 'testes', '$2a$10$fpFOXN4VQn1WVJiGT7NmUObi1tyHhLQmJkc/PzW2lgRmicX9VIOny', 'tes aja', '2018-03-23', 'admin');

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
(40, 30, 21, '2016-08-04', 'PassCitSuper.rar', 'Proses'),
(41, 30, 22, '2016-08-05', 'lamaran_teknisi.rar', 'Proses'),
(48, 35, 27, '2016-08-09', 'portal - Copy.rar', 'Proses'),
(49, 35, 28, '2016-08-09', 'sarah.rar', 'Proses'),
(50, 35, 26, '2016-08-09', 'sarah2.rar', 'Proses'),
(54, 30, 28, '2016-08-09', 'sabila.rar', 'Proses'),
(55, 30, 25, '2016-08-09', 'sabila - Copy.rar', 'Proses'),
(56, 36, 29, '2016-08-10', 'hafizh.rar', 'Proses'),
(57, 30, 29, '2016-08-10', 'nur.rar', 'Proses'),
(104, 37, 35, '2018-02-21', '37-35.zip', 'Ditolak'),
(105, 37, 36, '2018-02-21', '37-36.zip', 'Diterima'),
(106, 37, 32, '2018-02-21', '37-32.zip', 'Diterima'),
(107, 37, 31, '2018-02-22', '37-31.zip', 'Ditolak'),
(108, 37, 34, '2018-02-22', '37-34.zip', 'Ditolak'),
(109, 37, 39, '2018-03-02', '37-39.zip', 'Diterima'),
(110, 37, 41, '2018-03-06', '37-41.zip', 'Diterima'),
(113, 39, 42, '2018-03-23', '39-42.zip', 'Diterima'),
(114, 39, 43, '2018-03-24', '39-43.zip', 'Ditolak'),
(115, 44, 44, '2018-03-24', '44-44.zip', 'Ditolak'),
(116, 37, 45, '2018-03-25', '37-45.zip', 'Diterima'),
(117, 37, 46, '2018-03-25', '37-46.zip', 'Diterima'),
(118, 37, 47, '2018-03-28', '45-47.zip', 'Diterima'),
(119, 37, 48, '2018-04-01', '37-48.zip', 'Ditolak'),
(120, 46, 48, '2018-04-03', '46-48.zip', 'Ditolak'),
(121, 46, 49, '2018-04-03', '46-49.zip', 'Diterima');

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
(21, 1, 1016, 84, 2, '2016-08-04', 'Web Desain', 'Kontrak', 'Mendesain web dinamis.', 'Minimal sudah berpengalaman pada bidangnya selama 1 tahun.', '2.000.000-3.000.000', '40', 'L/P', '2016-09-06', 'Publik', '0000-00-00'),
(22, 1, 1016, 101, 4, '2016-08-05', 'Teknisi Komputer', 'Kontrak', 'Memperbaiki komputer yang rusak.', 'Berpengalaman minimal 1 tahun pada bidangnya.', '1.000.000-2.000.000', '35', 'L', '2016-10-09', 'Publik', '0000-00-00'),
(25, 2, 1016, 135, 6, '2016-08-06', 'Sales', 'Freelance', 'Menjual barang elektronik.', 'Berpenampilan menarik dan siap bekerja keras.', 'UMR', '30', 'P', '2016-11-15', 'Publik', '0000-00-00'),
(26, 4, 1020, 152, 25, '2016-08-09', 'Asisten Kepala Kebun', 'Kontrak', 'Membantu kepala kebun dalam berkebun', 'Minimal Sarjana, berpengalaman 1 tahun.', 'Rahasia', '35', 'L/P', '2016-12-15', 'Publik', '0000-00-00'),
(27, 3, 1020, 92, 7, '2016-08-09', 'Staff Keuangan', 'Tetap', 'Membuat buku keuangan per periode', 'Minimal D3, berpengalaman 2 tahun.', '2.000.000-3.000.000', '35', 'P', '2016-10-12', 'Publik', '0000-00-00'),
(28, 6, 1020, 89, 21, '2016-08-09', 'Rekam Medis', 'Magang', 'Membantu dokter dalam merekam medis', 'Berpengalaman 2 tahun pada bidangnya.', 'UMR', '30', 'P', '2016-10-05', 'Publik', '0000-00-00'),
(29, 1, 1021, 108, 1, '2016-08-10', 'Programmer Java', 'Kontrak', 'Membuat program berbasis desktop', 'Memiliki sertifikat bahasa inggris, berpengalaman bidang programer 2 tahun.', '3.000.000-5.000.000', '30', 'L', '2016-10-12', 'Publik', '0000-00-00'),
(30, 3, 1021, 108, 7, '2016-08-10', 'Akuntansi', 'Tetap', 'Membuat laporan keuangan.', 'Berpengalaman minimal 2 tahun.', '2.000.000-3.000.000', '35', 'P', '2016-10-15', 'Publik', '0000-00-00'),
(31, 1, 1023, 1, 30, '2018-02-21', 'Programmerr', 'Kontrak', 'Dibuka lowongan untuk programmer senior, kontrak. ', 'Min S1, pengalaman 2 tahun.', '5.000.000 - 10.000.000', '30', 'L', '2018-02-28', 'Publik', '0000-00-00'),
(32, 10, 1023, 1, 30, '2018-02-21', 'Montir mesin utama', 'Kontrak', 'Dibuka lowongan untuk pekerja keras yang berpengalaman, gila kerja, mantap.', 'Min D3, pengalaman 3 tahun.', '500.000-1.000.000', '40', 'L', '2018-02-22', 'Publik', '0000-00-00'),
(34, 2, 1023, 1, 30, '2018-02-21', 'Mantap', 'mantap', 'mantap', 'mantap', 'mantap', '0', 'L/P', '2018-02-23', 'Publik', '0000-00-00'),
(35, 8, 1024, 153, 30, '2018-02-21', 'Operator', 'Kontrak', 'Dicari pria berpengalaman mengoperasikan alat berat. Pekerja keras, jujur.', 'Min S1, pengalaman 2 tahun.', '5.000.000 - 8.000.000', '30', 'L', '2018-02-28', 'Publik', '0000-00-00'),
(36, 1, 1024, 1, 30, '2018-02-21', 'Asik', 'w', 'w', 'w', 'w', '20', 'L', '2018-02-26', 'Publik', '0000-00-00'),
(37, 1, 1023, 153, 4, '2018-02-22', 'Programmer', 'Kontrak', 'asjdnasjkd', 'S1', '1jt', '20', 'L', '2018-02-23', 'Publik', '0000-00-00'),
(38, 1, 1023, 1, 30, '2018-03-02', 'Programmer', 'Kontrak', 'DIbuka lowongan untuk yang gila kerja', 'S1 muka lebih dari pas-pasan', '1.0000.0000', '30', 'L', '2018-03-03', 'Publik', '0000-00-00'),
(39, 4, 1023, 1, 30, '2018-03-02', 'Network Admin', 'Kontrak', 'Dibuka lowongan untuk yang tercepat', 'S1', '5.000.000', '25', 'L', '2018-03-03', 'Publik', '0000-00-00'),
(40, 1, 1023, 1, 30, '2018-03-06', 'Programmer', 'Kontrak', 'Dibuka lowongan blbablalbalblablalblablalblablalblablalb', 'S1', '1.000.000', '20', 'L', '2018-03-08', 'Publik', '0000-00-00'),
(41, 1, 1023, 1, 30, '2018-03-06', 'Programmer', 'kontrak', 'asas', 'Min S1, pengalaman 2 tahun.', '3000000', '20', 'L', '2018-03-06', 'Publik', '0000-00-00'),
(42, 8, 1025, 67, 4, '2018-03-22', 'Programmer', 'Kontrak', 'Dicari pekerja keras, bisa begadang. ngoding full day, no stop. makan mie 1 minggu. pake IDE notepad, open bahasa PHP, Java, C, Phyton.', 'S1', '90.000.000 - tak terhingg', '60', 'L', '2018-03-29', 'Publik', '0000-00-00'),
(43, 1, 1025, 66, 4, '2018-03-24', 'Teknisi bongkar super komputer', 'Kontrak', 'Dicari pekerja keras, diutamakan yang masih lajang. Siap lembur, ada bonus. Paham hardware, CPU, RAM, HDD. Makan indomie minum kopi luwak.', 'S1, pengalaman 2 tahun.', '100.000.000 - 200.000.000', '35', 'L', '2018-03-25', 'Publik', '0000-00-00'),
(44, 9, 1025, 33, 5, '2018-03-24', 'Mandor gedung pencakar langit', 'Kontrak', 'Dicari pekerja keras, pemimpin yang bagus, kritis, disiplin, dapat bekerja sama.', 'S1', '10.000.000 - 11.000.000', '30', 'L', '2018-03-31', 'Publik', '0000-00-00'),
(45, 10, 1025, 2, 30, '2018-03-25', 'Montir', 'Kontrak', 'Dicari blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla ', 'S1', '100.000.000 - 200.000.000', '30', 'L', '2018-03-27', 'Publik', '0000-00-00'),
(46, 1, 1025, 1, 30, '2018-03-25', 'Montir', 'Kontrak', 'Dibuka blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla ', 'Min S1, pengalaman 2 tahun.', '100.000.000 - 200.000.000', '30', 'L', '2018-03-27', 'Publik', '0000-00-00'),
(47, 10, 1025, 67, 30, '2018-03-28', 'Montir', 'Kontrak', 'Dibuka blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla blabla ', 'S1, pengalaman 2 tahun.', '100.000.000 - 200.000.000', '30', 'L', '2018-03-29', 'Publik', '2018-03-31'),
(48, 9, 1025, 2, 30, '2018-04-01', 'asdkjn', 'knasdn', 'asndkjnasdjkn', 'kaskdjnkj', '123123', '30', 'L', '2018-12-31', 'Publik', '0000-00-00'),
(49, 8, 1025, 67, 30, '2018-04-03', 'Montir', 'Kontrak', 'Blablablablalbalbalblablablablbal', 'S1', '500.000-600.000', '30', 'L', '2018-04-10', 'Publik', '0000-00-00');

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
(104, '2018-03-25 12:16:38', 0),
(105, '2018-03-25 12:16:47', 0),
(113, '2018-03-23 15:17:28', 1),
(114, '2018-03-24 10:28:38', 0),
(115, '2018-03-24 19:17:13', 0),
(116, '2018-03-25 12:14:51', 0),
(117, '2018-03-25 17:32:30', 0),
(118, '2018-03-30 23:17:24', 0),
(119, '2018-04-01 12:09:17', 0),
(120, '2018-04-03 11:18:58', 0),
(121, '2018-04-03 11:24:03', 0);

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
(30, 108, 1, 'sabilanur@ymail.com', '1234567', '3311232332123498', '2016-08-04', 'Sabila Nur Khodijah', 'P', '1993-08-09', 'Jl. Waringin Karangbendo 64 ', '081345676567', 'yui.jpg', 'pelamar', 0),
(32, 92, 21, 'mario@yahoo.com', '1234567', '3311232332123459', '2016-08-09', 'Mario Maurer', 'L', '1994-09-12', 'Jl. Tasikraya 12 - Pasut ', '081345676598', 'mario-maurer-profile.jpg', 'pelamar', 0),
(34, 96, 21, 'nisanur@gmail.com', '1234567', '3311232332123490', '2016-08-09', 'Nisa Nur', 'P', '1993-08-12', 'Jl. Mawar 23 - Kuris ', '081314031557', 'images-3.jpeg', '', 0),
(35, 103, 25, 'sarahisan@yahoo.com', '1234567', '3311232332123480', '2016-08-09', 'Sarah Azhar', 'P', '1980-09-09', 'Jl. Jumanji 45 - Lampak ', '081345676511', 'images-2.jpeg', '', 0),
(36, 108, 7, 'hafizh93@ymail.com', '1234567', '3311232332123499', '2016-08-10', 'Abdul Hafizh', 'L', '1990-08-10', 'Jl. mutiara raya 12 - Cawas ', '081345676523', 'images-1.jpeg', 'pelamar', 0),
(37, 153, 30, 'dinal@mail.com', '$2a$10$oVawfrfCYUbp6IvHH440dexIMVlBtnAkM3teGkLRFxuytqzxuBBQ6', '1234567890', '2018-02-19', 'Dinal aja', 'L', '1990-08-17', 'JL. Garuda Sakti', '081300000000', 'index.html', 'pelamar', 386016720),
(38, 1, 1, 'testing', '$2a$10$ZVo1z3ODr7Y5pTkyjZphiO6N9szg6TfIjAR3ezWLJAqVZmBmr.P7G', '1231', '2018-03-22', 'testing', 'L', '1990-02-12', 'testing', '012', 'photo_2018-01-17_06-17-34.jpg', 'pelamar', 0),
(39, 37, 4, 'dian', '$2a$10$nTQBzGjfCZ4sMvjeFuafL.xz/SBXMyEkh.kVqZT6Zpo25pukwJ/Wa', '11431121076', '2018-03-22', 'Dian Afrian', 'L', '1990-12-11', 'Jl Garuda Sakti', '081212121212', 'photo_2018-02-04_22-54-16.jpg', 'pelamar', 347641895),
(40, 37, 4, 'dian2', '$2a$10$D1y/6DYwokDOwg46eHy6e.gOYMnEnW7dsCSsVUoyv6Y0lk3uCV4Fm', '11431121076', '2018-03-22', 'Dian Afrian', 'L', '1990-12-11', 'Jl Garuda Sakti', '081212121212', 'photo_2018-02-04_22-54-16.jpg', '', 0),
(42, 1, 1, '1234', '$2a$10$50RzS5mZfHTkc4il6nORNOtROouh85XmWCT0687dIM0AUFOduuMh6', '123', '2018-03-23', '123', 'L', '1990-12-12', '123', '123', 'photo_2018-01-17_06-17-49.jpg', '', 0),
(43, 1, 1, '12345', '$2a$10$69AwM6K/nIIHBOALO1td3uvpBB2DWbOdkkSegceiYFZYm.J7rGeD2', '123', '2018-03-23', '123', 'L', '1990-12-12', '123', '123', 'photo_2018-01-17_06-17-49.jpg', '', 0),
(44, 33, 5, 'rezaldi', '$2a$10$Fw3nEwEMYhZqD7n3LOC0CeiOn0X7GgVcPihnIFckInzjIQTmVX6oe', '11451131012', '2018-03-24', 'Rezaldi', 'L', '1990-01-01', 'Jl Cipta Karya', '081313131313', 'BarcodeQR.zip', 'pelamar', 414031463),
(45, 67, 30, 'iyal', '$2a$10$lon9wMLYVi/uk1v7F5xaTuYJtELuso1PbCGE2KSLYLqZXTt8Qron.', '11411111', '2018-03-28', 'iyal aja', 'L', '1990-12-08', 'Jl Garuda Sakti', '081300000000', 'login-real-count.png', 'pelamar', 168838163),
(46, 67, 30, 'amin', '$2a$10$eNzUbbREFLCItAu7FNf2OOcKbQCti.BMfTo01GEFVre.He/9r08kq', '131313131', '2018-04-03', 'Aminn', 'L', '1990-12-08', 'Jl Garuda Sakti', '081300000000', 'Screenshot from 2018-04-01 16-13-40.png', 'pelamar', 386016720);

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
(1016, 95, 'sukamaju@gmail.com', '1234567 ', '2016-08-04', 'PT Sukamaju ', 'Jl. Kemayoran 123 Blok A ', '021-68786859', 'www.sukamaju.com ', 'Sulis', '081314031555', 'perusahaan'),
(1017, 116, 'master@gmail.co.id', '1234567', '2016-08-09', 'PT Master', 'Jl. Melati Karang Wetan 12', '027-12228370', 'www.master.com', 'Agung', '081314031559', ''),
(1018, 50, 'nuansa@yahoo.com', '1234567', '2016-08-09', 'PT Nuansa', 'Jl. Kediri Mandura 13', '027-12228322', 'www.nuansa.com', 'Andre', '081345676561', ''),
(1019, 90, 'bahagia@gmail.com', '1234567', '2016-08-09', 'PT Bahagia', 'Jl. Jumandi Raya 99', '027-12228374', 'www.bahagia.com', 'Brian', '081314031554', 'perusahaan'),
(1020, 102, 'indoraya@yahoo.com', '1234567', '2016-08-09', 'PT Indoraya', 'Jl. Mutiara Agung 55 - Demen', '027-12228373', 'www.indoraya.com', 'Suroto', '081314031555', 'perusahaan'),
(1021, 108, 'setiabadi@gmail.com', '$2a$10$RsOwJ9qY3R40p.YUTyG1AuMtv2cSBwDhz/Kt3hkKGQ1fgyz2MjZRy', '2016-08-10', 'PT Setia Abadi', 'Jl. Karangbendo 12 - Kampis', '027-12228311', 'www.setiabadi.com', 'Ghani', '081314031555', 'perusahaan'),
(1022, 153, 'dinal@mantap.com', '$2a$10$WUp1b0dtadyTSykzSTKm7.FUZEZEBUkRo6FrFw9wZeEjEO/jurOJ2', '2018-02-19', 'PT Mantap', 'Jl Mantap', '081234567890', 'www.mantap.com', 'Masmantap', '081234567890', 'perusahaan'),
(1023, 116, 'tyo', '$2a$10$a2iFz9C1k5ZCldoURzWRwOk9BouitxNop4g0emLFvY79KfhZRW6dq', '2018-02-20', 'PT Gemblung', 'Jl Mantap', '0761123456', 'www.gemblung.com', 'Masmantap', '081234567890', 'perusahaan'),
(1024, 67, 'indragiri_foundation', '$2a$10$zTIkWDqiLDtMlGQGghn8NOgDEiSJSKBbEd6w.blV7lYpLOYnQbvhq', '2018-02-21', 'PT Indragiri Foundation', 'Jl. HR Subrantas', '0761123456', 'www.indragiri-foundation.org', 'Masrial', '081234567890', 'perusahaan'),
(1025, 26, 'bagong', '$2a$10$wI1w17PfA2tBWvwW61RjveRXV1munySx6Uair0P3Mh0klOAwIWAJK', '2018-03-22', 'PT Bagong Ntapjiwa', 'Jl. Onde mak', '021-123123', 'www.bagong-ntapjiwa.co', 'Nanang', '08132564121', 'perusahaan'),
(1027, 26, 'bagong2', '$2a$10$9Lt.Jg..ybOPa.pfR3dYz.J6aPEWVjGFgVCgFw116hUT0CeTBv4gi', '2018-03-22', 'PT Bagong Ntapjiwa', 'Jl. Onde mak', '021-123123', 'www.bagong-ntapjiwa.co', 'Nanang', '08132564121', ''),
(1028, 26, 'bagong3', '$2a$10$bsrHBm0svTahzDdhifyYqeBxDSTe3OtgKdlGj3Pzi15tyrn99nPU6', '2018-03-22', 'PT Bagong Ntapjiwa', 'Jl. Onde mak', '021-123123', 'www.bagong-ntapjiwa.co', 'Nanang', '08132564121', ''),
(1029, 26, 'bagong4', '$2a$10$knQuqVYjfr.pAefrhvBxWOSQ53zUyKO8Mt.tYHTX3KDG/JawC7hPO', '2018-03-22', 'PT Bagong Ntapjiwa', 'Jl. Onde mak', '021-123123', 'www.bagong-ntapjiwa.co', 'Nanang', '08132564121', ''),
(1030, 26, 'bagong5', '$2a$10$SrrNwir.ezU1H84BWEYE.eUKzHDBsaC/vfNjkmNxU61hRH2OVW/A2', '2018-03-22', 'PT Bagong Ntapjiwa', 'Jl. Onde mak', '021-123123', 'www.bagong-ntapjiwa.co', 'Nanang', '08132564121', ''),
(1031, 26, 'bagong6', '$2a$10$Gh3/XoZ2c2J7MSK5WEfCW.aP38AE8cjuzD1Ncmmh5VBBs79K9fqne', '2018-03-22', 'PT Bagong Ntapjiwa', 'Jl. Onde mak', '021-123123', 'www.bagong-ntapjiwa.co', 'Nanang', '08132564121', '');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id_lamaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `lamaran_ibfk_3` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamar` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `lowongan_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `lowongan_ibfk_3` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan_pendidikan` (`id_jurusan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `lowongan_ibfk_4` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `notifikasi_lamaran`
--
ALTER TABLE `notifikasi_lamaran`
  ADD CONSTRAINT `notifikasi_lamaran_ibfk_1` FOREIGN KEY (`id_lamaran`) REFERENCES `lamaran` (`id_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD CONSTRAINT `pelamar_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan_pendidikan` (`id_jurusan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pelamar_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
