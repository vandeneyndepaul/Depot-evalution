-- Active: 1665387063405@@127.0.0.1@3306@northwind


---2) Procédures stockées Codez deux procédures stockées correspondant aux requêtes 9 et 10. 
--Les procédures stockées doivent prendre en compte les éventuels paramètres.


DELIMITER |
create PROCEDURE Requete_9()
begin
        SELECT OrderDate from orders o 
        join customers c on c.CustomerID=o.CustomerID
        where CompanyName like 'Du%';
END |
DELIMITER ;

CALL `Requete_9`();



DELIMITER |
create PROCEDURE Requete_10()
begin
        -- Mettre la requete de la question 10 
END |
DELIMITER ;

CALL `Requete_10`();




--3) Mise en place d'une règle de gestion
--L'entreprise souhaite mettre en place cette règle de gestion:

--Pour tenir compte des coûts liés au transport, on vérifiera que pour chaque produit d’une commande, 
--le client réside dans le même pays que le fournisseur du même produit

--Il s'agit d'interdire l'insertion de produits dans les commandes ne satisfaisants pas à ce critère.

--Décrivez par quel moyen et avec quels outils (procédures stockées, trigger...) 
--vous pourriez implémenter la règle de gestion suivante.

DROP TRIGGER RègleDegestion;

create Trigger RègleDegestion
after insert on `order details` 
for each row
BEGIN
    
    DECLARE NewProduit INT;
    DECLARE NewOrderId INT;
    DECLARE ProduitFournisPays VARCHAR(50);
    DECLARE ProduitCustomPays VARCHAR(50);

    set NewProduit=New.ProductID;
    set NewOrderId=New.OrderId;
        
    set ProduitCustomPays=(
        SELECT c.Country 
        from customers c 
        join orders o on o.CustomerID=c.CustomerID
        where o.OrderID=NewOrderId);
        
    set ProduitFournisPays=(
        SELECT s.Country 
        from suppliers s  
        join products p on p.SupplierID=s.SupplierID 
        where p.ProductID=NewProduit);
    
    IF(ProduitFournisPays!=ProduitCustomPays) THEN
    SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Le Pays du client n est pas le meme que celui du fournisseur, cout de transport trop élévé';
    END IF; 
end ;



SELECT o.OrderID, c.CompanyName as CliNom,c.Country as CliPays,s.CompanyName as FournisName,s.Country as FournisPays, ord.ProductID as ProduitDeCommande,o.OrderID as NumCommande
from customers c 
join orders o on o.CustomerID=c.CustomerID
join `order details` ord on o.OrderID=ord.OrderID
join products p on p.ProductID=ord.ProductID
join suppliers s on s.SupplierID=p.SupplierID
where s.Country=c.Country;




insert into `order details`
(OrderID, ProductID, UnitPrice, Quantity, Discount)
values
(10643,77,18.0000,4,0);


SELECT c.Country 
        from customers c 
        join orders o on o.CustomerID=c.CustomerID
        where o.OrderID=10643;

SELECT s.Country 
        from suppliers s  
        join products p on p.SupplierID=s.SupplierID 
        where p.ProductID=2;



