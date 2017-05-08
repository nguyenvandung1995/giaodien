-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 09:45 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `pk_admin_id` int(11) NOT NULL,
  `c_username` varchar(500) NOT NULL,
  `c_password` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`pk_admin_id`, `c_username`, `c_password`) VALUES
(1, 'dung123', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listmenu`
--

CREATE TABLE IF NOT EXISTS `tbl_listmenu` (
  `pk_listmenu_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `fk_menu_id` int(11) NOT NULL,
  `c_description` varchar(500) NOT NULL,
  `c_price` float NOT NULL,
  `c_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_listmenu`
--

INSERT INTO `tbl_listmenu` (`pk_listmenu_id`, `c_name`, `fk_menu_id`, `c_description`, `c_price`, `c_status`) VALUES
(2, 'Tzatslkl', 1, 'Refreshing traditional cucumber and garlic yoghurt dip', 3.5, 1),
(3, 'Auberglne Salad', 1, 'Refreshing traditional cucumber and garlic yoghurt dip', 3.8, 0),
(4, 'Auberine Salad', 1, 'Refreshing traditional cucumber and garlic yoghurt dip', 3.7, 0),
(5, 'Tzatslkl', 2, 'Refreshing traditional cucumber and garlic yoghurt dip', 2.5, 1),
(6, 'Auberglne Salad', 2, 'Refreshing traditional cucumber and garlic yoghurt dip', 5.7, 0),
(7, 'Auberine Salad', 2, 'Refreshing traditional cucumber and garlic yoghurt dip', 2.4, 0),
(8, 'Tzatslkl', 3, 'Refreshing traditional cucumber and garlic yoghurt dip', 6.4, 1),
(9, 'Auberglne Salad', 3, 'Refreshing traditional cucumber and garlic yoghurt dip', 2.6, 0),
(10, 'Auberine Salad', 3, 'Refreshing traditional cucumber and garlic yoghurt dip', 3.5, 0),
(11, 'Tzatslkl', 4, 'Refreshing traditional cucumber and garlic yoghurt dip', 1.6, 0),
(12, 'Auberglne Salad', 4, 'Refreshing traditional cucumber and garlic yoghurt dip', 3.2, 1),
(13, 'Auberine Salad', 4, 'Refreshing traditional cucumber and garlic yoghurt dip', 2.6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `pk_menu_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`pk_menu_id`, `c_name`) VALUES
(1, 'Appetisers'),
(2, 'Starters'),
(3, 'Salads'),
(4, 'Main Dishes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qlmenu`
--

CREATE TABLE IF NOT EXISTS `tbl_qlmenu` (
  `pk_qlmenu_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_link` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_qlmenu`
--

INSERT INTO `tbl_qlmenu` (`pk_qlmenu_id`, `c_name`, `c_link`) VALUES
(1, 'Home', 'index.php'),
(2, 'About', 'index.php?controller=about'),
(3, 'Igredients ', 'index.php?controller=Igredients '),
(4, 'Menu', 'index.php?controller=Menu'),
(5, 'Reviews', 'index.php?controller=Reviews'),
(6, 'Reservations', 'index.php?controller=Reservations');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservations`
--

CREATE TABLE IF NOT EXISTS `tbl_reservations` (
  `pk_reservations_id` int(11) NOT NULL,
  `c_name` varchar(500) NOT NULL,
  `c_email` varchar(500) NOT NULL,
  `c_date` date NOT NULL,
  `c_number` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reservations`
--

INSERT INTO `tbl_reservations` (`pk_reservations_id`, `c_name`, `c_email`, `c_date`, `c_number`) VALUES
(29, 'Tzatslkl', 'abc@gmail.com', '2017-05-02', 4),
(30, '5', '3r', '2017-05-03', 5),
(31, '5', '3r', '2017-05-03', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`pk_admin_id`);

--
-- Indexes for table `tbl_listmenu`
--
ALTER TABLE `tbl_listmenu`
  ADD PRIMARY KEY (`pk_listmenu_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`pk_menu_id`);

--
-- Indexes for table `tbl_qlmenu`
--
ALTER TABLE `tbl_qlmenu`
  ADD PRIMARY KEY (`pk_qlmenu_id`);

--
-- Indexes for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  ADD PRIMARY KEY (`pk_reservations_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `pk_admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_listmenu`
--
ALTER TABLE `tbl_listmenu`
  MODIFY `pk_listmenu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `pk_menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_qlmenu`
--
ALTER TABLE `tbl_qlmenu`
  MODIFY `pk_qlmenu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  MODIFY `pk_reservations_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
