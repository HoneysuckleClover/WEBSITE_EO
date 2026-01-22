-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2026 at 06:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2311041_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int NOT NULL,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `artikel_konten` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `artikel_sampul` varchar(255) NOT NULL,
  `artikel_author` int NOT NULL,
  `artikel_kategori` int NOT NULL,
  `artikel_status` enum('publish','draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_tanggal`, `artikel_judul`, `artikel_slug`, `artikel_konten`, `artikel_sampul`, `artikel_author`, `artikel_kategori`, `artikel_status`) VALUES
(16, '2025-12-27 09:17:31', 'Tips Merencanakan Acara yang Sukses dan Berkesan', 'tips-merencanakan-acara-yang-sukses-dan-berkesan', '<p>Merencanakan sebuah acara bukanlah hal yang sederhana. Dibutuhkan perencanaan yang matang agar acara dapat berjalan lancar, tepat waktu, dan memberikan kesan yang baik bagi para tamu. Baik itu acara pernikahan, seminar, ulang tahun, maupun gathering perusahaan, setiap detail harus diperhatikan dengan baik.</p>\r\n\r\n<p>Berikut adalah beberapa tips penting dalam merencanakan acara agar sukses dan berkesan:</p>\r\n\r\n<h4><strong>1. Tentukan Tujuan dan Konsep Acara</strong></h4>\r\n<p>Langkah awal yang harus dilakukan adalah menentukan tujuan acara. Apakah acara bersifat formal, semi formal, atau santai. Dari tujuan tersebut, konsep acara dapat disesuaikan, mulai dari tema, dekorasi, hingga susunan acara.</p>\r\n\r\n<h4><strong>2. Susun Anggaran dengan Jelas</strong></h4>\r\n<p>Anggaran merupakan faktor penting dalam perencanaan acara. Pastikan seluruh kebutuhan seperti tempat, konsumsi, dekorasi, perlengkapan, dan dokumentasi sudah diperhitungkan agar tidak terjadi pembengkakan biaya.</p>\r\n\r\n<h4><strong>3. Buat Timeline Acara</strong></h4>\r\n<p>Timeline membantu memastikan setiap kegiatan berjalan sesuai jadwal. Dengan adanya susunan waktu yang jelas, panitia dapat mengatur jalannya acara dengan lebih terorganisir dan menghindari keterlambatan.</p>\r\n\r\n<h4><strong>4. Pilih Vendor dan Tim yang Profesional</strong></h4>\r\n<p>Bekerja sama dengan vendor dan tim yang berpengalaman akan sangat membantu kelancaran acara. Event Organizer profesional mampu mengelola kebutuhan teknis dan non-teknis sehingga klien dapat lebih fokus menikmati acara.</p>\r\n\r\n<h4><strong>5. Lakukan Evaluasi Setelah Acara</strong></h4>\r\n<p>Evaluasi bertujuan untuk menilai keberhasilan acara dan menjadi bahan perbaikan untuk acara selanjutnya. Masukan dari klien dan tamu sangat berguna untuk meningkatkan kualitas pelayanan di masa depan.</p>\r\n\r\n<h3><strong>Penutup</strong></h3>\r\n<p>Dengan perencanaan yang matang dan dukungan tim yang profesional, sebuah acara dapat berjalan sukses dan meninggalkan kesan yang positif. Menggunakan jasa Event Organizer adalah solusi tepat untuk memastikan setiap detail acara tertangani dengan baik.</p>\r\n', 'Legends_Lunch_at_Grand_Hyatt.jpg', 1, 14, 'publish'),
(17, '2025-12-27 09:20:26', 'Peran Event Organizer dalam Mewujudkan Pernikahan Impian', 'peran-event-organizer-dalam-mewujudkan-pernikahan-impian', '<p>Pernikahan merupakan momen sakral yang diharapkan berjalan sempurna dan berkesan. Namun, dalam pelaksanaannya, persiapan pernikahan membutuhkan waktu, tenaga, dan koordinasi yang tidak sedikit. Oleh karena itu, kehadiran Event Organizer (EO) menjadi solusi untuk membantu calon pengantin dalam mengelola seluruh rangkaian acara.</p>\r\n\r\n<p>Event Organizer berperan dalam menyusun konsep pernikahan, mengatur jadwal acara, mengoordinasikan vendor, hingga memastikan acara berjalan sesuai rencana. Dengan dukungan tim profesional, pasangan pengantin dapat lebih fokus menikmati momen bahagia tanpa harus terbebani oleh urusan teknis.</p>\r\n\r\n<p>Menggunakan jasa EO juga membantu meminimalkan risiko kesalahan selama acara berlangsung, sehingga pernikahan dapat berjalan lancar, tertata, dan sesuai harapan.</p>\r\n', 'PICTURED__Selling_Sunsets_Christine_Quinns_wedding_photos.jpg', 1, 15, 'publish'),
(18, '2025-12-27 09:22:00', 'Pentingnya Event Organizer dalam Acara Perusahaan', 'pentingnya-event-organizer-dalam-acara-perusahaan', '<p>Acara perusahaan seperti seminar, workshop, gathering, dan launching produk membutuhkan perencanaan yang profesional dan terstruktur. Event Organizer berperan penting dalam memastikan setiap detail acara berjalan sesuai dengan tujuan perusahaan.</p>\r\n\r\n<p>Dengan pengalaman dan keahlian yang dimiliki, EO mampu mengatur konsep acara, teknis pelaksanaan, hingga pengelolaan waktu secara efektif. Hal ini akan meningkatkan citra profesional perusahaan di mata peserta dan mitra bisnis.</p>\r\n\r\n<p>Event Organizer yang berpengalaman juga mampu memberikan solusi kreatif agar acara perusahaan tidak hanya berjalan lancar, tetapi juga memberikan kesan yang positif dan berkelanjutan.</p>\r\n', 'Corporate_Events_Services.jpg', 1, 16, 'publish'),
(19, '2025-12-27 09:23:45', 'Konsep Kreatif dalam Meningkatkan Daya Tarik Acara', 'konsep-kreatif-dalam-meningkatkan-daya-tarik-acara', '<p>Konsep kreatif dan dekorasi memiliki peran penting dalam menciptakan suasana acara yang menarik dan berkesan. Pemilihan tema, warna, pencahayaan, serta tata letak dekorasi harus disesuaikan dengan jenis dan tujuan acara.</p>\r\n\r\n<p>Event Organizer yang profesional akan membantu klien menentukan konsep yang sesuai serta menghadirkan ide-ide kreatif agar acara tampil unik dan berbeda. Dengan konsep yang tepat, acara tidak hanya menarik secara visual tetapi juga memberikan pengalaman yang menyenangkan bagi para tamu.</p>\r\n', '22.jpg', 1, 17, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `halaman_id` int NOT NULL,
  `halaman_judul` varchar(255) NOT NULL,
  `halaman_slug` varchar(255) NOT NULL,
  `halaman_konten` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`halaman_id`, `halaman_judul`, `halaman_slug`, `halaman_konten`) VALUES
(3, 'Hubungi Kami', 'hubungi-kami', '                                                                        <p data-start=\"274\" data-end=\"531\" style=\"color: rgb(0, 0, 0); font-size: medium;\">Apabila Anda ingin berkonsultasi, meminta penawaran, atau menanyakan informasi lebih lanjut tentang layanan <strong data-start=\"382\" data-end=\"411\">Nusantara Event Organizer</strong>, silakan menghubungi kami melalui berbagai cara di bawah ini. Tim kami siap membantu Anda dengan cepat dan profesional.</p><hr data-start=\"533\" data-end=\"536\" style=\"font-size: medium;\"><h3 data-start=\"538\" data-end=\"562\" style=\"color: rgb(0, 0, 0);\"><strong data-start=\"542\" data-end=\"562\">Informasi Kontak</strong></h3><ul data-start=\"564\" data-end=\"825\" style=\"color: rgb(0, 0, 0); font-size: medium;\"><li data-start=\"564\" data-end=\"640\"><p data-start=\"566\" data-end=\"640\"><strong data-start=\"566\" data-end=\"577\">Alamat:</strong><br data-start=\"577\" data-end=\"580\">Jl. Merdeka No. 123, Kota Magelang, Jawa Tengah, Indonesia</p></li><li data-start=\"642\" data-end=\"689\"><p data-start=\"644\" data-end=\"689\"><strong data-start=\"644\" data-end=\"667\">Telepon / WhatsApp:</strong><br data-start=\"667\" data-end=\"670\">+62 812-3456-6990</p></li><li data-start=\"691\" data-end=\"728\"><p data-start=\"693\" data-end=\"728\"><strong data-start=\"693\" data-end=\"703\">Email:</strong><br data-start=\"703\" data-end=\"706\"><a data-start=\"706\" data-end=\"726\" class=\"decorated-link cursor-pointer\" rel=\"noopener\">info@nusantaraeo.com<span aria-hidden=\"true\" class=\"ms-0.5 inline-block align-middle leading-none\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" aria-hidden=\"true\" data-rtl-flip=\"\" class=\"block h-[0.75em] w-[0.75em] stroke-current stroke-[0.75]\"><use href=\"/cdn/assets/sprites-core-i9agxugi.svg#304883\" fill=\"currentColor\"></use></svg></span></a></p></li><li data-start=\"730\" data-end=\"825\"><p data-start=\"732\" data-end=\"825\"><strong data-start=\"732\" data-end=\"752\">Jam Operasional:</strong><br data-start=\"752\" data-end=\"755\">Senin – Sabtu: 09.00 – 18.00 WIB<br data-start=\"787\" data-end=\"790\">Minggu &amp; Hari Libur Nasional: Tutup</p></li></ul>                                                                                                                                                            '),
(4, 'Layanan Kami', 'layanan-kami', '                                    <p data-start=\"272\" data-end=\"550\">Di <strong data-start=\"275\" data-end=\"304\">Nusantara Event Organizer</strong>, kami menyediakan layanan lengkap untuk memastikan setiap acara berjalan lancar, berkesan, dan sesuai harapan klien. Tim profesional kami siap membantu dari tahap perencanaan hingga pelaksanaan acara, dengan kreativitas dan detail yang maksimal.</p><hr data-start=\"552\" data-end=\"555\"><h3 data-start=\"557\" data-end=\"579\"><strong data-start=\"561\" data-end=\"579\">Daftar Layanan</strong></h3><h4 data-start=\"581\" data-end=\"619\"><strong data-start=\"586\" data-end=\"619\">1. Pernikahan (Wedding Event)</strong></h4><ul data-start=\"620\" data-end=\"793\">\r\n<li data-start=\"620\" data-end=\"653\">\r\n<p data-start=\"622\" data-end=\"653\">Perencanaan konsep pernikahan</p>\r\n</li>\r\n<li data-start=\"654\" data-end=\"708\">\r\n<p data-start=\"656\" data-end=\"708\">Koordinasi vendor: dekorasi, catering, dokumentasi</p>\r\n</li>\r\n<li data-start=\"709\" data-end=\"748\">\r\n<p data-start=\"711\" data-end=\"748\">Pengaturan susunan acara &amp; timeline</p>\r\n</li>\r\n<li data-start=\"749\" data-end=\"793\">\r\n<p data-start=\"751\" data-end=\"793\">Monitoring hari-H untuk kelancaran acara</p>\r\n</li>\r\n</ul><p data-start=\"795\" data-end=\"888\"><strong data-start=\"795\" data-end=\"807\">Manfaat:</strong> Membantu pasangan pengantin menikmati momen bahagia tanpa khawatir teknis acara.</p><hr data-start=\"890\" data-end=\"893\"><h4 data-start=\"895\" data-end=\"941\"><strong data-start=\"900\" data-end=\"941\">2. Acara Perusahaan (Corporate Event)</strong></h4><ul data-start=\"942\" data-end=\"1073\">\r\n<li data-start=\"942\" data-end=\"992\">\r\n<p data-start=\"944\" data-end=\"992\">Seminar, workshop, gathering, launching produk</p>\r\n</li>\r\n<li data-start=\"993\" data-end=\"1031\">\r\n<p data-start=\"995\" data-end=\"1031\">Koordinasi logistik &amp; teknis acara</p>\r\n</li>\r\n<li data-start=\"1032\" data-end=\"1073\">\r\n<p data-start=\"1034\" data-end=\"1073\">Penyusunan agenda &amp; manajemen peserta</p>\r\n</li>\r\n</ul><p data-start=\"1075\" data-end=\"1165\"><strong data-start=\"1075\" data-end=\"1087\">Manfaat:</strong> Meningkatkan citra profesional perusahaan dan membuat acara berjalan efisien.</p><hr data-start=\"1167\" data-end=\"1170\"><h4 data-start=\"1172\" data-end=\"1217\"><strong data-start=\"1177\" data-end=\"1217\">3. Acara Ulang Tahun &amp; Private Party</strong></h4><ul data-start=\"1218\" data-end=\"1323\">\r\n<li data-start=\"1218\" data-end=\"1266\">\r\n<p data-start=\"1220\" data-end=\"1266\">Birthday party, sweet seventeen, anniversary</p>\r\n</li>\r\n<li data-start=\"1267\" data-end=\"1297\">\r\n<p data-start=\"1269\" data-end=\"1297\">Dekorasi kreatif &amp; tematik</p>\r\n</li>\r\n<li data-start=\"1298\" data-end=\"1323\">\r\n<p data-start=\"1300\" data-end=\"1323\">Dokumentasi &amp; hiburan</p>\r\n</li>\r\n</ul><p data-start=\"1325\" data-end=\"1400\"><strong data-start=\"1325\" data-end=\"1337\">Manfaat:</strong> Menciptakan pengalaman berkesan untuk klien dan tamu undangan.</p><hr data-start=\"1402\" data-end=\"1405\"><h4 data-start=\"1407\" data-end=\"1443\"><strong data-start=\"1412\" data-end=\"1443\">4. Acara Komunitas &amp; Sosial</strong></h4><ul data-start=\"1444\" data-end=\"1586\">\r\n<li data-start=\"1444\" data-end=\"1481\">\r\n<p data-start=\"1446\" data-end=\"1481\">Reuni, bakti sosial, acara kampus</p>\r\n</li>\r\n<li data-start=\"1482\" data-end=\"1536\">\r\n<p data-start=\"1484\" data-end=\"1536\">Penyusunan konsep acara sesuai kebutuhan komunitas</p>\r\n</li>\r\n<li data-start=\"1537\" data-end=\"1586\">\r\n<p data-start=\"1539\" data-end=\"1586\">Pengelolaan konsumsi, tempat, dan dokumentasi</p>\r\n</li>\r\n</ul><p data-start=\"1588\" data-end=\"1665\"><strong data-start=\"1588\" data-end=\"1600\">Manfaat:</strong> Mempermudah organisasi acara komunitas dengan hasil profesional.</p><hr data-start=\"1667\" data-end=\"1670\"><h4 data-start=\"1672\" data-end=\"1711\"><strong data-start=\"1677\" data-end=\"1711\">5. Dekorasi &amp; Creative Concept</strong></h4><ul data-start=\"1712\" data-end=\"1816\">\r\n<li data-start=\"1712\" data-end=\"1741\">\r\n<p data-start=\"1714\" data-end=\"1741\">Pembuatan tema acara unik</p>\r\n</li>\r\n<li data-start=\"1742\" data-end=\"1777\">\r\n<p data-start=\"1744\" data-end=\"1777\">Desain dekorasi &amp; tata panggung</p>\r\n</li>\r\n<li data-start=\"1778\" data-end=\"1816\">\r\n<p data-start=\"1780\" data-end=\"1816\">Konsultasi estetika &amp; visual acara</p>\r\n</li>\r\n</ul><p data-start=\"1818\" data-end=\"1887\"><strong data-start=\"1818\" data-end=\"1830\">Manfaat:</strong> Menjadikan acara tampil menarik, berbeda, dan memorable.</p><hr data-start=\"1889\" data-end=\"1892\"><h3 data-start=\"1894\" data-end=\"1918\"><strong data-start=\"1898\" data-end=\"1918\">Penutup Layanan:</strong></h3><p data-start=\"94\" data-end=\"112\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"1920\" data-end=\"2109\">Dengan layanan yang lengkap dan profesional, <strong data-start=\"1965\" data-end=\"1994\">Nusantara Event Organizer</strong> memastikan setiap acara berjalan lancar, tertata, dan meninggalkan kesan yang tak terlupakan bagi semua peserta.</p>                                                                                                                            '),
(5, 'Tentang Nusantara Event Organizer', 'tentang-nusantara-event-organizer', '                                    <p data-start=\"314\" data-end=\"584\"><strong data-start=\"314\" data-end=\"349\">Nusantara Event Organizer (NEO)</strong> adalah perusahaan yang bergerak di bidang jasa perencanaan dan pelaksanaan acara profesional. Sejak didirikan, NEO berkomitmen untuk menghadirkan pengalaman acara yang berkesan, terorganisir, dan penuh kreativitas bagi setiap klien.</p><p data-start=\"586\" data-end=\"894\">Kami percaya bahwa setiap acara, baik pernikahan, acara perusahaan, maupun event komunitas, memiliki cerita unik yang layak untuk diwujudkan dengan sempurna. Oleh karena itu, kami menyediakan layanan lengkap mulai dari konsep acara, koordinasi vendor, dekorasi, hingga pelaksanaan dan evaluasi pasca-acara.</p><p data-start=\"896\" data-end=\"1094\">Dengan tim yang profesional, berpengalaman, dan kreatif, NEO siap membantu Anda mengubah ide menjadi acara nyata yang tak terlupakan. Kepuasan klien dan kualitas layanan adalah prioritas utama kami.</p><hr data-start=\"1096\" data-end=\"1099\"><h3 data-start=\"1101\" data-end=\"1120\"><strong data-start=\"1105\" data-end=\"1120\">Visi &amp; Misi</strong></h3><p data-start=\"1122\" data-end=\"1251\"><strong data-start=\"1122\" data-end=\"1131\">Visi:</strong><br data-start=\"1131\" data-end=\"1134\">\r\nMenjadi Event Organizer terpercaya yang menghadirkan acara profesional, kreatif, dan berkesan di seluruh Indonesia.</p><p data-start=\"1253\" data-end=\"1264\"><strong data-start=\"1253\" data-end=\"1262\">Misi:</strong></p><ol data-start=\"1265\" data-end=\"1554\">\r\n<li data-start=\"1265\" data-end=\"1337\">\r\n<p data-start=\"1268\" data-end=\"1337\">Memberikan layanan event planning yang berkualitas dan terstruktur.</p>\r\n</li>\r\n<li data-start=\"1338\" data-end=\"1406\">\r\n<p data-start=\"1341\" data-end=\"1406\">Menciptakan pengalaman acara yang unik dan berkesan bagi klien.</p>\r\n</li>\r\n<li data-start=\"1407\" data-end=\"1484\">\r\n<p data-start=\"1410\" data-end=\"1484\">Mengedepankan kreativitas dan profesionalisme dalam setiap detail acara.</p>\r\n</li>\r\n<li data-start=\"1485\" data-end=\"1554\">\r\n<p data-start=\"1488\" data-end=\"1554\">Menjalin kerja sama yang harmonis dengan seluruh mitra dan vendor.</p>\r\n</li>\r\n</ol><hr data-start=\"1556\" data-end=\"1559\"><h3 data-start=\"1561\" data-end=\"1591\"><strong data-start=\"1565\" data-end=\"1591\">Nilai-Nilai Perusahaan</strong></h3><p data-start=\"72\" data-end=\"90\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><ul data-start=\"1592\" data-end=\"1899\">\r\n<li data-start=\"1592\" data-end=\"1669\">\r\n<p data-start=\"1594\" data-end=\"1669\"><strong data-start=\"1594\" data-end=\"1614\">Profesionalisme:</strong> Mengutamakan kualitas layanan dan kepercayaan klien.</p>\r\n</li>\r\n<li data-start=\"1670\" data-end=\"1738\">\r\n<p data-start=\"1672\" data-end=\"1738\"><strong data-start=\"1672\" data-end=\"1688\">Kreativitas:</strong> Menyajikan konsep acara yang unik dan inovatif.</p>\r\n</li>\r\n<li data-start=\"1739\" data-end=\"1811\">\r\n<p data-start=\"1741\" data-end=\"1811\"><strong data-start=\"1741\" data-end=\"1761\">Ketepatan Waktu:</strong> Memastikan setiap acara berjalan sesuai jadwal.</p>\r\n</li>\r\n<li data-start=\"1812\" data-end=\"1899\">\r\n<p data-start=\"1814\" data-end=\"1899\"><strong data-start=\"1814\" data-end=\"1833\">Kepuasan Klien:</strong> Setiap keputusan dan pelayanan berorientasi pada kebutuhan klien.</p></li></ul>                                                                                                                            ');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_slug` varchar(255) NOT NULL,
  `kategori_tipe` enum('artikel','portfolio') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_slug`, `kategori_tipe`) VALUES
