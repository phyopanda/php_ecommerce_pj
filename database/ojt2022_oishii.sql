-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: 10.123.0.200:3307
-- Generation Time: Mar 22, 2022 at 09:20 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ojt2022_oishii`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `f_no` int(100) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `delivery` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Order_no` varchar(100) NOT NULL,
  PRIMARY KEY (`f_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`f_no`, `type`, `name`, `price`, `phone`, `delivery`, `address`, `Order_no`) VALUES
(4, 'myanmar', 'Shan-style noodles', '4500MMK', '09262253433', '3o min', 'yangon,bahan', 'no35'),
(5, 'china', 'Wonton Soup', '4000MMK', '09262253433', '15 min', 'Mandalay', 'no67'),
(6, 'India', 'Masala Chai', '3500MMK', '09262253433', '1 hr', 'yangon', 'no13'),
(7, 'myanmar', 'Nangyi thoke', '4500MMK', '09691514461', '30 min', 'yangon', 'no79');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `phone`, `message`) VALUES
('phyo', 'phyo@gmail.com', '6786889', 'hiiiiiiii'),
('phyo', 'phyo@gmail.com', '6786889', 'hiiiiiiii'),
('phyo', 'phyo@gmail.com', '6786889', 'hiiiiiiii'),
('hyu', 'phyo@gmail.com', '6786889', 'hyttt'),
('phyo', 'phyo@gmail.com', '09262253433', 'hi welcome');

-- --------------------------------------------------------

--
-- Table structure for table `foodtype`
--

CREATE TABLE IF NOT EXISTS `foodtype` (
  `t_id` int(100) NOT NULL AUTO_INCREMENT,
  `t_title` varchar(40) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `foodtype`
--

INSERT INTO `foodtype` (`t_id`, `t_title`) VALUES
(1, 'myanmar'),
(2, 'japan'),
(3, 'american'),
(4, 'france'),
(5, 'italy'),
(6, 's-korea'),
(7, 'china'),
(8, 'India'),
(9, 'greece'),
(10, 'drinks'),
(11, 'dessert');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE IF NOT EXISTS `product1` (
  `f_id` int(100) NOT NULL AUTO_INCREMENT,
  `f_type` text NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_price` varchar(100) NOT NULL,
  `f_image` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`f_id`, `f_type`, `f_name`, `f_price`, `f_image`) VALUES
