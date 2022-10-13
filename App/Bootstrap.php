
<!-- On route vers le controller "Accueil" pour l'affichage vers la vue accueil -->

<?php

use WINSTON\SandwichQuizz\Controllers\Accueil;

$accueil = new Accueil();
echo $accueil->display();
