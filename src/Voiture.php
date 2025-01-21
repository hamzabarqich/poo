<?php

class Voiture {
    //Attributs
    private $marque;
    private $couleur;

    //Méthodes
    public function __construct($marque, $couleur)
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
    }

    public function __toString()
    {
        return "Voiture : " . $this->marque . " , Couleur: " . $this->couleur;
    }
    
}