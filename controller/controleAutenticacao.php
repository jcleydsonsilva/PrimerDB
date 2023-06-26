<?php

include_once("../persistence/ManipulaBase.php");
include_once("../model/Pessoa.php");

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
    header("Location: public/index.php");
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$pessoa = new Pessoa();

$pessoa->setUsername($username);
$pessoa->setPassword($password);

$query = new ManipulaBase();

$dados = array(
    'id' => '',
    'username' => '',
    'password' => '',
    'nivel' => '',
);

$dados = $query->VerificaUsuario($pessoa);

// Abre a sessão
if (!isset($_SESSION))
    session_start();

if (($username == $dados['username'] ) AND ($password == $dados['password'])) {

    $_SESSION['id'] = $dados['id'];
    $_SESSION['username'] = $dados['username'];
    $_SESSION['nivel'] = $dados['nivel'];
    header("Location: ../view/public/index.php?nv=Login bem sucedido");
} else {
    header("Location: ../view/autentication.php?msg=Usuário ou Senha Inválidos!");
}
?>