-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 02:55 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoes_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `CartID` int(11) NOT NULL,
  `CustomerID` int(50) NOT NULL,
  `ProductID` int(50) NOT NULL,
  `Size` int(11) DEFAULT NULL,
  `Amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(50) NOT NULL,
  `ProductID` int(50) NOT NULL,
  `CustomerID` int(50) NOT NULL,
  `Content` text NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`CommentID`, `ProductID`, `CustomerID`, `Content`, `Time`) VALUES
(1, 1, 4, 'Hello', '2022-12-14 10:38:31'),
(6, 1, 4, 'aa', '2022-12-14 10:50:25'),
(7, 1, 4, 'helo', '2022-12-14 10:50:29'),
(8, 2, 4, 'Sản phẩm này chưa được tốt', '2022-12-14 10:56:31'),
(9, 3, 4, 'Sản phẩm này hơi xấu', '2022-12-14 10:56:42'),
(10, 1, 0, 'asdasd', '2022-12-14 10:58:06'),
(11, 9, 4, 'ggggggg', '2022-12-15 02:01:01'),
(12, 9, 4, 'ggggggg', '2022-12-15 02:01:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `FeedBackID` int(50) NOT NULL,
  `CustomerID` int(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`FeedBackID`, `CustomerID`, `Title`, `Content`, `Time`) VALUES
(5, 4, 'GIÁ SẢN PHẨM', 'Giá sản phẩm hợp lý', '2022-12-14 10:13:41'),
(6, 4, 'Méo có gì', 'Méo', '2022-12-15 01:58:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listorder`
--

CREATE TABLE `listorder` (
  `orderID` int(50) NOT NULL,
  `customerid` int(50) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Ward` varchar(50) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `paytype` varchar(20) DEFAULT NULL,
  `ordership` float DEFAULT NULL,
  `orderfee` float DEFAULT NULL,
  `orderstate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `NewsName` varchar(100) DEFAULT NULL,
  `NewsImg` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`NewsID`, `Type`, `NewsName`, `NewsImg`, `Description`) VALUES
