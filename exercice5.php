<!-- Exercice 5 : 
Ecrire un algorithme permettant de chercher toutes les occurrences d’un élément dans un tableau.  -->

<?php
$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

$listeElements = array();

if ($nombreElements === 0) {
    echo "Le tableau est vide.";
} else {
    for ($i = 0; $i < $nombreElements; $i++) {
        $listeElements[] = readline("Entrez un élément :");
    }
}


?>