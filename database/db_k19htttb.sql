-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 06:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_k19htttb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `id` int(11) NOT NULL,
  `ho_va_ten` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_phan_hoi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_log` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lien_he`
--

INSERT INTO `tbl_lien_he` (`id`, `ho_va_ten`, `email`, `so_dien_thoai`, `noi_dung_phan_hoi`, `created_time`, `created_by`, `modified_time`, `modified_by`, `modified_log`) VALUES
(1, 'Chu Văn Huy', 'chuvanhuy@gmail.com', '0904396383', 'Tôi muốn ủng hộ Site số tiền 5.000.000đ nhằm mục đích duy trì, phát triển Site hữu ích này. Nhắn cho tôi số tài khoản.', '2019-04-09 04:25:54', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id` int(11) NOT NULL,
  `tai_khoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_log` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id`, `tai_khoan`, `mat_khau`, `created_time`, `created_by`, `modified_time`, `modified_by`, `modified_log`) VALUES
(1, 'admin', '12345678', '2019-04-09 03:49:19', NULL, NULL, NULL, NULL),
(2, 'huycv', '12345678', '2019-04-09 03:49:19', NULL, NULL, NULL, NULL),
(3, 'ducpt', '12345678', '2019-04-09 03:50:53', NULL, NULL, NULL, NULL),
(4, 'nhungbh', '12345678', '2019-04-09 03:50:53', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_ban` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_log` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id`, `ten_san_pham`, `mo_ta`, `anh_minh_hoa`, `gia_ban`, `so_luong`, `created_time`, `created_by`, `modified_time`, `modified_by`, `modified_log`) VALUES
(1, 'Lẵng hoa như ý đẹp tặng sếp', 'Bó hoa Tình yêu diệu kỳ khiến người nhận sẽ đắm say ngay từ cái nhìn đầu tiên bởi vẻ đẹp của 25 đóa hồng đỏ tươi tắm nổi bật trên nền xanh của cỏ đồng tiền và lá phụ. Bó hoa nhắn gửi đến người nhận thông điệp của hạnh phúc về một tình yêu diệu kỳ từ trái tim.', NULL, 399000, 11, '2019-04-09 04:16:37', NULL, NULL, NULL, NULL),
(2, 'Hoa cẩm tú cầu tặng bạn gái cực đẹp', 'Bó hoa Tình yêu diệu kỳ khiến người nhận sẽ đắm say ngay từ cái nhìn đầu tiên bởi vẻ đẹp của 25 đóa hồng đỏ tươi tắm nổi bật trên nền xanh của cỏ đồng tiền và lá phụ. Bó hoa nhắn gửi đến người nhận thông điệp của hạnh phúc về một tình yêu diệu kỳ từ trái tim.', NULL, 389000, 18, '2019-04-09 04:16:37', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_log` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id`, `tieu_de`, `mo_ta`, `noi_dung`, `anh_minh_hoa`, `created_time`, `created_by`, `modified_time`, `modified_by`, `modified_log`) VALUES
(1, 'Nghi phạm liên tục đổi lời khai trong vụ sát hại thiếu nữ giao gà', 'Cảnh sát phải chuyển hướng điều tra vì chủ mưu vụ án thay đổi, nhiều tình tiết chưa sáng tỏ.', ' Hơn hai tháng điều tra vụ án thiếu nữ giao gà ngày 30 Tết bị cưỡng bức, sát hại, đến ngày 8/4, Công an tỉnh Điện Biên đã khởi tố 9 bị can để điều tra về các tội Giết người, Cướp tài sản, Hiếp dâm, Tàng trữ trái phép chất ma túy, Bắt giữ người trái pháp luật, Bắt cóc nhằm chiếm đoạt tài sản và Không tố giác tội phạm.\r\n\r\nCông an Điện Biên nhận định đây là vụ án đặc biệt nghiêm trọng, chưa từng xảy ra trên địa bàn. Tám trong chín bị can đều có tiền án, nghiện ma túy và ngoan cố trong khai báo. Quá trình điều tra, vụ án phát sinh nhiều tình tiết phức tạp mới và các bị can ngoan cố, thay đổi lời khai liên tục khiến nhà chức trách phải chuyển hướng điều tra.', NULL, '2019-04-09 04:07:07', NULL, NULL, NULL, NULL),
(2, 'Barca thua Man Utd như thế nào trong vụ mua Pogba ', 'Trước khi gia nhập Man Utd năm 2016, Paul Pogba từng có cơ hội trở thành một cầu thủ Barca. ', 'Năm 2015, Pogba còn chơi cho Juventus. Chúng tôi đã nói với Juventus rằng nếu bán cậu ấy, chúng tôi sẽ quan tâm. Và khi quyết định bán Pogba năm 2016, họ đã nói với chúng tôi về mức giá mong muốn. Nhưng lúc đó Barca không đủ tiền. Thế nên, Pogba đã tới Man Utd. Cậu ấy đang giúp Man Utd tốt lên bởi cậu ấy là một trong những ngôi sao của bóng đá ngày nay\", Chủ tịch Barca Josep Bartomeu tiết lộ trong cuộc phỏng vấn hôm 8/4.', NULL, '2019-04-09 04:07:07', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
