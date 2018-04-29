<?php
$id = filter_input(INPUT_POST, 'manga', FILTER_VALIDATE_INT);

if (empty($_SESSION)) {
    $data['response'] = 2;
    $data['error'] = "Faça login Antes";
} else {
    $read = new \ConnCrud\Read();
    $read->exeRead(PRE . "login_manga_seguindo", "WHERE login_id = :li && manga_id = :mi", "li={$_SESSION['userlogin']['id']}&mi={$id}");
    if($read->getResult()) {
        $del = new \ConnCrud\Delete();
        $del->exeDelete(PRE . "login_manga_seguindo", "WHERE login_id = :li && manga_id = :mi", "li={$_SESSION['userlogin']['id']}&mi={$id}");
        $data['data'] = "2";
    } else {
        $create = new \ConnCrud\Create();
        $create->exeCreate(PRE . "login_manga_seguindo", ["login_id" => $_SESSION['userlogin']['id'],"manga_id" => $id]);
        $data['data'] = "1";
    }
}