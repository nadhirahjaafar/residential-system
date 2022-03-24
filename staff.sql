-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2021 at 03:06 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amzarine_st1g5`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ic no` varchar(12) NOT NULL,
  `tel no` varchar(11) NOT NULL,
  `shift` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff id`, `name`, `ic no`, `tel no`, `shift`) VALUES
(1, 'KAVIN CHONG', '670404045815', '01165345188', 'EVENING'),
(2, 'ISHAK BIN JAMAL', '870618115321', '0197920439', 'MORNING'),
(3, 'MADHU A/L KAPOOR', '890101115325', '01110036930', 'NIGHT'),
(4, 'HISYAM BIN HAMID', '701213035127', '01124166119', 'EVENING'),
(5, 'FARUQ HUSIN BIN ROSLI', '900909065543', '0179265920', 'EVENING'),
(6, 'NOR GHAZALI BIN ABU', '821030125219', '0149893835', 'NIGHT'),
(7, 'MOHAMMAD RAMLI BIN KHAMIS', '750219015323', '0175320766', 'MORNING'),
(8, 'NAGESHWARAN A/L RATHIK', '914422357259', '0169579128', 'EVENING'),
(9, 'AJAY A/L KUMARASEN', '881012095527', '0133663866', 'NIGHT'),
(10, 'AVINASH A/L DEEPAK', '840202115291', '0195186698', 'MORNING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
