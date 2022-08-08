-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 12:25 PM
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
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `banners_img` text NOT NULL,
  `banners_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '0=inActive, 1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `details`, `banners_img`, `banners_status`) VALUES
(21, 'This is Title ', 'This is sub title', 'This is update details new', '1657951987.jpg', 1),
(22, 'This is title 2', 'This is sub title 2', 'This is details 2', '1657952021.jpg', 1),
(23, 'Banner Title 3', 'Banner sub title 3', 'This is description new 3', '1658307861.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(50) NOT NULL,
  `categories_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Active=1, InActive=0',
  `category_delete_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Active=1, Delete=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_status`, `category_delete_status`) VALUES
(1, 'Web Design', 1, 1),
(2, 'Web Development', 1, 1),
(3, 'Laravel Development', 1, 1),
(4, 'React Development', 1, 1),
(5, 'Angular Development ', 0, 1),
(6, 'Wordpress Development', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_img` text NOT NULL,
  `client_review` text NOT NULL,
  `designation_id` int(50) NOT NULL,
  `client_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Active=1, InActive=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `client_name`, `client_img`, `client_review`, `designation_id`, `client_status`) VALUES
(15, 'Client Name 1', '1658299207.png', 'This is Review 1', 0, 1),
(18, 'Client Name ', '1658308425.png', 'This is Client Review 2', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_project`
--

CREATE TABLE `our_project` (
  `id` int(11) NOT NULL,
  `category_id` int(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_link` varchar(255) NOT NULL,
  `project_thumb` text NOT NULL,
  `project_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT 'Active=1, InActive=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_project`
--

INSERT INTO `our_project` (`id`, `category_id`, `project_name`, `project_link`, `project_thumb`, `project_status`) VALUES
(9, 4, 'React Development Name', 'https://projectlink.com', '1658308624.png', 1),
(10, 1, 'Wordpress Development', 'https://projectlink.com', '1658308230.png', 1),
(11, 2, 'Laravel development ', 'https://projectlink.com', '1658328149.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_staff`
--

CREATE TABLE `our_staff` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_img` text NOT NULL,
  `designation_id` int(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_staff`
--

INSERT INTO `our_staff` (`id`, `staff_name`, `staff_img`, `designation_id`, `facebook`, `twitter`, `linkedin`) VALUES
(5, 'Raihan Ali', '1658296065.png', 0, 'https://facebook.com', '', ''),
(6, 'Zinnah Ali', '1658308460.png', 0, 'https://facebook.com', 'https://twitter.com', 'https://linkdine.com');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `page_no` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `sub_title`, `details`, `page_no`) VALUES
(1, 'This is Title 1', 'This is subtitle 1', 'This is description 1', 1),
(2, 'This is Title 2', 'This is subtitle 2', 'This is description 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `services_details` text NOT NULL,
  `services_icon` varchar(100) NOT NULL,
  `services_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT 'Active=1, InActive=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_name`, `services_details`, `services_icon`, `services_status`) VALUES
(1, 'This is  services name 1', 'This is services details 1', 'icon1', 1),
(3, 'This is services name 2', 'This is services Details name 2  ', 'icon2', 1),
(5, 'This is services name 3', 'This is services details name 3', 'icon3', 1),
(6, 'name ', 'details', 'icon', 1),
(7, 'amar name services', 'ami detaisl', 'ami icon', 1),
(8, 'This is new Service Name ', 'This is services details This is services details This is services details This is services details This is services details This is services details This is services details This is services details This is services details This is services details This is services details', 'icon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'zinnah.info@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_project`
--
ALTER TABLE `our_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_staff`
--
ALTER TABLE `our_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `our_project`
--
ALTER TABLE `our_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `our_staff`
--
ALTER TABLE `our_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
