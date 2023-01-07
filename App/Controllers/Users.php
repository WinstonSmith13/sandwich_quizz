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
        $connected = '';

        return $this->render('layouts.default', 'templates.login', $connected);
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
        $pseudo = $credentials['pseudo'];
        $password = $credentials['password'];

        // On créé une variable de retour pour la méthode login.
        $connected = '';

        // Requete de type SELECT * sur la table utilisateurs,
        // On applique à la clause WHERE la condition d'égalité du courriel et du mot de passe haché MD5.
        $sql = 'SELECT * FROM `user` WHERE `pseudo`="'. $pseudo .'" AND `password`="' .  md5($password) . '"';
        // On exécute la requête grace à la class PdoDb.
        $login = PdoDb::getInstance()->requete($sql, 'fetch');
        // Si la requête renvoie un utilisateur,
        // on stocke les informations de l'utilisateur dans un tableau de session.
        if (is_array($login) && !empty($login)) {
            $_SESSION['user']['id'] = $login['id'];
            $_SESSION['user']['pseudo'] = $login['pseudo'];
            $_SESSION['user']['password'] = $login['password'];

            // La connexion à l'application a réussi, on renvoie true.
            $connected = 'true';
            header('Location: /?accueil');
        } else {
            // La connexion à l'application a échoué, on renvoie false.
            $connected = 'false';
            header('Location: /?login');
        }
     $connecterJson =  json_encode(['connected' => $connected]);
        return $this->render('layouts.default', 'templates.accueil', $connected );
    }
    /*
    * Enregistre un utilisateur
    */
    public function register($newUser): bool|string
    {
        //On vérifie si le user n'existe pas déjà en base de données
        $req_user_exists = "SELECT pseudo FROM user WHERE `pseudo`='" . $newUser['pseudo'] . "'";
        $res_user_exists = PdoDb::getInstance()->requete($req_user_exists, 'fetch');
        if (is_array($res_user_exists) && !empty($res_user_exists)) {
            $userCreated = 'false';
        } else {
            $newUserObj = new UsersModel($newUser);
            PdoDb::getInstance()->inserer('user', $newUserObj);

            $userCreated = 'true';
        }

        return $this->render('layouts.default', 'templates.login', $userCreated);
    }
    // Déconnecte l'utilisateur.
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
