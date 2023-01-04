<?php


use WINSTON\SandwichQuizz\Controllers\fiche;
use WINSTON\SandwichQuizz\Controllers\answer;
use WINSTON\SandwichQuizz\Controllers\Users;


// Démarrage du moteur de sessions PHP pour gérer les variables de $_SESSION.
session_start();

// On crée une variable qui mixte $_POST et $_GET
$_GP = array_merge($_POST, $_GET);


/*


/*
 * Gestion des appels avec GET.
 */
if(count($_GP)>0) {
    if (isset($_GET['jeu'])) {
        $affichageFiche = new fiche();
        echo $affichageFiche->listFiches();
    }

    if (isset($_GET['register'])) {
        $affichageRegister = new Users();
        echo $affichageRegister->registerDisplay();
    }
    if(isset($_GP['register']) && $_GP['register'] === '1') {
        $inscription = new Users();
        echo $inscription->register($_GP);
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

// On route vers le controller "Data_Answer" pour la récupération des données sur les réponses(answer_check).
if(!empty($data)) {

    if (isset($data->idAnswer)){
        $check = new answer();
        echo ($check->answerCheck($data->idAnswer));
        exit();
    }

}




