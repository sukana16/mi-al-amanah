-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 18, 2023 at 08:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$wRqCyyvLU3F9aMkDdUZStONkkKHILgz4wkPG2HiTMFAH441F0GHFO', 'Administrator', '11e18786d577c36fc852f01b90c998f2.png', NULL, '2023-12-18 14:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `kutipan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('publish','draft','pending') NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `isi`, `kutipan`, `gambar`, `status`, `kategori_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(10, 'Eddy Hiariej Bantah Terima Suap Rp 7 Miliar: Itu Lawyer Fee', 'eddy-hiariej-bantah-terima-suap-rp-7-miliar-itu-lawyer-fee', '&lt;p&gt;&lt;strong&gt;Jakarta&lt;/strong&gt; - Mantan Wamenkumham Edward Omar Sharif Hiariej atau Eddy Hiariej menyebut uang yang diduga hasil suap merupakan bayaran atas jasa sebagai pengacara atau lawyer fee. Eddy mengatakan lawyer sah meminta fee kepada klien.&lt;br /&gt;\r\nHal itu disampaikan kuasa hukum Eddy Hiariej dalam sidang praperadilan di PN Jaksel, Senin (18/12/2023). Pihak Eddy mengatakan dana yang disebut sebagai gratifikasi merupakan lawyer fee atas penanganan masalah hukum yang dialami oleh PT CLM dan PT APMR. Fee itu disebut dibayarkan kepada Yosi Andika, yang juga menjadi tersangka bersama Eddy.&lt;br /&gt;\r\n&lt;br /&gt;\r\n&amp;quot;Bahwa kasus dugaan gratifikasi atau suap yang dilaporkan oleh IPW kepada Termohon terhadap diri Pemohon I adalah terkait dengan adanya aliran dana yang konon besarnya Rp 7.000.000,00 (tujuh miliar rupiah) dari klien Pemohon III kepada Pemohon III Yosi Andika, SH, yang menurut Termohon patut diduga merupakan gratifikasi atau suap untuk diberikan kepada Pemohon I Prof Eddy Hiariej quod non,&amp;quot; kata kuasa hukum Eddy.&lt;/p&gt;\r\n', 'Mantan Wamenkumham Edward Omar Sharif Hiariej atau Eddy Hiariej menyebut uang yang diduga hasil suap merupakan bayaran atas jasa sebagai pengacara atau lawyer fee. Eddy mengatakan lawyer sah meminta fee kepada klien.\r\nHal itu disampaikan kuasa hukum Eddy Hiariej dalam sidang praperadilan.....', 'e58dc661b10aa82293f7ba9c167e0ff5.jpeg', 'publish', 1, '2023-12-18 14:39:32', 'Administrator', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'f182ea024420eec9f4f178d26fc87141.jpg', 'asasass', '2023-12-05 17:18:41', '2023-12-05 17:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Uncategorized', '2023-12-02 20:10:50', '2023-12-02 23:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `profil_umum` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `so` varchar(255) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `sejarah`, `profil_umum`, `visi`, `misi`, `so`, `updated_at`, `updated_by`) VALUES
(1, '&lt;p&gt;Awal mula berdirinya Madrasah Ibtidaiyah Al Amanah tidak ubahnya seperti lembaga-lembaga pendidikan pada umumnya. Meski bukan lembaga pendidikan yang dananya selalu disubsidi oleh pemerintah, lambat laun sekolah ini menjadi pilihan favorit masyarakat Cibeunying dan sekitarnya. Pada bulan Juni warga Cibeunying dan sekitamya masukkan anaknya yang umur 6 sampai 7 tahun. Madrasah Ibtidaiyah Al Amanah yang berlokasi di Desa Wantilan, Alhamdulillah saat ini mempunyai siswa sebanyak 222 siswa. Pada saat ini guru Madrasah Ibtidaiyah Al Amanah sebanyak 10 orang, 1 orang PNS telah tersertifikasi, 2 orang guru honorer impasing, 2 orang guru honorer sertifikasi dan 5 orang guru honorer yayasan serta pak kebun sebanyak 1 orang dengan jumlah siswa setiap tahun selalu mengalami peningkatan.&lt;/p&gt;\r\n\r\n&lt;p&gt;Madrasah Ibtidaiyah Al Amanah merupakan Lembaga di bawah naungan Kementerian Agama Kabupaten Subang Adapun lokasi Madrasah Ibtidaiyah Al Amanah terletak pada geografis yang sangat cocok untuk proses belajar mengajar yang terletak di tengah pemukiman penduduk. Mi ini dibangun dengan pertimbangan tata letak bangunan yang memberikan kenyamanan untuk belajar. Hal ini dapat di lihat dari tata letak ruang belajaryang agak jauh dari jalan raya sehingga kebisingan dari kendaraan bermotor dan kendaraan umum yang melintasi jalan raya dapat diminimalisir dan siswa tetap belajar dengan nyaman.&lt;/p&gt;\r\n', '&lt;p&gt;Madrasah MIS AL AMANAH merupakan lembaga pendidikan swasta yang berlokasi di KP. CIBEUNYING RT. 22/08 WANTILAN CIPEUNDEUY, KAB. SUBANG, JAWA BARAT. Madrasah ini memiliki tingkat akreditasi B, menunjukkan bahwa lembaga ini telah memenuhi standar kualitas pendidikan yang ditetapkan. Terletak di kabupaten Subang, provinsi Jawa Barat, Madrasah MIS AL AMANAH berperan penting dalam memberikan pendidikan formal kepada siswa-siswinya. Alamat yang tertera mencerminkan lokasi yang dapat dijangkau oleh masyarakat sekitar, memfasilitasi aksesibilitas pendidikan di daerah tersebut. Dengan status swasta, Madrasah MIS AL AMANAH dapat memberikan kontribusi dalam diversifikasi pilihan pendidikan di wilayahnya, menciptakan lingkungan belajar yang beragam dan mendukung perkembangan potensi siswa.&lt;/p&gt;\r\n', '&lt;p&gt;&amp;quot;Terwujudnya generasi muda yang cerdas, terampil dan berakhlakul karimah, berkarakter, inovatif dan berprestasi.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;Adapun indikator ketercapaian dari visi sesuai dengan variabelnya antara lain:&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;Pembelajaran membentuk generasi yang memiliki motivasi untuk selalu belajar dan mengembangkan diri.&lt;/li&gt;\r\n	&lt;li&gt;Berkarakter, mengimplementasikan Profil Pelajar Pancasila dalam aktualisasi kehidupan.&lt;/li&gt;\r\n	&lt;li&gt;Inovatif, kemampuan seluruh warga sekolah memaknai keadaan yang dinamis dan selalu berubah dengan berbagai tantangan dan hambatan menjadi sebuah celah dalam mengembangkan diri untuk menemukan solusi yang tepat, bermanfaat dan sesuai dengan keadaan masa kini dan mempersiapkan masa depan.&lt;/li&gt;\r\n	&lt;li&gt;Berprestasi, sebagai hasil akhir dalam sebuah proses, prestasi merupakan tolak ukur sebuah proses. Prestasi tak hanya berkisar pada kemampuan kognitif dalam ajang prestatif saja namun lebih pada keberhasilan menemukan kemampuan diri, mengembangkan talenta dan kecakapan hidup yang bermanfaat.menemukan kemampuan diri, mengembangkan talenta dan kecakapan hidup yang bermanfaat.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '&lt;p&gt;Dalam upaya mengimplementasikan visi sekolah, MI Al Amanah menjabarkan misi sekolah sebagai berikut:&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;Merancang pembelajaran yang menarik dan menyenangkan yang mampu memotivasi peserta didik untuk selalu belajar dan menemukan pembelajaran.&lt;/li&gt;\r\n	&lt;li&gt;Membangun lingkungan sekolah yang membentuk peserta didik memiliki akhlak mulia melalui rutinitas kegiatan keagamaan dan menerapkan ajaran agama melaui cara berinteraksi di sekolah.&lt;/li&gt;\r\n	&lt;li&gt;Membangun lingkungan sekolah yang bertoleransi dalam kebhinekaan global, mencintai budaya lokal dan menjunjung nilai gotong royong.&lt;/li&gt;\r\n	&lt;li&gt;Mengembangkan kemandirian, nalar kritis dan kreativitas yang memfasilitasi keragaman minat dan bakat peserta didik.&lt;/li&gt;\r\n	&lt;li&gt;Mengembangkan program sekolah yang membentuk ide dan gagasan cepat tanggapterhadap perubahan yang terjadi untuk merancang inovasi.&lt;/li&gt;\r\n	&lt;li&gt;Mengembangkan dan memfasilitasi peningkatan prestasi peserta didik sesuai minat dan bakatnya melalui proses pendampingan dan kerja sama dengan orang tua.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n', '7154694a6cabf20f4b13112e52b14d2c.jpeg', '2023-12-13 15:43:53', 'Authors');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `keterangan` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'd0e76188871340d8ee283810454b3398.jpg', 'Mal Pelayanan Publik Bale Madukara Kabupaten Purwakarta', '2023-12-02 16:52:01', '2023-12-10 16:38:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
