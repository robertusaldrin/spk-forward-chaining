-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 11:37 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_koi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kode`, `gejala`) VALUES
(1, 'G01', 'Mata Berkabut'),
(2, 'G02', 'Terdapat cacing yang menempel pada tubuh'),
(3, 'G03', 'Menurunnya kekebalan tubuh / lemas'),
(4, 'G04', 'Sering menggesekkan tubuh pada dinding'),
(5, 'G05', 'Terdapat bintik-bintik hitam (bukan corak)'),
(6, 'G06', 'Terdapat bintik-bintik putih (bukan corak)'),
(7, 'G07', 'Sisik yang mulai tanggal dari badan ikan'),
(8, 'G08', 'Badan gembur'),
(9, 'G09', 'Kesulitan dalam berenang'),
(10, 'G10', 'Perut membengkak'),
(11, 'G11', 'Produksi lendir berlebih'),
(12, 'G12', 'Mata menonjol'),
(13, 'G13', 'Badan ikan kurus'),
(14, 'G14', 'Tulang sirip dan ekor ikan menjadi buram'),
(15, 'G15', 'Sirip dan ekor mulai membusuk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `info` longtext NOT NULL,
  `solusi` longtext NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kode`, `penyakit`, `info`, `solusi`, `gambar`) VALUES
