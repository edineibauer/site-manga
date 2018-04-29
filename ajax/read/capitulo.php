<?php

$id = filter_input(INPUT_POST, 'manga', FILTER_VALIDATE_INT);
$off = filter_input(INPUT_POST, 'off', FILTER_VALIDATE_INT);
$pag = 20;

$off = (empty($off) || $off < 1 ? 1 : $off) * $pag - $pag;

$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");
$read->exeRead(PRE . "manga", "WHERE id=:id", "id={$id}");
if($read->getResult()) {
    $manga = $read->getResult()[0]['name'];
    $read->exeRead(PRE . "capitulo", "WHERE manga = :ma ORDER BY id DESC LIMIT :offset,:limit", "ma={$id}&offset={$off}&limit={$pag}");
    if ($read->getResult()) {
        $dados = [];
        $d = new \Helpers\Date();
        foreach ($read->getResult() as $item) {
            $item = \Entity\Entity::read("capitulo", $item['id']);
            $item['data'] = $d->getDate($item['data'], 'd M Y');
            $dados[] = $item;
        }

        $data['data'] = $tpl->getShow("capitulo", ["data" => $dados, "manga" => $manga]);
    } else {
        $data['data'] = "<h3 class='align-center'>Nenhum Capítulo Disponível</h3>";
    }
}