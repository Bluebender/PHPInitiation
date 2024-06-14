<?php
//Déclarer plusieurs personnages se lançant des KaméHaméHas.

require_once './Question3.php';

$moi = new Saiyan("Super Vincent", 100);
$Alize = new Cyborg("Super Alizé", 60);

echo $moi;
echo $Alize;
echo "<br>";
$moi->lanceKaméHaméHa($Alize);
$Alize->lanceKaméHaméHa($moi);
usleep(50000);
echo "<br>";
$moi->lanceKaméHaméHa($Alize);
$Alize->lanceKaméHaméHa($moi);
echo "<br>";

echo $moi;
echo $Alize;
