


<?php
  $id = (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null;
  $title = (isset($_POST['title']) && $_POST['title'] != "") ? $_POST['title'] : Null;
  // Récupération de l'Artist (même traitement, avec une syntaxe abrégée)
  $Artist = (isset($_POST['Artist']) && $_POST['Artist'] != "") ? $_POST['Artist'] : Null;
//   var_dump($Artist);
  $Year = (isset($_POST['Year']) && $_POST['Year'] != "") ? $_POST['Year'] : Null;
  $Genre = (isset($_POST['Genre']) && $_POST['Genre'] != "") ? $_POST['Genre'] : Null;
  $Label = (isset($_POST['Label']) && $_POST['Label'] != "") ? $_POST['Label'] : Null;
  $Price = (isset($_POST['Price']) && $_POST['Price'] != "") ? $_POST['Price'] : Null;
  
//   var_dump($Id);


  

// var_dump($Genre);
// die;

    // En cas d'erreur, on renvoie vers le formulaire
    if ($title == Null || $Artist == Null || $Year == Null || $Genre == Null || $Label == Null || $Price== Null || $id == NULL) {
        var_dump($title);
        var_dump($Artist);
        var_dump($Year);
        var_dump($Genre);
        var_dump($Label);
        var_dump($Price);
        var_dump($id);

         die;
        header("Location: disc_form.php?id=$id");
        exit;
    }
    // Si la vérification des données est ok :
    require "connexion-db.php"; 
    $db = connexionBase();
    
    try {
        // Construction de la requête UPDATE sans injection SQL :
        var_dump($Artist);
    $requete = $db->prepare("UPDATE disc SET disc_title = :title, artist_id = :Artist, disc_year = :Year, disc_genre = :Genre, disc_label = :Label, disc_price = :Price WHERE disc_id = :id;");
    
       // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":title", $title, PDO::PARAM_STR);
    $requete->bindValue(":Artist", $Artist, PDO::PARAM_STR);
    $requete->bindValue(":Year", $Year, PDO::PARAM_STR);
    $requete->bindValue(":Genre", $Genre, PDO::PARAM_STR);
    $requete->bindValue(":Label", $Label, PDO::PARAM_STR);
    $requete->bindValue(":Price", $Price, PDO::PARAM_STR);
    $requete->bindValue(":id", $id, PDO::PARAM_STR);
    // Lancement de la requête :
    $requete->execute();
        $requete->closeCursor();
    }

    catch (Exception $e) {
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_modif.php)");
    }
    
var_dump($_POST["id"]);

// die;
    // Si OK: redirection vers la page artist_detail.php
    header("Location: disc_detail.php?id=$id");
    exit;
    ?> 