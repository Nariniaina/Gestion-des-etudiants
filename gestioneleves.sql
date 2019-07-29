-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 juil. 2019 à 12:46
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
-- Base de données :  `gestioneleves`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_chambre`
--

DROP TABLE IF EXISTS `t_chambre`;
CREATE TABLE IF NOT EXISTS `t_chambre` (
  `ch_id` int(11) NOT NULL,
  `ch_libelle` varchar(100) DEFAULT NULL,
  `ch_nbpers` int(11) DEFAULT NULL,
  `ch_et_id` int(11) DEFAULT NULL,
  `ch_prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_chambre`
--

INSERT INTO `t_chambre` (`ch_id`, `ch_libelle`, `ch_nbpers`, `ch_et_id`, `ch_prix`) VALUES
(1, 'CO1', 4, 1, 30000),
(2, 'CO2', 5, 1, 40000),
(3, 'CO3', 2, 1, 20000),
(4, 'CO4', 2, 2, 20000),
(5, 'CO5', 3, 2, 25000),
(6, 'CO6', 3, 3, 25000),
(7, 'CO7', 6, 3, 50000),
(8, 'CO8', 6, 3, 50000),
(9, 'CO9', 8, 4, 70000),
(10, 'C10', 8, 4, 70000);

-- --------------------------------------------------------

--
-- Structure de la table `t_client`
--

DROP TABLE IF EXISTS `t_client`;
CREATE TABLE IF NOT EXISTS `t_client` (
  `cl_id` int(11) NOT NULL,
  `cl_nom` varchar(100) DEFAULT NULL,
  `cl_ddn` date DEFAULT NULL,
  `cl_adresse` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_client`
--

INSERT INTO `t_client` (`cl_id`, `cl_nom`, `cl_ddn`, `cl_adresse`) VALUES
(1, 'RANDRIANIHARISOA Fanilo Nantenaina', '2002-06-15', 'Ankadindramamy'),
(2, 'RANDRIJAONARIVELO Nehemiah Sitraka', '2002-12-05', 'Ampandrana'),
(3, 'RANDRIAMANANTENA Sitraka Gael', '2000-03-11', 'Mahabo'),
(4, 'RANAIVOJAONA Hasinjaka', '1995-05-07', 'Talatamaty'),
(5, 'Diamondra', '1999-11-22', 'IVATO'),
(6, 'Karin', '1999-10-12', 'Ampefiloha'),
(7, 'Ratsima', '1999-02-20', 'Ambatomitsangana');

-- --------------------------------------------------------

--
-- Structure de la table `t_etage`
--

