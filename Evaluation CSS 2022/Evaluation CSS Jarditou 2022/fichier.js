

  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ///////||      Recupere le Formulaire, et Assigne une Fonction a l'Evenement Submit       ||///////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



document.getElementById("Inscription").addEventListener("submit" , function (e){

/////////////////////////////////////////////////////////
///////// Prive l'envoie du Formulaire //////////////////   

//e.preventDefault();



  /////////////////////////////////////////////////////////////////
 ////////||      FILTRE  :  Nom              ||///////////////////
/////////////////////////////////////////////////////////////////

var Name = document.getElementById("nom");
let FiltreNom= new RegExp('^[a-zA-Z]+$');
let ResultatFiltreNom=FiltreNom.test(Name.value);

console.log("resultat filtre nom : " +ResultatFiltreNom);


  /////////////////////////////////////////////////////////////////
 ////////||      FILTRE  :  PreNom            ||//////////////////
/////////////////////////////////////////////////////////////////

var Nickname= document.getElementById("prenom");
let FiltrePrenom= new RegExp('^[a-zA-Z]+$');
let ResultatFiltrePrenom = FiltrePrenom.test(Nickname.value);

console.log("\nResultat filtre prenom : "+ResultatFiltrePrenom);


  /////////////////////////////////////////////////////////////////
 /////////||      FILTRE  :  Code Postale      ||/////////////////
/////////////////////////////////////////////////////////////////

var CodePostale = document.getElementById("cp");
let FiltreCodePostale= new RegExp('^[0-9][0-9][0-9][0-9][0-9]+$');
let ResultatFiltreCodePostale = FiltreCodePostale.test(CodePostale.value);

console.log("\nResultat Filtre CodePostale : "+ResultatFiltreCodePostale+"\n");



  //////////////////////////////////////////////////////////////////////////////
 /////////||      FILTRE  :  Homme/Femme  RADIO_Button      ||/////////////////
//////////////////////////////////////////////////////////////////////////////


let valeur1;let valeur2;
if (document.getElementById('sexe1').checked) {
valeur1 = document.getElementById('sexe1').value;
}
if(document.getElementById("sexe2").checked){
valeur2= document.getElementById("sexe2").value;
}

console.log("\nValeur radio 1 :"+valeur1, "\nValeur radio 2 :"+valeur2);
if(valeur1){
console.log("\nvous avez choisi : FEMME");
}
else if (valeur2){
console.log("\nvous avez choisi : HOMME");
}



  /////////////////////////////////////////////////////////////////
 /////////||      FILTRE  :  Adresse           ||/////////////////
/////////////////////////////////////////////////////////////////


var ADRESSE = document.getElementById("adresse");
let FiltreAdresse= new RegExp('^[0-9]{1,4}[ ]+[a-zA-Z]+$');
let ResultatFiltreAdresse = FiltreAdresse.test(ADRESSE.value);

console.log("\nResultat Filtre Adresse : "+ResultatFiltreAdresse);



  /////////////////////////////////////////////////////////////////
 /////////||      FILTRE  :  Ville             ||/////////////////
/////////////////////////////////////////////////////////////////


var Ville = document.getElementById("ville");
let FiltreVille= new RegExp('^[a-zA-z]+$');
let ResultatFiltreVille=FiltreVille.test(Ville.value);

console.log("\nResultat Filtre Ville : "+ResultatFiltreVille);



  /////////////////////////////////////////////////////////////////
 /////////||      FILTRE  :  Mail              ||/////////////////
/////////////////////////////////////////////////////////////////



var Email = document.getElementById("email");
let FiltreEmail= new RegExp('^[a-zA-Z0-9_.]+@[a-zA-Z]+.[a-zA-Z]{2,4}$');
let ResultatFiltreEmail=FiltreEmail.test(Email.value);
console.log(Email.value);
console.log("\nResultat Filtre Email : "+ResultatFiltreEmail);



  /////////////////////////////////////////////////////////////////
 /////////||      FILTRE  :  DateNaissance     ||/////////////////
/////////////////////////////////////////////////////////////////




var DateNaissance = document.getElementById("date");
let FiltreDateNaissance= new RegExp('^[0-9]{4}-[0-9]{2}-[0-9]{2}$');
let ResultatFiltreDateNaissance=FiltreDateNaissance.test(DateNaissance.value);

console.log("\nResultat Filtre Date de Naissance : "+ResultatFiltreDateNaissance);
console.log(DateNaissance.value);




  /////////////////////////////////////////////////////////////////
 /////////||     Redemande Si FiltreName False   ||/////////////////
/////////////////////////////////////////////////////////////////



let ErreurName;

if(ResultatFiltreNom==false){
    e.preventDefault();
    ErreurName=" nom incorrect ! ";
}


if(ErreurName){
  e.preventDefault();
  document.getElementById("ErreurNom").innerHTML=ErreurName;
  var Name=document.getElementById('nom');
  document.getElementById("nom").value = document.getElementById("nom").defaultValue;
}

if(!ErreurName){
  document.getElementById('ErreurNom').innerHTML="";
}




  /////////////////////////////////////////////////////////////////
 /////////||     Redemande Si FiltreNickName False   ||///////////
/////////////////////////////////////////////////////////////////




let ErreurNickName;

if(ResultatFiltrePrenom==false){
    e.preventDefault();
    ErreurNickName=" prenom incorrect ! ";
}


if(ErreurNickName){
  e.preventDefault();
  document.getElementById("ErreurPrenom").innerHTML=ErreurNickName;
  var NickName=document.getElementById('prenom');
  document.getElementById("prenom").value = document.getElementById("prenom").defaultValue;
}

if(!ErreurNickName){
  document.getElementById('ErreurPrenom').innerHTML="";
}




  /////////////////////////////////////////////////////////////////
 ///////||     Redemande Si FiltreCodePostale False   ||//////////
/////////////////////////////////////////////////////////////////




let ErreurCodePostale;

if(ResultatFiltreCodePostale==false){
    e.preventDefault();
    ErreurCodePostale=" Code Postale incorrect ! ";
}


if(ErreurCodePostale){
  e.preventDefault();
  document.getElementById("ErreurCodePostale").innerHTML=ErreurCodePostale;
  var NickName=document.getElementById('prenom');
  document.getElementById("cp").value = document.getElementById("cp").defaultValue;
}

if(!ErreurCodePostale){
  document.getElementById('ErreurCodePostale').innerHTML="";
}




  /////////////////////////////////////////////////////////////////
 ///////||     Redemande Si FiltreAdresse False   ||//////////////
/////////////////////////////////////////////////////////////////





let ErreurAdresse;

if(ResultatFiltreAdresse==false){
    e.preventDefault();
    ErreurAdresse=" Adresse incorrect ! ";
}


if(ErreurAdresse){
  e.preventDefault();
  document.getElementById("ErreurAdresse").innerHTML=ErreurAdresse;
  var Adresse=document.getElementById('adresse');
  document.getElementById("adresse").value = document.getElementById("adresse").defaultValue;
}

if(!ErreurAdresse){
  document.getElementById('ErreurAdresse').innerHTML="";
}




  /////////////////////////////////////////////////////////////////
 ///////||     Redemande Si FiltreVille False   ||////////////////
/////////////////////////////////////////////////////////////////






let ErreurVille;

if(ResultatFiltreVille==false){
    e.preventDefault();
    ErreurVille=" Ville incorrect ! ";
}


if(ErreurVille){
  e.preventDefault();
  document.getElementById("ErreurVille").innerHTML=ErreurVille;
  var Adresse=document.getElementById('ville');
  document.getElementById("ville").value = document.getElementById("ville").defaultValue;
}

if(!ErreurVille){
  document.getElementById('ErreurVille').innerHTML="";
}




  /////////////////////////////////////////////////////////////////
 /////////||     Redemande Si FiltreMail False   ||/////////////////
/////////////////////////////////////////////////////////////////





let Erreuremail;

if(ResultatFiltreEmail==false){
    e.preventDefault();
    Erreuremail=" Email incorrect ! ";
}


if(Erreuremail){
  e.preventDefault();
  document.getElementById("ErreurEmail").innerHTML=Erreuremail;
  var Adresse=document.getElementById('email');
  document.getElementById("email").value = document.getElementById("email").defaultValue;
}

if(!Erreuremail){
  document.getElementById('ErreurEmail').innerHTML="";
}




})
