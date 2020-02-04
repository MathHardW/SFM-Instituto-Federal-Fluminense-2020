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
    <body style="background-image: url('IMG/backgroundIFF.png');background-repeat: initial;">
        <input type="text" value="<?= $_GET['acompanhamento'] ?>" hidden name="acompanhamento" id="acompanhamento">

        <!-- BARRA DE MENU PRINCIPAL DA PAGÍNA ACOMPANHAMENTOS----------------->
        <?php require_once 'PHPBody/Acompanhamento/Menu_Acompanhamento.php'; ?>

        <!-- GRÁFICOS DA PAGÍNA ACOMPANHAMENTOS-------------------------------->
        <div class="row container center" hidden>
            <?php require_once 'PHPBody/Acompanhamento/Graficos_Acompanhamento.php'; ?>
        </div>

        <main>
            <!-- FORMULÁRIOS DE FICHA E DE ATIVIDADE DA PAGÍNA ACOMPANHAMENTOS----->
            <div class="row container center green darken-2 z-depth-3" style="border-radius: 0px 0px 20px 20px;border-style: solid; border-width: 1px 1px 2px 1px;">
                <div class="col s12 grey">
                    <ul class="tabs tabs-fixed-width grey">                       
                        <li class="tab"><a class="active white-text" href="#fichas" onclick="renderizarAtividades();">Incluir Ficha</a></li>
                        <li class="tab"><a class="white-text" href="#atividades" onclick="renderizarAtividades();">Incluir Atividade</a></li>
                    </ul>
                </div>

                <!--TABELA E FORMULARIO DE FICHAS-->
                <div id="fichas"></div>

                <!--TABELA E FORMULARIO DE ATIVIDADES-->
                <div id="atividades"></div>

                <div class="col s12 l12 grey" style="border-radius: 0px 0px 20px 20px;border-style: solid; border-width: 1px 1px 0px 0px; height: 20px;"></div>
            </div>
        </main>
        <!-- RODAPÉ DA PAGÍNA ACOMPANHAMENTOS---------------------------------->
        <div class="col s12 l12 green darken-4 left" style="border-width: 2px 0px 0px 0px; border-style: solid; height: 50px;"></div>


        <!-- JAVASCRIPT DA PAGÍNA ACOMPANHAMENTOS------------------------------>
        <script type="text/javascript" src="JS/materialize.js"></script>
        <script type="text/javascript" src="JS/standart.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxAtividade.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxFicha.js"></script>
    </body>
</html>