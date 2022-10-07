<?php

namespace SYRADEV\AutoEncheres\Controllers;

// On utilisera ici la classe de manipulation de la base de données PdoDb.

/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class Accueil extends Controller
{
    public function display() {
        return $this->render('layouts.default','templates.accueil');
    }
}