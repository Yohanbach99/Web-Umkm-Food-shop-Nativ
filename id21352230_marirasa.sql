-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 12:45 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21352230_marirasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL,
  `terkonfirmasi` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_user`, `nama`, `alamat`, `nomor_hp`, `nama_produk`, `jumlah`, `total_harga`, `terkonfirmasi`) VALUES
(58, 21, 'Christian', 'Gedung teknik unipa', '081356001812', 'Es Lumut', 1, 10.00, 1),
(59, 21, 'Fernando', 'Prodi informatika', '081356001812', 'Es Lumut', 4, 40.00, 1),
(100, 35, 'leona', 'Kampus', '081245678912', 'Es Lumut Rasa Coklat', 1, 10.00, 1),
(101, 35, 'Kak Nesya', 'Kampus', '081234567890', 'Es Lumut Rasa Coklat', 3, 30.00, 1),
(104, 44, 'Wahyuni', 'Jalan Trikora Wosi', '082197588500', 'Lontar Rasa Keju Ukuran kecil', 3, 15.00, 1),
(105, 44, 'Wahyuni', 'Jalan Trikora Wosi', '082197588500', 'Es LumutRasa Matcha', 1, 10.00, 1),
(107, 37, 'Deka', 'Wosi', '081234899948', 'Ayam Gebrek', 2, 50.00, 1),
(113, 69, 'Ferdinan Sarapang', 'Angkasa mulyono', '+62 813-4216-8204', 'Lontar Biasa   Ukuran Besar', 0, 100.00, 1),
(114, 78, 'Mely', 'Irmanjaya', '813-4216-8204', 'Jasuke', 1, 15.00, 1),
(115, 78, 'Mely', 'Irmanjaya', '813-4216-8204', 'Ayam Gebrek', 1, 25.00, 1),
(116, 78, 'Mely', 'Irmanjaya', '813-4216-8204', 'Es LumutRasa Taro', 1, 10.00, 1),
(120, 87, 'yewer', 'amban', '081344344081', 'Ayam Gebrek', 2, 50.00, 1),
(121, 87, 'yewer', 'amban', '081344344081', 'Es Lumut Rasa Coklat', 5, 50.00, 1),
(122, 87, 'Novalin ', 'RSUD', '082248941740', 'Ayam Gebrek', 2, 50.00, 1),
(123, 37, 'Hanifah ', 'Toko permata indah', '0857-4553-7103', 'Jasuke', 1, 15.00, 1),
(129, 26, 'Yansi', 'Ayambori', '081248618137', 'Ayam Gebrek', 1, 25.00, 0),
(130, 107, 'Fahri', 'Imanjaya depan caffe bongkar', '822-4610-3799', 'Es LumutRasa Taro', 1, 10.00, 1),
(131, 107, 'Fahri', 'Irmanjaya depan cafe bongkar', '822-4610-3799', 'Ayam Gebrek', 1, 25.00, 1),
(136, 111, 'Dian', 'Jl asahan no 5 ', '0811488398', 'Ayam Gebrek', 2, 50.00, 1),
(137, 34, 'Amat', 'Jl kri nanggala', '+62 812-4824-8435', 'Ayam Gebrek', 1, 25.00, 1),
(138, 34, 'Sestu', 'Jl asahan no4', '082238516818', 'Ayam Gebrek', 1, 25.00, 1),
(144, 112, 'christian', 'prodi informatika', '081356001812', 'Ayam Gebrek', 2, 50.00, 1),
(145, 112, 'christian', 'prodi informatika', '081356001812', 'Es Lumut botolRasa Coklat', 5, 75.00, 1),
(146, 87, 'Yewer', 'Amban', '081344344081', 'Lontar Rasa Keju  Ukuran Besar ', 1, 100.00, 1),
(147, 87, 'Yewer', 'Amban', '081344344081', 'Es LumutRasa Strobery', 1, 20.00, 1),
(148, 87, 'Yewer', 'Amban', '081344344081', 'Es LumutRasa Taro', 2, 20.00, 1),
(149, 114, 'sael', 'irman jaya', '082238859407', 'Ayam Gebrek', 1, 25.00, 1),
(150, 115, 'Affan', 'Kos sebalah mesjid Nurul Qolbi amban permai', '082197955273', 'Ayam Gebrek', 1, 25.00, 1),
(151, 115, 'Affan', 'Kos sebalah mesjid Nurul Qolbi amban permai', '082197955273', 'Es LumutRasa Taro', 1, 10.00, 1),
(152, 46, 'Haeril', 'Perumahan bumi Marina ', '082399014381', 'Ayam Gebrek', 1, 25.00, 1),
(153, 117, 'Jannuar', 'Amban', '822-3869-1952', 'Ayam Gebrek', 1, 25.00, 1),
(154, 117, 'Jannuar', 'Amban', '822-3869-1952', 'Es LumutRasa Matcha', 1, 10.00, 1),
(155, 87, 'Novi ', 'Sanggeng', '082344568970', 'Ayam Gebrek', 1, 25.00, 1),
(156, 87, 'Novi ', 'Sanggeng', '082344568970', 'Es LumutRasa Matcha', 2, 20.00, 1),
(157, 87, 'Novi ', 'Sanggeng', '082344568970', 'Es LumutRasa Taro', 2, 20.00, 1),
(158, 118, 'Yustisia', 'Amban', '+62 812-8752-2535', 'Ayam Gebrek', 1, 25.00, 1),
(159, 118, 'Yustisia', 'Amban', '+62 812-8752-2535', 'Es Lumut botolRasa Coklat', 1, 15.00, 1),
(169, 78, 'Novalin', 'Amban', '081342168204', 'Ayam Gebrek Sambal Ijo', 10, 250.00, 1),
(170, 21, 'Christian', 'Gedung teknik unipa', '081356001812', 'lalapan', 1, 30.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rekapan`
--

