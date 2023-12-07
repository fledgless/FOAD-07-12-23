<!-- Exercice 8 : 
Ecrire un algorithme permettant de calculer le nombre de fois pour lesquelles un élément apparait dans un tableau.  -->

<?php
$listeElements = array();

$nombreElements = intval(readline("Veuillez saisir un nombre N d'éléments à saisir :"));

for ($i = 0; $i < $nombreElements; $i++) {
        $listeElements[] = readline("Entrez un élément :");
}

$element = intval(readline("Veuillez saisir l'élément recherché :"));
$fois = 0;
$i = 0;

foreach ($listeElements as $cle => $valeur) {
            if ($listeElements[$i] == $element) {
                $fois += 1;
                $i += 1;      
            } else {
                $i += 1;
            } 
    }

if ($fois > 0) {
        echo "Cet élément apparaît $fois fois dans le tableau.";
    } else {
        echo "Cet élément n'est pas dans le tableau.";
    }   