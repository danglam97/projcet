-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 21, 2020 lúc 05:14 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `image`, `summary`, `description`, `type`, `position`, `status`, `url`, `is_active`, `user_id`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Săn hàng siêu rẻ: Smartphone giảm giá cả triệu đồng', 'san-hang-sieu-re-smartphone-giam-gia-ca-trieu-dong', 'uploads/article/1590291182_anh-bai-viet.png', '<p>Trong tầm gi&aacute; chỉ 3 triệu đồng, bạn lăn tăn kh&ocirc;ng biết liệu c&oacute; chiếc m&aacute;y t&iacute;nh bảng n&agrave;o đủ tốt để đ&aacute;p ứng được nhu cầu sử dụng h&agrave;ng ng&agrave;y của m&igrave;nh? Một số người m&aacute;ch bạn về những sản phẩm&nbsp;</p>', '<p>Săn h&agrave;ng si&ecirc;u rẻ: Smartphone giảm gi&aacute; cả triệu đồng</p>', 2, 1, NULL, NULL, 1, NULL, NULL, NULL, '2020-05-23 20:33:02', '2020-08-05 03:34:42'),
(4, 'Realme X3 SuperZoom: Smartphone khuynh đảo phân khúc tầm trung', 'realme-x3-superzoom-smartphone-khuynh-dao-phan-khuc-tam-trung', 'uploads/article/1590296430_realme-x3-super-zoom-mat-lung.jpg', '<p>iPhone 11 Pro Max hiện vẫn đang l&agrave; một trong những chiếc smartphone tốt nhất thế giới ở thời điểm hiện tại. Trong b&agrave;i viết n&agrave;y, m&igrave;nh sẽ chia sẻ cho c&aacute;c bạn một chiếc iPhone 11 Pro Max gi&aacute; rẻ m&agrave; nếu mua n&oacute;,&nbsp;</p>', '<h2><a href=\"https://didongthongminh.vn/ban-tin-cong-nghe/realme-x3-superzoom-smartphone-khuynh-dao-phan-khuc-tam-trung\">Realme X3 SuperZoom: Smartphone khuynh đảo ph&acirc;n kh&uacute;c tầm trung</a></h2>', 1, 0, NULL, NULL, 1, NULL, NULL, NULL, '2020-05-23 22:00:30', '2020-05-23 23:30:32'),
(5, 'Lời 7 triệu khi mua iPhone 11 Pro Max bản quốc tế này?', 'loi-7-trieu-khi-mua-iphone-11-pro-max-ban-quoc-te-nay', 'uploads/article/1590296459_iphone-11-pro-max-cu-mat-lung-3-1.png', '<p>Khi thị trường sản phẩm c&ocirc;ng nghệ trở n&ecirc;n b&atilde;o h&ograve;a, nhu cầu sở hữu smartphone của người d&ugrave;ng kh&ocirc;ng đơn thuần chỉ l&agrave; một thiết bị đ&aacute;p ứng tốt mục đ&iacute;ch sử dụng thường ng&agrave;y m&agrave; họ cần nhiều hơn thế.&nbsp;</p>', '<p>Khi thị trường sản phẩm c&ocirc;ng nghệ trở n&ecirc;n b&atilde;o h&ograve;a, nhu cầu sở hữu smartphone của người d&ugrave;ng kh&ocirc;ng đơn thuần chỉ l&agrave; một thiết bị đ&aacute;p ứng tốt mục đ&iacute;ch sử dụng thường ng&agrave;y m&agrave; họ cần nhiều hơn thế. Họ muốn sản phẩm điện thoại đ&oacute; phải tr&ocirc;ng sao thật bắt mắt, mức gi&aacute; sao cho thật dễ chịu v&agrave; điều quan trọng l&agrave; phải tạo được &ldquo;chất&rdquo; ri&ecirc;ng. Liệu smartphone n&agrave;o mới c&oacute; thể xuất sắc đ&aacute;p ứng ngần ấy y&ecirc;u cầu từ ph&iacute;a người d&ugrave;ng? C&acirc;u trả lời chỉ c&oacute; thể l&agrave; Realme X3 SuperZoom ch&iacute;nh h&atilde;ng m&agrave; th&ocirc;i. Dưới đ&acirc;y, b&agrave;i đ&aacute;nh gi&aacute; chi tiết sản phẩm của Di Động Th&ocirc;ng Minh sẽ gi&uacute;p bạn kh&aacute;m ph&aacute; những đặc trưng cấu h&igrave;nh nổi bật đ&oacute;.&nbsp;</p>\r\n\r\n<p><img alt=\"Realme X3 SuperZoom chính hãng\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/05/realme-x3-super-zoom-mat-lung.jpg\" /></p>\r\n\r\n<p><em>Đ&aacute;nh gi&aacute; Realme X3 SuperZoom: Smartphone khuynh đảo thị trường tầm trung&nbsp;</em></p>\r\n\r\n<h2><strong>Realme X3 SuperZoom: Smartphone khuynh đảo thị trường tầm trung&nbsp;</strong></h2>\r\n\r\n<p>Realme X3 SuperZoom &ndash; smartphone khuynh đảo thị trường tầm trung, chất kh&ocirc;ng thể chất hơn với trang bị camera tầm cỡ, khả năng si&ecirc;u Zoom, si&ecirc;u lấy n&eacute;t, nức l&ograve;ng người d&ugrave;ng. B&ecirc;n cạnh đ&oacute;, c&ograve;n rất nhiều điều th&uacute; vị g&oacute;p phần l&agrave;m n&ecirc;n một X3 SuperZoom huyền thoại vạn người m&ecirc;. Ch&uacute;ng ta c&ugrave;ng t&igrave;m hiểu ngay trong phần nội dung tiếp theo nh&eacute;!</p>\r\n\r\n<p><strong>Hệ thống camera si&ecirc;u zoom, si&ecirc;u lấy n&eacute;t đỉnh cao</strong></p>\r\n\r\n<p><img alt=\"Realme X3 SuperZoom chính hãng\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/05/realme-x3-super-zoom-camera.jpg\" /></p>\r\n\r\n<p><em>Realme x3 SuperZoom sở hữu 4 camera sau 64MP cực đỉnh</em></p>\r\n\r\n<p>Cuộc sống hiện đại cuốn con người v&agrave;o những đam m&ecirc; v&agrave; kh&aacute;t vọng mới. Sự ph&aacute;t triển kh&ocirc;ng ngừng của nền kinh tế thị trường n&acirc;ng cao đời sống mỗi người d&acirc;n to&agrave;n thế giới v&agrave; từ đ&oacute;, trải nghiệm hưởng thụ của người d&ugrave;ng cũng n&acirc;ng l&ecirc;n r&otilde; n&eacute;t. Với giới trẻ, họ đam m&ecirc; nghệ thuật v&agrave; s&aacute;ng tạo cao, do đ&oacute; lấy nguồn cảm hứng từ người d&ugrave;ng trẻ, Realme mang đến sự đầu tư thi&ecirc;n về camera tr&ecirc;n m&aacute;y. Trong đ&oacute;:</p>\r\n\r\n<ul>\r\n	<li>Camera selfie k&eacute;p: 32MP, 8MP</li>\r\n	<li>Bộ tứ camera sau: 64MP, 8MP, 8MP, 2MP</li>\r\n</ul>\r\n\r\n<p>X3 SuperZoom hội tụ đầy đủ tất cả những g&igrave; được coi l&agrave; vượt trội nhất, đỉnh cao nhất d&agrave;nh cho thiết kế camera tr&ecirc;n smartphone đương thời, về cả chất lượng v&agrave; số lượng. Trong đ&oacute;, camera selfie g&oacute;c rộng cho ph&eacute;p chụp ảnh tự sướng g&oacute;c h&igrave;nh rộng lớn, khung cảnh v&agrave; đối tượng ấn tượng. C&aacute;c ống k&iacute;nh tại mặt sau gồm: ống k&iacute;nh g&oacute;c rộng 119 độ, cảm biến ch&iacute;nh, camera macro v&agrave; camera tele dễ d&agrave;ng đ&aacute;p ứng mọi y&ecirc;u cầu chụp ảnh của người d&ugrave;ng. Kh&ocirc;ng những thế, m&aacute;y được trang bị t&iacute;nh năng si&ecirc;u lấy n&eacute;t, si&ecirc;u zoom, khả năng zoom quang 5x hứa hẹn những trải nghiệm th&uacute; vị, hỗ trợ tốt nhất cho người d&ugrave;ng.</p>\r\n\r\n<p><strong>Sức mạnh chip Snapdragon 855+ của nh&agrave; sản xuất Qualcomm lừng danh&nbsp;</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/05/snapdragon-855.jpg\" /></p>\r\n\r\n<p><em>Realme X3 SuperZoom trang bị chip Snapdragon 855+ lừng danh của Qualcomm</em></p>\r\n\r\n<p>Với vi xử l&yacute; trang bị tr&ecirc;n&nbsp;<a href=\"https://didongthongminh.vn/realme-x3-super-zoom-12gb-256gb-chinh-hang\"><em><strong>Realme X3 SuperZoom</strong></em></a>, c&acirc;u hỏi đặt ra l&agrave;: Tại sao kh&ocirc;ng l&agrave; Snapdragon 865 m&agrave; lại l&agrave; Snapdragon 855+? Tất nhi&ecirc;n, điều g&igrave; xảy ra cũng đều c&oacute; l&yacute; do của n&oacute;. Việc lựa chọn chip Snapdragon 855+ l&agrave; quyết định thể hiện sự kh&eacute;o l&eacute;o của Realme, vừa đảm bảo hiệu năng mạnh mẽ cho thiết bị, vừa c&oacute; thể giảm bớt chi ph&iacute; sản xuất ở mức thấp nhất, tạo điều kiện tốt nhất cho người d&ugrave;ng trong khoảng t&agrave;i ch&iacute;nh phải chăng để giấc mơ về smartphone cấu h&igrave;nh cao mức gi&aacute; phổ th&ocirc;ng trở th&agrave;nh hiện thực.&nbsp;</p>\r\n\r\n<p>So với Snapdragon 865, con chip mang số hiệu 855+ cấu tạo 8 nh&acirc;n n&agrave;y của Qualcomm kh&ocirc;ng hề l&eacute;p vế, n&oacute; được định h&igrave;nh l&agrave; chipset h&agrave;ng đầu d&agrave;nh ri&ecirc;ng cho d&ograve;ng flagship. Do đ&oacute;, sức mạnh hiệu năng n&oacute; mang đến tr&ecirc;n thực tế, khi được t&iacute;ch hợp c&ugrave;ng Adreno 640 (700 MHz), Android 10, Realme UI l&agrave; v&ocirc; song, khuynh đảo ph&acirc;n kh&uacute;c.&nbsp;</p>\r\n\r\n<h2>&nbsp;</h2>', 1, 2, NULL, NULL, 1, NULL, 'Lời 7 triệu khi mua iPhone 11 Pro Max bản quốc tế này?', 'Lời 7 triệu khi mua iPhone 11 Pro Max bản quốc tế này?', '2020-05-23 22:00:59', '2020-05-24 00:00:45'),
(6, 'Bến xe Nước Ngầm tiết lộ thông tin bất ngờ về bệnh nhân 620 nhiễm Covid-19', 'ben-xe-nuoc-ngam-tiet-lo-thong-tin-bat-ngo-ve-benh-nhan-620-nhiem-covid-19', 'uploads/article/1596603550_1596595299-66dfa8391670ba28306f1606c4a0065f.jpg', '<p>C&ocirc;ng ty CP Đầu tư ph&aacute;t triển ng&agrave;nh Nước v&agrave; M&ocirc;i trường - đơn vị chủ quản Bến xe&nbsp;Nước Ngầm vừa c&oacute; văn bản b&aacute;o c&aacute;o Sở GTVT H&agrave; Nội về việc xe chở bệnh nh&acirc;n Covid-19 tuyến Đ&agrave; Nẵng - H&agrave; Nội đến bến xe n&agrave;y.</p>', '<p><img alt=\"Bến xe Nước Ngầm tiết lộ thông tin bất ngờ về bệnh nhân 620 nhiễm Covid-19 - 1\" src=\"https://cdn.24h.com.vn/upload/3-2020/images/2020-08-05//1596595299-66dfa8391670ba28306f1606c4a0065f.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Bến xe Nước Ngầm đ&atilde; nhanh ch&oacute;ng cung cấp th&ocirc;ng tin li&ecirc;n quan đến tuyến xe kh&aacute;ch chở bệnh nh&acirc;n 620 nhiễm Covid-19 - Ảnh minh họa</p>\r\n\r\n<p>C&ocirc;ng ty CP Đầu tư ph&aacute;t triển ng&agrave;nh Nước v&agrave; M&ocirc;i trường - đơn vị chủ quản Bến xe&nbsp;Nước Ngầm vừa c&oacute; văn bản b&aacute;o c&aacute;o Sở GTVT H&agrave; Nội về việc xe chở bệnh nh&acirc;n Covid-19 tuyến Đ&agrave; Nẵng - H&agrave; Nội đến bến xe n&agrave;y.</p>\r\n\r\n<p>Văn bản cho biết, ng&agrave;y 27/7/2020 sau khi nhận được th&ocirc;ng tin từ 0h c&ugrave;ng ng&agrave;y thực hiện dừng to&agrave;n bộ phương tiện chở kh&aacute;ch xuất ph&aacute;t từ Đ&agrave; Nẵng để đề ph&ograve;ng l&acirc;y nhiễm Covid-19, C&ocirc;ng ty đ&atilde; chấp h&agrave;nh, chỉ đạo bến xe li&ecirc;n lạc ngay v&agrave; y&ecirc;u cầu c&aacute;c chủ xe kh&aacute;ch từ v&ugrave;ng dịch đang tr&ecirc;n đường đến BX. Nước Ngầm phải lập bảng k&ecirc; danh s&aacute;ch h&agrave;nh kh&aacute;ch nộp cho đại diện bến khi v&agrave;o bến.</p>\r\n\r\n<p>S&aacute;ng ng&agrave;y 28/7, bến xe ghi nhận c&oacute; 6 phương tiện xuất ph&aacute;t từ v&ugrave;ng dịch đến bến xe Nước Ngầm. Bến xe đ&atilde; nhận được 6 danh s&aacute;ch h&agrave;nh kh&aacute;ch của 6 xe n&agrave;y với tổng số 159 h&agrave;nh kh&aacute;ch.</p>\r\n\r\n<p>Cụ thể, xe BKS 43B-03126 (xe chở bệnh nh&acirc;n 620) chở 29 h&agrave;nh kh&aacute;ch v&agrave;o bến; xe 43B-04878 chở 35 h&agrave;nh kh&aacute;ch v&agrave;o bến; xe 43B-00405 chở 14 h&agrave;nh kh&aacute;ch v&agrave;o bến; xe 43B-02331 chở 47 h&agrave;nh kh&aacute;ch v&agrave;o bến; xe 43B-04894 chở 15 h&agrave;nh kh&aacute;ch v&agrave;o bến; xe 43B-05395 chở 19 h&agrave;nh kh&aacute;ch v&agrave;o bến. C&ocirc;ng ty đ&atilde; th&ocirc;ng tin v&agrave; sao lưu gửi danh s&aacute;ch h&agrave;nh kh&aacute;ch tr&ecirc;n gửi đến c&aacute;c đơn vị c&oacute; li&ecirc;n quan.</p>\r\n\r\n<p>&ldquo;Tuy nhi&ecirc;n, với h&agrave;nh kh&aacute;ch đi tr&ecirc;n xe BKS 43B-03126 được x&aacute;c định l&agrave; bệnh nh&acirc;n nhiễm Covid-19 số 620, trong danh s&aacute;ch nh&agrave; xe gửi bến xe kh&ocirc;ng c&oacute; t&ecirc;n bệnh nh&acirc;n n&agrave;y tại thời điểm xe v&agrave;o bến&rdquo;, văn bản n&ecirc;u r&otilde;.</p>\r\n\r\n<p>Đại diện BX. Nước Ngầm cũng cho biết, sau thời điểm dừng c&aacute;c phương tiện chở kh&aacute;ch xuất ph&aacute;t từ Đ&agrave; Nẵng (28/7) đến nay, kh&ocirc;ng c&oacute; xe kh&aacute;ch từ v&ugrave;ng dịch v&agrave;o bến xe Nước Ngầm.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, theo đại diện BX. Nước Ngầm, hiện h&agrave;ng ng&agrave;y vẫn c&oacute; một số phương tiện xe tải từ Đ&agrave; Nẵng v&agrave;o giao nhận h&agrave;ng h&oacute;a trong phạm vi bến xe quản l&yacute;. Để ph&ograve;ng dịch l&acirc;y lan, c&ocirc;ng ty đ&atilde; chỉ đạo bến xe đặc biệt lưu &yacute; việc chấp h&agrave;nh quy định ph&ograve;ng dịch đối với l&aacute;i, phụ xe tải n&agrave;y v&agrave; những người li&ecirc;n quan.</p>\r\n\r\n<p>&ldquo;C&ocirc;ng ty nhận thấy rằng, đ&acirc;y l&agrave; kẽ hở trong c&ocirc;ng t&aacute;c ph&ograve;ng, chống dịch, do vậy đề nghị cơ quan chức năng cần sớm c&oacute; giải ph&aacute;p kiểm so&aacute;t l&aacute;i, phụ xe tải trước khi ra khỏi v&ugrave;ng dịch&rdquo;, cơ quan chủ quản BX. Nước Ngầm kiến nghị.</p>\r\n\r\n<p>Trước đ&oacute;, tối 2/8, Bộ Y tế c&ocirc;ng bố một loạt ca bệnh Covid-19 mới, trong đ&oacute; bệnh nh&acirc;n 620, nữ, 44 tuổi, ở Phủ L&yacute;, H&agrave; Nam.</p>\r\n\r\n<p>Theo th&ocirc;ng tin c&ocirc;ng bố, ng&agrave;y 8/7, bệnh nh&acirc;n đi xe kh&aacute;ch từ H&agrave; Nam v&agrave;o Đ&agrave; Nẵng, đến ở phường H&ograve;a Ph&aacute;t, Cẩm Lệ. Những ng&agrave;y sau đ&oacute;, được em chồng chở đi một số nơi tham quan tại Đ&agrave; Nẵng v&agrave; t&igrave;m việc l&agrave;m. Ng&agrave;y 14/7, bệnh nh&acirc;n 620 bắt đầu đi l&agrave;m tại qu&aacute;n ăn tr&ecirc;n đường 30/4.</p>\r\n\r\n<p>Trưa 27/7, khi Đ&agrave; Nẵng c&oacute; dịch, người n&agrave;y đi xe kh&aacute;ch về qu&ecirc;, đến 7h30 ng&agrave;y 28/7 th&igrave; c&oacute; mặt tại qu&ecirc; ở th&ocirc;n Đ&igrave;nh Tr&agrave;ng, phường Lam Hạ (H&agrave; Nam) v&agrave; l&ecirc;n trạm y tế khai b&aacute;o.</p>\r\n\r\n<p>Ng&agrave;y 31/7, bệnh nh&acirc;n v&agrave;o Bệnh viện Đa khoa tỉnh kh&aacute;m trong t&igrave;nh trạng sốt, ho, kh&oacute; thở v&agrave; được s&agrave;ng lọc, c&aacute;ch ly y tế, lấy mẫu bệnh phẩm x&eacute;t nghiệm. Hiện tại, sức khỏe bệnh nh&acirc;n ổn định. Ban chỉ đạo ph&ograve;ng chống Covid-19 tỉnh H&agrave; Nam đ&atilde; triển khai c&aacute;c biện ph&aacute;p khoanh v&ugrave;ng, dập dịch.</p>', 1, 2, NULL, 'https://www.24h.com.vn/tin-tuc-trong-ngay/bx-nuoc-ngam-tiet-lo-thong-tin-bat-ngo-ve-benh-nhan-620-nhiem-covid-19-c46a1171254.html', 1, NULL, NULL, NULL, '2020-08-04 21:59:10', '2020-08-05 03:44:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` int(10) UNSIGNED DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `image`, `url`, `target`, `description`, `type`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(22, 'Samsung S10+', 'samsung-s10', 'uploads/banner/1598405185_800-300-800x300-27.png', NULL, 1, '<p>da</p>', 1, 1, 1, '2020-08-25 18:26:25', '2020-08-25 18:26:25'),
(23, 'LÊN ĐỜI NOTE 10 - NOTE 10 Plus', 'len-doi-note-10-note-10-plus', 'uploads/banner/1598405208_800-300-800x300-28.png', NULL, 1, '<p>ad</p>', 1, 2, 1, '2020-08-25 18:26:48', '2020-08-25 18:26:48'),
(24, 'JBL T600BTNC GIÁ ĐỘC QUYỀN', 'jbl-t600btnc-gia-doc-quyen', 'uploads/banner/1598405224_800-300-800x300-31.png', NULL, 1, '<p>da</p>', 1, 3, 1, '2020-08-25 18:27:04', '2020-08-25 18:27:04'),
(25, 'Samsung S10plus', 'samsung-s10plus', 'uploads/banner/1598405262_reno4-chung-800-300-800x300-1.png', NULL, 1, '<p>da</p>', 1, 1, 1, '2020-08-25 18:27:42', '2020-08-25 19:27:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `website`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Samsung', 'samsung', 'uploads/brand/1597744635_samsung.png', 'https://www.samsung.com/vn/', 1, 1, '2020-03-04 06:47:49', '2020-08-18 02:57:15'),
(6, 'Apple', 'apple', 'uploads/brand/1597744626_Untitled-1.png', 'apple.com', 1, 1, '2020-03-05 05:00:48', '2020-08-18 02:57:06'),
(7, 'Xiaomi', 'xiaomi', 'uploads/brand/1597744616_xiaomi.PNG', 'https://www.mi.com/global', 3, 1, '2020-03-22 20:57:00', '2020-08-18 02:56:56'),
(9, 'Oppo', 'oppo', 'uploads/brand/1597744479_oppo.png', 'https://www.oppo.com/vn/', 5, 1, '2020-03-22 20:58:58', '2020-08-18 02:54:39'),
(10, 'HUAWEI', 'huawei', 'uploads/brand/1597744523_huawei.PNG', 'https://www.sony.com/', 6, 1, '2020-03-22 21:00:29', '2020-08-18 02:55:23'),
(17, 'NOKIA', 'nokia', 'uploads/brand/1597746466_nokia.PNG', 'https://www.nokia.com/vi_vn/', 2, 1, '2020-08-18 03:27:46', '2020-08-18 03:27:46'),
(18, 'Realme', 'realme', 'uploads/brand/1597746851_realme.PNG', 'https://www.realme.com/vn/', 4, 1, '2020-08-18 03:34:11', '2020-08-18 03:35:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `Type` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `parent_id`, `position`, `is_active`, `Type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', 'dien-thoai', '', 0, 1, 1, 1, 0, '2020-03-22 20:17:22', '2020-09-14 00:36:09'),
(3, 'Phụ kiện', 'phu-kien', NULL, 0, 3, 1, 1, 0, '2020-03-22 20:17:53', '2020-08-11 18:55:01'),
(4, 'Laptop', 'laptop', NULL, 0, 3, 1, 1, 0, '2020-03-22 20:18:00', '2020-08-11 18:42:25'),
(6, 'Đồng hồ', 'dong-ho', NULL, 0, 2, 1, 1, 0, '2020-03-22 20:18:33', '2020-08-11 18:42:02'),
(7, 'Apple', 'apple', NULL, 1, 11, 1, 0, 0, '2020-03-22 20:20:33', '2020-03-22 20:20:33'),
(8, 'Samsung', 'samsung', NULL, 1, 12, 1, 0, 0, '2020-03-22 20:20:43', '2020-03-22 20:20:43'),
(9, 'Oppo', 'oppo', NULL, 1, 13, 1, 0, 0, '2020-03-22 20:20:53', '2020-03-22 20:20:53'),
(11, 'Vsmart', 'vsmart', NULL, 1, 15, 1, 0, 0, '2020-03-22 20:22:15', '2020-03-22 20:22:15'),
(12, 'Apple Watch', 'apple-watch', NULL, 6, 61, 1, 0, 0, '2020-03-22 20:28:57', '2020-03-22 20:28:57'),
(13, 'Xiaomi', 'xiaomi', NULL, 6, 62, 1, 0, 0, '2020-03-22 20:29:10', '2020-03-22 20:29:10'),
(14, 'Samsung Watch', 'samsung-watch', NULL, 6, 63, 1, 0, 0, '2020-03-22 20:29:39', '2020-03-22 20:29:39'),
(15, 'Macbook', 'macbook', NULL, 4, 41, 1, 0, 0, '2020-03-22 20:30:59', '2020-03-22 20:30:59'),
(16, 'Asus', 'asus', NULL, 4, 42, 1, 0, 0, '2020-03-22 20:31:15', '2020-03-22 20:31:15'),
(17, 'Dell', 'dell', NULL, 4, 43, 1, 0, 0, '2020-03-22 20:31:26', '2020-03-22 20:31:26'),
(18, 'Lenovo', 'lenovo', NULL, 4, 44, 1, 0, 0, '2020-03-22 20:32:00', '2020-03-22 20:32:00'),
(19, 'Loa', 'loa', NULL, 3, 51, 1, 1, 0, '2020-03-22 20:32:31', '2020-08-07 19:32:13'),
(20, 'Tai nghe', 'tai-nghe', NULL, 3, 52, 1, 1, 0, '2020-03-22 20:32:42', '2020-08-07 19:32:04'),
(54, 'Tin Tức', 'tin-tuc', NULL, 0, 7, 0, 2, 0, '2020-08-04 00:13:52', '2020-09-08 01:58:47'),
(56, 'Tin Công Nghệ', 'tin-cong-nghe', NULL, 54, 1, 1, 2, 0, '2020-08-04 04:58:32', '2020-08-04 04:58:50'),
(57, 'Tin Khuyến Mại', 'tin-khuyen-mai', NULL, 54, 2, 1, 1, 0, '2020-08-04 04:59:40', '2020-08-04 04:59:40'),
(58, 'Sạc Pin Dự Phòng', 'sac-pin-du-phong', NULL, 3, 3, 1, 1, 4, '2020-08-07 19:39:11', '2020-09-18 05:40:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `content`, `created_at`, `updated_at`) VALUES
(10, 'Khuất Văn Chung', '0123456', 'chung@mail.com', 'tôi muốn thuê web của bạn quảng cáo', '2020-08-05 02:18:29', '2020-08-05 02:18:29'),
(11, 'Phương Hồng', '1234456790', 'hong@gmail.com', 'áđá', '2020-08-05 02:44:50', '2020-08-05 02:44:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `percent`, `created_at`, `updated_at`) VALUES
(1, 'SHOP-KM1', 1, 50000, NULL, '2020-05-19 16:50:32', '2020-05-19 16:50:32'),
(2, 'SHOP-K2', 2, NULL, 50, '2020-05-19 16:52:27', '2020-05-19 16:52:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT 0,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `total` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT 0,
  `order_status_id` int(11) DEFAULT 0,
  `payment_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `code`, `fullname`, `email`, `address`, `address2`, `phone`, `discount`, `note`, `coupon`, `total`, `user_id`, `order_status_id`, `payment_id`, `created_at`, `updated_at`) VALUES
(130, 'DH-130-01092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'ad', NULL, 320000, 0, 1, 0, '2020-09-01 05:17:44', '2020-09-01 05:17:44'),
(131, 'DH-131-01092020', 'Hảo hảo', 'danglam932@gmail.com', 'áđá', NULL, '123456789', 0, 'da', NULL, 3000, 0, 1, 0, '2020-09-01 05:27:31', '2020-09-01 05:27:31'),
(132, 'DH-132-03092020', 'Hảo hảo', 'trdoan2491999@gmail.com', 'áđá', NULL, '123456789', 0, 'da', NULL, 24000, 0, 1, 0, '2020-09-03 01:58:30', '2020-09-03 01:58:30'),
(133, 'DH-133-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'áđá', NULL, 7990000, 0, 1, 0, '2020-09-10 21:00:50', '2020-09-10 21:00:50'),
(134, 'DH-134-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'đá', NULL, 3000, 0, 1, 0, '2020-09-10 21:03:17', '2020-09-10 21:03:17'),
(135, 'DH-135-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'ád', NULL, 7990000, 0, 1, 0, '2020-09-11 06:33:22', '2020-09-11 06:33:22'),
(136, 'DH-136-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'áđa', NULL, 7990000, 0, 1, 0, '2020-09-11 06:33:47', '2020-09-11 06:33:47'),
(137, 'DH-137-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'ađa', NULL, 25099000, 0, 1, 0, '2020-09-11 06:42:53', '2020-09-11 06:42:53'),
(138, 'DH-138-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'ađa', NULL, 7990000, 0, 1, 0, '2020-09-11 06:46:41', '2020-09-11 06:46:41'),
(139, 'DH-139-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'dâddddd', NULL, 7990000, 0, 1, 0, '2020-09-11 06:47:26', '2020-09-11 06:47:27'),
(140, 'DH-140-11092020', 'Hảo hảo', '1611062014@hunre.edu.vn', 'áđá', NULL, '123456789', 0, 'áđa', NULL, 7990000, 0, 1, 0, '2020-09-11 06:48:53', '2020-09-11 06:48:53'),
(141, 'DH-141-11092020', 'Hảo hảo', 'danglam932@gmail.com', 'áđá', NULL, '123456789', 0, 'ađa', NULL, 7993000, 0, 1, 0, '2020-09-11 06:52:33', '2020-09-11 06:52:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `name`, `image`, `sku`, `user_id`, `order_id`, `product_id`, `price`, `qty`) VALUES
(52, 'Thẻ nhớ MicroSD 32 GB Lexar class 10 UHS-I', 'uploads/product/1586668015_the-nho-microsd-32gb-lexar-class-10-uhs-i-5-400x400.jpg', NULL, 0, 130, 55, 320000, 1),
(53, 'Samsung Galaxy S10 Lite', 'uploads/product/1597827871_samsung-galaxy-s10-lite-blue-chi-tiet-400x460.png', NULL, 0, 131, 59, 3000, 1),
(54, 'Samsung Galaxy S10 Lite', 'uploads/product/1597827871_samsung-galaxy-s10-lite-blue-chi-tiet-400x460.png', NULL, 0, 132, 59, 24000, 8),
(55, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 133, 30, 7990000, 1),
(56, 'Samsung Galaxy S10 Lite', 'uploads/product/1597827871_samsung-galaxy-s10-lite-blue-chi-tiet-400x460.png', NULL, 0, 134, 59, 3000, 1),
(57, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 135, 30, 7990000, 1),
(58, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 136, 30, 7990000, 1),
(59, 'Samsung Galaxy S20 Ultra', 'uploads/product/1584948393_600_samsung-galaxy-s20-ultra-5g.jpg', NULL, 0, 137, 26, 25099000, 1),
(60, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 138, 30, 7990000, 1),
(61, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 139, 30, 7990000, 1),
(62, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 140, 30, 7990000, 1),
(63, 'Samsung Galaxy S10 Lite', 'uploads/product/1597827871_samsung-galaxy-s10-lite-blue-chi-tiet-400x460.png', NULL, 0, 141, 59, 3000, 1),
(64, 'Iphone 7 Plus 32GB - NEW', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', NULL, 0, 141, 30, 7990000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Mới'),
(2, 'Đang Xử Lý'),
(3, 'Hoàn Thành'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `sale` int(11) NOT NULL DEFAULT 0,
  `position` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_hot` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `memory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(11) NOT NULL DEFAULT 0,
  `vendor_id` int(11) NOT NULL DEFAULT 0,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `total_rating` int(11) NOT NULL,
  `total_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `stock`, `price`, `sale`, `position`, `is_active`, `is_hot`, `views`, `category_id`, `url`, `sku`, `country`, `warranty`, `color`, `memory`, `brand_id`, `vendor_id`, `summary`, `description`, `meta_title`, `meta_description`, `user_id`, `total_rating`, `total_number`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 11 128GB Chính hãng (VN/A)', 'iphone-11-128gb-chinh-hang-vna', 'uploads/product/1584936264_iphone11-purple-select-2019.png', 10, 10000, 0, 1, 1, 1, 0, 7, NULL, NULL, NULL, 0, NULL, NULL, 6, 4, NULL, NULL, NULL, NULL, 0, 5, 1, '2020-03-22 21:04:24', '2020-08-31 03:45:06'),
(2, 'Iphone 11 Pro Max 512GB Chính hãng (VN/A)', 'iphone-11-pro-max-512gb-chinh-hang-vna', 'uploads/product/1584936455_iphone-11-pro-max-gold-select-2019.jpg', 0, 43990000, 0, 1, 1, 1, 0, 7, NULL, NULL, NULL, 0, NULL, NULL, 6, 4, '<ul>\r\n	<li>M&agrave;n h&igrave;nh :5.8 inchs, Super Retina XDR, 1125 x 2436 Pixels</li>\r\n	<li>Camera trước :12.0 MP</li>\r\n	<li>Camera sau :Triple 12MP Ultra Wide, Wide and Telephoto cameras</li>\r\n	<li>RAM :4 GB</li>\r\n	<li>Bộ nhớ trong :64 GB</li>\r\n	<li>CPU :Apple A13 Bionic, 6, Đang cập nhật</li>\r\n	<li>GPU :Apple GPU 4 nh&acirc;n</li>\r\n	<li>Dung lượng pin :L&acirc;u hơn iPhone Xs 4h</li>\r\n	<li>Hệ điều h&agrave;nh :iOS 13</li>\r\n	<li>Thẻ SIM :eSIM v&agrave; NanoSIM, 1 Sim</li>\r\n	<li>Xuất xứ :Trung Quốc</li>\r\n	<li>Năm sản xuất :2019</li>\r\n</ul>', NULL, NULL, NULL, 0, 2, 8, '2020-03-22 21:07:35', '2020-08-31 03:48:03'),
(3, 'Iphone 11 256GB Chính hãng (VN/A)', 'iphone-11-256gb-chinh-hang-vna', 'uploads/product/1584936584_iphone11-red-select-2019.jpg', 15, 25990000, 0, 3, 1, 1, 0, 7, NULL, NULL, NULL, 0, NULL, NULL, 6, 4, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 21:09:44', '2020-08-10 05:52:11'),
(4, 'Iphone 11 Pro 256GB Chính hãng (VN/A)', 'iphone-11-pro-256gb-chinh-hang-vna', 'uploads/product/1584936656_iphone-11-pro-max-space-select-2019.jpg', 30, 34990000, 31990000, 4, 1, 1, 0, 1, NULL, NULL, NULL, 0, NULL, NULL, 6, 4, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 21:10:56', '2020-08-10 03:04:40'),
(5, 'Samsung Galaxy S20+ (Plus)', 'samsung-galaxy-s20-plus', 'uploads/product/1584936729_ss-20-plus-6.jpg', 50, 23990000, 19990000, 5, 1, 1, 0, 8, NULL, NULL, NULL, 0, NULL, NULL, 5, 4, NULL, NULL, NULL, NULL, 0, 3, 10, '2020-03-22 21:12:09', '2020-08-30 20:40:04'),
(6, 'Iphone X 64GB Chính hãng (VN/A)', 'iphone-x-64gb-chinh-hang-vna', 'uploads/product/1584936812_iphone_x_64gb.jpg', 25, 19500000, 16990000, 6, 1, 1, 0, 8, NULL, NULL, NULL, 0, NULL, NULL, 6, 5, NULL, NULL, NULL, NULL, 0, 10, 5, '2020-03-22 21:13:32', '2020-08-31 01:46:34'),
(7, 'Iphone Xs Max 256GB Chính hãng (VN/A)', 'iphone-xs-max-256gb-chinh-hang-vna', 'uploads/product/1584936905_iphone_xs_max_256gb.jpg', 22, 19990000, 17499000, 7, 1, 1, 0, 1, 'https://didongviet.vn/iphone-xs-xs-max', NULL, NULL, 0, NULL, NULL, 6, 5, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 21:15:05', '2020-03-22 21:15:05'),
(8, 'Samsung Galaxy A71', 'samsung-galaxy-a71', 'uploads/product/1584946189_600_samsung-galaxy-a71_1_1.jpg', 29, 10490000, 9490000, 8, 1, 1, 0, 1, 'https://fptshop.com.vn/dien-thoai/samsung-galaxy-a71', NULL, NULL, 0, NULL, NULL, 5, 8, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 23:49:49', '2020-03-22 23:49:49'),
(9, 'Iphone Xr 64GB', 'iphone-xr-64gb', 'uploads/product/1584946258_iphone_xr_64gb.jpg', 13, 16990000, 15990000, 9, 1, 0, 0, 1, 'https://fptshop.com.vn/dien-thoai/iphone-xr-64gb', NULL, NULL, 0, NULL, NULL, 6, 8, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 23:50:58', '2020-03-22 23:50:58'),
(10, 'Vsmart Active 3 6GB-64GB', 'vsmart-active-3-6gb-64gb', 'uploads/product/1584946508_Vsmart-active-3-black-1.jfif', 5, 4490000, 3990000, 10, 1, 1, 0, 1, 'https://fptshop.com.vn/dien-thoai/vsmart-active-3-6gb-64gb', NULL, NULL, 0, NULL, NULL, 13, 8, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 23:55:08', '2020-03-22 23:55:08'),
(11, 'Xiaomi Mi Note 10 Pro', 'xiaomi-mi-note-10-pro', 'uploads/product/1584946581_xiaomi-mi-note-10-pro-black-400x460.png', 7, 14990000, 13990000, 11, 1, 0, 0, 1, 'https://www.thegioididong.com/dtdd/xiaomi-mi-note-10-pro', NULL, NULL, 0, NULL, NULL, 7, 6, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 23:56:21', '2020-03-22 23:56:21'),
(12, 'Oppo Reno 2F', 'oppo-reno-2f', 'uploads/product/1584946658_oppo-reno2-f-400x460.png', 10, 8990000, 7990000, 12, 1, 0, 0, 1, 'https://www.thegioididong.com/dtdd/oppo-reno2-f', NULL, NULL, 0, NULL, NULL, 9, 6, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-22 23:57:38', '2020-03-22 23:57:38'),
(13, 'Macbook Pro 16 inch 2019 (MVVJ2/ MVVL2) – Core i7/ 16Gb/ 512GB – NEW', 'macbook-pro-16-inch-2019-mvvj2-mvvl2-core-i7-16gb-512gb-new', 'uploads/product/1584947146_macpro16_2019.jfif', 5, 57500000, 57500000, 13, 1, 1, 0, 15, NULL, NULL, NULL, 0, NULL, NULL, 6, 0, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:05:46', '2020-08-12 00:01:57'),
(14, 'iMac 2019 27 inch Retina 5K MRR12 – New (Full VAT)', 'imac-2019-27-inch-retina-5k-mrr12-new-full-vat', 'uploads/product/1584947228_imac27inch2019.jfif', 2, 57990000, 57990000, 14, 1, 1, 0, 15, NULL, 'kajima0420', NULL, 0, NULL, NULL, 6, 0, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:07:08', '2020-08-12 00:02:15'),
(15, 'Apple Watch Series 5 GPS (Nhôm/40mm) – New', 'apple-watch-series-5-gps-nhom40mm-new', 'uploads/product/1584947328_apple_watch_series_5.jpg', 28, 10490000, 10790000, 15, 1, 1, 0, 6, 'https://macone.vn/apple-watch-series-5-gps-nhom-40mm-new/', NULL, NULL, 0, NULL, NULL, 6, 9, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:08:48', '2020-03-23 00:08:48'),
(16, 'Apple Watch Series 5 GPS + Cellular ( Thép/40mm/Sport )', 'apple-watch-series-5-gps-cellular-thep40mmsport', 'uploads/product/1584947401_apple_watch_series_5_gps_celluar.jpg', 15, 19500000, 18990000, 16, 1, 1, 0, 6, NULL, NULL, NULL, 0, NULL, NULL, 6, 9, NULL, NULL, NULL, NULL, 0, 0, 5, '2020-03-23 00:10:01', '2020-08-31 02:27:22'),
(17, 'Apple Watch Series 3 GPS (Nhôm/38mm) – New', 'apple-watch-series-3-gps-nhom38mm-new', 'uploads/product/1586667523_apple-watch-3-phien-ban-38-mm-400x400.jpg', 1, 6300000, 5490000, 17, 1, 1, 0, 6, NULL, NULL, NULL, 0, NULL, NULL, 6, 0, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:11:04', '2020-08-07 19:54:00'),
(18, 'Macbook Air 13 inch 2019 – Core i5 128GB 8GB RAM – NEW', 'macbook-air-13-inch-2019-core-i5-128gb-8gb-ram-new', 'uploads/product/1584947569_mac_air_2019.jpg', 6, 26790000, 26490000, 18, 1, 1, 0, 18, NULL, 'sdtpcmt', NULL, 0, NULL, NULL, 6, 0, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:12:49', '2020-08-11 20:25:49'),
(19, 'Samsung Galaxy Watch 42mm', 'samsung-galaxy-watch-42mm', 'uploads/product/1584947672_dong-ho-thong-minh-samsung-galaxy-watch-42mm-20-20-600x600.jpg', 2, 6990000, 6990000, 19, 1, 1, 0, 6, NULL, '0', NULL, 0, NULL, NULL, 5, 6, NULL, NULL, NULL, NULL, 0, 5, 5, '2020-03-23 00:14:32', '2020-08-31 02:01:48'),
(20, 'Mi Band 4', 'mi-band-4', 'uploads/product/1584947723_mi-band-4-6-600x600.jpg', 5, 850000, 750000, 20, 1, 1, 0, 6, NULL, NULL, NULL, 0, NULL, NULL, 7, 6, NULL, NULL, NULL, NULL, 0, 10, 0, '2020-03-23 00:15:23', '2020-08-31 01:55:49'),
(21, 'Apple AirPods 2 VN/A', 'apple-airpods-2-vna', 'uploads/product/1584947820_apple airpods 2.jpg', 30, 5900000, 3650000, 21, 1, 1, 0, 20, NULL, NULL, NULL, 0, NULL, NULL, 6, 4, NULL, NULL, NULL, NULL, 4, 0, 0, '2020-03-23 00:17:00', '2020-09-18 18:57:35'),
(22, 'Airpods Pro', 'airpods-pro', 'uploads/product/1584947890_637094271123296138_HASP-00629662-1.jfif', 50, 7390000, 7390000, 22, 1, 1, 0, 20, 'https://fptshop.com.vn/phu-kien/apple-tai-nghe-airpods-pro', NULL, NULL, 0, NULL, NULL, 6, 8, NULL, NULL, NULL, NULL, 0, 4, 0, '2020-03-23 00:18:10', '2020-08-31 01:44:08'),
(23, 'Galaxy Buds', 'galaxy-buds', 'uploads/product/1584947979_galaxy buds.jpg', 10, 4490000, 2390000, 23, 1, 1, 0, 20, NULL, NULL, NULL, 0, NULL, NULL, 5, 4, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:19:39', '2020-08-07 19:50:19'),
(24, 'LAPTOP DELL INSPRION 7591 KJ2G41(I7 9750H 8GB / 256GB SSD/15.6FHD / VGA 3GB / Win 10 / Bạc)', 'laptop-dell-insprion-7591-kj2g41i7-9750h-8gb-256gb-ssd156fhd-vga-3gb-win-10-bac', 'uploads/product/1584948108_30089_laptop_dell_inspiron_15_7591_kj2g41_1.jpg', 10, 29990000, 2890000, 24, 1, 1, 0, 4, 'https://cellphones.com.vn/laptop-dell-insprion-7591-kj2g41-core-i7-9750h-ram-8gb-ssd-256gb-15-6inch-fhd-vga-3gb.html', NULL, NULL, 0, NULL, NULL, 8, 4, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:21:48', '2020-03-23 00:21:48'),
(25, 'Headphones chống ồn Sony WH-1000XM3', 'headphones-chong-on-sony-wh-1000xm3', 'uploads/product/1584948293_2068_tai_nghe_bluetooth_sony_wh_1000xm3__1__1_1.jpg', 5, 8490000, 6490000, 25, 1, 1, 0, 20, NULL, '0', NULL, 0, NULL, NULL, 10, 4, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:24:53', '2020-08-07 19:49:54'),
(26, 'Samsung Galaxy S20 Ultra', 'samsung-galaxy-s20-ultra', 'uploads/product/1584948393_600_samsung-galaxy-s20-ultra-5g.jpg', 35, 29990000, 25099000, 26, 1, 1, 0, 1, 'https://cellphones.com.vn/samsung-galaxy-s20-ultra.html?gclid=CjwKCAjwvOHzBRBoEiwA48i6ApklPr0_OfD-XUHmI6USZ7UdLMH2PMvZrHPgb4XFBPUCnH1SlnIiqxoCf3AQAvD_BwE', NULL, NULL, 0, NULL, NULL, 5, 4, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:26:33', '2020-03-23 00:26:33'),
(27, 'Asus Zenbook UX333FA-A4011T/Core i5-8265U', 'asus-zenbook-ux333fa-a4011tcore-i5-8265u', 'uploads/product/1584948463_637020003765248380_asus-zenbook-flip-um462da-bac-2.png', 3, 21990000, 20990000, 27, 1, 0, 0, 4, 'https://fptshop.com.vn/may-tinh-xach-tay/asus-zenbook-ux333fa-a4011t-core-i5-8265u?utm_source=masoffer&traffic_id=5e7583cf9ff3670041555447&', NULL, NULL, 0, NULL, NULL, 12, 8, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:27:43', '2020-03-23 00:27:43'),
(29, 'Tai Nghe Gaming Logitech G Pro (Gen 2) – Hàng Chính Hãng', 'tai-nghe-gaming-logitech-g-pro-gen-2-hang-chinh-hang', 'uploads/product/1584948978_a0abb6e8532b674d4bf4847b1e0819c1.png', 2, 2890000, 1990000, 29, 1, 1, 0, 20, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 0, '2020-03-23 00:35:43', '2020-08-07 19:50:33'),
(30, 'Iphone 7 Plus 32GB - NEW', 'iphone-7-plus-32gb-new', 'uploads/product/1584949065_iphone-7-plus-gold-400x460-400x460.png', 1, 8990000, 7990000, 30, 1, 0, 0, 1, NULL, NULL, NULL, 0, NULL, NULL, 6, 6, '<p>Đặc điểm nổi bật của iPhone 7 32GB T&igrave;m hiểu th&ecirc;m Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, S&aacute;ch hướng dẫn, C&aacute;p, C&acirc;y lấy sim iPhone 7 32GB vẫn mang tr&ecirc;n m&igrave;nh thiết kế quen thuộc của từ thời iPhone 6 nhưng c&oacute; nhiều thay đổi lớn về phần cứng, d&agrave;n loa stereo v&agrave; cấu h&igrave;nh cực mạnh.</p>', '<h2>vẫn mang tr&ecirc;n m&igrave;nh thiết kế quen thuộc của từ thời&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-6-32gb-gold\" target=\"_blank\">iPhone 6</a>&nbsp;nhưng c&oacute; nhiều thay đổi lớn về phần cứng, d&agrave;n loa stereo v&agrave; cấu h&igrave;nh cực mạnh.</h2>\r\n\r\n<h3>Camera trước tăng l&ecirc;n 7 MP</h3>\r\n\r\n<p>Một sự cải thiện đ&aacute;ng kể so với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-6s-32gb\" target=\"_blank\">iPhone 6s</a>&nbsp;trước đ&oacute;, những tấm ảnh chụp selfie của bạn c&agrave;ng th&ecirc;m độ chi tiết v&agrave; sắc n&eacute;t.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-12.jpg\" onclick=\"return false;\"><img alt=\"Nâng câp camera trên điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-12.jpg\" /></a></p>\r\n\r\n<p>Bộ nhớ trong của m&aacute;y cũng được n&acirc;ng cấp l&ecirc;n 32 GB gi&uacute;p bạn thoải m&aacute;i chụp v&agrave; lưu trữ ảnh m&agrave; kh&ocirc;ng lo hết dung lượng để lưu.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-2.jpg\" onclick=\"return false;\"><img alt=\"Ảnh chụp từ camera sau của điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-2.jpg\" /></a></p>\r\n\r\n<p>C&ugrave;ng với đ&oacute; l&agrave; t&iacute;nh năng chụp Retina Flash gi&uacute;p bạn chụp ảnh tốt hơn ở điều kiện thiếu s&aacute;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-1.jpg\" onclick=\"return false;\"><img alt=\"Ảnh chụp từ camera sau của điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-1.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i ra, camera ph&iacute;a sau của&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\">điện thoại iPhone</a>&nbsp;n&agrave;y&nbsp;đ&atilde; được thiết kế gọn g&agrave;ng với đường bo mềm mại hơn, hạn chế tối đa trầy xước cho ống k&iacute;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-15.jpg\" onclick=\"return false;\"><img alt=\"Thiết kế camera trên điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-15.jpg\" /></a></p>\r\n\r\n<h3>&Acirc;m thanh stereo ph&aacute;t ra từ 2 ph&iacute;a</h3>\r\n\r\n<p>Kh&ocirc;ng c&ograve;n kh&oacute; chịu khi bạn cầm m&aacute;y chơi game nhưng bị b&iacute;t loa như ở những phi&ecirc;n bản trước đ&oacute;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/87838/iphone-7-256gb-loa.jpg\" onclick=\"return false;\"><img alt=\"Dàn loa stereo của điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/87838/iphone-7-256gb-loa.jpg\" /></a></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">Điện thoại</a>&nbsp;iPhone 7 32 GB được trang bị d&agrave;n loa tr&ecirc;n dưới cho &acirc;m thanh ph&aacute;t ra hay hơn.</p>\r\n\r\n<h3>Cảm biến v&acirc;n tay nhanh nhạy hơn</h3>\r\n\r\n<p>Gi&uacute;p bạn mở kh&oacute;a m&aacute;y chỉ trong v&agrave;i nốt nhạc, gi&uacute;p tiết kiệm thời gian cũng như bảo mật cao dữ liệu trong m&aacute;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-16.jpg\" onclick=\"return false;\"><img alt=\"Nút home lực tích hợp trên điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-16.jpg\" /></a></p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/thiet-lap-van-tay-moi-tren-iphone-7-920010\" target=\"_blank\">Hướng dẫn bạn c&aacute;ch c&agrave;i đặt v&acirc;n tay iPhone 7</a>.</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh 4.7 inch c&agrave;ng th&ecirc;m sắc n&eacute;t</h3>\r\n\r\n<p>C&ugrave;ng với đ&oacute; l&agrave; khả năng hiển thị tốt hơn dưới trời nắng, g&oacute;c nh&igrave;n nghi&ecirc;ng kh&ocirc;ng bị mất m&agrave;u.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-13.jpg\" onclick=\"return false;\"><img alt=\"Màn hình hiển thị trên điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-13.jpg\" /></a></p>\r\n\r\n<h3>Cấu h&igrave;nh mạnh mẽ thoải m&aacute;i chiến game</h3>\r\n\r\n<p>M&aacute;y t&iacute;ch hợp&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tong-quan-ve-chip-a10-fusion-cua-apple-885052\" target=\"_blank\">chip xử l&yacute; A10</a>&nbsp;mới nhất, RAM 2 GB c&ugrave;ng hệ điều h&agrave;nh iOS lu&ocirc;n được cập nhật mới gi&uacute;p m&aacute;y vận h&agrave;nh nhẹ nh&agrave;ng v&agrave; nhanh nhạy.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-3-2.jpg\" onclick=\"return false;\"><img alt=\"Điểm Antutu Benchmark trên chiếc điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-3-2.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Clip test game nặng GTA (Nguồn: Youtube XEETECHCARE)</em></p>\r\n\r\n<h3>N&uacute;t home th&agrave;nh dạng cứng v&agrave; nhận biết cảm ứng lực</h3>\r\n\r\n<p>N&uacute;t home tr&ograve;n tr&ecirc;n iPhone 7 ch&iacute;nh thức l&agrave; dạng cứng, tức bạn sẽ kh&ocirc;ng nhấn xuống được nữa, để thao t&aacute;c tr&ecirc;n n&uacute;t n&agrave;y bạn sẽ nhấn 1 lực vừa phải đến khi n&uacute;t home run nhẹ l&ecirc;n.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-19.jpg\" onclick=\"return false;\"><img alt=\"Nâng cấp nút Home của điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-19.jpg\" /></a></p>\r\n\r\n<p>Điều dễ nhận thấy nhất về iPhone 7 tiếp theo ch&iacute;nh l&agrave; mặt sau với d&atilde;y ăng-ten được giấu đi, c&ograve;n lại ngoại h&igrave;nh m&aacute;y kh&ocirc;ng thay đổi nhiều so với&nbsp;iPhone 6s&nbsp;trước đ&oacute;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/74110/iphone-7-tgdd-11.jpg\" onclick=\"return false;\"><img alt=\"Nâng cấp nút Home của điện thoại iPhone 7\" src=\"https://cdn.tgdd.vn/Products/Images/42/74110/iphone-7-tgdd-11.jpg\" /></a></p>', NULL, NULL, 0, 17, 5, '2020-03-23 00:37:45', '2020-09-03 02:08:37'),
(40, 'Samsung Galaxy Tab with S Pen (P205)', 'samsung-galaxy-tab-with-s-pen-p205', 'uploads/product/1586666383_samsung-galaxy-tab-a8-plus-p205-black-400x400.jpg', 5, 6999000, 5999000, 0, 1, 0, 0, 2, NULL, NULL, NULL, 0, NULL, NULL, 5, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:39:43', '2020-04-11 21:39:43'),
(41, 'iPad Mini 7.9 inch Wifi 64GB (2019)', 'ipad-mini-79-inch-wifi-64gb-2019', 'uploads/product/1586666566_ipad-mini-79-inch-wifi-2019-gold-400x400.jpg', 5, 10990000, 10490000, 1, 1, 0, 0, 2, NULL, NULL, NULL, 0, NULL, NULL, 6, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:42:46', '2020-04-11 21:42:46'),
(42, 'Samsung Galaxy Tab A8 8\" T295 (2019)', 'samsung-galaxy-tab-a8-8-t295-2019', 'uploads/product/1586666633_samsung-galaxy-tab-a8-plus-p205-black-400x400.jpg', 4, 4000000, 3690000, 2, 1, 0, 0, 2, NULL, NULL, NULL, 0, NULL, NULL, 5, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:43:53', '2020-04-11 21:47:15'),
(43, 'iPad 10.2 inch Wifi Cellular 128GB (2019)', 'ipad-102-inch-wifi-cellular-128gb-2019', 'uploads/product/1586666700_ipad-10-2-inch-wifi-cellular-128gb-2019-gray-400x400.jpg', 2, 9760000, 8990000, 3, 1, 0, 0, 2, NULL, NULL, NULL, 0, NULL, NULL, 6, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:45:00', '2020-04-11 21:45:00'),
(44, 'Huawei MediaPad M5 Lite', 'huawei-mediapad-m5-lite', 'uploads/product/1586666762_huawei-mediapad-m5-lite-gray-400x400.jpg', 3, 7900000, 7400000, 0, 1, 0, 0, 2, NULL, NULL, NULL, 0, NULL, NULL, 5, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:46:02', '2020-04-11 21:46:02'),
(45, 'Acer Aspire A315 54 36QY i3 10110U (NX.HM2SV.001)', 'acer-aspire-a315-54-36qy-i3-10110u-nxhm2sv001', 'uploads/product/1586666994_acer-aspire-a315-54-36qy-i3-10110u-4gb-256gb-win10-1-400x400.jpg', 2, 10230000, 8500000, 0, 1, 0, 0, 16, NULL, NULL, NULL, 0, NULL, NULL, 6, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:49:54', '2020-08-12 00:03:16'),
(46, 'Asus VivoBook A412FA i3 8145U', 'asus-vivobook-a412fa-i3-8145u', 'uploads/product/1586667066_asus-vivobook-a412f-i3-8145u-4gb-32gb-512gb-win10-400x400.jpg', 8, 7890000, 6900000, 0, 1, 0, 0, 17, NULL, 'EK661T', NULL, 0, NULL, NULL, 5, 4, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:51:06', '2020-08-12 00:10:36'),
(47, 'HP 15s du0072TX i3 7020U (8WP16PA)', 'hp-15s-du0072tx-i3-7020u-8wp16pa', 'uploads/product/1586667231_hp-15s-du0072tx-i3-7020u-4gb-256gb-2gb-mx110-win10-1-400x400.jpg', 5, 22520000, 20000000, 2, 1, 0, 0, 4, NULL, NULL, NULL, 0, NULL, NULL, 8, 4, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:53:51', '2020-04-11 21:53:51'),
(48, 'Asus VivoBook X409FA i5 8265U', 'asus-vivobook-x409fa-i5-8265u', 'uploads/product/1586667310_asus-vivobook-x409f-i5-8265u-8gb-1tb-win10-ek138t2-1-thumb-1-400x400.jpg', 2, 13800000, 12000000, 4, 1, 1, 0, 4, NULL, 'EK138T', NULL, 0, NULL, NULL, 5, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:55:10', '2020-08-07 19:54:27'),
(49, 'HP 348 G7 i5 10210U (9PH06PA)', 'hp-348-g7-i5-10210u-9ph06pa', 'uploads/product/1586667371_hp-348-g7-i5-9ph06pa-218439-1-400x400.jpg', 4, 16000000, 15700000, 0, 1, 1, 0, 15, NULL, NULL, NULL, 0, NULL, NULL, 8, 5, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 21:56:11', '2020-08-12 00:08:25'),
(50, 'Apple Watch S5 LTE 40mm viền nhôm dây cao su', 'apple-watch-s5-lte-40mm-vien-nhom-day-cao-su', 'uploads/product/1586667604_apple-watch-s5-lte-40mm-vien-nhom-day-cao-su-ava-400x400.jpg', 2, 4000000, 2900000, 4, 1, 1, 0, 6, NULL, NULL, NULL, 0, NULL, NULL, 6, 4, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 5, '2020-04-11 22:00:04', '2020-08-31 02:04:46'),
(51, 'Daumier DM-JLW001.SLTN.8SNI.S.M - Nam - Superman', 'daumier-dm-jlw001sltn8snism-nam-superman', 'uploads/product/1586667688_daumier-dm-jlw001-sltn-8sni-s-m-nam-1-1-400x400.jpg', 3, 3500000, 2990000, 0, 1, 1, 0, 6, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 8, 5, '2020-04-11 22:01:28', '2020-08-31 01:51:33'),
(52, 'Pin sạc dự phòng Polymer 10.000mAh Xiaomi Mi 18W Fast Charge Power Bank 3', 'pin-sac-du-phong-polymer-10000mah-xiaomi-mi-18w-fast-charge-power-bank-3', 'uploads/product/1586667835_sac-du-phong-polymer-10000mah-xiaomi-mi-18w-den-1-400x400.jpg', 2, 4490000, 500000, 0, 1, 1, 0, 58, NULL, NULL, NULL, 0, NULL, NULL, 15, 6, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 0, '2020-04-11 22:03:55', '2020-08-07 19:49:43'),
(53, 'Loa Bluetooth eSaver S12B-2 Đen', 'loa-bluetooth-esaver-s12b-2-den', 'uploads/product/1586667890_loa-bluetooth-esaver-s12b-2-den-avatar-2-400x400.jpg', 3, 300000, 2490000, 0, 1, 1, 0, 19, NULL, NULL, NULL, 0, NULL, NULL, 5, 5, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 13, 2, '2020-04-11 22:04:50', '2020-08-31 03:40:22'),
(54, 'Dây cáp Micro USB 1 m e.VALU LTM-01', 'day-cap-micro-usb-1-m-evalu-ltm-01', 'uploads/product/1586667963_cap-micro-1m-evalu-ltm-01-12-400x400.jpg', 2, 280000, 190000, 0, 1, 1, 0, 19, NULL, NULL, NULL, 0, NULL, NULL, 15, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 0, 5, '2020-04-11 22:06:03', '2020-08-30 23:46:56'),
(55, 'Thẻ nhớ MicroSD 32 GB Lexar class 10 UHS-I', 'the-nho-microsd-32-gb-lexar-class-10-uhs-i', 'uploads/product/1586668015_the-nho-microsd-32gb-lexar-class-10-uhs-i-5-400x400.jpg', 3, 400000, 320000, 0, 1, 1, 0, 19, NULL, NULL, NULL, 0, NULL, NULL, 15, 0, '<p>tt</p>', '<p>mt</p>', NULL, NULL, 0, 4, 9, '2020-04-11 22:06:55', '2020-08-30 23:38:33'),
(56, 'Tai nghe Bluetooth Xanh', 'tai-nghe-bluetooth-xanh', 'uploads/product/1586668068_tai-nghe-bluetooth-mozard-flex4-den-xanh-1-600x600-1-400x400.jpg', 6, 200000, 190000, 3, 1, 1, 0, 20, NULL, NULL, NULL, 0, NULL, NULL, 6, 5, '<p>ch&agrave;o em</p>', '<p>may t&iacute;nh</p>', NULL, NULL, 0, 0, 10, '2020-04-11 22:07:48', '2020-08-31 01:41:46'),
(59, 'Samsung Galaxy S10 Lite', 'samsung-galaxy-s10-lite', 'uploads/product/1597827871_samsung-galaxy-s10-lite-blue-chi-tiet-400x460.png', 2, 30000, 3000, 3, 1, 1, 0, 8, NULL, NULL, NULL, 0, NULL, NULL, 5, 6, '<p>M&agrave;n h&igrave;nh:<a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-super-amoled-la-gi-905770\" target=\"_blank\">Super AMOLED</a>, 6.7&quot;,&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#fullhd\" target=\"_blank\">Full HD+</a></p>\r\n\r\n<p>Hệ điều h&agrave;nh:<a href=\"https://www.thegioididong.com/hoi-dap/android-10-android-q-la-gi-co-gi-moi-1237224\" target=\"_blank\">Android 10</a></p>\r\n\r\n<p>Camera sau:Ch&iacute;nh 48 MP &amp; Phụ 12 MP, 5 MP</p>\r\n\r\n<p>Camera trước:32 MP</p>\r\n\r\n<p>CPU:<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-qualcomm-snapdragon-855-1170880\" target=\"_blank\">Snapdragon 855 8 nh&acirc;n</a></p>\r\n\r\n<p>RAM:8 GB</p>\r\n\r\n<p>Bộ nhớ trong:128 GB</p>\r\n\r\n<p>Thẻ nhớ:<a href=\"https://www.thegioididong.com/the-nho-dien-thoai\" target=\"_blank\">MicroSD, hỗ trợ tối đa 1 TB</a></p>\r\n\r\n<p>Thẻ SIM:<a href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-cac-loai-sim-thong-dung-sim-thuong-micro--590216#nanosim\" target=\"_blank\">2 SIM Nano (SIM 2 chung khe thẻ nhớ)</a>,&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/4g-la-gi-731757\" target=\"_blank\">Hỗ trợ 4G</a></p>\r\n\r\n<p><strong>HOT</strong><a href=\"https://www.thegioididong.com/sim-so-dep/vietnamobile?t=59\">SIM VNMB Si&ecirc;u sim (5GB/ng&agrave;y)</a></p>', '<h2>Đặc điểm nổi bật của Samsung Galaxy S10 Lite</h2>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/194251/Slider/-samsung-galaxy-s10-lite-video.jpg\" /><img src=\"https://www.thegioididong.com/Content/desktop/images/V4/icon-yt.png\" /></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tin-tuc/hdr10-la-gi-vi-sao-no-lam-cho-man-hinh-galaxy-s10-dep-hon--1151189\" target=\"_blank\">T&igrave;m hiểu th&ecirc;m</a></p>\r\n\r\n<p>Bộ sản phẩm chuẩn: Sạc,Tai nghe,S&aacute;ch hướng dẫn,Hộp,C&acirc;y lấy sim,Ốp lưng,C&aacute;p</p>\r\n\r\n<h2><a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s10-lite\" target=\"_blank\">Samsung Galaxy S10 Lite</a>&nbsp;l&agrave; một phi&ecirc;n bản kh&aacute;c của d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s10\" target=\"_blank\">Galaxy S10</a>&nbsp;đ&atilde; ra mắt trước đ&oacute; nhưng mang trong m&igrave;nh kh&aacute; nhiều kh&aacute;c biệt về ngoại h&igrave;nh cũng như b&ecirc;n trong.</h2>\r\n\r\n<h3>Ngoại h&igrave;nh nổi bật dễ nhận biết</h3>\r\n\r\n<p>Mặc d&ugrave; c&oacute; t&ecirc;n gọi l&agrave;&nbsp;S10 Lite nhưng ngoại h&igrave;nh của chiếc m&aacute;y n&agrave;y mang kh&aacute; nhiều thay đổi so với d&ograve;ng S10 trước đ&oacute;. Đầu ti&ecirc;n bạn sẽ dễ nhận thấy l&agrave; tr&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/hoi-dap-tong-hop-cac-loai-man-hinh-vo-cuc-moi-t-1150900#infinity-o\" target=\"_blank\">m&agrave;n h&igrave;nh Infinity-O</a>&nbsp;th&igrave; camera selfie được đặt ở ch&iacute;nh giữa thay v&igrave; lệch về g&oacute;c tr&aacute;i như tr&ecirc;n S10.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd8-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Thiết kế\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd8-1.jpg\" /></a></p>\r\n\r\n<p>Quay ra ở mặt sau th&igrave; bạn cũng dễ d&agrave;ng nhận ra chiếc Galaxy S10 Lite với cụm camera to bản được l&agrave;m h&igrave;nh chữ nhật tr&ocirc;ng rất hầm hố.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd3-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd3-2.jpg\" /></a></p>\r\n\r\n<p>Khung viền được ho&agrave;n thiện từ chất liệu kim loại đem lại cảm gi&aacute;c cầm nắm chắc chắn v&agrave; sang trọng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd1-2.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Cảm biến vân tay\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd1-2.jpg\" /></a></p>\r\n\r\n<p>Được trang bị m&agrave;n h&igrave;nh Infinity-O c&ugrave;ng tấm nền Super AMOLED Full HD+ 6.7 inch với phần viền bezels được l&agrave;m kh&aacute; mỏng cho bạn cảm gi&aacute;c như đang sử dụng một thiết bị tr&agrave;n viền thực thụ.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite10.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Màn hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite10.jpg\" /></a></p>\r\n\r\n<p>Tất nhi&ecirc;n m&agrave;n h&igrave;nh n&agrave;y cũng được t&iacute;ch hợp t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-van-tay\" target=\"_blank\">bảo mật v&acirc;n tay</a>&nbsp;được ẩn dưới m&agrave;n h&igrave;nh, gi&uacute;p bạn mở kh&oacute;a thiết bị một c&aacute;ch dễ d&agrave;ng v&agrave; &quot;ngầu&quot; hơn.</p>\r\n\r\n<h3>Sở hữu phần cứng mạnh mẽ</h3>\r\n\r\n<p>Điểm nhấn kế tiếp của S10 Lite c&oacute; lẽ ch&iacute;nh l&agrave; cấu h&igrave;nh khi được trang bị chip Qualcomm Snapdragon 855 vốn được tin tưởng tuyệt đối về độ tương th&iacute;ch v&agrave; ổn định, con chip đầu bảng năm 2019 sẽ gi&uacute;p bạn sử dụng chiếc m&aacute;y mượt m&agrave; &iacute;t nhất từ 2-3 năm nữa.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd1-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Điểm hiệu năng Antutu Benchmark\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd1-1.jpg\" /></a></p>\r\n\r\n<p>Bộ nhớ RAM 8 GB đảm bảo cho bạn thoải m&aacute;i mở nhiều ứng dụng c&ugrave;ng l&uacute;c m&agrave; kh&ocirc;ng sợ hiện tượng phải load lại game hay ứng dụng thường xuy&ecirc;n.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd5-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Cấu hình\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd5-1.jpg\" /></a></p>\r\n\r\n<p>Với những trang bị như vậy th&igrave; Galaxy S10 Lite sẽ đ&aacute;p ứng tốt tất cả c&aacute;c t&aacute;c vụ từ cơ bản như lướt web, xem Youtube,... đến c&aacute;c t&aacute;c vụ nặng như chơi c&aacute;c tựa game phổ biến hiện nay PUBG, Free Fire, Li&ecirc;n qu&acirc;n Mobile,...</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd7-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Khay sim\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd7-1.jpg\" /></a></p>\r\n\r\n<p>Galaxy S10 Lite chạy tr&ecirc;n giao diện One UI 2.0 dựa tr&ecirc;n hệ điều h&agrave;nh Android 10 khi được b&aacute;n ra ch&iacute;nh thức. Samsung đ&atilde; tối ưu hệ điều h&agrave;nh của m&igrave;nh theo hướng dễ sử dụng một tay tr&ecirc;n m&agrave;n h&igrave;nh lớn, giao diện tinh gọn v&agrave; mượt m&agrave;.</p>\r\n\r\n<h3>Cụm camera chất lượng h&agrave;ng đầu</h3>\r\n\r\n<p>Cụm camera tr&ecirc;n chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;n&agrave;y đ&atilde; được Samsung thiết kế lại v&agrave; bắt kịp xu hướng cụm camera &ldquo;to bự&rdquo;.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd4-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Camera sau\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd4-1.jpg\" /></a></p>\r\n\r\n<p>Camera ch&iacute;nh của m&aacute;y c&oacute; độ ph&acirc;n giải lớn 48 MP f/2.0 c&ugrave;ng camera g&oacute;c rộng 12 MP khẩu độ f/2.2 v&agrave; một ống k&iacute;nh d&agrave;nh ri&ecirc;ng để chụp ảnh macro 5 MP.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd2-1.jpg\" />Ảnh chụp g&oacute;c si&ecirc;u rộng tr&ecirc;n Samsung Galaxy S10 Lite</p>\r\n\r\n<p><img src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd3-1.jpg\" />Ảnh chụp g&oacute;c thường tr&ecirc;n Samsung Galaxy S10 Lite</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đặc biệt, chiếc smartphone mới n&agrave;y c&ograve;n hỗ trợ c&ocirc;ng nghệ si&ecirc;u chống rung Super Steady OIS trong khi ngay cả những người anh em của m&igrave;nh cũng được c&ocirc;ng nghệ n&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-4-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Ảnh chụp rõ nét\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-4-1.jpg\" /></a></p>\r\n\r\n<p>Những bạn th&iacute;ch selfie chắc chắn cũng kh&ocirc;ng cần phải lo lắng bởi m&aacute;y sở hữu camera trước độ ph&acirc;n giải 32 MP được đặt trong lỗ kho&eacute;t nhỏ ở giữa m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-5-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Camera selfie\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-5-1.jpg\" /></a></p>\r\n\r\n<p>Tất nhi&ecirc;n cũng kh&ocirc;ng thể thiếu t&iacute;nh năng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-bao-mat-khuon-mat\" target=\"_blank\">mở kh&oacute;a khu&ocirc;n mặt</a>&nbsp;gi&uacute;p bạn unlock chiếc m&aacute;y của m&igrave;nh một c&aacute;ch nhanh ch&oacute;ng v&agrave; đơn giản.</p>\r\n\r\n<h3>Pin &quot;tr&acirc;u&quot; thoải m&aacute;i x&agrave;i cả ng&agrave;y</h3>\r\n\r\n<p>Samsung đ&atilde; trang bị cho m&aacute;y vi&ecirc;n pin l&ecirc;n đến 4.500 mAh, đ&acirc;y l&agrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-pin-khung\" target=\"_blank\">điện thoại pin tr&acirc;u</a>&nbsp;nhất trong gia đ&igrave;nh S10 khi m&agrave; chiếc S10+ cũng chỉ c&oacute; vi&ecirc;n pin&nbsp;4.100 mAh m&agrave; th&ocirc;i.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/194251/samsung-galaxy-s10-lite-tgdd6-1.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại Samsung Galaxy S10 Lite | Thời lượng pin\" src=\"https://cdn.tgdd.vn/Products/Images/42/194251/samsung-galaxy-s10-lite-tgdd6-1.jpg\" /></a></p>\r\n\r\n<p>Bạn c&oacute; thể sử dụng chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\">điện thoại Samsung</a>&nbsp;n&agrave;y thoải m&aacute;i trong cả ng&agrave;y v&agrave; thậm ch&iacute; l&agrave; ng&agrave;y thứ 2 nếu nhu cầu &iacute;t hơn. B&ecirc;n cạnh đ&oacute; việc đi k&egrave;m củ&nbsp;<a href=\"https://www.thegioididong.com/dtdd-sac-pin-nhanh\" target=\"_blank\">sạc nhanh</a>&nbsp;25W gi&uacute;p bạn c&oacute; thể nạp đầy năng lượng của m&aacute;y trong thời gian ngắn.</p>', NULL, NULL, 0, 9, 0, '2020-08-19 02:04:31', '2020-08-30 20:15:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `ra_number` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `name`, `email`, `phone`, `ra_number`, `content`, `product_id`, `user_id`, `created_at`) VALUES
(1, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 5, '123', 6, 0, '2020-08-29 10:22:26'),
(2, 'hồng anh', 'hcdung209@gmail.com', 123456789, 5, 'Sản phẩm rất tốt', 6, 0, '2020-08-29 10:38:35'),
(3, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 4, 'sản phẩm tốit', 59, 0, '2020-08-29 11:36:23'),
(4, 'Hảo hảo', 'admin@gmail.com', 123456789, 4, 'cảm ơn', 30, 0, '2020-08-29 11:52:29'),
(5, 'Hảo hảo', 'hcdung209@gmail.com', 123456789, 4, 'cảm ơn', 30, 0, '2020-08-29 11:53:19'),
(6, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 4, 'cảm ơn', 30, 0, '2020-08-29 11:53:51'),
(7, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 4, 'cảm ơn', 30, 0, '2020-08-29 12:21:18'),
(8, 'Hảo hảo', 'ngocha18082407@gmail.com', 123456789, 5, 'a', 59, 0, '2020-08-31 03:15:15'),
(9, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 2, 'dqa', 59, 0, '2020-08-31 03:35:47'),
(10, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 2, 'dqa', 59, 0, '2020-08-31 03:35:50'),
(11, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 2, 'dqa', 59, 0, '2020-08-31 03:35:51'),
(12, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 2, 'dqa', 59, 0, '2020-08-31 03:35:53'),
(13, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 4, 'sa', 59, 0, '2020-08-31 03:36:11'),
(14, 'Hảo hảo', '1611062014@hunre.edu.vn', 123456789, 3, 'ad', 5, 0, '2020-08-31 03:40:04'),
(15, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 4, 'da', 55, 0, '2020-08-31 04:38:36'),
(16, 'ada', '1611062014@hunre.edu.vn', 123456789, 4, 'ád', 55, 0, '2020-08-31 06:37:31'),
(17, 'Hảo hảo', 'ngocha18082407@gmail.com', 123456789, 5, 'ad', 55, 0, '2020-08-31 06:38:33'),
(18, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 5, 'sẩn phẩm tốt', 56, 0, '2020-08-31 06:41:53'),
(19, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 5, 'â', 54, 0, '2020-08-31 06:46:56'),
(20, 'da', '1611062014@hunre.edu.vn', 123456789, 5, 'dá', 19, 0, '2020-08-31 08:40:35'),
(21, 'Hảo hảo', 'danglam932@gmail.com', 123456789, 5, 'đa', 56, 0, '2020-08-31 08:41:46'),
(22, 'Hảo hảo', '1611062014@hunre.edu.vn', 123456789, 4, 'ad', 22, 0, '2020-08-31 08:44:08'),
(23, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 5, 'ádua;', 6, 0, '2020-08-31 08:46:34'),
(24, 'Hảo hảo', 'danglam932@gmail.com', 123456789, 5, 'sè', 51, 0, '2020-08-31 08:48:37'),
(25, 'Hảo hảo', 'admin@gmail.com', 123456789, 5, 'á', 51, 0, '2020-08-31 08:50:53'),
(26, 'Hảo hảo', 'admin@gmail.com', 123456789, 3, 'áđa', 51, 0, '2020-08-31 08:51:33'),
(27, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 5, 'ád', 20, 0, '2020-08-31 08:52:49'),
(28, 'Hảo hảo', 'hong@gmail.com', 123456789, 5, 'ad', 20, 0, '2020-08-31 08:55:49'),
(29, 'Hảo hảo', 'ngocha18082407@gmail.com', 123456789, 5, 'ákd', 19, 0, '2020-08-31 09:01:48'),
(30, 'Hảo hảo', 'danglam932@gmail.com', 123456789, 5, 'ad', 50, 0, '2020-08-31 09:04:46'),
(31, 'Hảo hảo', '1611062014@hunre.edu.vn', 123456789, 5, 'ad', 16, 0, '2020-08-31 09:27:22'),
(32, 'Hảo hảo', '', 123456789, 4, '', 5, 0, '2020-08-31 10:32:11'),
(33, 'huy', 'huy@gmail', 123456789, 5, 'huy', 11, 0, '2020-08-31 10:33:05'),
(34, 'huy2222222', 'huy123@gail', 123456789, 5, 'huy11111111', 53, 0, '2020-08-31 10:35:55'),
(35, 'lam', '1611062014@hunre.edu.vn', 123456789, 3, 'ad', 53, 0, '2020-08-31 10:37:47'),
(36, 'Hảo hảo', 'anhman01061998@yahoo.com.vn', 123456789, 5, 'ad', 53, 0, '2020-08-31 10:40:22'),
(37, 'nhật', 'anhman01061998@yahoo.com.vn', 123456789, 5, 'ad', 1, 0, '2020-08-31 10:45:06'),
(38, 'Chungchó', 'anhman01061998@yahoo.com.vn', 123456789, 5, 'ad', 2, 0, '2020-08-31 10:47:12'),
(39, 'dũng', 'hcdung209@gmail.com', 123456789, 3, 'hạk', 2, 0, '2020-08-31 10:48:03'),
(40, 'Hảo hảo', 'hcdung209@gmail.com', 123456789, 5, 'ad', 30, 0, '2020-09-03 09:08:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'MANAGER'),
(2, 'ADMIN'),
(3, 'GUEST'),
(5, 'ORTHERS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `company`, `address`, `address2`, `image`, `phone`, `hotline`, `tax`, `facebook`, `email`, `introduce`, `created_at`, `updated_at`) VALUES
(1, 'Viettel Strore - ViettelStrore.com', '25 Vũ Ngọc Phan - Láng Hạ - Đống Đa - Hà Nội', 'Q.Long Biên, Hà Nội', 'uploads/setting/1597318766_unnamed.png', '0967707621', '18001166', '000010', 'https://www.facebook.com/', 'danglam932@gmail.com', NULL, NULL, '2020-08-13 04:47:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `avatar`, `is_active`) VALUES
(1, 'Hoàng Dũng', 'hcdung209@gmail.com', '$2y$10$TNWZo9WER49I.Z5ad4hIMO/cQRYAn8nMXOSgajlfo/pO.LEaXLKxq', NULL, '2020-04-10 21:24:51', '2020-05-19 12:32:10', 1, 'uploads/user/1586579091_Tổng-hợp-hình-ảnh-avatar-dễ-thương-làm-hình-đại-diện-đẹp-nhất-1.jpg', 1),
(2, 'Ngọc Hà', 'ngocha18082407@gmail.com', '2345678', NULL, '2020-04-10 21:25:55', '2020-04-10 21:25:55', 2, 'uploads/user/1586579155_tai-hinh-chibi-bst.jpg', 1),
(3, 'admin', 'admin@gmail.com', '$2y$10$CWWZcJDTL2Xf1O8ZaD99dOrImQSKfePrU8L19Hw/vcqUca6u2T0uq', 'J5PAbgp9KSeWD0hXfj1A8en6gviUoLapOir1ZVcx6WBGVl5Sl0rIy5AG7RKv', '2020-05-19 12:32:27', '2020-05-19 12:32:27', 1, NULL, 1),
(4, 'Hảo hảo', 'danglam932@gmail.com', '$2y$10$htJfi2minrOv7.co62HI.OW2MlS/VRvBdBsjekf0zYNm.YwA9UZHW', NULL, '2020-09-08 00:12:39', '2020-09-08 00:12:39', 0, 'uploads/user/1586579091_Tổng-hợp-hình-ảnh-avatar-dễ-thương-làm-hình-đại-diện-đẹp-nhất-1.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vendors`
--

CREATE TABLE `vendors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `slug`, `email`, `phone`, `image`, `website`, `address`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'Cellphones', 'cellphones', 'cskh@cellphones.com.vn', '1800.2097', 'uploads/vendor/1584935240_logo.jpg', 'https://didongviet.vn/', 'Việt Nam', 1, 1, '2020-03-22 20:47:20', '2020-03-22 20:49:25'),
(5, 'Di động Việt', 'di-dong-viet', 'lienhe@didongviet.vn', '1800 6018', 'uploads/vendor/1584935377_logo-ddv-full-03.png', 'https://didongviet.vn/', 'Việt Nam', 2, 1, '2020-03-22 20:49:37', '2020-03-22 20:49:37'),
(6, 'Thế Giới Di Động', 'the-gioi-di-dong', 'cskh@thegioididong.com', '1800 1060', 'uploads/vendor/1584935523_Logo-Thegioididong-945x709.jpg', 'https://www.thegioididong.com/', 'Việt Nam', 3, 1, '2020-03-22 20:52:03', '2020-03-22 20:52:03'),
(8, 'FPT Shop', 'fpt-shop', 'fptshop@fpt.com.vn', '1800 6601', 'uploads/vendor/1584935728_637133160350737542_201407171129187887_1378267132_fptshop-ver1-0-logo-color-bg-black.jpg', 'https://fptshop.com.vn/', 'Việt Nam', 5, 1, '2020-03-22 20:55:28', '2020-03-22 20:55:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `banners_slug_unique` (`slug`) USING BTREE;

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `brands_slug_unique` (`slug`) USING BTREE;

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `categories_slug_unique` (`slug`) USING BTREE;

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `products_slug_index` (`slug`) USING BTREE;

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Chỉ mục cho bảng `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `vendors_slug_unique` (`slug`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
