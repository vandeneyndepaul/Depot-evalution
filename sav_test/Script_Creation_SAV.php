<?php
 
    $Client_Id = (isset($_POST['Client_Id']) && $_POST['Client_Id'] != "") ? $_POST['Client_Id'] : Null;
    $SAV_Nom = (isset($_POST['SAV_Nom']) && $_POST['SAV_Nom'] != "") ? $_POST['SAV_Nom'] : Null;
    $SAV_Prenom = (isset($_POST['SAV_Prenom']) && $_POST['SAV_Prenom'] != "") ? $_POST['SAV_Prenom'] : Null;
    $SAV_Adress1 = (isset($_POST['SAV_Adress1']) && $_POST['SAV_Adress1'] != "") ? $_POST['SAV_Adress1'] : Null;
    $SAV_Adress2 = (isset($_POST['SAV_Adress2']) && $_POST['SAV_Adress2'] != "") ? $_POST['SAV_Adress2'] : Null;
    $SAV_Code_Post = (isset($_POST['SAV_Code_Post']) && $_POST['SAV_Code_Post'] != "") ? $_POST['SAV_Code_Post'] : Null;
    $SAV_ville = (isset($_POST['SAV_ville']) && $_POST['SAV_ville'] != "") ? $_POST['SAV_ville'] : Null;
    $SAV_Probleme = (isset($_POST['SAV_Probleme']) && $_POST['SAV_Probleme'] != "") ? $_POST['SAV_Probleme'] : Null;
    $Dt_Crea = (isset($_POST['Dt_Crea']) && $_POST['Dt_Crea'] != "") ? $_POST['Dt_Crea'] : Null;
    $SAV_id = (isset($_POST['SAV_id']) && $_POST['SAV_id'] != "") ? $_POST['SAV_id'] : Null;

    var_dump($_POST);

// die;

    // En cas d'erreur, on renvoie vers Creation_Client
    if ($Client_Id == Null || $SAV_Nom == Null || $SAV_Prenom == Null || $SAV_Adress1 == Null || $SAV_Adress2 == Null || $SAV_Code_Post == Null ||  $SAV_Probleme == NULL || $Dt_Crea == NULL || $SAV_id == NULL ) {
         var_dump($SAV_Code_Post);
        
        // die;
        header("Location: Creation_SAV.php");
        exit;
    }

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "Connexion-DB.php"; 
    $db = connexionBase();
    

try {
   
    $requete = $db->prepare("INSERT INTO SAV (Client_Id, SAV_Nom, SAV_Prenom, SAV_Adress1, SAV_Adress2, SAV_Code_Post, SAV_ville, SAV_Probleme, Dt_Crea, SAV_id) VALUES (:Client_Id, :SAV_Nom, :SAV_Prenom, :SAV_Adress1, :SAV_Adress2, :SAV_Code_Post, :SAV_ville, :SAV_Probleme, :Dt_Crea, :SAV_id);");

    // Association des valeurs aux paramètres 
    $requete->bindValue(":Client_Id", $Client_Id , PDO::PARAM_STR);
    $requete->bindValue(":SAV_Nom", $SAV_Nom , PDO::PARAM_STR);
    $requete->bindValue(":SAV_Prenom", $SAV_Prenom, PDO::PARAM_STR);
    $requete->bindValue(":SAV_Adress1", $SAV_Adress1, PDO::PARAM_STR);
    $requete->bindValue(":SAV_Adress2", $SAV_Adress2, PDO::PARAM_STR);
    $requete->bindValue(":SAV_Code_Post", $SAV_Code_Post, PDO::PARAM_STR);
    $requete->bindValue(":SAV_ville", $SAV_ville, PDO::PARAM_STR);
    $requete->bindValue(":SAV_Probleme", $SAV_Probleme, PDO::PARAM_STR);
    $requete->bindValue(":Dt_Crea", $Dt_Crea, PDO::PARAM_STR);
    $requete->bindValue(":SAV_id", $SAV_id, PDO::PARAM_STR);


    // Lancement de la requête :
    $requete->execute();

    // Libération de la requête :
    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_ajout.php)");
}


header("Location: PageAccueil.php");


exit;
?>