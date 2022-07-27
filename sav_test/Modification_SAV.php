<?php include "Header.php"; ?>

<?php include "Navbar.php" ?>


<?php 
    require "Connexion-DB.php";
    $db=ConnexionBase();
    $id= $_GET["id"];
    $requete = $db->query("SELECT * FROM SAV INNER JOIN Client ON SAV.Client_Id = Client.Client_Id ");
    
    $requete->execute(array($id));
    $mySAV = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    
 ?>



<div class="container"> 

    <div class="row align-items-start">
        <div class="col-12">
            <header><h1>Ajouter un nouveau SAV :</h1></header>
        </div>
    </div>


    <div class="row" >
        <div class="col-12 ">
            <form action="Script_Modification_SAV.php" method="POST">
              
                <label for="Client_Id" class="form-label">Client_Id</label><br>
                <input type="text" class="form-control form-control-md"  name="Client_Id" value="<?= $mySAV->Client_Id ?>"required="required"><br>
                <label for="SAV_Nom" class="form-label">SAV_Nom</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_Nom" value="<?= $mySAV->SAV_Nom ?>" required="required"><br>
                <label for="SAV_Prenom" class="form-label">SAV_Prenom</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_Prenom" value="<?= $mySAV->SAV_Prenom ?>" required="required"><br>
                <label for="SAV_Adress1" class="form-label">SAV_Adress1</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_Adress1" value="<?= $mySAV->SAV_Adress1 ?>"required="required"><br>
                <label for="SAV_Adress2" class="form-label">SAV_Adress2</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_Adress2" value="<?= $mySAV->SAV_Adress2 ?>"required="required"><br>
                <label for="SAV_Code_Post" class="form-label">SAV_Code_Post</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_Code_Post" value="<?= $mySAV->SAV_Code_Post ?>"required="required"><br>
                <label for="SAV_ville" class="form-label">SAV_ville</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_ville" value="<?= $mySAV->SAV_ville ?>"required="required"><br>
                <label for="SAV_Probleme" class="form-label">SAV_Probleme</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_Probleme" value="<?= $mySAV->SAV_Probleme ?>"required="required"><br>
                <label for="SAV_" class="form-label">Dt_Crea</label><br>
                <input type="text" class="form-control form-control-md"  name="Dt_Crea" value="<?= $mySAV->Dt_Crea ?>"required="required"><br>
                <label for="SAV_id" class="form-label">SAV_id</label><br>
                <input type="text" class="form-control form-control-md"  name="SAV_id" value="<?= $mySAV->SAV_id ?>"required="required"><br>
           
           
           

                
                <input type="submit" value="Modifier" class="btn-primary btn-md">
                <a href="PageAccueil.php"><input class="btn-primary btn-md" type="button" value="Retour page d'accueil"></a>
            </form>



        </div>
    </div>







</div>







































<?php include "Footer.php";?>