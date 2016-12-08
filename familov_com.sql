-- update test
-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 05 Décembre 2016 à 22:52
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `familov_com`
--
CREATE DATABASE IF NOT EXISTS `familov_com` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `familov_com`;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `website_title` varchar(100) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keywards` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`, `website_title`, `meta_desc`, `meta_keywards`) VALUES
(1, 'admin', 'admin', 'Familov - Sharing happiness', 'Familov - Sharing happiness', 'Familov - Sharing happiness');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `customer_id`) VALUES
(1, 'Food', 1),
(2, 'Drink', 1),
(3, 'For baby', 1),
(4, 'Voucher', 1),
(5, 'Body care', 3),
(6, 'Love', 3),
(7, 'Breakfast', 0),
(8, 'Health', 0),
(9, 'School', 0);

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `city_name`) VALUES
(17, 22, 'Bafoussam'),
(19, 1, 'Nairobi'),
(21, 22, 'Yaounde'),
(23, 22, 'Dschang');

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  `imageloc` varchar(255) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `imageloc`) VALUES
(1, 'Kenia', ''),
(22, 'Cameroon', ''),
(24, 'Ivory Coast', ''),
(25, 'Senegal', '');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_phone` varchar(50) NOT NULL,
  `if_vendor` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `recp_name` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `home_address` text NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `shop_name` text NOT NULL,
  `shop_address` text NOT NULL,
  `shop_logo` text NOT NULL,
  `shop_banner` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `customers`
--

INSERT INTO `customers` (`customer_id`, `sender_phone`, `if_vendor`, `username`, `lastname`, `recp_name`, `password`, `email_address`, `home_address`, `phone_number`, `city_id`, `country_id`, `shop_name`, `shop_address`, `shop_logo`, `shop_banner`, `status`) VALUES
(35, '07973713747', 0, 'Nick', '', '', 'australia82', 'nick@e-mediastudios.com', '', '', 0, 0, '', '', '', '', 'inactive'),
(37, '', 0, 'Tester', '', '', 'test123', 'test@familov.com', '', '', 0, 0, '', '', '', '', 'active'),
(38, '0714485310', 0, 'Jacqueline ', '', '', 'iloveromeo99', 'odhiambojacque6@gmail.com', '', '', 0, 0, '', '', '', '', 'inactive'),
(40, '01924674122', 0, 'Mahamudul', 'Hasan', '', '12345678', 'mahedi.hassan1910@gmail.com', '', '', 0, 0, '', '', '', '', 'inactive'),
(41, ' 8801924674122', 0, 'Mahamudul', 'Hasan', '', 'a', 'mahamudul.duet87@gmail.com', '', '', 0, 0, '', '', '', '', 'active'),
(47, ' 4917676570578', 0, 'leonnel Christ', 'fonkwe', 'Mama', 'test1234', 'fleonnel@gmail.com', 'asdada', 'undefined', 0, 0, '', '', '', '', 'active'),
(48, ' 237696221450', 0, 'frank', 'Aurel', 'Arielle', 'password2006', 'bfaurel@gmail.com', '', 'undefined', 0, 0, '', '', '', '', 'active'),
(49, ' 237697662979', 0, 'bertrand', 'kouam', '', 'azerty10', 'kbertrant@yahoo.fr', '', '', 0, 0, '', '', '', '', 'inactive'),
(50, ' 237697662979', 0, 'kbertrant', 'kaurel', '', 'azerty10', 'kbertrant@gmail.com', '', '', 0, 0, '', '', '', '', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `random_rick` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `generate_code` text NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `delivery_charges` int(11) NOT NULL,
  `order_view` int(11) NOT NULL DEFAULT '0',
  `country_id` varchar(255) NOT NULL,
  `city_id` varchar(255) NOT NULL,
  `shop_id` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1074 ;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `ip_address`, `product_id`, `quantity`, `random_rick`, `date_time`, `generate_code`, `order_status`, `delivery_charges`, `order_view`, `country_id`, `city_id`, `shop_id`) VALUES
(810, 13, '88.207.220.247', 30, 1, 'expire', '2016-08-29 05:53:12', 'YK5uRX3xa7', 'Buy', 2, 1, '1', '19', '2'),
(811, 13, '88.207.220.247', 29, 1, 'expire', '2016-08-29 05:53:13', 'YK5uRX3xa7', 'Buy', 2, 1, '1', '19', '2'),
(812, 13, '88.207.220.247', 25, 1, 'expire', '2016-08-29 05:53:15', 'YK5uRX3xa7', 'Buy', 2, 1, '1', '19', '2'),
(813, 13, '88.207.220.247', 29, 1, 'expire', '2016-08-29 06:28:42', '7IZVTIsfmy', 'Buy', 2, 1, '1', '19', '2'),
(820, 13, '185.54.205.44', 29, 1, 'FWZCGKWusU', '2016-08-29 19:13:42', '', '', 0, 1, '1', '19', '2'),
(821, 13, '185.54.205.44', 25, 1, 'I1i8FCsIJM', '2016-08-29 19:13:43', '', '', 0, 1, '1', '19', '2'),
(897, 0, '86.166.65.132', 82, 1, 'UgPKxn9QOa', '2016-09-08 08:56:32', '', '', 0, 1, '1', '19', '8'),
(898, 0, '86.166.65.132', 82, 1, 'WFdvOd0uw0', '2016-09-08 08:57:44', '', '', 0, 1, '', '', ''),
(910, 0, '95.91.202.127', 82, 1, '62pHLSEeP0', '2016-09-09 18:37:55', '', '', 0, 1, '1', '19', '8'),
(917, 13, '92.222.239.77', 81, 1, 'expire', '2016-09-18 19:38:46', 'MYPZQjSr7f', 'Delivered', 2, 1, '1', '19', '8'),
(918, 13, '92.222.239.77', 80, 1, 'expire', '2016-09-18 19:38:58', 'MYPZQjSr7f', 'Delivered', 2, 1, '1', '19', '8'),
(919, 13, '92.222.239.77', 81, 1, 'expire', '2016-09-18 19:39:13', 'MYPZQjSr7f', 'Delivered', 2, 1, '', '', ''),
(926, 13, '193.17.22.35', 29, 1, 'expire', '2016-09-26 16:49:58', '8nRkDYAZ6C', 'Buy', 2, 1, '22', '17', '2'),
(927, 13, '193.17.22.35', 25, 1, 'expire', '2016-09-26 16:49:59', '8nRkDYAZ6C', 'Buy', 2, 1, '22', '17', '2'),
(928, 13, '193.17.22.35', 23, 1, 'expire', '2016-09-26 16:50:01', '8nRkDYAZ6C', 'Buy', 2, 1, '22', '17', '2'),
(929, 13, '193.17.22.35', 29, 1, 'expire', '2016-09-26 16:55:36', 'lr7uluZW2E', 'Cancel', 2, 1, '22', '17', '2'),
(930, 13, '193.17.22.35', 25, 1, 'expire', '2016-09-26 16:55:37', 'lr7uluZW2E', 'Cancel', 2, 1, '22', '17', '2'),
(931, 13, '193.17.22.35', 23, 1, 'expire', '2016-09-26 16:55:39', 'lr7uluZW2E', 'Cancel', 2, 1, '22', '17', '2'),
(935, 13, '193.17.22.35', 29, 1, 'expire', '2016-09-26 17:01:00', 'OOkSGPNtK0', 'Cancel', 2, 1, '22', '17', '2'),
(936, 13, '193.17.22.35', 30, 1, 'expire', '2016-09-26 17:01:01', 'OOkSGPNtK0', 'Cancel', 2, 1, '22', '17', '2'),
(940, 13, '193.17.22.35', 30, 1, 'expire', '2016-09-26 17:08:47', 'FRUUJJ65xM', 'Cancel', 2, 1, '22', '17', '2'),
(941, 13, '193.17.22.35', 29, 1, 'expire', '2016-09-26 17:08:48', 'FRUUJJ65xM', 'Cancel', 2, 1, '22', '17', '2'),
(942, 13, '193.17.22.35', 30, 1, 'expire', '2016-09-26 17:08:49', 'FRUUJJ65xM', 'Cancel', 2, 1, '22', '17', '2'),
(943, 13, '193.17.22.35', 25, 1, 'expire', '2016-09-26 17:08:50', 'FRUUJJ65xM', 'Cancel', 2, 1, '22', '17', '2'),
(944, 13, '193.17.22.35', 29, 1, 'expire', '2016-09-26 17:48:33', 'XuDEjTuK7s', 'Cancel', 2, 1, '22', '17', '2'),
(945, 13, '193.17.22.35', 25, 1, 'expire', '2016-09-26 17:48:34', 'XuDEjTuK7s', 'Cancel', 2, 1, '22', '17', '2'),
(946, 13, '193.17.22.35', 23, 1, 'expire', '2016-09-26 17:48:37', 'XuDEjTuK7s', 'Cancel', 2, 1, '22', '17', '2'),
(947, 13, '193.17.22.35', 29, 1, 'expire', '2016-09-26 19:01:02', 'CT5yreE1RA', 'Cancel', 2, 1, '22', '17', '2'),
(948, 13, '193.17.22.35', 25, 1, 'expire', '2016-09-26 19:01:03', 'CT5yreE1RA', 'Cancel', 2, 1, '22', '17', '2'),
(949, 13, '193.17.22.35', 23, 1, 'expire', '2016-09-26 19:01:05', 'CT5yreE1RA', 'Cancel', 2, 1, '22', '17', '2'),
(950, 13, '193.17.22.36', 23, 1, 'expire', '2016-09-27 15:14:41', 'RFpf5djcOH', 'Buy', 2, 1, '22', '17', '2'),
(951, 13, '193.17.22.36', 24, 1, 'expire', '2016-09-27 15:14:42', 'RFpf5djcOH', 'Buy', 2, 1, '22', '17', '2'),
(952, 13, '193.17.22.36', 25, 1, 'expire', '2016-09-27 15:14:44', 'RFpf5djcOH', 'Buy', 2, 1, '22', '17', '2'),
(953, 0, '95.91.207.121', 25, 1, 'mN9kY8KYQ0', '2016-09-27 19:12:13', '', '', 0, 1, '22', '17', '2'),
(954, 0, '95.91.207.121', 29, 1, 'WofPSebApj', '2016-09-27 19:12:14', '', '', 0, 1, '22', '17', '2'),
(955, 0, '95.91.207.121', 30, 1, '91YxWXS3nC', '2016-09-27 19:12:15', '', '', 0, 1, '22', '17', '2'),
(956, 0, '95.91.207.121', 11, 1, 'FJqP4oXPnO', '2016-09-27 19:12:16', '', '', 0, 1, '22', '17', '2'),
(957, 13, '178.200.221.145', 30, 1, 'expire', '2016-10-02 10:19:11', 'wJyw6ffwGi', 'Buy', 2, 1, '22', '17', '2'),
(958, 13, '178.200.221.145', 29, 1, 'expire', '2016-10-02 10:19:14', 'wJyw6ffwGi', 'Buy', 2, 1, '22', '17', '2'),
(959, 13, '178.200.221.145', 25, 1, 'expire', '2016-10-02 10:19:18', 'wJyw6ffwGi', 'Buy', 2, 1, '22', '17', '2'),
(960, 13, '178.200.221.145', 24, 1, 'expire', '2016-10-02 10:19:22', 'wJyw6ffwGi', 'Buy', 2, 1, '22', '17', '2'),
(961, 13, '178.200.221.145', 23, 1, 'expire', '2016-10-02 10:19:25', 'wJyw6ffwGi', 'Buy', 2, 1, '22', '17', '2'),
(964, 13, '212.18.216.186', 23, 1, 'expire', '2016-10-17 11:35:58', '1KT2ISOiEN', 'Cancel', 2, 1, '22', '17', '2'),
(965, 13, '212.18.216.186', 11, 1, 'expire', '2016-10-17 11:35:59', '1KT2ISOiEN', 'Cancel', 2, 1, '22', '17', '2'),
(966, 13, '212.18.216.186', 23, 1, 'expire', '2016-10-17 11:36:11', '1KT2ISOiEN', 'Cancel', 2, 1, '', '', ''),
(967, 13, '212.18.216.186', 23, 1, 'expire', '2016-10-17 11:36:12', '1KT2ISOiEN', 'Cancel', 2, 1, '', '', ''),
(977, 37, '212.18.216.186', 29, 1, 'expire', '2016-10-21 10:10:24', 'AXlA4XzAnV', 'Wait', 2, 1, '22', '17', '2'),
(978, 37, '212.18.216.186', 25, 1, 'expire', '2016-10-21 10:10:26', 'AXlA4XzAnV', 'Wait', 2, 1, '22', '17', '2'),
(990, 37, '212.18.216.186', 30, 1, 'expire', '2016-10-25 09:18:43', 'zrMs1OEbnQ', 'Wait', 2, 1, '22', '17', '2'),
(1027, 42, '212.18.216.186', 30, 1, 'expire', '2016-10-28 06:57:01', 'JEo0kYwXfz', 'Buy', 2, 1, '22', '17', '2'),
(1028, 42, '212.18.216.186', 29, 1, 'expire', '2016-10-28 06:57:03', 'JEo0kYwXfz', 'Buy', 2, 1, '22', '17', '2'),
(1029, 44, '212.18.216.186', 29, 1, 'expire', '2016-10-28 07:46:07', 'gUwJAxyb0V', 'Delivered', 2, 1, '22', '17', '2'),
(1030, 44, '212.18.216.186', 25, 1, 'expire', '2016-10-28 07:46:08', 'gUwJAxyb0V', 'Delivered', 2, 1, '22', '17', '2'),
(1042, 45, '212.18.216.186', 30, 1, 'expire', '2016-10-28 11:12:34', 'D4mg0z0a88', 'Delivered', 2, 1, '22', '17', '2'),
(1046, 0, '41.202.219.64', 30, 1, 'CZRJ3V3alm', '2016-11-06 08:33:17', '', '', 0, 1, '22', '17', '2'),
(1050, 47, '193.17.22.35', 30, 1, 'ev6z94KBq6', '2016-11-07 19:14:18', '', '', 0, 1, '22', '17', '2'),
(1051, 47, '193.17.22.35', 29, 1, 'KUbrH4foPc', '2016-11-07 19:14:19', '', '', 0, 1, '22', '17', '2'),
(1066, 48, '41.202.219.72', 69, 1, 'expire', '2016-11-08 17:43:54', 'L1HseArRkN', 'Wait', 2, 1, '1', '19', '8'),
(1067, 48, '41.202.219.72', 68, 1, 'expire', '2016-11-08 17:44:12', 'L1HseArRkN', 'Wait', 2, 1, '1', '19', '8'),
(1068, 48, '41.202.219.72', 29, 1, 'IdshxLO9eo', '2016-11-08 20:00:34', '', '', 0, 1, '22', '17', '2'),
(1069, 47, '95.91.202.246', 29, 1, 'expire', '2016-11-08 20:26:33', 'AdbTX1N3YY', 'Wait', 2, 1, '22', '17', '2'),
(1070, 47, '95.91.202.246', 25, 1, 'expire', '2016-11-08 20:26:34', 'AdbTX1N3YY', 'Wait', 2, 1, '22', '17', '2'),
(1071, 47, '95.91.202.246', 30, 1, 'expire', '2016-11-08 20:33:34', 'BS2btDckbR', 'Wait', 2, 1, '22', '17', '2'),
(1072, 47, '95.91.202.246', 30, 1, 'expire', '2016-11-08 20:33:35', 'BS2btDckbR', 'Wait', 2, 1, '22', '17', '2'),
(1073, 0, '212.18.216.186', 82, 1, 'AE4KZmjywo', '2016-11-09 07:37:33', '', '', 0, 1, '1', '19', '8');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_short_desc` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_price_currency_id` int(11) NOT NULL,
  `product_prices` varchar(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`product_id`, `shop_id`, `category_id`, `customer_id`, `product_name`, `product_short_desc`, `product_desc`, `product_image`, `product_price_currency_id`, `product_prices`) VALUES
(1, 2, 1, 1, 'Jasmine Rice 10 Kg', 'Lundberg White Jasmine Rice', '<div><span style="font-size:17px !important">About the Product</span></div>\r\n\r\n<div style="margin-left:-6px; margin-right:10px">\r\n<div>\r\n<div>\r\n<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">Whole Grain Goodness</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">One, 32-ounce bag</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Lundberg practices water-conserving irrigation.</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'OCT13_IMG_1192_1463142183.JPG', 1, '6,5'),
(2, 2, 1, 1, 'Pure Canola Oil  -1500 FCFA', 'Crisco Pure Canola Oil, 48 Fl Oz', '<div><span style="font-size:17px !important">About the Product</span></div>\r\n\r\n<div style="margin-left:-6px; margin-right:10px">\r\n<div>\r\n<div>\r\n<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">The light flavor and texture of Crisco Pure Canola Oil allows for versatility in the kitchen. Use it for all your cooking needs from frying to baking or in a dressing or marinade.</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Light taste, never greasy</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">A cholesterol free food</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '8888051999236_0181_1444373912009_1463142028.jpg', 1, '1,30'),
(3, 2, 1, 1, 'Barilla Spaghetti 1,5 kg', 'Barilla Pasta, Spaghetti, 32 Ounce', '<div><span style="font-size:17px !important">About the Product</span></div>\r\n\r\n<div style="margin-left:-6px; margin-right:10px">\r\n<div>\r\n<div>\r\n<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">Most popular shape in Italy gets its name from the word spaghi meaning &#39;lengths of cord&#39;</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Cooks in 9 minutes</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Is delicious with any sauce but especially good with fish or oil-based sauces and carbonara</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Good source of thiamin, folic acid, iron, riboflavin and niacin</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Product of USA, Kosher certified</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '8009004860247_0235_1454694822206_1463141912.jpg', 1, '1,5'),
(4, 2, 1, 1, 'Pasta 1 kg', 'Barilla Angel Hair Pasta, 16 Ounce (Pack of 20)', '<div><span style="font-size:17px !important">About the Product</span></div>\r\n\r\n<div style="margin-left:-6px; margin-right:10px">\r\n<div>\r\n<div>\r\n<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">Delicate, thin pasta shape that adds a lightness to any pasta dish</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Cooks in 8 minutes</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Pairs best with light sauces of any flavor</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Good source of thiamin, folic acid, iron, riboflavin and niacin</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Product of USA, Kosher certified</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '8005978090000-3_1433218732581_1463141727.jpg', 1, '1,20'),
(5, 2, 3, 1, 'Hipp Baby food', 'Sommer Genuss Pink Guave in Apfel-Banane ab 6. Monat, 190 g', '<div style="margin-right:438px">\r\n<div>\r\n<div>\r\n<div style="margin-left:-6px; margin-right:10px">\r\n<div>\r\n<div>\r\n<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">Please be aware that unless expressly indicated otherwise, Cooking Marvellous are not the the manufacturer of this product. Product packaging may vary from what is shown on this listing. We recommend that you do not rely solely on the information presented on our listing. Please always read the labels, warning and directions provided before using or consuming the product.</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n</div>\r\n\r\n<div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<div>&nbsp;</div>', '4062300277410_13_1431686876505_1463141604.jpg', 1, '1,10'),
(6, 2, 5, 1, 'NIVEA  Body Lotion', 'NIVEA Smooth Daily Moisture Body Lotion 16.9 Ounce', '<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">Formerly known as &quot;NIVEA Smooth Sensation Body Lotion&quot;. You may receive either product depending on availability.</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Specifically formulated for dry skin, Smooth Daily Moisture Lotion delivers intensive moisturization in a unique light, fast absorbing formula</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Enriched with Shea Butter, it provides triple action moisturization for the most touchable skin you&#39;ve ever imagined.</span></li>\r\n</ul>', '4005808247455_0082_1457593176543_1463141413.jpg', 1, '3,5'),
(7, 2, 2, 1, 'smartwater Prenuim', 'smartwater, 6 ct, 1L Bottle', '<div style="margin-right:438px">\r\n<div>\r\n<div>\r\n<div style="margin-left:-6px; margin-right:10px">\r\n<div>\r\n<div>\r\n<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">Pack of six, 1L per bottle of vapor distilled water with electrolytes added for taste</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Pure and crisp like from a cloud</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Perfect size for on-the-go hydration</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">smartwater is the #1 premium water in the country!</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n</div>\r\n\r\n<div>\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>\r\n<div>&nbsp;</div>\r\n</div>', '4001513100115_0006_1453690963178_1463141327.jpg', 1, '3,5'),
(8, 2, 1, 1, 'Lundberg Basmati Rice 15 Kg', 'Lundberg Brown Basmati Rice', '<div><span style="font-size:17px !important">About the Product</span></div>\r\n\r\n<div style="margin-left:-6px; margin-right:10px">\r\n<div>\r\n<div>\r\n<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">One, 32-ounce bag</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Eco-Farmed rice is grown with limited chemicals, allowing rice to compete with weeds and pests.</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Lundberg practices crop rotation, utilizing nitrogen-fixing crops for soil enrichment.</span></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'IMG_8583_1463142441.JPG', 1, '15'),
(11, 2, 3, 3, 'Pampers Swaddlers Newborn', 'Pampers Swaddlers Newborn 240 Diapers (12 packs of 20)', '<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">Pampers Blankie Soft comfort and protection</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Pampers Swaddlers diapers are the #1 Choice of US Hospitals (based on sales of the newborn hospital diaper)</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Swaddlers wetness indicator tells you when your baby might need a change</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Our unique Absorb Away Liner pulls wetness and mess away from your baby&#39;s skin</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Extra Absorb Channels to help distribute wetness evenly for up to 12 hours of protection</span></li>\r\n</ul>', '037000870975_0030_1441916478978_1463141057.jpg', 1, '9,99'),
(15, 5, 4, 0, 'Voucher  Student Bag 10â‚¬', 'Student Pack', '', 'free_psd_discount_cards_1463639625.png', 0, '10'),
(16, 5, 4, 0, 'Voucher Emergency Bag 35â‚¬', 'Emergency Bag', '', 'free_psd_discount_cards_1463639582.png', 0, '30'),
(18, 4, 8, 0, 'Pregnant Woman Consultation', 'For Pregnant', '', 'fotolia_104267675_1463147323.jpg', 0, '15'),
(19, 4, 8, 0, 'Baby consultation', 'For baby', '', 'fotolia_50865159_1463147677.jpg', 0, '13'),
(20, 4, 8, 0, 'Consultation Medicale Generaliste', 'consultation mÃ©dicale', '', 'fotolia_101170007_1463147942.jpg', 0, '15'),
(22, 5, 4, 0, 'Voucher Family Bag 50 â‚¬', 'Voucher', '', 'free_psd_discount_cards_1463639892.png', 0, '50'),
(23, 2, 1, 0, 'Oil 2.5 Liter', 'H&S - ErdnussÃ¶l - 25.5 Liter', '<ul style="margin-left:18px; margin-right:0px">\r\n	<li><span style="color:rgb(17, 17, 17)">A cholesterol free food</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">Light taste, never greasy</span></li>\r\n	<li><span style="color:rgb(17, 17, 17)">0 grams trans fat per serving</span></li>\r\n</ul>', '88880519992290160_1444716177104_1463641875.jpg', 0, '1,7'),
(24, 2, 5, 0, 'Fluoride Toothpaste', 'Colgate Sensitive Pro-Relief Fluoride Toothpaste', '<pre>\r\nColgate Sensitive Pro-Relief gives you the freedom to forget about tooth sensitivity. It contains clinically proven Pro-Argin technology which provides instant and lasting sensitivity relief. Colgate Sensitive Pro-Relief works by plugging the channels to block tooth sensitivity and with regular use, it builds a long-lasting protective barrier that acts like a seal against sensitivity. For instant relief, just apply directly to the sensitive tooth with finger tip and gently massage for one minute.</pre>', 'img_5625_1463642174.jpg', 0, '2,30'),
(25, 2, 1, 0, 'Pasta', 'Pasta', '', 'pates-pasta_1463642253.jpg', 0, '1,5'),
(26, 6, 1, 0, 'rice', 'rice', '', 'IMG_8583_1463642382.JPG', 0, '9,99'),
(27, 6, 9, 0, 'School Bag', 'School Bag', '', '514OsLp7-bL_1463642578._AC_UL200_SR160,200_', 0, '15,52'),
(28, 6, 2, 0, 'Water 6Pack', 'water', '<p>water</p>', '4001513100115_0006_1453690963178_1463642665.jpg', 0, '2,50'),
(29, 2, 2, 0, 'Orange Juice', 'Orange Juice', '', 'IMG0093_1411694330802_1463642757.JPG', 0, '1,20'),
(30, 2, 1, 0, 'Bread 220 gr test', 'Gardenia Half Baguette Plain', '', 'IMG2808_1414302780311_1463642845.JPG', 0, '0,01'),
(31, 8, 2, 0, 'Beer', '6pack', '', 'Tusker_beer_1473070198.jpg', 0, '12'),
(32, 8, 2, 0, 'Rosa Wine Four Cousins 1,5L', 'Rosa wine', '', 'Four_cousins_wine_1473070313.jpg', 0, '6,85'),
(33, 8, 2, 0, 'Juice (Highlands)', 'Juice(Highlands)', '', 'Highlands_juice_1473070579.jpg', 0, '2,7'),
(34, 8, 2, 0, 'Fresh Juice (Del Monte)', 'Fresh Juice (Del Monte)', '', 'del-monte-mango-splash-fruit-drink-500x500_1473070867.jpg', 0, '2'),
(35, 8, 3, 0, 'Cerelac (Nestle) 350g', 'Highly nutritous for babies from 6 months onwords', '<p>Highly nutritous for babies from 6 months onwords</p>', 'Cerelac_1473071032.jpg', 0, '5,9'),
(36, 8, 1, 0, '30 Eggs', '30 Fresh Eggs', '', 'bb_products_011_1473071248.jpg', 0, '3,5'),
(37, 8, 3, 0, 'Wipes (Pampers) 64 pieces', 'Baby fresh wipes with soft grip texture.', '<p>Baby fresh wipes with soft grip texture.</p>', 'a067270_001_1473072090.jpg', 0, '25'),
(38, 8, 3, 0, 'Millet pure health (Toto afya ) 1kg', 'Organic wimbi with Humanized milk (Toto afya wimbi)', '<p>Organic wimbi with Humanized milk</p>', '1418650115_1473072392.png', 0, '1'),
(39, 8, 7, 0, 'Milk Powder (Miksi) 2kg', 'Milk Powder (Miksi)', '<p>Milk Powder (Miksi)</p>', 'Miksi_milk_powder_1473074412.jpg', 0, '15,50'),
(40, 8, 5, 0, 'Shower gel (Nivea) 250 ml', 'Shower gel (Nivea) 250 ml Makes your skin smooth and velvety with every wash.', '<p>Makes your skin smooth and velvety with every wash.</p>', 'Nivea_shower_gel_1473074532.jpg', 0, '2,45'),
(41, 8, 5, 0, 'Fa Deo 250 ml', 'Offers valuable care with fresh aromatic fragrances', '<p>Offers valuable care with fresh aromatic fragrances&nbsp;</p>', 'Fa_exotic_garden_1473075024.jpg', 0, '2,50'),
(42, 8, 5, 0, 'Nivea Body Lotion smooth - 400ml', 'Nourishes rough skin for touchably smoother softer skin - Daily moisture', '', 'Nivea_lotion_1473074927.jpg', 0, '3,95'),
(43, 8, 5, 0, 'Oral Care (Colgate)', 'Maximum cavity protection clinically proven to strengthen and repair weak spots in the enamel.', '<p>Maximum cavity protection clinically proven to strengthen and repair weak spots in the enamel.</p>', 'ColgateToothpaste_1473075119.jpg', 0, '3,5'),
(44, 8, 5, 0, 'Vaseline 400ml', 'Proven to deeply moisturize dry and cracked skin and keeping dry skin healed for three weeks', '<p>Proven to deeply moisturize dry and cracked skin and keeping dry skin healed for three weeks</p>', 'vaseline_1473075370.JPG', 0, '3,5'),
(45, 8, 5, 0, 'Petroleum jelly(Vaseline) 250 ml', '100% pure petroleum jelly, triple purified, gentle on skin, hypoallergenic and non-comedogenic.', '<p>100% pure petroleum jelly, triple purified, gentle on skin, hypoallergenic and non-comedogenic.</p>', 'vaseline-original-vaseline___3_1473075490.jpg', 0, '2,5'),
(46, 8, 5, 0, 'Deo Nivea spray 150 ml', 'Deodorant(Nivea spray ) Double effect with senses', '<p>With Avacado extracts to help give you smoother underarms for longer</p>', 'Nivea_double_effect_1473075624.jpg', 0, '2,5'),
(47, 8, 5, 0, 'Fa Spray Exotic Garden 48H Protect', 'with 48hr protection no white marks skin friendly formular dermotologically proven - 150ml', '<p>with 48hr protection no white marks skin friendly formular dermotologically proven&nbsp;- 150ml</p>', 'Fa_exotic_garden_1473075897.jpg', 0, '2,70'),
(48, 8, 5, 0, 'Tissue tena twin pack', 'Tissue tena twin pack', '<p>Tissue tena twin pack</p>', 'Tena_twin_pack_1473075986.jpg', 0, '0,9'),
(49, 8, 5, 0, 'Washing powder soap(Omo) 1kg', '100% stain removal dissolves  rapidly penetrates deeply to the target root of stains lifting stains away', '<p>100% stain removal dissolves &nbsp;rapidly penetrates deeply to the target root of stains lifting stains away</p>', 'Omo_1473076212.jpg', 0, '2,30'),
(50, 8, 5, 0, 'Bar Soap (Sunlight) - 700g', 'suitable for delicate fabrics, stains, and collars and cuffs', '<p>suitable for delicate fabrics, stains, and collars and cuffs</p>', 'Sunlight_bar_soap_1473076297.jpg', 0, '1,20'),
(51, 8, 5, 0, 'Menengai - 800g', 'Fortified with glycerine to ensure your hands are always soft after use', '<p>Fortified with glycerine to ensure your hands are always soft after use</p>', 'menengai-bar-soap-cream-500g_1473076626.jpg', 0, '1,20'),
(52, 8, 7, 0, 'Cereals(weetabix) - 900g', 'Nutritionally packed tasty breakfast thatâ€™s brimming with wholegrain and versatile too.', '<p>Nutritionally packed tasty breakfast that&rsquo;s brimming with wholegrain and versatile too.</p>', 'Weetabix_1473076762.jpg', 0, '4,95'),
(53, 8, 7, 0, 'Cornflakes( Magic time) - 500g', 'Provides 10 times Vitamins and minerals', '<p>Provides 10 times Vitamins and minerals</p>', 'Cornflakes_1473077021.jpg', 0, '4,30'),
(54, 8, 7, 0, 'Tea Leaves (Baraka Chai) 100bags', 'Purely grown organically specially processed, tested, blended and packed in Kenya', '<p>Purely grown organically specially processed, tested, blended and packed in Kenya</p>', 'gcbskus_05_1473077452.jpg', 0, '2,5'),
(55, 8, 7, 0, 'Butter (unsalted ) - 500g', 'Butter (unsalted )', '<p>Butter (unsalted )</p>', 'Unsalted_butter_1473078342.jpg', 0, '4,99'),
(56, 8, 7, 0, 'Butter ( salted ) - 500g', 'Butter (salted )', '', 'Salted_butter_1473078386.jpg', 0, '4,99'),
(57, 8, 7, 0, 'Mumias White Sugar 2Kg', 'Mumias White Sugar', '', 'Mumias_sugar_1473078442.jpg', 0, '2,5'),
(58, 8, 7, 0, 'Nestcafe Coffee', 'A blend of freshly packed beans roasted to perfection to create an exceptionally smooth coffee. Simply the best to kickstart your morning', '<p>A blend of freshly packed beans roasted to perfection to create an exceptionally smooth coffee. Simply the best to kickstart your morning</p>', 'Nescafe_coffee_1473078518.jpg', 0, '7,20'),
(59, 8, 7, 0, 'Biscuit (Nuvita) -1kg', 'Biscuit (Nuvita)', '<p>Biscuit (Nuvita)</p>', 'Nuvita_biscuits_1473078807.jpg', 0, '2,95'),
(60, 8, 7, 0, 'Assorted  biscuits  - 1Kg', 'Assorted biscuits House of manji', '<p>Assorted biscuits House of manji</p>', 'Assorted_biscuits_1473078925.jpg', 0, '3,5'),
(61, 8, 7, 0, 'Cake - 750g', 'Marble cake', '', '6164001029386_1473079137.jpg', 0, '1,60'),
(62, 8, 7, 0, 'Bread( Festive Natures gold)', 'Bread( Festive Natures gold) 600g', '<p>Bread( Festive Natures gold)</p>', 'Natures_Gold_bread_1473079198.jpg', 0, '0,80'),
(63, 8, 7, 0, 'Spread (Blue band) - 1kg', 'Original source of vitamin A medium fat spread', '<p>Original source of vitamin A medium fat spread</p>', 'Blue_band_1473079322.jpg', 0, '2,99'),
(64, 8, 7, 0, 'Jam (red Plum jam) Zesta - 1gk', 'Jam (red Plum jam) Zesta', '<p>Jam (red Plum jam) Zesta</p>', 'Zesta_plum_jam_1473079466.jpg', 0, '2,80'),
(65, 8, 1, 0, 'Rice Daawat - 5Kg', 'Rice Daawat kg', '<p>Rice Daawat</p>', '6161103940076_1473079648.jpg', 0, '9,30'),
(66, 8, 1, 0, 'Rice Daawat - 2Kg', 'Rice Daawat - 2Kg', '<p>Rice Daawat - 2Kg</p>', '6161103940076_1473079727.jpg', 0, '3,85'),
(67, 8, 1, 0, 'Pasta(Santa Lucia) 1Kg', 'Pasta(Santa Lucia) 1Kg', '<p>Pasta(Santa Lucia) 1Kg</p>', 'Santa-Lucia-spaghetti-550x650_1473079899.jpg', 0, '2,25'),
(68, 8, 1, 0, 'Pembe flour - 2Kg', 'Fortified with vitamins and mierals. All  purpose flour 2Kg', '<p>Fortified with vitamins and mierals. All &nbsp;purpose flour</p>', 'pembe_all_purpose_flour_1473080024.jpg', 0, '1,10'),
(69, 8, 1, 0, 'Maize flour (jogoo)110 - 2Kg', 'Fortified with vitamins and mierals. Grade 1', '<p>Fortified with vitamins and mierals. Grade 1</p>', 'Pembe_Maize_flour_1473080121.jpg', 0, '1,20'),
(70, 8, 1, 0, 'Grains(butterfly Green grams) - 1Kg', 'Well polished green grams', '<p>Well polished green grams</p>', 'Red_Kidney_Beans_1473080280.jpg', 0, '2,60'),
(71, 8, 1, 0, 'Beans( Nyayo Beans) - 1Kg', 'well polished beans', '<p>well polished beans</p>', 'BUTTERFLY_NYAYO_BEANS_1KG-500x450_1473080339.JPG', 0, '1,25'),
(72, 8, 1, 0, 'Pulses(Black Beans)', 'well polished beans', '<p>well polished beans</p>', 'Pulses_black_beans_1473080406.jpg', 0, '2,75'),
(73, 8, 1, 0, 'Pulses(Yellow Beans)', 'Pulses(Yellow Beans)', '<p>Pulses(Yellow Beans)</p>', 'Yellow_kidney_beans_1473080474.jpg', 0, '1,85'),
(74, 8, 1, 0, 'Vegetable Oil ( Fresh Fri) - 2L', 'Vegetable Oil', '<p>Vegetable Oil</p>', 'Fresh_Fri_1473080567.jpg', 0, '3,15'),
(75, 8, 1, 0, 'Vegetable Oil ( Fresh Fri) - 3L', 'Vegetable Oil ( Fresh Fri) - 3L', '<p>Vegetable Oil ( Fresh Fri) - 3L</p>', 'Fresh_Fri_1473080730.jpg', 0, '4,40'),
(76, 8, 1, 0, 'Vegetable Oil ( Fresh Fri) - 5L', 'Vegetable Oil ( Fresh Fri) - 5L', '<p>Vegetable Oil ( Fresh Fri) - 5L</p>', 'Fresh_Fri_1473080826.jpg', 0, '6,60'),
(77, 8, 1, 0, 'Vegetable Oil ( Fresh Fri) - 20L', 'Vegetable Oil ( Fresh Fri) - 20L', '<p>Vegetable Oil ( Fresh Fri) - 20L</p>', 'Fresh_Fri_1473080889.jpg', 0, '23,99'),
(78, 8, 1, 0, 'Salt (kensalt) 2Kg', 'Fortiefied with potassium Iodate for prevention of Goitre', '<p>Fortiefied with potassium Iodate for prevention of Goitre</p>', 'kensalt_1kg_iodi_515c188f648dc_1473080983.jpg', 0, '0,5'),
(79, 8, 1, 0, 'Salt (kensalt) 1Kg', 'Fortiefied with potassium Iodate for prevention of Goitre', '<p>Fortiefied with potassium Iodate for prevention of Goitre</p>', 'kensalt_1kg_iodi_515c188f648dc_1473081008.jpg', 0, '0,25'),
(80, 8, 1, 0, 'Mayonnaise(Lyions) - 200g', 'Mayonnaise(Lyions)', '<p>Mayonnaise(Lyions)</p>', 'lyon_1473081207.jpg', 0, '3,65'),
(81, 8, 1, 0, 'Tomato sauce(Peptang ) - 700g', 'Well reknown for its taste and quality', '<p>Well reknown for its taste and quality</p>', 'PEPTANG-HOT-SWEET-SAUCE-400G_1473081305.jpg', 0, '1,25'),
(82, 8, 1, 0, 'Whole milk ( Tuzo)', 'Whole milk ( Tuzo)', '<p>Whole milk ( Tuzo)</p>', 'Tuzo_milk_1473081418.jpg', 0, '0,50');

-- --------------------------------------------------------

--
-- Structure de la table `product_price_currency`
--

CREATE TABLE IF NOT EXISTS `product_price_currency` (
  `product_price_currency_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_price_currency_sign` varchar(10) NOT NULL,
  PRIMARY KEY (`product_price_currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `product_price_currency`
