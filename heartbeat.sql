-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 12:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heartbeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_id` int(11) NOT NULL,
  `adminname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `adminname`, `password`) VALUES
(1, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id_Doctor` int(11) NOT NULL,
  `nume_complet` text NOT NULL,
  `localitate` text NOT NULL,
  `specializare` text NOT NULL,
  `poza` text NOT NULL,
  `telefon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inserare`
--

CREATE TABLE `inserare` (
  `id` int(2) NOT NULL,
  `idPacient` int(8) NOT NULL,
  `simptome` text NOT NULL,
  `dataInceput` text NOT NULL,
  `comentarii` text NOT NULL,
  `diagnostic` text NOT NULL,
  `medicamente` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inserare`
--

INSERT INTO `inserare` (`id`, `idPacient`, `simptome`, `dataInceput`, `comentarii`, `diagnostic`, `medicamente`) VALUES
(14, 1, 'simptim1', '120542', 'sfdzf', '', ''),
(15, 1, 'sfdfe', '2023-08-11', 'sfgxs', '', ''),
(16, 1, 'aDS', '2000-05-11', 'fsg', '', ''),
(17, 1, 'fggtf', '2023-05-11', 'bggg', '', ''),
(18, 1, 'dfdvggd', '2000-08-11', 'gfhf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicamente`
--

CREATE TABLE `medicamente` (
  `id` int(4) NOT NULL,
  `DenComerciala` text NOT NULL,
  `FormaPrezentare` text NOT NULL,
  `AmbalajMicro` text NOT NULL,
  `Concentratie` int(2) NOT NULL,
  `UM` text NOT NULL,
  `PozaAmbalaj` blob NOT NULL,
  `PozaPilula` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pacient`
--

CREATE TABLE `pacient` (
  `userId` int(5) NOT NULL,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `Data_nasterii` date DEFAULT NULL,
  `Varsta` int(3) NOT NULL,
  `Sex` text DEFAULT NULL,
  `Telefon` bigint(10) DEFAULT NULL,
  `idp` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacient`
--

INSERT INTO `pacient` (`userId`, `nume`, `prenume`, `Data_nasterii`, `Varsta`, `Sex`, `Telefon`, `idp`) VALUES
(49, 'Rus', 'Bianca', '2022-05-08', 22, 'Feminin', 759150514, 1),
(50, 'rus', 'n', '2000-02-11', 21, 'Masculin', 7254575, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pacient_afectiune`
--

CREATE TABLE `pacient_afectiune` (
  `id_TAE` int(4) NOT NULL,
  `id_VSC` int(11) NOT NULL,
  `Stadiu` text NOT NULL,
  `Debut` date NOT NULL,
  `DataDepistare` date NOT NULL,
  `DataSfarsit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `planuri_tratamente`
--

CREATE TABLE `planuri_tratamente` (
  `id` int(3) NOT NULL,
  `Data` date NOT NULL,
  `Data_inceput` date NOT NULL,
  `Data_final` date NOT NULL,
  `Cantitate` int(2) NOT NULL,
  `Frecventa` int(2) NOT NULL,
  `Zile_pauza` int(2) NOT NULL,
  `inainte_masa_ore` int(2) NOT NULL,
  `dupa_masa_ore` int(2) NOT NULL,
  `fara_masa_ore` int(2) NOT NULL,
  `contraindicatii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `programare`
--

CREATE TABLE `programare` (
  `consultatieId` int(3) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `doctor` text NOT NULL,
  `idPacient` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programare`
--

INSERT INTO `programare` (`consultatieId`, `date_time`, `doctor`, `idPacient`) VALUES
(1, '2021-06-11 12:50:00', 'Johnson Stew', NULL),
(2, '2000-10-11 12:15:00', '', NULL),
(3, '2020-01-11 11:11:00', 'Mircea Ioan', NULL),
(7, '2023-04-15 15:38:00', 'Johnson Stew', 1),
(8, '2022-08-11 10:37:00', 'Johnson Stew', 1),
(9, '2022-05-16 16:00:00', 'Carsta Andreea', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipuri_afectiune`
--

CREATE TABLE `tipuri_afectiune` (
  `Id` int(11) NOT NULL,
  `Denumire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipuri_alerte`
--

CREATE TABLE `tipuri_alerte` (
  `id` int(3) NOT NULL,
  `Denumire` text NOT NULL,
  `Abatere(%)` decimal(2,2) NOT NULL,
  `SeverAlerta` text NOT NULL,
  `Sunet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'pacient1@yahoo.com', '$2y$10$PUqLvnYdaGW4E2pfeoEEQ.IrwRcd56uPy.YMGkFECSsi9fNjUDSb6'),
(2, 'Pacient2@yahoo.com', '$2y$10$hkTyYQNVgSBpV3JZKAe8n.8Qk8YkO8mWX04BdmzmEvSWEh4qX0QZy'),
(5, 'Pacient1234@yahoo.com', 'Pacient12345.'),
(6, 'bianca', '1234b'),
(7, 'bianca', '1234b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id_Doctor`);

--
-- Indexes for table `inserare`
--
ALTER TABLE `inserare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPacient` (`idPacient`);

--
-- Indexes for table `medicamente`
--
ALTER TABLE `medicamente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacient`
--
ALTER TABLE `pacient`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `idp` (`idp`);

--
-- Indexes for table `pacient_afectiune`
--
ALTER TABLE `pacient_afectiune`
  ADD PRIMARY KEY (`id_TAE`);

--
-- Indexes for table `planuri_tratamente`
--
ALTER TABLE `planuri_tratamente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programare`
--
ALTER TABLE `programare`
  ADD PRIMARY KEY (`consultatieId`),
  ADD KEY `IdPacient` (`idPacient`);

--
-- Indexes for table `tipuri_afectiune`
--
ALTER TABLE `tipuri_afectiune`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tipuri_alerte`
--
ALTER TABLE `tipuri_alerte`
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
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id_Doctor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inserare`
--
ALTER TABLE `inserare`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `medicamente`
--
ALTER TABLE `medicamente`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pacient`
--
ALTER TABLE `pacient`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pacient_afectiune`
--
ALTER TABLE `pacient_afectiune`
  MODIFY `id_TAE` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planuri_tratamente`
--
ALTER TABLE `planuri_tratamente`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programare`
--
ALTER TABLE `programare`
  MODIFY `consultatieId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tipuri_afectiune`
--
ALTER TABLE `tipuri_afectiune`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipuri_alerte`
--
ALTER TABLE `tipuri_alerte`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inserare`
--
ALTER TABLE `inserare`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`idPacient`) REFERENCES `user` (`id`);

--
-- Constraints for table `pacient`
--
ALTER TABLE `pacient`
  ADD CONSTRAINT `pacient_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `programare`
--
ALTER TABLE `programare`
  ADD CONSTRAINT `IdPacient` FOREIGN KEY (`idPacient`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
