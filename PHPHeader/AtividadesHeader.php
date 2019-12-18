<?php
//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AtividadeDAO.php';
//------------------------------------------------------------------------------    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$atividadeDAO = new AtividadeDAO();
$atividadeDAO->getAtividade()->setAcompanhamento($_GET['acompanhamento']);
//------------------------------------------------------------------------------
//
//CADASTRANDO FICHA-------------------------------------------------------------
if (isset($_POST['cadastrarAtividadeButton'])) {
    $atividadeDAO->getAtividade()->setTitulo($_POST['tituloText']);
    $atividadeDAO->getAtividade()->setServidor($_POST['servidorText']);
    $atividadeDAO->getAtividade()->setDescricao($_POST['descricaoText']);
    $atividadeDAO->getAtividade()->setPublicoAlvo($_POST['publicoAlvoText']);
    $atividadeDAO->getAtividade()->setResultadosEsperados($_POST['resultadosEsperadosText']);
    $atividadeDAO->getAtividade()->setResultadosObtidos($_POST['resultadosObtidosText']);
    $atividadeDAO->getAtividade()->setDataInicio($_POST['dataInicioText']);
    $atividadeDAO->getAtividade()->setDataFim($_POST['dataFimText']);
    $atividadeDAO->getAtividade()->setTipoAtividade($_POST['tipoAtividadeText']);

    if ($atividadeDAO->queryInsert() == 'ok') {
        header("location: http://localhost/PROJETO_VERSAO_3.0/Acompanhamento.php?acompanhamento=" . $_GET['acompanhamento']);
    }else {
        echo '<script type="text/javascript"> alert("Erro ao cadastrar Atividade!") </script>';
    }
}
?>
