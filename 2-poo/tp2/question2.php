<?php
//Créer un trait KameHameHa possédant les attributs de type réel puissance et dernier lancé.
//Ce trait définie également une fonction permettant de lancé un KaméHaméHa.
//Elle prend en paramètre le personnage ciblé par le KaméHaméHa.
//Si le dernier tir a été réalisé moins d'une milliseconde avant, une exception est levé car le personnage n'a pas eu le temps de rassembler son énergie.
//La puissance du tir est calculée de la manière suivante :
//      après 101 milliseconde, le tir est au maximum de la puissance du personnage (valeur de l'attribut puissance).
//      entre 1 et 101 miliseconde c'est proportionnel à son temps de récupération.

abstract class Personnage
{
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    abstract public function blessure(float $puissance);

}

trait KameHameHaTrait
{
    private float $puissance;
    private float $dernierLance = 0;

    public function lanceKaméHaméHa(Personnage $personnage)
    {
        $delay = microtime(true) - $this->dernierLance;
//        echo $delay."<br>";

        if ($delay > 0.1) {
            $this->dernierLance = microtime(true);
            $personnage->blessure($this->puissance);
            echo "$personnage->nom a perdu $this->puissance points<br>";
        }
        elseif ($delay > 0.001 && $delay <= 0.1) {
            $this->dernierLance = microtime(true);
            $dommages = $this->puissance*$delay/100;
            $personnage->blessure($dommages);
            echo "$personnage->nom a perdu $dommages points<br>";
        }
        else {
            echo "Je suis trop rapide<br>";
            $this->dernierLance = microtime(true);
        }
    }
}