<?php
class CC extends compte {
   
  private $decouvert;

    public function __construct (float $solde, string $nom, string $prenom, float $decouvert) {
            $this -> decouvert = $decouvert;
            parent::__construct($solde,$nom,$prenom);
    }

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
        return '<h2>Compte Courant</h2><br> Mon decouvert autorisé est de : ' .$this-> decouvert.
        '<br>Nom du compte : '.$this-> nom.
        '<br>Prenom du compte : ' .$this->prenom.
        '<br>Le solde de votre compte est de : '.$this -> solde .
        '<br>';
      }

    /**
     * Get the value of decouvert
     */ 
    public function getDecouvert()
    {
        return $this->decouvert;
    }

    /**
     * Set the value of decouvert
     *
     * @return  self
     */ 
    public function setDecouvert($decouvert)
    {
        $this->decouvert = $decouvert;

        return $this;
    }
}

?>