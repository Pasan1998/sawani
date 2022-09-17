-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 02:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clickdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `MobileNumber` varchar(12) DEFAULT NULL,
  `Message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `MobileNumber`, `Message`) VALUES
(1, 'Chamma', 'Chamma@gmail.com', '0711904150', 'Nice Service'),
(2, 'Sulakshana Herath', 'thejsh26@gmail.com', '0771234567', 'bla ba blaaa'),
(3, 'Chama', 'chamma@gmail.com', '9632123698', 'hii byee hii');

-- --------------------------------------------------------

--
-- Table structure for table `tblabout`
--

CREATE TABLE `tblabout` (
  `ID` int(10) NOT NULL,
  `WeAre` varchar(500) DEFAULT NULL,
  `Mission` varchar(500) DEFAULT NULL,
  `Photographers` varchar(500) DEFAULT NULL,
  `Facilities` varchar(1000) DEFAULT NULL,
  `Team` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblabout`
--

INSERT INTO `tblabout` (`ID`, `WeAre`, `Mission`, `Photographers`, `Facilities`, `Team`) VALUES
(1, 'Memory Clicks is a distinctive photography company formed by a well-skilled group with over five years of experience. Our team is compiled of three professional photographers who are excellent in various fields of photography.', 'Our Mission is to provide a unique service always by updating with emerging technological advancements. Furthermore, we expect to create a lasting memory for the clients in their every special occasion through our creative memory clicks.', '*James Robinson-B.A.In Studio Arts(Photography,Media Concentration)-USA.<br>\r\n*Anne Marine-B.A.In Photography and Arts-UK.<br>\r\n*Rahul Kumar-B.Sc.In Photography-University of Kolkata', '* Introducing Packages with Platinum, Gold, Silver.<br>\r\n* Customizable packages for every events.<br>\r\n* Offering Discounts for the packages.<br>\r\n* Covering whole event by a Professional Photographer.<br>\r\n* Special discounts for wedding orders with preshoots.<br>\r\n* Novel Technology applying with customer preference<br>\r\n* Availability of HD, Full HD, 4K features.<br>\r\n* Quality photo and video editing.<br>\r\n* Unique photographs with creative ideas.<br>\r\n* Customer friendly service.<br>\r\n*  Active and talented team service.', '*Mathew Hardi<br>\r\n*Cristine Shannie<br>\r\n*Richard Elvin');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'admin', 'admin', 705204692, 'thejsh26@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-08-25 09:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblbirthday`
--

