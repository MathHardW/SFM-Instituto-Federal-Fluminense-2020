<?php require_once 'PHPHeader/AcompanhamentosGeraisHeader.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php require_once 'PHPHeader/Head.php'; ?>
        <title>Acompanhamentos</title>
    </head>
    <body class="grey lighten-5">
        <header>
            <div class="navbar-fixed green darken-4">
                <nav>
                    <div class="nav-wrapper green darken-4">                                 
                        <a href="acompanhamentos.php" class="brand-logo center"><img src="IMG/logo2.png" width="105px"></a>
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

        <!-- NESTA ÁREA SERÁ POSSIVEL CADASTRAR UM ACOMPANHAMENTO, PESQUISAR COM OS INDICES SIMPLES E SELECIONAR UM INDIVIDUAL-->
        <div class="row container center">
            <div class="col s12 l12">
                <div class="row">
                    <div class="col s12 l12  grey lighten-2" style="border-style: solid;border-width: 1px;border-color: black;"><h4>ACOMPANHAMENTOS GERAIS</h4></div></br>
                </div>
                <div class="row">
                    <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisCadastroBody.php'; ?></form>
                </div>
                <div class="row">
                    <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisTableBody.php'; ?></form>    
                </div>
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
                $('.datepicker').datepicker();
                $('.dropdown-trigger').dropdown();

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
