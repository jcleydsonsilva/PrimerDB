<?php

//Faz a inclusao das classes
include_once("monitoraSessao.php");
include_once("../model/Prime.php");
include_once("../persistence/ManipulaBase.php");

//Recebe os dados do formulario de Cadastro de Seqeuncia
$id_prime = $_POST["id_prime"];
$numero_caixa = $_POST['numero_caixa'];
$codigo_prime = $_POST["codigo_prime"];
$oligo_name = $_POST["oligo_name"];
$local = $_POST["local"];
$sequencia_prime = $_POST["sequencia_prime"];
$referencia =  $_POST["referencia"];
$temperatura = $_POST["temperatura"];
$responsavel =$_POST["responsavel"];
$mw =$_POST["mw"];
$ug_od =$_POST["ug_od"];
$od =$_POST["od"];
$ug =$_POST["ug"];
$nmol =$_POST["nmol"];
$operacao = $_POST["operacao"];


//Instancia o Objeto da classe Sequencia

$prime = new Prime();

$prime->setIdPrime($id_prime);
$prime->setIdNumeroCaixa($numero_caixa);
$prime->setCodigoPrime($codigo_prime);
$prime->setOligoName($oligo_name);
$prime->setLocal($local);
$prime->setSequenciaPrime($sequencia_prime);
$prime->setReferencia($referencia);
$prime->setTemperatura($temperatura);
$prime->setResponsavel($responsavel);
$prime->setMw($mw);
$prime->setUgOd($ug_od);
$prime->setOd($od);
$prime->setUg($ug);
$prime->setNMol($nmol);


//Instancia o Objeto da Classe  ManipulaBase

$query = new ManipulaBase();

switch ($operacao) {
    case 'Cadastrar':
        $query->inserirPrime($prime);
        header("location:../view/public/cadastroPrime.php?msg=Sequencia cadastrada!");
        exit;
    case 'Atualizar':
        $query->atualizarPrime($prime);
        header("location:../view/public/cadastroPrime.php?msg=Sequencia atualizada!");
        exit;
    default:
        $query->deletarPrime($prime);
        header("location:../view/public/cadastroPrime.php?msg=Sequencia Excluida!");
        exit;
}
?>
