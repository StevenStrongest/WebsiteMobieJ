-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2020 lúc 12:34 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobie`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `ma_dh` int(11) DEFAULT NULL,
  `ten_sp` varchar(500) DEFAULT NULL,
  `gia_ban` int(11) DEFAULT NULL,
  `sl_dat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`ma_dh`, `ten_sp`, `gia_ban`, `sl_dat`) VALUES
(92, 'IPHONE XR 128GB', 24900000, 1),
(92, 'ASUS ZENFONE 5 (ZE620KL)', 7990000, 2),
(94, 'IPHONE XR 128GB', 24900000, 1),
(113, 'IPHONE XR 128GB', 24900000, 1),
(113, 'Pin sạc dự phòng iWALK 8000 mAh UBT 8000X', 649000, 1),
(114, 'Xiaomi Black Shark 2', 8490000, 1),
(114, 'Samsung Galaxy A71', 9790000, 1),
(114, 'Oppo Reno 2F - R8GB/128GB', 7490000, 1),
(115, 'SONY XPERIA XA1 PLUS', 1000000, 1),
(120, 'HUAWEI NOVA 3', 9900000, 1),
(122, 'IPHONE XS MAX 64GB', 34000000, 1),
(122, 'Xiaomi Black Shark 2', 8490000, 1),
(123, 'HUAWEI NOVA 3', 9900000, 1),
(123, 'IPHONE XS MAX 64GB', 34000000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia_pk`
--

CREATE TABLE `danh_gia_pk` (
  `ma_phu_kien` int(11) DEFAULT NULL,
  `ma_kh` int(11) DEFAULT NULL,
  `so_sao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_gia_pk`
--

INSERT INTO `danh_gia_pk` (`ma_phu_kien`, `ma_kh`, `so_sao`) VALUES
(1, 6, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia_sp`
--

CREATE TABLE `danh_gia_sp` (
  `ma_dt` int(11) DEFAULT NULL,
  `ma_kh` int(11) DEFAULT NULL,
  `so_sao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_gia_sp`
--

INSERT INTO `danh_gia_sp` (`ma_dt`, `ma_kh`, `so_sao`) VALUES
(3, 6, 5),
(2, 6, 5),
(55, 6, 5),
(5, 6, 5),
(7, 6, 4),
(1, 9, 5),
(3, 9, 5),
(7, 9, 3),
(4, 6, 4),
(6, 6, 3),
(1, 6, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_sp`
--

CREATE TABLE `danh_muc_sp` (
  `ma_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_sp`
--

INSERT INTO `danh_muc_sp` (`ma_danh_muc`, `ten_danh_muc`) VALUES
(1, 'Sản phẩm nổi bật'),
(2, 'Sản phẩm mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(11) NOT NULL,
  `ma_kh` int(11) DEFAULT NULL,
  `ngay_dat` datetime DEFAULT current_timestamp(),
  `sdt` varchar(11) DEFAULT NULL,
  `dia_chi` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `ten` varchar(255) DEFAULT NULL,
  `gioi_tinh` bit(1) DEFAULT NULL,
  `tong_gia` int(11) DEFAULT NULL,
  `tinh_trang_dh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`ma_dh`, `ma_kh`, `ngay_dat`, `sdt`, `dia_chi`, `email`, `ten`, `gioi_tinh`, `tong_gia`, `tinh_trang_dh`) VALUES
(92, 11, '2020-05-17 09:18:22', '0378485199', '27-Thanh Xuân-Hà Nội', 'd01645467035@gmail.com', 'Vũ Mạnh Hùng', b'1', 40920000, 3),
(94, 11, '2020-05-17 09:48:30', '0933386175', '273-Đội Cấn-Hà Nội', 'ducmanhdv@gmail.com', 'Nguyễn Văn Long', b'1', 24940000, 2),
(113, 12, '2020-05-18 16:01:47', '333381519', 'Số nhà 1, Ngõ 257, Xuân Khanh - Sơn Tây - Hà Nội', 'ducmanhdv@gmail.com', 'Quang Dũng', b'1', 25589000, 4),
(114, 13, '2020-05-19 14:55:28', '976143266', 'Hà Nam', 'haipenta@gmail.com', 'Lương Văn Hải', b'1', 25810000, 4),
(115, 14, '2020-05-21 21:14:41', '366681519', 'Số nhà 1, Ngõ 257, Xuân Khanh - Sơn Tây - Hà Nội', 'halinhxk74@gmail.com', 'Hà Khánh Linh', b'0', 1040000, 3),
(120, 6, '2020-05-30 13:56:35', '333381519', 'dfddfgdfg', 'khanhtungt3h@gmail.com', 'Nguyễn Khánh Tùng', b'1', 9940000, NULL),
(122, 6, '2020-06-01 22:08:32', '971439061', 'Số nhà 1, Ngõ 257, Xuân Khanh - Sơn Tây - Hà Nội', 'duong25674@gmail.com', 'Đức Mạnh', b'1', 42530000, 3),
(123, 6, '2020-06-19 16:55:58', '971439061', 'Số nhà 1, Ngõ 257, Xuân Khanh - Sơn Tây - Hà Nội', 'ducmanhdv@gmail.com', 'Đức Mạnh', b'1', 77940000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_dien_thoai`
--

CREATE TABLE `hang_dien_thoai` (
  `ma_hang` int(11) NOT NULL,
  `ten_hang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_dien_thoai`
--

INSERT INTO `hang_dien_thoai` (`ma_hang`, `ten_hang`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Microsoft'),
(4, 'Oppo'),
(5, 'Sony'),
(6, 'Nokia'),
(7, 'Xiaomi'),
(8, 'Huawei'),
(9, 'Vivo'),
(10, 'Realme'),
(11, 'Vsmart'),
(12, 'Lenovo'),
(13, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ten_kh` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `ten_dn` varchar(500) DEFAULT NULL,
  `mat_khau` varchar(500) DEFAULT NULL,
  `ngay_lap` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_kh`, `email`, `ten_dn`, `mat_khau`, `ngay_lap`) VALUES
(6, 'Đức Mạnh', 'ducmanhdv@gmail.com', 'dsada', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-14 16:52:19'),
(8, 'Đức Mạnh', 'ducmanhdv@gmail.com', 'asfs', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-14 16:52:19'),
(9, 'Quang Dũng', 'ducmanhdv@gmail.com', 'thegioididong', 'd34da487c90b4c94de7a3557a8743894', '2020-05-14 16:52:19'),
(10, 'Nguyễn Thùy Dương', 'duong25674@gmail.com', 'duongxk', '5e3f6f82180e4cec6d13c029afac842a', '2020-05-15 15:39:45'),
(11, 'Vũ Mạnh Hùng', 'hungdzvl@gmail.com', 'hungdz1995', 'e13dd027be0f2152ce387ac0ea83d863', '2020-05-16 22:57:41'),
(12, 'Nguyễn Thu Hương', 'huongfiora@gmail.com', 'huongcute11', 'd2e35876d7d78d27d950efd029df1b21', '2020-05-18 15:19:51'),
(13, 'Lương Văn Hải', 'haipenta@gmail.com', 'haipenta', 'f0898af949a373e72a4f6a34b4de9090', '2020-05-19 14:53:39'),
(14, 'Hà Khánh Linh', 'halinhxk74@gmail.com', 'linhxk74', 'fcea920f7412b5da7be0cf42b8c93759', '2020-05-21 21:13:43'),
(15, 'le lan', 'ducmanhdv@gmail.com', 'abcd', '25d55ad283aa400af464c76d713c07ad', '2020-05-29 22:05:47'),
(16, 'Trần long', 'phamducmanhll@gmail.com', 'longtranxk_pd', '1e3e1ae8323aba7aeab49eb2fc9b30ab', '2020-05-30 22:12:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `ma_lh` int(11) NOT NULL,
  `ten_lh` varchar(500) DEFAULT NULL,
  `email_lh` varchar(500) DEFAULT NULL,
  `nd_lh` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`ma_lh`, `ten_lh`, `email_lh`, `nd_lh`) VALUES
(1, 'Đức Mạnh', 'ducmanhdv@gmail.com', 'xin chào'),
(2, 'Đức Mạnh', 'ducmanhdv@gmail.com', 'ssfdfsdf'),
(3, 'Đức Mạnh', 'ducmanhdv@gmail.com', 'sda'),
(4, 'Đức Mạnh', 'manhduc@gmail.com', 'ádasdas'),
(5, 'Đức Mạnh', 'ducmanhdv@gmail.com', 'ádad'),
(6, 'Đức Mạnh', 'manhduc@gmail.com', 'dfsdsdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phu_kien`
--

CREATE TABLE `phu_kien` (
  `ma_phu_kien` int(11) NOT NULL,
  `ten_phu_kien` varchar(500) DEFAULT NULL,
  `gia_goc_pk` int(11) DEFAULT NULL,
  `gia_khuyen_mai_pk` int(11) DEFAULT NULL,
  `sale_pk` int(11) DEFAULT NULL,
  `anh_pk` varchar(250) DEFAULT NULL,
  `hinh_anh_lien_quan_pk` varchar(250) DEFAULT NULL,
  `mo_ta` varchar(4000) DEFAULT NULL,
  `ma_danh_muc` int(11) DEFAULT NULL,
  `sl_trong_kho_pk` int(11) DEFAULT NULL,
  `mo_ta_ct` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phu_kien`
--

INSERT INTO `phu_kien` (`ma_phu_kien`, `ten_phu_kien`, `gia_goc_pk`, `gia_khuyen_mai_pk`, `sale_pk`, `anh_pk`, `hinh_anh_lien_quan_pk`, `mo_ta`, `ma_danh_muc`, `sl_trong_kho_pk`, `mo_ta_ct`) VALUES
(1, 'Pin sạc dự phòng iWALK ', 890000, 649000, 27, 'pin-du-phong.jpg', '', '', 1, 0, '<p>Pin sạc dự phòng iWALK 8000 mAh UBT 8000X sở hữu thiết kế tối ưu với kích thước chỉ tương đương một chiếc smartphone</p>\r\n'),
(2, 'ĐẾ SẠC KHÔNG DÂY BELKIN CHO SAMSUNG', 1000000, 599000, 40, 'ĐẾ SẠC KHÔNG DÂY BELKIN CHO SAMSUNG.jpg', '', 'Thiết kế nhỏ gọn, trang nhã\r\nChứng nhận sạc không dây chuẩn Qi', 1, 7, NULL),
(3, 'GẬY TỰ SƯỚNG THÔNG MINH', 100000, 50000, 50, 'GẬY TỰ SƯỚNG THÔNG MINH.jpg', '', 'Kẹp được cho mọi loại máy ảnh compact loại nhỏ hoặc thậm chí kẹp được cả các máy camera hành trình,\r\nSử dụng Remote Bluetooth, Remote Bluetooth có thể gắn lên gậy hoặc tháo rời dễ dàng.', 1, 10, NULL),
(4, 'Loa Bluetooth Anker Soundcore Mini A3101', 850000, 650000, 23, 'Loa Bluetooth Anker Soundcore Mini A3101.jpg', '', 'Loa Bluetooth Anker Soundcore Mini A3101 là thiết bị âm thanh chính hãng Anker', 1, 10, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan_quan_tri`
--

CREATE TABLE `tai_khoan_quan_tri` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `repassword` varchar(255) DEFAULT NULL,
  `ngay_tao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan_quan_tri`
--

INSERT INTO `tai_khoan_quan_tri` (`id`, `user`, `password`, `email`, `level`, `repassword`, `ngay_tao`) VALUES
(9, 'admin', 'd34da487c90b4c94de7a3557a8743894', 'ducmanhdv@gmail.com', 1, 'd34da487c90b4c94de7a3557a8743894', '2020-05-14 16:53:39'),
(47, 'admin2', 'e10adc3949ba59abbe56e057f20f883e', 'ducmanhdv@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', '2020-05-14 16:53:39'),
(72, 'test', 'd1abaa4298d9bc1d603c946641e5fac1', 'ducmanhdv@gmail.com', 2, 'd1abaa4298d9bc1d603c946641e5fac1', '2020-05-15 09:44:20'),
(78, 'manh', 'b2130cc690a15a0ed214904cfa7460d0', 'ducmanhdv@gmail.com', 1, 'b2130cc690a15a0ed214904cfa7460d0', '2020-06-06 10:53:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_dien_thoai`
--

CREATE TABLE `thong_tin_dien_thoai` (
  `ma_dt` int(11) NOT NULL,
  `ten_dt` varchar(250) NOT NULL,
  `gia_goc` int(11) NOT NULL,
  `gia_khuyen_mai` int(11) DEFAULT NULL,
  `anh_sp` varchar(500) DEFAULT NULL,
  `hinh_anh_lien_quan` varchar(1000) DEFAULT NULL,
  `man_hinh` varchar(250) DEFAULT NULL,
  `camera_truoc` varchar(250) DEFAULT NULL,
  `camera_sau` varchar(250) DEFAULT NULL,
  `ram` varchar(250) DEFAULT NULL,
  `bo_nho_trong` varchar(250) DEFAULT NULL,
  `cpu` varchar(250) DEFAULT NULL,
  `gpu` varchar(250) DEFAULT NULL,
  `dung_luong_pin` varchar(250) DEFAULT NULL,
  `he_dieu_hanh` varchar(250) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `ma_danh_muc` int(11) DEFAULT NULL,
  `mo_ta` mediumtext DEFAULT NULL,
  `sl_trong_kho` int(11) DEFAULT NULL,
  `hang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_dien_thoai`
--

INSERT INTO `thong_tin_dien_thoai` (`ma_dt`, `ten_dt`, `gia_goc`, `gia_khuyen_mai`, `anh_sp`, `hinh_anh_lien_quan`, `man_hinh`, `camera_truoc`, `camera_sau`, `ram`, `bo_nho_trong`, `cpu`, `gpu`, `dung_luong_pin`, `he_dieu_hanh`, `sale`, `ma_danh_muc`, `mo_ta`, `sl_trong_kho`, `hang`) VALUES
(1, 'IPHONE XR 128GB', 27000000, 24900000, 'Iphone-XR-128GB.png', 'Iphone-XR-128GB.png,iphone-red.png,iphone-yellow.png,iphone-blue.png', '6.1 inchs, 828 x 1792 Pixels', '7.0 MP', '12.0 MP', '3 GB', '128 GB', 'Apple A12 Bionic, 6, Đang cập nhật', 'Apple GPU 4 nhân', 'Lâu hơn iPhone 8 Plus 1,5h', 'iOS 12', 8, 2, '<h2><strong>iPhone XR</strong></h2>\r\n\r\n<p>Ứng cử vi&ecirc;n đầu ti&ecirc;n đ&oacute; l&agrave; chiếc iPhone XR v&igrave; thực sự sản phẩm n&agrave;y qu&aacute; ngon. Với XR ch&uacute;ng ta sẽ c&oacute; hiệu năng cực k&igrave; mạnh mẽ đến từ con chip Apple A12 giống như&nbsp; iPhone XS, XS Max nhưng gi&aacute; th&igrave; lại rẻ hơn rất nhiều c&ograve;n g&igrave; tuyệt vời hơn đ&uacute;ng kh&ocirc;ng n&agrave;o?&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/12/apple-iphone-xr-cam-300x300.png\" style=\"height:300px; margin-left:190px; margin-right:190px; width:300px\" /></p>\r\n\r\n<p>Về thiết kế iPhone XR c&oacute; khung viền bằng kim loại v&agrave; 2 mặt bằng k&iacute;nh cực kỳ sang trọng. C&oacute; lẽ đ&acirc;y l&agrave; phi&ecirc;n bản được ra mắt với nhiều m&agrave;u sắc nhất trong c&aacute;c d&ograve;ng iPhone như l&agrave; da cam, xanh da trời, đỏ, v&agrave;ng&nbsp; rất trẻ trung v&agrave; năng động. Mặc d&ugrave; chỉ sở hữu duy nhất 1 camera sau 12MP khẩu độ f1.8 nhưng những bức ảnh từ iPhone XR cho ra vẫn đẹp xuất sắc kh&ocirc;ng thua k&eacute;m g&igrave; iPhone XS MAX đ&aacute;ng tiếc l&agrave; XR kh&ocirc;ng c&oacute; camera tele th&ocirc;i.</p>\r\n\r\n<p>C&ugrave;ng với hiệu năng, thời lượng pin cũng l&agrave; điểm mạnh của XR, m&aacute;y được trang bị vi&ecirc;n pin gần 3000mAh thấp hơn XS MAX nhưng thực tế thời gian sử dụng c&ograve;n l&acirc;u hơn cả XS MAX bởi m&aacute;y c&oacute; m&agrave;n h&igrave;nh nhỏ hơn v&agrave; độ ph&acirc;n giải HD+ n&ecirc;n cũng tiết kiệm pin hơn rất nhiều.&nbsp;</p>\r\n\r\n<p><img alt=\"6 phiên bản màu sắc nổi bật của iPhone Xr\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/11/6-m%C3%A0u.jpg\" style=\"height:300px; margin-left:100px; margin-right:100px; width:474px\" /></p>\r\n\r\n<p><strong><em>Mục lục b&agrave;i viết:&nbsp;</em></strong></p>\r\n\r\n<p>Mua iPhone Xr 2019 vừa ngon vừa rẻ &ndash; 5 điều phải biết<br />\r\n1. Hiệu năng mạnh mẽ, cấu h&igrave;nh tương đương Xs Max<br />\r\n2. Pin tr&acirc;u, d&ugrave;ng l&acirc;u<br />\r\n3. Thiết kế thời thượng, sang trọng v&agrave; đẹp mắt<br />\r\n4. M&aacute;y hỗ trợ 2 sim tại Việt Nam<br />\r\n5. Gi&aacute; &ldquo;rẻ&rdquo; bất ngờ</p>\r\n\r\n<p><strong><em>1. Hiệu năng mạnh mẽ, cấu h&igrave;nh tương đương&nbsp;<a href=\"https://didongthongminh.vn/iphone-xs-max-64gb-moi-tran-chua-active-troi-bao-hanh\">Xs Max</a></em></strong></p>\r\n\r\n<p>So s&aacute;nh với Xs Max, ch&uacute;ng ta c&oacute; thể thấy Xr sở hữu cấu h&igrave;nh tương đương chiếc smartphone vốn được b&aacute;n với mức gi&aacute; ch&ecirc;nh lệch cao hơn rất nhiều n&agrave;y. C&ugrave;ng chạy hệ điều h&agrave;nh IOS 12 v&agrave; tiếp tục được Apple hỗ trợ n&acirc;ng cấp l&ecirc;n IOS 13.1.2. Trong nhiều năm tới đ&acirc;y, chắc chắn một điều rằng Xr vẫn sẽ l&agrave; sản phẩm được săn l&ugrave;ng tr&ecirc;n thương trường smartphone.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/11/danh-s%C3%A1ch-%C4%91%C3%A3-c%E1%BA%AFt.png\" style=\"height:328px; margin-left:60px; margin-right:60px; width:500px\" /></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Bảng xếp hạng hiệu năng iPhone Xr lọt top 10 do Antutu c&ocirc;ng bố&nbsp;</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=1\"><em><strong>iPhone Xr</strong></em></a>&nbsp;sở hữu bộ vi xử l&yacute; v&ocirc; c&ugrave;ng mạnh mẽ với chip A12, tiến tr&igrave;nh r&uacute;t gọn 7 nm c&ugrave;ng cấu tạo s&aacute;u nh&acirc;n (2 x 2.5 Ghz, 4 x 1.6 Ghz), kết hợp với Apple GPU (đồ họa l&otilde;i tứ) độc quyền, đảm bảo khả năng đa nhiệm cao, tốc độ xử l&yacute; th&ocirc;ng tin đồ họa nhanh ch&oacute;ng, hiển thị h&igrave;nh ảnh li&ecirc;n tục, cho phản hồi người d&ugrave;ng gần như tức khắc. Bạn c&oacute; thể thoải m&aacute;i trải nghiệm mọi t&aacute;c vụ tr&ecirc;n chiếc Xr, ngay cả những game nặng cực hot hiện nay kh&ocirc;ng bị giật, kh&ocirc;ng độ trễ nh&eacute;. Ri&ecirc;ng về chất lượng h&igrave;nh ảnh hiển thị v&ocirc; c&ugrave;ng sinh động v&agrave; sắc n&eacute;t.&nbsp;&nbsp;</p>\r\n\r\n<p>Một số h&igrave;nh ảnh sắc n&eacute;t ghi lại từ camera iPhone Xr:</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/11/camera.png\" style=\"height:313px; margin-left:60px; margin-right:60px; width:500px\" /></p>\r\n\r\n<p><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; H&igrave;nh ảnh sắc n&eacute;t từ lăng k&iacute;nh camera iPhone Xr</em></p>\r\n\r\n<p><em><img alt=\"\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/11/%E1%BA%A3nh-%C4%91%C3%A3-c%E1%BA%AFt.png\" style=\"height:357px; margin-left:60px; margin-right:60px; width:500px\" /></em></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <em>Ảnh chụp sắc n&eacute;t ngay cả trong điều kiện &aacute;nh s&aacute;ng yếu&nbsp;</em></p>\r\n\r\n<p><strong><em>2. Pin tr&acirc;u, d&ugrave;ng l&acirc;u</em></strong></p>\r\n\r\n<p>C&oacute; lẽ, kh&ocirc;ng một cụm từ n&agrave;o kh&aacute;c &ldquo;Pin tr&acirc;u, d&ugrave;ng l&acirc;u&rdquo; đủ sức nặng lột tả điểm nhấn vi&ecirc;n pin của Xr. Apple cải tiến dung lượng vi&ecirc;n pin Li-ion cực đỉnh, đạt mức 2942 mAh, vượt trội ho&agrave;n to&agrave;n so với định mức chỉ 2716 mAh tr&ecirc;n iPhone X. Điều n&agrave;y l&yacute; giải v&igrave; sao Xr từng được ghi nhận l&agrave; chiếc điện thoại c&oacute; thời lượng sử dụng pin l&acirc;u nhất trong số c&aacute;c smartphone ra mắt c&ugrave;ng thời điểm cuối năm 2018.&nbsp;</p>\r\n\r\n<p>Thực tế, bạn c&oacute; thể đ&agrave;m thoại k&eacute;o d&agrave;i 16 tiếng li&ecirc;n tục tr&ecirc;n m&aacute;y v&agrave; kh&ocirc;ng lo lắng vấn đề sạc pin v&igrave; Apple hỗ trợ sạc pin nhanh 15W c&ugrave;ng sạc kh&ocirc;ng d&acirc;y Qi v&ocirc; c&ugrave;ng thuận tiện. Bạn c&oacute; thể sạc đầy 50% pin chỉ trong 30 ph&uacute;t đồng hồ. Một con số hết sức ấn tượng phải kh&ocirc;ng n&agrave;o?</p>\r\n\r\n<p><strong><em>3. Thiết kế thời thượng, sang trọng v&agrave; đẹp mắt</em></strong></p>\r\n\r\n<p><strong><em><img alt=\"\" src=\"https://cdn.didongthongminh.vn/upload_images/2019/11/m%C3%A0n-h%C3%ACnh-%C4%91%E1%BA%B9p.jpg\" style=\"height:333px; margin-left:60px; margin-right:60px; width:500px\" /></em></strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<em>iPhone Xr thừa hưởng thiết kế m&agrave;n h&igrave;nh tai thỏ của thương hiệu &ldquo;T&aacute;o khuyết&rdquo;</em>&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i việc được thừa hưởng thiết kế quen thuộc đ&oacute;, Xr nổi bật với mặt lưng cũng bằng k&iacute;nh cường lực s&aacute;ng b&oacute;ng đi k&egrave;m khung nh&ocirc;m cao cấp bao viền, bo tr&ograve;n bốn g&oacute;c t&aacute;o bạo cho m&aacute;y sự sang trọng, thanh tho&aacute;t. Thiết kế n&agrave;y gi&uacute;p Xr c&oacute; khả năng chống bụi v&agrave; chống nước tốt hơn, đạt mức IP67.&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 1),
(2, 'ASUS ZENFONE 5 (ZE620KL)', 10000000, 7990000, 'Asus Zenfone 5.jpg', 'Asus Zenfone 5.jpg,Asus-Zenfone-5-mau1.jpg,Asus-Zenfone-5-mau2.jpg', '6.2', '8 MP', '12MP và 8MP (2 Camera)', '4 GB', '64 GB', 'Qualcomm SDM636 Snapdragon 636, 8 nhân, 1.8 Ghz', 'Adreno 509', '3300 mAh', '', 20, 1, '<p><img alt=\"\" src=\"https://cdnimgvn.nhabanhang.com/sp/f/277424/dien-thoai-asus-zenfone-5q-zc600kl-64gb-ban-quoc-te-den-747.jpg\" style=\"height:300px; margin-left:190px; margin-right:190px; width:300px\" /></p>\r\n\r\n<p>Sau khoảng thời gian &ldquo;im hơi lặng tiếng&rdquo;, h&atilde;ng điện thoại ASUS đ&atilde; tạo ra bất ngờ tại triển l&atilde;m MWC 2018 khi giới thiệu chiếc Asus Zenfone 5 (ZE620KL) với ngoại h&igrave;nh tương tự với si&ecirc;u phẩm iPhone X đ&igrave;nh đ&aacute;m của Apple.</p>\r\n\r\n<p><strong>Thiết kế sang trọng</strong></p>\r\n\r\n<p>Điện thoại Zenfone 5 (ZE620KL) c&oacute; thiết kế tương tự như &nbsp;iPhone X với m&agrave;n h&igrave;nh tr&agrave;n viền v&agrave; &ldquo;tai thỏ&rdquo; ở mặt trước, tuy nhi&ecirc;n, cụm &ldquo;notch&rdquo; tr&ecirc;n chiếc smartphone của ASUS nhỏ hơn so với iPhone X. Đặc biệt nhất l&agrave; phần mặt sau, khi tấm k&iacute;nh cường lực được t&ocirc; điểm bởi những đường cắt đồng t&acirc;m phản chiếu &aacute;nh s&aacute;ng giao nhau tại cảm biến v&acirc;n tay.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdnimgvn.nhabanhang.com/sp/f/277424/dien-thoai-asus-zenfone-5q-zc600kl-64gb-ban-quoc-te-den-23.jpg\" style=\"height:360px; width:100%\" /></p>\r\n\r\n<p><strong>M&agrave;n h&igrave;nh với độ ph&acirc;n giải Full HD+</strong></p>\r\n\r\n<p>Zenfone 5 ZE620KL sở hữu m&agrave;n h&igrave;nh c&oacute; k&iacute;ch thước l&ecirc;n đến 6.2 inch nhưng nhờ tỷ lệ m&agrave;n h&igrave;nh 19:9 v&agrave; phần viền được tối ưu, cảm gi&aacute;c cầm nắm trong tay vẫn kh&aacute; thoải m&aacute;i. Đồng thời, khả năng hiển thị của m&agrave;n h&igrave;nh l&agrave; rất tốt với độ ph&acirc;n giải Full HD+ c&ugrave;ng tấm nền IPS LCD chất lượng cao, mang lại những h&igrave;nh ảnh sắc n&eacute;t v&agrave; trung thực về m&agrave;u sắc.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdnimgvn.nhabanhang.com/sp/f/277424/dien-thoai-asus-zenfone-5q-zc600kl-64gb-ban-quoc-te-den-267.jpg\" style=\"height:380px; width:100%\" /></p>\r\n\r\n<p><strong>Hiệu năng mạnh mẽ</strong></p>\r\n\r\n<p>Điện thoại Asus Zenfone 5 t&iacute;ch hợp vi xử l&yacute; Snapdragon 636 t&aacute;m nh&acirc;n, RAM 4 GB v&agrave; chạy hệ điều h&agrave;nh Android 8.0 Oreo. Zenfone 5 với phần cứng tốt v&agrave; phần mềm thuộc loại mới nhất, m&aacute;y cho tốc độ xử l&yacute; nhanh, chạy đa nhiệm mượt v&agrave; đủ sức &ldquo;g&aacute;nh v&aacute;c&rdquo; hầu hết mọi ứng dụng nặng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdnimgvn.nhabanhang.com/sp/f/277424/dien-thoai-asus-zenfone-5q-zc600kl-64gb-ban-quoc-te-den-832.jpg\" style=\"height:380px; width:100%\" /></p>\r\n\r\n<p><strong>Cảm biến v&acirc;n tay si&ecirc;u nhạy</strong></p>\r\n\r\n<p>Asus Zenfone 5 (ZE620KL) được trang bị cảm biến v&acirc;n tay đặt ở mặt sau điện thoại v&ocirc; c&ugrave;ng nhạy, c&oacute; tốc độ nhận diện cực nhanh, gi&uacute;p người d&ugrave;ng mở kh&oacute;a m&aacute;y chỉ trong t&iacute;ch tắc cũng như tăng t&iacute;nh bảo mật, giữ an to&agrave;n cho những dữ liệu b&ecirc;n trong.f</p>\r\n', 6, 13),
(3, 'HUAWEI NOVA 3', 11000000, 9900000, 'Huawei Nova 3.jpg', 'Huawei Nova 3.jpg,Huawei-Nova-3-mau1.jpg,Huawei-Nova-3-mau2.jpg', '6.3 inches, 2340x1080 pixels', '24M+2M', '16M+24M', '6 GB', '128 GB', 'UAWEI Kirin 970, Octa-core, 4*Cortex A73 2.36GHz + 4*Cortex A53 1.8GHz', 'Mali-G72', '', '', 10, 1, '<h3>Bản n&acirc;ng cấp ho&agrave;n hảo của Huawei Nova 2i</h3>\r\n\r\n<p><strong>Điện thoại Huawei Nova 3i</strong>&nbsp;ra đời nhầm thực hiện chuỗi tiếp nối th&agrave;nh c&ocirc;ng v&agrave;o d&ograve;ng ph&acirc;n kh&uacute;c điện thoại tầm trung của một trong những h&atilde;ng điện thoại h&agrave;ng đầu Trung Quốc. C&oacute; thể xem Nova 3i l&agrave; phi&ecirc;n bản n&acirc;ng cấp l&yacute; tưởng của Nova 2i với cụm camera k&eacute;p selfie với khung kim loại chắc chắn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/b8/ad/69/515fec37c78f8b71c7b423896740f576.jpg\" style=\"height:300px; width:100%\" /></p>\r\n\r\n<h3>Cuốn h&uacute;t từ vẻ đẹp b&ecirc;n ngo&agrave;i</h3>\r\n\r\n<p>Được thiết kế nguy&ecirc;n khối với m&agrave;n h&igrave;nh tai thỏ ở mặt trước.&nbsp;Huawei nova 3i được ho&agrave;n thiện bởi mặt lưng k&iacute;nh cong 2.5D sang trọng, kết hợp bộ khung kim loại chắc chắn mang lại vẻ đẹp b&oacute;ng bẩy, sang trọng nhưng cũng kh&ocirc;ng k&eacute;m phần tinh tế. C&aacute;c g&oacute;c cạnh được bo cong nhẹ nh&agrave;ng, nhằm đem lại cảm gi&aacute;c cầm nắm &ecirc;m tai v&agrave; dễ chịu hơn, kết hợp với m&agrave;u sắc nổi bật, Nova 3i sẽ l&agrave; một chiếc điện thoại m&agrave; bất kỳ đối tượng n&agrave;o cũng mong muốn c&oacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/ef/c5/7c/64dbb8f4569538273049488cb2bbd38c.jpg\" style=\"height:300px; width:100%\" /></p>\r\n\r\n<p>M&agrave;n h&igrave;nh Fullview tỷ lệ 19.5:9</p>\r\n\r\n<p>M&agrave;n h&igrave;nh Nova 3i được bao quanh bởi c&aacute;c cạnh viền mỏng, k&iacute;ch thước m&agrave;n h&igrave;nh to 6.3 inch đi k&egrave;m tỷ lệ m&agrave;n h&igrave;nh mới 19.5:9 c&ugrave;ng chuẩn ph&acirc;n giải h&igrave;nh ảnh l&ecirc;n đến Full HD+ mang đến những khung h&igrave;nh sắc n&eacute;t v&agrave; chi tiết. C&ocirc;ng nghệ m&agrave;n h&igrave;nh LTPS gi&uacute;p cho g&oacute;c nh&igrave;n được mở rộng hơn, m&agrave;u sắc được t&aacute;i tạo ch&iacute;nh x&aacute;c, ch&acirc;n thực v&agrave; sống động.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/46/60/ae/e78d4353f2dc92099028d06f95357b8d.jpg\" style=\"height:360px; width:100%\" /></p>\r\n\r\n<h3>Trải nghiệm kh&aacute;c biệt với 4 camera</h3>\r\n\r\n<p>Được trang bị camera trước 24 MP + 2 MP, m&aacute;y trực tiếp hướng đến đối tượng người d&ugrave;ng trẻ tuổi nhằm phục vụ nhu cầu chụp ảnh selfie s&aacute;ng tạo mỗi ng&agrave;y với những bức ảnh độc đ&aacute;o kết hợp ph&ocirc;ng nền được x&oacute;a một c&aacute;ch kỳ ảo, mang đến sự kh&aacute;c biệt ấn tượng cho người sử dụng.</p>\r\n\r\n<p>Ngo&agrave;i ra cụm camera ch&iacute;nh cũng được chăm ch&uacute;t cẩn thận với cảm biến k&eacute;p 16MP v&agrave; 2MP, được hỗ trợ bởi tr&iacute; th&ocirc;ng minh nh&acirc;n tạo để&nbsp;c&oacute; thể ph&acirc;n t&iacute;ch giới t&iacute;nh, độ tuổi, m&agrave;u da v&agrave; m&ocirc;i trường &aacute;nh s&aacute;ng xung quanh của người d&ugrave;ng để mang đến cho bạn bức ảnh chụp kh&ocirc;ng chỉ đẹp, lung linh m&agrave; c&ograve;n rất tự nhi&ecirc;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/67/b5/38/a11ab40a8f4dccc22f104d353eefd3a1.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<h3>Sẵn s&agrave;ng chinh phục mọi thử th&aacute;ch</h3>\r\n\r\n<p>Huawei Nova 3i t&iacute;ch hợp con chip Kirin 710 mới nhất do h&atilde;ng tự ph&aacute;t triển sẽ đ&aacute;p ứng ho&agrave;n hảo mọi nhu cầu l&agrave;m việc, giải tr&iacute; v&agrave; lưu trữ dữ liệu của người d&ugrave;ng. Đi k&egrave;m l&agrave; RAM 4 GB gi&uacute;p khả năng thao t&aacute;c đa nhiệm, chuyển đổi qua lại nhiều ứng dụng được m&aacute;y phản hồi hết sức mượt m&agrave; v&agrave; bộ nhớ trong l&ecirc;n đến 128 GB gi&uacute;p thiết bị lưu trữ được nhiều h&igrave;nh ảnh, video v&agrave; c&agrave;i đặt th&ecirc;m game - ứng dụng. M&aacute;y sở hữu giao diện Emui 8.2 tr&ecirc;n nền tảng Android 8.1 Oreo kh&aacute; đẹp v&agrave; th&acirc;n thiện với đa số người d&ugrave;ng phổ th&ocirc;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/c3/1c/1c/268b10445df9f9021572360a83f57c0f.jpg\" style=\"height:340px; width:100%\" /></p>\r\n\r\n<p>Thời lượng pin ấn tượng</p>\r\n\r\n<p>Được trang bị vi&ecirc;n pin dung lượng 3340 mAh&nbsp;cho ph&eacute;p bạn chơi game trong thời gian d&agrave;i, ngo&agrave;i ra c&ograve;n c&oacute; thời gian sạc nhanh ch&oacute;ng khoảng 2.5 tiếng để bạn quay lại tr&ograve; chơi trong thời gian ngắn nhất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/80/21/0c/203cc44f77b4c274ecec0a8783afa8f4.jpg\" style=\"height:360px; width:100%\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/4c/24/07/8f0ef0d3a8f6e9c20c3ae64585296a05.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/4d/56/57/5b72b04b00710b8cc8af566722b42c92.jpg\" style=\"height:410px; width:100%\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/56/15/f3/4e6d714dd986b32dcea14de49a5364c9.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://vcdn.tikicdn.com/ts/tmp/7a/e9/e0/50daf2c110daa5e0db2a4d766cb32d01.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3, 8),
(4, 'XIAOMI MI 8 64GB', 14000000, 12900000, 'Xaomi Mi 8 64GB.jpg', 'Xaomi Mi 8 64GB.jpg,Xaomi-Mi-8-64GB-mau1.jpg,Xaomi-Mi-8-64GB-mau2.jpg,Xaomi-Mi-8-64GB-mau3.jpg', '6.2 inchs, 1080 x 2280 Pixels', '20.0 MP', '12.0 MP(Dual Camera)', '6 GB', '64 GB', 'Qualcomm Snapdragon 845, 8, 4 nhân 2.8 GHz & 4 nhân 1.8 GHz', 'Adreno 630', '', '', 8, 1, '<h3>M&agrave;n h&igrave;nh lớn, trải nghiệm cực đ&atilde;</h3>\r\n\r\n<p>Một m&agrave;n h&igrave;nh lớn sẽ cho việc sử dụng, trải nghiệm thoải m&aacute;i hơn bao giờ hết. Đ&aacute;p ứng nhu cầu đ&oacute;, Xiaomi Redmi 8 c&oacute;&nbsp;<a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=4\" target=\"_blank\">k&iacute;ch thước m&agrave;n h&igrave;nh lớn</a>&nbsp;l&ecirc;n tới 6.22 inch, đi c&ugrave;ng thiết kế&nbsp;&ldquo;giọt nước&rdquo;&nbsp;nhỏ gọn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-26.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Độ ph&acirc;n giải dừng lại ở mức HD+, b&ugrave; lại lớp k&iacute;nh bảo vệ Gorilla Glass 5 gi&uacute;p tăng độ bền bỉ, an to&agrave;n cho m&agrave;n h&igrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-23.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>Pin si&ecirc;u khủng, sạc si&ecirc;u nhanh</h3>\r\n\r\n<p>Xiaomi Redmi 8 chiếm ưu thế so với c&aacute;c đối thủ nhờ sở hữu vi&ecirc;n pin 5000mAh cực khủng. Bạn c&oacute; thể chơi game, nghe nhạc suốt nhiều giờ liền, thậm ch&iacute; nếu chỉ đọc b&aacute;o, lướt Facebook m&aacute;y sẽ cho thời gian d&ugrave;ng đến hơn 2 ng&agrave;y.</p>\r\n\r\n<p>Chưa hết, Xiaomi Redmi 8 c&ograve;n được trang bị sạc nhanh Quick Change 3.0, cổng sạc Type-C thế hệ mới, gi&uacute;p giảm thời gian sạc, cũng như truyền tải dữ liệu nhanh hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-4.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>RAM lớn, chip Snapdragon 439 mượt m&agrave;</h3>\r\n\r\n<p>Xiaomi Redmi 8 được trang bị chip Snapdragon 439 t&aacute;m nh&acirc;n, 64-bit kết hợp c&ugrave;ng bộ nhớ RAM 4GB, cho ph&eacute;p mọi t&aacute;c vụ thường ng&agrave;y phản hồi nhanh ch&oacute;ng, c&aacute;c thao t&aacute;c chuyển đổi đa nhiệm mượt m&agrave;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-tgdd-10.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Ở ph&acirc;n kh&uacute;c n&agrave;y kh&ocirc;ng thể đ&ograve;i hỏi cấu h&igrave;nh qu&aacute; cao, ri&ecirc;ng c&aacute;c tựa game nặng như Li&ecirc;n Qu&acirc;n Mobile, Free Fire, c&aacute;c bạn h&atilde;y nhớ chỉnh mức setting xuống mức trung b&igrave;nh hoặc thấp để m&aacute;y đ&aacute;p ứng tốt nhất nh&eacute;!</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-tgdd-1.gif\" style=\"width:100%\" /></p>\r\n\r\n<p>Ngo&agrave;i ra bộ nhớ trong của m&aacute;y c&oacute; dung lượng 64GB kh&aacute; lớn, gi&uacute;p việc lưu trữ dữ liệu, c&agrave;i đặt ứng dụng thoải m&aacute;i hơn, kh&ocirc;ng bị g&ograve; b&oacute; như mức 16GB thường thấy ở c&aacute;c smartphone gi&aacute; rẻ.</p>\r\n\r\n<h3><strong>Camera hỗ trợ AI, thiết kế bắt mắt</strong></h3>\r\n\r\n<p>&ldquo;Giọt nước&rdquo; ph&iacute;a đỉnh m&aacute;y l&agrave; nơi chứa camera selfie 8MP hỗ trợ l&agrave;m đẹp AI, cho ra những bức ảnh ch&acirc;n dung nịnh mắt, đồng thời cũng hỗ trợ c&ocirc;ng nghệ&nbsp;nhận diện gương mặt&nbsp;đang &ldquo;l&agrave;m mưa l&agrave;m gi&oacute;&rdquo; hiện nay.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-25.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Mặt sau của m&aacute;y nổi bật với cụm đ&egrave;n flash, camera k&eacute;p 12MP + 2MP hỗ trợ c&ocirc;ng nghệ AI,&nbsp;cảm biến v&acirc;n tay&nbsp;một chạm, c&ugrave;ng nh&atilde;n hiệu &ldquo;Redmi&rdquo; đặt dọc, đ&acirc;y l&agrave; ng&ocirc;n ngữ thiết kế mới, hiện đại, đang được nhiều h&atilde;ng theo đuổi.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/212212/xiaomi-redmi-8-64gb-tgdd-10-2.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ảnh chụp chế độ đủ s&aacute;ng điện thoại Xiaomi Redmi 8</p>\r\n\r\n<p>Xiaomi Redmi 8 cho chất lượng ảnh chụp ở mức kh&aacute;, quay video Full HD với đa dạng c&aacute;c chế độ như chụp tự động, phong cảnh, ch&acirc;n dung, HDR,... đ&aacute;p ứng tốt c&aacute;c nhu cầu chụp ảnh, quay video thường ng&agrave;y.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 10, 7),
(5, 'IPHONE XS MAX 64GB', 35390000, 34000000, 'iphone Xs Max 64GB.jpg', 'iphone Xs Max 64GB.jpg,iphone-Xs-Max-64GB-mau1.png,iphone-Xs-Max-64GB-mau2.png,iphone-Xs-Max-64GB-mau3.jpg', '6.5 inchs, 1242 x 2688 Pixels', '7.0 MP', 'Dual Camera 12.0 MP', '4 GB', '64 GB', 'Apple A12 Bionic, 6, Đang cập nhật', 'Apple GPU 4 nhân', 'Lâu hơn iPhone X 1,5h', '', 4, 1, '<h2>Đặc điểm nổi bật của iPhone Xs Max 64GB</h2>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/Slider/-iphone-xs-max-thumbvideo.jpg\" style=\"height:350px; width:100%\" /></p>\r\n\r\n<h3>Thiết kế cao cấp với viền th&eacute;p kh&ocirc;ng gỉ v&agrave; mặt k&iacute;nh cường lực</h3>\r\n\r\n<p><a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=5\" target=\"_blank\">Điện thoại</a>&nbsp;iPhone Xs Max sở hữu lối thiết kế v&ocirc; c&ugrave;ng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc&nbsp;<a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=5\" target=\"_blank\">iPhone</a>&nbsp;đời trước đ&oacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-5.jpg\" style=\"height:420px; width:100%\" /></p>\r\n\r\n<p>Tuy nhi&ecirc;n,&nbsp;iPhone Xs Max lại c&oacute; một th&acirc;n h&igrave;nh to bản ngang bằng với k&iacute;ch thước d&ograve;ng Plus nhưng chứa đựng một m&agrave;n h&igrave;nh rộng lớn l&ecirc;n đến 6.5 inch.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-10.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>Nhờ thế m&agrave; bạn sẽ c&oacute; một kh&ocirc;ng gian trải nghiệm v&ocirc; c&ugrave;ng rộng r&atilde;i để thưởng thức những bộ phim chất lượng cao được trở n&ecirc;n trọn vẹn.</p>\r\n\r\n<h3><br />\r\n<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-1.jpg\" style=\"height:400px; width:100%\" /></h3>\r\n\r\n<h3>M&agrave;n h&igrave;nh OLED&nbsp;chất lượng cao rộng 6.5 inch đầu ti&ecirc;n của Apple</h3>\r\n\r\n<p>Với c&ocirc;ng nghệ Super Retina kết hợp tấm nền OLED tr&ecirc;n&nbsp;iPhone Xs Max đem lại dải m&agrave;u sắc cực k&igrave; sống động v&agrave; sắc n&eacute;t đến từng chi tiết.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-8.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Apple c&ograve;n t&iacute;ch hợp th&ecirc;m c&ocirc;ng nghệ HDR10 gi&uacute;p chất lượng h&igrave;nh ảnh được n&acirc;ng cao v&agrave; mượt m&agrave; hơn đ&aacute;ng kể.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-4.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<h3>Hiệu năng đỉnh của đỉnh với&nbsp;chip Apple A12</h3>\r\n\r\n<p>L&agrave; một flagship cao cấp,&nbsp;iPhone Xs Max được Apple trang bị cho con chip mới toanh h&agrave;ng đầu của h&atilde;ng mang t&ecirc;n Apple A12 bionic.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-3-1.jpg\" style=\"height:506px; margin-left:100px; margin-right:100px; width:400px\" /></p>\r\n\r\n<p>Chip A12 bionic được x&acirc;y dựng tr&ecirc;n tiến tr&igrave;nh 7nm đầu ti&ecirc;n m&agrave; h&atilde;ng sản xuất với 6 nh&acirc;n đ&aacute;p ứng vượt trội trong việc xử l&yacute; c&aacute;c t&aacute;c vụ v&agrave; khả năng tiết kiệm năng lượng tối ưu.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-12.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>Hơn nữa,&nbsp;iPhone Xs Max c&ograve;n c&oacute; bộ xử l&yacute; đồ họa mạnh mẽ được Apple thiết kế ri&ecirc;ng gi&uacute;p hiệu năng được cải thiện rất lớn về mặt đồ họa của m&aacute;y.</p>\r\n\r\n<h3>Một số t&iacute;nh năng cao cấp được cập nhật v&agrave; bổ sung</h3>\r\n\r\n<p>Face ID&nbsp;đ&atilde; được Apple cải tiến về khả năng bảo mật cũng như cho tốc độ mở kh&oacute;a được nhanh hơn nhờ c&aacute;c thuật to&aacute;n mới.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/190321/iphone-xs-max-gold-7.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>Với&nbsp;hệ thống camera&nbsp;TrueDepth&nbsp;nay bạn c&oacute; thể tự tạo cho bản th&acirc;n những bức ảnh ấn tượng với c&ocirc;ng nghệ thực tế ảo tăng cường AR.</p>\r\n\r\n<p>Ngo&agrave;i ra, hệ thống &acirc;m thanh 2 chiều tr&ecirc;n&nbsp;si&ecirc;u phẩm mới&nbsp;được Apple tinh chỉnh lại cho dải &acirc;m rộng, &acirc;m thanh sống động hơn hay khả năng kh&aacute;ng nước v&agrave; bụi cũng được n&acirc;ng cấp l&ecirc;n th&agrave;nh IP 68 đảm bảo an to&agrave;n hơn cho m&aacute;y.</p>\r\n', 6, 1),
(6, 'XIAOMI POCOPHONE F1', 8500000, 8100000, 'Xiaomi Pocophone F1.jpg', 'Xiaomi Pocophone F1.jpg,Xiaomi-Pocophone-F1-mau1.jpg,Xiaomi-Pocophone-F1-mau2.jpg,Xiaomi-Pocophone-F1-mau3.jpg', '6.0 inchs, 1080 x 2280 Pixels', '20.0 MP', 'Camera kép 12MP+5MP', '6 GB', '64 GB', 'Snapdragon 845, 8, 2.8 GHz', 'Adreno 630', '4000 mAh', 'Android 8', 5, 1, '<h2><a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=6\" target=\"_blank\">Xiaomi Pocophone F1</a>&nbsp;g&acirc;y ấn tượng mạnh cho người d&ugrave;ng khi trang bị một cấu h&igrave;nh thuộc top mạnh mẽ nhất hiện nay tr&ecirc;n thị trường nhưng lại sở hữu một mức gi&aacute; khiến bạn phải &quot;giật m&igrave;nh&quot;.</h2>\r\n\r\n<h3>Hiệu năng v&ocirc; đối trong ph&acirc;n kh&uacute;c</h3>\r\n\r\n<p>Chiếc&nbsp;<a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=6\" target=\"_blank\">điện thoại Xiaomi</a>&nbsp;n&agrave;y được biết đến l&agrave; chiếc&nbsp;<a href=\"https://banthudaodien.php\" target=\"_blank\">smartphone</a>&nbsp;gi&aacute; rẻ nhất thị trường sở hữu con chip&nbsp;Snapdragon 845 8 nh&acirc;n, con chip mạnh mẽ nhất trong năm 2018 của thế giới Android.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f16.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Ngo&agrave;i ra c&ograve;n c&oacute; một hệ thống l&agrave;m m&aacute;t chất lỏng được cho l&agrave; để cho ph&eacute;p thiết bị vận h&agrave;nh với tốc độ cao v&agrave; ổn định.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f17.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Ngo&agrave;i ra m&aacute;y c&ograve;n sở hữu tới 6 GB RAM v&agrave; 64 GB bộ nhớ trong cho bạn thoải m&aacute;i chạy đa nhiệm hay lưu trữ dữ liệu c&aacute; nh&acirc;n.</p>\r\n\r\n<h3>Camera k&eacute;p x&oacute;a ph&ocirc;ng ảo diệu</h3>\r\n\r\n<p>Pocophone F1 sở hữu bộ đ&ocirc;i camera k&eacute;p độ ph&acirc;n giải 12 MP + 5 MP với chế độ chụp ch&acirc;n dung x&oacute;a ph&ocirc;ng hoạt động kh&aacute; hiệu quả.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f13.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Ảnh chụp từ m&aacute;y c&oacute; chi tiết cao, m&agrave;u sắc h&agrave;i h&ograve;a nhưng cũng kh&ocirc;ng k&eacute;m phần rực rỡ.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f15.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Camera ph&iacute;a trước c&oacute; cảm biến 20 MP được trang bị c&ocirc;ng nghệ l&agrave;m đẹp tự nhi&ecirc;n mang lại những bức ảnh tự sướng &quot;lung linh&quot; để bạn c&oacute; thể chia sẻ ngay l&ecirc;n Facebook.</p>\r\n\r\n<h3>Dung lượng pin &quot;tr&acirc;u b&ograve;&quot;</h3>\r\n\r\n<p>Chiếc Galaxy Note 9 mới ra mắt của Samsung được giới thiệu c&oacute; dung lượng pin khủng nhất từ trước tới nay của d&ograve;ng Note l&agrave; 4000 mAh v&agrave;&nbsp;Xiaomi Pocophone F1 cũng mang trong m&igrave;nh vi&ecirc;n pin c&oacute; dung lượng tương tự.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f12.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Ngo&agrave;i ra m&aacute;y c&ograve;n sở hữu&nbsp;được t&iacute;ch hợp sạc nhanh Qualcomm 3.0 gi&uacute;p r&uacute;t ngắn thời gian nạp đầy năng lượng cho thiết bị.</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh tai thỏ theo xu thế</h3>\r\n\r\n<p>Xiaomi Pocophone F1 sở hữu&nbsp;m&agrave;n h&igrave;nh tr&agrave;n cạnh 6.18 inch độ ph&acirc;n giải Full HD+ đem lại kh&ocirc;ng gian thoải m&aacute;i cho người d&ugrave;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f18.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>C&ugrave;ng với tấm nền&nbsp;IPS, m&agrave;n h&igrave;nh của m&aacute;y cũng c&oacute; độ s&aacute;ng cao, r&otilde; n&eacute;t v&agrave; g&oacute;c nh&igrave;n rộng dễ chịu.</p>\r\n\r\n<h3>Thiết kế cứng c&aacute;p v&agrave; chắc chắn</h3>\r\n\r\n<p>Để cắt giảm chi ph&iacute; v&agrave; tập trung cho hiệu năng n&ecirc;n Pocophone F1 sẽ chỉ được ho&agrave;n thiện từ chất liệu nhựa cứng thay v&igrave; kim loại hay k&iacute;nh như những chiếc điện thoại cao cấp.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f11.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Tuy nhi&ecirc;n độ ho&agrave;n thiện của m&aacute;y kh&aacute; cao, c&aacute;c chi tiết được gia c&ocirc;ng chắc chắn đem lại cảm gi&aacute;c chắc chắn khi sử dụng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/186393/xiaomi-pocophone-f14.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Ngo&agrave;i ra thiết bị c&ograve;n được trang bị cổng USB Type-C một kết nối đang rất được y&ecirc;u th&iacute;ch hiện nay.</p>\r\n', 10, 7),
(7, 'SONY XPERIA XA1 PLUS', 1000000, 1000000, 'Sony Xperia XA1 Plus.jpg', 'Sony Xperia XA1 Plus.jpg,Sony-Xperia-XA1-Plus-mau1.jpg,Sony-Xperia-XA1-Plus-mau2.jpg,Sony-Xperia-XA1-Plus-mau3.jpg', '5.5\", 1080 x 1920 pixel', '8 MP', '23MP 1/ 2.3”', '4 GB', '32 GB', 'MediaTek Helip P20 , 4 nhân, MediaTek Helip P20 2.3GHZ x4 + 1.6 GHz x4', 'Mali-T880 MP4', '3430mAh', '', NULL, 2, NULL, 9, 5),
(8, 'OPPO F9', 8500000, 7500000, 'Oppo F9.jpg', 'Oppo F9.jpg,Oppo-F9-mau1.jpg,Oppo-F9-mau2.jpg', '6.3 inch, 1080 x 2340 pixels', '25 MP', '16 MP và 2 MP (2 camera)', '4 GB', '64 GB', 'MediaTek Helio P60 , 8 nhân, 2.0 Ghz', 'Mali-G72 MP3', '3500 mAh', '', 12, 1, '<p>Trong những gi&acirc;y ph&uacute;t gay cấn như chơi game điện thoại b&aacute;o hết pin hay s&aacute;ng dậy đi l&agrave;m nhưng ph&aacute;t hiện qu&ecirc;n sạc pin th&igrave; bộ sạc của OPPO F9 sẽ đem lại sự cứu trợ ngay lập tức.</p>\r\n\r\n<p>Với sạc VOOC 5V/AA, tốc độ sạc trở n&ecirc;n nhanh ch&oacute;ng so với c&aacute;c bộ sạc th&ocirc;ng thường.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/dtdd-oppo-f9-3.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>C&ugrave;ng c&ocirc;ng nghệ mới sử dụng &quot;điện &aacute;p thấp v&agrave; cường độ d&ograve;ng điện cao&quot;, t&iacute;ch hợp 5 cấp độ an to&agrave;n độc quyền của h&atilde;ng, bộ sạc của OPPO F9 vừa giữ được tốc độ sạc nhanh, vừa đem lại sự an to&agrave;n tuyệt đối cho người sử dụng, kể cả khi vừa x&agrave;i vừa chơi game.</p>\r\n\r\n<h3>Thiết kế độc đ&aacute;o với sự chuyển m&agrave;u ph&aacute; c&aacute;ch</h3>\r\n\r\n<p>Những mặt lưng đơn sắc đ&atilde; qu&aacute; quen thuộc, th&igrave; thiết kế mới của OPPO F9 như một sự ph&aacute; c&aacute;ch trong ph&acirc;n kh&uacute;c gi&aacute; với mức gi&aacute; hấp dẫn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/oppo-f9-red-7.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Mỗi thao t&aacute;c sử dụng, mặt lưng lại chuyển những sắc m&agrave;u đậm nhạt kh&aacute;c nhau. Đ&acirc;y l&agrave; d&ograve;ng F đầu ti&ecirc;n được OPPO ưu &aacute;i trang bị một thiết kế cao cấp v&agrave; đem lại sự thu h&uacute;t đặc biệt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/oppo-f9-red-3.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>M&agrave;n h&igrave;nh tr&agrave;n viền giọt nước</h3>\r\n\r\n<p>OPPO F9 đem lại cho người d&ugrave;ng một chiếc&nbsp;<a href=\"http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/chitietsp.php?id=8\" target=\"_blank\">điện thoại</a>&nbsp;đầu ti&ecirc;n c&oacute; thiết kế khung viền h&igrave;nh giọt nước, thay v&igrave; thiết kế tai thỏ đ&atilde; dần trở n&ecirc;n phổ biến.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/oppo-f9-red-1.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Diện t&iacute;ch trải nghiệm to&agrave;n m&agrave;n h&igrave;nh rộng hơn, xem phim hay chơi game đều cảm thấy thoải m&aacute;i v&agrave; kh&ocirc;ng c&ograve;n cảm gi&aacute;c mỏi mắt.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/oppo-f9-red-6.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>Đột ph&aacute; chụp ảnh ch&acirc;n dung với A.I Beauty 2.1</h3>\r\n\r\n<p>Xu hướng selfie v&agrave; chia sẻ tr&ecirc;n c&aacute;c phương tiện x&atilde; hội đ&atilde; trở th&agrave;nh một th&oacute;i quen kh&ocirc;ng thể thiếu. Hiểu được điều đ&oacute; t&iacute;nh năng camera của OPPO F9 lu&ocirc;n được cải thiện.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/oppo-f9-2.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Camera trước của m&aacute;y c&oacute; độ ph&acirc;n giải 25 MP, t&iacute;ch hợp chế độ chụp ảnh ch&acirc;n dung c&ugrave;ng c&aacute;c hiệu ứng &aacute;nh s&aacute;ng tuỳ chỉnh v&agrave; c&ocirc;ng nghệ tr&iacute; tuệ nh&acirc;n tạo A.I Beauty 2.1.</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/oppo-f9-xanh-3-1.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Nhờ vậy ảnh chụp selfie của bạn trở n&ecirc;n tinh tế, như được c&aacute;c chuy&ecirc;n gia trang điểm chăm ch&uacute;t với &aacute;nh s&aacute;ng h&agrave;i ho&agrave; nhưng vẫn rất nghệ thuật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/182153/oppo-f9-red-5.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Camera k&eacute;p mặt sau với ống k&iacute;nh ch&iacute;nh 16 MP v&agrave; k&egrave;m theo ống k&iacute;nh phụ 2 MP c&oacute; khả năng xo&aacute; ph&ocirc;ng tốt, l&agrave;m nổi bật chủ thể c&ugrave;ng c&aacute;c đường n&eacute;t tr&ecirc;n khu&ocirc;n mặt.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 5, 4),
(9, 'SAMSUNG GALAXY S9+ 128GB', 23000000, 20000000, 'Samsung Galaxy S9 128GB.png', 'Samsung Galaxy S9 128GB.png,Samsung-Galaxy-S9-128GB-mau1.jpg,Samsung-Galaxy-S9-128GB-mau2.jpg', '6.2', '8 MP', '2 camera 12 MP', '6 GB', '128 GB', 'Exynos 9810 8 nhân 64 bit, 4 nhân 2.8 GHz', 'Mali-G72 MP18', '3500 mAh', 'Android 8.0', 13, 1, '<h2>Đặc điểm nổi bật của Samsung Galaxy S9+ 128GB đen</h2>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/154695/Slider/-s9plus.gif\" style=\"width:100%\" /></p>\r\n\r\n<h3>Thiết kế ho&agrave;n thiện hơn</h3>\r\n\r\n<p>Kh&ocirc;ng c&oacute; một sự lột x&aacute;c về thiết kế, chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\">điện thoại Samsung</a>&nbsp;năm nay chỉ cải tiến một v&agrave;i điểm thiết kế đ&atilde; qu&aacute; ho&agrave;n hảo từ thế hệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-s8\" target=\"_blank\">Galaxy S8</a>&nbsp;trước đ&acirc;y.</p>\r\n\r\n<p>Khung của m&aacute;y vẫn l&agrave; kim loại kết hợp 2 mặt k&iacute;nh cường lực được bo cong c&aacute;c cạnh đầy &quot;quyến rũ&quot; v&agrave; hiện đại.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/03/01/1070782/galaxys9tim-27_798x450.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>&quot;M&agrave;n h&igrave;nh v&ocirc; cực&quot; tr&ecirc;n Samsung S9 Plus được l&agrave;m mỏng hơn ở c&aacute;c cạnh viền cho trải nghiệm sử dụng ấn tượng hơn, k&iacute;ch thước m&aacute;y thu gọn lại gi&uacute;p cầm nắm sử dụng thuận tiện.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/03/01/1070782/galaxys9tim-37_798x450.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>M&agrave;n h&igrave;nh v&ocirc; cực&nbsp;si&ecirc;u n&eacute;t</h3>\r\n\r\n<p>Đặc trưng l&agrave; m&agrave;n h&igrave;nh lớn n&ecirc;n chiếc Samsung Galaxy S9 Plus sẽ sở hữu m&agrave;n h&igrave;nh c&oacute; k&iacute;ch thước 6.2 inch với độ ph&acirc;n giải&nbsp;2K+ (1440 x 2960 Pixels)&nbsp;cho chất lượng hiển thị si&ecirc;u sắc n&eacute;t.</p>\r\n\r\n<p>M&aacute;y vẫn sẽ trung th&agrave;nh với tấm nền&nbsp;Super AMOLED&nbsp;v&agrave; được bảo vệ bởi tấm k&iacute;nh cường lực&nbsp;Corning Gorilla Glass 5 cao cấp.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/02/19/1067982/galaxys9s910_1280x853-800-resize.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>Đột ph&aacute; c&ocirc;ng nghệ camera tr&ecirc;n smartphone</h3>\r\n\r\n<p>Samsung Galaxy S9 Plus l&agrave; chiếc smartphone đầu ti&ecirc;n sở hữu khả năng thay đổi khẩu độ như m&aacute;y ảnh chuy&ecirc;n nghiệp, ph&aacute; vỡ giới hạn tồn tại bấy l&acirc;u nay. Bạn c&oacute; thể sử dụng khẩu độ F/1.5 chụp s&aacute;ng đẹp hơn v&agrave;o ban đ&ecirc;m hay F/2.4 để chụp r&otilde; n&eacute;t hơn với &aacute;nh s&aacute;ng ban ng&agrave;y.</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/03/02/1070958/samsunggalaxys95_800x450_800x450.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p>Samsung cũng mang camera k&eacute;p l&ecirc;n Galaxy S9 Plus, như vậy chiếc smartphone n&agrave;y c&oacute; khả năng zoom quang học 2X r&otilde; n&eacute;t cũng như chụp những bức ảnh x&oacute;a ph&ocirc;ng đầy nghệ thuật.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/02/26/1069758/10_800x449.png\" style=\"width:100%\" /></p>\r\n\r\n<h3>Quay phim si&ecirc;u chậm Super Slow Motion</h3>\r\n\r\n<p>Bạn từng bị ấn tượng bởi những thước phim quay si&ecirc;u chậm đầy ấn tượng tr&ecirc;n c&aacute;c bộ phim bom tấn chiếu rạp, nay với Samsung Galaxy S9 Plus, ch&iacute;nh bạn l&agrave; người s&aacute;ng tạo n&ecirc;n ch&uacute;ng. Khả năng quay chuyển động chậm hơn gấp 4 lần thế hệ Galaxy S8 cực k&igrave; ấn tượng.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/02/26/1069786/samsunggalaxys913_800x450.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>Biểu tượng cảm x&uacute;c từ ch&iacute;nh khu&ocirc;n mặt bạn</h3>\r\n\r\n<p>Từ b&acirc;y giờ, bạn c&oacute; thể tự do s&aacute;ng tạo những th&ocirc;ng điệp h&igrave;nh ảnh cực k&igrave; vui nhộn bằng ch&iacute;nh khu&ocirc;n mặt của m&igrave;nh. Samsung S9 Plus c&oacute; khả năng ghi lại h&igrave;nh ảnh, cảm x&uacute;c của bạn để tạo n&ecirc;n những bộ biểu tượng cảm x&uacute;c với c&ocirc;ng nghệ m&ocirc; phỏng thực tế ảo ti&ecirc;n tiến.<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/147939/samsung-galaxy-s9-plus-ar-emoji.gif\" style=\"width:100%\" /></p>\r\n\r\n<h3>Bảo mật ho&agrave;n hảo hơn</h3>\r\n\r\n<p>Sự kết hợp giữa nhận diện mống mắt v&agrave; khu&ocirc;n mặt mang đến khả năng bảo mật ho&agrave;n hảo v&agrave; thuận tiện hơn cho Samsung S9 Plus trong mọi điều kiện sử dụng. Chưa kể bạn vẫn c&oacute; cảm biến v&acirc;n tay đặt ở mặt sau nếu bạn ưa th&iacute;ch sử dụng t&iacute;nh năng n&agrave;y hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/02/26/1069786/samsunggalaxys99_800x450.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h3>Hiệu năng h&agrave;ng đầu</h3>\r\n\r\n<p>Chắc chắn rồi, d&ograve;ng Samsung Galaxy S lu&ocirc;n mạnh mẽ vượt trội mỗi khi ra mắt. Thế hệ S9 Plus được trang bị vi xử l&yacute;&nbsp;Exynos 9810 8 nh&acirc;n 64 bit&nbsp;h&agrave;ng đầu hiện nay kết hợp c&ugrave;ng bộ nhớ RAM l&ecirc;n đến 6 GB v&agrave; bộ nhớ trong 128 GB. M&aacute;y sẽ sử dụng hệ điều h&agrave;nh Android 8.0 khi ra mắt c&ugrave;ng giao diện độc quyền của Samsung.</p>\r\n', 8, 2),
(10, 'NOKIA 6 32GB NEW', 4850000, 4750000, 'Nolia 6 32GB New.jpg', 'Nolia 6 32GB New.jpg,Nolia-6-32GB-New-mau1.jpg,Nolia-6-32GB-New-mau2.jpg', '5.5', '8 MP', '16 MP', '3 GB', '32 GB', 'Qualcomm Snapdragon 630, 8 nhân, 2.2 Ghz', 'Adreno 508', '3000 mAh', '', 2, 1, '<h2>Nokia&nbsp;đ&atilde; cho ra mắt ch&iacute;nh thức&nbsp;<a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=10\" target=\"_blank\">Nokia 6</a>&nbsp;với cấu h&igrave;nh tốt trong mức gi&aacute; tầm trung, thiết kế đẹp c&ugrave;ng bộ đ&ocirc;i camera chất lượng.</h2>\r\n\r\n<h3>Thiết kế chắc chắn, sang trọng</h3>\r\n\r\n<p><a href=\"https://banthudaodien.php\" target=\"_blank\">Điện thoại</a>&nbsp;Nokia 6 sở hữu một bộ khung từ nh&ocirc;m nguy&ecirc;n khối v&ocirc; c&ugrave;ng chắc chắn, thiết kế đẹp với chất lượng ho&agrave;n thiện v&ocirc; c&ugrave;ng tốt, c&aacute;c g&oacute;c cạnh được bo cong cho cảm gi&aacute;c cầm nắm thoải m&aacute;i.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/90836/nokia-61.jpg\" style=\"margin-left:100px; margin-right:100px; width:70%\" /><em>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</em><em>Biểu tượng quen thuộc của chiếc hộp Nokia 6</em></p>\r\n\r\n<p>Mặt trước của m&aacute;y sở hữu ph&iacute;m Home với khả năng nhận dạng dấu tay nhanh ch&oacute;ng, v&agrave; c&oacute; thể t&ugrave;y biến v&acirc;n tay để mở kh&oacute;a m&agrave;n h&igrave;nh, kh&oacute;a ứng dụng hay thanh to&aacute;n trực tuyến tiện dụng.<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/90836/nokia-63.jpg\" style=\"margin-left:100px; margin-right:100px; width:70%\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<em>Cảm biến v&acirc;n tay kh&aacute; nhạy</em></p>\r\n\r\n<p>Mặt lưng của m&aacute;y được ho&agrave;n thiện kh&aacute; liền mạch, kh&ocirc;ng c&oacute; c&aacute;c đường ăng ten bắt s&oacute;ng chia cắt, cụm camera l&agrave;m nổi bật thiết kế của m&aacute;y.</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh sắc n&eacute;t</h3>\r\n\r\n<p>M&agrave;n h&igrave;nh của Nokia 6 c&oacute; k&iacute;ch thước lớn l&ecirc;n đến 5.5 inch c&ugrave;ng độ ph&acirc;n giải Full HD cực sắc n&eacute;t v&agrave; m&agrave;u sắc tươi tắn, được bảo vệ bởi mặt kiếng Gorilla 3 chắc chắn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/90836/nokia-68.jpg\" style=\"margin-left:100px; margin-right:100px; width:70%\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<em>M&agrave;n h&igrave;nh hiển thị sắc n&eacute;t, g&oacute;c nh&igrave;n rộng</em></p>\r\n\r\n<p>Ngo&agrave;i ra, viền m&agrave;n h&igrave;nh của m&aacute;y cũng được l&agrave;m cong 2.5D cho trải nghiệm khi lướt tay tr&ecirc;n bề mặt trơn l&aacute;ng hơn.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/90836/nokia-65.jpg\" style=\"margin-left:100px; margin-right:100px; width:70%\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <em>Mặt k&iacute;nh cong 2.5D thời thượng</em></p>\r\n\r\n<h3>RAM dung lượng lớn</h3>\r\n\r\n<p>Nokia 6 sở hữu con chip&nbsp;Qualcomm Snapdragon 430&nbsp;kết hợp với chip đồ họa Adreno 505 v&agrave; mức RAM khủng l&ecirc;n tới 3 GB sẽ gi&uacute;p bạn thoải m&aacute;i sử dụng đa nhiệm nhiều ứng dụng c&ugrave;ng l&uacute;c, sử dụng trong thời gian d&agrave;i m&agrave; m&aacute;y kh&ocirc;ng gặp phải t&igrave;nh trạng giật lag do đầy bộ nhớ RAM.</p>\r\n\r\n<h3>Bộ đ&ocirc;i camera c&oacute; độ ph&acirc;n giải lớn</h3>\r\n\r\n<p>Đầu ti&ecirc;n l&agrave; camera ch&iacute;nh 16 MP c&ugrave;ng khẩu độ f/2.0 gi&uacute;p thu s&aacute;ng tốt, c&ocirc;ng nghệ lấy n&eacute;t theo pha gi&uacute;p m&aacute;y bắt trọn mọi khoảnh khắc đẹp.</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/90836/nokia-64.jpg\" style=\"margin-left:100px; margin-right:100px; width:70%\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<em>Phần camera ch&iacute;nh hơi lồi nhẹ</em></p>\r\n\r\n<p>Camera selfie cũng c&oacute; độ ph&acirc;n giải lớn 8 MP với chế độ l&agrave;m đẹp được t&iacute;ch hợp sẵn c&ugrave;ng khả năng nhận diện khu&ocirc;n mặt hứa hẹn sẽ đem lại cho bạn những bức ảnh selfie ảo diệu.</p>\r\n\r\n<h3>Dung lượng pin 3000 mAh</h3>\r\n\r\n<p>Một điểm đ&aacute;ng lưu &yacute; nữa tr&ecirc;n Nokia 6 ch&iacute;nh l&agrave; vi&ecirc;n pin lớn 3000 mAh với thời gian sử dụng rất ấn tượng.</p>\r\n\r\n<p><br />\r\n<img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/90836/nokia-67.jpg\" style=\"margin-left:100px; margin-right:100px; width:70%\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<em>Dung lượng pin thoải m&aacute;i cho sử dụng hằng ng&agrave;y</em></p>\r\n\r\n<p><em><img alt=\"\" src=\"https://cdn.tgdd.vn/Products/Images/42/90836/nokia-66.jpg\" style=\"margin-left:100px; margin-right:100px; width:70%\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; M&aacute;y cũng c&oacute; kết nối 4G LTE</em></p>\r\n\r\n<p>Nếu bạn cần một thiết bị chắc chắn, với thương hiệu y&ecirc;u th&iacute;ch v&agrave; kh&ocirc;ng qu&aacute; quan trọng về hiệu năng th&igrave; Nokia 6 xứng đ&aacute;ng để bạn sở hữu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong>❝</strong>Đ&atilde; mua v&agrave; sử dụng được 1 th&aacute;ng, chạy ổn định, camera sau chụp đẹp, n&eacute;t. Thiết kế nam t&iacute;nh, pin d&ugrave;ng được gần 2 ng&agrave;y, n&oacute;i chung kh&aacute; tốt trong tầm gi&aacute;.<strong>❞</strong></p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n', 10, 6),
(53, 'Huawei Nova 7i', 10790000, 6990000, 'huawei-nova-7i.png', 'huawei-nova-7i.png,huawei-nova-7i-pink-mau3.jpg', 'LTPS LCD , 6.4', '16MP', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', '8 GB', '128 GB', 'Kirin 810 8 nhân', '', '4200 mAh, có sạc nhanh', 'EMUI 10 (Android 10 không có Google)', 35, 1, '', 5, 8),
(54, 'Samsung Galaxy A71', 10490000, 9790000, 'samsung-galaxy-a71.png', 'samsung-galaxy-a71-bac.png,samsung-galaxy-a71-den.png,samsung-galaxy-a71.png', '6.7 inchs, Full HD +, 1080 x 2400 Pixels', '32.0Mp', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP', '8 GB', '128 GB', 'Snapdragon 730 8 nhân, 8, 2 nhân 2.2 GHz & 6 nhân 1.8 GHz', 'Adreno 618', '4500 mAh', 'Android 10', 7, 2, '', 9, 2),
(55, 'Oppo Reno 2F - R8GB/128GB', 8990000, 7490000, 'oppo-reno2-f.png', 'oppo-reno2-f-mau1.jpg,oppo-reno2-f-mau2.png,oppo-reno2-f.png', 'Panoramic 6.53', '4 camera, 48 MP + 8 MP + 2 MP + 2 MP', '', '8 GB', '128 GB', '', '', '4000mAh (Typ)', '', 17, 2, '', 9, 4),
(56, 'Xiaomi Black Shark 2', 9990000, 8490000, 'black-shark-2.jpg', '', 'Full HD+ (1080 x 2340 Pixels)', '20 MP', '48 MP + 12 MP', '8 GB', '128 GB', '4 nhân 2.8 GHz Kryo & 4 nhân 1.8 GHz Kryo', 'Adreno 640', '4000 mAh', 'Android 9.0 (Pie)', 15, 1, '', 3, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_tai_khoan`
--

CREATE TABLE `thong_tin_tai_khoan` (
  `id` int(11) NOT NULL,
  `ho` varchar(255) DEFAULT NULL,
  `ten` varchar(255) DEFAULT NULL,
  `sdt` int(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `dia_chi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_tai_khoan`
--

INSERT INTO `thong_tin_tai_khoan` (`id`, `ho`, `ten`, `sdt`, `email`, `avatar`, `dia_chi`) VALUES
(9, 'Phạm', 'Đức Mạnh', 971439061, 'ducmanhdv@gmail.com', 'hinh-anh-dep-10_044127763.jpg', 'Số nhà 1, Ngõ 257, Xuân Khanh - Sơn Tây - Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tin_tuc` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tieu_de` varchar(500) DEFAULT NULL,
  `anh_tieu_de` varchar(1000) DEFAULT NULL,
  `noi_dung_chi_tiet` longtext DEFAULT NULL,
  `mo_ta_ngan` varchar(5000) DEFAULT NULL,
  `ngay_dang` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id_tin_tuc`, `id`, `tieu_de`, `anh_tieu_de`, `noi_dung_chi_tiet`, `mo_ta_ngan`, `ngay_dang`) VALUES
(2, 9, 'Huawei Nova 3 và một số máy Nova khác được cập nhật Android Pie', 'tintuc1.png', '<h1>&nbsp;</h1>\r\n\r\n<h3><strong>Huawei Nova 3 v&agrave; một số m&aacute;y Nova kh&aacute;c được cập nhật Android Pie</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Huawei Nova 3 và một số máy Nova khác được cập nhật Android Pie\" src=\"https://cdn.tgdd.vn/Files/2018/12/11/1137293/nova3_800x450.jpg\" title=\"Huawei Nova 3 và một số máy Nova khác được cập nhật Android Pie\" /></p>\r\n\r\n<h2><a href=\"https://www.thegioididong.com/dtdd/huawei-nova-3\" target=\"_blank\" title=\"Đặt mua Huawei Nova 3 tại Thegioididong.com\" type=\"Đặt mua Huawei Nova 3 tại Thegioididong.com\">Huawei Nova 3</a>&nbsp;đ&atilde; bắt đầu được cập nhật Android Pie th&ocirc;ng qua giao thức OTA, v&agrave; hiện người d&ugrave;ng tại Trung Quốc đ&atilde; c&oacute; thể tải về c&agrave;i đặt.</h2>\r\n\r\n<p>Việc n&acirc;ng cấp kh&ocirc;ng chỉ mang đến cho người d&ugrave;ng Nova 3 c&aacute;c t&iacute;nh năng mới sẵn c&oacute; tr&ecirc;n Android 9.0 Pie m&agrave; c&ograve;n được trải nghiệm giao diện t&ugrave;y chỉnh EMUI 9.0 độc quyền của Huawei.</p>\r\n\r\n<p>Bản cập nhật EMUI 9.0 cho Nova 3 c&oacute; dung lượng khoảng 4.7 GB v&agrave; đi k&egrave;m với số bản dựng PAR-AL00 9.0.0.101.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Files/2018/12/11/1137293/huawei-nova-3-emui-9_637x1280.jpg\" rel=\"nofollow\" target=\"_blank\" title=\"Huawei Nova 3 và một số máy Nova khác được cập nhật Android Pie\" type=\"Huawei Nova 3 và một số máy Nova khác được cập nhật Android Pie\"><img alt=\"Huawei Nova 3 và một số máy Nova khác được cập nhật Android Pie\" src=\"https://cdn.tgdd.vn/Files/2018/12/11/1137293/huawei-nova-3-emui-9_637x1280.jpg\" style=\"margin-left:70px; margin-right:70px\" title=\"Huawei Nova 3 và một số máy Nova khác được cập nhật Android Pie\" /></a></p>\r\n\r\n<p>Ngo&agrave;i Nova 3,&nbsp;<a href=\"http://localhost/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/%c4%90%e1%bb%93%20%c3%a1n%20k%c3%ac%20I/chitietsp.php?id=3\" target=\"_blank\" title=\"Đặt mua smartphone Huawei tại Thegioididong.com\" type=\"Đặt mua smartphone Huawei tại Thegioididong.com\">Huawei</a>&nbsp;c&ograve;n ph&aacute;t h&agrave;nh một poster c&ocirc;ng bố v&agrave;i model kh&aacute;c thuộc d&ograve;ng Nova đ&atilde; v&agrave; sắp được l&ecirc;n đời nền tảng n&agrave;y nhưng vẫn trong giai đoạn beta, bao gồm:</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/chitiettintuc.php?id=2#\" title=\"Chi tiết Huawei Nova 2s\" type=\"Chi tiết Huawei Nova 2s\">Nova 2s</a>&nbsp;đ&atilde; nhận được bản EMUI 9.0 beta v&agrave;o ng&agrave;y 20/11.</li>\r\n	<li><a href=\"http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/chitiettintuc.php?id=2#\" title=\"Đặt mua Huawei Nova 3i tại Thegioididong.com\" type=\"Đặt mua Huawei Nova 3i tại Thegioididong.com\">Nova 3i&nbsp;</a>đ&atilde; nhận được bản&nbsp;EMUI 9.0&nbsp;beta v&agrave;o ng&agrave;y 28/11.</li>\r\n	<li><a href=\"http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/chitiettintuc.php?id=2#\" title=\"Đặt mua Huawei Nova 3e tại Thegioididong.com\" type=\"Đặt mua Huawei Nova 3e tại Thegioididong.com\">Nova 3e</a>&nbsp;dự kiến ​​sẽ nhận được bản&nbsp;EMUI 9.0&nbsp;beta v&agrave;o th&aacute;ng 1/2019.</li>\r\n	<li>Maimang 7 đ&atilde; nhận được bản&nbsp;EMUI 9.0&nbsp;beta v&agrave;o ng&agrave;y 28/11.</li>\r\n</ul>\r\n', 'Huawei Nova 3 đã bắt đầu được cập nhật Android Pie thông qua giao thức OTA, và hiện người dùng tại Trung Quốc đã có thể tải về cài đặt.\r\nViệc nâng cấp không chỉ mang đến cho người dùng Nova 3 các tính năng mới sẵn có trên Android 9.0 Pie mà còn được trải nghiệm giao diện tùy chỉnh EMUI 9.0 độc quyền của Huawei.', '2020-05-07'),
(3, 9, 'Smartphone tai thỏ Realme C1 tiếp tục được giảm giá tốt', 'tintuc2.png', '<h2 style=\"text-align:center\">&nbsp;</h2>\r\n\r\n<h2 style=\"text-align:center\"><strong>Smartphone tai thỏ Realme C1 tiếp tục được giảm gi&aacute; tốt</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/12/10/1136856/c1-1_800x450.jpg\" style=\"width:100%\" /></strong></p>\r\n\r\n<blockquote>\r\n<h2>Mẫu smartphone gi&aacute; rẻ với thiết kế hiện đại, trẻ trung c&ugrave;ng camera k&eacute;p&nbsp;Realme C1&nbsp;mới đ&acirc;y tiếp tục được giảm gi&aacute;, cơ hội tốt để nhiều bạn trẻ dễ d&agrave;ng sở hữu m&aacute;y hơn.</h2>\r\n\r\n<p>Theo đ&oacute;, hiện tr&ecirc;n hệ thống b&aacute;n lẻ trực tuyến Thế Giới Di Động, Realme C1 được điều chỉnh giảm 100 ng&agrave;n đồng, từ 2.49 triệu xuống c&ograve;n 2.39 triệu đồng. Lưu &yacute; chương tr&igrave;nh giảm gi&aacute; chỉ trong 3 ng&agrave;y m&agrave; th&ocirc;i, từ 10-12/12, v&igrave; vậy bạn cần nhanh tay l&ecirc;n nh&eacute;.</p>\r\n\r\n<p>Bạn c&oacute; thể đặt h&agrave;ng tr&ecirc;n web, sau đ&oacute; chuyển khoản đặt cọc hoặc đặt cọc tại si&ecirc;u thị trong 3 ng&agrave;y 10-12/12 để được nhận ưu đ&atilde;i giảm gi&aacute;. Kh&aacute;ch h&agrave;ng sẽ nhận h&agrave;ng từ 5-7 ng&agrave;y kể từ ng&agrave;y đặt cọc.</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/12/10/1136856/c1-2_1062x509-800-resize.jpg\" style=\"width:100%\" /></p>\r\n\r\n<blockquote>\r\n<p>Mặc d&ugrave; c&oacute; gi&aacute; rẻ nhưng Realme C1 sở hữu thiết kế b&oacute;ng bẩy, cuốn h&uacute;t với notch tai thỏ, m&agrave;n h&igrave;nh tr&agrave;n cạnh c&ugrave;ng camera k&eacute;p x&oacute;a ph&ocirc;ng thời thượng.</p>\r\n\r\n<p>Realme C1 c&oacute; m&agrave;n h&igrave;nh 6.2 inch độ ph&acirc;n giải HD+, chip Snapdragon 450, RAM 2 GB, ROM 16 GB, camera k&eacute;p mặt sau 13 + 2 MP, m&aacute;y ảnh trước 5 MP c&ugrave;ng pin dung lượng 4.230 mAh.</p>\r\n</blockquote>\r\n\r\n<p><a href=\"https://www.thegioididong.com/dtdd/realme-c1\"><img src=\"https://cdn.tgdd.vn/Products/Images/42/193286/realme-c1-new-blue-400x400.jpg\" style=\"height:100px; margin-left:350px; margin-right:350px; width:100px\" /></a></p>\r\n\r\n<h3 style=\"text-align:center\">Realme C1</h3>\r\n\r\n<p style=\"text-align:center\">M&agrave;n h&igrave;nh: 6.2&quot;, HD+CPU: Snapdragon 450 8 nh&acirc;n</p>\r\n\r\n<p style=\"text-align:center\">RAM: 2 GB, ROM: 16 GB</p>\r\n\r\n<p style=\"text-align:center\">Camera: Ch&iacute;nh 13 MP &amp; Phụ 2 MPSelfie: 5 MP</p>\r\n\r\n<p style=\"text-align:center\">PIN: 4230 mAh</p>\r\n', 'Mẫu smartphone giá rẻ với thiết kế hiện đại, trẻ trung cùng camera kép Realme C1 mới đây tiếp tục được giảm giá, cơ hội tốt để nhiều bạn trẻ dễ dàng sở hữu máy hơn. \r\nTheo đ...', '2020-05-07'),
(4, 9, 'Nokia 8 sẽ có bản cập nhật Android 9 Pie vào ngày 11/12', 'tintuc3.png', '<h2 style=\"text-align:center\">&nbsp;</h2>\r\n\r\n<h2 style=\"text-align:center\">Nokia 8 sẽ c&oacute; bản cập nhật Android 9 Pie v&agrave;o ng&agrave;y 11/12</h2>\r\n\r\n<div class=\"á\">\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/12/09/1136716/nokia8android9pie_-_2048x1152-800-resize.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h4 style=\"margin-left:40px\">Tin vui cho c&aacute;c bạn đang sử dụng&nbsp;Nokia 8, m&aacute;y sẽ ch&iacute;nh thức c&oacute; bản cập nhật&nbsp;Android 9 Pie&nbsp;v&agrave;o ng&agrave;y 11/12, đ&acirc;y l&agrave; th&ocirc;ng b&aacute;o mới cập từ trang&nbsp;Nokia Mobile.&nbsp;Trước đ&oacute; th&igrave; bản cập nhật đ&atilde; được ph&aacute;t h&agrave;nh cho người d&ugrave;ng&nbsp;Nokia 7 Plus, rồi đến&nbsp;Nokia 6.1 Plus&nbsp;v&agrave; mới đ&acirc;y l&agrave;&nbsp;<a href=\"http://localhost/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/%C4%90%E1%BB%93%20%C3%A1n%20k%C3%AC%20I/chitietsp.php?id=10\" target=\"_blank\" title=\"Nokia 6 mới \" type=\"Nokia 6 mới \">Nokia 6 mới</a>&nbsp;(Nokia 6.1).</h4>\r\n\r\n<p style=\"margin-left:40px\">Chỉ c&ograve;n 2 ng&agrave;y nữa Nokia 8 sẽ c&oacute; bản cập nhật Android 9 Pie. Để cho qu&aacute; tr&igrave;nh cập nhật Android P diễn ra nhanh v&agrave; thuận lợi, c&aacute;c bạn cần chuẩn bị sẵn s&agrave;ng:</p>\r\n\r\n<ul>\r\n	<li style=\"margin-left: 40px;\">Dọn dẹp bộ nhớ trống, bản cập nhật c&oacute; dung lượng th&ocirc;ng thường lớn hơn 1GB.</li>\r\n	<li style=\"margin-left: 40px;\">Sạc đầy pin để qu&aacute; tr&igrave;nh cập nhật diễn ra nhanh ch&oacute;ng, nhớ sạc pin tr&ecirc;n 60% nh&eacute;, v&igrave; mức dung lượng pin thấp hơn bạn sẽ kh&ocirc;ng thể cập nhật l&ecirc;n được m&agrave; m&aacute;y sẽ y&ecirc;u cầu sạc pin.&nbsp;</li>\r\n	<li style=\"margin-left: 40px;\">Chuẩn bị mạng wifi mạnh để qu&aacute; tr&igrave;nh cập nhật được nhanh hơn.&nbsp;</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:40px\">C&aacute;c bạn đang sử dụng Nokia 8, nhớ theo d&otilde;i bản cập nhật v&agrave; đừng qu&ecirc;n chia sẻ ngay ở phần b&igrave;nh luận b&ecirc;n dưới khi c&oacute; bản cập nhật ch&iacute;nh thức, để mọi người c&ugrave;ng theo d&otilde;i nh&eacute;!</p>\r\n\r\n<p style=\"margin-left:40px\">Ch&uacute;c c&aacute;c bạn sớm cập nhật th&agrave;nh c&ocirc;ng v&agrave; c&oacute; nhiều trải nghiệm mới th&uacute; vị mới!&nbsp;</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', ' Tin vui cho các bạn đang sử dụng Nokia 8, máy sẽ chính thức có bản cập nhật Android 9 Pie vào ngày 11/12, đây là thông báo mới cập từ trang Nokia Mobile. Trước đó thì bản cập n...', '2020-05-07'),
(5, 9, 'iPhone 8 256 GB bất ngờ điều chỉnh giá bán, giảm sốc 2.800.000 đồng', 'tintuc4.png', '<p>&nbsp;</p>\r\n\r\n<h2>iPhone 8 256 GB bất ngờ điều chỉnh gi&aacute; b&aacute;n, giảm sốc 2.800.000 đồng</h2>\r\n\r\n<p><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/12/08/1136482/a02_800x462.jpg\" style=\"width:100%\" /></p>\r\n\r\n<h4 style=\"margin-left:40px; text-align:center\">Thế Giới Di Động vừa ch&iacute;nh thức điều chỉnh gi&aacute; b&aacute;n&nbsp;iPhone 8 256 GB&nbsp;từ 22.790.000 đồng giảm c&ograve;n 19.990.000 đồng, tức giảm 2.800.000 đồng. V&agrave; nếu như sắp tới bạn c&oacute; nhu cầu mua chiếc smartphone n&agrave;y th&igrave; qu&aacute; tốt c&ograve;n g&igrave; nữa!</h4>\r\n\r\n<p style=\"margin-left:40px; text-align:center\">Tuy kh&ocirc;ng c&oacute; qu&aacute; nhiều thay đổi về thiết kế so với c&aacute;c phi&ecirc;n bản trước đ&oacute;, nhưng iPhone 8&nbsp;256 GB vẫn sở hữu nhiều điểm nhấn, đ&aacute;ng ch&uacute; &yacute; nhất l&agrave; mặt lưng đ&atilde; chuyển sang phong c&aacute;ch thiết kế bằng k&iacute;nh gi&uacute;p sản phẩm trở n&ecirc;n b&oacute;ng bẩy v&agrave; sang trọng hơn. Với mặt lưng bằng k&iacute;nh, Apple cũng đ&atilde; t&iacute;ch hợp th&ecirc;m c&ocirc;ng nghệ sạc kh&ocirc;ng d&acirc;y v&agrave; sạc nhanh đi k&egrave;m.</p>\r\n\r\n<p style=\"margin-left:40px; text-align:center\"><img alt=\"\" src=\"https://cdn.tgdd.vn/Files/2018/12/08/1136482/a01_800x450.jpg\" style=\"width:100%\" /></p>\r\n\r\n<p style=\"margin-left:40px; text-align:center\">Về cấu h&igrave;nh th&igrave;&nbsp;iPhone 8&nbsp;256 GB được trang bị vi xử l&yacute;&nbsp;A11 Bionic 6 nh&acirc;n, RAM 2 GB gi&uacute;p xử l&yacute; mượt m&agrave; c&aacute;c t&aacute;c vụ, ứng dụng từ cơ bản đến phức tạp nhất hiện nay. Kh&ocirc;ng ngoa khi n&oacute;i,&nbsp;iPhone 8&nbsp;256 GB vẫn l&agrave; chiếc smartphone c&oacute; hiệu năng thuộc h&agrave;ng TOP trong ph&acirc;n kh&uacute;c gi&aacute; dưới 20 triệu đồng.</p>\r\n\r\n<div style=\"page-break-after:always\"><span style=\"display:none\">&nbsp;</span></div>\r\n\r\n<p style=\"margin-left:40px; text-align:center\">Đặc biệt hơn, sau khi giảm sốc&nbsp;2.800.000 đồng, bạn c&ograve;n c&oacute; cơ hội giảm th&ecirc;m 3%-4% (từ 600.000 đồng đến 800.000 đồng) khi tham gia chương tr&igrave;nh khuyến m&atilde;i&nbsp;&quot;Săn m&atilde; giảm gi&aacute;&quot;&nbsp;từ ng&agrave;y 11/12 đến hết ng&agrave;y 13/12.</p>\r\n\r\n<p>&nbsp;</p>\r\n', ' Tuy không có quá nhiều thay đổi về thiết kế so với các phiên bản trước đó, nhưng iPhone 8 256 GB vẫn sở hữu nhiều điểm nhấn, đáng chú ý nhất là mặt lưng đã chuyển sang phong cá...', '2020-05-07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD KEY `ma_dh` (`ma_dh`);

--
-- Chỉ mục cho bảng `danh_gia_pk`
--
ALTER TABLE `danh_gia_pk`
  ADD KEY `ma_phu_kien` (`ma_phu_kien`);

--
-- Chỉ mục cho bảng `danh_gia_sp`
--
ALTER TABLE `danh_gia_sp`
  ADD KEY `ma_dt` (`ma_dt`);

--
-- Chỉ mục cho bảng `danh_muc_sp`
--
ALTER TABLE `danh_muc_sp`
  ADD PRIMARY KEY (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_dien_thoai`
--
ALTER TABLE `hang_dien_thoai`
  ADD PRIMARY KEY (`ma_hang`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`ma_lh`);

--
-- Chỉ mục cho bảng `phu_kien`
--
ALTER TABLE `phu_kien`
  ADD PRIMARY KEY (`ma_phu_kien`),
  ADD KEY `ma_danh_muc` (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `tai_khoan_quan_tri`
--
ALTER TABLE `tai_khoan_quan_tri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `repassword` (`repassword`);

--
-- Chỉ mục cho bảng `thong_tin_dien_thoai`
--
ALTER TABLE `thong_tin_dien_thoai`
  ADD PRIMARY KEY (`ma_dt`),
  ADD KEY `ma_danh_muc` (`ma_danh_muc`),
  ADD KEY `hang` (`hang`);

--
-- Chỉ mục cho bảng `thong_tin_tai_khoan`
--
ALTER TABLE `thong_tin_tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_muc_sp`
--
ALTER TABLE `danh_muc_sp`
  MODIFY `ma_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `hang_dien_thoai`
--
ALTER TABLE `hang_dien_thoai`
  MODIFY `ma_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `ma_lh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phu_kien`
--
ALTER TABLE `phu_kien`
  MODIFY `ma_phu_kien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tai_khoan_quan_tri`
--
ALTER TABLE `tai_khoan_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `thong_tin_dien_thoai`
--
ALTER TABLE `thong_tin_dien_thoai`
  MODIFY `ma_dt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD CONSTRAINT `ct_don_hang_ibfk_1` FOREIGN KEY (`ma_dh`) REFERENCES `don_hang` (`ma_dh`);

--
-- Các ràng buộc cho bảng `danh_gia_pk`
--
ALTER TABLE `danh_gia_pk`
  ADD CONSTRAINT `danh_gia_pk_ibfk_1` FOREIGN KEY (`ma_phu_kien`) REFERENCES `phu_kien` (`ma_phu_kien`);

--
-- Các ràng buộc cho bảng `danh_gia_sp`
--
ALTER TABLE `danh_gia_sp`
  ADD CONSTRAINT `danh_gia_sp_ibfk_1` FOREIGN KEY (`ma_dt`) REFERENCES `thong_tin_dien_thoai` (`ma_dt`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `phu_kien`
--
ALTER TABLE `phu_kien`
  ADD CONSTRAINT `phu_kien_ibfk_1` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danh_muc_sp` (`ma_danh_muc`);

--
-- Các ràng buộc cho bảng `thong_tin_dien_thoai`
--
ALTER TABLE `thong_tin_dien_thoai`
  ADD CONSTRAINT `thong_tin_dien_thoai_ibfk_1` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danh_muc_sp` (`ma_danh_muc`),
  ADD CONSTRAINT `thong_tin_dien_thoai_ibfk_2` FOREIGN KEY (`hang`) REFERENCES `hang_dien_thoai` (`ma_hang`);

--
-- Các ràng buộc cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `tin_tuc_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tai_khoan_quan_tri` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
