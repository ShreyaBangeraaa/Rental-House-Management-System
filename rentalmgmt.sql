-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 09:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(100) NOT NULL,
  `houseid` int(100) NOT NULL,
  `owneremail` varchar(200) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `delstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `houseid`, `owneremail`, `useremail`, `status`, `delstatus`) VALUES
(11, 26, 'priya@gmail.com ', 'swathi@gmail.com', 'pending', ''),
(12, 26, 'priya@gmail.com ', 'swathi@gmail.com', 'pending', ''),
(142, 89, 'latha@gmail.com ', 'faathima@gmail.com', 'Accepted', ''),
(143, 92, 'latha@gmail.com ', 'swathi@gmail.com', 'pending', ''),
(144, 93, 'chaya@gmail.com ', 'maaya@gmail.com', 'Accepted', ''),
(145, 95, 'jaaja@gmail.com ', 'saathvika@gmail.com', 'Rejected', ''),
(146, 94, 'jaaja@gmail.com ', 'saathvika@gmail.com', 'Accepted', ''),
(147, 102, 'jungkook@gmail.com ', 'suga@gmail.com', 'Accepted', ''),
(148, 104, 'Ajith@gmail.com ', 'anil@gmail.com', 'Accepted', ''),
(149, 105, 'Ajith@gmail.com ', 'swathi@gmail.com', 'pending', ''),
(150, 105, 'Ajith@gmail.com ', 'swathi@gmail.com', 'pending', ''),
(151, 105, 'Ajith@gmail.com ', 'swathi@gmail.com', 'pending', ''),
(152, 105, 'Ajith@gmail.com ', 'anil@gmail.com', 'Accepted', ''),
(153, 105, 'Ajith@gmail.com ', 'anil@gmail.com', 'Accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `rate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `ownername`, `comment`, `rate`) VALUES
(35, 'swathi DS', 'swathi@gmail.com', 'shree@gmail.com ', 'good app', '5');

-- --------------------------------------------------------

--
-- Table structure for table `electricity`
--

