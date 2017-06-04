-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 11:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `idAdministrator` int(11) NOT NULL,
  `Vorname` varchar(25) NOT NULL,
  `Nachname` varchar(25) NOT NULL,
  `Geburtstag` datetime DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telefonnummer` varchar(45) DEFAULT NULL,
  `benutzername` varchar(25) NOT NULL,
  `passwort` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `Vorname`, `Nachname`, `Geburtstag`, `Email`, `Telefonnummer`, `benutzername`, `passwort`) VALUES
(3, 'Gent', 'Taipi', '1999-01-21 00:00:00', 'gentai12@htl-shkoder.com', '0691514474', 'genttaipi', 'webshop');

-- --------------------------------------------------------

--
-- Table structure for table `bestellung`
--

CREATE TABLE `bestellung` (
  `idBestellung` int(11) NOT NULL,
  `Kunde_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bestellung_has_produkt`
--

CREATE TABLE `bestellung_has_produkt` (
  `Bestellung_idBestellung` int(11) NOT NULL,
  `Bestellung_Kunde_id` int(11) NOT NULL,
  `Produkt_idProdukt` int(11) NOT NULL,
  `Produkt_Kategorie_id` int(11) NOT NULL,
  `bestellung` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategorie`
--

CREATE TABLE `kategorie` (
  `idKategorie` int(11) NOT NULL,
  `Kategorie_Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorie`
--

INSERT INTO `kategorie` (`idKategorie`, `Kategorie_Name`) VALUES
(1, 'Elektronik'),
(2, 'Haushalt'),
(3, 'Kleidungen'),
(4, 'Buecher');

-- --------------------------------------------------------

--
-- Table structure for table `kunde`
--

CREATE TABLE `kunde` (
  `idKunde` int(11) NOT NULL,
  `Vorname` varchar(25) NOT NULL,
  `Nachname` varchar(25) NOT NULL,
  `Geburtstag` datetime NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telefonnummer` varchar(45) CHARACTER SET big5 DEFAULT NULL,
  `Strasse` varchar(45) DEFAULT NULL,
  `HausNr` int(11) NOT NULL,
  `Stadt` varchar(25) NOT NULL,
  `Land` varchar(25) NOT NULL,
  `benutzername` varchar(20) NOT NULL,
  `passwort` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunde`
--

INSERT INTO `kunde` (`idKunde`, `Vorname`, `Nachname`, `Geburtstag`, `Email`, `Telefonnummer`, `Strasse`, `HausNr`, `Stadt`, `Land`, `benutzername`, `passwort`) VALUES
(4, 'Gent', 'Taipi', '1999-01-21 00:00:00', 'gentai12@htl-shkoder.com', '0698475852', 'Shkoder', 25, 'Shkoder', 'Albanien', 'gent', 'webshop');

-- --------------------------------------------------------

--
-- Table structure for table `produkt`
--

CREATE TABLE `produkt` (
  `idProdukt` int(11) NOT NULL,
  `Produkt_Name` varchar(45) NOT NULL,
  `Merkmale` varchar(255) NOT NULL,
  `Gewicht` double DEFAULT NULL,
  `Preis` double NOT NULL,
  `Kategorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produkt`
--

INSERT INTO `produkt` (`idProdukt`, `Produkt_Name`, `Merkmale`, `Gewicht`, `Preis`, `Kategorie_id`) VALUES
(9, 'MICROSOFT Surface Laptop', 'Prozessor: IntelÂ® Coreâ„¢ i7-7660U Prozessor (4M Cache, bis zu 4.00 GHz)  |  Bildschirmdiagonale: 13.5 Zoll  |  Arbeitsspeicher-GrÃ¶ÃŸe: 16 GB  |  Grafikkarte: IntelÂ® Irisâ„¢ Plus Graphics 640', 1.5, 2499, 1),
(10, 'APPLE iPad', 'BildschirmauflÃ¶sung: 2048 x 1536 Pixel  |  Prozessor: A9 Chip mit 64â€‘Bit Architektur, Integrierter M9 Coprozessor  | Betriebssystem des GerÃ¤tes: iOS  |  Bildschirmdiagonale (cm): 24.6 cm', 0.95, 399, 1),
(11, 'SAMSUNG KÃ¼hl-/Gefrierkombination ', 'Energieeffizienzklasse: A+  |  Nutzinhalte der KÃ¼hlfÃ¤cher: 269L  |  Nutzinhalte der GefrierfÃ¤cher: 98L  |  Bauart: StandgerÃ¤t  |  Sternekennzeichnung: 4 Sterne  |  KÃ¼hlsystem: Digital Inverter Compressor', 82, 999, 2),
(12, 'Harry Potter und das verwunschene Kind', 'Gebundene Ausgabe: 336 Seiten  |  Verlag: Carlsen (24. September 2016)  \r\n |  Sprache: Deutsch  |  Vom Hersteller empfohlenes Alter: Ab 14 Jahren', 0.25, 19.99, 4),
(13, 'adidas Herren T-shirt', 'Bestandteile/Material: 100% Baumwolle', 0.125, 28.41, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vprodukt`
--
CREATE TABLE `vprodukt` (
`idProdukt` int(11)
,`Produkt_Name` varchar(45)
,`Merkmale` varchar(255)
,`Gewicht` double
,`Preis` double
,`Kategorie_Name` varchar(45)
);

-- --------------------------------------------------------

--
-- Structure for view `vprodukt`
--
DROP TABLE IF EXISTS `vprodukt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vprodukt`  AS  select `produkt`.`idProdukt` AS `idProdukt`,`produkt`.`Produkt_Name` AS `Produkt_Name`,`produkt`.`Merkmale` AS `Merkmale`,`produkt`.`Gewicht` AS `Gewicht`,`produkt`.`Preis` AS `Preis`,`kategorie`.`Kategorie_Name` AS `Kategorie_Name` from (`produkt` join `kategorie` on((`produkt`.`Kategorie_id` = `kategorie`.`idKategorie`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idAdministrator`);

--
-- Indexes for table `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`idBestellung`,`Kunde_id`),
  ADD KEY `fk_Bestellung_Kunde1_idx` (`Kunde_id`);

--
-- Indexes for table `bestellung_has_produkt`
--
ALTER TABLE `bestellung_has_produkt`
  ADD PRIMARY KEY (`Bestellung_idBestellung`,`Bestellung_Kunde_id`,`Produkt_idProdukt`,`Produkt_Kategorie_id`),
  ADD KEY `fk_Bestellung_has_Produkt_Produkt1_idx` (`Produkt_idProdukt`,`Produkt_Kategorie_id`),
  ADD KEY `fk_Bestellung_has_Produkt_Bestellung1_idx` (`Bestellung_idBestellung`,`Bestellung_Kunde_id`);

--
-- Indexes for table `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`idKategorie`);

--
-- Indexes for table `kunde`
--
ALTER TABLE `kunde`
  ADD PRIMARY KEY (`idKunde`);

--
-- Indexes for table `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`idProdukt`,`Kategorie_id`),
  ADD KEY `fk_Produkt_Kategorie1_idx` (`Kategorie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idAdministrator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `idBestellung` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `idKategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kunde`
--
ALTER TABLE `kunde`
  MODIFY `idKunde` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produkt`
--
ALTER TABLE `produkt`
  MODIFY `idProdukt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `fk_Bestellung_Kunde1` FOREIGN KEY (`Kunde_id`) REFERENCES `kunde` (`idKunde`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bestellung_has_produkt`
--
ALTER TABLE `bestellung_has_produkt`
  ADD CONSTRAINT `fk_Bestellung_has_Produkt_Bestellung1` FOREIGN KEY (`Bestellung_idBestellung`,`Bestellung_Kunde_id`) REFERENCES `bestellung` (`idBestellung`, `Kunde_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Bestellung_has_Produkt_Produkt1` FOREIGN KEY (`Produkt_idProdukt`,`Produkt_Kategorie_id`) REFERENCES `produkt` (`idProdukt`, `Kategorie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produkt`
--
ALTER TABLE `produkt`
  ADD CONSTRAINT `fk_Produkt_Kategorie1` FOREIGN KEY (`Kategorie_id`) REFERENCES `kategorie` (`idKategorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
