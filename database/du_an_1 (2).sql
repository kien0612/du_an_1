-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 07:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_bai_viet` int(50) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `ngay_dang` date NOT NULL,
  `id_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_bai_viet`, `avatar`, `tieu_de`, `mota`, `ngay_dang`, `id_trang_thai`) VALUES
(1, '1.jpg', 'Gt wisi enim ad minim veniam.', 'Aenean vestibulum pretium enim, non commodo urna volutpat vitae. Pellentesque vel lacus eget est d...', '2023-11-25', ''),
(2, 'sl0000y060014-lac-tay-bac-style-by-pnj-active-01.png', 'vòng cổ đẹp', 'hjghfbgdvfkjmgfnhbdvf', '2023-11-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(50) NOT NULL,
  `id_tk` int(50) NOT NULL,
  `id_sp` int(50) NOT NULL,
  `noi_dung_bl` text NOT NULL,
  `danh_gia` text NOT NULL,
  `ngay_bl` date NOT NULL,
  `idpro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `id_tk`, `id_sp`, `noi_dung_bl`, `danh_gia`, `ngay_bl`, `idpro`) VALUES
(1, 12, 8, 'con ca con', '12', '2023-11-28', 0),
(2, 0, 8, 'a', '', '0000-00-00', 0),
(3, 0, 8, 'gdfd', '', '0000-00-00', 0),
(4, 0, 8, 'gdfd', '', '0000-00-00', 0),
(5, 1, 8, 'gdfd', '', '0000-00-00', 0),
(6, 1, 8, 'gdfd', '', '0000-00-00', 0),
(7, 0, 8, 'gdfd', '', '0000-00-00', 0),
(8, 1, 8, 'gdfd', '', '0000-00-00', 0),
(9, 1, 8, 'duc', '', '0000-00-00', 0),
(10, 1, 8, 'duc cu ly', '', '2023-11-28', 0),
(11, 1, 8, 'gdfd', '', '2023-11-28', 0),
(12, 1, 8, 'gdfd', '', '2023-11-28', 0),
(13, 1, 8, 'sao em', '', '2023-11-28', 0),
(14, 1, 8, 'duc cu ly', '', '2023-11-28', 0),
(15, 1, 8, 'duc cu ly', '', '2023-11-28', 0),
(16, 1, 8, 'a', '', '2023-11-28', 0),
(17, 0, 8, 'duc cu ly', '', '2023-11-28', 0),
(18, 1, 1, 'gdfd', '', '2023-11-29', 0),
(19, 1, 1, 'a', '', '2023-11-29', 0),
(20, 1, 6, 'ê', '', '2023-11-29', 0),
(21, 1, 4, 'ad', '', '2023-11-29', 0),
(22, 1, 3, 'duc cu ly', '', '2023-11-29', 0),
(23, 1, 1, 'sao em', '', '2023-11-29', 0),
(24, 1, 6, 'cu sn o=lom', '', '2023-11-29', 0),
(25, 1, 8, 'gff', '', '2023-11-29', 0),
(26, 1, 2, '', '', '2023-11-29', 0),
(28, 1, 9, 'quá đẹp', '', '2023-11-29', 0),
(29, 1, 2, 'duc cu ly', '', '2023-12-01', 0),
(30, 1, 14, 'duc cu ly', '', '2023-12-01', 0),
(31, 1, 14, 'a', '', '2023-12-01', 0),
(32, 1, 14, 'duc cu ly', '', '2023-12-01', 0),
(35, 1, 20, 'xấu vcl', '', '2023-12-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(255) NOT NULL,
  `ten_dm` varchar(255) NOT NULL,
  `ngay_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_dm`, `ngay_update`) VALUES
