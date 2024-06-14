<?php
//Créer une classe abstraite représentant une personne. Elle déclare les propriétés nom et prenom et un constructeur.
//Créer une classe Client dérivée de la classe Personne en y ajoutant la propriété adresse,
//          une méthode setcoord() et la méthode __toString() qui retourne les coordonnées complètes de la personne.
//Créer une classe Electeur dérivée de la même classe abstraite
//          et y ajouter deux propriétés bureau_de_vote et vote ainsi qu'une méthode avote() qui enregistre que la personne a voté dans la propriété vote.

abstract class Personne
{
    protected string $nom;
    protected string $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

class client extends Personne {
    private string $adresse;

    public function __construct(string $nom, string $prenom) {
        parent::__construct($nom, $prenom);
    }

    public function setCoordonnees(string $adresse) {
        $this->adresse = $adresse;
    }

    public function __toString(): string
    {
        $retour = " Prénom : $this->prenom<br>
                    Nom : $this->nom<br>
                    Adresse : $this->adresse<br>
                    ";
        return $retour;
    }
}

class Electeur extends Personne {
    private string $bureau_de_vote;
    private string $vote;

    public function __construct(string $nom, string $prenom, string $bureau_de_vote)
    {
        parent::__construct($nom, $prenom);
        $this->bureau_de_vote = $bureau_de_vote;
        $this->vote = "non";
    }

    public function getBureauDeVote(): string
    {
        return $this->bureau_de_vote;
    }

    public function isVote(): bool
    {
        return $this->vote;
    }

    public function avote () :void {
        $this->vote = "oui";
    }

    public function __toString(): string
    {
        $retour = " Prénom : $this->prenom<br>
                    Nom : $this->nom<br>
                    Bureau de vote : $this->bureau_de_vote<br>
                    A voté : $this->vote<br>
                    ";
        return $retour;
    }
}

$vincent = new client("Ollivier", "Vincent");
$vincent->setCoordonnees("8 Rue des Lys 35500 Rennes");
echo $vincent;

$nathanael = new Electeur("Ollivier", "Nathanaël", "Lannion");
echo $nathanael;
$nathanael->avote();
echo $nathanael;
