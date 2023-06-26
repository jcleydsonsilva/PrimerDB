<?php

class ConectaDB {

    private $host;
    private $user;
    private $pass;
    private $db;
    private $sql;

    function setHost($host) {
        $this->host = $host;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setDb($db) {
        $this->db = $db;
    }

    function set($prop, $value) {
        $this->$prop = $value;
    }

    function get($prop) {
        return $this->$prop;
    }

    function conectar() {
        $con = mysql_connect($this->host, $this->user, $this->pass, $this->db) or die($this->erro(mysql_error()));
        return $con;
    }

    function selecionarDB() {
        $sel = mysql_select_db($this->db) or die($this->erro(mysql_error()));
        if ($sel)
            return true;
        else
            return false;
    }

}
?>