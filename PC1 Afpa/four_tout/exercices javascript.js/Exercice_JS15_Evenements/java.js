


var BouttonName = document.getElementById('envoie');
var Name = document.getElementById('Name');

    BouttonName.addEventListener('click', afficheNom)


    function afficheNom(){
        alert('Vous avez entrez : '+Name.value);
    }