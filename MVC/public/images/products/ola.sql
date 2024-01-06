-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 06:49 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `metacoffee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brand_id`, `name`, `category_id`) VALUES
(1, 'Apple', 12),
(2, 'Acer', 12),
(3, 'Asus', 12),
(4, 'HP', 12),
(5, 'LG', 12),
(6, 'SamSung', 13),
(7, 'Viewsonic', 13),
(8, 'Philips', 13),
(9, 'Kraken', 14),
(10, 'Cooler', 14),
(11, 'COOLING', 14),
(12, 'AIO', 14),
(13, 'Slim', 15),
(14, 'Robot', 15),
(15, 'Unitek', 15),
(16, 'Logitech', 15),
(17, 'Asus', 15),
(18, 'Gigabyte', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(12, 'Laptop'),
(13, 'Màn hình'),
(14, 'Tản nhiệt'),
(15, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `comment_content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`comment_id`, `user_id`, `product_id`, `comment_content`, `comment_date`) VALUES
(36, 4, 34, 'Máy đẹp rất thích .Cảm ơn shop đã tư vấn nhiệt tình', '2023-12-10 10:19:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `note` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `method` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(25) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `address`, `phone`, `note`, `method`, `status`, `order_date`) VALUES
(78, 4, '133 Nguyễn Minh Châu', '0862246092', '', 'payLater', 'Đang giao', '2023-12-07 19:03:58'),
(79, 4, '133 Nguyen Minh Chau', '0862246092', '', 'payLater', 'Đang tiến hành', '2023-12-09 17:49:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `price_total` float NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`details_id`, `order_id`, `variant_id`, `price_total`, `num`) VALUES
(64, 78, 144, 1550000, 1),
(65, 79, 138, 1200000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `price_sale` float NOT NULL,
  `active` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `import_date` datetime NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `thumbnail`, `description`, `price_sale`, `active`, `view`, `import_date`, `brand_id`) VALUES
(34, 12, 'Laptop Acer Aspire 5 A514-56P-35X7', 'mvc/public/images/products/choco-creamcake.png', '- CPU:Intel® Core™ i3-1315U </br>\r\n- RAM/SSD: 8GB LPDDR5 /512GB SSD</br>\r\n- VGA : Intel UHD Graphics</br>\r\n- Màn hình:14 inch WUXGA (1920 x 1200)</br>\r\n- Hệ điều hành : Windows 11 Home</br>\r\n- Màu sắc/ Chất liệu:Gray</br>', 5, 1, 0, '2023-12-07 13:37:43', 2),
(35, 12, 'Laptop HP 240 G8 3D0E7PA Bạc ', 'mvc/public/images/products/19965_4_01.png', '- CPU: Intel® Core™ i7-1165G7</br>\r\n- RAM/SSD: 8GB DDR4 /256GB SSD</br>\r\n- VGA :Intel Iris Xe Graphics</br>\r\n- Màn hình: 14 inch FHD (1920 x 1080)</br>\r\n- Hệ điều hành:Windows 10</br>\r\n- Màu sắc:Silver</br>', 10, 1, 0, '2023-12-07 13:52:57', 4),
(36, 12, 'Laptop LG Gram 2022 ', 'mvc/public/images/products/22959_17zd90q_g_ax73a5.jpg', '- CPU: Intel Core i7-1260P</br>\r\n- RAM/SSD: 16GB/ 256GB SSD</br>\r\n- VGA: Iris Xe Graphics</br>\r\n- Màn hình: 17.0 inch WQXGA (2560 x 1600)</br>\r\n- HĐH: DOS</br>\r\n- Màu sắc/ Chất liệu: Xám</br>', 15, 1, 0, '2023-12-07 13:57:12', 5),
(37, 12, 'Laptop Gaming Acer Aspire 7 A715-42G-R05G', 'mvc/public/images/products/20893_41_01_01.png', '- CPU : AMD Ryzen 5-5500U</br>\r\n- RAM/SSD: 8GB DDR4 / 512GB SSD</br>\r\n- VGA :NVIDIA® GeForce® GTX 1650 4GB GDDR6</br>\r\nMàn hình: 15.6 inch FHD (1920x1080)</br>\r\n- Hệ điều hành : Windows 11 Home</br>\r\n- Màu sắc/ Chất liệu: Black</br>', 9, 1, 0, '2023-12-07 14:00:35', 2),
(38, 12, 'Laptop Acer Nitro 17 Phoenix AN17-51-50B9', 'mvc/public/images/products/24291_2_1_01_01.png', '- CPU : Intel® Core™ i5-13500H</br>\r\n- RAM/SSD: 8GB DDR5 / 512GB SSD</br>\r\n- VGA :NVIDIA® GeForce RTX™ 4050 6GB GDDR6</br>\r\nMàn hình: 17.3\" FHD (1920 x 1080)</br>\r\n- Hệ điều hành : Windows 11 Home</br>\r\n- Màu sắc/ Chất liệu: Black</br>', 12, 1, 0, '2023-12-07 14:02:32', 2),
(39, 13, 'LCD Samsung ', 'mvc/public/images/products/2951_man_hinh_may_tinh_samsung_lu32j590uqexxv_32inch_4k_uhd_1.jpg', '- Kích thước màn hình: 32Inch 4K UHD</br>\r\n- Độ phân giải: 4K (3840x2160)</br>\r\n- Cổng giao tiếp: HDMI/ Display Port</br>', 20, 1, 0, '2023-12-07 14:07:17', 6),
(40, 13, 'LCD Viewsonic VA3456-MHDJ 34inch WQHD 2K IPS 75HZ', 'mvc/public/images/products/21364_lcd_viewsonic_va3456_mhdj_34_inch.png', '- Kích thước màn hình: 34 Inch</br>\r\n-Độ phân giải: WQHD(3440 x 1440)</br>\r\n-Cổng giao tiếp: 2 x HDMI, 1 x DisplayPort</br>', 7, 1, 0, '2023-12-07 14:09:38', 7),
(41, 12, 'LCD Philips Momentum 345M2CRZ 34 inch', 'mvc/public/images/products/24353_lcd_philips_momentum_345m2crz.jpg', 'Kích thước màn hình cong : 34 inch,1ms,165Hz</br>\r\n-Độ phân giải:HDMI: 3440 x 1440 @ 100 Hz, DP: 3440 x 1440 @ 165 Hz</br>\r\n-Cổng giao tiếp: DisplayPort x 2 x 1/HDMI 2.0 x 2</br>\r\n-Độ bao phủ màu: DCI-P3 88,9%/ sRGB 119% /Adobe RGB 96%</br>', 3, 1, 0, '2023-12-07 14:12:01', 8),
(42, 14, 'Tản nhiệt NZXT Kraken X73 RGB White', 'mvc/public/images/products/21370_tan_nhiet_nzxt_kraken_x73_rgb_white_360mm_rl_krx73_rw.jpg', 'Hỗ trợ Socket:Socket LGA 1200, 115X, 1366, 2011, 2011-3, 2066 AMD AMD Socket AM4, sTRX4*, TR4*</br>\r\nKích thước :143mm x 315mm x 30mm</br>\r\nĐiện áp: 12V</br>', 10, 1, 0, '2023-12-07 14:16:17', 9),
(43, 14, 'Tản nhiệt khí Cooler Master Hyper 620S ARGB', 'mvc/public/images/products/24398_tan_nhiet_khi_cooler_master_hyper_620s_argb.jpg', '- Hỗ trợ Socket:LGA1700, LGA1200, LGA1151, LGA1150, LGA1155, LGA1156, AM5, AM4</br>\r\n- Kích thước:125 x 137 x 154.9 mm</br>\r\n- Số lượng quạt: 2 Quạt</br>', 4, 1, 0, '2023-12-07 14:17:55', 10),
(44, 14, 'TẢN NHIỆT ID-COOLING CPU SE-214i version 2020', 'mvc/public/images/products/17498_tan_nhiet_id_cooling_cpu_se_214i.jpg', '- Hỗ trợ Socket:Intel /1151/1150/1155/1156/1200</br>\r\n- Kích thước:124×73×154mm</br>\r\n- Điện áp: 12VDC</br>', 5, 1, 0, '2023-12-07 14:19:29', 11),
(45, 14, 'Tản nhiệt nước CPU AIO TUF Gaming LC 240 ARGB', 'mvc/public/images/products/18035_tan_nhiet_cpu_asus_tuf_lc_240_rgb.jpg', '- Hỗ trợ Socket:Intel:LGA 1200,115x,1366,AMD: AM4</br>\r\n- Kích thước:272 x 122 x 27 mm</br>\r\n- Điện áp: N/A</br>', 3, 1, 0, '2023-12-07 14:22:44', 12),
(46, 12, 'Laptop Apple Macbook Air 13', 'mvc/public/images/products/19569_laptop_apple_macbook_air_2020_mgnd3saa_gold_3.jpg', '- CPU: Apple M1</br>\r\n- RAM/SSD: 8GB/ 256GB SSD</br>\r\n-VGA: Apple GPU 7 core</br>\r\n- Màn hình:13.3\" ( 2560 x 1600 )</br>\r\n- HĐH: Mac OS</br>\r\n- Màu sắc/ Chất liệu: gold</br>', 15, 1, 0, '2023-12-07 14:28:04', 1),
(48, 15, 'Cổng chuyển Hyperdrive SLIM USB-C', 'mvc/public/images/products/15458_cong_chuyen_hyperdrive_slim_usb_c_hd247b_gray.jpg', '', 7, 1, 0, '2023-12-07 14:33:26', 13),
(49, 15, 'Hub Robot Type C chuyển đổi đa năng 3 in 1', 'mvc/public/images/products/19659_hub_robot_usb_c_chuyen_doi_da_nang_3_in_1_ht430_trang_1.jpg', '', 2, 1, 0, '2023-12-07 14:35:38', 14),
(50, 15, 'USB sang COM Unitek (Y105A)', 'mvc/public/images/products/16293_usb_to_com_unitek_y105a.jpg', '', 0, 1, 0, '2023-12-07 14:36:47', 15),
(51, 15, 'Chuột dây Logitech G102 2th Lightsync Gaming', 'mvc/public/images/products/16435_chuot_day_logitech_g102_2th_lightsync_gaming_mau_den.jpg', '- Kiểu kết nối: Có dây</br>\r\n- Chuẩn giao tiếp: USB 2.0</br>\r\n- Độ Phân Giải: 200 – 8.000 dpi</br>\r\n- Màu: Đen</br>', 0, 1, 0, '2023-12-07 14:40:30', 16),
(52, 15, 'Chuột Gaming có dây Logitech G302', 'mvc/public/images/products/8745_chuot_gaming_logitech_g302_den_1.jpg', '- Kiểu kết nối: Có dây\r\n- Chuẩn giao tiếp: USB 2.0\r\n- Độ Phân Giải: 4000DPI\r\n- Màu: Đen', 9, 1, 0, '2023-12-07 14:41:48', 16),
(53, 15, 'Bàn phím gaming Asus TUF K1', 'mvc/public/images/products/17592_ban_phim_gaming_asus_tuf_k1.jpg', '- Kiểu kết nối: CÓ dây</br>\r\n- Chuẩn giao tiếp: USB</br>\r\n- Loại phím: Bàn phím giả Cơ</br>', 10, 1, 0, '2023-12-07 14:43:34', 17),
(54, 15, 'Bàn phím gaming Asus', 'mvc/public/images/products/19750_ban_phim_gaming_asus_tuf_gaming_k3_rd.png', '- Kiểu kết nối: CÓ dây</br>\r\n- Chuẩn giao tiếp: USB</br>\r\n- Switch: RED Switch</br>', 20, 1, 0, '2023-12-07 14:45:24', 17),
(55, 15, 'Tai nghe ASUS ROG Cetra II Core', 'mvc/public/images/products/19738_tai_nghe_asus_rog_cetra_core_ii.png', '- Kết nối: jack 3.5 mm</br>\r\n- Microphone: Có</br>\r\n- kiểu: in-ear</br>', 14, 1, 0, '2023-12-07 14:47:37', 17),
(74, 12, 'Laptop Gigabyte G5 GE-51VN263SH Black', 'mvc/public/images/products/23347_laptop_gigabyte_g5_ge_51vn263sh.jpg', '', 2, 1, 0, '2023-12-10 15:42:18', 18),
(75, 13, 'Laptop Apple Macbook Air 13', 'mvc/public/images/products/19568_laptop_apple_macbook_air_2020_mgn93saa_silver_3.jpg', '', 12, 1, 0, '2023-12-10 16:05:49', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Người dùng'),
(2, 'Quản lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `verify` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `role_id`, `name`, `email`, `phone`, `password`, `address`, `verify`) VALUES
(1, 2, 'Admin', 'admin@gmail.com', '0387578520', '1234567', 'Hai Ba, Hai Lang, Quang Tri', '26333'),
(4, 1, 'Hoai Nam', 'nam@gmail.com', '15454545', '1111111', '1212121', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variant`
--

CREATE TABLE `variant` (
  `variant_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `variant`
--

INSERT INTO `variant` (`variant_id`, `product_id`, `size`, `price`) VALUES
(81, 34, 'ONE', 10650000),
(84, 35, '8GB-256GB', 21050000),
(85, 35, '16GB-256GB', 25050000),
(86, 35, '24GB-512GB', 30050000),
(87, 36, '8GB-256GB', 42990000),
(88, 36, '16GB-256GB', 44990000),
(89, 36, '24GB-512GB', 45990000),
(90, 37, '8GB-256GB', 14650000),
(91, 37, '16GB-256GB', 15650000),
(92, 37, '24GB-512GB', 17650000),
(93, 38, '8GB-256GB', 32990000),
(94, 38, '16GB-256GB', 33990000),
(95, 38, '24GB-512GB', 35990000),
(96, 39, '8GB-256GB', 16350000),
(97, 39, '16GB-256GB', 18350000),
(98, 39, '24GB-512GB', 20350000),
(99, 40, 'ONE', 9700000),
(102, 41, 'ONE', 9590000),
(105, 42, 'ONE', 5950000),
(108, 43, 'ONE', 850000),
(111, 44, 'ONE', 410000),
(114, 45, 'ONE', 3100000),
(117, 46, '8GB-256GB', 18990000),
(118, 46, '16GB-256GB', 20990000),
(119, 46, '24GB-512GB', 27850000),
(123, 48, 'ONE', 2500000),
(126, 49, 'ONE', 510000),
(129, 50, 'ONE', 220),
(132, 51, 'ONE', 580000),
(135, 52, 'ONE', 824.5),
(138, 53, 'ONE', 1200000),
(141, 54, 'ONE', 2250000),
(144, 55, 'ONE', 1550000),
(197, 74, '8GB-256GB', 12000000),
(198, 74, '16GB-256GB', 23000000),
(199, 74, '24GB-512GB', 26850000),
(200, 75, '8GB-256GB', 18990000),
(201, 75, '16GB-256GB', 22850000),
(202, 75, '24GB-512GB', 26850000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`details_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `variant_id` (`variant_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Chỉ mục cho bảng `variant`
--
ALTER TABLE `variant`
  ADD PRIMARY KEY (`variant_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `variant`
--
ALTER TABLE `variant`
  MODIFY `variant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `fk_brand_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`variant_id`) REFERENCES `variant` (`variant_id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Các ràng buộc cho bảng `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `variant_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
