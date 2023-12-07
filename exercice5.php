<!-- Exercice 5 : 
Ecrire un algorithme permettant de chercher toutes les occurrences d’un élément dans un tableau.  -->

<?php
$listeElements = array();

$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

for ($i = 0; $i < $nombreElements; $i++) {
        $listeElements[] = readline("Entrez un élément :");
}

$element = intval(readline("Veuillez saisir l'élément recherché :"));
$i = 0;

foreach ($listeElements as $cle => $valeur) {
            if ($listeElements[$i] == $element) {
                echo $i . PHP_EOL;
                $i += 1;      
            } else {
                $i += 1;
            } 
    }