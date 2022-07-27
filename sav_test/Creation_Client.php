<?php include "Header.php"; ?>

<?php include "Navbar.php" ?>


<?php 
    require "Connexion-DB.php";
    $db=ConnexionBase();
    $requete = $db->query("SELECT * FROM Client INNER JOIN SAV ON Client.Client_Id = SAV.Client_Id");
    
    $requete->execute();
    $artist_liste = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    
  // var_dump($artist_liste);
 ?>



<div class="container"> 

    <div class="row align-items-start">
        <div class="col-12">
            <header><h1>Ajouter un nouveau client :</h1></header>
        </div>
    </div>


    <div class="row" >
        <div class="col-12 ">
            <form action="Script_Creation_Client.php" method="POST">
              
                <label for="Client_Id" class="form-label">Client_Id</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Id" placeholder="Entrer votre ID client Fournis sur la Facture"required="required"><br>
                <label for="Client_Nom" class="form-label">Client_Nom</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Nom"required="required" ><br>
                <label for="Client_Prenom" class="form-label">Client_Prenom</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Prenom" required="required"><br>
                <label for="Client_Adress1" class="form-label">Client_Adress1</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Adress1"required="required"><br>
                <label for="Client_Adress2" class="form-label">Client_Adress2</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Adress2"required="required"><br>
                <label for="Client_Code_Post" class="form-label">Client_Code_Post</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Code_Post"required="required"><br>
                <label for="Client_ville" class="form-label">Client_ville</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_ville"required="required"><br>
           
           
           

                
                <input type="submit" value="Ajouter" class="btn-primary btn-md">
                <a href="discs.php"><input class="btn-primary btn-md" type="button" value="Retour page d'accueil"></a>
            </form>



        </div>
    </div>







</div>







































<?php include "Footer.php";?>