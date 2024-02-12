<?php
loadModel('Login');
if(count($_POST) > 0){
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        echo "Usuario {$user->name} logado";
    }catch (Exception $e){
        echo 'Falha np Login :(';
    }
}

loadView('login', $_POST);