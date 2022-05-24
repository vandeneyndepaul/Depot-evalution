
<?php include "header.php"; ?>
<?php include "connexion-db.php";?>


<?php $tableau = requete_Disque();   // on stoke tous les element de la bd dans la variale $tableau ?> 

<div class="container">
<br><br>
<table class="table-dark">
    <!-- <tr>
        <th>id</th>
        <th>name</th>
    </tr> -->

<?php foreach ($tableau as $disc) : ?>

  <?php//  var_dump ($disc) // permet d'afficher ce que l'on recupere de la db?>
 
    <tr>
        <td><img src="Assets/IMG/<?= $disc->disc_picture?>" class="img-thumbnail" style="width :50% ; height : auto"; alt="image drama" ></td>
        <!-- <td><?= $disc->disc_id ?></td> -->
        <td><h1><?= $disc->disc_title ?></h1>
             <h3>Artist Name :<?=$disc->artist_id?></h3>
             <h3>Label :<?= $disc->disc_label?></h3><br>
             <h3>Year :<?= $disc->disc_year ?></h3><br>
             <h3>Genre :<?= $disc->disc_genre ?></h3><br> 
             <a class="btn btn-primary btn-lg" href="disc_detail.php?id=<?=$disc->disc_id?>" role="button">Détails</a>
        </td>
    </tr>
    
    <tr>
        <td><br></td>
    </tr>
    

<?php endforeach; ?>
<div class="row align-items-start">
<div class="col-11">
<header><h1><strong>Liste des Disques</strong></h1></header>

</div>
<div class="col-1">
<a class="btn btn-primary btn-lg" href="disc_new.php?id=<?=$disc->disc_id?>" role="button">ajouter</a><br><br>
</div>
</table>



<?php //include "Tableau_sans_bordure_liste_discs.php"?>







<?php include "footer.php" ?>

