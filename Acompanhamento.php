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
                                        Olá usuário MAD! <br/><br/>Acompanhamento: <b><?= $result[1] ?></b>.<br/>
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
            <form action="" method="POST"> 
                <div class="col s12 l6">
                    <?php require_once 'PHPBody/FichasBody.php'; ?>
                </div>
                <div class="col s12 l6">
                    <?php require_once 'PHPBody/AtividadesBody.php'; ?>
                </div>
            </form>
        </div>

        <div class="row container center">
            <div class="col s12 l12">
                <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaFicha" style="border-style: solid;border-width: 1px;border-color: black;">
                    <tr class="grey lighten-1">
                        <td><b>Código</b></td>
                        <td><b>Trabalha</b></td>
                        <td><b>Dependentes</b></td>
                        <td><b>Especial</b></td>
                        <td><b>Moradia</b></td>
                        <td><b>Sexo</b></td>
                        <td><b>Data</b></td>
                        <td><b>Cidade</b></td>
                        <td><b>Ações</b></td>
                    </tr>
                    <?php foreach ($fichaDAO->querySelect() as $result) { ?>
                        <tr>
                            <td><h6><b><?= $result[1] ?></b></h6></td>
                            <td><?php if ($result[3] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                            <td><?php if ($result[4] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                            <td><?php if ($result[5] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                            <td><?php if ($result[6] == 1) { ?> <img src="IMG/true.png" height="50px" width="40px"> <?php } else { ?> <img src="IMG/false.png" height="35px" width="35px"> <?php } ?></td>
                            <td><?php if ($result[7] == "M") { ?> <img src="IMG/boy.png" height="40px" width="40px"> <?php } else { ?> <img src="IMG/woman.png" height="40px" width="40px"> <?php } ?></td>
                            <td><?= $result[8] ?></td>
                            <td><?= $result[12] ?></td>
                            <td>
                                <a href="?edita=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                                    <i class="material-icons">delete</i>
                                </a>

                                <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                                    <i class="material-icons">edit</i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?> 
                </table>
                <br/>
                <div class="col-md-12 center text-center">
                    <span class="left" id="total_reg"></span>
                    <ul class="pagination pager" id="paginaFicha"></ul>
                </div>
            </div>
            <div class="divider"></div>
            <div class="col s12 l12">
                </br></br><div class="divider"></div>
                <table cellpadding="1" cellspacing="1" class="table table-hover responsive-table centered highlight z-depth-3 white" id="tabelaAtividade" style="border-style: solid;border-width: 1px;border-color: black;">
                    <tr class="grey lighten-1">
                        <td><b>Título</b></td>
                        <td><b>Servidor</b></td>
                        <td><b>Publíco<br/>Alvo</b></td>
                        <td><b>Descrição</b></td>
                        <td><b>Resultados<br/>Esperados</b></td>
                        <td><b>Resultados<br/>Obtidos</b></td>
                        <td><b>Início</b></td>
                        <td><b>Fim</b></td>
                        <td><b>Tipo de Atividade</b></td>
                        <td><b>Ações</b></td>
                    </tr>
                    <?php foreach ($atividadeDAO->querySelect() as $result) { ?>
                        <tr>
                            <td><?= $result[1] ?></td>
                            <td><?= $result[2] ?></td>
                            <td><?= $result[4] ?></td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="#modalD<?= $result[0] ?>"><i class="material-icons">description</i></a></td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="#modalRE<?= $result[0] ?>"><i class="material-icons">dvr</i></a></td>
                            <td><a class="waves-effect waves-light btn modal-trigger" href="#modalRO<?= $result[0] ?>"><i class="material-icons">flag</i></a></td>
                            <td><?= $result[7] ?></td>
                            <td><?= $result[8] ?></td>
                            <td><?= $result[12] ?></td>
                            <td>
                                <a href="?edita=<?= $result[0] ?>" class="btn tooltipped" data-position="top" data-tooltip="Selecione para Apagar Acompanhamento" name="btn-deletarAcompanhamento">
                                    <i class="material-icons">delete</i>
                                </a>

                                <a href="?excluir=<?= $result[0] ?>" class="btn tooltipped" data-position="bottom" data-tooltip="Selecione para Visualizar o Acompanhamento" name="btn-selecionarAcompanhamento">
                                    <i class="material-icons">edit</i>
                                </a>
                            </td>
                        </tr>

                        <!-- Modal Structure -->
                        <div id="modalD<?= $result[0] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Descrição da Atividade</h4>
                                <p><?= $result[3] ?></p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                            </div>
                        </div>

                        <!-- Modal Structure -->
                        <div id="modalRE<?= $result[0] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Resultados Esperados</h4>
                                <p><?= $result[5] ?></p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                            </div>
                        </div>

                        <!-- Modal Structure -->
                        <div id="modalRO<?= $result[0] ?>" class="modal">
                            <div class="modal-content">
                                <h4>Resultados Obtidos</h4>
                                <p><?= $result[6] ?></p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                            </div>
                        </div>
                    <?php } ?> 
                </table>
                <br/>
                <div class="col-md-12 center text-center">
                    <span class="left" id="total_reg"></span>
                    <ul class="pagination pager" id="paginaAtividade"></ul>
                </div>
            </div>
        </div>

        <footer class="page-footer green darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Sistema MAD</h5>
                        <p class=" center-block grey-text text-lighten-4">Sistema para acompanhamento de atividades e alunos do Instituto Federal Fluminense, Campus Itaperuna.
                            Desenvolvido para o Núcleo de Atendimento Estudantil - NAE. </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Redes Sociais</h5>
                        <ul>                           
                            <a class="grey-text text-lighten-3" href="#!"><img href="#!" src="IMG/social_facebook_fb_35.png"></a>
                            <a class="grey-text text-lighten-3" href="#!"><img href="#!" src="IMG/social_instagram_3.png"></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 6º Periodo Sistemas de Informação IFF Itaperuna
                </div>
            </div>
        </footer>

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

                                $('#tabelaFicha').pageMe({
                                    pagerSelector: '#paginaFicha',
                                    activeColor: 'green darken-4',
                                    prevText: 'Anterior',
                                    nextText: 'Siguiente',
                                    showPrevNext: true,
                                    hidePageNumbers: false,
                                    perPage: 5
                                });

                                $('#tabelaAtividade').pageMe({
                                    pagerSelector: '#paginaAtividade',
                                    activeColor: 'green darken-4',
                                    prevText: 'Anterior',
                                    nextText: 'Siguiente',
                                    showPrevNext: true,
                                    hidePageNumbers: false,
                                    perPage: 5
                                });
                            });

                            $('#SelectFicha').on('change', function () {
                                var value = $(this).val();
                                alert(value);
                            });
        </script>
    </body>
</html>
