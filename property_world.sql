-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2021 lúc 05:24 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `property_world`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_dm`
--

CREATE TABLE `danhsach_dm` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsach_dm`
--

INSERT INTO `danhsach_dm` (`ID`, `Name`, `Status`) VALUES
(1, 'Nhà đất Việt Nam', ''),
(2, 'Nhà đất mỹ', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_kh`
--

CREATE TABLE `danhsach_kh` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(10) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsach_kh`
--

INSERT INTO `danhsach_kh` (`ID`, `username`, `password`, `role`, `address`, `birthday`, `fullname`, `sex`) VALUES
(7, 'admin', '$2y$10$KlfJxCZwGH7qN7f.ELNRsuGws8.Cg/PqZcAc4HtUWpLA8j/DJIvmW', 0, 'Việt Nam', '2021-03-03', 'Ngọc Long', 'Female'),
(8, 'mem1', '$2y$10$ON80rfZu49u3N13YJs2lTuAQECCM/cLc2G8W/7LUTT87tZnye76Te', 1, 'Việt Nam', '2021-09-11', 'long', 'Male');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach_sp`
--

CREATE TABLE `danhsach_sp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(9) NOT NULL,
  `Price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Top` int(2) NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsach_sp`
--

INSERT INTO `danhsach_sp` (`ID`, `Name`, `Status`, `Price`, `Top`, `Image`) VALUES
(1, 'Nhà đất Việt Nam', 6789, '3.508.000.000', 1, 'TMSC-slide.jpg'),
(2, 'Vinhomes Ocean-Park', 1024, '6.789.000.000', 1, '1629283201-matrixone.jpg'),
(3, 'Royal City HN', 1102, '2.000.000.000', 1, '1629272454-ttdem.jpg'),
(4, 'Sun World QN', 3508, '3.000.000.000', 1, 'TMCP-ha-12.jpg'),
(5, 'Sun Shine HL', 4953, '8.386.000.000', 2, '1629283201-matrixone.jpg'),
(6, 'Paradise Resort PQ', 7749, '11.020.000.000', 2, '1629272454-ttdem.jpg'),
(7, 'Park City HN', 7777, '12.340.000.000', 2, 'im1.jpg'),
(15, 'Đất nền Nam Định', 4953, '8.386.000.000', 2, 'TMSC-slide.jpg'),
(16, 'Thunder Matric ĐN', 2048, '12.340.000.000', 2, 'TMCP-ha-12.jpg'),
(17, 'Thunder Matric ĐN', 2048, '12.340.000.000', 2, '1629283201-matrixone.jpg'),
(19, 'Thunder Matric ĐN', 7749, '8.386.000.000', 2, 'TMCP-ha-12.jpg'),
(20, 'Paradise Resort PQ', 2048, '11.020.000.000', 0, '1629280613-vuon-nhat.png'),
(21, 'Thunder Matric ĐN', 4953, '11.020.000.000', 0, '1629272454-ttdem.jpg'),
(22, 'CAD_GROUP', 1234, '5.432.000.000', 0, '1629280613-vuon-nhat.png'),
(23, 'Sun Shine HL', 7749, '8.386.000.000', 0, '1629272454-ttdem.jpg'),
(24, 'Paradise Resort PQ', 4953, '12.340.000.000', 0, 'TMCP-ha-12.jpg'),
(25, 'Vinhomes Ocean-Park', 4953, '8.386.000.000', 0, 'im1.jpg'),
(26, 'Vinhomes River-Side', 4953, '11.020.000.000', 0, 'TMCP-ha-12.jpg'),
(27, 'Thunder Matric ĐN', 4953, '12.340.000.000', 0, '1629280613-vuon-nhat.png'),
(28, 'Thunder Matric ĐN', 1102, '12.340.000.000', 0, 'TMSC-slide.jpg'),
(29, 'Park City HN', 1102, '12.340.000.000', 0, '1629280613-vuon-nhat.png'),
(30, 'Sun Shine HL', 1102, '12.340.000.000', 0, '1629283201-matrixone.jpg'),
(31, 'Paradise Resort PQ', 7777, '11.020.000.000', 2, '1629280613-vuon-nhat.png'),
(32, 'Vinhomes Ocean-Park', 4953, '12.340.000.000', 2, '1629272454-ttdem.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhsach_dm`
--
ALTER TABLE `danhsach_dm`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhsach_kh`
--
ALTER TABLE `danhsach_kh`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhsach_sp`
--
ALTER TABLE `danhsach_sp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhsach_dm`
--
ALTER TABLE `danhsach_dm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhsach_kh`
--
ALTER TABLE `danhsach_kh`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danhsach_sp`
--
ALTER TABLE `danhsach_sp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
