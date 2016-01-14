-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2016 at 10:21 
-- Server version: 5.5.31
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sia`
--
CREATE DATABASE IF NOT EXISTS `sia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sia`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` char(5) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'PE'),
(2, 'PP'),
(3, 'HDPE');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(100) NOT NULL,
  `sales_id` int(11) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `sales_id`) VALUES
(1, 'Blue Bird', 6),
(2, 'Aba Mandiri', 6),
(3, 'Chemco Harapan Nusantara', 6),
(4, 'Dharma Precision Part', 6),
(5, 'Tokai Kogu', 6),
(6, 'Abacus Kencana', 6),
(7, 'Abadi Adi Mulia', 6),
(8, 'Abadi Baru', 6),
(9, 'Abadi Jasa', 6),
(10, 'Abdul Aziz', 6);

-- --------------------------------------------------------

--
-- Table structure for table `packaging`
--

CREATE TABLE IF NOT EXISTS `packaging` (
  `pack_id` int(11) NOT NULL AUTO_INCREMENT,
  `pack_name` varchar(20) NOT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `packaging`
--

INSERT INTO `packaging` (`pack_id`, `pack_name`) VALUES
(1, 'Sack'),
(2, 'Box'),
(3, 'Roll');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_width` double NOT NULL,
  `prod_guzzet` double NOT NULL,
  `prod_length` double NOT NULL,
  `prod_thickness` double NOT NULL,
  `prod_emboss` tinyint(1) NOT NULL COMMENT '1:Y|2:N',
  `visibility` tinyint(1) NOT NULL COMMENT '1:Active|2:Deleted',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `cat_id`, `st_id`, `pack_id`, `prod_name`, `prod_width`, `prod_guzzet`, `prod_length`, `prod_thickness`, `prod_emboss`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'PE Solid', 6, 0, 10, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(2, 1, 1, 1, 'PE Solid', 6, 0, 12, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(3, 1, 1, 1, 'PE Solid', 6, 0, 12, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(4, 1, 1, 1, 'PE Solid', 6, 0, 15, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(5, 1, 1, 1, 'PE Solid', 6, 0, 15, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(6, 1, 1, 1, 'PE Solid', 6, 0, 17, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(7, 1, 1, 1, 'PE Solid', 6, 0, 17.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(8, 1, 1, 1, 'PE Solid', 7, 0, 10, 0.0015, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(9, 1, 1, 1, 'PE Solid', 7, 0, 10, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(10, 1, 1, 1, 'PE Solid', 7, 0, 10, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(11, 1, 1, 1, 'PE Solid', 7, 0, 11, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(12, 1, 1, 1, 'PE Solid', 7, 0, 11, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(13, 1, 1, 1, 'PE Solid', 7, 0, 11.5, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(14, 1, 1, 1, 'PE Solid', 7, 0, 11.5, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(15, 1, 1, 1, 'PE Solid', 7, 0, 12, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(16, 1, 1, 1, 'PE Solid', 7, 0, 15, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(17, 1, 1, 1, 'PE Solid', 7, 0, 15, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(18, 1, 1, 1, 'PE Solid', 7, 0, 16, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(19, 1, 1, 1, 'PE Solid', 7, 0, 16, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(20, 1, 1, 1, 'PE Solid', 7, 0, 16.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(21, 1, 1, 1, 'PE Solid', 7, 0, 16.5, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(22, 1, 1, 1, 'PE Solid', 7, 0, 16.5, 0.0035, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(23, 1, 1, 1, 'PE Solid', 7, 0, 17, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(24, 1, 1, 1, 'PE Solid', 7, 0, 20, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(25, 1, 2, 2, 'PE Solid', 8, 0, 10, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(26, 1, 2, 2, 'PE Solid', 8, 0, 10, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(27, 1, 2, 2, 'PE Solid', 8, 0, 10.5, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(28, 1, 2, 2, 'PE Solid', 8, 0, 10.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(29, 1, 2, 2, 'PE Solid', 8, 0, 11, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(30, 1, 2, 2, 'PE Solid', 8, 0, 12, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(31, 1, 2, 2, 'PE Solid', 8, 0, 12.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(32, 1, 2, 2, 'PE Solid', 8, 0, 13, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(33, 1, 2, 2, 'PE Solid', 8, 0, 14, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(34, 1, 2, 2, 'PE Solid', 8, 0, 14.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(35, 1, 2, 2, 'PE Solid', 8, 0, 15, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(36, 1, 2, 2, 'PE Solid', 8, 0, 17, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(37, 1, 2, 2, 'PE Solid', 8, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(38, 1, 2, 2, 'PE Solid', 8, 0, 22, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(39, 1, 2, 2, 'PE Solid', 9, 0, 10.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(40, 1, 2, 2, 'PE Solid', 9, 0, 11, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(41, 1, 2, 2, 'PE Solid', 9, 0, 11, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(42, 1, 2, 2, 'PE Solid', 9, 0, 12, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(43, 1, 2, 2, 'PE Solid', 9, 0, 14, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(44, 1, 2, 2, 'PE Solid', 9, 0, 17, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(45, 1, 2, 2, 'PE Solid', 9, 0, 18, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(46, 1, 2, 2, 'PE Solid', 10, 0, 12, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(47, 1, 2, 2, 'PE Solid', 10, 0, 15, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(48, 1, 2, 2, 'PE Solid', 10, 0, 17, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(49, 1, 2, 2, 'PE Solid', 10, 0, 17.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(50, 1, 2, 2, 'PE Solid', 10, 0, 18, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(51, 1, 2, 2, 'PE Solid', 10, 0, 18.5, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(52, 1, 2, 2, 'PE Solid', 10, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(53, 1, 2, 2, 'PE Solid', 10, 0, 21, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(54, 1, 2, 2, 'PE Solid', 10, 0, 22, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(55, 1, 2, 2, 'PE Solid', 10, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(56, 1, 2, 2, 'PE Solid', 11, 0, 15, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(57, 1, 2, 2, 'PE Solid', 11, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(58, 1, 2, 2, 'PE Solid', 11, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(59, 1, 2, 2, 'PE Solid', 12, 0, 15, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(60, 1, 2, 2, 'PE Solid', 12, 0, 17, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(61, 1, 2, 2, 'PE Solid', 12, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(62, 1, 2, 2, 'PE Solid', 12, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(63, 1, 2, 2, 'PE Solid', 12, 0, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(64, 1, 2, 2, 'PE Solid', 12, 0, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(65, 1, 2, 2, 'PE Solid', 13, 0, 15, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(66, 1, 2, 2, 'PE Solid', 13, 0, 17, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(67, 1, 2, 2, 'PE Solid', 13, 0, 18, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(68, 1, 2, 2, 'PE Solid', 13, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(69, 1, 2, 2, 'PE Solid', 13, 0, 22, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(70, 1, 2, 2, 'PE Solid', 13, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(71, 1, 2, 2, 'PE Solid', 14, 0, 22, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(72, 1, 2, 2, 'PE Solid', 14, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(73, 1, 2, 2, 'PE Solid', 14, 0, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(74, 1, 2, 2, 'PE Solid', 15, 0, 17, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(75, 1, 2, 2, 'PE Solid', 15, 0, 18, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(76, 1, 2, 2, 'PE Solid', 15, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(77, 1, 2, 2, 'PE Solid', 15, 0, 22, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(78, 1, 2, 2, 'PE Solid', 15, 0, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(79, 1, 2, 2, 'PE Solid', 15, 0, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(80, 1, 2, 2, 'PE Solid', 15, 0, 40, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(81, 1, 2, 2, 'PE Solid', 15, 0, 45, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(82, 1, 2, 1, 'PE Solid', 16, 0, 18, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(83, 1, 2, 1, 'PE Solid', 16, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(84, 1, 2, 1, 'PE Solid', 16, 0, 22, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(85, 1, 2, 1, 'PE Solid', 16, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(86, 1, 2, 1, 'PE Solid', 16, 0, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(87, 1, 2, 1, 'PE Solid', 16, 0, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(88, 1, 2, 1, 'PE Solid', 16, 0, 38, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(89, 1, 2, 1, 'PE Solid', 17, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(90, 1, 2, 1, 'PE Solid', 17, 0, 22, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(91, 1, 2, 1, 'PE Solid', 17, 0, 23, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(92, 1, 2, 1, 'PE Solid', 17, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(93, 1, 2, 1, 'PE Solid', 17, 0, 27, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(94, 1, 2, 1, 'PE Solid', 17, 0, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(95, 1, 2, 1, 'PE Solid', 17, 0, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(96, 1, 2, 1, 'PE Solid', 17, 0, 38, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(97, 1, 2, 1, 'PE Solid', 18, 0, 20, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(98, 1, 2, 1, 'PE Solid', 18, 0, 22, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(99, 1, 2, 1, 'PE Solid', 18, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(100, 1, 2, 1, 'PE Solid', 18, 0, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(101, 1, 2, 1, 'PE Solid', 18, 0, 38, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(102, 1, 2, 2, 'PE Solid', 19, 0, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(103, 1, 2, 2, 'PE Solid', 19, 0, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(104, 1, 2, 2, 'PE Solid', 20, 0, 25, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(105, 1, 2, 2, 'PE Solid', 22, 0, 30, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(106, 1, 2, 2, 'PE Solid', 22, 0, 40, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(107, 1, 2, 2, 'PE Solid', 25, 0, 40, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(108, 1, 2, 2, 'PE Solid', 25, 0, 45, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(109, 1, 2, 2, 'PE Solid', 27, 0, 40, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(110, 1, 2, 2, 'PE Solid', 27, 0, 45, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(111, 1, 2, 2, 'PE Solid', 27, 0, 48, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(112, 1, 2, 2, 'PE Solid', 28, 0, 30, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(113, 1, 2, 2, 'PE Solid', 28, 0, 35, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(114, 1, 2, 2, 'PE Solid', 28, 0, 40, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(115, 1, 2, 2, 'PE Solid', 28, 0, 48, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(116, 1, 2, 2, 'PE Solid', 28, 0, 60, 0.003, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(117, 1, 2, 2, 'PE Solid', 35, 0, 60, 0.0035, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(118, 1, 2, 2, 'PE Solid', 35, 0, 70, 0.0035, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(119, 1, 2, 1, 'PE Solid', 40, 0, 60, 0.0035, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(120, 1, 2, 1, 'PE Solid', 40, 0, 70, 0.0035, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(121, 1, 2, 1, 'PE Solid', 40, 0, 90, 0.0035, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(122, 1, 2, 1, 'PE Solid', 60, 0, 70, 0.004, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(123, 1, 2, 1, 'PE Solid', 80, 0, 100, 0.004, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(124, 1, 2, 1, 'PE Solid', 80, 0, 120, 0.004, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(125, 1, 2, 1, 'PE Solid', 80, 0, 120, 0.01, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(126, 1, 2, 1, 'PE Solid', 80, 0, 120, 0.012, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(127, 1, 3, 3, 'PE UV', 40, 0, 0, 0.0015, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(128, 1, 3, 3, 'PE UV', 45, 0, 0, 0.0015, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(129, 1, 3, 3, 'PE UV', 60, 0, 0, 0.0015, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(130, 2, 2, 1, 'PP Clear', 4, 0, 6, 0.0015, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(131, 2, 2, 1, 'PP Clear', 4, 0, 7, 0.0015, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(132, 2, 2, 1, 'PP Clear', 6, 0, 8, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(133, 2, 2, 1, 'PP Clear', 6, 0, 10, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(134, 2, 2, 1, 'PP Clear', 6, 0, 12, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(135, 2, 2, 1, 'PP Clear', 7, 0, 10, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(136, 2, 2, 1, 'PP Clear', 7, 0, 12, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(137, 2, 2, 1, 'PP Clear', 7, 0, 15, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(138, 2, 2, 1, 'PP Clear', 7, 0, 20, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(139, 2, 2, 1, 'PP Clear', 7.5, 0, 12, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(140, 2, 2, 2, 'PP Clear', 10, 0, 12, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(141, 2, 2, 2, 'PP Clear', 10, 0, 15, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(142, 2, 2, 2, 'PP Clear', 10, 0, 17, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(143, 2, 2, 2, 'PP Clear', 10, 0, 20, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(144, 2, 2, 2, 'PP Clear', 11, 0, 15, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(145, 2, 2, 2, 'PP Clear', 11, 0, 17, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(146, 2, 2, 2, 'PP Clear', 12, 0, 13, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(147, 2, 2, 2, 'PP Clear', 12, 0, 15, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(148, 2, 2, 2, 'PP Clear', 12, 0, 17, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(149, 2, 2, 2, 'PP Clear', 12, 0, 20, 0.002, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(150, 2, 2, 2, 'PP Clear', 14, 0, 25, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(151, 2, 2, 2, 'PP Clear', 15, 0, 17, 0.004, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(152, 2, 2, 2, 'PP Clear', 15, 0, 19, 0.004, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(153, 2, 2, 2, 'PP Clear', 15, 0, 22, 0.004, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(154, 2, 2, 2, 'PP Clear', 17, 0, 30, 0.004, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(155, 3, 2, 2, 'HD Bag', 20, 7, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(156, 3, 2, 2, 'HD Bag', 22, 7, 30, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(157, 3, 2, 2, 'HD Bag', 22, 7, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(158, 3, 2, 2, 'HD Bag', 25, 8, 35, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(159, 3, 2, 2, 'HD Bag', 25, 8, 38, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(160, 3, 2, 2, 'HD Bag', 25, 8, 40, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(161, 3, 2, 2, 'HD Bag', 37, 8.5, 43, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(162, 3, 2, 2, 'HD Bag', 37, 8.5, 48, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(163, 3, 2, 2, 'HD Bag', 40, 9, 50, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-07 03:10:19'),
(164, 3, 2, 2, 'HD Bag', 40, 9, 54, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(165, 3, 2, 1, 'HD Bag', 44, 12, 55, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(166, 3, 2, 1, 'HD Bag', 44, 12.5, 58, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(167, 3, 2, 1, 'HD Bag', 44, 12.5, 65, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(168, 3, 2, 1, 'HD Bag', 47, 15, 60, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(169, 3, 2, 1, 'HD Bag', 47, 16.5, 60, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(170, 3, 2, 1, 'HD Bag', 50, 16, 70, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(171, 3, 2, 1, 'HD Bag', 50, 17, 75, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(172, 3, 2, 1, 'HD Bag', 60, 18, 80, 0.0025, 2, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(173, 3, 2, 1, 'HD Bag', 44, 12, 55, 0.0025, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(174, 3, 2, 1, 'HD Bag', 44, 12.5, 58, 0.0025, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(175, 3, 2, 1, 'HD Bag', 44, 12.5, 65, 0.0025, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(176, 3, 2, 1, 'HD Bag', 47, 15, 60, 0.0025, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(177, 3, 2, 1, 'HD Bag', 47, 16.5, 60, 0.0025, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(178, 3, 2, 1, 'HD Bag', 50, 17, 75, 0.0025, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(179, 3, 2, 1, 'HD Bag', 60, 18, 80, 0.0025, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(180, 3, 3, 3, 'HD Fruit', 15, 0, 0, 0.0015, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(181, 3, 3, 3, 'HD Fruit', 17, 0, 0, 0.0015, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(182, 3, 3, 3, 'HD Fruit', 20, 0, 0, 0.0015, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(183, 3, 3, 3, 'HD Fruit', 25, 0, 0, 0.0015, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(184, 3, 3, 3, 'HD Fruit', 30, 0, 0, 0.0015, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(185, 3, 3, 3, 'HD Fruit', 35, 0, 0, 0.0015, 1, 1, '2016-01-06 15:15:00', '2016-01-06 08:15:00'),
(186, 3, 2, 1, 'New Product', 28, 20, 16, 0.0033, 2, 1, '2016-01-08 08:59:51', '2016-01-08 02:35:08'),
(187, 2, 3, 1, 'New Product 2', 22, 9, 14, 0.025, 2, 1, '2016-01-08 09:09:41', '2016-01-08 02:09:41'),
(188, 1, 1, 2, 'New Product 3', 5, 9, 7, 0.005, 1, 1, '2016-01-08 10:01:33', '2016-01-08 03:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `reg_id` char(2) NOT NULL,
  `reg_name` varchar(50) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`reg_id`, `reg_name`) VALUES
('AD', 'Andorra'),
('AE', 'United Arab Emirates'),
('AF', 'Afghanistan'),
('AI', 'Anguilla'),
('AL', 'Albania'),
('AM', 'Armenia'),
('AN', 'Netherlands Antilles'),
('AO', 'Angola'),
('AQ', 'Antarctica'),
('AR', 'Argentina'),
('AS', 'American Samoa'),
('AT', 'Austria'),
('AU', 'Australia'),
('AW', 'Aruba'),
('AZ', 'Azerbaijan'),
('BA', 'Bosnia and Herzegowina'),
('BB', 'Barbados'),
('BD', 'Bangladesh'),
('BE', 'Belgium'),
('BF', 'Burkina Faso'),
('BG', 'Bulgaria'),
('BH', 'Bahrain'),
('BI', 'Burundi'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BN', 'Brunei Darussalam'),
('BO', 'Bolivia'),
('BR', 'Brazil'),
('BS', 'Bahamas'),
('BT', 'Bhutan'),
('BV', 'Bouvet Island'),
('BW', 'Botswana'),
('BY', 'Belarus'),
('BZ', 'Belize'),
('CA', 'Canada'),
('CC', 'Cocos (Keeling) Islands'),
('CD', 'Congo, the Democratic Republic of the'),
('CF', 'Central African Republic'),
('CG', 'Congo'),
('CH', 'Switzerland'),
('CI', 'Cote d`Ivoire'),
('CK', 'Cook Islands'),
('CL', 'Chile'),
('CM', 'Cameroon'),
('CN', 'China'),
('CO', 'Colombia'),
('CR', 'Costa Rica'),
('CU', 'Cuba'),
('CV', 'Cape Verde'),
('CX', 'Christmas Island'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DE', 'Germany'),
('DJ', 'Djibouti'),
('DK', 'Denmark'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('DZ', 'Algeria'),
('EC', 'Ecuador'),
('EE', 'Estonia'),
('EG', 'Egypt'),
('EH', 'Western Sahara'),
('ER', 'Eritrea'),
('ES', 'Spain'),
('ET', 'Ethiopia'),
('FI', 'Finland'),
('FJ', 'Fiji'),
('FK', 'Falkland Islands (Malvinas)'),
('FM', 'Micronesia, Federated States of'),
('FO', 'Faroe Islands'),
('FR', 'France'),
('GA', 'Gabon'),
('GB', 'United Kingdom'),
('GD', 'Grenada'),
('GE', 'Georgia'),
('GF', 'French Guiana'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GL', 'Greenland'),
('GM', 'Gambia'),
('GN', 'Guinea'),
('GP', 'Guadeloupe'),
('GQ', 'Equatorial Guinea'),
('GR', 'Greece'),
('GS', 'South Georgia and the South Sandwich Islands'),
('GT', 'Guatemala'),
('GU', 'Guam'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HK', 'Hong Kong'),
('HM', 'Heard and Mc Donald Islands'),
('HN', 'Honduras'),
('HR', 'Croatia (Hrvatska)'),
('HT', 'Haiti'),
('HU', 'Hungary'),
('ID', 'Indonesia'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IN', 'India'),
('IO', 'British Indian Ocean Territory'),
('IQ', 'Iraq'),
('IR', 'Iran (Islamic Republic of)'),
('IS', 'Iceland'),
('IT', 'Italy'),
('JM', 'Jamaica'),
('JO', 'Jordan'),
('JP', 'Japan'),
('KE', 'Kenya'),
('KG', 'Kyrgyzstan'),
('KH', 'Cambodia'),
('KI', 'Kiribati'),
('KM', 'Comoros'),
('KN', 'Saint Kitts and Nevis'),
('KP', 'Korea, Democratic People`s Republic of'),
('KR', 'Korea, Republic of'),
('KW', 'Kuwait'),
('KY', 'Cayman Islands'),
('KZ', 'Kazakhstan'),
('LA', 'Lao People`s Democratic Republic'),
('LB', 'Lebanon'),
('LC', 'Saint LUCIA'),
('LI', 'Liechtenstein'),
('LK', 'Sri Lanka'),
('LR', 'Liberia'),
('LS', 'Lesotho'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('LV', 'Latvia'),
('LY', 'Libyan Arab Jamahiriya'),
('MA', 'Morocco'),
('MC', 'Monaco'),
('MD', 'Moldova, Republic of'),
('MG', 'Madagascar'),
('MH', 'Marshall Islands'),
('MK', 'Macedonia, The Former Yugoslav Republic of'),
('ML', 'Mali'),
('MM', 'Myanmar'),
('MN', 'Mongolia'),
('MO', 'Macau'),
('MP', 'Northern Mariana Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MS', 'Montserrat'),
('MT', 'Malta'),
('MU', 'Mauritius'),
('MV', 'Maldives'),
('MW', 'Malawi'),
('MX', 'Mexico'),
('MY', 'Malaysia'),
('MZ', 'Mozambique'),
('NA', 'Namibia'),
('NC', 'New Caledonia'),
('NE', 'Niger'),
('NF', 'Norfolk Island'),
('NG', 'Nigeria'),
('NI', 'Nicaragua'),
('NL', 'Netherlands'),
('NO', 'Norway'),
('NP', 'Nepal'),
('NR', 'Nauru'),
('NU', 'Niue'),
('NZ', 'New Zealand'),
('OM', 'Oman'),
('PA', 'Panama'),
('PE', 'Peru'),
('PF', 'French Polynesia'),
('PG', 'Papua New Guinea'),
('PH', 'Philippines'),
('PK', 'Pakistan'),
('PL', 'Poland'),
('PM', 'St. Pierre and Miquelon'),
('PN', 'Pitcairn'),
('PR', 'Puerto Rico'),
('PT', 'Portugal'),
('PW', 'Palau'),
('PY', 'Paraguay'),
('QA', 'Qatar'),
('RE', 'Reunion'),
('RO', 'Romania'),
('RU', 'Russian Federation'),
('RW', 'Rwanda'),
('SA', 'Saudi Arabia'),
('SB', 'Solomon Islands'),
('SC', 'Seychelles'),
('SD', 'Sudan'),
('SE', 'Sweden'),
('SG', 'Singapore'),
('SH', 'St. Helena'),
('SI', 'Slovenia'),
('SJ', 'Svalbard and Jan Mayen Islands'),
('SK', 'Slovakia (Slovak Republic)'),
('SL', 'Sierra Leone'),
('SM', 'San Marino'),
('SN', 'Senegal'),
('SO', 'Somalia'),
('SR', 'Suriname'),
('ST', 'Sao Tome and Principe'),
('SV', 'El Salvador'),
('SY', 'Syrian Arab Republic'),
('SZ', 'Swaziland'),
('TC', 'Turks and Caicos Islands'),
('TD', 'Chad'),
('TF', 'French Southern Territories'),
('TG', 'Togo'),
('TH', 'Thailand'),
('TJ', 'Tajikistan'),
('TK', 'Tokelau'),
('TM', 'Turkmenistan'),
('TN', 'Tunisia'),
('TO', 'Tonga'),
('TR', 'Turkey'),
('TT', 'Trinidad and Tobago'),
('TV', 'Tuvalu'),
('TW', 'Taiwan, Province of China'),
('TZ', 'Tanzania, United Republic of'),
('UA', 'Ukraine'),
('UG', 'Uganda'),
('UM', 'United States Minor Outlying Islands'),
('US', 'United States'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VA', 'Holy See (Vatican City State)'),
('VC', 'Saint Vincent and the Grenadines'),
('VE', 'Venezuela'),
('VG', 'Virgin Islands (British)'),
('VI', 'Virgin Islands (U.S.)'),
('VN', 'Viet Nam'),
('VU', 'Vanuatu'),
('WF', 'Wallis and Futuna Islands'),
('WS', 'Samoa'),
('YE', 'Yemen'),
('YT', 'Mayotte'),
('ZA', 'South Africa'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_username` varchar(50) NOT NULL,
  `sales_pwd` varbinary(200) NOT NULL,
  `sales_email` varchar(50) NOT NULL,
  `sales_img` varchar(100) NOT NULL,
  `sales_fname` varchar(50) NOT NULL,
  `sales_lname` varchar(50) NOT NULL,
  `sales_phone` varchar(20) NOT NULL,
  `sales_gender` char(1) DEFAULT 'M',
  `sales_address` text,
  `sales_city` varchar(50) DEFAULT NULL,
  `sales_reg` char(2) DEFAULT NULL,
  `sales_about` text,
  `visibility` tinyint(1) NOT NULL COMMENT '1:Active|2:Deleted',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sales_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `sales_username`, `sales_pwd`, `sales_email`, `sales_img`, `sales_fname`, `sales_lname`, `sales_phone`, `sales_gender`, `sales_address`, `sales_city`, `sales_reg`, `sales_about`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'aldiunanto', '3264353865386463373362303266343364376637636539303539356534383866', 'aldiunanto@yahoo.com', '', 'Aldi', 'Unanto', '087770958005', 'M', 'Depok', 'Depok', 'ID', 'Langganan', 1, '2016-01-12 17:06:34', '2016-01-12 11:00:17'),
(2, 'tossaro', '2d58e8dc73b02f43d7f7ce90595e488f', 'hamzah@tossaro.com', '', 'Hamzah', 'Tossaro', '080911112222', 'M', 'Depok', 'Depok', 'ID', 'Langganan', 2, '2016-01-12 17:06:34', '2016-01-12 11:00:17'),
(4, 'hanif', '72e74f574535bdc82cf4b99f8fc064e1', 'muhammad@hanif.com', '', 'Muhammad', 'Hanif', '932048298397', 'M', 'Alamat Palsu', 'Alien', 'UZ', 'Yoo hooo', 2, '2016-01-12 17:10:17', '2016-01-12 15:23:00'),
(5, 'tossaro', 'd41d8cd98f00b204e9800998ecf8427e', 'hamzah@tossaro.com', '', 'Hamzah', 'Tossaro', '3208398319', 'M', 'Depok', 'Depok', 'ID', 'Depok', 1, '2016-01-12 18:01:06', '2016-01-12 14:25:10'),
(6, 'mahendra', '9cce854acb59b5845c23bbbe68d823a4', 'mahendra@xacti.com', '', 'Mahendra', 'Xacti', '243435', 'F', 'Depok', 'Depok', 'ID', 'Depok', 1, '2016-01-12 22:21:38', '2016-01-12 16:09:12'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '0', '', '', '0', '', 1, '2016-01-13 09:05:27', '2016-01-13 02:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `salesorder`
--

CREATE TABLE IF NOT EXISTS `salesorder` (
  `so_id` int(11) NOT NULL AUTO_INCREMENT,
  `so_type` tinyint(1) NOT NULL COMMENT '1:ppn|2:non',
  `so_number` varchar(20) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `so_date` date NOT NULL,
  `so_po_number` varchar(50) NOT NULL,
  `so_deliv_req` date NOT NULL,
  `so_pay_terms` int(11) NOT NULL,
  `visibility` tinyint(1) NOT NULL COMMENT '1:active|2:deleted',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`so_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salesorder`
--

INSERT INTO `salesorder` (`so_id`, `so_type`, `so_number`, `sales_id`, `cust_id`, `so_date`, `so_po_number`, `so_deliv_req`, `so_pay_terms`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 1, 'P.0001/I-2016', 1, 1, '2016-01-12', 'P/123/JIU/16', '2016-01-18', 4, 1, '2016-01-12 09:35:00', '2016-01-13 07:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `salesorder_sub`
--

CREATE TABLE IF NOT EXISTS `salesorder_sub` (
  `sos_id` int(11) NOT NULL AUTO_INCREMENT,
  `so_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `sos_qty` double NOT NULL,
  PRIMARY KEY (`sos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `salesorder_sub`
--

INSERT INTO `salesorder_sub` (`sos_id`, `so_id`, `prod_id`, `sos_qty`) VALUES
(1, 1, 1, 210),
(2, 1, 3, 152);

-- --------------------------------------------------------

--
-- Table structure for table `seal_type`
--

CREATE TABLE IF NOT EXISTS `seal_type` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(20) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seal_type`
--

INSERT INTO `seal_type` (`st_id`, `st_name`) VALUES
(1, 'Single'),
(2, 'Double'),
(3, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_status` smallint(1) NOT NULL,
  `user_uniq_name` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_fullname` varchar(128) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_status`, `user_uniq_name`, `user_email`, `user_fullname`, `user_password`, `created_at`, `updated_at`) VALUES
(1, 2, 'tossaro', 'hamzah.tossaro@gmail.com', 'Hamzah Tossaro', '21232f297a57a5a743894a0e4a801fc3', '2016-01-12 13:07:38', '2016-01-12 07:00:35'),
(2, 2, 'aldiunanto', 'aldiunanto@gmail.com', 'Aldi Unanto', '3eb82b3e86ccf2b013f2b2e8b717ffdd', '2016-01-12 13:07:38', '2016-01-12 07:00:35'),
(3, 0, '', 'bejo@yahoo.com', 'Bejo aja', '', '2016-01-12 15:18:37', '2016-01-12 08:18:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
