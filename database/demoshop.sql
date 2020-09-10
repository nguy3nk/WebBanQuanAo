-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 20, 2019 lúc 03:32 AM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demoshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Admin_img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `password`, `full_name`, `email`, `Admin_img`, `created`, `level`) VALUES
(1, '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Minh Khánh', 'Admin@gmail.com', '65297773_1112458212287588_6229589989693325312_n.jpg', '2019-06-28 12:56:18', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `effect` varchar(8000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locate` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `image`, `Status`, `effect`, `locate`, `cat_id`) VALUES
(4, 'home-1-slide-1', 'slide_bg1.jpg', 'Hiện', ' <h1 class=\"tp-caption NotGeneric-Title tp-resizeme text-center\" style=\"letter-spacing: 0px; line-height: 60px;\"\r\n            data-x=\"140\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"-100\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"500\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">New Look<br />\r\n            Fashion 2017\r\n        </h1>\r\n        <h3 class=\"tp-caption NotGeneric-Title tp-resizeme h3 normal text-center\" style=\"letter-spacing: 0px;\"\r\n            data-x=\"195\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"0\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"800\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">What\'s Tranding Fashion?\r\n        </h3>\r\n        <a class=\"tp-caption NotGeneric-Title tp-resizeme btn btn-md btn-color\"\r\n            data-x=\"245\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"75\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"1100\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">See More\r\n        </a>\r\n', 'top', 0),
(5, 'home-1-slide-2', 'slide_bg2.jpg', 'Hiện', ' <h1 class=\"tp-caption NotGeneric-Title tp-resizeme\" style=\"letter-spacing: 0px; line-height: 60px;\"\r\n            data-x=\"150\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"-100\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"500\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">Bang\'s Eng<br />\r\n            20% Off\r\n        </h1>\r\n        <h3 class=\"tp-caption NotGeneric-Title tp-resizeme h3 normal \" style=\"letter-spacing: 0px;\"\r\n            data-x=\"150\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"0\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"800\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">The Bag for Summer \r\n        </h3>\r\n        <a class=\"tp-caption NotGeneric-Title tp-resizeme btn btn-md btn-color\"\r\n            data-x=\"150\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"75\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"1100\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">See More\r\n        </a>', 'top', 0),
(6, 'home-1-slide-3', 'slide_bg3.jpg', 'Hiện', '<div class=\"tp-caption NotGeneric-Title tp-resizeme\" style=\"letter-spacing: 0px; line-height: 60px;\"\r\n            data-x=\"center\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"-65\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"500\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">\r\n            <img src=\"uploads/banner/slider-caption-sale.png\" alt=\"\" style=\"width: 100%; max-width: 682px;\" />\r\n        </div>\r\n        <a class=\"tp-caption NotGeneric-Title tp-resizeme btn btn-md btn-black\"\r\n            data-x=\"center\"\r\n            data-y=\"center\"\r\n            data-hoffset=\"\"\r\n            data-voffset=\"65\"\r\n            data-transform_idle=\"o:1;\"\r\n            data-width=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-height=\"[\'auto\',\'auto\',\'auto\',\'auto\']\"\r\n            data-transform_in=\"y:50px;opacity:0;s:700;e:Power3.easeOut;\"\r\n            data-transform_out=\"s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;\"\r\n            data-start=\"900\"\r\n            data-speed=\"500\"\r\n            data-endspeed=\"500\"\r\n            data-splitin=\"none\"\r\n            data-splitout=\"none\"\r\n            data-responsive_offset=\"on\">See More\r\n        </a>', 'top', 0),
(7, 'bag', 'promo-banner4.jpg', 'Hiện', '', 'bot', 18),
(8, 'women', 'promo-banner3.jpg', 'Hiện', '', 'bot', 2),
(9, 'man', 'promo-banner2.jpg', 'Hiện', '', 'bot', 1),
(10, 'kid', 'promo-banner5.jpg', 'Hiện', '', 'bot', 19),
(11, 'Nam và Nữ', 'Categories_cupple.jpg', 'Hiện', '', 'bot_2', 0),
(12, 'Nam', 'Categories_man.jpg', 'Hiện', '', 'bot_2', 0),
(13, 'Nữ', '1563528532Categories_women.jpg', 'Hiện', '', 'bot_2', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_id` int(11) NOT NULL,
  `style` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created`, `updatetimed`, `parent_id`, `style`) VALUES
(1, 'Nam', '2019-06-12 20:27:09', '2019-06-12 20:27:09', 0, ''),
(2, 'Nữ', '2019-06-12 20:27:12', '2019-06-12 20:27:12', 0, ''),
(3, 'Áo phông', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 1, 'Áo'),
(4, 'Áo sơ mi', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 1, 'Áo'),
(5, 'Áo khoắc', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 1, 'Áo'),
(6, 'Quần âu', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 1, 'Quần'),
(7, 'Quần bò', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 1, 'Quần'),
(8, 'Quần đùi', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 1, 'Quần'),
(9, 'Quần bò', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 1, 'Quần'),
(10, 'Áo phông', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 2, 'Áo'),
(11, 'Áo sơ mi', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 2, 'Quần'),
(12, 'Áo khoắc', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 2, 'Áo'),
(13, 'Quần âu', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 2, 'Quần'),
(14, 'Quần bò', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 2, 'Quần'),
(15, 'Quần đùi', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 2, 'Quần'),
(16, 'Quần bò', '2019-06-24 14:32:01', '2019-06-24 14:32:01', 2, 'Quần'),
(17, 'Váy dài', '2019-07-04 23:45:18', '2019-07-04 23:45:18', 2, 'Váy'),
(18, 'Túi', '2019-07-16 20:27:02', '2019-07-16 20:27:02', 0, 'Túi'),
(19, 'Trẻ em', '2019-07-16 20:27:57', '2019-07-16 20:27:57', 0, ''),
(20, 'Nam và Nữ', '2019-07-19 16:27:55', '2019-07-19 16:27:55', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `messenger` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `member_id`, `messenger`, `new_id`, `parent_id`, `created`) VALUES
(1, 1, 'hay', 2, 0, '2019-07-12 19:50:18'),
(2, 1, 'hay', 2, 0, '2019-07-12 19:50:57'),
(3, 1, 'hay', 2, 0, '2019-07-12 19:51:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `birth_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` int(11) DEFAULT '0',
  `info` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `birth_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `status`, `created`, `updatetimed`, `price`) VALUES
(1, 'Giao hàng tận nơi', 1, '2019-07-03 20:15:40', '2019-07-03 20:15:40', 10),
(2, 'Lấy tại cửa hàng', 1, '2019-07-03 20:16:03', '2019-07-03 20:16:03', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like_comment`
--

CREATE TABLE `like_comment` (
  `member_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `birth_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) DEFAULT '0',
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT '0',
  `img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `created`, `updatetimed`, `birth_day`, `full_name`, `phone`, `email`, `address`, `gender`, `user_name`, `password`, `status`, `img`) VALUES
(1, '2019-06-27 13:51:31', '2019-06-27 13:51:31', '2019-06-01 00:00:00', 'Nguyễn Minh Khánh', '0987141021', 'khanh@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 0, 'Admin@gmail.com', '12345678', 0, NULL),
(4, '2019-06-27 14:00:59', '2019-06-27 14:00:59', '2019-06-14 00:00:00', 'Nguyễn Minh Khánh', '987141021', 'nguy4nk@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 0, 'Admin2@gmail.com', '12345678', 0, NULL),
(5, '2019-06-27 14:09:10', '2019-06-27 14:09:10', '2019-06-14 00:00:00', 'Nguyễn Minh Khánh', '987141021', 'Admin@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 0, 'Ad23min@gmail.com', '12345678', 0, NULL),
(6, '2019-07-04 17:36:58', '2019-07-04 17:36:58', '2017-07-07 00:00:00', 'Nguyễn Minh Khánh', '987141020', 'nguy4nk@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 0, 'Admi12312n@gmail.com', '12345678', 0, NULL),
(7, '2019-07-04 17:40:26', '2019-07-04 17:40:26', '2019-07-20 00:00:00', 'Nguyễn Minh Khánh', '987141021', 'nguy4nk@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 0, 'A111dmin@gmail.com', '12345678', 0, NULL),
(8, '2019-07-04 17:41:01', '2019-07-04 17:41:01', '2019-07-19 00:00:00', 'Nguyễn Minh Khánh', '987141021', 'nguy4nk@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 0, 'Ad11112min@gmail.com', '12345678', 0, NULL),
(9, '2019-07-04 17:42:28', '2019-07-04 17:42:28', '2019-07-04 00:00:00', 'Nguyễn Minh Khánh', '987141021', 'nguy4nk@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 0, '44dmin@gmail.com', '12345678', 0, NULL),
(10, '2019-07-05 20:20:04', '2019-07-05 20:20:04', '2019-07-04 00:00:00', 'asdasd asdasd asdasd dsds', '0123456789', 'sdjkfhsdsddsdsdsddsjd@gmail.com', 'asdkjasd asda', 0, 'Admsdsdin@gmail.com', '12345678', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(8000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `resources` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dayup` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `created`, `name`, `tomtat`, `content`, `image`, `resources`, `author`, `dayup`) VALUES
(2, '2019-07-05 15:19:40', 'Cơ hội ngàn năm có một: cầm 99k, mua áo BOO x Marvel', 'Giữa lúc các Siêu Anh Hùng Marvel đang làm mưa làm gió trên các phòng chiếu khắp toàn cầu, Bò Sữa by BOO cũng góp “bão” bằng chiếc áo từ BST BOO x Marvel chỉ 99k trong ngày 27/4/2019 (áp dụng cho 100 khách đầu tiên). Ngoài ra, giảm 10% tất cả sản phẩm khi khách mặc đồ Marvel...', '<p><strong><i>Giữa lúc các Siêu Anh Hùng Marvel đang làm mưa làm gió trên các phòng chiếu khắp toàn cầu, Bò Sữa by BOO cũng góp “bão” bằng chiếc áo từ BST BOO x Marvel chỉ 99k trong ngày 27/4/2019 (áp dụng cho 100 khách đầu tiên). Bên cạnh đó, với tất cả khách hàng mặc đồ Marvel từ mọi thương hiệu đều được giảm giá 10% tất cả sản phẩm. </i></strong></p>\r\n<p><img data-attachment-id=\"57943\" data-permalink=\"https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html/anh-1\" data-orig-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-1.jpg\" data-orig-size=\"900,603\" data-comments-opened=\"1\" data-image-meta=\"{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}\" data-image-title=\"Ảnh 1\" data-image-description=\"\" data-medium-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-1.jpg\" data-large-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-1.jpg\" class=\"aligncenter size-full wp-image-57943\" src=\"https://hnbmg.com/wp-content/uploads/%E1%BA%A2nh-1.jpg\" alt=\"\" width=\"900\" height=\"603\" srcset=\"https://hnbmg.com/wp-content/uploads/Ảnh-1.jpg 900w, https://hnbmg.com/wp-content/uploads/Ảnh-1-150x101.jpg 150w\" sizes=\"(max-width: 900px) 100vw, 900px\"></p>\r\n<h3><b>“ASSEMBLE” SALE ưu đãi khi mua áo Marvel từ BOO chỉ với 99k</b></h3>\r\n<p><span>Khi chưa ra mắt, Avengers đã chứng tỏ sức nóng của mình khi trở thành bộ film có số lượng vé bán ra cao kỉ lục ở nhiều thị trường trên thế giới, trong đó có Việt Nam. Để góp thêm sức nóng cho Bom tấn mùa Hè này từ nhà Marvel,<span> </span><strong>BOO</strong><span> </span>– thương hiệu thời trang sở hữu bản quyền sử dụng hình ảnh các Siêu Anh Hùng từ Marvel tung ra chương trình</span><i><span><span> </span>“Assemble” sale</span></i><span><span> </span>dành tặng cho các tín đồ thời trang nhân dịp công chiếu<span> </span><strong>Avengers: Endgame</strong>.</span></p>\r\n<p><span>Trong buổi sáng ngày 27/04/2019, tất cả các sản phẩm trong BST BOO x Marvel sẽ được bán với giá chỉ 99K, áp dụng cho<span> </span><strong>100 khách hàng đầu tiên</strong><span> </span>tại cơ sở<span> </span><strong>Bò Sữa by BOO 64 Tràng Tiền</strong>. Bên cạnh đó, các khách hàng mặc đồ Marvel từ mọi thương hiệu đều được giảm giá 10% trên tất cả sản phẩm.</span></p>\r\n<h3><b>Marvel – tượng đài của thế giới truyện tranh</b></h3>\r\n<p><span>80 năm hình thành và phát triển đủ để thấy Marvel Comics là một trong những franchise lâu đời nhất trong dòng chảy văn hóa đương đại tính tới thời điểm hiện tại. Đến nay, những nhân vật của thương hiệu truyện tranh này đã trở thành huyền thoại, trong đó có thể kể tới Captain America, Thor, Iron Man, chàng Người Nhện thân thiện hay nhóm X-Men huyền bí. Từ truyện tranh, các nhân vật của Marvel Comics đã thực hiện vô số những cuộc lấn sân mỹ mãn như trên truyền hình, màn ảnh rộng, những món đồ chơi và dĩ nhiên là cả thời trang.</span></p>\r\n<p><img data-attachment-id=\"57944\" data-permalink=\"https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html/anh-2-2\" data-orig-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-2.jpg\" data-orig-size=\"604,901\" data-comments-opened=\"1\" data-image-meta=\"{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}\" data-image-title=\"Ảnh 2\" data-image-description=\"\" data-medium-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-2.jpg\" data-large-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-2.jpg\" class=\"aligncenter size-full wp-image-57944\" src=\"https://hnbmg.com/wp-content/uploads/%E1%BA%A2nh-2.jpg\" alt=\"\" width=\"604\" height=\"901\" srcset=\"https://hnbmg.com/wp-content/uploads/Ảnh-2.jpg 604w, https://hnbmg.com/wp-content/uploads/Ảnh-2-101x150.jpg 101w\" sizes=\"(max-width: 604px) 100vw, 604px\"></p>\r\n<h3><b>Từ trang giấy bước ra đời thực với Bò Sữa by BOO</b></h3>\r\n<p><span>BST mùa Hè 2019 cũng không phải lần đầu tiên BOO tung ra một phiên bản hợp tác với<span> </span></span><span>franchise Marvel. Các item trong BST lần này chủ yếu giữ nguyên tinh thần đơn giản, dễ ứng dụng và đi sâu vào tiểu tiết để nâng cao chất lượng. Trong đó có thể kể tới những hình thêu embroidery kết hợp linh hoạt cùng hình in graphic, khiến các sản phẩm của BOO x Marvel trở nên độc đáo hơn.</span></p>\r\n<p><img data-attachment-id=\"57945\" data-permalink=\"https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html/anh-3\" data-orig-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-3.png\" data-orig-size=\"901,604\" data-comments-opened=\"1\" data-image-meta=\"{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}\" data-image-title=\"Ảnh 3\" data-image-description=\"\" data-medium-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-3.png\" data-large-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-3.png\" class=\"aligncenter size-full wp-image-57945\" src=\"https://hnbmg.com/wp-content/uploads/%E1%BA%A2nh-3.png\" alt=\"\" width=\"901\" height=\"604\" srcset=\"https://hnbmg.com/wp-content/uploads/Ảnh-3.png 901w, https://hnbmg.com/wp-content/uploads/Ảnh-3-150x101.png 150w\" sizes=\"(max-width: 901px) 100vw, 901px\"></p>\r\n<p><span>Được thiết kế để “fit” cùng mọi phục trang thường ngày, BST BOO x Marvel nằm trong khuôn khổ các sản phẩm dành cho mùa Hè 2019 từ Bò Sữa by BOO, đồng thời cũng thực hiện sứ mệnh mang giới trẻ Việt tới gần hơn với các Siêu Anh Hùng nổi tiếng trong làn sóng văn hóa đại chúng ở thời điểm hiện tại.</span></p>\r\n<p><img data-attachment-id=\"57946\" data-permalink=\"https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html/anh-4-2\" data-orig-file=\"https://hnbmg.com/wp-content/uploads/ảnh-4-2.png\" data-orig-size=\"1200,676\" data-comments-opened=\"1\" data-image-meta=\"{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}\" data-image-title=\"ảnh 4 (2)\" data-image-description=\"\" data-medium-file=\"https://hnbmg.com/wp-content/uploads/ảnh-4-2.png\" data-large-file=\"https://hnbmg.com/wp-content/uploads/ảnh-4-2-1024x577.png\" class=\"aligncenter size-large wp-image-57946\" src=\"https://hnbmg.com/wp-content/uploads/%E1%BA%A3nh-4-2-1024x577.png\" alt=\"\" width=\"1024\" height=\"577\" srcset=\"https://hnbmg.com/wp-content/uploads/ảnh-4-2-1024x577.png 1024w, https://hnbmg.com/wp-content/uploads/ảnh-4-2-150x85.png 150w, https://hnbmg.com/wp-content/uploads/ảnh-4-2.png 1200w\" sizes=\"(max-width: 1024px) 100vw, 1024px\"><img data-attachment-id=\"57948\" data-permalink=\"https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html/anh-5\" data-orig-file=\"https://hnbmg.com/wp-content/uploads/Ảnh-5.png\" data-orig-size=\"1100,620\" data-comments-opened=\"1\" data-image-meta=\"{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;foca', '1562314780anh-1.jpg', 'https://hnbmg.com/co-hoi-ngan-nam-co-mot-cam-99k-mua-ao-boo-x-marvel-57942.html', 'Bảo Lê', '2019-07-05 15:19:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderproduct`
--

CREATE TABLE `orderproduct` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `deli_id` int(11) DEFAULT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `total_money` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `member_id`, `customer_id`, `status`, `note`, `deli_id`, `pay_id`, `name`, `created`, `updatetimed`, `phone`, `email`, `address`, `total_money`) VALUES
(1, 1, NULL, 4, '', 1, 1, 'Nguyễn Minh Khánh', '2019-07-03 21:07:22', '2019-07-03 21:07:22', '0987141021', 'khanh@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 49),
(2, 1, NULL, 3, '', 1, 1, 'Nguyễn Minh Khánh', '2019-07-03 21:07:51', '2019-07-03 21:07:51', '0987141021', 'khanh@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 49),
(3, 1, NULL, 4, 'ko co', 1, 1, 'Nguyễn Minh Khánh', '2019-07-05 10:10:32', '2019-07-05 10:10:32', '0987141021', 'khanh@gmail.com', 'số 35 An Dương,Yên Phụ,Tây Hồ', 1283);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `ord_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `pro_id`, `quantity`, `price`, `ord_id`) VALUES
(7, 8, 1, 49, 1),
(8, 8, 1, 49, 2),
(9, 8, 1, 49, 3),
(10, 11, 1, 199, 3),
(11, 9, 2, 399, 3),
(12, 15, 3, 79, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetimed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `discount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`id`, `name`, `status`, `created`, `updatetimed`, `discount`) VALUES
(1, 'Thanh toán trực tiếp', 1, '2019-07-03 20:17:05', '2019-07-03 20:17:05', 0),
(2, 'Chuyển khoản', 1, '2019-07-03 20:17:21', '2019-07-03 20:17:21', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT '0',
  `sale_price` float DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(5000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `cat_id`, `name`, `img`, `price`, `sale_price`, `created`, `updated`, `type`, `content`, `mota`) VALUES
(8, 4, 'United Colors of Benetton', '1561444479sp1.jpg', 99, 49, '2019-06-25 13:34:39', '2019-06-25 13:34:39', NULL, '<div class=\" col-md-6\"><p>Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor. Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum</p>\r\n	<h4>VIVAMUS AT URNA</h4>\r\n	<ul>\r\n		<li>Etiam molestie sit amet arcu vel dictum</li>\r\n		<li>Integer mattis est nec porta porttitor</li>\r\n		<li>Maecenas condimentum sapien eget urna condimentum</li>\r\n		<li>Donec congue libero ut ex malesuada auctor</li>\r\n		<li>Generated 5 paragraphs, 453 words</li>\r\n	</ul>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<p>Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla fac</p></div>', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.'),
(9, 17, 'Printed Summer Shirt', '15622589513.jpg', 499, 399, '2019-07-04 23:49:11', '2019-07-04 23:49:11', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.</p>', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.'),
(10, 3, 'Logo Sweatshirt', '15622946134.jpg', 49, 0, '2019-07-05 09:43:33', '2019-07-05 09:43:33', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.</p>', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.'),
(11, 3, 'Jersey padded jacket', '15622946873.jpg', 199, 0, '2019-07-05 09:44:47', '2019-07-05 09:44:47', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.</p>', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.'),
(12, 3, 'Marled Stripe-Trim Tee', '15622947715.jpg', 299, 199, '2019-07-05 09:46:11', '2019-07-05 09:46:11', NULL, '<div class=\" col-md-6\">\r\n<p>Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.<br>Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum</p>\r\n<h4>VIVAMUS AT URNA</h4>\r\n<ul>\r\n<li>Etiam molestie sit amet arcu vel dictum</li>\r\n<li>Integer mattis est nec porta porttitor</li>\r\n<li>Maecenas condimentum sapien eget urna condimentum</li>\r\n<li>Donec congue libero ut ex malesuada auctor</li>\r\n<li>Generated 5 paragraphs, 453 words</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<p>Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.<br>Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum</p>\r\n<h4>HADDING FOUR</h4>\r\n<h5>HADDING FIVE</h5>\r\n<h6>HADDING SIX</h6>\r\n</div>', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit…'),
(13, 3, 'Printed Long Sleeve Tshirt', '15622948208.jpg', 79, 0, '2019-07-05 09:47:00', '2019-07-05 09:47:00', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.</p>', 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.'),
(14, 4, 'Printed Modern Shirt', '15622948769.jpg', 399, 199, '2019-07-05 09:47:56', '2019-07-05 09:47:56', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.</p>', 'Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor.'),
(15, 17, 'Premium Long Dress', '15622949624.jpg', 79, 0, '2019-07-05 09:49:22', '2019-07-05 09:49:22', NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain.</p>', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.'),
(16, 17, 'Long Denim Top', '15622950052.jpg', 199, 99, '2019-07-05 09:50:05', '2019-07-05 09:50:05', NULL, '<div class=\" col-md-6\">\r\n<p>Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.<br>Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum</p>\r\n<h4>VIVAMUS AT URNA</h4>\r\n<ul>\r\n<li>Etiam molestie sit amet arcu vel dictum</li>\r\n<li>Integer mattis est nec porta porttitor</li>\r\n<li>Maecenas condimentum sapien eget urna condimentum</li>\r\n<li>Donec congue libero ut ex malesuada auctor</li>\r\n<li>Generated 5 paragraphs, 453 words</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-6\">\r\n<p>Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.<br>Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum</p>\r\n<h4>HADDING FOUR</h4>\r\n<h5>HADDING FIVE</h5>\r\n<h6>HADDING SIX</h6>\r\n</div>', 'When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

CREATE TABLE `product_detail` (
  `pro_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT '0',
  `size` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `img_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(11) NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product_img`
--

INSERT INTO `product_img` (`id`, `img_link`, `pro_id`, `status`) VALUES
(14, '1561444955sp1.1.jpg', 8, 1),
(16, '1561444955sp1.3.jpg', 8, 1),
(17, '1561444955sp1.4.jpg', 8, 1),
(18, '1561444955sp1.5.jpg', 8, 1),
(19, '1561444955sp1.jpg', 8, 1),
(20, '15622589513.1.jpg', 9, 1),
(21, '15622589513.2.jpg', 9, 1),
(22, '15622589513.3.jpg', 9, 1),
(23, '15622589513.4.jpg', 9, 1),
(24, '15622589513.jpg', 9, 1),
(25, '15622946144.1.jpg', 10, 1),
(26, '15622946144.2.jpg', 10, 1),
(27, '15622946144.3.jpg', 10, 1),
(28, '15622946144.4.jpg', 10, 1),
(29, '15622946144.5.jpg', 10, 1),
(30, '15622946144.6.jpg', 10, 1),
(31, '15622946144.jpg', 10, 1),
(32, '15622946873.1.jpg', 11, 1),
(33, '15622946883.2.jpg', 11, 1),
(34, '15622946883.3.jpg', 11, 1),
(35, '15622946883.4.jpg', 11, 1),
(36, '15622946883.5.jpg', 11, 1),
(37, '15622946883.6.jpg', 11, 1),
(38, '15622946883.jpg', 11, 1),
(39, '15622947715.1.jpg', 12, 1),
(40, '15622947715.2.jpg', 12, 1),
(41, '15622947715.3.jpg', 12, 1),
(42, '15622947715.4.jpg', 12, 1),
(43, '15622947715.5.jpg', 12, 1),
(44, '15622947715.6.jpg', 12, 1),
(45, '15622947715.jpg', 12, 1),
(46, '15622948208.1.jpg', 13, 1),
(47, '15622948218.2.jpg', 13, 1),
(48, '15622948218.3.jpg', 13, 1),
(49, '15622948218.4.jpg', 13, 1),
(50, '15622948218.5.jpg', 13, 1),
(51, '15622948218.jpg', 13, 1),
(52, '15622948769.1.jpg', 14, 1),
(53, '15622948769.2.jpg', 14, 1),
(54, '15622948769.3.jpg', 14, 1),
(55, '15622948769.4.jpg', 14, 1),
(56, '15622948769.5.jpg', 14, 1),
(57, '15622948769.6.jpg', 14, 1),
(58, '15622948769.jpg', 14, 1),
(59, '15622949624.1.jpg', 15, 1),
(60, '15622949624.2.jpg', 15, 1),
(61, '15622949624.3.jpg', 15, 1),
(62, '15622949624.4.jpg', 15, 1),
(63, '15622949624.jpg', 15, 1),
(64, '15622950052.1.jpg', 16, 1),
(65, '15622950052.2.jpg', 16, 1),
(66, '15622950052.3.jpg', 16, 1),
(67, '15622950052.4.jpg', 16, 1),
(68, '15622950052.jpg', 16, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review_pro`
--

CREATE TABLE `review_pro` (
  `Id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `review_pro`
--

INSERT INTO `review_pro` (`Id`, `member_id`, `pro_id`, `rate`, `comment`, `created`) VALUES
(2, 1, 8, 5, 'âsfasfasf', '2019-07-02 12:13:58'),
(3, 1, 8, 1, 'binhthuong', '2019-07-02 12:24:02'),
(4, 1, 8, 5, 'qe', '2019-07-02 12:41:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `pro_id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Comment_Member` (`member_id`),
  ADD KEY `FK_Comment_New` (`new_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `like_comment`
--
ALTER TABLE `like_comment`
  ADD KEY `FK_LikeComment_Member` (`member_id`),
  ADD KEY `FK_LikeComment_Comment` (`comment_id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Order_Customer` (`customer_id`),
  ADD KEY `FK_Order_Member` (`member_id`),
  ADD KEY `FK_Order_Delivery` (`deli_id`),
  ADD KEY `FK_Order_Payment` (`pay_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_OrderDetail_Product` (`pro_id`),
  ADD KEY `FK_OrderDetail_Order` (`ord_id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Product_Category` (`cat_id`);

--
-- Chỉ mục cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD KEY `FK_ProductDetail_Product` (`pro_id`),
  ADD KEY `FK_ProductDetail_Color` (`color_id`);

--
-- Chỉ mục cho bảng `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ProductImg_Product` (`pro_id`);

--
-- Chỉ mục cho bảng `review_pro`
--
ALTER TABLE `review_pro`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_Review_member` (`member_id`),
  ADD KEY `FK_Review_Product` (`pro_id`);

--
-- Chỉ mục cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_WishList_Product` (`pro_id`),
  ADD KEY `FK_WishList_Customer` (`customer_id`),
  ADD KEY `FK_WishList_Member` (`member_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `review_pro`
--
ALTER TABLE `review_pro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_Comment_Member` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `FK_Comment_New` FOREIGN KEY (`new_id`) REFERENCES `news` (`id`);

--
-- Các ràng buộc cho bảng `like_comment`
--
ALTER TABLE `like_comment`
  ADD CONSTRAINT `FK_LikeComment_Comment` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`),
  ADD CONSTRAINT `FK_LikeComment_Member` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`);

--
-- Các ràng buộc cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD CONSTRAINT `FK_Order_Customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `FK_Order_Delivery` FOREIGN KEY (`deli_id`) REFERENCES `delivery` (`id`),
  ADD CONSTRAINT `FK_Order_Member` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `FK_Order_Payment` FOREIGN KEY (`pay_id`) REFERENCES `payment` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_OrderDetail_Order` FOREIGN KEY (`ord_id`) REFERENCES `orderproduct` (`id`),
  ADD CONSTRAINT `FK_OrderDetail_Product` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Product_Category` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `FK_ProductDetail_Color` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `FK_ProductDetail_Product` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product_img`
--
ALTER TABLE `product_img`
  ADD CONSTRAINT `FK_ProductImg_Product` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `review_pro`
--
ALTER TABLE `review_pro`
  ADD CONSTRAINT `FK_Review_Product` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_Review_member` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`);

--
-- Các ràng buộc cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `FK_WishList_Customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `FK_WishList_Member` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`),
  ADD CONSTRAINT `FK_WishList_Product` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
