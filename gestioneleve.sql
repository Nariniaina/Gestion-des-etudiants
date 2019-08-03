-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 03 août 2019 à 00:47
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `a_classe`
--

INSERT INTO `a_classe` (`aclasse_id`, `cla_id`, `el_id`, `aclasse_date`) VALUES
(1, 1, 1, '2019-07-21'),
(2, 2, 2, '2019-07-21'),
(3, 1, 3, '2019-07-21'),
(4, 1, 4, '2019-07-21'),
(5, 3, 5, '2019-07-21'),
(6, 5, 6, '2019-07-21'),
(7, 5, 7, '2019-08-03');

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
  KEY `el_id` (`el_id`),
  KEY `sa_id` (`sa_id`),
  KEY `mat_id` (`mat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `a_examen`
--

INSERT INTO `a_examen` (`ex_id`, `el_id`, `ex_date`, `ex_note`, `sa_id`, `mat_id`) VALUES
(1, 3, '2019-07-23', NULL, 2, 1),
(2, 4, '2019-07-23', NULL, 2, 1),
(3, 6, '2019-07-23', NULL, 2, 1),
(4, 5, '2019-07-23', NULL, 1, 1),
(5, 2, '2019-07-23', NULL, 1, 1),
(6, 1, '2019-07-23', NULL, 1, 1),
(8, 6, '1999-12-10', 15, 1, 1),
(9, 4, '2019-02-12', NULL, 2, 1),
(10, 5, '2019-02-12', NULL, 2, 1),
(11, 3, '2019-02-12', NULL, 2, 1),
(12, 2, '2019-02-12', NULL, 2, 1),
(13, 1, '2019-02-12', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `temp_exam`
--

DROP TABLE IF EXISTS `temp_exam`;
CREATE TABLE IF NOT EXISTS `temp_exam` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `el_id` int(11) DEFAULT NULL,
  `ex_date` date DEFAULT NULL,
  `ex_note` int(3) DEFAULT NULL,
  `sa_id` int(11) DEFAULT NULL,
  `mat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ex_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  KEY `t_absence_ibfk_1` (`el_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_absence`
--

INSERT INTO `t_absence` (`abs_id`, `abs_motif`, `el_id`, `abs_date`) VALUES
(1, 'Malade', 4, '2019-08-03');

-- --------------------------------------------------------

--
-- Structure de la table `t_classe`
--

DROP TABLE IF EXISTS `t_classe`;
CREATE TABLE IF NOT EXISTS `t_classe` (
  `cla_id` int(11) NOT NULL AUTO_INCREMENT,
  `cla_nom` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cla_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_classe`
--

INSERT INTO `t_classe` (`cla_id`, `cla_nom`) VALUES
(1, 'L1G2'),
(2, 'L1G3'),
(3, 'L2G1'),
(4, 'L2G2'),
(5, 'L2G3');

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
  `el_diplome` varchar(40) NOT NULL,
  `el_option` varchar(40) NOT NULL,
  PRIMARY KEY (`el_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_eleve`
--

INSERT INTO `t_eleve` (`el_id`, `el_nom`, `el_prenom`, `el_ddn`, `el_sexe`, `el_inscription`, `el_email`, `el_diplome`, `el_option`) VALUES
(1, 'RAMANANTSALAMA', 'Nariniaina', '1999-01-15', 'H', 2019, 'nariniaina.ramanantsalama@esti.mg', 'D', 'DEV'),
(2, 'RAFARAMALALA', 'Marina', '1996-09-14', 'F', 2019, 'rafaramalala@gmail.com', 'A2', 'DEV'),
(3, 'RASOLO', 'Mariela', '2000-12-15', 'F', 2019, 'mariela@gmail.com', 'A2', 'DEV'),
(4, 'NASOLO', 'Zo', '1999-11-11', 'H', 2019, 'Zo@gmail.com', 'D', 'DEV'),
(5, 'RAFALY', 'Nasser', '1996-03-12', 'H', 2019, 'nasser@gmail.com', 'A2', 'DEV'),
(6, 'RAZAFITSARA', 'Sly', '1999-02-15', 'H', 2019, 'razafitsaraslykers@gmail.com', 'A2', 'RSI'),
(7, 'RICHARD', 'Watterson', '2000-10-10', 'H', 2019, 'richard@gmail.com', 'C', 'RSI'),
(8, 'RASETA', 'Mananjara', '1996-04-01', 'H', 2019, 'raseta@gmail.com', 'D', 'DEV');

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
  `lo_date` datetime NOT NULL,
  PRIMARY KEY (`lo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_login`
--

INSERT INTO `t_login` (`lo_id`, `lo_username`, `lo_password`, `lo_email`, `lo_date`) VALUES
(1, 'Administrateur', '63a9f0ea7bb98050796b649e85481845', 'rootadmin@email.com', '2019-07-16 10:19:07'),
(2, 'Nariniaina', 'ba266745410d3c888ad3ca53f55e3b4f', 'nariniaina.ramanantsalama@esti.mg', '2019-07-15 11:35:45');

-- --------------------------------------------------------

--
-- Structure de la table `t_matiere`
--

DROP TABLE IF EXISTS `t_matiere`;
CREATE TABLE IF NOT EXISTS `t_matiere` (
  `mat_id` int(11) NOT NULL AUTO_INCREMENT,
  `mat_nom` varchar(30) DEFAULT NULL,
  `mat_prof` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_matiere`
--

INSERT INTO `t_matiere` (`mat_id`, `mat_nom`, `mat_prof`) VALUES
(1, 'INFO_140', 'Mr Nirina'),
(2, 'ENTR_220', 'Mr Gilde');

-- --------------------------------------------------------

--
-- Structure de la table `t_retard`
--

DROP TABLE IF EXISTS `t_retard`;
CREATE TABLE IF NOT EXISTS `t_retard` (
  `ret_id` int(11) NOT NULL AUTO_INCREMENT,
  `el_id` int(11) NOT NULL,
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
(1, 2, 'Malade', '00:49:25', '2019-08-03'),
(2, 1, 'Bus', '00:50:24', '2019-08-03');

-- --------------------------------------------------------

--
-- Structure de la table `t_salle`
--

DROP TABLE IF EXISTS `t_salle`;
CREATE TABLE IF NOT EXISTS `t_salle` (
  `sa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sa_nom` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_salle`
--

INSERT INTO `t_salle` (`sa_id`, `sa_nom`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'S3'),
(4, 'S4'),
(5, 'S5'),
(6, 'S6');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `a_classe`
--
ALTER TABLE `a_classe`
  ADD CONSTRAINT `a_classe_ibfk_1` FOREIGN KEY (`cla_id`) REFERENCES `t_classe` (`cla_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `a_classe_ibfk_2` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `a_examen`
--
ALTER TABLE `a_examen`
  ADD CONSTRAINT `a_examen_ibfk_1` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `a_examen_ibfk_2` FOREIGN KEY (`mat_id`) REFERENCES `t_matiere` (`mat_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `a_examen_ibfk_3` FOREIGN KEY (`sa_id`) REFERENCES `t_salle` (`sa_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_absence`
--
ALTER TABLE `t_absence`
  ADD CONSTRAINT `t_absence_ibfk_1` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `t_retard`
--
ALTER TABLE `t_retard`
  ADD CONSTRAINT `t_retard_ibfk_1` FOREIGN KEY (`el_id`) REFERENCES `t_eleve` (`el_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
