<?php
// fichier prendre en charge la requete sql en dehors de public pour la sécuriter
/*require_once __DIR__ . '/../../App/Controllers/Data_Answer.php';*/

use SYRADEV\AutoEncheres\Utils\Database\PdoDb;

$connection = new PdoDb();
$sql = 'SELECT answer.answer_check FROM `answer` WHERE answer.id = '.$_GET['value'];
$answerCheckData = PdoDb::getInstance()->requete($sql, 'fetch');
echo json_encode(['success'=>true, 'content'=>$answerCheckData['answer_check']]);
