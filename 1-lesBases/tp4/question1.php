<?php
//Écrire une fonction qui
//
//    prend en paramètre un nombre inférieur à 1000 ;
//    tire aléatoirement des nombres inférieurs à 1000 jusqu'à tirer la valeur passée en paramètre ;
//    retourne le nombre de tirages nécessaires.
//
//Pour tirer nombres aléatoires, PHP possède la fonction rand().

function tirage (int $nb1) : void {
    $nbAleatoire=rand(0, 1000);
    $compteur = 1;
    while ($nbAleatoire !== $nb1){
    $nbAleatoire = rand(0, 1000);
    $compteur++;
    }

    echo "Le nombre à trouver est : $nbAleatoire";
    echo "<br>";
    echo "Le nombre de tentatives est : $compteur";
}

tirage(rand(0, 1000));