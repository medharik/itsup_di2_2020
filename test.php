<?php
include "Produit.class.php";
// creer un objet de type Produit (classe)
//instance de la classe 
$hp = new Produit(); //on instancie la classe Produit pour creer un objet $hp
$dell = new Produit();

$hp->libelle = "hp s9";
$hp->prix = 9000;
$hp->qteStock = 0;
$hp->afficher();
$hp->verifierStock();

$dell->libelle = "dell d8";
$dell->prix = 8000;
$dell->afficher();
