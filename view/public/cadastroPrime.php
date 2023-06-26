<?php include_once("../../controller/monitoraSessao.php"); ?>
<?php include_once("../../persistence/ManipulaBase.php"); ?>
<?php include_once("../../controller/monitoraSessao.php"); ?>
<?php $query = new ManipulaBase(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <link type='text/css' rel='stylesheet' href='estilo/Estilo.css'>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <link href="estilo/Estilo.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="estilo/menuSuperior.css"media="all" />
        <script language="javascript" type="text/javascript"
        src="js/menuSuperior.js"></script>
        <title>Cadastro de Primers</title>
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
                        <center><head> <h2>Cadastro de Primers</h2></head></center>
                        <?php if (isset($_GET['msg'])): ?>
                           <center> <div id="mensagem"><?php echo $_GET['msg']; ?></div></center>
                        <?php endif; ?>
                        <?php
                            if (isset($_REQUEST['idPrime'])) {

                                $dados = $query->detalhesPrime($_REQUEST['idPrime']);
                            } else {
                                $dados = array(
                                    'idPrime'       	=> '',
                                    'numeroCaixa'   	=> '',
                                    'codigoPrime'   	=> '',
                                    'oligoName'     	=> '',
                                    'local'         	=> '',
                                    'sequenciaPrime'	=> '',
						'temperatura'   	=> '',
						'mw'            	=> '',
						'ugod'          	=> '',
						'od'   		=> '',
						'ug'  		=> '',
						'nmol'   		=> '',
						'responsavel'   	=> '',
						'referencia'	=> '',
                               );
                            }
                        ?>
	<center>
                            <form action="../../controller/controleCadastroPrime.php" name="primeForm" method="POST">
                                <table>

                                        <td></td> <td><input id="id_prime" type="hidden" name="id_prime" size="5" value="<?php echo $dados['idPrime']; ?>"</td>
                                    </tr>
                                    <tr>
                                        <td>Caixa:</td><td><input id="numero_caixa" type="text" name="numero_caixa" size="50" value="<?php echo $dados['numeroCaixa']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Código do Primer:</td><td><input id="codigo_prime" type="text" name="codigo_prime" size="50" value="<?php echo $dados['codigoPrime']; ?>"></td>
                                    </tr>

                                    <tr>
                                     <td>Oligo Name:</td> <td><input id="oligo_name" type="text" name="oligo_name" size="50" value="<?php echo $dados['oligoName']; ?>"></td>
                                    </tr>
<tr>
                                     <td>Referência:</td> <td><input id="referencia" type="text" name="referencia" size="50" value="<?php echo $dados['referencia']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Local:</td> <td><input id="local" type="text" name="local" size="50" value="<?php echo $dados['local']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Sequência:</td> <td><input id="sequencia_prime" type="text" name="sequencia_prime" size="50" value="<?php echo $dados['sequenciaPrime']; ?>">
                                    </tr>
                                    <tr>
                                        <td>Tm:</td> <td><input id="temperatura" type="text" name="temperatura" size="50" value="<?php echo $dados['temperatura']; ?>">
                                    </tr>
                                  
                                    <tr>
                                        <td>MW:</td> <td><input id="mw" type="text" name="mw" size="50" value="<?php echo $dados['mw']; ?>">
                                    </tr>
                                    <tr>
                                        <td>ug/OD:</td> <td><input id="ug_od" type="text" name="ug_od" size="50" value="<?php echo $dados['ugod']; ?>">
                                    </tr>
                                    <tr>
                                        <td>OD:</td> <td><input id="od" type="text" name="od" size="50" value="<?php echo $dados['od']; ?>">
                                    </tr>
                                    <tr>
                                        <td>ug:</td> <td><input id="ug" type="text" name="ug" size="50" value="<?php echo $dados['ug']; ?>">
                                    </tr>
                                   <tr>
                                        <td>nmol:</td> <td><input id="nmol" type="text" name="nmol" size="50" value="<?php echo $dados['nmol']; ?>">
                                    </tr>
 <tr>
                                        <td>Responsável:</td> <td><input id="responsavel" type="text" name="responsavel" size="50" value="<?php echo $dados['responsavel']; ?>">
                                    </tr>


                                   <tr>

                                </table>
                                <center>
                                <td><input type="submit" name="operacao" value="Cadastrar"</td>
                                <td><input type="submit" name="operacao" value="Atualizar"</td>
                                <td><input type="submit" name="operacao" value="Excluir"</td>
                                <td><input type="reset" value="Limpar">
										  </td>
										  </center>
                            </form>
</center>


									<? if (!isset($_GET["pagina"]))
									{	
										$pagina = "1";
										$maximo = 30;

										// Calculando o registro inicial  
										$inicio = $pagina -1;
										$inicio = $maximo * $inicio;
									
									}else{
										$pagina = $_GET["pagina"];
								  
										// Maximo de registros por pagina  
										$maximo = 30;

										// Calculando o registro inicial  
										$inicio = $pagina -1;
										$inicio = $maximo * $inicio;
										
									}
									?>
												
									<?	$total = $query->contadorResultados(); ?>
										
									
									<?	if ($total <= 0)
										{	
											echo "<center>Nenhum registro encontrado.</center>";
									
										}else{
											
                       				$result = $query->SelecionaPrime('prime',$inicio,$maximo);; 
										}

								   ?>

                            <table class="dados" align=center>
                             <tr align=center class="titulo"><td>Código</td><td>Oligo Name</td><td>Responsavel</td><td>Exibir</td><td>Editar</td><td>Excluir</td></tr>
                            <?php while ($linha = mysql_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $linha['codigoPrime']; ?></td>
                                    <td><?php echo $linha['oligoName']; ?></td>
                                    <td><?php echo $linha['responsavel']; ?></td>
                                    

                                    <td align=center><a href="exibePrime.php?idPrime=<?php echo $linha['idPrime']; ?>"><img src=imagens/browse.png /></a></td>
                                    <td align=center><a href="cadastroPrime.php?idPrime=<?php echo $linha['idPrime']; ?>"><img src=imagens/edit.png> </a></td>
                                    <td align=center><a href="cadastroPrime.php?idPrime=<?php echo $linha['idPrime']; ?>"><img src=imagens/drop.png> </a></td>
                                </tr>
                            <?php endwhile; ?>

					<?php

 					// Calculando pagina anterior  
					$menos = $pagina -1;

					// Calculando pagina posterior  
					$mais = $pagina +1;

					//Ceil arredonda para cima

					$pgs = ceil($total / $maximo);
					if ($pgs > 1) {

					// Mostragem de pagina  
					if ($menos > 0) {
						echo "<a href=\"?pagina=$menos&\" class='texto_paginacao'>Anterior</a> ";
					}

					// Listando as paginas  
					for ($i = 1; $i <= $pgs; $i++) {
						if ($i != $pagina) {
							echo "  <a href=\"?pagina=" . ($i) . "\" class='texto_paginacao'>$i</a>";
						} else {
							echo "  <strong class='texto_paginacao_pgatual'>" . $i . "</strong>";
						}
					}
	
					if ($mais <= $pgs) {
						echo "   <a href=\"?pagina=$mais\" class='texto_paginacao'>Próxima</a>";
					}
				}
			?>


						
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
