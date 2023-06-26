<?php

class Gaveta {

    private $idgav;
    private $iduser;
    private $numero_gaveta;
    private $nome_produto;
    private $descricao;
    private $observacao;
    private $responsavel;

    function setIdGav($idgav) {
        $this->idgav = $idgav;
    }

    function getIdGav() {
        return $this->idgav;
    }

    function setIdUser($iduser) {
        $this->iduser = $iduser;
    }

    function getIdUser() {

        return $this->iduser;
    }

    function setNumeroGaveta($numero_gaveta) {

        $this->numero_gaveta = $numero_gaveta;
    }

    function getNumeroGaveta() {

        return $this->numero_gaveta;
    }

    function setNomeProduto($nome_produto) {

        $this->nome_produto = $nome_produto;
    }

    function getNomeproduto() {

        return $this->nome_produto;
    }

    function setDescricao($descricao) {

        $this->descricao = $descricao;
    }

    function getDescricao() {

        return $this->descricao;
    }
    function setObservacao($observacao) {

        $this->observacao = $observacao;
    }

    function getObservacao() {

        return $this->observacao;
    }

    function setResponsavel($responsavel) {

        $this->responsavel = $responsavel;
    }

    function getResponsavel() {

        return $this->responsavel;
    }

    function setOperacao($operacao) {

        $this->operacao = $operacao;
    }

    function getOperacao() {

        return $this->operacao;
    }

}
?>
