<?php
 
    $Client_Id = (isset($_POST['Client_Id']) && $_POST['Client_Id'] != "") ? $_POST['Client_Id'] : Null;
    $Client_Nom = (isset($_POST['Client_Nom']) && $_POST['Client_Nom'] != "") ? $_POST['Client_Nom'] : Null;
    $Client_Prenom = (isset($_POST['Client_Prenom']) && $_POST['Client_Prenom'] != "") ? $_POST['Client_Prenom'] : Null;
    $Client_Adress1 = (isset($_POST['Client_Adress1']) && $_POST['Client_Adress1'] != "") ? $_POST['Client_Adress1'] : Null;
    $Client_Adress2 = (isset($_POST['Client_Adress2']) && $_POST['Client_Adress2'] != "") ? $_POST['Client_Adress2'] : Null;
    $Client_Code_Post = (isset($_POST['Client_Code_Post']) && $_POST['Client_Code_Post'] != "") ? $_POST['Client_Code_Post'] : Null;
    $Client_ville = (isset($_POST['Client_ville']) && $_POST['Client_ville'] != "") ? $_POST['Client_ville'] : Null;
   

    var_dump($_POST);

// die;

    // En cas d'erreur, on renvoie vers Creation_Client
    if ($Client_Id == Null || $Client_Nom == Null || $Client_Prenom == Null || $Client_Adress1 == Null || $Client_Adress2 == Null || $Client_Code_Post == Null || $Client_ville ) {
         var_dump($Client_Code_Post);
        
         die;
        header("Location: Creation_Client.php");
        exit;
    }

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "Connexion-DB.php"; 
    $db = connexionBase();
    

try {
   
    $requete = $db->prepare("UPDATE Client SET Client_Id = :Client_Id, Client_Nom = :Client_Nom, Client_Prenom = : Client_Prenom, Client_Adress1 = :Client_Adress1, Client_Adress2 = :Client_Adress2, Client_Code_Post = :Client_Code_Post, Client_ville = :Client_ville WHERE Client_id = :id;" );

    // Association des valeurs aux paramètres 
    $requete->bindValue(":Client_Id", $Client_Id , PDO::PARAM_STR);
    $requete->bindValue(":Client_Nom", $Client_Nom , PDO::PARAM_STR);
    $requete->bindValue(":Client_Prenom", $Client_Prenom, PDO::PARAM_STR);
    $requete->bindValue(":Client_Adress1", $Client_Adress1, PDO::PARAM_STR);
    $requete->bindValue(":Client_Adress2", $Client_Adress2, PDO::PARAM_STR);
    $requete->bindValue(":Client_Code_Post", $Client_Code_Post, PDO::PARAM_STR);
    $requete->bindValue(":Client_ville", $Client_ville, PDO::PARAM_STR);
    


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
    die("Fin du script (Script_Modification_Client.php)");
}


header("Location: Liste_Clients.php");


exit;
?>