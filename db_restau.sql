-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 06 avr. 2024 à 14:24
-- Version du serveur : 5.7.40
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_restau`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(255) DEFAULT NULL,
  `numero_telephone` varchar(20) DEFAULT NULL,
  `adresse` text,
  `autres_informations` text,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `numero_telephone`, `adresse`, `autres_informations`, `visible`) VALUES
(1, 'BEBOU ', '79521854', 'Hédzranawoé', 'mon ange', 1),
(2, 'KADIA', '98754857', 'Tokoin', 'l\'une de mes clients préférés', 1),
(3, 'ELIAN', '98754857', 'lomé', 'la fille choco là', 1),
(4, 'Sylvio', '978584758', 'avépozo', 'le gars de 16 ans à', 1),
(5, 'Berna', '92349524', 'Novitsi', 'adjovi', 1),
(9, 'ALIM', '95857485', 'lomé', 'fuck you', 1),
(10, 'leo', '96875481', 'awoudja', 'Mon frère ', 1),
(11, 'Natha', '25143652', 'nukafu', 'ma sœur choco ', 1),
(12, 'Déborah', '94758695', 'novita', 'Ma besty', 1),
(13, 'Joel', '94758564', 'awoudja', 'le salop', 1),
(14, 'Asbat', '93124585', 'kara', 'le kon', 1),
(15, 'Marzourk', '947586145', 'awoudja', 'le lunetteux ', 1),
(16, 'Junoir', '96748594', 'kégué', 'Le garçon de 1m 50 ', 1),
(17, 'Adnane', '94857654', 'kégué', 'Le pervers', 1),
(18, 'Justine', '96458574', 'sagboville', 'la frontalière', 1),
(19, 'nicolas', '549865448', 'lomé', 'le choco', 1),
(21, 'Janesais', '99908767', 'Tokoin hopital', 'RAS', 1),
(22, 'Koffi', '82487158', 'kara', 'le gars choco', 1),
(24, 'Aliate', '91169388', 'aagoroaliate@gmail.com', 'Etudiant', 1),
(25, 'alphonsine', '96857421', 'Novisi', 'la fille', 1),
(26, 'friedrich', '9325241', 'nukafu', 'le Bg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `details_commande` text NOT NULL,
  `date_commande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `details_commande`, `date_commande`, `client_id`, `visible`) VALUES
(1, 'chocolat', '2024-02-28 22:52:22', 0, 1),
(2, 'frite', '2024-02-28 22:53:27', 3, 1),
(3, 'patate douxe', '2024-02-28 22:54:57', 2, 1),
(4, 'fraise', '2024-03-03 22:42:16', 4, 1),
(5, 'samoussa', '2024-03-04 12:14:17', 12, 1),
(6, 'samoussa', '2024-03-04 15:06:24', 13, 1),
(24, 'chocolat chaux', '2024-03-04 15:39:00', 17, 1),
(25, 'Bière', '2024-03-04 15:39:16', 15, 1),
(26, 'Pizza', '2024-03-04 15:39:51', 12, 1),
(27, 'Fritre', '2024-03-04 15:40:04', 16, 1),
(28, 'Spaguétit', '2024-03-04 15:40:22', 13, 1),
(29, 'alloco, accompagné de poulet', '2024-03-05 15:27:21', 18, 1),
(30, 'Des samoussa', '2024-03-11 09:26:55', 5, 1),
(31, 'poulet frite, et saucisse', '2024-03-12 09:23:32', 1, 1),
(32, 'Ayimolou', '2024-03-14 14:36:13', 21, 1),
(35, 'bière', '2024-03-20 01:15:01', 23, 1),
(36, 'bière', '2024-03-20 01:15:31', 2, 1),
(37, 'Samoussa, Gâteau au chocolat', '2024-03-20 13:02:42', 24, 1),
(38, 'chocolat', '2024-03-20 14:48:33', 25, 1),
(39, 'Yaourt', '2024-03-26 15:50:43', 26, 1);

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

DROP TABLE IF EXISTS `depenses`;
CREATE TABLE IF NOT EXISTS `depenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_depense` date NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id`, `nom`, `ingredients`, `instructions`) VALUES
(1, 'Spaghetti rouge', '400g de spaghetti\n1 boîte de tomates concassées (environ 400g)\n2 gousses d\'ail, hachées finement\n1 oignon, haché finement\n2 cuillères à soupe d\'huile d\'olive\n1 cuillère à café d\'origan séché\n1 cuillère à café de basilic séché\nSel et poivre noir moulu, selon votre goût\nParmesan râpé (facultatif, pour servir)\nFeuilles de basilic frais (facultatif, pour garnir)', 'Dans une grande casserole d\'eau bouillante salée, faites cuire les spaghetti selon les instructions sur l\'emballage jusqu\'à ce qu\'ils soient al dente. Une fois cuits, égouttez-les et réservez.\n\nPendant ce temps, dans une grande poêle, chauffez l\'huile d\'olive à feu moyen. Ajoutez l\'oignon haché et faites-le revenir jusqu\'à ce qu\'il soit translucide, environ 3-4 minutes.\n\nAjoutez l\'ail haché dans la poêle et faites-le cuire pendant une minute de plus, en remuant fréquemment pour éviter qu\'il ne brûle.\n\nVersez les tomates concassées dans la poêle avec l\'oignon et l\'ail. Ajoutez l\'origan, le basilic séché, du sel et du poivre noir moulu selon votre goût. Mélangez bien.\n\nLaissez mijoter la sauce tomate pendant environ 15-20 minutes à feu doux, en remuant de temps en temps, jusqu\'à ce qu\'elle épaississe légèrement.\n\nUne fois la sauce prête, ajoutez-y les spaghetti cuits et égouttés. Mélangez délicatement pour enrober les pâtes de sauce.\n\nServez les spaghetti chauds dans des assiettes individuelles. Si désiré, saupoudrez de parmesan râpé et garnissez de feuilles de basilic frais pour une touche de fraîcheur.\n\nDégustez vos spaghetti à la sauce tomate rouge délicieusement préparés !');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `nom`, `prenom`, `password`, `email`) VALUES
(1, 'jean', 'amony', '123456', 'lbs2023@gmail.com'),
(2, 'AMONY', 'jean-pierre', '123456', 'amony@gmail.com'),
(3, 'COEUR', 'bebou', '789456', 'lbs2023@gmail.com'),
(4, 'zerty', 'hgfd', 'lbs2023848', 'lbs2023@gmail.com'),
(5, 'zerty', 'hgfd', 'lbs2023848', 'lbs2023@gmail.com'),
(6, 'zddffvqe', 'kkloook', '655411', 'lbs2023@gmail.com'),
(7, 'ABALO', 'afi', 'lbs2023', 'lbs2023@gmail.com'),
(8, 'ASSADJI', 'keith', '123456', 'lbs2023@gmail.com'),
(9, 'hhuihuih', 'koggi', '123456', 'lbs2023@gmail.com'),
(10, 'NJI-MOLUH', 'Nicolas', '123456', 'nicolas@gmail.com'),
(11, 'KOUASSI', 'darius', '123456', 'darius@gmail.com'),
(12, 'Marzourk', 'OURO-AKONDO', '123456', 'nathy_marzourk@gmail.com'),
(13, 'AYELE', 'Ariella', 'Arimad', 'ayele@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
