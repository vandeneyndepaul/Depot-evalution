

<?php
include "header.php"; 
    session_start(); // demarrage de la session
    session_destroy(); // on détruit la/les session(s), soit si vous utilisez une autre session, utilisez de préférence le unset()
    header('Location:discs.php'); // On redirige
    die();


include "footer.php";