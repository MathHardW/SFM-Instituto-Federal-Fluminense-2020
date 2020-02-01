<?php
require_once 'PHPHeader/AcompanhamentosGeraisHeader.php';
require_once 'PHPHeader/FichasHeader.php';

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
        <title>Acompanhamento</title>
    </head>
    <body class="grey lighten-5">
        <input type="text" value="<?= $_GET['acompanhamento'] ?>" hidden name="acompanhamento" id="acompanhamento">

        <!-- BARRA DE MENU PRINCIPAL DA PAGÍNA ACOMPANHAMENTOS----------------->
        <?php require_once 'PHPBody/Acompanhamento/Menu_Acompanhamento.php'; ?>

        <!-- GRÁFICOS DA PAGÍNA ACOMPANHAMENTOS-------------------------------->
        <div class="row container center" hidden>
            <?php require_once 'PHPBody/Acompanhamento/Graficos_Acompanhamento.php'; ?>
        </div>

        <main>
            <!-- FORMULÁRIOS DE FICHA E DE ATIVIDADE DA PAGÍNA ACOMPANHAMENTOS----->
            <div class="row container center">
                <div class="col s12">
                    <ul class="tabs grey lighten-2">                      
                        <li class="tab left green-text text-darken-4"><a class="active green-text text-darken-4" href="#fichas" onclick="renderizarAtividades();">Incluir Ficha</a></li>
                        <li class="tab right green-text text-darken-4"><a class="active green-text text-darken-4" href="#atividades" onclick="renderizarAtividades();">Incluir Atividade</a></li>
                    </ul>
                </div>

                <!--TABELA E FORMULARIO DE FICHAS-->
                <div id="fichas"></div>

                <!--TABELA E FORMULARIO DE ATIVIDADES-->
                <div id="atividades"></div>
            </div>
        </main>
        <!-- RODAPÉ DA PAGÍNA ACOMPANHAMENTOS---------------------------------->
        <?php require_once 'PHPBody/Acompanhamento/Rodape_Acompanhamento.php'; ?>

        <!-- JAVASCRIPT DA PAGÍNA ACOMPANHAMENTOS------------------------------>
        <script type="text/javascript" src="JS/materialize.js"></script>
        <script type="text/javascript" src="JS/standart.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxAtividade.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxFicha.js"></script>
    </body>
</html>