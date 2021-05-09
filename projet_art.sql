-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 25 avr. 2021 à 22:41
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_art`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prod` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `quatite` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id`, `id_prod`, `id_utilisateur`, `prix_total`, `quatite`, `type`) VALUES
(3, 1, 10, 43, 1, 'cadeaux'),
(4, 2, 10, 34, 1, 'cadeaux'),
(7, 2, 10, 34, 1, 'cadeaux'),
(8, 6, 10, 34, 1, 'tableaux'),
(9, 6, 10, 34, 1, 'tableaux'),
(10, 6, 10, 34, 1, 'tableaux'),
(12, 7, 12, 450, 1, 'tableaux');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(3000) COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `dernier_acc` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `mdp`, `tel`, `image`, `dernier_acc`) VALUES
(23, 'aziz', 'mohamedaziz.makni@esprit.tn', '$2y$10$Y7Xo61KKvvBDe/S3VaJ9nO0HITIbPulcOqdFP5hFApb.K.zCGHER2', 25896, './assets/images/admin/ena.jpeg', '2021-04-25 23:30:46');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `id_client` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `date`, `id_client`) VALUES
(2, 'FEAF', 'EFAF', '2021-04-25 15:39:36', 10),
(3, 'fea', 'eafef', '2021-04-25 16:00:58', 10),
(4, 'azdazgd', 'hj', '2021-04-25 17:00:54', 12);

-- --------------------------------------------------------

--
-- Structure de la table `cadeaux`
--

DROP TABLE IF EXISTS `cadeaux`;
CREATE TABLE IF NOT EXISTS `cadeaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cadeaux`
--

INSERT INTO `cadeaux` (`id`, `id_utilisateur`, `nom`, `prix`, `image`) VALUES
(4, 12, 'porte clÃ© Van Gogh', 1500, './images/produit/Capture.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `sexe` varchar(20) COLLATE utf8_bin NOT NULL,
  `date_nais` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `mdp`, `tel`, `adresse`, `sexe`, `date_nais`, `image`) VALUES
(10, 'aaa', 'bbb', 'makni@gmail.com', '$2y$10$czi3YNyA5cLNYzmWLOEoWOIV5M/TQqt1zYciZr5YmmJFESWTm5YO.', 20761925, '6 RUE CAMEROUN', 'Homme', '2021-04-18', './images/client/164493888_284973556490314_220761501831044655_n.jpg'),
(12, 'az', 'bc', 'mohamedaziz.makni@esprit.tn', '$2y$10$OVKb0FsLXcbL/AwDZo3vyOAynZ/oWzbmmeLRdqAhoraeiPy4xQlsO', 25896, 'tunis', 'Homme', '2021-04-25', './images/client/ena.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `commentaire` text COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `id_client` int(5) NOT NULL,
  `id_article` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`),
  KEY `id_client` (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `commentaire`, `date`, `id_client`, `id_article`) VALUES
(4, 'feaf', '2021-04-25 16:01:09', 10, 2);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `lieu` varchar(255) COLLATE utf8_bin NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `informations` text COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom`, `lieu`, `date_debut`, `date_fin`, `informations`, `image`) VALUES
(1, 'Mejri', 'efaf', '2021-04-11', '2021-05-02', 'aaaaa', 'assets/images/164493888_284973556490314_220761501831044655_n.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_prod` int(11) NOT NULL,
  `quatite` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date_promotion` date NOT NULL,
  `reduction` int(5) NOT NULL,
  `id_event` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_event` (`id_event`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `date_promotion`, `reduction`, `id_event`) VALUES
(1, '2021-04-27', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tableaux`
--

DROP TABLE IF EXISTS `tableaux`;
CREATE TABLE IF NOT EXISTS `tableaux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `informations` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `tableaux`
--

INSERT INTO `tableaux` (`id`, `id_utilisateur`, `nom`, `prix`, `image`, `informations`) VALUES
(7, 12, 'aze', 450, './images/produit/imgg1.jpg', 'abd');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
