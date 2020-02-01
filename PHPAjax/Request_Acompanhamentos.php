<?php

//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AcompanhamentoDAO.php';

//ESTANCIANDO A CLASSE
$acompanhamentoDAO = new AcompanhamentoDAO();

$acao = filter_input(INPUT_POST, 'acao');

switch ($acao) {
    case 'finalizarAcompanhamento':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        $row = $acompanhamentoDAO->queryFinalizarAcompanhamento($id);

        echo $row;
        break;
}