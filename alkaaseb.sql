-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2024 at 05:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alkaaseb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `ar` varchar(255) NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `ar`, `delete_status`) VALUES
(1, 'Contracts & agreements', 'العقود والاتفاقيات', 0),
(2, 'Family law', 'قانون العائلة', 0),
(3, 'Labour law', 'قانون العمل', 0),
(5, 'Negotiation', 'مفاوضة', 0),
(6, 'Arbitration', 'تحكيم', 0),
(9, 'Debt', 'دين واجب الدفع', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adm_name` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `adm_name`, `user_role`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `product_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `delete_status` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ar_title` text NOT NULL,
  `ar_category` int(11) NOT NULL,
  `ar_description` text NOT NULL,
  `en_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`product_id`, `title`, `product_category`, `delete_status`, `photo`, `ar_title`, `ar_category`, `ar_description`, `en_description`) VALUES
(16, 'ar title', '2', 1, 'labour-law.jpg', '. أوقيانوسيا. لاجوير', 1, 'ar short', 'Streamlined Conflict Resolution: Our Arbitration Services provide\n							a fair, efficient, and cost-effective alternative to traditional legal processes.\n							Trust our expert arbitrators to help you resolve disputes swiftly and impartially,\n							saving you time and money. Simplify your conflicts today with our trusted\n							arbitration solutions'),
(17, 'sssss', '1', 0, 'team-4.jpg', '. أوقيانوسيا. لاجوير ', 6, '. أوقيانوسيا. لاجوير sss', '<p><span xss=removed>ddddssssssdfsdfdsf</span></p><p>fgnf,dgn,f</p><ul><li>fgf</li><li>sdfjhdsf</li><li>sdfsdf</li></ul>'),
(18, 'WORKSHOP1', 'Select Type', 0, 'about-1.jpg', '. أوقيانوسيا. لاجوير', 0, '. أوقيانوسيا. لاجوير', 'En Short Description:'),
(19, 'ldsjhfjkhds', '2', 1, 'Labour-Law-option-3.webp', 'ar ', 3, 'ar short', 'Streamlined Conflict Resolution: Our Arbitration Services provide\n							a fair, efficient, and cost-effective alternative to traditional legal processes.\n							Trust our expert arbitrators to help you resolve disputes swiftly and impartially,\n							saving you time and money. Simplify your conflicts today with our trusted\n							arbitration solutions'),
(20, 'arabic', '6', 1, 'negotiation.png', 'ar ttyt', 2, 'ar shoo', 'sdfbhbjh'),
(21, 'PROMOTIONAL', '', 0, 'promotional.webp', '', 0, '', ''),
(22, 'PROMOTIONAL', '', 0, '407promotional.webp', '', 0, '', ''),
(23, 'd', 'Select Type', 0, 'about-2.jpg', '. أوقيانوسيا. لاجوير', 0, '. أوقيانوسيا. لاجوير. أوقيانوسيا. لاجوير. أوقيانوسيا. لاجوير', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ar_title` varchar(255) NOT NULL,
  `ar_subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `subtitle`, `image`, `ar_title`, `ar_subtitle`) VALUES
(1, 'slide3', 'sub3', '869b3.png', 'شريكك القانوني الموثوق به', 'في دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي دولة الإفي'),
(2, 'slide2', 'sub title2', 'b1.png', 'شريكك القانوني الموثوق به', 'في دولة الإمارات العربية المتحدة'),
(3, 'title', 'sub title', '133b2.png', 'شريكك القانوني الموثوق به', 'في دولة الإمارات العربية المتحدة');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
