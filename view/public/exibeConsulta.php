<?php 
include_once("../../controller/monitoraSessao.php");
include_once("../../persistence/ManipulaBase.php");

	$query = new ManipulaBase();

	if (isset($_REQUEST['idgav'])){

		$dados = array(
                     'idgav'         => '',
                     'numero_gaveta' => '',
                     'nome_produto'  => '',
                     'descricao'     => '',
                     'observacao'    => '',
                     'responsavel'   => '', 
		);
 
		$dados = $query->detalhesConsulta($_REQUEST['idgav']);
	
	}
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <link href="estilo/Estilo.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="estilo/menuSuperior.css"media="all" />
        <script language="javascript" type="text/javascript"
        src="js/menuSuperior.js"></script>
        <title>Destalhes Produto</title>
    </head>
    <body class="tundra " onload="">
        <?php include_once("../../controller/monitoraSessao.php"); ?>
        <div class="aplicativo moldura0 conteudo">
            <div class="superior">

                <table>
                    <tr>
                        <td>
                            <h1>&nbsp; <a href="index.php"></a></h1>
                        </td>
                        <td class="celula1"></td>
                    </tr>
                </table>
            </div>
            <div class="mediano autenticacao guardiao">
                <div class="celula0"></div>
                <div class="celula1">
                    <div class="mensagem"></div>
                    <div class="moldura1 autenticacao inicial">
                        <?php include_once 'menu.php'; ?>
                        <br>
                        <br>
<center>
<CENTER><h2> Produto  </h2></CENTER>
<table border="0"> 

<tr>
	<td>Numero da Gaveta: </td><td>	<?php echo $dados['numero_gaveta']; ?></td>
</tr>
<tr>
	<td>Nome do Produto: </td><td><?php echo $dados['nome_produto'];?></td>
</tr>		
<tr>
		<td>Descrição: </td><td><?php echo $dados['descricao'];?></td><br>
</tr>	
<tr>
		<td>Observação: </td><td><?php echo $dados['observacao'];?></td><br>
</tr>	
<tr>
		<td>Responsável: </td><td><?php echo $dados['responsavel'];?></td>
</tr>
				
</center>	
</table>   
</div>
                </div>
                <div class="celula2"></div>
            </div>
            <div class="inferior">
                <p></p>
            </div>
        </div>
    </body>
</html>
</body>
</html>

