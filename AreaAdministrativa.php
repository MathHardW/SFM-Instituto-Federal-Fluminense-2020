<?php
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

if ($_SESSION['permissao'] == 0) {
    header("location: http://localhost/PROJETO_VERSAO_3.0/AcompanhamentosGerais.php");
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
        <title>Área Administrativa</title>
    </head>
    <body>               
        <header>
            <div class="navbar-fixed green darken-4">
                <nav>
                    <div class="nav-wrapper green darken-4">                                 
                        <a class="brand-logo center"><img src="IMG/logo2.png" width="105px" id="tap" onclick="$('.tap-target').tapTarget('open');"></a>

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
                <li><a href="AcompanhamentosGerais.php" class="green-text text-darken-4"><i class="material-icons">home</i>Ínicio</a></li>
                <li><a href="#!" class="green-text text-darken-4"><i class="material-icons">view_module</i>Meus Dados</a></li>
                <li><a href="?sair=sim" class="green-text text-darken-4"><i class="material-icons">exit_to_app</i>Sair</a></li>
            </ul>

        </header>  
        </br>
        <main>
            <div class="row container center">
                <div class="col s12">
                    <ul class="tabs tabs-fixed-width grey lighten-2">                       
                        <li class="tab"><a class="active green-text text-darken-4" href="#tipoAtividade">Tipo de Atividade</a></li>
                        <li class="tab"><a class="green-text text-darken-4" href="#nivel">Nivel</a></li>
                        <li class="tab"><a class="green-text text-darken-4" href="#modalidade">Modalidade</a></li>
                        <li class="tab"><a class="green-text text-darken-4" href="#curso">Curso</a></li>
                        <li class="tab"><a class="green-text text-darken-4" href="#cidade">Cidade</a></li>
                        <li class="tab"><a class="green-text text-darken-4" href="#usuario">Usuário</a></li>
                    </ul>
                </div>
                <div id="tipoAtividade" class="col s12"></div>
                <div id="cidade" class="col s12"></div>
                <div id="nivel" class="col s12"></div>
                <div id="modalidade" class="col s12"></div>
                <div id="curso" class="col s12"></div>
                <div id="usuario" class="col s12"></div>
            </div>
        </main>

        <div><?php require_once 'PHPBody/Acompanhamento/Rodape_Acompanhamento.php'; ?></div>

        <!-- Tap Target Structure -->
        <div class="tap-target green darken-4 white-text flow-text" data-target="tap">
            <div class="tap-target-content center-align">
                <p><h5><b>Bem-vindo à Área Admnistrativa.</b></h5></p>
                <p><h6><b>Funcionalidades da Área: </b><u>Inserção, Edição e Exclusão.</u></h6></p>
                <p><h6><u>Tipos de Atividades, Níveis, Modalidades, Cursos, Cidades e Usuários.</u></h6></p>

            </div>
        </div>


        <script type="text/javascript" src="JS/materialize.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxAreaAdm.js"></script>
        <script>
                            $('.dropdown-trigger').dropdown();

                            $('.tap-target').tapTarget('open');

        </script>
    </body>
</html>
