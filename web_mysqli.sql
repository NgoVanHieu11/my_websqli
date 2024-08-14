-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2024 lúc 11:22 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'hieuadmin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(4, 'Tai nghe bluetooth 2.0', '<p><strong>H&agrave;ng mới về, si&ecirc;u hot, si&ecirc;u đẹp</strong></p>\r\n', '<h3>&nbsp;</h3>\r\n\r\n<p><strong>N&eacute;t đẹp vượt thời gian h&ograve;a quyện c&ugrave;ng sự tiện lợi</strong></p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/tai-nghe-marshall\" target=\"_blank\">Tai nghe Marshall</a>&nbsp;chinh phục người d&ugrave;ng bởi sự kết hợp tinh tế giữa phong c&aacute;ch cổ điển v&agrave; hiện đại. Lớp da tổng hợp cao cấp c&ugrave;ng logo Marshall tạo n&ecirc;n vẻ ngo&agrave;i sang trọng, đẳng cấp, khẳng định gu thẩm mỹ tinh tế của chủ sở hữu.</p>\r\n\r\n<p>Thiết kế bịt tai &ecirc;m &aacute;i &ocirc;m s&aacute;t v&agrave;nh tai, mang đến cảm gi&aacute;c thoải m&aacute;i đặc biệt ngay cả khi sử dụng trong thời gian d&agrave;i. Nhờ bản lề gấp gọn th&ocirc;ng minh, Major V c&oacute; thể dễ d&agrave;ng được thu nhỏ, thuận tiện cho việc cất giữ v&agrave; di chuyển. Chiếc tai nghe n&agrave;y kh&ocirc;ng chỉ l&agrave; phụ kiện &acirc;m nhạc m&agrave; c&ograve;n l&agrave; m&oacute;n đồ thời trang độc đ&aacute;o, thể hiện c&aacute; t&iacute;nh ri&ecirc;ng của bạn.</p>\r\n\r\n<p><a href=\"https://cdn.tgdd.vn/Products/Images/54/326708/tai-nghe-bluetooth-chup-tai-marshall-major-v-bv-3.jpg\" onclick=\"return false;\"><img alt=\"Tai nghe Bluetooth chụp tai Marshall Major V - Thiết kế \" src=\"https://cdn.tgdd.vn/Products/Images/54/326708/tai-nghe-bluetooth-chup-tai-marshall-major-v-bv-3.jpg\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n', 4, 1, '1723564173.png'),
(5, 'Cục sạc 45w', '<p><strong>H&agrave;ng mới về, si&ecirc;u hot, si&ecirc;u đẹp</strong></p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>-&nbsp;<a href=\"https://www.thegioididong.com/adapter-sac/bo-adapter-sac-5-cong-type-c-pd-qc-3-0-gan-300w-kem-cap-type-c-type-c-1m-ugreen-nexode-90903b\" target=\"_blank\">Bộ Adapter Sạc 5 cổng Type C PD QC 3.0 GaN 300W k&egrave;m C&aacute;p Type C - Type C 1m Ugreen Nexode 90903B</a>&nbsp;l&agrave; một lựa chọn tuyệt vời cho nhu cầu sạc nhiều thiết bị c&ugrave;ng l&uacute;c với tốc độ nhanh ch&oacute;ng. Sạc nhanh đa thiết bị đồng thời với tổng c&ocirc;ng suất l&ecirc;n đến 300W, tiết kiệm thời gian sạc đ&aacute;ng kể.</p>\r\n\r\n<p>&bull; Sở hữu tổng c&ocirc;ng suất l&ecirc;n đến 300W,&nbsp;<a href=\"https://www.thegioididong.com/adapter-sac-ugreen\" target=\"_blank\">adapter sạc Ugreen</a>&nbsp;mang đến khả năng sạc nhanh v&agrave; hiệu quả cho nhiều thiết bị gi&uacute;p bạn tiết kiệm thời gian một c&aacute;ch tối ưu. Điểm nổi bật của adapter l&agrave; khả năng tương th&iacute;ch rộng r&atilde;i với nhiều thiết bị từ c&aacute;c thương hiệu kh&aacute;c nhau. Nhờ vậy, bạn chỉ cần một adapter duy nhất để đ&aacute;p ứng mọi nhu cầu sạc cho c&aacute;c thiết bị điện tử của m&igrave;nh.</p>\r\n\r\n<p>&bull; Thiết kế nhỏ gọn gi&uacute;p bạn dễ d&agrave;ng mang theo b&ecirc;n m&igrave;nh trong mọi chuyến đi. D&ugrave; bạn l&agrave; người thường xuy&ecirc;n di chuyển c&ocirc;ng t&aacute;c hay đơn giản l&agrave; th&iacute;ch l&agrave;m việc tại qu&aacute;n c&agrave; ph&ecirc;, đảm bảo thiết bị của bạn lu&ocirc;n được sạc đầy năng lượng. C&agrave;ng tiện lợi hơn với c&aacute;p Type C - Type C đi k&egrave;m, bạn kh&ocirc;ng cần tốn thời gian v&agrave; chi ph&iacute; để mua th&ecirc;m c&aacute;p sạc ph&ugrave; hợp.&nbsp;</p>\r\n\r\n<p>&bull; Sử dụng c&ocirc;ng nghệ Gallium Nitride (GaN) gi&uacute;p tăng hiệu suất sạc, giảm nhiệt độ v&agrave; k&iacute;ch thước của Nexode 90903B c&ograve;n hỗ trợ c&aacute;c chuẩn sạc ti&ecirc;n tiến Power Delivery (PD) v&agrave; Quick Charge 3.0 (QC 3.0), tương th&iacute;ch với nhiều thiết bị di động hiện nay. Nhờ vậy, bạn c&oacute; thể sạc nhanh ch&oacute;ng cho điện thoại, m&aacute;y t&iacute;nh bảng v&agrave; nhiều thiết bị kh&aacute;c một c&aacute;ch an to&agrave;n v&agrave; hiệu quả.</p>\r\n\r\n<p>&bull;&nbsp;<a href=\"https://www.thegioididong.com/adapter-sac\" target=\"_blank\">Adapter sạc</a>&nbsp;t&iacute;ch hợp 5 cổng sạc bao gồm 1 USB v&agrave; 3 Type C c&oacute; thể sạc tối đa 5 thiết bị c&ugrave;ng l&uacute;c, r&uacute;t ngắn thời gian chờ đợi. Cụ thể từng cổng l&agrave; USB c&oacute; c&ocirc;ng suất tối đa 22.5W, Type C1 đạt c&ocirc;ng suất tối đa 140W, Type C2/C3 c&oacute; c&ocirc;ng suất tối đa Max 100W v&agrave; Type C4 với c&ocirc;ng suất l&ecirc;n đến 45W.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 4, 1, '1723565042.png'),
(6, 'Bảng thông tin điện tử', '<p><strong>N&oacute;i về nhu cầu quảng c&aacute;o, hiển thị c&aacute;c th&ocirc;ng tin tại c&aacute;c nơi c&ocirc;ng cộng</strong></p>\r\n', '<p>Đ&aacute;p ứng nhu cầu quảng c&aacute;o, hiển thị c&aacute;c th&ocirc;ng tin tại c&aacute;c nơi c&ocirc;ng cộng.<br />\r\nSử dụng Led Outdoor với cường độ s&aacute;ng cao (&gt;5000mcd), g&oacute;c nh&igrave;n rộng (&gt;110).<br />\r\nNhiều loại module : P8, P10, P16... nhiều m&agrave;u, 3 m&agrave;u, 1 m&agrave;u tuỳ theo nhu cầu kh&aacute;ch h&agrave;ng.<br />\r\nVới nhiều k&iacute;ch thước kh&aacute;c nhau tuỳ theo nhu cầu kh&aacute;ch h&agrave;ng, sản phẩm ch&uacute;ng t&ocirc;i lu&ocirc;n đ&aacute;p ứng tốt c&aacute;c nhu c&acirc;u th&ocirc;ng tin quảng c&aacute;o của kh&aacute;ch h&agrave;ng.<br />\r\nMạch điều khiển trung t&acirc;m CPU BX - 5A1, CPU BX - 4T2, HD....<br />\r\nNhiều hiệu ứng, kiểu chữ, h&igrave;nh ảnh sinh động.<br />\r\nKết nối theo nhiều chuẩn : RS232, mạng TCP/IP, Internet..</p>\r\n\r\n<p><img alt=\"Bảng điện tử nhiều màu\" src=\"https://vietdigital.vn/images/quangbao/fullcolor.png\" style=\"width:80%\" /></p>\r\n\r\n<p>Chương tr&igrave;nh soạn thảo dễ thao t&aacute;c cho ph&eacute;p đưa nội dung, h&igrave;nh ảnh từ m&aacute;y t&iacute;nh truyền đến bảng điện tử.<br />\r\nLưu trữ dữ liệu : 512M - 2GB tuỳ thuộc v&agrave;o card điều khiển.</p>\r\n', 3, 1, '1721738769.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(18, 8, '6925', 1, '2024-08-11 10:48:46', 'chuyenkhoan', 3),
(19, 47, '3053', 1, '2024-08-14 00:34:44', 'tienmat', 0),
(20, 54, '6919', 1, '2024-08-14 01:24:54', 'tienmat', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(7, '2985', 21, 3),
(8, '2985', 17, 4),
(9, '1340', 25, 1),
(10, '1340', 26, 1),
(11, '1340', 30, 1),
(12, '1340', 28, 1),
(13, '857', 31, 1),
(14, '857', 32, 1),
(15, '857', 28, 1),
(16, '5347', 32, 2),
(17, '5347', 28, 1),
(18, '5347', 31, 1),
(19, '9957', 28, 1),
(20, '1893', 28, 1),
(21, '6214', 28, 1),
(22, '9261', 33, 1),
(23, '6925', 30, 1),
(24, '3053', 28, 1),
(25, '6919', 35, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(53, 'Ngô Văn Hiếu', 'hieungo1233210@gmail.com', 'Huế', '25f9e794323b453885f5181f1b624d0b', '0987654321'),
(54, 'Ngô Văn Hiếu', '21T1020027@husc.edu.vn', 'Huế', 'e10adc3949ba59abbe56e057f20f883e', '0987654321');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(11, 'Loa', 3),
(12, 'Tai nghe', 3),
(17, 'Đèn livestream', 3),
(19, ' Cục sạc ', 4),
(21, 'Dây sạc ', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(3, ' Tin siêu sale', 2),
(4, ' Tin sản phẩm mới về', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<p><em><strong>1. Số điện thoại: 0987654321 Anh Hiếu</strong></em></p>\r\n\r\n<p><em><strong>2. Zalo:&nbsp;0987654321 Ng&ocirc; Văn Hiếu</strong></em></p>\r\n\r\n<p><em><strong>3. Facebook:&nbsp;<a href=\"https://www.facebook.com/profile.php?id=100009255974908\">https://www.facebook.com/profile.php?id=100009255974908</a></strong></em></p>\r\n\r\n<p><em><strong>4. Instagram: <a href=\"http://instagram.comngovanhieu\">ngovanhieu</a></strong></em></p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(28, 'Loa bluetooth', '456', '500000', 10, '1721661898.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>GOESBLK</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>JBL</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2022</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng ngh&ecirc;̣ &acirc;m thanh:</td>\r\n			<td>Chất &acirc;m JBL Pro Sound</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kích thước màn loa:</td>\r\n			<td>1 Củ m&agrave;ng loa 44 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng su&acirc;́t loa:</td>\r\n			<td>3.1 W</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>Thiết kế vu&ocirc;ng vức độc đ&aacute;o, loa nhỏ gọn c&oacute; t&iacute;nh di động cao</li>\r\n	<li>C&ocirc;ng suất 3.1W c&ugrave;ng m&agrave;ng loa 44mm cho &acirc;m thanh to r&otilde;</li>\r\n	<li>Kh&aacute;ng nước chuẩn IPX7 gi&uacute;p bảo vệ thiết bị khỏi trời mưa</li>\r\n	<li>C&ocirc;ng nghệ Bluetooth 4.2 ổn định kết nối trong b&aacute;n k&iacute;nh 10m</li>\r\n	<li>Vi&ecirc;n pin bền bỉ cho thời lượng sử dụng đến 5 giờ, sạc 2.5 giờ</li>\r\n</ul>\r\n', 1, 11),
(30, 'Cục sạc', '789', '100000', 9, '1721661961.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>A2147</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Trắng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Anker</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2022</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>18 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng nghệ/Tiện &iacute;ch:</td>\r\n			<td>C&ocirc;ng nghệ GaN, PowerIQ 3.0 (Tương th&iacute;ch PD v&agrave; PPS)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&acirc;̀u vào:</td>\r\n			<td>100 - 240V ~ 50/60Hz,1A</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Đ&acirc;̀u ra:</td>\r\n			<td>Type C: 5V - 3A, 9V - 3A, 15V - 2A</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>Củ sạc nhỏ gọn gi&uacute;p dễ d&agrave;ng mang theo b&ecirc;n cạnh</li>\r\n	<li>C&ocirc;ng suất sạc 30W đảm bảo thời gian sạc nhanh ch&oacute;ng</li>\r\n	<li>Cổng type-C tương th&iacute;ch với nhiều thiết bị kh&aacute;c nhau</li>\r\n	<li>C&ocirc;ng nghệ PD v&agrave; PowerIQ gi&uacute;p an t&acirc;m hơn khi sử dụng</li>\r\n	<li>C&ocirc;ng nghệ GaN gi&uacute;p củ sạc nhỏ hơn nhưng vẫn mạnh mẽ</li>\r\n</ul>\r\n', 1, 19),
(31, 'Đèn livestream', '789', '300000', 9, '1721663320.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>J_ICL120</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Innostyle</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Quốc</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>Đang cập nhật</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>24 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Khối lượng sản phẩm (kg):</td>\r\n			<td>đang cập nhật kg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>1 cụm đ&egrave;n c&ocirc;ng suất 400W - 500W - 3 chế độ &aacute;nh s&aacute;ng: Trắng, V&agrave;ng v&agrave; TrungT&iacute;nh</li>\r\n	<li>1 bộ chụp h&igrave;nh cầu c&oacute; k&iacute;ch thước đường k&iacute;nh: 65*55cm (Chất liệu phần tản s&aacute;ng: vải mềm cao cấp)&nbsp;</li>\r\n	<li>1 ch&acirc;n đ&egrave;n loại cao cấp l&agrave;m bằng hợp kim sắt chống rỉ, nặng 1.5kg v&ocirc; c&ugrave;ng chắc chắn</li>\r\n	<li>1 bộ điều khiển remote đa năng điều chỉnh độ s&aacute;ng v&agrave; chế độ s&aacute;ng</li>\r\n</ul>\r\n', 1, 17),
(32, 'Tai nghe', '456', '500000', 10, '1722263552.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>RB-725HB Pro</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Remax</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại tai nghe:</td>\r\n			<td>Tai nghe chụp tai</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng suất:</td>\r\n			<td>25mW*2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;ng loa:</td>\r\n			<td>40mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<caption>&nbsp;</caption>\r\n</table>\r\n', '<ul>\r\n	<li>Kiểu d&aacute;ng chụp tai thời trang, đeo tai thoải m&aacute;i trong thời gian d&agrave;i</li>\r\n	<li>Trang bị 4 n&uacute;t bấm điều khiển ngay tr&ecirc;n tai nghe tiện lợi</li>\r\n	<li>Chất lượng &acirc;m thanh sống động, &acirc;m bass chắc khỏe, treble trong trẻo</li>\r\n	<li>C&ocirc;ng nghệ Bluetooth 5.1 gi&uacute;p gh&eacute;p nối nhanh ch&oacute;ng v&agrave; ổn định</li>\r\n	<li>C&oacute; thể kết nối trực tiếp qua cổng &acirc;m thanh AUX, thẻ nhớ TF</li>\r\n	<li>Dung lượng pin cao, thời gian sử dụng l&ecirc;n tới 12 giờ, sạc khoảng 2.5 giờ</li>\r\n</ul>\r\n', 1, 12),
(34, 'Dây sạc ', '456', '50000', 10, '1722355932.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>RC-131TH</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Remax</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2020</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại:</td>\r\n			<td>C&aacute;p 3 in 1 (Lightning + Type-C + Micro)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chiều d&agrave;i c&aacute;p:</td>\r\n			<td>Chiều d&agrave;i d&acirc;y ti&ecirc;u chuẩn 1.15 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Tốc độ truyền tải tối đa:</td>\r\n			<td>480 Mbps</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>C&aacute;p c&oacute; 2 m&agrave;u sắc để lựa chọn: đen v&agrave; đỏ</li>\r\n	<li>Khả năng kết nối vượt trội, đầu ra 3 cổng cắm tiện &iacute;ch</li>\r\n	<li>Bao gồm 3 cổng sạc Lightning + Micro USB + Type C</li>\r\n	<li>Trang bị chip th&ocirc;ng minh hiện đại, hỗ trợ sạc nhanh tiện &iacute;ch</li>\r\n	<li>Sạc c&ugrave;ng l&uacute;c nhiều thiết bị, d&acirc;y d&ugrave; chắc chắn bảo vệ d&acirc;y</li>\r\n</ul>\r\n', 1, 21),
(35, 'Tai nghe', '456', '100000', 9, '1723561978.png', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model:</td>\r\n			<td>RB-725HB Pro</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;u sắc:</td>\r\n			<td>Đen</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; sản xuất:</td>\r\n			<td>Remax</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xuất xứ:</td>\r\n			<td>Trung Qu&ocirc;́c</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Năm ra mắt :</td>\r\n			<td>2023</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thời gian bảo h&agrave;nh:</td>\r\n			<td>12 Th&aacute;ng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Địa điểm bảo h&agrave;nh:</td>\r\n			<td>Nguyễn Kim</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại tai nghe:</td>\r\n			<td>Tai nghe chụp tai</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&ocirc;ng suất:</td>\r\n			<td>25mW*2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>M&agrave;ng loa:</td>\r\n			<td>40mm</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<ul>\r\n	<li>Kiểu d&aacute;ng chụp tai thời trang, đeo tai thoải m&aacute;i trong thời gian d&agrave;i</li>\r\n	<li>Trang bị 4 n&uacute;t bấm điều khiển ngay tr&ecirc;n tai nghe tiện lợi</li>\r\n	<li>Chất lượng &acirc;m thanh sống động, &acirc;m bass chắc khỏe, treble trong trẻo</li>\r\n	<li>C&ocirc;ng nghệ Bluetooth 5.1 gi&uacute;p gh&eacute;p nối nhanh ch&oacute;ng v&agrave; ổn định</li>\r\n	<li>C&oacute; thể kết nối trực tiếp qua cổng &acirc;m thanh AUX, thẻ nhớ TF</li>\r\n	<li>Dung lượng pin cao, thời gian sử dụng l&ecirc;n tới 12 giờ, sạc khoảng 2.5 giờ</li>\r\n</ul>\r\n', 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(3, 'Văn Hiếu', '0987654321', '33/839 Huế', 'Giao nhanh nhé', 8),
(4, 'Võ Trọng Huy', '121243434', 'Huế', 'hello', 43),
(5, 'Ngô Văn Hiếu', '0987654321', 'Huế', 'tai nghe', 54);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
