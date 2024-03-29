-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2023 lúc 08:34 AM
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
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id_bai_viet` int(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `ngay_dang` date NOT NULL,
  `id_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id_bai_viet`, `avatar`, `tieu_de`, `mota`, `ngay_dang`, `id_trang_thai`) VALUES
(1, '1.jpg', 'Gt wisi enim ad minim veniam.', 'Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel lacus eget est d...', '2023-11-25', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(50) NOT NULL,
  `id_tk` int(50) NOT NULL,
  `id_sp` int(50) NOT NULL,
  `noi_dung_bl` text NOT NULL,
  `danh_gia` text NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(255) NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `ngay_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_dm`, `ngay_update`) VALUES
(1, 'Nhẫn', '2023-11-23'),
(2, 'Dây chuyền', '2023-11-23'),
(3, 'Lắc tay', '2023-11-23'),
(4, 'Vòng chân', '2023-11-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoa_don` int(50) NOT NULL,
  `tong_tien` float NOT NULL,
  `ngay_khoi_tao` date NOT NULL,
  `id_KM` int(50) NOT NULL,
  `id_thanh_toan` int(50) NOT NULL,
  `id_tk` int(50) NOT NULL,
  `so_luong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoa_don`, `tong_tien`, `ngay_khoi_tao`, `id_KM`, `id_thanh_toan`, `id_tk`, `so_luong`) VALUES
(1, 1000000, '2023-11-20', 1, 12, 12, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `id_hoa_don_CT` int(50) NOT NULL,
  `id_hoa_don` int(50) NOT NULL,
  `id_tk` int(50) NOT NULL,
  `id_sp` int(50) NOT NULL,
  `so_luong` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`id_hoa_don_CT`, `id_hoa_don`, `id_tk`, `id_sp`, `so_luong`) VALUES
(1, 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_KM` int(50) NOT NULL,
  `ma_KM` varchar(255) NOT NULL,
  `phan_tram_km` float NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_KM`, `ma_KM`, `phan_tram_km`, `ngay_bat_dau`, `ngay_ket_thuc`, `trang_thai`) VALUES
(2, 'concainit', 12, '2023-11-21', '1212-11-28', '0'),
(3, 'advsv', 10, '2023-11-07', '2023-11-30', '1'),
(4, 'concainit', 12, '0121-12-12', '0000-00-00', '0'),
(5, 'KM12', 12, '2023-11-23', '2023-11-24', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(10) NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'khach_hang'),
(2, 'nhan_vien'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(20) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` float NOT NULL,
  `mo_ta_sp` text NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `so_luong` int(50) NOT NULL,
  `ngay_nhap_sp` date NOT NULL,
  `trang_thai` int(50) NOT NULL,
  `id_dm` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `mo_ta_sp`, `anh_sp`, `so_luong`, `ngay_nhap_sp`, `trang_thai`, `id_dm`) VALUES
(1, 'sp1', 123457000, 'đẹp', '1-1.jpg', 12, '2023-11-25', 1, 1),
(2, 'sp2', 12345800, '9gfcx', '1-3.jpg', 2, '2023-11-25', 1, 1),
(3, 'sp3', 23456800000, 'dscx v bgfdxz', '1-8.jpg', 2, '2023-11-08', 1, 2),
(4, 'sp4', 1234570000, 'dsxcfgtdfcz', '1-9.jpg', 3, '2023-11-09', 1, 3),
(5, 'sp5', 123457000000, 'ưqsadcvghjutyrhtegfsdxcz', '1-5.jpg', 2, '2023-11-25', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(50) NOT NULL,
  `ten_tk` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `nam_sinh` date NOT NULL,
  `gioi_tinh` int(50) NOT NULL,
  `dia_chi` text NOT NULL,
  `id_role` int(50) NOT NULL DEFAULT 0,
  `ngay_tao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `ten_tk`, `password`, `sdt`, `email`, `full_name`, `nam_sinh`, `gioi_tinh`, `dia_chi`, `id_role`, `ngay_tao`) VALUES
