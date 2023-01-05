<?php

namespace WINSTON\SandwichQuizz\Controllers;

// Utilisation de la classe de manipulation de la base de données PdoDb.

use WINSTON\SandwichQuizz\Models\FichesModel;
use WINSTON\SandwichQuizz\Utils\Database\PdoDb;



/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class Scores extends Controller
{
    public function display(): array|string
    {
        $scores = PdoDb::getInstance()->request('*', 'score', false);


        return $this->render('layouts.default', 'templates.score', $scores);
    }

}
