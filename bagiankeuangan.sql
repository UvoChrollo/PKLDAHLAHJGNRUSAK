-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2021 pada 05.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bagiankeuangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `atasan`
--

CREATE TABLE `atasan` (
  `nip` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `atasan`
--

INSERT INTO `atasan` (`nip`, `nama`, `pangkat`) VALUES
('196802232007012001', 'Murniati, SE', 'Bendahara Pengeluaran'),
('198109142010121003', 'Wandi, S.Kom', 'Pejabat Pembuat Komitmen'),
('199502052019032020', 'Maritsa Febra Gemaya, S.E.', 'Bendahara Pengeluaran Pembantu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapegawai`
--

CREATE TABLE `datapegawai` (
  `ID` int(5) NOT NULL,
  `Nama` varchar(37) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `Jabatan` varchar(68) DEFAULT NULL,
  `Pangkat` varchar(30) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `datapegawai`
--

INSERT INTO `datapegawai` (`ID`, `Nama`, `NIP`, `Jabatan`, `Pangkat`, `Password`, `level`) VALUES
(1, 'Prof. Dr. Herri, SE. MBA', '196312151990011001', 'Kepala LLDIKTI Wilayah X', 'Pembina Utama Madya / IV d', 'LLDIKTI10', 'User'),
(2, 'Adek Irma, SH', '196908241991122001', 'Analis Kelembagaan  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(3, 'Adelia Pramita Sari, SE', '198808112010122006', 'Kepala Subbagian Tata Usaha dan Barang Milik Negara  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(4, 'Afrizal, SH', '198904032019031014', 'Pengolah Data  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(5, 'Agnes Fitriani Sidabutar, S.Kom', '198908142010122001', 'Pengelola Bahan Pustaka  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(6, 'Al Irsyad', '197701202014091002', 'Pengadministrasi Umum  ', 'Pengatur Muda Tingkat I / II b', 'LLDIKTI10', 'User'),
(7, 'Alam Yusra', '196708311993031002', 'Pengadministrasi Umum  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(8, 'Albert Oktavian, S.E.', '198610142009121003', 'Penyusun Program Pembinaan Organisasi Kemahasiswaan  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(9, 'Andika Persia, S.I.Kom', '199101122015042002', 'Pengadministrasi Kepegawaian  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(10, 'Anita, S.Pd, M.A', '197305092008032002', 'Pengelola Informasi Kerjasama  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(11, 'Apandi, S.T.', '198804022019031016', 'Pengolah Data  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(12, 'Ari Mega Suryani, S.Kom', '198308102010122002', 'Pengolah Data  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(13, 'Arifta Surya, S.Kom.', '198806272019031018', 'Pengelola Peningkatan Kualifikasi Pendidik dan Tenaga Kependidikan  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(14, 'Budhi Nk, S.Si', '198005202008121002', 'Teknisi Laboratorium  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(15, 'Cory Masyitah, SE', '198608082009122003', 'Penyusun Laporan Keuangan  ', 'Penata / III c', 'LLDIKTI10', 'Admin'),
(16, 'Deded Ramad Kamda, S.Kom., M.Kom.', '198705042015041002', 'Pengelola Sistem Informasi  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(17, 'Dodi, SH', '196712041991031002', 'Analis Pengembangan Sarana dan Prasarana  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(18, 'Edi Edwar', '196408161991031001', 'Teknisi Peralatan Kantor  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(19, 'Edi Sastra, S.E.', '196503111994031003', 'Analis Kualifikasi dan Karir Pendidik dan Tenaga Kependidikan  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(20, 'Efrinaldi, S.Sos', '196409011993031001', 'Analis Sistem Informasi  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(21, 'Elvianti, SE', '197009181992032001', 'Pengelola Keuangan  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(22, 'Ely Susanti, SE, MM', '196708231991032001', 'Kepala Bagian Akademik dan Kemahasiswaan  ', 'Pembina Tingkat I / IV b', 'LLDIKTI10', 'User'),
(23, 'Eri Suryadi, SP', '197805032005011003', 'Pengelola Peningkatan Kualifikasi Pendidik dan Tenaga Kependidikan  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(24, 'Ernita, S.Kom.', '196805301993032002', 'Pengelola Kepegawaian  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(25, 'Evrinaldi, S.Si', '197302021998031007', 'Analis Data Akademik  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(26, 'Ezi Diana Fitri, A.Md', '196712311992032004', 'Pengolah Data  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(27, 'Fauzia Husna, S.Farm', '198607162010122001', 'Teknisi Laboratorium  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(28, 'Febrina Fitri Dwikora, SE, M.Si', '196502101991032002', 'Kepala Bagian Sumber Daya Perguruan Tinggi', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(29, 'Febriyanti B, SE', '196702221991032002', 'Pengolah Data Beasiswa dan Bantuan  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(30, 'Fikri Rusli, SE., M.H.', '196702121992031001', 'Bendahara  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(31, 'Firti Rasmita, SE', '196309151991032003', 'Analis Penjamin Mutu  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(32, 'Fitri Astuti, S Sos', '196602031987012001', 'Pengelola Kepegawaian  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(33, 'Gusnimar', '196608121991032002', 'Pengadministrasi Umum  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(34, 'Gusri, S.E.', '196908081991031002', 'Pengelola Keuangan  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(35, 'Hamdani, S.Kom', '198504302010121002', 'Analis Organisasi dan Tata Laksana  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(36, 'Haris Roberto, S.I.Kom.', '198308082010121003', 'Pengelola Data  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(37, 'Hendri Wandi, ST', '196909021992031001', 'Pengelola Informasi Akademik  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(38, 'Henri Ilham Caniago, S.Kom', '197810172010121002', 'Pengelola Sistem Informasi  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(39, 'Ida Suryanti, SE, .,MM.', '196312041985032001', 'Kepala Subbagian Kemahasiswaan  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(40, 'Ir. YUNIATI', '196312011994122001', 'Kepala Bagian Umum  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(41, 'Irna Humairah, S.Si', '197606032010122001', 'Teknisi Laboratorium  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(42, 'Jamurin, SH, MH', '196201111991031002', 'Kepala Bagian Kelembagaan dan Sistem Informasi  ', 'Pembina Tingkat I / IV b', 'LLDIKTI10', 'User'),
(43, 'Jerry Citra, S.Kom', '198802252015041002', 'Pengelola Sistem Informasi  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(44, 'Kasreno Ofet Mei, S.IP', '199105072015041002', 'Pengelola Bahan Pustaka  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(45, 'Laida Prefni, S.Kom', '196512151991032003', 'Analis Kebijakan Barang Milik Negara', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(46, 'Maritsa Febra Gemaya, S.E.', '199502052019032020', 'Pengelola Keuangan  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(47, 'Meitti Utami, S.Kom', '199205172015042001', 'Pengelola Barang Milik Negara  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(48, 'Murniati, SE', '196802232007012001', 'Penyusun Program, Anggaran, dan Laporan  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(49, 'Nurhayati, S.Kom', '198608122010122006', 'Pengadministrasi Umum  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(50, 'Nurti, SH., MH', '196204271993032001', 'Pengelola Organisasi Kemahasiswaan  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(51, 'Ori Adrian, S.Kom', '198905182015041003', 'Pengelola Informasi Kerja Sama  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(52, 'Putra Heriyadi, A.Md', '198110252010121002', 'Pengelola Data Mutu Pendidikan  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(53, 'Putri Prima Yulda, S.Hum', '198910312015042002', 'Pengelola Bahan Pustaka  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(54, 'Rahman, SH', '197509172002121002', 'Pengelola Kepegawaian  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(55, 'Rahmi, S.E., M.Si.', '198209262008122002', 'Kepala Subbagian Sarana dan Prasarana  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(56, 'Ratna Jimmi Lasmini, S.Kom', '197712282010122002', 'Pengelola Barang Milik Negara  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(57, 'Reri Anton, ST., M.M.', '197003081991031001', 'Kepala Subbagian Pendidik dan Tenaga Kependidikan  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(58, 'Resa Amelia, S.Si', '198309012010122003', 'Teknisi Laboratorium  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(59, 'Rida Erizal', '196807081992031001', 'Pengadministrasi Kepegawaian  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(60, 'Rina Wahyuni, S.I.Kom', '198906142015042003', 'Pengadministrasi Kependidikan  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(61, 'Rismayenti', '196801261991032001', 'Pengadministrasi Umum  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(62, 'Rukman Wijaya, SE', '197206221994031002', 'Analis Sistem Informasi  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(63, 'Rumenda, SE, MM', '196207161993031002', 'Kepala Subbagian Perencanaan dan Penganggaran  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(64, 'Setriamela Marissa, SE', '198803282019032015', 'Pengelola Data Pelaksanaan Program dan Anggaran  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(65, 'Sirjon, S.Sos', '196806201991031003', 'Kepala Subbagian Sistem Informasi dan Kerja Sama  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(66, 'Suci Rahmadani, A.Md', '198605242010122008', 'Pengelola Bahan Pustaka  ', 'Penata Muda / III a', 'LLDIKTI10', 'User'),
(67, 'Suhartini, S.Ap', '196708181993032004', 'Pengelola Peningkatan Kualifikasi Pendidik dan Tenaga Kependidikan  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(68, 'Syahril, SH, MH', '196806092007011002', 'Pengevaluasi Program dan Kinerja  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(69, 'Taufik, S Sos.', '197008131992031003', 'Kepala Subbagian Akademik  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(70, 'Tetri Aida, SE., M.M.', '196801251991032001', 'Kepala Subbagian Kelembagaan  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(71, 'Wandi, S.Kom', '198109142010121003', 'Pengelola Keuangan  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(72, 'Wilda Nurhayati, S.Pd', '198012292010012008', 'Sekretaris Pimpinan  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(73, 'Yafni Derisna, SH', '197109291993032001', 'Pengelola Gaji  ', 'Penata Tingkat I / III d', 'LLDIKTI10', 'User'),
(74, 'Yandri A, S.H., M.H', '196305271991031002', 'Sekretaris LLDIKTI Wilayah X', 'Pembina Utama Muda / IV c', 'LLDIKTI10', 'User'),
(75, 'Yofan Hamaska, S.Kom, M.CIO', '198107262010121002', 'Penyusun Program, Anggaran, dan Laporan  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(76, 'Yondri', '197009192014091004', 'Pengadministrasi Persuratan  ', 'Pengatur Muda Tingkat I / II b', 'LLDIKTI10', 'User'),
(77, 'Yulmaizar F, S.Pt., M.P', '197707092009101001', 'Pengelola Situs/Web  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(78, 'Zamri, S.Sos, MH', '196706301989031002', 'Kepala Subbagian Hukum, Kepegawaian dan Tata Laksana  ', 'Pembina / IV a', 'LLDIKTI10', 'User'),
(79, 'Zul Ikram, S.Si', '198604092015041002', 'Teknisi Laboratorium  ', 'Penata Muda Tingkat I / III b', 'LLDIKTI10', 'User'),
(80, 'Zulhiddayati, ST', '198210102008122002', 'Pengelola Gaji  ', 'Penata / III c', 'LLDIKTI10', 'User'),
(81, 'Prof. Dr. Syahro Ali Akbar, MP', '196209241989101001', 'Null', 'Null', 'LLDIKTI10', 'User'),
(82, 'Amril Syalim, S.Kom, M.Eng', 'Null', 'Narasumber SAPTO', 'Null', 'LLDIKTI10', 'User'),
(83, 'Andri Devioka, M.Pd', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(84, 'Dedi Satrio Utomo Nugroho, M.Sc', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(85, 'Delvi Wahyuni, MA', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(86, 'Dr. Dessy Aliandrina, Ph.D', 'Null', 'Narasumber Workshop Intrapreneurial', 'Null', 'LLDIKTI10', 'User'),
(87, 'Dr. Ansofino, M.Si', '196603271991011001', 'Tim PAK LLDIKTI Wilayah X', 'Null', 'LLDIKTI10', 'User'),
(88, 'Dr. Antoni', 'Null', 'Tim PAK Dosen', 'Null', 'LLDIKTI10', 'User'),
(89, 'Dr. Ivan Hanafi', '19000000000000000', 'Narasumber', 'II c', 'LLDIKTI10', 'User'),
(90, 'Dr. Meiliana', 'Null', 'Tim Pakar EKA', 'Null', 'LLDIKTI10', 'User'),
(91, 'Dr. Rina Shahriyani Shahrullah', 'Null', 'Tim EKA (Evaluasi Kinerja Akademik)', 'Null', 'LLDIKTI10', 'User'),
(92, 'Dr. Skunda Diliarosta, M.Pd', '195909191991122001', 'Kabid Akademik', 'IV b', 'LLDIKTI10', 'User'),
(93, 'Dr. Sunadi, MP', '196308031989031003  ', 'Kepala Laboratorium', 'III b', 'LLDIKTI10', 'User'),
(94, 'dr. Suryanti', '19000000000000000', 'Juri Laboran Berprestasi', 'III b', 'LLDIKTI10', 'User'),
(95, 'Dr. Tri Astuti, S.Pt, MP', 'Null', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'Null', 'LLDIKTI10', 'User'),
(96, 'Dr. Zusmelia, M.Si', 'Null', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'Null', 'LLDIKTI10', 'User'),
(97, 'Dra. Desmalita, M.Sc', 'Null', 'Narasumber Metodelogi Penelitian', 'Null', 'LLDIKTI10', 'User'),
(98, 'Drs. Hanafi, MS', '195804151984031004', 'Null', 'IV c', 'LLDIKTI10', 'User'),
(99, 'DR. Agus Susanto', ' ', ' ', 'IV a', 'LLDIKTI10', 'User'),
(100, 'Dr. Frenadin Ade Gustara,SH,MH', ' ', ' Fasilitator', 'IV a', 'LLDIKTI10', 'User'),
(101, 'Dr. Efa Yonedi', 'Null', ' Fasilitator', 'IV a', 'LLDIKTI10', 'User'),
(102, 'Heru Wijayanto, MM,MBA,M.MT', 'Null', 'Narasumber Workshop Intrapreneurial', 'Null', 'LLDIKTI10', 'User'),
(103, 'M. Yazid Ismail', 'Null', 'Narasumber', 'III a', 'LLDIKTI10', 'User'),
(104, 'Merina Pratiwi, S.Si, M.Si', '198608202015042002', 'Dosen PNS Dpk', 'III b', 'LLDIKTI10', 'User'),
(105, 'Muhammad Arief Hasan, M.Kom', 'Null', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'Null', 'LLDIKTI10', 'User'),
(106, 'Mulyono, SH. M.Si', 'Null', 'Narasumber', 'IV a', 'LLDIKTI10', 'User'),
(107, 'Naswiradiyanto, M.Hum', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(108, 'Nurliana Nasution, ST, M.Kom', 'Null', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'IV a', 'LLDIKTI10', 'User'),
(109, 'Afridian Wirahadi A, SE, M.Sc.Ak,CA', 'Null', 'Narasumber Survei Dampak Covid-19 terhadap PTS', ' ', 'LLDIKTI10', 'User'),
(110, 'Pranofa Hediyanto. S.Kom,MTI', 'Null', 'Narasumber', 'III b', 'LLDIKTI10', 'User'),
(111, 'Prof. Dr. Akmal Djamaan, Ph.D', 'Null', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'Null', 'LLDIKTI10', 'User'),
(112, 'Prof. Dr. Ali Gufron', 'Null', 'Narasumber', 'Null', 'LLDIKTI10', 'User'),
(113, 'Prof. Dr. Ardipal, M.Pd', '196602031992031005', 'Juri Pilmapres Program Sarjana', 'Null', 'LLDIKTI10', 'User'),
(114, 'Prof. Dr. Bernadette M Waluyo', 'Null', 'Narasumber ', 'IV', 'LLDIKTI10', 'User'),
(115, 'Prof. Dr. Deddi Prima Putra, Apt', '196404061990011001', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'Null', 'LLDIKTI10', 'User'),
(116, 'Prof. Dr. Emriadi', 'Null', 'Anggota Komisi Etik', 'III b', 'LLDIKTI10', 'User'),
(117, 'Prof. Dr. Hermansyah, MS. MSc', '196412251990011001', 'Juri Pilmapres Program Sarjana', 'Null', 'LLDIKTI10', 'User'),
(119, 'Prof. Dr. Ing Hairul Abral, M.Eng', '196608171992121001', 'Narasumber Akreditasi Perguruan Tinggi', 'Null', 'LLDIKTI10', 'User'),
(120, 'Prof. Dr. Intan Ahmad', 'Null', 'Null', 'Null', 'LLDIKTI10', 'User'),
(121, 'Prof. Dr. Johannes Gunawan, SH.LL.M', 'Null', 'Narasumber', 'IV', 'LLDIKTI10', 'User'),
(122, 'Prof. Dr. Masyurdin', '196002131987031005', 'Reviewer Penjaminan Mutu', 'Null', 'LLDIKTI10', 'User'),
(123, 'Prof. Dr. Mulyadi Bur', 'Null', 'Narasumber Akreditasi Perguruan Tinggi', 'Null', 'LLDIKTI10', 'User'),
(124, 'Prof. Dr. Novesar Jamarun, MS', 'Null', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'Null', 'LLDIKTI10', 'User'),
(125, 'Prof. Dr. Paulina Panen', '19000000000000000', 'Narasumber', 'IV d', 'LLDIKTI10', 'User'),
(126, 'Prof. Dr. Safni, M.Eng', 'Null', 'Reviewer Bimbingan Klinik Online Penelitian dan PPM', 'Null', 'LLDIKTI10', 'User'),
(127, 'Prof. Dr. Syafrani, M.Si', '195810241988031002', 'Tim Pakar EKA', 'IV d', 'LLDIKTI10', 'User'),
(128, 'Prof. Dr. Syahro Ali Akbar, MP', '196209241989101001', 'Tim PAK Dosen', 'IV a', 'LLDIKTI10', 'User'),
(129, 'Prof. John Hendri, Ph.D', 'Null', 'Null', 'Null', 'LLDIKTI10', 'User'),
(130, 'Prof. Werry Darta Taifur, SE. MA', 'Null', 'Tim EKA (Evaluasi Kinerja Akademik)', 'Null', 'LLDIKTI10', 'User'),
(131, 'Prof.Dr.Ir.Siti Herlinda, M.Si', '196510201992032001', 'Narasumber Diseminasi SPMI', 'IV/d', 'LLDIKTI10', 'User'),
(132, 'Prof. Dr.Enok Maryani', 'Null', 'Narasumber Pembekalan Serdos', 'Null', 'LLDIKTI10', 'User'),
(133, 'Prof. Dr. Musliar Kasim', ' ', 'Pengarah Kegiatan ', 'III a', 'LLDIKTI10', 'User'),
(134, 'Rachmat Nurcahyo, MA', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(135, 'Salam Mairi, M.Ed', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(136, 'Silvia Yazid', 'Null', 'Narasumber', 'Null', 'LLDIKTI10', 'User'),
(137, 'Teddy Alfonso, CA,CMA,CPAI', 'Null', 'Narasumber', 'Null', 'LLDIKTI10', 'User'),
(138, 'Teguh Adimarta, M.Pd', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(139, 'Yuli Herman, M.Pd', 'Null', 'Juri Debat Bahasa Inggris', 'Null', 'LLDIKTI10', 'User'),
(140, 'Ir. Nilda Tri Putri, Ph.D ,IPM', 'Null', 'Narasumber', '.', 'LLDIKTI10', 'User'),
(141, 'Tri Apriyanto Sundara, MT', 'Null', 'Tim Pengembang Aplikasi PAK Online LLDIKTI  Wil.X', 'Null', 'LLDIKTI10', 'User'),
(142, 'Drs. Imrizal, MM', 'Null', 'Kepala Biro Umum dan Sumber Daya Unand', 'Null', 'LLDIKTI10', 'User'),
(143, 'Ismet Yus Putra', '.', 'Narasumber', 'IV a', 'LLDIKTI10', 'User'),
(144, 'Dr.Anne Putri,SE,M.Sc', 'Null', 'Editor in Chief  (Jurnal Benefita )', 'Null', 'LLDIKTI10', 'User'),
(145, 'Dr. Hendra Suherman, ST,MT', 'Null', ' ', 'Null', 'LLDIKTI10', 'User'),
(146, 'Dr. Hetti Rohayani', 'Null', 'Calon Lektor Kepala', 'Null', 'LLDIKTI10', 'User'),
(147, 'Dr. Reni Desmiarti', 'Null', 'Calon Guru Besar', 'Null', 'LLDIKTI10', 'User'),
(148, 'Geraldo Mendoza Putra, A.Md', 'Null', 'Operator Bidikmisi LLDIKTI Wilayah X', 'Null', 'LLDIKTI10', 'User'),
(149, 'Prof. Dr. Ir. Musliar Kasim, M.Sc', 'Null', 'Rektor Universitas Baiturrahamah', 'Null', 'LLDIKTI10', 'User'),
(150, 'Wahyudi Agus', 'Null', 'Wartawan tvOne', 'Null', 'LLDIKTI10', 'User'),
(151, 'John', 'Null', 'Wartawan CNN Indonesia TV', 'Null', 'LLDIKTI10', 'User'),
(152, 'Indra Kurniawan ', 'Null', 'Wartawan Padang Ekspres', 'Null', 'LLDIKTI10', 'User'),
(153, 'Widia Afrianti', 'Null', 'Wartawan Harian Haluan', 'Null', 'LLDIKTI10', 'User'),
(154, 'Rahmatul Laila', 'Null', 'Wartawan ANTARA News', 'Null', 'LLDIKTI10', 'User'),
(155, 'Mardius, SH, MH', 'Null', 'Anggota', 'Null', 'LLDIKTI10', 'User'),
(156, 'Karfindo, S.Kom, M.Kom', 'Null', 'Narasumber Bimtek Percepatan Pengusulan Jabatan Akademik', 'Null', 'LLDIKTI10', 'User'),
(157, 'Dr. Sri Maryati, SE, M.Si', 'Null', 'Narasumber Survei Dampak Covid-19 terhadap PTS', 'Null', 'LLDIKTI10', 'User'),
(158, 'Andi Saputra, M.Kom', 'Null', 'Narasumber Bimtek Automasi Perpustakaan', 'Null', 'LLDIKTI10', 'User'),
(159, 'Prof. Dr. Zainul Daulay, SH, MH', 'Null', 'Ketua Komisi Etik', 'Null', 'LLDIKTI10', 'User'),
(160, 'Dr. Khairul Fahmi', 'Null', 'Sekretaris Komisi Etik', 'Null', 'LLDIKTI10', 'User'),
(161, 'Prof. Dr. Yoserizal, M.Sc', 'Null', 'Anggota Komisi Etik', 'Null', 'LLDIKTI10', 'User'),
(162, 'Dr. Ade Djulardi, MS', 'Null', 'Narasumber Workshop Publikasi Jurnal Internasional', 'Null', 'LLDIKTI10', 'User'),
(163, 'Prof. Dr. M. Yahya, M.Sc', 'Null', 'Narasumber Workshop Publikasi Jurnal Internasional', 'Null', 'LLDIKTI10', 'User'),
(164, 'Prof. Dr. Ratni Primalita, SE, MM', 'Null', 'Narasumber Workshop Publikasi Jurnal Internasional', 'Null', 'LLDIKTI10', 'User'),
(165, 'Prof. Dr. Rizanda Machmud, M.Kes', 'Null', 'Narasumber Workshop Publikasi Jurnal Internasional', 'Null', 'LLDIKTI10', 'User'),
(166, 'Dr. Ilmiawati, S.Kes', 'Null', 'Narasumber Workshop Publikasi Jurnal Internasional', 'Null', 'LLDIKTI10', 'User'),
(167, 'Dr. Efrizal Syofyan, SE, M.Si, Ak, CA', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(168, 'Prof. Dr. Rudy Febriansyah, M.Sc', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(169, 'Dr. Perengki Susanto, M.Sc', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(170, 'Prof. Dr. Busyra Azheri, SH, MH', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(171, 'Dr. Dodi Devianto, S.Si, M.Sc', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(172, 'Dr. Eng. Rian Ferdian, MT', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(173, 'Dr. Wahyudi', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(174, 'Prof. Dr. Dachrianus, Apt', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(175, 'Dr. Munzir Busniah, M.Si', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(176, 'Dr. Alfan Miko, M.Si', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(177, 'Dr. Yulihasri, SE, MBA', 'Null', 'Ketua Tim', 'Null', 'LLDIKTI10', 'User'),
(178, 'Maksum Ro\'is Adin Saf, S.Kom, M.Eng', 'Null', 'Narasumber Pelatihan Pekerti Applied Approach', 'Null', 'LLDIKTI10', 'User'),
(179, 'Prof. Dr. Henny Lucida, Apt', 'Null', 'Narasumber Pelatihan Pekerti Applied Approach', 'Null', 'LLDIKTI10', 'User'),
(180, 'dr. Nur Afrianim Syah, M.Med.Ed, Ph.d', 'Null', 'Narasumber Pelatihan Pekerti Applied Approach', 'Null', 'LLDIKTI10', 'User'),
(181, 'Prof. Dr. Hasnah Faizah. AR, M.Hum', 'Null', 'Narasumber Pelatihan Pekerti Applied Approach', 'Null', 'LLDIKTI10', 'User'),
(182, 'Drs. Riwayadi, MBA, Akt, CSRS, CPMA', 'Null', 'Narasumber Pelatihan Pekerti Applied Approach', 'Null', 'LLDIKTI10', 'User'),
(183, 'Kelvin Mulyawan', '123', 'Presiden', 'Presiden', 'kelvin123', 'Admin'),
(185, 'Unlimited', '999', 'Hooh', 'Hooh', 'LLDIKTI10', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `sppd` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `biaya` varchar(100) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `nip_pegawai` varchar(20) NOT NULL,
  `bendahara_pengeluaran` varchar(60) NOT NULL,
  `pejabat_pembuat_komitmen` varchar(60) NOT NULL,
  `terbilang` varchar(50) NOT NULL,
  `bendahara_pengeluaran_pembantu` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `yearmonth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`sppd`, `tanggal`, `nama`, `kegiatan`, `biaya`, `keterangan`, `nip_pegawai`, `bendahara_pengeluaran`, `pejabat_pembuat_komitmen`, `terbilang`, `bendahara_pengeluaran_pembantu`, `total`, `yearmonth`) VALUES
(1, '1945-08-17', 'Soekarno', 'Proklamasi Kemerdekaan', '303365', 'Merdeka !', '', 'Bendahara Pengeluaran Pembantu', 'Pejabat Pembuat Komitmen', 'Tiga ratus tiga tiga ratus enam puluh lima ribu', 'Bendahara Pengeluaran Pembantu', 303365, 'Aug 1945');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `atasan`
--
ALTER TABLE `atasan`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`sppd`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `sppd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7710;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
