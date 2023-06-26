<?php 
include_once("../../controller/monitoraSessao.php");
include_once("../../persistence/ManipulaBase.php");

	$query = new ManipulaBase();

	if (isset($_REQUEST['idPrime'])){

		$dados = array(
                                    'idPrime'       => '',
                                    'numeroCaixa'   => '',
                                    'codigoPrime'   => '',
                                    'oligoName'     => '',
                                    'local'         => '',
                                    'sequenciaPrime'=> '',
												'temperatura'   => '',
												'mw'            => '',	
												'ugod'          => '',	
												'od'   			 => '',	
												'ug'  			 => '',	
												'nmol'   		 => '',
												'responsavel'   => '',	
                               );
 
		$dados = $query->detalhesPrime($_REQUEST['idPrime']);
	
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
        <title>Destalhes Primers</title>
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
<CENTER><h2> Primer  </h2></CENTER>
<table border="0"> 



                                        <td>Caixa:</td><td><?php echo $dados['numeroCaixa']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Código do Prime:</td><td><?php echo $dados['codigoPrime']; ?></td>
                                    </tr>

                                    <tr>
                                     <td>Oligo Name:</td> <td><?php echo $dados['oligoName']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Local:</td> <td><?php echo $dados['local']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Sequencia:</td> <td><?php echo $dados['sequenciaPrime']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tm:</td> <td><?php echo $dados['temperatura']; ?>
                                    </tr>

                                    <tr>
                                        <td>MW:</td> <td><?php echo $dados['mw']; ?>
                                    </tr>
                                    <tr>
                                        <td>ug/OD:</td> <td><?php echo $dados['ugod']; ?>
                                    </tr>
                                    <tr>
                                        <td>OD:</td> <td><?php echo $dados['od']; ?>
                                    </tr>
                                    <tr>
                                        <td>ug:</td> <td><?php echo $dados['ug']; ?>
                                    </tr>
                                   <tr>
                                        <td>nmol:</td> <td><?php echo $dados['nmol']; ?>
                                    </tr>
                                   <tr>
                                        <td>Responsável:</td> <td><?php echo $dados['responsavel']; ?>
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

