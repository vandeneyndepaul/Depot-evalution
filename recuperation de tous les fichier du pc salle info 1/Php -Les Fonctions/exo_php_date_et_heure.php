<?php

echo date("H/i/s");

$oDate = new DateTime();

$oDate = new DateTime("01-01-2018");
var_dump($oDate);




$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-06";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}





?>

