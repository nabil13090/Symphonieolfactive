-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 05 mai 2024 à 10:10
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfonyolfactive`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(10) NOT NULL,
  `rating` float NOT NULL,
  `desciption` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `nom`, `rating`, `desciption`, `image`) VALUES
(1, 'PIERRE FEU', 4.5, 'Plusieurs années que je commande leur parfums toujours satisfaits.', 'assets\\images\\avis\\pierrefeu.jpg'),
(2, 'John Doe', 4.9, 'Ma famille et moi nous avons une seul boutique de parfum est c\'est celle-ci.', 'assets\\images\\avis\\jhondoe.jpg'),
(3, 'Marine Seo', 4.7, 'Parfum de qualité et service de qualité. Leur inspiration sont uniques.', 'assets\\images\\avis\\marineseo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `bannieres`
--

DROP TABLE IF EXISTS `bannieres`;
CREATE TABLE IF NOT EXISTS `bannieres` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Image` varchar(255) DEFAULT NULL,
  `Message` text,
  `TitrePage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `bannieres`
--

INSERT INTO `bannieres` (`ID`, `Image`, `Message`, `TitrePage`) VALUES
(1, 'assets/background/transaction.jpg', NULL, 'Transaction'),
(2, 'assets/background/politiquedonnées.jpg', 'POLITIQUE DES  DONNÉES', 'Politique des données'),
(3, 'assets/background/panier.jpg', NULL, 'Panier'),
(4, 'assets/background/monespace.jpg', 'MON ESPACE', 'Mon Espace'),
(5, 'assets/background/accueil2.jpg', 'LE MONDE OLFACTIF', 'Accueil'),
(6, 'assets/background/hommes.jpg', 'FRAGRANCES HOMMES', 'Hommes'),
(7, 'assets/background/femmes.jpg', 'FRAGRANCES FEMMES', 'Femmes'),
(8, 'assets/background/enfants.jpg', 'FRAGRANCES ENFANTS', 'Enfants'),
(9, 'assets/background/detail.jpg', 'DÉTAIL DE PRODUIT', 'Detail'),
(10, 'assets/background/contact.jpg', 'CONTACTEZ - NOUS', 'Contact'),
(11, 'assets/background/compte.jpg', 'ESPACE CREATION', 'Creation Compte');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'promo'),
(2, 'bestseller'),
(3, 'Pas de Catégorie');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `commande_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `date_create` datetime NOT NULL,
  `price` float NOT NULL,
  `statut` enum('preparation','prete','recupere') NOT NULL DEFAULT 'preparation',
  PRIMARY KEY (`commande_id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`commande_id`, `user_id`, `date_create`, `price`, `statut`) VALUES
(22, 26, '2024-05-02 00:00:00', 160, 'preparation'),
(29, 26, '2024-05-03 00:00:00', 110, 'prete'),
(30, 26, '2024-05-03 00:00:00', 55, 'preparation');

-- --------------------------------------------------------

--
-- Structure de la table `commande_produits`
--

DROP TABLE IF EXISTS `commande_produits`;
CREATE TABLE IF NOT EXISTS `commande_produits` (
  `commande_produit_id` int NOT NULL AUTO_INCREMENT,
  `commande_id` int NOT NULL,
  `produits_id` int NOT NULL,
  `quantite` float NOT NULL,
  PRIMARY KEY (`commande_produit_id`),
  KEY `fk_commande_id` (`commande_id`),
  KEY `fk_produits_id` (`produits_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `commande_produits`
--

INSERT INTO `commande_produits` (`commande_produit_id`, `commande_id`, `produits_id`, `quantite`) VALUES
(15, 22, 14, 1),
(20, 29, 4, 2),
(21, 30, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `nom`) VALUES
(1, 'hommes'),
(2, 'femmes'),
(3, 'enfants');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `url`) VALUES
(1, 'assets\\images\\parfum\\ambiance.png'),
(2, 'assets\\images\\parfum\\aufront.png'),
(3, 'assets\\images\\parfum\\compo.jpg'),
(4, 'assets\\images\\parfum\\dantant.jpg'),
(5, 'assets\\images\\parfum\\depoche.jpg'),
(6, 'assets\\images\\parfum\\embelire.jpg'),
(7, 'assets\\images\\parfum\\embumé.jpg'),
(8, 'assets\\images\\parfum\\force.jpg'),
(9, 'assets\\images\\parfum\\franchir.png'),
(10, 'assets\\images\\parfum\\lepetitprince.jpg'),
(11, 'assets\\images\\parfum\\lire.jpg'),
(12, 'assets\\images\\parfum\\mitryle.png'),
(13, 'assets\\images\\parfum\\notesi.png'),
(14, 'assets\\images\\parfum\\opium.jpg'),
(15, 'assets\\images\\parfum\\parc.jpg'),
(16, 'assets\\images\\parfum\\recreation.jpg'),
(17, 'assets\\images\\parfum\\rosematinal.jpg'),
(18, 'assets\\images\\parfum\\rugir.png'),
(19, 'assets\\images\\parfum\\sableur.jpg'),
(20, 'assets\\images\\parfum\\sensbon.jpg'),
(21, 'assets\\images\\parfum\\soiree.jpg'),
(22, 'assets\\images\\parfum\\sucre.jpg'),
(23, 'assets\\images\\parfum\\ulysse.jpg'),
(26, '../assets/images/parfum/662408fea7f03.jpg'),
(27, '../assets/images/parfum/66260cba4028e.jpg'),
(28, '../assets/images/parfum/66260e1342f12.png'),
(29, '../assets/images/parfum/66260f329a9ca.png'),
(30, '../assets/images/parfum/66260f5146641.png'),
(31, '../assets/images/parfum/6628fe11b6e9a.jpg'),
(32, '../assets/images/parfum/6634ae1c08681.png'),
(33, '../assets/images/parfum/6634aeb088e92.png'),
(34, '../assets/images/parfum/6634b152bf4a7.png'),
(35, '../assets/images/parfum/6634b1e0a5aee.png'),
(36, '../assets/images/parfum/6634b2fbdafff.png'),
(37, '../assets/images/parfum/6634b424b92cc.png'),
(38, '../assets/images/parfum/6634b44740366.png'),
(39, '../assets/images/parfum/6634b4b71bc5b.png');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `contenances` int NOT NULL,
  `rating` float NOT NULL,
  `stock` float NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `genreId` int DEFAULT NULL,
  `imageId` int DEFAULT NULL,
  `categorieId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `genreId` (`genreId`),
  KEY `categorieId` (`categorieId`),
  KEY `imageId` (`imageId`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `prix`, `contenances`, `rating`, `stock`, `created_at`, `genreId`, `imageId`, `categorieId`) VALUES
(1, 'DANTANT', 'Parfum boisé avec une note de oud parfait pour les homme virile pour les soirée dhiver.', 39, 100, 4.5, 30, '2024-03-20 09:19:22', 1, 4, 1),
(2, 'DEPOCHE', 'Parfum sucrée subtile destiné au enfants capricieux de bonbons, idéal pour le 4 heure.', 35, 50, 4.9, 50, '2024-03-20 09:19:22', 3, 5, NULL),
(3, 'EMBELIRE', 'Parfum rosé fait pour une femme élégante et cherchant a se faire voir . ', 65, 80, 4.2, 60, '2024-03-20 09:19:22', 2, 6, NULL),
(4, 'EMBUME', 'Parfum baumé parfait pour ses dames se rapprochant de la rosé matinal.', 55, 80, 4.9, 20, '2024-03-20 09:19:22', 2, 7, NULL),
(5, 'FORCE', 'Parfum cherchant sa force dans les prairies de fleur du sud de la France.', 40, 100, 4.5, 60, '2024-03-20 09:19:22', 1, 8, 1),
(6, 'FRANCHIR', 'Parfum exigent et élégant  pour homme d\'affaire en constante evolution.', 69, 100, 4.9, 50, '2024-03-20 09:19:22', 1, 9, 1),
(7, 'LE PETIT PRINCE', 'Parfum envoutant d\'histoire peut emmenant sur la lune votre enfant.', 45, 35, 5, 22, '2024-03-20 09:19:22', 3, 10, 2),
(8, 'LIRE', 'Parfum pour votre enfants studieux qui se voit distingué des le matin .', 35, 50, 5, 35, '2024-03-20 09:19:22', 3, 11, NULL),
(9, 'MITRYLE', 'Parfum préoccupé pour votre bien être olfactive et rempli d\'histoire elfique.', 95, 65, 4.3, 30, '2024-03-20 09:19:22', 1, 12, NULL),
(10, 'Note SI', 'Parfum phare de Symphonie Olfactive qui sort sa note de musique senteur .', 65, 1006, 5, 50, '2024-03-20 09:19:22', 1, 13, 1),
(11, 'OPIUM', 'Parfum réellement très prisant pour l\'homme voudrait sentir bons.', 39, 100, 5, 50, '2024-03-20 09:19:22', 1, 14, 1),
(13, 'RECREATION', 'Parfum tourné vers les billes et les marelle et des jeux de l\'école senteur de bonbons, de tartes.', 55, 60, 4.6, 20, '2024-03-20 09:19:22', 3, 16, 2),
(14, 'ROSE MATINALE', 'Parfum remplir de brise d\'hiver et brume d\'automne .', 95, 80, 5, 15, '2024-03-20 09:19:22', 2, 17, 2),
(15, 'RUGIR', 'Parfum bestial qui surgit sur votre hôte senteur comme une attaque olfactive.', 70, 60, 4.5, 50, '2024-03-20 09:19:22', 1, 18, 2),
(16, 'SABLEUR', 'Parfum qui envoute grâce au marchant de sable qui endormira ses camarade par son odeur.', 65, 60, 5, 15, '2024-03-20 09:19:22', 3, 19, NULL),
(17, 'SENS BONS', 'Parfum bonbons qui rappelle la peluche avec une odeur de fraise tagada .', 55, 60, 5, 25, '2024-03-20 09:19:22', 3, 20, NULL),
(18, 'SOIREE', 'Parfum pour vos reception et envouté vos amis par son cote subtile te fort .', 95, 100, 5, 20, '2024-03-20 09:19:22', 2, 21, NULL),
(19, 'SUCRE', 'Parfum gout gâteaux a la banane qui ne séparant jamais de votre enfant. ', 55, 35, 5, 32, '2024-03-20 09:19:22', 3, 22, NULL),
(20, 'ULYSSE', 'Parfum spartiate qui dépasse toutes les  mer et montagne avec propagation de son odeur .', 90, 80, 5, 32, '2024-03-20 09:19:22', 1, 23, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','editor','utilisateur') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'utilisateur',
  `date_inscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `mot_de_passe`, `role`, `date_inscription`) VALUES
(1, 'Administrateur', 'mr.chetouane@gmail.com', '$2y$10$7CDF.3s.bjkA.7nAf07kbut1Vm4vmVNoHVsUGyH5rnOrK8rwV7WJK', 'admin', '2024-03-29 09:50:05'),
(26, 'assya', 'assya@gmail.com', '$2y$10$A5FWZtadEUcF4hS2kmTI4eyayffLGVpdVpawoU5/IFy4JvDLlnngG', 'utilisateur', '2024-05-02 15:03:01');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `commande_produits`
--
ALTER TABLE `commande_produits`
  ADD CONSTRAINT `fk_commande_id` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`commande_id`),
  ADD CONSTRAINT `fk_produits_id` FOREIGN KEY (`produits_id`) REFERENCES `produits` (`id`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`genreId`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `produits_ibfk_2` FOREIGN KEY (`categorieId`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `produits_ibfk_3` FOREIGN KEY (`imageId`) REFERENCES `image` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
