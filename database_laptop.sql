-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 12:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_item`
--

CREATE TABLE `tabel_item` (
  `id` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT 'Rp 0.000.000',
  `desc` text NOT NULL,
  `img` text NOT NULL DEFAULT 'localhost/image/default.jpg',
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_item`
--

INSERT INTO `tabel_item` (`id`, `nama`, `price`, `desc`, `img`, `link`) VALUES
(1, 'ASUS BR1000FKA-BP0410W_Intel Celeron N4500', 'Rp4.386.000', 'Laptop ini menggunakan cpu Intel Celeron N4500 dengan 2 core dan 2 thread dengan boost clock mencapai 2.8 GHZ. Menggunakan GPU bawaan dari cpu yaitu Intel HD Graphic. Menggunakan ram 4GB soldered. Menggunakan penyimpanan eMMC128GB. Dilengkapi sitem operasi Windows 10 Home 64bit.', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/7/4/5144bf76-1efa-43e9-9a07-3b58c7641f51.jpg', 'https://www.tokopedia.com/mpcsamarinda/asus-br1000fka-bp0410w-intel-celeron-n4500-dark-grey?extParam=ivf%3Dfalse%26src%3Dsearch'),
(2, 'ASUS E410KAO-VIPS (N6000/256/4/O/W11)', 'Rp5.099.000', 'Laptop ini menggunakan cpu Intel Pentium N6000 dengan 4 core dan 4 thread dengan boost clock mencapai 3.3 GHZ. Menggunakan GPU bawaan dari cpu yaitu Intel HD Graphic. Menggunakan ram 4GB solder dan satu slot kosong yang bisa ditambah hingga 12GB. Menggunakan penyimpanan SSD M.2 NVME 256GB. Dilengkapi sitem operasi Windows 11 Home 64bit + Office Home and Student 2019.', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/11/3/b0a726e0-db81-4937-850b-a0f52f53e8bf.jpg', 'https://www.tokopedia.com/suryaphonesmd/asus-e410kao-vips-n6000-256-4-o-w11?extParam=ivf%3Dfalse%26src%3Dsearch'),
(3, 'Laptop Asus VIVOBOOK FLIP 14 TP401MA-HD421_N4020_4GB_SSD256GB', 'Rp6.307.900', 'Laptop ini menggunakan cpu Intel Celeron N4020 dengan 2 core dan 2 thread dengan boost clock mencapai 2.8 GHZ. Menggunakan GPU bawaan dari cpu yaitu Intel HD Graphic. Menggunakan ram 4GB solder dan satu slot kosong yang bisa ditambah hingga 16GB. Menggunakan penyimpanan SSD M.2 NVME 256GB. Dilengkapi sitem operasi Windows 11 Home 64bit + Office Home and Student 2019.', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/6/28/3ec119f7-8dee-453c-abbc-e5befc55b7a1.jpg', 'https://www.tokopedia.com/aringoid/laptop-asus-vivobook-flip-14-tp401ma-hd421-n4020-4gb-ssd-256gb?extParam=ivf%3Dfalse%26src%3Dsearch'),
(4, 'LENOVO IP3 14ABA7_R5-5625U_SSD512_8_Win11', 'Rp9.699.0000', 'Laptop ini menggunakan cpu RYZEN 5-5625U dengan 6 core dan 12 thread dengan boost clock mencapai 4.3 GHZ. Menggunakan GPU bawaan dari cpu yaitu Radeon Graphics. Menggunakan ram 8GB dengan 4gb solder dan 4gb pada slot ram yang bisa ditambah hingga 20GB. Menggunakan penyimpanan SSD M.2 NVME 512GB dengan slot 2.5\" HDD kosong. Dilengkapi sitem operasi Windows 11 Home 64bit + Office Home and Student 2019.', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/8/19/44dbb765-1e84-4505-bb79-fb8b7152ab29.jpg', 'https://www.tokopedia.com/suryaphonesmd/lenovo-ip3-14aba7-r5-5625u-512-8-o-w11?extParam=ivf%3Dfalse%26src%3Dsearch'),
(5, 'Lenovo V14 G2 ALC_RYZEN 5-5500U_8GB_SSD256GB_Win10-OHS', 'Rp9.300.000', 'Laptop ini menggunakan cpu RYZEN 5-5500u dengan 6 core dan 12 thread dengan boost clock mencapai 4.0 GHZ. Menggunakan GPU bawaan dari cpu yaitu Radeon Graphics. Menggunakan ram 8GB solder dan satu slot kosong yang bisa ditambah hingga 16GB. Menggunakan penyimpanan SSD M.2 NVME 256GB dengan slot 2.5\" HDD kosong. Dilengkapi sitem operasi Windows 10 Home 64bit + Office Home and Student 2019.', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/1/18/40a544fc-23db-4d37-b8e6-9be0ef44a463.jpg', 'https://www.tokopedia.com/mpcsamarinda/lenovo-v14-g2-alc-ryzen-5-5500u-8gb-256gb-win10-ohs?extParam=ivf%3Dfalse%26src%3Dsearch'),
(6, 'Acer NITRO 5 AN515-57-52BQ_I5 11400H_8GB_SSD512GB_RTX3050', 'Rp13.221.900', 'Laptop ini menggunakan cpu I5 11400H dengan 6 core dan 12 thread dengan boost clock mencapai 4.5 GHZ. Menggunakan GPU bawaan dari cpu yaitu Intel HD Graphic dan dilengkapi Nvidia RTX 3050. Menggunakan ram 8GB dan satu slot kosong yang bisa ditambah. Menggunakan penyimpanan SSD M.2 NVME 512GB dengan slot 2.5\" HDD kosong. Dilengkapi sitem operasi Windows 11 Home 64bit + Office Home and Student 2019.', 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/1/18/8e2f41a3-0660-426b-b391-e81491860810.jpg', 'https://www.tokopedia.com/aringoid/laptop-acer-nitro-5-an515-57-52bq-i5-11400h-8gb-ssd-512gb-rtx3050?extParam=ivf%3Dfalse%26src%3Dsearch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_item`
--
ALTER TABLE `tabel_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_item`
--
ALTER TABLE `tabel_item`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
