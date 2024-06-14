<?php
//Créer un tableau contenant une liste d'adresses e-mail.
// Extraire le nom de serveur de ces données,
// puis réaliser des statistiques sur les occurrences de chaque fournisseur d'accès.

$mails[] = "vincent@mail.com";
$mails[] = "alize@laposte.com";
$mails[] = "paul@google.com";
$mails[] = "max@laposte.com";
$mails[] = "tom@google.com";
$mails[] = "jean@google.com";

foreach ($mails as $mail) {
    $adresse = explode("@", $mail)[1];
    if(isset($serveurNames[$adresse])){
        $serveurNames[$adresse] ++;
    }else{
        $serveurNames[$adresse] =1;
    }
}
var_dump($serveurNames);

