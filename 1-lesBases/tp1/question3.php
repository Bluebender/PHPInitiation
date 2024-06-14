<?php
//Donner la valeur booléenne des variables $a, $b, $c, $d, $e et $f.

$a = "0";
// False
$b = "TRUE";
// True
$c = FALSE;
// False
$d = ($a OR $b);
// True
$e = ($a AND $c);
// False
$f = ($a XOR $b);
// True

var_dump((bool) $a);
var_dump((bool) $b);
var_dump((bool) $c);
var_dump((bool) $d);
var_dump((bool) $e);
var_dump((bool) $f);