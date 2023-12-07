<!-- Exercice 4 : 
Ecrire un algorithme permettant de consulter un élément d’un tableau.  -->

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

$indice = intval(readline("Entrez l'indice de l'élément :"));

if ($indice >= $nombreElements){
    echo "Cet élément n'existe pas.";
} else {
    echo $listeElements[$indice];
}
?>