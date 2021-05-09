-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 09 mai 2021 à 00:12
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_art`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `quatite` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id`, `id_prod`, `id_utilisateur`, `prix_total`, `quatite`, `type`) VALUES
(27, 10, 13, 110, 1, 'tableaux'),
(28, 6, 13, 2, 1, 'cadeaux'),
(29, 8, 13, 300, 2, 'tableaux'),
(30, 8, 14, 1, 2, 'cadeaux'),
(31, 9, 14, 30, 1, 'tableaux'),
(32, 8, 14, 150, 1, 'tableaux'),
(33, 11, 14, 250, 1, 'tableaux'),
(34, 6, 14, 2, 1, 'cadeaux');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mdp` varchar(3000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dernier_acc` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `mdp`, `tel`, `image`, `dernier_acc`) VALUES
(23, 'aziz', 'mohamedaziz.makni@esprit.tn', '$2y$10$hH/y5Mhq3NalU1hC.fjDR.EcpyxL/yfGHz7LqMByr/wyvtnZGzRUK', 20761925, './assets/images/admin/ena.jpeg', '2021-05-03 08:38:49'),
(24, 'Farah ', 'farah.elkamel@esprit.tn', '$2y$10$O0pYkZc7snkhl17ee0f03uxjEW0TYmUXLU0ta/AUCTsGc5ITdn8HS', 55603594, './assets/images/admin/farouh.jpg', '2021-05-03 00:28:34');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(5) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `id_client` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `description`, `date`, `id_client`) VALUES
(5, 'Tableau (beaux-arts)', 'Un tableau est, dans le domaine des beaux-arts, un support de surface plane, constitué en différents matériaux (panneaux de bois, toile tendue sur châssis, carton entoilé, etc.), de formes et dimensions variées, sur lequel est réalisée une œuvre artistique en peinture, ou bien fait de collage ou constituée de tout autre matière. Le tableau est en général entouré d\'un encadrement en bois ou métal et accroché à un mur.', '2021-05-02 22:57:47', 13),
(6, 'La Joconde', 'La Joconde, ou Portrait de Mona Lisa, est un tableau de l\'artiste Léonard de Vinci, réalisé entre 1503 et 1506 ou entre 1513 et 1516, et peut-être jusqu\'à 1519, qui représente un portrait mi-corps, probablement celui de la Florentine Lisa Gherardini, épouse de Francesco del Giocondo.', '2021-05-02 23:07:21', 13),
(7, 'Art', 'L’art est une activité, le produit de cette activité ou l\'idée que l\'on s\'en fait, qui s\'adresse délibérément aux sens, aux émotions, aux intuitions et à l\'intellect. On peut affirmer que l\'art est le propre de l\'humain ou de toute autre conscience, en tant que découlant d\'une intention, et que cette activité n\'a pas de fonction pratique définie. On considère le terme « art » par opposition à la nature « conçue comme puissance produisant sans réflexion », et à la science « conçue comme pure connaissance indépendante des applications ».', '2021-05-02 23:33:06', 14);

-- --------------------------------------------------------

--
-- Structure de la table `cadeaux`
--

CREATE TABLE `cadeaux` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cadeaux`
--

INSERT INTO `cadeaux` (`id`, `id_utilisateur`, `nom`, `prix`, `image`) VALUES
(6, 13, 'Tee-shirt La Joconde', 2, './images/produit/8090778-tee-shirt-bio-homme-inspire-plus-leonard-de-vinci-la-joconde-tee-shirt-bio-homme-face.png'),
(7, 13, 'Mug la joconde', 1, './images/produit/30657_xl.jpg'),
(8, 14, 'Porte monnaie Nuit etoilée', 0.5, './images/produit/porte-cartes-kh68l-van-gogh-nuit-etoilee-porte-mon.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sexe` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_nais` date DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `mdp`, `tel`, `adresse`, `sexe`, `date_nais`, `image`) VALUES
(13, 'aziz', 'makni', 'mohamedaziz.makni@esprit.tn', '$2y$10$ExhIYaF3IAn3FsJFfQYriOQCmQdVY8dJuQmZhGoAU.qfZLzhrJHEO', 20761925, 'ariana', 'Homme', '2000-10-01', './images/client/ena.jpeg'),
(14, 'Farah', 'Elkamel', 'farah.elkamel@esprit.tn', '$2y$10$6PzXaV5GDXwNmfv4pQUMTuz0g8r5E6AlaWTGlzRHCXduZZUYklFMm', 55603594, 'Ariana', 'Femme', '2000-10-18', './images/client/farouh.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(5) NOT NULL,
  `commentaire` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `id_client` int(5) NOT NULL,
  `id_article` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `commentaire`, `date`, `id_client`, `id_article`) VALUES
(8, 'Très bien!', '2021-05-02 23:14:48', 13, 5),
(9, 'Impressionnant! ', '2021-05-02 23:15:19', 13, 6),
(12, 'Effectivement', '2021-05-02 23:33:40', 14, 7),
(13, 'Parfait', '2021-05-03 00:50:00', 14, 7);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(5) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lieu` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `informations` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom`, `lieu`, `date_debut`, `date_fin`, `informations`, `image`) VALUES
(4, 'festival d\'art', 'Tunis', '2021-05-04', '2021-05-14', 'festival d\'art est un évènement qui se déroule chaque année pour célébrer la journée mondiale de l\'art. ', 'assets/images/label-valette.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_utilisateur` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_prod` int(11) NOT NULL,
  `quatite` int(11) NOT NULL,
  `prix_total` float NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(5) NOT NULL,
  `date_promotion` date NOT NULL,
  `reduction` int(5) NOT NULL,
  `id_event` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `date_promotion`, `reduction`, `id_event`) VALUES
(4, '2021-05-04', 40, 4);

-- --------------------------------------------------------

--
-- Structure de la table `tableaux`
--

CREATE TABLE `tableaux` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `informations` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `tableaux`
--

INSERT INTO `tableaux` (`id`, `id_utilisateur`, `nom`, `prix`, `image`, `informations`) VALUES
(8, 13, 'La Joconde', 150, './images/produit/390px-Mona_Lisa,_by_Leonardo_da_Vinci,_from_C2RMF_retouched.jpg', 'Peintre: Leonardo Da Vinci'),
(9, 13, 'Tableau', 30, './images/produit/imgg3.jpg', 'Peintre : Picasso'),
(10, 13, 'Nuit Etoilée', 110, './images/produit/imgg1.jpg', 'Peintre: Leonardo Da Vinci'),
(11, 14, 'La cène', 250, './images/produit/1023679934_710_171_4139_2024_1000x0_80_0_1_bb07e21feb8ea5ae2e395678025c768a.jpg (1).png', 'Peintre: Léonardo De Vinci.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cadeaux`
--
ALTER TABLE `cadeaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- Index pour la table `tableaux`
--
ALTER TABLE `tableaux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `cadeaux`
--
ALTER TABLE `cadeaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tableaux`
--
ALTER TABLE `tableaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `evenement` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
