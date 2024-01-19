-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 12:06 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boots`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `Category`) VALUES
(20, 'Ladies Shoes'),
(21, 'Gents Shoes'),
(22, 'Ladies Sandal');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `Reply` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `Email`, `Message`, `Reply`) VALUES
(4, 'anu@gmail.com', 'test complaint', 'solved');

-- --------------------------------------------------------

--
-- Table structure for table `damageentry`
--

CREATE TABLE IF NOT EXISTS `damageentry` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Reply` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `damageentry`
--

INSERT INTO `damageentry` (`Id`, `Email`, `Description`, `Reply`) VALUES
(3, 'th@gmail.com', 'damage of products details', 'testtt'),
(4, 'th@gmail.com', 'test damage entry complaint\r\n', 'damage solved'),
(5, 'th@gmail.com', 'test damage entry', 'damage solved'),
(6, 'anu@gmail.com', 'sandal damage entry', 'Pending'),
(7, 'anu@gmail.com', 'test damage', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Email`, `Message`) VALUES
(1, 'th@gmail.com', 'test feedback'),
(2, 'anu@gmail.com', 'boot feedback'),
(3, 'anu@gmail.com', 'test feedback');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`, `Usertype`, `Status`) VALUES
(1, 'admin@gmail.com', 'admin123', 'admin', 'Approve'),
(13, 'anu@gmail.com', 'anu1234', 'User', 'Approve'),
(15, 's@gmail.com', 'sudha1', 'Staff', 'Approve'),
(16, 'meena@gmail.com', 'meena1', 'Staff', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Uid` varchar(100) NOT NULL,
  `Pid` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Quatity` varchar(100) NOT NULL,
  `Total` varchar(500) NOT NULL,
  `Cardno` varchar(100) NOT NULL,
  `Cvv` varchar(100) NOT NULL,
  `Expirydate` text NOT NULL,
  `Status` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Uid`, `Pid`, `Price`, `Quatity`, `Total`, `Cardno`, `Cvv`, `Expirydate`, `Status`) VALUES
(4, 'anu@gmail.com', '1', '950', '2', '1900', '8797656789564342', '345', '2023-11-11', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(100) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Des` text NOT NULL,
  `Features` text NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Image` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Category`, `Name`, `Des`, `Features`, `Price`, `Image`) VALUES
(1, 'Gents Shoes', 'Gents Boot', 'Gents Boot', 'Gents Boot', '950', 'products/b1.avif'),
(2, 'Ladies Shoes', 'Ladies Boot', 'Ladies Boot', 'Ladies Boot', '1200', 'products/b2.avif'),
(3, 'Ladies Shoes', 'Ladies Boot', 'Ladies Boot', 'Ladies Boot', '1400', 'products/b3.avif'),
(4, 'Gents Shoes', 'Gents Boot', 'Gents Boot', 'Gents Boot', '2100', 'products/b4.avif'),
(5, 'Gents Shoes', 'Gents Boot', 'Gents Boot', 'Gents Boot', '670', 'products/b5.avif'),
(6, 'Ladies Shoes', 'Ladies Boot', 'Ladies Boot', 'Ladies Boot', '1230', 'products/b7.avif');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Name`, `Address`, `Email`, `Mobile`, `Password`) VALUES
(7, 'Anu A', 'anu villa', 'anu@gmail.com', '9876781234', 'anu1234'),
(8, 'Meenakshy', 'meena villa', 'm@gmail.com', '9876781000', 'meena1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff_complaint`
--

CREATE TABLE IF NOT EXISTS `staff_complaint` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(500) NOT NULL,
  `Message` text NOT NULL,
  `Reply` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff_complaint`
--

INSERT INTO `staff_complaint` (`Id`, `Email`, `Message`, `Reply`) VALUES
(2, 's@gmail.com', 'staff compalnint', 'staff complaint solved'),
(3, 'm@gmail.com', 'complaint test', 'Pending'),
(4, 's@gmail.com', 'test staff complaint', 'staff complaint solved');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(100) NOT NULL,
  `Subcategory` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Id`, `Category`, `Subcategory`) VALUES
(1, 'Endodontics', 'NiTi Rotary Files'),
(2, 'Endodontics', 'Dental Adhesives'),
(3, 'Endodontics', 'Root Canal Sealants');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Pin` varchar(500) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`Id`, `Name`, `Address`, `Location`, `Pin`, `Phone`, `Email`, `Image`, `Password`) VALUES
(3, 'Sudha', 'S villa', 'konni', '689692', '9876789878', 's@gmail.com', 'worker/ab.jpg', 'sudha1'),
(4, 'Meena', 'konni', 'konni', '689692', '9876789878', 'meena@gmail.com', 'worker/c2.jpg', 'meena1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
