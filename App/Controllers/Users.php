<?php

namespace WINSTON\SandwichQuizz\Controllers;

// Utilisation de la classe de manipulation de la base de données PdoDb.


use WINSTON\SandwichQuizz\Models\UsersModel;
use WINSTON\SandwichQuizz\Utils\Database\PdoDb;



/*
 *  Classe de gestion des annonces étendue depuis la classe Controller.
 */
class Users extends Controller
{

    /*
     * Afffiche le formulaire de connexion
     */
    public function authDisplay(): array|string
    {
        return $this->render('layouts.default', 'templates.login');
    }

    /*
    * Afffiche le formulaire d'enregistrement d'un utilisateur
    */
    public function registerDisplay(): array|string
    {
        return $this->render('layouts.default', 'templates.register');
    }




    /*
    * Authentifie un utilisateur
    */
    public function login($credentials): bool|string
    {


    }


    /*
    * Enregistre un utilisateur
    */

    public function register($newUser): bool|string
    {


        $newUserId = 0;

        //On vérifie si le user n'existe pas déjà en base de données
        $req_user_exists = "SELECT pseudo FROM user WHERE `pseudo`='" . $newUser['pseudo'] . "'";
        $res_user_exists = PdoDb::getInstance()->requete($req_user_exists, 'fetch');
        if (is_array($res_user_exists) && !empty($res_user_exists)) {
            $userCreated = false;
        } else {
            $newUserObj = new UsersModel($newUser);
            PdoDb::getInstance()->inserer('user', $newUserObj);
            $newUserId = PdoDb::getInstance()->dernierIndex();
            $userCreated = true;
        }
        return $this->render('layouts.default', 'templates.login');
    }


    // Déconnecte l'utilisateur.
    public static function logout()
    {
        // On détruit les variables de session.
        session_unset();
        // On détruit la session.
        session_destroy();
        // On redirige le visiteur vers la page d'accueil.
        header('location:/');
    }
}
