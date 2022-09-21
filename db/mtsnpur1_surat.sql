-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2022 at 10:00 AM
-- Server version: 10.2.31-MariaDB-cll-lve
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtsnpur1_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bagian`
--

CREATE TABLE `tbl_bagian` (
  `id_bagian` int(10) NOT NULL,
  `nama_bagian` text DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `pangkat` varchar(50) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bagian`
--

INSERT INTO `tbl_bagian` (`id_bagian`, `nama_bagian`, `nip`, `pangkat`, `id_user`) VALUES
(1, 'Ahmad Salam Wahid Faizin, S.Kom.', '199308082019031015', 'Penata Muda  / IIIa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diklat`
--

CREATE TABLE `tbl_diklat` (
  `id_diklat` int(10) NOT NULL,
  `id_sm` varchar(30) DEFAULT NULL,
  `id_bagian` int(10) DEFAULT NULL,
  `jenis_diklat` text DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `tgl_awal` varchar(12) DEFAULT NULL,
  `tgl_akhir` varchar(12) DEFAULT NULL,
  `lama` varchar(10) DEFAULT NULL,
  `token_lampiran` text DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lampiran`
--

CREATE TABLE `tbl_lampiran` (
  `id_lampiran` int(10) NOT NULL,
  `token_lampiran` varchar(100) NOT NULL,
  `nama_berkas` text DEFAULT NULL,
  `ukuran` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lampiran`
--

INSERT INTO `tbl_lampiran` (`id_lampiran`, `token_lampiran`, `nama_berkas`, `ukuran`) VALUES
(1, 'a9c95b71e504c14a62eecaf72285d31d', '2022-08-07_SM_1659884027.pdf', '122.72'),
(2, '8ebe6294441df39b737a0e73213bd82a', '2022-08-15_SK_1660574668.pdf', '100.71'),
(3, 'be1ca52dd58c1f463b1e2ef8d4565e10', '2022-08-17_SM_1660753033.pdf', '100.71');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_madrasah`
--

CREATE TABLE `tbl_madrasah` (
  `id` int(2) NOT NULL,
  `nm_kepala` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `madrasah` varchar(100) DEFAULT NULL,
  `npsn` varchar(20) DEFAULT NULL,
  `nsm` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tapel` varchar(20) DEFAULT NULL,
  `kop_1` text DEFAULT NULL,
  `kop_2` text DEFAULT NULL,
  `telp` text DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_madrasah`
--

INSERT INTO `tbl_madrasah` (`id`, `nm_kepala`, `nip`, `jabatan`, `madrasah`, `npsn`, `nsm`, `alamat`, `tapel`, `kop_1`, `kop_2`, `telp`, `id_user`) VALUES
(1, 'Wahyu Tri Wijayanto, S.Pd.', '196805301994031002', 'Kepala Madrasah', 'MADRASAH TSANAWIYAH NEGERI 3 PURWOREJO', '20363623', '121133060003', '1. Jl, Magelang Km.09 Purworejo\r\n2. Desa Banyuasin Kembaran, Kec. Loano, Kab. Purworejo', '2022/2023', 'KEMENTRIAN AGAMA REPUBLIK INDONESIA', 'KANTOR KEMENTERIAN AGAMA KABUPATEN PURWOREJO', 'e-mail : mtsnloano@kemenag.go.id   Website : mtsn3purworejo.sch.id ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(4) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nm_siswa` varchar(255) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `jurusan` varchar(10) DEFAULT NULL,
  `nm_ort` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_user` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nim`, `nisn`, `nm_siswa`, `ttl`, `kelas`, `jurusan`, `nm_ort`, `alamat`, `id_user`) VALUES
(2, '1211306000223345', '21348979', 'Siswa Coba', 'Purworejo, 09 Septermber 2009', 'VII', 'A', 'Wahyu Kurniawan', 'Loano', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sk`
--

CREATE TABLE `tbl_sk` (
  `id_sk` int(10) NOT NULL,
  `id_surat` varchar(20) DEFAULT NULL,
  `tgl_id_surat` varchar(12) DEFAULT NULL,
  `no_surat` text DEFAULT NULL,
  `tgl_sk` varchar(12) DEFAULT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `perihal` text DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `token_lampiran` text DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `pelaksana` varchar(255) DEFAULT NULL,
  `bagian` varchar(255) DEFAULT NULL,
  `peringatan` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sk`
--

INSERT INTO `tbl_sk` (`id_sk`, `id_surat`, `tgl_id_surat`, `no_surat`, `tgl_sk`, `kode`, `perihal`, `tujuan`, `token_lampiran`, `id_user`, `pelaksana`, `bagian`, `peringatan`) VALUES
(1, '001', '2022-08-15', '01.004/SMA-SM/V/2018', '2022-08-15', 'PP.02', 'Pelaksanaan KSM Kabupaten', 'Kemenag Purworejo', '8ebe6294441df39b737a0e73213bd82a', 2, 'Arsip', 'Kepala TU', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ska`
--

CREATE TABLE `tbl_ska` (
  `id_ska` int(10) NOT NULL,
  `id_siswa` int(10) DEFAULT NULL,
  `nomor_ska` varchar(4) DEFAULT NULL,
  `no_ska` varchar(100) DEFAULT NULL,
  `jenis_ska` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl_ska` varchar(100) DEFAULT NULL,
  `id_user` int(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `ttd` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ska`
--

INSERT INTO `tbl_ska` (`id_ska`, `id_siswa`, `nomor_ska`, `no_ska`, `jenis_ska`, `keterangan`, `tgl_ska`, `id_user`, `date`, `ttd`) VALUES
(1, 1, '009', 'MA-SM/V/2022', '1', 'kegiatan paskibraka kabupaten', 'Purworejo, 08 Agustus 2022', 2, '2022-08-17 23:15:23', '3'),
(2, 2, '011', 'Mts.06.03/PP.00./09/2022', '2', 'mengikuti lomba karya ilmiah MOUSE', 'Purworejo, 14 September 2022', 3, '2022-09-21 09:15:37', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sm`
--

CREATE TABLE `tbl_sm` (
  `id_sm` int(10) NOT NULL,
  `no_surat` text DEFAULT NULL,
  `tgl_ns` varchar(12) DEFAULT NULL,
  `no_asal` text DEFAULT NULL,
  `tgl_no_asal` varchar(12) DEFAULT NULL,
  `pengirim` text DEFAULT NULL,
  `penerima` text DEFAULT NULL,
  `perihal` text DEFAULT NULL,
  `token_lampiran` varchar(100) DEFAULT NULL,
  `bagian` varchar(255) DEFAULT NULL,
  `disposisi` text DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `tgl_sm` varchar(12) DEFAULT NULL,
  `lampiran` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `sifat` varchar(20) DEFAULT NULL,
  `dibaca` int(1) DEFAULT NULL,
  `tgl_ajuan` varchar(20) DEFAULT NULL,
  `segera` text DEFAULT NULL,
  `biasa` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `tgl_disposisi` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sm`
--

INSERT INTO `tbl_sm` (`id_sm`, `no_surat`, `tgl_ns`, `no_asal`, `tgl_no_asal`, `pengirim`, `penerima`, `perihal`, `token_lampiran`, `bagian`, `disposisi`, `id_user`, `tgl_sm`, `lampiran`, `status`, `sifat`, `dibaca`, `tgl_ajuan`, `segera`, `biasa`, `catatan`, `tgl_disposisi`) VALUES
(1, '001', '07-08-2022', '01.004/SMA-SM/V/2018', '2022-07-01', 'Kemenag Sungsel', 'PP.01', 'Pelaksanaan KSM Kabupaten', 'a9c95b71e504c14a62eecaf72285d31d', 'Guru', 'Deni Kurniawan, S. Pd.', 2, '2022-08-07', '1 Lampiran', 'Asli', 'Segera', 3, '2022-08-07', 'Tindak lanjuti', 'Bicarakan dengan saya', '-', '2022-08-07 21:57:32'),
(2, '002', '17-08-2022', '01.004/SMA-SM/V/2022', '2022-08-16', 'Perpusda', 'PP.00', 'Pelaksaan Bazar Buku Pendidikan', 'be1ca52dd58c1f463b1e2ef8d4565e10', 'Kepala Perpustakaan', 'Deni Kurniawan, S. Pd.', 2, '2022-08-17', '1 Lampiran', 'Asli', 'Segera', 3, '2022-08-17', 'Tindak lanjuti<br>Setuju<br>Edarkan', 'Bicarakan dengan saya<br>Bicarakan bersama', 'Menghadap saya dan melakukan koordinasi', '2022-08-17 23:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `pengalaman` text DEFAULT NULL,
  `level` enum('s_admin','admin','user','ktu','kepala') DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `tgl_daftar` varchar(20) DEFAULT NULL,
  `terakhir_login` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `alamat`, `telp`, `pengalaman`, `level`, `status`, `tgl_daftar`, `terakhir_login`) VALUES
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'user@gmail.com', 'Jl. Magelang Km.09 Purworejo', '0', '-', 'user', 'aktif', '21-09-2022 07:53:49', '21-09-2022 08:57:13'),
(2, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas', 'petugas@gmail.com', 'Jl. Magelang Km.09 Purworejo', '0', '-', 'admin', 'aktif', '21-09-2022 07:54:02', '21-09-2022 09:54:20'),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@gmail.com', 'Jl. Magelang Km.09 Purworejo', '0', '-', 's_admin', 'aktif', '07-08-2022 17:03:12', '21-09-2022 09:59:15'),
(4, 'ktu', '2e18bc3df6490504a467d30c1541bdfb', 'Apri Irawan Wibowo, S.Sos, MM.', 'ktu@gmail.com', 'Jl. Magelang Km.09 Purworejo', '0', '-', 'ktu', 'aktif', '21-09-2022 07:53:36', '21-09-2022 08:04:42'),
(5, 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', 'Wahyu Tri Wijayanto, S.Pd.', 'kepala@gmail.com', 'Jl. Magelang Km.09 Purworejo', '0', '-', 'kepala', 'aktif', '21-09-2022 07:53:00', '21-09-2022 08:04:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `tbl_diklat`
--
ALTER TABLE `tbl_diklat`
  ADD PRIMARY KEY (`id_diklat`);

--
-- Indexes for table `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `tbl_madrasah`
--
ALTER TABLE `tbl_madrasah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `tbl_ska`
--
ALTER TABLE `tbl_ska`
  ADD PRIMARY KEY (`id_ska`);

--
-- Indexes for table `tbl_sm`
--
ALTER TABLE `tbl_sm`
  ADD PRIMARY KEY (`id_sm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bagian`
--
ALTER TABLE `tbl_bagian`
  MODIFY `id_bagian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_diklat`
--
ALTER TABLE `tbl_diklat`
  MODIFY `id_diklat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lampiran`
--
ALTER TABLE `tbl_lampiran`
  MODIFY `id_lampiran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_madrasah`
--
ALTER TABLE `tbl_madrasah`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  MODIFY `id_sk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ska`
--
ALTER TABLE `tbl_ska`
  MODIFY `id_ska` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sm`
--
ALTER TABLE `tbl_sm`
  MODIFY `id_sm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
