<?php
//Créer une expression rationnelle de validation d'un numéro de carte bancaire.
// Ce numéro est composé de seize chiffres éventuellement groupés par quatre.

$motif = "#^([0-9]{4}\s?){4}$#";

$cb = ["1234 5678 9012 3456", "1234 5678 912 3456", "1234567890123456"];

foreach ($cb as $num) {
    if (preg_match($motif, $num)) {
        echo $num . ' est un numéro de CB correct<br>';
    } else {
        echo $num . ' n\' est pas un numéro de CB correct<br>';
    }
}