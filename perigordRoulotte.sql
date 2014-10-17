-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 14 Octobre 2014 à 17:33
-- Version du serveur: 5.6.14
-- Version de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `perigordroulottes`
--
DROP DATABASE IF EXISTS perigordroulottes;
CREATE DATABASE IF NOT EXISTS `perigordroulottes` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `perigordroulottes`;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `NumClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PrenomClient` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AdresseClient` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VilleClient` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CPClient` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TelClient` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MailClient` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NumClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NumClient`, `NomClient`, `PrenomClient`, `AdresseClient`, `VilleClient`, `CPClient`, `TelClient`, `MailClient`) VALUES
(1, 'Chirac', 'Jacques', '75 rue de l''Elysee', 'Paris', '75008', '0156978649', 'JacquesChirac@Gmail.com'),
(2, 'Garros', 'Roland ', '2 Avenue Gordon Bennett', 'Paris', '75000', '0147434567', 'RolandGarros@Gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `duree`
--

CREATE TABLE IF NOT EXISTS `duree` (
  `NbJours` int(11) NOT NULL,
  `NomSejour` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NbJours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `duree`
--

INSERT INTO `duree` (`NbJours`, `NomSejour`) VALUES
(2, 'Grain de Bohème'),
(3, 'L''Escapade'),
(4, 'Petite Bohème'),
(5, 'Bohème'),
(6, 'Grande Bohème'),
(7, 'Semaine de Bohème');

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS `etape` (
  `NumEtape` int(11) NOT NULL AUTO_INCREMENT,
  `VilleEtape` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NomHeb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SiteInternet` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EtapeSuivante` int(11) DEFAULT NULL,
  PRIMARY KEY (`NumEtape`),
  KEY `FK_Etape_NumEtape_1` (`EtapeSuivante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `etape`
--

INSERT INTO `etape` (`NumEtape`, `VilleEtape`, `NomHeb`, `SiteInternet`, `EtapeSuivante`) VALUES
(1, 'Brantome', 'Camping de Brantome', 'www.CampingdeBrantome.fr', NULL),
(2, 'St Pardoux', 'Camping de St Pardoux', 'www.CampingdeStPardoux.fr', NULL),
(3, 'St Saud Lacousiere', 'Camping de St Saud Lacousiere', 'www.CampingdeStSaudLacousiere.fr', NULL),
(4, 'Bussiere Badil', 'Camping de Bussiere Badil', 'www.CampingdeBussiereBadil.fr', NULL),
(5, 'Beaussac', 'Camping de Beaussac', 'www.CampingdeBeaussac.fr', NULL),
(6, 'Monsec', 'Camping de Monsec', 'www.CampingdeMonsec.fr', NULL),
(7, 'Bourdeilles', 'Camping de Bourdeilles', 'www.CampingdeBourdeilles.fr', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `NumReservation` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebut` date DEFAULT NULL,
  `NbJours` int(11) NOT NULL,
  `Montant` decimal(6,2) DEFAULT NULL,
  `NumEtape` int(11) NOT NULL,
  `NumRoulotte` int(11) NOT NULL,
  `NumClient` int(11) NOT NULL,
  PRIMARY KEY (`NumReservation`),
  KEY `FK_Reservation_NumEtape` (`NumEtape`),
  KEY `FK_Reservation_NumRoulotte` (`NumRoulotte`),
  KEY `FK_Reservation_NumClient` (`NumClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`NumReservation`, `DateDebut`, `NbJours`, `Montant`, `NumEtape`, `NumRoulotte`, `NumClient`) VALUES
(1, '2015-07-01', 3, '783.00', 1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roulotte`
--

CREATE TABLE IF NOT EXISTS `roulotte` (
  `NumRoulotte` int(11) NOT NULL AUTO_INCREMENT,
  `NomRoulotte` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NumRoulotte`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `roulotte`
--

INSERT INTO `roulotte` (`NumRoulotte`, `NomRoulotte`) VALUES
(1, ' Irlandaises'),
(2, 'Anglaises'),
(3, 'Gitanes'),
(4, 'Foraines'),
(5, 'Camarguaises');

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

CREATE TABLE IF NOT EXISTS `saison` (
  `NumSaison` int(11) NOT NULL AUTO_INCREMENT,
  `NomSaison` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`NumSaison`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `saison`
--

INSERT INTO `saison` (`NumSaison`, `NomSaison`) VALUES
(1, 'été'),
(2, 'printemps'),
(3, 'automne');

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE IF NOT EXISTS `tarif` (
  `TarifSejour` decimal(6,2) DEFAULT NULL,
  `NbJours` int(11) NOT NULL,
  `NumSaison` int(11) NOT NULL,
  PRIMARY KEY (`NbJours`,`NumSaison`),
  KEY `FK_Tarif_NumSaison` (`NumSaison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tarif`
--

INSERT INTO `tarif` (`TarifSejour`, `NbJours`, `NumSaison`) VALUES
('563.00', 2, 1),
('422.00', 2, 2),
('422.00', 2, 3),
('783.00', 3, 1),
('587.00', 3, 2),
('587.00', 3, 3),
('960.00', 4, 1),
('720.00', 4, 2),
('720.00', 4, 3),
('1200.00', 5, 1),
('900.00', 5, 2),
('900.00', 5, 3),
('1440.00', 6, 1),
('1080.00', 6, 2),
('1080.00', 6, 3),
('1680.00', 7, 1),
('1260.00', 7, 2),
('1260.00', 7, 3);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `FK_Etape_NumEtape_1` FOREIGN KEY (`EtapeSuivante`) REFERENCES `etape` (`NumEtape`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_Reservation_NumClient` FOREIGN KEY (`NumClient`) REFERENCES `client` (`NumClient`),
  ADD CONSTRAINT `FK_Reservation_NumEtape` FOREIGN KEY (`NumEtape`) REFERENCES `etape` (`NumEtape`),
  ADD CONSTRAINT `FK_Reservation_NumRoulotte` FOREIGN KEY (`NumRoulotte`) REFERENCES `roulotte` (`NumRoulotte`);

--
-- Contraintes pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `FK_Tarif_NbJours` FOREIGN KEY (`NbJours`) REFERENCES `duree` (`NbJours`),
  ADD CONSTRAINT `FK_Tarif_NumSaison` FOREIGN KEY (`NumSaison`) REFERENCES `saison` (`NumSaison`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
