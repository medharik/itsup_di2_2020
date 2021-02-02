<?php
class Personne
{
    // les attributs 
    public $nom;
    public $prenom;
    public $age;

    //les methodes / operations /message/ fonction/ programme
    function afficher()
    {
        echo  "le nom est " . $this->nom . ", prenom est " . $this->prenom . ", age est " . $this->age . "<br>";
    }
    function majorite()
    {
        if ($this->age > 18) {
            echo "majeur<br>";
        } else {
            echo "mineur<br>";
        }
    }
}
