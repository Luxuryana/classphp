<?php

abstract class Compte
{
    protected $nom;
    protected $prenom;
    protected $solde;
   
    protected function __construct (float $solde, string $nom, string $prenom) {
        $this -> nom = $nom; 
        $this -> prenom = $prenom; 
        $this -> solde = $solde; 
}


//Dépot d'argent
    public function Depot (float $depot)
    { if ($depot>0){
        $this-> solde = $this-> solde + $depot;
      
    } else {
        echo "Le montant du dépot doit être supérieur à 0 <br>";
    }
    return $this;
    }
    

    //Retrait d'argent dans la limite du découvert autorisé

    abstract public function Retrait (float $retrait)  ;       


    public function __toString() {
        return $this-> TA.' '.$this-> prenom.'<br>Le solde de votre compte est de : '.$this -> solde .'<br>';
      }

    //GETTER
    public function getSolde () {
        return $this-> solde;
    }  
    public function getNom () {
        return $this -> nom;
    }
    public function getPrenom () {
        return $this -> prenom;
    } 
   
    //SETTER
    public function setSolde ($solde) {
        $this -> solde = $solde; 
    }    
    public function setNom ($nom) {
        $this -> nom = $nom; 
    }
    public function setPrenom ($prenom) {
        $this -> prenom = $prenom; 
    }
    
    

}



?>