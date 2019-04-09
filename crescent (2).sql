-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 08:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crescent`
--

-- --------------------------------------------------------

--
-- Table structure for table `eduaid`
--

CREATE TABLE `eduaid` (
  `Application_No` int(12) NOT NULL,
  `Adhaar_No` int(20) NOT NULL,
  `Marks_Obtained` int(20) NOT NULL,
  `Course_Applied` varchar(20) NOT NULL,
  `Course_Duration` varchar(20) NOT NULL,
  `Instituion_Name` varchar(20) NOT NULL,
  `Fees_Structure` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eduaid`
--

INSERT INTO `eduaid` (`Application_No`, `Adhaar_No`, `Marks_Obtained`, `Course_Applied`, `Course_Duration`, `Instituion_Name`, `Fees_Structure`) VALUES
(1, 123456787, 600, 'be', '4', 'cahcet', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `edunew`
--

CREATE TABLE `edunew` (
  `Adhaar_No` int(12) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Date_of_birth` varchar(15) NOT NULL,
  `Age` int(3) NOT NULL,
  `Father_name` varchar(30) NOT NULL,
  `Mobile_No` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Currently` varchar(10) NOT NULL,
  `Past_Inst` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `edunew`
--

INSERT INTO `edunew` (`Adhaar_No`, `First_Name`, `Last_Name`, `Date_of_birth`, `Age`, `Father_name`, `Mobile_No`, `Address`, `Currently`, `Past_Inst`) VALUES
(123454321, 'moh', 'kabir', '2019-04-23', 32, 'asdffdsa', 'fghjhgf', 'vbjkjhgfd', 'cfghnm', 'gfdfghj'),
(123456787, 'moh', 'htdytcch', '2019-04-18', 22, 'asdfg', '8976543', 'ameenba st', 'asd', 'asd'),
(2147483647, 'moh', 'tal', '2019-04-09', 7, 'sdfgoiuhg', '234567890', '123asdfgqwertymnbvcx', 'WEFEWEG', 'hgvh');

-- --------------------------------------------------------

--
-- Table structure for table `mediaid`
--

CREATE TABLE `mediaid` (
  `Application_No` int(11) NOT NULL,
  `aadhar_id` int(11) NOT NULL,
  `Details` varchar(50) NOT NULL,
  `Amount_Sanctioned` varchar(20) NOT NULL,
  `Amount_Sanctioned_words` varchar(20) NOT NULL,
  `Date_of_transaction` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mediaid`
--

INSERT INTO `mediaid` (`Application_No`, `aadhar_id`, `Details`, `Amount_Sanctioned`, `Amount_Sanctioned_words`, `Date_of_transaction`) VALUES
(1, 2147483647, 'submitted', '45000', 'fourty five thousand', '2019-04-18'),
(2, 2147483647, 'Admitted', '10000', 'ten thousand', '2019-04-24'),
(3, 2147483647, 'discharged', '3000', 'three thousand', '2019-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `medinew`
--

CREATE TABLE `medinew` (
  `aadhar_id` int(10) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Age` int(2) NOT NULL,
  `Mobile_No` int(10) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Town_City` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medinew`
--

INSERT INTO `medinew` (`aadhar_id`, `First_Name`, `Last_Name`, `Date_of_birth`, `Age`, `Mobile_No`, `Address`, `Town_City`) VALUES
(1234567, 'mohammed', 'htdytcch', '2019-04-09', 15, 2147483647, '123asdfgqwertymnbvcx', ''),
(2147483647, 'aaaaaa', 'kabir', '2019-04-09', 9, 2147483647, 'asdfghjki76rewedfghj', 'melvisharam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eduaid`
--
ALTER TABLE `eduaid`
  ADD PRIMARY KEY (`Application_No`),
  ADD KEY `Adhaar_No` (`Adhaar_No`);

--
-- Indexes for table `edunew`
--
ALTER TABLE `edunew`
  ADD PRIMARY KEY (`Adhaar_No`);

--
-- Indexes for table `mediaid`
--
ALTER TABLE `mediaid`
  ADD PRIMARY KEY (`Application_No`),
  ADD KEY `aadhar_id` (`aadhar_id`);

--
-- Indexes for table `medinew`
--
ALTER TABLE `medinew`
  ADD PRIMARY KEY (`aadhar_id`),
  ADD UNIQUE KEY `aadhar_id` (`aadhar_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eduaid`
--
ALTER TABLE `eduaid`
  ADD CONSTRAINT `eduaid_ibfk_1` FOREIGN KEY (`Adhaar_No`) REFERENCES `edunew` (`Adhaar_No`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
