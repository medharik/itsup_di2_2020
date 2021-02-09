<?php
include "personne.php";
//instancier la classe personne pour creer des objets

$ali = new Personne("ALAMI", "ALI", 19, "homme");
// $ali->nom = "ALAMI";
// $ali->prenom = "ALI";
// $ali->age = 25;
// $ali->pri = 100;//erreur ?

$ali->afficher();
$ali->majorite();

$aya = new Personne("ALAOUI", "AYA", 28, "femme");
// $aya->nom = "ALAOUI";
// $aya->prenom = "AYA";
// $aya->age = 3;
$aya->setAge("test");
$aya->afficher();
$aya->majorite();
echo "age de aya est " . $aya->getAge();


$amine = new Personne("AMINI", "AMINE", 56);

$amine->afficher();
$amine->majorite();
// echo $amine->hf();
