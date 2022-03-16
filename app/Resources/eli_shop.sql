-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 12:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eli_shop`
--
CREATE DATABASE IF NOT EXISTS `eli_shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eli_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) UNSIGNED NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `sale_price` decimal(10,0) UNSIGNED NOT NULL,
  `is_on_sale` tinyint(1) UNSIGNED NOT NULL,
  `banner` varchar(255) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `products`
--

TRUNCATE TABLE `products`;
--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image_path`, `sale_price`, `is_on_sale`, `banner`, `brand`, `created`) VALUES
(1, 'Shoes Blundstone', 'View our Chelsea boots, Lace Ups and Work Boots in leather and suede. Available in various styles & colors for men, women & kids', '400', 'product_01.jpg', '490', 1, 'banner1', 'Blundstone', 1647208413),
(2, 'Coat Mackage', 'I\'m partial to outerwear that isn\'t boring but that can be worn with a wide variety of pieces, which is something that Maje does really well', '390', 'product_02.jpg', '428', 1, 'banner2', 'Mackage', 1647208416),
(3, 'Scarf', 'Scarf by ASOS DESIGN Part of our responsible edit Plain design Rectangle cut Frayed ends', '40', 'product_03.jpg', '47', 1, 'Banner scarf', NULL, 1647350321),
(4, '', 'The scarf is pretty long! Sooo soft and cozy I’m in love♥️✨ a bit thin though', '23', 'product_04.jpg', '33', 0, 'Banner', 'Shein', 1647350322),
(5, 'Black Sheep Aran Pullover', 'Crew Neck Sweater with Aran Isle Pattern.\r\nCrew neck Aran Island-style swaeter. 100% unbleached and non-dyed pure new wool. Yarn thickness Nm 9/2. Back length 68 cm for size M.', '200', 'product_05.jpg', '219', 0, '', NULL, 1647350625),
(6, 'Logo Jersey Scarf in Red', 'Stylish and warm, this red jersey scarf from Boss is the perfect winter accessory for any outfit.', '56', 'product_06.jpg', '66', 0, '', 'Boss', 1647350626),
(7, 'Black Sheep Aran Pullover', 'Crew Neck Sweater with Aran Isle Pattern.\r\nCrew neck Aran Island-style swaeter. 100% unbleached and non-dyed pure new wool. Yarn thickness Nm 9/2. Back length 68 cm for size M.', '200', 'product_05.jpg', '219', 1, '', NULL, 1647350625),
(8, 'Logo Jersey Scarf in Red', 'Stylish and warm, this red jersey scarf from Boss is the perfect winter accessory for any outfit.', '56', 'product_06.jpg', '66', 1, '', 'Boss', 1647350626),
(9, 'White Sheep Aran Pullover', 'Crew Neck Sweater with Aran Isle Pattern.\r\nCrew neck Aran Island-style swaeter. 100% unbleached and non-dyed pure new wool. Yarn thickness Nm 9/2. Back length 68 cm for size M.', '200', 'product_07.jpg', '219', 1, '', NULL, 1647350628),
(10, 'Logo Jersey', 'Stylish and warm, this red jersey scarf from Boss is the perfect winter accessory for any outfit.', '44', 'product_08.jpg', '56', 1, '', 'Boss', 1647350629),
(12, 'Nike shoes', 'Nike shoes, Nike shoes', '200', 'nike.jpg', '220', 0, 'ddd', 'Nike', 0),
(13, 'Nike shoes #2', 'Nike classic shoe', '200', 'nike2.jpg', '222', 0, 'ddd3', 'Nike', 0),
(15, 'Nike classic shoe', 'Nike classic shoe...Nike classic shoe', '200', 'nike3.jpg', '229', 0, 'ddd3', 'Nike', 1647429842),
(16, 'Nike classic shoe', 'Nike classic shoe,Nike classic shoe', '200', 'nike3.jpg', '222', 0, 'ddd', 'Nike', 1647430084),
(17, 'Nike classic shoe', 'Nike classic shoe,Nike classic shoe', '200', 'nike3.jpg', '222', 1, 'ddd', 'Nike', 1647430296),
(18, 'Nike Sweet', 'Nike Sweet Classic SL | Nice Kicks', '300', 'nike4.jpg', '444', 1, 'ddd', 'Nike', 1647431180);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
