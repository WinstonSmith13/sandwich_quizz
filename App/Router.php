<?php

/*
 * Le routeur réceptionne des variables $_POST, $_GET ou AJAX fetch.
 * Son rôle unique sera de router l'application vers les contôleurs
 * qui  définissent la logique de l'application puis génèrerent les affichages.
 */
use SYRADEV\AutoEncheres\Controllers\fiche;
use SYRADEV\AutoEncheres\Controllers\Resultat;

// On démarre le moteur de sessions PHP pour gérer les variables de $_SESSION.
session_start();


/*
 * Gestion des appels avec POST.
 */
if(!empty($_POST)) {


}


/*
 * Gestion des appels avec GET.
 */
if(!empty($_GET)) {
    if (isset($_GET['jeu'])) {
        $affichageFiche = new fiche();
        echo $affichageFiche->listFiches();
        exit();
    }
    if (isset($_GET['resultat'])) {
        $affResultat = new Resultat();
        echo $affResultat->displayResultat();
        exit();
    }
}



/*
 * Gestion des appels avec AJAX fetch.
 */

// On récupère le flux JSON posté.
$json = file_get_contents('php://input');
// On convertit le flux JSON en tableau d'objets.
$data = json_decode($json);
// On route vers le controller "Annonces" et la méthode d'affichage d'une annonce "annonceDisplay".
if(!empty($data)) {

}




