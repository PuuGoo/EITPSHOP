-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 26, 2024 lúc 02:11 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eitpshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `SanPham_id` int(11) NOT NULL,
  `NguoiDung_id` int(11) NOT NULL,
  `NoiDung` varchar(255) NOT NULL,
  `TinhTrang` varchar(255) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `SanPham_id`, `NguoiDung_id`, `NoiDung`, `TinhTrang`, `Ngay`) VALUES
(51, 8, 4, 'This is product so good.', 'public', '2023-12-02'),
(52, 4, 4, 'Product is so expensive!\r\n', 'public', '2023-12-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `BlogTitle` varchar(255) NOT NULL,
  `BlogContent` text NOT NULL,
  `BlogImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `BlogTitle`, `BlogContent`, `BlogImage`) VALUES
(1, 'I am an EITPSHOP delivery driver in Baltimore. My favorite features on our vans from Rivian are the air-conditioned seats and the screen built into the dash.', 'Lorem ipsum dolor sit amet consectetur. Venenatis sit dignissim vel lacus aliquet massa quam nisi tincidunt. Ante eu ut arcu ultrices vitae libero interdum. Ac tempus elementum suspendisse amet massa nec nunc ullamcorper venenatis. Sed id tortor in nibh tortor commodo. Ultricies et vitae massa ut et mi. Quam amet nulla lobortis rhoncus ipsum pharetra elementum magna vitae. Eget orci feugiat lectus aliquet.\r\n\r\nAmet pretium dui nunc laoreet sed lorem. Pretium volutpat mauris sit curabitur pellentesque orci. Integer egestas dictum quis eget in libero eget. Elementum magna amet quam sem rhoncus lacus. Augue dignissim enim elementum egestas at sed dui. Consequat nibh ut urna morbi a. Convallis nulla a pulvinar augue cursus neque tortor. Accumsan erat ultrices magna mattis egestas vel. Consequat at arcu risus a enim at orci velit. Nam consequat mauris malesuada phasellus vel consequat varius vitae suspendisse. Adipiscing adipiscing lacus nulla tortor ultrices sed eget. Aliquet ornare adipiscing lacus non elit vel. Tortor sed adipiscing imperdiet tortor quam dolor augue molestie. Interdum turpis in tortor velit urna augue.', 'site-blog-01.png'),
(2, 'I am an EITPSHOP delivery driver in Baltimore. My favorite features on our vans from Rivian are the air-conditioned seats and the screen built into the dash.', 'Lorem ipsum dolor sit amet consectetur. Venenatis sit dignissim vel lacus aliquet massa quam nisi tincidunt. Ante eu ut arcu ultrices vitae libero interdum. Ac tempus elementum suspendisse amet massa nec nunc ullamcorper venenatis. Sed id tortor in nibh tortor commodo. Ultricies et vitae massa ut et mi. Quam amet nulla lobortis rhoncus ipsum pharetra elementum magna vitae. Eget orci feugiat lectus aliquet.\r\n\r\nAmet pretium dui nunc laoreet sed lorem. Pretium volutpat mauris sit curabitur pellentesque orci. Integer egestas dictum quis eget in libero eget. Elementum magna amet quam sem rhoncus lacus. Augue dignissim enim elementum egestas at sed dui. Consequat nibh ut urna morbi a. Convallis nulla a pulvinar augue cursus neque tortor. Accumsan erat ultrices magna mattis egestas vel. Consequat at arcu risus a enim at orci velit. Nam consequat mauris malesuada phasellus vel consequat varius vitae suspendisse. Adipiscing adipiscing lacus nulla tortor ultrices sed eget. Aliquet ornare adipiscing lacus non elit vel. Tortor sed adipiscing imperdiet tortor quam dolor augue molestie. Interdum turpis in tortor velit urna augue.', 'site-blog-02.png'),
(3, 'Kindle buying guide: Find out which e-reader is right for you. Test Successfully!', 'Jerome Stanline is a delivery driver for Kangaroo Direct, an EITPSHOP Delivery Service Partner in the Baltimore, Maryland area. Follow her on a tour of her favorite features in the new electric delivery van.', 'site-blog-07.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(10) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `BrandDescription` varchar(254) NOT NULL,
  `BrandImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `BrandName`, `BrandDescription`, `BrandImage`) VALUES
