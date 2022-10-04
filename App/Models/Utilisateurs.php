<?php

namespace SYRADEV\AutoEncheres\Models;

/*
 * Modèle Utilisateurs
 */
class UtilisateursModel
{
    private string $nom;
    private string $prenom;
    private string $email;
    private string $password;

    public function __construct($userInfos) {
        $this->nom = $userInfos['nom'];
        $this->prenom = $userInfos['prenom'];
        $this->email = $userInfos['email'];
        $this->password = md5($userInfos['password']);
        return $this;
    }

    public function __get($property) {
        return $this->$property;
    }

}