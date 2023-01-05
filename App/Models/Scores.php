<?php

namespace WINSTON\SandwichQuizz\Models;

/*
 * Modèle Scores
 */

class ScoresModel
{

    public int $userId;
    public int $scoreFinal;

    public function __construct($userId, $scoreFinal) {
        $this-> userId = $userId['userId'];
        $this->scoreFinal = $scoreFinal['scoreFinal'];
        return $this;
    }
}
