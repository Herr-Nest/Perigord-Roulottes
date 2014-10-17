-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Octobre 2014 à 10:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `perigordroulottes`
--

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

DROP TABLE IF EXISTS `etape`;
CREATE TABLE IF NOT EXISTS `etape` (
  `NumEtape` int(11) NOT NULL AUTO_INCREMENT,
  `VilleEtape` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NomHeb` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SiteInternet` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DescriptionEtape` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EtapeSuivante` int(11) DEFAULT NULL,
  PRIMARY KEY (`NumEtape`),
  KEY `FK_Etape_NumEtape_1` (`EtapeSuivante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `etape`
--

INSERT INTO `etape` (`NumEtape`, `VilleEtape`, `NomHeb`, `SiteInternet`, `DescriptionEtape`, `EtapeSuivante`) VALUES
(1, 'Brantome', 'Camping de Brantome', 'www.CampingdeBrantome.fr', 'Pour un agréable séjour en famille, le camping de Brantome vous accueille au coeur du Perigord.Cette petite structure tout confort de 40 emplacements.', 2),
(2, 'St Pardoux', 'Camping de St Pardoux', 'www.CampingdeStPardoux.fr', NULL, 3),
(3, 'St Saud Lacousiere', 'Camping de St Saud Lacousiere', 'www.CampingdeStSaudLacousiere.fr', NULL, 4),
(4, 'Bussiere Badil', 'Camping de Bussiere Badil', 'www.CampingdeBussiereBadil.fr', NULL, 5),
(5, 'Beaussac', 'Camping de Beaussac', 'www.CampingdeBeaussac.fr', NULL, 6),
(6, 'Monsec', 'Camping de Monsec', 'www.CampingdeMonsec.fr', NULL, 7),
(7, 'Bourdeilles', 'Camping de Bourdeilles', 'www.CampingdeBourdeilles.fr', NULL, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `FK_Etape_NumEtape_1` FOREIGN KEY (`EtapeSuivante`) REFERENCES `etape` (`NumEtape`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
