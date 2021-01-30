-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2020 at 07:00 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wseumcom_ltdc2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe` int(1) NOT NULL COMMENT '1:superuser; 2:sekretaris;3;bendahara',
  `nama_admin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `tipe`, `nama_admin`) VALUES
(1, 'ketupel@ltdc.id', 'e416f4d629794c84d7687e479332abdf', 1, 'Tri Ananda N'),
(3, 'adamaulaana@ltdc.com', 'e416f4d629794c84d7687e479332abdf', 1, 'Adam Maulana'),
(7, 'sponsor@ltdc.id', 'e416f4d629794c84d7687e479332abdf', 4, 'Dian Susilo'),
(8, 'teknis@ltdc.id', 'e416f4d629794c84d7687e479332abdf', 5, 'Chalvin Yulian'),
(9, 'humas@ltdc.id', 'e416f4d629794c84d7687e479332abdf', 6, 'Iqbal Aulia'),
(10, 'sekretaris@ltdc.id', 'e416f4d629794c84d7687e479332abdf', 2, 'Wahyu Eka Putri F'),
(11, 'bendahara@ltdc.id', 'e416f4d629794c84d7687e479332abdf', 3, 'Fajri Novitasari'),
(12, 'track@ltdc.id', 'e416f4d629794c84d7687e479332abdf', 5, 'Ahmad Muzakki');

-- --------------------------------------------------------

--
-- Table structure for table `file_info`
--

