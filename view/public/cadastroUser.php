<?php
include_once("../../controller/monitoraSessao.php");
include_once("../../persistence/ManipulaBase.php");
include_once("../../controller/Conexao.php");

$query = new ManipulaBase();
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
        <title>Usuario</title>
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
                        <center><head> <h2>Cadastro de Usuario</h2></head></center>
                        <?php if (isset($_GET['msg'])): ?>
                            <center><div id="mensagem"><?php echo $_GET['msg']; ?></div></center>
                        <?php endif; ?>
                        <?php
                            if (isset($_REQUEST['id'])) {

                                $dados = $query->detalhesPessoa($_REQUEST['id']);
                            } else {
                                $dados = array(
                                    'id' => '',
                                    'nome' => '',
                                    'telefone' => '',
                                    'orientador' => '',
                                    'instituicao' => '',
                                    'departamento' => '',
                                    'laboratorio' => '',
                                    'username' => '',
                                    'password' => '',
                                    'nivel' => '',
                                );
                            }
                        ?>

                            <center>
                                <form action="controleCadastroUsuario.php" name="usuario" method="POST">
                                    <table align="center">
                                        <tr>
                                           
                                            <td></td> <td><input id="id" type="hidden" name="_id" size="2" value="<?php echo $dados['id']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Nome:</td> <td><input id="nome" type="text" name="_nome" size="50" value="<?php echo $dados['nome']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Email/Telefone:</td> <td><input id="telefone" type="text" name="_telefone" size="50" value="<?php echo $dados['telefone']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Orientador:</td> <td><input id="orientador" type="text" name="_orientador" size="50" value="<?php echo $dados['orientador']; ?>"</td>
                                        </tr>
                                    </table>
                                   
                                    <table>
                                        <tr>
                                            <td>Instituicao:</td> <td><input id="instituicao" type="text" name="_instituicao" size="50" value="<?php echo $dados['instituicao']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Departamento:</td> <td><input id="departamento"type="text" name="_departamento" size="50" value="<?php echo $dados['departamento']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Laboratorio:</td> <td><input id="laboratorio" type="text" name="_laboratorio" size="50" value="<?php echo $dados['laboratorio']; ?>"</td>
                                        </tr>
                                    </table>
                                  
                                    <table>
                                        <tr>
                                            <td>Username:</td> <td><input id="username" type="text" name="_username" size="20" value="<?php echo $dados['username']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Password:</td> <td><input id="password" type="password" name="_password" size="20" value="<?php echo $dados['password']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Nivel:</td></td> <td><input id="nivel" type="text" name="_nivel" size="2" value="<?php echo $dados['nivel']; ?>"</td>
                                        <tr>
                                            <td>0 - Adm</td>
                                        </tr>
                                        <tr>
                                            <td>1 - User</td>
                                        </tr>

                                    </table>
                                    <div>
                                        <input type="submit" name="operacao" value="Cadastrar"/>
                                         <input type="submit" name="operacao" value="Atualizar"/>
                                         <input type="submit" name="operacao" value="Excluir"/>
                                         <input type="reset" value="Limpar"/>
                                    </div>
                                </form>
                            </center>

                            <br>
                            <table class="dados" align=center>
                                <tr align=center class="titulo"><td>Nome</td><td>Telefone</td><td>Orientador</td><td>Instituicao</td><td>Departamento</td><td>Laboratorio</td><td>Exibir</td><td>Editar</td><td>Excluir</td></tr>
                            <?php
                            $result = $query->AcessaTabela('usuario');
                            while ($linha = $query->ExibeDados($result)) {

                                echo "<tr>";

                                echo "<td>" . $linha['nome'] . "</td>";
                                echo "<td>" . $linha['telefone'] . "</td>";
                                echo "<td>" . $linha['orientador'] . "</td>";
                                echo "<td>" . $linha['instituicao'] . "</td>";
                                echo "<td>" . $linha['departamento'] . "</td>";
                                echo "<td>" . $linha['laboratorio'] . "</td>";


                                echo "<td align=center><a href=\"exibeUsuario.php?id=" . $linha['id'] . "&nome=" . $linha['nome'] . "&telefone=" . $linha['telefone'] . "&orientador=" . $linha['orientador'] . "&instituicao=" . $linha['instituicao'] . "&departamento=" . $linha['departamento'] . "&laboratorio=" . $linha['laboratorio'] . "&username=" . $linha['username'] . "&nivel=" . $linha['nivel'] . "\"><img src=imagens/browse.png></a></td>";

                                echo "<td align=center><a href=\"cadastroUser.php?id=" . $linha['id'] . "\"><img src=imagens/edit.png> </a></td>";

                                echo "<td align=center><a href=\"cadastroUser.php?id=" . $linha['id'] . "\"><img src=imagens/drop.png> </a></td>";

                                echo "<tr>";
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
