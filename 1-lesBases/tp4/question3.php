<?php
//Écrire une fonction calculant le plus grand diviseur commun de deux nombres. L'agorithme d'Euclide permet de trouver ce nombre : Page wikipedia.

function euclide(int $nb1, int $nb2)
{
    do {
        $result = $nb1 % $nb2;
        $nb1 = $nb2;
        $nb2 = $result;
    } while ($result > 0);
        echo $nb1."<br>";
}


euclide(90, 12);