<?php

require_once 'src/Voiture.php';

//Instanciation

$voiture1 = new Voiture(brand:"Fiat", color:"rouge");
$voiture2 = new Voiture(brand:"Dacia", color:"bleu");

$voiture1->setCouleur(couleur:"vert");
echo $voiture1->getCouleur();
