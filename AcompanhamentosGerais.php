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
                            <li> <a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">menu</i></a></li>
                        </ul>
                        <ul class="right">
                            <li><a href="AreaAdministrativa.php"><i class="material-icons prefix">security</i></a></li>                     
                        </ul> 
                    </div>
                </nav>
            </div>
            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>        
                </br>
                <li><a href="#usuario"><i class="material-icons">account_circle</i><span class=" name"><b>Lucas Soares</b></span></a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="AreaAdministrativa.php"><i class="material-icons center">view_compact</i>Administração</a></li>
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
                <br/>
                <div class="row" >
                    <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisCadastroBody.php'; ?></form>
                </div>

                <div class="row">
                    <div class="col s12 l11">
                        <input type="text" name="pesquisarAcompanhamento"  id="pesquisarAcompanhamento" placeholder="Pesquisar Acompanhamento" >
                    </div>
                    <div class="col s12 l1">
                        <a class=" btn-large waves-effect waves-light"><i class="material-icons">search</i></a>
                    </div>
                </div>

                <div class="row">
                    <form action="" method="POST"><?php require_once 'PHPBody/AcompanhamentosGeraisTableBody.php'; ?></form>    
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
        <script type="text/javascript" src="js/ajaxAcompanhamentosGerais.js"></script>

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
