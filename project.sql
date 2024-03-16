-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 16, 2024 lúc 05:29 PM
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
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baohanh`
--

CREATE TABLE `tbl_baohanh` (
  `id` int(8) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `sdt` char(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `seri` varchar(255) NOT NULL,
  `iddmbh` int(5) NOT NULL,
  `idsp` int(5) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `pa` varchar(255) NOT NULL,
  `ngaybh` date NOT NULL,
  `ngayhtbh` date DEFAULT NULL,
  `bh_sua` varchar(255) NOT NULL,
  `gia` double(10,0) DEFAULT NULL,
  `tt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baohanh`
--

INSERT INTO `tbl_baohanh` (`id`, `tenkh`, `sdt`, `email`, `diachi`, `seri`, `iddmbh`, `idsp`, `mota`, `pa`, `ngaybh`, `ngayhtbh`, `bh_sua`, `gia`, `tt`) VALUES
(29, 'Nguyễn Văn Khang', '0919247599', 'NgVK99@gmail.com', 'Tân An, Tân Châu, An Giang', 'CBP1', 33, 22, 'Lỗi double click', 'Thay thế switch chuột', '2023-12-20', '2023-12-21', 'Sửa', 100000, 'Đã sửa xong vui lòng đến trung tâm bảo hành nhận máy'),
(31, 'Trần Văn Khánh', '0973546333', 'khanh1@gmail.com', 'Cái Răng, Cần Thơ', 'SAMA', 32, 30, 'quạt không hoạt động', 'Sửa chữa quạt', '2023-12-13', '2023-12-20', 'Bảo hành', 0, 'Đang sửa chữa'),
(32, 'Trang Tuấn Tú', '0918283839', 'tu11@gmail.com', 'Ninh Kiều, Cần Thơ', 'CBR2', 31, 26, 'Không lên màn', 'Kiểm tra nguồn và thay thế', '2023-12-13', '2023-12-19', 'Bảo hành', 0, 'Đang kiểm tra'),
(33, 'Trang Tuấn Kiệt', '0918283838', 'kiet1@gmail.com', 'Cái Răng, Cần Thơ', 'CBR1', 31, 28, 'Sọc màn hình', 'Thay thế tấm màn hình', '2023-12-12', '2023-12-19', 'Bảo hành', 0, 'Đang kiểm tra');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(5) NOT NULL,
  `cat_ten` varchar(50) NOT NULL,
  `cat_uutien` int(3) NOT NULL DEFAULT 0,
  `cat_hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_ten`, `cat_uutien`, `cat_hienthi`) VALUES
(31, 'Màn hình máy tính', 0, 1),
(32, 'Case & linh kiện', 0, 1),
(33, 'Chuột & bàn phím', 0, 1),
(34, 'Loa & tai nghe', 0, 1),
(35, 'All in one', 0, 1),
(36, 'Router wifi', 0, 1),
(37, 'Laptop', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hang`
--