--

INSERT INTO `product_price_currency` (`product_price_currency_id`, `product_price_currency_sign`) VALUES
(1, '$');

-- --------------------------------------------------------

--
-- Structure de la table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` text NOT NULL,
  `shop_address` text NOT NULL,
  `shop_logo` text NOT NULL,
  `shop_banner` text NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_address`, `shop_logo`, `shop_banner`, `city_id`, `country_id`) VALUES
(1, 'NÃ©too  Shop Dschang', 'Centre urbain - Fotetsa : \r\nTel : (+237) xxx-xxx-xxx', 'Netoo-logo_1476703678.jpg', 'ng_1476703678.jpg', 23, 22),
(2, 'NÃ©too Store Bafoussam', 'Carrefour Total\r\n(00237) xxx-xxx-xxx', 'Netoo-logo_1477050770.jpg', 'screencapture-3dcart-2015-images-how-it-works-xhero-jpg-pagespeed-ic-ppTZMuO267-webp-1477050721310_1477050770.png', 17, 22),
(4, 'Netoo Medical Center', 'Carrefour Tamtam\r\nTel (+237) xxx-xxx-xxx', 'Netoo-logo_1476703794_1477552484.jpg', 'healthtech-startup-best-startups-medical-technology-code-n-contest-apply-business-ideas-networking-digitalization_1477552484.jpg', 21, 22),
(8, 'Kiosk Steven', 'Kitengela Road (Rubia Estate), \r\nLangata, Nairobi\r\n +254 722 313 911', 'kenya_1473235312_1477050938.png', 'banner_1477050938.png', 19, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
