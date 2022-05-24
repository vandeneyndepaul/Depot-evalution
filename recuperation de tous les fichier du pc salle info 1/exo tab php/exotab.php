<?php
echo "bonjour et bienvenu sur mon site :<br><br><br>";
echo " Voici le tableau de jour par mois de l'annee : <br><br>";
$Tableau = array(
    "janvier" => 30,
    "fevrier" => 28,
    "mars" => 31,
    "avril" => 30,
    "mai" => 31,
    "juin" => 30,
    "juillet" => 31,
    "aout" => 31,
    "septembre" => 30,
    "octobre" => 31,
    "novembre" => 30,
    "decembre" => 31
    );

asort($Tableau);
  
foreach ($Tableau as $month => $valeur) {
    echo"Nombre de jours en $month : $valeur <br>";
}


?>