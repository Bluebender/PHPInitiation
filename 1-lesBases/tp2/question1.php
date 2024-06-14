<?php
// Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes
// et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l'âge de la personne.

$table["Ollivier"][0] = "Vincent";
$table["Ollivier"][1] = "Montreuil";
$table["Ollivier"][2] = 18;

$table["Alizé"][0] = "Claire";
$table["Alizé"][1] = "Rennes";
$table["Alizé"][2] = 21;

var_dump($table);

$ollivier[] = "Vincent";
$ollivier[] = "Montreuil";
$ollivier[] = 18;

$alize[] = "Claire";
$alize[] = "Rennes";
$alize[] = 21;

$tab["Ollivier"] = $ollivier;
$tab["Alizé"] = $alize;

var_dump($tab);
