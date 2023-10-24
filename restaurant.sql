-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2023 pada 04.39
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `ID_detail_pesanan` int(5) NOT NULL,
  `ID_pesanan` int(5) DEFAULT NULL,
  `Nama_menu` varchar(40) NOT NULL,
  `Jumlah_item` int(11) NOT NULL,
  `Total_harga` int(11) NOT NULL,
  `Metode_pembayaran` varchar(100) NOT NULL,
  `ID_reccomended` int(5) DEFAULT NULL,
  `ID_baru` int(5) DEFAULT NULL,
  `ID_promo` int(5) DEFAULT NULL,
  `ID_minuman` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`ID_detail_pesanan`, `ID_pesanan`, `Nama_menu`, `Jumlah_item`, `Total_harga`, `Metode_pembayaran`, `ID_reccomended`, `ID_baru`, `ID_promo`, `ID_minuman`) VALUES
(1, 9, 'Ayam goreng krispi', 3, 42, '', NULL, NULL, NULL, NULL),
(2, 9, 'Paket antilapar', 6, 180, '', NULL, NULL, NULL, NULL),
(3, 25, 'Gulai kepala kakap', 4, 80, '', NULL, NULL, NULL, NULL),
(4, 25, 'Ikan asam padeh', 2, 26, '', NULL, NULL, NULL, NULL),
(5, 25, 'Es teh manis anget', 1, 2, '', NULL, NULL, NULL, NULL),
(6, 26, 'Rendang joss mantap', 3, 54, '', NULL, NULL, NULL, NULL),
(7, 27, 'Soto padang', 5, 75, 'transfer_bank', NULL, NULL, NULL, NULL),
(8, 28, 'Ayam goreng krispi', 1, 14, '', NULL, NULL, NULL, NULL),
(9, 29, 'Es Campur', 2, 20, '', NULL, NULL, NULL, NULL),
(10, 30, 'Ampiang dadiah', 6, 90, 'cash', NULL, NULL, NULL, NULL),
(11, 31, 'Es Kopyor', 5, 45, '', NULL, NULL, NULL, NULL),
(12, 32, 'Gulai daun singkong', 2, 10, '', NULL, NULL, NULL, NULL),
(13, 33, 'Sate padang', 6, 126, 'transfer_bank', NULL, NULL, NULL, NULL),
(14, 34, 'Ayam bakar', 14, 210, 'transfer_bank', NULL, NULL, NULL, NULL),
(15, 35, 'Es tebak', 10, 70, 'kartu_kredit', NULL, NULL, NULL, NULL),
(16, 36, 'Rendang joss mantap', 1, 18, 'Dana', NULL, NULL, NULL, NULL),
(17, 37, 'Ayam bakar', 10, 150, 'cash', NULL, NULL, NULL, NULL),
(18, 37, 'Ampiang dadiah', 7, 105, 'cash', NULL, NULL, NULL, NULL),
(19, 38, 'Ikan asam padeh', 3, 39, 'OVO', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin123', '$2a$12$BULEhqL.4Kv7ipZDCVFhf.VJXeA.eTFpRfk0qyadnQ5QKeXlR.e5q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu minuman`
--

CREATE TABLE `menu minuman` (
  `ID_minuman` int(5) NOT NULL,
  `Nama_menu` varchar(50) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Deskripsi` varchar(150) NOT NULL,
  `Gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu minuman`
--

INSERT INTO `menu minuman` (`ID_minuman`, `Nama_menu`, `Harga`, `Deskripsi`, `Gambar`) VALUES
(40001, 'Kopi hitam', '5.000', 'ini kopi hitam', 'kopi hitam.jpg'),
(40002, 'Es teh manis anget', '2.000', 'Ini teh nyegerin banget asli   NGETEEEEH\r\n', 'teh.jpg'),
(40005, 'Es tebak', '7.000', 'Hayooo tebak ini es apaaaa', 'es tebak.jpg'),
(40006, 'Ampiang dadiah', '15.000', 'Capaa yang mau eciiiiim uwwwwu', 'Ampiang dadiah.jpg'),
(40007, 'Baum kunchen', '12.000', 'Ini kue', 'baum.jpg'),
(40008, 'Es Kopyor', '9.000', 'Ini es pake kelapa intinya', 'kopyot.webp'),
(40009, 'Es Campur', '10.000', 'Es batu campur buah pokoknya gitu yages', 'campur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu promo`
--

CREATE TABLE `menu promo` (
  `ID_promo` int(5) NOT NULL,
  `Nama_menu` varchar(50) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Deskripsi` varchar(250) NOT NULL,
  `Gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu promo`
--

INSERT INTO `menu promo` (`ID_promo`, `Nama_menu`, `Harga`, `Deskripsi`, `Gambar`) VALUES
(20002, 'Paket hemat 2', '25.000', 'paket lengkap jelas dan bergizi baik', 'paket hemat 2.webp'),
(20003, 'Paket antilapar', '30.000', 'Setidaknya kau makan ini masakan tidak kelaparan lagi kasian aku liat kau kelaparan. \r\nTemplate menu:\r\nNasi, sayur, lauk pilih(ayam dan rendang jangan udh 2 itu aja jangan kau pilih lauk mahal-mahal)', 'paket antilapar.jpg'),
(20007, 'Paket Hemat 1', '21.000', 'Ini paket buat kalian yang lagi tanggal tua cocok niiih', 'paket 1.webp'),
(20008, 'Soto padang', '15.000', 'Spesial niih soto lengkap khas minang dijamin ueeenak ', 'soto padang.webp'),
(20012, 'Telur krispi', '10.000', 'Nah ini menu paling simple nasi + telur jangan ngarep lebih namanya juga menu hemat', 'telur dadar padang.png'),
(20013, 'Teri Sambal Hijau', '10.000', 'Ini teri dicabein cuma ijo aja cabenya.', 'teri sambal hijau.jpg'),
(20014, 'Gulai daun singkong', '5.000', 'Ini gulai bukan sembarang gulai bre', 'gulai daun singkong.jpg'),
(20015, 'Terong balado', '5.000', 'Gk tau lagi mau bilang apa. Cobain dlu susah buat dijelaskan dengan kata kata', 'terong balado.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu reccomended`
--

CREATE TABLE `menu reccomended` (
  `ID_reccomended` int(5) NOT NULL,
  `Nama_menu` varchar(50) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Deskripsi` varchar(250) NOT NULL,
  `Gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu reccomended`
--

INSERT INTO `menu reccomended` (`ID_reccomended`, `Nama_menu`, `Harga`, `Deskripsi`, `Gambar`) VALUES
(10001, 'Ayam goreng krispi', '14.000', 'Nasi + ayam goreng ini enak banget looh lengkap dengan sambal, sayur, bumbu, dan kuah', 'nasi ayam goreng.png'),
(10002, 'Rendang joss mantap', '18.000', 'Ini nasi pake rendang ditambah dengan kuah dan sayur yang joss enak poll', 'nasi rendang.jpg'),
(10003, 'Ayam bakar', '15.000', 'Ayam bakar padang ini bukan kaleng-kaleng, cocok buat kamu yang makan masakan padang kayak pake template nasi + ayam + sambal', 'ayam bakar menu.webp'),
(10004, 'Gulai kepala kakap', '20.000', 'Nah ini menu yang termasuk kesukaan saya. Rasanya sangat asdfjhjlkkdhasjfh ', 'gulai kepala kakap joss.jpg'),
(10005, 'Gulai tunjang', '15.000', 'Buat kamu yang gak suka kikil sayang banget gk bisa merasakan sensasi nikmatnya masakan ini beeeeeeh parah', 'gulai tunjang.webp'),
(10006, 'Ikan asam padeh', '13.500', 'Ikan yang dipakai ini ikan yang masih sangat fresh from the ocean ya ges ya dijamin sekali kalian makan pasti ketagihan ditambah dengan bumbu khas nya yang sangat menggugah selera', 'ikan asam padeh.webp'),
(10007, 'Dendeng balado', '17.500', 'INI DENDENG WAJIB KAU COBA, DIJAMIN SOAL RASA GAK ADA TANDINGANNYA ', 'dendeng balado.jpg'),
(10008, 'Sate padang', '21.000', 'Ini sate rasanya enak poll', 'sate padang menu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_pesanan` int(11) NOT NULL,
  `ID_user` int(5) DEFAULT NULL,
  `Tanggal_pesanan` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`ID_pesanan`, `ID_user`, `Tanggal_pesanan`) VALUES
(9, NULL, '2023-10-21'),
(25, NULL, '2023-10-21'),
(26, NULL, '2023-10-21'),
(27, NULL, '2023-10-21'),
(28, NULL, '2023-10-22'),
(29, NULL, '2023-10-22'),
(30, NULL, '2023-10-22'),
(31, NULL, '2023-10-22'),
(32, NULL, '2023-10-22'),
(33, NULL, '2023-10-22'),
(34, NULL, '2023-10-22'),
(35, NULL, '2023-10-22'),
(36, NULL, '2023-10-22'),
(37, NULL, '2023-10-22'),
(38, NULL, '2023-10-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userregister`
--

CREATE TABLE `userregister` (
  `ID_user` int(5) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Nama_depan` varchar(20) NOT NULL,
  `Nama_belakang` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `userregister`
--

INSERT INTO `userregister` (`ID_user`, `Username`, `Email`, `password`, `Nama_depan`, `Nama_belakang`, `Tanggal_lahir`, `Jenis_kelamin`) VALUES
(3, '_kuro_kitsune', 'ari.maulana@student.umn.ac.id', '$2y$10$ampZ4iAe.oqGZSM.7.0BiOt2f4ThQIrRf2wgvjbs3KWUCMfeM.RS6', 'Ari', 'Maulana Hadijaya', '2004-06-07', 'Laki-laki'),
(4, 'aku', 'aku@gmail.com', '$2y$10$/OUbq/qhDXj6fJlKIdtu7uUeAilNVBRXmcYAL3749ffGv7KA2F9QS', 'aku', 'gaktau', '2023-10-04', 'Laki-laki'),
(7, 'nyoba', 'nyoba@gmail.com', '$2y$10$Qa61.uRMFw7eL0rSN9hJ.OHCHPXubfTIh6Awg9.56Wj4T91edmA6y', 'nyoba', 'nyobaan', '2007-09-17', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`ID_detail_pesanan`),
  ADD KEY `ID_pesanan` (`ID_pesanan`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `Username/Email` (`username`);

--
-- Indeks untuk tabel `menu minuman`
--
ALTER TABLE `menu minuman`
  ADD PRIMARY KEY (`ID_minuman`);

--
-- Indeks untuk tabel `menu promo`
--
ALTER TABLE `menu promo`
  ADD PRIMARY KEY (`ID_promo`);

--
-- Indeks untuk tabel `menu reccomended`
--
ALTER TABLE `menu reccomended`
  ADD PRIMARY KEY (`ID_reccomended`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_pesanan`),
  ADD KEY `ID_user` (`ID_user`);

--
-- Indeks untuk tabel `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `ID_detail_pesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `menu minuman`
--
ALTER TABLE `menu minuman`
  MODIFY `ID_minuman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40010;

--
-- AUTO_INCREMENT untuk tabel `menu promo`
--
ALTER TABLE `menu promo`
  MODIFY `ID_promo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20016;

--
-- AUTO_INCREMENT untuk tabel `menu reccomended`
--
ALTER TABLE `menu reccomended`
  MODIFY `ID_reccomended` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `ID_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `userregister`
--
ALTER TABLE `userregister`
  MODIFY `ID_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`ID_pesanan`) REFERENCES `pesanan` (`ID_pesanan`),
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`ID_reccomended`) REFERENCES `menu reccomended` (`ID_reccomended`),
  ADD CONSTRAINT `detail_pesanan_ibfk_3` FOREIGN KEY (`ID_baru`) REFERENCES `menu baru` (`ID_baru`),
  ADD CONSTRAINT `detail_pesanan_ibfk_4` FOREIGN KEY (`ID_promo`) REFERENCES `menu promo` (`ID_promo`),
  ADD CONSTRAINT `detail_pesanan_ibfk_5` FOREIGN KEY (`ID_minuman`) REFERENCES `menu minuman` (`ID_minuman`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `userregister` (`ID_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