(1, 'P1', 'Cloudy Eye', 'Diplostomum (fluke pada mata) dalam kasus ini bagian mata yang memutih adalah lensanya, bukan permukaan luar mata. Infeksi sekunder disebabkan luka pada mata. Penyakit ini disebabkan karena kondisi air kolam/akuarium yang kotor (kelebihan kadar amonia, nitrit dan nitrat yang berasal dari kotoran Koi), kadar Klor/Kloramin yang tinggi (biasanya berasal dari air PAM/PDAM). Serta kekurangan Vitamin/Gizi, disebabkan kualitas pakan ikan yang buruk. Gejala yang ditimbulkan : <br>\r\n1.	Pada kasus mata berkabut, mata Koi nampak terselimuti oleh lapisan tipis berwarna putih<br>\r\n2.	Produksi lendir berlebih<br>\r\n3.	Mata menonjol<br>', '- Pisahkan ikan koi yang terserang penyakit Cloudy Eye (Katarak) pada kolam yang berbeda<br>\r\n- Pastikan kolam isolasi ikan koi tersebut memiliki suhu yang stabil<br>\r\n- Berikan oksigen yang cukup atau aerasi dengan pompa udara<br>\r\n- Turunkan porsi pakan ikan koi, karena ikan koi yang sakit nafsu makannya menjadi berkurang, jika terus dibiarkan maka kolam ikan koi akan kotor dengan banyaknya sisa makanan<br>\r\n- Berikan obat yang sesuai dengan penyakit ikan koi tersebut', '07.26.2020-04.13.40cloudy_eye.jpg'),
(2, 'P2', 'Kutu Jangkar', 'Kutu jangkar (Anchor Worm), atau sering juga disebut kutu jarum, sebenarnya termasuk dalam golongan udang-udangan. Mereka biasanya mengubur diri di bawah sisik koi dan kemudian menjadi bersifat parasit. Cacing jangkar bisa membuat kekuatan koi jauh menurun dan di sisi lain juga meningkatkan resiko terjadinya infeksi sekunder. Cacing jangkar bisa mudah dilihat dengan mata telanjang, meski kadang orang mengabaikan keberadaan cacing ini. Kaca pembesar bisa digunakan untuk memastikan keberadaan cacing jangkar. Gejala yang ditimbulkan :<br>\r\n1.	Terdapat cacing yang menempel pada tubuh<br>\r\n2.	Menurunya kekebalan tubuh / lemas<br>\r\n3.	Sering menggesekkan tubuh pada dinding\r\n', 'Solusi Kutu Jangkar', 'kutu_jangkar.jpg'),
(3, 'P3', 'Black Spot', 'Penyakit ini ditandai dengan munculnya bintik-bintik hitam di sekujur tubuh ikan. Bintik hitam tersebut sebenarnya adalah kista fluke (sejenis cacing pita/pipih) yang biasa hidup di usus burung. Telur-telur dari fluke jatuh ke kolam lewat faeces (kotoran), kemudian menetas dan memenuhi tubuh siput/keong yang ada di situ. Dari sini mereka kemudian melekat pada ikan-ikan yang ada di kolam, mengubur diri dalam lapisan kulit dan membentuk bingkai hitam di seputaran mereka. Karena ikan-ikan di dalam kolam adalah pembawa (carrier) fluke, fluke tersebut tidak akan terlalu membahayakan ikan. Jika ikan yang terkena fluke dimakan burung, siklusnya akan lengkap dan akan berulang lagi. Gejala yang ditimbulkan :<br>\r\n1.	Menurunya kekebalan tubuh / lemas<br>\r\n2.	Terdapat bintik-bintik hitam (bukan corak)<br>\r\n3.	Badan ikan kurus\r\n', 'Solusi Black Spot', 'blackspot.jpg'),
(4, 'P4', 'White Spot', 'Penyakit bercak/bintik putih ini merupakan salah satu penyakit yang umum dijumpai dan bisa berakibat fatal pada ikan. Bahkan bisa mengakibatkan kematian pada koi berukuran kecil, terutama jika populasi kolam ikannya padat. Penyebab bercak/bintik putih ini adalah ciliata kecil (sering disebut Lehthyoplithitius, yakni parasite yang memiliki rambut getar/cilia) yang berenang-renang di kolam ikan untuk mencari inang. Jika telah menemukan inang, mereka akan mengubur diri ke dalam lapisan dermis dimana mereka bisa memperoleh makanan untuk sel-sel tubuh mereka. Jika tidak segera menemukan inang dalam 24 jam, mereka akan mati. Setelah kira-kira 3 minggu, mereka akan jatuh dari inang dan bereproduksi dalam bentuk kista di dasar kolam. Gejala yang ditimbulkan :<br>\r\n1.	Terdapat bintik-bintik putih (bukan corak)<br>\r\n2.	Menurunya kekebalan tubuh / lemas<br>\r\n3.	Badan ikan kurus\r\n', 'Solusi White Spot', 'whitespot.jpg'),
(5, 'P5', 'Dropsy', 'Dropsy atau gembur/gembung, bisa dikenali dari sisik yang mulai tanggal dari badan ikan. Ikan yang menderita penyakit gembur akan mengalami kesulitan dalam berenang, bernafas, dan memiliki perut yang membengkak. Penyebab penyakit ini diduga karena ada infeksi bakteri (aeromonas, myobakteri, atau parasit seperti Hexamita) dan virus pada saat yang bersamaan. Selain itu bisa juga karena infeksi ginjal. Kondisi air akuarium yang tidak bagus (seperti akibat terjadinya akumulasi nitrogen) dapat memicu terjadinya gejala dropsy. Ikan yang terinfeksi akan menahan cairan dalam sel tubuh dan pada gilirannya bisa turut mempengaruhi sistem peredaran darah. Dalam kasus yang berat, penyakit ini bisa berakibat fatal. Gejala yang ditimbulkan :<br>\r\n1.	Sisik yang mulai tanggal dari badan ikan<br>\r\n2.	Badan gembur<br>\r\n3.	Kesulitan dalam berenang<br>\r\n4.	Perut membengkak\r\n', 'Solusi Dropsy', 'dropsy.jpg'),
(6, 'P6', 'Fin/ Tail Rot', 'Fin/Tail Rot ditandai dengan adanya pembusukan sirip/ekor yang disebabkan oleh bakteri parasit. Penyakit ini harus dirawat dengan benar agar pembusukan tidak makin meluas di badan koi. Pada tahap awal infeksi, membran yang menghubungkan tulang sirip ikan menjadi buram dan mulai membusuk. Tulang sirip pun pada akhirnya ikut terpengaruh dan mulai membusuk juga. Infeksi akan terus menyebar sepanjang sirip atau ekor hingga akhirnya mencapai badan koi. Dalam keadaan ini (badan ikut membusuk) kebanyakan koi akan mati. Pembusukan sirip biasanya dikaitkan dengan perawatan ikan yang kurang baik atau kondisi air yang kotor (biasanya penyaringan air kurang baik dan jarang dibersihkan). Gejala yang ditimbulkan :<br>\r\n1.	Menurunya kekebalan tubuh / lemas<br>\r\n2.	Tulang sirip dan ekor ikan menjadi buram<br>\r\n3.	Sirip dan ekor mulai membusuk', 'Solusi Fin', 'fin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id` int(5) NOT NULL,
  `G01` tinyint(1) DEFAULT NULL,
  `G02` tinyint(1) DEFAULT NULL,
  `G03` tinyint(1) DEFAULT NULL,
  `G04` tinyint(1) DEFAULT NULL,
  `G05` tinyint(1) DEFAULT NULL,
  `G06` tinyint(1) DEFAULT NULL,
  `G07` tinyint(1) DEFAULT NULL,
  `G08` tinyint(1) DEFAULT NULL,
  `G09` tinyint(1) DEFAULT NULL,
  `G10` tinyint(1) DEFAULT NULL,
  `G11` tinyint(1) DEFAULT NULL,
  `G12` tinyint(1) DEFAULT NULL,
  `G13` tinyint(1) DEFAULT NULL,
  `G14` tinyint(1) DEFAULT NULL,
  `G15` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rule`
--

INSERT INTO `tb_rule` (`id`, `G01`, `G02`, `G03`, `G04`, `G05`, `G06`, `G07`, `G08`, `G09`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0),
(2, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(4, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0),
(6, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
