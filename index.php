<?php

require_once 'src/Voiture.php';
require_once 'src/VoitureElectrique.php';

//Instanciation : création d'un nouvel objet

$voiture1 = new Voiture(brand:"Fiat", color:"rouge");  // Voiture c'est la classe, voiture1 c'est l'objet, brand et color sont les paramètres
$voiture2 = new Voiture(brand:"Dacia", color:"bleu");
$voiture3 = new Voiture(brand:"Mercedes", color:"blanc");
$date = new DateTime();   // DateTime c'est la classe dans la bibliothèque php, date c'est l'objet
$batterie = new VoitureElectrique(brand:"Tesla", color:"noir", autonomie:500, niveauBatterie:100, distance:80, vitesse:120, temps:""); // VoitureElectrique c'est la classe, batterie c'est l'objet



$voiture1->setCouleur("vert"); // On modifie la couleur de la voiture1
echo $date->format('d-m-Y H:i:s') . " <br><br> " . "Marque : " . $voiture1->getMarque() . " <br> " . "Couleur : " . $voiture1->getCouleur();  // On affiche les attributs de la classe Voiture1
?>

<br><br>

<?php
echo "Marque : " . $batterie->getMarque() . " <br> " . "Couleur : " . $batterie->getCouleur() . " <br> " .  "Autonomie : " . $batterie->getAutonomie() . " km" . " <br> " . "Niveau de la batterie : " . $batterie->getNiveauBatterie() . " %" . " <br> "; // On affiche les attributs de la classe VoitureElectrique



?>

<form method="post">
    <label for="distance">Distance à parcourir (km):</label>
    <input type="number" id="distance" name="distance" required;>
    &nbsp;&nbsp;&nbsp;
    <label for="temps">Vitesse (km):</label>
    <input type="number" id="temps" name="temps" required>
    <input type="submit" value="Calculer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['distance'], $_POST['temps'])) {
    $distance = $_POST['distance'];  
    $temps = $_POST['temps'];    

    // Vérifier si les entrées sont bien des nombres et que la vitesse n'est pas zéro
    if (is_numeric($distance) && is_numeric($temps) && $temps > 0) {
        $Ni_Battery_après_Dé = $batterie->seDeplacer($distance); 
        echo "Niveau de la batterie après un déplacement de $distance km : " . $Ni_Battery_après_Dé . " %" . "<br>";

        $temps_deplacement = $batterie->calculerTemps($distance, $temps);
        $interval = new DateInterval('PT' . round($temps_deplacement * 60) . 'M'); // Convertir en minutes
        $date->add($interval); 

        echo "Temps de déplacement pour une distance de $distance km à une vitesse de $temps km/h : " . $temps_deplacement . " heures" . "<br>";
        echo "Le temps d'arrivage est : " . $date->format('d-m-Y H:i:s');  
    } else {
        echo "Veuillez entrer des valeurs numériques valides et une vitesse supérieure à 0.";
    }
}
?>