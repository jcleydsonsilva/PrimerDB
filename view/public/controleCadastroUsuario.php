<?php

//Faz a inclusao das classes
include_once("../../controller/monitoraSessao.php");
include_once("../../model/Pessoa.php");
include_once("../../controller/Conexao.php");
include_once("../../persistence/ManipulaBase.php");

//Recebe os dados do formulario de Cadastro de Pessa
$id = $_POST["_id"];
$nome = $_POST["_nome"];
$telefone = $_POST["_telefone"];
$orientador = $_POST["_orientador"];
$instituicao = $_POST["_instituicao"];
$departamento = $_POST["_departamento"];
$laboratorio = $_POST["_laboratorio"];
$username = $_POST["_username"];
$password = $_POST["_password"];
$nivel = $_POST["_nivel"];
$operacao = $_POST["operacao"];

//Instancia o Objeto da classe Pessoa
$pessoa = new Pessoa();

$pessoa->setId($id);
$pessoa->setNome($nome);
$pessoa->setTelefone($telefone);
$pessoa->setOrientador($orientador);
$pessoa->setInstituicao($instituicao);
$pessoa->setDepartamento($departamento);
$pessoa->setLaboratorio($laboratorio);
$pessoa->setUsername($username);
$pessoa->setPassword($password);
$pessoa->setNivel($nivel);

//Instancia o Objeto da Classe  ManipulaBase
$query = new ManipulaBase();

switch ($operacao) {
    case 'Cadastrar':
        $query->inserirPessoa($pessoa);
        header("location:cadastroUser.php?msg=Usuario cadastrado!");
        exit;
    case 'Atualizar':
        $query->atualizarPessoa($pessoa);
        header("location:cadastroUser.php?msg=Usuario atualizado!");
        exit;
    default:
        $query->deletarUsuario($pessoa);
        header("location:cadastroUser.php?msg=Usuario Excluido!");
        exit;
}
?>