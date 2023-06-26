<?php if ($_SESSION['nivel'] == 0):; ?>
    <div class="menu">
        <ul id="navmenu-h">

            <li><a href="index.php">Home</a>
            </li>
            <li><a href="#fixo">Materiais e Reagentes</a>
                <ul>
                    <li><a href="cadastroGavetas.php">Cadastro Materiais</a></li>
                    <li><a href="consultaGavetas.php">Consultas Gerais</a></li>
                </ul>
            </li>
				<li><a href="#fixo">Primers</a>
                <ul>
                    <li><a href="cadastroPrime.php">Cadastro de Primers</a></li>
                    <li><a href="consultaPrime.php">Consultar Primers</a></li>
                 </ul>
            </li>
            <li><a href="#fixo">Cadastro</a>
                <ul>
                    <li><a href="cadastroUser.php">Usuário</a></li>
                </ul>
            </li>

            <li><a href="logout.php">Sair</a></li>

        </ul>
    </div>
<?php endif; ?>

<?php if (($_SESSION['nivel'] != 0)): ?>
        <div class="menu">
            <ul id="navmenu-h">

            <li><a href="index.php">Home</a>
            </li>
            <li><a href="#fixo">Meteriais e Reagentes</a>
                <ul>
                    <li><a href="cadastroGavetas.php">Cadastro Meteriais</a></li>
                    <li><a href="consultaGavetas.php">Consultas Gerais</a></li>
                </ul>
            </li>
				<li><a href="#fixo">Primers</a>
                <ul>
                    <li><a href="cadastroPrime.php">Cadastro de Primers</a></li>
                    <li><a href="consultaPrime.php">Consultar Primers</a></li>
                 </ul>
            </li>
            <li><a href="logout.php">Sair</a></li>

            </ul>
        </div>
<?php endif; ?>
