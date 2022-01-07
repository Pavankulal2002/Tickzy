-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 03:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tickzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE `stadiums` (
  `stadium_id` varchar(10) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `s_location` varchar(250) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`stadium_id`, `s_name`, `s_location`, `capacity`) VALUES
('101', 'M. Chinnaswamy Stadium', 'Bengaluru', 38000),
('102', 'Eden Gardens', 'Kolkatta', 80000),
('103', 'M.A. Chidambaram Stadium', 'Chennai', 50000),
('104', 'Wankhede Stadium', 'Mumbai', 33000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`stadium_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
