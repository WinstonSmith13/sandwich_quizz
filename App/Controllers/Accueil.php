<?php

namespace WINSTON\SandwichQuizz\Controllers;

// On utilisera ici la classe de manipulation de la base de données PdoDb.

/*
 *  Classe accueil étendue depuis la classe Controller.
 */

class Accueil extends Controller
{
    public function display(): array|string
    {
        return $this->render('layouts.default', 'templates.accueil');
    }
}