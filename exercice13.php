<!-- Exercice 13 : 
Ecrire un algorithme permettant de trier par ordre croissant les éléments d’un tableau.  -->

<?php
$tabElements = array();

$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

for ($i = 0; $i < $nombreElements; $i++) {
    $tabElements[] = intval(readline("Entrez un élément :"));
}

for ($i = 1; $i < $nombreElements - 1; $i++) {
        for ($j = $i+1; $i < $nombreElements; $i++) {
            if ($tabElements[$i] > $tabElements[$j]) {
                $croissant = $tabElements[$i];
                $tabElements[$i] = $tabElements[$j];
                $tabElements[$j] = $croissant;
                print_r($tabElements);
        }
    }
 }
