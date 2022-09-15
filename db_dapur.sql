-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 06:19 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dapur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admindapur', '$2y$10$DymBK7EKecsom1CBFD6/HeCdyseOX3MDElocgoFVlzvrZv/53s0SO');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(2) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `gambar`, `judul`) VALUES
(1, 'menu.png', 'NIKMATILAH JAJANAN DI DAPUR MINDRI');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `gambar`, `judul`, `deskripsi`, `harga`, `kategori`) VALUES
(8, 'fulljipang.png', 'Biji Ketapang Jipang Cookies', 'Kue kering khas etnis betawi yg biasa tersedia di hari raya idul fitri. \r\n                                     \r\nKami punya mimpi bagaimana agar kue biji ketapang ini bisa jadi cemilan sehari hari , tidak hanya di hari raya. Karena itu  agar menarik dan tidak membosankan kami punya ide untuk inovasi rasa, terdiri dari rasa➡ Original, kayu manis, wijen, coklat, keju, seblak, gurih , kacang, pandan  dan pedas\r\nA.Pouch 150 gr➡15k\r\nB.Pouch 500 gr➡35k\r\nC.Toples 300 gr➡35k\r\n', 'Rp 15.000 ', 'makanan'),
(9, 'lemon.png', 'Sereh Lemon', 'Kami punya pengalaman dalam menjaga kesehatan keluarga . Minuman sereh lemon terasa khasiatnya di tubuh kami selama  pandemi kami tdk pernah berobat ke dokter ,tapi konsumsi olahan rempah itu Alhamdulillah menambah imun dan solusi ketika sakit\r\n\r\nBerat 250 ml➡10k\r\nBerat 1000 ml➡25k\r\n', 'Rp 10.000', 'minuman'),
(11, 'temulawak.png', 'Temulawak / Kunyit Instant ', 'Minuman herbal tradisional umumnya memiliki khasiat yang bagus untuk kesehatan sehingga sangat baik untuk dikonsumsi. Salah satu ramuan tradisional yang bisa melawan berbagai penyakit dan membuat badan terasa bugar adalah minuman temulawak.', 'Rp 20.000', 'minuman'),
(12, 'permen.png', 'Permen Jahe', 'Manfaat Permen Jahe untuk kesehatan : \r\n\r\nMenghangatkan badan, mengurangi rasa mual,melegakan tenggorokan, meringankan batuk, meningkatkan stamina.', 'Rp 15.000', 'makanan'),
(13, 'abon.png', 'Abon Ikan Lubifamia', 'Awalnya kami ingin menyediakan olahan ikan yg praktis, awet,enak dan tidak ada duri nya  dalam rangka ikut program gerakan gemar makan ikan. Kami membuatnya dengan rasa cinta kesehatan, tanpa minyak goreng , tanpa vetsin agar lebih sehat dan higienis\r\nLubifamia  singkatan nama anak anak\r\n\r\nKemasan pouch 100 gr➡harga 25k\r\n', 'Rp 25.000', 'makanan'),
(14, 'garlic.png', 'Black Garlic', 'Kami punya pengalaman dalam menjaga kesehatan keluarga . bawang tunggal yg kami bikin fermentasi jadi hitam manis terasa khasiatnya di tubuh kami selama  pandemi kami tdk pernah berobat ke dokter ,tapi konsumsi olahan rempah itu Alhamdulillah menambah imun dan solusi ketika sakit\r\n\r\nHarga➡ 35k\r\n', 'Rp 35.000', 'bumbu'),
(15, 'jahe.png', 'Jahe Instant ', 'Biasanya jahe merah menjadi minuman pendamping kudapan atau kue kering.  Bisa disajikan sore atau malam hari sembari menikmati waktu istirahat. Tak hanya nikmat. Nutrisinya bermanfaat untuk meningkatkan daya tahan tubuh, mencegah flu, mengobati sakit kepala hingga menurunkan berat badan.', 'Rp 20.000', 'minuman'),
(16, 'gula_semut.png', 'Gula Aren Semut', 'Gula aren semut merupakan pemanis alami berbahan baku air nira murni (Pohon Aren), memiliki aroma dan cita rasa yang khas dan bermanfaat bagi kesehatan tubuh. Dapat ditambahkan kedalam berbagai makanan dan minuman seperti kopi, teh, jahe dan lainnya.\r\n\r\nKemasan pouch 250 gr, harga➡18 k\r\nBerat 1000 gr harga➡50 k\r\n', 'Rp 18.000', 'bumbu'),
(17, 'oysto.png', 'Kaldu Jamur Oysto', 'Kaldu jamur adalah suatu bumbu penyedap rasa yang diolah dari bahan dasar jamur. Tidak sedikit orang yang memilih bahan ini untuk tambahan bumbu penyedap yang sehat.\r\nA. Kemasan botol Harga➡20k\r\nB. Kaldu jamur oysto kemasan pouch berat 95 gr Harga➡15k\r\nKemasan pouch berat 200 gr Harga➡25 k\r\nC. Kaldu jamur sachetan berat 8 gr Harga➡1k\r\n', 'Rp 15.000', 'bumbu'),
(18, 'gulkong.png', 'Gula Singkong', 'Gulakong atau gula singkong cair adalah gula alami yang berasal dari pengubahan patisingkong (tapioca) menjadi fruktosa (gula buah).  Karena banyaknya keunggulan gulakong dibandingkan gula lain, maka sangat baik digunakansebagai gula sehari-hari bagi keluarga dan pendukung berbagai usaha makanan dan minuman.\r\n\r\nBotol kemasan 500 ml harga➡25k\r\nKemasan botol berat 1000 gr harga➡45k\r\n', 'Rp 25.000', 'bumbu');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `testimoni`) VALUES
(1, 'Rendy Feriansyah', 'Saya sangat sering membeli makanan dan minuman dari Dapur Mindri karena makanan dan minuman yang dijual 100% halal dan dapat bermanfaat bagi kesehatan karena mengandung bahan-bahan alami. '),
(15, 'Andi Firmansyah', 'Dapur Mindri menjual berbagai macam kebutuhan dari makanan, minuman hingga kebutuhan dapur , maka dari itu saya cukup sering membeli karena bagi saya barang yang ditawarkan berkualitas baik dan bermanfaat bagi kesehatan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
