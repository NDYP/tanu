-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 05:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` int(14) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `email`, `no_hp`, `username`, `password`) VALUES
(1, 'Tanu', 'asmdmmmsdas', 2132, 'tanu', 'tanu');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `tanggal` datetime NOT NULL,
  `isi` longtext NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `isi`, `foto`) VALUES
(6, 'Aturan dan himbauan berobat ke UGD Puskesmas Tangkiling bagi masyarakat khususnya masyarakat Bukit Batu', '2020-05-05 13:51:47', '                                        <span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Aturan dan himbauan berobat ke UGD Puskesmas tangkiling bagi masyarakat khususnya masyarakat Bukit Batu. Pasien dianjurkan datang ke UGD/Poned Puskesmas JIKA MENGALAMI KONDISI MENGANCAM NYAWA, DARURAT atau MENDESAK. KRITERIA YANG DAPAT BEROBAT ke UGD/ Poned UPT Puskesmas Tangkiling ada di point 6 pada gambar.</span><br style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">Mohon maaf atas ketidaknyaman ini</span><br style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><br style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\"><a class=\"_58cn\" href=\"https://www.facebook.com/hashtag/bersamamelawancovid?epa=HASHTAG\" data-ft=\"{\"type\":104,\"tn\":\"*N\"}\" style=\"color: rgb(56, 88, 152); cursor: pointer; text-decoration: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; background-color: rgb(255, 255, 255);\">#bersamamelawancovid</a><span style=\"color: rgb(28, 30, 33); font-family: Helvetica, Arial, sans-serif; font-size: 14px;\">-19</span>                                              ', 'berobat.jpg'),
(7, 'Aturan dan Himbauan Berobat pada pelayanan Rawat Jalan Puskesmas pada UPT Puskesmas Tangkiling', '2020-05-05 13:52:57', '                                           ', '91339352_216956692844784_2984829393991368704_o.jpg'),
(8, 'Update alur pelayanan UPT Puskesmas Tangkiling agar tidak bingung , Terimakasih', '2020-05-05 13:54:46', '                                           ', 'covid_8_april.jpg'),
(9, 'Himbauan penggunaan masker kain', '2020-05-05 13:55:43', '<span lang=\"EN-GB\" style=\"font-size: 10.5pt; line-height: 115%; font-family: Helvetica, sans-serif; color: rgb(28, 30, 33); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Himbauan penggunaan\r\nmasker kain kepada seluruh pasien dan pendamping yg berobat ke UPT Puskesmas\r\nTangkiling , serta kepada seluruh masyarakat Kecamatan Bukit Batu agar tidak\r\nlupa menggunakan masker kainnya jika keluar rumah , Terimakasih</span>                                           ', 'covid_8_april_2020.jpg'),
(10, 'DIRUMAH AJA CEGAH COVID-19, KENDALIKAN NYAMUK', '2020-05-05 13:59:06', '<p style=\"margin: 0cm 0cm 4.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-GB\" style=\"font-size:10.5pt;font-family:&quot;Helvetica&quot;,&quot;sans-serif&quot;;\r\ncolor:#1C1E21\">Demam berdarah dengue (DBD) merupakan wabah penyakit musiman\r\nyang bisa berujung kematian. Karena itulah, dengan melakukan PSN melalui\r\ngerakan 3M Plus menjadi salah satu langkah yang efektif dalam meminimalkan\r\npenyebaran virus yang dibawa melalui gigitan nyamuk Aedes aegypti.<br>\r\nSalah satu tindakan pencegahan untuk DBD adalah gerakan PSN 3M Plus. Mungkin\r\nsebagian dari Anda telah mengetahui akan gerakan ini. Tapi, apa itu PSN 3M Plus\r\nuntuk mencegah DBD?<br>\r\nPSN adalah sebuah gerakan p</span><span class=\"textexposedshow\"><span lang=\"EN-GB\" style=\"font-size:10.5pt;font-family:&quot;inherit&quot;,&quot;serif&quot;;mso-bidi-font-family:\r\nHelvetica;color:#1C1E21\">emberantasan sarang nyamuk dengan melakukan 3M Plus.</span></span><span lang=\"EN-GB\" style=\"font-size:10.5pt;font-family:&quot;inherit&quot;,&quot;serif&quot;;mso-bidi-font-family:\r\nHelvetica;color:#1C1E21\"><br>\r\n<span class=\"textexposedshow\">Pengertian dari 3M adalah :</span><br>\r\n<span class=\"textexposedshow\">Menguras</span><br>\r\n<span class=\"textexposedshow\">Lakukanlah minimal satu kali dalam seminggu\r\nkegiatan menguras tempat penampungan air. Tidak hanya menguras, tapi Anda juga\r\nharus menyikat dinding tempat-tempat penyimpanan air tersebut. Karena telur\r\nnyamuk aedes aegypti dapat menempel dengan cukup kuat pada dinding-dinding\r\npenampungan air.</span></span><span lang=\"EN-GB\" style=\"font-size:10.5pt;\r\nfont-family:&quot;Helvetica&quot;,&quot;sans-serif&quot;;color:#1C1E21\"><o:p></o:p></span></p>\r\n\r\n<p style=\"margin: 0cm 0cm 4.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-GB\" style=\"font-size:10.5pt;font-family:&quot;inherit&quot;,&quot;serif&quot;;\r\nmso-bidi-font-family:Helvetica;color:#1C1E21\">Menutup<br>\r\nSetelah menguras tempat air, jangan lupa menutup tempat-tempat penyimpanan air\r\ndi sekitar Anda. Hal ini dapat mencegah nyamuk untuk dapat bertelur di sana.<o:p></o:p></span></p>\r\n\r\n<p style=\"margin: 4.5pt 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"EN-GB\" style=\"font-size:10.5pt;font-family:\r\n&quot;inherit&quot;,&quot;serif&quot;;mso-bidi-font-family:Helvetica;color:#1C1E21\">Menyingkirkan/Mendaur\r\nUlang<br>\r\nSingkirkan atau daur ulang barang-barang bekas yang kemungkinan dapat menampung\r\nsisa-sia air hujan atau genangan air lainnya. Karena genangan-genangan air yang\r\nditampung dalam barang-barang bekas ini, juga dapat menjadi sarana nyamuk aedes\r\naegypti untuk bertelur.<o:p></o:p></span></p>                                           ', 'berita_covid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(20) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `jumlah_min` int(3) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `foto`, `jumlah_min`, `jumlah`, `kategori`) VALUES
(3, 'asass', 'Prasaranaa.jpg', 4, 4, 'Perlengkapan'),
(4, 'xxxxxx', 'Kamar_Inapp.JPG', 5, 6, 'Set Pemeriksaan Umum'),
(5, 'xxxxzx', '', 5, 5, 'Rawat Jalan'),
(6, 'xxxxxxxxx', '', 6, 7, 'Meubelair');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_pembantu`
--

