-- Active: 1665387063405@@127.0.0.1@3306@Phase3_papyrus



-------------   EXERCICE  2  ----------------

--Réalisez les vues suivantes sur papyrus:

--v_GlobalCde correspondant à la requête : A partir de la table Ligcom, 
--afficher par code produit,la somme des quantités commandées et le prix total correspondant : 
--on nommera la colonne correspondant à la somme des quantités commandées, 
--QteTot et le prix total, PrixTot.


CREATE VIEW V_GlobalCde as
select codart,qtecde as qteTotal,(priuni*qtecde) as PrixTotal
from ligcom 
group by codart;

SELECT * from V_GlobalCde;

--2  --v_VentesI100 correspondant à la requête : Afficher les ventes dont le 
--code produit est le I100 (affichage de toutes les colonnes de la table Vente).

CREATE VIEW V_VentesI100 as 
SELECT * from vente where codart like 'I100';

SELECT * from V_VentesI100;

-- 3 --A partir de la vue précédente, créez v_VentesI100Grobrigan remontant toutes les
-- ventes concernant le produit I100 et le fournisseur 00120.

SELECT * from V_VentesI100 where numfou=00120;
