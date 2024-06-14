<?php
//Créer une classe abstraite Personnage caractérisé par son nom.
// Lorsqu'une instance de personnage est utilisée en tant que chaîne de caractère c'est le nom du personnage qui est utilisé.
// Cette classe possède une méthode abstraite blessure() prenant en paramètre la valeur réelle correspondant à la puissance de la blessure.

abstract class Personnage {
    private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    abstract public function blessure(int $puissance);

}