<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employer</title>
</head>

<body>
    <div class="row">
        <div class="col-6">
            <?php  require 'class/Employer.class.php';
                   $Employer_1 = new Employer("Paul","Van Den Eynde","2020","Charger d'appel","49000","Service_client");
                   Print_r($Employer_1);
            ?>
        </div>

        <div class="col-6">
            <?php $date=date('Y');
                  print_r($date);
                  print_r($_Date_embauche);

                  Print_r("Cela fait :".$Employer_1->Année_Ancienté_Employer($Employer_1)." ans que vous etes dans l'entreprise.");
                // Print_r("L'ordre de transfert d'un montant de :".$Employer_1->Calcul_Prime()." à été envoyé a la banque avec succes.");
            ?>
        </div>
    </div>

</body>

</html>