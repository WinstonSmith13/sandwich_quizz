-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 20 juin 2022 à 14:00
-- Version du serveur : 8.0.29-0ubuntu0.20.04.3
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `auto-encheres`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `uid` bigint UNSIGNED NOT NULL,
  `titre_annonce` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_depart` float UNSIGNED NOT NULL,
  `date_fin_enchere` bigint UNSIGNED NOT NULL,
  `modele` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puissance` smallint UNSIGNED NOT NULL,
  `annee` smallint UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`uid`, `titre_annonce`, `prix_depart`, `date_fin_enchere`, `modele`, `marque`, `puissance`, `annee`, `description`, `photo`) VALUES
(1, 'La BM de sa mère !', 92000, 1660567921, 'M3', 'BMW', 230, 2019, 'Cette BMW M3 déchire vraiment la race de sa mère.', 'bmw.jpg'),
(2, 'L\'Audi qui déchire sa race !', 122000, 1668579455, 'A3 RS6 Quattro Sportback', 'AUDI', 320, 2021, 'L\'AUDI de la mort qui tue. Achète mon fils !', 'audi.jpg'),
(3, 'Ma MercoBenz Zarma !', 94000, 1667479455, 'ML 300', 'MERCEDES', 280, 2020, 'Laisse moi ZoomZoomZing, dans ta Benz Benz Benz.', 'mercedes.jpg'),
(4, 'Bientôt ta Porsche veinard ?', 132000, 1665467922, 'TAYCAN GT3', 'PORSCHE', 230, 2022, 'La porsche de mes rêves, bordel !', 'porsche.jpg'),
(5, 'Fait chauffer Enzo !', 154000, 1667562941, '812 GTS', 'FERRARI', 430, 2019, 'Cette Ferrari n\'est pas rouge. Sacrilège !', 'ferrari.jpg'),
(6, 'Tu veux jouer avec la nouvelle Golf ?', 67000, 1670557921, 'Golf 8 Spider', 'BMW', 190, 2019, 'Cette golf est une valeur sûre.', 'volkswagen.jpg'),
(7, 'C\'est toi le MAC ?', 145000, 1675437122, '570 GT', 'MC LAREN', 360, 2022, 'There is No Finish Line. There are no limit !', 'mclaren.jpg'),
(8, 'Ça balance du cheval grave !', 134000, 1670542331, 'Camaro', 'CHEVROLET', 560, 2022, 'Ça c\'est une voiture qu\'elle a des chevaux sous le capot !', 'chevrolet.jpg'),
(9, 'Drive your Ambition with a Mitsubishi', 76000, 1660321921, 'Lancer Evolution 6', 'MITSUBISHI', 180, 2020, 'La caisse là, elle mange la route grave ! ', 'mitsubishi.jpg'),
(10, 'Tu veux un moteur d\'avion sous le capot ?', 199000, 1677562941, 'Ghost', 'ROLLS ROYCE', 571, 2020, 'Elle pèse 2,5 tonnes la bête !', 'rollsroyce.jpg'),
(11, 'Alpine, en un seul mot !', 119000, 1660452321, 'A110', 'ALPINE', 280, 2022, 'Cocorico, Alpine est la seule marque française qui rivalise avec les voitures étrangères.', 'alpine.jpg'),
(12, 'We are Not Super Cars. We are Lamborghini !', 165000, 1669542331, 'Aventador LP 780-4 Ultimae Roadster', 'LAMBORGHINI', 480, 2022, 'Achète ça et tu perds tes deux bras...', 'lamborghini.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `encheres`
--

CREATE TABLE `encheres` (
  `uid` bigint UNSIGNED NOT NULL,
  `uid_utilisateur` bigint UNSIGNED NOT NULL,
  `uid_annonce` bigint UNSIGNED NOT NULL,
  `date` bigint UNSIGNED NOT NULL,
  `montant` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `uid` bigint UNSIGNED NOT NULL,
  `nom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`uid`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'DOE', 'John', 'john.doe@gmail.com', 'f94f09d6d7c1e4f151c0232cad774f0e');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`uid`);

--
-- Index pour la table `encheres`
--
ALTER TABLE `encheres`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `fk_enchere_utilisateur` (`uid_utilisateur`),
  ADD KEY `fk_enchere_annonce` (`uid_annonce`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `uid` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `encheres`
--
ALTER TABLE `encheres`
  MODIFY `uid` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `uid` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `encheres`
--
ALTER TABLE `encheres`
  ADD CONSTRAINT `fk_enchere_annonce` FOREIGN KEY (`uid_annonce`) REFERENCES `annonces` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_enchere_utilisateur` FOREIGN KEY (`uid_utilisateur`) REFERENCES `utilisateurs` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