(1, 'SamSung', 'Sample Test', 'acc.jpg'),
(5, 'Test', 'Test', 'site-blog-01.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `TenDanhMuc` varchar(50) NOT NULL,
  `HinhAnh` varchar(50) NOT NULL,
  `MaDanhMuc` varchar(50) NOT NULL,
  `MoTa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `TenDanhMuc`, `HinhAnh`, `MaDanhMuc`, `MoTa`) VALUES
(1, 'Computer & Laptop', 'laptop.jpg', '', ''),
(2, 'Cameras & Videos', 'camera.jpg', '', ''),
(3, 'Smart Television', 'tv.jpg', '', ''),
(4, 'Smartwatches', 'smartwatches.jpg', '', ''),
(5, 'Music & Gaming', 'gaming.jpg', '', ''),
(6, 'Mobiles & Tablets', 'smartphone.jpg', '', ''),
(7, 'Headphones', 'headphone.jpg', '', ''),
(8, 'Accessories', 'acc.jpg', '', ''),
(9, 'Portable Speakers', 'speaker.jpg', '', ''),
(10, 'Home Appliances', 'homeapp.jpg', '', ''),
(49, 'Test Successfully!', 'banner03.jpg', '13', ''),
(56, 'Test Successfully!', 'site-blog-07.png', '1303', 'Test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `SanPham_id` int(11) NOT NULL,
  `NguoiDung_id` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `PhienBan` varchar(255) NOT NULL,
  `MauSac` varchar(255) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `SanPham_id`, `NguoiDung_id`, `SoLuong`, `PhienBan`, `MauSac`, `Ngay`) VALUES
(7, 4, 4, 1, 'S', 'Red', '2023-12-02'),
(8, 4, 1, 2, 'S', 'Red', '2023-12-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `VaiTro` tinyint(1) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `HinhAnh` text NOT NULL,
  `MobileNumber` int(11) NOT NULL,
  `NgayTao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `HoTen`, `FirstName`, `LastName`, `Email`, `UserName`, `MatKhau`, `VaiTro`, `Status`, `HinhAnh`, `MobileNumber`, `NgayTao`) VALUES
