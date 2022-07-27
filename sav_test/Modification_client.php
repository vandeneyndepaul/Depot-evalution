<?php include "Header.php";?>

<?php include "Navbar.php" ?>

<?php 
    require "Connexion-DB.php";
    $db=ConnexionBase();
    $requete = $db->query("SELECT * FROM Client INNER JOIN SAV ON Client.Client_Id = SAV.Client_Id");
    
    $requete->execute();
    $myClient = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    
 ?>


<div class="container"> 

    <div class="row align-items-start">
        <div class="col-12">
            <header><h1>Modifier un Client :</h1></header>
        </div>
    </div>


    <div class="row" >
        <div class="col-12 ">
            <form action="Script_Modification_Client.php" method="POST">
              
                <label for="Client_Id" class="form-label">Client_Id</label><br>
                <input type="text" class="form-control form-control-md" id="Client_Id" name="Client_Id" value="<?= $myClient->Client_Id ?>"required="required"><br>
                <label for="Client_Nom" class="form-label">Client_Nom</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Nom" value="<?= $myClient->Client_Nom ?>" required="required"><br>
                <label for="Client_Prenom" class="form-label">Client_Prenom</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Prenom"  value="<?= $myClient->Client_Prenom ?>"required="required" ><br>
                <label for="Client_Adress1" class="form-label">Client_Adress1</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Adress1"  value="<?= $myClient->Client_Adress1 ?>" required="required"><br>
                <label for="Client_Adress2" class="form-label">Client_Adress2</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Adress2"  value="<?= $myClient->Client_Adress2 ?>" required="required"><br>
                <label for="Client_Code_Post" class="form-label">Client_Code_Post</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Code_Post"  value="<?= $myClient->Client_Code_Post ?>"required="required" ><br>
                <label for="Client_ville" class="form-label">Client_ville</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_ville"  value="<?= $myClient->Client_Ville ?>" required="required"><br>
              

                
                <input type="submit" value="Modifier" class="btn-primary btn-md">
                <a href="Liste_Clients.php"><input class="btn-primary btn-md" type="button" value="Retour à la liste des clients"></a>
            </form>



        </div>
    </div>







</div>
