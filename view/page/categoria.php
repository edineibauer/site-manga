<?php
$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");

$read->exeRead(PRE . "categoria", "WHERE name = :nn", "nn={$link->getUrl()[1]}");
if($read->getResult()) {
    $data = $read->getResult()[0];
    $read->exeRead(PRE . "manga_categoria_categorias", "WHERE categoria_id =:cat LIMIT 20", "cat={$data['id']}");
    if($read->getResult()) {
        $data['posts'] = $read->getResult();
        foreach ($data['posts'] as $i => $item) {
            $data['posts'][$i]['imagem'] = !empty($item['imagem']) ? json_decode($item['imagem'], true) : null;
            $data['posts'][$i]['background'] = !empty($item['background']) ? json_decode($item['background'], true) : null;
        }
    }
    $tpl->show("categoria", $data);
} else {
    header("Location: " . HOME . "404");
}