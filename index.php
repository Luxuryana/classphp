<?php
include_once('classes/Voiture.php');
include_once('classes/compte.php');
include_once('classes/Product.php');


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

$products =[
    ['a', 100, 2, 20,'aaa'],
    ['b', 500, 2.5, 5.5, 'bbb'],
    ['c', 700, 3.5, 15, 'ccc']
];
/*$product = New product ("gilet", 15, 2, 20, "tissu sympathique");
echo $product->getPrixTax();
echo $product;*/

$ObjectProduct =[];

foreach ($products as $p) {
    $objetProduct []= new Product ($p[0],$p[1],$p[2],$p[3],$p[4]);
}

foreach ($objetProduct as $key=>$p) {
    echo '<a href="index.php?id=' .$key. '">' .$p->getName(). '</a>';
}
echo '<br><a href=index.php?product=1>tous les produits</a>';

if (isset ($_GET['id'])) {
 echo $objetProduct[$_GET['id']];
}

