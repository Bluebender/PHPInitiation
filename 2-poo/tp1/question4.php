<?php
//Modifier la classe Ville avec constructeur pour que l'on puisse connaître la ville ayant le nom le plus long.

class Ville
{
    private $nom;
    private $departement;

    private static $villePlusLongue = "";

    function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;

        if(strlen($this->nom) > strlen(static::$villePlusLongue)){
            static::$villePlusLongue = $this->nom;
        }
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

    public static function getVillePlusLongue(): string
    {
        return self::$villePlusLongue;
    }

    public function __toString()
    {
        return "La ville " . $this->nom . " est dans le département " . $this->departement . "<br>";
    }

}

$lannion = new Ville("Lannion", "Côtes d'armor");
echo $lannion;
echo "La ville la plus longue est : " . $lannion->getVillePlusLongue();
echo "<br>";
$perros = new Ville("Perros-Guirec", "Côtes d'armor");
echo $perros;
echo "La ville la plus longue est : " . $perros->getVillePlusLongue();
echo "<br>";
$Ploubezre = new Ville("Ploubezre", "Côtes d'armor");
echo $Ploubezre;
echo "La ville la plus longue est : " . $Ploubezre->getVillePlusLongue();
echo "<br>";
