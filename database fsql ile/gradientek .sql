-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 06:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradientek`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `aboutphoto` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `subtitle`, `description`, `aboutphoto`, `links`) VALUES
(0, 'vishal balasaheb mehetre', 'senior developer', 'based digital technologies such as desktop computers, mobile phones and other digital media and platforms to promote products and services.[2][3] Its development during the 1990s and 2000s changed the way brands and businesses use technology for marketing. As digital platforms became increasingly incorporated into marketing plans and everyday life,[4] and as people increasingly use digital devices instead of visiting physical shops,[5][6] digital marketing campaigns have become prevalent, employing combinations of search engine optimization (SEO), search engine marketing (SEM), content marketing, influencer marketing, content automation, campaign marketing, data-driven marketing, e-commerce marketing, social media marketing, social media optimization, e-mail direct marketing, display advertising, e-books, and optical disks and games have become commonplace. Digital marketing extends to non-Internet channels that provide digital media, such as television, mobile phones (SMS and MMS), callback, and on-hold mobile ring tones.[7] The extension to non-Internet channels differentiates digital marketing from online marketing.[8]', 'logo9.png', 'www.youtube.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_form`
--

CREATE TABLE `admin_form` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_type` varchar(255) NOT NULL DEFAULT 'manager'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_form`
--

INSERT INTO `admin_form` (`id`, `name`, `email`, `password`, `admin_type`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(2, 'vishal', 'mehetrevishal2@gmail.com', '9215f57a643a17acbb64d5a238821c5d', 'Assistance'),
(3, '', '', '', ''),
(4, 'vbm', 'v@gmail.com', 'vish111', 'Assistance'),
(5, 's', 's@gmail.com', 'sss111', 'Manager'),
(6, 't', 't@gmail.com', 'ttt111', 'Manager'),
(7, 'rrr', 'r@gmail.com', 'rrr000', 'Assistance'),
(8, 'x', 'x@gmail.com', 'xx11', 'Manager'),
(9, 'pratik', 'p@gmail.com', 'Pratik@111', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) UNSIGNED NOT NULL,
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `t_fb` varchar(50) NOT NULL DEFAULT 'frontend',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `t_id`, `t_name`, `t_email`, `position`, `project`, `t_fb`, `image`) VALUES
(8, 11, 'bb', 'nn@gmail.com', '1stclass', 'hotel', 'frontend', 'DSC04338.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `team1`
--

CREATE TABLE `team1` (
  `tt_id` int(10) NOT NULL,
  `tt_name` varchar(255) NOT NULL,
  `tt_email` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL DEFAULT 'frontend',
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team1`
--

INSERT INTO `team1` (`tt_id`, `tt_name`, `tt_email`, `p_type`, `photo`) VALUES
(12, 'suraj satpue', 'surajsat@gmail.com', 'frontend', 'suraj.jpg'),
(12, 'tejas belhekar', 'tejas@gmail.com', 'backend', 'tejas.jpg'),
(21, 'vishal mehetre', 'vishal@gmail.com', 'backend', 'DSC05241.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_form`
--
ALTER TABLE `admin_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_form`
--
ALTER TABLE `admin_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