(1, 'quyetmom', 1234, 6345234, 'quyetmom@gmail.com', 'doquangquyet', '2023-11-30', 1, 'trinh van bo', 0, '2023-11-20'),
(10, 'quyetmomdz ', 1234, 2147483647, 'quyetdo01698705281@gmal.com', '', '0312-03-12', 0, 'vien an', 0, '0000-00-00'),
(12, 'quyetmomdz ', 123234, 2147483647, 'quyetdqph31368@fe.edu.vn', '', '0001-12-12', 1, 'tring van lo', 3, '0000-00-00'),
(13, 'kiên ', 0, 2147483647, 'kien0612@gmail', '', '2003-12-06', 1, 'Nam Định', 1, '2023-11-23'),
(14, 'kiên', 123, 0, 'kien0612@gmail', '', '0000-00-00', 0, '', 3, '2023-11-24'),
(15, 'kiên', 0, 2147483647, 'vutrungkien612203@gmail.com', '', '2023-11-12', 1, 'Nam Định', 0, '2023-11-24'),
(16, 'kiên', 0, 2147483647, 'vutrungkien612203@gmail.com', '', '2023-11-12', 1, 'Nam Định', 0, '2023-11-24'),
(17, 'kiên', 0, 2147483647, 'vutrungkien612203@gmail.com', '', '2023-11-12', 1, 'Nam Định', 0, '2023-11-24'),
(18, 'kiên', 0, 2147483647, 'vutrungkien612203@gmail.com', '', '2023-11-12', 1, 'Nam Định', 0, '2023-11-24'),
(19, 'kiên', 0, 2147483647, 'vutrungkien612203@gmail.com', '', '2023-11-12', 1, 'Nam Định', 0, '2023-11-24'),
(20, 'duc', 0, 2147483647, 'Quynhhieu196193@gmail.com', '', '2023-11-18', 0, 'Nam Định18', 2, '2023-11-24'),
(21, 'kiên 123', 0, 2147483647, 'cv1dgvgzjp@email.edu.pl', '', '2023-11-03', 1, 'Nam Định', 1, '2023-11-24'),
(22, 'kiên 123', 0, 2147483647, 'My1502m@gmail.com123', '', '2023-11-03', 0, 'Nam Định18', 1, '2023-11-24'),
(23, 'kien0612', 123, 0, 'cv1dgvgzjp@email.edu.pl', '', '0000-00-00', 0, '', 0, '2023-11-25'),
(24, 'kiên 123', 123, 0, 'kien0612@gmail', '', '0000-00-00', 0, '', 0, '2023-11-25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id_thanh_toan` int(50) NOT NULL,
  `kieu_thanh_toan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`id_thanh_toan`, `kieu_thanh_toan`) VALUES
(1, 'tiền mặt'),
(2, 'banking');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id_trang_thai` int(20) NOT NULL,
  `ten_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id_trang_thai`, `ten_trang_thai`) VALUES
(1, 'Còn Hàng'),
(2, 'Hết Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai_hd`
--

CREATE TABLE `trang_thai_hd` (
  `id_trang_thai` int(10) NOT NULL,
  `ten_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai_hd`
--

INSERT INTO `trang_thai_hd` (`id_trang_thai`, `ten_trang_thai`) VALUES
(1, 'Hoạt Động'),
(2, 'Không Hoạt Động');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_bai_viet`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoa_don`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD PRIMARY KEY (`id_hoa_don_CT`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_KM`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id_thanh_toan`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_trang_thai`);

--
-- Chỉ mục cho bảng `trang_thai_hd`
--
ALTER TABLE `trang_thai_hd`
  ADD PRIMARY KEY (`id_trang_thai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_bai_viet` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoa_don` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  MODIFY `id_hoa_don_CT` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_KM` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id_thanh_toan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_trang_thai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trang_thai_hd`
--
ALTER TABLE `trang_thai_hd`
  MODIFY `id_trang_thai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
