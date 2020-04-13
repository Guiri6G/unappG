-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 avr. 2020 à 19:10
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `herbalife`
--
CREATE DATABASE IF NOT EXISTS `herbalife` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `herbalife`;

-- --------------------------------------------------------

--
-- Structure de la table `rang`
--

DROP TABLE IF EXISTS `rang`;
CREATE TABLE IF NOT EXISTS `rang` (
  `idRang` int(3) NOT NULL,
  `nomRang` varchar(255) NOT NULL,
  PRIMARY KEY (`idRang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rang`
--

INSERT INTO `rang` (`idRang`, `nomRang`) VALUES
(1, 'challenger'),
(2, 'coach');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nomUtil` varchar(255) NOT NULL,
  `prenomUtil` varchar(255) NOT NULL,
  `emailUtil` varchar(255) NOT NULL,
  `mdpUtil` varchar(255) NOT NULL,
  `rangUtil` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nomUtil`, `prenomUtil`, `emailUtil`, `mdpUtil`, `rangUtil`) VALUES
(1, 'Kylian', 'MBappé', 'test@test.fr', 'azerty', 1),
(2, 'Bryant', 'Kobe', 'test2@test2.fr', 'azerty', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
