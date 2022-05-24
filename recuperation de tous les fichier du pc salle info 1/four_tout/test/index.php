
<?php 
    $test = "Bonjour !";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <h1><?php echo $test; ?></h1>
 
    <nav id="menu">
        <ul>
            <li><a href="index.html" title="page1"> index </a></li>
            <li><a href="page2.html" title="page2"> page 2 </a> </li>
        </ul>
    </nav>

    <section id="section_1">
        <div id="div_1"></div>

    </section>
    <style>#div_1{background-color: blueviolet};</style>

  
    <script src="javascript.js"></script>
</body>
</html>