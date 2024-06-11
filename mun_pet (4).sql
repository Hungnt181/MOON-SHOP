-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 02:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mun_pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `password`, `email`, `role`) VALUES
(2, 'ngothehung', '123456', 'ngothehung@gmail.com', 'admin'),
(3, 'nguyenthuydung', '123456', 'nguyenthuydung@gmail.com', 'client'),
(4, 'nguyenviettuan', '123456', 'nguyenviettuan@gmail.com', 'client'),
(6, 'test', '123456', 'test1@gmail.com', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int NOT NULL,
  `account_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `account_id`) VALUES
(1, 2),
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_detail_id` int NOT NULL,
  `bill_id` int NOT NULL,
  `pro_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`bill_detail_id`, `bill_id`, `pro_id`) VALUES
(1, 1, 5),
(2, 2, 4),
(3, 2, 4),
(4, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cate_status` varchar(255) NOT NULL DEFAULT ' not deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`, `cate_status`) VALUES
(1, 'Thức ăn hạt cho chó', ' not deleted'),
(2, 'Thức ăn hạt cho mèo', ' not deleted'),
(3, 'Pate cho chó', ' not deleted'),
(4, 'Pate cho mèo', ' not deleted');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` int NOT NULL,
  `pro_quantity` int NOT NULL,
  `pro_description` text NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Còn hàng',
  `cate_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_quantity`, `pro_description`, `pro_img`, `pro_status`, `cate_id`) VALUES
(3, 'Royal Canin Kitten 36 Cho Mèo Con', 127000, 10, 'Thức ăn hạt cho mèo con Royal Canin Kitten\r\nKích thước từ 400G đến 10G ', 'hm1.jpg', 'Còn hàng', 2),
(4, 'Royal Canin Renal Cat - Hỗ Trợ Chức Năng Thận Cho Mèo', 680000, 10, 'Royal Canin Renal Cat - Hỗ Trợ Chức Năng Thận Cho Mèo - 400G - 2KG', 'hm2.jpg', 'Còn hàng', 2),
(5, 'Hạt cho chó NuTrience Infusion thịt gà và rau củ dành cho mọi giống chó', 1277000, 10, 'Hạt cho chó NuTrience Infusion thịt gà và rau củ dành cho mọi giống chó Kích thước - 500G - 10KG', 'hc1.jpg', 'Còn hàng', 1),
(6, 'ROYAL CANIN URINARY S/O CANINE - BỆNH SỎI THẬN Ở CHÓ', 547000, 10, 'ROYAL CANIN URINARY S/O CANINE - BỆNH SỎI THẬN Ở CHÓ', 'hc2.jpg', 'Còn hàng', 1),
(8, 'Pate Monge Cho Chó', 26000, 100, 'Pate ngon cho chó nhà bạn', 'pc1.jpg', 'Còn hàng', 3),
(9, 'Pate Royan Canin Mini Puppy Wet 85gr', 29000, 100, 'Pate ngon cho chó nhà bạn', 'pc2.jpg', 'Còn hàng', 3),
(10, 'Pate Royan Canin Poodle Adult Wet 85gr', 29000, 100, 'Pate ngon cho chó nhà bạn', 'pc3.jpg', 'Còn hàng', 3),
(11, 'Pate Gói Pedigree Chó Con', 18000, 100, 'Pate ngon cho chó nhà bạn', 'pc4.jpg', 'Còn hàng', 3),
(12, 'Pate thịt Gà Đóng Gói Cho Chó DoggyMan', 18000, 100, 'Pate ngon cho chó nhà bạn', 'pc5.jpg', 'Còn hàng', 3),
(13, 'Pate Gói Cherman Cho Mèo', 16000, 100, 'Pate ngon cho mèo nhà bạn', 'pm1.jpg', 'Còn hàng', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `fk_bill_account` (`account_id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`bill_detail_id`),
  ADD KEY `fk_bill_billdetail` (`bill_id`),
  ADD KEY `fk_billdetail_product` (`pro_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `fk_product_category` (`cate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `bill_detail_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_account` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `fk_bill_billdetail` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_billdetail_product` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
