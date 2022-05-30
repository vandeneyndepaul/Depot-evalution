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

    <table class="table-striped">
 
        <thead>
        <tr></tr></thead>      
         <tbody>
        <tr> disque N°<?php echo $mydisc->artist_id ?>
        <td> Nom : <?= $mydisc->disc_title ?></td></tr>
        <tr>
        <td> Annee : <?= $mydisc->disc_year ?></td>
        <td> image : <?= $mydisc->disc_picture ?></td>
        <tr>
        <td> label : <?= $mydisc->disc_label?></td>
        <tr>
        <td> genre : <?= $mydisc->disc_genre ?></td>
        <tr>
        <td> prix : <?= $mydisc->disc_price ?></td>
        <tr>
        <td> ID de l'artiste : <?= $mydisc->artist_id ?></td></tr>
    
    </tbody>
    </table>
        <br><br>

        <a href="disc_form.php?id=<?= $mydisc->disc_id ?>">Modifier</a><br><br>
        <a href="script_disc_delete.php?id=<?= $mydisc->disc_id ?>">Supprimer (*ajouter une demande de confirmation en JS</a><br><br>
        <a href="discs.php"><button class="btn-primary btn-lg">Retour à la liste des Disque</button></a>
   
    
    </body>
</html>