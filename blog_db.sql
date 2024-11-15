-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 nov. 2024 à 09:52
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_db`
--
CREATE DATABASE IF NOT EXISTS `blog_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog_db`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`) VALUES
(2, 'Exploration de la Normandie', 'La Normandie est une région riche en histoire et en culture. Visitez des sites emblématiques comme les plages du Débarquement et la Tapisserie de Bayeux, tout en savourant les produits laitiers locaux.'),
(3, 'Escapade dans les Alpes françaises', 'Les Alpes françaises offrent un paysage à couper le souffle permettant la pratique des activités de plein air comme la randonnée et le ski, tout en admirant les sommets enneigés.'),
(4, 'Exploration de la Normandie 2', 'La Normandie est une région riche en histoire et en culture. Visitez des sites emblématiques comme les plages du Débarquement et la Tapisserie de Bayeux, tout en savourant les produits laitiers locaux.'),
(5, 'Escapade dans les Alpes françaises 2', 'Les Alpes françaises offrent un paysage à couper le souffle permettant la pratique des activités de plein air comme la randonnée et le ski, tout en admirant les sommets enneigés.'),
(10, 'Hellooooo', 'coucou');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
