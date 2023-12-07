<!-- Exercice 1 
Ecrire un algorithme permettant de saisir 5 réelles au clavier, les stocker dans un tableau, calculer leur somme et les afficher avec leur somme à l’écran.  -->

<?php
$listeReelles = array();

for ($i = 0; $i < 5; $i++) {
    $listeReelles[] = intval(readline("Entrez un élément :"));
    $somme = array_sum($listeReelles);
}

print_r($listeReelles) . PHP_EOL;
echo "La somme des éléments du tableau est $somme.";
?>


