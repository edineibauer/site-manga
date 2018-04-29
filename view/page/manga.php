<?php
$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");

if (!empty($link->getUrl()[2]) && $link->getUrl()[2] === "capitulo") {
    $read->exeRead(PRE . "capitulo", "WHERE id = :nn", "nn={$link->getUrl()[3]}");
    if ($read->getResult()) {
        $dados = $read->getResult()[0];
        $dados['manga'] = \Entity\Entity::read("manga", $dados['manga']);
        $dados['galeria'] = json_decode($dados['galeria'], true);

        $dados['follow'] = "Seguir";
        $dados['classFollow'] = "color-hover-red color-text-red color-white ";
        if (!empty($_SESSION['userlogin'])) {
            $read = new \ConnCrud\Read();
            $read->exeRead(PRE . "login_manga_seguindo", "WHERE login_id = :li && manga_id = :mi", "li={$_SESSION['userlogin']['id']}&mi={$dados['id']}");
            if ($read->getResult()) {
                $dados['follow'] = "Seguindo";
                $dados['classFollow'] = "color-text-white color-red ";
            }
        }

        $tpl->show("leitor", $dados);
    } else {
        header("Location: " . HOME . "404");
    }
} else {
    $read->exeRead(PRE . "manga", "WHERE name = :nn", "nn={$link->getUrl()[1]}");
    if ($read->getResult()) {
        $data = \Entity\Entity::read("manga", $read->getResult()[0]['id']);

        $data['follow'] = "Seguir";
        $data['classFollow'] = "color-hover-red color-text-red color-white ";
        if (!empty($_SESSION['userlogin'])) {
            $read = new \ConnCrud\Read();
            $read->exeRead(PRE . "login_manga_seguindo", "WHERE login_id = :li && manga_id = :mi", "li={$_SESSION['userlogin']['id']}&mi={$data['id']}");
            if ($read->getResult()) {
                $data['follow'] = "Seguindo";
                $data['classFollow'] = "color-text-white color-red ";
            }
        }

        $tpl->show("manga", $data);
    } else {
        header("Location: " . HOME . "404");
    }
}