<!-- Exercice 9 : 
Ecrire un algorithme permettant d’ajouter un élément a la fin d’un tableau. -->

<?php
$tabElements = array("hello", "world");

$tabElements[] = readline("Entrez un élément :");

print_r($tabElements);
?>