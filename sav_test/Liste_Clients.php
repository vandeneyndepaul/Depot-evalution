<?php include "Header.php"; ?>
<?php include "Connexion-DB.php";?>


<?php $tableau = requete_Client();   // on stoke tous les element de la bd dans la variale $tableau ?>

<?php include "Navbar.php" ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-8">
            <br><br><br>
            <header>
                <h1><strong>Liste des Clients</strong></h1>
            </header>
        </div>
    </div>

    <br>





    <div class="row align-items-start">
        <div class="col-12">

            <table classe="table bg-warning">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Nom </th>
                        <th>Prénom </th>
                        <th>Adresse_1 </th>
                       
                        <th>Code_Post </th>
                        <th>Ville </th>
                    </tr>
                </thead>


                <tbody>
                    <?php foreach ($tableau as $clients): ?>

                    <?php   ?>
                    <tr class="table-warning">
                        <td><?= $clients->Client_Id ?></td>
                        <td><?= $clients->Client_Nom ?></td>
                        <td><?= $clients->Client_Prenom ?></td>
                        <td><?= $clients->Client_Adress1 ?></td>
                        
                        <td><?= $clients->Client_Code_Post ?></td>
                        <td><?= $clients->Client_Ville ?></td>
                       
                        
                            <td><a class="btn btn-info btn-sm" href="Formulaire_Ajout_SAV.php?id=<?=$clients->Client_Id?>" role="button">Add SAV</a></td>

                         <td><a class="btn btn-info btn-sm" href="Modification_client.php?id=<?=$clients->Client_Id?>" role="button">Modifier</a></td>
                            
                        <td> <a class="btn btn-info btn-sm" href="Script_Supprimer_Client.php?id=<?=$clients->Client_Id?>"  role="button">Supprimer</a></td>
                         
                    </tr>

                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>

    </div>
                    
    <br>

    <div class="row align-items-start">
        <div class="col-3">
            <a class="btn btn-info btn-sm" href="Creation_Client.php" role="button">Ajouter un client</a><br><br>
        </div>

       
    
</div>




    <?php include "Footer.php";?>