<!-- Exercice 7 : 
Ecrire un algorithme permettant de chercher la dernière occurrence d’un élément dans un tableau. -->

<?php
$listeElements = array();
$derniereOccurence = 0;

$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

for ($i = 0; $i < $nombreElements; $i++) {
        $listeElements[] = readline("Entrez un élément :");
}

$element = intval(readline("Veuillez saisir l'élément recherché :"));
$i = $nombreElements - 1;

foreach ($listeElements as $cle => $valeur) {
    if ($listeElements[$i] == $element) {
        $existe = true;
        $derniereOccurence = $i;
    } else {
        $i -= 1;      
    }
}   

if ($existe = true) {
        echo "La dernière occurence est $derniereOccurence.";
} else {
        echo "Cet élément n'est pas dans le tableau.";
}   
       