-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 01:27 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobihub`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Apple', 'Iphone 11', 95000, './assets/products/iphone11.png', '2021-06-01 14:07:54'),
(2, 'Samsung', 'Samsung s10', 85000, './assets/products/samsung s10.png', '2021-06-02 14:07:54'),
(3, 'Xiaomi', 'Xiaomi Redmi', 80000, './assets/products/x1.png', '2021-06-03 14:07:54'),
(4, 'Apple', 'Iphone 11', 95000, './assets/products/iphone11.png', '2021-06-03 14:07:54'),
(5, 'Apple', 'Iphone 11', 95000, './assets/products/iphone11.png', '2021-06-03 14:07:54'),
(6, 'Samsung', 'Samsung s10', 85000, './assets/products/samsung s10.png', '2021-06-03 14:07:54'),
(7, 'Xiaomi', 'Xiaomi Redmi', 80000, './assets/products/x1.png', '2021-06-03 14:07:54'),
(8, 'Samsung', 'Samsung s10', 85000, './assets/products/samsung s10.png', '2021-06-04 14:07:54'),
(9, 'Samsung', 'Samsung s10', 85000, './assets/products/samsung s10.png', '2021-06-04 14:07:54'),
(10, 'Xiaomi', 'Xiaomi Redmi', 80000, './assets/products/x1.png', '2021-06-04 14:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'muchiri', 'kennedy', '2021-06-08 14:20:19'),
(2, 'muchiri', 'mbogo', '2021-06-09 14:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
