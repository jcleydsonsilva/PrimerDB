<?php

//include_once("monitoraSessao.php");
include_once("../model/Sequencia.php");
include_once("../persistence/ManipulaBase.php");

// Recebe os dados via POST

$contexto = $_POST["contexto"];
$busca = $_POST["busca"];

$_SESSION['contexto'] = $contexto;
$_SESSION['busca'] = $busca;

//echo '<pre>'; print_r($_SESSION['contexto']); die();

header("location:../view/public/consultaPrime.php?msg=controle&contexto=$contexto&busca=$busca");
exit;

?>
