-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 04, 2020 lúc 03:45 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanquanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsp`
--

CREATE TABLE `chitietsp` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(100) NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loaisp` int(100) NOT NULL,
  `thutusp` int(100) NOT NULL,
  `noibat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsp`
--

INSERT INTO `chitietsp` (`id_sp`, `tensp`, `hinhanh`, `gia`, `mota`, `id_loaisp`, `thutusp`, `noibat`) VALUES
(6, 'Get Lit Shirt', 'Get Lit Shirt.jpg', 1000, '<p>&Aacute;o đẹp chất lượng cao</p>\r\n<p>\"</p>\r\n<p>\"</p>\r\n<p>\"</p>\r\n<p>\"</p>\r\n<p>\"</p>\r\n<p>\"</p>', 8, 1, 'Yes'),
(7, 'LD1 T-Shirt', 'LD1 T-Shirt.jpg', 1000, '<p>&Aacute;o ph&ocirc;ng vừa chất vừa đẹp.</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 8, 1, 'No'),
(8, 'LD2 T-Shirt', 'LD2 T-Shirt.jpg', 1000, '<p>&Aacute;o ph&ocirc;ng vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 8, 2, 'Yes'),
(9, 'LD3 T-Shirt', 'LD3 T-Shirt.jpg', 1000, '<p>&Aacute;o ph&ocirc;ng vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 8, 4, 'No'),
(10, 'LD4 T-Shirt', 'LD4 T-Shirt.jpg', 1000, '<p>&Aacute;o ph&ocirc;ng vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 8, 3, 'No'),
(11, 'Street Fighter T-Shirt', 'Street Fighter T-Shirt.jpg', 1000, '<p>&Aacute;o ph&ocirc;ng vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 8, 1, 'Yes'),
(12, 'Áo Bomber Da Lộn', 'bbda.jpg', 1000, '<p>&Aacute;o kho&aacute;c vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 9, 3, 'Yes'),
(13, 'Áo Khoác Bomber Đen', 'Áo Khoác Bomber Đen.jpg', 1000, '<p>&Aacute;o kho&aacute;c vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>\r\n<p>\"</p>', 9, 4, 'No'),
(14, 'Áo Khoác Bomber Nâu', 'Áo Khoác Bomber Nâu.jpg', 1000, '<p>&Aacute;o kho&aacute;c vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 9, 1, 'Yes'),
(15, 'Áo Khoác Bomber Xanh', 'Áo Khoác Bomber Xanh.jpg', 1000, '<p>&Aacute;o kho&aacute;c vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 9, 5, 'No'),
(16, 'Áo Khoác Da Mango', 'Áo Khoác Da Mango.jpg', 1000, '<p>&Aacute;o kho&aacute;c vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 9, 4, 'No'),
(17, 'Áo Khoác Tomstory Bomber', 'Áo Khoác Tomstory Bomber.jpg', 1000, '<p>&Aacute;o kho&aacute;c vừa chất vừa đẹp.</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 9, 6, 'Yes'),
(18, 'Áo Hoodie Champion', 'Áo Hoodie Champion.jpg', 1000, '<p>Ấm &aacute;p m&ugrave;a đ&ocirc;ng</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 10, 1, 'No'),
(19, 'Áo Hoodie NASA', 'Áo Hoodie NASA.jpg', 1000, '<p>Ấm &aacute;p m&ugrave;a đ&ocirc;ng</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 10, 3, 'Yes'),
(20, 'Áo Hoodie O!Ol', 'Áo Hoodie O!Ol.jpg', 1000, '<p>Ấm &aacute;p m&ugrave;a đ&ocirc;ng</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 10, 2, 'No'),
(21, 'Áo Hoodie Pac-Man', 'Áo Hoodie Pac-Man.jpg', 1000, '<p>Ấm &aacute;p m&ugrave;a đ&ocirc;ng</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 10, 4, 'No'),
(22, 'Áo Hoodie PolHam', 'Áo Hoodie PolHam.jpg', 1000, '<p>Ấm &aacute;p m&ugrave;a đ&ocirc;ng</p>\r\n<p>&nbsp;</p>\r\n<p>Gi&aacute; sinh vi&ecirc;n :v&nbsp;</p>\r\n<p>\"</p>', 10, 1, 'Yes'),
(23, 'Áo Hoodie Spao', 'Áo Hoodie Spao.jpg', 1000, '<p>Ấm áp mùa đông</p>\r\n<p> </p>\r\n<p>Giá sinh viên :v </p>\"', 10, 1, 'No'),
(24, 'BDG Jeans', 'BDG Jeans.jpg', 1000, '<p>Quần jean gi&aacute; rẻ :v</p>\r\n<p>\"</p>', 12, 4, 'Yes'),
(25, 'BlueWhite Jeans', 'BlueWhite Jeans.jpg', 1000, '<p>Quần jean gi&aacute; rẻ :v&nbsp;</p>\r\n<p>\"</p>', 12, 3, 'Yes'),
(26, 'Mango Jeans', 'Mango Jeans.jpg', 1000, '<p>Quần jean gi&aacute; rẻ :v&nbsp;</p>\r\n<p>\"</p>', 12, 1, 'No'),
(27, 'Pacsun Biker Jeans', 'Pacsun Biker Jeans.jpg', 1000, '<p>Quần jean gi&aacute; rẻ :v&nbsp;</p>\r\n<p>\"</p>', 12, 6, 'No'),
(28, 'Pacsun Jeans', 'Pacsun Jeans.jpg', 1000, '<p>Quần jean gi&aacute; rẻ :v&nbsp;</p>\r\n<p>\"</p>\r\n<p>\"</p>', 12, 1, 'Yes'),
(29, 'Pacsun Stacked Skinny Jeans', 'Pacsun Stacked Skinny Jeans.jpg', 1000, '<p>Quần jean gi&aacute; rẻ :v&nbsp;</p>\r\n<p>\"</p>', 12, 5, 'Yes'),
(30, 'Quần Jogger Camo', 'Quần Jogger Camo.jpg', 1000, '<p>Mặc v&agrave;o cực chất :3</p>\r\n<p>\"</p>', 11, 1, 'No'),
(31, 'Quần Jogger SPDr Đen', 'Quần Jogger SPDr Đen.jpg', 1000, '<p>Mặc v&agrave;o cực chất :3</p>\r\n<p>\"</p>', 11, 5, 'Yes'),
(32, 'Quần Jogger SPDr Xám', 'Quần Jogger SPDr Xám.jpg', 1000, '<p>Mặc v&agrave;o cực chất :3</p>\r\n<p>\"</p>', 11, 4, 'Yes'),
(33, 'Quần Jogger Xám', 'Quần Jogger Xám.jpg', 1000, '<p>Mặc v&agrave;o cực chất :3</p>\r\n<p>\"</p>', 11, 3, 'No'),
(34, 'Quần Jogger ZA', 'Quần Jogger ZA.jpg', 1000, '<p>Mặc v&agrave;o cực chất :3</p>\r\n<p>\"</p>', 11, 1, 'Yes'),
(35, 'Quần Jogger Zr', 'Quần Jogger Zr.jpg', 1000, '<p>Mặc v&agrave;o cực chất :3</p>\r\n<p>\"</p>', 11, 6, 'Yes'),
(36, 'BDG Short', 'BDG Short.jpg', 1000, '<p>\"</p>', 13, 3, 'No'),
(37, 'Dickies Short', 'Dickies Short.jpg', 1000, '<p>\"</p>', 13, 1, 'No'),
(38, 'Kaki Short', 'Kaki Short.jpg', 1000, '<p>\"</p>', 13, 2, 'Yes'),
(39, 'MLB Short', 'MLB Short.jpg', 1000, '<p>\"</p>', 13, 1, 'No'),
(40, 'Pacsun Short', 'Pacsun Short.jpg', 1000, '<p>\"</p>', 13, 5, 'No'),
(41, 'Silver Short', 'Silver Short.jpg', 1000, '<p>hmmm</p>\r\n<p>\"</p>', 13, 1, 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id_kh` int(11) NOT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id_kh`, `tenkhachhang`, `matkhau`, `email`, `diachi`, `sdt`) VALUES
(1, 'Lương Minh Tuấn', '123456', 'lmt@gmail.com', 'Ngõ 21, PNT, HN', 347183456);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `hinhanhsp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_sp`, `hinhanhsp`) VALUES
(14, 6, 'Get Lit Shirt1583224220.jpg'),
(15, 6, 'Get Lit Shirt1583224224.jpg'),
(16, 6, 'Get Lit Shirt1583224228.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `tenloaisp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `tenloaisp`, `thutu`) VALUES
(8, 'Áo Phông', 1),
(9, 'Áo Khoác', 2),
(10, 'Áo Hoodie', 3),
(11, 'Quần Jogger', 4),
(12, 'Quần Jeans', 5),
(13, 'Quần Short', 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
