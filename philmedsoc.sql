-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 29 Janvier 2022 à 18:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `philmedsoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `biblio`
--

CREATE TABLE IF NOT EXISTS `biblio` (
  `idb` int(11) NOT NULL AUTO_INCREMENT,
  `idsector` int(11) NOT NULL,
  `idrubrik` int(11) NOT NULL,
  `idsupport` int(11) NOT NULL,
  `idauthor` int(11) NOT NULL,
  `idroitad` int(11) NOT NULL,
  `idroitma` tinyint(1) NOT NULL,
  `idroitfo` tinyint(1) NOT NULL,
  `idroitau` tinyint(1) NOT NULL,
  `onlin` tinyint(1) NOT NULL,
  `chem` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `titre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `reference` varchar(50) NOT NULL,
  `comment` text CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `creatdate` datetime NOT NULL,
  `duree` int(11) NOT NULL,
  PRIMARY KEY (`idb`),
  KEY `idb` (`idb`),
  KEY `idru` (`idrubrik`),
  KEY `idsu` (`idsupport`),
  KEY `idauthor` (`idauthor`),
  KEY `idsector` (`idsector`),
  KEY `idroit` (`idroitad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `biblio`
--

INSERT INTO `biblio` (`idb`, `idsector`, `idrubrik`, `idsupport`, `idauthor`, `idroitad`, `idroitma`, `idroitfo`, `idroitau`, `onlin`, `chem`, `titre`, `reference`, `comment`, `creatdate`, `duree`) VALUES
(1, 1, 5, 10, 3, 4, 0, 0, 0, 0, 'http://localhost/Projet-Philiance/assets/pdf/1.pdf', 'L''équilibre alimentaire des personnes agées ', 'EA-03', 'Tous les fondamentaux pour les étudiants en début ...	', '2021-12-29 14:50:13', 60),
(2, 1, 6, 10, 3, 2, 0, 0, 0, 0, 'http://localhost/Projet-Philiance/assets/pdf/5.pdf', 'titre-1', 'EB-05', 'resume-1', '0000-00-00 00:00:00', 30),
(3, 1, 7, 10, 3, 2, 0, 0, 0, 0, 'http://localhost/Projet-Philiance/assets/pdf/6.pdf', 'titre-2', 'TB-04', 'resume-2', '2021-12-29 16:50:13', 45),
(4, 1, 8, 11, 3, 2, 0, 0, 0, 0, 'https://youtu.be/Z0Ssjy3HkSw', 'titre-3', 'TC-6', 'resume-3', '2021-12-29 16:50:13', 15);

-- --------------------------------------------------------

--
-- Structure de la table `names`
--

CREATE TABLE IF NOT EXISTS `names` (
  `idn` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pseudo` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` text NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `idrule` int(11) NOT NULL,
  `idsection` int(11) NOT NULL,
  PRIMARY KEY (`idn`),
  KEY `idrule` (`idrule`),
  KEY `idn` (`idn`),
  KEY `idsection` (`idsection`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `names`
--

INSERT INTO `names` (`idn`, `nom`, `prenom`, `pseudo`, `email`, `mdp`, `idrule`, `idsection`) VALUES
(1, 'johnom', 'John', 'john22', 'john22@free.fr', 'john2022', 4, 1),
(2, 'Jimnom', 'Jim', 'jim22', 'jim22@free.fr', 'jim2022', 3, 1),
(3, 'Julienom', 'Julie', 'julie22', 'julie22@free.fr', 'julie2022', 2, 1),
(4, 'Jamesnom', 'James', 'james22', 'james22@free.fr', 'james2022', 1, 1),
(5, 'jasonom\r\n	', 'Jason', 'jason22', 'jason22@free.fr', 'jason2022', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `idnew` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`idnew`),
  KEY `idnew` (`idnew`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rubrik`
--

CREATE TABLE IF NOT EXISTS `rubrik` (
  `idrubrik` int(11) NOT NULL AUTO_INCREMENT,
  `idthem` int(11) NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`idrubrik`),
  KEY `idr` (`idrubrik`),
  KEY `idth` (`idthem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `rubrik`
--

INSERT INTO `rubrik` (`idrubrik`, `idthem`, `nom`) VALUES
(5, 7, 'Aide au repas'),
(6, 7, 'Trouble de la déglutition'),
(7, 9, 'Relation soignant/soigné'),
(8, 7, 'Equilibre alimentaire de l''enfant '),
(9, 10, 'Qualite de prise en charge'),
(10, 10, 'Prévenir & gérer'),
(11, 10, 'Protection de l''enfance'),
(12, 11, 'Secret professionnel'),
(13, 11, 'Responsabilité juridique'),
(14, 8, 'RABC au jour le jour'),
(15, 9, 'Relation soignant/famille du soigné');

-- --------------------------------------------------------

--
-- Structure de la table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `idr` int(11) NOT NULL,
  `type` text NOT NULL,
  KEY `idr` (`idr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rules`
--

INSERT INTO `rules` (`idr`, `type`) VALUES
(1, 'administrateur'),
(2, 'Manager'),
(3, 'Formateur'),
(4, 'auditeur');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `idsec` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `cours` varchar(255) NOT NULL,
  PRIMARY KEY (`idsec`),
  KEY `idsec` (`idsec`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `section`
--

INSERT INTO `section` (`idsec`, `group`, `sector`, `cours`) VALUES
(1, 'Philiance formation', 'Métiers', 'Médico-social'),
(2, 'Philiance formation ', 'Métiers', 'Design Graphisme'),
(3, 'Philiance formation', 'Bureautique', 'Access'),
(4, 'Philiance formation', 'Informatique', 'Réseaux'),
(5, 'Philiance formation', 'Langues européennes', 'Allemand');

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `idsu` int(11) NOT NULL AUTO_INCREMENT,
  `typ` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `nom` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`idsu`),
  KEY `idsu` (`idsu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `support`
--

INSERT INTO `support` (`idsu`, `typ`, `nom`) VALUES
(10, 'pdf', 'Document PDF'),
(11, 'mp4', 'Document Video MP4'),
(12, 'pptx', 'Document Powerpoint');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `idth` int(11) NOT NULL AUTO_INCREMENT,
  `acro` varchar(4) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `them` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`idth`),
  KEY `idth` (`idth`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`idth`, `acro`, `them`) VALUES
(7, 'SA', 'Alimentation'),
(8, 'SH', 'HygiÃ¨ne'),
(9, 'SC', 'Communication'),
(10, 'SB', 'Bientraitance'),
(11, 'SE', 'Ethique');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `biblio`
--
ALTER TABLE `biblio`
  ADD CONSTRAINT `biblio_ibfk_1` FOREIGN KEY (`idrubrik`) REFERENCES `rubrik` (`idrubrik`),
  ADD CONSTRAINT `biblio_ibfk_2` FOREIGN KEY (`idsupport`) REFERENCES `support` (`idsu`),
  ADD CONSTRAINT `biblio_ibfk_3` FOREIGN KEY (`idauthor`) REFERENCES `names` (`idn`),
  ADD CONSTRAINT `biblio_ibfk_4` FOREIGN KEY (`idsector`) REFERENCES `section` (`idsec`),
  ADD CONSTRAINT `biblio_ibfk_5` FOREIGN KEY (`idroitad`) REFERENCES `rules` (`idr`);

--
-- Contraintes pour la table `names`
--
ALTER TABLE `names`
  ADD CONSTRAINT `names_ibfk_1` FOREIGN KEY (`idrule`) REFERENCES `rules` (`idr`),
  ADD CONSTRAINT `names_ibfk_2` FOREIGN KEY (`idsection`) REFERENCES `section` (`idsec`);

--
-- Contraintes pour la table `rubrik`
--
ALTER TABLE `rubrik`
  ADD CONSTRAINT `rubrik_ibfk_1` FOREIGN KEY (`idthem`) REFERENCES `theme` (`idth`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
