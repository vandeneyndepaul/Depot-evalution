
<?php

require 'Modele.php';

// Affiche la liste de tous les billets du blog
function accueil() {
    $billets = getBillets();
    require 'vueAccueil.php';
}

// Affiche les détails sur un billet
function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getComments($idBillet);
    require 'vueBillet.php';
}

// Affiche une erreur
function erreur($msgErreur) {
    require 'vueErreur.php';
}