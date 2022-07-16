-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 07 Jul 2022 pada 19.55
-- Versi server: 5.7.34
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_stli`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `tunj_timesheet` varchar(100) NOT NULL,
  `hm` varchar(150) NOT NULL,
  `pot_absensi` varchar(100) NOT NULL,
  `bpjs_tk` varchar(150) NOT NULL,
  `bpjs_kes` varchar(100) NOT NULL,
  `pot_admin` varchar(50) NOT NULL,
  `mcu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `id_pekerjaan`, `tunj_timesheet`, `hm`, `pot_absensi`, `bpjs_tk`, `bpjs_kes`, `pot_admin`, `mcu`) VALUES
(1, 2, '3000000', '100', '1000000', '37500', '37500', '2000000', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`) VALUES
(2, 'Teknisi Alat', '5000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lambung`
--

CREATE TABLE `lambung` (
  `id_lambung` int(11) NOT NULL,
  `nama_lambung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lambung`
--

INSERT INTO `lambung` (`id_lambung`, `nama_lambung`) VALUES
(1, 'Ulin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`) VALUES
(1, 'Sebamban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manpower`
--

CREATE TABLE `manpower` (
  `id_manpower` int(11) NOT NULL,
  `nik` varchar(35) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `email` varchar(75) NOT NULL,
  `no_rekening` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `manpower`
--

INSERT INTO `manpower` (`id_manpower`, `nik`, `nama`, `id_jabatan`, `no_hp`, `email`, `no_rekening`) VALUES
(3, '637123993299910', 'Marlina', 2, '089570110731323', 'marlina@gmail.com', '12312312312312'),
(4, '6346011107960002', 'Nugraha', 2, '0895701121222', 'nugrah@gmail.com', '123123129988');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `id_manpower` int(11) NOT NULL,
  `tot_hadir` varchar(25) NOT NULL,
  `tot_hm` varchar(25) NOT NULL,
  `jum_alpa` varchar(25) NOT NULL,
  `jum_ijin` varchar(25) NOT NULL,
  `jum_hadir` varchar(25) NOT NULL,
  `tanggal_pekerjaan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `id_manpower`, `tot_hadir`, `tot_hm`, `jum_alpa`, `jum_ijin`, `jum_hadir`, `tanggal_pekerjaan`) VALUES
(2, 3, '1', '1', '1', '1', '1', '2022-07-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pph`
--

CREATE TABLE `pph` (
  `id_pph` int(11) NOT NULL,
  `tanggal_pph` varchar(100) NOT NULL,
  `id_lambung` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `keterangan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pph`
--

INSERT INTO `pph` (`id_pph`, `tanggal_pph`, `id_lambung`, `id_lokasi`, `keterangan`) VALUES
(2, '2022-07-09', 1, 1, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_manpower` int(11) NOT NULL,
  `tanggal_presensi` varchar(100) NOT NULL,
  `absensi` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_manpower`, `tanggal_presensi`, `absensi`, `keterangan`) VALUES
(2, 4, '2022-07-08', 'Hadir', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_manpower` int(11) NOT NULL,
  `id_lambung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `id_lokasi`, `id_unit`, `id_manpower`, `id_lambung`) VALUES
(1, 1, 1, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `timesheet`
--

CREATE TABLE `timesheet` (
  `id_timesheet` int(11) NOT NULL,
  `tanggal_timesheet` varchar(25) NOT NULL,
  `id_manpower` int(11) NOT NULL,
  `id_lambung` int(11) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `hm_awal` varchar(25) NOT NULL,
  `hm_akhir` varchar(26) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `timesheet`
--

INSERT INTO `timesheet` (`id_timesheet`, `tanggal_timesheet`, `id_manpower`, `id_lambung`, `shift`, `hm_awal`, `hm_akhir`, `jumlah`, `job`) VALUES
(3, '2022-07-07', 4, 1, '1 Siang', '2', '3', '3', 'Teknisi'),
(4, '2022-07-28', 3, 1, '2 Siang', '1', '2', '3', 'Teknisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
(1, 'Pemeliharaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(5, 'ho', 'b5d9b59113086d3f9f9f108adaaa9ab5', 'HO/HOD'),
(6, 'hod', '17d84f171d54c301fabae1391a125c4e', 'HO/HOD'),
(7, 'opr', '05b8e35f93bc745e61dd7e2cd1f57880', 'OPR/DRIVER'),
(8, 'driver', 'e2d45d57c7e2941b65c6ccd64af4223e', 'OPR/DRIVER');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_pekerjaan` (`id_pekerjaan`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `lambung`
--
ALTER TABLE `lambung`
  ADD PRIMARY KEY (`id_lambung`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `manpower`
--
ALTER TABLE `manpower`
  ADD PRIMARY KEY (`id_manpower`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD KEY `id_manpower` (`id_manpower`);

--
-- Indeks untuk tabel `pph`
--
ALTER TABLE `pph`
  ADD PRIMARY KEY (`id_pph`),
  ADD KEY `id_lambung` (`id_lambung`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_manpower` (`id_manpower`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indeks untuk tabel `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`id_timesheet`),
  ADD KEY `id_manpower` (`id_manpower`),
  ADD KEY `id_lambung` (`id_lambung`);

--
-- Indeks untuk tabel `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lambung`
--
ALTER TABLE `lambung`
  MODIFY `id_lambung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `manpower`
--
ALTER TABLE `manpower`
  MODIFY `id_manpower` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pph`
--
ALTER TABLE `pph`
  MODIFY `id_pph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `id_timesheet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
