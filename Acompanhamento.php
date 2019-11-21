<?php
require_once 'PHPHeader/AcompanhamentosGeraisHeader.php';
require_once 'PHPHeader/FichasHeader.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <?php require_once 'PHPHeader/Head.php'; ?>
        <title>Acompanhamento</title>
    </head>
    <body class="blue lighten-4">
        <nav>
            <div class="nav-wrapper blue-grey darken-4">
                <a href="#" class="brand-logo center">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="AcompanhamentosGerais.php">Acompanhamentos</a></li>
                </ul>
            </div>
        </nav>

        <!-- NESTA ÁREA SERÁ POSSIVEL CADASTRAR UM ACOMPANHAMENTO, PESQUISAR COM OS INDICES SIMPLES E SELECIONAR UM INDIVIDUAL-->
        <div class="row container center">
            <div class="col s12 l12">
                </br>
                <div class="card blue-grey darken-4 white-text">
                    <div class="row">
                        <h4>ACOMPANHAMENTO</h4>
                        <?php foreach ($acompanhamentoDAO->querySelectId($_GET['acompanhamento']) as $result) { ?>
                            <h5><?= $result[1] ?> <?= $result[2] ?> <?= $result[3] ?> <?= $result[4] ?> <?= $result[5] ?></h5>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row container center">
            <div class="col s12 l6">
                <form action="" method="POST"><?php require_once 'PHPBody/FichasBody.php'; ?></form>
            </div>
            <div class="col s12 l6">
                <form action="" method="POST"><?php require_once 'PHPBody/AtividadesBody.php'; ?></form>
            </div>
            <div class="col s12 l12">
                </br></br><div class="divider"></div>
                <table border="1" class="centered responsive-table">
                    <tr>
                        <td>id</td>
                        <td>Código</td>
                        <td>Update</td>
                        <td>Trabalha</td>
                        <td>Dependentes</td>
                        <td>Especial</td>
                        <td>Moradia</td>
                        <td>Sexo</td>
                        <td>Data</td>
                        <td>Acompanhamento</td>
                        <td>Cidade</td>
                        <td>Ações</td>
                    </tr>
                    <?php foreach ($fichaDAO->querySelect() as $result) { ?>
                        <tr>
                            <td><?= $result[0] ?></td>
                            <td><?= $result[1] ?></td>
                            <td><?= $result[2] ?></td>
                            <td><?= $result[3] ?></td>
                            <td><?= $result[4] ?></td>
                            <td><?= $result[5] ?></td>
                            <td><?= $result[6] ?></td>
                            <td><?= $result[7] ?></td>
                            <td><?= $result[8] ?></td>
                            <td><?= $result[9] ?></td>
                            <td><?= $result[10] ?></td>
                            <td>
                                <a href="?edita=<?= $result[0] ?>">EDITAR</a>
                                <a href="?excluir=<?= $result[0] ?>">EXCLUIR</a>
                            </td>
                        </tr>
                    <?php } ?> 
                </table>
            </div>
            <div class="divider"></div>
            <div class="col s12 l12">
                </br></br><div class="divider"></div>
                <table border="1" class="centered responsive-table">
                    <tr>
                        <td>id</td>
                        <td>Código</td>
                        <td>Update</td>
                        <td>Trabalha</td>
                        <td>Dependentes</td>
                        <td>Especial</td>
                        <td>Moradia</td>
                        <td>Sexo</td>
                        <td>Data</td>
                        <td>Acompanhamento</td>
                        <td>Cidade</td>
                        <td>Ações</td>
                    </tr>
                    <?php foreach ($fichaDAO->querySelect() as $result) { ?>
                        <tr>
                            <td><?= $result[0] ?></td>
                            <td><?= $result[1] ?></td>
                            <td><?= $result[2] ?></td>
                            <td><?= $result[3] ?></td>
                            <td><?= $result[4] ?></td>
                            <td><?= $result[5] ?></td>
                            <td><?= $result[6] ?></td>
                            <td><?= $result[7] ?></td>
                            <td><?= $result[8] ?></td>
                            <td><?= $result[9] ?></td>
                            <td><?= $result[10] ?></td>
                            <td>
                                <a href="?edita=<?= $result[0] ?>">EDITAR</a>
                                <a href="?excluir=<?= $result[0] ?>">EXCLUIR</a>
                            </td>
                        </tr>
                    <?php } ?> 
                </table>
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
