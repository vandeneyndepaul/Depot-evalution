<?php
 
$db=ConnexionBase();
$source_image=$_GET["disc_picture"];
$requete = $db->prepare("SELECT disc_picture FROM disc");
$requete->execute(array($source_image));
$mydisc = $requete->fetch(PDO::FETCH_OBJ);
$requete->closeCursor();

?>


<table class="table table-borderless">
  

<tr>
    <th>img</th>
    <th>description</th>
</tr>




    <tr>
        <td>
            <img src="Assets/IMG/<?= $mydisc->disc_picture?>" class="img-thumbnail" alt="image drama" >
        </td>
    </tr>


    <tr>
        <td>
            <img src="Assets/IMG/Dirt.jpeg" class="img-thumbnail" alt="image dirt" >
        </td>
    </tr>


    <tr>
        <td>
            <img src="Assets/IMG/Fugazi.jpeg" class="img-thumbnail" alt="image Fugazi" >
        </td>
    </tr>

</table>