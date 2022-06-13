<?php

class Compte 
{
    private $nom;
    private $prenom;
    private $solde;
    private $decouvert;

    public function __construct(float $solde, float $decouvert, string $nom, string $prenom)
    {   
        $this -> nom = $nom; 
        $this -> prenom = $prenom; 
        $this -> solde = $solde;               
        $this -> decouvert =$decouvert;

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

    public function Retrait (float $retrait)         
    {
        $solde = $this->solde + $this-> decouvert - $retrait; //solde virtuel

        if ($solde <0) 
        {
            echo '<br>Vous ne pouvez pas retirer  ' .$retrait. '<br>';          
 
        }else {
            $this -> solde = $this->solde - $retrait;
        }
        return $this;
    }

    public function __toString() {
        return $this-> nom.' '.$this-> prenom.'<br>Le solde de votre compte est de : '.$this -> solde .'<br>'.
        'Votre autorisation est de ' .$this-> decouvert;
    }

    
    public function getNom () {
        return $this -> nom;
    }

    public function getPrenom () {
        return $this -> prenom;
    } 

    //GETTER
    public function get_Solde () {
        return $this-> solde;
    }
    public function get_Decouvert () {
        return $this-> decouvert;
    }
    public function get_Nom () {
        return $this-> nom;
    }
    public function get_Prenom () {
        return $this-> prenom;
    }
   
    //SETTER
    public function set_Solde ($solde) {
        $this -> solde = $solde; 
    }
    public function set_Decouvert ($decouvert) {
        $this -> decouvert = $decouvert; 
    }
    public function set_Nom ($nom) {
        $this -> nom = $nom; 
    }
    public function set_Prenom ($prenom) {
        $this -> prenom = $prenom; 
    }
    
    
    

}



?>