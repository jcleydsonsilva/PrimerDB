<?php

include_once("../../persistence/ConectaDB.php");

$connect = new ConectaDB;

$connect->setDb('controlegaveta');
$connect->setHost('localhost');
$connect->setUser('root');
$connect->setPass('biopop');

$connect->conectar();
$connect->selecionarDB();
?>
