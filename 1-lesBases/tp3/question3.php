<?php
//D'après Wikipédia, « Pour des raisons d'habitudes, d'ancienneté du principe, ou de facilité de mise en œuvre, de nombreux développeurs de logiciels utilisent ou ont utilisé le classement selon l'ordre des codes dans le codage de caractères utilisé (par exemple ASCII ou UTF-8), nommé ordre lexicographique ».
//Le problème c'est que si on trie '1abc', '2def' et '10ghi', le 10 sera entre le 1 et le 2. Ce n'est pas l'ordre naturel.
//Trier un tableau suivant l'ordre naturel.

$listeCours = [
    '130 : Développement Web côté Serveur (Back-End) /PHP',
    '10 : Algorithmique /Pseudo-Code',
    '50 : Projet n°1 - Web /HTML&CSS + JS',
    '100 : Projet n°2 - Web /Java Spring Boot',
    '90 : Développement Web côté Serveur (Back-End) /Java Spring Boot ',
    '30 : Web Client /HTML&CSS',
    '80 : Notions Complémentaires /Java SE',
    '160 : CMS /WordPress',
    '150 : Projet n°3 - Web /Symfony',
    '110 : Analyse et Conception /UML + Oracle Data Modeler',
    '20 : Initiation à la Programmation /Java',
    '70 : Programmation Orientée Objet /Java',
    '40 : JavaScript initiation',
    '120 : JavaScript avancé + initiation Framework JS /Angular',
    '140 : Développement Web côté Serveur (Back-End) /Symfony',
    '60 : Langage SQL /SQL Server'
];

natsort($listeCours);
var_dump($listeCours);