CREATE TABLE `file_info` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `kategori` int(1) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_info`
--

INSERT INTO `file_info` (`id`, `nama_file`, `kategori`, `link`) VALUES
(3, 'List Penginapan', 3, 'https://drive.google.com/file/d/1tJaCBNqlg6cueOL3F_leYl35ka-NiyPu/view?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `file_teknis`
--

CREATE TABLE `file_teknis` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `kategori` int(1) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tipe_file` int(1) NOT NULL COMMENT '1:dll ; 2:rulebook',
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_teknis`
--

INSERT INTO `file_teknis` (`id`, `nama_file`, `kategori`, `link`, `tipe_file`, `time`) VALUES
(1, 'Rule Book Kategori Analog', 1, 'https://drive.google.com/file/d/13nMz-ZBM3aUcYcs0griSNC0qixzfTLIT/view?usp=sharing', 2, '2019-07-22 16:33:22'),
(4, 'Track Analog', 1, 'https://drive.google.com/file/d/1Uy7YjnE4W8b0UHU7zOM4hOjqLhDuhw0x/view?usp=sharing', 1, '2019-07-22 17:21:56'),
(5, 'Alur Track Analog', 1, 'https://drive.google.com/file/d/16qoFtb4Q3LaWoDDcZWiWOpNuec9d3czG/view?usp=sharing', 1, '2019-07-23 06:49:04'),
(6, '3D Track Analog', 1, 'https://drive.google.com/file/d/1TBpioA6X2yDDVTlvYmdwsiiWUsa9aEjA/view?usp=sharing', 1, '2019-07-23 06:49:37'),
(7, '3D Track Mikrokontoler', 2, 'https://drive.google.com/file/d/1hWXiJDXoW0uy5tcyRPvOnYGynt7MlnUs/view?usp=sharing', 1, '2019-07-23 07:02:03'),
(8, 'Alur Track Mikrokontroler', 2, 'https://drive.google.com/file/d/1QUFzZvjazm4OzVjCvyOjYliJz74OZxXC/view?usp=sharing', 1, '2019-07-23 07:08:02'),
(9, 'Rule Book Kategori Mikro', 2, 'https://drive.google.com/file/d/1KSs4LaOzHS_H1tjIOAaxKYIFJp8xCqIg/view?usp=sharing', 2, '2019-07-23 22:54:43'),
(10, 'Track Mikrokontroler', 2, 'https://drive.google.com/file/d/159C1ZVmNFAHs0oveWcxOEnZvibk8dwQQ/view?usp=sharing', 1, '2019-07-23 22:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(2) NOT NULL,
  `kuota_analog` int(5) NOT NULL,
  `kuota_mikro` int(5) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL,
  `batas_berkas` date DEFAULT NULL,
  `maintenance` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `kuota_analog`, `kuota_mikro`, `tgl_buka`, `tgl_tutup`, `batas_berkas`, `maintenance`) VALUES
(1, 80, 110, '2019-07-23', '2019-09-09', '2019-09-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tipe` int(1) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `keterangan`, `tipe`, `image`, `upload_time`) VALUES
(1, 'Event Pemuda Surabaya', 2, 'SMP1.png', '2019-07-19 22:50:06'),
(2, 'Media Event', 2, 'SMP2.jpeg', '2019-07-19 22:50:35'),
(3, 'Info Lomba Malang', 2, 'SMP3.jpeg', '2019-07-19 22:51:13'),
(4, 'Info Olimpiade', 2, 'SMP4.png', '2019-07-19 22:53:51'),
(5, 'Arena Lomba', 2, 'SMP5.png', '2019-07-19 23:03:45'),
(6, 'Info Lomba', 2, 'SMP6.png', '2019-07-23 23:04:29'),
(7, 'Event Pelajar', 2, 'SMP7.png', '2019-07-25 03:25:29'),
(12, 'Lombarobot.id', 2, 'SMP12.jpeg', '2019-07-26 07:00:59'),
(13, 'Menulis Yuk', 2, 'SMP13.jpg', '2019-08-10 19:27:39'),
(14, 'Info Lomba Beasiswa', 2, 'SMP14.png', '2019-08-10 19:29:10'),
(15, 'Kampung Coklat', 1, 'SMP15.png', '2019-08-10 19:31:19'),
(16, 'Amaya', 1, 'SMP16.jpg', '2019-08-10 19:31:35'),
(17, 'Juragan Cathering', 1, 'SMP17.jpg', '2019-08-10 19:31:59'),
(18, 'Petik Madu', 1, 'SMP18.jpg', '2019-08-10 19:39:20'),
(19, 'AP', 1, 'SMP19.jpg', '2019-08-10 19:39:33'),
(20, 'Timezone', 1, 'SMP20.png', '2019-08-10 19:39:51'),
(21, 'Rumah Komponen', 1, 'SMP21.png', '2019-08-10 19:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_instansi` varchar(100) NOT NULL,
  `team_type` int(1) NOT NULL COMMENT '1 : Analoog; 2:Mikro',
  `team_nama_ketua` varchar(50) NOT NULL,
  `team_jekel_ketua` int(1) NOT NULL,
  `team_email_ketua` varchar(60) NOT NULL,
  `team_password` varchar(50) NOT NULL,
  `team_notel_ketua` varchar(50) NOT NULL,
  `team_nama_anggota` varchar(50) NOT NULL,
  `team_jekel_anggota` int(1) NOT NULL,
  `team_notel_anggota` varchar(50) NOT NULL,
  `team_nama_pembimbing` varchar(50) DEFAULT NULL,
  `team_jekel_pembimbing` int(1) DEFAULT NULL,
  `team_nip_pembimbing` varchar(50) DEFAULT NULL,
  `team_notel_pembimbing` varchar(50) DEFAULT NULL,
  `team_alamat_pembimbing` varchar(100) DEFAULT NULL,
  `team_instagram` varchar(50) NOT NULL,
  `kode_verif` varchar(12) NOT NULL,
  `verif_email` int(1) NOT NULL,
  `foto_ketua` varchar(50) DEFAULT NULL,
  `ktm_ketua` varchar(50) DEFAULT NULL,
  `foto_anggota` varchar(50) DEFAULT NULL,
  `ktm_anggota` varchar(50) DEFAULT NULL,
  `ktm_pembimbing` varchar(50) DEFAULT NULL,
  `bukti_bayar` varchar(50) DEFAULT NULL,
  `kunci_data` int(1) DEFAULT NULL,
  `sek` int(1) DEFAULT NULL COMMENT '1:selesai;0:belum',
  `ben` int(1) DEFAULT NULL COMMENT '1:selesai;0:belum',
  `lolos` int(1) DEFAULT NULL COMMENT '1:selesai;0:belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_name`, `team_instansi`, `team_type`, `team_nama_ketua`, `team_jekel_ketua`, `team_email_ketua`, `team_password`, `team_notel_ketua`, `team_nama_anggota`, `team_jekel_anggota`, `team_notel_anggota`, `team_nama_pembimbing`, `team_jekel_pembimbing`, `team_nip_pembimbing`, `team_notel_pembimbing`, `team_alamat_pembimbing`, `team_instagram`, `kode_verif`, `verif_email`, `foto_ketua`, `ktm_ketua`, `foto_anggota`, `ktm_anggota`, `ktm_pembimbing`, `bukti_bayar`, `kunci_data`, `sek`, `ben`, `lolos`) VALUES
(1, 'Megabot Cybertron', 'SMAN 14 BEKASI', 2, 'Adit Andri Hermawan', 1, 'aditandri91@gmail.com', 'e47b08312868ff986eed7b72d25455e4', '082122955654', 'Muhammad Faiz Rafsanjani', 1, '081213141235', NULL, NULL, NULL, NULL, NULL, 'aditandri15_', 'PD8T1LUWUJ', 1, 'FP1.jpg', 'K1.jpg', 'FP1.png', 'K1.png', NULL, 'BBY1.jpg', 0, 1, 1, 1),
(2, 'Brodolcar', 'Teknik Elektro Unversitas Brawijaya', 2, 'Wahyu Erwansyah', 1, 'wahyuerwansyah@gmail.com', '571c8f99c2a20133f18600c9900b4c6e', '081934919640', 'Nur Kholiq', 1, '0', NULL, NULL, NULL, NULL, NULL, '@erwansyah_w', 'NV82M4OFG1', 1, 'FP2.jpg', 'K2.jpg', 'FP2.jpg', 'K2.jpg', NULL, 'BBY2.jpg', 1, 1, 1, 1),
(4, 'AlfaZehn', 'Universitas Negeri Surabaya', 2, 'Alven Rochmania', 2, 'alvenrochma24@gmail.com', '3e8d666ac7fc041c9005f8d76ca11734', '085895670858', 'Nursifaun Nikmah', 2, '0895364815925', NULL, 1, NULL, NULL, NULL, 'alvenia10', 'K1R3FF87E2', 1, 'FP4.jpg', 'K4.jpg', 'FP4.jpg', 'K4.jpg', NULL, 'BBY4.jpg', 1, 1, 1, 1),
(5, 'ICTeam', 'SMAN 3 Malang', 1, 'Muhammad Zulkarnaen Purnamaputra', 1, 'zulkarnaen.p.putra@gmail.com', '53b69e9ed05a232c7756773a5f8aa648', '082337559246', 'Muhammad Zulkarnaen Purnamaputra', 1, '082337559246', 'Imam Hery Purnomo', 1, NULL, '08125293103', 'JL. Selat Sunda Raya D1/43, Sawojajar, Malang', 'muhammad_zulkar12', '7HBS5Q2NOH', 1, 'FP5.jpg', 'K5.jpg', 'FP5.jpg', 'K5.jpg', 'K5.jpg', 'BBY5.jpg', 1, 1, 1, 1),
(8, 'Testing Team', 'Perguruan Tinggi Percobaan', 1, 'Adam Maulana Dzikri', 1, 'faga12@gmail.com', '1d7c2923c1684726dc23d2901c4d8157', '085790327100', 'Rojaby', 1, '086790328100', 'Ani Kristina', 1, '1890678910001', '085790327100', 'Jalan Manadalawangi No 9', 'testinggann', '71XQ3C8PR5', 1, 'FP8.png', 'K8.png', 'FP8.png', 'K8.png', 'K8.png', 'BBY8.png', 1, 0, 0, 0),
(11, 'BTW team', 'SMK Telkom Malang', 2, 'Ardhi Zakhirul Qolby', 1, 'ardhizakhirul76@gmail.com', '11f28aab294359fd8a41331b6977f89d', '082332974654', 'Nadila Amalia Pribadi', 2, '085109302277', NULL, NULL, NULL, NULL, NULL, 'ardhi.zq_', 'A6UHOO61MO', 1, 'FP11.jpg', 'K11.jpeg', 'FP11.jpg', 'K11.jpeg', NULL, 'BBY11.jpeg', 1, 1, 1, 1),
(12, 'Sekawan', 'SMA Negeri 4 Bojonegoro', 1, 'Al ihza Ahmad Sabita', 1, 'alihzasabita03@gmail.com', 'adaa8bf3c27929e173b2ab78e14358f4', '082136426185', 'Arrori Ashar Hidayad', 1, '085895446352', 'Winanto', 1, '3522163006960003', '082136426185', 'Dusun lemahbang  kec. Balen kab. Bojonegoro', '@alihzaas', 'GEA83S12RI', 1, 'FP12.jpg', 'K12.jpg', 'FP12.jpg', 'K12.jpg', 'K12.jpg', 'BBY12.jpg', 1, 1, 1, 1),
(15, 'EIGHTFINS', 'SMK TELKOM MALANG', 2, 'Gilang Ardinata', 1, 'ardinatagilang4@gmail.com', '1a9231f6b57a26d86786c3e2eddc6439', '087756279879', 'Rida Ambar Wati', 2, '085784036804', NULL, NULL, NULL, NULL, NULL, 'ridaa.14', '2C01Q6FSCU', 1, 'FP15.jpg', 'K15.jpg', 'FP15.jpg', 'K15.jpg', NULL, 'BBY15.jpeg', 1, 1, 1, 1),
(16, 'Numi Robotik Keren', 'Smkn 2 Turen', 2, 'Muhammad ibnu rohman', 1, 'rohmanibnu26@gmail.com', '66781e13db0c7d3bf771d7e40692d475', '0895608903804', 'Millenia hilmi ikhwana', 2, '085807297691', NULL, NULL, NULL, NULL, NULL, 'muhammadibnurohman', 'MQWTW4UOB3', 1, 'FP16.jpg', 'K16.jpg', 'FP16.jpg', 'K16.jpg', NULL, 'BBY16.jpg', 1, 1, 1, 1),
(18, 'RR DOU-VENERATE', 'UNIVERSITAS MUHAMMADIYAH SURAKARTA', 2, 'Yusuf Nur Permadi', 1, 'khombank77@gmail.com', 'a6bafbeead07c56edc97afe5520e5221', '087838070944', 'Wahyu Hidayat', 1, '082242215020', NULL, NULL, NULL, NULL, NULL, '@yus_up_', '3O3JGO276I', 1, 'FP18.JPG', 'K18.jpg', 'FP18.jpg', 'K18.jpeg', NULL, 'BBY18.jpg', 1, 1, 1, 1),
(19, 'RR_B Nirvash', 'Universitas Muhammadiyah Surakarta', 2, 'Bima Eka Prasetyana', 1, 'bimaekap13@gmail.com', '8dca5f1c1aa3fb278d88ae33859357d0', '085800023923', 'Lukas Galih Roh Priyawan', 1, '0895384137978', NULL, NULL, NULL, NULL, NULL, 'bimaekap13', '3VGII15457', 1, 'FP19.jpg', 'K19.jpeg', 'FP19.jpeg', 'K19.jpeg', NULL, 'BBY19.jpeg', 1, 1, 1, 1),
(20, 'X-ploid', 'ITN MALANG', 2, 'Basuki Rachemat Wahyudi', 1, 'mesotrebellionrose@gmail.com', 'f93e4aa0e0bec2d15b521e756ab8b17c', '085733714143', 'M. Fadhli Roby', 1, '082331064941', NULL, NULL, NULL, NULL, NULL, 'mesotrebellionrose', 'Z50C63IH52', 1, 'FP20.png', 'K20.jpg', 'FP20.png', 'K20.jpg', NULL, 'BBY20.jpg', 1, 1, 1, 1),
(22, 'RR Dumble', 'Universitas Muhammadiyah Surakarta', 2, 'Ahmad Latif Yuliansyah', 1, 'playermodifiers@gmail.com', '7c4ec488b4bfdb30a2ea8b626686804d', '085786154164', 'Wisnu Tri Wibowo', 1, '085702590202', NULL, NULL, NULL, NULL, NULL, '@latifyuliansyah', 'O21Q17HRGM', 1, 'FP22.jpeg', 'K22.jpeg', 'FP22.jpeg', 'K22.jpeg', NULL, 'BBY22.jpeg', 1, 1, 1, 1),
(23, 'RR Minyak Indomie', 'UNIVERSITAS MUHAMMADIYAH SURAKARTA', 2, 'RIDHO BAROKNA PRADANA', 1, 'barokna2000@gmail.com', 'e4910046f2aaa469080fda8a222eb801', '083845685974', 'YUSUF ARRASYIID', 1, '081392229684', NULL, NULL, NULL, NULL, NULL, 'ridhobarokna', '6A7RJT7U3V', 1, 'FP23.jpg', 'K23.jpg', 'FP23.jpg', 'K23.jpg', NULL, 'BBY23.jpeg', 1, 1, 1, 1),
(24, 'Aviatrix', 'SMK Telkom Malang', 2, 'Evandani Giantino Rafif', 1, 'evanda1987@gmail.com', '59b85abc87b942635488b28544f64386', '082116857402', 'Tanaya Widya Dianingati', 2, '085806737408', NULL, NULL, NULL, NULL, NULL, 'evanda_rafif', '8KJ8440AJ2', 1, 'FP24.jpg', 'K24.jpg', 'FP24.jpg', 'K24.jpg', NULL, 'BBY24.jpg', 1, 1, 1, 1),
(25, 'RR MEGALODON', 'Universitas muhammadiyah surakarta', 2, 'Feby nurkalih sulistya putra', 1, 'd400160137@student.ums.ac.id', 'e99bb7f8d410fe73dd507911acf70a66', '085866848343', 'Syafira nur\'aini zahroh', 1, '082399317045', NULL, NULL, NULL, NULL, NULL, 'Lordfeby', 'O962TTWRX3', 1, 'FP25.jpg', 'K25.jpeg', 'FP25.jpeg', 'K25.jpeg', NULL, 'BBY25.jpeg', 1, 1, 1, 1),
(26, 'Yellaw Baby Holiday', 'MAN Kota Pasuruan', 1, 'Nur Fitria Ayu Latifa Azzahra', 2, 'fitrialatifa24@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Yusron Firdausi Ramadhan', 1, '081234726354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'XWTIPFK1GB', 1, 'FP26.jpg', 'K26.jpg', 'FP26.jpg', NULL, NULL, NULL, NULL, 0, NULL, 1),
(28, 'RR PolkaWars', 'Universitas Muhammadiyah Surakarta', 2, 'Dandi Oktavian', 1, 'masbagusasli@gmail.com', '96ec30569095300ce9f7a41ea486ef03', '082140542870', 'Muhammad Raka Saputra', 1, '081249168058', NULL, NULL, NULL, NULL, NULL, 'daandyoktavian', 'PSEURXR9OS', 1, 'FP28.jpg', 'K28.jpg', 'FP28.jpg', 'K28.jpg', NULL, 'BBY28.jpeg', 1, 1, 1, 1),
(32, 'JustNewbie', 'Universitas Brawijaya', 2, 'Marco Gunawan', 1, 'fazarosyadan@gmail.com', 'e87a9b29a5e49b5502b01886afcc2cb1', '082332306590', 'Faza Rosyadan Nandita Pratama', 1, '082332306590', NULL, NULL, NULL, NULL, NULL, 'fazarosyadan', 'ET4481SJK4', 1, 'FP32.jpg', 'K32.jpg', 'FP32.jpg', 'K32.jpg', NULL, 'BBY32.jpg', NULL, 0, 0, 0),
(33, 'RR GOBLINZ', 'UNIVERSITAS MUHAMMADIYAH SURAKARTA', 2, 'WAHYU YULI ALDIANTO', 1, 'tiyanurma00@gmail.com', '1d1a600a775dad2b641ab2d9cf13a394', '085701788366', 'TIYA NURMAWATI', 2, '082234713161', NULL, NULL, NULL, NULL, NULL, 'wahyu_aldi28', '6ZB7N3981Y', 1, 'FP33.jpg', 'K33.jpg', 'FP33.jpg', 'K33.jpg', NULL, 'BBY33.jpg', 1, 1, 1, 1),
(34, 'RR_Pikachu', 'Univeritas Muhammadiyah Surakarta', 2, 'FARADILLA FIKA SARI', 2, 'rr.pikachu2@gmail.com', 'd6df9caf61f66c730c70960063ec60f7', '082232777868', 'MEILINIA FATHARANI', 2, '081278195400', NULL, NULL, NULL, NULL, NULL, 'faradilla_vk', '3LKP522JEB', 1, 'FP34.jpeg', 'K34.jpeg', 'FP34.jpeg', 'K34.jpeg', NULL, 'BBY34.jpeg', 1, 1, 1, 1),
(35, 'RR Sifu', 'Universitas Muhammadiyah Surakarta', 2, 'Saifuddin Iqyanul Afi', 1, 'afi.saifudin7@gmail.com', 'c64ffe7f60009917c28b4958ae2e51e6', '083866886372', 'Dimas Lugia Hardianto', 1, '085755425650', NULL, NULL, NULL, NULL, NULL, 'saifuddin.afi', '71QVC4173M', 1, 'FP35.jpg', 'K35.jpg', 'FP35.jpg', 'K35.jpg', NULL, 'BBY35.jpg', 1, 1, 1, 1),
(36, 'Ichibot rms basmalah', 'Man sumenep', 2, 'DHAIVI ALMADANI', 1, 'farisnovil1@gmail.com', '9aeaf1d6f21fe60783dbc684041f71bd', '081936624338', 'Saifullah', 1, '081934935550', NULL, NULL, NULL, NULL, NULL, 'novil_faris@yahoo.co.id', 'D22OL4UCXU', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(37, 'RR_Nightmare', 'Universitas Muhammadiyah Surakarta', 2, 'Muhammad \'Alim Alfaridzi', 1, 'muhammadalim276@gmail.com', 'cc67e9034ff9fc03106051ba7b429d7f', '087837132196', 'Putri Ramadhani Roziqin', 1, '087871945537', NULL, NULL, NULL, NULL, NULL, '@alim.alfrdz', 'IE63NG1LSR', 1, 'FP37.jpg', 'K37.jpg', 'FP37.jpg', 'K37.jpg', NULL, NULL, NULL, 1, NULL, NULL),
(47, 'MRT guluk guluk timur', 'Universitas Trunojoyo Madura', 2, 'Ahmad azaimul hisan', 1, 'febrinurus@gmail.com', '47295b714855bdfedba48c4d5a923b9f', '085331503047', 'Lailiyah rohmawati', 2, '085755519693', 'Moh yusuf kholiq muntaha', 1, NULL, '0823379011998', 'Bangkalan', '@isan_karis0', 'JYL84JZ33Q', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(48, 'THE BOUJAN A', 'MTSN KOTA PROBOLINGGO', 1, 'NAUFAL AHMAD HAKIM', 1, 'ict.mtsnkotaprobolinggo@gmail.com', 'fb12a51413e40fba66ff92525e9fde4e', '085258804977', 'FATIMAH ZAHFARINA SALMA', 2, '085258804977', 'MALIK MARZUKI, S.Pd', 1, '-', '085338334675', 'Jl. Citarum 09 Kanigaran Kota Probolinggo 67212', 'naufal020705', '59XXN2G8LK', 1, 'FP48.jpg', 'K48.jpg', 'FP48.jpg', 'K48.jpg', 'K48.JPG', 'BBY48.png', 1, 1, 1, 1),
(49, 'THE BOUJAN B', 'MTSN KOTA PROBOLINGGO', 1, 'PONCO DWI RAHWANTO', 1, 'ict.kemenagkotaprobolinggo@gmail.com', 'fb12a51413e40fba66ff92525e9fde4e', '0895370226633', 'DIMAS CAHYA RAMADHAN', 1, '089697131270', 'MALIK MARZUKI, S.Pd', 1, '-', '085338334675', 'Jl. Citarum 09 Kanigaran Kota Probolinggo 67212', '@razer_zty', 'FZTSP1PK4I', 1, 'FP49.jpg', 'K49.jpg', 'FP49.jpg', 'K49.jpg', 'K49.JPG', 'BBY49.png', 1, 1, 1, 1),
(50, 'THE POSEIDON', 'MTSN KOTA PROBOLINGGO', 1, 'JAZZY KINDY FARENSYA', 2, 'narda.marzuki2012@gmail.com', 'fb12a51413e40fba66ff92525e9fde4e', '085338334675', 'LEANDRA ANDRIANNA HUSNIYAH', 1, '085338334675', 'MALIK MARZUKI, S.Pd', 1, '-', '085338334675', 'Jl. Citarum 09 Kanigaran Kota Probolinggo 67212', '@vanndzr', '7EEVYDY6JB', 1, 'FP50.jpg', 'K50.jpg', 'FP50.jpg', 'K50.jpg', 'K50.JPG', 'BBY50.png', 1, 1, 1, 1),
(51, 'TEAM LIQUID', 'MTSN KOTA PROBOLINGGO', 1, 'PRIMA HERTA ERLANGGA', 1, 'prodistik.mandapro2@gmail.com', 'fb12a51413e40fba66ff92525e9fde4e', '085338334675', 'FAIRUZ IZDIHAR RANIAH CITRA PRAMESTI', 2, '085338334675', 'MALIK MARZUKI, S.Pd', 1, '-', '085338334675', 'Jl. Citarum 09 Kanigaran Kota Probolinggo 67212', '@Khldsykr_23', '3CAK6Z475Y', 1, 'FP51.jpg', 'K51.jpg', 'FP51.jpg', 'K51.jpg', 'K51.JPG', 'BBY51.png', 1, 1, 1, 1),
(52, 'RR P_Spooky', 'Universitas Muhammadiyah Surakarta', 2, 'Heri Setyawan', 1, 'Herisetyawan311@gmail.com', '5aeae0e161cb3e637169370d418d5a4f', '088216688452', 'Naufal Wicaksono', 1, '081318398646', NULL, NULL, NULL, NULL, NULL, 'Hery_Pun', '87PJMYT5HR', 1, 'FP52.jpg', 'K52.jpg', 'FP52.jpg', 'K52.jpg', NULL, 'BBY52.jpg', 1, 1, 1, 1),
(53, 'PRESUNIV', 'universitas president', 2, 'Yogi Saputra', 1, 'evictory90@gmail.com', 'd0f3001575cd1ae44c73bb5ffa56d4e8', '082288647087', 'RIDHA MUHLITA PUTRA', 1, '085843694649', NULL, NULL, NULL, NULL, NULL, '@adamzahsuyutibakar', '3GNBWE7SLR', 1, 'FP53.jpeg', 'K53.jpeg', 'FP53.jpg', 'K53.jpeg', NULL, 'BBY53.jpg', 1, 1, 1, 1),
(60, 'Megabot oxff', 'Universitas nasional', 2, 'Lukman Firdaus', 1, 'lukmanfirdaus344@gmail.com', '46f8ac3c4d02fe736d85c7a53de2ee2a', '081212586326', 'Lukman Firdaus', 1, '081212586326', NULL, NULL, NULL, NULL, NULL, 'lukman_frdaus', 'OL1UF6OB4F', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(61, 'Twin\'s Carox\'s', 'SMAN 1 Pamekasan', 1, 'Syafrita Efendy', 2, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '082334477250', 'Syafrila Efendy', 2, '085940444863', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@auliaaa.ig', 'HC3G4QF849', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(62, 'Toyyib Carox\'s', 'SMAN 1 Pamekasan', 1, 'Ahmad Maulana S.', 1, 'putrifebyawati@gmail.com', 'e416f4d629794c84d7687e479332abdf', '082332969328', 'Auliatur Rohmah', 2, '085259342007', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@ahmad_riio', 'R2U1376JQZ', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(63, 'Jemblong Carox\'s', 'SMAN 1 Pamekasan', 1, 'Ricky Wahyu Bagus P.', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '081233235383', 'Yulia Adinda', 2, '081332121232', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@rickywahyu01', '8QTPX7GOHP', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(64, 'Hobbs Carox\'s', 'SMAN 1 Pamekasan', 1, 'Alamussofiyullah', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '085334226669', 'Radika Akmal', 1, '087863510521', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@radikaakmal', 'NNV1NP4WY5', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(65, 'To\'ol Carox\'s', 'SMAN 1 Pamekasan', 1, 'Alief Ananta F.R.', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '087863254602', 'Satria Wahyudi Utomo', 1, '082334333011', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@a.ananta.f', 'X31BUZBA9L', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(66, 'Beast Carox\'s', 'SMAN 1 Pamekasan', 1, 'Moh. Shohibul Daksena', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '081946597523', 'Fahmi Maulidan', 1, '087750620708', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@daksena.id', 'GZB8J35PCX', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(67, 'Carox\'s Mbanben', 'SMAN 1 Pamekasan', 1, 'Tegar Isnain Muharram', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '082334823132', 'Erico Arganata M.', 1, '081249566282', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@cocoaaa507', 'ITJIGVFGNR', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(68, 'Barokah Carox\'s', 'SMAN 1 Pamekasan', 1, 'Ivan Aditya Pratama', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '081913619448', 'Alvin Rahadiansyah A.', 1, '082331766700', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@ivanaditya15', '6IFMW42T5K', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(69, 'Mayuh Carox\'s', 'SMAN 1 Pamekasan', 1, 'Rizal Dzakwan H.', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '087701934001', 'Faishol Nuris Sholihin', 1, '085231213131', 'Rizky Saputra Mariyono, S.Pd', 1, NULL, '085330145032', 'Jl. R. Abd. Azis No. 15B Pamekasan', '@rizalhanindyatama', 'T66E8S1F23', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(70, 'Meikylodon Carox\'s', 'SMAN 1 Pamekasan', 2, 'Qodriyanto Romadhani', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '081911800009', 'Ricky Furqon As-Tsaqafy', 1, '085335111122', NULL, NULL, NULL, NULL, NULL, '@_riyannn', '36V288TL36', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(71, 'Le\' ida Carox\'s', 'SMAN 1 Pamekasan', 2, 'M. Sultan Arif', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '081333372629', 'Miftahul Ilmy', 1, '085745604428', NULL, NULL, NULL, NULL, NULL, '@ramaa_ram', 'PW184MVX6P', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(72, 'Sakteh Carox\'s', 'SMAN 1 Pamekasan', 2, 'Farhan Hamonangan S.', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '081331673609', 'M. Khairut Tamimi', 1, '082337555668', NULL, NULL, NULL, NULL, NULL, '@farhnsnga_', 'IA1IL5G1AA', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(73, 'JustNewbie', 'Universitas Brawijaya', 2, 'Marco Gunawan', 1, 'fazarosyadan@gmail.com', 'e87a9b29a5e49b5502b01886afcc2cb1', '082332306590', 'Faza Rosyadan Nandita Pratama', 1, '082332306590', NULL, NULL, NULL, NULL, NULL, 'fazarosyadan', 'NS2JGH6NE3', 1, 'FP73.jpg', 'K73.jpg', 'FP73.jpg', 'K73.jpg', NULL, 'BBY73.jpg', 1, 1, 1, 1),
(74, 'Bhiyer Carox\'s', 'SMAN 1 Pamekasan', 2, 'Wahyu Kuswijanarko', 1, 'putrifebyawati@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '087850117718', 'Syafrie Bachtiar', 1, '085257320008', NULL, NULL, NULL, NULL, NULL, '@wahyu_kuswijanarko', '2FJCVKZB8K', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(75, 'umi_squad', 'SMK TELKOM-MALANG', 2, 'R M Rizqi Erlangga', 1, 'muhammad_rizqi_27tkj@student.smktelkom-mlg.sch.id', '0148e5b789bf32f571409d9023384310', '085814437904', 'Rendi Nicolas Mahendra', 1, '085707030185', NULL, NULL, NULL, NULL, NULL, 'rizqi_erl_angga', '9KG4Y9A9UG', 1, 'FP75.jpeg', 'K75.jpeg', 'FP75.jpg', 'K75.jpeg', NULL, 'BBY75.jpeg', 1, 1, 1, 1),
(77, 'Ratu Robotic 1', 'SMKN 1 REJOTANGAN', 1, 'Mahendra Abdul Aziz', 1, 'endrajay87@gmail.com', 'eed7601fe3b14f348f0cee4da62deed9', '081233623208', 'Akmal Endrajaya', 1, '085732447195', 'Ahmad Wildan', 1, NULL, '085732361252', 'Tulungagung', '@mhndraa22', '2GV885N6T1', 1, 'FP77.jpeg', 'K77.jpeg', 'FP77.jpeg', NULL, NULL, 'BBY77.jpeg', NULL, 0, 1, 1),
(81, 'Ratu Robotic 2', 'SMKN 1 REJOTANGAN', 1, 'Galih Dwi Yogatama', 1, 'yogatamq48@gmail.com', '3265c569f3d1f00b371e90080d6ab5dd', '087886766042', 'Chrisna Hadi Wijaya', 1, '085790878131', 'Dedy Subagyo', 1, NULL, '085655627268', 'Tulungagung', '@galih_dwiyoga', 'K1N51RCUIE', 1, 'FP81.jpeg', 'K81.jpeg', 'FP81.jpeg', NULL, NULL, 'BBY81.jpeg', NULL, 0, 1, 1),
(82, 'ICHIBOT-RATU ROBOTIC A', 'SMKN 1 REJOTANGAN TULUNGAGUNG', 2, 'MUHAMMAD IQBAL KHUMAINI', 1, 'iqbalkhumaini86@gmail.com', 'df9bf084d8ca8f7f4871e6663b7e7025', '85790410123', 'RUDI SALAM', 1, '085718201841', NULL, NULL, NULL, NULL, NULL, 'iqbal_khumaini_711', 'IDDZ484XQT', 1, 'FP82.jpg', 'K82.jpg', 'FP82.jpg', 'K82.jpg', NULL, 'BBY82.jpg', 1, 1, 1, 1),
(83, 'ICHIBOT-RATU ROBOTIC B', 'SMKN 1 REJOTANGAN TULUNGAGUNG', 2, 'MUHAMMAD ALDI KURNIAWAN', 1, 'aldikurni2675@gmail.com', '22e5d013b687e087ae1678a62a183506', '082338656250', 'NICKO JULIO', 1, '821039381917', NULL, NULL, NULL, NULL, NULL, 'muhammad_aldikurniawan', '7173JWMMVQ', 1, 'FP83.jpg', 'K83.jpg', 'FP83.jpg', 'K83.jpg', NULL, 'BBY83.jpg', 1, 1, 1, 1),
(85, 'Prosmart Robotic Assalaam', 'SMA ASSALAAM SUKOHARJO', 1, 'M. ATTAR. GIBRAN', 1, 'attar.gibran1724@gmail.com', 'df9f55c7dc67f7f80bff90a760238615', '081335074093', 'RIZKY HAMDANI', 1, '081335074093', 'WAHYUDI PRABOWO', 1, NULL, '081335074093', 'Perumahan Assalaam No 5 Pabelan,Surakarta', '@atrgb_', 'I52IDKAA64', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(86, 'WP_maneh', 'POLINEMA', 2, 'M SATRIA MADANI', 1, 'madanisatria@gmail.com', '879a7b606fa9d6ad57367bf25313e563', '085784068505', 'FADILLAH SATRIA BUMI', 1, '089622820620', NULL, NULL, NULL, NULL, NULL, 'mad_daani', 'IH4ZJ81V25', 1, 'FP86.jpeg', 'K86.jpeg', 'FP86.jpeg', 'K86.jpeg', NULL, 'BBY86.jpeg', 1, 1, 1, 1),
(87, 'MDR_Bismillah', 'MAN 2 Tulungagung', 1, 'Winy Ainia', 1, 'winyainia65@gmail.com', 'bcde6de2c6c3b8c22349c7f5a7962e99', '085852746022', 'Rizqina Sabilla El Fany', 1, '082266034408', 'Ihyaudin Al Ghozali', 1, NULL, '085749023329', 'Boyolangu, Tulungagung', '@wny.ai', '1ESBXCWEET', 1, 'FP87.', 'K87.jpg', 'FP87.', 'K87.jpg', 'K87.jpg', NULL, NULL, 1, NULL, NULL),
(88, 'Ichibot rms hamdalah', 'Man Sumenep', 2, 'Aldi shofiyan maulana', 1, 'aldyochobotz@gmail.com', '8faa84cd6bd1ac4836325036e5ad0074', '081945553351', 'Moh. Syukron katsir', 1, '085330274007', NULL, 1, NULL, NULL, NULL, 'dhaniregas22', 'HHC3OBTUPO', 1, 'FP88.jpeg', 'K88.jpeg', 'FP88.jpeg', 'K88.jpeg', NULL, 'BBY88.jpg', 0, 1, 1, 1),
(89, 'SINGO SORE_ONE', 'SMK SORE TULUNGAGUNG', 2, 'AHMAD SYIFAUL UYUN', 1, 'agung.electrical.eng88@gmail.com', '277f052a74ab290f1de6038d929d9f67', '87865102139', 'AHMAD BASTOMI', 1, '087715814537', NULL, NULL, NULL, NULL, NULL, '@ahmadsyifaul_27', '95PHYL5HT5', 1, 'FP89.jpeg', 'K89.jpeg', 'FP89.jpeg', 'K89.jpeg', NULL, 'BBY89.jpeg', 1, 1, 1, 1),
(90, 'SINGO SORE_TWO', 'SMK SORE TULUNGAGUNG', 2, 'MOCHAMAD ADITYA YAHYA', 1, 'agungsetyono30@gmail.com', '0ffae8e0652006887a49d175846bd2a8', '088217319300', 'FAKIH FABIDIN', 1, '085645926751', NULL, NULL, NULL, NULL, NULL, '@aditya_yahyaa', 'QMY50I1KB7', 1, 'FP90.jpeg', 'K90.jpg', 'FP90.jpeg', 'K90.jpeg', NULL, 'BBY90.jpeg', 1, 1, 1, 1),
(91, 'The Principle', 'President University', 2, 'Muhammad Rayhan Syahida Ramadhan', 1, 'rayhansyahida00@gmail.com', 'd69727642f90d2b6364b87f6c2ada233', '08112638066', 'Indra Eka Prayoga', 1, '087777793616', NULL, 1, NULL, NULL, NULL, 'muhammad_rayhan_00', 'DPPMY16DL9', 1, 'FP91.jpeg', 'K91.jpeg', 'FP91.jpg', 'K91.jpg', NULL, 'BBY91.jpg', 1, 1, 1, 1),
(92, 'WP_Yawes', 'Polinema', 2, 'M. Yovandra Effendy', 1, 'effendyyovandra@gmail.com', '46ba8ca15fe082236b7f6f1b93ca3dcf', '081252146735', 'Fajar Enrico', 1, '083834180040', NULL, NULL, NULL, NULL, NULL, '@effendy8_', 'PIDBR6H6UB', 1, 'FP92.jpg', 'K92.jpg', 'FP92.jpg', 'K92.jpg', NULL, 'BBY92.jpg', 1, 1, 1, 1),
(93, 'TheExpendables74', 'SMA Muhammadiyah 1 Babat', 1, 'Ahmad Ghulam Amrullah', 1, '13amrullah@gmail.com', 'ea96721af7661ed75a43db0371ccd0f4', '081336382696', 'Ardi Febrianto', 1, '0856493300262', NULL, 1, NULL, NULL, NULL, '@13amrullah_', 'JEECADK210', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0),
(94, 'The Expendables74', 'SMA Muhammadiyah 1 Babat', 1, 'Ahmad Ghulam Amrullah', 1, '13amrullah@gmail.com', 'ea96721af7661ed75a43db0371ccd0f4', '081336382696', 'Ardi Febrianto', 1, '085649330262', 'Kusnari', 1, '-', '085230798588', 'desa nguwok, kec modo, kab lamonga', '@13amrullah_', '76KLF75GY3', 1, 'FP94.jpeg', 'K94.jpg', 'FP94.jpg', 'K94.jpg', 'K94.jpg', 'BBY94.jpg', 1, 1, 1, 1),
(95, 'DNS', 'SMK NEGERI 2 KOTA PROBOLINGGO', 2, 'HILAL ALI ALGARI', 1, 'hilaln2431@gmail.com', '740458dc580817891848b140234ece4a', '085731525941', 'DICKY AJI SYAH PUTRA', 1, '082301277919', NULL, NULL, NULL, NULL, NULL, '@hilalalgari', 'MTJDPQ7X6U', 1, 'FP95.jpg', 'K95.jpg', 'FP95.jpg', 'K95.jpg', NULL, 'BBY95.jpg', 1, 1, 1, 1),
(102, 'MAXIMUS RBT', 'SMK NEGERI 2 KOTA PROBOLINGGO', 2, 'ROYHAN HABIBIE', 1, 'bendulbawel@gmail.com', 'ad15e762dc1d7e86d205ff43589e808b', '082230542745', 'ADITYA BINTANG DWI WAHYU PANGESTU', 1, '082229365366', NULL, NULL, NULL, NULL, NULL, '@r_hanz8', 'G6QFCLGKF9', 1, 'FP102.jpg', 'K102.jpg', 'FP102.jpg', 'K102.jpg', NULL, 'BBY102.jpg', 1, 1, 1, 1),
(104, 'Ichibot MRT Zaid', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'Moh. Subhan Wildan', 1, 'wildan.subhan24@gmail.com', 'b7037eda401933ba6436894c285301b2', '082331054789', 'Salma Yonis Amelia Maulidya', 2, '085217251821', NULL, NULL, NULL, NULL, NULL, 'salma__yo', 'KTIE485C3Z', 1, 'FP104.jpg', 'K104.jpeg', 'FP104.jpg', 'K104.jpg', NULL, 'BBY104.jpeg', NULL, 1, 1, 1),
(105, 'Tayo Miber', 'SMK NEGERI 2 KOTA PROBOLINGGO', 2, 'AHMAD MAULANA FAHRIL', 1, 'achmadfaizin2001@gmail.com', '443ffad0a0acfc3f0a0e4817cf23715e', '0895425374050', 'Achmad Faizin', 1, '085256164987', NULL, NULL, NULL, NULL, NULL, '@achmadfaizin_28', 'PVN6KT33GC', 1, 'FP105.jpg', 'K105.jpg', 'FP105.jpg', 'K105.jpg', NULL, 'BBY105.jpg', 1, 1, 1, 1),
(106, 'Blackout-TB', 'ITN MALANG', 2, 'Anom Bayu Nugroho', 1, 'anomb38@gmail.com', '7e8de7995818701888c85f5244aaed1e', '089526896369', 'M. S. Akmaluddin', 1, '085338959701', NULL, NULL, NULL, NULL, NULL, 'anom_b', 'VHC571IO05', 1, 'FP106.jpg', 'K106.jpg', 'FP106.jpg', 'K106.jpg', NULL, 'BBY106.jpg', 1, 1, 1, 1),
(107, 'WP_Mochillo', 'Politeknik Negeri Malang', 2, 'Achmad Arif Bryantono', 1, 'arief372@gmail.com', '4b641ced5c573c5a8a7c3e661fcd30f9', '087859541022', 'Muhammad Nur Hidayatullah Adzani', 1, '081235861144', NULL, NULL, NULL, NULL, NULL, 'arifbryan', '95WC7FDDQT', 1, 'FP107.jpg', 'K107.jpeg', 'FP107.jpg', 'K107.jpg', NULL, 'BBY107.jpg', 1, 1, 1, 1),
(109, 'Sterotic Jaya', 'SMAN 4 Malang', 2, 'Muhammad Febrian Harnianza', 1, 'rianharnianza@gmail.com', '098d0d8cd6982e7ab923a851965e33e2', '082139107028', 'Mochammad Zaky Zamroni', 1, '085233647014', NULL, NULL, NULL, NULL, NULL, 'febrian_mh', 'WPT7SIVHNC', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'STEROTIC FOX', 'SMAN 4 MALANG', 2, 'Muhammad Romadhani Prabowo', 1, 'rakarafa888@gmail.com', '80ea8fc9ea2420e84c23297d7b25ab34', '089649936546', 'Raka Raditya Pranowo', 1, '089649936546', NULL, NULL, NULL, NULL, NULL, 'rakaraditya_pranowo', 'XP6WI85HK5', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'NAGK STEROTIC', 'SMA NEGERI 4 MALANG', 2, 'Mochammad Zaky Zamroni', 1, 'zakyzufgt@gmail.com', '20c5ce37b5b6c1486b465719d68ca8aa', '08970836076', 'Muhammad Fazlur Rahman', 1, '08976480113', NULL, NULL, NULL, NULL, NULL, 'zakyzuf_gt', 'IZW70V52IW', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'WP_', 'Politeknik Negeri Malang', 2, 'Bagus Pujo Prasasti Adjie', 1, 'nanogigantor@gmail.com', '8e86100c00526a2d9b6570b85d1eaae2', '089689429366', 'Achmad Rofiuddin H.F', 1, '083834523694', NULL, NULL, NULL, NULL, NULL, 'bagus.pujo', '1NA5814D5Q', 1, 'FP114.jpeg', 'K114.jpeg', 'FP114.jpeg', 'K114.jpg', NULL, NULL, NULL, 1, NULL, NULL),
(115, 'Ichibot rms basmalah', 'Man Sumenep', 2, 'Dhaivi almadani', 1, 'dhaivialmadani@gmail.com', 'f5f7311ee9de5695708a5424f03813cc', '081946760764', 'Ahmad Suyudi Rustam', 1, '085259280872', 'Faris Novil Dwi Roziqi', 1, NULL, '085233092916', NULL, 'daniregas22', '2F1N5MG36R', 1, 'FP115.jpg', 'K115.jpg', 'FP115.jpg', 'K115.jpg', NULL, 'BBY115.jpg', 1, 1, 1, 1),
(116, 'WP_Dasarnub', 'Politeknik negeri malang', 2, 'Ferry Irawan Budiyanto', 1, 'cangcutz20@gmail.com', '98351f56f5e63f99fee59f64e912a2b8', '082132032727', 'Hamdunatun Nashifah', 1, '0895340032681', NULL, NULL, NULL, NULL, NULL, '@hamdunan', '3LB13AFL0F', 1, 'FP116.jpg', 'K116.jpg', 'FP116.jpg', 'K116.jpg', NULL, 'BBY116.jpg', 1, 1, 1, 1),
(117, 'AituMEGA_Robotics', 'Politeknik Elektronika Negeri Surabaya', 2, 'Ghagas Prabaswara', 1, 'ghagas22@gmail.com', '32d99022178ae3cb61cd6007f9ea98b4', '081332070551', 'Aji Sasongko Jati', 1, '082231905774', NULL, NULL, NULL, NULL, NULL, 'aitumega robotics', 'B21FI4D86H', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'SmansaYouth', 'SMAN 1 GRESIK', 1, 'Erry Alfredo Trisandi', 1, 'erryt098@gmail.com', 'a3cac12e6595de19c56f8d5333190c9c', '082139932030', 'Nabila farah azzah', 2, '081336864617', 'Abd muhaimin', 1, NULL, '08999994929', 'Jalan margorejo indah 142', 'erryaalfredo', 'HTL7F2XPN3', 1, 'FP119.jpg', 'K119.jpg', 'FP119.jpg', 'K119.jpg', 'K119.jpg', 'BBY119.jpg', 1, 1, 1, 1),
(120, 'LT-HANGTUAH', 'Universitas HangTuah Surabaya', 2, 'Deni Triya Budi Prasetia', 1, 'timrobotuht@gmail.com', '8b33958d95222c3b47e1f95d0063f742', '082331786529', 'Isnaendi febriyanto tampela', 1, '085808953253', NULL, NULL, NULL, NULL, NULL, '@hangtuahrobocup', '1Z2663J1V7', 1, 'FP120.png', 'K120.jpeg', 'FP120.jpeg', 'K120.jpeg', NULL, 'BBY120.jpg', 1, 1, 1, 1),
(121, 'MDR_Lillahita\'ala', 'MAN 2 TULUNGAGUNG', 1, 'WAHID MUZAYYANI NOOR', 1, 'mbradus.yaya@gmail.com', '59a3fc39daa8765125930438d615ee1d', '0881036212454', 'AWANG RAHMAT FATULLOH', 1, '087751951835', 'IHYA UDIN AL GHOZALI', 1, '3504021307960002', '085749023329', 'Beji, Boyolangu, Tulungagung', '@yaya_n_g', '347QR362TI', 1, 'FP121.jpg', 'K121.jpg', 'FP121.jpg', 'K121.jpg', 'K121.jpg', 'BBY121.jpg', 1, 1, 1, 1),
(122, 'i - vtec RB', 'Universitas PGRI Madiun', 2, 'Rudi Pratama', 1, 'anandabella67@gmail.com', 'b62e00bbac556cdf03556af9d976687a', '081217544713', 'Ananda Bella Larasati', 1, '081217544713', NULL, NULL, NULL, NULL, NULL, 'rudipratama.9', 'RALI5KR7CH', 1, 'FP122.jpg', 'K122.jpg', 'FP122.jpg', NULL, NULL, 'BBY122.jpg', NULL, NULL, 1, 1),
(123, 'muntadhor_smp', 'SMP Al Ma\'hadul Islami  Beji', 1, 'Mirza Ali Fajr Nashrullah', 1, 'ali.bafagih@hotmail.com', 'd18ae09dab03d5797e7ba5fd88fb8af3', '081936969469', 'muhammad aly mahdi', 1, '089505054242', 'ali uroidhi', 1, NULL, '081936969469', 'jl. musing 634 singopolo bangil', 'aliuroidhibafagih', 'HXCR33VU40', 1, 'FP123.JPG', 'K123.jpg', 'FP123.JPG', 'K123.jpg', 'K123.jpg', 'BBY123.png', 1, 1, 1, 1),
(124, 'muntadhor_SMA', 'SMA Al Ma\'hadul Islami  Beji', 2, 'AMMAR ABU FADHEL', 1, 'saifuali.bafagih@gmail.com', 'd18ae09dab03d5797e7ba5fd88fb8af3', '089505054242', 'ja\'far shodiq', 1, '081936969469', NULL, NULL, NULL, NULL, NULL, 'aliuroidhibafagih', '5OWS1WMO4L', 1, 'FP124.JPG', 'K124.jpg', 'FP124.JPG', 'K124.jpg', NULL, 'BBY124.png', 1, 1, 1, 1),
(125, 'SINGOMENGKOK', 'SMK SUNAN DRAJAT LAMONGAN', 2, 'AHMAD DANU NAYLUL UMAM', 1, 'mizanul.ahsan13@gmail.com', '271873219018727c4d50a298fd9fc257', '085755712731', 'WILDAN NUR ROSYIDI', 1, '085755712731', NULL, NULL, NULL, NULL, NULL, '@ahsanmizan', 'BVU5TFZ2P7', 1, 'FP125.jpeg', 'K125.jpg', 'FP125.jpeg', 'K125.jpeg', NULL, 'BBY125.jpg', 1, 1, 1, 1),
(126, 'Armus is back', 'Sma negeri 1 Lamongan', 2, 'Alfian Nurul Firmansyah', 1, 'alfinmk03@gmail.com', '8606c00dd0519823dd31e565780eb496', '0895396427900', 'Afif Ramadhan G.P', 1, '081247663063', NULL, NULL, NULL, NULL, NULL, 'Alfinf17', '760ED1V54I', 1, 'FP126.jpg', 'K126.jpg', 'FP126.jpg', 'K126.jpg', NULL, 'BBY126.jpg', 1, 1, 1, 1),
(127, 'Armus Comingsoon', 'SMA NEGERI 1 LAMONGAN', 2, 'Muhammad Dwi Wahyu Permana', 1, 'm.d.permana.13@gmail.com', '489a85059f5f64a2b96c99b32a623933', '085895479778', 'Moh. Ilham Ardiyansyah', 1, '085790825565', NULL, 1, NULL, NULL, NULL, 'yhundut', '5JL1BVF1JI', 1, 'FP127.jpg', 'K127.jpg', 'FP127.jpg', 'K127.jpg', NULL, 'BBY127.jpg', 1, 1, 1, 1),
(128, 'RC1 DRAGON', 'UPTD GRAHA TEKNOLOGI SRIWIJAYA (SUMSEL)', 2, 'Adyatma Utama Beumaputra', 1, 'adyatmautama@gmail.com', '5159d861248286e6885db6559257600f', '082282385244', 'Karina Novita Elnova', 2, '6289507671350', NULL, NULL, NULL, NULL, NULL, 'roboticsmansa', 'MWCBX37759', 1, 'FP128.jpg', 'K128.jpg', 'FP128.jpg', 'K128.jpg', NULL, 'BBY128.jpg', 1, 1, 1, 1),
(131, 'I-VTEC BJ', 'UNIVERSITAS PGRI MADIUN', 2, 'RIZQI ZAMZAM FIRMANSYAH', 1, 'zamzamrizqi27@gmail.com', 'fac92ca76a8fa99caf2d3e1d58a87d48', '082131656201', 'WHILYS VERDHY NANSYAH', 1, '081392974347', NULL, NULL, NULL, NULL, NULL, '@rzqzamzam', '550J6O4GCM', 1, 'FP131.jpg', 'K131.jpg', 'FP131.jpg', 'K131.jpg', NULL, 'BBY131.jpg', 1, 1, 1, 1),
(132, 'Legend sriwijaya', 'Uptd graha teknologi sriwijaya(sumsel)', 2, 'Yudhi mardianto', 1, 'yudhigokil48@gmail.com', '6f8b066b79e1c43d4e45dab39ce8c230', '089627029708', 'Asraf', 1, '083176738128', NULL, NULL, NULL, NULL, NULL, 'Robotiksmamdupa', 'XYF64V1MWP', 1, 'FP132.jpg', 'K132.jpg', 'FP132.jpg', 'K132.jpg', NULL, 'BBY132.jpg', 1, 1, 1, 1),
(133, 'WP_Sadbox', 'Politeknik Negeri Malang', 2, 'Bagus Pujo Prasasti Adjie', 1, 'nanogigantor@gmail.com', '8e86100c00526a2d9b6570b85d1eaae2', '089689429366', 'Achmad Rofiuddin H.F', 1, '083834523694', NULL, NULL, NULL, NULL, NULL, 'bagus.pujo', '5T2LKEXL36', 1, 'FP133.jpeg', 'K133.jpeg', 'FP133.jpeg', 'K133.jpg', NULL, 'BBY133.jpg', 1, 1, 1, 1),
(134, 'Magnum Tronic', 'SMK Al Huda Kota Kediri', 1, 'Petrika Lubis Pradana', 1, 'kangabdian25@gmail.com', '132e703714a8160a049cf3c2be96bd05', '081450354034', 'Cucun Andrianto', 1, '081554579484', 'Abdian Putra Primana, S.Pd.', 1, NULL, '085790377953', 'Jl. Musi No. 20, RT 03 / RW 08, Kota Blitar', '@abdianputraprimana', '0YYO6448UQ', 1, 'FP134.jpeg', 'K134.jpeg', 'FP134.JPG', 'K134.jpeg', 'K134.jpeg', 'BBY134.jpeg', 1, 1, 1, 1),
(135, 'Beat Sonic', 'SMK Al Huda Kota Kediri', 2, 'Kharis Hanafi', 1, 'kangabdian25@gmail.com', 'a26b2ed9007f03ea2f6d2beb5580a58b', '085755166005', 'Rizky Ramadhan', 1, '085815889711', NULL, NULL, NULL, NULL, NULL, '@kharis_hanafi', 'J6C57X89SD', 1, 'FP135.jpg', 'K135.jpeg', 'FP135.png', 'K135.jpeg', NULL, 'BBY135.jpeg', 1, 1, 1, 1),
(136, 'I- Vtech Langit Biru', 'Universitas PGRI Madiun', 2, 'Pramudya', 1, 'pramudia190@gmail.com', 'afc1c053c2309923ca8a6fd79872c433', '08170963422', 'Galang Satria', 1, '085708269502', NULL, 1, NULL, NULL, NULL, 'Pram_ud', '2RV617I035', 1, 'FP136.jpg', 'K136.jpg', 'FP136.jpg', 'K136.jpg', NULL, 'BBY136.jpg', 1, 1, 1, 1),
(147, 'VERORA', 'MTsN 3 NGANJUK', 1, 'RAHMA KUMARA PRABANDARI', 2, 'sadiyani78@gmail.com', '349de807f0de75c8f3a43e1cca3d5cb7', '081241317551', 'Veronika Rafika Anggraini', 2, '08113313189', 'Umi Asaroh,SE', 2, '197209122007102002', '08113313189', 'Dk Prambon Tegaron Kec. Prambon Kab, Nganjuk', 'Kumara_rahma', 'W5QGSYR52E', 1, 'FP147.jpeg', 'K147.jpeg', 'FP147.jpeg', 'K147.jpeg', 'K147.jpeg', NULL, NULL, 1, 1, 1),
(148, 'SYZY', 'MTsN 3 Nganjuk', 1, 'M. Syauqi Ridlo', 1, 'dyraaura57@gmail.com', '9a67150602032fac76b2fb3658ce31bd', '085649209177', 'Zydan Izza Fadila', 1, '081259618351', 'Atik Urrohmah. Spd', 2, NULL, '082131030070', 'Griya kepuh asri Kertosono', 'syauqi_ridlo', '75UKVIZ4LM', 1, 'FP148.jpeg', 'K148.jpeg', 'FP148.jpeg', 'K148.jpeg', 'K148.jpeg', NULL, NULL, 1, 1, 1),
(149, 'ARMUS End Of Era', 'SMAN 1 LAMONGAN', 2, 'Vyandra Putra Bintang Dwi Wandi', 1, 'vyandra45@gmail.com', '5490323fa0df15586993505e8c7230e5', '089665766268', 'Ravilian Dwi Lesmana', 1, '085735929709', NULL, NULL, NULL, NULL, NULL, 'vyandra.ptr', '5GNM63442K', 1, 'FP149.jpg', 'K149.jpg', 'FP149.jpg', 'K149.jpg', NULL, 'BBY149.png', 1, 1, 1, 1),
(150, 'RINAMALA', 'MTsN 3 NGANJUK', 1, 'MAULA PUTRI ASYHARI', 2, 'karinazahra02@gmail.com', '76b2b186230fc5ee3dc469899b173cf7', '082231373321', 'KARINA FATIMATUL ZAHRA', 2, '082334887343', 'ATIK MAHZUNI,S.Pd.I', 2, '198204262009012014', '085330083661', 'JUWET NGRONGGOT NGANJUK', 'laputehriiii', 'E5SRL372DY', 1, 'FP150.jpeg', 'K150.jpeg', 'FP150.jpeg', 'K150.jpeg', 'K150.jpeg', NULL, NULL, 1, 1, 1),
(152, 'RC1 KNIGHT', 'UPTD GRAHA Teknologi Sriwinaya (Sumsel)', 2, 'Muhammad Refki Maliki', 1, 'malikirefki@gmail.com', '5159d861248286e6885db6559257600f', '0895621493494', 'Muhammad Delvansyah Farid', 1, '08127446669', NULL, 1, NULL, NULL, NULL, '@roboticsmansa', 'H3183X03J7', 1, 'FP152.jpg', 'K152.jpg', 'FP152.jpg', 'K152.jpg', NULL, 'BBY152.jpg', 1, 1, 1, 1),
(153, 'GRONE 1', 'SMA NEGERI 1 BOJONEGORO', 1, 'SYECARIO ALMAS YUMNA FEPRIANSYAH', 1, 'syecario81@gmail.com', 'a20579f8405f0e9e8dde704a9158da9c', '081259995477', 'Asy-Syifa Mahardika', 1, '0895805336677', 'Muchamad Azis Setiawan', 1, NULL, '085730084447', 'Bojonegoro, Jawa Timur', '@syecarioal', 'R2EX383VV1', 1, 'FP153.jpg', 'K153.jpg', 'FP153.jpg', 'K153.jpg', NULL, 'BBY153.jpg', NULL, NULL, 1, 1),
(154, 'GRONE 2', 'SMA NEGERI 1 BOJONEGORO', 1, 'M. HUSEIN  MUSTHAFA', 1, 'wahyu12saputro@gmail.com', 'f1e1e503ee38e0e5e3514fab913a0b16', '085719023650', 'Wahyu Tri Saputro', 1, '089626197169', 'Muchamad Azis Setiawan', 1, NULL, '085730084447', 'Bojonegoro, Jawa Timur', '@huseinmusthafa', '72B57433EH', 1, 'FP154.jpeg', 'K154.jpg', 'FP154.jpg', 'K154.jpg', NULL, 'BBY154.jpg', NULL, NULL, NULL, 1),
(155, 'GRONE 4', 'SMA NEGERI 1 BOJONEGORO', 1, 'Bagus Adi Prayogo', 1, 'santibaguslasman@gmail.com', 'cfd422c1ad98c5027974b6456cc64df2', '085336330357', 'Yogi Dwi Muriyanto', 1, '085230888684', 'Muchamad Azis Setiawan', 1, NULL, '085730084447', 'Bojonegoro, Jawa Timur', '@mbahmenut', 'J9CWUJQR3G', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'DAULAH BANI ALIYAH', 'MA PPMI ASSALAAM', 1, 'Faiq Muhammad Arif', 1, 'faiqmarif@outlook.com', '5ad50a6a97514ac64558032a3cf1240d', '082245200501', 'Muhammad Risqi Firdaus', 1, '081252762200', 'Erwin Rohmad Hidayat', 1, NULL, '083865094178', 'Carikan, Sukoharjo', 'faiq.m.arif', '4IL5397NH1', 1, 'FP156.jpg', 'K156.jpeg', 'FP156.jpeg', 'K156.jpeg', 'K156.jpeg', NULL, NULL, 1, 1, 1),
(157, 'Underpass', 'MA PPMI ASSALAAM', 1, 'Ahmad Irfan Indrajaya', 1, 'risqi.firdaus20@gmail.com', '5ad50a6a97514ac64558032a3cf1240d', '081225594084', 'Taufiq Nurokhman arianto', 1, '081225594084', 'Erwin Rohmad Hidayat', 1, NULL, '083865094178', 'Sukoharjo', 'irfan_triple_a', '7Z0JSSJZHL', 1, 'FP157.jpeg', 'K157.jpeg', 'FP157.jpeg', 'K157.jpeg', 'K157.jpeg', NULL, NULL, 1, 1, 1),
(158, 'Overpass', 'MA PPMI ASSALAAM', 1, 'Ahmad Alvin Noor Muchtar', 1, 'irfan.mantan6d.calonsantri@gmail.com', '5ad50a6a97514ac64558032a3cf1240d', '6285336469175', 'Ferdian Saputro', 1, '082245200501', 'Erwin Rohmad Hidayat', 1, NULL, '083865094178', 'Sukoharjo', 'ferdian.sap', 'BO71Z9K586', 1, 'FP158.jpg', 'K158.jpg', 'FP158.jpg', 'K158.jpg', 'K158.jpeg', 'BBY158.jpg', NULL, 1, 1, 1),
(159, 'WP_Supreme', 'Politeknik Negeri Malang', 2, 'Khelvindra Rizky Akbarsyah D', 1, 'khelvinrizki@gmail.com', '8aaef597b17abeb1f7478a68021406ab', '0895396138522', 'Amalul Fahrul Handika', 1, '081233512170', NULL, NULL, NULL, NULL, NULL, 'khelvindrarizakb', '15R16OH8EI', 1, 'FP159.jpg', 'K159.jpg', 'FP159.jpg', 'K159.jpg', NULL, 'BBY159.png', 1, 1, 1, 1),
(161, 'RC1 Lightning', 'UPTD Graha Teknologi Sriwijaya(SUMSEL)', 2, 'M. Dzaki Al Husni', 1, 'dzakihusni04@gmail.com', '5159d861248286e6885db6559257600f', '08127308762', 'Arif Wahyuda', 1, '081271383365', NULL, NULL, NULL, NULL, NULL, 'roboticsmansa', '642L4KGV3S', 1, 'FP161.jpg', 'K161.jpg', 'FP161.jpg', 'K161.jpg', NULL, 'BBY161.jpg', 1, 1, 1, 1),
(162, 'MRC. Cupid', 'MTs Negeri 1 Lamongan', 1, 'Moch. Naufal F. A', 1, 'mochnaufalfa@gmail.com', '1eb9900488892d4bc60ac00b16e10ae4', '082245977995', 'Hafizh Rafi Maulana S', 1, '082245977995', 'Muhammad Nur Wahyudi', 1, NULL, '082245977995', 'Jl. Raya Plaosan No. 11 Babat Lamongan', '@mrc.matsanela', '1QJPZ4GQ9X', 1, 'FP162.JPG', 'K162.jpg', 'FP162.JPG', 'K162.jpg', 'K162.jpg', 'BBY162.jpg', 1, 1, 1, 1),
(163, 'Ichibot MRT Jiplak', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'Andri Susilowanto', 1, 'Andri.susilowanto@gmail.com', '4cc437680ceead1a7f59d5df09ad2ca0', '085231830849', 'Aulia Roshida', 1, '082337042063', NULL, NULL, NULL, NULL, NULL, 'wildan.subhan24@gmail.com', 'DRAT81NQ7N', 1, 'FP163.jpeg', 'K163.jpeg', 'FP163.jpeg', 'K163.jpeg', NULL, 'BBY163.jpeg', NULL, 1, 1, 1),
(164, 'Ichibot MRT Raptor', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'Nurrochma Rizkia Hidayah', 1, 'Nurrochmarizkiahidayah@gmail.com', '6e65af36cc0f76d295e5dd7305c9dd4a', '081330118015', 'Arina Zulfatul Mutamimmah', 2, '081456107254', NULL, NULL, NULL, NULL, NULL, 'Rochma_03', 'C34ZD3EYWZ', 1, 'FP164.jpeg', 'K164.jpeg', 'FP164.jpeg', 'K164.jpeg', NULL, 'BBY164.jpeg', NULL, 1, 1, 2),
(166, 'ROBOSA 2', 'SMKN 1 Pasuruan', 2, 'WAHYUDI', 1, 'johanpbrc@gmail.com', '76201259edf495ffe1e23173ad50a00e', '083129560296', 'JOHAN HADI WINARTO', 1, '082125220349', NULL, NULL, NULL, NULL, NULL, '@johanpbrc', '5UZXF6N5I1', 1, 'FP166.jpeg', 'K166.jpeg', 'FP166.jpeg', 'K166.jpeg', NULL, 'BBY166.jpg', 1, 1, 1, 1),
(168, 'ROBOSA 1', 'SMKN 1 Pasuruan', 2, 'ALI USMAN', 1, 'nickiputra4@gmail.com', 'cd0ba8f43269c574b3dd6494bed55b2a', '08176778924', 'NUR FADILAH', 2, '083833321042', NULL, NULL, NULL, NULL, NULL, '@johanpbrc', '83Q6NKM2M2', 1, 'FP168.jpeg', 'K168.jpeg', 'FP168.jpeg', 'K168.jpeg', NULL, 'BBY168.jpg', 1, 1, 1, 1),
(169, 'MRC. Yages', 'MTs Negeri 1 Lamongan', 1, 'M. Ilham Arrosyid', 1, 'yudhasatria225@gmail.com', '1eb9900488892d4bc60ac00b16e10ae4', '082245977995', 'M. Rizqi Firdaus', 1, '082245977995', 'Suwandi, S. Pd', 1, NULL, '082245977995', 'Jl. Raya Plaosan No. 11 Babat Lamongan', '@mrc.matsanela', 'G27UE0H6P1', 1, 'FP169.JPG', 'K169.jpg', 'FP169.JPG', 'K169.jpg', 'K169.jpg', 'BBY169.jpg', 1, 1, 1, 1),
(170, 'MRC. Thanos', 'MTs Negeri 1 Lamongan', 1, 'M. Satria Yudha B', 1, 'mochafifi149@gmail.com', '1eb9900488892d4bc60ac00b16e10ae4', '082245977995', 'Syahru Akbar Rosyid', 1, '082245977995', 'Muhammad Nur Wahyudi, S. Kom', 1, NULL, '082245977995', 'Jl. Raya Plaosan No. 11 Babat Lamongan', '@mrc.matsanela', 'TA10NZ73US', 1, 'FP170.JPG', 'K170.jpg', 'FP170.JPG', 'K170.jpg', 'K170.jpg', 'BBY170.jpg', 1, 1, 1, 1),
(171, 'Al-Fatih', 'Universitas Negeri Surabaya', 2, 'Muhammad Yuanda Risnadiputra', 1, 'myuanda222@gmail.com', '2a0b9853655d7f9a820eb90648bf1ecb', '0895346210192', 'Ria Dwi Agustin', 1, '085773344132', NULL, NULL, NULL, NULL, NULL, 'myuanda_r', '1V9L5DEBXG', 1, 'FP171.jpg', 'K171.jpeg', 'FP171.jpeg', 'K171.jpeg', NULL, 'BBY171.jpg', 1, 1, 1, 1),
(172, 'MRC. Zeto', 'MTs Negeri 1 Lamongan', 1, 'M. Naufal Thoriq', 1, 'naufalthori@gmail.com', '1eb9900488892d4bc60ac00b16e10ae4', '082245977995', 'Rahma Fahim Haqqy', 1, '082245977995', 'Suwandi, S. Pd', 1, NULL, '082245977995', 'Jl. Raya Plaosan No. 11 Babat Lamongan', '@mrc.matsanela', '133I8R22SQ', 1, 'FP172.JPG', 'K172.jpg', 'FP172.jpg', 'K172.jpg', 'K172.jpg', 'BBY172.jpg', 1, 1, 1, 1),
(173, 'Sengkuni', 'Universitas Negeri Malang', 2, 'Noer Mohammad Ali', 1, 'noermohammadali09@gmail.com', '7e17a7f296232bee325fc7f5fe027132', '085330412537', 'Bhima Satria Rizki S.', 1, '083109937527', NULL, NULL, NULL, NULL, NULL, 'bhima_srs', 'OL305608E3', 1, 'FP173.jpg', 'K173.jpeg', 'FP173.jpg', 'K173.jpeg', NULL, 'BBY173.jpeg', 1, 1, 1, 1),
(174, 'MRC. Shadow', 'MTs Negeri 1 Lamongan', 1, 'Farel Zahid Mabruri', 1, 'farelzahidmabruri@gmail.com', '1eb9900488892d4bc60ac00b16e10ae4', '082245977995', 'Mohammad Bariq Mido H', 1, '082245977995', 'Suwandi, S. Pd', 1, NULL, '082245977995', 'Jl. Raya Plaosan No. 11 Babat Lamongan', '@mrc.matsanela', 'SC45D5S80E', 1, 'FP174.JPG', 'K174.jpg', 'FP174.JPG', 'K174.jpg', 'K174.jpg', 'BBY174.jpg', 1, 1, 1, 1),
(175, 'MRC. Angel', 'MTs Negeri 1 Lamongan', 1, 'Ayu Dya Miftaqul Janah', 1, 'ayudyam.j@gmail.com', '1eb9900488892d4bc60ac00b16e10ae4', '082245977995', 'Titin Astria', 1, '082245977995', 'Firda Widya Putri', 2, NULL, '0816563427', 'Jl. Raya Plaosan No. 11 Babat Lamongan', '@mrc.matsanela', 'NX34ME8M7F', 1, 'FP175.JPG', 'K175.jpg', 'FP175.JPG', 'K175.jpg', 'K175.jpg', 'BBY175.jpg', 1, 1, 1, 1),
(176, 'GRONE 3', 'SMA NEGERI 1 BOJONEGORO', 1, 'RAYHAN DEVIND DEFATRA U', 1, 'defindme87@gmail.com', 'b509ac9c6212bd797ef3fe45c3cceb05', '085866741591', 'MIKE DAVID GUNAWAN', 1, '089677051226', 'Muchamad Azis Setiawan', 1, NULL, '085730084447', 'Bojonegoro, Jawa Timur', '@rayhandevindd', '0I9GJPZ02Z', 1, 'FP176.jpg', 'K176.jpg', 'FP176.jpg', 'K176.jpg', NULL, 'BBY176.jpg', NULL, NULL, 1, 1),
(178, 'PRC AUTHENTIC', 'POLITEKNIK NEGERI MALANG', 2, 'M. Fahmi Khusnu Awaludin', 1, 'fahmi.khusnu45@gmail.com', '795608d8a0780e4052aae8b406c849f9', '082336982513', 'Ahmad Fahreza Rahman', 1, '085749510307', NULL, NULL, NULL, NULL, NULL, '@fahmikhusnu', 'JQDN701QDL', 1, 'FP178.jpg', 'K178.jpg', 'FP178.jpg', 'K178.jpg', NULL, 'BBY178.jpg', 1, 1, 1, 1),
(179, 'AITUMEGA WISLOW', 'Universitas Negeri Semarang', 2, 'Choirozyad Muhammad Hafidz', 1, 'choirozyadmhafidz@gmail.com', 'c9c4f88952124f5f60af60cb2f69ef2b', '089530175254', 'Amelinda Rojannah', 1, '0', NULL, NULL, NULL, NULL, NULL, '@choirozyadmhafidz', '2EYHU3676L', 1, 'FP179.jpg', 'K179.jpg', 'FP179.jpg', 'K179.jpg', NULL, NULL, NULL, 1, NULL, NULL),
(180, 'Sekawan B', 'SMAN 4 Bojonegoro', 1, 'Muhammad Yusuf Abdillah', 1, 'yusufhokage1@gmail.com', '6dc47cd8d457428d62098759cc88f0e8', '082114774191', 'M.fawwas.khansa', 1, '081259725685', 'Winanto', 1, '3522163006960003', '082136426185', 'Dusun lemahbang kec.Balen Kab. Bojonegoro', 'myusuf_abd1', '5TL5B1YVWX', 1, 'FP180.jpg', 'K180.jpg', 'FP180.jpg', 'K180.jpg', 'K180.jpg', 'BBY180.JPG', 1, 1, 1, 1),
(181, 'ARC', 'Mam 9 Lamongan', 1, 'Muhammad khafid al furqon', 1, 'el.furqon05@gmail.com', '1b53edee11fe8565b87488a114d0ef82', '082142205762', 'Muhammad syaifur rokhim', 1, '08563146162', 'Ahsanul Arkham,S.PSi', 1, NULL, '085704514777', 'Jl.jendral sudirman no.1 banjar mendalan lamongan', '@khafid.furqon', 'P358JNE1YF', 1, 'FP181.jpg', 'K181.jpg', 'FP181.jpg', 'K181.jpg', 'K181.jpg', 'BBY181.jpg', 1, 1, 1, 1),
(182, 'MULIMAS 1', 'Mtsm 15 lamongan', 1, 'Ahmad hauzan zusman', 1, 'zukhal.abdur.rokhim@gmail.com', '9ab9e1e48962aab2aa7e558411c866cf', '08563146162', 'Muhammad hawari', 1, '08563146162', 'Muhammad ranjif syanjani', 1, NULL, '+62 856-4850-5667', 'Jl.jendral sudirman no.1 banjar mendalan lamongan', '@Khafid.furqon', 'Y7ILFXUW47', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 'mulimas 2', 'mtsm 15 lamongan', 1, 'muhammad nadzir kurniawan', 1, 'zukhal.abdur.rokhim@gmail.com', '9ab9e1e48962aab2aa7e558411c866cf', '08563146162', 'Dwi nur isda akhlaq', 1, '08563146162', 'muhammad ranjif syanjani', 1, NULL, '085648505667', 'jl.jendral sudirman no 1 banjar mendalan lamongan', '@zainudinalfarisi', 'T1LDMHCA48', 1, 'FP183.jpg', 'K183.jpg', 'FP183.jpg', 'K183.jpg', 'K183.jpg', 'BBY183.jpg', 1, 1, 1, 1),
(184, 'mulimas 1', 'mtsm 15 lamongan', 1, 'muhammad hawari', 1, 'ferryarmandogunawan@gmail.com', 'a8253cbfc8bede25125f748b2e0ba998', '08563146162', 'ahmad hauzan zusman', 1, '085784838320', 'muhammad ranjif syanjani', 1, NULL, '085648505667', 'jl.jendral sudirman banjar mendalan lamongan', '@ferry_armando', '4333F2B6VW', 1, 'FP184.jpg', 'K184.jpg', 'FP184.jpg', 'K184.jpg', 'K184.jpg', 'BBY184.jpg', 1, 1, 1, 1),
(194, 'Masela 1', 'MAM 9 LAMONGAN', 2, 'Uwais Al-Qorni', 1, 'elqorni1406@gmail.com', '8177ce4504d0ad49d9c162de86fe6562', '082264050546', 'Hizbul Wathon Amirul Haq Sabili Sudarjo', 1, '08563146162', NULL, NULL, NULL, NULL, NULL, 'UWAIS_ELQORNIE', '2V3D2EQZ1M', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 'Panzer_IOPro', 'Politeknik Elektronika Negeri Surabaya', 2, 'Noval Anugrah Khosyirin', 1, 'adhiyatmawicaksana@gmail.com', '3c837026a94bda0d8aa4374112083c8f', '0895383985282', 'Adhiyatma Bagas Wicaksana', 1, '085791964000', NULL, NULL, NULL, NULL, NULL, 'noval_anugrah_k', 'PPP95EJKM3', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 'AituMEGA slur', 'PENS', 2, 'Ghagas Prabaswara', 1, 'ghagasprabaswara99@gmail.com', 'eb65c0becb4a68be07131506fdb155e6', '081332070551', 'Aji Sasongko Jati', 1, '082231905774', NULL, NULL, NULL, NULL, NULL, 'aitumegarobotics', 'A1RJXGN555', 1, 'FP197.jpeg', 'K197.jpg', 'FP197.JPG', 'K197.jpeg', NULL, NULL, NULL, 1, NULL, NULL),
(198, 'PRAWIRO UNNES', 'UNIVERSITAS NEGERI SEMARANG', 2, 'ANDIKA ENGGAL RAMADHAN', 1, 'andikaenggal291100@gmail.com', 'ec503e821ac189be7a46f03dc726ea0b', '082243452998', 'RIZKY ANUGERAH', 1, '081259682950', NULL, NULL, NULL, NULL, NULL, '@andika_eglrmdn', 'C3LB4YE2K6', 1, 'FP198.JPG', 'K198.jpeg', 'FP198.jpeg', 'K198.jpeg', NULL, NULL, NULL, 1, NULL, NULL),
(199, 'Gahar Robotic', 'CULVEN (Culture Venue)', 2, 'Adam', 1, 'adhammaoelana@gmail.com', '1d7c2923c1684726dc23d2901c4d8157', '082331405361', 'Bayu', 1, '086790328100', NULL, NULL, NULL, NULL, NULL, '@zainul_khofi', 'KZ9W9K1X2W', 1, 'FP199.png', 'K199.png', 'FP199.png', 'K199.png', NULL, 'BBY199.jpg', 1, NULL, NULL, NULL),
(201, 'mulimas 1', 'Mtsm 15 lamongan', 2, 'Muhammad hawari', 1, 'jundualbasith@gmail.com', 'f306c089a343cfbf530c109e10f8c028', '08563146162', 'Ahmad Hauzan Zusman', 1, '085784838320', NULL, NULL, NULL, NULL, NULL, '@zainudinalfarisi', 'N25WF6ZDJD', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 'Boboboy', 'UIN Maulana Malik Ibrahim Malang', 2, 'Mohammad Rizky Noer Alif', 1, 'rnoer1718@gmail.com', '900c899787f8e94e3466c0a91c972f4a', '081357091309', 'Riswan Ibrahim', 1, '085700830240', NULL, NULL, NULL, NULL, NULL, 'mohammadrizkynoeralif', '4IF81XSBNP', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 'RCS ROBOTIC 1', 'SMK RAJASA SURABAYA', 1, 'Leon Lee Saputra', 1, 'grim88.apc@gmail.com', '2dcc21dd7f8b1ba2977a18441f785e1d', '085336565485', 'Rahmat Ireng Permadi', 1, '088230007464', 'Ragil Suntoro', 1, NULL, '081330144840', 'Jl. Dukuh Kupang Timur VI Nomer 9', 'leonn.ls', '44DM0UGCEA', 1, 'FP203.jpeg', 'K203.jpeg', 'FP203.jpg', 'K203.jpeg', 'K203.jpeg', 'BBY203.jpg', 1, 1, 1, 1),
(204, 'Sekawan c', 'SMA Negeri 4 Bojonegoro', 1, 'Muhammad Rizki Wahyu Ramadhan', 1, 'rizkiwahyu1116@gmail.com', 'aa6408d7ca993d4c3cc48fedcb741fd0', '085607621021', 'Ahmad Labib Muwaffaq', 1, '085236267662', 'Winanto', 1, '3522163006960003', '082136426185', 'Dusun lemahbang kec.Balen kab.Bojonegoro', '@rizkiwahyu.tok', 'BY7L9LW760', 1, 'FP204.jpg', 'K204.jpg', 'FP204.jpg', 'K204.jpg', 'K204.jpg', 'BBY204.jpg', 1, 1, 1, 1),
(205, 'Madsakopas Legreck Loer', 'MTsN Kota Pasuruan', 1, 'Haidar Salim', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '0895338435199', 'Adam Putra Setyoadji', 1, '0822574188899', 'Fery Widia Kristianto, S.Pd', 1, '198002192009011005', '082227567873', 'Jl. Parasrejo Gg. Durian Pasuruan', 'haidarunyil1', 'PIX3MKN8A4', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(206, 'Madsakopas Ndock Ceplock', 'MTsN Kota Pasuruan', 1, 'Akbar Nur Ibrahim', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '081230745796', 'Putra Nur Aji Satya', 1, '082334749860', 'Fery Widia Kristianto, S.Pd', 1, '198002192009011005', '082227567873', 'Jl. Parasrejo Gg. Durian Pasuruan', 'baimkucluk', 'TOS07ZBH2G', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(207, 'Madsakopas Lontong Balap', 'MTsN Kota Pasuruan', 1, 'Moch. Bahruddin Yusuf', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '082142275378', 'Muhammad Yavi', 1, '082139254017', 'Fery Widia Kristianto, S.Pd', 1, '198002192009011005', '082227567873', 'Jl. Parasrejo Gg. Durian Pasuruan', 'yusuf_dragon', 'Z1X2Q43A42', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(208, 'Madsakopas Rawon Empal', 'MTsN Kota Pasuruan', 1, 'Muhammad Roikhan', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '082331359612', 'Zaky Alfarizy', 1, '081216010257', 'Fery Widia Kristianto, S.Pd', 1, '198002192009011005', '082227567873', 'Jl. Parasrejo Gg. Durian Pasuruan', 'zakialfarizi89', '3LK6ZS6RP3', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(209, 'Masela 1', 'MAM 09 LAMONGAN', 1, 'Uwais AL-Qorni', 1, 'elqorni1406@gmail.com', '8177ce4504d0ad49d9c162de86fe6562', '082264050546', 'Hizbul Wathon Amirul Haq Sabili Sudarjo', 1, '08563146162', 'Ahsanul Arkham,S.PSi', 1, NULL, '085781810176', NULL, 'uwais_elqornie', 'O80Z6H1JLS', 1, 'FP209.jpg', 'K209.jpg', 'FP209.jpg', 'K209.jpg', 'K209.jpg', 'BBY209.jpg', 1, 1, 1, 1);
INSERT INTO `team` (`id`, `team_name`, `team_instansi`, `team_type`, `team_nama_ketua`, `team_jekel_ketua`, `team_email_ketua`, `team_password`, `team_notel_ketua`, `team_nama_anggota`, `team_jekel_anggota`, `team_notel_anggota`, `team_nama_pembimbing`, `team_jekel_pembimbing`, `team_nip_pembimbing`, `team_notel_pembimbing`, `team_alamat_pembimbing`, `team_instagram`, `kode_verif`, `verif_email`, `foto_ketua`, `ktm_ketua`, `foto_anggota`, `ktm_anggota`, `ktm_pembimbing`, `bukti_bayar`, `kunci_data`, `sek`, `ben`, `lolos`) VALUES
(210, 'Adam TIm', 'SMKN 1 PURWOSARI', 2, 'Adam Maulana', 1, 'adhammaoelana@gmail.com', 'e6697431c1c2ebf39c2e4f62921e9e65', '085790327100', 'Maulana', 1, '08908908', NULL, NULL, NULL, NULL, NULL, 'adamaulaana', 'B7N7RM72D5', 1, 'FP210.png', 'K210.png', 'FP210.png', 'K210.png', NULL, 'BBY210.jpeg', NULL, NULL, NULL, NULL),
(211, 'WP_TimKita', 'Politeknik Negeri Malang', 2, 'Muhammad Adliannor Amrullah', 1, 'adliannur27@gmail.com', 'ac43724f16e9241d990427ab7c8f4228', '082240719215', 'Adilla Aktafiyani Putri', 2, '085331155668', NULL, 1, NULL, NULL, NULL, '@adliannur_amrullah', 'L8YTHPHF3I', 1, 'FP211.jpg', 'K211.jpeg', 'FP211.jpg', 'K211.jpg', NULL, 'BBY211.png', 1, 1, 1, 1),
(212, 'RCS ROBOTIC 2', 'SMK RAJASA SURABAYA', 1, 'Muhammad', 1, 'haikalazam191@gmail.com', '2dcc21dd7f8b1ba2977a18441f785e1d', '0895337358736', 'Rido Satriya', 1, '083831967092', 'Ragil Suntoro', 1, NULL, '081330144840', 'Jl. Dukuh Kupang Timur Gg6 no 9', 'leonn.ls', '1SFJ21I136', 1, 'FP212.jpg', 'K212.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 'RCS ROBOTIC 4', 'SMK RAJASA SURABAYA', 2, 'Putra Sangaji', 1, 'ps08012002@gmail.com', '2dcc21dd7f8b1ba2977a18441f785e1d', '0895401473163', 'Mahesa Dharma Galih', 1, 'Putra Sangaji', NULL, NULL, NULL, NULL, NULL, 'leon.ls', '6GIBXX17HA', 1, 'FP213.jpeg', 'K213.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 'RAMPAS 3', 'MAN 1 PASURUAN', 2, 'MUHAMMAD YUNUS FISABILILLAH', 1, 'yunus.fisabilillah@gmail.com', '88a23eea6a69f9d9d4f8b662721449e8', '089639636155', 'RIFQI ALIFIANDA', 1, '087849051481', NULL, NULL, NULL, NULL, NULL, '@yunus.fisabilillah', 'K71I5VSM6I', 1, 'FP214.jpg', 'K214.jpg', 'FP214.jpg', 'K214.jpg', NULL, 'BBY214.jpg', 1, 1, 1, 1),
(215, 'RCS ROBOTIC 3', 'SMPN 3 SURABAYA', 1, 'Rachmat Ramdhani Putra Rasyulia', 1, 'grim99.apc@gmail.com', '2dcc21dd7f8b1ba2977a18441f785e1d', '081250903991', 'Cilo Agrapana', 1, '082245399914', 'Ragil Suntoro', 1, NULL, '081330144840', 'Jl. Dukuh Kupang Timur no 69', 'leon.ls', 'GZND5Q2M7F', 1, 'FP215.jpg', NULL, 'FP215.jpg', NULL, 'K215.jpg', 'BBY215.jpg', NULL, NULL, 1, 1),
(216, 'ES TEH JUMBO', 'SMP NEGERI 1 GRESIK', 1, 'MUHMMAD DANAH IZDIHAR JAVIER', 1, 'cholil_co@yahoo.com', '2a9573c78282b88d12997b10c2b70b6c', '082143419909', '0', 1, 'P', 'MUHAMMAD CHOLIL', 1, NULL, '082142419909', 'JL SINDUJOYO 2C NO 2 GRESIK', '@cholil_co', 'ER7266N8VQ', 1, 'FP216.jpg', 'K216.jpg', NULL, NULL, NULL, 'BBY216.jpeg', NULL, NULL, 1, 1),
(217, 'X-MRT_BISMILLAH', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'MOH. YUSUF KHOLIQ MUNTAHA', 1, 'yosepelkholiqi@gmail.com', 'b32d6491ce03dd4e6c877f3bfd9ff07e', '082337901998', 'USWATUN HASANAH', 1, '085259963566', NULL, NULL, NULL, NULL, NULL, 'yusuf_kholiq', '8AS0BQAAU0', 1, 'FP217.jpeg', 'K217.jpeg', 'FP217.jpeg', 'K217.jpeg', NULL, 'BBY217.jpeg', 1, 1, 1, 1),
(218, 'RAMPAS 2', 'MAN 1 PASURUAN', 2, 'MIFTAKHUL ANAM', 1, 'imdadnasihin20@gmail.com', 'fd402761ab143456b41d8c55e2911609', '089652797290', 'BUYUNG SEPTIA AZMII', 1, '082338610126', NULL, NULL, NULL, NULL, NULL, '@_miftakhul_anam', '85PN211MY5', 1, 'FP218.jpg', 'K218.jpg', 'FP218.jpg', 'K218.jpg', NULL, 'BBY218.jpg', 1, 1, 1, 1),
(219, 'RAMPAS 4', 'MAN 1 PASURUAN', 2, 'FARHAN ZHIDAN ARIFIN', 1, 'imdadnasihin0117@gmail.com', 'e11ffc34fbdbca8bc6a90d48833bdf53', '083848004517', 'FIRDAUSI SAYIDA HASAN', 2, '08816369935', NULL, NULL, NULL, NULL, NULL, '@farhanzhidan10', '86W684S6R5', 1, 'FP219.jpg', 'K219.jpg', 'FP219.jpg', 'K219.jpg', NULL, 'BBY219.jpg', 1, 1, 1, 1),
(220, 'RAMPAS 1', 'MAN 1 PASURUAN', 2, 'MUHAMMAD DAFFA AKBAR ALAMSYAH', 1, '123hudi.mas@gmail.com', '81a4c39b01f77a6e2dbc7028a57e3769', '08970354526', 'DIMAS EKA PUTRA', 1, '083834073639', NULL, NULL, NULL, NULL, NULL, '@daffaalamsyah', 'Y1G15AP4V6', 1, 'FP220.jpg', 'K220.jpg', 'FP220.jpg', 'K220.jpg', NULL, 'BBY220.jpg', 1, 1, 1, 1),
(221, 'RAMPAS 5', 'MAN 1 PASURUAN', 2, 'MUHAMMAD IMDADUN NASYIHIN', 1, 'imdadnasihin28@gmail.com', 'c7c1de1623fc0e49f5022e64d9be1a47', '085732892241', 'IQBAL REZA PRADIBTA', 1, '085851331712', NULL, NULL, NULL, NULL, NULL, '@imdad_nasihin', '1VL6MR614H', 1, 'FP221.JPG', 'K221.jpg', 'FP221.jpg', 'K221.jpg', NULL, 'BBY221.jpg', 1, 1, 1, 1),
(222, 'RAMPAS 6', 'MAN 1 PASURUAN', 2, 'ACHMAD MAS HUDI', 1, 'achmadmashudi25@gmail.com', 'ef03bb7a770d770182c0d535e538ac39', '085856598685', 'SOBIBATUR ROKHMA', 1, '0895339018735', NULL, NULL, NULL, NULL, NULL, '@mas_hudi25', '85ZQPDEXHH', 1, 'FP222.jpg', 'K222.jpg', 'FP222.jpg', 'K222.jpg', NULL, 'BBY222.jpg', 1, 1, 1, 1),
(223, 'Mahabot', 'SMKN 2 Pamekasan', 1, 'Maswan abnur', 1, 'yundrascompany@gmail.com', 'f9314268e11c82c2557eae571fbe429f', '6285336271325', 'Moh. Mauludana Hardiansyah', 1, '081939423634', 'Candra Winata', 1, '19860304 201101 1 003', '081703800235', 'Jl. Ghazali Pamekasan', 'Hardiansyah', '312O7JQWGN', 1, 'FP223.jpg', 'K223.jpg', 'FP223.jpg', 'K223.jpg', 'K223.jpg', 'BBY223.jpg', 1, 1, 1, 1),
(224, 'ADEN', 'Polinema', 2, 'Alf', 1, 'agriansya99@gmal.com', '3a1aea2cc9d8f524b901c08e64eb7864', '085733995569', 'Gladdenda', 2, '081294473310', NULL, NULL, NULL, NULL, NULL, 'Agriansya_99', 'A4CKSYDQLA', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 'ADEN', 'Polinema', 2, 'Alf', 1, 'agriansya99@gmail.com', '3a1aea2cc9d8f524b901c08e64eb7864', '085733995569', 'Denda', 2, '081294473310', NULL, 1, NULL, NULL, NULL, 'Alfaa99', 'BR2HI7325C', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 'RCS ROBOTIC 4', 'SMK RAJASA Surabaya', 1, 'Putra sangaji', 1, 'ps08012002@gmail.com', '2dcc21dd7f8b1ba2977a18441f785e1d', '0895401473163', 'Mahesa Dharma galih', 1, '081217123209', 'Ragil CS', 1, NULL, '081330144840', 'Dukuh Kupang Timur VI no 9', 'leonn.ls', '3UE5J8UD83', 1, 'FP229.jpeg', 'K229.jpeg', 'FP229.jpeg', 'K229.jpeg', 'K229.jpeg', 'BBY229.jpg', 1, 1, 1, 1),
(230, 'WP_Tebuireng', 'Politeknik Negeri Malang', 2, 'Ardhin Wibisono', 1, 'ardinwibisono8@gmail.com', '3864aed9487d1da99918a5fcec29a6c1', '085546719769', 'Iqbal Baihaqqi Aqso', 1, '081555929001', NULL, NULL, NULL, NULL, NULL, '@ardhinwibisono__', '8I75J99QZ9', 1, 'FP230.jpg', 'K230.jpg', 'FP230.jpg', 'K230.jpg', NULL, 'BBY230.jpg', 1, 1, 1, 1),
(231, 'RF_Newbie', 'Universitas Kanjuruhan Malang', 2, 'Erga Febriawan', 1, 'ergafebriawan@gmail.com', 'ad4b707159746ee2d0669a494439fb56', '085856918678', 'Winda Mega Prawitha', 2, '089664477297', NULL, NULL, NULL, NULL, NULL, 'agre_febriawan', 'Q6XW1UB6QW', 1, 'FP231.jpg', 'K231.jpg', 'FP231.jpg', 'K231.jpg', NULL, 'BBY231.jpg', 1, 1, 1, 1),
(232, 'RF_Mhomoshiki', 'Universitas Kanjuruhan Malang', 2, 'Yogi Khairul Anwar', 1, 'pyogi6391@gmail.com', '5621be1f2352574f7a48ba5596a7c69d', '081336834206', 'Ahmad toyib ramadhani', 1, '082232459158', NULL, NULL, NULL, NULL, NULL, 'Yogik.a_', 'D27D5MIEBR', 1, 'FP232.jpg', 'K232.jpg', 'FP232.jpg', 'K232.jpg', NULL, 'BBY232.jpg', 1, 1, 1, 1),
(233, 'Yellaw Rakaruan', 'MAN Kota Pasuruan', 1, 'Muhammad Zidan Arrifqie', 1, 'wanwansetiawan033@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Sarah Kamilah', 2, '081234726354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'X98O7LEV9S', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 'Yellaw Rakaruan', 'MAN Kota Pasuruan', 1, 'Muhammad Zidan Arrifqie', 1, 'siawan033@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Sarah Kamilah', 2, '081234726354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'HWK1KGK2B3', 1, 'FP234.jpg', 'K234.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(235, 'Costu ROBOTIC Team', 'SMP DARUL ULUM 1 UNGULAN', 1, 'Hakim Muzacky', 1, 'alifmursyidan16@gmail.com', '1ab200c78bedbd962c94aa4b08a8fdc0', '08961348582', 'Putro Luhur budi', 1, '08961348582', 'Alif Mursyidan Asyrofi', 1, NULL, '08961348582', 'Ngelom, Taman, Sidoarjo', 'Fitri_qrt', 'SV57P2H92S', 1, 'FP235.jpg', 'K235.jpg', 'FP235.png', 'K235.jpg', 'K235.jpg', 'BBY235.png', 1, 1, 1, 1),
(236, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan033@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'WNQDGDD5EW', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'S03G1E6JDD', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', '2E9172A5KG', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'V4W298XI92', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'Q4FEH8O9TW', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'RIS2GDJD31', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', '533YYRK5H2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', '60EMKL5I85', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'SH5DSLBLUB', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', '436S5M7B5H', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', '8KIIFAELQF', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, 'YAKINJAY', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'NHE2MC2992', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, 'DAMSN', 'MTsN 2 Pasuruan', 1, 'Sulthan Ahmad Al Hannan', 1, 'sultanahmadalhannan@gmail.com', '3073b0229706ab802bee134e73d33416', '08121628771', 'Adam Asykar Faruq', 1, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'Jl. Urip Sumoharjo Pandaan', '@sulthan_ahmad_23', '3B30F2ER7T', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, 'SRC-SHYTZ', 'MTsN 2 Pasuruan', 1, 'Zytka Keneisha', 2, 'zytkaken@gmail.com', '5cb07ddce7d659528240bf407af7c606', '08121628771', 'Shasa Atika', 2, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'Jl.Urip Sumoharjo Pandaan', '@shasa_atika(shasa)', '3HFEH7OYQ0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(250, 'SRC-FRONTAL', 'MTsN 2 Pasuruan', 1, 'ILYAS ARROSYID', 1, 'ilyasgoyas@gmail.com', '3ea4a8e4d7a95ace878f907ab8b72d1b', '08121628771', 'WILDAN FIKRI A', 1, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'Jl. Urip Sumoharjo Pandaan', '@ILYAS_ARROSYID#', 'ZKN4NX5ZCP', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(251, 'Ichibot MRT Dark Evil', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'IRZADI FIJRI FEBRIYANTO', 1, 'salmayonis0@gmail.com', '6e83b5d5a922c3672582a8cb090b1f77', '082338961865', 'MUYASSAROH', 1, '085336511434', NULL, NULL, NULL, NULL, NULL, 'irzadi_fajri', 'RPEM812VBA', 1, 'FP251.jpeg', 'K251.jpeg', 'FP251.jpeg', 'K251.jpeg', NULL, 'BBY251.jpeg', 1, 1, 1, 1),
(252, 'MRT Guluk Guluk Timur', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'Ahmad Zaimul Hisan', 1, 'salmayo3096@gmail.com', '20f475196664cf4d01a65b7c62365098', '085331503047', 'Ali Syamsudin', 1, '085257849965', NULL, NULL, NULL, NULL, NULL, 'isan_karis0', 'T3O82A7LGY', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 'MRT Guluk Guluk Timur', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'Ahmad Zaimul Hisan', 1, 'salmayo3096@gmail.com', '20f475196664cf4d01a65b7c62365098', '085331503047', 'Ali Syamsudin', 1, '085257849965', NULL, NULL, NULL, NULL, NULL, 'isan_karis0', 'V3HDWEUQGT', 1, 'FP253.jpeg', 'K253.jpeg', 'FP253.jpeg', 'K253.jpeg', NULL, 'BBY253.jpeg', 1, 1, 1, 1),
(254, 'Ichibot MRT Hachi', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'MUHAMMAD NUR ALFIAN ZULFIKAR', 1, 'salmayo3096@gmail.com', '58a1097b67db808854af80b349ddde81', '082386972863', 'MUHAMMAD AIM WIZA RAHMANA PUTRA', 1, '081938586534', NULL, NULL, NULL, NULL, NULL, 'Fianz11', '742H16T39K', 1, 'FP254.jpeg', 'K254.jpeg', 'FP254.jpeg', 'K254.jpeg', NULL, 'BBY254.jpeg', 1, 1, 1, 1),
(255, 'Yelllaw Yakinjay', 'MAN Kota Pasuruan', 1, 'Ques Dalmawi', 1, 'wanwansetiawan112@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Dewi Ithriyah', 2, '081234716354', 'Ahmad Sholeh Marwadi', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'JULBIITTFR', 1, 'FP255.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 'SRC-NALURI', 'MTsN 2 Pasuruan', 1, 'AMALIA MAHARANI', 2, 'amaliamaharani06@gmail.com', '51e0a46ceb9b9f53a96281bd6b4f38e8', '08121628771', 'NUR AMELIA ZAHRO', 2, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'JL.URIP SUMOHARJO PANDAAN PASURUAN', '@amawl_', '2TA55P2275', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(257, 'SRC-TADA', 'MTsN 2 Pasuruan', 1, 'DESWITA NATASYA ILMI AZZAHRA', 2, 'deswitanatasya@gmail.com', 'ba0be66346887ec65da87a2ed34f6fd3', '08121628771', 'SAIDATUR ROFIAH', 2, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 2, '197106012005011004', '08121628771', NULL, 'Deswita_Natasya17', '6CAN8X0RSE', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 'SRC-TADA', 'MTsN 2 Pasuruan', 1, 'DESWITA NATASYA ILMI AZZAHRA', 2, 'deswitanatasya@gmail.com', '684d4a4f25fc58608cc49b94ca61b5c6', '08121628771', 'SAIDATUR ROFIAH', 2, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 2, '197106012005011004', '08121628771', 'JL. URIP SUMOHARJO PANDAAN PASURUAN', 'Deswita_Natasya17', 'XLLR14GB2B', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(259, 'SRC- I ROBOT', 'MTsN 2 Pasuruan', 1, 'KIRANIA PUTRI LESMANA', 1, 'kiranlesmana@gmail.com', '9fa2b1f879e167e01c2f7fc6974bf2e4', '08121628771', 'NURUL LAILA RAMADHANI', 1, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'JL. URIP SUMOHARJO PANDAAN PASURUAN', '@kiran_lesmana', '8P31CU629L', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(260, 'SRC-MALIN', 'MTsN 2 Pasuruan', 1, 'KANIA CAHYA LINTANG AULIA', 2, 'lintangaulia2006@gmail.com', '98928d89c33969c35adc6836c8ff7151', '08121628771', 'MEGA  AZALIA BANOWATI', 2, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'JL. URIP SUMOHARJAO PANDAAN PASURUAN', '@kclintang.k', 'EO77B4DWK7', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(261, 'SRC-HYPER X', 'MTsN 2 Pasuruan', 1, 'SURYA CAHYA PRAMUDYYA', 1, 'eddyprajitno10@gmail.com', 'aff8fbcbf1363cd7edc85a1e11391173', '08121628771', 'MUHAMMAD SYAHRUL MUBAROK', 1, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'JL. URIP SUMOHARJO PANDAAN PASURUAN', '@eddyprajitno10', 'R5DU50Z4Z6', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(262, 'SRC-IKHLAS', 'MTsN 2 Pasuruan', 1, 'REDHA KHOIRULLOH', 1, 'en_suwanto@gmail.com', 'c26c9ca236e042876eab593f637028f8', '08121628771', 'AHMAD AINUL KHABIBI', 1, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'JL. URIP SUMOHARJO PANDAAN PASURUAN', '@Redhabae', 'V1TO8S284A', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(263, 'SRC-DAMSN', 'MTsN 2 Pasuruan', 1, 'Sulthan Ahmad Al Hannan', 1, 'en.suwanto@gmail.com', '3073b0229706ab802bee134e73d33416', '08121628771', 'Adam Asykar Faruq', 1, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'Jl. Urip Sumohaarjo Pandaan Pasuruan', '@sulthan_ahmad_23', '41L5MGK17T', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(264, 'SRC-SHYTZ', 'MTsN 2 Pasuruan', 1, 'Zytka Keneisha', 2, 'en.suwanto@gmail.com', '5cb07ddce7d659528240bf407af7c606', '08121628771', 'Shasa Atika', 2, '08121628771', 'Effendi Nanang Suwanto, S.Pd', 1, '197106012005011004', '08121628771', 'Jl. Urip Sumoharjo Pandaan Pasuruan', '@shasa_atika(shasa)', 'RZ4MCQ3GI4', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(265, '4NT', 'SMK Telkom Malang', 2, 'Caecarryo Bagus Dewanata', 1, 'ryobd1999@gmail.com', 'a6ee9401c3d69e0fc5f9e0366693e321', '81337130753', 'Dwi Paga Ayuba', 1, '082139121074', NULL, NULL, NULL, NULL, NULL, 'caecarryo__', '8JJ366E5D1', 1, 'FP265.jpeg', 'K265.jpeg', 'FP265.jpg', 'K265.jpeg', NULL, 'BBY265.jpg', 1, 1, 1, 1),
(266, 'WP_Haiflow', 'Politeknik negeri malang', 2, 'Bayu riswan', 1, 'bayuriswanbayuriswan@gmail.com', '583cb715594863855ccaf16bbabcd6f5', '083833187047', 'Lif tyanggoro', 1, '081259697407', NULL, NULL, NULL, NULL, NULL, 'Bayurswn', '9S74V6LGC1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 'WP_Haiflow', 'Politeknik negeri malang', 2, 'Bayu riswan', 1, 'bayuriswanbayuriswan@gmail.com', '583cb715594863855ccaf16bbabcd6f5', '083833187047', 'Lif tyanggoro', 1, '081259697407', NULL, NULL, NULL, NULL, NULL, 'Bayurswn', 'EWCUPSP3L2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 'WP_Haiflow', 'Politeknik negeri malang', 2, 'Bayu riswan', 1, 'xolopcdr@gmail.com', 'f0eeb5761db0b9c00385a7b5fa197e79', '083833187047', 'Lif tyanggoro', 1, '081259697407', NULL, 1, NULL, NULL, NULL, 'Bayurswn', '3N7Y1Z3I56', 1, 'FP268.jpg', 'K268.jpg', 'FP268.jpg', 'K268.jpg', NULL, 'BBY268.jpg', 1, 1, 1, 1),
(269, 'Tikarastu', 'SMP Darul Ulum 1 Unggulan Peterogan Jombang', 1, 'Niswa Khoiruna', 2, 'alifmursyidan17@gmail.com', '1ab200c78bedbd962c94aa4b08a8fdc0', '081232363929', 'Nisa Ulfitria', 2, '081232363929', 'Dodik Purnomo', 1, NULL, '081232363929', 'desa rejoso ngumpul kecamatan jogoroto, jombang.', 'Niswa_Khoiruna', '51A8P1GK35', 1, 'FP269.jpeg', 'K269.png', 'FP269.jpeg', 'K269.jpg', 'K269.jpg', 'BBY269.jpg', 1, 1, 1, 1),
(270, 'Madsakopas Ciloxz', 'MTsN Kota Pasuruan', 1, 'Nur Iqbal Kaka Risqiansyah', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '088996057288', 'M. Irsyad Dimas A', 1, '085432915325', 'Fery Widia Kristianto, S.Pd', 1, '198002192009011005', '082227567873', 'Jl. Parasrejo Gg. Durian Pasuruan', 'kakaaka_21', 'QBAXRS2074', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(271, 'Yellaw Da Heal', 'MAN Kota Pasuruan', 1, 'Hilmi Mahdi', 1, 'yellawfamily@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Muhammad Alif Maulana', 1, '081234716354', 'Heri Susanto', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'EGM3T8G51P', 1, 'FP271.jpg', 'K271.jpg', 'FP271.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 'RCS ROBOTIC 2', 'SMK RAJASA SURABAYA', 1, 'Muhammad', 1, 'firdausmaulana34@gmail.com', '2dcc21dd7f8b1ba2977a18441f785e1d', '087854200365', 'Firdaus Maulana', 1, '081232317790', 'Ragil Suntoro', 1, NULL, '083831967092', 'Jl. Dukuh Kupang Timur no 69', 'leonn.ls', '1NARA9R16S', 1, 'FP272.jpg', 'K272.jpg', 'FP272.jpg', 'K272.jpg', 'K272.jpg', 'BBY272.jpg', 1, 1, 1, 1),
(273, 'Two Barbarous', 'SMA NEGRI 01 SINGOSARI', 2, 'Hanif', 1, 'hanifh474@gmail.com', 'da40526f219afb8a602e12c727aed58d', '0816785757', 'Hafiz Ammar Ramadhan', 1, '081358861914', NULL, NULL, NULL, NULL, NULL, 'hanif_dm', 'J5K8W84QHE', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 'Ultima Robotic R_One', 'Politeknik Negeri Malang', 2, 'Riemza Zamronnan', 1, 'riemzazm@gmail.com', 'f22a284899fb99417a4dccba6288bbf7', '085777765536', 'Ony Ramadhan Gholib', 1, '082234221410', NULL, NULL, NULL, NULL, NULL, '@riemza.zm', '7G2RQ83U4C', 1, 'FP274.jpeg', 'K274.jpeg', 'FP274.jpg', 'K274.jpeg', NULL, 'BBY274.jpeg', 1, 1, 1, 1),
(275, 'BERKAH TEAM', 'SMAN 1 GENTENG', 1, 'Oka Ibrahim Putra Wijaya', 1, 'okaibrahim0256@gmail.com', '06abfef216c77c203e0262c54fc7a651', '081227667822', 'Gilang Aditya Pratama', 1, '085706728305', 'Danar Arif Ramadhan Utaman', 1, '383736828252', '085215078667', 'no. C8 kelurahan dinoyo', '_oka_ibrahim', '1CWJ3YI7IN', 1, 'FP275.png', 'K275.jpg', 'FP275.png', 'K275.jpg', NULL, 'BBY275.jpg', NULL, 1, 1, 1),
(276, 'EEPROM RIOTS IO', 'Politeknik Negeri Malang', 2, 'DAMARIO AGUNG CHARISMAWAN', 1, 'damareoh7@gmail.com', 'ce7b5247e5ec9bbf627037408a1782b2', '08133965151', 'MARCHIANO ALFREDO FOUK', 1, '082237680476', 'IVAN FADHILA', 1, NULL, '08155168317', 'RT1/RW3 KEC.BADEGAN, KAB.PONOROGO', 'damarioac', '10DZ2F84K5', 1, 'FP276.png', 'K276.jpg', 'FP276.jpeg', 'K276.jpeg', NULL, 'BBY276.jpeg', 1, 1, 1, 1),
(277, 'EEPROM OUTFALL', 'Politeknik Negeri Malang', 2, 'MUHAMMAD YUHRI DIO FADILA', 1, 'aaritopan22@gmail.com', '42bda174889aad5bf545eb1d8dc768d3', '087772866867', 'ERMI PRISTIYANINGRUM', 1, '082245220311', 'ARI TOPAN UDAYANA', 1, NULL, '085607681744', 'PERUM MANGLIAWAN PERMAI BLOK E-22, KAB. MALANG', 'aaritopann', '702Q8VHOVX', 1, 'FP277.jpg', 'K277.jpg', 'FP277.jpg', 'K277.jpg', NULL, 'BBY277.jpeg', 1, 1, 1, 1),
(278, 'Loss control', 'SMA Negri 1 Genteng', 1, 'Yolanda Yudira Ramadhani', 2, 'yolandayudira@gmail.com', '7ad31a3f604a66519a1d8a62e47f276c', '085780659015', 'Vira Fauziah Hanum', 2, '082272039204', 'Tri Nur Meilasari', 1, '383736828252', '08996581778', 'Stail, Genteng, Banyuwangi', 'yolanda_rmdhn', '3473ZVYYJ8', 1, 'FP278.jpg', 'K278.jpg', 'FP278.jpg', 'K278.jpg', NULL, 'BBY278.jpg', NULL, NULL, 1, 1),
(279, 'EEPROM BRONZ', 'Politeknik Negeri Malang', 2, 'SEVA GLORIA', 1, 'sevagloria12345678910@gmail.com', '60d19c1d284db2e2eb315aa5f362e668', '08815567390', 'TARUNA AKBARRUDIN ANORAGA', 1, '+6281259182342', NULL, 1, NULL, NULL, NULL, 'sevagloria', 'XOTTD1J4ZX', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 'EEPROM BRONZ', 'Politeknik Negeri Malang', 2, 'SEVA GLORIA', 1, 'sevagloria12345678910@gmail.com', '60d19c1d284db2e2eb315aa5f362e668', '08815567390', 'TARUNA AKBARRUDIN ANORAGA', 1, '+6281259182342', NULL, 1, NULL, NULL, NULL, 'sevagloria', 'QYU8WV3USG', 1, 'FP280.jpg', 'K280.jpg', 'FP280.jpg', 'K280.jpg', NULL, 'BBY280.jpeg', 1, 1, 1, 1),
(281, 'Yellaw inspired', 'Politeknik Negeri Malang', 2, 'M Rizqi Bagus H', 1, 'mrizqibagush.xtot1@gmail.com', 'afca04cb06d330a9d52e494f18924e06', '083833163684', 'Akhmad Surya Ferdiansyah', 1, '088803162643', NULL, 1, NULL, NULL, NULL, 'm_rizqibagush', 'Z5LJ37TA1O', 1, 'FP281.jpg', 'K281.jpg', 'FP281.jpg', 'K281.jpg', NULL, 'BBY281.jpg', 1, 1, 1, 1),
(282, 'Fortuna', 'SMAN 1GENTENG', 1, 'Rafif Ariyanta Mahadi', 1, 'kempipgaga@gmail.com', 'a2550eeab0724a691192ca13982e6ebd', '082231023203', 'Febrianty Eka Hadiwinnanti', 1, '081232934812', 'Danar Arif Ramadhan Utaman', 1, '383736828252', '085215078667', 'No. C8 kelurahan Dinoyo', 'ram.apippp', 'S1PHLH22OU', 1, 'FP282.jpg', 'K282.jpg', 'FP282.jpg', 'K282.jpg', NULL, 'BBY282.jpg', NULL, 1, 1, 1),
(284, 'EEPROM LARRY', 'Politeknik Negeri Malang', 2, 'SATRIO ADIYUDONO', 1, 'satrioadiyudono01@gmail.com', '612415e74ace3304c6e2c8d6006a3df4', '08990484200', 'AINUN ZAHROTUL WARDAH', 2, '083129957666', 'ANANDA DWI PRAYOGA', 1, NULL, '08974466922', 'DSN.DEMANGAN RT.2 RW.2 KEC.GONDANG KAB.TULUNGAGUNG', 'satrioadn', 'F2J3V7206B', 1, 'FP284.jpg', 'K284.jpg', 'FP284.jpg', 'K284.jpeg', NULL, 'BBY284.jpeg', 1, 1, 1, 1),
(285, 'EEPROM_Hades', 'Politeknik Negeri Malang', 2, 'BLASIUS ZURIEL ZEKE MANURUNG', 1, 'blazuze.manurung@gmail.com', '54bad9dc327fd8e071532caaa6594eb9', '0816554767', 'NURUS LAILY APRILLIA', 1, '08816254736', 'DICKY ARY SETIAWAN', 1, NULL, '082132362861', 'DSN. SUWALUH RT. 1 TW. 6 KEC.PARE KAB.KEDIRI', 'zuriel.manurung', '6L5N9315JC', 1, 'FP285.jpg', 'K285.jpg', 'FP285.jpg', 'K285.jpg', NULL, 'BBY285.jpeg', 1, 1, 1, 1),
(286, 'EEPROM_GARJITA', 'Politeknik Negeri Malang', 2, 'RIKY NURHIDAYAH', 1, 'riky.nurhidayah@gmail.com', '37557d3e4b65f3584ad153e3f15c25e0', '085258492457', 'AMARTYA SALSABIILA PUTRI WICAKSONO', 1, '087809426629', 'ALFA NURHUDA', 1, NULL, '085230586101', 'DSN. KOLOR RT.3 RW.1 KEC.PAKUNIRAN KAB.PROBOLINGGO', 'riky.nurhidayah', 'MS4BG3699Z', 1, 'FP286.jpg', 'K286.jpg', 'FP286.jpeg', 'K286.jpg', NULL, 'BBY286.jpeg', 1, 1, 1, 1),
(287, 'EEPROM Ku', 'POLITEKNIK NEGERI MALANG', 2, 'MUHAMMAD SAIFUDDIN JAZALI', 1, 'jazulienux@gmail.com', '31c33808b4a7ce3b9b695dd6c45a14e8', '081216224510', 'MARCHDHA FREDYKA JAYA', 1, '085604197080', 'MUHAMMAD BAEHAQI', 1, NULL, '081343911613', 'RT01/RW01, JL.RAYA BANJARANYAR,BAURENO,BOJONEGORO', 'jazulienux', 'E6HFJ7S4F4', 1, 'FP287.jpg', 'K287.jpg', 'FP287.jpg', 'K287.jpg', NULL, 'BBY287.jpeg', 1, 1, 1, 1),
(288, 'Megabot oxff', 'Universitas nasional', 2, 'Lukman Firdaus', 1, 'lukmanfirdaus344@gmail.com', 'f78aaa387c04ff834da52985eaef9bda', '081212586326', 'Lukman Firdaus', 1, '081212586326', NULL, 1, NULL, NULL, NULL, 'lukman_frdaus', 'M1L5BH5L1K', 1, 'FP288.jpg', 'K288.jpg', 'FP288.jpg', 'K288.jpg', NULL, 'BBY288.jpg', 1, 1, 1, 1),
(290, 'Madsakopas Pecel Lele', 'MTsN Kota Pasuruan', 1, 'Muhammad Zidane Alief Ubaidillah', 1, 'adhanhar264@gmail.com', 'beeeb20be91b9e31011c3944f83d8590', '082227567873', 'Muhammad Roihan Dhian', 1, '082227567873', 'Heri Sulistiyono, M.Pd', 1, '197206212005011002', '081330037468', 'Jl. Panglima Sudirman GG Kadipaten No 4 Pasuruan', 'zidane_alief', 'L6OG8HC842', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(291, 'Madsakopas Tahu Petis', 'MTsN Kota Pasuruan', 1, 'Ipung Adikartika', 1, 'triananda11@gmail.com', '082df6aad48b11376917d2d49fe62bc2', '085338898535', 'Akhtar Faeyza Respati', 1, '0895366361948', 'Heri Sulistiyono, M.Pd', 1, '197206212005011002', '081330037468', 'Jl. Panglima Sudirman GG Kadipaten No 4 Pasuruan', '@ipungadikartika', '814335L91G', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(292, 'Madsakopas Lontong Kupang', 'MTsN Kota Pasuruan', 1, 'Moch Wildan Kholid', 1, 'triananda11@gmail.com', '082df6aad48b11376917d2d49fe62bc2', '81234859425', 'Adinova Putra Suseno', 1, '083833342606', 'Heri Sulistiyono, M.Pd', 1, '197206212005011002', '081330037468', 'Jl. Panglima Sudirman GG Kadipaten No 4 Pasuruan', '@wildan_kholid', '3NWBRO5M2G', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(293, 'Madsakopas Eskrim Coklat', 'MTsN Kota Pasuruan', 1, 'Fira Ayu Novitasari', 2, 'triananda11@gmail.com', '082df6aad48b11376917d2d49fe62bc2', '081227539339', 'Nadhiva Azwar Nur Efendy', 2, '081227539339', 'Heri Sulistiyono, M.Pd', 1, '197206212005011002', '081330037468', 'Jl. Panglima Sudirman GG Kadipaten No 4 Pasuruan', '@fira_anovitasari', 'C3O8W9V86O', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(294, 'Ichibot MRT Alhamdulillah', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'Rifqi Aminullah', 1, 'rifkiaminullah64@gmail.com', 'ce94bd3e03146737953e846087b17ea9', '085230264033', 'Feby Hermawan', 1, '085334357153', NULL, 1, NULL, NULL, NULL, 'rifky_rifky1', 'Z04OS9LZ2T', 1, 'FP294.jpg', 'K294.jpg', 'FP294.jpg', 'K294.jpg', NULL, 'BBY294.jpeg', 1, 1, 1, 1),
(295, 'EEPROM RESTU BUNDO', 'POLITEKNIK NEGERI MALANG', 2, 'Fahmi Firmansyah', 1, 'restubundo@ltdc.com', 'c2271b158023ef2485180043a6b4c181', '082118598937', 'DIMAS ARDANA PRATAMA PUTRA', 1, '08953777269211', NULL, NULL, NULL, NULL, NULL, 'Rizka.feb', 'UBL58OAVBF', 1, 'FP295.jpg', 'K295.jpg', 'FP295.jpg', 'K295.jpg', NULL, 'BBY295.jpeg', 1, 1, 1, 1),
(296, 'EEPROM TATAQUE', 'POLITEKNIK NEGERI MALANG', 2, 'AGSAL FAIRROHMAD ARIYON PRATAMA', 1, 'tataque19@ltdc.com', 'b98c2f0845ea649fa949f2bce2f1d73b', '085791098555', 'VIVI AGUSTINA RATNASARI', 1, '085815805794', 'KUBAD NURHALIM', 1, NULL, '087815482799', 'DUKUH PANDAN SARI RT.12 RW.3 KEC.MASARAN KAB.SRAGEN', 'viviagustinas', '0O644QA896', 1, 'FP296.jpg', 'K296.jpg', 'FP296.jpg', 'K296.jpg', NULL, 'BBY296.jpeg', 1, 1, 1, 1),
(297, 'EEPROM SCANIA', 'POLITEKNIK NEGERI MALANG', 2, 'ALVAN IMANUDIN', 1, 'scania19@ltdc.com', '51d8fd4c5b431c625d7043d58a7f8b05', '085816880085', 'MOKH IVAN FAIQ FATWA AULIAH', 1, '081216487927', 'ARINDA DWI FADILA', 2, NULL, '085231383606', 'JL.MOJOROTO NO.10-B RT.1 RW.3  KEC. BUMIAJI KOTA BATU', 'avanimanudin', '5S0374YGUS', 1, 'FP297.jpg', 'K297.jpg', 'FP297.jpg', 'K297.jpg', NULL, 'BBY297.jpeg', NULL, 1, 1, 1),
(298, 'EEPROM WTS', 'POLITEKNIK NEGERI MALANG', 2, 'TOBY ALVIANSYA', 1, 'wts19@ltdc.com', 'e3a0c36226cb6ba62ee5218cfb1ab530', '081554175361', 'SITI FATIMATUS ZAHROH', 2, '081230000573', 'WILDAN ARIF MAULANA', 1, NULL, '0831114061261', 'JL.NYALABU PERMAI IV NO.22 RT.4 RW.4 KEC.PAMEKASAN', 'sfatimatus', 'FLE4XGQY4Q', 1, 'FP298.JPG', 'K298.jpg', 'FP298.jpg', 'K298.jpg', NULL, 'BBY298.jpeg', NULL, 1, 1, 1),
(299, 'TAZKIA 1', 'SMP TAZKIA IIBS Malang', 1, 'Muhammad Zakwan Hilmi', 1, 'salmanhafizulquran@gmail.com', 'df4e00a7764c841d805a42885994286f', '085755288886', 'Muhammad Rizky Albari', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanusialuarbiasa', '4U15156Q2P', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1),
(300, 'Smalabaya', 'SMA N 5 SURABAYA', 2, 'Salsa Bila Lukiana', 2, 'lukiana3bila@gmail.com', 'b4b69744b1c881836c3e2d9ce2f8e5ec', '081217443794', 'Hanna Rachmasari', 2, '082140962072', NULL, 1, NULL, NULL, NULL, '@salsalukiana', 'X1HJQ1F5S1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(301, 'TAZKIA 2', 'SMP TAZKIA IIBS Malang', 1, 'Muhammad Razan Abid Baswedan', 1, 'salmanhafizulquran@gmail.com', 'df4e00a7764c841d805a42885994286f', '085755288886', 'Muhammad Shabio Dalkhoms', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', 'M3W7ST0F8V', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(302, 'Salsa Bila Lukiana', 'SMA N 5 SURABAYA', 2, 'Salsa Bila Lukiana', 1, 'lukiana3bila@gmail.com', 'b4b69744b1c881836c3e2d9ce2f8e5ec', '081217443794', 'Hanna Rachmasari', 2, '082140962072', NULL, 1, NULL, NULL, NULL, '@salsalukiana', 'X830P3ZV75', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, 'TAZKIA 2', 'SMP TAZKIA IIBS Malang', 1, 'Muhammad Razan Abid Baswedan', 1, 'salmanhafizulquran@gmail.com', 'c901d7ca68ae1009dde2f36ebaf697b6', '085755288886', 'Muhammad Shabio Dalkhoms', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', '42CF9857G2', 1, NULL, NULL, NULL, NULL, NULL, 'BBY303.jpg', NULL, NULL, 1, 1),
(304, 'TAZKIA 3', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD RAFIF RABBANI', 1, 'salmanhafizulquran@gmail.com', 'd5a4dd8624516e343e2ea80fd48243d9', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', 'CJSQH8C616', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(305, 'TAZKIA 3', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD RAFIF RABBANI', 1, 'salmanhafizulquran@gmail.com', 'd5a4dd8624516e343e2ea80fd48243d9', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', '8VI3Z4U5DZ', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, 'TAZKIA 3', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD RAFIF RABBANI', 1, 'salmanhafizulquran@gmail.com', 'd5a4dd8624516e343e2ea80fd48243d9', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', '495AL1IZYW', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, 'TAZKIA 3', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD RAFIF RABBANI', 1, 'salmanhafizulquran@gmail.com', 'd5a4dd8624516e343e2ea80fd48243d9', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', '8K6HA4Z2R3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, 'TAZKIA 3', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD RAFIF RABBANI', 1, 'erkawengian@gmail.com', 'd5a4dd8624516e343e2ea80fd48243d9', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', '5QC4957JYK', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(309, 'Smalabaya', 'SMA N 5 SURABAYA', 2, 'Salsa Bila Lukiana', 2, 'lukiana3bila@gmail.com', 'b4b69744b1c881836c3e2d9ce2f8e5ec', '081217443794', 'Hanna Rachmasari', 2, '082140962072', NULL, 1, NULL, NULL, NULL, '@salsalukiana', '3PTIGCRHZ6', 1, 'FP309.jpg', 'K309.jpg', 'FP309.jpg', 'K309.jpg', NULL, 'BBY309.jpg', 1, 1, 1, 1),
(310, 'TAZKIA 3', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD RAFIF RABBANI', 1, 'salmanhafizulquran@gmail.com', 'd5a4dd8624516e343e2ea80fd48243d9', '085755288886', 'FERDANA ALIVIAN RAHMANZAH EFFENDI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'Salmanusialuarbiasa', '1136IY7SU3', 1, NULL, NULL, NULL, NULL, NULL, 'BBY310.jpg', NULL, 1, 1, 1),
(311, 'HEXA-R0', 'SMAN 1 Singosari', 2, 'KHAIDIR NASRUL MUZAKKY', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '083848944801', 'MUHAMMAD SYAHRUL RAMADHAN WIJI PUTRA', 1, '081234072407', 'Muhammad Bagus Arifin, S.Pd', 1, NULL, '085736773280', 'Gang Kerinci, Sawojajar', 'khaidir_nasrul', 'HW3851S7OQ', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(312, 'Two Barbarous', 'SMAN 1 Singosari', 2, 'HANIF', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '0816785757', 'HAFIZ AMMAR RAMADHAN', 1, '081358861914', 'Muhammad Bagus Arifin, S.Pd', 1, NULL, '085736773280', 'Gang Kerinci, Sawojajar', 'hanif_dm', '2IOI0P122C', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(313, 'Beep Boop', 'SMAN 1 Singosari', 2, 'NURRAMA FARIS ARDIANSYAH', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '0895397063803', 'RAIHAN MAULANA YUSUF', 1, '08883314277', 'Muhammad Bagus Arifin, S.Pd', 1, NULL, '085736773280', 'Gang Kerinci, Sawojajar', 'faris.sz', 'QDSY8R8W2L', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(314, 'Beta Bots', 'SMAN 1 Singosari', 2, 'FADHILA HANIFTA ERATRISNANTO', 1, 'putrifebyawati@gmail.com', '23ee2d012cddd78e11f1603326cde778', '082135828343', 'ARIEF BUDI UTOMO', 1, '082337004135', 'Muhammad Bagus Arifin, S.Pd', 1, NULL, '085736773280', 'Gang Kerinci, Sawojajar', 'fadhilahanifta123', '3UJSM2NCHR', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(315, 'TAZKIA 4', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD ABIDZAR AL GHIFARI JATMIKO', 1, 'salmanhafizulquran@gmail.com', 'efd9e5cee81cbab414687be558492684', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanusialuarbiasa', 'I38Y2FOU81', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(316, 'TAZKIA 4', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD ABIDZAR AL GHIFARI JATMIKO', 1, 'salmanhafizulquran@gmail.com', 'efd9e5cee81cbab414687be558492684', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanusialuarbiasa', '7HDU21NN25', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(317, 'TAZKIA 4', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD NAWFAL ZAKI', 1, 'salmanhafizulquran@gmail.com', 'efd9e5cee81cbab414687be558492684', '085755288886', 'MUHAMMAD ABIDZAR AL GHIFARI JATMIKO', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', '341LY1CZ33', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(318, 'TAZKIA 4', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD ABIDZAR AL GHIFARI JATMIKO', 1, 'salmanhafizulquran@gmail.com', 'efd9e5cee81cbab414687be558492684', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanusialuarbiasa', 'YW1ZIR4VD3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(319, 'TAZKIA 4', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD ABIDZAR AL GHIFARI JATMIKO', 1, 'salmanhafizulquran@gmail.com', 'efd9e5cee81cbab414687be558492684', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Wagir, malang', '0', 'DE19I4HF44', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(320, 'TAZKIA 4', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD NAWFAL ZAKI', 1, 'salmanhafizulquran@gmail.com', '9945eb04643ec7b9e84989d1d701eea3', '085755288886', 'MUHAMMAD ABIDZAR AL GHIFARI JATMIKO', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'salmanhafizulquran@gmail.com', '2ICJ5CH9J0', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(321, 'TAZKIA 4', 'SMP TAZKIA IIBS Malang', 1, 'MUHAMMAD ABIDZAR AL GHIFARI JATMIKO', 1, 'salmanhafizulquran@gmail.com', 'efd9e5cee81cbab414687be558492684', '085755288886', 'MUHAMMAD NAWFAL ZAKI', 1, '085755288886', 'Salman Sakif', 1, NULL, '085755288886', 'Malang', 'Salmanusialuarbiasa', 'LA4K4WT7FL', 1, NULL, NULL, NULL, NULL, NULL, 'BBY321.jpg', NULL, 1, 1, 1),
(322, 'KUROI KITSUNE', 'MAN 3 JOMBANG', 2, 'RAHYD RAYHAN H', 1, 'rayhan.hermawan6@gmail.com', '74fa23e233049a8b5c8ad1b6b6de13f2', '087858495232', 'AHMAD IN\'AM FAISHAL B', 1, '087858495232', 'M BAGUS AMRULLAH', 1, NULL, '82244190079', NULL, 'littleshinobi_', '6863D0ZU41', 1, NULL, NULL, NULL, NULL, NULL, 'BBY322.jpeg', NULL, NULL, 1, 1),
(323, '2019', 'Politeknik Negeri Malang', 2, 'Nawal Istiqlal Agustian', 1, 'natiqlan@gmail.com', '1978ac9b21f19e8d30afba86d08960e9', '085204552012', 'Ilham Agung Wicaksono', 1, '081231915033', NULL, 1, NULL, NULL, NULL, 'nawalqn', '1SPDWB37J5', 1, 'FP323.jpeg', 'K323.jpeg', 'FP323.jpeg', 'K323.jpeg', NULL, 'BBY323.jpeg', 1, 1, 1, 1),
(324, 'Yellaw Shima', 'MAN Kota Pasuruan', 1, 'RA Diana Maulidiyah', 2, 'yellawfamily002@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'Shinta Fariza Dini', 2, '081234716354', 'Heri Susanto', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'S3257US53P', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(325, 'Yellaw Shima', 'MAN Kota Pasuruan', 1, 'Shinta Fariza Dini', 2, 'yellawfamily002@gmail.com', 'df92e65108c3b636a724a3d6d0db71a8', '081234726354', 'RA Diana Maulidiyah', 2, '081234716354', 'Heri Susanto', 1, '-', '081234726354', 'Pasuruan', '@fitri_si_setia_awan', 'GD63GK5XK2', 1, NULL, NULL, 'FP325.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(326, 'Ichibot MRT Ar-Rahman', 'UNIVERSITAS TRUNOJOYO MADURA', 2, 'Fauzi Febrianto', 1, 'sayonis156@gmail.com', '964adc1f57d205b2e33446a75922ef29', '6282301068148', 'Nurul Wahyudi', 1, '+6283134389801', NULL, 1, NULL, NULL, NULL, 'You.dee_', 'UG2U08T9Y9', 1, 'FP326.jpeg', NULL, NULL, NULL, NULL, 'BBY326.jpeg', NULL, NULL, 1, 1),
(327, 'antarsari 1', 'Global Islamic Boarding School', 1, 'Muhammad Iqbal Arrasyidi', 1, 'revao84@gmail.com', '90886792ab31c9fd6cd90e91c10522ea', '082252474630', 'Muhammad Ariq Hammadi', 1, '082252474630', 'Muhammad Junaidi', 1, '180169', '0', 'Jln Transkalimantan no 12 (Global Islamic Boarding School)', 'Mhmmd_iqbalrvn', 'EOSWVEFHSQ', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(328, 'HD 17', 'Global Islamic Boarding School', 1, 'Muhammad Husni Thamrin', 1, 'revao84@gmail.com', 'ce92d575dbd16dcbbaaae7093e8ecec3', '082148628416', 'Dimas Ferry Yuliant', 1, '087816627531', 'Muhammad Junaidi', 1, '180169', '0', 'Jln Traskalimantan no 12 (Global Islamic Boarding School)', 'husnihusni27', 'H68FXFLXSJ', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(329, 'RS SURYA', 'SMA MUHAMMADIYAH 1 GRESIK', 1, 'ABDUL HAFIDZ SURYONEGORO', 1, 'cholil_co@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', '081232979575', '-', 1, '-', 'ABDUL LATHIF', 1, NULL, '082143419909', 'JL NYAI AGENG AREM AREM VII NO. 2 GRESIK', 'cholil_co', '5ZZC5R7DSS', 1, 'FP329.jpeg', 'K329.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_info`
--
ALTER TABLE `file_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_teknis`
--
ALTER TABLE `file_teknis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `file_info`
--
ALTER TABLE `file_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `file_teknis`
--
ALTER TABLE `file_teknis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
