-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 04:11 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `airlines`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `Bill_ID` int(11) NOT NULL,
  `User_ID` varchar(255) NOT NULL,
  `partnerCode` varchar(50) NOT NULL,
  `orderId` varchar(50) NOT NULL,
  `orderInfo` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `Time_set` datetime NOT NULL,
  `Method` varchar(255) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`Bill_ID`, `User_ID`, `partnerCode`, `orderId`, `orderInfo`, `price`, `Time_set`, `Method`, `Status`) VALUES
(27, '13', 'MOMOBKUN20180529', '1701699272', 'AP001 _ Ngày bay: 30/11/2023 _ Khởi Hành: Hà Nội-07:20 _ Đến: Hồ Chí Minh-09:20', 2100000, '0000-00-00 00:00:00', 'momo', 'Successful.'),
(28, '13', 'VNP14219946', '14219946', 'Thanh Toán Vé Máy Bay', 210000000, '2023-12-05 17:54:12', 'ATM', '00'),
(29, '19', 'MOMOBKUN20180529', '1701773810', 'AP004 _ Ngày bay: 09/12/2023 _ Khởi Hành: Hà Nội-17:40 _ Đến: Hồ Chí Minh-19:40', 2100000, '0000-00-00 00:00:00', 'momo', 'Successful.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `Blog_ID` int(11) NOT NULL,
  `Blog_name` varchar(50) NOT NULL,
  `Blog_content` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`Blog_ID`, `Blog_name`, `Blog_content`, `Date`, `Image`) VALUES
(4, 'Tìm kiếm thế giới dễ dàng', 'Nó nhanh chóng trở nên phổ biến khi thời gian giải trí ngày càng trở nên quý giá và chúng ta đánh giá cao trải nghiệm', '2023-11-23', 'hinh-anh-may-bay.jpg'),
(5, 'Công nghệ của chúng tôi', 'Việc thuê máy bay riêng cho mục đích giải trí cho phép bạn, gia đình và bạn bè của bạn', '2023-11-23', 'nhung-buoc-tien-trong-cong-nghe-hang-khong1477422838.jpg'),
(6, 'Du lịch bằng máy bay', 'Với vô số máy bay tư nhân phổ biến để lựa chọn, di chuyển bằng máy bay riêng điều lệ là hiệu quả nhất', '2023-11-22', 'du-lich-bang-may-bay-1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `Booking_ID` int(11) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Sex` enum('Nam','Nữ') NOT NULL,
  `CCCD` varchar(20) NOT NULL,
  `birth` date NOT NULL,
  `Flight_ID` varchar(20) DEFAULT NULL,
  `Flight_date` date DEFAULT NULL,
  `Start_city` varchar(50) NOT NULL,
  `End_city` varchar(50) NOT NULL,
  `Departure_Time` varchar(50) NOT NULL,
  `Arrival_Time` varchar(50) NOT NULL,
  `Seat_Number` varchar(10) DEFAULT NULL,
  `Booking_Date` date DEFAULT NULL,
  `Total_Price` float DEFAULT NULL,
  `Ticket` varchar(20) NOT NULL,
  `Pay` enum('Xử Lý','Thành công','Chưa thanh toán','Vé hủy') NOT NULL DEFAULT 'Xử Lý',
  `Check_InFL` enum('Chưa check in','Check-in','Hủy') NOT NULL DEFAULT 'Chưa check in'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`Booking_ID`, `User_ID`, `Name`, `Sex`, `CCCD`, `birth`, `Flight_ID`, `Flight_date`, `Start_city`, `End_city`, `Departure_Time`, `Arrival_Time`, `Seat_Number`, `Booking_Date`, `Total_Price`, `Ticket`, `Pay`, `Check_InFL`) VALUES
