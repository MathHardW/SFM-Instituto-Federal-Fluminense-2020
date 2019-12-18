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

        <!-- BARRA DE MENU PRINCIPAL DA PAGÍNA ACOMPANHAMENTOS----------------->
        <?php require_once 'PHPBody/Acompanhamento/Menu_Acompanhamento.php'; ?>

        <!-- GRÁFICOS DA PAGÍNA ACOMPANHAMENTOS-------------------------------->
        <div class="row container center" hidden>
            <?php require_once 'PHPBody/Acompanhamento/Graficos_Acompanhamento.php'; ?>
        </div>

        <!-- FORMULÁRIOS DE FICHA E DE ATIVIDADE DA PAGÍNA ACOMPANHAMENTOS----->
        <div class="row container center">
            <div class="col s12">
                <ul class="tabs grey lighten-2">                       
                    <li class="tab left"><a class="active" href="#ficha">Incluir Ficha</a></li>
                    <li class="tab right"><a class="active" href="#atividade">Incluir Atividade</a></li>
                </ul>
            </div>
            <!-- CADASTRO DE TIPO DE ATIVIDADE -->
            <div id="ficha" class="col s12">
                <?php require_once 'PHPBody/Acompanhamento/Fichas_Acompanhamento.php'; ?>
            </div>
            <!-- CADASTRO DE TIPO DE ATIVIDADE -->
            <div id="atividade" class="col s12">
                <?php require_once 'PHPBody/Acompanhamento/Atividades_Acompanhamento.php'; ?>
            </div>
        </div>

        <!-- TABELAS DE FICHA E DE ATIVIDADE DA PAGÍNA ACOMPANHAMENTOS--------->
        <div class="row container center">
            <?php require_once 'PHPBody/Acompanhamento/Tabela_Ficha_Acompanhamento.php'; ?>
            <?php require_once 'PHPBody/Acompanhamento/Tabela_Atividade_Acompanhamento.php'; ?>
        </div>

        <!-- RODAPÉ DA PAGÍNA ACOMPANHAMENTOS---------------------------------->
        <?php require_once 'PHPBody/Acompanhamento/Rodape_Acompanhamento.php'; ?>

        <!-- JAVASCRIPT DA PAGÍNA ACOMPANHAMENTOS------------------------------>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/standart.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxAtividade.js"></script>
        <script type="text/javascript" src="JSAjax/ajaxFicha.js"></script>
    </body>
</html>