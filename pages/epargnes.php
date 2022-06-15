<section class="CCCE">
    
<?php
include_once('classes/Voiture.php');
include_once('classes/compte.php');
include_once('classes/Product.php');
include_once('classes/compteCourant.php');
include_once ('classes/compteEpargne.php');
include_once("pages/BDD.php");

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


/*$product = New product ("gilet", 15, 2, 20, "tissu sympathique");
echo $product->getPrixTax();
echo $product;*/

$comptes = [
    [3000, 'Barb', 'Riviera', 2.5, 580],
    [1000, 'Fernand', 'Ramos', 2.5, 400],
    [2000, 'Yoko', 'Itsuki', 2.5, 800]
];


$compteEpargne = [];

foreach ($comptes as $p) {    
    $compteEpargne[] = new CE ($p[0],$p[1],$p[2],$p[3]);
}

?>

<h1>Comptes epargnes</h1>
<table class="table table-dark table-hover">
<thead>
<th>Nom</th>
<th>Prenom</th>
<th>Solde</th>
<th>Gain annuel</th>
</thead>
<?php
foreach ($compteEpargne as $p){
echo "<tr>";
echo "<td>".$p->getNom(). "</td><td>".$p->getPrenom()."</td><td>".$p->getSolde(). " €</td><td>".$p->getTia (). " €</td>";
echo "</tr>";
}
?>
</table>

</section>