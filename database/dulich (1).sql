-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2021 lúc 02:53 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_Name` varchar(100) NOT NULL,
  `ad_age` int(15) NOT NULL,
  `ad_Gender` tinyint(1) NOT NULL,
  `ad_address` varchar(100) NOT NULL,
  `ad_phone` varchar(11) NOT NULL,
  `ad_email` varchar(50) NOT NULL,
  `ad_username` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_Name`, `ad_age`, `ad_Gender`, `ad_address`, `ad_phone`, `ad_email`, `ad_username`, `ad_password`) VALUES
(1, 'Pham Tuan Duc', 21, 1, 'cdscds', '11111', '', '', '123'),
(2, 'tuanduc', 21, 1, 'wqew', '45252435', 'tuanduc@gmail.com', 'tuanduc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_tour`
--

CREATE TABLE `booking_tour` (
  `booking_id` int(11) NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `guest_id` int(11) NOT NULL,
  `booking_day` datetime NOT NULL,
  `booking_guest_name` varchar(100) NOT NULL,
  `booking_guest_address` varchar(100) NOT NULL,
  `booking_guest_email` varchar(100) NOT NULL,
  `booking_guest_number` int(50) NOT NULL,
  `booking_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking_tour`
--

INSERT INTO `booking_tour` (`booking_id`, `tour_id`, `guest_id`, `booking_day`, `booking_guest_name`, `booking_guest_address`, `booking_guest_email`, `booking_guest_number`, `booking_status`) VALUES
(68, 1, 2, '2021-11-04 16:55:00', 'asdasd', 'dsadasd', 'tuanduc@gmail.com', 438448484, 'Chốt đơn'),
(77, 1, 1, '2021-11-04 17:47:00', 'Pham Tuan Duc', 'hoabinh', 'tuanduc@gmail.com', 438448484, 'Chốt đơn'),
(78, 2, 1, '2021-11-06 19:47:00', 'hoan tan tine', 'hoabinh', 'tuanduc@gmail.com', 0, 'Chốt đơn'),
(86, 2, 2, '0000-00-00 00:00:00', 'Pham Tuan Duc', 'hanoi', 'minhquan@gmail.com', 438448484, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_Name` varchar(100) NOT NULL,
  `tour_price` double NOT NULL,
  `tour_day_start` date NOT NULL,
  `tour_day_end` date NOT NULL,
  `tour_days` int(50) NOT NULL,
  `tour_location` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tour_phone_contact` varchar(20) NOT NULL,
  `tour_guild` varchar(100) NOT NULL,
  `tour_number` int(100) NOT NULL,
  `tour_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_Name`, `tour_price`, `tour_day_start`, `tour_day_end`, `tour_days`, `tour_location`, `img`, `tour_phone_contact`, `tour_guild`, `tour_number`, `tour_detail`) VALUES
(1, 'Ngũ Hành Sơn- Phố cổ Hội An', 200000000, '2021-11-04', '2021-11-06', 2, 'Đà nẵng', 'https://media.travel.com.vn/destination/tf_200710045735_243875.jpg', '2132133333333333', 'Nguyen Van C', 4, 'Hành Trình 2 ngày sẽ đưa du khách đến với những địa danh nổi tiếng tham quan khu Phố Cổ  Hội An lưu giữ một nền tảng văn hoá phi vật thể khá đồ sộ. Cuộc sống thường nhật của cư dân với những phong tục tập quán, sinh hoạt tín ngưỡng, nghệ thuật dân gian, lễ hội văn hoá đang được bảo tồn và phát huy cùng với cảnh quan thiên nhiên thơ mộng, các làng nghề truyền thống, các món ăn đặc sản, với khí hậu quanh năm ôn hòa,  làm cho Hội An ngày càng trở thành điểm đến hấp dẫn của du khách thập phương.'),
(2, 'Săn mây phố núi - Đà Lạt', 70000000, '2021-10-15', '2021-10-09', 2, 'Đà Lạt', 'https://media.travel.com.vn/destination/tf_211021040203_351728.jpg', '0918098908', 'Nguyen Van A', 8, 'Du lịch – tham quan – nghỉ dưỡng không chỉ đơn thuần là đi ngắm cảnh, thưởng thức các món ăn,… Mà du lịch theo “xu hướng” của giới trẻ cũng là một điều hết sức thú vị nữa đấy. Mà đã sẵn sàng tâm trí, chuẩn bị hành trang để làm những bức ảnh, những tấm hình “siêu hot”, “siêu ấn tượng” tại Đà Lạt. Thì chỉ khi tham gia chương trình Tour săn mây các bạn mới có thể “bắt kịp” theo đúng xu hướng của giới trẻ hiện nay được.'),
(3, 'Sunworld-Hạ Long', 70000000, '2021-10-06', '2021-10-09', 3, 'Hạ long', 'https://media.travel.com.vn/destination/tf_210409053701_072928.jpg', '0918098908', 'Nguyen Van C', 16, 'Vùng đất hứa Quảng Ninh với hành trình 3 ngày 2 đêm sẽ đưa du khách tới 2 địa chỉ du lịch đẹp tuyệt vời là Hạ Long và Cô Tô, đặc biệt là khu vui chơi giải trí hiện đại bậc nhất thế giới SunWorld Hạ Long Park với hàng loạt các trò chơi mạo hiểm hấp dẫn, chắc chắn sẽ mang đến cho bạn những trải nghiệm và một kì nghỉ dưỡng hoàn hảo nhất!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `guest_id` int(11) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_age` int(100) NOT NULL,
  `guest_gender` varchar(10) NOT NULL,
  `guest_address` varchar(100) NOT NULL,
  `guest_phone` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_username` varchar(100) NOT NULL,
  `guest_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`guest_id`, `guest_name`, `guest_age`, `guest_gender`, `guest_address`, `guest_phone`, `guest_email`, `guest_username`, `guest_password`) VALUES
(1, 'Phạm Minh quân', 111, 'nu', 'sdasd', '21323', 'tantien@gmail.com', 'tantien@gmail.com', '123'),
(2, 'Phạm Tuấn Đức', 12, 'nu', 'sdasd', '21323', 'tuanduc@gmail.com', 'tuanduc@gmail.com', '123'),
(3, 'Phạm Minh quân', 646, 'eqewq', 'weqe', '21323', 'minhquan@gmail.com', '', '123'),
(15, '', 12, '123', 'hoabinh', '09876543321', 'tuanduc@gmail.com', 'duc123', '123'),
(16, '', 12, '123', 'hoabinh', '21323', 'tuanduc@gmail.com', 'duc456', ''),
(17, '', 646, '123', 'hoabinh', '21323', 'tuanduc@gmail.com', 'admin', '123'),
(18, '', 12, '123', 'hoabinh', '09876543321', 'vana@gmail.com', 'tien', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `booking_tour`
--
ALTER TABLE `booking_tour`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `tour_id` (`tour_id`),
  ADD KEY `guest_id` (`guest_id`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`guest_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `booking_tour`
--
ALTER TABLE `booking_tour`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking_tour`
--
ALTER TABLE `booking_tour`
  ADD CONSTRAINT `booking_tour_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`),
  ADD CONSTRAINT `booking_tour_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `user` (`guest_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
