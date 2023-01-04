<?php

namespace WINSTON\SandwichQuizz\Models;

/*
 * Modèle Fiches
 */

class UsersModel
{

    public string $pseudo;
    public string $password;

    public function __construct($userInfos) {
        $this->pseudo = $userInfos['pseudo'];
        $this->password = password_hash($userInfos['password'], PASSWORD_DEFAULT);
        return $this;
    }
}
