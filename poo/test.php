<?php
include "personne.php";
//instancier la classe personne pour creer des objets

$ali = new Personne();
$ali->nom = "ALAMI";
$ali->prenom = "ALI";
$ali->age = 25;

$ali->afficher();
$ali->majorite();

$aya = new Personne();
$aya->nom = "ALAOUI";
$aya->prenom = "AYA";
$aya->age = 3;
$aya->afficher();
$aya->majorite();
