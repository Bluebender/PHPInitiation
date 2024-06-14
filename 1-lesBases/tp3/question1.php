<?php
//Transformer une chaîne écrite dans des casses différentes afin que chaque mot ait son premier caractère en majuscule.

$chaine = "Je nE suIs PaS Super Doué eN PHp à part PhP 8";

$nouvelleChaine = mb_convert_case($chaine, MB_CASE_TITLE, "utf-8");

var_dump($nouvelleChaine);