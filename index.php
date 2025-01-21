<?php

require_once 'src/Voiture.php';

//Instanciation

$voiture1 = new Voiture(marque:"Fiat", couleur:"rouge");
$voiture2 = new Voiture(marque:"Dacia", couleur:"bleu");

var_dump($voiture1, $voiture2);