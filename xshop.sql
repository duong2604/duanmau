-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 08:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh` int(10) NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(8, 'test', 3, 'admin', '2023-06-19'),
(9, 'test 1', 3, 'admin', '2023-06-19'),
(10, 'test 2', 0, 'admin', '2023-06-19'),
(11, 'test 2', 3, 'admin', '2023-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` double(10,2) NOT NULL,
  `giam_gia` double(10,2) NOT NULL DEFAULT 0.00,
  `hinh` varchar(50) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `dac_biet` bit(1) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(3, 'Balo Travel', 1200.00, 100.00, '1687149501-1036.jpg', '2023-06-09', 'Thiết kế thời trang', b'0', 33, 9),
(4, 'Balo Bamboo', 400.00, 30.00, '1687150289-1037.jpg', '2023-06-06', 'Thiết kế tiện lợi', b'0', 9, 9),
(5, 'iphone 12 pro  max', 2500.00, 200.00, '1687156723-1012.jpg', '2023-06-07', 'Thiết kế sang trọng', b'0', 2, 11),
(6, 'Asus', 3000.00, 200.00, '1687156760-1008.jpg', '2023-06-08', 'Cấu hình mạnh mẽ', b'0', 1, 9),
(7, 'Sony Ultra Pro Max', 4000.00, 200.00, '1687156896-1027.jpg', '2023-06-06', 'Camera siêu nét', b'1', 0, 13),
(8, 'Panasonic Zoom Pro', 2500.00, 50.00, '1687157039-1019.jpg', '2023-06-08', 'Camera siêu nét', b'1', 0, 13),
(9, 'LG Zoom 12', 3000.00, 250.00, '1687157146-1027.jpg', '2023-06-07', 'Camera siêu nét', b'0', 1, 13),
(10, 'Mũ Gab&banana', 400.00, 50.00, '1687157190-1007.jpg', '2023-06-07', 'Kiểu dáng cá tính', b'0', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `kich_hoat` bit(1) NOT NULL DEFAULT b'0',
  `hinh` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('admin', '12345', 'admin', b'1', 'son.jpg', 'admin@gmail.com', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL COMMENT 'mã loại hàng',
  `ten_loai` varchar(255) NOT NULL COMMENT 'tên loại hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(9, 'Balo'),
(10, 'Máy Tính'),
(11, 'Điện Thoại'),
(12, 'Phụ Kiện'),
(13, 'Camera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Indexes for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'mã loại hàng', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
