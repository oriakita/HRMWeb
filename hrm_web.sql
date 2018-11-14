-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 01:43 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `macv` int(10) NOT NULL,
  `tencv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `luongcb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`macv`, `tencv`, `luongcb`) VALUES
(1, 'Nhân viên văn phòng', 200000),
(2, 'Nhân viên bán hàng', 200000),
(3, 'Trưởng phòng', 300000),
(4, 'Thư ký', 350000),
(5, 'Phó giám đốc', 1000000),
(6, 'Giám đốc', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `maluong` int(10) NOT NULL,
  `ngaycong` int(2) NOT NULL,
  `tangca` int(2) NOT NULL,
  `vipham` float(2,2) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `mathang` int(6) DEFAULT NULL,
  `maphieu` int(10) DEFAULT NULL,
  `manv` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(10) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` enum('m','f') COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) DEFAULT NULL,
  `macv` int(10) DEFAULT NULL,
  `mapb` int(10) DEFAULT NULL,
  `thanhtich` enum('0','1','2','3') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `role` int(1) NOT NULL DEFAULT '1',
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'images/nhanvien/avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `sdt`, `macv`, `mapb`, `thanhtich`, `role`, `password`, `avatar`) VALUES
(1, 'Huỳnh Nhật Hòa', '1997-01-18', 'm', '144/9 P14, Q11, TP.HCM', 987647814, NULL, NULL, '0', 0, '123456', 'images/nhanvien/avatar.png'),
(6, 'test', '2018-11-08', 'm', '4 ABC', 123456, 2, 3, '0', 1, '123456', 'images/nhanvien/avatar.png'),
(24, 'Nguyễn Thị A', '1982-12-01', 'f', '122 Cách Mạng Tháng 8, Quận 10, Hồ Chí Minh', 9876, 2, 1, '0', 1, '123', 'images/nhanvien/thaygiao.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phieuluong`
--

CREATE TABLE `phieuluong` (
  `maphieu` int(10) NOT NULL,
  `manv` int(10) DEFAULT NULL,
  `maluong` int(10) DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nguoitao` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MAPB` int(10) NOT NULL,
  `TenPB` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trphg` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MAPB`, `TenPB`, `trphg`) VALUES
(1, 'Phòng Marketing', NULL),
(2, 'Kế Toán - Tài Chính', NULL),
(3, 'Phòng Kinh Doanh', NULL),
(4, 'Phòng Nhân Sự', NULL),
(5, 'Phòng Kĩ Thuật', NULL),
(6, 'Ban Giám Đốc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thang`
--

CREATE TABLE `thang` (
  `mathang` int(6) NOT NULL,
  `tenthang` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `matin` int(10) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nguoidang` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`macv`),
  ADD UNIQUE KEY `UNIQUE` (`tencv`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`maluong`),
  ADD KEY `fk_mathang` (`mathang`),
  ADD KEY `fk_maphieu` (`maphieu`),
  ADD KEY `fk_manv` (`manv`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`),
  ADD UNIQUE KEY `sdt` (`sdt`),
  ADD KEY `fk_macv` (`macv`),
  ADD KEY `fk_mapb` (`mapb`);

--
-- Indexes for table `phieuluong`
--
ALTER TABLE `phieuluong`
  ADD PRIMARY KEY (`maphieu`),
  ADD KEY `fk_manv_pl` (`manv`),
  ADD KEY `fk_maluong` (`maluong`),
  ADD KEY `fk_manvtao` (`nguoitao`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MAPB`),
  ADD KEY `fk_trphong` (`trphg`);

--
-- Indexes for table `thang`
--
ALTER TABLE `thang`
  ADD PRIMARY KEY (`mathang`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matin`),
  ADD KEY `fk_manv_dangtin` (`nguoidang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `macv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `luong`
--
ALTER TABLE `luong`
  MODIFY `maluong` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `phieuluong`
--
ALTER TABLE `phieuluong`
  MODIFY `maphieu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MAPB` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matin` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `luong`
--
ALTER TABLE `luong`
  ADD CONSTRAINT `fk_manv` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `fk_maphieu` FOREIGN KEY (`maphieu`) REFERENCES `phieuluong` (`maphieu`),
  ADD CONSTRAINT `fk_mathang` FOREIGN KEY (`mathang`) REFERENCES `thang` (`mathang`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `fk_macv` FOREIGN KEY (`macv`) REFERENCES `chucvu` (`macv`),
  ADD CONSTRAINT `fk_mapb` FOREIGN KEY (`mapb`) REFERENCES `phongban` (`MAPB`);

--
-- Constraints for table `phieuluong`
--
ALTER TABLE `phieuluong`
  ADD CONSTRAINT `fk_maluong` FOREIGN KEY (`maluong`) REFERENCES `luong` (`maluong`),
  ADD CONSTRAINT `fk_manv_pl` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `fk_manvtao` FOREIGN KEY (`nguoitao`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `phongban`
--
ALTER TABLE `phongban`
  ADD CONSTRAINT `fk_trphong` FOREIGN KEY (`trphg`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_manv_dangtin` FOREIGN KEY (`nguoidang`) REFERENCES `nhanvien` (`manv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
