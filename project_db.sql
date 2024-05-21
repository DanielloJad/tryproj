-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 04:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category1s`
--

CREATE TABLE `category1s` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `inventory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category1s`
--

INSERT INTO `category1s` (`id`, `product_name`, `inventory`) VALUES
(1, 'Product 1', '1002'),
(2, 'Product 2', '1233'),
(4, 'Product 3', '12323'),
(5, 'Product 4', '100');

-- --------------------------------------------------------

--
-- Table structure for table `category2s`
--

CREATE TABLE `category2s` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `inventory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category2s`
--

INSERT INTO `category2s` (`id`, `product_name`, `inventory`) VALUES
(1, 'Product 2', '1002'),
(2, 'Product3', '1002');

-- --------------------------------------------------------

--
-- Table structure for table `category3s`
--

CREATE TABLE `category3s` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `inventory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category3s`
--

INSERT INTO `category3s` (`id`, `product_name`, `inventory`) VALUES
(1, 'Product 3', '1003'),
(2, 'Product2', '1002'),
(3, 'Product3', '1002');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `reports` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `total_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `category_name`, `product_name`, `price`, `quantity`, `total_price`) VALUES
(19, '2024-05-22', 'Category 2', 'Product 1', '10', '30', '300'),
(20, '2024-06-01', 'Category 3', 'Product 3', '12', '12', '144'),
(21, '2024-05-31', 'Category 1', 'Product 3', '12', '2', '24'),
(22, '2024-05-06', 'Category 3', 'Product 1', '12', '2', '24'),
(23, '2024-05-29', 'Category 2', 'Product 2', '12', '12', '144');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(25, 'ludin', 'cator', 'ludincator23@gmail.com', '$2y$10$qAEVRm1qfydvKisR/Mhw6O4P3.X4AZRhwYXqtSpXxJI', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category1s`
--
ALTER TABLE `category1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category2s`
--
ALTER TABLE `category2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category3s`
--
ALTER TABLE `category3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category1s`
--
ALTER TABLE `category1s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category2s`
--
ALTER TABLE `category2s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category3s`
--
ALTER TABLE `category3s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
