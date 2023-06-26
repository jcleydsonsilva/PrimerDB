<?php

class Prime {

    private $idPrime;
    private $numeroCaixa;
    private $codigoPrime;
    private $oligoName;
    private $local;
    private $sequenciaPrime;
    private $referencia;
    private $temperatura;
	 private $responsavel;
	 private $mw;
	 private $ugod;
	 private $od;
	 private $ug;
    private $nmol;

    function setIdPrime($idPrime) {
        $this->idPrime = $idPrime;
    }

    function getIdPrime() {
        return $this->idPrime;
    }

    function setIdNumeroCaixa($numeroCaixa) {
        $this->numeroCaixa = $numeroCaixa;
    }

    function getIdNumeroCaixa() {

        return $this->numeroCaixa;
    }

    function setCodigoPrime($codigoPrime) {

        $this->codigoPrime = $codigoPrime;
    }

    function getCodigoPrime() {

        return $this->codigoPrime;
    }

    function setOligoName($oligoName) {

        $this->oligoName = $oligoName;
    }

    function getOligoName() {

        return $this->oligoName;
    }

    function setLocal($local) {

        $this->local = $local;
    }

    function getLocal() {

        return $this->local;
    }

    function setSequenciaPrime($sequenciaPrime){

        $this->sequenciaPrime = $sequenciaPrime;
    }

	function getSequenciaPrime(){

		return $this->sequenciaPrime;

	}

	 function setTemperatura($temperatura) {

        return $this->temperatura = $temperatura;
    }

    function getTemperatura() {

        return $this->temperatura;
    }

    function setResponsavel($responsavel) {

        $this->responsavel = $responsavel;
    }

    function getResponsavel() {

        return $this->responsavel;
    }

	 function setMw($mw){

		$this->mw = $mw;

	}

	 function getMw(){
		
		return $this->mw;

	}

	 function setUgOd($ugod){

		$this->ugod = $ugod;

	}

	 function getUgOd(){

		return $this->ugod;

	}

	 function setOd($od){

		$this->od = $od;

	}

	 function getOd(){

		return $this->od;

	}

	 function setUg($ug){

		$this->ug = $ug;

	}

	 function getUg(){

		return $this->ug;

	}

	 function setNMol($nmol){

		$this->nmol = $nmol;

	}

	 function getNMol(){

		return $this->nmol;

	}

    function setReferencia($referencia) {

        $this->referencia = $referencia;
    }

    function getReferencia() {

        return $this->referencia;
    }

   function setOperacao($operacao) {

        $this->operacao = $operacao;
    }

    function getOperacao() {

        return $this->operacao;
    }
}
?>
