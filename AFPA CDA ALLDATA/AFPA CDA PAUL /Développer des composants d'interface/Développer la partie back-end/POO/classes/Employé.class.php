<?php
class Employé{
    public $_Nom;
    public $_Prenom;
    public $_Date_Embauche_Entreprise;
    public $_Poste_Entreprise;
    public $_Salaire_K_Brut_Annuel;
    public $_Service_Employé;

public function __construct($_Nom,$_Prenom,$_Date_Embauche_Entreprise,$_Poste_Entreprise,$_Salaire_K_Brut_Annuel,$_Service_Employé)
{
    $this->_Nom=$_Nom;
    $this->_Prenom=$_Prenom;
    $this->_Date_Embauche_Entreprise=$_Date_Embauche_Entreprise;   
    $this->_Poste_Entreprise=$_Poste_Entreprise;
    $this->_Salaire_K_Brut_Annuel=$_Salaire_K_Brut_Annuel;
    $this->_Service_Employé=$_Service_Employé;
}


public function AnnéeAncienté($_Date_Embauche_Entreprise)
{
    
}

}