(1, NULL, 'RA MẮT PHIÊN BẢN F7 RACING', 'https://bucket.nhanh.vn/04f7ff-92233/bn/20221207_Kqn2WzHQ2ZmxpIuw.jpg', 'F7 Racing Thế Hệ Mới - Phiên bản đầy năng động, sáng tạo và đổi mới trong phong cách phối màu mang đến sự hiện đại và trẻ trung cho giới trẻ.'),
(2, NULL, 'CHỐT DEAL VỚI SHARK HÙNG ANH', 'https://bucket.nhanh.vn/04f7ff-92233/bn/20220704_HLCmuVSzCDgFGuHYfI74L6Ph.jpg', 'Mùa 5, chốt deal với Shark Hùng Anh 1.000.000$');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderproduct`
--

CREATE TABLE `orderproduct` (
  `orderid` int(50) NOT NULL,
  `productid` int(50) NOT NULL,
  `size` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ProductID` int(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Description` text DEFAULT NULL,
  `PrimaryImg` varchar(255) DEFAULT NULL,
  `Img1` varchar(255) DEFAULT NULL,
  `Img2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ProductID`, `Type`, `ProductName`, `Price`, `Description`, `PrimaryImg`, `Img1`, `Img2`) VALUES
(1, 'Sandals ', 'Sandals F7 Racing xanh mint', 459000, 'F7 Racing Thế Hệ Mới - Phiên bản đầy năng động, sáng tạo và đổi mới trong phong cách phối màu mang đến sự hiện đại và trẻ trung cho giới trẻ\r\n\r\n- Công nghệ dệt quai ưu việt gia tăng độ êm ái, thấm hút mồ hôi cực tốt\r\n\r\n- Đế trên nhiều rãnh thoáng khí giúp massage lòng bàn chân, tăng khả năng điều hướng khi di chuyển\r\n\r\n- Đế F7 Racing chất liệu phylon siêu nhẹ kết hợp cùng cao su ở phần gót bám giữ chắc chắn\r\n\r\n- Đế cao lên đến 5cm với độ đàn hồi nhẹ, vừa cải thiện chiều cao, vừa đem đến trải nghiệm êm ái, thoải mái nhất\r\n\r\n- Quai sau thiết kế đặc biệt với công nghệ phản quang làm nổi bật dòng sản phẩm F7 Racing\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20221205/F7R32359.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221205/F7R32353.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221205/F7R32358.jpg'),
(2, 'Sandals', 'Sandals F7 Racing be phối nâu', 459000, 'F7 Racing Thế Hệ Mới - Phiên bản đầy năng động, sáng tạo và đổi mới trong phong cách phối màu mang đến sự hiện đại và trẻ trung cho giới trẻ\r\n\r\n- Công nghệ dệt quai ưu việt gia tăng độ êm ái, thấm hút mồ hôi cực tốt\r\n\r\n- Đế trên nhiều rãnh thoáng khí giúp massage lòng bàn chân, tăng khả năng điều hướng khi di chuyển\r\n\r\n- Đế F7 Racing chất liệu phylon siêu nhẹ kết hợp cùng cao su ở phần gót bám giữ chắc chắn\r\n\r\n- Đế cao lên đến 5cm với độ đàn hồi nhẹ, vừa cải thiện chiều cao, vừa đem đến trải nghiệm êm ái, thoải mái nhất\r\n\r\n- Quai sau thiết kế đặc biệt với công nghệ phản quang làm nổi bật dòng sản phẩm F7 Racing\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20221207/F7R2595__7_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221207/F7R2595__4_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221207/F7R2595__1_.jpg'),
(3, 'Sandals', 'Sandals', 549000, '- F7M1010 là sản phẩm kết hợp giữa SHONDO x Thỏ 7 Màu với họa tiết nhân vật Thỏ 7 màu cọc tính nhưng không kém phần ngộ nghĩnh, hài hước\r\n\r\n- Dòng sản phẩm: F7 sandals\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Chiều cao: 5cm\r\n\r\n- Siêu nhẹ với trọng lượng chưa tới 450G/đôi\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng thiết kế bề mặt cao su chống trơn trượt tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Quai dù bản mảnh mềm mại, thấm hút, thoáng khí, mau khô\r\n\r\n- Khoen: hợp kim atimal không gỉ sét\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Độ bền: tối thiểu 6 tháng\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20211209/F7M1010__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220117/F7T1010__3_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220117/F7T1010__5_.jpg'),
(4, 'Sandals', 'Sandals F7 racing be phối xanh dương', 439000, '- Dòng sản phẩm: F7 sandals\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Chiều cao: 5cm\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng thiết kế bề mặt cao su chống trơn trượt tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Quai dù bản mảnh mềm mại, thoáng hút mau khô, không gây hôi chân\r\n\r\n- Khoen: hợp kim atimol không gỉ sét\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220707/F7R2530_1__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220707/F7R2530_1__4_.JPG', 'https://bucket.nhanh.vn/store3/92233/ps/20220707/F7R2530_1__5_.jpg'),
(5, 'Chunky', 'Chunky S1 trắng đế ombre trắng tím', 999000, 'Nổi bật với thiết kế đế màu ombre cùng kiểu dáng hầm hố, Giày Shondo Sneaker Chunky S1 là “chân ái” dành cho các tín đồ thời trang đam mê phong cách cá tính và năng động. Với bảng màu trendy, Sneaker Chunky S1 dễ dàng phối với mọi outfit.\r\n\r\n- Dòng sản phẩm: Chunky S1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Đế trên chất liệu Phylon cao cấp, kết hợp đế dưới cao su có rãnh, hạn chế trơn trượt, chống mài mòn\r\n\r\n- Mặt giày được làm từ da Microfiber, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái, đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển\r\n\r\n- Đế cao khoảng 6 cm\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN0505__2_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN0505__8_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN0505__7_.jpg'),
(6, 'Chunky', 'Chunky S1 đen đế ombre đen cam', 999000, 'Nổi bật với thiết kế đế màu ombre cùng kiểu dáng hầm hố, Giày Shondo Sneaker Chunky S1 là “chân ái” dành cho các tín đồ thời trang đam mê phong cách cá tính và năng động. Với bảng màu trendy, Sneaker Chunky S1 dễ dàng phối với mọi outfit.\r\n\r\n- Dòng sản phẩm: Chunky S1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Đế trên chất liệu Phylon cao cấp, kết hợp đế dưới cao su có rãnh, hạn chế trơn trượt, chống mài mòn\r\n\r\n- Mặt giày được làm từ da Microfiber, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái, đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển\r\n\r\n- Đế cao khoảng 6 cm\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN1010__2_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN1010__10_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN1010__7_.jpg'),
(7, 'Chunky', 'Chunky S1 in SH trắng kem đế cao su nâu', 1099000, 'Thuộc dòng sản phẩm sneaker mới nhất 2022 của Shondo, Chunky S1 được thiết kế theo phong cách hầm hố, đường nét phá cách cùng logo SH nổi bật, dễ dàng phối đồ và thể hiện đa phong cách.\r\n\r\n- Dòng sản phẩm: Chunky S1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Đế trên chất liệu Phylon cao cấp, kết hợp đế dưới cao su có rãnh, hạn chế trơn trượt, chống mài mòn\r\n\r\n- Mặt giày được làm từ da Microfiber, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái, đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển\r\n\r\n- Đế cao khoảng 6 cm\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN0101__8_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221114/CHN0101_fb.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221021/CHN0101__5_.jpg'),
(8, 'Chunky', 'Chunky S1 trắng đế ombre xám đen', 999000, 'Nổi bật với thiết kế đế màu ombre cùng kiểu dáng hầm hố, Giày Shondo Sneaker Chunky S1 là “chân ái” dành cho các tín đồ thời trang đam mê phong cách cá tính và năng động. Với bảng màu trendy, Sneaker Chunky S1 dễ dàng phối với mọi outfit.\r\n\r\n- Dòng sản phẩm: Chunky S1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Đế trên chất liệu Phylon cao cấp, kết hợp đế dưới cao su có rãnh, hạn chế trơn trượt, chống mài mòn\r\n\r\n- Mặt giày được làm từ da Microfiber, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái, đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển\r\n\r\n- Đế cao khoảng 6 cm\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN0404__2_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221129/Fb_chunky_ombre.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/CHN0404__7_.jpg'),
(9, 'Sneaker ', 'Sneaker CLASS 1 in SH xanh', 799000, 'Giày sneaker Class 1 có thiết kế tối giản với đường may giấu chỉ, logo Sh in chuyển nổi bật, tạo nên nét khác biệt, bắt mắt cho sản phẩm\r\n\r\n- Dòng sản phẩm: Sneaker Class 1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Chiều cao: 5 cm\r\n\r\n- Trọng lượng siêu nhẹ: ~400g\r\n\r\n- Đế phylon nguyên khối cùng rãnh họa tiết tăng độ bám dính, hạn chế trơn trượt \r\n\r\n- Mặt giày được làm từ da Microfiber, dây đai Webbing dệt kim cao cấp, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái, đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220727/SND0035_1__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220727/SND0035_1__7_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220727/SND0035_1__3_.jpg'),
(10, 'Sneaker ', 'Sneaker CLASS 1 in MONOGRAM trắng', 649000, 'Shondo Sneaker Class 1 - Phiên bản sneaker họa tiết Monogram cá tính, mang đến vẻ ngoài hiện đại, trẻ trung, năng động cho giới trẻ\r\n\r\n- Dòng sản phẩm: Sneaker Class 1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Chiều cao: 5 cm\r\n\r\n- Trọng lượng siêu nhẹ: ~400g\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng với thiết kế rãnh hoa văn mặt đế chống trơn trượt, chống mài mòn vượt trội, tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Mặt giày được làm từ da Microfiber, dây đai Webbing dệt kim cao cấp, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái. Đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220707/SND0010__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220809/SND0010_7.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220707/SND0010__7_.jpg'),
(11, 'Sneaker', 'Sneaker', 649000, 'Shondo Sneaker Class 1 - Phiên bản sneaker họa tiết Monogram cá tính, mang đến vẻ ngoài hiện đại, trẻ trung, năng động cho giới trẻ\r\n\r\n- Sneaker Class 1 Monogram Đen có 2 phiên bản viền chỉ trắng hoặc đen, sẽ được giao ngẫu nhiên khi đặt hàng\r\n\r\n- Dòng sản phẩm: Sneaker Class 1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Chiều cao: 5 cm\r\n\r\n- Trọng lượng siêu nhẹ: ~400g\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng với thiết kế rãnh hoa văn mặt đế trơn trượt, chống mài mòn vượt trội, tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Mặt giày được làm từ da Microfiber, dây đai Webbing dệt kim cao cấp, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái. Đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220707/SND0110__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220809/6.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220506/SND0110__7_.jpg'),
(12, 'Sneaker ', 'Sneaker Class 1 Shondo Pride', 849000, 'Giày sneaker Shondo Pride với thiết kế sắc màu cầu vồng được lồng ghép vào icon SH -  biểu tượng của Shondo, thể hiện sự ủng hộ của thương hiệu đến với cộng đồng LGBTQ đầy sắc màu và rực rỡ.\r\n\r\n- Dòng sản phẩm: Sneaker Class 1\r\n\r\n- Thương hiệu: SHONDO\r\n\r\n- Đế phylon nguyên khối cùng rãnh họa tiết tăng độ bám dính, hạn chế trơn trượt\r\n\r\n- Mặt giày được làm từ da Microfiber, dây đai Webbing dệt kim cao cấp, logo in chuyển màng công nghệ mới\r\n\r\n- Mặt trong được làm từ vải Mesh mềm mại, thoáng khí kết hợp cùng với đệm EVA ôm sát mang đến sự êm ái, thoải mái, đồng thời, bảo vệ bàn chân trong suốt quá trình di chuyển', 'https://bucket.nhanh.vn/store3/92233/ps/20220914/SND0303__6_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220914/SND0303__7_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220914/SND0303__4_.jpg'),
(13, 'Sandals ', 'Sandals S1 xám hai màu', 289000, 'Giày sandals SHAT là dòng sản phẩm mới với thiết kế theo phong cách Casual đơn giản. Phần đế với những đường nét gợn sóng và hình khối cách điệu kết hợp cùng quai chéo truyền thống đem đến sự thoải mái, năng động cho các bạn trẻ\r\n\r\n- Đế: Làm từ chất liệu PU cao cấp với đặc tính siêu nhẹ, có độ đàn hồi cao đem lại cảm giác êm ái, dễ chịu cho người dùng\r\n\r\n- Quai: Chất liệu dây đai webbing dệt êm, độ hút ẩm khô nhanh, thông khí tốt\r\n\r\n- Khoen: Hợp kim atimol và nhựa cao cấp không gỉ sét\r\n\r\n- Dán xé: Độ bám dính 20.000 lần \r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220330/S1M2020__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/S1M2020__5_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/S1M2020__4_.jpg'),
(14, 'Sandals', 'Sandals S1 full đen', 289000, 'Giày sandals SHAT là dòng sản phẩm mới với thiết kế theo phong cách Casual đơn giản. Phần đế với những đường nét gợn sóng và hình khối cách điệu kết hợp cùng quai chéo truyền thống đem đến sự thoải mái, năng động cho các bạn trẻ\r\n\r\n- Đế: Làm từ chất liệu PU cao cấp với đặc tính siêu nhẹ, có độ đàn hồi cao đem lại cảm giác êm ái, dễ chịu cho người dùng\r\n\r\n- Quai: Chất liệu dây đai webbing dệt êm, độ hút ẩm khô nhanh, thông khí tốt\r\n\r\n- Khoen: Hợp kim atimol và nhựa cao cấp không gỉ sét\r\n\r\n- Dán xé: Độ bám dính 20.000 lần \r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220330/S1M1010__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/S1M1010__5_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221026/S1M1010__6_.jpg'),
(15, 'Sandals', 'Sandals S1 full be', 289000, 'Giày sandals SHAT là dòng sản phẩm mới với thiết kế theo phong cách Casual đơn giản. Phần đế với những đường nét gợn sóng và hình khối cách điệu kết hợp cùng quai chéo truyền thống đem đến sự thoải mái, năng động cho các bạn trẻ\r\n\r\n- Đế: Làm từ chất liệu PU cao cấp với đặc tính siêu nhẹ, có độ đàn hồi cao đem lại cảm giác êm ái, dễ chịu cho người dùng\r\n\r\n- Quai: Chất liệu dây đai webbing dệt êm, độ hút ẩm khô nhanh, thông khí tốt\r\n\r\n- Khoen: Hợp kim atimol và nhựa cao cấp không gỉ sét\r\n\r\n- Dán xé: Độ bám dính 20.000 lần \r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220330/S1M2929__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220330/S1M2929__6_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220330/S1M2929__5_.jpg'),
(16, 'Sandals', 'Sandals F6 sport future đen', 479000, '- Dòng sản phẩm: F6S sandals\r\n\r\n- Chất liệu đế: Phylon\r\n\r\n- Chiều cao: 3cm\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng thiết kế bề mặt cao su chống trơn trượt tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Quai dù dệt kim cao cấp bản mảnh mềm mại, thoáng hút mau khô, không gây hô\r\n\r\n- Khoen: hợp kim atimol không gỉ sét\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220426/F6S1019_1__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221128/F6S1019_fb.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220426/F6S1019_1__4_.jpg'),
(17, 'Sandals', 'Sandals F6 sport ombre đế 2 màu đen trắng', 419000, '- Dòng sản phẩm: F6S sandals\r\n\r\n- Chất liệu đế: Phylon\r\n\r\n- Chiều cao: 3cm\r\n\r\n- Siêu nhẹ với trọng lượng chưa tới 450G/đôi\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng thiết kế bề mặt cao su chống trơn trượt tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Quai dù bản mảnh mềm mại, thoáng hút mau khô, không gây hôi chân\r\n\r\n- Khoen: hợp kim atimal không gỉ sét\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Độ bền: tối thiểu 6 tháng\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20210531/Sandal_F6_sport_ombre_de_2_mau_den_trang_F6S0110__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20210531/Sandal_F6_sport_ombre_de_2_mau_den_trang_F6S0110__5_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20210531/Sandal_F6_sport_ombre_de_2_mau_den_trang_F6S0110__6_.jpg'),
(18, 'Sandals', 'Sandals F6 sport future xám đỏ', 479000, '- Dòng sản phẩm: F6S sandals\r\n\r\n- Chất liệu đế: Phylon\r\n\r\n- Chiều cao: 3cm\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng thiết kế bề mặt cao su chống trơn trượt tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Quai dù dệt kim cao cấp bản mảnh mềm mại, thoáng hút mau khô, không gây hô\r\n\r\n- Khoen: hợp kim atimol không gỉ sét\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220128/F6S0026_1__1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20221128/F6S0026_fb.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220128/F6S0026_1__7_.jpg'),
(19, 'Sandals', 'Sandals F6 sport đen full', 479000, '- Dòng sản phẩm: F6S sandals\r\n\r\n- Chất liệu đế: Phylon\r\n\r\n- Chiều cao: 3cm\r\n\r\n- Siêu nhẹ với trọng lượng chưa tới 450G/đôi\r\n\r\n- Đế phylon bền bỉ, nhẹ, đàn hồi tốt cùng thiết kế bề mặt cao su chống trơn trượt tạo sự thoải mái trong di chuyển và tăng tuổi thọ sử dụng\r\n\r\n- Quai dù bản mảnh mềm mại, thoáng hút mau khô, không gây hôi chân\r\n\r\n- Khoen: hợp kim atimal không gỉ sét\r\n\r\n- Dán xé: cao cấp, độ bám dính lên đến 20.000 lần\r\n\r\n- Độ bền: tối thiểu 6 tháng\r\n\r\n- Xuất xứ thương hiệu: Việt Nam', 'https://bucket.nhanh.vn/store3/92233/ps/20220608/F6S301.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20220608/F6S301_1_.jpg', 'https://bucket.nhanh.vn/store3/92233/ps/20210531/giay_sandals_nu_shondo_F6_Sport_F6S301__5_.jpg'),
(20, 'Sneaker ', 'Giày Sneaker Vải Unisex DINCOX D21', 352000, 'Xuất sứ: Việt Nam\r\n\r\n🔸Kiểu dáng:  thời trang thịnh hành mang rất êm và nhẹ chân, phù hợp sử dụng để đi chơi, đi làm hoặc dự tiệc\r\n\r\nChất liệu\r\n\r\n-Vải canvas với đặc tính là độ bền, chống nước, kháng nấm mốc ngoài ra còn có khả năng chống tia UV \r\n\r\n-Lót giày: sự kết hợp hoàn hảo giữa công nghệ Latex và Memory Foam đem lại sự êm ái và nâng đỡ cho đôi chân\r\n\r\n-Đế cao su thiên nhiên, chịu lực tốt và có khả năng bám và chống trơn trượt cao', 'https://cf.shopee.vn/file/e6b2c2ea00b18dee8467b5452d4c6eae', 'https://cf.shopee.vn/file/e9c12a0abfe1cfc0b6110fc1312ea6d5', 'https://cf.shopee.vn/file/2ce264c7f6d448a0e3a82e51dcbdd9e6'),
(21, 'Erosska', 'Erosska - Giày sục thể thao đi học ', 219000, '\"Hãy luôn là chính mình, làm điều bạn thích, nếu có sai lầm, chỉ giữ lại kinh nghiệm và sống tiếp...\"   Erosska - Be You', 'https://cf.shopee.vn/file/71e5ee60c1b5a5ef7397da36de2a0987', 'https://cf.shopee.vn/file/sg-11134202-22110-i1zxe7g6ehjv59', 'https://cf.shopee.vn/file/sg-11134202-22110-3z12k6g6ehjv7a'),
(22, 'Sandals', 'Giày Sandal Unisex', 239000, 'Dép Handmade” món đồ không thể thiếu của các chàng trai, cô giá bởi sự tiện dụng, thân thiện và dễ phối với các loại trang phục khác. \r\n-Sandal với chất liệu da thoáng mát, êm chân và có thể đi được nước. \r\n-Form slim fit có phần viền ôm dọc theo chiều dài của chân giúp tôn dáng và thoải mái \r\n\r\n- Đặc điểm : Giày đế trấu có rất nhiều ưu điểm: nhẹ, bền, thiết kế đơn giản, tinh tế, hỗ trợ lưu thông máu, thấm hút mồ hôi chân, giảm đau chân và cột sống. Giày dép này tốt cho sức khoẻ và được làm từ tự nhiên nên thân thiện với môi trường', 'https://cf.shopee.vn/file/7ab2ba45acf95584a09d3604683c856c', 'https://cf.shopee.vn/file/c85dbe7eb9ba88f188ee0b96cf4ecfd4', 'https://cf.shopee.vn/file/cd97d950def8c17671739e2e773d4f57'),
(23, 'Bitis', 'Giày Biti\'s Hunter Street Americano', 76900, 'THIẾT KẾ GIÀY CỔ CAO THỜI THƯỢNG VỚI CHẤT LIỆU CHUYÊN BIỆT - Chất liệu Nylon thống thấm nước lần đầu tiên ra mắt!!!\r\n-Xu hướng dòng giày cổ cao, giúp bảo vệ cổ chân tốt hơn. \r\n-Ưu điểm giúp tăng độ bền bỉ, kháng nước, rất thích hợp sử dụng trong mùa mưa. \r\nChất liệu Canvas 10OZ, kết hợp vật liệu Nosew tạo điểm nhấn. Công nghệ vải chống nhăn, chống co rút và hỗ trợ thoáng khí tối đa.\r\n- Công nghệ đế #LiteTraction nhẹ tối ưu, cùng chất liệu cao su EVA “nhẹ như bay” vẫn đảm bảo độ ma sát & bền bỉ của giày cũng như sự đàn hồi, êm ái.', 'https://cf.shopee.vn/file/091b88848923f01addcc6d4806f7fdbe', 'https://cf.shopee.vn/file/c42f78afd867cb7517abf324f0868595', 'https://cf.shopee.vn/file/9f488d8ff1d6b3d753c612e9467e801b'),
(24, 'Bitis', ' Giày Thể Thao Nam - Nữ Biti\'s Hunter X Z-TTITUDE', 1121000, 'Giày Thể Thao Nam Biti\'s Hunter X 2K21 Z-TTITUDE COLLECTION phom dáng cổ cao đầu tiên được ra mắt.\r\nLấy ngôn ngữ thiết kế mạnh mẽ làm điểm nhấn, Biti\'s Hunter X Mới sẽ là lựa chọn nâng tầm cho người trẻ đam mê phong cách.\r\nMũ quai: Công nghệ Liteknit co giãn tốt, mềm mại, thoáng khí. Phần trong cổ cao co giãn, ôm sát & xỏ chân thoải mái.\r\nĐế lót: Chất liệu Ortholite kháng khuẩn, ngãn mùi, công nghệ 6 điểm massage lòng bàn chân.', 'https://cf.shopee.vn/file/65420428fa01c873b41ac678345f0f0d', 'https://cf.shopee.vn/file/65420428fa01c873b41ac678345f0f0d', 'https://cf.shopee.vn/file/c4f2e565fdd9891ca97c93cf67897da4'),
(25, 'Bitis', 'Sandal Nữ Eva Phun Biti\'s Hunter', 456000, 'Giày Sandal Biti\'s Hunter với kiểu dáng đơn giản nhưng thời trang, mang lại sự thoải mái và tự tin cho bạn suốt ngày dài. \r\n-Quai Si, đế Eva Phun (Injection Phylon) cao cấp, bền chắc, mang lại nhẹ nhàng, êm ái cho bàn chân.\r\n- Đặc biệt thiết kế quai năng động, viền chỉ chắc chắn ôm gọn chân nhưng lại cực kì thông thoáng, không gây nóng bức, hầm hay khó chịu.\r\n-Giày với thiết kế khỏe khoắn, phù hợp để dùng đi chơi, đi bộ hoặc dạo biển.\r\n-Phần đế được kết hợp rãnh chống trơn trượt, có tính ma sát cao nên hỗ trợ tránh bị trơn trượt, té ngã khi di chuyển.', 'https://cf.shopee.vn/file/ac0d2e870c6fddaea191712341d29b79', 'https://cf.shopee.vn/file/80ec97b381a0648b5f06ed45c9a64348', 'https://cf.shopee.vn/file/daafdb0ee39044ef24d1fb8e3ed8d6e0'),
(27, 'Bitis', 'efreshing Collection Contras Black ', 719000, 'Với sự trở lại của dòng đế LiteFoam, mẫu Biti\'s Hunter Core 2K21 Refreshing Collection góp thêm những lựa chọn thể thao và mạnh mẽ hơn cho mùa tựu trường\r\n\r\n- Bộ đế LiteFoam chất liệu Phylon năng động và êm ái, đàn hồi tốt, tẩy cao su tăng ma sát, bám dính tốt\r\n- Đế lót trong chất liệu Eva ôm trọn bàn chân, êm ái, thông thoáng đàn hồi tốt\r\n- Mũ quai siêu thoáng, co dãn tốt và ôm sát chân trong mỗi chuyển động\r\n', 'https://cf.shopee.vn/file/785f4c65969ace2a3ab24d0293de1d31', 'https://cf.shopee.vn/file/18347ba0c5c566dfd9b90ed2cc182c41', 'https://cf.shopee.vn/file/306fc90be9854e7d74dc5cf8f4d17d6d'),
(28, 'Adidas', 'Adidas Ultraboost 6.0', 1000000, 'Siêu phẩm Ultraboost 6.0 đã về\r\nGiảm ngay 10% cho 50 khách đầu tiên.\r\nSIÊU NHẸ-SIÊU THOÁNG-BẢO VỆ BÀN CHÂN TUYỆT ĐỐI\r\n\r\nPhù hợp chạy bộ, tennis, đi làm, đi chơi...', 'https://cf.shopee.vn/file/9e68656758f91b3ca1a50a6fe20fdc68', 'https://cf.shopee.vn/file/84c39b63455fd538bc0e30176e89b30b', 'https://cf.shopee.vn/file/ec888292ab925b43c4ada2ee5de1fed3'),
(29, 'Adidas', ' Adidas Alphabounce instinct', 799000, 'Bao Chất - Bao Êm\r\nPhù Hợp Đi Làm - Đi Chơi - Tập Gym - Chạy Bộ\r\nVải mềm êm chân sướng mê ly\r\nĐế Bounce cứng cáp thoải mái vận động\r\nKiểu dáng thời thượng, ra đường cứ phải gọi là Chất', 'https://cf.shopee.vn/file/8d08df40731a2120e2e1175a183855ab', 'https://cf.shopee.vn/file/a532e92bce5da126ab78365b4de17d8c', 'https://cf.shopee.vn/file/38c50f358d55561064b144ee4787cfd3'),
(30, 'Nike', 'NIKE JORDAN SERIES ES SAIL WHITE', 2999000, 'Giày thể thao NIKE JORDAN SERIES ES SAIL WHITE DN1856 106\r\n\r\n\r\n\r\nTrees Sneaker  CAM KẾT :\r\n\r\n\r\n\r\n- GIÁ TỐT NHẤT THỊ TRƯỜNG\r\n\r\n\r\n\r\n- HÀNG CHÍNH HÃNG 100%. FAKE REFUND 10 TRIỆU\r\n\r\n\r\n\r\n- HỖ TRỢ SHIP COD TOÀN QUỐC\r\n\r\n\r\n\r\n- HỖ TRỢ ĐỔI TRẢ HÀNG TRONG 7 NGÀY', 'https://cf.shopee.vn/file/90ed334aed121ea2e166b9914759dd25', 'https://cf.shopee.vn/file/51aec41a731976ffeb672707359fd592', 'https://cf.shopee.vn/file/dcdede27db0d6b02fafd865043ca1b27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(50) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `AccountName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `Gender`, `DoB`, `FirstName`, `LastName`, `Email`, `AccountName`, `Password`, `PhoneNumber`, `Address`, `Avatar`, `Type`) VALUES
(1, 'M', '2002-09-06', 'Nguyễn Lê Minh', 'Bảo', 'bao.nguyenminhbaott5@hcmut.edu.vn', 'Minhbao', '31201021080', '0398841276', 'Quảng Ngãi', 'https://haycafe.vn/wp-content/uploads/2022/02/Anh-gai-xinh-Viet-Nam.jpg', 'Admin'),
(4, 'Nam', '2002-02-18', 'Chinh', 'Lâm Điền', 'lamdienchinh@gmail.com', 'chinh123', '123123', '0824864735', 'KTX khu A', 'https://images.vexels.com/media/users/3/129616/isolated/preview/fb517f8913bd99cd48ef00facb4a67c0-businessman-avatar-silhouette-by-vexels.png', 'Customer'),
(7, 'Nam', '2002-02-18', 'Chinh', 'Lâm Điền', 'lamdienchinh@gmail.com', 'chinhchinh', '123456', '0824864735', 'KTX Khu A DHQG', 'https://www.w3schools.com/howto/img_avatar2.png', 'Customer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`,`CustomerID`,`ProductID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedBackID`);

--
-- Chỉ mục cho bảng `listorder`
--
ALTER TABLE `listorder`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customerid` (`customerid`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- Chỉ mục cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD PRIMARY KEY (`orderid`,`productid`),
  ADD KEY `productid` (`productid`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `AccountName` (`AccountName`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedBackID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `listorder`
--
ALTER TABLE `listorder`
  MODIFY `orderID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`CustomerID`) REFERENCES `user` (`ID`);

--
-- Các ràng buộc cho bảng `listorder`
--
ALTER TABLE `listorder`
  ADD CONSTRAINT `listorder_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `user` (`ID`);

--
-- Các ràng buộc cho bảng `orderproduct`
--
ALTER TABLE `orderproduct`
  ADD CONSTRAINT `orderproduct_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `orderproduct_ibfk_2` FOREIGN KEY (`orderid`) REFERENCES `listorder` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
