

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
<meta name="robots" content="NoIndex,NoFollow">
<title>Table de multiplication modulo n</title>
<style>
table, td, th { border: 1px solid black; }
table { border-collapse: collapse; width:400px; }
td { text-align:center; }
</style>
</head>
<body>





<?php
    $facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350); 
    $facture_sixmois=0; 

    foreach ($facture as $mois => $valeur) 
    { 
       echo "Facture du mois de $mois : $valeur Euros<br />"; 
       $facture_sixmois +=$valeur; 
    } 

    echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 
    ?> 





</body>
</html>
