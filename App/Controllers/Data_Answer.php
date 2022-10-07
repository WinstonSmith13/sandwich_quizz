<?php
namespace SYRADEV\AutoEncheres\Controllers;


use SYRADEV\AutoEncheres\Models\FichesModel;
use SYRADEV\AutoEncheres\Utils\Database\PdoDb;


class dataAnswer extends Controller
{

public function dataAnswerCheck(): array|string
   {

        // Exécution de la requête
       $questionsCheck = PdoDb::getInstance()->request('*', 'question', false, '', '', true, 'RAND()', 'DESC', true, 6);
       // Transmission des annonce à la vue (Layout + template).
       $data = array();

       foreach ($questionsCheck as $question){

           $data[] = new FichesModel($question, PdoDb::getInstance()->request('*', 'answer', 'true', 'question_id', $question['id'], true, 'RAND()' ));
       }


$jsonData = json_encode($data);
echo $jsonData;
return $jsonData;
   }}
