<?php require_once 'PHPHeader/AcompanhamentosGeraisHeader.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php require_once 'PHPHeader/Head.php'; ?>
        <title>Acompanhamentos</title>
    </head>
    <body class="blue lighten-4">
        <nav>
            <div class="nav-wrapper blue-grey darken-4">
                <a href="#" class="brand-logo center">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="AreaAdministrativa.php">Área Administrativa</a></li>
                </ul>
            </div>
        </nav>

        <!-- NESTA ÁREA SERÁ POSSIVEL CADASTRAR UM ACOMPANHAMENTO, PESQUISAR COM OS INDICES SIMPLES E SELECIONAR UM INDIVIDUAL-->
        <div class="row container center">
            <div class="col s12 l12">
                </br>
                <div class="card blue-grey darken-4 white-text"><div class="row"><h4>ACOMPANHAMENTOS GERAIS</h4></div></div>
                <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisCadastroBody.php'; ?></form>
                <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisTableBody.php'; ?></form>    
            </div>
        </div>

        <script type="text/javascript" src="js/materialize.js"></script>
        <script>
            $('.dropdown-button').dropdown({
                container: document.body
            });
            $(document).ready(function () {
                $('select').formSelect();
                $('.sidenav').sidenav();
                $('.collapsible').collapsible();
                $('.tooltipped').tooltip();
                $('.modal').modal();
            });
        </script>
    </body>
</html>
