<?php

/*
 * Le routeur réceptionne des variables $_POST, $_GET ou AJAX fetch.
 * Son rôle unique sera de router l'application vers les contôleurs
 * qui  définissent la logique de l'application puis génèrerent les affichages.
 */
use WINSTON\SandwichQuizz\Controllers\fiche;
use WINSTON\SandwichQuizz\Controllers\answer;




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
    }
    if (isset($_GET['jeu'])) {
        $answerCheck = new fiche();
        echo $answerCheck->answerCheck();
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
   /* print_r($data);
    exit();*/
    if (isset($data->idAnswer)){
        $check = new answer();
        echo ($check-> answerCheck($data->idAnswer));
        exit();
    }

}




