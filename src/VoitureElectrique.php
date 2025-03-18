<?php
// Ce code est un exemple de classe VoitureElectrique qui hérite de la classe Voiture.
// La classe VoitureElectrique a un attribut supplémentaire $autonomie et un attribut $niveauBatterie.
class VoitureElectrique extends Voiture {
    //Attributs
    private $autonomie; // Autonomie de la voiture électrique en km (distance maximale que la voiture peut parcourir avec une batterie pleine)
    private $niveauBatterie; // Niveau de la batterie en %  (100% = batterie pleine)
    private $distance;  // Distance parcourue en km par la voiture électrique
    private $vitesse; // Vitesse de la voiture électrique en km/h
    private $temps; // Temps de déplacement en heures

    //Méthodes
    public function __construct($brand, $color, $autonomie, $niveauBatterie, $distance, $vitesse, $temps)
    {
        parent::__construct($brand, $color);    // Appel du constructeur de la classe mère Voiture avec les paramètres $brand et $color
        $this->autonomie = $autonomie; // Initialisation de l'attribut $autonomie de la classe VoitureElectrique avec la valeur passée en paramètre $autonomie 
        $this->niveauBatterie = 100; // Initialisation de l'attribut $niveauBatterie de la classe VoitureElectrique avec la valeur passée en paramètre $niveauBatterie
        $this->distance = $distance; // Initialisation de l'attribut $distance de la classe VoitureElectrique avec la valeur passée en paramètre $distance
        $this->vitesse = $vitesse; // Initialisation de l'attribut $vitesse de la classe VoitureElectrique avec la valeur passée en paramètre $vitesse
        $this->temps = $temps; // Initialisation de l'attribut $temps de la classe VoitureElectrique avec la valeur passée en paramètre $temps
    }
    // GET / SET
    public function getAutonomie()
    {
        return $this->autonomie;
    }
    // LECTURE (GET)
    public function getNiveauBatterie()
    {
        return $this->niveauBatterie;
    }
    public function getVitesse()
    {
        return $this->vitesse;
    }
    public function getTemps()
    {
        return $this->temps;
    }
    // L'ECRITURE (SET)
    public function setNiveauBatterie($niveauBatterie)
    {
        $this->niveauBatterie = $niveauBatterie;
    }
    public function setVitesse()
    {
        return $this->vitesse;
    }
    public function setTemps()
    {
        return $this->temps;
    }
    // Méthode seDeplacer qui permet de déplacer la voiture électrique et de diminuer le niveau de la batterie en fonction de la distance parcourue
    public function seDeplacer($distance)
    {
         $this->niveauBatterie -= $distance / $this->autonomie * 100; // On calcule le niveau de la batterie après le déplacement
         return $this->niveauBatterie; // On retourne le niveau de la batterie après le déplacement
    }

    public function calculerTemps($distance, $vitesse)
    {
        $this->temps = $distance / $vitesse; // On calcule le temps de déplacement en heures
        return $this->temps; // On retourne le temps de déplacement en heures
    }

}