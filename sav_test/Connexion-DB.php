<?php 
function ConnexionBase() {

    try 
    {
        $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=APPLICATION_SAV_DIRUY', 'admin', 'cater2000');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
}

function requete_Client(){ 
$db = ConnexionBase(); 
// on lance une requête pour chercher toutes les fiches d'artistes
$requete = $db->query("SELECT * FROM Client");
// on récupère tous les résultats trouvés dans une variable
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
// on clôt la requête en BDD
$requete->closeCursor();
return $tableau;
}

function requete_SAV(){ 
    $db = ConnexionBase(); 
    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM SAV");
    // on récupère tous les résultats trouvés dans une variable
    $tableau2 = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();
    return $tableau2;
    }
?>