<!-- Exercice 3 : 
Ecrire un algorithme permettant de calculer la somme, produit et moyenne des éléments d’un tableau.  -->

<?php
$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

$listeElements = array();

if ($nombreElements === 0) {
    echo "Le tableau est vide.";
} else {
    for ($i = 0; $i < $nombreElements; $i++) {
        $listeElements[] = intval(readline("Entrez un élément :"));
        $somme = array_sum($listeElements);
        $produit = array_product($listeElements);
        $moyenne = $somme / $nombreElements;
    }
    echo "La somme des éléments du tableau est $somme." . PHP_EOL;
    echo "Le produit des éléments du tableau est $produit.";
    echo "La moyenne des éléments du tableau est $moyenne.";
}


?>