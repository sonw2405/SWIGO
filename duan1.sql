-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2023 lúc 09:58 AM
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
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_binhluan`
--

CREATE TABLE `tbl_binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_monan` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_binhluan`
--

INSERT INTO `tbl_binhluan` (`id_binhluan`, `noidung`, `id_nguoidung`, `id_monan`, `ngaybinhluan`) VALUES
(157, 'bmnbb', 35, 27, '2023-12-08'),
(158, 'cực ngon', 35, 27, '2023-12-08'),
(159, 'gà ngonn', 35, 28, '2023-12-08'),
(160, 'cũng được', 35, 29, '2023-12-08'),
(161, 'ngonn', 35, 30, '2023-12-08'),
(162, 'ngonn', 35, 27, '2023-12-08'),
(163, 'ngonn', 35, 34, '2023-12-08'),
(166, 'ngonn', 35, 29, '2023-12-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`) VALUES
(23, 'COLD DRINK'),
(24, 'PIZZA'),
(25, 'SALAD'),
(26, 'SWEETS'),
(27, 'SPICY'),
(28, 'BURGER');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc_tintuc`
--

CREATE TABLE `tbl_danhmuc_tintuc` (
  `id_danhmuc_tintuc` int(11) NOT NULL,
  `ten_danhmuc_tintuc` varchar(100) NOT NULL,
  `phuluc_danhmuc_tintuc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc_tintuc`
--

INSERT INTO `tbl_danhmuc_tintuc` (`id_danhmuc_tintuc`, `ten_danhmuc_tintuc`, `phuluc_danhmuc_tintuc`) VALUES
(9, 'Top 10 món ăn ngon nhất', 'Thơm ngon khó cưỡng'),
(10, 'Giảm giá 20%', 'Giảm giá sốc'),
(11, 'Món ăn mùa hallowen', 'Tràn ngập không khí lễ hội'),
(12, 'Best seller tháng 10', 'Món ăn được ưa thích nhất tháng 10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_datban`
--

CREATE TABLE `tbl_datban` (
  `id_ban` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `songuoi` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ngay` date NOT NULL,
  `gio` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_diachinhanhang`
--

CREATE TABLE `tbl_diachinhanhang` (
  `id_diachi` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `id_nguoidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_diachinhanhang`
--

INSERT INTO `tbl_diachinhanhang` (`id_diachi`, `hoten`, `diachi`, `email`, `sodienthoai`, `id_nguoidung`) VALUES
(9, 'hai nhung', 'hà nội', 'abcd@fpt.edu.vn', '03215655', 36),
(15, 'sơn', 'Địa chỉ', 'ngson.24thmay@gmail.com', '12345678', 36),
(16, 'abc', 'hà nội', 'abc@gmail.com', '123456', 37),
(17, 'abcsfff', 'Địa chỉ', 'abc@gmail.com', '123456', 37),
(18, 'Phạm Thu huyền', 'Địa chỉ', 'phamhuyen111203.@gmail.com', '0853272262', 38),
(19, 'Phạm Thu huyền', 'Địa chỉ', 'phamhuyen111203.@gmail.com', '0853272262', 38),
(20, 'sonw', 'ha noi', 'fvsdv@gmail.com', '0382963297', 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id_giohang` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `ngaymua` datetime NOT NULL,
  `id_trangthai` int(11) NOT NULL,
  `loai_thanhtoan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon`
--

INSERT INTO `tbl_hoadon` (`id_giohang`, `id_nguoidung`, `ma_donhang`, `ngaymua`, `id_trangthai`, `loai_thanhtoan`) VALUES
(82, 36, 2999, '2023-11-24 15:35:37', 1, 'Tiền mặt'),
(83, 34, 8068, '2023-11-24 15:50:46', 1, 'Vnpay'),
(108, 37, 6891, '2023-12-01 15:32:29', 3, 'Tiền mặt'),
(109, 35, 3155, '2023-12-09 15:40:12', 1, 'Tiền mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon_chitiet`
--

CREATE TABLE `tbl_hoadon_chitiet` (
  `id_donhang_chitiet` int(11) NOT NULL,
  `ma_donhang` int(11) NOT NULL,
  `id_monan` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoadon_chitiet`
--

INSERT INTO `tbl_hoadon_chitiet` (`id_donhang_chitiet`, `ma_donhang`, `id_monan`, `soluongmua`) VALUES
(138, 2999, 17, 4),
(144, 5837, 15, 5),
(146, 3188, 16, 6),
(152, 2334, 17, 7),
(168, 229, 24, 3),
(169, 8341, 23, 4),
(170, 8341, 19, 5),
(171, 8341, 17, 1),
(172, 8341, 16, 3),
(173, 9515, 19, 10),
(174, 9515, 16, 12),
(175, 9515, 15, 10),
(176, 8916, 17, 1),
(177, 8916, 16, 1),
(178, 6558, 16, 3),
(179, 5918, 17, 3),
(180, 5918, 16, 7),
(181, 1492, 25, 10),
(182, 6891, 27, 5),
(183, 3155, 33, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_monan`
--

CREATE TABLE `tbl_monan` (
  `id_monan` int(11) NOT NULL,
  `ten_monan` varchar(255) NOT NULL,
  `gia_monan` int(11) NOT NULL,
  `anh_monan` varchar(100) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `mota_monan` text NOT NULL,
  `noibat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_monan`
--

INSERT INTO `tbl_monan` (`id_monan`, `ten_monan`, `gia_monan`, `anh_monan`, `id_danhmuc`, `mota_monan`, `noibat`) VALUES
(27, 'Pizza ', 145000, '1701242160_2-3.jpg', 28, 'NGON VLER', 35),
(28, 'Gà ủ muối cay', 90000, '1701246312_6-800x500-2.jpg', 27, 'ACBCS', 26),
(29, 'Burger gà', 40000, '1701246336_burger-ga-tom-trung-pho-mai.jpg', 28, 'GÀ LẬU', 43),
(30, 'Nước cam', 40000, '1701246358_cong-dung-cua-nuoc-cam-tuoi-va-cach-bao-quan-nuoc-cam-tot-nhat-6.jpg', 23, 'cam ngoài chợ đấy', 26),
(31, 'Salad ', 30000, '1701246383_istockphoto-465857643-612x612.jpg', 28, 'rau phun thuốc', 18),
(32, 'Bánh dâu ', 45000, '1701246410_cac-loai-banh-ngot-duoc-yeu-thich-nhat-tai-viet-nam-202103090937443232.jpg', 26, 'ẹc', 27),
(33, 'Hải sâm xào sốt cay', 145000, '1701246436_hai-sam-xao-sot-cay-500.jpg', 27, 'sâm ở ao', 15),
(34, 'Bánh bông lan', 25000, '1701417504_banh-bong-lan-pho-mai-dai-loan.jpg', 26, 'ngonn', 2),
(35, 'Sườn sốt cay', 60000, '1701417542_6-800x500-2.jpg', 27, 'sườn pò sốt cay tê', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `id_nguoidung` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `vaitro` int(1) NOT NULL,
  `anh_taikhoan` varchar(250) NOT NULL,
  `diachi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`id_nguoidung`, `hoten`, `sodienthoai`, `email`, `matkhau`, `vaitro`, `anh_taikhoan`, `diachi`) VALUES
(34, 'cạc', '0367360270', 'mn.@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '', 'nam tu liek'),
(35, 'sonw', '0382963297', 'fvsdv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, '1702110968_eb27a1ffcb375a2e55f8fdeac47dd1ca.jpg', 'ha noi'),
(36, 'sơn', '12345678', 'ngson.24thmay@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 'avt.jpg', 'Địa chỉ'),
(37, 'abcsfff', '123456', 'abc@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 0, '1701419485_burger-ga-tom-trung-pho-mai.jpg', 'Địa chỉ'),
(38, 'Phạm Thu huyền', '0853272262', 'phamhuyen111203.@gmail.com', '8cb4adfdce2a27413c88ee14795d83b3', 0, '1702047601_1b2f7ce8defbdb380e76c6aa394dce2c.jpg', 'Địa chỉ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `doanhthu` bigint(20) NOT NULL,
  `donhang` int(11) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `doanhthu`, `donhang`, `soluongban`) VALUES
(1, '2023-11-01', 453245, 45, 57),
(2, '2023-11-20', 200044, 2, 54),
(3, '2023-11-04', 4325324524, 5, 4),
(18, '2023-11-16', 45456, 552, 57),
(19, '2023-11-10', 200044, 2, 54),
(20, '2023-11-23', 4325324524, 5, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `ten_tintuc` varchar(100) NOT NULL,
  `mota_tintuc` text NOT NULL,
  `id_danhmuc_tintuc` int(11) NOT NULL,
  `anh_tintuc` varchar(100) NOT NULL,
  `motangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id_tintuc`, `ten_tintuc`, `mota_tintuc`, `id_danhmuc_tintuc`, `anh_tintuc`, `motangan`) VALUES
(13, 'Magic Cookie Bar', 'Magic Cookie Bar – thanh bánh qui diệu kỳ là loại bánh cổ điển là món ngon mỗi ngày thường được dùng làm món tráng miệng và xuất hiện trong các bữa tiệc của nhiều nước châu Âu.', 9, '1700669642_magic-cookie-bar.jpg', ''),
(14, 'Món ăn truyền thống các nước dịp Noel', 'Gà tây, bánh pudding, bánh gừng truyền thống hoặc hải sản nướng uống kèm với rượu vang là những món ăn yêu thích của người dân các nước trong ngày lễ quan trọng nhất của người Thiên chúa giáo.', 10, '1700994223_hovach.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_trangthai`
--

CREATE TABLE `tbl_trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `tentrangthai` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_trangthai`
--

INSERT INTO `tbl_trangthai` (`id_trangthai`, `tentrangthai`) VALUES
(1, 'Đơn mới'),
(2, 'Đã xác nhận đang thực hiện'),
(3, 'Đang giao hàng'),
(4, 'Giao hàng thành công'),
(5, 'Chờ xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(255) NOT NULL,
  `ma_donhang` varchar(255) NOT NULL,
  `vnp_bankcode` varchar(255) NOT NULL,
  `vnp_banktrano` varchar(255) NOT NULL,
  `vnp_cardtype` varchar(255) NOT NULL,
  `vnp_oderinfo` varchar(255) NOT NULL,
  `vnp_paydate` varchar(255) NOT NULL,
  `vnp_tmncode` varchar(255) NOT NULL,
  `vnp_transactionno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `ma_donhang`, `vnp_bankcode`, `vnp_banktrano`, `vnp_cardtype`, `vnp_oderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`) VALUES
(16, '100000000', '7229', 'NCB', 'VNP14188859', 'ATM', 'Thanh tóa đơn hàng đặt tại NTN Food', '20231120143119', 'ULHKCVCB', '14188859'),
(17, '840000', '8068', 'NCB', 'VNP14197570', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124155043', 'ULHKCVCB', '14197570'),
(18, '850000', '5837', 'NCB', 'VNP14197709', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124163636', 'ULHKCVCB', '14197709'),
(19, '870000', '3188', 'NCB', 'VNP14197753', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124164941', 'ULHKCVCB', '14197753'),
(20, '340000', '2025', 'NCB', 'VNP14197951', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124181622', 'ULHKCVCB', '14197951'),
(21, '400000', '9597', 'NCB', 'VNP14198457', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231124232325', 'ULHKCVCB', '14198457'),
(22, '100000', '8916', 'NCB', 'VNP14199607', 'ATM', 'Thanh tóan đơn hàng đặt tại NTN Food', '20231125145810', 'ULHKCVCB', '14199607');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `fk_kh_bl` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmuc_tintuc`
--
ALTER TABLE `tbl_danhmuc_tintuc`
  ADD PRIMARY KEY (`id_danhmuc_tintuc`);

--
-- Chỉ mục cho bảng `tbl_datban`
--
ALTER TABLE `tbl_datban`
  ADD PRIMARY KEY (`id_ban`),
  ADD KEY `fk_ban` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_diachinhanhang`
--
ALTER TABLE `tbl_diachinhanhang`
  ADD PRIMARY KEY (`id_diachi`),
  ADD KEY `fk_dc_tk` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `fk_gh_nd` (`id_nguoidung`),
  ADD KEY `fk_tt_bill` (`id_trangthai`);

--
-- Chỉ mục cho bảng `tbl_hoadon_chitiet`
--
ALTER TABLE `tbl_hoadon_chitiet`
  ADD PRIMARY KEY (`id_donhang_chitiet`);

--
-- Chỉ mục cho bảng `tbl_monan`
--
ALTER TABLE `tbl_monan`
  ADD PRIMARY KEY (`id_monan`),
  ADD KEY `fk_ma_dm` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- Chỉ mục cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`id_tintuc`),
  ADD KEY `fk_tintuc` (`id_danhmuc_tintuc`);

--
-- Chỉ mục cho bảng `tbl_trangthai`
--
ALTER TABLE `tbl_trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- Chỉ mục cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc_tintuc`
--
ALTER TABLE `tbl_danhmuc_tintuc`
  MODIFY `id_danhmuc_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_datban`
--
ALTER TABLE `tbl_datban`
  MODIFY `id_ban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_diachinhanhang`
--
ALTER TABLE `tbl_diachinhanhang`
  MODIFY `id_diachi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon_chitiet`
--
ALTER TABLE `tbl_hoadon_chitiet`
  MODIFY `id_donhang_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT cho bảng `tbl_monan`
--
ALTER TABLE `tbl_monan`
  MODIFY `id_monan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `id_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_trangthai`
--
ALTER TABLE `tbl_trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_binhluan`
--
ALTER TABLE `tbl_binhluan`
  ADD CONSTRAINT `fk_kh_bl` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_taikhoan` (`id_nguoidung`);

--
-- Các ràng buộc cho bảng `tbl_datban`
--
ALTER TABLE `tbl_datban`
  ADD CONSTRAINT `fk_ban` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_taikhoan` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_diachinhanhang`
--
ALTER TABLE `tbl_diachinhanhang`
  ADD CONSTRAINT `fk_dc_tk` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_taikhoan` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `fk_gh_nd` FOREIGN KEY (`id_nguoidung`) REFERENCES `tbl_taikhoan` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tt_bill` FOREIGN KEY (`id_trangthai`) REFERENCES `tbl_trangthai` (`id_trangthai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_monan`
--
ALTER TABLE `tbl_monan`
  ADD CONSTRAINT `fk_ma_dm` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);

--
-- Các ràng buộc cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD CONSTRAINT `fk_tintuc` FOREIGN KEY (`id_danhmuc_tintuc`) REFERENCES `tbl_danhmuc_tintuc` (`id_danhmuc_tintuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
