
======================================
==========  A FAIRE =================
===================================
MCD

manque


Rubrique SousRubrique 
ajouter nom

Utilisateur
email
password
role
statut


livraison
numero bon de livraison
lien de suivi



======================================================
======================================================





World of Warcraft est un jeu vidéo de type MMORPG (jeu de rôle en ligne massivement multijoueur) développé par la société Blizzard Entertainment. C'est le 4e jeu de l'univers médiéval-fantastique Warcraft, introduit par Warcraft: Orcs and Humans en 1994. World of Warcraft prend place en Azeroth, près de quatre ans après les événements de la fin du jeu précédent, Warcraft III: The Frozen Throne (2003)1. Blizzard Entertainment annonce World of Warcraft le 2 septembre 20012. Le jeu est sorti en Amérique du Nord le 23 novembre 2004, pour les 10 ans de la franchise Warcraft.



CREATE TABLE Fournisseur(
   Id_Fournisseur COUNTER,
   PRIMARY KEY(Id_Fournisseur)
);

CREATE TABLE Support(
   Id_Support COUNTER,
   PC VARCHAR(50),
   Playstation VARCHAR(50),
   XBOX VARCHAR(50),
   WII VARCHAR(50),
   PRIMARY KEY(Id_Support)
);

CREATE TABLE Catégories(
   Id_Catégories COUNTER,
   RPG VARCHAR(50),
   Sport VARCHAR(50),
   Stratégie VARCHAR(50),
   MOBA VARCHAR(50),
   Plateforme VARCHAR(50),
   Aventure VARCHAR(50),
   Action VARCHAR(50),
   Combat VARCHAR(50),
   PRIMARY KEY(Id_Catégories)
);

CREATE TABLE Livraison(
   Id_Livraison COUNTER,
   date_livraison DATETIME,
   PRIMARY KEY(Id_Livraison)
);

CREATE TABLE Commercial(
   Id_Commercial COUNTER,
   commercial_fonction VARCHAR(50),
   PRIMARY KEY(Id_Commercial)
);

CREATE TABLE Produit(
   Id_Produit COUNTER,
   Prix INT NOT NULL,
   Photo VARCHAR(50),
   Libelle_court VARCHAR(50),
   Libelle_long VARCHAR(100),
   Id_Catégories INT NOT NULL,
   PRIMARY KEY(Id_Produit),
   FOREIGN KEY(Id_Catégories) REFERENCES Catégories(Id_Catégories)
);

CREATE TABLE Utilisateur(
   Id_Client COUNTER,
   cli_role_particulier_entreprise_ VARCHAR(50) NOT NULL,
   Coeficient DECIMAL(3,1),
   Id_Commercial INT NOT NULL,
   PRIMARY KEY(Id_Client),
   FOREIGN KEY(Id_Commercial) REFERENCES Commercial(Id_Commercial)
);

CREATE TABLE commande(
   Id_commande COUNTER,
   com_reduc INT,
   date_commande DATETIME,
   date_facture DATETIME,
   Id_Livraison INT NOT NULL,
   Id_Client INT NOT NULL,
   PRIMARY KEY(Id_commande),
   FOREIGN KEY(Id_Livraison) REFERENCES Livraison(Id_Livraison),
   FOREIGN KEY(Id_Client) REFERENCES Utilisateur(Id_Client)
);

CREATE TABLE Fournis(
   Id_Produit INT,
   Id_Fournisseur INT,
   PRIMARY KEY(Id_Produit, Id_Fournisseur),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Fournisseur) REFERENCES Fournisseur(Id_Fournisseur)
);

CREATE TABLE Contient(
   Id_Produit INT,
   Id_commande INT,
   quantite INT,
   prix_vente CURRENCY,
   PRIMARY KEY(Id_Produit, Id_commande),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_commande) REFERENCES commande(Id_commande)
);

CREATE TABLE est_livré(
   Id_Produit INT,
   Id_Livraison INT,
   quantite_livre INT,
   PRIMARY KEY(Id_Produit, Id_Livraison),
   FOREIGN KEY(Id_Produit) REFERENCES Produit(Id_Produit),
   FOREIGN KEY(Id_Livraison) REFERENCES Livraison(Id_Livraison)
);

CREATE TABLE Supporte(
   Id_Support INT,
   Id_Catégories INT,
   PRIMARY KEY(Id_Support, Id_Catégories),
   FOREIGN KEY(Id_Support) REFERENCES Support(Id_Support),
   FOREIGN KEY(Id_Catégories) REFERENCES Catégories(Id_Catégories)
);

