<?php
//Créer une expression rationnelle de validation d'une adresse HTTP.
//Le modèle doit répondre à la définition suivante :
//
//    Commencer par « www. »
//    Être suivi par des lettres puis éventuellement un point ou un tiret suivis d'un deuxième groupe de lettres
//    Se terminer par un point suivi de l'extension qui peut avoir de 2 à 4 caractères.
//
//Par exemple, les adresses www.machin.com ou www.machintruc.uk sont valides.


$motif = "#^(www.)[a-z]+([\-.][a-z]+)?(\.)[a-z]{2,4}$#i";

$urls = array('www.Machin.com', 'www.machinTruc.uk', 'ww.Machin.com', 'www.machin.bidule.com', 'WWW.MACHIN-B.COM', 'www.machin-truc-bidule.uk', 'ww.machin-truc.com', 'www.machin.bidule.chose');

foreach ($urls as $url) {
    if (preg_match($motif, $url)) {
        echo $url . ' est une URL valide<br>';
    } else {
        echo $url . ' <- NON VALIDE !<br>';
    }
}