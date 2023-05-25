-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2023 lúc 02:37 PM
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
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id_gh` int(100) UNSIGNED NOT NULL,
  `ảnh_sản_phẩm` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tên_sản_phẩm` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giá_tiền` int(100) NOT NULL,
  `id_sp` int(100) UNSIGNED NOT NULL,
  `id_tk` int(100) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id_gh`, `ảnh_sản_phẩm`, `tên_sản_phẩm`, `giá_tiền`, `id_sp`, `id_tk`) VALUES
(1, 'oppo-reno8 Z.jpeg', 'OPPO Reno8 Z 5G', 7000000, 6, 14),
(3, 'samsung-s21-5g.jpg', 'SAMSUNG S21 5G', 5599000, 10, 14),
(5, 'samsung-s21-5g.jpg', 'SAMSUNG S21 5G', 5599000, 10, 15),
(8, 'oppo-reno8 Z.jpeg', 'OPPO Reno8 Z 5G', 7000000, 6, 15),
(10, 'samsung-s21-5g.jpg', 'SAMSUNG S21 5G', 5599000, 10, 16),
(12, 'oppo-reno8 Z.jpeg', 'OPPO Reno8 Z 5G', 7000000, 6, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sản_phẩm`
--

CREATE TABLE `sản_phẩm` (
  `id_sp` int(100) UNSIGNED NOT NULL,
  `tên_sản_phẩm` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mã_sản_phẩm` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tên_danh_mục` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giá_tiền` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `số_lượng` int(100) NOT NULL,
  `ảnh_sản_phẩm` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mô_tả` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cấu_hình` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nổi_bật` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sản_phẩm`
--

INSERT INTO `sản_phẩm` (`id_sp`, `tên_sản_phẩm`, `mã_sản_phẩm`, `tên_danh_mục`, `giá_tiền`, `số_lượng`, `ảnh_sản_phẩm`, `mô_tả`, `cấu_hình`, `nổi_bật`) VALUES
(6, 'OPPO Reno8 Z 5G', 'MASP2', 'Điện thoại', '7000000', 12, 'oppo-reno8 Z.jpeg', 'OPPO Reno8 Z - chuyên gia chụp ảnh chân dung hàng đầu nhờ sự kết hợp giữa cảm biến cao cấp Sony IMX709(camera trước) và IMX766(camera sau) với ống kính Micro30x. Ngoài ra, phiên bản Reno 8 mang lại cho người dùng khả năng cân bằng cuộc sống theo khung giờ 8 tiếng giúp làm việc hiệu quả và nghỉ ngơi đầy đủ. Hiệu năng mà OPPO Reno 8 Z sở hữu 8GB RAM, 256GB bộ nhớ trong đi cùng với vi xử lý Qualcomm Snapdragon 695 5G giúp tối ưu các tác vụ hiệu quả cùng hiệu năng chơi game đỉnh cao.\r\nVới thiết kế cụm camera số 8 nhấn mạnh 8 tiếng tận hưởng mỗi ngày. Thay vì sống một cuộc sống gò bó, chỉ tập trung vào công việc như một robot được lập trình sẵn, hay chia thời gian mỗi ngày thành 3 phần: 8 tiếng làm việc, 8 tiếng tận hưởng và 8 tiếng nghỉ ngơi.', 'Thay vì sống một cuộc sống gò bó, chỉ tập trung vào công việc như một robot được lập trình sẵn, hay chia thời gian mỗi ngày thành 3 phần: 8 tiếng làm việc, 8 tiếng tận hưởng và 8 tiếng nghỉ ngơi.', ''),
(10, 'SAMSUNG S21 5G', 'MASP1', 'Điện thoại', '5599000', 10, 'samsung-s21-5g.jpg', 'Có thể nói, samsung galaxy s21 5g là một trong những chiếc điện thoại đáng được sở hữu nhất trong phân khúc tầm giá hiện tại. Với đột phá nổi bật, đi đầu trong phong cách thiết kế cùng cấu hình cực mạnh, chắc chắn bạn sẽ không cảm thấy lãng phí khi lựa chọn. Vậy galaxy s21 5g giá bao nhiêu? có những tính năng nổi bật gì, hãy cùng Galaxy Di Động tìm hiểu ngay sau đây nhé!\nSamsung Galaxy S21 5G có bố cục cân đối, hoàn thiện và bắt mắt. Một trong những điểm nhấn ở thiết kế mới này là màn hình viền siêu mỏng tuyệt đẹp kết hợp với mặt lưng kính mờ sang trọng. Phần khung viền kim loại càng góp phần tạo nên diện mạo cứng cáp nhưng tinh tế với tính chính xác cao. Chính vì thế, khi cầm điện thoại samsung galaxy s21 5g trên tay sẽ tạo cho bạn cảm giác vô cùng chắc chắn.', 'Samsung Galaxy S21 hỗ trợ đầy đủ tính năng bảo mật sinh trắc học, bảo mật tối đa điện thoại của bạn ', '');

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
(21, 'taotentuyen12', 'e10adc3949ba59abbe56e057f20f883e', 'taotentuyen@gmial.com', '', NULL, NULL, '2023-05-14 17:52:10.00000', 0),
(22, 'xinchaoban', 'e10adc3949ba59abbe56e057f20f883e', 'xinchaoban@gmail.com', '', NULL, NULL, '2023-05-19 12:10:50.00000', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id_gh`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_tk` (`id_tk`);

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
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_gh` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `sản_phẩm`
--
ALTER TABLE `sản_phẩm`
  MODIFY `id_sp` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tk` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sản_phẩm` (`id_sp`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
