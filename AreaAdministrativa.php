<?php require_once 'PHPHeader/AreaAdmHeader.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php require_once 'PHPHeader/Head.php'; ?>
        <title>Área Administrativa</title>
    </head>
    <body>               
        <header>
            <div class="navbar-fixed green darken-4">
                <nav>
                    <div class="nav-wrapper green darken-4">                                 
                        <a href="acompanhamentos.php" class="brand-logo center"><img src="IMG/logo2.png" width="105px"></a>
                        <ul class="left">                            
                            <li> <a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">menu</i></a></li>
                        </ul>
                        <ul class="right">
                            <li><a href="AcompanhamentosGerais.php"><i class="material-icons prefix">home</i></a></li>                     
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
        <div class="row container center">
            <form action="" method="POST">     
                <?php require_once 'PHPBody/AreaAdministrativa/Cidade_AreaAdministrativa.php'; ?>   
                <?php require_once 'PHPBody/AreaAdministrativa/CMN_AreaAdministrativa.php'; ?>   
                <?php require_once 'PHPBody/AreaAdministrativa/TipoAtividade_AreaAdministrativa.php'; ?> 
            </form>    
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
