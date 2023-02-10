-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           10.6.7-MariaDB-2ubuntu1.1 - Ubuntu 22.04
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour FilRouge
DROP DATABASE IF EXISTS `FilRouge`;
CREATE DATABASE IF NOT EXISTS `FilRouge` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `FilRouge`;

-- Listage de la structure de la table FilRouge. Catégories
DROP TABLE IF EXISTS `Catégories`;
CREATE TABLE IF NOT EXISTS `Catégories` (
  `Id_Catégories` int(11) NOT NULL AUTO_INCREMENT,
  `TypeJeux` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Catégories`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Catégories : ~8 rows (environ)
/*!40000 ALTER TABLE `Catégories` DISABLE KEYS */;
INSERT INTO `Catégories` (`Id_Catégories`, `TypeJeux`) VALUES
	(1, 'RPG'),
	(2, 'Sport'),
	(3, 'Stratégie'),
	(4, 'MMO/MOBA'),
	(5, 'Plateforme'),
	(6, 'Aventure'),
	(7, 'Action'),
	(8, ' Combat');
/*!40000 ALTER TABLE `Catégories` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. commande
DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `Id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `com_reduc` int(11) DEFAULT NULL,
  `date_commande` datetime DEFAULT NULL,
  `date_facture` datetime DEFAULT NULL,
  `Id_Livraison` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  PRIMARY KEY (`Id_commande`),
  KEY `Id_Livraison` (`Id_Livraison`),
  KEY `Id_Client` (`Id_Client`),
  CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`Id_Livraison`) REFERENCES `Livraison` (`Id_Livraison`),
  CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`Id_Client`) REFERENCES `Utilisateur` (`Id_Client`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.commande : ~2 rows (environ)
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` (`Id_commande`, `com_reduc`, `date_commande`, `date_facture`, `Id_Livraison`, `Id_Client`) VALUES
	(1, 0, '2022-09-20 16:14:21', '2022-09-20 16:24:27', 1, 1),
	(2, 0, '2022-09-22 09:29:40', '2022-09-22 09:39:58', 2, 2);
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Commercial
DROP TABLE IF EXISTS `Commercial`;
CREATE TABLE IF NOT EXISTS `Commercial` (
  `Id_Commercial` int(11) NOT NULL AUTO_INCREMENT,
  `commercial_fonction` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Commercial`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Commercial : ~2 rows (environ)
/*!40000 ALTER TABLE `Commercial` DISABLE KEYS */;
INSERT INTO `Commercial` (`Id_Commercial`, `commercial_fonction`) VALUES
	(1, 'Classique'),
	(2, 'Spécial');
/*!40000 ALTER TABLE `Commercial` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Contient
DROP TABLE IF EXISTS `Contient`;
CREATE TABLE IF NOT EXISTS `Contient` (
  `Id_Produit` int(11) NOT NULL,
  `Id_commande` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `prix_vente` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Produit`,`Id_commande`),
  KEY `Id_commande` (`Id_commande`),
  CONSTRAINT `Contient_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `Produit` (`Id_Produit`),
  CONSTRAINT `Contient_ibfk_2` FOREIGN KEY (`Id_commande`) REFERENCES `commande` (`Id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Contient : ~1 rows (environ)
/*!40000 ALTER TABLE `Contient` DISABLE KEYS */;
INSERT INTO `Contient` (`Id_Produit`, `Id_commande`, `quantite`, `prix_vente`) VALUES
	(1, 1, 4, 50);
/*!40000 ALTER TABLE `Contient` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. est_livré
DROP TABLE IF EXISTS `est_livré`;
CREATE TABLE IF NOT EXISTS `est_livré` (
  `Id_Produit` int(11) NOT NULL,
  `Id_Livraison` int(11) NOT NULL,
  `quantite_livre` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Produit`,`Id_Livraison`),
  KEY `Id_Livraison` (`Id_Livraison`),
  CONSTRAINT `est_livré_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `Produit` (`Id_Produit`),
  CONSTRAINT `est_livré_ibfk_2` FOREIGN KEY (`Id_Livraison`) REFERENCES `Livraison` (`Id_Livraison`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.est_livré : ~1 rows (environ)
/*!40000 ALTER TABLE `est_livré` DISABLE KEYS */;
INSERT INTO `est_livré` (`Id_Produit`, `Id_Livraison`, `quantite_livre`) VALUES
	(1, 1, 4);
/*!40000 ALTER TABLE `est_livré` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Fournis
DROP TABLE IF EXISTS `Fournis`;
CREATE TABLE IF NOT EXISTS `Fournis` (
  `Id_Produit` int(11) NOT NULL,
  `Id_Fournisseur` int(11) NOT NULL,
  PRIMARY KEY (`Id_Produit`,`Id_Fournisseur`),
  KEY `Id_Fournisseur` (`Id_Fournisseur`),
  CONSTRAINT `Fournis_ibfk_1` FOREIGN KEY (`Id_Produit`) REFERENCES `Produit` (`Id_Produit`),
  CONSTRAINT `Fournis_ibfk_2` FOREIGN KEY (`Id_Fournisseur`) REFERENCES `Fournisseur` (`Id_Fournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Fournis : ~3 rows (environ)
/*!40000 ALTER TABLE `Fournis` DISABLE KEYS */;
INSERT INTO `Fournis` (`Id_Produit`, `Id_Fournisseur`) VALUES
	(1, 1),
	(1, 2),
	(1, 3);
/*!40000 ALTER TABLE `Fournis` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Fournisseur
DROP TABLE IF EXISTS `Fournisseur`;
CREATE TABLE IF NOT EXISTS `Fournisseur` (
  `Id_Fournisseur` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_Fournisseur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Fournisseur : ~3 rows (environ)
/*!40000 ALTER TABLE `Fournisseur` DISABLE KEYS */;
INSERT INTO `Fournisseur` (`Id_Fournisseur`) VALUES
	(1),
	(2),
	(3);
/*!40000 ALTER TABLE `Fournisseur` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Livraison
DROP TABLE IF EXISTS `Livraison`;
CREATE TABLE IF NOT EXISTS `Livraison` (
  `Id_Livraison` int(11) NOT NULL AUTO_INCREMENT,
  `date_livraison` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_Livraison`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Livraison : ~2 rows (environ)
/*!40000 ALTER TABLE `Livraison` DISABLE KEYS */;
INSERT INTO `Livraison` (`Id_Livraison`, `date_livraison`) VALUES
	(1, '2022-09-27 00:00:31'),
	(2, '2022-09-29 10:00:04');
/*!40000 ALTER TABLE `Livraison` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Produit
DROP TABLE IF EXISTS `Produit`;
CREATE TABLE IF NOT EXISTS `Produit` (
  `Id_Produit` int(11) NOT NULL AUTO_INCREMENT,
  `Prix` decimal(20,2) NOT NULL DEFAULT 0.00,
  `Photo` varchar(50) DEFAULT NULL,
  `Libelle_court` varchar(50) DEFAULT NULL,
  `Libelle_long` varchar(1000) DEFAULT NULL,
  `Id_Catégories` int(11) NOT NULL,
  PRIMARY KEY (`Id_Produit`),
  KEY `Id_Catégories` (`Id_Catégories`),
  CONSTRAINT `Produit_ibfk_1` FOREIGN KEY (`Id_Catégories`) REFERENCES `Catégories` (`Id_Catégories`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Produit : ~1 rows (environ)
/*!40000 ALTER TABLE `Produit` DISABLE KEYS */;
INSERT INTO `Produit` (`Id_Produit`, `Prix`, `Photo`, `Libelle_court`, `Libelle_long`, `Id_Catégories`) VALUES
	(1, 34.00, 'Lien', 'World of Warcraft', 'World of Warcraft est un jeu vidéo de type MMORPG (jeu de rôle en ligne massivement multijoueur) développé par la société Blizzard Entertainment. C\'est le 4e jeu de l\'univers médiéval-fantastique Warcraft, introduit par Warcraft: Orcs and Humans en 1994. World of Warcraft prend place en Azeroth, près de quatre ans après les événements de la fin du jeu précédent, Warcraft III: The Frozen Throne (2003)1. Blizzard Entertainment annonce World of Warcraft le 2 septembre 20012. Le jeu est sorti en Amérique du Nord le 23 novembre 2004, pour les 10 ans de la franchise Warcraft.', 4);
/*!40000 ALTER TABLE `Produit` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Support
DROP TABLE IF EXISTS `Support`;
CREATE TABLE IF NOT EXISTS `Support` (
  `Id_Support` int(11) NOT NULL AUTO_INCREMENT,
  `Type_de_Support` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Support`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Support : ~4 rows (environ)
/*!40000 ALTER TABLE `Support` DISABLE KEYS */;
INSERT INTO `Support` (`Id_Support`, `Type_de_Support`) VALUES
	(1, 'PC'),
	(2, 'Xbox'),
	(3, 'Playstation'),
	(4, 'Xbox');
/*!40000 ALTER TABLE `Support` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Supporte
DROP TABLE IF EXISTS `Supporte`;
CREATE TABLE IF NOT EXISTS `Supporte` (
  `Id_Support` int(11) NOT NULL,
  `Id_Catégories` int(11) NOT NULL,
  PRIMARY KEY (`Id_Support`,`Id_Catégories`),
  KEY `Id_Catégories` (`Id_Catégories`),
  CONSTRAINT `Supporte_ibfk_1` FOREIGN KEY (`Id_Support`) REFERENCES `Support` (`Id_Support`),
  CONSTRAINT `Supporte_ibfk_2` FOREIGN KEY (`Id_Catégories`) REFERENCES `Catégories` (`Id_Catégories`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Supporte : ~1 rows (environ)
/*!40000 ALTER TABLE `Supporte` DISABLE KEYS */;
INSERT INTO `Supporte` (`Id_Support`, `Id_Catégories`) VALUES
	(1, 4);
/*!40000 ALTER TABLE `Supporte` ENABLE KEYS */;

-- Listage de la structure de la table FilRouge. Utilisateur
DROP TABLE IF EXISTS `Utilisateur`;
CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `Id_Client` int(11) NOT NULL AUTO_INCREMENT,
  `cli_role_particulier_entreprise_` varchar(50) NOT NULL,
  `Coeficient` decimal(3,1) DEFAULT NULL,
  `Id_Commercial` int(11) NOT NULL,
  PRIMARY KEY (`Id_Client`),
  KEY `Id_Commercial` (`Id_Commercial`),
  CONSTRAINT `Utilisateur_ibfk_1` FOREIGN KEY (`Id_Commercial`) REFERENCES `Commercial` (`Id_Commercial`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Listage des données de la table FilRouge.Utilisateur : ~2 rows (environ)
/*!40000 ALTER TABLE `Utilisateur` DISABLE KEYS */;
INSERT INTO `Utilisateur` (`Id_Client`, `cli_role_particulier_entreprise_`, `Coeficient`, `Id_Commercial`) VALUES
	(1, 'Particulier', 0.0, 1),
	(2, 'Proffesionnel', 0.0, 2);
/*!40000 ALTER TABLE `Utilisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
