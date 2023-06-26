<?php
include_once ("../../controller/monitoraSessao.php");
include_once ("../../controller/Conexao.php");
include_once ("../../persistence/ManipulaBase.php");

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
        <title>Virus Genome</title>
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
			'temperatura'=> '',
			'mw'         => '',
			'ugod'       => '',
			'od'   	 => '',
			'ug'  	 => '',
			'nmol'   	 => '',
			'responsavel'=> '',
    );	
?>

<?php if (!isset($_GET['msg'])): ?>

	<! paginação de resultados --!>
	<?php

		if (!isset($_GET["pagina"]))
			$pagina = "1";
		else
			$pagina = $_GET["pagina"];

		// Maximo de registros por pagina  
		$maximo = 30;

		// Calculando o registro inicial  
		$inicio = $pagina -1;
		$inicio = $maximo * $inicio;

		// Conta os resultados no total da minha query

		$total = $conexao->contadorResultados();
			if ($total <= 0) {
				echo "<center>Nenhum registro encontrado.</center>";
			} else {
				$resultado = $conexao->consultaPrimer('tudo', '', $inicio, $maximo);
			}
	?>
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
			<?php

 					// Calculando pagina anterior  
					$menos = $pagina -1;

					// Calculando pagina posterior  
					$mais = $pagina +1;

					//Ceil arredonda para cima

					$pgs = ceil($total / $maximo);
				if ($pgs > 1)
				{

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
										 										
<?php elseif (isset($_GET['msg'])): ?>
	    	
		<?php $contexto = $_GET['contexto']; ?>
		<?php $busca = $_GET['busca']; ?>
		
     	<?php
				if (!isset($_GET["pagina"]))
					$pagina = "1";
				else
					$pagina = $_GET["pagina"];

				 // Maximo de registros por pagina  
				$maximo = 30;

				// Calculando o registro inicial  
				$inicio = $pagina -1;
				$inicio = $maximo * $inicio;

				// Conta os resultados no total da minha query

				$total = $conexao->contadorBuscaResultados($contexto,$busca,$inicio,$maximo);
				if ($total <= 0) {
					echo "<center>Nenhum registro encontrado.</center>";
				} else {
												
	 				$resultado = $conexao->consultaPrimer($contexto,$busca,$inicio,$maximo);
		   	}
			
				?>
					<table class="dados" align=center>
					<tr align="center" class="titulos" ><td>Caixa</td><td>Código</td><td>Responsável</td><td>Exibir</td></tr>
	
				<?php while ($q = mysql_fetch_assoc($resultado)): ?>

					  <tr>
                                        <td><?php echo $q['numeroCaixa']; ?></td>
                                        <td><?php echo $q['codigoPrime']; ?></td>
                                        <td><?php echo $q['responsavel']; ?></td>
                                        

                                        <td align=center><a href="exibePrime.php?idPrime=<?php echo $q['idPrime']; ?>"><img src=imagens/browse.png /></a></td>

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
								echo "  <a href=\"?pagina=$i&contexto=$contexto&busca=$busca\" class='texto_paginacao'>$i</a>";
							} else {
								echo "  <strong class='texto_paginacao_pgatual'>" . $i . "</strong>";
							}
						}
							if ($mais <= $pgs)
							 {
								echo "   <a href=\"?pagina=$mais\" class='texto_paginacao'>Próxima</a>";
							}
			    }		
			?>	
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
