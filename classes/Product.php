<?php

class Product {

    private $name;
    private $description;
    private $prixAchat;
    private $prixVente;
    private $taxe;

    function __construct (string $name, float $prixAchat, float $margeVoulue, float $taxe, string $description)
    {
        $this -> name = $name;
        $this -> prixAchat = $prixAchat;
        $this -> prixVente = $prixAchat*$margeVoulue;
        $this -> taxe = $taxe;
        $this -> description = $description;
    }

    public function __toString() 
    {
       return '<h1>' .$this -> name." <h1> " . '<div>Prix : '.$this ->getPrixTTC().  'TTC</div>'; //tjrs un return
    }

    public function getPrixMarge ()
    {
           return $this -> prixVente - $this->prixAchat;
    }

    public function getPrixTax () 
    {  
        return $this -> prixVente * $this -> taxe /100;       

    }

    public function getPrixTTC ()
    
    {
        $taxe = $this-> GetPrixTax ();
        return $this-> prixVente + $taxe;
    }

    public function GetName () {
        return $this -> name;
    }

    public function GetDescription () {
        return $this -> description;
    }

//GETTER
    public function get_name () {
        return $this-> name;
    }
    public function get_prixAchat () {
        return $this-> prixAchat;
    }
    public function get_prixVente () {
        return $this-> prixVente;
    }
    public function get_taxe () {
        return $this-> taxe;
    }
    public function get_description () {
        return $this-> description;
    }

//SETTER
    public function set_name (string $name) {
        $this-> name = $name;
        return $this;
    }
    public function set_prixAchat (string $prixAchat) {
        $this -> prixAchat = $prixAchat;
        return $this;
    }
    public function set_prixVente (string $prixVente) {
        $this -> prixVente = $prixVente;
        return $this;
    }
    public function set_taxe (string $taxe) {
        $this -> taxe = $taxe;
        return $this;
    }
    public function set_description (string $description) {
        $this -> taxe = $description;
        return $this;
    }
}

?>