CREATE TABLE `tbl_hang` (
  `id` int(5) NOT NULL,
  `hang_ten` varchar(50) NOT NULL,
  `hang_hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hang`
--

INSERT INTO `tbl_hang` (`id`, `hang_ten`, `hang_hienthi`) VALUES
(1, 'ASUS', 1),
(2, 'Acer', 1),
(3, 'MSI', 1),
(4, 'SAMSUNG', 1),
(5, 'LENOVO', 1),
(6, 'Microsoft', 1),
(7, 'Dell', 1),
(8, 'HP', 1),
(9, 'Toshiba', 1),
(10, 'LG', 1),
(11, 'Gigabyte', 1),
(12, 'AOC', 1),
(13, 'HKC', 1),
(14, 'ViewSonic', 1),
(15, 'Color Master', 1),
(16, 'Logitech', 1),
(17, 'Razer', 1),
(18, 'Fulhen', 1),
(19, 'Rapoo', 1),
(20, 'JBL', 1),
(21, 'E-DRA', 1),
(22, 'TP-Link', 1),
(23, 'Xiaomi', 1),
(30, 'FPT', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hotro`
--

CREATE TABLE `tbl_hotro` (
  `id` int(8) NOT NULL,
  `ht_tenkh` varchar(255) NOT NULL,
  `ht_email` varchar(255) NOT NULL,
  `ht_sdt` int(10) NOT NULL,
  `ht_diachi` varchar(255) DEFAULT NULL,
  `ht_ten` varchar(255) NOT NULL,
  `ht_seri` char(10) NOT NULL,
  `ht_mota` varchar(255) NOT NULL,
  `dahotro` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hotro`
--

INSERT INTO `tbl_hotro` (`id`, `ht_tenkh`, `ht_email`, `ht_sdt`, `ht_diachi`, `ht_ten`, `ht_seri`, `ht_mota`, `dahotro`) VALUES
(17, 'Trần Văn Lâm', '', 973546119, '', '', '', 'Chào shop', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `MaNV` char(4) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `Anh` varchar(50) NOT NULL,
  `SDT` varchar(13) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CCCD` varchar(20) NOT NULL,
  `TaiKhoan` varchar(10) NOT NULL,
  `MatKhau` varchar(10) NOT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`MaNV`, `TenNV`, `Anh`, `SDT`, `DiaChi`, `Email`, `CCCD`, `TaiKhoan`, `MatKhau`, `role`) VALUES
('ADMK', 'Trần Minh Khang', '../NV/pc chay.gif', '0976543312', 'Ninh Kiều, Cần Thơ', 'khang2002vn@gmail.com', '0987654321', 'adminkhang', 'adminkhang', 1),
('NV1', 'Trần Hùng Dũng', '../NV/Screenshot (5).png', '0976543300', 'Cái Răng, Cần Thơ', 'TrDung1@gmail.com', '08920202020', 'nhanvien1', 'nhanvien1', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(5) NOT NULL,
  `sp_ten` varchar(50) NOT NULL,
  `sp_anh` varchar(50) NOT NULL,
  `sp_gia` double(10,0) NOT NULL DEFAULT 0,
  `iddm` int(5) NOT NULL,
  `idhang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `sp_ten`, `sp_anh`, `sp_gia`, `iddm`, `idhang`) VALUES
(22, 'TUF M3', '../uploads/chuottufm3.jpg', 400000, 33, 1),
(23, 'TUF F15', '../uploads/tuff15.jpg', 20000000, 37, 1),
(24, 'Acer EK241Y 23', '../uploads/Màn hình Acer EK241Y 23.jpg', 5000000, 31, 2),
(25, 'TUF GAMING VG249Q3A 24', '../uploads/TUF GAMING VG249Q3A 24.jpg', 7500000, 31, 1),
(26, 'S3 S33GC LS27C330GAEXXV', '../uploads/SAMSUNG S3 S33GC LS27C330GAEXXV.jpg', 6300000, 31, 4),
(28, 'MSI DK23 144', '../uploads/msi.jpg', 5100000, 31, 3),
(29, 'MSI RTX3060', '../uploads/3060.jpg', 9000000, 32, 3),
(30, 'Case SAMA', '../uploads/case.jpg', 599000, 32, 15),
(31, 'SSD ACER 128GB', '../uploads/ssdacer.jpg', 600000, 32, 2),
(33, 'Nguồn 750W', '../uploads/nguoncolormaster.jpg', 600000, 32, 15),
(34, 'Logitech G733', '../uploads/logitechg773.jpg', 3000000, 34, 16);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bh_dm` (`iddmbh`),
  ADD KEY `fk_bh_sp` (`idsp`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_hang`
--
ALTER TABLE `tbl_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_hotro`
--
ALTER TABLE `tbl_hotro`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`),
  ADD KEY `fk_sanpham_hang` (`idhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tbl_hang`
--
ALTER TABLE `tbl_hang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_hotro`
--
ALTER TABLE `tbl_hotro`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_baohanh`
--
ALTER TABLE `tbl_baohanh`
  ADD CONSTRAINT `fk_bh_dm` FOREIGN KEY (`iddmbh`) REFERENCES `tbl_category` (`id`),
  ADD CONSTRAINT `fk_bh_sp` FOREIGN KEY (`idsp`) REFERENCES `tbl_sanpham` (`id`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_category` (`id`),
  ADD CONSTRAINT `fk_sanpham_hang` FOREIGN KEY (`idhang`) REFERENCES `tbl_hang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
