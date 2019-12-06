<?php
require_once 'PHPHeader/AcompanhamentosGeraisHeader.php';
require_once 'PHPHeader/FichasHeader.php';
require_once 'PHPHeader/AtividadesHeader.php';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <?php require_once 'PHPHeader/Head.php'; ?>
        <title>Acompanhamento</title>
    </head>
    <body class="grey lighten-5">
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
                                    Olá usuário MAD! <br/><br/>Você está no Acompanhamento: <b><?= $result[1] ?></b>.<br/>
                                    Do curso de: <b><?= $result[3] ?></b>.<br/>
                                    Administrado pelo servidor (a): <b><?= $result[2] ?></b>.<br/><br/>
                                    
                                    Início : <b><?= $result[4] ?></b>.<br/>
                                    Término: <b><?= $result[5] ?></b>.
                                </h6>
                                <?php } ?> 
                            </div>
                        </div>

                        <ul class="left">                            
                            <li> <a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">account_circle</i></a></li>
                        </ul>
                        <ul class="left">
                            <li><a href="acompanhamentos.php"><i class="material-icons prefix">home</i></a></li>                     
                        </ul> 
                    </div>
                </nav>
            </div>
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>        
                </br>
                <li><a href="#usuario"><span class=" name">Nome: Lucas Soares</span></a></li>
                <li><a href="#email"><span class=" email">Email: lucassoaresgranja@yahoo.com.br</span></a></li>

                <li class="divider" tabindex="-1"></li>
                <li><a href="CadastrarAcompanhamento.php"><i class="material-icons center">people_outline</i>Acompanhamentos</a></li>
                <li><a href="abas.php"><i class="material-icons center">view_compact</i>Administração</a></li>
                <li><a href="#!"><i class="material-icons center">backspace</i>Sair</a></li>
            </ul>

            <ul id="slide-out" class="sidenav">
                <li><div class="user-view">
                        <!--<div class="background">
                            <img src="images/office.jpg">
                        </div>-->
                        <a href="#user"><img class="circle" src="../IMG/logo.png"></a>
                        <a href="#usuario"><span class=" name">Nome: Lucas Soares</span></a>
                        <a href="#email"><span class=" email">Email: lucassoaresgranja@yahoo.com.br</span></a>
                    </div></li>
                <li><a href="#!" class="waves-effect"><i class="material-icons">home</i>Inicio</a></li>
                <li><a href="#!" class="waves-effect"><i class="material-icons">home</i>Acompanhamentos</a></li>
                <li><a href="#!" class="waves-effect"><i class="material-icons">home</i>Administração</a></li>

                <li><div class="divider"></div></li>
                <li><a class="subheader">Informações</a></li>
                <li><a class="waves-effect" href="#!">Link</a></li>
            </ul>
          <!--  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">account_circle</i></a>-->
        </header>  
        </br>
        <div class="row container center">
            <div class="col l1">.</div>
            <div class="col s12 l4  grey lighten-2" style="border-style: solid;border-width: 1px;border-color: black;">
                <form action="" method="POST"> <?php require_once 'PHPBody/FichasBody.php'; ?> </form></br>
            </div>
            <div class="col l1">.</div>
            <div class="col s12 l5  grey lighten-2" style="border-style: solid;border-width: 1px;border-color: black;">
                <form action="" method="POST"> <?php require_once 'PHPBody/AtividadesBody.php'; ?> </form>
            </div>
            <div class="col l1">.</div>
        </div>

        <div class="row container center">
            <div class="col s12 l12">
                </br></br><div class="divider"></div>
                <table border="1" class="centered responsive-table">
                    <tr>
                        <td>Código</td>
                        <td>Trabalha</td>
                        <td>Dependentes</td>
                        <td>Especial</td>
                        <td>Moradia</td>
                        <td>Sexo</td>
                        <td>Data</td>
                        <td>Cidade</td>
                        <td>Ações</td>
                    </tr>
                    <?php foreach ($fichaDAO->querySelect() as $result) { ?>
                        <tr>
                            <td><?= $result[1] ?></td>
                            <td><?= $result[3] ?></td>
                            <td><?= $result[4] ?></td>
                            <td><?= $result[5] ?></td>
                            <td><?= $result[6] ?></td>
                            <td><?= $result[7] ?></td>
                            <td><?= $result[8] ?></td>
                            <td><?= $result[12] ?></td>
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
                        <td>Título</td>
                        <td>Servidor</td>
                        <td>Descrição</td>
                        <td>Publíco Alvo</td>
                        <td>Resultados Esperados</td>
                        <td>Resultados Obtidos</td>
                        <td>Data Início</td>
                        <td>Data Fim</td>
                        <td>Tipo de Atividade</td>
                        <td>Ações</td>
                    </tr>
                    <?php foreach ($atividadeDAO->querySelect() as $result) { ?>
                        <tr>
                            <td><?= $result[1] ?></td>
                            <td><?= $result[2] ?></td>
                            <td><?= $result[3] ?></td>
                            <td><?= $result[4] ?></td>
                            <td><?= $result[5] ?></td>
                            <td><?= $result[6] ?></td>
                            <td><?= $result[7] ?></td>
                            <td><?= $result[8] ?></td>
                            <td><?= $result[12] ?></td>
                            <td>
                                <a href="?edita=<?= $result[0] ?>">EDITAR</a>
                                <a href="?excluir=<?= $result[0] ?>">EXCLUIR</a>
                            </td>
                        </tr>
                    <?php } ?> 
                </table>
            </div>

        </div>

        <div class="row container">

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
                                $('.datepicker').datepicker({
                                    format: 'yyyy-mm-dd'
                                });
                                $('.dropdown-trigger').dropdown();
                                $('.tap-target').tapTarget();

                                $('#tabelaAcompanhamento').pageMe({
                                    pagerSelector: '#paginaAcompanhamento',
                                    activeColor: 'green darken-4',
                                    prevText: 'Anterior',
                                    nextText: 'Siguiente',
                                    showPrevNext: true,
                                    hidePageNumbers: false,
                                    perPage: 5
                                });
                            });
        </script>
    </body>
</html>
