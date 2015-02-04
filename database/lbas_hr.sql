-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2015 at 04:28 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lbas_hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_schedule`
--

CREATE TABLE IF NOT EXISTS `applicant_schedule` (
  `Schedule_ID` varchar(11) NOT NULL,
  `ID_No` varchar(11) NOT NULL,
  `HR_Date` date NOT NULL,
  `HR_Time` time NOT NULL,
  `HR_Status` varchar(7) NOT NULL,
  `Teaching_Date` date NOT NULL,
  `Teaching_Time` time NOT NULL,
  `Teaching_Status` varchar(7) NOT NULL,
  `Test_Date` date NOT NULL,
  `Test_Time` time NOT NULL,
  `Test_Status` varchar(7) NOT NULL,
  `Coordinator_Date` date NOT NULL,
  `Coordinator_Time` time NOT NULL,
  `Coordinator_Status` varchar(7) NOT NULL,
  `Principal_Date` int(11) NOT NULL,
  `Principal_Time` time NOT NULL,
  `Principal_Status` varchar(7) NOT NULL,
  `HR_Comments` varchar(500) NOT NULL,
  `Applicant_Comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `S_Code` varchar(15) NOT NULL,
  `ID_No` varchar(11) NOT NULL,
  `A_Status` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `L_Code` varchar(15) NOT NULL,
  `ID_No` varchar(11) NOT NULL,
  `L_Start` date NOT NULL,
  `L_End` int(11) NOT NULL,
  `Reason` varchar(150) NOT NULL,
  `L_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `ID_No` varchar(11) NOT NULL DEFAULT '0',
  `P_Word` varchar(15) NOT NULL,
  `L_Name` varchar(15) DEFAULT NULL,
  `F_Name` varchar(15) DEFAULT NULL,
  `M_Name` varchar(15) DEFAULT NULL,
  `B_Day` date DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `C_Status` varchar(10) DEFAULT NULL,
  `E_Status` varchar(12) DEFAULT NULL,
  `Resume` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`ID_No`, `P_Word`, `L_Name`, `F_Name`, `M_Name`, `B_Day`, `Gender`, `C_Status`, `E_Status`, `Resume`) VALUES
('6836667594', 'z59upr', NULL, 'gaston', NULL, NULL, 'M', NULL, 'Applicant', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resignation`
--

CREATE TABLE IF NOT EXISTS `resignation` (
  `R_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `D_Filed` date NOT NULL,
  `R_Status` varchar(10) NOT NULL,
  `D_Approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `ID_No` varchar(11) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `M_No` int(11) DEFAULT NULL,
  `T_No` int(11) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Street` varchar(40) DEFAULT NULL,
  `Z_Code` int(11) DEFAULT NULL,
  `C_Status` varchar(12) DEFAULT NULL,
  `H_School` varchar(30) DEFAULT NULL,
  `College` varchar(30) DEFAULT NULL,
  `Course` varchar(15) DEFAULT NULL,
  `Y_Graduated` date DEFAULT NULL,
  `Awards` varchar(500) DEFAULT NULL,
  `S_Attended` varchar(500) DEFAULT NULL,
  `S_Facilitated` varchar(500) DEFAULT NULL,
  `C_Activities` varchar(500) DEFAULT NULL,
  `Specialty` varchar(150) DEFAULT NULL,
  `P_Company` varchar(30) DEFAULT NULL,
  `P_Position` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`ID_No`, `Email`, `M_No`, `T_No`, `City`, `Street`, `Z_Code`, `C_Status`, `H_School`, `College`, `Course`, `Y_Graduated`, `Awards`, `S_Attended`, `S_Facilitated`, `C_Activities`, `Specialty`, `P_Company`, `P_Position`) VALUES
('6836667594', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retirement`
--

CREATE TABLE IF NOT EXISTS `retirement` (
  `Ret_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `Ret_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `termination`
--

CREATE TABLE IF NOT EXISTS `termination` (
  `T_Code` varchar(15) NOT NULL,
  `ID_No` int(11) NOT NULL,
  `T_Date` date NOT NULL,
  `Reason` int(11) NOT NULL,
  `T_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_schedule`
--
ALTER TABLE `applicant_schedule`
 ADD PRIMARY KEY (`Schedule_ID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
 ADD PRIMARY KEY (`ID_No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
