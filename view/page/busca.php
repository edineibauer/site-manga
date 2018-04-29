<?php
$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");
$dados = ["busca" => $link->getUrl()[1], "capitulo" => null, "manga" => null, "artista" => null, "categoria" => null];

$read->exeRead(PRE . "capitulo", "WHERE subtitulo LIKE'%{$link->getUrl()[1]}%' LIMIT 20");
if ($read->getResult()) {
    $dados['capitulo'] = $read->getResult();
    foreach ($dados['capitulo'] as $i => $item) {
        $dados['capitulo'][$i]['imagem'] = json_decode($item['capa'], true);
        $dados['capitulo'][$i]['descricao'] = \Helpers\Check::words($item['resumo']);
        $dados['capitulo'][$i]['nome'] = \Helpers\Check::words($item['subtitulo']);
    }
}
$read->exeRead(PRE . "manga", "WHERE nome LIKE'%{$link->getUrl()[1]}%' LIMIT 20");
if ($read->getResult()) {
    $dados['manga'] = $read->getResult();
    foreach ($dados['manga'] as $i => $item) {
        $dados['manga'][$i]['imagem'] = !empty($item['imagem']) ? json_decode($item['imagem'], true) : null;
        $dados['manga'][$i]['descricao'] = \Helpers\Check::words($item['descricao']);
    }
}

$read->exeRead(PRE . "artista", "WHERE nome LIKE'%{$link->getUrl()[1]}%' LIMIT 20");
if ($read->getResult()) {
    $dados['artista'] = $read->getResult();
    foreach ($dados['artista'] as $i => $item) {
        $dados['artista'][$i]['imagem'] = !empty($item['imagem']) ? json_decode($item['imagem'], true) : null;
        $dados['artista'][$i]['descricao'] = \Helpers\Check::words($item['descricao']);
    }
}

$read->exeRead(PRE . "categoria", "WHERE titulo LIKE'%{$link->getUrl()[1]}%' LIMIT 20");
if ($read->getResult()) {
    $dados['categoria'] = $read->getResult();
    foreach ($dados['artista'] as $i => $item) {
        $dados['categoria'][$i]['descricao'] = \Helpers\Check::words($item['descricao']);
        $dados['categoria'][$i]['nome'] = \Helpers\Check::words($item['titulo']);
    }
}

if ($dados)
    $tpl->show("busca", $dados);
else
    header("Location: " . HOME . "404");
