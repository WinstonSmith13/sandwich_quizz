<?php

namespace SYRADEV\AutoEncheres\Controllers;

// On utilisera ici la classe de manipulation de la base de données PdoDb.
use stdClass;
use SYRADEV\AutoEncheres\Models\FichesModel;
use SYRADEV\AutoEncheres\Utils\Database\PdoDb;



/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class fiche extends Controller
{

    public function listFiches(): array|string
    {



        // Exécution de la requête
        $questions = PdoDb::getInstance()->request('*', 'question', false, '', '', true, 'RAND()', 'DESC', true, 6);
        // Transmission des annonce à la vue (Layout + template).
        $data = array();

        foreach ($questions as $question){

            $data[] = new FichesModel($question, PdoDb::getInstance()->request('*', 'answer', 'true', 'question_id', $question['id'], true, 'RAND()' ));
        }

        return $this->render('layouts.default','templates.fiche', $data);
    }



    public function ficheAffichage(): array|string
    {
        // Transmission des annonce à la vue (Layout + template).
        return $this->render('layouts.default','templates.fiche');
    }

   /* public function dataAnswerCheck(): array|string
    {

         // Exécution de la requête
        $questionsCheck = PdoDb::getInstance()->request('*', 'question', false, '', '', true, 'RAND()', 'DESC', true, 6);
        // Transmission des annonce à la vue (Layout + template).
        $data = array();

        foreach ($questionsCheck as $question){

            $data[] = new FichesModel($question, PdoDb::getInstance()->request('*', 'answer', 'true', 'question_id', $question['id'], true, 'RAND()' ));
        }



        return $this->render('layouts.default','templates.fiche', $data);
    }*/



}