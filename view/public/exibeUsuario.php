<?php include_once("../../controller/monitoraSessao.php"); ?>
<?php $nome = $_GET['nome']; ?>
<?php $telefone = $_GET['telefone']; ?>
<?php $orientador = $_GET['orientador']; ?>
<?php $instituicao = $_GET['instituicao']; ?>
<?php $departamento = $_GET['departamento']; ?>
<?php $laboratorio = $_GET['laboratorio']; ?>
<?php $username = $_GET['username']; ?>
<?php $nivel = $_GET['nivel']; ?>
<?php include_once("../../controller/monitoraSessao.php"); ?>
<?php include_once("../../persistence/ManipulaBase.php"); ?>
<?php include_once("../../controller/Conexao.php"); ?>
<?php $query = new ManipulaBase(); ?>
<?php ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="">
        <link href="estilo/Estilo.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="estilo/menuSuperior.css"media="all" />
        <script language="javascript" type="text/javascript"
        src="js/menuSuperior.js"></script>
        <title>Genome Virus</title>
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
                        <CENTER><h2>Usuário</h2></CENTER>
                        <center>
                            <table>
                                <tr>
                                    <td>Nome</td><td><?php echo $nome ?></td>
                                </tr>
                                <tr>
                                    <td>Telefone</td><td><?php echo $telefone ?></td>
                                </tr>
                                <tr>
                                    <td>Orientador</td><td><?php echo $orientador ?></td>
                                </tr>
                                <tr>
                                    <td>Instituicao</td><td><?php echo $instituicao ?> </td>
                                </tr>
                                <tr>
                                    <td>Departamento</td><td><?php echo $departamento ?></td>
                                </tr>
                                <tr>
                                    <td>Laboratorio</td><td><?php echo $laboratorio ?></td>
                                </tr>
                                <tr>
                                    <td>Username</td><td><?php echo $username ?></td>
                                </tr>

                                <tr>
                                    <td>Nivel</td><td><?php echo $nivel ?></td>
                                </tr>
                            </table>
                        </center>
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
