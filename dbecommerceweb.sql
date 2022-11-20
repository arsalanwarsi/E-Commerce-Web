-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 12:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbecommerceweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'arsalan', 'example@email.com', 'this is a test message');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `name`, `price`, `description`, `image`, `quantity`, `status`, `created_on`) VALUES
(15, 'Necklace', 99.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product1.jpg', 10, 0, '2022-05-17 19:55:36'),
(16, 'Earring', 19.45, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product2.jpg', 50, 1, '2022-05-17 19:56:13'),
(17, 'Earring', 20, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product3.jpg', 5, 0, '2022-05-17 19:57:02'),
(18, 'Earring', 50.01, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product4.jpg', 8, 1, '2022-05-17 19:57:32'),
(19, 'Ring', 43.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product5.jpg', 20, 1, '2022-05-17 19:57:53'),
(20, 'Necklace', 85.9, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product6.jpg', 2, 0, '2022-05-17 19:58:11'),
(21, 'Necklace', 54.65, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product7.jpg', 10, 1, '2022-05-17 19:58:51'),
(22, 'Necklace', 36.9, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product8.jpg', 10, 1, '2022-05-17 19:59:14'),
(23, 'Ring', 45.3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product9.jpg', 10, 1, '2022-05-17 19:59:33'),
(24, 'Necklace', 29.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product10.jpg', 10, 1, '2022-05-17 19:59:50'),
(25, 'Necklace', 74.6, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product11.jpg', 10, 1, '2022-05-17 20:00:15'),
(26, 'Ring', 23.66, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product12.jpg', 10, 1, '2022-05-17 20:00:33'),
(27, 'Ring', 55.63, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product13.jpg', 10, 1, '2022-05-17 20:00:49'),
(28, 'Necklace', 99.99, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi nostrum dolorem                                     ipsa, quas odit, impedit ducimus numquam tenetur dolorum quam cum autem inventore                                     velit debitis mollitia soluta eos distinctio aliquid reiciendis eveniet ab. Ea velit                                     nulla reprehenderit quas magni illo natus facilis mollitia perspiciatis fuga.', 'products-imgs/product14.jpg', 13, 1, '2022-05-17 20:01:09');

-- --------------------------------------------------------

--
-- Table structure for table `promo_codes`
--

CREATE TABLE `promo_codes` (
  `c_id` int(11) NOT NULL,
  `code` text NOT NULL,
  `value` float NOT NULL,
  `status` tinyint(1) NOT NULL,
  `end_date` date NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo_codes`
--

INSERT INTO `promo_codes` (`c_id`, `code`, `value`, `status`, `end_date`, `created_on`) VALUES
(9, 'WAR10', 10, 1, '2022-06-30', '2022-06-26 21:43:05'),
(10, 'WAR01', 1, 1, '2022-06-29', '2022-06-26 21:43:20'),
(11, 'WAR05', 5, 1, '2022-06-30', '2022-06-26 21:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `s_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`s_id`, `email`) VALUES
(1, 'example@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `acc_type` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `acc_type`, `email`, `password`, `f_name`, `l_name`, `type`, `status`, `created_on`) VALUES
(11, 'type_1', 'warsi@mail.com', '$2y$10$YbreChYvGAJ05qhn0qKfFes31AgvD7QjHSXIX7U0rtG4VmqGwJr1u', 'Arsalan', 'Warsi', 'tittle', 1, '2022-05-21 20:44:36'),
(13, 'type_1', 'arsalan@mail.com', '$2y$10$F0487QMFq0FsCefBvG/hTO3h3dOk4OemNPxrdKr8T0pELvRjmiGdG', 'warsi', 'arsalan', '123', 1, '2022-05-23 07:05:39'),
(15, 'type_2', 'arsalanwarsi@mail.com', '$2y$10$W6HSwLJ8RlNDEROHOoXGquv2utovw8pqb4us/TbBBQm/nVEXOTSPG', 'Muhamad Arsalan', 'Warsi', 'Business', 1, '2022-06-26 12:28:50'),
(18, 'type_1', 'test@mail.com', '$2y$10$eScbvawcNXwsOOMuWwskA.ZbNGI2dYhLcfi3ILMJTFMlDFLQ1b6F2', '1', '1', '1', 1, '2022-06-26 15:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
