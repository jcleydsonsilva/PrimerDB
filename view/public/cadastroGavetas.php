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
        <title>Cadastro de materiais</title>
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
                        <center><head> <h2>Cadastro de Materiais e Reagentes</h2></head></center>
                        <?php if (isset($_GET['msg'])): ?>
                            <div id="mensagem"><?php echo $_GET['msg']; ?></div>
                        <?php endif; ?>
                        <?php
                            if (isset($_REQUEST['idgav'])) {

                                $dados = $query->detalhesGaveta($_REQUEST['idgav']);
                            } else {
                                $dados = array(
                                    'idgav'         => '',
                                    'numero_gaveta' => '',
                                    'nome_produto'  => '',
                                    'descricao'     => '',
                                    'observacao'    => '',
                                    'responsavel'   => '',
                               );
                            }
                        ?>

                            <form action="../../controller/controleCadastroGavetas.php" name="sequenciaForm" method="POST">
                                <table>

                                        <td></td> <td><input id="idgav" type="hidden" name="idgav" size="2" value="<?php echo $dados['idgav']; ?>"</td>
                                    </tr>
                                    <tr>
                                        <td>Número da Gaveta/Armario:</td><td><input id="numero_gaveta" type="text" name="numero_gaveta" size="50" value="<?php echo $dados['numero_gaveta']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Nome do produto:</td><td><input id="nome_produto" type="text" name="nome_produto" size="50" value="<?php echo $dados['nome_produto']; ?>"></td>
                                    </tr>

                                    <tr>
                                        <td>Descrição:</td> <td><textarea id="descricao" type="text" name="descricao" cols=52 rows=4><?php echo $dados['descricao']; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Observação:</td> <td><textarea id="observacao" type="text" name="observacao" cols=52 rows=4><?php echo $dados['observacao']; ?></textarea></td>
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

                            <br>

                        <?php $user = $_SESSION['id']; ?>

                        <?php $result = $query->SelecionaGaveta('gaveta', $user); ?>

                            <table class="dados" align=center>
                                <tr align=center class="titulo"><td>Gaveta</td><td>Nome do produto</td><td>Responsavel</td><td>Exibir</td><td>Editar</td><td>Excluir</td></tr>
	                            <?php while ($linha = mysql_fetch_assoc($result)): ?>
                                <tr>
                                    <td><?php echo $linha['numero_gaveta']; ?></td>
                                    <td><?php echo $linha['nome_produto']; ?></td>
                                    <td><?php echo $linha['responsavel']; ?></td>
                                    

                                    <td align=center><a href="exibeConsulta.php?idgav=<?php echo $linha['idgav']; ?>"><img src=imagens/browse.png /></a></td>
                                    <td align=center><a href="cadastroGavetas.php?idgav=<?php echo $linha['idgav']; ?>"><img src=imagens/edit.png> </a></td>
                                    <td align=center><a href="cadastroGavetas.php?idgav=<?php echo $linha['idgav']; ?>"><img src=imagens/drop.png> </a></td>
                                </tr>
                            <?php endwhile; ?>
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
