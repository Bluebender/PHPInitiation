<?php
//Écrire une fonction calculant les n premières lignes du triangle de Pascal (n étant passé en paramètre). Il s'agit de la suite suivante :
//
//1
//1  1
//1  2  1
//1  3  3  1
//1  4  6  4  1
//1  5 10 10  5  1
//...
//
//La première colonne et la diagonale valent toujours 1 et chaque autre élément est égal à la somme de celui qui est au-dessus avec celui qui se trouve sur au-dessus à gauche
// (exemples 3=2+1 ou 6=3+3). la fonction retourne un tableau à deux dimensions contenant ces valeurs.
//Écrire une seconde fonction affichant ce triangle de Pascal.

function pascal(int $nb)
{
    $tab = [];
    $tab[0] = [1];
    $tab[1] = [1, 1];
    $tab[2] = [1, $tab[1][0] + $tab[1][1], 1];
    $tab[3] = [1, $tab[2][0] + $tab[2][1], $tab[2][1] + $tab[2][2], 1];
    $tab[4] = [1, $tab[3][0] + $tab[3][1], $tab[3][1] + $tab[3][2], $tab[3][2] + $tab[3][3], 1];

    var_dump($tab);
    $tab = [];

    for ($i = 1; $i <= $nb; $i++) {
        $tab[0] = [1];
        for ($j = 0; $j <= count($tab[1]); $j++) {
            $ligne[$i]  = [$tab[$i][$j]];
        }
        $tab[$i] = $ligne;
    }
}


pascal(5);