<?php
//Calculer votre âge à l'instant actuel à la seconde près.

$dateJour = time();
var_dump($dateJour);

$dateNaissance = mktime(0, 0, 0, 9, 23, 1979);
var_dump($dateNaissance);

$age = $dateJour - $dateNaissance;
echo number_format($age, '0', '', ' ').' secondes';
