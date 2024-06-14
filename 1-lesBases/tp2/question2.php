<?php
//Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes
// et les valeurs des tableaux associatifs dont les clés sont
// le prénom, la ville de résidence et l'âge de la personne avec une série de valeurs associées.


$ollivier["prenom"] = "Vincent";
$ollivier["ville"] = "Montreuil";
$ollivier["age"] = 18;

$alize["prenom"] = "Claire";
$alize["ville"] = "Rennes";
$alize["age"] = 21;

$tab["Ollivier"] = $ollivier;
$tab["Alizé"] = $alize;

var_dump($tab);
