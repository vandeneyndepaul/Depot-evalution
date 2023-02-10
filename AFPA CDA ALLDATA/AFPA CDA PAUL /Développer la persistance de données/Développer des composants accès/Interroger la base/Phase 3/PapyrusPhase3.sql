-- Active: 1665387063405@@127.0.0.1@3306@Phase3_papyrus

select numcom 
from entcom e 
join fournis f on e.numfou=f.numfou 
where e.numfou=09120;

select DISTINCT numfou from entcom;

SELECT (COUNT(numcom))as nbCommande,(COUNT(distinct numfou)) as nbFournis from entcom;

select codart, libart, stkphy, stkale, qteann from produit where (stkphy<=stkale and qteann<1000);

select * from fournis WHERE SUBSTRING (posfou,1,2) in ('75','77','78','92') ORDER BY posfou DESC;

SELECT * from entcom where month(datcom)between 3 and  4;


select MAX(datcom) 
from entcom;

select numcom,(priuni*qteliv)as TotalCommande from ligcom group by numcom order by TotalCommande DESC;

select numcom,(priuni*qtecde)as TotalCommande from ligcom where qtecde<1000 group by numcom HAVING TotalCommande>10000;

select f.nomfou, e.numcom, e.datcom
from entcom e
join fournis f on e.numfou=f.numfou
order by f.nomfou;

select e.numcom, f.nomfou, p.libart, l.qtecde*l.priuni
from ligcom l
join produit p on p.codart=l.codart
join entcom e on e.numcom=l.numcom
join fournis f on f.numfou=e.numfou
where e.obscom like '%urgent%'; 


select distinct f.nomfou
from fournis f 
join entcom e on f.numfou=e.numfou
join ligcom l on e.numcom=l.numcom
where l.qteliv>0;


select nomfou from fournis where numfou in (
    select numfou from entcom where numcom in (
        select numcom from ligcom where qteliv>0
    )
)
;

SELECT numcom,datcom from entcom where numfou in(
SELECT numfou from entcom where numcom=70210);


--4. Dans les articles susceptibles d’être vendus, lister les articles moins
--chers (basés sur Prix1) que le moins cher des rubans (article dont le
--premier caractère commence par R). On affichera le libellé de l’article
--et prix1

select libart,prix1 from vente v
join produit p on p.codart=v.codart
in(SELECT min (p.libart like 'r%'));



SELECT nomfou,l.numcom,qtecde,qteliv,(qtecde-qteliv)as ResteALivrer,l.codart,p.stkale,p.stkphy,(p.stkphy*1.5)as '150%duStockAlt'
from ligcom l 
join entcom e on e.numcom=l.numcom
join fournis f on f.numfou=e.numfou
join produit p on p.codart=l.codart
where (qtecde-qteliv)>0 and (p.stkale<=(p.stkphy*1.5));


SELECT nomfou,l.numcom,qtecde,qteliv,(qtecde-qteliv)as ResteALivrer,l.codart,p.stkale,p.stkphy,(p.stkphy*1.5)as '150%duStockAlt'
from ligcom l 
join entcom e on e.numcom=l.numcom
join fournis f on f.numfou=e.numfou
join produit p on p.codart=l.codart
where (qtecde-qteliv)>0 and (p.stkale<=(p.stkphy*1.5));

--16. Éditer la liste des fournisseurs susceptibles de livrer les produit dont
--le stock est inférieur ou égal à 150 % du stock d'alerte et un délai de
--livraison d'au plus 30 jours. La liste est triée par fournisseur puis
--produit

--17. Avec le même type de sélection que ci-dessus, sortir un total des
--stocks par fournisseur trié par total décroissant

--18. En fin d'année, sortir la liste des produits dont la quantité réellement
--commandée dépasse 90% de la quantité annuelle prévue.

--19. Calculer le chiffre d'affaire par fournisseur pour l'année 93 sachant
--que les prix indiqués sont hors taxes et que le taux de TVA est 20%.
/*

20. Existe-t-il des lignes de commande non cohérentes avec les produits
vendus par les fournisseurs. ?

1. Application d'une augmentation de tarif de 4% pour le prix 1 et de 2%
pour le prix2 pour le fournisseur 9180
2. Dans la table vente, mettre à jour le prix2 des articles dont le prix2 est
null, en affectant a prix2 la valeur de prix1.
3. Mettre à jour le champ obscom en positionnant '*****' pour toutes les
commandes dont le fournisseur a un indice de satisfaction <5
4. Suppression du produit I110
5. Suppression des entête de commande qui n'ont aucune ligne
