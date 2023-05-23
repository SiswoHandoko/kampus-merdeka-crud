-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 03:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Jacket'),
(2, 'Hoodie'),
(3, 'Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `tag_type` enum('new','best_seller') DEFAULT NULL,
  `status` enum('available','restock','not_available') NOT NULL DEFAULT 'available',
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `name`, `image`, `price`, `tag_type`, `status`, `category_id`) VALUES
(1, 'Peter England Men Party Blue Jeans', '12.jpg', '299000', 'best_seller', 'restock', 3),
(2, 'Titan Women Silver Watch', '13.jpg', '399000', NULL, 'available', 2),
(3, 'Manchester United Men Solid Black Track', '14.jpg', '499000', 'new', 'not_available', 3),
(4, 'Puma Men Grey T-shirt', '15.jpg', '599000', 'new', 'available', 1),
(6, 'Inkfruit Mens Chain Reaction T-shirt', '10000.jpg', '239000', NULL, 'available', 2),
(7, 'Jealous 21 Women Purple Shirt', '10001.jpg', '239000', 'best_seller', 'available', 2),
(8, 'Turtle Check Men Navy Blue Shirt', '10002.jpg', '239000', NULL, 'available', 2),
(9, 'Puma Men Pack of 3 Socks', '10003.jpg', '149000', NULL, 'available', 2),
(10, 'Skagen Men Black Watch', '10004.jpg', '166000', 'new', 'available', 2),
(11, 'Puma Men Future Cat Remix SF Black Casual Shoes', '10005.jpg', '779000', NULL, 'available', 2),
(12, 'Fila Men Cush Flex Black Slippers', '10006.jpg', '239000', NULL, 'available', 2),
(13, 'Murcia Women Blue Handbag', '10007.jpg', '529000', 'new', 'available', 2),
(14, 'Ben 10 Boys Navy Blue Slippers', '10008.jpg', '239000', 'new', 'available', 2),
(15, 'Reid & Taylor Men Check Purple Shirts', '10009.jpg', '669000', NULL, 'available', 2),
(16, 'Police Men Black Dial Watch PL12889JVSB', '10010.jpg', '239000', NULL, 'available', 2),
(17, 'Gini and Jony Girls Knit White Top', '10011.jpg', '433000', NULL, 'available', 2),
(18, 'Bwitch Beige Full-Coverage Bra BW335', '10012.jpg', '266000', 'best_seller', 'available', 2),
(19, 'Baggit Women Brown Handbag', '10013.jpg', '289000', 'best_seller', 'available', 2),
(20, 'ADIDAS Men Spry M Black Sandals', '10014.jpg', '639000', 'best_seller', 'available', 2),
(21, 'Timberland Unisex Rubber Sole Brush Shoe Accessories', '10015.jpg', '839000', NULL, 'available', 2),
(22, 'ADIDAS Men Lfc Auth Hood Grey Sweatshirts', '10075.jpg', '199000', 'new', 'available', 2),
(23, 'David Beckham Signature Men Deos', '10017.jpg', '209000', NULL, 'available', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cloth_sizes`
--

CREATE TABLE `cloth_sizes` (
  `id` int(11) NOT NULL,
  `cloth_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloth_sizes`
--

INSERT INTO `cloth_sizes` (`id`, `cloth_id`, `size_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 2, 4),
(11, 2, 5),
(12, 2, 6),
(13, 3, 1),
(14, 3, 2),
(15, 3, 3),
(16, 3, 4),
(17, 3, 5),
(18, 3, 6),
(19, 4, 1),
(20, 4, 2),
(21, 4, 3),
(22, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size` enum('xs','s','m','l','xl','xxl') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`) VALUES
(1, 'xs'),
(2, 's'),
(3, 'm'),
(4, 'l'),
(5, 'xl'),
(6, 'xxl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_category` (`category_id`);

--
-- Indexes for table `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_cloth` (`cloth_id`),
  ADD KEY `fk_id_size` (`size_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clothes`
--
ALTER TABLE `clothes`
  ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  ADD CONSTRAINT `fk_id_cloth` FOREIGN KEY (`cloth_id`) REFERENCES `clothes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_id_size` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
