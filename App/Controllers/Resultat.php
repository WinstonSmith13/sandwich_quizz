<?php

namespace SYRADEV\AutoEncheres\Controllers;


/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class Resultat extends Controller
{
    public function displayResultat() {
        return $this->render('layouts.default','templates.resultat');
    }
}