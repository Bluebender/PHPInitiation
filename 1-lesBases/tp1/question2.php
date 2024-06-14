<?php
//Créer un bloc de code php initialisant une variable et une constante.
//Ces valeurs sont affichées deux fois à l'aide de la fonction echo comme ceci :
//La variable vaut 4240 et la constante Bonjour.
//La première fois en utiliant les guillemets ( " ) comme délimiteur de chaîne de caractères puis l'appostrophe ( ' ).

$var = 4240;
const MA_CONSTANTE = "Bonjour";
//define("MA_CONSTANTE", "Bonjour");

echo "La variable vaut $var et la constante ".MA_CONSTANTE.".";
echo "<br>";
echo 'La variable vaut '.$var.' et la constante '.MA_CONSTANTE.'.';