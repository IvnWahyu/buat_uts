-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2023 pada 10.59
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raleway`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(3) NOT NULL,
  `saya` varchar(30) NOT NULL,
  `deskripsiPanjang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `saya`, `deskripsiPanjang`) VALUES
(1, 'Tentang Saya', '<p>Selamat datang di Portofolio Saya! Saya Ivan Wahyu Putratama, seorang mahasiswa informatika di Universitas Pembangunan Jaya yang berada di semester 5. Saya adalah pribadi yang bersemangat tentang dunia teknologi dan berkomitmen untuk terus belajar dan berkembang dalam bidang ini.</p>\r\n<p>Di samping perjalanan akademis saya, saya juga aktif terlibat dalam berbagai proyek dan eksplorasi di dunia IT. Semua pengalaman ini telah membantu saya mengembangkan keterampilan teknis yang kuat</p>\r\n<p>Terima kasih atas kunjungan Anda, dan kami berharap dapat berkolaborasi dengan Anda dalam masa depan!</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `certificate`
--

CREATE TABLE `certificate` (
  `id` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `subjudul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `certificate`
--

INSERT INTO `certificate` (`id`, `judul`, `subjudul`) VALUES
(1, 'Cybersecurity Essentials', '<p>Pemahaman kontrol keamanan: jaringan, server, aplikasi. Kebijakan, kerahasiaan, ketersediaan data. Keterampilan kritis, solusi. Cisco Packet Tracer.</p>'),
(2, 'Introduction to Cybersecurity', '<p>Pahami cybersecurity, ancaman umum, perlindungan bisnis, tren pekerjaan, pertumbuhan cybersecurity.</p>'),
(3, 'Python', '<p>Pelajaran Python: Sintaksis, fungsi, boolean, list, loop, string, kamus, dan pustaka eksternal. Dasar-dasar pemrograman Python.</p>'),
(4, 'Intro to Machine Learning', '<p>Dasar-dasar machine learning: bagaimana model bekerja, eksplorasi data, pembuatan model pertama, validasi, penyesuaian model, dan algoritma \"Random Forests.\"</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `nama`, `deskripsi`, `gbr`) VALUES
(1, 'IVAN WAHYU PUTRATAMA', '<p>Selamat datang di Portofolio Saya! Saya Ivan Wahyu Putratama, seorang mahasiswa informatika di Universitas Pembangunan Jaya yang berada di semester 5. Saya adalah seorang penggemar teknologi yang bersemangat untuk belajar dan berkembang di dunia IT. Di sini, Anda akan menemukan sebagian dari proyek-proyek dan pengetahuan yang telah saya kembangkan selama studi saya. Terima kasih telah mengunjungi situs saya</p>', 'author_image.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `name`, `email`, `subject`, `message`) VALUES
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsiPendek` text NOT NULL,
  `gbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `judul`, `deskripsiPendek`, `gbr`) VALUES
(1, 'Pemrograman Berorientasi Objek', '<p>Mata kuliah Pemrograman Berorientasi Objek (PBO) memberikan dasar yang kuat dalam pemahaman konsep dan penerapan prinsip-prinsip pemrograman berorientasi objek. </p>', 'gbr.jpg'),
(2, 'Desain dan Analisis Algoritma', '<p>Mata kuliah Desain dan Analisis Algoritma adalah salah satu komponen penting dalam pendidikan teknologi informasi dan komputer. Selama semester ini, mahasiswa telah mengembangkan sejumlah pemahaman mendalam tentang berbagai algoritma, serta kemampuan untuk merancang dan menganalisis algoritma dengan efisiensi.</p>', 'gbr2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
