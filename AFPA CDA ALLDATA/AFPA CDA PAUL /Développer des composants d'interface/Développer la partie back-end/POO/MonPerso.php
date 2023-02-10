<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Exercice 1 PhP</title>
</head>



<body>
<?php    
    require 'classes/Personnage.class.php';
    $Personnage_1 = new Personnage(12,"H","paul","vde");
    
    $date=date('Y');
    print_r($date);

    
    Print_r($Personnage_1);
?>
</body>
</html>