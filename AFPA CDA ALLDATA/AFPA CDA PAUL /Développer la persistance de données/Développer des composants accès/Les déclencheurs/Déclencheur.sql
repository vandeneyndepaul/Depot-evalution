
--------------Exercices 1 ---------
---=======================================================================================--
---A partir de l'exemple suivant, créez les déclencheurs suivants :
---modif_reservation : interdire la modification des réservations (on autorise l'ajout et la ---suppression).
---=======================================================================================--

ALTER TABLE reservation ENGINE=InnoDB;

  CREATE TRIGGER modif_reservation 
    AFTER UPDATE  
    ON reservation  
    FOR EACH ROW
    BEGIN
        SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Un problème est survenu. Règle de gestion altitude !';
    END;
    
    
--- Essaie du TRIGGER------------


UPDATE reservation
set res_cli_id = 5 
where res_id=1;



---======================================================================================--
---insert_reservation : interdire l'ajout de réservation pour les hôtels possédant déjà 10 --réservations.
---=======================================================================================--


DELIMITER $
DROP TRIGGER insert_reservation$

DELIMITER $
create Trigger insert_reservation 
after insert
on reservation
FOR EACH ROW
BEGIN
    DECLARE var_cha_id INT;
    DECLARE var_hot_id int;
    DECLARE var_nb_res int;
    
	 set var_cha_id=NEW.res_cha_id;
	 
	 set var_hot_id = (SELECT cha_hot_id from chambre where cha_id=var_cha_id);
    
    set var_nb_res = (
         select count(*) 
         from reservation r
         join chambre c on c.cha_id=r.res_cha_id
         where cha_hot_id=var_hot_id
     );
     
    IF (var_nb_res>10) THEN
         SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Il y a trop de réservations pour cet hotel !';
    END IF;
    
END$

DELIMITER ;
insert into reservation 
(res_cha_id, res_cli_id, res_date, res_date_debut, res_date_fin, res_prix)
values
(4, 1, '2022-10-12', '2023-01-05', '2023-01-10', 100.00);





---=======================================================================================--
---insert_reservation2 : interdire les réservations si le client possède déjà 3 réservations.
---=======================================================================================--

DELIMITER $
--DROP TRIGGER insert_reservation2;
create Trigger insert_reservation2 
after insert 
on reservation
for each row 
begin 

    DECLARE var_cha_id int; 
    DECLARE var_cli_id int;
    DECLARE var_nb_res_client int;

    set var_cha_id=New.res_cha_id;
    set var_cli_id=New.res_cli_id;
    set var_nb_res_client=(SELECT count(*) from reservation r join client c on r.res_cli_id=c.cli_id where res_cli_id=var_cli_id);

    if (var_nb_res_client>=3)then 
           SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Il y a trop de réservations pour ce client !';
    END IF;
end $

DELIMITER ;



insert into reservation 
(res_cha_id, res_cli_id, res_date, res_date_debut, res_date_fin, res_prix)
values
(8, 1, '2022-06-12', '2023-01-05', '2023-01-10', 600.00);


---=======================================================================================--
---insert_chambre : lors d'une insertion, on calcule le total des capacités des chambres pour ---l'hôtel, si ce total est supérieur à 50, on interdit l'insertion de la chambre.
---=======================================================================================--













