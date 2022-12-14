<?php

namespace WINSTON\SandwichQuizz\Controllers;

use WINSTON\SandwichQuizz\Utils\Database\PdoDb;

class answer
{

    public function answerCheck($idAnswer): array|string
    {

        // Exécution de la requête pour la récupération de la valeur AnswerCheck de la réponse choisie.
        $sql = 'SELECT answer_check FROM answer WHERE id = ' . $idAnswer;

        $answerCheck = PdoDb::getInstance()->requete($sql, 'fetch');

//envoi des datas.
        return json_encode(['success' => true, 'content' => $answerCheck['answer_check']]);
    }
    public function verificationAnswer($idAnswer): int {
        $answerVerif = PdoDb::getInstance()->request('answer_check', 'answer', true, 'id', $idAnswer, false,'','',false,'','fetch');
        if ($answerVerif['answer_check']) {
            return 1;
        }
        return 0;

    }







}
