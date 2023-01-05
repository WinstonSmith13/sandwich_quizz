<?php

namespace WINSTON\SandwichQuizz\Controllers;

// Utilisation de la classe de manipulation de la base de données PdoDb.

use WINSTON\SandwichQuizz\Models\FichesModel;
use WINSTON\SandwichQuizz\Models\ScoresModel;
use WINSTON\SandwichQuizz\Utils\Database\PdoDb;



/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class Scores extends Controller
{
    public function display(): array|string
    {
        $arrayScorePseudo = [];
        $scores = PdoDb::getInstance()->request('scoreFinal', 'score', false);
        $pseudoSql = PdoDb::getInstance()->request('pseudo', 'user', false);
        /*$pseudoSql = 'SELECT `pseudo` FROM `user` JOIN score on userId = user.id';*/
        /*$pseudo = PdoDb::getInstance()->requete($pseudoSql,'fetch');*/

        array_push($arrayScorePseudo,$pseudoSql, $scores);

        return $this->render('layouts.default', 'templates.score', $arrayScorePseudo );
    }
    //fonction insertion dans la BDD


    public function saveScore($userId, $scoreFinal): int|string
    {
        $saveScoreObj = new ScoresModel($userId, $scoreFinal);
        PdoDb::getInstance()->inserer('score', $saveScoreObj);

        return true;


    }

}
