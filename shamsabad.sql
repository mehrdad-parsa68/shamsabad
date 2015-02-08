-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 01:16 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shamsabad`
--
CREATE DATABASE IF NOT EXISTS `shamsabad` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shamsabad`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'آرایشی و بهداشتی'),
(2, 'استکان'),
(3, 'بلورجات تزئینی'),
(4, 'خودروسازی'),
(5, 'قندان'),
(6, 'لیوان و فنجان'),
(7, 'نمکدان'),
(8, 'سایر بلورجات');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `picture`, `cat_id`) VALUES
(1, '', 'pic01.jpg', 1),
(2, '', 'pic02.jpg', 1),
(3, '', 'pic03.jpg', 2),
(4, '', 'pic04.jpg', 2),
(5, '', 'pic05.jpg', 2),
(6, '', 'pic06.jpg', 2),
(7, '', 'pic07.jpg', 2),
(8, '', 'pic08.jpg', 2),
(9, '', 'pic09.jpg', 2),
(10, '', 'pic10.jpg', 3),
(11, '', 'pic11.jpg', 3),
(12, '', 'pic12.jpg', 3),
(13, '', 'pic13.jpg', 3),
(14, '', 'pic14.jpg', 3),
(15, '', 'pic15.jpg', 4),
(16, '', 'pic16.jpg', 4),
(17, '', 'pic17.jpg', 4),
(18, '', 'pic18.jpg', 8),
(19, '', 'pic19.jpg', 8),
(20, '', 'pic20.jpg', 5),
(21, '', 'pic21.jpg', 5),
(22, '', 'pic22.jpg', 5),
(23, '', 'pic23.jpg', 5),
(24, '', 'pic24.jpg', 5),
(25, '', 'pic25.jpg', 6),
(26, '', 'pic26.jpg', 6),
(27, '', 'pic27.jpg', 6),
(28, '', 'pic28.jpg', 6),
(29, '', 'pic29.jpg', 6),
(30, '', 'pic30.jpg', 6),
(31, '', 'pic31.jpg', 7),
(32, '', 'pic32.jpg', 7),
(33, '', 'pic33.jpg', 7),
(34, '', 'pic34.jpg', 7),
(35, '', 'pic35.jpg', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
