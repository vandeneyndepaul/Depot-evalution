<?php include "header.php";?>


<?php
// On charge l'enregistrement correspondant à l'ID passé en paramètre :
    require "connexion-db.php";
    $db = connexionBase();
    $id= $_GET["id"];
    $requete = $db->prepare("SELECT * FROM disc INNER JOIN artist ON disc.artist_id = artist.artist_id WHERE disc_id=?");
    $requete->execute(array($id));
    $mydisc = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
// var_dump($mydisc->disc_id);

$requete2 = $db->query("SELECT artist_name, artist_id FROM artist ");
$requete2->execute();
$mydisc2 = $requete2->fetchAll(PDO::FETCH_OBJ);
$requete2->closeCursor();

// var_dump($mydisc2);
?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de modification</title>
</head>

<body>




    <h1>Formulaire de modification</h1>

    <?php var_dump($mydisc->artist_id);?>

    <div class="row">
        <div class="col-12 ">
            <form action="script_modif.php" method="POST">



                <div class="row g-2">


                    <div class="col-md">
                        <div class="form-floating">
                            <input type="hidden" class="form-control form-control-lg" id="disc" name="id"
                                value="<?= $mydisc->disc_id ?>"><br>
                            <label for="title" class="form-label">Title</label><br>
                            <input type="text" class="shadow form-control form-control-lg" id="title" name="title"
                                value="<?= $mydisc->disc_title ?>"><br>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <label for="artist" class=" form-label">Artist</label>
                            
                            
                            <select id="Artist" name="Artist" class="form-select form-select-lg mb-3"  >
                                <?php foreach ($mydisc2 as $artist2):?> 
                                    <option value="<?= $artist2->artist_id ?>">
                                        <?= $artist2->artist_name ?>
                                    </option>
                                <?php endforeach; ?> 
                            </select>   
                           
                        </div>
                    </div>

                </div>

                <div class="row g-2">

                    <div class="col-md">
                        <div class="form-floating">
                            <label for="Year" class="form-label">Year</label><br>
                            <input type="text" class=" shadow form-control form-control-lg" id="Year_for_label"
                                name="Year" value="<?= $mydisc->disc_year ?>"><br>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <label for="Genre" class="form-label">Genre</label><br>
                            <input type="text" class="shadow form-control form-control-lg" id="Genre_for_label"
                                name="Genre" value="<?= $mydisc->disc_genre ?>"><br>
                        </div>
                    </div>

                </div>

                <div class="row g-2">

                    <div class="col-md">
                        <div class="form-floating">
                            <label for="Label" class="form-label">Label</label><br>
                            <input type="text" class="shadow form-control form-control-lg" id="Label_for_label"
                                name="Label" value="<?= $mydisc->disc_label ?>"><br>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <label for="Price" class="form-label">Price</label><br>
                            <input type="text" class="shadow form-control form-control-lg" id="Price_for_label"
                                name="Price" value="<?= $mydisc->disc_price ?>"><br>
                        </div>
                    </div>

                </div>







                <div class="row ">
                    <div class="col-3">
                        <input type="image" id="images" alt="image_album" src="Assets/IMG/<?= $mydisc->disc_picture?>" class="img-thumbnail" style="width :50% ; height : auto"></input>
                    </div>
               

                
                    <div class="col-9">
                        <input type="file" name="photo" id="fileUpload">
                    </div>
                

                <div class="row">
                    <div class="col-6">
                        <input type="submit" value="Ajouter" class="btn-primary btn-lg">
                    </div>
                </div>

                
            </form> <br> <a href="discs.php"><button class="btn-primary btn-lg">Retour à la liste des
                    Disque</button></a>
        </div>
    </div>

</body>

</html>