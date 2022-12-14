<?php

namespace WINSTON\SandwichQuizz\Models;

/*
 * Modèle Fiches
 */

class FichesModel
{
    public int $id;
    public string $question;
    /*public string $good_answer;*/
    public array $answers;


    public function __construct(array $question, array $answers)
    {

        $this->id = $question['id'];
        $this->question = $question['question'];
        $this->answers = $answers;
        return $this;
    }

    public function __get($property)
    {
        return $this->$property;
    }

}