CREATE TABLE `electricity` (
  `id` int(100) NOT NULL,
  `door_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `rr` varchar(100) NOT NULL,
  `amountpaid` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electricity`
--

INSERT INTO `electricity` (`id`, `door_no`, `date`, `month`, `amount`, `rr`, `amountpaid`, `balance`, `image`) VALUES
(2, '21-02', '0000-00-00', 'Feb', '500', 'ult55', '', '', '6.jpg'),
(50, '500', '2022-01-29', 'Jan', '1000', 'UL898', '1000', '0', 'bg.png'),
(51, '500', '2022-02-26', 'Feb', '1500', 'UL898', '1000', '500', 'bg.png'),
(52, '500', '2022-03-24', 'Mar', '1200', 'UL898', '1200', '0', 'bg.png'),
(53, '500', '0000-00-00', 'Apr', '1000', 'UL898', '500', '500', 'bg.png'),
(54, '000111', '2021-08-27', 'Aug', '1000', 'UL100', '1000', '0', 'bg.png'),
(55, '636', '2022-01-29', 'Jan', '1500', 'UL001', '1000', '500', 'bg.png'),
(56, '636', '2022-02-28', 'Feb', '1000', 'UL001', '1000', '0', 'bg.png'),
(57, '636', '2022-03-28', 'Mar', '500', 'UL001', '500', '0', 'bg.png'),
(58, '1', '2021-09-19', 'Sept', '1200', 'UL1', '1200', '0', 'bg.png'),
(59, '4', '2021-10-01', 'Oct', '1000', 'UL111000', '1000', '0', 'IMG_20211001_110801.jpg'),
(60, '55', '2021-10-22', 'Jan', '345', 'F234', '345', '0', 'IMG_20211001_110801.jpg'),
(61, '55', '2021-11-25', 'Nov', '1000', 'UL111000', '500', '500', 'water-bill.jpg'),
(66, '145', '2022-01-02', 'Jan', '1000', 'UL15', '500', '500', 'water-bill.jpg'),
(67, '145', '2022-07-02', 'Jun', '1000', 'UL15', '500', '500', 'water-bill.jpg'),
(68, '145', '2022-07-02', 'Jul', '1000', 'UL15', '500', '500', 'water-bill.jpg'),
(69, '145', '2022-04-02', 'Mar', '1000', 'UL15', '700', '300', 'water-bill.jpg'),
(70, '145', '2022-04-24', 'Apr', '1000', 'UL15', '500', '500', 'water-bill.jpg'),
(72, '0022', '2021-11-04', 'Nov', '2500', 'UL012', '2000', '500', 'water-bill.jpg'),
(73, '02', '2021-10-04', 'Oct', '1500', 'UL432', '1000', '500', 'IMG_20211001_110801.jpg'),
(75, '147', '2021-10-19', 'Jan', '1000', 'UL1234', '500', '500', 'water-bill.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(100) NOT NULL,
  `Owner` varchar(200) NOT NULL,
  `Totalroom` varchar(200) NOT NULL,
  `Rent` varchar(200) NOT NULL,
  `Advance` varchar(200) NOT NULL,
  `Parking` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Square` varchar(200) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Nearby` varchar(200) NOT NULL,
  `Agreement` varchar(400) NOT NULL,
  `image` varchar(200) NOT NULL,
  `rules` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'AVAILABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `Owner`, `Totalroom`, `Rent`, `Advance`, `Parking`, `Type`, `Square`, `Address`, `Nearby`, `Agreement`, `image`, `rules`, `status`) VALUES
(76, 'priya@gmail.com ', '5', '5500', '40000', 'yes', '2 BHK', '1200', 'HL cross,Yeyyadi', 'mangalore', '1 year', 'a1.jpg', 'only for bachelors', 'NOT AVAILABLE'),
(79, 'priya@gmail.com ', '5', '6500', '59000', 'yes', '1 BHK', '2500', 'Gd road,bc road', 'bantwala', '1 year', '9.jpg', '1)you must pay water bill,electricity bill per month', 'NOT AVAILABLE'),
(81, 'priya@gmail.com ', '5', '6500', '60000', 'no', '2 BHK', '2500', 'belaal road,Ujire', 'ujire', '1 year', '7.jpg', '1)user must pay electricity bill', 'NOT AVAILABLE'),
(82, 'kaavya@gmail.com ', '5', '7000', '60000', 'yes', '1 BHK', '2500', 'TB cross,Ujire', 'ujire', '1 year', 'a9.jfif', '1)you must pay electicity bill,,, ', 'NOT AVAILABLE'),
(84, 'manoj@gmail.com ', '4', '5500', '55000', 'yes', '2 BHK', '2200', 'MG road,Mangalore', 'Kodialbail', '2 year', 'house10.jpg', '1)renters must pay water bill along with monthly rent', 'NOT AVAILABLE'),
(85, 'manoj@gmail.com ', '4', '7200', '80000', 'yes', '2 BHK', '2700', 'Gandhinagar ,Mangalore', 'Mangalore', '2 year', 'a1.jpg', '1)Electricty bill must paid by renter ', 'NOT AVAILABLE'),
(86, 'manoj@gmail.com ', '5', '5900', '60000', 'yes', '2 BHK', '2500', 'KL road,Mangalore', 'mangalore', '1 year', 'image1.jpg', '1)user must paid electricity bill', 'NOT AVAILABLE'),
(87, 'latha@gmail.com ', '4', '7000', '65000', 'yes', '1 BHK', '2300', 'kaikamba,BC road', 'BC road', '1 year', 'house9.jpg', '1)User must pay electricity bill\r\n2)water bill paid along with monthly rent ', 'NOT AVAILABLE'),
(88, 'latha@gmail.com ', '4', '7000', '60000', 'no', '3 BHK', '2000', 'perla road,ujire', 'ujire', '2 year', 'image1.jpg', '1)user must pay electricty bill', 'NOT AVAILABLE'),
(89, 'latha@gmail.com ', '4', '7000', '60000', 'yes', '1 BHK', '2000', 'perla road,beltangady', 'ujiree', '1 year', 'a9.jfif', '------', 'NOT AVAILABLE'),
(90, 'taara@gmail.com ', '6', '5500', '65000', 'yes', '1 BHK', '2500', 'Perla road,ujire', 'ujire,ratnamansa', '2 year', 'house9.jpg', '1)User must paid electricity bill\r\n2)vegetarian only', 'NOT AVAILABLE'),
(91, 'shree@gmail.com ', '5', '5500', '65000', 'yes', '2 BHK', '890', 'kanyadi', 'ujire', '2 year', 'a6.jpeg', 'dfg', 'NOT AVAILABLE'),
(93, 'chaya@gmail.com ', '4', '5500', '60000', 'yes', '1 BHK', '2000', 'nelamangala,Bangalore', 'Bangalore', '1 year', 'a8.jfif', '1)vegetarian only\r\n2)Renter must paid electricity bill\r\n3)water bill paid must along with monthly rent', 'NOT AVAILABLE'),
(102, 'jungkook@gmail.com ', '4', '6000', '50000', 'yes', '1 BHK', '2500', 'south korea,', 'seoul', '1 year', '5.jpg', '1)only for vegeterian\r\n2) For bachelours only', 'NOT AVAILABLE'),
(103, 'jungkook@gmail.com ', '3', '6000', '60000', 'no', '1 BHK', '2500', 'Seoul,Korea', 'Seoul', '1 year', 'a3.jpeg', '1)family only', 'AVAILABLE'),
(104, 'Ajith@gmail.com ', '4', '5000', '70000', 'yes', '2 BHK', '2500', 'santhekatte', 'Belthangady', '2 year', 'house11.jpg', '1.only for family\r\n2.Vegetarian only\r\n3.Water bill paid along with rent', 'NOT AVAILABLE'),
(105, 'Ajith@gmail.com ', '3', '4000', '400000', 'yes', '3 BHK', '2400', 'ujire', 'ujire', '1 year', 'image5.jpg', '1.only for family', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `maintain`
--

CREATE TABLE `maintain` (
  `id` int(100) NOT NULL,
  `door_no` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `nature_work` varchar(100) NOT NULL,
  `totalcharge` varchar(100) NOT NULL,
  `advance` varchar(100) NOT NULL,
  `remaining_advance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintain`
--

INSERT INTO `maintain` (`id`, `door_no`, `date`, `nature_work`, `totalcharge`, `advance`, `remaining_advance`) VALUES
(48, '000111', '2021-09-14', 'painting', '1000', '59000', '58000'),
(54, '000111', '2021-09-12', 'window/door repair', '12000', '40000', '28000'),
(55, '000111', '2021-09-19', 'pluming', '1000', '28000', '27000'),
(56, '000111', '2021-09-26', 'compound', '1000', '27000', '26000'),
(57, '636', '2021-09-29', 'painting', '5000', '55000', '50000'),
(58, '636', '2022-04-14', 'window/door repair', '6000', '50000', '44000'),
(59, '636', '2021-09-25', 'painting', '1500', '44000', '42500'),
(60, '636', '2022-10-13', 'compound', '6000', '42500', '36500'),
(61, '4', '2021-10-29', 'truss', '5000', '65000', '60000'),
(62, '0022', '2021-10-06', 'painting', '7000', '60000', '53000'),
(63, '02', '2021-12-04', 'pluming', '5000', '65000', '60000'),
(64, '147', '2021-10-17', 'painting', '10000', '50000', '40000'),
(65, '20', '2021-10-08', 'painting', '5000', '70000', '65000');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `username`, `phone`, `email`, `addres`, `question`, `answer`, `password`) VALUES
(1, 'Priya R', '7019634425', 'priya@gmail.com', 'Perla road,Belthangady \r\n', 'mother name', 'harini', 'pri123'),
(14, 'kaavya', '6361654236', 'kaavya@gmail.com', 'TB cross,Ujire', 'mother name', 'kavitha', 'kaavya123'),
(15, 'manoj', '9658472140', 'manoj@gmail.com', 'MG road,Mangalore', 'favourite food', 'Dosa', 'manoj123'),
(16, 'latha', '9658745126', 'latha@gmail.com', 'machar road,Belaal', 'favourite food', 'pizza', 'latha123'),
(17, 'taara', '9632547896', 'taara@gmail.com', 'ninikallu,belal', 'mother name', 'rashmi', 'taara123'),
(18, 'shree', '4573945678', 'shree@gmail.com', 'ujire', 'favourite food', 'pizza', 'shree123'),
(19, 'chaya', '9658421547', 'chaya@gmail.com', 'madantyar', 'nick name', 'chaanu', 'chaya123'),
(20, 'jaaja', '4521452123', 'jaaja@gmail.com', 'karinja', 'mother name', 'jaanu', 'jaaja123'),
(21, 'jungkook', '9008765431', 'jungkook@gmail.com', 'south korea', 'favourite food', 'pizza', 'jungkook'),
(22, 'Ajith', '9876543210', 'Ajith@gmail.com', 'Kanyadi', 'nick name', 'Aji', 'ajith1234');

-- --------------------------------------------------------

--
-- Table structure for table `ownercomment`
--

CREATE TABLE `ownercomment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `rate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ownercomment`
--

INSERT INTO `ownercomment` (`id`, `name`, `email`, `comment`, `rate`) VALUES
(9, 'jaaja', 'jaaja@gmail.com', 'such a good app', '3');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(100) NOT NULL,
  `door_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `amountpaid` varchar(100) NOT NULL,
  `month` varchar(200) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `paymentmode` varchar(100) NOT NULL,
  `cardnumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `door_no`, `date`, `name`, `phone`, `amount`, `amountpaid`, `month`, `balance`, `paymentmode`, `cardnumber`) VALUES
(102, '000111', '2021-09-24', 'swathi DS', '', '5500', '5500', 'February', '0', 'Cash', ''),
(105, '500', '2021-09-30', 'gururaaj', '', '6500', '6000', 'January', '500', 'Cash', ''),
(108, '600', '2022-02-28', 'usha', '', '5900', '5000', 'February', '900', 'Credit/Debit card', '741852963'),
(109, '636', '2021-09-24', 'eesha', '', '5500', '5500', 'september', '0', 'Cash', ''),
(113, '1', '2021-09-30', 'vinod', '', '7000', '7000', 'september', '0', 'Cash', ''),
(114, '4', '2021-10-01', 'prameela', '', '5500', '5500', 'october', '0', 'Cash', ''),
(121, '5', '2021-10-02', 'swathi DS', '', '5500', '5000', 'october', '500', 'Cash', ''),
(123, '0022', '2021-10-04', 'maaya', '', '5500', '4000', 'october', '1500', 'Credit/Debit card', '748569214'),
(124, '0022', '2022-03-04', 'maaya', '', '5500', '5000', 'march', '500', 'Cash', ''),
(125, '0022', '2022-04-04', 'maaya', '', '5500', '4000', 'april', '1500', 'Cash', ''),
(126, '0022', '2022-05-04', 'maaya', '', '5500', '5000', 'may', '500', 'Cash', ''),
(127, '0022', '2022-09-06', 'maaya', '', '5500', '5000', 'september', '500', 'Cash', ''),
(128, '0022', '2022-12-04', 'maaya', '', '5500', '', 'december', '5500', '', ''),
(129, '02', '2021-10-04', 'saathvika R', '', '6500', '6500', 'october', '0', 'Cash', ''),
(130, '147', '2021-10-30', 'suga', '', '6000', '5000', 'october', '1000', 'Cash', ''),
(131, '147', '2021-12-04', 'suga', '', '6000', '6000', 'december', '0', 'Cash', ''),
(132, '20', '2021-01-21', 'Anil', '', '5000', '2500', 'January', '2500', 'Cash', '');

-- --------------------------------------------------------

--
-- Table structure for table `rentusers`
--

CREATE TABLE `rentusers` (
  `id` int(100) NOT NULL,
  `owneremail` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `useraddress` varchar(200) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `advance` varchar(100) NOT NULL,
  `agreement` varchar(100) NOT NULL,
  `door_no` varchar(20) NOT NULL,
  `rr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentusers`
--

INSERT INTO `rentusers` (`id`, `owneremail`, `name`, `phone`, `useremail`, `useraddress`, `rent`, `advance`, `agreement`, `door_no`, `rr`) VALUES
(64, 'priya@gmail.com ', 'swathi DS', '963215478', 'swathi@gmail.com', 'Belthangady', '5500', '26000', '1 year', '000111', ''),
(67, 'kaavya@gmail.com ', 'chandana', '7896584210', 'chandana@gmail.com', 'kanyadi ||', '7000', '60000', '1 year', '586', ''),
(68, 'priya@gmail.com ', 'gururaaj', '6361654311', 'gururaaj@gmail.com', 'kuppetti, Uppinangady', '6500', '59000', '1 year', '500', ''),
(69, 'manoj@gmail.com ', 'eesha', '7485961245', 'eesha@gamil.com', 'Uppala,kasargodu', '5500', '36500', '2 year', '636', ''),
(70, 'manoj@gmail.com ', 'Dhanya', '972514521', 'danya@gmail.com', 'MG road,mangalore', '7200', '80000', '2 year', '635', ''),
(71, 'manoj@gmail.com ', 'usha', '9658471254', 'usha@gmail.com', 'Church road,belthangady', '5900', '60000', '1 year', '600', ''),
(72, 'latha@gmail.com ', 'vinod', '7418529638', 'vinod@gmail.com', 'kundadka , Kabaka', '7000', '65000', '1 year', '1', ''),
(74, 'taara@gmail.com ', 'prameela', '9638527415', 'prameela@gmail.com', 'mG road,ujire', '5500', '60000', '2 year', '4', ''),
(78, 'latha@gmail.com ', 'faathima', '7485965214', 'faathima@gmail.com', 'maddadka,', '7000', '60000', '1 year', '145', 'UL15'),
(79, 'chaya@gmail.com ', 'maaya', '7865455512', 'maaya@gmail.com', 'perla road,ujire', '5500', '53000', '1 year', '0022', 'UL012'),
(81, 'jungkook@gmail.com ', 'suga', '1234567890', 'suga@gmail.com', 'ujire', '6000', '40000', '1 year', '147', 'UL1234'),
(82, 'Ajith@gmail.com ', 'Anil', '3536474873', 'anil@gmail.com', 'ujire', '5000', '65000', '2 year', '20', 'UL123'),
(83, 'Ajith@gmail.com ', 'Anil', '3536474873', 'anil@gmail.com', 'ujire', '4000', '400000', '1 year', '21', 'ul657'),
(84, 'Ajith@gmail.com ', 'Anil', '3536474873', 'anil@gmail.com', 'ujire', '4000', '400000', '1 year', '21', 'ul657');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `adhar` varchar(15) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `address`, `adhar`, `nation`, `question`, `answer`, `password`) VALUES
(1, 'swathi DS', '963215478', 'swathi@gmail.com', 'Belthangady', '963852741852', 'Indian', 'nick name', 'swa', 'swathi'),
(2, 'Dhanya', '972514521', 'danya@gmail.com', 'MG road,mangalore', '3214562145214', 'Indian', 'favourite food', 'gobi', 'danya'),
(17, 'chandana', '7896584210', 'chandana@gmail.com', 'kanyadi ||', '741852963125', 'indian', 'nick name', 'chan', 'chandana'),
(18, 'gururaaj', '6361654311', 'gururaaj@gmail.com', 'kuppetti, Uppinangady', '431578962514', 'indian', 'favourite food', 'pizza', 'gururaaj'),
(19, 'eesha', '7485961245', 'eesha@gamil.com', 'Uppala,kasargodu', '431258479645', 'indian', 'Security Questions', 'Harshita', 'eesha123'),
(20, 'usha', '9658471254', 'usha@gmail.com', 'Church road,belthangady', '965847125412', 'indian', 'nick name', 'ush', 'usha123'),
(21, 'vinod', '7418529638', 'vinod@gmail.com', 'kundadka , Kabaka', '741852963852', 'indian', 'mother name', 'mamatha', 'vinod123'),
(22, 'prameela', '9638527415', 'prameela@gmail.com', 'mG road,ujire', '741852963456', 'indian', 'mother name', 'prema', 'prameela123'),
(23, 'gaana', '7418596522', 'gaana@gmail.com', 'fghj', '741852963741', 'austrian', 'favourite food', 'pizza', 'gaana123'),
(24, 'faathima', '7485965214', 'faathima@gmail.com', 'maddadka,', '123456789123', 'indian', 'favourite food', 'pizza', 'faathima123'),
(25, 'maaya', '7865455512', 'maaya@gmail.com', 'perla road,ujire', '741852963654', 'indian', 'favourite food', 'pizza', 'maaya123'),
(26, 'saathvika R', '8777654333', 'saathvika@gmail.com', 'mangalore', '444442542236', 'indian', 'date of birth', '21-11-2000', 'saathvika123'),
(27, 'suga', '1234567890', 'suga@gmail.com', 'ujire', '741852963852', 'indian', 'favourite food', 'pizza', 'suga123'),
(28, 'Anil', '3536474873', 'anil@gmail.com', 'ujire', '236566445534', 'indian', 'favourite food', 'dosa', 'anil123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electricity`
--
ALTER TABLE `electricity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintain`
--
ALTER TABLE `maintain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ownercomment`
--
ALTER TABLE `ownercomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentusers`
--
ALTER TABLE `rentusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `electricity`
--
ALTER TABLE `electricity`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `maintain`
--
ALTER TABLE `maintain`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ownercomment`
--
ALTER TABLE `ownercomment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `rentusers`
--
ALTER TABLE `rentusers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
