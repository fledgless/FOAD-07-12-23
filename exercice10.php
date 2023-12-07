<!-- Exercice 10 : 
Ecrire un algorithme permettant de modifier un élément dans un tableau.  -->

<?php
$tabElements = array("hello", "world", "how", "are", "you");
print_r($tabElements);
$indiceElement = intval(readline("Entrez l'indice de l'élément que vous voulez modifier :"));
$nouvelleValeur = readline("Entrez la nouvelle valeur de l'élément :");
$tabElements[$indiceElement] = $nouvelleValeur;
print_r($tabElements);
?>