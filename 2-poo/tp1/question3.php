<?php
//Créer une classe nommée VilleAvecRegion héritant de la classe Ville affichant « la ville X est dans le département Y de la région Z ».

class Ville
{
    private $nom;
    private $departement;

    function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    public function getDepartement()
    {
        return $this->departement;
    }

    public function setDepartement($departement): void
    {
        $this->departement = $departement;
    }

    public function __toString()
    {
        return "La ville " . $this->nom . " est dans le département " . $this->departement;
    }
}

class VilleAvecRegion extends Ville {

    private $region;

    function __construct($nom, $departement, $region){
        parent::__construct($nom, $departement);
        $this->region = $region;

    }
    public function __toString()
    {
        $retour = parent::__toString() . " de la région " . $this->region;
        return $retour;
    }
}

$perros = new VilleAvecRegion("Perros-Guirec", "Côtes d'armor", "Bretagne");
echo $perros;