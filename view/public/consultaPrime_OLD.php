<?php
include_once("../../controller/monitoraSessao.php");
include_once("../../controller/Conexao.php");
include_once("../../persistence/ManipulaBase.php");

$conexao = new ManipulaBase();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <link href="estilo/Estilo.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="estilo/menuSuperior.css"media="all" />
        <script language="javascript" type="text/javascript"
        src="js/menuSuperior.js"></script>
        <title>Consulta de Materiais</title>
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
                        <h2 class="titulo1">Consulta de Primers</h2>
                        <form action="../../controller/controleConsultaPrimer.php" name="consulta" method="POST">
                            <center>
                                Pesquisar
                                <select name="contexto">
                                    <option value="tudo">Tudo</option>
                                    <option value="numeroCaixa">Caixa</option>
                                    <option value="codigoPrime">Código do Primer</option>
                                    <option value="oligoName">Oligo Name</option>
                                    <option value="responsavel">Responsável</option>
												<option value="sequenciaPrime">Sequência</option>		
                                </select><input type="text" name="busca" size="15">
                                <input type="submit" name="buscaAction" value="Buscar">
                            </center>
                        </form>
                        <table>
                            <?php
                            
									 $query = array(
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
                            ?>
									<?php ?>
									<?php if (!isset($_GET['msg'])): ?>
									<?php $resultado = $conexao->consultaPrimer('tudo',''); ?>
                            <table class="dados" align=center>
                                <tr align="center" class="titulos" ><td>Caixa</td><td>Código</td><td>Responsável</td><td>Exibir</td></tr>

                                <?php while ($q = mysql_fetch_assoc($resultado)): ?>

                                    <tr>
                                        <td><?php echo $q['numeroCaixa']; ?></td>
                                        <td><?php echo $q['codigoPrime']; ?></td>
                                        <td><?php echo $q['responsavel']; ?></td>
                                        

                                        <td align=center><a href="exibePrime.php?idPrime=<?php echo $q['idPrime']; ?>"><img src=imagens/browse.png /></a></td>

                                    </tr>
                                <?php endwhile; ?>
										 										
										<?php elseif (isset($_GET['msg'])): ?>
                              <?php $contexto = $_GET['contexto']; ?>
										<?php $busca = $_GET['busca']; ?>	
										
											<?php $resultado = ($conexao->consultaPrimer($contexto, $busca)); ?>

                                <table class="dados" align=center>
                             <tr align="center" class="titulos" ><td>Caixa</td><td>Código</td><td>Responsável</td><td>Exibir</td></tr>

                                <?php while ($q = mysql_fetch_assoc($resultado)): ?>

                                    <tr>
                                        <td><?php echo $q['numeroCaixa']; ?></td>
                                        <td><?php echo $q['codigoPrime']; ?></td>
                                        <td><?php echo $q['responsavel']; ?></td>
                                        

                                        <td align=center><a href="exibePrime.php?idPrime=<?php echo $q['idPrime']; ?>"><img src=imagens/browse.png /></a></td>

                                    </tr>
											<?php endwhile; ?>			
											<?php endif; ?>
                            </table>

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
