<!-- Exercice 1 
Ecrire un algorithme permettant de saisir 5 réelles au clavier, les stocker dans un tableau, calculer leur somme et les afficher avec leur somme à l’écran.  -->

<?php
$nombre1 = intval(readline("Entrez une première réelle :"));
$nombre2 = intval(readline("Entrez une deuxième réelle :"));
$nombre3 = intval(readline("Entrez une troisième réelle :"));
$nombre4 = intval(readline("Entrez une quatrième réelle :"));
$nombre5 = intval(readline("Entrez une cinquième réelle :"));

$nombres = array($nombre1, $nombre2, $nombre3, $nombre4, $nombre5);

$somme = $nombre1 + $nombre2 + $nombre3 + $nombre4 + $nombre5;

print_r($nombres) . PHP_EOL;
echo "La somme des éléments du tableau est $somme";
?>