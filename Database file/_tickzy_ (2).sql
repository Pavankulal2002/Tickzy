-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `acc_id` int(11) NOT NULL,
  `acc_type` varchar(35) NOT NULL,
  `acc_price` double NOT NULL,
  `acc_slot` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`acc_id`, `acc_type`, `acc_price`, `acc_slot`) VALUES
(1, 'East Wing', 2000, 6870),
(2, 'West Wing', 2000, 6245),
(3, 'North Wing', 3000, 5270),
(4, 'South Wing', 3000, 7124),
(5, 'VIP Box1 (South-East)', 10000, 10),
(6, 'VIP Box1 (North-West)', 9000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `booking_id` int(100) NOT NULL,
  `match1` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `accomodation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`booking_id`, `match1`, `date`, `accomodation`) VALUES
(33, 'Aus vs Eng', 'Aus vs Eng', ''),
(34, 'Aus vs Eng', 'Aus vs Eng', ''),
(35, 'Aus vs Eng', 'Aus vs Eng', 'North Wing'),
(36, 'Aus vs Eng', 'Aus vs Eng', 'North Wing'),
(37, 'Aus vs Eng', 'Aus vs Eng', 'North Wing'),
(38, 'Aus vs Eng', '', 'North Wing'),
(39, 'Aus vs Eng', '', 'North Wing'),
(40, 'Aus vs Eng', '', 'North Wing'),
(41, 'Aus vs Eng', '', 'North Wing'),
(42, 'ind vs pak', '2022-01-11', 'South Wing'),
(43, 'ind vs pak', '2022-01-11', 'South Wing'),
(44, 'ind vs pak', '2022-01-11', 'South Wing');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `book_id` int(11) NOT NULL,
  `book_by` varchar(50) NOT NULL,
  `book_contact` varchar(15) NOT NULL,
  `book_address` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_age` int(11) NOT NULL,
  `book_gender` varchar(15) NOT NULL,
  `book_departure` date NOT NULL,
  `acc_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `book_tracker` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`book_id`, `book_by`, `book_contact`, `book_address`, `book_name`, `book_age`, `book_gender`, `book_departure`, `acc_id`, `match_id`, `book_tracker`) VALUES
(1, 'pavan', '9901671253', 'pavank53639@gmail.com', 'aaaa', 6, 'Male', '2021-12-23', 1, 3, '61cb41cd1095a'),
(2, 'pavan', '9901671253', 'pavank53639@gmail.com', 'pppppp', 11, 'Male', '2021-12-23', 1, 3, '61cb41cd1095a'),
(8, 'ram', '2673567628', '3@mail.com', 'tgsag', 8, 'Female', '2022-01-14', 4, 3, '61def71fa418d'),
(9, 'ram', '2673567628', '3@mail.com', 'mnskf', 7, 'Male', '2022-01-14', 4, 3, '61def71fa418d'),
(10, 'raj', '5683543284', 'rj@123.com', 'raj', 7, 'Male', '2022-01-15', 6, 3, '61df0c89b083e');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_no` int(100) NOT NULL,
  `match` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_no`, `match`, `date`, `venue`) VALUES
(2, 'Aus vs Eng', '2022-01-11', 'Chinnaswamy'),
(3, 'ind vs pak', '2022-01-13', 'wankade');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `match_id` int(11) NOT NULL,
  `match_desc` varchar(35) NOT NULL,
  `venue` varchar(250) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`match_id`, `match_desc`, `venue`) VALUES
(1, '--Select Match--', ''),
(2, 'AUS vs IND', ''),
(3, 'NZ vs WI', ''),
(4, 'SA vs ENG', '');

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
('101', 'M. Chinnaswamy stadium', 'Bengaluru', 43000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `cpassword`, `email`) VALUES
(6, 'pavan', '$2y$10$binWNwbptGwwhmX5SzIq/.YfQ08W.TbriEAFKEMUkbsEse6j1Omva', '', 'pavank53639@gmail.com'),
(7, 'pavan1', '$2y$10$SiwhCwy9Q9nzyJ3GC0Rzi.3QX3Eh/265SgrJuTm.udpZ6e1DFiIRi', '', 'pavank536395@gmail.com'),
(9, 'harry', '$2y$10$xhS59zHFvFxQzuHJr0DkuenW1Fi2sIzTNe1t7VdSVFjBYeN5fn3dC', '', 'jfgailkl'),
(10, 'ramesh', '$2y$10$gQ.oG2D4gQ6NxCekXkZReOrWHUfbxETitDBRvnwaPRcmjfvqRANUK', '', 'pavank53639@gmail.com'),
(11, 'pradeep', '$2y$10$IhW7HYhp8Xq7uN6aj7erEeI2kh4EOrhyqnJnLoHk3vJ25ogApoXJ6', '', 'pavank536395@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `acc_id` (`acc_id`),
  ADD KEY `match_id` (`match_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_no`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`s_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `origin`
--
ALTER TABLE `origin`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked`
--
ALTER TABLE `booked`
  ADD CONSTRAINT `booked_ibfk_2` FOREIGN KEY (`acc_id`) REFERENCES `accomodation` (`acc_id`),
  ADD CONSTRAINT `booked_ibfk_3` FOREIGN KEY (`match_id`) REFERENCES `origin` (`match_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
