<?php
include_once('classes/Voiture.php');
include_once('classes/compte.php');


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

$compte = new Compte (3000, 1500, 'Courge', 'Barbara');
echo $compte -> Depot (500) -> Retrait (2000); //ne fonctionne que si on a mis 'return $this' dans la fonction
echo $compte;
echo $compte -> Depot (500);
echo $compte -> Retrait (200);
