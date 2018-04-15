-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 11:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosis`
--

CREATE TABLE `tbl_diagnosis` (
  `diagnosisId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `deskripsiDiagnosis` text CHARACTER SET utf8 NOT NULL,
  `severity` int(11) DEFAULT NULL,
  `kodMYDRG` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doktor`
--

CREATE TABLE `tbl_doktor` (
  `doktorId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `userId` int(11) NOT NULL,
  `kataLaluanD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doktor`
--

INSERT INTO `tbl_doktor` (`doktorId`, `userId`, `kataLaluanD`) VALUES
('D01', 1, 'Qwerty12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grouping`
--

CREATE TABLE `tbl_grouping` (
  `groupingID` int(11) NOT NULL,
  `diagnosisID` varchar(5) CHARACTER SET utf8 NOT NULL,
  `procedureID` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jururawat`
--

CREATE TABLE `tbl_jururawat` (
  `jururawatId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `userId` int(11) NOT NULL,
  `noTel` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jururawat`
--

INSERT INTO `tbl_jururawat` (`jururawatId`, `userId`, `noTel`) VALUES
('J01', 2, '0182686863');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klinikal`
--

CREATE TABLE `tbl_klinikal` (
  `kllinikalId` varchar(7) CHARACTER SET utf8 NOT NULL,
  `doktorId` varchar(7) CHARACTER SET utf8 NOT NULL,
  `statusPelepasan` text CHARACTER SET utf8 NOT NULL,
  `diagnosisId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `prosedurId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `kodDRG` varchar(10) NOT NULL,
  `pesakitId` int(7) NOT NULL,
  `jururawatId` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_koddrg`
--

CREATE TABLE `tbl_koddrg` (
  `kodDRG` varchar(10) CHARACTER SET utf8 NOT NULL,
  `severity` int(1) DEFAULT NULL,
  `deskripsiDRG` varchar(100) CHARACTER SET utf8 NOT NULL,
  `final_cost_weight` decimal(18,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_koddrg`
--

INSERT INTO `tbl_koddrg` (`kodDRG`, `severity`, `deskripsiDRG`, `final_cost_weight`) VALUES
('I-3-12', 0, 'OTHER MINOR CARDIAC OPERATIONS  ', '4.8641'),
('Q-5-44', 0, 'AMBULATORY VISIT FOR OTHER MINOR CHRONIC DISEASES', '0.9604'),
('X-0-20', 0, 'ERROR: PRINCIPLE DIAGNOSIS CODE MISMATCH', '0.0000'),
('Z-3-15-0', 0, 'CARDIAC NUCLEAR IMAGING STUDIES', '0.9160');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peribadi`
--

CREATE TABLE `tbl_peribadi` (
  `pesakitiId` int(7) NOT NULL,
  `userId` int(11) NOT NULL,
  `icPesakit` varchar(14) NOT NULL,
  `namaPesakit` varchar(30) NOT NULL,
  `noInsurans` varchar(13) NOT NULL,
  `noMrn` varchar(10) NOT NULL,
  `jantina` varchar(15) NOT NULL,
  `tarikhLahir` varchar(10) NOT NULL,
  `umur` int(5) NOT NULL,
  `umurHari` int(5) DEFAULT NULL,
  `berat` varchar(5) NOT NULL,
  `doktorId` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `jururawatId` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peribadi`
--

INSERT INTO `tbl_peribadi` (`pesakitiId`, `userId`, `icPesakit`, `namaPesakit`, `noInsurans`, `noMrn`, `jantina`, `tarikhLahir`, `umur`, `umurHari`, `berat`, `doktorId`, `jururawatId`) VALUES
(1001, 3, '961115-14-6636', 'Amira', 'QQ123456C', '1482928', 'Female', '14/11/1990', 28, 0, '60', 'D01', 'J01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesakit`
--

CREATE TABLE `tbl_pesakit` (
  `pesakitId` int(7) NOT NULL,
  `doktorId` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesakit`
--

INSERT INTO `tbl_pesakit` (`pesakitId`, `doktorId`) VALUES
(1001, 'D01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prosedur`
--

CREATE TABLE `tbl_prosedur` (
  `prosedurId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `deskripsiProsedur` varchar(163) CHARACTER SET utf8 NOT NULL,
  `kelasProsedur` varchar(11) CHARACTER SET utf8 NOT NULL,
  `kodDRG` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prosedur`
--

INSERT INTO `tbl_prosedur` (`prosedurId`, `deskripsiProsedur`, `kelasProsedur`, `kodDRG`) VALUES
('8749', 'Other chest x-ray', '', 'Q-5-44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tariff`
--

CREATE TABLE `tbl_tariff` (
  `idTariff` int(7) NOT NULL,
  `kodDRG` varchar(10) CHARACTER SET utf8 NOT NULL,
  `deskripsiDRG` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tariff` varchar(22) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tariff`
--

INSERT INTO `tbl_tariff` (`idTariff`, `kodDRG`, `deskripsiDRG`, `tariff`) VALUES
(2001, 'Q-5-44', 'AMBULATORY VISIT FOR OTHER MINOR CHRONIC DISEASES', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(7) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `userRole` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `firstName`, `lastName`, `userRole`, `email`, `pass`) VALUES
(1, 'Syazwana', 'Aljunid', 'Doktor', 'syazwanaaljunid1996@gmail.com', 'Syazwana96\r\n'),
(2, 'Syazwan ', 'Aljunid', 'Jururawat', 'syazwanaljunid@gmail.com', 'Syazwan05'),
(3, 'Amira', 'Syahirah', 'Pesakit', 'amirasyahirah@gmail.com', 'Amira21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  ADD PRIMARY KEY (`diagnosisId`),
  ADD KEY `kodDRG` (`kodMYDRG`);

--
-- Indexes for table `tbl_doktor`
--
ALTER TABLE `tbl_doktor`
  ADD PRIMARY KEY (`doktorId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `tbl_grouping`
--
ALTER TABLE `tbl_grouping`
  ADD PRIMARY KEY (`groupingID`),
  ADD KEY `diagnosisID` (`diagnosisID`,`procedureID`),
  ADD KEY `fk_grouping_prosedur` (`procedureID`);

--
-- Indexes for table `tbl_jururawat`
--
ALTER TABLE `tbl_jururawat`
  ADD PRIMARY KEY (`jururawatId`),
  ADD KEY `userId` (`userId`) USING BTREE;

--
-- Indexes for table `tbl_klinikal`
--
ALTER TABLE `tbl_klinikal`
  ADD PRIMARY KEY (`kllinikalId`),
  ADD KEY `pesakitId` (`pesakitId`),
  ADD KEY `jururawatId` (`jururawatId`),
  ADD KEY `doktorId` (`doktorId`),
  ADD KEY `prosedurId` (`prosedurId`),
  ADD KEY `diagnosisId` (`diagnosisId`);

--
-- Indexes for table `tbl_koddrg`
--
ALTER TABLE `tbl_koddrg`
  ADD PRIMARY KEY (`kodDRG`);

--
-- Indexes for table `tbl_peribadi`
--
ALTER TABLE `tbl_peribadi`
  ADD PRIMARY KEY (`pesakitiId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `doktorId` (`doktorId`),
  ADD KEY `jururawatId` (`jururawatId`);

--
-- Indexes for table `tbl_pesakit`
--
ALTER TABLE `tbl_pesakit`
  ADD PRIMARY KEY (`pesakitId`),
  ADD KEY `doktorId` (`doktorId`);

--
-- Indexes for table `tbl_prosedur`
--
ALTER TABLE `tbl_prosedur`
  ADD PRIMARY KEY (`prosedurId`),
  ADD KEY `kodDRG` (`kodDRG`);

--
-- Indexes for table `tbl_tariff`
--
ALTER TABLE `tbl_tariff`
  ADD PRIMARY KEY (`idTariff`),
  ADD KEY `kodDRG` (`kodDRG`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_grouping`
--
ALTER TABLE `tbl_grouping`
  MODIFY `groupingID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_peribadi`
--
ALTER TABLE `tbl_peribadi`
  MODIFY `pesakitiId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `tbl_pesakit`
--
ALTER TABLE `tbl_pesakit`
  MODIFY `pesakitId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `tbl_tariff`
--
ALTER TABLE `tbl_tariff`
  MODIFY `idTariff` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_diagnosis`
--
ALTER TABLE `tbl_diagnosis`
  ADD CONSTRAINT `fk_diagnosis_kodDrg` FOREIGN KEY (`kodMYDRG`) REFERENCES `tbl_koddrg` (`kodDRG`);

--
-- Constraints for table `tbl_doktor`
--
ALTER TABLE `tbl_doktor`
  ADD CONSTRAINT `fk_doktor_user` FOREIGN KEY (`userId`) REFERENCES `tbl_user` (`userId`);

--
-- Constraints for table `tbl_grouping`
--
ALTER TABLE `tbl_grouping`
  ADD CONSTRAINT `fk_grouping_diagnosis` FOREIGN KEY (`diagnosisID`) REFERENCES `tbl_diagnosis` (`diagnosisId`),
  ADD CONSTRAINT `fk_grouping_prosedur` FOREIGN KEY (`procedureID`) REFERENCES `tbl_prosedur` (`prosedurId`);

--
-- Constraints for table `tbl_jururawat`
--
ALTER TABLE `tbl_jururawat`
  ADD CONSTRAINT `fk_jururawat_user` FOREIGN KEY (`userId`) REFERENCES `tbl_user` (`userId`);

--
-- Constraints for table `tbl_klinikal`
--
ALTER TABLE `tbl_klinikal`
  ADD CONSTRAINT `fk_klinikal_diagnosis` FOREIGN KEY (`diagnosisId`) REFERENCES `tbl_diagnosis` (`diagnosisId`),
  ADD CONSTRAINT `fk_klinikal_doktor` FOREIGN KEY (`doktorId`) REFERENCES `tbl_doktor` (`doktorId`),
  ADD CONSTRAINT `fk_klinikal_jururawat` FOREIGN KEY (`jururawatId`) REFERENCES `tbl_jururawat` (`jururawatId`),
  ADD CONSTRAINT `fk_klinikal_pesakit` FOREIGN KEY (`pesakitId`) REFERENCES `tbl_pesakit` (`pesakitId`),
  ADD CONSTRAINT `fk_klinikal_prosedur` FOREIGN KEY (`prosedurId`) REFERENCES `tbl_prosedur` (`prosedurId`);

--
-- Constraints for table `tbl_peribadi`
--
ALTER TABLE `tbl_peribadi`
  ADD CONSTRAINT `fk_per_dok` FOREIGN KEY (`doktorId`) REFERENCES `tbl_doktor` (`doktorId`),
  ADD CONSTRAINT `fk_per_jururawat` FOREIGN KEY (`jururawatId`) REFERENCES `tbl_jururawat` (`jururawatId`),
  ADD CONSTRAINT `fk_peribadi_pesakit` FOREIGN KEY (`userId`) REFERENCES `tbl_user` (`userId`);

--
-- Constraints for table `tbl_pesakit`
--
ALTER TABLE `tbl_pesakit`
  ADD CONSTRAINT `fk_pesakit_peribadi` FOREIGN KEY (`pesakitId`) REFERENCES `tbl_peribadi` (`pesakitiId`);

--
-- Constraints for table `tbl_prosedur`
--
ALTER TABLE `tbl_prosedur`
  ADD CONSTRAINT `fk_prosedur_drg` FOREIGN KEY (`kodDRG`) REFERENCES `tbl_koddrg` (`kodDRG`);

--
-- Constraints for table `tbl_tariff`
--
ALTER TABLE `tbl_tariff`
  ADD CONSTRAINT `fk_kos_koddrg` FOREIGN KEY (`kodDRG`) REFERENCES `tbl_koddrg` (`kodDRG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
