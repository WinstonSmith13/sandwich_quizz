<?php


use WINSTON\SandwichQuizz\Controllers\fiche;
use WINSTON\SandwichQuizz\Controllers\answer;
use WINSTON\SandwichQuizz\Controllers\Scores;
use WINSTON\SandwichQuizz\Controllers\Users;


// Démarrage du moteur de sessions PHP pour gérer les variables de $_SESSION.
session_start();

// On crée une variable qui mixte $_POST et $_GET
$_GP = array_merge($_POST, $_GET);


/*


/*
 * Gestion des appels avec GET.
 */
if (count($_GP) > 0) {
    if (isset($_SESSION['user']) && !empty($_SESSION['user']) && isset($_GET['jeu'])) {

        $_SESSION['score'] = 0;
        $affichageFiche = new fiche();
        echo $affichageFiche->listFiches();
    }

    if (isset($_GP['login']) && $_GP['login'] === '1') {
        $utilisateur = new Users();
        echo $utilisateur->login($_GP);
        exit();
    }

    if (isset($_GET['register'])) {
        $affichageRegister = new Users();
        echo $affichageRegister->registerDisplay();
    }
    if (isset($_GP['register']) && $_GP['register'] === '1') {
        $inscription = new Users();
        echo $inscription->register($_GP);
        exit();
    }
    if (isset($_GP['logout'])) {
        Users::logout();
        exit();
    }


    if (!empty($_GET['score']) ) {
        if ($_POST['scoreSave']  === '1') {
            if (isset($_SESSION['score']) && isset($_SESSION['user']['id'])) {
                $saveScore = new Scores();
                echo $saveScore->saveScore($_SESSION['user']['id'], $_SESSION['score']);
                $affichageScore = new Scores();
                echo $affichageScore->Display();
            }

        }
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
if (!empty($data)) {

    if (isset($data->idAnswer)) {
        $check = new answer();
        $_SESSION['score'] += $check->verificationAnswer($data->idAnswer);
        echo($_SESSION['score']);
        exit();
    }

    /* if (isset($data->idAnswer)){
         $check = new answer();
         echo ($check->answerCheck($data->idAnswer));
         exit();
     }*/
    /*  if (isset($data->id)) {
          $data_answer = new answer();
          $_SESSION['score'] += $data_answer->verificationAnswer($data->id);
          echo json_encode($_SESSION['score']);
          exit();
      }*/


}




