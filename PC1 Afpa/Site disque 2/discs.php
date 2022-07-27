<?php include "header.php"; ?>
<?php include "connexion-db.php";?>


<?php $tableau = requete_Disque();   // on stoke tous les element de la bd dans la variale $tableau ?>


<div class="container-fluid" style="background-color :#DBD0C0">
<br>
    <div class="row align-items-start">
        <div class="col-9">
            <header>
                <h1 style="color :#border-color :#2C3639;;"><strong>Liste des Disques(<?= count( $tableau);?>)</strong></h1><br>
               
            </header>
        </div>


        <div class="col-3">
             <a class="btn btn-success btn-md" href="connexion.php" role="button">connexion</a>
                <a class="btn btn-danger btn-md" href="deconnexion.php" role="button">Deconnexion</a>
            
        </div>
        
    </div>
    <div class="row">
        <div class="col-12">
            
            <a class="btn btn-lg" style="background-color :#F9E4C8 ;border-color :#2C3639;" href="disc_new.php" role="button">ajouter un disque -></a>
        </div>
</div>

    
   
    <div class="row">

        <?php foreach ($tableau as $disc) : ?>
        <div class="shadow card border-1  col-6" id="card" style="width: 50%; background-color :#F9E4C8 ;border-color :#2C3639; ">
            <div class="card-body row">
                <p class="card-text text-left col-4" style="text-align:center; vertical-align:middle;">
                    <img src="Assets/IMG/<?= $disc->disc_picture?>" class="img-thumbnail"
                        style="width :80% ; height : auto" ; alt="image drama">
                </p>

                <div class="col-6">
                    <p class="card-text lead font-weight-bold"><?= $disc->disc_title ?></p>
                    <p class="card-text ">Artist Name :<?=$disc->artist_id?></p>
                    <p class="card-text ">Label :<?= $disc->disc_label?></p>
                    <p class="card-text ">Year :<?= $disc->disc_year ?></p>
                    <p class="card-text ">Genre :<?= $disc->disc_genre ?></p>
                    <a class="btn btn-info btn-lg" href="disc_detail.php?id=<?=$disc->disc_id?>"
                        role="button" style="background-color: #2C3639">Détails</a>
                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>


</div>

<?php include "footer.php" ?>