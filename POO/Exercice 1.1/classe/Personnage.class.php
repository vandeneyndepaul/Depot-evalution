
<?php




class Personnage {
    Public $_Nom;
    Public $_Prenom;
    Public $_Age;
    Public $_Sex;

    public function __construct($_Nom,$_Prenom,$_Age,$_Sex) {
      
        $this->_Age=$_Age;
        $this->_Sex=$_Sex;
        $this->_Prenom=$_Prenom;
        $this->_Nom=$_Nom;
   }

    public function getNom(){
        return $this->_Nom;
        
    }

    public function getPrenom(){
        return $this->_Prenom;
    }

    public function getAge(){
        return $this->_Age;
    }

    public function getSex(){
        return $this->_Sex;
    }


   

    public function set_Personnage($_Age,$_Sex,$_Prenom,$_Nom){
         $this->_Age=$_Age;
         $this->_Sex=$_Sex;
         $this->_Prenom=$_Prenom;
         $this->_Nom=$_Nom;
    }

    public function ancieneté(

    )

}



