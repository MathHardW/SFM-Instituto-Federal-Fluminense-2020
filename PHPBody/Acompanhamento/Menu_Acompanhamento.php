<header>
    <div class="navbar-fixed green darken-4">
        <nav>
            <div class="nav-wrapper green darken-4">                                 
                <a class="brand-logo center" onclick="$('.tap-target').tapTarget('open')" id="menu"><img src="IMG/logo2.png" width="105px"></a>

                <!-- Tap Target Structure -->
                <div class="tap-target green darken-4 z-depth-5" data-target="menu" style="border-style: solid;border-width: 2px;border-color: white;">
                    <div class="tap-target-content">
                        <?php foreach ($acompanhamentoDAO->querySelectId($_GET['acompanhamento']) as $result) { ?>
                            <h6 class="center flow-text">
                                Acompanhamento: <b><?= $result[1] ?></b>.<br/>
                                Do curso de: <b><?= $result[3] ?></b>.<br/>
                                Administrado pelo servidor (a): <b><?= $result[2] ?></b>.<br/><br/>

                                Início : <b><?= $result[4] ?></b>.<br/>
                                Término: <b><?= $result[5] ?></b>.
                            </h6>
                        <?php } ?> 
                    </div>
                </div>

                <ul class="right">
                    <li><a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons prefix">menu</i></a></li>                     
                </ul> 
            </div>
        </nav>
    </div>

    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content green-text text-darken-4'>
        <li><a href="#!" class="center-align green-text text-darken-4"><b><?= $_SESSION['nomeUsuario'] ?></b></a></li>
        <li class="divider"></li>
        <li><a href="AcompanhamentosGerais.php" class="green-text text-darken-4"><i class="material-icons">home</i>Página Principal</a></li>
        <?php
        if ($_SESSION['permissao'] >= 1) {
            echo "<li><a href='AreaAdministrativa.php' class='green-text text-darken-4'><i class='material-icons'>security</i>Área Administrativa</a></li>";
        }
        ?>
        <li><a href='Analises.php' class='green-text text-darken-4'><i class='material-icons'>call_missed</i>Análises de Dados</a></li>

        <li><a href="?sair=sim" class="green-text text-darken-4"><i class="material-icons">exit_to_app</i>Sair</a></li>
    </ul>
</header>  