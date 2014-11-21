-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 21 Novembre 2014 à 11:18
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
-- Structure de la table `livredor`
--

CREATE TABLE IF NOT EXISTS `livredor` (
  `idbillet` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `texte` text COLLATE utf8_unicode_ci NOT NULL,
  `datebillet` date NOT NULL,
  `heurebillet` time NOT NULL,
  PRIMARY KEY (`idbillet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `livredor`
--

INSERT INTO `livredor` (`idbillet`, `auteur`, `texte`, `datebillet`, `heurebillet`) VALUES
(5, 'Jean-Luc', 'Super séjour , le cheval est sympa et Flo notre meneur parfait.', '2014-11-21', '11:12:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
