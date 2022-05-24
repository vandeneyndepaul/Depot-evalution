<?php include "header.php";?>



<?php 

    
    require "connexion-db.php";
    $db=ConnexionBase();
    $id= $_GET["id"];
    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id=?");
    $requete->execute(array($id));
    $mydisc = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    

  
 
?>


<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Disc- Détail</title>
    </head>


    <body>

        
        disque N°<?php echo $mydisc->artist_id ?><br><br>
        Nom : <?= $mydisc->disc_title ?><br>
        Annee : <?= $mydisc->disc_year ?><br>
        image : <?= $mydisc->disc_picture ?><br>
        label : <?= $mydisc->disc_label?><br>
        genre : <?= $mydisc->disc_genre ?><br>
        prix : <?= $mydisc->disc_price ?><br>
        ID de l'artiste : <?= $mydisc->artist_id ?><br>

        <br><br>

        <a href="disc_form.php?id=<?= $mydisc->disc_id ?>">Modifier</a><br><br>
        <a href="script_disc_delete.php?id=<?= $mydisc->disc_id ?>">Supprimer (*ajouter une demande de confirmation en JS</a><br><br>
        <a href="discs.php"><button class="btn-primary btn-lg">Retour à la liste des Disque</button></a>
    
    
    </body>
</html>