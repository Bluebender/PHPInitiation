<?php
//Transformer un extrait d'une page Wikipédia en syntaxe WIKI en du texte au format HTML.
//La documentation de la syntaxe WIKI est disponible sur la page https://fr.wikipedia.org/wiki/Aide:Syntaxe.
//Ne se préoccuper que des éléments suivants :
//
//    Mises en forme (gras, italique)
//    Titres
//    Images (pour les très forts !)
//    Liens (pour les très forts également !)
//
//Exemple d'un extrait d'une page wikipedia (https://fr.wikipedia.org/wiki/PHP) :

$text =
"== Histoire ==
Le langage PHP fut créé en [[1994]] par [[Rasmus Lerdorf]] pour son [[site web]].
 C'était à l'origine une [[bibliothèque logicielle]] en [[C (langage)|C]] dont il se servait pour conserver une trace des visiteurs qui venaient consulter son [[Curriculum vitæ|CV]].
 Au fur et à mesure qu'il ajoutait de nouvelles fonctionnalités,
 Rasmus a transformé la bibliothèque en une implémentation capable de communiquer avec des bases de données et de créer des applications dynamiques
 et simples pour le [[World Wide Web|Web]]. Rasmus décida alors en [[1995]] de publier son code, pour que tout le monde puisse l'utiliser et en profiter.
 PHP s'appelait alors PHP/FI (pour '''''P'''ersonal '''H'''ome '''Pa'''ge Tools/'''F'''orm '''I'''nterpreter''). En [[1997]],
 deux étudiants, [[Andi Gutmans]] et [[Zeev Suraski]], redéveloppèrent le cœur de PHP/FI. Ce travail aboutit un an plus tard à la version 3 de PHP,
 devenu alors ''PHP: Hypertext Preprocessor''. Peu de temps après, Andi Gutmans et Zeev Suraski commencèrent la réécriture du moteur interne de PHP.
 Ce fut ce nouveau moteur, appelé ''[[Zend Engine]]'' — le mot ''Zend'' est la contraction de '''''Ze'''ev'' et ''A'''nd'''i'' — qui servit de base à la version 4 de PHP.

=== Utilisations ===
[[Image:Server-side websites programming languages.PNG|thumb|Répartition des langages de programmation côté serveur des sites web, le 28 avril 2016.]]
En [[2002]], PHP est utilisé par plus de 8 millions de sites Web à travers le monde, en [[2007]] par plus de 20 millions et en 2013 par plus de 244 millions.";





$text = preg_replace('#(={3})\w(={3})#', '<h3>$1</h3>', $text);
$text = preg_replace('#(==\s)#', '<h2>', $text);
$text = preg_replace('#(\s==)#', '</h2>', $text);



echo $text;
