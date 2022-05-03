var PU=prompt("Saisir le Prix Unitaire : ");
var QTECOM=prompt("Saisir la quantité commandée :");
var PAP=0;
var TotalApresRemise;
var FraisPort;
var TotalAvantRemise = ( PU * QTECOM);
document.write("Le Total avant remise est de :"+TotalAvantRemise+" euros.<br>");
if(TotalAvantRemise>=100 && TotalAvantRemise<=200){
    TotalApresRemise=TotalAvantRemise*0.95;
    document.write("La remise est de 5%.\nSoit (-"+(TotalAvantRemise*0.05)+"euros)<br>");
}
if(TotalAvantRemise>200){
    TotalApresRemise=TotalAvantRemise*0.90;
    document.write("La remise est de 10%. \nSoit (-"+(TotalAvantRemise*0.1)+"euros)<br>");
}
if(TotalAvantRemise<100){
    TotalApresRemise=TotalAvantRemise;
    document.write("Vous ne bénéficié pas de la remise.<br>");
}
document.write("Le Total apres remise est de :"+TotalApresRemise+" euros.<br>");

if(TotalApresRemise>500){
    FraisPort=0;
    document.write("Les frais de port sont offert pour toute commande apres remise superieur a 500 euros<br>");
}
if(TotalApresRemise<=500){
    FraisPort=TotalApresRemise*0.02;
    document.write("frais de port = "+FraisPort+"euros.<br>");
}
if(FraisPort<=6  && TotalApresRemise<=500){
    FraisPort=6;
    document.write("Les frais de port minimum sont de : "+FraisPort+"<br>");
}
document.write("Les frais de port sont de : "+FraisPort+" euros.<br>");

PAP=TotalApresRemise+FraisPort;
document.write("Le Prix Total à payer est de :"+PAP+" euros.<br>");
