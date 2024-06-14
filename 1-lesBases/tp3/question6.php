<?php
//Déterminer à quel jour de la semaine correspondront tous les 1er Mai des années comprises entre 2024 et 2037.
//Si le jour est un samedi ou un dimanche, afficher le message « Désolé ! ».
//Si le jour est un vendredi ou un lundi afficher « Week-end prolongé ! » sinon « En semaine ».

for ($année = 2024; $année <= 2037; $année++) {
    $mayFirst = mktime(0, 0, 0, 5, 1, $année);
    $mayFirstDay = date("w", $mayFirst);

    $display = match($mayFirstDay) {
        "1", "5" => 'Week-end prolongé !',
        "0", "6" => 'Désolé !',
        default => 'En semaine',
    };

    echo "En $année : ".$display."<br>";
}
