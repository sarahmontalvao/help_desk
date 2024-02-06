<?php
session_start();

$autenticado = false;

$_POST['email'];
$_POST['senha'];

$usuarios = array(
    array('email' => 'adm@gmail.com', 'senha' => '123456'),
    array('email' => 'user@gmail.com', 'senha' => '123456'),
);

foreach($usuarios as $user){
    if($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha'] ){
        $autenticado = true;

    }
}

if($autenticado){
    echo 'usuario autenticado';
    $_SESSION['autenticado']='sim';
        header('location: home.php?');
}else {
  header('location: index.php?login=erro');
  $_SESSION['autenticado']='nao';
}
?>