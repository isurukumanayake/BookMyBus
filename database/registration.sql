-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmybus`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `User_ID` int(6) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`User_ID`, `FirstName`, `LastName`, `Email`, `Gender`, `Address`, `Password`) VALUES
(1, 'Sadun', 'Perera', 'Sadun12@gmail.com', 'Male', '34/4,Temple Road,Kandy', 'Qwert1'),
(3, 'Amali', 'Fonseka', 'amalif1@gmail.com', 'Female', '12/3,Gamunu Road,Kurunagala', 'Amali32*'),
(5, 'Hansi', 'Weerarathna', 'hansiW@gmail.com', 'Female', '4/6,Perera Road , Matara', 'Zxcv12'),
(6, 'John', 'Wick', 'John12@gmail.com', 'Male', '23/5,Gamapaha', 'Mnbv12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `User_ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
