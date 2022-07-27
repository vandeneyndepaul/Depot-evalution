
<?php

include 'header.php';
// on importe le contenu du fichier "connexion-db.php"

// on exécute la méthode de connexion à notre BDD
// $db = connexionBase();

// on lance une requête pour chercher toutes les fiches d'artistes
$tableau=requete_Artiste();

?>



<table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>

        <?php foreach ($tableau as $artist): ?>

        <?php  //var_dump($artist); //Le var_dump() est écrit à titre informatif ?>
        <tr>
            <td><?= $artist->artist_id ?></td>
            <td><?= $artist->artist_name ?></td>
            <!-- Ici, on ajoute un lien par artiste pour accéder à sa fiche : -->
            <td><a href="artist_detail.php?id=<?= $artist->artist_id ?>">Détail</a></td>
        </tr>

        <?php endforeach; ?>

    </table>
    <br>
<img src="Assets/IMG/Fugazi.jpeg">    
    <br>
<a href="artist_new.php">ajouter un artiste a la liste -></a>
<?php

include 'footer.php';
?>
