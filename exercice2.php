<!-- Exercice 2 : 
Ecrire un algorithme permettant de saisir et d’afficher N éléments d’un tableau.  -->

<?php
$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

$listeElements = array();

for ($i = 0; $i < $nombreElements; $i++) {
    $listeElements[] = readline("Entrez un élément :");
}

print_r($listeElements);
?>