<?php

class ManipulaBase
{

	public function __construct()
	{
		include_once("ConectaDB.php");

		$connect = new ConectaDB;

		$connect->setDb('controlegaveta');
		$connect->setHost('localhost');
		$connect->setUser('root');
		$connect->setPass('biopop');

		$connect->conectar();
		$connect->selecionarDB();

	}
// Manipula a base de dodos para todos os cadastros de sequências
// Funcoes para o cadastro de usuário:
//    - inserirPessoa
//    - AcessaTabela
//    - atualizarPessoa
//    - deletarUsuario
//    - detalhesPessoa

   function inserirPessoa($pessoa)
   {
  
      $nome = $pessoa->getNome();
      $telefone = $pessoa->getTelefone();
      $orientador = $pessoa->getOrientador();
      $instituicao = $pessoa->getInstituicao();
      $departamento = $pessoa->getDepartamento();
      $laboratorio = $pessoa->getLaboratorio();
      $username = $pessoa->getUsername();
      $password = $pessoa->getPassword();
      $nivel = $pessoa->getNivel();
	
      $sql = "
	insert into `usuario`
	(nome,telefone,orientador,instituicao,departamento,laboratorio,username,password,nivel)
	values
	('$nome','$telefone','$orientador','$instituicao','$departamento','$laboratorio','$username','$password','$nivel')";
      
      $query = mysql_query($sql);
      unset($sql, $query);
      return;
    }

   function AcessaTabela($tabela)
   {
	  $result = '';
	  $sql = "select * from $tabela ORDER BY id";
	  $result = mysql_query($sql);
	  return $result;
	}

   function ExibeDados($result)
   {
	$exibe = mysql_fetch_assoc($result);
	return $exibe;
	}

   function atualizarPessoa($pessoa)
   {
		  $id = $pessoa->getId($id);
		  $nome = $pessoa->getNome($nome);
        $telefone = $pessoa->getTelefone($telefone);
        $orientador = $pessoa->getOrientador($orientador);
        $instituicao = $pessoa->getInstituicao($instituicao);
        $departamento = $pessoa->getDepartamento($departamento);
        $laboratorio = $pessoa->getLaboratorio($laboratorio);
        $username = $pessoa->getUsername($username); 
	     $password = $pessoa->getPassword($password);
        $nivel = $pessoa->getNivel($nivel);


        $sql = "UPDATE `usuario` SET nome='$nome', telefone='$telefone', orientador='$orientador', instituicao='$instituicao', departamento='$departamento', laboratorio='$laboratorio', username='$username', password='$password', nivel='$nivel' WHERE id='$id'";
        $query = mysql_query($sql);
	return;
}

   function deletarUsuario($pessoa)
   {
       $id = $pessoa->getId($id);
       $sql = "DELETE FROM `usuario` WHERE id = '$id'";
       $query = mysql_query($sql);
   return;
}

   function detalhesPessoa($id)
   {
        $result = mysql_query("select * from usuario where id = $id");
        return mysql_fetch_array($result);
   }

//Controle das gavetas

   function inserirGaveta($gaveta)
   {
  
      $iduser = $gaveta->getIdUser();
      $numerogaveta = $gaveta->getNumeroGaveta();
      $nomeproduto = $gaveta->getNomeproduto();
      $descricao = $gaveta->getDescricao();
      $observacao = $gaveta->getObservacao();
      $responsavel = $gaveta->getResponsavel();
      $operacao = $gaveta->getOperacao();


      $sql = "
	   insert into `gaveta`
	   (iduser,numero_gaveta,nome_produto,descricao,observacao,responsavel)
	   values  ($iduser,'$numerogaveta','$nomeproduto','$descricao','$observacao','$responsavel')";

      $query = mysql_query($sql);
      unset($sql, $query);
      return;
    }

   function atualizarGaveta($gaveta)
   {
      $idgav = $gaveta->getIdGav();
      $iduser = $gaveta->getIdUser();
      $numerogaveta = $gaveta->getNumeroGaveta();
      $nomeproduto = $gaveta->getNomeproduto();
      $descricao = $gaveta->getDescricao();
      $observacao = $gaveta->getObservacao();
      $responsavel = $gaveta->getResponsavel();
      $operacao = $gaveta->getOperacao();
 

      $sql = "UPDATE `gaveta` SET idgav='$idgav', iduser='$iduser',numero_gaveta='$numerogaveta', nome_produto='$nomeproduto', descricao='$descricao', observacao='$observacao', responsavel='$responsavel' WHERE idgav='$idgav'";

      $query = mysql_query($sql);
	  return;
   }

   function deletarGaveta($gaveta)
   {
      $idgav = $gaveta->getIdGav($idgav);
      $sql = "DELETE FROM `gaveta` WHERE idgav = $idgav";
      $query = mysql_query($sql);
      return;
    }

   function detalhesGaveta($idgav)
   {

      $result = mysql_query("select * from gaveta where idgav = $idgav");
      return mysql_fetch_array($result);
   }

   function SelecionaGaveta($tabela,$iduser)
   {
	  $result = '';
	  $sql = "select * from $tabela WHERE iduser='$iduser' ORDER BY idgav";
	  //echo '<pre>';print_r($sql);die;
	  $result = ($sql);
     $result = mysql_query($result);
	  return $result;
}

   function ExibeGaveta($result)
   {
     $sql = mysql_query($result);	
     $query = mysql_fetch_array($sql); 
	  return $query;
    }

// Controle de usuário
   function VerificaUsuario($pessoa)
   {
      $username = $pessoa->getUsername();
      $password = $pessoa->getPassword();
      
		$result = '';
      $sql = "SELECT id, username, password, nivel FROM usuario WHERE username='$username' AND password='$password'";
      
      $query = mysql_query($sql);
      $result = mysql_fetch_assoc($query); 
      return $result;
	}

// Controle de pesquisa ao banco de dados

