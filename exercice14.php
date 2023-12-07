<!-- Exercice 14 : 
Ecrire un algorithme permettant de trier par ordre décroissant les éléments d’un tableau.  -->

<?php
$tabElements = array();

$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

for ($i = 0; $i < $nombreElements; $i++) {
    $tabElements[] = intval(readline("Entrez un élément :"));
}

for ($i = 1; $i < $nombreElements - 1; $i++) {
        for ($j = $i+1; $i < $nombreElements; $i++) {
            if ($tabElements[$i] < $tabElements[$j]) {
                $decroissant = $tabElements[$i];
                $tabElements[$i] = $tabElements[$j];
                $tabElements[$j] = $decroissant;
                print_r($tabElements);
        }
    }
 }
 