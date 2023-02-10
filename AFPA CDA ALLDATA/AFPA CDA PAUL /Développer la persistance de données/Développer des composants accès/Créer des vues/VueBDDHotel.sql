-- Active: 1665387063405@@127.0.0.1@3306@hotel

-------------   EXERCICE  1  ----------------

--1 Afficher la liste des hôtels avec leur station
CREATE VIEW v_HotelStation
AS
select hot_nom, sta_nom from hotel h
join station s on s.sta_id=h.hot_sta_id;

--2 Afficher la liste des chambres et leur hôtel
SELECT * from v_HotelStation;



CREATE VIEW V_ChambreHotel as
select cha_id,hot_nom from chambre c
join hotel h on h.hot_id=c.cha_hot_id;


SELECT * from V_ChambreHotel;


-- 3 Afficher la liste des réservations avec le nom des clients
CREATE VIEW V_ReservationClient as
select res_id,cli_nom from reservation r
join client c on c.cli_id=r.res_id;


SELECT * from V_ReservationClient ;


--4 Afficher la liste des chambres avec le nom de l’hôtel et le nom de la station


CREATE VIEW V_ChaHotSta as 
SELECT cha_numero,hot_nom,sta_nom from chambre c
join hotel h on h.hot_id=c.cha_hot_id
join station s on s.sta_id=h.hot_sta_id;

SELECT * FROM V_ChaHotSta;


--5 Afficher les réservations avec le nom du client et le nom de l’hôtel

CREATE VIEW V_ResCliHot as 
SELECT r.res_id,c.cli_nom,h.hot_nom from reservation r
join client c on c.cli_id=r.res_cli_id
join chambre ch on ch.cha_id=r.res_cha_id
join hotel h on h.hot_id=ch.cha_hot_id;

SELECT * FROM V_ResCliHot;
