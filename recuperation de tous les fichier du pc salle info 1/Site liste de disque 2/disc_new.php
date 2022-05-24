<?php include "header.php" ?>


<div class="container"> 

    <div class="row align-items-start">
        <div class="col-12">
            <header><h1>Ajouter un vinyle</h1></header>
        </div>
    </div>


    <div class="row" >
        <div class="col-12 ">
            <form action="script_disc_modif.php" methode="POST">
            <label for="title" class="form-label">Title</label><br>
            <input type="text" class="form-control form-control-lg" id="title" placeholder="Enter title"><br>
            <label for="title" class="form-label">Year</label><br>
            <input type="text" class="form-control form-control-lg" id="Année" placeholder="Enter year"><br>
            <label for="title" class="form-label">Genre</label><br>
            <input type="text" class="form-control form-control-lg" id="Genre" placeholder="Enter genre(Rock, Pop, Prog...)"><br>
            <label for="title" class="form-label">Label</label><br>
            <input type="text" class="form-control form-control-lg" id="Label" placeholder="Enter Label(EMI, Warner, PolyGram, Univers sale...)"><br>
            <label for="title" class="form-label">Price</label><br>
            <input type="text" class="form-control form-control-lg" id="Price"><br>

            
            <input type="submit" value="Ajouter" class="btn-primary btn-lg">
            <a href="discs.php"><input class="btn-primary btn-lg" type="button" value="Retour au Disque"></a>
        </form>



        </div>
    </div>







</div>



<?php include "footer.php" ?>