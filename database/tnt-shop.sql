-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2023 lúc 11:17 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tnt-shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int(100) UNSIGNED NOT NULL,
  `tên_danh_mục` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `tên_danh_mục`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Máy tính bảng'),
(4, 'Tai nghe'),
(5, 'Bàn phím'),
(6, 'Chuột máy tính'),
(7, 'Máy ảnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sản_phẩm`
--

CREATE TABLE `sản_phẩm` (
  `id_sp` int(100) UNSIGNED NOT NULL,
  `tên_sản_phẩm` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tên_danh_mục` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giá_tiền` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mô_tả` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cấu_hình` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `số_lượng` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tk` int(100) UNSIGNED NOT NULL,
  `tên_đăng_nhập` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mật_khẩu` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `điện_thoại` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `địa_chỉ` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `địa_chỉ_nhận` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngày_tạo` datetime(5) NOT NULL,
  `cấp_bậc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_tk`, `tên_đăng_nhập`, `mật_khẩu`, `email`, `điện_thoại`, `địa_chỉ`, `địa_chỉ_nhận`, `ngày_tạo`, `cấp_bậc`) VALUES
(1, 'tuyen0972612200', 'e46ec92f85c823212e44ac1e5e80a804', '0972612200tuyen@gmail.com', '0972612200', NULL, NULL, '2023-05-12 17:12:12.00000', 1),
(14, 'tnt1234', 'e10adc3949ba59abbe56e057f20f883e', 'tnt1234@gmail.com', '', NULL, NULL, '2023-05-12 19:03:50.00000', 0),
(15, 'tnt1256', 'e10adc3949ba59abbe56e057f20f883e', 'tnt097@gmail.com', '', NULL, NULL, '2023-05-13 14:40:50.00000', 0),
(16, 'tnt123456', 'e10adc3949ba59abbe56e057f20f883e', 'tnt097@gmail.com', '', NULL, NULL, '2023-05-13 15:25:16.00000', 0),
(17, 'tnt1234567', 'e10adc3949ba59abbe56e057f20f883e', 'tnt097@gmail.com', '', NULL, NULL, '2023-05-13 15:29:29.00000', 0),
(18, 'khongbiet12', 'e10adc3949ba59abbe56e057f20f883e', 'tnt097@gmail.com', '', NULL, NULL, '2023-05-13 15:29:57.00000', 0),
(19, 'khongco123', 'e10adc3949ba59abbe56e057f20f883e', 'treterterter@gmail.com', '', NULL, NULL, '2023-05-13 15:31:41.00000', 0),
(20, 'tuyen1234', 'e10adc3949ba59abbe56e057f20f883e', 'tuyen1234@gmail.com', '', NULL, NULL, '2023-05-14 09:16:32.00000', 0),
(21, 'taotentuyen12', 'e10adc3949ba59abbe56e057f20f883e', 'taotentuyen@gmial.com', '', NULL, NULL, '2023-05-14 17:52:10.00000', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `sản_phẩm`
--
ALTER TABLE `sản_phẩm`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sản_phẩm`
--
ALTER TABLE `sản_phẩm`
  MODIFY `id_sp` int(100) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tk` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