	function consultaGaveta($contexto, $busca){
	
		$campo = $contexto;
		$conteudo = $busca;

	   $query = '';
		if ($contexto === 'tudo')
			$sql = "select g.*, u.nome from gaveta g left join usuario u on g.iduser = u.id";
		else
			$sql = "select g.*, u.nome from gaveta g left join usuario u on g.iduser = u.id Where g.$contexto = '$busca'";

		$query = mysql_query(($sql));

		return $query;

	}

	function detalhesConsulta($idgav)
   {
      $result = mysql_query("select g.*, u.nome from gaveta g left join usuario u on g.iduser = u.id Where g.idgav = $idgav");
		while ($q = mysql_fetch_array($result)){
			$dados = $q;
		}
      return $dados;
   }

//Funções pra manipulção de primes


   function inserirPrime($prime)
   {
  
		$numeroCaixa = $prime->getIdNumeroCaixa();
		$codigoPrime = $prime->getCodigoPrime();
		$oligoName = $prime->getOligoName();
		$local = $prime->getLocal();
		$sequenciaPrime = $prime->getSequenciaPrime();
	   $referencia = $prime->getReferencia(); 
		$temperatura = $prime->getTemperatura();
		$responsavel = $prime->getResponsavel();
		$mw = $prime->getMw();
		$ugod = $prime->getUgOd();
		$od = $prime->getOd();
		$ug = $prime->getUg();
		$nmol = $prime->getNMol();

      $sql = "insert into `prime`(numeroCaixa,codigoPrime,oligoName,local,sequenciaPrime,temperatura,mw,ugod,od,ug,nmol,responsavel,referencia) values ('$numeroCaixa','$codigoPrime','$oligoName','$local','$sequenciaPrime','$temperatura','$mw','$ugod','$od','$ug','$nmol','$responsavel','$referencia')";

      $query = mysql_query($sql);
		unset($sql, $query);
      return;
    }

   function atualizarPrime($prime)
   {

      $idPrime = $prime->getIdPrime();
		$numeroCaixa = $prime->getIdNumeroCaixa();
		$codigoPrime = $prime->getCodigoPrime();
		$oligoName = $prime->getOligoName();
		$local = $prime->getLocal();
		$sequenciaPrime = $prime->getSequenciaPrime();
	   $referencia = $prime->getReferencia(); 
		$temperatura = $prime->getTemperatura();
		$mw = $prime->getMw();
		$ugod = $prime->getUgOd();
		$od = $prime->getOd();
		$ug = $prime->getUg();
		$nmol = $prime->getNMol();
 		$responsavel = $prime->getResponsavel();

      $sql = "UPDATE `prime` SET idPrime='$idPrime', numeroCaixa='$numeroCaixa',codigoPrime='$codigoPrime', oligoName='$oligoName', local='$local', sequenciaPrime='$sequenciaPrime', temperatura='$temperatura', mw='$mw', ugod='$ugod', od='$od', ug='$ug', nmol='$nmol', responsavel='$responsavel', referencia='$referencia' WHERE idPrime='$idPrime'";

      $query = mysql_query($sql);
	  return;
   }

   function deletarPrime($prime)
   {
      $idPrime = $prime->getIdPrime($idPrime);
      $sql = "DELETE FROM `prime` WHERE idPrime = $idPrime";
      $query = mysql_query($sql);
      return;
    }

   function detalhesPrime($idPrime)
   {

     $result = mysql_query("select * from prime where idPrime = $idPrime");
      return mysql_fetch_array($result);
   }

   function SelecionaPrime($tabela,$inicio,$maximo)
   {
	  $result = '';
	  $sql = "select * from $tabela LIMIT $inicio,$maximo";
	  //echo '<pre>';print_r($sql);die;
	  $result = ($sql);
     $result = mysql_query($result);
	  return $result;
}

   function ExibePrime($result)
   {
     $sql = mysql_query($result);	
     $query = mysql_fetch_array($sql); 
	  return $query;
    }

	function consultaPrimer($contexto, $busca, $inicio, $maximo){
	
		$campo = $contexto;
		$conteudo = $busca;

	   $query = '';
		if ($contexto === 'tudo')
			$sql = "select * from prime LIMIT $inicio,$maximo";
		else
			$sql = "select * from prime Where $contexto = '$busca' LIMIT $inicio,$maximo";

		$query = mysql_query(($sql));

		return $query;

	}
//Contador de resultados

	function contadorResultados()
	{

		$strCount = "select count(*) AS 'num_registros' from prime";
		$query    = mysql_query($strCount);  
		$row      = mysql_fetch_array($query);  
		$total    = $row["num_registros"];	
	
		return $total;

	}

	function contadorSequenciaUsuario()
	{
		
		$strCount = "select count(*) AS 'num_registros' from prime";
		
		$query    = mysql_query($strCount);  
		$row      = mysql_fetch_array($query);  
		$total    = $row["num_registros"];	
	
		return $total;

	}

	function contadorBuscaResultados($contexto,$busca,$inicio,$maximo)
	{
		
	   $strCount = "select count(*) AS 'num_registros' from prime Where $contexto = '$busca' LIMIT $inicio,$maximo";
		$query    = mysql_query($strCount);  
		$row      = mysql_fetch_assoc($query);  
		$total    = $row["num_registros"];	
	
		return $total;

	}


}
?>