(1, 'puu', 'PuuGoo', 'Goo', 'puugoo002@gmail.com', 'puugoo002@gmail.com', '123456', 1, 1, 'dog-img.jpg', 984004258, '2023-11-27'),
(4, 'goo', '', '', 'puugoo003@gmail.com', '', '123456', 0, 0, 'dog-img-01.jpg', 984004258, '2023-11-27'),
(14, 'Test', '', '', 'test@gmail.com', '', '123456', 1, 0, 'avatar.jpg', 123456789, '2024-02-21'),
(22, '', '', '', 'test@gmail.com', 'test', '123456', 1, 1, '', 123456789, '2024-02-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `TenSanPham` varchar(50) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `HinhAnh` varchar(50) NOT NULL,
  `Gia` int(10) NOT NULL,
  `LoaiGiamGia` varchar(50) NOT NULL,
  `SubCategory` int(11) NOT NULL,
  `Brand` int(11) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `SKU` int(11) NOT NULL,
  `MinQty` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Tax` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `NoiBat` tinyint(1) NOT NULL,
  `NgayThem` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `MaDanhMuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSanPham`, `MoTa`, `HinhAnh`, `Gia`, `LoaiGiamGia`, `SubCategory`, `Brand`, `Unit`, `SKU`, `MinQty`, `Qty`, `Tax`, `Status`, `NoiBat`, `NgayThem`, `MaDanhMuc`) VALUES
(2, 'Apple iPhone XS Max', '64GB', 'rs1.png', 750, '590', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 06:30:09', 6),
(3, 'Mobile 101', '(2GB | 32GB)', 'rs2.png', 7500, '6499', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 06:30:09', 6),
(4, 'Mobile 101', '(2GB | 32GB)', 'rs3.png', 7500, '6499', 0, 0, '', 0, 0, 0, 0, '', 1, '2023-11-27 06:30:09', 6),
(5, 'Mobile 101', '(2GB | 32GB)', 'rs4.png', 7500, '6499', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 06:30:09', 6),
(6, 'Bluetooth Headphones with Smart LED Display Chargi', '', 'hs1.png', 30, '21', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 06:30:09', 7),
(7, 'Wireless TV Headphones', '', 'hs2.png', 100, '67', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 06:30:09', 3),
(8, 'Digital Earphone Basic', '', 'hs3.png', 259, '199', 0, 0, '', 0, 0, 0, 0, '', 1, '2023-11-27 06:30:09', 7),
(9, 'Digital Earphone Basic', '', 'hs4.png', 259, '199', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-12-01 06:21:23', 2),
(10, 'World\'s Thinnest LED TV', '(55’’, 43’’ , 32’’ Inches)', 'st1.png', 550, '430', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:45:28', 3),
(11, 'World\'s Thinnest LED TV', '(55’’, 43’’ , 32’’ Inches)', 'st2.png', 550, '430', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:46:49', 3),
(12, 'World\'s Thinnest LED TV', '(55’’, 43’’ , 32’’ Inches)', 'st3.png', 550, '430', 0, 0, '', 0, 0, 0, 0, '', 1, '2023-11-21 04:45:28', 3),
(13, 'World\'s Thinnest LED TV', '(55’’, 43’’ , 32’’ Inches)', 'st4.png', 550, '430', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:46:49', 3),
(14, 'World\'s Thinnest LED TV', '(55’’, 43’’ , 32’’ Inches)', 'st5.png', 550, '430', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:46:49', 3),
(15, 'World\'s Thinnest LED TV', '(55’’, 43’’ , 32’’ Inches)', 'st6.png', 550, '430', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:46:49', 3),
(16, 'New Smart Watch', '(Camera & SIM Card Support)', 'swatch1.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:48:46', 4),
(17, 'New Smart Watch', '(Camera & SIM Card Support)', 'swatch2.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:48:46', 4),
(18, 'New Smart Watch', '(Camera & SIM Card Support)', 'swatch3.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 1, '2023-11-21 04:50:38', 4),
(19, 'New Smart Watch', '(Camera & SIM Card Support)', 'swatch4.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:48:46', 4),
(20, 'MacBook Air 2021', '(55’’, 43’’ , 32’’ Inches)', 'lp1.png', 1270, '1170', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:57:51', 1),
(21, 'MacBook Air 2021', '(55’’, 43’’ , 32’’ Inches)', 'lp2.png', 1270, '1170', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:57:51', 1),
(22, 'MacBook Air 2021', '(55’’, 43’’ , 32’’ Inches)', 'lp3.png', 1270, '1170', 0, 0, '', 0, 0, 0, 0, '', 1, '2023-11-27 07:57:51', 1),
(23, 'MacBook Air 2021', '(55’’, 43’’ , 32’’ Inches)', 'lp4.png', 1270, '1170', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:57:51', 1),
(24, 'MacBook Air 2021', '(55’’, 43’’ , 32’’ Inches)', 'lp5.png', 1270, '1170', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:57:51', 1),
(25, 'MacBook Air 2021', '(55’’, 43’’ , 32’’ Inches)', 'lp6.png', 1270, '1170', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:57:51', 1),
(27, 'MacBook Air 2021', '(55’’, 43’’ , 32’’ Inches)', 'lp8.png', 1270, '1170', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-21 04:50:10', 5),
(28, 'MI-MKT MI6 White', '(20000 - mAh)', 'bk1.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:59:34', 8),
(30, 'MI-MKT MI6 White', '(20000 - mAh)', 'bk2.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:59:34', 8),
(31, 'MI-MKT MI6 White', '(20000 - mAh)', 'bk3.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 1, '2023-11-27 07:59:34', 8),
(32, 'MI-MKT MI6 White', '(20000 - mAh)', 'bk4.png', 799, '699', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-11-27 07:59:34', 8),
(33, 'Digital Shoot Camera', '', 'cam_s1.png', 259, '199', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-12-01 06:21:23', 2),
(34, 'Digital Shoot Camera', '', 'cam_s2.png', 259, '199', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-12-01 06:21:23', 2),
(35, 'Digital Shoot Camera', '', 'cam_s3.png', 259, '199', 0, 0, '', 0, 0, 0, 0, '', 1, '2023-12-01 06:21:23', 2),
(36, 'Digital Shoot Camera', '', 'cam_s4.png', 259, '199', 0, 0, '', 0, 0, 0, 0, '', 0, '2023-12-01 06:21:45', 2),
(66, 'Test Successfully!', 'Test', 'Airpod Pro 2022.png', 100, '10', 0, 0, 'PCS', 130303, 10, 100, 10, 'Closed', 0, '2024-02-21 13:24:08', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(10) NOT NULL,
  `MaDanhMuc` int(10) NOT NULL,
  `TenDanhMuc` varchar(50) NOT NULL,
  `SubCategoryCode` int(10) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `subcategory`
--

INSERT INTO `subcategory` (`id`, `MaDanhMuc`, `TenDanhMuc`, `SubCategoryCode`, `Description`) VALUES
(1, 1, 'Game', 1, 'Sample Test'),
(2, 9, 'Test Successfully!', 2, 'Test Successfully!');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
