<!-- Exercice 11 : 
Ecrire un algorithme permettant d’insérer un élément dans un tableau (au début, au milieu ou à la fin).  -->

<?php
$tabElements = array("hello", "world");

$nouvelElement = readline("Entrez un élément :");

$position = intval(readline("Position de l'élément :"));

array_splice($tabElements, $position, 0, $nouvelElement);

print_r($tabElements);
?>