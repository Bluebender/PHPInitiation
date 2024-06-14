<?php
//Formater l'affichage d'une suite de chaînes contenant des noms et prénoms en respectant les critères suivants :
// un prénom et un nom par ligne, affichés sur 20 caractères chacun; toutes les initiales des mots doivent être alignées verticalement.

$chaine = "Vincent Ollivier, Tom Pouce, Indiana Jones";

$tab = explode(',', $chaine);
foreach ($tab as $element) {
    $element = trim($element);
    $personnes[] = explode(' ', trim($element));
}
echo 'tab1 = ';
var_dump($tab);
echo 'tab2 = ';
var_dump($personnes);

foreach ($personnes as $p) {
    echo '<pre style="font-family: courier">';
    printf("%-20s%-20s<br>", $p[0], $p[1]);
}
