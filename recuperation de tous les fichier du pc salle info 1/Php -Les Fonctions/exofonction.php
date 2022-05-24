


<?php
/*

$text=ucfirst("bonjour");

echo $text."<br>";


function bonjour(){
    echo"bonjour<br>";
}

bonjour();

function aurevoir($prenom){
    echo"au revoir".$prenom."<br>";
}

aurevoir("paul");

function hello($nom,$prenom){
    echo"hello".$nom.$prenom."<br>";
}

hello("paul","dave");



function Test1 () 
{ 
   static $a=0; 
   echo "$a<br />"; 
   $a++;
} 

 Appel de la fonction (3 fois)
Test1(); 
Test1(); 
Test1();*/


function lien($lien,$titre){
    echo"<a href=$lien>$titre</a><br>";
}

lien("https://www.reddit.com/", "Reddit Hug");

$tab = array(4, 3, 8, 2);

$a=array_sum($tab);
echo$a;


?>
<form action="action.php" method="post">
 <p>mdp : <input type="text" name="mdp" /></p>
 <p><input type="submit" value="OK"></p>
</form>

 
<?php
function complex_password($mdp)
{
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
	{
		return false;
	}
	else 
		return true;
}

if (complex_passeword("TopSecret42") != true)
{
	echo "Format non correct";	
}
else 
	echo "Format correct";
?>
