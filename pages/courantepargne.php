

<?php
include_once('classes/Voiture.php');
include_once('classes/compte.php');
include_once('classes/Product.php');
include_once('classes/compteCourant.php');
include_once('classes/compteEpargne.php');


/*
//variable = nouvel objet (Voiture) //instanciation implicite
$voiture = new Voiture (250,"Noire", 2); //<-- ce sont des arguments (250,noire,2)
/*on définit sa vitesse, couleur, acceleration
$voiture -> vitesseMax = 250;
$voiture -> couleur = "Noire";
$voiture -> acceleration = 2;*/
/*$voiture -> Demarrer();
$voiture -> Arreter ();
var_dump($voiture);
/*on appelle la fonction
$voiture -> Demarrer();
$voiture -> Arreter();
//nouvelle variable 
$car = new Voiture;
$car -> vitesseMax = 120;
$car -> couleur = "Violet";
$car -> acceleration = 5;
var_dump($car);
*/
/*echo '<h1>'.$voiture->get_VitesseMax().'<h1>';
$voiture -> set_couleur('verte');
echo '<h1>'.$voiture->set_Couleur('Rouge')->get_Couleur().'</h1>';//chainage de methods
echo $voiture; */

/*$compte = new Compte (3000, 1500, 'Courge', 'Barbara');
echo $compte -> Depot (500) -> Retrait (2000); //ne fonctionne que si on a mis 'return $this' dans la fonction
echo $compte;
echo $compte -> Depot (500);
echo $compte -> Retrait (200); */

$comptes = [
    [3000, 'Barb', 'b', 2.5, 500],
    [1000, 'Fernand', 'k', 2.5, 100],
    [2000, 'Yoko', 'Q', 2.5, 800]
];

/*$product = New product ("gilet", 15, 2, 20, "tissu sympathique");
echo $product->getPrixTax();
echo $product;*/

$compteCourant = [];
$compteEpargne = [];

foreach ($comptes as $p) {
    $compteCourant[] = new CC ($p[0],$p[1],$p[2],$p[4]); //respecter les arguments
    $compteEpargne[] = new CE ($p[0],$p[1],$p[2],$p[3]);
}

foreach ($compteCourant as $key=>$p) {
    echo '<a href="index.php?id='.$key.'">'.$p->getNom().'</a> ';
}
echo '<br><a href="index.php?page=courants&product=1">Tous les produits</a>';

if (isset($_GET['id'])) { //pour afficher dans barb, fernand, yoko
    echo '<h2>Les comptes courants</h2>';
 echo $compteCourant[$_GET['id']];
 echo '<h2>Les comptes epargnes</h2>';
 echo $compteEpargne[$_GET['id']];
}

if (isset($_GET['product'])) {
    echo '<h2>Les comptes courants</h2>';
    foreach ($compteCourant as $p) {
        echo $p;
    }    
    echo '<h2>Les comptes epargnes</h2>';
    foreach ($compteEpargne as $p) {
        echo $p;
    }  
} //pour afficher tous les produits

?>
