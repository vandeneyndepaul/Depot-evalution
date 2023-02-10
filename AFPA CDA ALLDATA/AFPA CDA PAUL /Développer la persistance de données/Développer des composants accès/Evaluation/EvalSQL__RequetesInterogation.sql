-- Active: 1665387063405@@127.0.0.1@3306@northwind

-----------    2 - Produits vendus par le fournisseur « Exotic Liquids » :  ----------------
SELECT ProductName, UnitPrice from suppliers s
join products p on p.SupplierID=s.SupplierID
WHERE p.SupplierID='1';


----   3 - Nombre de produits vendus par les fournisseurs Français dans l’ordre décroissant :  ----


SELECT  s.CompanyName,count(ProductName) from products p
join suppliers s on p.SupplierID=s.SupplierID
where s.Country='france'
group by s.CompanyName;




--- 4 - Liste des clients Français ayant plus de 10 commandes : ---
SELECT CompanyName, COUNT(o.OrderID) as 'Nbr commande'
from customers c
join orders o on c.CustomerID=o.CustomerID
where c.Country='france' 
group by CompanyName HAVING COUNT(o.OrderID) >10 ;


---5 - Liste des clients ayant un chiffre d’affaires > 30.000 :----



SELECT SUM(UnitPrice*Quantity) as ChiffreAffaire, `order details`.OrderID ,CompanyName,Country,c.CustomerID
from `order details`
JOIN orders o on `order details`.OrderID=o.OrderID
join customers c on o.CustomerID=c.CustomerID
group by CustomerID 
HAVING ChiffreAffaire>30.000
ORDER BY ChiffreAffaire DESC;



--6 Liste des pays dont les clients ont passé commande de produits fournis par « Exotic Liquids » :


SELECT distinct c.Country from customers c
join orders o on c.CustomerID=o.CustomerID
join `order details` ord on o.OrderID=ord.OrderID
join products p on p.ProductID=ord.ProductID
join suppliers s on s.SupplierID=p.SupplierID
where s.CompanyName like 'E%'
ORDER BY c.Country ASC;

--7 – Montant des ventes de 1997 :
SELECT SUM(ord.UnitPrice * ord.Quantity) as 'Montant des Ventes 97'
from orders o 
join `order details` ord on ord.OrderID=o.OrderID
where YEAR(OrderDate)=1997;


--8 – Montant des ventes de 1997 mois par mois :

SELECT SUM(ord.UnitPrice * ord.Quantity) as 'Montant des Ventes 97'
from orders o 
join `order details` ord on ord.OrderID=o.OrderID
where YEAR(OrderDate)=1997
GROUP BY MONTH(OrderDate);


--9 – Depuis quelle date le client « Du monde entier » n’a plus commandé ?

SELECT OrderDate 
from orders o 
join customers c on c.CustomerID=o.CustomerID
where CompanyName like 'Du%';

--10 – Quel est le délai moyen de livraison en jours ?