CREATE TABLE `tblbirthday` (
  `ID` int(60) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageFee` varchar(200) DEFAULT NULL,
  `PackageDiliveryTime` varchar(200) DEFAULT NULL,
  `PackageDetails` longtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbirthday`
--

INSERT INTO `tblbirthday` (`ID`, `PackageName`, `PackageFee`, `PackageDiliveryTime`, `PackageDetails`, `CreationDate`) VALUES
(1, 'Gold Package', 'Rs.20,000/=', '48 hours', '3 Hours Coverage<br>\r\n1 Location<br>\r\nAll Usable Images<br>\r\nKeep Sake Videos', '2022-09-14 20:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `ID` int(10) NOT NULL,
  `ConMobNo` varchar(12) DEFAULT NULL,
  `ConEmail` varchar(100) DEFAULT NULL,
  `ConAddress` varchar(200) DEFAULT NULL,
  `ConDes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`ID`, `ConMobNo`, `ConEmail`, `ConAddress`, `ConDes`) VALUES
(1, '1234567890', 'Click@gmail.com', 'Colombo 06', 'Hello there, contact us anytime you got an issue related our work!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `tblotherfunc`
--

CREATE TABLE `tblotherfunc` (
  `ID` int(60) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageFee` varchar(200) DEFAULT NULL,
  `PackageDiliveryTime` varchar(200) DEFAULT NULL,
  `PackageDetails` longtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblotherfunc`
--

INSERT INTO `tblotherfunc` (`ID`, `PackageName`, `PackageFee`, `PackageDiliveryTime`, `PackageDetails`, `CreationDate`) VALUES
(1, 'Gold Package', 'Rs.40,000/=', '7 Days', '8 Hours Coverage<br>\r\n1 Location<br>\r\nAll Usable Images', '2022-09-14 20:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `ID` int(10) NOT NULL,
  `UserID` int(5) NOT NULL,
  `OrderID` varchar(200) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` varchar(12) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Venue` varchar(100) DEFAULT NULL,
  `Date` varchar(20) DEFAULT NULL,
  `Function` varchar(20) DEFAULT NULL,
  `Package` varchar(15) DEFAULT NULL,
  `Other` varchar(500) DEFAULT NULL,
  `Dateofapply` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `STime` varchar(20) NOT NULL,
  `ETime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`ID`, `UserID`, `OrderID`, `Name`, `MobileNumber`, `Email`, `Address`, `Venue`, `Date`, `Function`, `Package`, `Other`, `Dateofapply`, `Remark`, `Status`, `UpdationDate`, `STime`, `ETime`) VALUES
(1, 10, '119352433', 'Chamma', '0711904150', 'Chamma@gmail.com', 'Rambukkana', 'Galadari ', '2022-09-07', 'Home Coming', 'Package No:2', 'nothing', '2022-09-04 19:10:40', 'Verified', 'Verified', '2022-09-05 03:44:47', '00:40', '12:40'),
(2, 10, '399837390', 'Chamma', '0711904150', 'Chamma@gmail.com', 'Rambukkana', 'Araliya Hotel-Mawanella', '2026-05-05', 'Birthday', 'Package No:1', 'No', '2022-09-04 22:33:08', 'Verified', 'Verified', '2022-09-14 13:44:20', '16:02', '20:02'),
(3, 9, '166883231', 'Thejani', '0705204692', 'thejsh26@gmail.com', 'Mawanella', 'abgnhg', '2022-09-14', 'Batch Party', 'Package No:2', 'Can be change the end time\r\n', '2022-09-04 22:34:46', 'We are really Sorry, We have another function on that day. ', 'Rejected', '2022-09-05 03:47:53', '19:04', '22:04'),
(4, 4, '450405016', 'Anjula', '0771234567', 'test@gmail.com', 'Colombo', 'Dafodils Negombo', '2022-09-13', 'Birthday', 'Package No:1', 'No', '2022-09-04 22:36:20', NULL, NULL, NULL, '18:00', '20:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `Email` varchar(20) NOT NULL,
  `UserName` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Address`, `Password`, `RegDate`, `Email`, `UserName`) VALUES
(4, 'Anujla', 'Kumaranayake', 771234567, 'Colombo', '0cbc6611f5540bd0809a388dc95a615b', '2020-02-20 11:53:05', 'test@gmail.com', 'Test'),
(9, 'Thejani', 'Sulakshana', 9632123677, 'Mawanella', '7ee5d427688c9c62fc840c58f63419c8', '2022-09-03 03:45:39', 'thejsh26@gmail.com', 'Thej'),
(10, 'Chamara', 'Dhananjaya', 711904150, 'Rambukkana', '2454a1dd7f22999bbbc04c09fc2e2e0f', '2022-09-03 13:20:55', 'Chamma27@gmail.com', 'Chamma'),
(11, 'Savandi', 'Kumaranayake', 705512332, 'ranwala,Kegalle', 'fef23513f600abeb64292cc619b9b4cf', '2022-09-07 22:15:22', 'sava19@gmail.com', 'Sava');

-- --------------------------------------------------------

--
-- Table structure for table `tblwedding`
--

CREATE TABLE `tblwedding` (
  `ID` int(60) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageFee` varchar(200) DEFAULT NULL,
  `PackageDiliveryTime` varchar(200) DEFAULT NULL,
  `PackageDetails` longtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblwedding`
--

INSERT INTO `tblwedding` (`ID`, `PackageName`, `PackageFee`, `PackageDiliveryTime`, `PackageDetails`, `CreationDate`) VALUES
(1, 'Gold Package', 'Rs.70,000/=', '2 weeks', '12 x 30 Main Album<br>\r\n12 x 16 Family Album<br>\r\nFramed Photo<br>\r\nThank you Cards<br>\r\nPre-shoot Photo Session<br>', '2022-09-14 19:13:01'),
(2, 'Silver Package', 'Rs.60,000/=', '2 weeks', '10 x 24 Main Album<br>\r\n12 x 16 Framed Photo<br>\r\nThank you Cards<br>\r\nAll Original Images<br>\r\nOne Day Coverage', '2022-09-14 21:03:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblabout`
--
ALTER TABLE `tblabout`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbirthday`
--
ALTER TABLE `tblbirthday`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblotherfunc`
--
ALTER TABLE `tblotherfunc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblwedding`
--
ALTER TABLE `tblwedding`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblabout`
--
ALTER TABLE `tblabout`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbirthday`
--
ALTER TABLE `tblbirthday`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblotherfunc`
--
ALTER TABLE `tblotherfunc`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblservice`
--
ALTER TABLE `tblservice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblwedding`
--
ALTER TABLE `tblwedding`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
