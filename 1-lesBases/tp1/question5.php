<?php
//Donner le type et la valeur de chacune des variables
// pendant et à la fin du script suivant
// et vérifier ensuite vos réponses en modifiant le script.
// Modifier également le script pour ne plus avoir de messages d'avertissement dûs à des transtypages implicites.

$x = "PHP8";                        => "PHP8"
$a = &$x;                           => "PHP8"
$y = " 8 eme version de PHP";       => "8 eme version de PHP"
$z = $y * 10;                       => 80
$x = $y * $y;                       => 64
