<?php
//Créer deux classes héritant de Personnage : Saiyan et Cyborg.
// Ils sont caractérisés par une valeur réelle correspondant aux points de vie du personnage.
// La méthode blessure() retire aux points de vie la puissance de la blessure subie.
// Si un personnage n'a plus de point de vie, la méthode lève une exception.
// Les cyborgs ont une armure qui fait qu'ils ont une chance sur deux de ne finalement pas être touché.

require_once './Question2.php';

class Saiyan extends Personnage
{
    use KameHameHaTrait;
    private float $lifePoints;

    public function __construct(string $nom, float $lifePoints)
    {
        parent::__construct($nom);
        $this->puissance = 20;
        $this->lifePoints = $lifePoints;
    }

    public function blessure(float $puissance)
    {
        $this->lifePoints -= $puissance;
        if ($this->lifePoints < 0) {
            echo "$this->nom est mort !";
        }
    }

    public function __toString(): string
    {
        return "Je suis $this->nom ! et il me reste $this->lifePoints points de vie.<br>";
    }
}


class Cyborg extends Personnage
{
    use KameHameHaTrait;
    private float $lifePoints;

    public function __construct(string $nom, float $lifePoints)
    {
        parent::__construct($nom);
        $this->puissance = 5;
        $this->lifePoints = $lifePoints;
    }

    public function blessure(float $puissance)
    {
        $chance = rand(1, 2);
        switch ($chance) {
            case 1:
                $this->lifePoints -= $puissance;
                if ($this->lifePoints < 0) {
                    echo "$this->nom est mort !";
                }
                break;
            case 2:
                echo "Quelle chance, votre armure vous a protégé !<br>";
        }
    }
    public function __toString(): string
    {
        return "Je suis $this->nom ! et il me reste $this->lifePoints points de vie.<br>";
    }

}