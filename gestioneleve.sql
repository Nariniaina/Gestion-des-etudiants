-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 28 oct. 2019 à 02:03
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestioneleve`
--

-- --------------------------------------------------------

--
-- Structure de la table `a_classe`
--

DROP TABLE IF EXISTS `a_classe`;
CREATE TABLE IF NOT EXISTS `a_classe` (
  `aclasse_id` int(11) NOT NULL AUTO_INCREMENT,
  `cla_id` int(11) DEFAULT NULL,
  `el_id` int(11) DEFAULT NULL,
  `aclasse_date` date DEFAULT NULL,
  PRIMARY KEY (`aclasse_id`),
  KEY `cla_id` (`cla_id`),
  KEY `el_id` (`el_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `a_classe`
--

INSERT INTO `a_classe` (`aclasse_id`, `cla_id`, `el_id`, `aclasse_date`) VALUES
(1, 3, 1, '2019-10-28'),
(3, 2, 2, '2019-10-28'),
(4, 6, 3, '2019-10-28');

-- --------------------------------------------------------

--
-- Structure de la table `a_examen`
--

DROP TABLE IF EXISTS `a_examen`;
CREATE TABLE IF NOT EXISTS `a_examen` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `el_id` int(11) DEFAULT NULL,
  `ex_date` date DEFAULT NULL,
  `ex_note` int(3) DEFAULT NULL,
  `sa_id` int(11) DEFAULT NULL,
  `mat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ex_id`),
  KEY `sa_id` (`sa_id`),
  KEY `mat_id` (`mat_id`),
  KEY `el_id` (`el_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `a_examen`
--

INSERT INTO `a_examen` (`ex_id`, `el_id`, `ex_date`, `ex_note`, `sa_id`, `mat_id`) VALUES
(1, 2, '2019-11-04', 10, 2, 1),
(2, 3, '2019-11-05', 18, 1, 1),
(3, 1, '2019-11-04', 14, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_absence`
--

DROP TABLE IF EXISTS `t_absence`;
CREATE TABLE IF NOT EXISTS `t_absence` (
  `abs_id` int(11) NOT NULL AUTO_INCREMENT,
  `abs_motif` varchar(20) DEFAULT NULL,
  `el_id` int(11) DEFAULT NULL,
  `abs_date` date DEFAULT NULL,
  PRIMARY KEY (`abs_id`),
  KEY `el_id` (`el_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_absence`
--

INSERT INTO `t_absence` (`abs_id`, `abs_motif`, `el_id`, `abs_date`) VALUES
(1, 'Malade', 1, '2019-10-28');

-- --------------------------------------------------------

--
-- Structure de la table `t_classe`
--

DROP TABLE IF EXISTS `t_classe`;
CREATE TABLE IF NOT EXISTS `t_classe` (
  `cla_id` int(11) NOT NULL AUTO_INCREMENT,
  `cla_nom` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cla_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_classe`
--

INSERT INTO `t_classe` (`cla_id`, `cla_nom`) VALUES
(1, 'L1G1'),
(2, 'L1G2'),
(3, 'L1G3'),
(4, 'L2RSI'),
(5, 'L2IDEV'),
(6, 'L3'),
(7, 'M1'),
(8, 'M2');

-- --------------------------------------------------------

--
-- Structure de la table `t_eleve`
--

DROP TABLE IF EXISTS `t_eleve`;
CREATE TABLE IF NOT EXISTS `t_eleve` (
  `el_id` int(11) NOT NULL AUTO_INCREMENT,
  `el_nom` varchar(30) DEFAULT NULL,
  `el_prenom` varchar(30) DEFAULT NULL,
  `el_ddn` date DEFAULT NULL,
  `el_sexe` varchar(1) DEFAULT NULL,
  `el_inscription` int(4) DEFAULT NULL,
  `el_email` varchar(40) DEFAULT NULL,
  `el_diplome` varchar(40) DEFAULT NULL,
  `el_option` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`el_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_eleve`
--

INSERT INTO `t_eleve` (`el_id`, `el_nom`, `el_prenom`, `el_ddn`, `el_sexe`, `el_inscription`, `el_email`, `el_diplome`, `el_option`) VALUES
(1, 'RAMANANTSALAMA', 'Nariniaina', '1999-01-15', 'H', 2019, 'nariniaina.ramanantsalama@esti.mg', 'D', 'DEV'),
(2, 'RAZAFITSARA', 'Sly', '1999-02-15', 'H', 2019, 'razafitsaraslykers@gmail.com', 'A2', 'RSI'),
(3, 'RAFARAMALALA', 'Hanta', '1994-12-14', 'F', 2019, 'rafara@gmail.com', 'D', 'DEV');

-- --------------------------------------------------------

--
-- Structure de la table `t_login`
--

DROP TABLE IF EXISTS `t_login`;
CREATE TABLE IF NOT EXISTS `t_login` (
  `lo_id` int(11) NOT NULL AUTO_INCREMENT,
  `lo_username` varchar(30) DEFAULT NULL,
  `lo_password` varchar(100) DEFAULT NULL,
  `lo_email` varchar(100) DEFAULT NULL,
  `lo_date` datetime DEFAULT NULL,
  PRIMARY KEY (`lo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_login`
--

INSERT INTO `t_login` (`lo_id`, `lo_username`, `lo_password`, `lo_email`, `lo_date`) VALUES
(1, 'Administrateur', 'ba266745410d3c888ad3ca53f55e3b4f', 'admin@esti.mg', '2019-10-28 00:54:35'),
(2, 'Nariniaina', 'ba266745410d3c888ad3ca53f55e3b4f', 'nariniaina.ramanantsalama@esti.mg', '2019-10-28 00:56:56');

-- --------------------------------------------------------

--
-- Structure de la table `t_matiere`
--

DROP TABLE IF EXISTS `t_matiere`;
CREATE TABLE IF NOT EXISTS `t_matiere` (
  `mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `mat_nom` varchar(60) DEFAULT NULL,
  `mat_prof` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_matiere`
--

INSERT INTO `t_matiere` (`mat_id`, `mat_nom`, `mat_prof`) VALUES
(1, 'INFO_140_Initiation a la programmation', 'Mr Nirina');

-- --------------------------------------------------------

--
-- Structure de la table `t_retard`
--

DROP TABLE IF EXISTS `t_retard`;
CREATE TABLE IF NOT EXISTS `t_retard` (
  `ret_id` int(11) NOT NULL AUTO_INCREMENT,
  `el_id` int(11) DEFAULT NULL,
  `ret_motif` varchar(20) DEFAULT NULL,
  `ret_heure` time DEFAULT NULL,
  `ret_date` date DEFAULT NULL,
  PRIMARY KEY (`ret_id`),
  KEY `el_id` (`el_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_retard`
--

INSERT INTO `t_retard` (`ret_id`, `el_id`, `ret_motif`, `ret_heure`, `ret_date`) VALUES
(1, 1, 'Bus', '01:19:59', '2019-10-28'),
(2, 1, 'Bus', '01:21:22', '2019-10-28');

-- --------------------------------------------------------

--
-- Structure de la table `t_salle`
--

DROP TABLE IF EXISTS `t_salle`;
CREATE TABLE IF NOT EXISTS `t_salle` (
  `sa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sa_nom` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_salle`
--

INSERT INTO `t_salle` (`sa_id`, `sa_nom`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'S3'),
(4, 'S4');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `a_classe`
--
ALTER TABLE `a_classe`
  ADD CONSTRAINT `a_classe_ibfk_1` FOREIGN KEY (`cla_id`) REFERENCES `t_classe` (`cla_id`),
  ADD CONSTRAINT `a_classe_ibfk_2` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`);

--
-- Contraintes pour la table `a_examen`
--
ALTER TABLE `a_examen`
  ADD CONSTRAINT `a_examen_ibfk_1` FOREIGN KEY (`sa_id`) REFERENCES `t_salle` (`sa_id`),
  ADD CONSTRAINT `a_examen_ibfk_2` FOREIGN KEY (`mat_id`) REFERENCES `t_matiere` (`mat_id`),
  ADD CONSTRAINT `a_examen_ibfk_3` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`);

--
-- Contraintes pour la table `t_absence`
--
ALTER TABLE `t_absence`
  ADD CONSTRAINT `t_absence_ibfk_1` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`);

--
-- Contraintes pour la table `t_retard`
--
ALTER TABLE `t_retard`
  ADD CONSTRAINT `t_retard_ibfk_1` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
