<?php include "header.php" ?>





<?php 
    require "connexion-db.php";
    $db=ConnexionBase();
    $requete = $db->query("SELECT artist_name, artist_id FROM artist ");
    
    $requete->execute();
    $artist_liste = $requete->fetchAll(PDO::FETCH_OBJ);
    
    $requete->closeCursor();
    
  // var_dump($artist_liste);
 ?>



<div class="container"> 

    <div class="row align-items-start">
        <div class="col-12">
            <header><h1>Ajouter un vinyle</h1></header>
        </div>
    </div>


    <div class="row" >
        <div class="col-12 ">
            <form action="script_ajout.php" method="POST">
                <label for="title" class="form-label">Title</label><br>
                <input type="text" class="form-control form-control-lg" name="title" id="title" placeholder="Enter title"><br>
                <label for="Artist" class="form-label">Artist</label><br>
                <!-- <input type="button" data-toggle="dropdown" class="form-control form-control-lg" id="Artist"><br> -->
                
            
                    
                        <select id="Artist" name="Artist" class="form-select form-select-lg mb-3"  >
                            <?php foreach ($artist_liste as $artist):?> 
                                <option value="<?= $artist->artist_id ?>">
                                    <?= $artist->artist_name ?>
                                </option>
                            <?php endforeach; ?> 
                        </select><br>
                
            
                
                <label for="Year" class="form-label">Year</label><br>
                <input type="text" class="form-control form-control-lg" id="Year_for_label" name="Year" placeholder="Enter year"><br>
                <label for="Genre" class="form-label">Genre</label><br>
                <input type="text" class="form-control form-control-lg" id="Genre_for_label" name="Genre" placeholder="Enter genre(Rock, Pop, Prog...)"><br>
                <label for="Label" class="form-label">Label</label><br>
                <input type="text" class="form-control form-control-lg" id="Label_for_label" name="Label" placeholder="Enter Label(EMI, Warner, PolyGram, Univers sale...)"><br>
                <label for="Price" class="form-label">Price</label><br>
                <input type="text" class="form-control form-control-lg" id="Price_for_label" name="Price"><br>
                <label for="fileUpload">Picture:</label><br>
                <input type="file" name="photo" id="fileUpload"><br><br>

                
                <input type="submit" value="Ajouter" class="btn-primary btn-lg">
                <a href="discs.php"><input class="btn-primary btn-lg" type="button" value="Retour au Disque"></a>
            </form>



        </div>
    </div>







</div>



<?php include "footer.php" ?>