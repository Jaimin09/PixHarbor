-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 03:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixharbor`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_images`
--

CREATE TABLE `all_images` (
  `image_name` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_images`
--

INSERT INTO `all_images` (`image_name`, `category`, `price`) VALUES
('fitness_1.jpg', 'fitness', 10),
('fitness_10.jpg', 'fitness', 12),
('fitness_11.jpg', 'fitness', 10),
('fitness_12.jpg', 'fitness', 12),
('fitness_13.jpg', 'fitness', 10),
('fitness_2.jpg', 'fitness', 10),
('fitness_3.jpg', 'fitness', 10),
('fitness_4.jpg', 'fitness', 10),
('fitness_5.jpg', 'fitness', 12),
('fitness_6.jpg', 'fitness', 15),
('fitness_7.jpg', 'fitness', 12),
('fitness_8.jpg', 'fitness', 15),
('fitness_9.jpg', 'fitness', 10),
('travel_1.jpg', 'travel', 12),
('travel_10.jpg', 'travel', 12),
('travel_11.jpg', 'travel', 10),
('travel_12.jpg', 'travel', 12),
('travel_13.jpg', 'travel', 10),
('travel_14.jpg', 'travel', 12),
('travel_15.jpg', 'travel', 10),
('travel_2.jpg', 'travel', 15),
('travel_3.jpg', 'travel', 10),
('travel_4.jpg', 'travel', 12),
('travel_5.jpg', 'travel', 10),
('travel_6.jpg', 'travel', 12),
('travel_7.jpg', 'travel', 10),
('travel_8.jpg', 'travel', 12),
('travel_9.jpg', 'travel', 10),
('work_1.jpg', 'work', 12),
('work_10.jpg', 'work', 12),
('work_11.jpg', 'work', 10),
('work_12.jpg', 'work', 12),
('work_13.jpg', 'work', 10),
('work_14.jpg', 'work', 12),
('work_2.jpg', 'work', 15),
('work_3.jpg', 'work', 10),
('work_4.jpg', 'work', 12),
('work_5.jpg', 'work', 10),
('work_6.jpg', 'work', 12),
('work_7.jpg', 'work', 10),
('work_8.jpg', 'work', 12),
('work_9.jpg', 'work', 10);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `email` varchar(32) NOT NULL,
  `image_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`email`, `image_name`) VALUES
('shreyashnkadam2000@gmail.com', 'travel_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `credit_no` int(16) DEFAULT NULL,
  `credit_name` varchar(32) NOT NULL,
  `credit_exp_m` int(2) NOT NULL,
  `credit_exp_y` year(4) NOT NULL,
  `credit_cvv` int(3) NOT NULL,
  `subscribed` tinyint(1) NOT NULL,
  `credits` int(10) NOT NULL,
  `end_date` date DEFAULT NULL,
  `temp_image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `phone`, `credit_no`, `credit_name`, `credit_exp_m`, `credit_exp_y`, `credit_cvv`, `subscribed`, `credits`, `end_date`, `temp_image`) VALUES
('jaimin@gmail.com', 'jaimin', 'Jaimin', 1234512344, NULL, '', 0, 0000, 0, 0, 0, NULL, ''),
('jaiminhpatel09@gmail.com', 'jaimin', 'Jaimin', 1234567890, NULL, '', 0, 0000, 0, 0, 0, NULL, ''),
('jay@gmail.com', 'jay', 'jaimin', 1234599999, NULL, '', 0, 0000, 0, 0, 0, NULL, ''),
('shr@gmail.com', 'shr', 'shr', 1234561234, NULL, '', 0, 0000, 0, 0, 0, NULL, ''),
('shreyashnkadam2000@gmail.com', 'shreyash', 'Shreyash', 1234567897, NULL, '', 0, 0000, 0, 0, 0, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_images`
--
ALTER TABLE `all_images`
  ADD PRIMARY KEY (`image_name`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD UNIQUE KEY `email` (`email`,`image_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
