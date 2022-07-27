<?php

$tableau = array("Pomme", "Poire", "Banane"); 
echo'<p>bonjours</p>';

sort($tableau);




for($i=0;$i<3;$i++){
    echo "$tableau[$i] <br>";
}


$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");

echo $tab1[2][0];



$tableau_facture = array (
    "janvier" => 500,
    "fevrier" => 700,
    "decembre" => 300
);
foreach ($tableau_facture as $mois => $valeur) {
    echo "Facture du mois de $mois : $valeur Euros<br />"; 
      
}



$tableau_client = array (
    paul
)

?>