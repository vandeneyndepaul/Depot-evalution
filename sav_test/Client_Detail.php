<?php include "Header.php";?>


<?php 

    
    require "Connexion-DB.php";
    $db=ConnexionBase();
    $id= $_GET["id"];
    $requete = $db->prepare("SELECT * FROM Client WHERE Client_Id=?");
    $requete->execute(array($id));
    $myclient = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    var_dump($_GET);
   
  
 
?>



<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Client- Détail</title>
    </head>


    <body>
        <div class="container">
            <H1>Details</H1>
    



    <div class="row">
        <div class="col-6">
            <label for="title" class="form-label">Client_Id</label>
        </div>

        
        

        <div class="col-6">
            <label for="title" class="form-label">Client_Nom</label> 
        </div>
    
    </div>

    

    <div class="row">
        
        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?php echo $myclient->Client_Id ?>" ></input>
        </div>

        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $myclient->Client_Nom ?>" ></input>
        </div>
        
    </div>

    

    <div class="row">
        <div class="col">
            <label for="title" class="form-label">Client_Prénom</label>
        </div>

        <div class="col">
            <label for="title" class="form-label">Client_Adress1</label> 
        </div>
    </div>

    

    <div class="row">
        
        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $myclient->Client_Prenom ?>" ></input>
        </div>

        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $myclient->Client_Adress1 ?>" ></input>
        </div>
        
    </div>

    

    <div class="row">
        <div class="col">
            <label for="title" class="form-label">Client_Adress2</label>
        </div>

        <div class="col">
            <label for="title" class="form-label">Client_Code_Post</label> 
        </div>
    </div>

    

    <div class="row">
        
        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $myclient->Client_Adress2?>" ></input>
        </div>

        <div class="col-6">
            <input type="text" id="title" STYLE="color : #000040" class="form-control" aria-label="Disabled input example" disabled value="<?= $myclient->Client_Code_Post ?>" ></input>
        </div>
        
    </div>



   
    <br>
        
        <a href="Formulaire_Modif_Client.php?id=<?= $myclient->Client_Id ?>"><button class="btn-primary btn-lg">Modifier</button></a>
        <a href="Supprimer_Client.php?id=<?= $myclient->Client_Id ?>"><button class="btn-primary btn-lg">Supprimer (*ajouter une demande de confirmation en JS</button></a>
        <a href="PageAccueil.php"><button class="btn-primary btn-lg">Retour à la Page Principale</button></a>
       
    </div>

    </body>
</html>