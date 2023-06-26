<?php
include_once("../../controller/monitoraSessao.php");
include_once("../../persistence/ManipulaBase.php");

$query = new ManipulaBase();

if (isset($_REQUEST['idseq'])) {

    $dados = array(
        'idseq' => '',
        'codisolado' => '',
        'nomevirus' => '',
        'familia' => '',
        'genero' => '',
        'sequencia' => '',
        'hospedeiro' => '',
        'cidade' => '',
        'estado' => '',
        'datacoleta' => '',
        'latitude' => '',
        'longitude' => '',
    );

    $dados = $query->detalhesGaveta($_REQUEST['idseq']);
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
          
    <CENTER><h2> Sequencia  </h2></CENTER>
    <body>
        <center>
            <table>
                <tr>
                    <td>Codigo do isolado </td><td>	<?php echo $dados['codisolado']; ?></td>
                </tr>
                <tr>
                    <td>Nome do Virus</td><td><?php echo $dados['nomevirus']; ?></td>
                </tr>
                <tr>
                    <td>Familia</td><td><?php echo $dados['familia']; ?></td>
                </tr>
                <tr>
                    <td>Genero</td><td><?php echo $dados['genero']; ?></td>
                </tr>
                <tr>
                    <td>Hospedeiro</td><td><?php echo $dados['hospedeiro']; ?></td>
                </tr>
                <tr>
                    <td>Cidade</td><td><?php echo $dados['cidade']; ?></td>
                </tr>
                <tr>
                    <td>Estado</td><td><?php echo $dados['estado']; ?></td>
                </tr>
                <tr>
                    <td>Data da Coleta</td><td><?php echo $dados['datacoleta']; ?></td>
                </tr>
                <tr>
                    <td>Latitude</td><td><?php echo $dados['latitude']; ?></td>
                </tr>
                <tr>
                    <td>Longitude</td><td><?php echo $dados['longitude']; ?></td>
                </tr>
                <tr>
                    <td>Sequencia</td><td><?php echo $dados['sequencia']; ?></td>
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

 </body>
</html>

