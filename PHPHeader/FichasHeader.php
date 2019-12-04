<?php

//IMPORTANDO AS CLASSES---------------------------------------------------------
require_once 'ClassesDAO/FichaDAO.php';
//------------------------------------------------------------------------------    
//ESTANCIANDO A CLASSE----------------------------------------------------------
$fichaDAO = new FichaDAO();
$fichaDAO->getFicha()->setAcompanhamento($_GET['acompanhamento']);
//------------------------------------------------------------------------------
//
//CADASTRANDO FICHA-------------------------------------------------------------
if (isset($_POST['cadastrarFichaButton'])) {
    $fichaDAO->getFicha()->setTrabalha($_POST['trabalhaText']);
    $fichaDAO->getFicha()->setDependentes($_POST['dependentesText']);
    $fichaDAO->getFicha()->setAtendimentoEspecial($_POST['atendimentoEspecialText']);
    $fichaDAO->getFicha()->setMoradia($_POST['moradiaText']);
    $fichaDAO->getFicha()->setSexo($_POST['sexoText']);
    $fichaDAO->getFicha()->setCidade($_POST['cidadeText']);
    $fichaDAO->getFicha()->setData($_POST['dataText']);

    if ($fichaDAO->queryInsert() == 'ok') {
        header("location: http://localhost/PROJETO_VERSAO_3.0/Acompanhamento.php?acompanhamento=" . $_GET['acompanhamento']);
    } else {
        echo '<script type="text/javascript"> alert("Erro ao cadastrar Ficha!") </script>';
    }
}
?>