(158, 13, 'Nguyễn Văn Dương', 'Nam', '038204010097', '2023-12-09', 'AP010', '2023-12-15', 'Hải Phòng', 'Hồ Chí Minh', '07:30', '09:30', 'A16', '2023-12-07', 2100000, 'Bình Dân', 'Xử Lý', 'Chưa check in'),
(159, 13, 'Nguyễn Văn Dương', 'Nam', '038204010097', '2023-12-10', 'AP010', NULL, 'Hải Phòng', 'Hồ Chí Minh', '07:30', '09:30', 'A16', '2023-12-07', 2100000, 'Bình Dân', 'Thành công', 'Check-in'),
(160, 13, 'Nguyễn Văn Dương', 'Nam', '038204010097', '2004-08-07', 'AP212', '2023-12-10', 'Đà Nẵng', 'Hải Phòng', '06:30', '09:30', 'B3', '2023-12-07', 2100000, 'Thương Gia', 'Vé hủy', 'Hủy'),
(161, 13, 'Nguyễn Văn Dương', 'Nam', '038204010097', '2023-12-16', 'AP010', '2023-12-15', 'Hải Phòng', 'Hồ Chí Minh', '07:30', '09:30', 'A2', '2023-12-06', 2100000, 'Phổ Thông', 'Xử Lý', 'Chưa check in');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluate`
--

CREATE TABLE `evaluate` (
  `Evaluate_ID` int(11) NOT NULL,
  `ID_pro` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Star` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Evaluate_Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `evaluate`
--

