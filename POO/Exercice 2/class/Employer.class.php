<?php

class Employer{

   Private $_Nom;
   Private $_Prénom;
   Private $_Date_embauche;
   Private $_Fonction_Poste;
   Private $_Salaire;
   Private $_Service_de_employé;
   Public static $_date;


Public function __construct($_Nom,$_Prénom,$_Date_embauche,$_Fonction_Poste,$_Salaire,$_Service_de_employé){
    $this->_Nom=$_Nom;
    $this->_Prénom=$_Prénom;
    $this->_Date_embauche=$_Date_embauche;
    $this->_Fonction_Poste=$_Fonction_Poste;
    $this->_Salaire=$_Salaire;
    $this->_Service_de_employé=$_Service_de_employé;
    $this->$_date;


    
}
public function getNom(){
    return $this->_Nom;
    
}

public function getPrénom(){
    return $this->_Prénom;
}

public function getDate_embauche(){
    return $this->_Date_embauche;
}

public function getFonction_Poste(){
    return $this->_Fonction_Post;
}

public function getSalaire(){
    return $this->_Salaire;
}

public function getService_de_employé(){
    return $this->_Service_de_employé;
}


public function set_Employer($_Nom,$_Prénom,$_Date_embauche,$_Fonction_Poste,$_Salaire,$_Service_de_employé){
    $this->_Nom;
    $this->_Prénom;
    $this->_Date_embauche;
    $this->_Fonction_Post;
    $this->_Salaire;
    $this->_Service_de_employé;
    }

public function Année_Ancienté_Employer($_date){
    
    
    $interval = abs($this->_Date_embauche - $_date);
   
    return $interval;


}
// public function Calcul_Prime(){
    
//     (0.05*getSalaire)+0.02*
//     //     $interval = date_diff($date, $_Date_embauche);
       
//     //     return $interval;
    
    
//     // }
}


