<?php
//Écrire une fonction prenant deux entiers en paramètres. Après l'appel à cette fonction, les deux valeurs doivent être ordonnées par ordre décroissant.


function ordoner(int $nb1, int $nb2) : void {
        if ($nb1 <= $nb2){
            echo "$nb1, $nb2<br>";
        }
        else{
            echo "$nb2, $nb1<br>";
        }
}

ordoner(5, 7);
ordoner(9, 7);