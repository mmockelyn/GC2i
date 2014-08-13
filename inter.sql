-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 13 Août 2014 à 14:32
-- Version du serveur: 5.5.37-0ubuntu0.13.10.1
-- Version de PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `inter`
--

-- --------------------------------------------------------

--
-- Structure de la table `bonlivraison_intervention`
--

CREATE TABLE IF NOT EXISTS `bonlivraison_intervention` (
  `idbonlivraison` int(13) NOT NULL AUTO_INCREMENT,
  `idintervention` int(13) NOT NULL,
  `info_complementaire_bdl` varchar(255) NOT NULL,
  PRIMARY KEY (`idbonlivraison`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `bonlivraison_intervention`
--

INSERT INTO `bonlivraison_intervention` (`idbonlivraison`, `idintervention`, `info_complementaire_bdl`) VALUES
(1, 0, ''),
(2, 0, ''),
(3, 32, ''),
(4, 32, '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(13) NOT NULL AUTO_INCREMENT,
  `civilite` int(1) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse1` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `raison_social` varchar(255) NOT NULL,
  `siret` varchar(255) NOT NULL,
  `tva_intra` varchar(255) NOT NULL,
  PRIMARY KEY (`idclient`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idclient`, `civilite`, `nom`, `prenom`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `fax`, `port`, `mail`, `raison_social`, `siret`, `tva_intra`) VALUES
(4, 1, 'MESNI', 'Patrick', '2 Rue de la GauchÃ¨re\r\n', '34 RÃ©sidence Mirville', '85100', 'LES SABLES D OLONNE', '06 79 24 33 16', '', '', 'NO MAIL', '', '', ''),
(11, 1, 'MOCKELYN', 'Maxime', '3 rue du Grand Coin', '', '85100', 'LES SABLES D OLONNE', '02 51 95 25 95', '', '06 33 13 43 30', 'mmockelyn@gmail.com', '', '', ''),
(7, 1, 'DAULNY', 'Christian', '2 Rue des Glycinnes', '', '85340', 'Olonne Sur Mer', '06 33 09 59 07', '', '', 'NO ADRESSE', '', '', ''),
(3, 3, 'WEISS', 'Celine', 'No adresse', '', '85150', 'Saint Julien des Landes', '00 00 00 00 00', '', '', 'NO MAIL', '', '', ''),
(8, 1, 'HEILIGENSTEIN', 'Pascal', '1 AllÃ©e De la NoÃ©', '', '85150', 'VairÃ©', '02 51 33 78 47', '', '06 33 71 93 10', 'contact@laforterie.fr', '', '', ''),
(9, 1, 'ROCHUS', 'Alain', '3 rue de la Prairie', '', '85430', 'Nieul le Dolent', '06 82 92 53 36', '', '', 'alain.rochus@gmail.com', '', '', ''),
(10, 1, 'RIVIERE', 'Hubert', '6 rue LÃ©on David', '', '85100', 'LES SABLES D OLONNE', '06 84 95 76 95', '', '', 'trebuh85@yahoo.fr', '', '', ''),
(12, 1, 'GUICHOUX', 'Dominique', '71 rueErmest Andrieux', '', '85340', 'OLONNE SUR MER', '06 83 25 58 67', '', '', ';;;;', '', '', ''),
(13, 1, 'JOUSSE', 'Ludovic', '29 rue des Burrons', '', '85100', 'LES SABLES D OLONNE', '02 44 41 62 86', '', '06 75 99 25 02', ';;;;;;', '', '', ''),
(14, 1, 'MARGAT', 'Jean', '4 AllÃ©e des Coulemelles', '', '85340', 'OLONNE SUR MER', '02 51 95 42 72', '', '', 'jean.margat@orange.fr', '', '', ''),
(15, 1, 'GUYOT', 'Carole', '17 rue des Burrons', '', '85100', 'LES SABLES D OLONNE', '06 83 20 07 90', '', '---', '---', '', '', ''),
(22, 2, 'DENIS', 'PAS PRENOM', '8 Impasse Nicolas Poussin', '', '85180', 'CHATEAU D OLONNE', '02 51 95 67 25', '', '', ';;;;;;;', '', '', ''),
(17, 3, 'PARENT', 'Youna', '88 Avenue Charles de Gaulle', '', '85340', 'Olonne Sur Mer', '06 30 42 47 62', '', '', 'youna.parent@orange.fr', '', '', ''),
(18, 2, 'LAUNAY', 'JENNY', '11 rue des Joncquilles', '', '85340', 'Olonne Sur Mer', '06 68 95 72 19', '', '', 'jenny.amouraben@orange.fr', '', '', ''),
(19, 2, 'SOURICE', 'Huguette', '3 rue des Merciers', '', '85100', 'LES SABLES D OLONNE', '06 11 48 99 25 ', '', '', 'huguette.sourice@orange.fr', '', '', ''),
(20, 1, 'HEINCZEL', 'Mathieu', '10 Avenue des Sables', '', '85150', 'ST MATHURIN', '06 46 23 52 25', '', '', 'mathieuheinc@gmail.com', '', '', ''),
(21, 1, 'CHAUVET', 'Stephane', '17 rue Joseph Pelletier', '', '85180', 'CHATEAU D OLONNE', '06 09 81 37 84', '', '', 'stephane.chauvet@orange.fr', '', '', ''),
(23, 1, 'RIVALIN', 'Phillipe', '16 rue des Taillis', '', '85340', 'OLONNE SUR MER', '06 71 91 55 73', '', '', 'rivalinphillipe@gmail.com', '', '', ''),
(24, 1, 'ANKILBEAU', 'NICOLAS', '4 Avenue Colbert', '', '85340', 'Olonne Sur Mer', '06 41 89 95 43', '', '', 'n.ankilbeau@gmail.com', '', '', ''),
(25, 2, 'HERITEAU', 'NP', '17 Boulevard Kennedy', '', '85100', 'LES SABLES D OLONNE', '06 81 66 75 38', '', '', ';;;;;;', '', '', ''),
(26, 1, 'WEISS', 'CHARLES', '5 AV CHARLES DE GAULLE', '', '85100', 'LES SABLES D OLONNE', '06 63 77 85 02', '', '', ';;;', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `idcnt` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `date_contrat` varchar(255) NOT NULL,
  `date_fin_contrat` varchar(255) NOT NULL,
  `mode_paiement` int(11) NOT NULL,
  `type_cnt` int(11) NOT NULL,
  `etat_cnt` int(11) NOT NULL,
  PRIMARY KEY (`idcnt`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contrat`
--

INSERT INTO `contrat` (`idcnt`, `idclient`, `prix`, `date_contrat`, `date_fin_contrat`, `mode_paiement`, `type_cnt`, `etat_cnt`) VALUES
(1, 3, '199', '21/03/2014', '20/03/2015', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `facture_intervention`
--

CREATE TABLE IF NOT EXISTS `facture_intervention` (
  `idfactureintervention` int(13) NOT NULL AUTO_INCREMENT,
  `idintervention` int(13) NOT NULL,
  `idclient` int(13) NOT NULL,
  `article1` varchar(255) NOT NULL,
  `article2` varchar(255) NOT NULL,
  `article3` varchar(255) NOT NULL,
  `article4` varchar(255) NOT NULL,
  `article5` varchar(255) NOT NULL,
  `qte1` varchar(255) NOT NULL,
  `qte2` varchar(255) NOT NULL,
  `qte3` varchar(255) NOT NULL,
  `qte4` varchar(255) NOT NULL,
  `qte5` varchar(255) NOT NULL,
  `pvht1` varchar(255) NOT NULL,
  `pvht2` varchar(255) NOT NULL,
  `pvht3` varchar(255) NOT NULL,
  `pvht4` varchar(255) NOT NULL,
  `pvht5` varchar(255) NOT NULL,
  `remise` varchar(255) NOT NULL,
  `mode_paiement` int(1) NOT NULL,
  PRIMARY KEY (`idfactureintervention`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `idintervention` int(13) NOT NULL AUTO_INCREMENT,
  `idclient` int(13) NOT NULL,
  `date_entre` varchar(255) NOT NULL,
  `heure_entre` varchar(255) NOT NULL,
  `provenance` int(2) NOT NULL,
  `employe` int(1) NOT NULL,
  `categorie_materiel` varchar(255) NOT NULL,
  `marque_materiel` varchar(255) NOT NULL,
  `modele_materiel` varchar(255) NOT NULL,
  `reference_materiel` varchar(255) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `garantie` int(1) NOT NULL,
  `date_achat` varchar(255) NOT NULL,
  `lieu_achat` varchar(255) NOT NULL,
  `num_fact_achat` varchar(255) NOT NULL,
  `type_garantie` int(2) NOT NULL,
  `retour` int(1) NOT NULL,
  `type_retour` int(1) NOT NULL,
  `symptome` longtext NOT NULL,
  `remarques` longtext NOT NULL,
  `info_complementaire` longtext NOT NULL,
  `etat_intervention` int(1) NOT NULL,
  `devis` int(1) NOT NULL,
  `montant_autorise_devis` varchar(255) NOT NULL,
  `acompte` int(1) NOT NULL,
  `montant_acompte` varchar(255) NOT NULL,
  `date_prevue` varchar(255) NOT NULL,
  `code_deverouillage` varchar(255) NOT NULL,
  `carte_sim` int(1) NOT NULL,
  `code_sim` varchar(255) NOT NULL,
  `sauvegarde` int(1) NOT NULL,
  `prevoir_sauvegarde` varchar(1) NOT NULL,
  PRIMARY KEY (`idintervention`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`idintervention`, `idclient`, `date_entre`, `heure_entre`, `provenance`, `employe`, `categorie_materiel`, `marque_materiel`, `modele_materiel`, `reference_materiel`, `num_serie`, `garantie`, `date_achat`, `lieu_achat`, `num_fact_achat`, `type_garantie`, `retour`, `type_retour`, `symptome`, `remarques`, `info_complementaire`, `etat_intervention`, `devis`, `montant_autorise_devis`, `acompte`, `montant_acompte`, `date_prevue`, `code_deverouillage`, `carte_sim`, `code_sim`, `sauvegarde`, `prevoir_sauvegarde`) VALUES
(34, 14, '06/08/2014', '18:26', 1, 1, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 0, '', '', '', 1, 0, 0, 'TEST', '', 'TEST', 1, 0, '', 0, '', '', '', 0, '', 0, ''),
(33, 11, '29/07/2014', '11:12', 1, 1, 'PC FIXE', 'ASSEMBLE', 'ASSEMBLE', 'ASSEMBLE', '----', 1, '25/04/2014', 'EASYTECH', 'FA000254121', 2, 0, 0, 'TEST DU SYMPTOME', '', '', 2, 0, '', 0, '', '', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `maj`
--

CREATE TABLE IF NOT EXISTS `maj` (
  `idmaj` int(13) NOT NULL AUTO_INCREMENT,
  `version_latest` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  PRIMARY KEY (`idmaj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `maj`
--

INSERT INTO `maj` (`idmaj`, `version_latest`, `Title`, `desc`) VALUES
(1, '1.0.3\r\n', 'Version 1.0.2 => Version 1.03', 'Autre\r\n'),
(2, '1.1.0', 'Version 1.0.3 => Version 1.1.0', '<pre>\r\n[Modification] Changement profond dans la gestion des interventions informatique\r\n\r\n[Modification] Remodelage des fiche d''''intervention informatique.\r\n\r\n\r\n\r\n[ajout] Fonction e-mail\r\n[ajout] Fonction courrier\r\n\r\n[Bug Fix] Avatar s''''affiche sur toutes les pages\r\n[bug fix] Le fichier de configuration est maintenant inclus dans toutes les pages\r\n</pre>'),
(3, '1.2.0', 'VERSION 1.1.0 => VERSION 1.2.0', '<h2>Note de Mise &agrave; jour 1.2.0</h2>\r\n<pre>\r\n[Ajout] Module support client\r\n</pre>');

-- --------------------------------------------------------

--
-- Structure de la table `mat_cnt`
--

CREATE TABLE IF NOT EXISTS `mat_cnt` (
  `idmatcnt` int(13) NOT NULL AUTO_INCREMENT,
  `idcnt` int(11) NOT NULL,
  `type_materiel` int(11) NOT NULL,
  `marque_materiel` varchar(255) NOT NULL,
  `serie_materiel` varchar(255) NOT NULL,
  `num_serie_materiel` varchar(255) NOT NULL,
  `os_materiel` varchar(255) NOT NULL,
  `hdd_materiel` varchar(255) NOT NULL,
  `ram_materiel` varchar(255) NOT NULL,
  `proc_materiel` varchar(255) NOT NULL,
  `date_achat` varchar(255) NOT NULL,
  `etat_materiel` int(11) NOT NULL,
  PRIMARY KEY (`idmatcnt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `pass_md5`, `email`, `images`, `nom`, `prenom`) VALUES
(1, 'mockelyn', '201c238c414b3f9d7bec9bb76567f65a', 'm.maxime@lsiinformatique.fr', 'minion', 'MOCKELYN', 'Maxime'),
(2, 'valentin', 'dee484ff7366319331b0d36e9d0958c1', '', '', '', ''),
(3, 'corentin', '16324c67e9c49ebbcaadb45c9db2fa22', '', '', '', ''),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gc2i.co', 'minion', 'ADMIN', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `idinterventionmobile` int(13) NOT NULL AUTO_INCREMENT,
  `idclient` int(13) NOT NULL,
  `date_entre` varchar(255) NOT NULL,
  `heure_entre` varchar(255) NOT NULL,
  `provenance` int(2) NOT NULL,
  `employe` int(1) NOT NULL,
  `categorie_telephone` varchar(255) NOT NULL,
  `marque_telephone` varchar(255) NOT NULL,
  `modele_telephone` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `garantie` int(1) NOT NULL,
  `date_achat` varchar(255) NOT NULL,
  `operateur` int(2) NOT NULL,
  `retour` int(1) NOT NULL,
  `type_retour` varchar(255) NOT NULL,
  `symptome` longtext NOT NULL,
  `remarques` longtext NOT NULL,
  `info_complementaire` longtext NOT NULL,
  `etat_intervention` int(1) NOT NULL,
  `devis` int(1) NOT NULL,
  `montant_autorise_devis` varchar(255) NOT NULL,
  `acompte` int(1) NOT NULL,
  `montant_acompte` varchar(255) NOT NULL,
  `date_prevue` varchar(255) NOT NULL,
  PRIMARY KEY (`idinterventionmobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `mobile`
--

INSERT INTO `mobile` (`idinterventionmobile`, `idclient`, `date_entre`, `heure_entre`, `provenance`, `employe`, `categorie_telephone`, `marque_telephone`, `modele_telephone`, `imei`, `garantie`, `date_achat`, `operateur`, `retour`, `type_retour`, `symptome`, `remarques`, `info_complementaire`, `etat_intervention`, `devis`, `montant_autorise_devis`, `acompte`, `montant_acompte`, `date_prevue`) VALUES
(2, 11, '11/08/2014', '15:34', 1, 0, 'SMARTPHONE', 'SAMSUNG', 'GALAXY S5', '353687065523323/01', 1, '01/06/2014', 4, 0, '0', '', '', 'Telephone en location', 2, 0, '', 0, '', '14/08/2014');

-- --------------------------------------------------------

--
-- Structure de la table `reponse_support_client`
--

CREATE TABLE IF NOT EXISTS `reponse_support_client` (
  `idreponse` int(11) NOT NULL AUTO_INCREMENT,
  `idsupport` int(11) NOT NULL,
  `reponse` longtext NOT NULL,
  `reponse_support` varchar(255) NOT NULL,
  `heure_support` varchar(255) NOT NULL,
  PRIMARY KEY (`idreponse`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `reponse_support_client`
--

INSERT INTO `reponse_support_client` (`idreponse`, `idsupport`, `reponse`, `reponse_support`, `heure_support`) VALUES
(5, 1, '<span class="wysiwyg-color-gray"><b>RÃ©ponse exact.</b></span><br>', '11/08/2014', '18:11'),
(6, 1, 'TEST', '11/08/2014', '18:25'),
(7, 1, 'TEST2', '11/08/2014', '18:28');

-- --------------------------------------------------------

--
-- Structure de la table `suivi_intervention`
--

CREATE TABLE IF NOT EXISTS `suivi_intervention` (
  `idsuivi` int(13) NOT NULL AUTO_INCREMENT,
  `idintervention` int(13) NOT NULL,
  `date_suivi` varchar(255) NOT NULL,
  `heure_suivi` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`idsuivi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `suivi_intervention`
--

INSERT INTO `suivi_intervention` (`idsuivi`, `idintervention`, `date_suivi`, `heure_suivi`, `libelle`) VALUES
(1, 31, '28/07/2014', '14:00', 'Cr&eacute;ation du dossier en SAV\r\n'),
(2, 31, '28/07/2014', '16:36', 'Ajout de la tache: Reinstallation de Windows'),
(3, 32, '28/07/2014', '17:28', 'Ajout de la tache: De nombreux virus dÃ©tecter'),
(4, 33, '29/07/2014', '11:16', 'Ajout de la tache: TEST');

-- --------------------------------------------------------

--
-- Structure de la table `suivi_intervention_mobile`
--

CREATE TABLE IF NOT EXISTS `suivi_intervention_mobile` (
  `idsuivi` int(13) NOT NULL AUTO_INCREMENT,
  `idinterventionmobile` int(13) NOT NULL,
  `date_suivi` varchar(255) NOT NULL,
  `heure_suivi` varchar(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`idsuivi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `suivi_intervention_mobile`
--

INSERT INTO `suivi_intervention_mobile` (`idsuivi`, `idinterventionmobile`, `date_suivi`, `heure_suivi`, `libelle`) VALUES
(1, 2, '13/08/2014', '16:26', 'Ajout de la tache: TEST de la tache mobile\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `support_client`
--

CREATE TABLE IF NOT EXISTS `support_client` (
  `idsupport` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(13) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type_bug` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `etat_support` int(1) NOT NULL,
  `date_support` varchar(255) NOT NULL,
  `heure_support` int(11) NOT NULL,
  PRIMARY KEY (`idsupport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `support_client`
--

INSERT INTO `support_client` (`idsupport`, `idclient`, `nom`, `email`, `type_bug`, `message`, `etat_support`, `date_support`, `heure_support`) VALUES
(1, 3, 'WEISS Celine', '', 'intervention informatique', 'Test du Message', 4, '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tache_intervention`
--

CREATE TABLE IF NOT EXISTS `tache_intervention` (
  `idtache` int(13) NOT NULL AUTO_INCREMENT,
  `idintervention` int(13) NOT NULL,
  `date_tache` varchar(255) NOT NULL,
  `heure_tache` varchar(255) NOT NULL,
  `description_tache` longtext NOT NULL,
  PRIMARY KEY (`idtache`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tache_intervention`
--

INSERT INTO `tache_intervention` (`idtache`, `idintervention`, `date_tache`, `heure_tache`, `description_tache`) VALUES
(1, 31, '28/07/2014', '15:12', 'V&eacute;rification de l''ordinateur'),
(2, 31, '28/07/2014', '16:36', 'Reinstallation de Windows'),
(3, 32, '28/07/2014', '17:28', 'De nombreux virus dÃ©tecter'),
(4, 33, '29/07/2014', '11:16', 'TEST');

-- --------------------------------------------------------

--
-- Structure de la table `tache_intervention_mobile`
--

CREATE TABLE IF NOT EXISTS `tache_intervention_mobile` (
  `idtache` int(13) NOT NULL AUTO_INCREMENT,
  `idinterventionmobile` int(13) NOT NULL,
  `date_tache` varchar(255) NOT NULL,
  `heure_tache` varchar(255) NOT NULL,
  `description_tache` longtext NOT NULL,
  PRIMARY KEY (`idtache`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tache_intervention_mobile`
--

INSERT INTO `tache_intervention_mobile` (`idtache`, `idinterventionmobile`, `date_tache`, `heure_tache`, `description_tache`) VALUES
(1, 2, '13/08/2014', '16:26', 'TEST de la tache mobile\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `idtechnicien` int(13) NOT NULL AUTO_INCREMENT,
  `nom_technicien` varchar(255) NOT NULL,
  `prenom_technicien` varchar(255) NOT NULL,
  PRIMARY KEY (`idtechnicien`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`idtechnicien`, `nom_technicien`, `prenom_technicien`) VALUES
(1, 'MOCKELYN', 'Maxime'),
(2, 'CARPENTIER', 'Alexis'),
(3, 'NEVEU', 'Valentin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
