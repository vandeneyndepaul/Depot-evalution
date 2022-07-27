<?php
    // Récupération du Nom :
    $title = (isset($_POST['title']) && $_POST['title'] != "") ? $_POST['title'] : Null;
    // Récupération de l'Artist (même traitement, avec une syntaxe abrégée)
    $Artist = (isset($_POST['Artist']) && $_POST['Artist'] != "") ? $_POST['Artist'] : Null;
    var_dump($Artist);
    $Year = (isset($_POST['Year']) && $_POST['Year'] != "") ? $_POST['Year'] : Null;
    $Genre = (isset($_POST['Genre']) && $_POST['Genre'] != "") ? $_POST['Genre'] : Null;
    $Label = (isset($_POST['Label']) && $_POST['Label'] != "") ? $_POST['Label'] : Null;
    $Price = (isset($_POST['Price']) && $_POST['Price'] != "") ? $_POST['Price'] : Null;

    var_dump($_POST);

// die;

    // En cas d'erreur, on renvoie vers le formulaire
    if ($title == Null /*|| $Artist == Null*/ || $Year == Null || $Genre == Null || $Label == Null || $Price== Null) {
        // var_dump($title);
        // var_dump($Artist);
        // var_dump($Year);
        // var_dump($Genre);
        // var_dump($Label);
        // var_dump($Price);
        // die;
        header("Location: disc_new.php");
        exit;
    }

    // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    require "connexion-db.php"; 
    $db = connexionBase();
    

try {
    // Construction de la requête INSERT sans injection SQL :
    $requete = $db->prepare("INSERT INTO disc (disc_title, artist_id, disc_year, disc_genre, disc_label, disc_price) VALUES (:title, :Artist, :Year, :Genre, :Label, :Price);");

    // Association des valeurs aux paramètres via bindValue() :
    $requete->bindValue(":title", $title, PDO::PARAM_STR);
    $requete->bindValue(":Artist", $Artist, PDO::PARAM_STR);
    $requete->bindValue(":Year", $Year, PDO::PARAM_STR);
    $requete->bindValue(":Genre", $Genre, PDO::PARAM_STR);
    $requete->bindValue(":Label", $Label, PDO::PARAM_STR);
    $requete->bindValue(":Price", $Price, PDO::PARAM_STR);
    // Lancement de la requête :
    $requete->execute();

    // Libération de la requête (utile pour lancer d'autres requêtes par la suite) :
    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_ajout.php)");
}

// Si OK: redirection vers la page artists.php
header("Location: discs.php");

// Fermeture du script
exit;
?>