<html>
<head>
	<title> Controle de Materiais e Reagentes - Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
	<link rel="stylesheet" href="public/estilo/Estilo.css" type="text/css">
</head>
<body onload="">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">

<?php if(isset($_GET['msg'])): ?>
<div id="mensagem"><center><?php echo $_GET['msg']; ?></center></div>
<?php endif; ?>

<form method="POST" action="../controller/controleAutenticacao.php">
<tr>
	<td valign="middle" align="center">
		<img src="public/imagens/virus.png"><br>
		<h2>Controle de Materiais e Reagentes<h2>
		<center>
      <table class="bloco5" width="200" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td class="texto" width="70"> Login: </td>
			<td class="campo" width="130"><input name="username" type="text" size="15"></td>
		</tr>
		<tr>
			<td class="texto" width="70"> Senha: </td>

			<td class="campo" width="130"><input name="password" type="password" size="15"></td>
		</tr>
		<tr>
		<td colspan="2" class="campo_centralizado">
		<input id="btnOk" type="submit" name="evento" value=" Autenticar " class="botao" onmouseover="hover(this,'botao_over')" onmouseout="hover(this,'botao')" align="center">
			</td>
		</tr>
		</table> 
		</center>
	</td>

</tr>
</form>
</table>
</body>
</html>
