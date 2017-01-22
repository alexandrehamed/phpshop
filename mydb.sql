-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Dim 22 Janvier 2017 à 16:26
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

CREATE TABLE `amis` (
  `id` int(11) NOT NULL,
  `user1` int(11) DEFAULT NULL,
  `user2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `jeux` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `dateDeSortie` datetime(6) DEFAULT NULL,
  `pegi` smallint(2) DEFAULT NULL,
  `categorie` int(11) DEFAULT NULL,
  `prix` decimal(6,0) DEFAULT NULL,
  `resume` text,
  `genres` varchar(45) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cloud` varchar(45) DEFAULT NULL,
  `largeur` int(4) DEFAULT NULL,
  `hauteur` int(4) DEFAULT NULL,
  `nom_video` varchar(45) DEFAULT NULL,
  `video_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `dateDeNaissance` datetime(6) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `codePostal` smallint(15) DEFAULT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pays` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `dateDeNaissance`, `adresse`, `ville`, `codePostal`, `pseudo`, `password`, `pays`, `description`, `email`) VALUES
(1, 'marie', 'elliott', '0000-00-00 00:00:00.000000', 'xxx', 'Paris', 2703, 'coyote', 'iim', 'France', 'Je suis ici pour train le php', ''),
(20, 'marie', 'elliott', '0000-00-00 00:00:00.000000', 'xxx', 'Paris', 2703, 'keke', 'iim', 'France', 'Je suis ici pour train le php', ''),
(21, NULL, NULL, NULL, NULL, NULL, NULL, 'nini', 'ppp', NULL, NULL, ''),
(22, NULL, NULL, NULL, NULL, NULL, NULL, 'jojo', 'frip', NULL, NULL, ''),
(25, NULL, NULL, NULL, NULL, NULL, NULL, 'aa', 'aab', NULL, NULL, 'aa@aa.aa'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, 'elliott', 'cc', NULL, NULL, 'cc@cc.cc'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, 'cccccaaa', 'aa', NULL, NULL, 'cc@cc.ccaa'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, 'cccccaaaaaaa', 'aa', NULL, NULL, 'cc@cc.ccaa'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, 'cccccaaaaaaaaaaaa', 'aaaaaa', NULL, NULL, 'cc@cc.ccaaa'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, 'cccccaaaaaaaaaaaaaa', 'aaaa', NULL, NULL, 'cc@cc.ccaaaaa'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, 'cccccaaaaaaaaaaaaaasdsd', 'dsdsdsdsds', NULL, NULL, 'cc@cc.ccaaaaadsd'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, 'iim', 'iim', NULL, NULL, 'iim@iim'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, 'fr', 'uu', NULL, NULL, 'fff@ff'),
(45, NULL, NULL, NULL, NULL, NULL, NULL, 'bb', 'bb', NULL, NULL, 'bb@bb'),
(46, NULL, NULL, NULL, NULL, NULL, NULL, 'zz', 'zz', NULL, NULL, 'zz@zz');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `amis`
--
ALTER TABLE `amis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user1_idx` (`user1`),
  ADD KEY `id_user2_idx` (`user2`);

--
-- Index pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_idx` (`user`),
  ADD KEY `jeux_id_idx` (`jeux`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id_idx` (`categorie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo_UNIQUE` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `amis`
--
ALTER TABLE `amis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `amis`
--
ALTER TABLE `amis`
  ADD CONSTRAINT `id_user1` FOREIGN KEY (`user1`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`user2`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD CONSTRAINT `jeux_id` FOREIGN KEY (`jeux`) REFERENCES `jeux` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD CONSTRAINT `categorie_id` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