CREATE TABLE `rekapan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` decimal(10,2) NOT NULL,
  `pengeluaran` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rekapan`
--

INSERT INTO `rekapan` (`id`, `tanggal`, `pemasukan`, `pengeluaran`) VALUES
(129, '2023-11-08', 1105.00, 0.00),
(131, '2023-11-09', 280.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(21, 'chrisuhendra', 'christiansuhendra@gmail.com', '$2y$10$Wdj8ei.3LQi1GkAoBYNcyuXFRh9qWKemu..yKyXg1c42gVe2Df5ty', 'user', '2023-10-05 00:19:57', '2023-10-05 00:19:57'),
(23, 'marirasa', 'marirasa12@gmail.com', '$2y$10$15HtIFKhqjzjjAWA2Ps5O..txvwM0LJTQfoVUS5qg8JmwvDbbNX5W', 'admin', '2023-10-05 01:34:15', '2023-10-05 01:37:49'),
(25, 'P', 'p@gmail.com', '$2y$10$UxR4HBmAnEOPZ.MkEuLIleK5aIwpTrTBS4qldtPCrjulf1N5udXqO', 'user', '2023-10-05 02:33:46', '2023-10-05 02:33:46'),
(27, 'Iyun', 'sitikhodijah202165007@gmail.com', '$2y$10$irF/Of0wyJf2Eqb1gXpn.ev.K.Z4JhCiPJ6d3FjP2aBNB0vCBOx8.', 'user', '2023-10-05 04:26:40', '2023-10-05 04:26:40'),
(29, 'Leona', 'leonardosimyapen@gmail.com', '$2y$10$Xx.MmV5iNrjxDFX6/Oj1feeBxn7TMkgg78hS7M2BFYdloOmKqhE3i', 'user', '2023-10-05 07:00:58', '2023-10-05 07:00:58'),
(30, 'Mukasama', 'usahabersama911@gmail.com', '$2y$10$jiXVE5lGDk8uhwJzqg7xdeQ6Wx7ctYcxTCfQ58nmqvcU1XXM8D3E.', 'user', '2023-10-05 07:09:45', '2023-10-05 07:09:45'),
(31, 'Mukasama', 'usahabersama911@gmail.com', '$2y$10$zlXFBr/pw8ysTyuWXza/M.UUXUQilCanJsHz2vXfnNlYvO/NghYWO', 'user', '2023-10-05 07:11:07', '2023-10-05 07:11:07'),
(32, 'Mukasama', 'usahabersama911@gmail.com', '$2y$10$ZgLElMEgUMs6zDN/zY5MEOrYFLZuYsnW9L4fGxxj/DPHYBZiT5Gue', 'user', '2023-10-05 07:13:52', '2023-10-05 07:13:52'),
(33, 'Nova', 'novalinkoru50@gmail.com', '$2y$10$b2mEnqcmjAm.vMLz5Y/tOeiIGd6ACQ2YU4sqHX2DHjHUBLvoJ98vq', 'user', '2023-10-05 07:15:21', '2023-10-05 07:15:21'),
(34, 'zharima', 'zharimamokompit10@gmail.com', '$2y$10$XEYjE6gOdVgr24ENO4LVb.OTLo/9utQvDeFO3VNmW3t7ncBXDxktK', 'user', '2023-10-05 07:46:44', '2023-10-05 07:46:44'),
(35, 'tanpa isi web', 'yansiratte36@gmail.com', '$2y$10$JQZYbFvjSzCvLLLKAjF8ZegVPcVWrCkp4eBY6wcyNSLQp4QSpY4CK', 'user', '2023-10-05 08:09:51', '2023-10-18 10:44:14'),
(36, 'Andin', 'andin.@gmail.com', '$2y$10$GYOH8MXjFff.yzKQbfdQV.LdhEjbNg6mLqjzDy5knGcuudgHFYbF.', 'user', '2023-10-05 14:28:54', '2023-10-05 14:28:54'),
(37, 'Deka', 'deka@gmail.com', '8c7e74883d4a0773ab9c03032a868eee', 'user', '2023-10-05 23:17:33', '2023-11-08 11:02:10'),
(38, 'Odan', 'aristayordan@gmail.com', '$2y$10$VhUl8NK5NUQseiuz5ttoCueoRiF7CxhZaNFUJPMuSaBa6SQx1XLLm', 'user', '2023-10-06 06:45:44', '2023-10-06 06:45:44'),
(39, 'Al', 'alqodrat13@gmail.com', '$2y$10$/Pbcdi1rrqkzaATfZvcOsecteRKz04vQ8QOU82GsF.bUyNTuuYOtK', 'user', '2023-10-06 09:02:37', '2023-10-06 09:02:37'),
(40, 'zharima', 'zharimamokompit10@gmail.com', '$2y$10$vQ0iL.gI1ZxjmddS5r2UguQQbSmgGHLMDnW3jQNTLoVNpBzi7qFZu', 'user', '2023-10-06 09:20:53', '2023-10-06 09:20:53'),
(41, 'Mersi Cantik', 'rmersy23@gmail.com', '$2y$10$0YAem3.tZh4/WEy6ljAQ0OzaCyzG7IYLDnbUtmeSrb9U0xPR3hbZO', 'user', '2023-10-06 09:22:09', '2023-10-06 09:22:09'),
(42, 'Ondy', 'ondy@gmail.com', '30e47226daf4d6775646d0962a111475', 'user', '2023-10-06 09:22:15', '2023-11-08 11:04:13'),
(43, 'Mersy Cantik ', 'rmersy23@gmail.com', '$2y$10$BD7NFpqYpkEC7283Lyn9AuJEYQKQA23ts4iUCS1dt4EkoU9tX.9qi', 'user', '2023-10-06 09:23:24', '2023-10-06 09:23:24'),
(44, 'Ayu', 'wahyunirosyidah@gmail.com', '$2y$10$GQh4M.UH6aXvIOhwkibDOeJfJuwudjekJuI3spL9WxFF2T/iy3606', 'user', '2023-10-06 09:35:17', '2023-10-06 09:35:17'),
(45, 'Yuli', 'ysangka75@gmail.com', '$2y$10$f3aaSRXF4H5pMuqCXQznIeLDr34LfOdBoPkdLi7AKBioaJdb3ZS5.', 'user', '2023-10-06 09:52:57', '2023-10-06 09:52:57'),
(46, 'Haeril', 'haerilmkw@gmail.com', '$2y$10$5lDKXz5bNO608VZ3iqAwCeEjgpP5itFeBB5qivDzCT/dxZKUVVMfe', 'user', '2023-10-06 10:40:59', '2023-10-06 10:40:59'),
(47, 'Siti Azahra', 'hanidapi123@gmail.com', '$2y$10$FA4b3xV5lyPkkgW1VsDirOTcaZGLH76Q.Y4siFsZPYnoG3M.7dl4G', 'user', '2023-10-06 12:33:22', '2023-10-06 12:33:22'),
(48, 'Azahra', 'hanidapi123@gmail.com', '$2y$10$tTAYuXst8nD10burQKThZuLr07u09muG9JMVKwBFImgdWxwkpEdly', 'user', '2023-10-06 12:39:31', '2023-10-06 12:39:31'),
(49, 'Azahra', 'hanidapi123@gmail.com', '$2y$10$HnhO281nXsUNsRicS1suuekOxZj1oI51Vpo2lOULcshn7WxlkDJb6', 'user', '2023-10-06 12:40:27', '2023-10-06 12:40:27'),
(50, 'Siti azahra', 'hanidapi123@gmail.com', '$2y$10$5.zDEc4LCSSyC3VCfI8w3.p9tn8YKIhO6rp56EuYBu6XDqSiIvjn6', 'user', '2023-10-06 12:44:03', '2023-10-06 12:44:03'),
(51, 'Azahra', 'hanidapi123@gmail.com', '$2y$10$gZukVXCSEvLqnDHx7XflF.NsKeJYDJE3/V8SC3C/Q93arw/GN30/S', 'user', '2023-10-06 12:49:31', '2023-10-06 12:49:31'),
(52, 'Coba', 'percobaan12@gmail.com', '$2y$10$WbNohPW45Gz3IyuQwSizeexvgX7I5/sryvUk2BjjnMm7wAKv4pBRK', 'user', '2023-10-06 12:58:18', '2023-10-06 12:58:18'),
(53, 'Hani', 'hanifah@gamil.com', '$2y$10$NnUn3MAttDmYhfjWOlGBsOxH70HiYKQ5oouAjwmWYkjjjfS81D4Sy', 'user', '2023-10-06 13:19:57', '2023-10-06 13:19:57'),
(54, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$PdT1WITq2qReyaG0DGRvp.E1AHbtuFiVmv8sh5dUYFuBcp0h4lMoe', 'user', '2023-10-06 13:22:51', '2023-10-06 13:22:51'),
(55, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$h/7/7k9IAQl01C31hhKvl.418gn2yL4FYy2h4raeF1UhFT1JI8Pni', 'user', '2023-10-06 13:23:36', '2023-10-06 13:23:36'),
(56, 'Nanda', 'Nanda12@gmail.com', '$2y$10$hFRb5BAKsM4VRWbnm.nNZexn85qMOiBFXW3/oXUoKK7fDB7jqeeuy', 'user', '2023-10-06 13:25:35', '2023-10-06 13:25:35'),
(57, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$qOFLv4fVGWeJKKQ2axraS.xh1yUo/ss0QvR5GlXS5Cm4Yk/hNLRcS', 'user', '2023-10-06 13:28:42', '2023-10-06 13:28:42'),
(58, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$bSgV99f4oBF4ovWHS7NnjO2NQsNcOAyEMxFzCZ.mZ6N4SluhcLpEK', 'user', '2023-10-06 13:29:56', '2023-10-06 13:29:56'),
(59, 'Hanifah', 'haniananda@gmail.com', '$2y$10$3F97svD4NQwbWW.maCpZHeQzMPvwieSENrgct31QRnxOvIAf3UEKe', 'user', '2023-10-06 13:45:06', '2023-10-06 13:45:06'),
(60, 'Hanifah', 'haniananda@gmail.com', '$2y$10$C0xD1MNjibjf6qPDNj41RuIQNXJGVg4Df/6PTVoQa08kba3Ehr0Aa', 'user', '2023-10-06 13:49:29', '2023-10-06 13:49:29'),
(61, 'Hanifah', 'haniananda@gmail.com', '$2y$10$YYJRzEA/lkAaUiYQ5BY5Zu7FAVA1MGUhfJyXVtutoauSstZ2up6vG', 'user', '2023-10-06 13:50:25', '2023-10-06 13:50:25'),
(62, 'Hanifah', 'haniananda@gmail.com', '$2y$10$1jZRploYurj7lcKl6ZdBeegLKGLc1js.3tmOo03/lNr8XVn6ef/iS', 'user', '2023-10-06 13:51:40', '2023-10-06 13:51:40'),
(63, 'Hanifah', 'Daviocta12@gmail.com', '$2y$10$wql3RmDR3K3sAdVBfixkcuUU8vEaZHYLm6BlwILM13aJlkleFia8i', 'user', '2023-10-06 14:01:27', '2023-10-06 14:01:27'),
(64, 'Hanifah', 'Daviocta12@gmail.com', '$2y$10$2r1fnghpIh6lfLUqHPD0DeqzbIf.D5KG7JFH0fT.pkZ/aVldjetdm', 'user', '2023-10-06 14:03:23', '2023-10-06 14:03:23'),
(65, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$jOsRZEskz9Ih2rnKh8bf2uuOktwgUxSLhGXu2JvYnhIOM0q0KSL4S', 'user', '2023-10-06 21:36:06', '2023-10-06 21:36:06'),
(66, 'Dika', 'dika@gmail.com', '$2y$10$iFUisrwS0RQGqaaIr/hY8uMnCX9FS.w//rA1gXfj2ufyn8ZeRwT0K', 'user', '2023-10-06 23:48:38', '2023-10-06 23:48:38'),
(67, 'LINDA', 'sarapangferdinanka@gmail.com', '$2y$10$6E5IFZOXSrC9mvhTNKheIe.TG5zsaBnhts8NFoWhiEM4iCMcGVri2', 'user', '2023-10-07 02:52:13', '2023-10-07 02:52:13'),
(68, 'Marselinda ', 'sarapangferdinanka@gmail.com', '$2y$10$xQ33f.nPVbN1hXg2dh54ceIBtKNpZJrfi8uL.xGT4sKKGAz8xb72e', 'user', '2023-10-07 02:53:23', '2023-10-07 02:53:23'),
(69, 'Ferdinan07', 'sarapangferdinanka@gmail.com', '$2y$10$d2Te7fuOB0cKqpH9ywEQp.tErJHxm3kvlC.1w8RktreBkH2VRrVae', 'user', '2023-10-07 02:54:22', '2023-10-07 02:54:22'),
(70, 'Rrb', 'rikhiranteuma700@gmail.com', '$2y$10$oVOKrEx9c7j0U2fEFDsL3eS.L.sW9nDPSsChBSrYFbuH9T0I5FbDu', 'user', '2023-10-07 02:55:51', '2023-10-07 02:55:51'),
(71, 'Tes', 'yansiratte36@gmail.com', '$2y$10$DwrbILIHBeXisYPLbgt4VOwzxf9uSYJ.KjFP9WvL80xx3gBnCHPze', 'user', '2023-10-07 03:13:32', '2023-10-07 03:13:32'),
(72, 'Myken', 'mykenzhatari@gmail.com', '$2y$10$OzwV5nYuzt1VXJJyJ7LHteMMNbb4VAA3ZwFqAX/2GelkBcvh2YyFG', 'user', '2023-10-07 04:26:10', '2023-10-07 04:26:10'),
(73, 'Myken', 'mykenzhatari@gmail.com', '$2y$10$cvLXH9/MKMy3WF8pU4FWveazZ0jzGVlq9fIHts133WrU1uXA6842O', 'user', '2023-10-07 04:27:13', '2023-10-07 04:27:13'),
(74, 'Myken ', 'mykenmokodompit@gmail.com', '$2y$10$Snd5y6.oucToMsQCGiSlteJ1QlXi7sEVGnm.w0jo5rg8T/R/RwFty', 'user', '2023-10-07 04:28:35', '2023-10-07 04:28:35'),
(75, 'myken', 'mykenmokodompit@gmail.com', '$2y$10$mOpdj0C1gId/mSGOsPUK8uJae8kJfQNKNS8RbuQ2fNvo.TveiDaji', 'user', '2023-10-07 04:30:10', '2023-10-07 04:30:10'),
(76, 'myken', 'mykenmokodompit@gmail.com', '$2y$10$LfU/QwJP.7aoz.YxNkU59eSFVsPqwabvEIOVfVW4deQwp0gnmjOh6', 'user', '2023-10-07 04:36:55', '2023-10-07 04:36:55'),
(77, 'admin', 'anggiat3775@gmail.com', '$2y$10$UxYl9fCf1mqlFYSQ8cpd3OHcfB8TnAheLy37BU3.UPPsaKdBO0hny', 'user', '2023-10-07 04:47:41', '2023-10-07 04:47:41'),
(78, 'Mely', 'melymely@gmail.com', '$2y$10$wub6u2tsLAF3BTM7fLBSl.2m2dNeIk6bVJLqtMEfz1lKOobQZhekm', 'user', '2023-10-07 06:59:18', '2023-10-07 06:59:18'),
(79, 'Myken ', 'mykenmokodompit34@gmail.com', '$2y$10$QdKbyefPRMZ4vKCYAiN2HeNLTobUiQ4qkAp4EiJdNgdN/BRYF2G8S', 'user', '2023-10-07 07:05:43', '2023-10-07 07:05:43'),
(80, 'Myken', 'mykenmokodompit34@gmail.com', '$2y$10$RvOOV/IpDwQW8/.gg3HWxeR0.4pLO90VHRJNdD1HV.dLlQ.PnN6rO', 'user', '2023-10-07 07:06:32', '2023-10-07 07:06:32'),
(81, 'Myken', 'mykenzhatari@gmail.com', '$2y$10$Ec.Ko43TbwdtWyuGHZfb0um8TjQEOgubJy3Dm810VmFF.CRIewgoO', 'user', '2023-10-07 07:10:39', '2023-10-07 07:10:39'),
(82, 'Myken Mokodompit', 'mykenzhatari@gmail.com', '$2y$10$uYikFnc8pitKdJH6wNhdyuIZfhMNdOlvjoe9v0/JcXdkzeOQ8SmEe', 'user', '2023-10-07 07:12:50', '2023-10-07 07:12:50'),
(83, 'Myken', 'mykenzhatari@gmail.com', '$2y$10$Z74mGcK.94x6R.mJACmAQuA6JoJPiaveubwBGb7nxq/d/HwxGN7ma', 'user', '2023-10-07 07:14:30', '2023-10-07 07:14:30'),
(84, 'Myken12', 'Mykenmykenzhatari@gmail.com', '$2y$10$8dJxQxlsrxXzqnqqLs48Rev0x/KoKeZHycgfNzj5S1t1RAX01ucWC', 'user', '2023-10-07 07:16:10', '2023-10-07 07:16:10'),
(85, 'Yohan', 'yohanbachtiar@gmail.com', '$2y$10$2gWDHrAPr81KeBp9hsRgIOCQttu6gRQzqdmnSp1CFfDzwwuMaHzx2', 'user', '2023-10-07 07:18:47', '2023-10-07 07:18:47'),
(86, 'Elfan', 'elfanulilalbab@gmail.com', '$2y$10$H.4jbene5M0KjfMKhGkkhusGtSr/cNUtY8sbEiVMXVWAypJ.1BsdC', 'user', '2023-10-07 07:47:17', '2023-10-07 07:47:17'),
(87, 'yewer', 'usahabersama@gmail.com', '$2y$10$R0UOUxX9dXFp6WFNabZsXODhmdR2Nl.EoLP3EvwjLRc2wyxvBlIym', 'user', '2023-10-07 10:39:00', '2023-10-07 10:39:00'),
(88, 'Hani', 'hani@gmail.com', '$2y$10$Jhv5xaXUa6GX4B7rqrjpi.OUASX..m2QIYJ7pSl1HKhCE9y2X0u8i', 'user', '2023-10-07 12:28:42', '2023-10-07 12:28:42'),
(89, 'Hani', 'hani@gmail.com', '$2y$10$sQeCWOE4qIzMJlzSe0cDx.hpXDiBhSdoLofEMFvowBpAy36MtDzsq', 'user', '2023-10-07 12:28:44', '2023-10-07 12:28:44'),
(90, 'Hani', 'hani@gmail.com', '$2y$10$HUMR1JKUyW2lq7mdlyWwE.veEuRds418z2PdypCwXUGQ4DRAY0llO', 'user', '2023-10-07 12:29:44', '2023-10-07 12:29:44'),
(91, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$bBnVqwJQJT3V9Dx6XngQoOPgOx06l4XqJRgFQzsJGUYE5DUrRM6hq', 'user', '2023-10-07 12:31:21', '2023-10-07 12:31:21'),
(92, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$85MWmheG.H8f/iCKuNyJYe8VoRgy6IuHKVdF6qwDbraxpBlxmM6yi', 'user', '2023-10-07 12:31:35', '2023-10-07 12:31:35'),
(93, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$jHr1SobCFpUi8zk50JHiy.BIigp.EEOWWVGjSiWcUnbhBpZohpjNm', 'user', '2023-10-07 12:33:12', '2023-10-07 12:33:12'),
(94, 'Hanifah', 'hanifahananda87@gmail.com', '$2y$10$y7R6e0GSmrQul7Dm94GuouqPqNcIdtNHDEGXAPX3/a1mlokMloRwK', 'user', '2023-10-07 12:33:23', '2023-10-07 12:33:23'),
(95, 'Hanifah', 'hanifah@gamail.com', '$2y$10$0JYRL48ux/Y3Fa5oRV8ndO4L.sGnpQNNm5ikm43hZhjzIb30Dq4lO', 'user', '2023-10-07 13:20:35', '2023-10-07 13:20:35'),
(96, 'Hani', 'hanifah01@gmail.com', '$2y$10$yMbyx3oVkoDsdx6YlF5AhOqMsNEeRXNAfYun3B4YqbOOi7urq.23y', 'user', '2023-10-07 13:23:30', '2023-10-07 13:23:30'),
(97, 'Hani', 'hanifah01@gmail.com', '$2y$10$X35I7QOnp46rg.YUz2O2gupiSJZ07PLwrjJcJSc4HsR538s3rBjVi', 'user', '2023-10-07 13:31:19', '2023-10-07 13:31:19'),
(98, 'Hani', 'hani01@gmail.com', '$2y$10$tPLQZIdHJe3B0DK/KPKZs.rR05B4LEUhu3SA9QARma65qSVvw1AL.', 'user', '2023-10-07 13:33:07', '2023-10-07 13:33:07'),
(99, 'Gyj', 'yudigunawanmkw@gmail.com', '$2y$10$3Kl6K1VG/Mo5vYPy1eyKaOLpXRnCIhuHEBGK5BZ9le/buzbGtwv42', 'user', '2023-10-07 14:58:42', '2023-10-07 14:58:42'),
(100, 'a', 'a@gmail.com', '$2y$10$NwTCJG/xsuXWfas62Q4kb.I2yGucpjoTuV/T8KQ1CapPj5U1DzJCi', 'user', '2023-10-08 01:20:44', '2023-10-08 01:20:44'),
(101, 'Admin', 'marirasashop23@gmail.com', '$2y$10$lvPIts0dS07Gy84nw0GkSOgi8RzzE3u1kvu.16rjWrRTaajLcdnzS', 'user', '2023-10-08 01:36:36', '2023-10-08 01:36:36'),
(102, 'Admin', 'marirasashop@gmail.com', '$2y$10$VGE4LnzOIs50M6tcZKqKY.SjWHAiAH7MCfhIoL2e5/0Ja8IIbxOJ2', 'user', '2023-10-08 01:37:37', '2023-10-08 01:37:37'),
(103, 'Admin', 'yansiratte36@gmail.com', '$2y$10$wCaF.vJQEDMIl0pF278wAOsUgna5Xe65HUhH5UZDhoddT/IXGElZe', 'user', '2023-10-08 01:47:00', '2023-10-08 01:47:00'),
(104, 'admin', 'admin@gmail.com', '$2y$10$Krcnq7Ijm05tw.WBkAoPhuRYMB/3JFQf/BolLjKdhIV4gKGpd/jeq', 'user', '2023-10-08 01:50:11', '2023-10-08 01:50:11'),
(105, 'Marirasa', 'yansiratte36@gmail.com', '$2y$10$TI6kOSGXkVn1LkfBH3FZUOxB5USm.lpdlkfijfVByFqZOhp9RYi4S', 'user', '2023-10-08 02:43:30', '2023-10-08 02:43:30'),
(106, 'Marirasa', 'yansiratte36@gmail.com', '$2y$10$G.7yBw3SThNmVVFTP6EsYuHQr.7//wZz2C9HjDb2QDzH5Yv5SM5gC', 'user', '2023-10-08 02:48:52', '2023-10-08 02:48:52'),
(107, 'Orsa', 'fapszoldick02@gmail.com', '$2y$10$.TlAOCwrjznCSrK1jhaQqeqP5CpCbxuEmZH.vt1UwqaPhMAM1PQru', 'user', '2023-10-08 08:13:22', '2023-10-08 08:13:22'),
(108, 'Orsa', 'fapszoldick02@gmail.com', '$2y$10$RxVzynfM3GeIgKwyAaxa4.dPKN7ffhjdV2090SmEPiwwI6nk8ll5W', 'user', '2023-10-08 09:01:08', '2023-10-08 09:01:08'),
(109, 'Marlina Datu Binga', 'marlinadatubinga21@gmail.com', '$2y$10$kdvcOpP6RHWNlJyfvJGLueOrwrTrW0pIV8VXYNS7gpBh.VmCwJSv6', 'user', '2023-10-08 13:41:38', '2023-10-08 13:41:38'),
(110, 'Helna', 'helnabodang@gmail.com', '$2y$10$l/7o1aRoOpD9P1gru/S3Fu2ODDsOV9lp0JWxGDQrcQrRaUqCUGwWi', 'user', '2023-10-08 23:21:43', '2023-10-08 23:21:43'),
(111, 'Deeyan', 'rbima2002@gmail.com', '$2y$10$mWYn9eP/wWCLfPApCilkgOJkL1PMMdDillQSMtGFBWYzWcygotoTK', 'user', '2023-10-09 03:51:36', '2023-10-09 03:51:36'),
(112, 'csuhendra', 'c.suhendra@unipa.ac.id', '$2y$10$q7SDMEe5dYBn2sxgrh5EIeagDQU4NzvptHP7jCssU5Iky4re1Txsm', 'user', '2023-10-10 03:53:18', '2023-10-10 03:53:18'),
(113, 'Tresia Novita', 'tresianovytha@gmail.com', '$2y$10$ccG8dj.7r07x.FLAxlZG7epKQZKEiCb/bOpWcKbfXS1dOa4VzLYF2', 'user', '2023-10-10 08:13:24', '2023-10-10 08:13:24'),
(114, 'sael123', 'mizhaelparubak4@gmail.com', '$2y$10$TQrg2sYAYOrm9aI2dRQ4WOPkeWlbhxmnHcgG3NWXIaT2sPwhMaSXe', 'user', '2023-10-10 10:20:31', '2023-10-10 10:20:31'),
(115, 'Affan ', 'hafidzfirmansyah64@gmail.com', '$2y$10$1oPAfWCGSlEm7RtkqcrSsuyRFuwD/tqCMTGsoEk5v.7MkJh0VpU5G', 'user', '2023-10-10 10:38:26', '2023-10-10 10:38:26'),
(116, 'Arkan', 'arkandzulfiqar1@gmail.com', '$2y$10$8QWLexeI18c0v1IX7mhMou5EkCcm5muID9vz/EvqHtkjpXjbl5/Ta', 'user', '2023-10-10 12:30:33', '2023-10-10 12:30:33'),
(117, 'Janwar', 'janwarfitrianfaiz2019030@gmail.com', '$2y$10$ry9E5oExp/UXQErPGaKmA.1LA4IeLv3vMDPabivrFo1vDEdupDwqa', 'user', '2023-10-10 22:38:02', '2023-10-10 22:38:02'),
(118, 'Jati', 'yansiratte36@gmail.com', '$2y$10$WAXHDGpqFofRnM1Os6PqRONFJS9dQG.Xl2P7mVBbH0NKhMck.hrla', 'user', '2023-10-18 11:00:55', '2023-10-18 11:00:55'),
(119, 'hafizh', 'hafizhjr21@gmail.com', '$2y$10$N7037rGwCPzHNrzsQkUXLum8t5pO5p8P1P4PTjntcJJphXbbc0ejy', 'user', '2023-11-08 08:56:17', '2023-11-08 08:56:17'),
(125, 'Yansi', 'yansiratte36@gmail.com', '$2y$10$sfNTay1zHetdc1yYQf1xheZu3RRhyXlMMVX1pim7gLyUmoKdqWui.', 'user', '2023-11-08 11:40:40', '2023-11-08 11:40:40'),
(126, 'coco', 'coco@gmail.com', '$2y$10$0k4Qwyd299kdjhBXKdd0veAPqWwxOrwstZT2kQ.HGzRtT/9lhOobG', 'user', '2023-11-08 22:42:09', '2023-11-08 22:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekapan`
--
ALTER TABLE `rekapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `rekapan`
--
ALTER TABLE `rekapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