DROP TABLE IF EXISTS `t_etage`;
CREATE TABLE IF NOT EXISTS `t_etage` (
  `et_id` int(11) NOT NULL,
  `et_nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`et_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_etage`
--

INSERT INTO `t_etage` (`et_id`, `et_nom`) VALUES
(1, '1er etage'),
(2, '2em etage'),
(3, '3em etage'),
(4, 'Bengalow'),
(5, 'RDC');

-- --------------------------------------------------------

--
-- Structure de la table `t_etudiant`
--

DROP TABLE IF EXISTS `t_etudiant`;
CREATE TABLE IF NOT EXISTS `t_etudiant` (
  `etu_id` int(11) NOT NULL,
  `etu_matricule` text,
  `etu_nom` varchar(100) DEFAULT NULL,
  `etu_ddn` date DEFAULT NULL,
  `etu_adresse` varchar(100) DEFAULT NULL,
  `fil_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`etu_id`),
  KEY `fk` (`fil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_etudiant`
--

INSERT INTO `t_etudiant` (`etu_id`, `etu_matricule`, `etu_nom`, `etu_ddn`, `etu_adresse`, `fil_id`) VALUES
(1, '00001', 'RANDRIANIHARISOA Fanilo Nantenaina', '2002-06-15', 'Ankadindramamy', NULL),
(2, '00002', 'RANDRIJAONARIVELO Nehemiah Sitraka', '2002-12-05', 'Ampandrana', NULL),
(3, '00002', 'RANDRIAMANANTENA Sitraka Gael', '2000-03-11', 'Mahabo', NULL),
(4, '00004', 'RANAIVOJAONA Hasinjaka', '1995-05-07', 'Talatamaty', NULL),
(5, '00005', 'Diamondra', '1999-11-22', 'IVATO', NULL),
(6, '00006', 'Karin', '1999-10-12', 'Ampefiloha', NULL),
(7, '00007', 'Ratsima', '1999-02-20', 'Ambatomitsangana', NULL),
(8, '0008', 'Manda', '1998-02-14', 'AMBOJANAHARY', 2);

-- --------------------------------------------------------

--
-- Structure de la table `t_examen`
--

DROP TABLE IF EXISTS `t_examen`;
CREATE TABLE IF NOT EXISTS `t_examen` (
  `exe_id` int(11) NOT NULL,
  `exe_eleveid` varchar(100) DEFAULT NULL,
  `exe_note` int(11) DEFAULT NULL,
  `exe_date` date DEFAULT NULL,
  `exe_matiere` int(11) DEFAULT NULL,
  PRIMARY KEY (`exe_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_examen`
--

INSERT INTO `t_examen` (`exe_id`, `exe_eleveid`, `exe_note`, `exe_date`, `exe_matiere`) VALUES
(1, '1', 15, '2019-05-10', 2),
(2, '2', 12, '2019-05-13', 6),
(3, '1', 10, '2019-05-09', 1),
(4, '1', 11, '2019-05-11', 3),
(5, '1', 9, '2019-05-12', 4),
(6, '1', 17, '2019-05-15', 5),
(7, '1', 10, '2019-05-13', 6),
(8, '2', 13, '2019-05-09', 1),
(9, '2', 9, '2019-05-10', 2),
(10, '2', 13, '2019-05-11', 3),
(11, '2', 14, '2019-05-12', 4),
(12, '3', 15, '2019-05-09', 1),
(13, '3', 10, '2019-05-10', 2),
(14, '3', 7, '2019-05-11', 3),
(15, '3', 10, '2019-05-12', 4),
(16, '3', 15, '2019-05-15', 5),
(17, '3', 11, '2019-05-13', 6),
(18, '4', 11, '2019-05-09', 1),
(19, '4', 13, '2019-05-10', 2),
(20, '4', 10, '2019-05-11', 3),
(21, '4', 8, '2019-05-12', 4),
(22, '4', 17, '2019-05-15', 5),
(23, '4', 15, '2019-05-13', 6),
(24, '2', 18, '2019-05-15', 5),
(25, '5', 12, '2019-05-09', 1),
(26, '5', 10, '2019-05-10', 2),
(27, '6', 12, '2019-05-10', 2),
(28, '7', 14, '2019-05-11', 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_filiere`
--

DROP TABLE IF EXISTS `t_filiere`;
CREATE TABLE IF NOT EXISTS `t_filiere` (
  `fil_id` int(11) NOT NULL AUTO_INCREMENT,
  `fil_nom` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`fil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_filiere`
--

INSERT INTO `t_filiere` (`fil_id`, `fil_nom`) VALUES
(1, 'Informatique'),
(2, 'compte-finance');

-- --------------------------------------------------------

--
-- Structure de la table `t_matiere`
--

DROP TABLE IF EXISTS `t_matiere`;
CREATE TABLE IF NOT EXISTS `t_matiere` (
  `mat_id` int(11) NOT NULL,
  `mat_libelle` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_matiere`
--

INSERT INTO `t_matiere` (`mat_id`, `mat_libelle`) VALUES
(1, 'Base de donnée'),
(2, 'Programmation'),
(3, 'Français'),
(4, 'Anglais'),
(5, 'ADO'),
(6, 'Maths');

-- --------------------------------------------------------

--
-- Structure de la table `t_reservation`
--

DROP TABLE IF EXISTS `t_reservation`;
CREATE TABLE IF NOT EXISTS `t_reservation` (
  `res_id` int(11) NOT NULL,
  `res_datedebut` date DEFAULT NULL,
  `res_datefin` date DEFAULT NULL,
  `res_nbpers` int(11) DEFAULT NULL,
  `res_ch_id` int(11) DEFAULT NULL,
  `res_cl_id` int(11) DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_reservation`
--

INSERT INTO `t_reservation` (`res_id`, `res_datedebut`, `res_datefin`, `res_nbpers`, `res_ch_id`, `res_cl_id`, `duree`) VALUES
(1, '2019-05-10', '2019-05-15', 4, 1, 1, 5),
(2, '2019-05-12', '2019-05-15', 3, 5, 5, 3),
(3, '2019-05-12', '2019-05-15', 3, 4, 2, 3),
(4, '2019-05-14', '2019-05-15', 1, 3, 7, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_etudiant`
--
ALTER TABLE `t_etudiant`
  ADD CONSTRAINT `t_etudiant_ibfk_1` FOREIGN KEY (`fil_id`) REFERENCES `t_filiere` (`fil_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
