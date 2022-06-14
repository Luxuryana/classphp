<?php
class CE extends compte 
{
  private $tauxannuel;

  public function __construct (float $solde, string $nom, string $prenom, float $tauxannuel){
    $this-> TA = $tauxannuel;
    parent::__construct($solde,$nom,$prenom); //opérateur de portée "::"
  }
  
  public function getTia () 
  {  
      return $this -> solde * $this-> TA /100;       

  }

  public function getNewSolde ()
    
  {
      $TA = $this-> getTia ();
      return $this-> solde + $TA;
  }

  
  public function Retrait (float $retrait)         
  {
      if ($this -> solde <0) 
      {
          echo '<br>Vous ne pouvez pas retirer  ' .$retrait. '<br>';          

      }else {
          $this -> solde = $this->solde - $retrait;
      }
      return $this;
  }

  
 

  public function __toString() {
    return '<h2>Compte Epargne</h2><br> Je gagne par an : ' .$this-> getTia().
     '<br>Nom du compte : '.$this-> nom.
     '<br>Prenom du compte : ' .$this->prenom.
     '<br>Le solde de votre compte est de : '.$this -> solde .
     '<br>';
  }

  /**
   * Get the value of tauxannuel
   */ 
  public function getTauxannuel()
  {
    return $this->tauxannuel;
  }

  /**
   * Set the value of tauxannuel
   *
   * @return  self
   */ 
  public function setTauxannuel($tauxannuel)
  {
    $this->tauxannuel = $tauxannuel;

    return $this;
  }
}
?>