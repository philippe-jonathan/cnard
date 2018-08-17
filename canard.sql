-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 17 Août 2018 à 13:35
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `canard`
--

-- --------------------------------------------------------

--
-- Structure de la table `infocanard`
--

CREATE TABLE `infocanard` (
  `id` int(11) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `hh` time NOT NULL,
  `nombre` int(50) NOT NULL,
  `adresse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `infocanard`
--

INSERT INTO `infocanard` (`id`, `lieu`, `date`, `hh`, `nombre`, `adresse`) VALUES
(1, 'Auch', '2018-08-16', '16:56:00', 0, ''),
(2, 'Auch', '2018-08-17', '09:17:00', 0, ''),
(3, 'Auch', '2018-08-17', '09:18:00', 0, ''),
(4, 'Toulouse', '2018-08-08', '04:25:00', 0, ''),
(5, 'Auch', '2018-08-14', '14:23:00', 0, ''),
(6, 'Toulouse', '2018-08-17', '10:37:00', 0, ''),
(7, 'Auch', '2018-08-17', '11:14:00', 5, ''),
(8, 'Auch', '2018-08-17', '11:19:00', 1, 'Vers le leclerc'),
(9, 'Lyon', '2018-08-17', '11:41:00', 3, 'A la mairie'),
(10, 'tefte', '2018-08-01', '12:11:00', 4, 'grz'),
(11, 'ezfez', '2018-08-17', '11:11:00', 3, 'efzfezzef'),
(12, 'Narbonne', '2018-08-17', '11:11:00', 3, 'stade');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `infocanard`
--
ALTER TABLE `infocanard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `infocanard`
--
ALTER TABLE `infocanard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
