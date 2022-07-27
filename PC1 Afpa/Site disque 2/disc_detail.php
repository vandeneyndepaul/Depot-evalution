<?php include "header.php";?>



<?php 

    
    require "connexion-db.php";
    $db=ConnexionBase();
    $id= $_GET["id"];
    $requete = $db->prepare("SELECT * FROM disc INNER JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id=?");
    $requete->execute(array($id));
    $mydisc = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    var_dump($_GET);
   
  
 
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
        <div class="container">
            <H1>Details</H1>
    



    <div class="row">
        <div class="col-6">
            <label for="title" class="form-label">Title</label>
        </div>

        
        

        <div class="col-6">
            <label for="title" class="form-label">Artist</label> 
        </div>
    
    </div>

    

    <div class="row">
        
        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?php echo $mydisc->disc_title ?>" ></input>
        </div>

        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $mydisc->artist_name ?>" ></input>
        </div>
        
    </div>

    

    <div class="row">
        <div class="col">
            <label for="title" class="form-label">Year</label>
        </div>

        <div class="col">
            <label for="title" class="form-label">Genre</label> 
        </div>
    </div>

    

    <div class="row">
        
        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $mydisc->disc_year ?>" ></input>
        </div>

        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $mydisc->disc_genre ?>" ></input>
        </div>
        
    </div>

    

    <div class="row">
        <div class="col">
            <label for="title" class="form-label">Label</label>
        </div>

        <div class="col">
            <label for="title" class="form-label">Price</label> 
        </div>
    </div>

    

    <div class="row">
        
        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $mydisc->disc_label?>" ></input>
        </div>

        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $mydisc->disc_price ?>" ></input>
        </div>
        
    </div>

    <br>
    <p>Picture</p>

    <div class="row">
        <div class="col">
            <input type="image" id="images" alt="image_album" src="Assets/IMG/<?= $mydisc->disc_picture?>" class="img-thumbnail" style="width :50% ; height : auto" ></input>
        </div>
    </div>


   
    <br>
        
        <a href="disc_form.php?id=<?= $mydisc->disc_id ?>"><button class="btn-primary btn-lg">Modifier</button></a>
        <a href="script_delete.php?id=<?= $mydisc->disc_id ?>"><button class="btn-primary btn-lg">Supprimer (*ajouter une demande de confirmation en JS</button></a>
        <a href="discs.php"><button class="btn-primary btn-lg">Retour à la liste des Disque</button></a>
       
    </div>

    </body>
</html>