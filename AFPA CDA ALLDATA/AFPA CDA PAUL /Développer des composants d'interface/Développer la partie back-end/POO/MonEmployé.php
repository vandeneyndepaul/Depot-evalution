<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    Hello

    <?php

    require "classes/Employé.class.php";

    $Employé_1=new Employé('vde','paul','05/10/18','coureur','2100','helper');
    print_r($Employé_1);
    $date_du_jour=new DateTime();
    var_dump($date_du_jour);
    ?>

</body>
</html>