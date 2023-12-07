<!-- Exercice 15 : 
Ecrire un algorithme permettant de fusionner les éléments de deux tableaux T1 et T2 dans un autre tableau T. 
N.B : 
N : nombre des éléments du tableau T1 
M : nombre des éléments du tableau T2  -->

<?php
$N = intval(readline("Veuillez saisir un nombre N d'éléments à saisir dans le premier tableau :"));

$M = intval(readline("Veuillez saisir un nombre M d'éléments à saisir dans le deuxième tableau :"));

$T1 = array();
$T2 = array();

if ($N === 0 || $M === 0) {
    echo "L'un des deux tableaux est vide.";
} else {
    for ($i = 0; $i < $N; $i++) {
        $T1[] = readline("Entrez un élément (tableau 1) :");
        $T[$i] = $T1[$i];
    }
    for ($i = 0; $i < $M; $i++) {
        $T2[] = readline("Entrez un élément (tableau 2) :");
        $T[$N + $i] = $T2[$i];
    }
}

print_r($T);

?>