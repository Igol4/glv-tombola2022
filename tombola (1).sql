-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2022 at 10:28 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18183276_tombola`
--

-- --------------------------------------------------------

--
-- Table structure for table `tombola`
--

CREATE TABLE `tombola` (
  `t_id` int(255) NOT NULL,
  `broj` int(7) NOT NULL,
  `nagrada` text NOT NULL,
  `profesor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tombola`
--

INSERT INTO `tombola` (`t_id`, `broj`, `nagrada`, `profesor`) VALUES
(1, 3265325, '1 isprika za usmenu provjeru kemija', 'Novak'),
(2, 3265328, '2 boda na ppz kemija', 'Novak'),
(3, 3265331, 'Odabir teme za sat', 'Svenda'),
(4, 3265345, '\"Suprise\"      ', 'Mustapic'),
(5, 3265386, '3 boda na testu', 'Mustapic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tombola`
--
ALTER TABLE `tombola`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tombola`
--
ALTER TABLE `tombola`
  MODIFY `t_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3265387;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
