<?php
//À quel jour de la semaine correspond le 25 décembre 2024 ? Afficher le résultat en français.

$noel = mktime(0, 0, 0, 12, 25, 2024);
$jourNoel = date("w", $noel);

switch ($jourNoel){
    case "1": echo "Lundi"; break;
    case "2": echo "Mardi"; break;
    case "3": echo "Mercredi"; break;
    case "4": echo "Jeudi"; break;
    case "5": echo "Vendredi"; break;
    case "6": echo "Samedi"; break;
    case "0": echo "Dimanche"; break;
}