CREATE TABLE `fasilitas_pembantu` (
  `id_fasilitas_pembantu` int(11) NOT NULL,
  `jenis_peralatan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fasilitas_pembantu`
--

INSERT INTO `fasilitas_pembantu` (`id_fasilitas_pembantu`, `jenis_peralatan`, `jumlah`, `kategori`) VALUES
(3, 'Aligator Forsceps P.247', 2, 'Set Pemeriksaan Umum di Puskesmas Pembantu');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` text NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `foto`) VALUES
(3, 'xxxx', 'download.png'),
(4, 'vvv', '2.PNG'),
(7, 'nnnnnn', 'xxxx4.png'),
(8, 'kmkmk', 'xxx2.png');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_jadwal` varchar(128) NOT NULL,
  `tanggal` varchar(40) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_jadwal`, `tanggal`, `kategori`) VALUES
(5, 'Ruang Pelayanan Pendaftaran', 'Senin s/d Sabtu', 'Rawat Jalan'),
(6, 'Ruang Pelayanan Pengobatan Umum', 'Senin s/d Sabtu', 'Rawat Jalan'),
(7, 'Ruang Pelayanan Gigi', 'Senin s/d Sabtu', 'Rawat Jalan'),
(8, 'Ruang Pelayanan KIA', 'Senin s/d Sabtu', 'Rawat Jalan'),
(9, 'Ruang Pelayanan KB', 'Senin s/d Sabtu', 'Rawat Jalan'),
(10, 'Ruang TB Paru', 'Senin s/d Sabtu', 'Rawat Jalan'),
(11, 'Ruang Pengobatan Kusta', 'Selasa dan Sabtu', 'Rawat Inap');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_inap`
--

CREATE TABLE `kamar_inap` (
  `id_kamar_inap` int(11) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kamar_inap`
--

INSERT INTO `kamar_inap` (`id_kamar_inap`, `isi`, `foto`) VALUES
(2, '                                        <p class=\"MsoNormal\" align=\"center\" style=\"text-align: justify; line-height: 150%;\"><span style=\"font-size: 12pt; line-height: 150%; font-family: \" times=\"\" new=\"\" roman\",=\"\" serif;\"=\"\">Rawat Inap atau disebut juga dengan Opname\r\nadalah sebuah istilah dimana pasien sebuah rumah sakit harus menjalani proses\r\nperawatan yang ditangani oleh dokter sesuai dengan penyakit yang diderita.\r\nPasien yang menjalani rawat inap diruangan tertentu dan biasanya akan diinfus\r\npada tangannya. Ruang perawatan untuk menjalani rawat inap memiliki fasilitas\r\nyang berbeda – beda, Biaya untuk masing – masing kamar disesuaikan dengan\r\nfasilitas yang diberikan. Semakin lengkap fasilitas yang disediakan dalam kamar\r\nperawatan atau ruang rawat inap maka biaya yang harus dibayar semakin tinggi.\r\nJumlah pasien dalam suatu kamar rawat inap juga disesuaikan dengan tingkatan\r\nkelas ruang rawat inap tersebut.</span><span style=\"font-size:12.0pt;\r\nline-height:150%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:=\"\" \"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>                                              ', 'Kamar_Inapp1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `judul`, `isi`, `foto`) VALUES
(1, 'Ruang Konsultasi Kesling', '                                                                                                                                                                <p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal\"><span style=\"font-size: 12pt; font-family: \"Times New Roman\", serif;\">Pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam\r\nrangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara,\r\nmelindungi dan meningkatkan cara-cara hidup bersih dan sehat.<o:p></o:p></span></p>                                                       ', '1.png'),
(2, 'Pelayanan Rujukan', '                                                                                                                                                                <p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal;mso-outline-level:3\"><span style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;\">Melayani rujukan rutin\r\npasien</span><br></p>                                                       ', '2.png'),
(3, 'Laboratorium', '                                                                                                                                                                <p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal;mso-outline-level:3\"><span style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt;\">Pemeriksaan laboratorium</span><br></p>                                                       ', '3.png'),
(4, 'Ruang Konsultasi Kesling', '                                                                                                                        <p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal\"><span style=\"font-size: 12pt; font-family: \"Times New Roman\", serif;\">Pengawasan kesehatan lingkungan dan pemberdayaan masyarakat dalam\r\nrangka perbaikan kualitas kesehatan lingkungan untuk dapat memelihara,\r\nmelindungi dan meningkatkan cara-cara hidup bersih dan sehat.<o:p></o:p></span></p>                                                    ', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prasarana`
--

CREATE TABLE `prasarana` (
  `id_prasarana` int(11) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prasarana`
--

INSERT INTO `prasarana` (`id_prasarana`, `isi`) VALUES
(1, '<p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\"><b>PUSKESMAS TANGKILING</b><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\">Puskesmas adalah unit pelaksanaan\r\npembangunan kesehatan di wilayah kecamatan Bukit Batu.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\">Fasilitas kesehatan yang terdapat di\r\npuskesmas induk :<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp; &nbsp; &nbsp;1. Instansi\r\nGawat Darurat ( IGD)<br>\r\n&nbsp; &nbsp; &nbsp;2. Ruang Rawat Inap<br>\r\n&nbsp; &nbsp; &nbsp;3. Ruang Bersalin ( PONED )<br>\r\n&nbsp; &nbsp; &nbsp;4. Poliklinik KIA / KB<br>\r\n&nbsp; &nbsp; &nbsp;5. Poliklinik Gigi<br>\r\n&nbsp; &nbsp; &nbsp;6. Laboratorium<br>\r\n&nbsp; &nbsp; &nbsp;7. Apotek<o:p></o:p></span></p>                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `visi_misi` longtext NOT NULL,
  `sejarah` longtext NOT NULL,
  `struktur` longtext NOT NULL,
  `peta` longtext NOT NULL,
  `kontak` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `visi_misi`, `sejarah`, `struktur`, `peta`, `kontak`) VALUES
(1, '                                                                                                                                                                                                                            <p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">VISI</span></b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">Terwujudnya Masyarakat\r\nTangkiling yang Sehat dan Mandiri<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">MISI</span></b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;margin-left:\r\n36.0pt;text-align:center;text-indent:-18.0pt;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">1.&nbsp;&nbsp;&nbsp;&nbsp;Mendorong kemandirian\r\nmasyarakat untuk hidup sehat<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;margin-left:\r\n36.0pt;text-align:center;text-indent:-18.0pt;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">2.&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan kualitas\r\nSDM<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;margin-left:\r\n36.0pt;text-align:center;text-indent:-18.0pt;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">3.&nbsp;&nbsp;&nbsp;&nbsp;Meningkatkan\r\npemberdayaan masyarakat yang mandiri<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;margin-left:\r\n36.0pt;text-align:center;text-indent:-18.0pt;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">4.&nbsp;&nbsp;&nbsp;&nbsp;Memberikan pelayanan\r\nyang berkualitas dan terjangkau<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;margin-left:\r\n36.0pt;text-align:center;text-indent:-18.0pt;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">5.&nbsp;&nbsp;&nbsp;&nbsp;Menggerakkan kegiatan\r\npromotif dan preventif<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;margin-left:\r\n36.0pt;text-align:center;text-indent:-18.0pt;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">6.&nbsp;&nbsp;&nbsp;&nbsp;Menumbuhkan\r\npartisipasi masyarakat untuk menjadikan PHBS sebagai peletak dasar pencegah\r\npenyakit dalam kehidupan sehari-hari<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;margin-left:\r\n36.0pt;text-align:center;text-indent:-18.0pt;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">7.&nbsp;&nbsp;&nbsp;&nbsp;Optimalisasi pelayanan\r\nterhadap masyarakat miskin agar tercipta manusia yang sehat dan mandiri<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">TUJUAN</span></b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">Menjadikan Puskesmas\r\nSebagai Sahabat Mesyarakat Untuk Hidup Sehat<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">TATA NILAI</span></b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\ntext-align:center;line-height:normal\"><span style=\"font-size:14.0pt;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">1.&nbsp;&nbsp;&nbsp;&nbsp;Cepat<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\ntext-align:center;line-height:24.0pt\"><span style=\"font-size:14.0pt;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">Dalam\r\nmemberikan pelayanan harus segera merespon/tanggap terhadap keluhan pasien<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\ntext-align:center;line-height:normal\"><span style=\"font-size:14.0pt;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">2.&nbsp;&nbsp;&nbsp;&nbsp;Tepat<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\ntext-align:center;line-height:24.0pt\"><span style=\"font-size:14.0pt;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">Dalam\r\nmemberikan pelayanan sesuai SPO/Juklak/Juknis<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\ntext-align:center;line-height:normal\"><span style=\"font-size:14.0pt;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">3.&nbsp;&nbsp;&nbsp;&nbsp;Efisien<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\ntext-align:center;line-height:24.0pt\"><span style=\"font-size:14.0pt;font-family:\r\n&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">Berdaya\r\nguna, memberikan pelayanan dengan tepat waktu, tepat tenaga dan tepat biaya<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">MOTTO</span></b><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-bottom-alt:auto;text-align:\r\ncenter;line-height:18.0pt\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\">Sehat Anda, Senyuman\r\nKami</span></p>                                            ', '                                                                                                                                                                                                                            <h2 style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%\"><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom: 0.0001pt; line-height: 150%;\"><span style=\"font-size: 14pt;\">Awal Sejarahku, pada tahun 1970. Aku diresmikan\r\ntahun itu berfungsi sebagai Balai Pengobatan. Tahun 1976, aku dinaikkan\r\ntingkatnya menjadi Puskesmas Pembantu. Dan pada Tahun 1980, aku menjadi\r\nPuskesmas Inpres, yaitu Puskesmas Tangkiling. Aku terletak di Jl. Tjilik Riwut\r\nKm. 34 Palangka Raya. Telp ku. 0536 3326648</span><br></p></h2><p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;\r\ntext-align:center;line-height:150%\"><b><span style=\"font-size:12.0pt;line-height:150%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p>                                            <p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%\"><b></b></p>', '                                                                                                                                    <h3 align=\"center\" style=\"text-align:center;line-height:150%\"><span style=\"font-size:12.0pt;line-height:150%\"><a href=\"http://puskesmastangkiling.blogspot.com/2013/12/struktur-organisasi.html\"><span style=\"color: windowtext; font-family: &quot;Times New Roman&quot;;\"><b><u>STRUKTUR ORGANISASI</u></b></span></a><o:p></o:p></span></h3>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><b>KEPALA UPTD\r\nPUSKESMAS</b></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\ndr. PROBO WURYANTORO<br><br>\r\n<!--[endif]--></span><b><span style=\"font-size:12.0pt;line-height:150%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><b>KEPALA TATA\r\nUSAHA</b></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\nSATIA JAYA</span><b style=\"font-size: 1rem;\"><span style=\"font-size:12.0pt;line-height:150%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\">&nbsp;</span></b></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><b style=\"font-size: 1rem;\"><span style=\"font-size:12.0pt;line-height:150%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><br></span></b></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><b>STAF DOKTER\r\nPUSKESMAS</b><br>\r\n1. dr. ERA INDIRA</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 1rem;\"><span style=\"font-size:12.0pt;line-height:150%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">2. drg.\r\nRATIH UTAMI DEWI</span></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n2. dr. M. YUDI RAKHMADI</span><b><span style=\"font-size:12.0pt;line-height:\r\n150%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><br><b>\r\nTATA USAHA</b></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n1. NOR MUSTAQIMAH, SKM</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n2. SRI MARYANI, SE<br>\r\n<br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--></span><b><span style=\"font-size:12.0pt;line-height:150%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><b>LOKET</b><br>\r\n1.&nbsp;NURYANI</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n2. ARINAKOMI</span><span style=\"font-size:12.0pt;line-height:150%;\r\nfont-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\"\"=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">3. MULYANI<br>\r\n<br><b>\r\nKEUANGAN</b></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n1. JARIAH, AMG</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n2.&nbsp;RIA ANDRIANA PRAJA, S.Kep</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt;\">3.\r\nTRIMALAKALIWUS B. DJALIWAN, AMd.Keb</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt;\"><br></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><b>\r\nBENDAHARA&nbsp;&nbsp;BARANG</b></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\nBUDI IRWANTO, Amd.Kep</span><span style=\"font-size: 12pt;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt;\"><br></span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><b>SP2TP</b></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\nNOR MUSTAQIMAH, SKM<br>\r\n<br><b>\r\nAPOTIK</b></span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n1. ANA, S.Farm. Apt</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\">\r\n2. SITI AULIA, AMd.Farm</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt; line-height: 150%;\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-fareast-language:in\"=\"\"><br></span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><b><span style=\"font-size:12.0pt;line-height:150%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";=\"\" mso-fareast-font-family:\"times=\"\" roman\"\"=\"\">POLI GIGI</span></b></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt;\">SUPARTIN</span></p><p class=\"MsoNormal\" align=\"center\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:\r\nauto;text-align:center;line-height:150%;mso-outline-level:2\"><span style=\"font-size: 12pt;\">PUNAHASTARITA</span></p>                                            ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4342252443917!2d113.75720061475485!3d-1.9808175985559222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcc076ffac9bdb%3A0x5ca7bb5d74cbcce7!2sPuskesmas%20Tangkiling!5e0!3m2!1sid!2sid!4v1588659879296!5m2!1sid!2sid', '                                                                                        <p><span style=\"font-size: 1rem;\">Alamat&nbsp; &nbsp; &nbsp; &nbsp; :</span></p><p><span style=\"font-size: 1rem;\">No.Telepon :</span></p><p>Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</p><p>Instagram&nbsp; &nbsp; :</p><p>Facebook&nbsp; &nbsp; :</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sistem_penunjang`
--

CREATE TABLE `sistem_penunjang` (
  `id_sistem_penunjang` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sistem_penunjang`
--

INSERT INTO `sistem_penunjang` (`id_sistem_penunjang`, `isi`) VALUES
(1, '                                                                                        <p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><b><span style=\"font-size: 16pt; line-height: 150%;\">A.Fungsi Pelayanan</span></b><span style=\"font-size: 16pt; line-height: 150%;\"><o:p></o:p></span></p><p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><span style=\"font-size: 16pt; line-height: 150%;\">Fungsi Pelayanan meliputi kegiatan yang terkait dengan pelayanan\r\nkepada masyarakat yang meliputi Pelayanan Promotif, Preventif dan Kuratif yang\r\ndijabarkan dalam 6 Program Pokok yaitu :<o:p></o:p></span></p><p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><span style=\"font-size: 16pt; line-height: 150%;\">1.Program Promosi Kesehatan<br>\r\n2.Program Kesehatan Lingkungan<br>\r\n3.Program Kesehatan Ibu, Anak, dan Keluarga Berencana<br>\r\n4.Program Upaya Perbaikan Gizi<br>\r\n5.Program Pemberantasan Penyakit Menular<br>\r\n6.Program Pengobatan Dasar</span></p><p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><br></p><p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><span style=\"font-size: 16pt; line-height: 150%;\"><o:p></o:p></span></p><p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><b><span style=\"font-size: 16pt; line-height: 150%;\">B.Fungsi Penunjang</span></b><span style=\"font-size: 16pt; line-height: 150%;\"><o:p></o:p></span></p><p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><span style=\"font-size: 16pt; line-height: 150%;\">Fungsi Penunjang merupakan fungsi yang mendukung pelaksanaan 6\r\nprogram pokok tersebut di atas diantaranya adalah :<o:p></o:p></span></p><p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:8.35pt;margin-left:\r\n0cm;line-height:150%\"><span style=\"font-size: 16pt; line-height: 150%;\">1.Pelayanan Laboratorium<br>\r\n2.Pelayanan Konseling</span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `fasilitas_pembantu`
--
ALTER TABLE `fasilitas_pembantu`
  ADD PRIMARY KEY (`id_fasilitas_pembantu`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kamar_inap`
--
ALTER TABLE `kamar_inap`
  ADD PRIMARY KEY (`id_kamar_inap`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `prasarana`
--
ALTER TABLE `prasarana`
  ADD PRIMARY KEY (`id_prasarana`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `sistem_penunjang`
--
ALTER TABLE `sistem_penunjang`
  ADD PRIMARY KEY (`id_sistem_penunjang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fasilitas_pembantu`
--
ALTER TABLE `fasilitas_pembantu`
  MODIFY `id_fasilitas_pembantu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kamar_inap`
--
ALTER TABLE `kamar_inap`
  MODIFY `id_kamar_inap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prasarana`
--
ALTER TABLE `prasarana`
  MODIFY `id_prasarana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sistem_penunjang`
--
ALTER TABLE `sistem_penunjang`
  MODIFY `id_sistem_penunjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