(1, 'Nhẫn', '2023-11-23'),
(2, 'Dây chuyền', '2023-11-23'),
(3, 'Lắc tay', '2023-11-23'),
(4, 'Vòng chân', '2023-11-23'),
(6, 'Khuyên Tai', '2023-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `pttt` tinyint(4) NOT NULL COMMENT '1. Thanh toán khi nhận hàng\r\n2. Chuyển khoản',
  `ngaydathang` datetime NOT NULL DEFAULT current_timestamp(),
  `trangthai` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1. Đang chờ duyệt\r\n2. Đã xác nhận\r\n3. Đang vận chuyển\r\n4. Hoàn thành',
  `mota` text NOT NULL,
  `id_tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `tongtien`, `hoten`, `sdt`, `email`, `diachi`, `pttt`, `ngaydathang`, `trangthai`, `mota`, `id_tk`) VALUES
(103, 2100000, 'quyetmomdz', '03471767290', ' quyetdo01698705281@gmal.com', 'Hà Nội', 2, '2023-12-08 21:52:22', 4, 'eqsa', 1),
(106, 33121600, 'quyetmomdz', '03471767290', ' quyetdo01698705281@gmal.com', 'Hà Nội', 1, '2023-12-10 19:32:15', 1, 'ưq', 1),
(107, 600000, 'quyetmomdz', '0347176729', ' quyetdo01698705281@gmal.com', 'Hà Nội', 1, '2023-12-10 20:11:24', 1, 'kkkkkk', 1),
(108, 2147483647, 'quyetmomdz', '03471767290', ' quyetdo01698705281@gmal.com', 'Hà Nội', 1, '2023-12-11 18:33:17', 1, 'kkk', 1),
(109, 600000, '', '', ' quyetdo01698705281@gmal.com', 'Nam ĐỊnh', 0, '2023-12-12 00:36:39', 1, 'a', 1),
(110, 600000, '', '', ' quyetdo01698705281@gmal.com', 'Hà Nội', 0, '2023-12-12 00:38:44', 1, 'lj', 1),
(111, 600000, '', '', ' quyetdo01698705281@gmal.com', 'Hà Nội', 1, '2023-12-12 00:47:46', 6, 'eda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonchitet`
--

CREATE TABLE `hoadonchitet` (
  `id_hdct` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `giamua` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadonchitet`
--

INSERT INTO `hoadonchitet` (`id_hdct`, `id_hd`, `id_sp`, `giamua`, `soluong`, `thanhtien`) VALUES
(134, 102, 1, 123457000, 1, 123457000),
(135, 102, 2, 12345800, 1, 12345800),
(136, 102, 4, 1234570000, 1, 1234570000),
(137, 102, 10, 41612000, 2, 83224000),
(138, 103, 20, 600000, 2, 1200000),
(139, 103, 19, 900000, 1, 900000),
(140, 104, 20, 600000, 1, 600000),
(141, 106, 20, 600000, 12, 7200000),
(142, 106, 18, 1230000, 1, 1230000),
(143, 106, 2, 12345800, 2, 24691600),
(144, 107, 20, 600000, 1, 600000),
(145, 108, 4, 1234570000, 31, 2147483647),
(146, 109, 20, 600000, 1, 600000),
(147, 110, 20, 600000, 1, 600000),
(148, 111, 20, 600000, 1, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(10) NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'khach_hang'),
(2, 'nhan_vien'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(20) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` float NOT NULL,
  `mo_ta_sp` text NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `so_luong` int(50) NOT NULL,
  `ngay_nhap_sp` date NOT NULL,
  `trang_thai` int(50) NOT NULL,
  `id_dm` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `mo_ta_sp`, `anh_sp`, `so_luong`, `ngay_nhap_sp`, `trang_thai`, `id_dm`) VALUES
(1, 'Bông tai cưới Vàng 24K', 123457000, 'Mô phỏng nét hoàn mỹ đậm chất Á đông của người phụ nữ, PNJ đặt trọn tâm huyết và tình cảm vào từng chi tiết trên đôi bông tai mới. PNJ cho ra đời thiết kế đôi bông tai tinh tế, là sự phối trộn hài hoà giữa kiểu dáng và chất liệu vàng 24K chuẩn mực.\r\n\r\nVới mong muốn gửi gắm những cảm xúc yêu thương đến nàng thông qua những món trang sức nói chung và bông tai vàng nói riêng, PNJ tin rằng đây sẽ là món quà ý nghĩa nhất dành tặng cho người phụ nữ mà bạn yêu thương.', '1-1.jpg', 12, '2023-11-25', 1, 6),
(2, 'Nhấn Kim Cương Vàng Ý 18K', 12345800, 'Chiếc vòng tay PNJ sở hữu sự cứng cáp của vàng Ý 18K được chế tác tinh xảo, kết hợp các chi tiết đúc, châu và khắc theo công nghệ trang sức Ý, tạo nên sự sáng bóng và sang trọng. Với thiết kế độc lạ cùng ánh kim sắc sảo, sản phẩm sẽ tôn lên vẻ đẹp của các quý cô.\r\n\r\nThêm vào đó, với thiết kế tinh xảo của vòng tay, nàng sẽ bất ngờ khi phối với các bộ trang phục như suit công sở hay những chiếc đầm dạo phố. Với các điểm nhấn trên sản phẩm, PNJ tin rằng nàng sẽ trở nên thật sự tỏa sáng và nổi bật khi trưng diện chúng.', '1-3.jpg', 2, '2023-11-25', 1, 1),
(4, 'Nhẫn Kim Cương 18K ', 1234570000, 'Sở hữu thiết kế trẻ trung cộng hưởng cùng ánh kim quý phái của vàng 18K, chiếc nhẫn PNJ tôn lên vẻ đẹp hiện đại và thời thượng của các quý cô, giúp nàng trông thật xinh đẹp rạng rỡ khi trưng diện.\r\n\r\nSở hữu thiết kế đủ mềm mại nhưng lại đầy quyền năng, đủ phá cách như cho một sự khác lạ, vừa mang nét hiện đại, trẻ trung bởi sự rành mạch trong đường nét, lại vừa giữ được sự mềm mại, kiêu sa giữa sự ngẫu hứng cùng vàng và đá, chiếc nhẫn CZ ấn tượng như người phụ nữ trưởng thành với phong cách và con đường riêng để khẳng định bản ngã của chính mình.', '1-9.jpg', 3, '2023-11-09', 1, 1),
(10, 'Cặp nhẫn cưới Vàng 24K', 41612000, 'Nhấn Cưới Cao cấp Vàng Đồng 100%', 'sp-cap-nhan-cuoi-vang-pnj-long-phung-02373-02374-1.png', 12, '2023-11-30', 1, 1),
(11, 'Cặp nhẫn cưới Vàng trắng 14K PNJ Trầu cau 02804-11767', 12257000, 'Cặp Nhấn Cưới Toát Lên KHÍ Phách Hồng Phong Bạc Phận', 'sp-cap-nhan-cuoi-vang-trang-14k-pnj-trau-cau-02804-11767-1.png', 1, '2023-11-30', 1, 1),
(12, 'Nhẫn Vàng 18K đính đá Citrine  CTXMY000460', 107687000, 'Nổi bật với sắc vàng cam nóng bỏng, đá Citrine luôn mang vẻ đẹp rạng rỡ và tỏa sáng khi đeo trên người. Chiếc nhẫn được chế tác từ vàng 18K cùng đá Citrine, mang đến món trang sức sang trọng và quý phái cho quý cô. Bên cạnh đó, trang sức Citrine cũng khá phù hợp với nhiều lứa tuổi khác nhau, và ngự trị trên làn da nào cũng toát lên được vẻ đẹp riêng biệt.\r\n\r\nNgoài ra, Citrine cũng mang nguồn năng lượng từ mặt trời nên nó mang lại sự tích cực cũng như giúp cơ thể tràn đầy sức sống.', 'gnctxmy000460-nhan-vang-18k-dinh-da-citrine-pnj-1 (1).png', 100, '2023-11-30', 1, 1),
(13, 'Nhẫn Bạc PNJ STYLE x CHOU CHOU 0000Y000084', 12222200, 'Không sở hữu các chi tiết đính đá rực rỡ nhưng lại khoác lên mình thiết kế độc đáo với những đường nét sáng tạo, chiếc nhẫn STYLE By PNJ x Chou Chou sẽ cùng nàng biến hóa đầy cá tính cùng chất riêng của mình.\r\n\r\nKhác với trang sức khác, chất liệu bạc 92.5 là lựa chọn thông minh, bền vững với thời gian, giúp các cô gái trẻ thể hiện cá tính cũng như gu thời trang của mình. Khi kết hợp cùng các mẫu trang sức khác, chắc chắn đây sẽ là điểm nhấn hoàn hảo mang đến vẻ đẹp của sự cá tính và thời thượng cho phong cách của nàng.', 'sn0000y000084-nhan-bac-style-by-pnj-1.png', 1, '2023-11-30', 1, 1),
(14, 'Dây chuyền Vàng Ý 18K PNJ 0000Y060507', 12345700, 'Trọng lượng tham khảo:\r\n30.25288phân\r\n \r\nLoại đá chính:\r\nKhông gắn đá\r\n \r\nLoại đá phụ:\r\nKhông gắn đá\r\n \r\nThương hiệu:\r\nPNJ\r\n \r\nGiới tính:\r\nNữ', 'sp-gd0000y060507-day-chuyen-vang-18k-pnj-1.png', 10, '2023-11-29', 1, 2),
(15, 'Dây chuyền Vàng Ý 18K  0000C060132', 6554230, 'Bằng việc kết hợp chất liệu vàng ý 18K cùng thiết kế tinh tế, sợi dây chuyền chính là điểm nhấn nổi bật, tô điểm thêm vẻ đẹp thanh lịch và duyên dáng cho nàng. Dây đeo mảnh thích hợp với những bộ trang phục có nhiều họa tiết, đồng thời tạo điểm nhìn cân bằng với các phụ kiện to bản khác.\r\n\r\nDù diện lên bộ cánh dạ tiệc hay đơn giản là oufit thường ngày, chiếc dây chuyền sẽ tạo điểm nhấn tuyệt đối xung quanh xương quai xanh và khơi gợi ánh nhìn xung quanh.', 'gd0000c060132-day-chuyen-vang-y-18k-pnj-001.png', 1, '2023-11-30', 1, 2),
(16, 'Dây chuyền Vàng 18K dây đan kiểu chữ cong 0000Y000256', 2000000, 'Bằng việc kết hợp chất liệu vàng 18K cùng thiết kế tinh tế, sợi dây chuyền chính là điểm nhấn nổi bật, tô điểm thêm vẻ đẹp thanh lịch và duyên dáng cho nàng. Dây đeo mảnh thích hợp với những bộ trang phục có nhiều họa tiết, đồng thời tạo điểm nhìn cân bằng với các phụ kiện to bản khác.\r\n\r\nDù diện lên bộ cánh dạ tiệc hay đơn giản là oufit thường ngày, chiếc dây chuyền sẽ tạo điểm nhấn tuyệt đối xung quanh xương quai xanh và khơi gợi ánh nhìn xung quanh.', 'gd0000y000256-day-chuyen-vang-18k-pnj-day-dan-kieu-chu-cong.png', 1, '2023-11-28', 1, 2),
(17, 'Lắc tay Vàng 10K đính đá ECZ  XMXMC000108', 22116600, 'Lấy cảm hứng từ sự trẻ trung và nét kiêu sa của những quý cô, PNJ mang đến sản phẩm lắc tay với sự kết hợp giữa vàng 10K cùng đá ECZ. Chiếc lắc nổi bật nhờ vào ánh kim của vàng 10K được tôn lên trên từng đường viền, kết hợp đá ECZ tròn nhỏ. Tất cả cộng hưởng để tôn vinh nhan sắc kiêu sa của phái đẹp.\r\n\r\nTrang sức ECZ là sự hội tụ của phong cách thiết kế hiện đại kết hợp trình độ chế tác cao. Dòng trang sức này mang đến cho bạn thêm nhiều sự lựa chọn với chất lượng đảm bảo cùng giá thành hợp lý.', 'glxmxmc000108-lac-tay-vang-10k-dinh-da-ecz-pnj-1.png', 0, '2023-11-30', 2, 3),
(18, ' Kiềng cưới Vàng 24K  0000Y060008', 1230000, 'Sở hữu kiểu dáng độc đáo với lối thiết kế hiện đại, chiếc kiềng vàng 24K không chỉ mang vẻ đẹp phá cách mà còn tô điểm nét thời thượng. Chiếc kiềng được chế tác từ vàng 24K và ghi điểm với sự độc lạ, thiết kế đến từ PNJ sẽ cùng nàng tỏa sáng trong ngày trọng đại. Sở hữu kiểu dáng quý phái, sản phẩm sẽ làm nổi bật vẻ đẹp kiêu sa của nàng.\r\n\r\nĐã là quý cô yêu thời trang và yêu thích cái đẹp thời thượng, nàng chắc chắn không thể bỏ qua phiên bản kiềng này.', 'sp-gh0000y060008-kieng-cuoi-vang-24k-pnj-1.png', 1, '2023-11-29', 1, 2),
(19, 'Lắc Chân Bạc Nữ Đính Đá CZ Hình Cỏ 4 Lá Mildred LILI_763298', 900000, 'Chiếc lắc được làm từ bạc S925 đính đá Cubic Zirconia cao cấp hình cỏ 4 lá mang đến cho bạn sự tinh tế và thanh thoát mỗi khi ra ngoài. Còn gì tuyệt hơn cùng em nó đi cafe, dạo phố, đi làm, chắc chắn nhiều chàng sẽ để ý lắm đó !!', 'Lac-chan-bac-nu-dinh-da-CZ-hinh-co-4-la-Mildred-LILI_763298_1-400x400.jpg', 9, '2023-11-29', 1, 4),
(20, 'Lắc Chân Bạc Nữ Dạng Mì Dẹt Ermintrude LILI_227973', 600000, 'Lắc chân được làm từ bạcS 925 bởi các nhà thiết kế và thợ thủ công hàng đầu trong lĩnh vực trang sức. Là một trong những mẫu lắc chân đẹp nhất hiện nay, mang một vẻ đẹp bình dị trẻ trung kết hợp cùng đôi sandals mùa hè, giày cao gót hay giày đế bằng là sự phối hợp đầy hài tạo nên vẻ đẹp phóng túng mà đầy cá tính giúp nàng tự tin dạo bước trên đường phố trong những đêm hè mát mẻ. Ngoài ra, chiếc lắc chân này còn là “bùa hộ mệnh” đem lại may mắn cho các nàng. Nên hứa hẹn sẽ là món quà ý nghĩa dành cho phái đẹp.', 'Lac-chan-bac-nu-dang-mi-det-LILI_227973_1-400x400.jpg', 2, '2023-11-22', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(50) NOT NULL,
  `ten_tk` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `nam_sinh` date NOT NULL,
  `gioi_tinh` int(50) NOT NULL,
  `dia_chi` text NOT NULL,
  `id_role` int(50) NOT NULL DEFAULT 1,
  `ngay_tao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `ten_tk`, `password`, `sdt`, `email`, `full_name`, `nam_sinh`, `gioi_tinh`, `dia_chi`, `id_role`, `ngay_tao`) VALUES
(1, 'quyetmomdz', 123, 0, 'quyetdo01698705281@gmal.com', 'vũ trung kiên', '0000-00-00', 1, '', 3, '2023-11-26'),
(2, 'duc', 122, 0, 'quyetdo01698705281@gmal.com', 'dovanduc', '0000-00-00', 0, '', 1, '2023-11-26'),
(3, 'ducc', 123, 0, 'quyetdqph31368@fe.edu.vn', 'vũ trung kiên', '0000-00-00', 0, '', 2, '2023-11-26'),
(4, '123abc', 123, 0, 'quyetdqph31368@fpt.edu.vn', 'vũ trung kiên', '0000-00-00', 0, '', 1, '2023-11-28'),
(5, 'quyet1', 1, 0, '1@gmail.com', 'doquangquyet', '0000-00-00', 0, '', 1, '2023-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id_thanh_toan` int(50) NOT NULL,
  `kieu_thanh_toan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`id_thanh_toan`, `kieu_thanh_toan`) VALUES
(1, 'tiền mặt'),
(2, 'banking');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `id_trang_thai` int(20) NOT NULL,
  `ten_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`id_trang_thai`, `ten_trang_thai`) VALUES
(1, 'Còn Hàng'),
(2, 'Hết Hàng');

-- --------------------------------------------------------

--
-- Table structure for table `trangthaidoihang`
--

CREATE TABLE `trangthaidoihang` (
  `id_thdh` int(11) NOT NULL,
  `ten_dh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trangthaidoihang`
--

INSERT INTO `trangthaidoihang` (`id_thdh`, `ten_dh`) VALUES
(1, 'Đơn hàng mới'),
(2, 'Đã xác nhận'),
(3, 'Đang xử lý'),
(4, 'Đang giao hàng\r\n'),
(5, 'Đã hoàn thành'),
(6, 'Hủy đơn hàng');

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_hd`
--

CREATE TABLE `trang_thai_hd` (
  `id_trang_thai` int(10) NOT NULL,
  `ten_trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trang_thai_hd`
--

INSERT INTO `trang_thai_hd` (`id_trang_thai`, `ten_trang_thai`) VALUES
(1, 'Hoạt Động'),
(2, 'Không Hoạt Động');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_bai_viet`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Indexes for table `hoadonchitet`
--
ALTER TABLE `hoadonchitet`
  ADD PRIMARY KEY (`id_hdct`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id_thanh_toan`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_trang_thai`);

--
-- Indexes for table `trangthaidoihang`
--
ALTER TABLE `trangthaidoihang`
  ADD PRIMARY KEY (`id_thdh`);

--
-- Indexes for table `trang_thai_hd`
--
ALTER TABLE `trang_thai_hd`
  ADD PRIMARY KEY (`id_trang_thai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_bai_viet` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `hoadonchitet`
--
ALTER TABLE `hoadonchitet`
  MODIFY `id_hdct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id_thanh_toan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_trang_thai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trangthaidoihang`
--
ALTER TABLE `trangthaidoihang`
  MODIFY `id_thdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trang_thai_hd`
--
ALTER TABLE `trang_thai_hd`
  MODIFY `id_trang_thai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
