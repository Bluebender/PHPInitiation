<?php
//Créer un tableau d'entiers variant de 1 à 63,
// puis à partir de celui ci un autre tableau de nombres variant de 0 à 6.3.
// Créer ensuite un tableau associatif dont les clés X varient de 0 à 6.3 et dont les valeurs sont sin(X).
// Afficher ce tableau dans un tableau HTML.


for ($i = 1; $i <= 63; $i++) {
    $tab[]=$i;
}
//var_dump($tab);
$tab2[]=0;
foreach ($tab as $element){
    $tab2[]=$element/10;
}
//var_dump($tab2);

foreach ($tab2 as $element){
    $tab3[(string)$element] = sin($element);
}
//var_dump($tab3);


echo "

<table>
    <thead>
        <th>X</th>
        <th>SinX</th>
    </thead>
    <tbody>
                
    </tbody>
</table>    
    
    
    ";



