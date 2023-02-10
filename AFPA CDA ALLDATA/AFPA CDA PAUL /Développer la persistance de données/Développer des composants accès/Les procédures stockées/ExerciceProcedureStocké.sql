--Exercice 1 ------------------------------------------------------                                      
--: 	création d'une procédure stockée sans paramètre
--	Créez la procédure stockée Lst_fournis correspondant à la requête n°2 afficher le code des -				 	fournisseurs pour lesquels une commande a été passée.
--Exécutez la pour vérifier qu’elle fonctionne conformément à votre attente.
--Exécutez la commande SQL suivante pour obtenir des informations sur cette procédure stockée :

DELIMITER |
create Procedure Lst_fournis()
begin 
    SELECT DISTINCT numfou from entcom;
END |
DELIMITER; 

CALL Lst_fournis();

SHOW CREATE PROCEDURE Lst_fournis;

-----------Exercice 2 -----------------------

--Exercice 2 : création d'une procédure stockée avec un paramètre en entrée
--Créer la procédure stockée Lst_Commandes, qui liste les commandes ayant un libellé particulier --dans le champ obscom (cette requête sera construite à partir de la requête n°11).

DELIMITER |
CREATE Procedure Lst_Commandes()
BEGIN
SELECT * from entcom where obscom like 'c%';
END |
DELIMITER;

CALL Lst_Commandes();


-----------Exercice 3 -----------------------

--Exercice 3 : création d'une procédure stockée avec plusieurs paramètres
--Créer la procédure stockée CA_ Fournisseur, qui pour un code fournisseur et une année entrée en ---paramètre, calcule et restitue le CA potentiel de ce fournisseur pour l'année souhaitée (cette --requête sera construite à partir de la requête n°19).

--On exécutera la requête que si le code fournisseur est valide, c'est-à-dire dans la table FOURNIS.

--Testez cette procédure avec différentes valeurs des paramètres.--



DELIMITER |
CREATE Procedure CA_Fournisseur(
    in CodeFournis int(4) )
BEGIN

SELECT e.numfou, (SUM(qtecde * prix1) * 1.2) as 'Prix TTC'
FROM fournis f
JOIN vente v ON f.numfou = v.numfou
JOIN produit p ON v.codart = p.codart
JOIN ligcom l ON p.codart = l.codart
JOIN entcom e ON l.numcom = e.numcom
WHERE e.numfou=CodeFournis;
END |
DELIMITER;

CALL CA_Fournisseur(8700);


