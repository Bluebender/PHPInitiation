<?php
//Écrire une classe représentant une ville. Elle doit avoir les méthodes setNom() et setDépartement() et une méthode affichant « la ville X est dans le département Y ».
// Cette classe n'a pas de constructeur.
//Créer des instances de Ville, affecter leurs propriétés et utiliser la méthode d'affichage.

class Ville
{
    private string $nom;
    private string $departement;

    public function setNom($nom): self
    {
        return $this->nom = $nom;
    }

    public function setDepartement($departement) : self
    {
        return $this->departement = $departement;
    }

    public function __toString() : string
    {
        return "La ville " . $this->nom . " est dans le département " . $this->departement;
    }
}

$lannion = new Ville();
$lannion->setNom("Lannion");
$lannion->setDepartement("Côtes d'armor");
echo $lannion;