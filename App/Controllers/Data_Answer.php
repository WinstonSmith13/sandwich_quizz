<?php

namespace SYRADEV\AutoEncheres\Controllers;

use SYRADEV\AutoEncheres\Utils\Database\PdoDb;

class answer
{

    public function answerCheck($idAnswer): array|string
    {

        // Exécution de la requête
        $sql = 'SELECT answer_check FROM answer WHERE id = ' . $idAnswer;

        $answerCheck = PdoDb::getInstance()->requete($sql, 'fetch');


        return json_encode(['success' => true, 'content' => $answerCheck]);


    }
}