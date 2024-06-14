<?php
//Créer une autre classe représentant une ville mais sans les accesseurs et avec un constructeur à la place.
//Réaliser les mêmes opérations de création d'instances et d'affichage.

class Ville
{
    private $nom;
    private $departement;

    function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function __toString() : string
    {
        return "La ville " . $this->nom . " est dans le département " . $this->departement;
    }
}

$ploubezre = new Ville("Ploubezre", "Côtes d'armor");
echo $ploubezre;