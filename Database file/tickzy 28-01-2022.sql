-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 07:15 PM
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
(8, 'ram', '2673567628', '3@mail.com', 'tgsag', 8, 'Female', '2022-01-14', 4, 3, '61def71fa418d'),
(9, 'ram', '2673567628', '3@mail.com', 'mnskf', 7, 'Male', '2022-01-14', 4, 3, '61def71fa418d'),
(10, 'raj', '5683543284', 'rj@123.com', 'raj', 7, 'Male', '2022-01-15', 6, 3, '61df0c89b083e'),
(17, 'pahss', '23464364', 'jcsdk@gsjghj', 'fgdg', 4, 'Male', '2022-01-21', 2, 1, '61e2866ee0b6d'),
(18, 'pahss', '23464364', 'jcsdk@gsjghj', 'rtry', 3, 'Male', '2022-01-21', 2, 1, '61e2866ee0b6d'),
(21, 'Pras', '67524183', 'hjkhskfjhdkhk@123', 'jg', 8, 'Male', '2022-01-22', 3, 1, '61eae737c537b'),
(22, 'Pras', '67524183', 'hjkhskfjhdkhk@123', 'jhegrw', 7, 'Male', '2022-01-22', 3, 1, '61eae737c537b'),
(23, 'pradeep', '641587374679', 'pradeep@123.com', 'akash', 34, 'Male', '2022-01-13', 5, 3, '61ebc1dd29fe7'),
(24, 'pradeep', '641587374679', 'pradeep@123.com', 'rakesh', 8, 'Male', '2022-01-13', 5, 3, '61ebc1dd29fe7');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `match_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `match_desc` varchar(35) NOT NULL,
  `venue` varchar(250) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`match_id`, `date`, `match_desc`, `venue`) VALUES
(1, '2022-01-21', 'AUS vs IND', 'M. Chinnaswamy stadium'),
(3, '2022-01-15', 'NZ vs WI', 'M. Chinnaswamy stadium');

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
('102', 'Eden Gardens', 'Kolkata, India.', 80000),
('101', 'M. Chinnaswamy stadium', 'Bengaluru', 43000),
('103', 'M.A. Chidambaram Stadium', 'Chennai, India.', 35000),
('104', 'Wankhede Stadium', 'Mumbai,India.', 33000);

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
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `acc_id` (`acc_id`),
  ADD KEY `match_id` (`match_id`);

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
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
