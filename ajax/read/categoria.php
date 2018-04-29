<?php
$id = filter_input(INPUT_POST, 'categoria', FILTER_VALIDATE_INT);

$read = new \ConnCrud\Read();
$read->exeRead(PRE . "manga_categoria_categorias", "WHERE categoria_id = :cat LIMIT 20", "cat={$id}");
if ($read->getResult()) {
    $i=0;
    $dados = "";
    $tpl = new \Helpers\Template("meumanga");
    foreach ($read->getResult() as $item) {
        $read->exeRead(PRE . "manga", "WHERE id = :id", "id={$item['manga_id']}");
        if($read->getResult()) {
            $dados[$i] = $read->getResult()[0];
            $dados[$i]['descricao'] = \Helpers\Check::words($read->getResult()[0]['descricao']);
            $dados[$i]['nome'] = \Helpers\Check::words($read->getResult()[0]['nome']);
            $dados[$i]['imagem'] = !empty($read->getResult()[0]['imagem']) ? json_decode($read->getResult()[0]['imagem'], true) : null;
            $dados[$i]['background'] = !empty($read->getResult()[0]['background']) ? json_decode($read->getResult()[0]['background'], true) : null;
            $data['data'] .= $tpl->getShow("search", $dados[$i]);
            $i++;
        }
    }
}