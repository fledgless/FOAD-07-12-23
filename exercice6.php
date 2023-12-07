<!-- Exercice 6 : 
Ecrire un algorithme permettant de chercher la première occurrence d’un élément dans un tableau.  -->

<?php
$listeElements = array();

$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

for ($i = 0; $i < $nombreElements; $i++) {
        $listeElements[] = readline("Entrez un élément :");
}


$element = intval(readline("Veuillez saisir l'élément recherché :"));
$i = 1;

$premiereOccurence = 0;

foreach ($listeElements as $cle => $valeur) {
    if ($listeElements[$i] == $element) {
        $existe = true;
        $premiereOccurence = $i;
    } else {
        $i += 1;      
    }  
}

if ($existe = true) {
        echo "La première occurence est $premiereOccurence.";
} else {
        echo "Cet élément n'est pas dans le tableau.";
}   