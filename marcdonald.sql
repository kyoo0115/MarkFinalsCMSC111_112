-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 09:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marcdonald`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `productName` varchar(100) NOT NULL,
  `productImage` varchar(100) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productDrink` varchar(100) NOT NULL,
  `productSize` varchar(100) NOT NULL,
  `totalPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `productID` int(11) NOT NULL,
  `productImage` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productPrice` double NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`productID`, `productImage`, `productName`, `productPrice`, `category`) VALUES
(1, 'img/1pcrice.png', '1-pc. Chicken Mcdo w/ Rice', 103, 'chicken'),
(2, 'img/2pcchickenrices.png', '2-pc. Chicken Mcdo w/ Rice', 180, 'chicken'),
(3, 'img/1pcspicyrice.png', '1-pc. Spicy Chicken Mcdo w/ rice', 113, 'chicken'),
(4, 'img/2pcchickenrice.png', '2-pc. Spicy Chicken Mcdo w/ Rice', 190, 'chicken'),
(5, 'img/mcchickenfillet.png', 'McCrispy Chicken Fillet w/ Rice', 81, 'chicken'),
(6, 'img/mcchickenalaking.png', 'McCrispy Chicken Fillet Ala King w/ Rice', 81, 'chicken'),
(7, 'img/bigMac.png', 'Big Mac', 202, 'burger'),
(8, 'img/mcchickenbig.png', 'McChicken', 173, 'burger'),
(9, 'img/burgermcdo.png', 'Burger McDo', 109, 'burger'),
(10, 'img/cheesyburger.png', 'Cheesy Burger McDo', 120, 'burger'),
(11, 'img/mcchicken.png', 'McCrispy Fillet Sandwich', 120, 'burger'),
(12, 'img/doublecheese.png', 'Double Cheeseburger', 167, 'burger');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