INSERT INTO `evaluate` (`Evaluate_ID`, `ID_pro`, `ID_User`, `Name`, `Star`, `Comment`, `Evaluate_Date`) VALUES
(12, 4, 0, '', '', 'tốt', '07:48:41am 28/11/2023'),
(13, 4, 0, '', '', 'tốt', '07:49: 28/11/2023'),
(14, 4, 0, '', '', 'tốt', '07:49:thAM 28/11/2023'),
(15, 4, 0, '', '', 'tốt', '07:49:tham 28/11/2023'),
(16, 4, 0, '', '', 'tốt', '07:49 28/11/2023'),
(17, 0, 0, '', '', 'tốt', '07:51 28/11/2023'),
(18, 0, 0, '', '', 'tốt', '07:51 28/11/2023'),
(19, 4, 0, '', '', 'hay quá', '07:52 28/11/2023'),
(20, 4, 13, '', '', 'tốt', '07:54 28/11/2023'),
(21, 4, 13, '', '', '3', '08:23 04/12/2023'),
(22, 4, 13, '', '', 'ề', '08:24 04/12/2023'),
(23, 4, 13, '', '', 'ewrer', '08:26 04/12/2023'),
(24, 4, 13, '', '', 'ềdvfvg', '08:27 04/12/2023'),
(25, 4, 13, '', '', 'dề', '08:28 04/12/2023'),
(26, 5, 13, '', '', 'tốt', '04:15 07/12/2023'),
(27, 5, 0, '', '', 'tốt', '04:20 07/12/2023'),
(28, 5, 0, '', '', 'tốt', '04:21 07/12/2023'),
(29, 5, 0, '', '', 'fdf', '04:22 07/12/2023'),
(30, 5, 0, '', '', 'tốt', '04:22 07/12/2023'),
(31, 5, 0, '', '', 'tốt', '04:22 07/12/2023'),
(32, 5, 13, '', '', 'vvdfvf', '04:22 07/12/2023'),
(33, 5, 13, '', '', 'vvdfvf', '04:23 07/12/2023'),
(34, 5, 13, 'Nguyễn Văn Dương', '', 'tốt', '04:25 07/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flights`
--

CREATE TABLE `flights` (
  `Flight_ID` int(11) NOT NULL,
  `Flight_Number` varchar(255) DEFAULT NULL,
  `Start_City` varchar(255) DEFAULT NULL,
  `Arrival_City` varchar(255) DEFAULT NULL,
  `Flight_date` date NOT NULL,
  `Departure_Time` time DEFAULT NULL,
  `Arrival_Time` time DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Passenger` int(11) NOT NULL,
  `Flight_time` varchar(255) NOT NULL,
  `Voucher_IDS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `flights`
--

INSERT INTO `flights` (`Flight_ID`, `Flight_Number`, `Start_City`, `Arrival_City`, `Flight_date`, `Departure_Time`, `Arrival_Time`, `Price`, `Passenger`, `Flight_time`, `Voucher_IDS`) VALUES
(51, 'AP002', 'Hà Nội', 'Hồ Chí Minh', '2023-12-01', '18:30:00', '20:30:00', 1500000, 50, ' 2h00', 6),
(52, 'AP003', 'Thanh Hóa', 'Hồ Chí Minh', '2023-12-04', '06:20:00', '08:20:00', 1600000, 50, ' 2h00', 7),
(53, 'AP004', 'Hà Nội', 'Hồ Chí Minh', '2023-12-09', '17:40:00', '19:40:00', 1500000, 50, ' 2h00', 6),
(54, 'AP010', 'Hải Phòng', 'Hồ Chí Minh', '2023-12-15', '07:30:00', '09:30:00', 1500000, 60, ' 2h00', 11),
(56, 'AP212', 'Đà Nẵng', 'Hải Phòng', '2023-12-10', '06:30:00', '09:30:00', 1500000, 50, ' 2h00', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `Payment_ID` int(11) NOT NULL,
  `Booking_ID` int(11) DEFAULT NULL,
  `Payment_Amount` decimal(10,2) DEFAULT NULL,
  `Payment_Date` datetime DEFAULT NULL,
  `Payment_Method` varchar(50) DEFAULT NULL,
  `Bill_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats`
--

CREATE TABLE `seats` (
  `Seat_ID` int(11) NOT NULL,
  `Seat_Number` varchar(10) DEFAULT NULL,
  `status` enum('available','booked') DEFAULT 'available',
  `Flights_seats` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `seats`
--

INSERT INTO `seats` (`Seat_ID`, `Seat_Number`, `status`, `Flights_seats`, `user_id`) VALUES
(38, 'A1', 'available', 54, NULL),
(41, 'A2', 'booked', 54, 13),
(42, 'A3', 'available', 54, NULL),
(43, 'A4', 'available', 54, NULL),
(44, 'A5', 'available', 54, NULL),
(45, 'A6', 'available', 54, NULL),
(48, 'A7', 'available', 54, NULL),
(49, 'A8', 'available', 54, NULL),
(50, 'A9', 'available', 54, NULL),
(51, 'A10', 'available', 54, NULL),
(52, 'A11', 'available', 54, NULL),
(53, 'A12', 'available', 54, NULL),
(54, 'A13', 'available', 54, NULL),
(55, 'A14', 'available', 54, NULL),
(56, 'A15', 'available', 54, NULL),
(57, 'A16', 'available', 54, NULL),
(58, 'A17', 'available', 54, NULL),
(59, 'A18', 'available', 54, NULL),
(60, 'A19', 'available', 54, NULL),
(61, 'A20', 'available', 54, NULL),
(62, 'A21', 'available', 54, NULL),
(63, 'A22', 'available', 54, NULL),
(64, 'A23', 'available', 54, NULL),
(65, 'A24', 'available', 54, NULL),
(66, 'A25', 'available', 54, NULL),
(67, 'A26', 'available', 54, NULL),
(68, 'A27', 'available', 54, NULL),
(69, 'A28', 'available', 54, NULL),
(70, 'A29', 'available', 54, NULL),
(71, 'A30', 'available', 54, NULL),
(72, 'B1', 'available', 56, NULL),
(73, 'B2', 'available', 56, NULL),
(74, 'B3', 'booked', 56, 13),
(75, 'B4', 'available', 56, NULL),
(76, 'B5', 'available', 56, NULL),
(77, 'B6', 'available', 56, NULL),
(78, 'B7', 'available', 56, NULL),
(79, 'B8', 'available', 56, NULL),
(80, 'B9', 'available', 56, NULL),
(81, 'B10', 'available', 56, NULL),
(82, 'B11', 'available', 56, NULL),
(83, 'B12', 'available', 56, NULL),
(84, 'B13', 'available', 56, NULL),
(85, 'B14', 'available', 56, NULL),
(86, 'B15', 'available', 56, NULL),
(87, 'B16', 'available', 56, NULL),
(88, 'B17', 'available', 56, NULL),
(89, 'B18', 'available', 56, NULL),
(90, 'B19', 'available', 56, NULL),
(91, 'B20', 'available', 56, NULL),
(92, 'B21', 'available', 56, NULL),
(93, 'B22', 'available', 56, NULL),
(94, 'B23', 'available', 56, NULL),
(95, 'B24', 'available', 56, NULL),
(96, 'B25', 'available', 56, NULL),
(97, 'B26', 'available', 56, NULL),
(98, 'B27', 'available', 56, NULL),
(99, 'B28', 'available', 56, NULL),
(100, 'B29', 'available', 56, NULL),
(101, 'B30', 'available', 56, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_ticket`
--

CREATE TABLE `type_ticket` (
  `Ticket_ID` int(11) NOT NULL,
  `Ticket_name` varchar(255) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Ticket_number` int(11) NOT NULL,
  `Flights_Tick` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `type_ticket`
--

INSERT INTO `type_ticket` (`Ticket_ID`, `Ticket_name`, `Status`, `Ticket_number`, `Flights_Tick`) VALUES
(31, 'Phổ Thông', 'Start_1', 15, 52),
(32, 'Thương Gia', 'Start_2', 40, 52),
(34, 'Thương Gia Đặc Biệt', 'Start_3', 5, 52);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `User` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`User_ID`, `User`, `Password`, `Email`, `FullName`, `role`, `Status`) VALUES
(13, 'Admin', '123', 'Nguyenduong708204@gmail.com', 'Nguyễn Văn Dương', 1, 1),
(19, 'Neymar', '123', 'nguyenduong0782004@gmail.com', 'Nguyễn Văn Dương', 2, 1),
(20, 'NeymarL', '123', 'duongnvph33164@fpt.edu.vn', 'Phan Ngọc Thắng', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `Voucher_ID` int(11) NOT NULL,
  `Voucher_name` varchar(50) NOT NULL,
  `Voucher_value` varchar(50) NOT NULL,
  `Voucher_start` date NOT NULL,
  `Voucher_end` date NOT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`Voucher_ID`, `Voucher_name`, `Voucher_value`, `Voucher_start`, `Voucher_end`, `Image`) VALUES
(6, 'Khuyến Mãi', '100.000 VND', '2023-11-22', '2023-11-30', 'hinh-anh-may-bay.jpg'),
(7, 'Khuyến Mãi', '120.000 VND', '2023-11-20', '2023-11-21', 'StockAnhDep001.jpg'),
(11, 'Khuyến Mãi', '100.000 VND', '2023-11-25', '2023-11-30', 'webpc-passthru.png'),
(12, 'Khuyến Mãi', '150.000 VND', '2023-11-30', '2023-12-05', 'images.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`Bill_ID`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Blog_ID`);

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`Booking_ID`);

--
-- Chỉ mục cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`Evaluate_ID`);

--
-- Chỉ mục cho bảng `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`Flight_ID`),
  ADD KEY `Voucher_ID` (`Voucher_IDS`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `Booking_ID` (`Booking_ID`),
  ADD KEY `Bill_ID` (`Bill_ID`);

--
-- Chỉ mục cho bảng `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`Seat_ID`),
  ADD KEY `Flights_seats` (`Flights_seats`);

--
-- Chỉ mục cho bảng `type_ticket`
--
ALTER TABLE `type_ticket`
  ADD PRIMARY KEY (`Ticket_ID`),
  ADD KEY `Flights_Tick` (`Flights_Tick`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`Voucher_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `Bill_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `Blog_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  MODIFY `Evaluate_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `flights`
--
ALTER TABLE `flights`
  MODIFY `Flight_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `Payment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `seats`
--
ALTER TABLE `seats`
  MODIFY `Seat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `type_ticket`
--
ALTER TABLE `type_ticket`
  MODIFY `Ticket_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `Voucher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_2` FOREIGN KEY (`Voucher_IDS`) REFERENCES `voucher` (`Voucher_ID`);

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`Booking_ID`) REFERENCES `bookings` (`Booking_ID`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`Bill_ID`) REFERENCES `bill` (`Bill_ID`);

--
-- Các ràng buộc cho bảng `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`Flights_seats`) REFERENCES `flights` (`Flight_ID`);

--
-- Các ràng buộc cho bảng `type_ticket`
--
ALTER TABLE `type_ticket`
  ADD CONSTRAINT `type_ticket_ibfk_1` FOREIGN KEY (`Flights_Tick`) REFERENCES `flights` (`Flight_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
