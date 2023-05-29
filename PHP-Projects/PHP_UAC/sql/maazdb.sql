-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 07:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maazdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `maaz`
--

CREATE TABLE `maaz` (
  `rollno` int(5) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `scourses` varchar(30) NOT NULL,
  `fees` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maaz`
--

INSERT INTO `maaz` (`rollno`, `sname`, `fname`, `emailid`, `scourses`, `fees`) VALUES
(1, 'Hamid', 'ali', 'hamidali11@gmail.com', 'ADIT', 28000),
(2, 'Furqan', 'Khalil', 'asif_khalil@gmail.com', 'WEB Engineering', 28000),
(3, 'maaz', 'syed', 'ma@gmail.com', 'Auto Cad', 27650),
(0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `uacdb`
--

CREATE TABLE `uacdb` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(12) NOT NULL,
  `cpassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uacdb`
--

INSERT INTO `uacdb` (`fname`, `lname`, `email`, `password`, `cpassword`) VALUES
('maaz', 'syed', 'ma@gmail.com', '200400', '200400'),
('Haider', 'Khan', 'hk1220@gmail.com', '1250300', '1250300');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
