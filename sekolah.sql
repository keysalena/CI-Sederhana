-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2024 pada 13.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(11) NOT NULL,
  `jurusan1` varchar(255) DEFAULT NULL,
  `jurusan2` varchar(255) DEFAULT NULL,
  `jurusan3` varchar(255) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `jurusan1`, `jurusan2`, `jurusan3`, `id_siswa`, `created_at`) VALUES
(1, 'Kriya Keramik', 'Kriya Tekstil', 'Tata Busana', NULL, '2024-03-22 12:08:12'),
(2, 'Rekayasa Perangkat Lunak', 'Teknik Komputer dan Jaringan', 'Multimedia', 14, '2024-03-22 12:14:27'),
(3, 'Kriya Tekstil', 'Kriya Keramik', 'Teknik Komputer dan Jaringan', 15, '2024-03-22 12:16:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orang_tua`
--

CREATE TABLE `tb_orang_tua` (
  `id` int(11) NOT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `alamat_ayah` text DEFAULT NULL,
  `no_hp_ayah` varchar(20) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `alamat_ibu` text DEFAULT NULL,
  `no_hp_ibu` varchar(20) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_orang_tua`
--

INSERT INTO `tb_orang_tua` (`id`, `nama_ayah`, `alamat_ayah`, `no_hp_ayah`, `pekerjaan_ayah`, `nama_ibu`, `alamat_ibu`, `no_hp_ibu`, `pekerjaan_ibu`, `id_siswa`, `created_at`) VALUES
(1, 'jsbf', 'jshdf', '29837', 'asas', 'jhdfs', 'jshdf', 'ksjhf', 'irt', NULL, '2024-03-22 12:08:12'),
(2, 'MIS', 'KARANGPLOSO', '0897657456', 'Buruh', 'YENI', 'KARANGPLOSO', '0986543456', 'IRT', 14, '2024-03-22 12:14:27'),
(3, 'MIS', 'jshdf', '085648464457', 'Petani', 'YENI', 'jshdf', '085648464457', 'Buruh', 15, '2024-03-22 12:16:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nisn` int(11) DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nisn`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `asal_sekolah`, `no_hp`, `created_at`) VALUES
(1, 7893, 'jsahd', 'jsahd', '2024-03-22', 'Katolik', 'Laki-laki', 'jsad', '837298', '2024-03-22 11:08:19'),
(2, 123123, 'ASDAdlskd', 'kajsnd', '2024-03-22', 'Hindu', 'Perempuan', 'aksjnd', '2834283', '2024-03-22 11:20:17'),
(3, 123123, 'ASDAdlskd', 'kajsnd', '2024-03-22', 'Hindu', 'Perempuan', 'aksjnd', '2834283', '2024-03-22 11:21:06'),
(4, 28364, 'hasgd', 'ajbsd', '2024-03-22', 'Kristen', 'Perempuan', 'ahdg', '723648', '2024-03-22 11:23:23'),
(5, 328364, 'kjsndaf', 'jasdh', '2024-03-22', 'Islam', 'Laki-laki', 'asnd', 'jashd', '2024-03-22 11:26:31'),
(6, 73264, 'jasd', 'ajsd', '2024-03-22', 'Katolik', 'Laki-laki', 'sd', 'asd', '2024-03-22 11:31:00'),
(7, 385, 'ashd', 'jasd', '2024-03-22', 'Katolik', 'Laki-laki', 'jashd', 'hajsdb', '2024-03-22 11:35:01'),
(8, 91827, 'ajsfas', 'jasg', '2024-03-22', 'Katolik', 'Laki-laki', 'kajhsd', '273648', '2024-03-22 11:36:05'),
(9, 8234, 'kjasgf', 'kjasgdf', '2024-03-22', 'Kristen', 'Perempuan', 'jashdf', '8324892', '2024-03-22 11:37:25'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 11:40:39'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 11:40:44'),
(12, 3456, 'hasgd', 'hasdb', '2024-03-22', 'Katolik', 'Perempuan', 'ghb', '456', '2024-03-22 11:44:51'),
(13, 23747, 'ashd', 'sg', '2024-03-22', 'Katolik', 'Laki-laki', 'hsfb', '82364', '2024-03-22 12:08:12'),
(14, 75968760, 'Keysa Lena', 'Malang', '2007-01-25', 'Islam', 'Perempuan', 'SMPN 1 KARANGPLOSO', '085648464457', '2024-03-22 12:14:27'),
(15, 75968760, 'Keysa Lena', 'Malang', '2024-03-22', 'Katolik', 'Perempuan', 'SMPN 1 KARANGPLOSO', '085648464457', '2024-03-22 12:16:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_orang_tua`
--
ALTER TABLE `tb_orang_tua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_orang_tua_ibfk_1` (`id_siswa`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_orang_tua`
--
ALTER TABLE `tb_orang_tua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_orang_tua`
--
ALTER TABLE `tb_orang_tua`
  ADD CONSTRAINT `tb_orang_tua_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
