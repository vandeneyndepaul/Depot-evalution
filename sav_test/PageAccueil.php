<?php include "Header.php"; ?>
<?php include "Connexion-DB.php";?>


<?php $tableau2 = requete_SAV();   // on stoke tous les element de la bd dans la variale $tableau ?>

<?php include "Navbar.php" ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-8">
            <br><br><br>
            <header>
                <h1><strong>Liste des SAV</strong></h1>
            </header>
        </div>
    </div>

<br>





    <div class="row align-items-start">
        <div class="col-12">

            <table classe="table bg-warning">
                <thead>
                    <tr>

                        <th>Nom </th>

                        <th>&nbsp;&nbsp;Adresse_1 </th>
                        <th>&nbsp;&nbsp;Ville </th>
                        <th>Code_Post </th>
                        <th>&nbsp; &nbsp;Probleme </th>

                    </tr>
                </thead>


                <tbody>
                    <?php foreach ($tableau2 as $SAV): ?>

                    <?php  //var_dump($artist); ?>
                    <tr class="table-warning">
                        <!-- <td><?= $SAV->SAV_Id ?></td> -->
                        <td><?= $SAV->SAV_Nom ?>&nbsp;&nbsp;</td>
                        <!-- <td><?= $SAV->SAV_Prenom ?></td> -->
                        <td><?= $SAV->SAV_Adress1 ?>&nbsp;&nbsp;</td>
                        <!-- <td><?= $SAV->SAV_Adress2 ?></td> -->
                        <td><?= $SAV->SAV_ville ?></td>
                        <td>&nbsp;&nbsp;<?= $SAV->SAV_Code_Post ?></td>
                        <td><?= $SAV->SAV_Probleme ?></td>


                        <td><a class="btn btn-info btn-sm" href="Script_Supprimer_SAV.php?id=<?=$SAV->Client_Id?>"
                                role="button">Supprimer</a></td>
                        
                        <td><a class="btn btn-info btn-sm" href="Modification_SAV.php?id=<?=$SAV->Client_Id?>"
                                role="button">Modifier</a></td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>

      
    </div>
<br>
    
<div class="row align-items-start">
        <div class="col-3">
            <a class="btn btn-info btn-sm" href="Creation_SAV.php" role="button">Ajouter un SAV</a><br><br>
        </div>
        

  





<?php include "Footer.php";?>