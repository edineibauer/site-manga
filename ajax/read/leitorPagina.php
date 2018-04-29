<?php
$id = filter_input(INPUT_POST, 'capitulo', FILTER_VALIDATE_INT);

$data['data']['anterior'] = null; 
$data['data']['proximo'] = null; 

$read = new \ConnCrud\Read();
$read->exeRead(PRE . "capitulo", "WHERE id = :id", "id={$id}");
if($read->getResult()) {
    $capitulo = $read->getResult()[0]['capitulo'] - 1;
    $read->exeRead(PRE . "capitulo", "WHERE capitulo >= :cap LIMIT 3", "cap={$capitulo}");
    if($read->getResult()) {
        $data['data'] = [
            "anterior" => ($read->getResult()[0]['id'] != $id ? $read->getResult()[0]['id'] : null),
            "proximo" => (isset($read->getResult()[2]) ? $read->getResult()[2]['id'] : (isset($read->getResult()[1]) && $read->getResult()[0]['id'] == $id ? $read->getResult()[1]['id'] : null)),
        ];
    }
}