<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
echo '<br>';
echo 'Liste des régions par ordre alphabetique :'.'<br>';
echo '<br>';
/*sort ($departements);*/
foreach ($departements as $region => $depart) {
    echo $region.' : '.'<br>';
    echo '<br>';
    foreach($depart as $region => $depart){
        echo $depart.'<br>';
    }echo '<br>';
}
echo '<br>';
echo 'Liste des régions suivie du nombre de departements :'.'<br>'.'<br>';
/*sort ($departements);*/
foreach ($departements as $region => $departement) {
    echo $region.':<br>'.count($departement).' Régions<br>'.'<br>';
}