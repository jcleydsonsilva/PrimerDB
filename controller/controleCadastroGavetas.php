<?php

//Faz a inclusao das classes
include_once("monitoraSessao.php");
include_once("../model/Sequencia.php");
include_once("../persistence/ManipulaBase.php");

//Recebe os dados do formulario de Cadastro de Seqeuncia
$idgav = $_POST["idgav"];
$iduser = $_SESSION['id'];
$numero_gaveta = $_POST["numero_gaveta"];
$nome_produto = $_POST["nome_produto"];
$descricao = $_POST["descricao"];
$observacao = $_POST["observacao"];
$responsavel = $_POST["responsavel"];
$operacao = $_POST["operacao"];

//echo '<pre>';print_r($_POST);die;
//Instancia o Objeto da classe Sequencia
$gaveta = new Gaveta();

$gaveta->setIdGav($idgav);
$gaveta->setIdUser($iduser);
$gaveta->setNumeroGaveta($numero_gaveta);
$gaveta->setNomeProduto($nome_produto);
$gaveta->setDescricao($descricao);
$gaveta->setObservacao($observacao);
$gaveta->setResponsavel($responsavel);
$gaveta->setOperacao($operacao);

//echo '<pre>';print_r($sequencia);die;
//Instancia o Objeto da Classe  ManipulaBase

$query = new ManipulaBase();

switch ($operacao) {
    case 'Cadastrar':
        $query->inserirGaveta($gaveta);
        header("location:../view/public/cadastroGavetas.php?msg=Sequencia cadastrada!");
        exit;
    case 'Atualizar':
        $query->atualizarGaveta($gaveta);
        header("location:../view/public/cadastroGavetas.php?msg=Sequencia atualizada!");
        exit;
    default:
        $query->deletarGaveta($gaveta);
        header("location:../view/public/cadastroGavetas.php?msg=Sequencia Excluida!");
        exit;
}
?>
