<?php

namespace WINSTON\SandwichQuizz\Models;

/*
 * Modèle Users
 */

class UsersModel
{

    public string $pseudo;
    public string $password;

    public function __construct($userInfos) {
        $this->pseudo = $userInfos['pseudo'];
        $this->password = md5($userInfos['password']);
        return $this;
    }
}
