<!-- Exercice 10 : 
Ecrire un algorithme permettant de modifier un élément dans un tableau.  -->

<?php
$tabElements = array("hello", "world");

$tabElements[] = readline("Entrez un élément :");

print_r($tabElements);
?>