-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2022 at 06:52 PM
-- Server version: 5.7.19
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miraclemotors`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `salary` varchar(10) NOT NULL,
  PRIMARY KEY (`staff_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_Id`, `name`, `nic`, `address`, `email`, `mobileno`, `salary`) VALUES
(1, 'Ravidu Perera ', '123456789v', '21, veyangoda', 'abc@gmail.com', 332270121, '15000.00'),
(2, 'Sadaru Dilshan', '123456789123', '12, Veyangoda', 'cdef@gmail.com', 771454296, '20000.00'),
(3, 'Dilshan Rathnayaka', '123456789124', '12, Veyangoda', 'rdef@gmail.com', 771451427, '20000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `level` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `name` (`name`),
  KEY `email` (`email`),
  KEY `date` (`date`),
  KEY `level` (`level`),
  KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `email`, `date`, `level`, `password`, `id`) VALUES
(54878641015007064, 'Amal', 'amal.miracle@gmail.com', '2022-07-23 13:31:04', 'owner', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1),
(97655, 'Kamal', 'kamal.miracle@gmail.com', '2022-07-23 13:38:07', 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 2),
(83400, 'Nimal', 'nimal.miracle@gmail.com', '2022-07-23 13:38:47', 'user', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3),
(50448333640177, 'Sunil', 'sunil.miracle@gmail.com', '2022-07-23 13:39:16', 'accountant', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 4),
(668788402, 'Namal', 'namal.miracle@gmail.com', '2022-07-24 13:09:20', 'user', '7c222fb2927d828af22f592134e8932480637c0d', 5),
(450612074, 'Ranmal', 'ranmal.miracle@gmail.com', '2022-07-24 13:39:07', 'user', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 8),
(9471804817670981, 'Saman', 'ssaman.miracle@gmail.com', '2022-07-24 14:18:17', 'user', 'd5f12e53a182c062b6bf30c1445153faff12269a', 9),
(650815690604269407, 'Hasanthi', 'hasanthi.miracle@gmail.com', '2022-07-24 23:48:58', 'user', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 10);

-- --------------------------------------------------------

--
-- Table structure for table `vehicledetails`
--

DROP TABLE IF EXISTS `vehicledetails`;
CREATE TABLE IF NOT EXISTS `vehicledetails` (
  `vsNo` int(4) NOT NULL AUTO_INCREMENT,
  `brand` varchar(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `vcondition` varchar(20) NOT NULL,
  `yom` year(4) NOT NULL,
  `yor` year(4) NOT NULL,
  `engineCapacity` varchar(6) NOT NULL,
  `fuelType` varchar(10) NOT NULL,
  `mileage` varchar(7) DEFAULT NULL,
  `vehicleNo` varchar(12) NOT NULL,
  `colour` varchar(15) DEFAULT NULL,
  `noOfOwners` int(2) DEFAULT NULL,
  `options` varchar(50) DEFAULT NULL,
  `vehicleImg1` varchar(50) DEFAULT NULL,
  `vehicleImg2` varchar(50) DEFAULT NULL,
  `vehicleImg3` varchar(50) DEFAULT NULL,
  `vehicleImg4` varchar(50) DEFAULT NULL,
  `vehicleImg5` varchar(50) DEFAULT NULL,
  `insurance` varchar(50) DEFAULT NULL,
  `greenTest` varchar(50) DEFAULT NULL,
  `createdDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `createUser` varchar(10) DEFAULT NULL,
  `updateUser` varchar(10) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `shifted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`vsNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
