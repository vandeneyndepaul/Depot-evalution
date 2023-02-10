-- Active: 1665387063405@@127.0.0.1@3306@FilRouge


drop VIEW `PrixProduit`;
create VIEW PrixProduit
as 
SELECT * from `Produit` where Prix>20;
SELECT * from `PrixProduit`;


drop VIEW `Vue_Jointure_ProduitFournisseur`;
create View Vue_Jointure_ProduitFournisseur
as 
SELECT * from `Produit` 
join `Fournisseur`;
SELECT * from `Vue_Jointure_ProduitFournisseur`;


drop VIEW `Vue_Jointure_ProduitCatégorieSouscatégorie`;
create View Vue_Jointure_ProduitCatégorieSouscatégorie
as 
SELECT * from `Produit` p 
join `Catégories` c on p.Id_Catégories=c.Id_Catégories
join `Support` s on c.Id_Support=s.Id_Support;


SELECT * from `Vue_Jointure_ProduitFournisseur`;