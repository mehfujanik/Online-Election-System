-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 03:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(25) NOT NULL,
  `Pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Pass`) VALUES
('mehfujanik', '129050');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `FullName` varchar(25) NOT NULL,
  `Father` varchar(25) NOT NULL,
  `Mother` varchar(25) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `NID` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Ballot` int(11) NOT NULL,
  `VoteCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`FullName`, `Father`, `Mother`, `Address`, `NID`, `DOB`, `Gender`, `Ballot`, `VoteCount`) VALUES
('B M shofi', 'Gias Uddin', 'Sayra Begum', '1001, East Jurain Dhaka-1204', 123456789, '1983-10-12', 'Male', 1, 5),
('Zahirul Islam', 'Nuru Mia', 'Rahima Ahmed', '123 , Monua, Damudda', 2147483647, '1989-02-16', 'Male', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `freeze`
--

CREATE TABLE `freeze` (
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freeze`
--

INSERT INTO `freeze` (`value`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `FullName` varchar(25) DEFAULT NULL,
  `Father` varchar(25) DEFAULT NULL,
  `Mother` varchar(25) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `NID` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Gender` varchar(15) DEFAULT NULL,
  `Pass` varchar(15) DEFAULT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`FullName`, `Father`, `Mother`, `Address`, `NID`, `DOB`, `Gender`, `Pass`, `vote`) VALUES
('Abdul Mannan Omi', 'abdul hannan', 'shanta', '2312 ghasjkdh asjhs', '0987654321', '1982-06-08', 'Male', 'Aaa123456', 1),
('Mehfuj Ahmed Anik', 'B M shofi', 'Moyna Ahmed', '1001, East Jurain, Eidgah Mashjid Road, Dhaka-1204', '1234567890', '1994-06-14', 'Male', 'Maa123456', 1),
('Abdul Mannan Omi', 'Abdul Awal', 'Pervin Begum', 'Dhaka', '1212121212', '1998-06-05', 'Male', 'Applebook007', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
