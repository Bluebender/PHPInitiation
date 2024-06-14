<?php
//Utiliser une boucle foreach pour lire les tableaux des exercices 1 et 2 et afficher les informations avec le format suivant :
//
//    Element dupont
//        élément 0 : gérard
//        élément 1 : paris
//        élément 2 : 67
//    Element badin
//        élément 0 : aurélie
//        élément 1 : nantes
//        élément 2 : 31


$ollivier[] = "Vincent";
$ollivier[] = "Montreuil";
$ollivier[] = 18;

$alize[] = "Claire";
$alize[] = "Rennes";
$alize[] = 21;

$tab1["Ollivier"] = $ollivier;
$tab1["Alizé"] = $alize;
//var_dump($tab1);

$ollivier2["prenom"] = "Vincent";
$ollivier2["ville"] = "Montreuil";
$ollivier2["age"] = 18;

$alize2["prenom"] = "Claire";
$alize2["ville"] = "Rennes";
$alize2["age"] = 21;

$tab2["Ollivier"] = $ollivier2;
$tab2["Alizé"] = $alize2;
//var_dump($tab2);


foreach ($tab1 as $key => $element) {
    echo "Element $key<br>";
    echo "Element 0 : $element[0]<br>";
    echo "Element 1 : $element[1]<br>";
    echo "Element 2 : $element[2]<br><br>";
}

foreach ($tab2 as $key => $element) {
    echo "Element ".$key."<br>";
    echo "Element 0 : ". $element["prenom"]."<br>";
    echo "Element 1 : ". $element["ville"]."<br>";
    echo "Element 2 : ". $element["age"]."<br>"."<br>";
}