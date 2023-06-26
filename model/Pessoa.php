<?php

class Pessoa {

    private $id;
    private $nome;
    private $telefone;
    private $orientador;
    private $instituicao;
    private $departamento;
    private $laboratorio;
    private $password;
    private $username;

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setTelefone($telefone) {

        $this->telefone = $telefone;
    }

    public function getTelefone() {

        return $this->telefone;
    }

    public function setOrientador($orientador) {
        $this->orientador = $orientador;
    }

    public function getOrientador() {
        return $this->orientador;
    }

    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    public function getInstituicao() {
        return $this->instituicao;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setLaboratorio($laboratorio) {
        $this->laboratorio = $laboratorio;
    }

    public function getLaboratorio() {
        return $this->laboratorio;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function getNivel() {
        return $this->nivel;
    }

}

?>
