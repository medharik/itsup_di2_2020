<?php
// classe est un modele / type 
// exemples : 
// la classe Produit, Etudiant,Facture,...
//objet => instance de classe (clone, exemplaire de classe )
//hp, sony sont des objets de la classe Produit (on instancie la classe Produit pour creer des objets comme hp, sony, dell)
// Produit hp;
//Produit sony;
class Produit
{
    // attributs
    public $libelle;
    public $prix;
    public $qteStock;
    // les methodes (functions)
    function afficher()
    {
        echo "le libelle est " . $this->libelle . " , Prix est " . $this->prix . " DHS<br>";
    }

    function verifierStock()
    {
        if ($this->qteStock > 0) {
            echo "ce produit est en stock<br>";
        } else {
            echo "ce produit n'existe plus en stock<br>";
        }
    }
}
