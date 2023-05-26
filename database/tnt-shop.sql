-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 26, 2023 lúc 06:11 AM
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
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id_bv` int(100) UNSIGNED NOT NULL,
  `ngày_đăng` datetime(6) NOT NULL,
  `ảnh_bài_viết` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nội_dung` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tên_bài_viết` varchar(1000) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id_bv`, `ngày_đăng`, `ảnh_bài_viết`, `nội_dung`, `tên_bài_viết`) VALUES
(4, '2023-05-26 10:53:30.000000', 'su-phat-trien-cua-nganh-cong-nghe-thong-tin-1(1).jpg', '<div id=\"ctl00_SPWebPartManager1_g_275cd07f_7dd8_4f62_97b3_19577a1ec443_ctl00_pnHide\" style=\"padding:0px; text-align:justify\">\n<div style=\"padding:0px; width:843.9px\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Theo d&ograve;ng chảy của cuộc c&aacute;ch mạng 4.0, tr&iacute; tuệ nh&acirc;n tạo ng&agrave;y c&agrave;ng được phổ biến v&agrave; ứng dụng rộng r&atilde;i trong mọi lĩnh vực của cuộc sống, mặc d&ugrave; được John McCarthy &ndash; nh&agrave; khoa học m&aacute;y t&iacute;nh người Mỹ đề cập lần đầu ti&ecirc;n v&agrave;o những năm 1950 nhưng đến ng&agrave;y nay thuật ngữ tr&iacute; tuệ nh&acirc;n tạo mới thực sự được biết đến rộng r&atilde;i v&agrave; được c&aacute;c &ldquo;&ocirc;ng lớn&rdquo; của l&agrave;ng c&ocirc;ng nghệ chạy đua ph&aacute;t triển.</span></span></span></span></span></span></span></span></div>\n</div>\n\n<div id=\"divArticleDescription2\" style=\"padding:0px; text-align:justify\">\n<div class=\"ExternalClass1266C6959DE64C4392453217BAB75984\" style=\"padding:0px\">\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">AI l&agrave; c&ocirc;ng nghệ sử dụng đến kỹ thuật số c&oacute; khả năng thực hiện những nhiệm vụ m&agrave; b&igrave;nh thường phải cần tới tr&iacute; th&ocirc;ng minh của con người, được xem l&agrave; phổ biến nhất. Đặc trưng của c&ocirc;ng nghệ AI l&agrave; năng lực &ldquo;tự học&rdquo; của m&aacute;y t&iacute;nh, do đ&oacute; c&oacute; thể tự ph&aacute;n đo&aacute;n, ph&acirc;n t&iacute;ch trước c&aacute;c dữ liệu mới m&agrave; kh&ocirc;ng cần sự hỗ trợ của con người, đồng thời c&oacute; khả năng xử l&yacute; dữ liệu với số lượng rất lớn v&agrave; tốc độ cao. Hiện mỗi ng&agrave;y tr&ecirc;n to&agrave;n cầu c&oacute; khoảng 2,2 tỷ Gb dữ liệu mới (tương đương 165.000 tỷ trang t&agrave;i liệu) được tạo ra v&agrave; được c&aacute;c c&ocirc;ng ty, như Google, Twitter, Facebook, Amazon, Baidu, Weibo, Tencent hay Alibaba thu thập để tạo th&agrave;nh &ldquo;dữ liệu lớn&rdquo; (big data). Tr&iacute; tuệ nh&acirc;n tạo l&agrave; một lĩnh vực li&ecirc;n quan đến chuy&ecirc;n ng&agrave;nh khoa học m&aacute;y t&iacute;nh v&agrave; c&ocirc;ng nghệ th&ocirc;ng tin, bản chất của tr&iacute; tuệ nh&acirc;n tạo vẫn do con người l&agrave;m ra, họ x&acirc;y dựng c&aacute;c thuật to&aacute;n, lập tr&igrave;nh bằng c&aacute;c c&ocirc;ng cụ phần mềm c&ocirc;ng nghệ th&ocirc;ng tin, gi&uacute;p c&aacute;c m&aacute;y t&iacute;nh c&oacute; thể tự động xử l&yacute; c&aacute;c h&agrave;nh vi th&ocirc;ng minh như con người.</span></span></span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Tr&iacute; tuệ nh&acirc;n tạo c&oacute; khả năng tự th&iacute;ch nghi, tự học v&agrave; tự ph&aacute;t triển, tự đưa ra c&aacute;c lập luận để giải quyết vấn đề, c&oacute; thể giao tiếp như người&hellip;tất cả l&agrave; do AI được c&agrave;i một cơ sở dữ liệu lớn, được lập tr&igrave;nh tr&ecirc;n cơ sở dữ liệu đ&oacute; v&agrave; t&aacute;i lập tr&igrave;nh tr&ecirc;n cơ sở dữ liệu mới sinh ra. Cứ như vậy cấu tr&uacute;c của AI lu&ocirc;n lu&ocirc;n thay đổi v&agrave; th&iacute;ch nghi trong điều kiện v&agrave; ho&agrave;n cảnh mới. Dự b&aacute;o đến năm 2030 của c&ocirc;ng ty kiểm to&aacute;n v&agrave; tư vấn t&agrave;i ch&iacute;nh PwC, GDP to&agrave;n cầu c&oacute; thể tăng trưởng th&ecirc;m 14% từ sự hỗ trợ của tr&iacute; tuệ nh&acirc;n tạo, AI đ&atilde; xuất hiện trong nhiều ng&agrave;nh, từ cung cấp dịch vụ mua sắm ảo v&agrave; ng&acirc;n h&agrave;ng trực tuyến đến giảm chi ph&iacute; đầu tư trong sản xuất v&agrave; hợp l&yacute; h&oacute;a chẩn đo&aacute;n trong chăm s&oacute;c sức khỏe. AI đ&atilde; th&uacute;c đẩy hầu hết c&aacute;c ng&agrave;nh c&ocirc;ng nghiệp tiến l&ecirc;n v&agrave; thay đổi cuộc sống của nhiều người.</span></span></span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Trong lịch sử ph&aacute;t triển của m&igrave;nh từ năm 1960 đến năm 2018, thế giới đ&atilde; c&oacute; gần 340.000 s&aacute;ng chế đồng dạng v&agrave; hơn 1,6 triệu b&agrave;i b&aacute;o khoa học li&ecirc;n quan đến ph&aacute;t triển tr&iacute; tuệ nh&acirc;n tạo được c&ocirc;ng bố. Trong thập ni&ecirc;n 80, AI đ&atilde; bắt đầu được quan t&acirc;m, nhưng đến những năm 2012 sự tăng tốc mới trở n&ecirc;n mạnh mẽ. Giai đoạn 2006-2012, số c&ocirc;ng bố s&aacute;ng chế b&igrave;nh qu&acirc;n tăng 8% trong một năm, nhưng đến giai đoạn 2012-2017 mức tăng đ&atilde; đạt 28% trong một năm. Số lượng đơn s&aacute;ng chế li&ecirc;n quan đến AI tăng từ 8.515 trong năm 2006 l&ecirc;n đến 12.473 năm 2011 v&agrave; 55.660 năm 2017 (tăng gấp 6, 5 lần trong v&ograve;ng 12 năm).</span></span></span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Trong nghi&ecirc;n cứu khoa học, c&aacute;c c&ocirc;ng bố b&agrave;i b&aacute;o li&ecirc;n quan đến AI cũng tăng l&ecirc;n rất nhanh ch&oacute;ng, đặc biệt trong thời gian đến năm 2018 gần đ&acirc;y với 1.636.649 b&agrave;i b&aacute;o được c&ocirc;ng bố. Sự xuất hiện của c&aacute;c b&agrave;i b&aacute;o khoa học về AI bắt đầu sớm hơn 10 năm trước khi diễn ra cuộc chạy đua bảo hộ s&aacute;ng chế c&ocirc;ng nghệ AI. Chứng tỏ, kết quả của nghi&ecirc;n cứu khoa học cơ bản về AI đ&atilde; c&oacute; hiệu quả về mặt ứng dụng khi c&aacute;c cuộc đua đăng k&yacute; bảo hộ s&aacute;ng chế gia tăng sau đ&oacute;.</span></span></span></span></span></span></span></span></p>\n\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost/2a04dcf1-ae49-4c57-b9dc-a09357c9d78c\" width=\"964\" />\n<figcaption></figcaption>\n</figure>\n\n<p>Theo hệ thống ph&acirc;n loại của Hiệp hội M&aacute;y t&iacute;nh Quốc tế ACM (Computing Analysis Scheme) c&oacute; một khung ph&acirc;n t&iacute;ch r&otilde; r&agrave;ng ph&ugrave; hợp để tổng hợp v&agrave; đại diện cho c&ocirc;ng nghệ đang thay đổi AI theo thời gian. Ph&acirc;n loại n&agrave;y đ&atilde; được sử dụng trong hơn 50 năm v&agrave; bản cập nhật cuối c&ugrave;ng v&agrave;o năm 2012 đ&atilde; bổ sung c&aacute;c c&ocirc;ng nghệ mới. Theo đ&oacute;, c&ocirc;ng nghệ AI được chia th&agrave;nh 3 hướng ch&iacute;nh:</p>\n\n<p>-&nbsp;<em>Kỹ thuật AI (AI Technique)</em>: l&agrave; c&aacute;c m&ocirc; h&igrave;nh t&iacute;nh to&aacute;n v&agrave; thống k&ecirc; ti&ecirc;n tiến như học m&aacute;y, logic mờ v&agrave; hệ thống cơ sở tri thức cho ph&eacute;p t&iacute;nh to&aacute;n, nhiệm vụ do con người thực hiện; C&aacute;c kỹ thuật tr&iacute; tuệ nh&acirc;n tạo kh&aacute;c nhau được sử dụng để thực hiện c&aacute;c chức năng kh&aacute;c nhau.</p>\n\n<p>&nbsp;-&nbsp;<em>Ứng dụng chức năng của tr&iacute; tuệ nh&acirc;n tạo</em>&nbsp;<em>(AI functions application)</em>: chẳng hạn như thị gi&aacute;c m&aacute;y t&iacute;nh (computer vision) c&oacute; thể chứa một hoặc nhiều kỹ thuật tr&iacute; tuệ kh&aacute;c nhau.</p>\n\n<p>-&nbsp;<em>Ứng dụng tr&iacute; tuệ nh&acirc;n tạo theo lĩnh vực</em>&nbsp;<em>(AI Application field ):</em>&nbsp;l&agrave; việc sử dụng c&aacute;c kỹ thuật hoặc ứng dụng tr&iacute; tuệ nh&acirc;n tạo chức năng trong c&aacute;c lĩnh vực, ng&agrave;nh nghề cụ thể như giao th&ocirc;ng vận tải, n&ocirc;ng nghiệp, khoa học đời sống, y tế ...</p>\n\n<p>C&ograve;n theo Mediastandard, AI được chia l&agrave;m ba loại gồm tr&iacute; th&ocirc;ng minh nh&acirc;n tạo hẹp (ANI), tr&iacute; th&ocirc;ng minh phổ biến nh&acirc;n tạo (AGI) v&agrave; tr&iacute; tuệ si&ecirc;u nh&acirc;n tạo (ASI).</p>\n\n<p>Những dự đo&aacute;n về ứng dụng c&ocirc;ng nghệ AI trong nhiều lĩnh vực kh&aacute;c nhau, c&aacute;c nh&agrave; nghi&ecirc;n cứu, doanh nghiệp, khởi nghiệp v&agrave; ch&iacute;nh phủ c&oacute; thể định hướng mục ti&ecirc;u ph&aacute;t triển trong tương lai:</p>\n\n<p>&nbsp;<em>Hỗ trợ hệ thống cổng th&ocirc;ng tin ch&iacute;nh phủ</em></p>\n\n<p>C&ocirc;ng nghệ tr&iacute; tuệ nh&acirc;n tạo AI c&oacute; thể l&agrave; ch&igrave;a kh&oacute;a để tiến tới việc cải tiến cải c&aacute;ch h&agrave;nh ch&iacute;nh hiệu quả, triệt để, gi&uacute;p thay đổi đ&aacute;ng kế v&agrave; giải quyết nhiều vấn đề bất cập hiện nay về quản l&yacute; v&agrave; điều h&agrave;nh của c&aacute;c cơ quan quản l&yacute; nh&agrave; nước c&aacute;c cấp. Điển h&igrave;nh l&agrave; việc ứng dụng AI v&agrave;o hệ thống chatbot (trả lời tự động) v&agrave; trợ l&yacute; ảo tại c&aacute;c trung t&acirc;m h&agrave;nh ch&iacute;nh. Điều n&agrave;y cho ph&eacute;p người d&acirc;n truy vấn th&ocirc;ng tin nhận được c&acirc;u trả lời nhanh ch&oacute;ng, hiệu quả cũng như ngăn chặn t&igrave;nh trạng xếp h&agrave;ng, chờ đợi như trước kia.</p>\n\n<p>Với lượng dữ liệu khổng lồ lưu trữ trong cơ sở dữ liệu của ch&iacute;nh phủ, AI c&oacute; khả năng tổ chức v&agrave; kết hợp nhiều bộ dữ liệu để r&uacute;t ra th&ocirc;ng tin, cũng như t&oacute;m tắt một loạt c&aacute;c dạng dữ liệu. Tuy nhi&ecirc;n để triển khai được tốt hiệu quả, vấn đề an ninh mạng v&agrave; bảo mật th&ocirc;ng tin cũng cần được hệ thống AI quan t&acirc;m v&agrave; v&aacute; k&iacute;n.</p>\n\n<p><em>Nhận dạng khu&ocirc;n mặt</em></p>\n\n<p>Nhận diện khu&ocirc;n mặt bằng AI l&agrave; ứng dụng tr&iacute; tuệ nh&acirc;n tạo v&agrave;o việc x&aacute;c minh đặc t&iacute;nh gương mặt, m&aacute;y t&iacute;nh tự động x&aacute;c định, nhận dạng một người n&agrave;o đ&oacute; từ một bức h&igrave;nh ảnh kỹ thuật số hoặc một khung h&igrave;nh trong video. Nhận diện khu&ocirc;n mặt bằng c&ocirc;ng nghệ AI thuộc một nh&aacute;nh của thị gi&aacute;c m&aacute;y t&iacute;nh, m&agrave; thị gi&aacute;c m&aacute;y t&iacute;nh tốt hơn rất nhiều so với mắt thường của con người. Một trong những c&aacute;ch x&aacute;c định l&agrave; dựa v&agrave;o những điểm n&uacute;t của khu&ocirc;n mặt. C&ocirc;ng nghệ AI c&oacute; thể đo tới 80 điểm n&uacute;t (khoảng c&aacute;ch giữa c&aacute;c điểm tr&ecirc;n một khu&ocirc;n mặt gi&uacute;p cơ chế nhận dạng khu&ocirc;n mặt (FR) trở n&ecirc;n dễ d&agrave;ng hơn.</p>\n</div>\n</div>\n', 'Công nghệ AI của hiện tại và tương lai'),
(5, '2023-05-26 11:02:33.000000', 'su-phat-trien-cua-nganh-cong-nghe-thong-tin-1(1).jpg', '<div id=\"ctl00_SPWebPartManager1_g_275cd07f_7dd8_4f62_97b3_19577a1ec443_ctl00_pnHide\" style=\"padding:0px; text-align:justify\">\r\n<div style=\"padding:0px; width:843.9px\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Theo d&ograve;ng chảy của cuộc c&aacute;ch mạng 4.0, tr&iacute; tuệ nh&acirc;n tạo ng&agrave;y c&agrave;ng được phổ biến v&agrave; ứng dụng rộng r&atilde;i trong mọi lĩnh vực của cuộc sống, mặc d&ugrave; được John McCarthy &ndash; nh&agrave; khoa học m&aacute;y t&iacute;nh người Mỹ đề cập lần đầu ti&ecirc;n v&agrave;o những năm 1950 nhưng đến ng&agrave;y nay thuật ngữ tr&iacute; tuệ nh&acirc;n tạo mới thực sự được biết đến rộng r&atilde;i v&agrave; được c&aacute;c &ldquo;&ocirc;ng lớn&rdquo; của l&agrave;ng c&ocirc;ng nghệ chạy đua ph&aacute;t triển.</span></span></span></span></span></span></span></span></div>\r\n</div>\r\n\r\n<div id=\"divArticleDescription2\" style=\"padding:0px; text-align:justify\">\r\n<div class=\"ExternalClass1266C6959DE64C4392453217BAB75984\" style=\"padding:0px\">\r\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">AI l&agrave; c&ocirc;ng nghệ sử dụng đến kỹ thuật số c&oacute; khả năng thực hiện những nhiệm vụ m&agrave; b&igrave;nh thường phải cần tới tr&iacute; th&ocirc;ng minh của con người, được xem l&agrave; phổ biến nhất. Đặc trưng của c&ocirc;ng nghệ AI l&agrave; năng lực &ldquo;tự học&rdquo; của m&aacute;y t&iacute;nh, do đ&oacute; c&oacute; thể tự ph&aacute;n đo&aacute;n, ph&acirc;n t&iacute;ch trước c&aacute;c dữ liệu mới m&agrave; kh&ocirc;ng cần sự hỗ trợ của con người, đồng thời c&oacute; khả năng xử l&yacute; dữ liệu với số lượng rất lớn v&agrave; tốc độ cao. Hiện mỗi ng&agrave;y tr&ecirc;n to&agrave;n cầu c&oacute; khoảng 2,2 tỷ Gb dữ liệu mới (tương đương 165.000 tỷ trang t&agrave;i liệu) được tạo ra v&agrave; được c&aacute;c c&ocirc;ng ty, như Google, Twitter, Facebook, Amazon, Baidu, Weibo, Tencent hay Alibaba thu thập để tạo th&agrave;nh &ldquo;dữ liệu lớn&rdquo; (big data). Tr&iacute; tuệ nh&acirc;n tạo l&agrave; một lĩnh vực li&ecirc;n quan đến chuy&ecirc;n ng&agrave;nh khoa học m&aacute;y t&iacute;nh v&agrave; c&ocirc;ng nghệ th&ocirc;ng tin, bản chất của tr&iacute; tuệ nh&acirc;n tạo vẫn do con người l&agrave;m ra, họ x&acirc;y dựng c&aacute;c thuật to&aacute;n, lập tr&igrave;nh bằng c&aacute;c c&ocirc;ng cụ phần mềm c&ocirc;ng nghệ th&ocirc;ng tin, gi&uacute;p c&aacute;c m&aacute;y t&iacute;nh c&oacute; thể tự động xử l&yacute; c&aacute;c h&agrave;nh vi th&ocirc;ng minh như con người.</span></span></span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Tr&iacute; tuệ nh&acirc;n tạo c&oacute; khả năng tự th&iacute;ch nghi, tự học v&agrave; tự ph&aacute;t triển, tự đưa ra c&aacute;c lập luận để giải quyết vấn đề, c&oacute; thể giao tiếp như người&hellip;tất cả l&agrave; do AI được c&agrave;i một cơ sở dữ liệu lớn, được lập tr&igrave;nh tr&ecirc;n cơ sở dữ liệu đ&oacute; v&agrave; t&aacute;i lập tr&igrave;nh tr&ecirc;n cơ sở dữ liệu mới sinh ra. Cứ như vậy cấu tr&uacute;c của AI lu&ocirc;n lu&ocirc;n thay đổi v&agrave; th&iacute;ch nghi trong điều kiện v&agrave; ho&agrave;n cảnh mới. Dự b&aacute;o đến năm 2030 của c&ocirc;ng ty kiểm to&aacute;n v&agrave; tư vấn t&agrave;i ch&iacute;nh PwC, GDP to&agrave;n cầu c&oacute; thể tăng trưởng th&ecirc;m 14% từ sự hỗ trợ của tr&iacute; tuệ nh&acirc;n tạo, AI đ&atilde; xuất hiện trong nhiều ng&agrave;nh, từ cung cấp dịch vụ mua sắm ảo v&agrave; ng&acirc;n h&agrave;ng trực tuyến đến giảm chi ph&iacute; đầu tư trong sản xuất v&agrave; hợp l&yacute; h&oacute;a chẩn đo&aacute;n trong chăm s&oacute;c sức khỏe. AI đ&atilde; th&uacute;c đẩy hầu hết c&aacute;c ng&agrave;nh c&ocirc;ng nghiệp tiến l&ecirc;n v&agrave; thay đổi cuộc sống của nhiều người.</span></span></span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Trong lịch sử ph&aacute;t triển của m&igrave;nh từ năm 1960 đến năm 2018, thế giới đ&atilde; c&oacute; gần 340.000 s&aacute;ng chế đồng dạng v&agrave; hơn 1,6 triệu b&agrave;i b&aacute;o khoa học li&ecirc;n quan đến ph&aacute;t triển tr&iacute; tuệ nh&acirc;n tạo được c&ocirc;ng bố. Trong thập ni&ecirc;n 80, AI đ&atilde; bắt đầu được quan t&acirc;m, nhưng đến những năm 2012 sự tăng tốc mới trở n&ecirc;n mạnh mẽ. Giai đoạn 2006-2012, số c&ocirc;ng bố s&aacute;ng chế b&igrave;nh qu&acirc;n tăng 8% trong một năm, nhưng đến giai đoạn 2012-2017 mức tăng đ&atilde; đạt 28% trong một năm. Số lượng đơn s&aacute;ng chế li&ecirc;n quan đến AI tăng từ 8.515 trong năm 2006 l&ecirc;n đến 12.473 năm 2011 v&agrave; 55.660 năm 2017 (tăng gấp 6, 5 lần trong v&ograve;ng 12 năm).</span></span></span></span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\"><span style=\"font-size:12px\"><span style=\"font-family:Arial\">Trong nghi&ecirc;n cứu khoa học, c&aacute;c c&ocirc;ng bố b&agrave;i b&aacute;o li&ecirc;n quan đến AI cũng tăng l&ecirc;n rất nhanh ch&oacute;ng, đặc biệt trong thời gian đến năm 2018 gần đ&acirc;y với 1.636.649 b&agrave;i b&aacute;o được c&ocirc;ng bố. Sự xuất hiện của c&aacute;c b&agrave;i b&aacute;o khoa học về AI bắt đầu sớm hơn 10 năm trước khi diễn ra cuộc chạy đua bảo hộ s&aacute;ng chế c&ocirc;ng nghệ AI. Chứng tỏ, kết quả của nghi&ecirc;n cứu khoa học cơ bản về AI đ&atilde; c&oacute; hiệu quả về mặt ứng dụng khi c&aacute;c cuộc đua đăng k&yacute; bảo hộ s&aacute;ng chế gia tăng sau đ&oacute;.</span></span></span></span></span></span></span></span></p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost/2a04dcf1-ae49-4c57-b9dc-a09357c9d78c\" width=\"964\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Theo hệ thống ph&acirc;n loại của Hiệp hội M&aacute;y t&iacute;nh Quốc tế ACM (Computing Analysis Scheme) c&oacute; một khung ph&acirc;n t&iacute;ch r&otilde; r&agrave;ng ph&ugrave; hợp để tổng hợp v&agrave; đại diện cho c&ocirc;ng nghệ đang thay đổi AI theo thời gian. Ph&acirc;n loại n&agrave;y đ&atilde; được sử dụng trong hơn 50 năm v&agrave; bản cập nhật cuối c&ugrave;ng v&agrave;o năm 2012 đ&atilde; bổ sung c&aacute;c c&ocirc;ng nghệ mới. Theo đ&oacute;, c&ocirc;ng nghệ AI được chia th&agrave;nh 3 hướng ch&iacute;nh:</p>\r\n\r\n<p>-&nbsp;<em>Kỹ thuật AI (AI Technique)</em>: l&agrave; c&aacute;c m&ocirc; h&igrave;nh t&iacute;nh to&aacute;n v&agrave; thống k&ecirc; ti&ecirc;n tiến như học m&aacute;y, logic mờ v&agrave; hệ thống cơ sở tri thức cho ph&eacute;p t&iacute;nh to&aacute;n, nhiệm vụ do con người thực hiện; C&aacute;c kỹ thuật tr&iacute; tuệ nh&acirc;n tạo kh&aacute;c nhau được sử dụng để thực hiện c&aacute;c chức năng kh&aacute;c nhau.</p>\r\n\r\n<p>&nbsp;-&nbsp;<em>Ứng dụng chức năng của tr&iacute; tuệ nh&acirc;n tạo</em>&nbsp;<em>(AI functions application)</em>: chẳng hạn như thị gi&aacute;c m&aacute;y t&iacute;nh (computer vision) c&oacute; thể chứa một hoặc nhiều kỹ thuật tr&iacute; tuệ kh&aacute;c nhau.</p>\r\n\r\n<p>-&nbsp;<em>Ứng dụng tr&iacute; tuệ nh&acirc;n tạo theo lĩnh vực</em>&nbsp;<em>(AI Application field ):</em>&nbsp;l&agrave; việc sử dụng c&aacute;c kỹ thuật hoặc ứng dụng tr&iacute; tuệ nh&acirc;n tạo chức năng trong c&aacute;c lĩnh vực, ng&agrave;nh nghề cụ thể như giao th&ocirc;ng vận tải, n&ocirc;ng nghiệp, khoa học đời sống, y tế ...</p>\r\n\r\n<p>C&ograve;n theo Mediastandard, AI được chia l&agrave;m ba loại gồm tr&iacute; th&ocirc;ng minh nh&acirc;n tạo hẹp (ANI), tr&iacute; th&ocirc;ng minh phổ biến nh&acirc;n tạo (AGI) v&agrave; tr&iacute; tuệ si&ecirc;u nh&acirc;n tạo (ASI).</p>\r\n\r\n<p>Những dự đo&aacute;n về ứng dụng c&ocirc;ng nghệ AI trong nhiều lĩnh vực kh&aacute;c nhau, c&aacute;c nh&agrave; nghi&ecirc;n cứu, doanh nghiệp, khởi nghiệp v&agrave; ch&iacute;nh phủ c&oacute; thể định hướng mục ti&ecirc;u ph&aacute;t triển trong tương lai:</p>\r\n\r\n<p>&nbsp;<em>Hỗ trợ hệ thống cổng th&ocirc;ng tin ch&iacute;nh phủ</em></p>\r\n\r\n<p>C&ocirc;ng nghệ tr&iacute; tuệ nh&acirc;n tạo AI c&oacute; thể l&agrave; ch&igrave;a kh&oacute;a để tiến tới việc cải tiến cải c&aacute;ch h&agrave;nh ch&iacute;nh hiệu quả, triệt để, gi&uacute;p thay đổi đ&aacute;ng kế v&agrave; giải quyết nhiều vấn đề bất cập hiện nay về quản l&yacute; v&agrave; điều h&agrave;nh của c&aacute;c cơ quan quản l&yacute; nh&agrave; nước c&aacute;c cấp. Điển h&igrave;nh l&agrave; việc ứng dụng AI v&agrave;o hệ thống chatbot (trả lời tự động) v&agrave; trợ l&yacute; ảo tại c&aacute;c trung t&acirc;m h&agrave;nh ch&iacute;nh. Điều n&agrave;y cho ph&eacute;p người d&acirc;n truy vấn th&ocirc;ng tin nhận được c&acirc;u trả lời nhanh ch&oacute;ng, hiệu quả cũng như ngăn chặn t&igrave;nh trạng xếp h&agrave;ng, chờ đợi như trước kia.</p>\r\n\r\n<p>Với lượng dữ liệu khổng lồ lưu trữ trong cơ sở dữ liệu của ch&iacute;nh phủ, AI c&oacute; khả năng tổ chức v&agrave; kết hợp nhiều bộ dữ liệu để r&uacute;t ra th&ocirc;ng tin, cũng như t&oacute;m tắt một loạt c&aacute;c dạng dữ liệu. Tuy nhi&ecirc;n để triển khai được tốt hiệu quả, vấn đề an ninh mạng v&agrave; bảo mật th&ocirc;ng tin cũng cần được hệ thống AI quan t&acirc;m v&agrave; v&aacute; k&iacute;n.</p>\r\n\r\n<p><em>Nhận dạng khu&ocirc;n mặt</em></p>\r\n\r\n<p>Nhận diện khu&ocirc;n mặt bằng AI l&agrave; ứng dụng tr&iacute; tuệ nh&acirc;n tạo v&agrave;o việc x&aacute;c minh đặc t&iacute;nh gương mặt, m&aacute;y t&iacute;nh tự động x&aacute;c định, nhận dạng một người n&agrave;o đ&oacute; từ một bức h&igrave;nh ảnh kỹ thuật số hoặc một khung h&igrave;nh trong video. Nhận diện khu&ocirc;n mặt bằng c&ocirc;ng nghệ AI thuộc một nh&aacute;nh của thị gi&aacute;c m&aacute;y t&iacute;nh, m&agrave; thị gi&aacute;c m&aacute;y t&iacute;nh tốt hơn rất nhiều so với mắt thường của con người. Một trong những c&aacute;ch x&aacute;c định l&agrave; dựa v&agrave;o những điểm n&uacute;t của khu&ocirc;n mặt. C&ocirc;ng nghệ AI c&oacute; thể đo tới 80 điểm n&uacute;t (khoảng c&aacute;ch giữa c&aacute;c điểm tr&ecirc;n một khu&ocirc;n mặt gi&uacute;p cơ chế nhận dạng khu&ocirc;n mặt (FR) trở n&ecirc;n dễ d&agrave;ng hơn.</p>\r\n</div>\r\n</div>\r\n', 'Công nghệ AI của hiện tại và tương lai');

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
  `id_tk` int(100) UNSIGNED NOT NULL,
  `số_lượng` int(100) NOT NULL,
  `tổng_tiền` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id_gh`, `ảnh_sản_phẩm`, `tên_sản_phẩm`, `giá_tiền`, `id_sp`, `id_tk`, `số_lượng`, `tổng_tiền`) VALUES
(15, 'Laptop dell latitude 7420.jpg', 'Laptop Dell Latitude 7420', 13490000, 11, 19, 1, 13490000),
(19, 'oppo-reno8 Z.jpeg', 'OPPO Reno8 Z 5G', 7000000, 6, 19, 1, 7000000),
(20, 'samsung-s21-5g.jpg', 'SAMSUNG S21 5G', 5599000, 10, 19, 1, 5599000),
(35, 'IPad 10 WiFi.jpg', 'IPad 10 WiFi 64GB', 20000000, 14, 14, 1, 20000000),
(36, 'Canon EOS 90D Kit.jpg', 'Máy ảnh Canon EOS 80D Kit 18-55mm', 910000, 13, 14, 1, 910000),
(37, 'samsung-s21-5g.jpg', 'SAMSUNG S21 5G', 5599000, 10, 21, 1, 5599000),
(38, 'gaming logite.jpg', 'Tai nghe Gaming Logitech G335 Trắng', 100000, 12, 21, 1, 100000),
(39, 'samsung-s21-5g.jpg', 'SAMSUNG S21 5G', 5599000, 10, 14, 1, 5599000);

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
(6, 'OPPO Reno8 Z 5G', 'MASP2', 'Điện thoại', '7000000', 12, 'oppo-reno8 Z.jpeg', 'OPPO Reno8 Z - chuyên gia chụp ảnh chân dung hàng đầu nhờ sự kết hợp giữa cảm biến cao cấp Sony IMX709(camera trước) và IMX766(camera sau) với ống kính Micro30x. Ngoài ra, phiên bản Reno 8 mang lại cho người dùng khả năng cân bằng cuộc sống theo khung giờ 8 tiếng giúp làm việc hiệu quả và nghỉ ngơi đầy đủ. Hiệu năng mà OPPO Reno 8 Z sở hữu 8GB RAM, 256GB bộ nhớ trong đi cùng với vi xử lý Qualcomm Snapdragon 695 5G giúp tối ưu các tác vụ hiệu quả cùng hiệu năng chơi game đỉnh cao.\r\nVới thiết kế cụm camera số 8 nhấn mạnh 8 tiếng tận hưởng mỗi ngày. Thay vì sống một cuộc sống gò bó, chỉ tập trung vào công việc như một robot được lập trình sẵn, hay chia thời gian mỗi ngày thành 3 phần: 8 tiếng làm việc, 8 tiếng tận hưởng và 8 tiếng nghỉ ngơi.', 'Thay vì sống một cuộc sống gò bó, chỉ tập trung vào công việc như một robot được lập trình sẵn, hay chia thời gian mỗi ngày thành 3 phần: 8 tiếng làm việc, 8 tiếng tận hưởng và 8 tiếng nghỉ ngơi.', '0'),
(10, 'SAMSUNG S21 5G', 'MASP1', 'Điện thoại', '5599000', 10, 'samsung-s21-5g.jpg', 'Có thể nói, samsung galaxy s21 5g là một trong những chiếc điện thoại đáng được sở hữu nhất trong phân khúc tầm giá hiện tại. Với đột phá nổi bật, đi đầu trong phong cách thiết kế cùng cấu hình cực mạnh, chắc chắn bạn sẽ không cảm thấy lãng phí khi lựa chọn. Vậy galaxy s21 5g giá bao nhiêu? có những tính năng nổi bật gì, hãy cùng Galaxy Di Động tìm hiểu ngay sau đây nhé!\nSamsung Galaxy S21 5G có bố cục cân đối, hoàn thiện và bắt mắt. Một trong những điểm nhấn ở thiết kế mới này là màn hình viền siêu mỏng tuyệt đẹp kết hợp với mặt lưng kính mờ sang trọng. Phần khung viền kim loại càng góp phần tạo nên diện mạo cứng cáp nhưng tinh tế với tính chính xác cao. Chính vì thế, khi cầm điện thoại samsung galaxy s21 5g trên tay sẽ tạo cho bạn cảm giác vô cùng chắc chắn.', 'Samsung Galaxy S21 hỗ trợ đầy đủ tính năng bảo mật sinh trắc học, bảo mật tối đa điện thoại của bạn ', '0'),
(11, 'Laptop Dell Latitude 7420', 'MASP5', 'Laptop', '13490000', 10, 'Laptop dell latitude 7420.jpg', 'Dell Latitude 7420 i5 sở hữu thiết kế đặc trưng của dòng Latitude với vỏ máy được làm bằng sợi Carbon cao cấp mang lại sự chắc chắn, bền bỉ, bảo vệ máy cực tốt trước những tác động từ bên ngoài như va chạm mạnh, trầy xước,... để bạn có thể an tâm sử dụng lâu dài ổn định.\r\nBên cạnh đó, máy Latitude 7420 i5 còn gây ấn tượng với phần vỏ màu xám thanh lịch, gam màu này không chỉ dễ phối với mọi môi trường cũng như mọi đối tượng sử dụng, mà còn giúp máy đem đến cảm giác “sạch mắt” và dễ vệ sinh. Logo Dell quen thuộc được mạ kẽm sáng bóng, khắc ngay vị trí trung tâm lưng máy cũng góp phần làm tăng tính thương hiệu và tăng thêm sự cao cấp cho sản phẩm.\r\nHơn nữa, Dell Latitude 7420 i5 còn mang đến khả năng tối ưu cho di chuyển với trọng lượng chỉ khoảng 1.3kg cực kỳ nhẹ so với kích thước màn hình chỉ 14 inch, giúp người dùng dễ dàng di chuyển hơn. Bạn hoàn toàn có thể dễ dàng bỏ máy vào balo, túi xách và mang máy theo bên người đi mọi nơi mà không lo cồng kềnh, nặng nhọc.', 'Dell Latitude 7420 i5 - Laptop doanh nhân siêu bền - Làm tốt mọi tác vụ phức tạp. Thiết kế sang trọng, lịch lãm, cực bền bỉ cùng sự mỏng nhẹ tối ưu cho việc di chuyển với cân nặng chỉ 1.3kg', '1'),
(12, 'Tai nghe Gaming Logitech G335 Trắng', 'MASP10', 'Tai nghe', '100000', 10, 'gaming logite.jpg', 'Âm thanh tuyệt vời. Với màng loa lớn 40mm, Logitech G335 mang tới cho bạn trải nghiệm âm thanh rõ ràng, trong trẻo giúp mọi cuộc chơi của bạn trở nên sống động hơn bao giờ hết. Chứng nhận chuyên game. Logitech G335 được chứng nhận từ discord - nền tảng phục vụ game thủ phổ biến hàng đầu thế giới, đảm bảo mang lại hiệu suất chơi game và giao tiếp trong game cùng đồng đội tuyệt vời hơn bao giờ hết.\r\nPhong cách trẻ trung năng động. Logitech G335 là một trong những dòng tai nghe máy tính có nhiều màu sắc, mỗi màu lại có dây quai đeo hai mặt sống động. Phần dây quai đeo có thể dễ dàng tháo ra thay thế và vệ sinh - để chúng trông luôn mới. ', 'Phong cách trẻ trung năng động, mỗi màu lại có dây quai đeo hai mặt sống động. Phần dây quai đeo có thể dễ dàng tháo ra thay thế và vệ sinh - để chúng trông luôn mới.', ''),
(13, 'Máy ảnh Canon EOS 80D Kit 18-55mm', 'MASP30', 'Máy ảnh', '910000', 2, 'Canon EOS 90D Kit.jpg', 'Được trang bị cảm biến CMOS kích cỡ APS-C 24.2 MP giúp chụp ảnh độ phân giải cao, chiếc máy ảnh Canon EOS 80D có kich cỡ thân máy dễ thao tác và ưu việt với độ che phủ của kính ngắm xấp xỉ 100%. Bộ cảm biến lấy nét nhạy với 45 điểm AF chữ thập mới được phát triển và tốc độ chụp hình liên tục ở mức 7.0 fps giúp chiếc máy ảnh này trở thành một lựa chọn tuyệt vời để chụp các vật thể động. Bên cạnh đó, Canon EOS 80D cũng hỗ trợ quay phim chất lượng cao Full HD 60p và được trang bị công nghệ Dual Pixel CMOS AF cải tiến giúp lấy nét tự động tốc độ cao trong chế độ Live View và tương thích với tất cả ống kính EF. Chụp ảnh từ xa và chia sẻ ảnh với các thiết bị thông minh chưa bao giờ dễ dàng đến thế bằng công nghệ Wi-Fi và NFC', 'Công nghệ Dual Pixel CMOS AF Cải tiến, Chụp hình Liên tục 7.0fps — Chụp Ảnh chỉ Bằng Một Thao tác Đơn giản', '1'),
(14, 'IPad 10 WiFi 64GB', 'MASP38', 'Máy tính bảng', '20000000', 3, 'IPad 10 WiFi.jpg', 'iPad 10 sẽ có một thiết kế khá quen thuộc khi được hoàn thiện với phần vật liệu chủ yếu là kim loại ở phần mặt lưng, các cạnh và hai mặt đều được vát phẳng để mang lại cái nhìn sang trọng. Đi kèm với đó là các góc được bo tròn giúp cho tổng thể máy tính bảng trở nên thanh thoát và hiện đại hơn thay vì vuông vức trông như một cuốn tập.\r\nVới iPad thế hệ thứ 10 thì nhà Apple mang đến cho chúng ta 4 phiên bản với các màu sắc như: Bạc, hồng, vàng và xanh. Trong đó các tone màu của năm nay được làm đậm hơn đôi chút so với những thế hệ trước đó, đây có thể xem là đặc điểm nhận dạng giúp người dùng phân biệt iPad 10 các đàn anh của mình.\r\nMẫu iPad này chỉ có độ mỏng khoảng 7 mm nên khi cầm trên tay thì máy mang lại cho chúng ta một cái nhìn sang trọng và mang tính thời thượng, điều này là dễ hiểu bởi hiện tại xu hướng thiết kế mỏng nhẹ và thanh lịch đang là mục tiêu mà hầu hết các nhà sản xuất công nghệ đang hướng đến.', 'Sau khi trình làng hàng loạt mẫu iPhone vào tháng 09/2022 thì Apple cũng đã tiếp tục giới thiệu series iPad mới cho năm 2022. Trong đó iPad 10 WiFi 64GB là cái tên được hãng chú trọng khá nhiều về việc tối ưu giá thành nhằm giúp người dùng có thể dễ dàng tiếp cận.', '1');

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
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bv`);

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
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bv` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_gh` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `sản_phẩm`
--
ALTER TABLE `sản_phẩm`
  MODIFY `id_sp` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
