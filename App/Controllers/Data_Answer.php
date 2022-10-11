<?php

namespace WINSTON\SandwichQuizz\Controllers;

use WINSTON\SandwichQuizz\Utils\Database\PdoDb;

class answer
{

    public function answerCheck($idAnswer): array|string
    {

        // Exécution de la requête
        $sql = 'SELECT answer_check FROM answer WHERE id = ' . $idAnswer;

        $answerCheck = PdoDb::getInstance()->requete($sql, 'fetch');


        return json_encode(['success' => true, 'content' => $answerCheck['answer_check']]);


    }
}