(1, 'dessert', 'Creme Glace', '5000MMK', 'Creme Glace.jpg'),
(2, 'dessert', 'Dondurma', '5000MMK', 'Dondurma.jpg'),
(3, 'dessert', 'Kakigori', '5000MMK', 'Kakigori.jpg'),
(4, 'dessert', 'LAMINGTONS', '5000MMK', 'LAMINGTONS.webp'),
(5, 'dessert', 'BAKLAVA', '5000MMK', 'BAKLAVA.webp'),
(6, 'dessert', 'GULAB JAMUN', '5000MMK', 'GULAB JAMUN.webp'),
(7, 'myanmar', 'Shan style tofu noodles', '4500MMK', 'Shan style tofu noodles.jpg'),
(8, 'myanmar', 'Shan-style noodles', '4500MMK', 'Shan-style noodles.jpg'),
(9, 'myanmar', 'Shan style rice', '4500MMK', 'Shan-style rice.jpg'),
(10, 'myanmar', 'Nangyi thoke', '4500MMK', 'Nangyi thoke.jpg'),
(11, 'myanmar', 'Mohinga', '4500MMK', 'Mohinga.jpg'),
(12, 'myanmar', 'Tea leaf salad', '4500MMK', 'Tea leaf salad.jpg'),
(13, 'japan', 'Sashimi', '6000MMK', 'Sashimi.jpg'),
(14, 'japan', 'Tofu', '6000MMK', 'Tofu.jpg'),
(15, 'japan', 'Soba', '6000MMK', 'Soba.jpg'),
(16, 'japan', 'Donburi', '6000MMK', 'Donburi.jpg'),
(17, 'japan', 'Sushi', '6000MMK', 'Sushi.jpg'),
(18, 'japan', 'Udon', '6000MMK', 'Udon.jpg'),
(23, 'greece', 'Courgette balls', '5000MMK', 'Courgette balls.webp'),
(24, 'greece', 'Fresh fish', '5000MMK', 'Fresh fish.webp'),
(25, 'greece', 'Grilled meat', '5000MMK', 'Grilled meat.webp'),
(26, 'greece', 'Olives and olive oil', '5000MMK', 'Olives and olive oil.webp'),
(27, 'greece', 'Moussaka', '5000MMK', 'Moussaka.webp'),
(28, 'greece', 'Taramasalata', '5000MMK', 'Taramasalata.webp'),
(30, 'china', 'Char Siu', '4000MMK', 'Char Siu.webp'),
(31, 'china', 'Dumplings', '4000MMK', 'Dumplings.webp'),
(32, 'china', 'Dim Sum', '4000MMK', 'Dim Sum.webp'),
(33, 'china', 'Sweet and Sour Pork', '4000MMK', 'Sweet and Sour Pork.webp'),
(34, 'china', 'Chow Mein', '4000MMK', 'Chow Mein.webp'),
(35, 'china', 'Wonton Soup', '4000MMK', 'Wonton Soup.webp'),
(56, 's-korea', 'Galbi', '5500MMK', 'Galbi.jpg'),
(57, 's-korea', 'Tteokbokki', '5500MMK', 'Tteokbokki.jpg'),
(58, 's-korea', 'Samgyetang', '5500MMK', 'Samgyetang.jpg'),
(59, 's-korea', 'Bibimbap', '5500MMK', 'Bibimbap.webp'),
(60, 's-korea', 'Kimchi', '5500MMK', 'Kimchi.webp'),
(61, 's-korea', 'Hoeddeok', '5500MMK', 'Hoeddeok.webp'),
(62, 'India', 'Chaat', '3500MMK', 'Chaat.jpg'),
(63, 'India', 'Dhokla', '3500MMK', 'Dhokla.webp'),
(64, 'India', 'Masala Chai', '3500MMK', 'Masala Chai.webp'),
(65, 'India', 'Samosa', '3500MMK', 'Samosa.webp'),
(66, 'India', 'Sundae', '3500MMK', 'Sundae.jpg'),
(67, 'India', 'Tandoori Chicken', '3500MMK', 'Tandoori Chicken.jpg'),
(69, 'american', 'Subway', '3000MMK', 'Subway.webp'),
(70, 'american', 'taco bell', '3000MMK', 'taco bell.webp'),
(71, 'american', 'Pepperoni Pizza', '3000MMK', 'Pepperoni Pizza.webp'),
(72, 'american', 'Chicken Fingers', '3000MMK', 'Chicken Fingers.webp'),
(73, 'american', 'Chicken Sandwich', '3000MMK', 'Chicken Sandwich.webp'),
(74, 'american', 'double double burger', '3000MMK', 'in-n-out-double-double-burger.webp'),
(75, 'italy', 'Tuscany', '5700MMK', 'Tuscany.png'),
(76, 'italy', 'Apulia', '5700MMK', 'Apulia.png'),
(78, 'italy', 'Lazio', '5700MMK', 'Lazio.jpg'),
(79, 'italy', 'Lombardy', '5700MMK', 'Lombardy.jpg'),
(80, 'italy', 'Romagna', '5700MMK', 'Romagna.jpg'),
(81, 'italy', 'commons', '5700MMK', 'carbonara_wikimedia_commons.jpg'),
(82, 'france', 'Bouillabaisse', '5700MMK', 'Bouillabaisse.jpg'),
(83, 'france', 'Chicken confit', '5700MMK', 'Chicken confit.jpg'),
(84, 'france', 'Lamb shank navarin', '5700MMK', 'Lamb shank navarin.jpg'),
(85, 'france', 'Steak frites', '5700MMK', 'Steak frites.jpg'),
(86, 'france', 'Quiche Lorraine', '5700MMK', 'Quiche Lorraine.jpg'),
(87, 'france', 'Salmon en papillote', '5700MMK', 'Salmon en papillote.jpg'),
(92, 'drinks', 'Chum churum', '5200MMK', 'Chum churum.webp'),
(93, 'drinks', 'Emperador', '5200MMK', 'Emperador.webp'),
(94, 'drinks', 'Jinro', '5200MMK', 'Jinro.webp'),
(95, 'drinks', 'Mcdowell', '5200MMK', 'Mcdowell.webp'),
(96, 'drinks', 'Story behind Bira 91', '5200MMK', 'Story behind Bira 91.webp'),
(97, 'drinks', 'Officer choice', '5200MMK', 'Officer choice.webp');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `f_no` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` text NOT NULL,
  `gender` text NOT NULL,
  `city` text NOT NULL,
  `township` text NOT NULL,
  `country` text NOT NULL,
  `noti` text NOT NULL,
  PRIMARY KEY (`f_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`f_no`, `name`, `email`, `phone`, `password`, `age`, `gender`, `city`, `township`, `country`, `noti`) VALUES
(1, 'phyo', 'phyo@gmail.com', '09262253433', 'pppp', '15', 'male', 'yangon', 'Bahan', 'Myanmar', 'yes'),
(3, 'Aung', 'phyo1@gmail.com', '09448817207', 'aung123', '17', 'male', 'yangon', 'Bahan', 'Myanmar', 'yes'),
(5, 'Aung', 'phyo4@gmail.com', '09262253433', '12345678', '17', 'male', 'yangon', 'Bahan', 'Myanmar', 'yes'),
(6, 'jphyo', 'phyominhein2004@gmail.com', '09691514461', 'Re3444', '17', 'male', 'Yangon', 'Bahan', 'Myanmar', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `pass`) VALUES
('kok', 'kok');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
