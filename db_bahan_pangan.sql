-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 06:10 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bahan_pangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(30) NOT NULL,
  `caption` varchar(60) NOT NULL,
  `visit` int(11) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by_name` varchar(60) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `short_description`, `description`, `image`, `caption`, `visit`, `slug`, `created_at`, `created_by_name`, `updated_at`, `updated_by_name`) VALUES
(3, 'Pangan Segar dan Olahan', 'Pangan merupakan kebutuhan dasar manusia yang paling utama dan pemenuhannya merupakan bagian dari ha', '<p>Pangan merupakan kebutuhan dasar manusia yang paling utama dan pemenuhannya merupakan bagian dari hak asasi manusia yang dijamin di dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 sebagai komponen dasar untuk mewujudkan sumber daya manusia yang berkualitas. Pangan adalah segala sesuatu yang berasal dari sumber hayati produk pertanian, perkebunan, kehutanan, perikanan, peternakan, perairan, dan air, baik yang diolah maupun tidak diolah, yang diperuntukkan sebagai makanan atau minuman bagi konsumsi manusia termasuk bahan tambahan pangan, bahan baku pangan, dan bahan lain yang digunakan dalam proses penyiapan, pengolahan, dan/atau pembuatan makanan atau minuman (UU No.18 Tahun 2012 tentang Pangan Pasal 1).</p>\r\n<p>Berdasarkan cara perolehannya, pangan dapat dibedakan menjadi 3 yaitu :</p>\r\n<ol>\r\n<li>Pangan segar adalah Pangan yang belum mengalami pengolahan yang dapat dikonsumsi langsung dan/atau yang dapat menjadi bahan baku pengolahan Pangan.</li>\r\n<li>Pangan olahan adalah makanan atau minuman hasil proses pengolahan dengan cara atau metode tertentu, dengan atau tanpa bahan tambahan. Termasuk dalam Pangan olahan adalah pangan siap saji dan pangan olahan Industri Rumah Tangga.</li>\r\n<li>Pangan olahan tertentu adalah pangan olahan yang diperuntukkan bagi kelompok tertentu dalam upaya memelihara dan meningkatkan kualitas kesehatan. Contoh ekstrak tanaman mahkota dewa untuk diabetes melitus, susu rendah lemak untuk orang yang menjalankan diet rendah lemak, dan sebagainya (Saprianto, 2006).</li>\r\n</ol>\r\n<br />\r\n<p>Pangan merupakan kebutuhan dasar manusia yang paling utama dan pemenuhannya merupakan bagian dari hak asasi manusia yang dijamin di dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 sebagai komponen dasar untuk mewujudkan sumber daya manusia yang berkualitas. Pangan adalah segala sesuatu yang berasal dari sumber hayati produk pertanian, perkebunan, kehutanan, perikanan, peternakan, perairan, dan air, baik yang diolah maupun tidak diolah, yang diperuntukkan sebagai makanan atau minuman bagi konsumsi manusia termasuk bahan tambahan pangan, bahan baku pangan, dan bahan lain yang digunakan dalam proses penyiapan, pengolahan, dan/atau pembuatan makanan atau minuman (UU No.18 Tahun 2012 tentang Pangan Pasal 1).</p>\r\n<p>Berdasarkan cara perolehannya, pangan dapat dibedakan menjadi 3 yaitu :</p>\r\n<ol>\r\n<li>Pangan segar adalah Pangan yang belum mengalami pengolahan yang dapat dikonsumsi langsung dan/atau yang dapat menjadi bahan baku pengolahan Pangan.</li>\r\n<li>Pangan olahan adalah makanan atau minuman hasil proses pengolahan dengan cara atau metode tertentu, dengan atau tanpa bahan tambahan. Termasuk dalam Pangan olahan adalah pangan siap saji dan pangan olahan Industri Rumah Tangga.</li>\r\n<li>Pangan olahan tertentu adalah pangan olahan yang diperuntukkan bagi kelompok tertentu dalam upaya memelihara dan meningkatkan kualitas kesehatan. Contoh ekstrak tanaman mahkota dewa untuk diabetes melitus, susu rendah lemak untuk orang yang menjalankan diet rendah lemak, dan sebagainya (Saprianto, 2006).</li>\r\n</ol>', '20230718_155531_banner-01.png', '', 12, 'pangan-segar-dan-olahan ', '2023-07-18 13:55:31', 'defa', NULL, NULL),
(7, 'Manfaat Buah dan Sayuran untuk Kesehatan', 'Buah buahan dan sayuran banyak memilki kandungan vitamin, mineral, aktioksidan, serta serat yang tinggi dibanding jenis makanan lainnya. Kemudian buah dan sayuran mudah ditemukan dilingkungan kita di Indonesia, bahkan beberapa jenis buah dan sayuran mudah ditanam di alam tropis seperti Indonesia', '<p>Buah buahan dan sayuran banyak memilki kandungan vitamin, mineral, aktioksidan, serta serat yang tinggi dibanding jenis makanan lainnya. Kemudian buah dan sayuran mudah ditemukan dilingkungan kita di Indonesia, bahkan beberapa jenis buah dan sayuran mudah ditanam di alam tropis seperti Indonesia., Banyak makan sayuran dan cukup buah buahan, meruoakan salah satu dari 10 (sepuluh) pedoman<a title=\" Gizi Seimbang\" href=\"https://krakataumedika.com/info-media/artikel/pentingnya-gizi-seimbang-bagi-kesehatan\">&nbsp;Gizi Seimbang</a>.</p>\r\n<p>Sudah diketahui dan dibuktikan bahwa buah buhan dan sayuran memilki manfaat yang sangat baik untuk kesehatan tubuh, beberapa daerah Nepal, dan juga Sardinia sudah dikenal bahwa penduduknya relatif lebih sehat dan berumur panjang karena banyak mengkonsumsi buah buahan dan sayuran.<br /><br />Namun ternyata masih banyak orang yang belum memahami sepenuhnya perihal manfaat buah dan sayuran bagi kesehatan, karena umumnya lebih memilih kue, cokelat atau gorengan untuk kudapan dibandingkan mengkonsumsi buah buahan atau sayuran.</p>\r\n<h2>Manfaat bagi Kesehatan</h2>\r\n<p>Berbagai&nbsp; kajian&nbsp; menunjukkan&nbsp; bahwa&nbsp; konsumsi&nbsp; sayuran dan buah-buahan yang cukup turut berperan dalam menjaga kenormalan tekanan darah, kadar gula dan kolesterol darah. Konsumsi sayur dan buah&nbsp; yang&nbsp; cukup&nbsp; juga&nbsp; menurunkan&nbsp; risiko&nbsp; sulit&nbsp; buang&nbsp; air&nbsp; besar&nbsp; (BAB/sembelit)&nbsp;&nbsp; dan&nbsp;&nbsp; kegemukan. Hal&nbsp;&nbsp; ini&nbsp;&nbsp; menunjukkan&nbsp;&nbsp; bahwa&nbsp;&nbsp; konsumsi&nbsp; sayuran dan&nbsp; buah-buahan yang&nbsp; cukup&nbsp; turut&nbsp; berperan&nbsp; dalam pencegahan penyakit tidak menular kronik. Konsumsi sayuran dan&nbsp; buah-buahan yang&nbsp; cukup&nbsp; merupakan&nbsp; salah&nbsp; satu&nbsp; indikatorsederhana gizi seimbang.</p>\r\n<p>Berikut adalah beberpa manfaat buah buhan dan sayuran bagi kesehatan :</p>\r\n<ol>\r\n<ol>\r\n<li><strong>Meningkatkan Daya Ingat.</strong><br />Zat antoksidan yang terkandung dalam buah buhan dan sayuran dapat melindungi sel sel otak dan membantu meningkatkan daya ingat.</li>\r\n<li><strong>Membuat Tubuh Lebih Bugar.</strong><br />Buah buahan dan sayuran memilki kandungan vitamin dan mineral yang tinggi. Vitamin bersama dengan enzim bereaksi memproduksi energi; sehingga membuat tubuh menjadi lebih bugar.</li>\r\n<li><strong>Melancarkan Buang Air Besar.</strong><br />Buah buahan dan sayuran mengandung serat yang tinggi yang dapat meningkatkan kelancaran metabolisme tubuh, serta melancarkan buang air besar. Lancarnya buang air besar menghindari penyerapan kembali sisa metabolisme oleh usus.</li>\r\n<li><strong>Membantu Mengatasi Obesitas.</strong><br />Tingginya kandungan serat dalam buah buahan dan sayuran memberikan rasa kenyang yang lebih lama bahkan dapat mengurangi porsi makan yang berlebih.</li>\r\n<li><strong>Mencegah dan Mengobati Kanker.</strong><br />Buah buahan dan sayurab kaya kan mineral, vitamin, serat, dan antioksidan. Nutrisi jenis ini dapat memperkuat tubuh serta meningkatkan imun untuk melawan berbagai jenis penyalit secara alami, termasuk penyakit kanker.</li>\r\n<li><strong>Membuat Perasaan Lebih Bahagia.</strong><br />Aktioksidan dalam buah buhan dan sayuran terbukti mengurangi p[eradangan yang terjadi pada tubuh dan mampu melindungi seseorang dari depresi (antidepresan).</li>\r\n</ol>\r\n</ol>\r\n<p>Begitu besar manfaat mengkonsumsi buah buahan dan sayuran bagi kesehatan tubuh, maka mulai saat ini gantikanlan menu cemilan dan kudapan seperti kue, cokelat, gorengan dengan mengkonsumsi buah buahan dan sayuran; mungkin juice buah dan sayuran menjadi menu pilihan yang menarik.</p>\r\n<h2>Perbanyak mengonsumsi sayuran dan buah-buahan</h2>\r\n<p>Masyarakat Indonesia masih sangat kekurangan mengonsumsi sayuran dan buah-buahan, konsumsi sayuran rata-rata penduduk Indonesia baru 63,3% dari jumlah konsumsi yang dianjurkan, dan pada buah-buahan baru 62,1% dari jumlah konsumsi yang dianjurkan. Padahal sayuran dan buah buahan di Indonesia banyak sekali macam dan jumlahnya.</p>\r\n<h2>Kandungan dalam Buah dan Sayuran</h2>\r\n<p>Secara&nbsp; umum&nbsp; sayuran dan&nbsp; buah-buahan merupakan&nbsp; sumber&nbsp; berbagai&nbsp; vitamin,&nbsp; mineral,&nbsp; dan serat&nbsp; pangan.&nbsp; Sebagian&nbsp; vitamin,&nbsp; mineral yang terkandung dalam sayuran dan buah-buahan berperan sebagai&nbsp; antioksidan&nbsp; atau&nbsp; penangkal&nbsp; senyawa&nbsp; jahat&nbsp; dalam&nbsp; tubuh. Berbeda&nbsp;&nbsp;&nbsp;&nbsp; dengan&nbsp;&nbsp;&nbsp;&nbsp; sayuran,&nbsp;&nbsp;&nbsp;&nbsp; buah-buahan juga&nbsp;&nbsp;&nbsp;&nbsp; menyediakan&nbsp;&nbsp;&nbsp;&nbsp; karbohidrat&nbsp; terutama&nbsp; berupa&nbsp; fruktosa&nbsp; dan&nbsp; glukosa.&nbsp; Sayur&nbsp; tertentu&nbsp; juga&nbsp; menyediakan&nbsp; karbohidrat,&nbsp; seperti&nbsp; wortel&nbsp; dan&nbsp; kentang&nbsp; sayur.&nbsp; Sementara&nbsp;&nbsp; buah&nbsp;&nbsp; tertentu&nbsp;&nbsp; juga&nbsp;&nbsp; menyediakan&nbsp;&nbsp; lemak&nbsp;&nbsp; tidak&nbsp;&nbsp; jenuh&nbsp;&nbsp; seperti&nbsp; buah&nbsp; alpokat&nbsp; dan&nbsp; buah&nbsp; merah.&nbsp; Oleh&nbsp; karena&nbsp; itu&nbsp; konsumsi&nbsp; sayuran dan&nbsp; buah-buahan&nbsp; merupakan salah&nbsp; satu&nbsp; bagian&nbsp; penting&nbsp; dalam mewujudkan Gizi Seimbang.</p>\r\n<h2>Hati hati dengan Gula</h2>\r\n<p>Semakin&nbsp; matang&nbsp; buah&nbsp; yang&nbsp; mengandung&nbsp; karbohidrat&nbsp; semakin&nbsp; tinggi&nbsp; kandungan&nbsp; fruktosa&nbsp; dan&nbsp; glukosanya,&nbsp; yang&nbsp; dicirikan&nbsp; oleh&nbsp; rasa&nbsp; yang&nbsp; semakin&nbsp; manis.&nbsp; Dalam&nbsp; budaya&nbsp; makan&nbsp; masyarakat&nbsp; perkotaaan&nbsp; Indonesia&nbsp; saat&nbsp; ini,&nbsp; semakin&nbsp; dikenal&nbsp; minuman&nbsp; jus&nbsp; bergula.&nbsp; Dalam segelas&nbsp; jus&nbsp; buah&nbsp; bergula&nbsp; mengandung&nbsp; 150-300&nbsp; Kalori&nbsp; yang&nbsp; sekitar&nbsp; separohnya&nbsp; dari&nbsp; gula&nbsp; yang&nbsp; ditambahkan. Selain&nbsp; itu&nbsp; beberapa&nbsp; jenis&nbsp; buah juga meningkatkan risiko kembung dan asam urat. Oleh karena itu&nbsp; konsumsi&nbsp; buah&nbsp; yang&nbsp; terlalu&nbsp; matang&nbsp; dan&nbsp; minuman&nbsp; jus&nbsp; bergula&nbsp; perlu dibatasi agar turut mengendalikan kadar gula darah</p>\r\n<h2>Rekomendasi WHO</h2>\r\n<p>Badan&nbsp; Kesehatan&nbsp; Dunia&nbsp; (WHO)&nbsp; secara&nbsp; umum&nbsp; menganjurkan&nbsp; konsumsi&nbsp; sayuran dan&nbsp; buah-buahan untuk&nbsp; hidup&nbsp; sehat&nbsp; sejumlah 400 g perorang perhari, yang terdiri dari 250 g sayur (setara dengan 2&frac12; porsi atau 2 &frac12; gelas sayur setelah dimasak dan ditiriskan) dan 150 g buah, (setara dengan 3 buah pisang ambon ukuran sedang atau 1 &frac12; potong pepaya ukuran sedang atau 3 buah jeruk ukuran sedang).Bagi&nbsp;&nbsp; orang&nbsp;&nbsp; Indonesia&nbsp;&nbsp; dianjurkan&nbsp;&nbsp; konsumsi&nbsp;&nbsp; sayuran dan&nbsp;&nbsp; buah-buahan&nbsp; 300-400&nbsp; g&nbsp; perorang&nbsp; perhari&nbsp; bagi&nbsp; anak&nbsp; balita&nbsp; dan&nbsp; anak&nbsp; usia&nbsp; sekolah,&nbsp; dan&nbsp; 400-600&nbsp; g&nbsp; perorang&nbsp; perhari&nbsp; bagi&nbsp; remaja&nbsp; dan&nbsp; orang&nbsp; dewasa.&nbsp; Sekitar&nbsp; dua-pertiga&nbsp; dari&nbsp; jumlah&nbsp; anjuran&nbsp; konsumsi&nbsp; sayurandan buah-buahan tersebut adalah porsi sayur.</p>', '20230718_162904_ss.png', '', 1, 'manfaat-buah-dan-sayuran-untuk-kesehatan ', '2023-07-18 14:29:04', 'defa', NULL, NULL),
(8, 'tes55', 'tes', 'tes', '20230718_164104_banner-02.png', '', 1, 'tes55 ', '2023-07-18 14:41:04', 'defa', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`) VALUES
(10, 'tes', '20230717_080227_daging.jpg', 'tes'),
(11, 'teee', '20230717_105342_12.png', 'tess'),
(13, '1', '20230717_110651_1.jpg', '2'),
(17, '33', '20230717_111206_1.jpg', '33'),
(18, 'Bibit', '20230717_191542_bibit.png', 'tetstes');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `image`, `description`, `address`, `contact`, `email`) VALUES
(1, 'Delight', '20230718_155359_banner-01.png', 'Kami ingin memperkenalkan Delight kepada Anda. Delight adalah destinasi belanja daring yang menyediakan produk segar dan berkualitas tinggi untuk memenuhi kebutuhan kuliner dan pertanian Anda. Kami percaya bahwa makanan sehat adalah kunci untuk hidup yang bahagia dan produktif. <br /><br />Didukung oleh tim ahli yang berpengalaman, kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan dan aman bagi pelanggan kami. Di Delight, kami menawarkan beragam Pangan (makanan) segar seperti daging, sayuran, bibit, dan buah-buahan yang dapat membantu Anda meraih pola makan sehat dan seimbang. Kami juga memiliki sejumlah Artikel yang menarik dan informatif, membahas berbagai topik terkait dunia kuliner, pertanian, serta tips dan trik bercocok tanam yang bermanfaat. <br /><br />Selain itu, Delight juga memberikan fokus pada keberlanjutan dan kesadaran lingkungan. Kami bekerja sama dengan petani lokal untuk mendukung pertanian berkelanjutan dan mendukung kualitas hidup masyarakat di sekitar kami. Kami bangga menjadi bagian dari perjalanan kuliner dan pertanian Anda. Terima kasih telah memilih Delight sebagai pilihan Anda untuk produk berkualitas dan layanan terbaik. Bersama-sama, mari jaga kesehatan dan kelestarian alam untuk masa depan yang lebih baik. Teruslah menemukan kelezatan hidup dengan Delight!', 'bandung', '1236744', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `image` varchar(40) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by_id` int(11) DEFAULT NULL,
  `created_by_name` varchar(60) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `updated_by_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `image` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by_name` varchar(60) DEFAULT NULL,
  `created_by_role` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by_name` varchar(60) DEFAULT NULL,
  `updated_by_role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category_id`, `price`, `description`, `created_at`, `created_by_name`, `created_by_role`, `updated_at`, `updated_by_name`, `updated_by_role`) VALUES
(9, 'Bibit Terbaik', '20230718_100442_Group 22.png', 10, 35000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo qui nisi quo voluptatum vero recusandae praesentium non harum similique nesciunt nam saepe illum provident optio perferendis facere, iure quibusdam eos.', '2023-07-17 17:31:48', 'defa', '', '0000-00-00 00:00:00', '', ''),
(10, 'tes', '20230718_141511_bibit.png', 18, 12345, 'tes', '2023-07-18 12:15:11', 'defa', '', '2023-07-18 12:15:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `role` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `no_telp`, `gender`, `address`, `image`, `role`, `created_at`, `updated_at`) VALUES
(11, 'defa', 'defa@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 'perempuan', NULL, NULL, '', '2023-07-15 16:16:04', NULL),
(12, 'putri', 'putri@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1234577', 'perempuan', 'bandung', '20230718_102231_logo-hijau.jpg', 'customer', '2023-07-18 08:22:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