(14, 'Event Tips', 'event-tips', 'artikel'),
(15, 'Wedding', 'wedding', 'artikel'),
(16, 'Corporate', 'corporate', 'artikel'),
(17, 'Creative', 'creative', 'artikel'),
(18, 'News', 'news', 'artikel'),
(19, 'Wedding', 'wedding', 'portfolio'),
(20, 'Corporate', 'corporate', 'portfolio'),
(21, 'Private Event', 'private-event', 'portfolio'),
(22, 'Community Event', 'community-event', 'portfolio'),
(23, 'Campus Event', 'campus-event', 'portfolio');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `layanan_id` int NOT NULL,
  `layanan_judul` varchar(255) NOT NULL,
  `layanan_slug` varchar(255) NOT NULL,
  `layanan_deskripsi` text NOT NULL,
  `layanan_gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `layanan_status` enum('draft','publish') NOT NULL DEFAULT 'draft',
  `layanan_tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`layanan_id`, `layanan_judul`, `layanan_slug`, `layanan_deskripsi`, `layanan_gambar`, `layanan_status`, `layanan_tanggal`) VALUES
(2, 'Wedding Event', 'wedding-event', '<p>Perencanaan, dekorasi, koordinasi vendor, dan dokumentasi untuk pernikahan yang berkesan.</p>', 'wedding_aesthetic.jpg', 'publish', '2025-12-27 11:00:06'),
(3, 'Corporate Event  ', 'corporate-event', '<p><span style=\"color: oklab(0.322425 0.00154591 -0.010555); font-family: &quot;gg sans&quot;, &quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; white-space-collapse: break-spaces; background-color: oklab(0.678888 0.00325716 -0.011175 / 0.121569);\">Seminar, workshop, gathering, dan launching produk dengan manajemen profesional.     </span></p>', 'download_(3).jpg', 'publish', '2025-12-27 11:01:57'),
(4, 'Private & Birthday Party ', 'private-birthday-party', '<p><span style=\"color: oklab(0.322425 0.00154591 -0.010555); font-family: &quot;gg sans&quot;, &quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; white-space-collapse: break-spaces; background-color: oklab(0.678888 0.00325716 -0.011175 / 0.121569);\"> Acara pribadi dengan dekorasi menarik, hiburan interaktif, dan tema kreatif.</span></p>', 'Plan_Your_Corporate_Holiday_Party_at_These_Brooklyn_Venues_ASAP.jpg', 'publish', '2025-12-27 11:03:12'),
(5, 'Community & Campus Event  ', 'community-campus-event', '<p><span style=\"color: oklab(0.322425 0.00154591 -0.010555); font-family: &quot;gg sans&quot;, &quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; white-space-collapse: break-spaces; background-color: oklab(0.678888 0.00325716 -0.011175 / 0.121569);\">Event komunitas dan kampus dengan konsep kreatif, tertata rapi, dan menyenangkan.    </span></p>', 'download_(4).jpg', 'publish', '2025-12-27 11:04:23'),
(6, 'Creative Concept & Decoration', 'creative-concept-decoration', '<p><span style=\"color: oklab(0.322425 0.00154591 -0.010555); font-family: &quot;gg sans&quot;, &quot;Noto Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; white-space-collapse: break-spaces; background-color: oklab(0.678888 0.00325716 -0.011175 / 0.121569);\"> Konsultasi tema, dekorasi, dan tata panggung agar acara tampil unik dan memorable.</span></p>', 'download_(5).jpg', 'publish', '2025-12-27 11:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `link_facebook` varchar(255) NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  `link_instagram` varchar(255) NOT NULL,
  `link_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`nama`, `deskripsi`, `logo`, `link_facebook`, `link_twitter`, `link_instagram`, `link_github`) VALUES
('Nusantara Event Organizer', 'Website Nusantara Event Organizer', 'Black_and_White_Initials_elegant_cursive_logo.png', 'https://www.facebook.com/share/1HH55oxJsN/', 'https://x.com/its_nkvu', 'https://www.instagram.com/yakkiya_ki?igsh=MW04MHdnN2M5bmcwbw==', 'https://github.com/HoneysuckleClover');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','penulis') NOT NULL,
  `pengguna_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`) VALUES
(1, 'yakiya', 'yakiya@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 1),
(2, 'ratna', 'ratna@gmail.com', 'penulis', '1a6544e89e67f3b6d53c00ada12a5f2d', 'penulis', 1),
(3, 'yaki', 'sari@gmail.com', 'sari', 'e9ee75b57bb1303190c8869621cad05b', 'admin', 1),
(8, 'Zulaiqoh', 'zul@gmail.com', 'zul', '6911ce0b67e45660207aa3fdf9f412c2', 'penulis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int NOT NULL,
  `portfolio_judul` varchar(255) NOT NULL,
  `portfolio_slug` varchar(255) NOT NULL,
  `portfolio_kategori` varchar(150) DEFAULT NULL,
  `portfolio_deskripsi` text NOT NULL,
  `portfolio_gambar` varchar(255) NOT NULL,
  `portfolio_status` enum('draft','publish') NOT NULL DEFAULT 'draft',
  `portfolio_tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_judul`, `portfolio_slug`, `portfolio_kategori`, `portfolio_deskripsi`, `portfolio_gambar`, `portfolio_status`, `portfolio_tanggal`) VALUES
(11, 'Pernikahan Indah A & B', 'pernikahan-indah-a-b', '19', '<p>Tema romantis &amp; elegan, dekorasi mewah, koordinasi vendor berjalan sempurna, tamu terkesan dengan detail acara.</p>', 'Wedding_Decorations1.jpg', 'publish', '2025-12-27 10:38:59'),
(12, 'Seminar Bisnis X', 'seminar-bisnis-x', '20', '<p>Workshop &amp; seminar profesional, agenda terstruktur, dan pengelolaan logistik tepat waktu.</p>', 'Client_event_seminar_room1.jpg', 'publish', '2025-12-27 10:40:06'),
(13, 'Birthday Party Y', 'birthday-party-y', '21', '<p>Ulang tahun bertema kreatif, dekorasi penuh warna, hiburan interaktif, suasana meriah &amp; berkesan.</p>', 'download1.jpg', 'publish', '2025-12-27 10:40:41'),
(14, 'Campus Gathering Z', 'campus-gathering-z', '23', '<p>Acara kampus interaktif, termasuk hiburan &amp; workshop, berjalan tertata rapi dan mendapat feedback positif.</p>', 'Meeting_at_Ayana_Komodo_Ballrom1.jpg', 'publish', '2025-12-27 10:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int NOT NULL,
  `testimonial_nama` varchar(100) DEFAULT NULL,
  `testimonial_isi` text,
  `testimonial_foto` varchar(255) DEFAULT NULL,
  `testimonial_status` enum('publish','draft') DEFAULT 'draft',
  `testimonial_tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial_nama`, `testimonial_isi`, `testimonial_foto`, `testimonial_status`, `testimonial_tanggal`) VALUES
(3, 'Budi Santoso', 'Pelayanan cepat dan hasil dekorasi pernikahan kami luar biasa! Tim EO sangat profesional.', 'testimonials-5.jpg', 'publish', '2025-12-27 10:48:58'),
(4, 'Siti Rahma', 'Seminar perusahaan kami berjalan tertata dan sukses berkat koordinasi tim EO.', 'testimonials-3.jpg', 'publish', '2025-12-27 10:50:06'),
(5, 'Andi Wijaya', 'Ulang tahun anak kami sangat meriah, dekorasi dan hiburannya fantastis!', 'testimonials-4.jpg', 'publish', '2025-12-27 10:51:14'),
(6, 'Rina Lestari', 'Acara gathering kampus kami lancar dan menyenangkan, peserta puas semua.', 'testimonials-2.jpg', 'publish', '2025-12-27 10:52:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`halaman_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `halaman_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `layanan_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
