<?php 

//classe d'objet (patron de conception)
class Voiture 
//encapsulation
{   //propriétés - quand 'private', on ne peut pas accéder à la propriété en dehors de la class
    //int : vitesse max en km/h
    private $vitesseMax;
    //string : couleur de la voiture
    private $couleur;
    //int : accel de 0 à 100 exprimé en secondes
    private $acceleration;
    //boolean true si démarrée, false si arrêtée
    private $estDemarre;

    // le nom de cette method est invariable (fonction magique/constructeur explicite) //instanciation avec un constructeur
    public function __construct(int $vitesseMax, string $couleur, int $acceleration) //forcément 'public'
    { //objet qui a appelé la method
        $this -> estDemarre = false; //la voiture est arrêtée
        $this -> vitesseMax = $vitesseMax;
        $this -> couleur = $couleur;
        $this -> acceleration = $acceleration;
    }

    //method magique 
    public function __toString() {
        return 
        'Vitesse max : ' .$this->vitesseMax.  ' km/h'.
        '<br>Couleur : '.$this->couleur.
        '<br>Accélération : '.$this-> acceleration;
    }

     //method 
    public function Demarrer ()
    {
        if ($this -> estDemarre === false) //voiture pas démarrée
        {   $this -> estDemarre = true; //voiture démarre
            echo "Voiture démarrée";

        }else {//voiture déjà en marche parce que 'estDemarre' = true
            echo "La voiture a déjà démarré"; //donc n'a pas besoin de démarrer à nouveau
        }

    }
    /**
     * Contructeur
     * @param int $vitesseMax vitesse max
     * @param string $couleur couleur
     * @param int $acceleration acceleration
     */

    //method
    public function Arreter ()
    { 
        if($this -> estDemarre === true)
        {
            $this -> estDemarre = false;
            echo "<br>Voiture arrêtée";       

        }else {
            echo "La voiture est déjà à l'arrêt";      
        }      
      
    }
    //getter - accesseur /accéder à une propriété (permet de rajouter des contraintes - 
    // sont là parce que les propriétés sont en 'private' donc cela permet d'acceder à la propriété en dehors de la class)
    public function get_VitesseMax () {
        return $this-> vitesseMax;
    }

    public function get_Couleur () {
        return $this-> couleur;
    }

    public function get_Acceleration () {
        return $this-> acceleration;
    }

 

    //setter - modificateur de propriété
    public function set_couleur (string $couleur) {
        $this-> couleur = $couleur;
        return $this;
    }
    public function set_vitesseMax (int $vitesseMax) {
        $this-> vitesseMax = $vitesseMax;
        return $this; //important à mettre pour que cela retourne bien l'objet avant le chainage avec un get
    }
    public function set_acceleration (int $acceleration) {
        $this-> acceleration = $acceleration;
        return $this;
    }
    
}
?>