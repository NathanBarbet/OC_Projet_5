-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 jan. 2020 à 08:49
-- Version du serveur :  8.0.18
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
-- Base de données :  `oc_projet_5`
--
CREATE DATABASE IF NOT EXISTS `oc_projet_5` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `oc_projet_5`;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Content` text NOT NULL,
  `Date_publish` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Post_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Comment_statut_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Post_ID` (`Post_ID`),
  KEY `User_ID` (`User_ID`),
  KEY `Comment_statut_ID` (`Comment_statut_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments_statut`
--

DROP TABLE IF EXISTS `comments_statut`;
CREATE TABLE IF NOT EXISTS `comments_statut` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Comment_statut` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(40) NOT NULL,
  `Post_lead` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Content` text NOT NULL,
  `Img` varchar(500) NOT NULL,
  `Date_publish` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Date_modify` datetime DEFAULT NULL,
  `Post_statut_ID` int(11) NOT NULL,
  `Author` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Post_statut_ID` (`Post_statut_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts_statut`
--

DROP TABLE IF EXISTS `posts_statut`;
CREATE TABLE IF NOT EXISTS `posts_statut` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Post_statut` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Firstname` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Comment_statut_ID` FOREIGN KEY (`Comment_statut_ID`) REFERENCES `comments_statut` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Post_ID` FOREIGN KEY (`Post_ID`) REFERENCES `posts` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `User_ID` FOREIGN KEY (`User_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `Post_statut_ID` FOREIGN KEY (`Post_statut_ID`) REFERENCES `posts_statut` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
