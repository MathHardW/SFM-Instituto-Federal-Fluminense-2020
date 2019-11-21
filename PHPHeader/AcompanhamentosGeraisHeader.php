<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'ClassesDAO/AcompanhamentoDAO.php';
require_once 'ClassesDAO/CursoDAO.php';

//------------------------------------------------------------------------------    
    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$acompanhamentoDAO = new AcompanhamentoDAO();
$cursoDAO = new CursoDAO();
//------------------------------------------------------------------------------


if (count($_GET) > 0) {
    if (isset($_GET['seleciona'])) {
        if($_GET['seleciona'] >= 0){
            header("location: http://localhost/PROJETO_VERSAO_3.0/Acompanhamento.php?acompanhamento=".$_GET['seleciona']);
        }
    }
}

//CADASTRANDO MODALIDADE--------------------------------------------------------
if (isset($_POST['cadastrarAcompanhamentoButton'])) {
    $acompanhamentoDAO->getAcompanhamento()->setTitulo($_POST['tituloText']);
    $acompanhamentoDAO->getAcompanhamento()->setServidor($_POST['servidorText']);
    $acompanhamentoDAO->getAcompanhamento()->setAlunosIniciais($_POST['alunosIniciaisText']);
    $acompanhamentoDAO->getAcompanhamento()->setAlunosFinais($_POST['alunosFinaisText']);
    $acompanhamentoDAO->getAcompanhamento()->setPeriodoDeIngresso($_POST['periodoText']);
    $acompanhamentoDAO->getAcompanhamento()->setDataInicio($_POST['dataInicioText']);
    $acompanhamentoDAO->getAcompanhamento()->setDataFim($_POST['dataFimText']);
    $acompanhamentoDAO->getAcompanhamento()->setCurso($_POST['cursoText']);

    if ($acompanhamentoDAO->queryInsert() == 'ok') {
        header("location: http://localhost/PROJETO_VERSAO_3.0/AcompanhamentosGerais.php");
    } else {
        echo '<script type="text/javascript"> alert("Erro ao cadastrar Modalidade!") </script>';
    }
}

?>
