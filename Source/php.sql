-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 mars 2020 à 09:41
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
-- Base de données :  `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `idGallery` int(11) NOT NULL AUTO_INCREMENT,
  `titleGallery` longtext NOT NULL,
  `descGallery` longtext NOT NULL,
  `imgFullNameGallery` longtext NOT NULL,
  `orderGallery` longtext NOT NULL,
  PRIMARY KEY (`idGallery`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`idGallery`, `titleGallery`, `descGallery`, `imgFullNameGallery`, `orderGallery`) VALUES
(4, 'Un super titre', 'description passionante', 'une-belle-image.5e748f01e83047.87171497.jpg', '1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(9, 'admin', '$2y$10$KAtC3NjgmeyLPWTup4KnOuk484i3Ek.eYL1vkWQ1k2efC6/LZmj8u'),
(8, 'yt', '$2y$10$7iCzOTALuWp4yGr.A91ISeyre/9Wdpj6tnsvfhdM/pSQJKJFKJacK'),
(6, 'asas', '$2y$10$p0O1T.NFnv8ez6NwlGNUiexxOMgqIC.muOX1BopfFINMGxhDgJf.2'),
(7, 'adadad', '$2y$10$fk3xvhEk1YI.IVT8UwEa1.taNcbOmkshody9tQ8t5Ma7BB2vAS366'),
(10, 'manaut', '$2y$10$4/WM2jfB1TXaGjtzk3yn4.gxvGGeLYXzyVY1RWVmuSgAAeBAqPrg.'),
(11, 'justine', '$2y$10$2LQjDcfEIAnp9qYcz5BWhu7LeR32948GCyuRBBjMZ2H9eWe/0fdFa'),
(12, 'justine33', '$2y$10$9Hc80azgVTclHYdT/RemmOxoVA2qrmPacJYqx7X5U9BIHZ57D6sFC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
