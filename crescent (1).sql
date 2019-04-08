-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 11:11 AM
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
-- Table structure for table `edunew`
--

CREATE TABLE `edunew` (
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Date_of_birth` varchar(15) NOT NULL,
  `Age` int(3) NOT NULL,
  `Father_name` varchar(30) NOT NULL,
  `Mobile_no` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(0, 1234567, 'Admitted\\', '3000', 'ten k', '2019-04-04'),
(3, 1234567, 'Admitted', '3000', 'three thousand', '2019-04-22'),
(4, 1234567, 'discharged', '10000', 'ten thousand', '2019-04-26'),
(9, 1234567, 'Admitted\\', '3000', 'three thousand', '2019-04-01'),
(10, 2147483647, 'just staying', '10000', 'ten thousand', '0000-00-00'),
(21, 1234567, 'Admitted', '10000', 'ten thousand', '1998-11-01'),
(23, 1234567, '\\', '10000', 'ten thousand', '2019-10-30'),
(25, 1234567, 'discharged', '10000', 'ghcvjhbknml,', '2019-04-17'),
(30, 1234567, 'discharged', '10000', 'ten k', '2019-04-08'),
(34, 1234567, 'Admitted\\', '10000', 'excvfjgkjlmkjhjghfcx', '2019-04-17'),
(88, 1234567, 'discharged', '10000', 'ten k', '2019-04-09'),
(99, 1234567, 'dead', '45000', 'fourty five thousand', '2019-04-27'),
(333, 1234567, 'fdcyjvbhj,k,', 'mhcvjbnkml', 'ghcvjhbknml,', '2019-04-16'),
(345, 1234567, 'burried', '45000', 'excvfjgkjlmkjhjghfcx', '2019-04-19'),
(455, 2147483647, 'dead', '309099', 'excvfjgkjlmkjhjghfcx', '2019-04-18'),
(543, 1234567, 'dead', '309099', 'gfxdfhckjbn ', '2019-04-17'),
(550, 2147483647, 'dead', '546789', 'excvfjgkjlmkjhjghfcx', '2019-04-18'),
(564, 1234567, 'fdcyjvbhj,k,', '45000', 'some amounts ', '2019-04-27'),
(678, 2147483647, 'discharged', '45000', 'fourty five thousand', '2019-04-11'),
(679, 2147483647, 'cfgjvbhknjmk', '546789', 'fcvhbgjhnkjmk,l', '1999-02-13'),
(765, 2147483647, 'fdcyjvbhj,k,', 'mhcvjbnkml', 'ten k', '2019-04-26'),
(777, 1234567, 'Admitted', '309099', 'excvfjgkjlmkjhjghfcx', '2019-04-18'),
(778, 1234567, 'just staying', 'mhcvjbnkml', 'ten thousand', '2019-04-03'),
(7687, 1234567, 'fdcyjvbhj,k,', '10000', 'some amounts ', '2019-12-31'),
(9876, 1234567, 'Admitted\\', '309099', 'excvfjgkjlmkjhjghfcx', '2019-04-19'),
(56789, 1234567, 'dfghjk', 'edrftgyhuji', '4r5t6y7u8i9', '2019-04-18');

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
(373737, 'asdfghjkiuhygfg', 'jkhyugtftvbjbyu', '2019-04-24', 21, 2147483647, '123asdfgqwertymnbvcx', 'khdxhvkho'),
(1234567, 'moh', 'tal', '1998-11-21', 20, 977, 'ameenba st', 'melvisharam'),
(2147483647, 'aaabbbddd', 'xxxyyyzzz', '1995-04-05', 21, 876543452, 'nanknknnknaknjsj', 'mmaalllss');

--
-- Indexes for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
