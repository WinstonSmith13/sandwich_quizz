<?php


use WINSTON\SandwichQuizz\Controllers\fiche;
use WINSTON\SandwichQuizz\Controllers\answer;



// Démarrage du moteur de sessions PHP pour gérer les variables de $_SESSION.
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
    }
}



/*
 * Gestion des appels avec AJAX fetch.
 */

// On récupère le flux JSON posté.
$json = file_get_contents('php://input');
// On convertit le flux JSON en tableau d'objets.
$data = json_decode($json);


// On route vers le controller "Data_Answer" pour la récupération des données sur les réponses(answer_check).
if(!empty($data)) {

    if (isset($data->idAnswer)){
        $check = new answer();
        echo ($check->answerCheck($data->idAnswer));
        exit();
    }

}




