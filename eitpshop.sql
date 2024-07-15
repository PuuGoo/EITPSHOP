-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th2 27, 2024 lúc 08:58 AM
-- Phiên bản máy phục vụ: 10.6.17-MariaDB
-- Phiên bản PHP: 8.1.27

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
(5, 'I am an EITPSHOP delivery driver in Baltimore. My favorite features on our vans from Rivian are the air-conditioned seats and the screen built into the dash.', 'Lorem ipsum dolor sit amet consectetur. Venenatis sit dignissim vel lacus aliquet massa quam nisi tincidunt. Ante eu ut arcu ultrices vitae libero interdum. Ac tempus elementum suspendisse amet massa nec nunc ullamcorper venenatis. Sed id tortor in nibh tortor commodo. Ultricies et vitae massa ut et mi. Quam amet nulla lobortis rhoncus ipsum pharetra elementum magna vitae. Eget orci feugiat lectus aliquet.\r\n\r\nAmet pretium dui nunc laoreet sed lorem. Pretium volutpat mauris sit curabitur pellentesque orci. Integer egestas dictum quis eget in libero eget. Elementum magna amet quam sem rhoncus lacus. Augue dignissim enim elementum egestas at sed dui. Consequat nibh ut urna morbi a. Convallis nulla a pulvinar augue cursus neque tortor. Accumsan erat ultrices magna mattis egestas vel. Consequat at arcu risus a enim at orci velit. Nam consequat mauris malesuada phasellus vel consequat varius vitae suspendisse. Adipiscing adipiscing lacus nulla tortor ultrices sed eget. Aliquet ornare adipiscing lacus non elit vel. Tortor sed adipiscing imperdiet tortor quam dolor augue molestie. Interdum turpis in tortor velit urna augue.', 'site-blog-01.png'),
(6, 'I am an EITPSHOP delivery driver in Baltimore. My favorite features on our vans from Rivian are the air-conditioned seats and the screen built into the dash.', 'Lorem ipsum dolor sit amet consectetur. Venenatis sit dignissim vel lacus aliquet massa quam nisi tincidunt. Ante eu ut arcu ultrices vitae libero interdum. Ac tempus elementum suspendisse amet massa nec nunc ullamcorper venenatis. Sed id tortor in nibh tortor commodo. Ultricies et vitae massa ut et mi. Quam amet nulla lobortis rhoncus ipsum pharetra elementum magna vitae. Eget orci feugiat lectus aliquet.\r\n\r\nAmet pretium dui nunc laoreet sed lorem. Pretium volutpat mauris sit curabitur pellentesque orci. Integer egestas dictum quis eget in libero eget. Elementum magna amet quam sem rhoncus lacus. Augue dignissim enim elementum egestas at sed dui. Consequat nibh ut urna morbi a. Convallis nulla a pulvinar augue cursus neque tortor. Accumsan erat ultrices magna mattis egestas vel. Consequat at arcu risus a enim at orci velit. Nam consequat mauris malesuada phasellus vel consequat varius vitae suspendisse. Adipiscing adipiscing lacus nulla tortor ultrices sed eget. Aliquet ornare adipiscing lacus non elit vel. Tortor sed adipiscing imperdiet tortor quam dolor augue molestie. Interdum turpis in tortor velit urna augue.', 'site-blog-02.png'),
(7, 'Kindle buying guide: Find out which e-reader is right for you. Test Successfully!', 'Jerome Stanline is a delivery driver for Kangaroo Direct, an EITPSHOP Delivery Service Partner in the Baltimore, Maryland area. Follow her on a tour of her favorite features in the new electric delivery van.', 'site-blog-07.png');

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
(7, 'Logitech Indonesia', '', 'Logitech Indonesia.png'),
(8, 'Uniqlo', '', 'Uniqlo.png');

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
(63, 'Computer & Laptop', 'laptop.jpg', '', ''),
(64, 'Cameras & Videos', 'camera.jpg', '', ''),
(65, 'Smart Television', 'tv.jpg', '', ''),
(66, 'Smartwatches', 'smartwatches.jpg', '', ''),
(67, 'Music & Gaming', 'gaming.jpg', '', ''),
(68, 'Mobiles & Tablets', 'smartphone.jpg', '', ''),
(69, 'Headphones', 'headphone.jpg', '', ''),
(70, 'Accessories', 'acc.jpg', '', ''),
(71, 'Portable Speakers', 'speaker.jpg', '', ''),
(72, 'Home Appliances', 'homeapp.jpg', '', ''),
(73, 'Test Successfully', 'banner03.jpg', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `SanPham_id` int(11) NOT NULL,
  `NguoiDung_id` int(11) NOT NULL,
  `Brand_id` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `PhienBan` varchar(255) NOT NULL,
  `MauSac` varchar(255) NOT NULL,
  `Tong` float NOT NULL,
  `StatusBuy` varchar(255) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(23, '', '', '', 'puugoo002@gmail.com', 'puugoo002@gmail.com', '123456', 1, 1, 'dog-img.jpg', 984004258, '0000-00-00');

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
(74, 'MacBook Air 2021', '', 'lp1.png', 0, '', 5, 8, 'PCS', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 73),
(75, 'MacBook Air 2021', '', 'lp2.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:32:18', 72),
(76, 'MacBook Air 2021', '', 'lp3.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 71),
(77, 'MacBook Air 2021', '', 'lp4.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:32:55', 69),
(78, 'MacBook Air 2021', '', 'lp5.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 67),
(79, 'MacBook Air 2021', '', 'lp6.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:33:39', 63),
(80, 'Digital Earphone Basic', '', 'hs4.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 64),
(81, 'Digital Shoot Camera', '', 'cam_s1.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:34:57', 64),
(82, 'Digital Shoot Camera', '', 'cam_s2.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 64),
(83, 'Digital Shoot Camera', '', 'cam_s3.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:35:43', 64),
(84, 'Digital Shoot Camera', '', 'cam_s4.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 64),
(85, 'Wireless TV Headphones', '', 'hs2.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:36:22', 65),
(86, 'Worlds Thinnest LED TV', '', 'st1.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 66),
(87, 'Worlds Thinnest LED TV', '', 'st2.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:38:44', 64),
(88, 'Digital Shoot Camera', '', 'st3.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 1, '2024-02-27 01:40:24', 64),
(89, 'Digital Shoot Camera', '', 'st4.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:39:08', 64),
(90, 'Wireless TV Headphones', '', 'st5.png', 0, '', 5, 7, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:39:19', 65),
(91, 'Worlds Thinnest LED TV', '', 'st6.png', 0, '', 5, 8, '', 0, 0, 0, 0, 'Closed', 0, '2024-02-27 01:39:28', 66);

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
(5, 70, 'Game', 0, ''),
(6, 64, 'Test Successfully!', 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SanPham_id` (`SanPham_id`,`NguoiDung_id`),
  ADD KEY `NguoiDung_id` (`NguoiDung_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `SanPham_id` (`SanPham_id`,`NguoiDung_id`,`Brand_id`),
  ADD KEY `NguoiDung_id` (`NguoiDung_id`),
  ADD KEY `Brand_id` (`Brand_id`);

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
  ADD KEY `MaDanhMuc` (`MaDanhMuc`),
  ADD KEY `SubCategory` (`SubCategory`,`Brand`),
  ADD KEY `Brand` (`Brand`);

--
-- Chỉ mục cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MaDanhMuc` (`MaDanhMuc`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`NguoiDung_id`) REFERENCES `nguoidung` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`SanPham_id`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`SanPham_id`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`NguoiDung_id`) REFERENCES `nguoidung` (`id`),
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`Brand_id`) REFERENCES `brand` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`Brand`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`SubCategory`) REFERENCES `subcategory` (`id`);

--
-- Các ràng buộc cho bảng `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
