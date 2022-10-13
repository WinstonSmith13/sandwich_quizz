<?php

namespace WINSTON\SandwichQuizz\Controllers;

// Utilisation de la classe de manipulation de la base de données PdoDb.

use WINSTON\SandwichQuizz\Models\FichesModel;
use WINSTON\SandwichQuizz\Utils\Database\PdoDb;



/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class fiche extends Controller
{
    public function listFiches(): array|string
    {
        // Exécution de la requête pour récupérer les questions avec une limitation de 6 questions et aléatoirement.
        $questions = PdoDb::getInstance()->request('*', 'question', false, '', '', true, 'RAND()', 'DESC', true, 6);

        $data = array();

        foreach ($questions as $question){
            // Exécution de la requête pour récupérer les réponses pour chaques questions.
            $data[] = new FichesModel($question, PdoDb::getInstance()->request('*', 'answer', 'true', 'question_id', $question['id'], true, 'RAND()' ));
        }
        //Envoi des données vers la vue Fiche.
        return $this->render('layouts.default','templates.fiche', $data);
    }
}