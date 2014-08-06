-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 06 Août 2014 à 16:01
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
  PRIMARY KEY (`idintervention`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;


--
-- Structure de la table `maj`
--

CREATE TABLE IF NOT EXISTS `maj` (
  `idmaj` int(13) NOT NULL AUTO_INCREMENT,
  `version_latest` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  PRIMARY KEY (`idmaj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `pass_md5`, `email`, `images`, `nom`, `prenom`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gc2i.co', 'minion', 'ADMIN', 'Admin'),

-- --------------------------------------------------------

--
-- Structure de la table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `idinterventionmobile` int(13) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `date_maintenance_prevue` varchar(255) NOT NULL,
  `idtechnicien` int(1) NOT NULL,
  `materiel` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `num_serie` varchar(255) NOT NULL,
  `num_imei` varchar(255) NOT NULL,
  `accessoire` varchar(255) NOT NULL,
  `garantie` int(1) NOT NULL,
  `date_achat` varchar(255) NOT NULL,
  `desc_probleme` longtext NOT NULL,
  `desc_soluce` longtext NOT NULL,
  `tel_demarre` int(1) NOT NULL,
  `code_util` varchar(255) NOT NULL,
  `operateur` varchar(255) NOT NULL,
  `sauvegarde` int(11) NOT NULL,
  `restauration` int(11) NOT NULL,
  `etat_intervention` int(11) NOT NULL,
  PRIMARY KEY (`idinterventionmobile`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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
(1, 'ADMIN', 'Admin'),

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
