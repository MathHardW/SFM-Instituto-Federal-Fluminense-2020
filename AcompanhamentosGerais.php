<?php
require_once 'PHPHeader/AcompanhamentosGeraisHeader.php';

//BUSCANDO A CLASSSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/UsuarioDAO.php';

//ESTANCIANDO
$usuarioDAO = new UsuarioDAO();

//VALIDANDO O USUÁRIO
session_start();
if ($_SESSION['logado'] == "logado") {
    $usuarioDAO->queryLogado($_SESSION['usuarioID']);
} else {
    header("location: http://localhost/PROJETO_VERSAO_3.0/index.php");
}

//DESLOGANDO
if (!empty($_GET['sair']) == "sim") {
    $usuarioDAO->querySair();
}
?>

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
                        <ul class="left">
                            <li>
                                <img src="IMG/copyright.png" class="hide-on-small-only" height="60px">
                                <img src="IMG/copyright.png" class="hide-on-med-and-up" height="50px">
                            </li>                     
                        </ul> 

                        <ul class="right">
                            <li><a class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons prefix">menu</i></a></li>                     
                        </ul> 

                        <ul>
                            <li> 
                                <a href="acompanhamentos.php" class="brand-logo center hide-on-small-only"><img src="IMG/logo2.png" width="105px" height="60px"></a>
                                <a href="acompanhamentos.php" class="brand-logo center hide-on-med-and-up"><img src="IMG/logo2.png" width="100px" height="54px"></a>
                            </li>                     
                        </ul> 

                    </div>
                </nav>
            </div> 

            <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content green-text text-darken-4'>
                <li><a href="#!" class="center-align green-text text-darken-4"><b><?= $_SESSION['nomeUsuario'] ?></b></a></li>
                <li class="divider"></li>
                
                <?php 
                    if($_SESSION['permissao'] >= 1){
                        echo "<li><a href='AreaAdministrativa.php' class='green-text text-darken-4'><i class='material-icons'>security</i>Área Administrativa</a></li>";
                    }
                ?>
                
                <li><a href="#!" class="green-text text-darken-4"><i class="material-icons">view_module</i>Meus Dados</a></li>
                <li><a href="?sair=sim" class="green-text text-darken-4"><i class="material-icons">exit_to_app</i>Sair</a></li>
            </ul>
        </header>  

        <main>
            <!-- NESTA ÁREA SERÁ POSSIVEL CADASTRAR UM ACOMPANHAMENTO, PESQUISAR COM OS INDICES SIMPLES E SELECIONAR UM INDIVIDUAL-->
            <div class="row container center">
                <div class="col s12 l12 green darken-2 z-depth-3" style="height: 100px;border-radius: 0px 0px 20px 20px; border-style: solid; border-width: 0px 1px 2px 1px;">
                    <img src="IMG/acompanhamentos.png" class="hide-on-small-only"> 
                    <img src="IMG/acompanhamentos_phone.png" class="hide-on-med-and-up"> 
                </div>
                <div class="col s12 l12"><br/></div>

                <div class="col s12 l12 green darken-2 z-depth-3" style="border-radius: 20px 20px 20px 20px;border-style: solid; border-width: 2px 1px 2px 1px;">
                    <br/>
                    <div class="row" >
                        <div class="col s10 offset-s1">
                            <form action="" method="POST"><?php require_once 'PHPBody/Principal/AcompanhamentosGeraisCadastroBody.php'; ?></form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s10 offset-s1">
                            <form action="" method="POST">
                                <?php require_once 'PHPBody/Principal/AcompanhamentosGeraisTableBody.php'; ?>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <div class="col s12 l12 green darken-4 left" style="border-width: 2px 0px 0px 0px; border-style: solid; height: 50px;"></div>


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
                    perPage: 3
                });
            });
        </script>
    </body>
</html>
