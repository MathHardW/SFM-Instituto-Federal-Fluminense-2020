<?php

//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AcompanhamentoDAO.php';

//ESTANCIANDO A CLASSE
$acompanhamentoDAO = new AcompanhamentoDAO();

$acao = filter_input(INPUT_POST, 'acao');

switch ($acao) {
    case 'Cadastrar':
        
        $dataIniInput = filter_input(INPUT_POST, 'dataInicioText');
        $dataIni = date('Y/m/d', strtotime($dataIniInput));
        
        $dataFimInput = filter_input(INPUT_POST, 'dataFimText');
        $dataFim = date('Y/m/d', strtotime($dataFimInput));
        
        $acompanhamentoDAO->getAcompanhamento()->setTitulo(filter_input(INPUT_POST, 'tituloText'));
        $acompanhamentoDAO->getAcompanhamento()->setServidor(filter_input(INPUT_POST, 'servidorText'));
        $acompanhamentoDAO->getAcompanhamento()->setAlunosIniciais(filter_input(INPUT_POST, 'alunosIniciaisText'));
        $acompanhamentoDAO->getAcompanhamento()->setAlunosFinais(0);
        $acompanhamentoDAO->getAcompanhamento()->setPeriodoDeIngresso(filter_input(INPUT_POST, 'periodoText'));
        $acompanhamentoDAO->getAcompanhamento()->setDataInicio($dataIni);
        $acompanhamentoDAO->getAcompanhamento()->setDataFim($dataFim);
        $acompanhamentoDAO->getAcompanhamento()->setCurso(filter_input(INPUT_POST, 'cursoText'));

        $row = $acompanhamentoDAO->queryInsert();
        echo $row;
        break;
    case 'Salvar':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        $dataIniInput = filter_input(INPUT_POST, 'dataInicioText');
        $dataIni = date('Y/m/d', strtotime($dataIniInput));
        
        $dataFimInput = filter_input(INPUT_POST, 'dataFimText');
        $dataFim = date('Y/m/d', strtotime($dataFimInput));
        
        $acompanhamentoDAO->getAcompanhamento()->setTitulo(filter_input(INPUT_POST, 'tituloText'));
        $acompanhamentoDAO->getAcompanhamento()->setServidor(filter_input(INPUT_POST, 'servidorText'));
        $acompanhamentoDAO->getAcompanhamento()->setAlunosIniciais(filter_input(INPUT_POST, 'alunosIniciaisText'));
        $acompanhamentoDAO->getAcompanhamento()->setPeriodoDeIngresso(filter_input(INPUT_POST, 'periodoText'));
        $acompanhamentoDAO->getAcompanhamento()->setDataInicio($dataIni);
        $acompanhamentoDAO->getAcompanhamento()->setDataFim($dataFim);
        $acompanhamentoDAO->getAcompanhamento()->setCurso(filter_input(INPUT_POST, 'cursoText'));

        $row = $acompanhamentoDAO->queryUpdate($id);
        echo $row;
        break;
    case 'Excluir':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $row = $acompanhamentoDAO->queryDelete($id);
        echo $row;
        break;
    case 'plotarValores':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $row = $acompanhamentoDAO->querySelectEdit($id);
        
        $dataIni = date('d/m/Y', strtotime($row[0][5]));
        $dataFim = date('d/m/Y', strtotime($row[0][6]));

        $data['id'] = $row[0][0];
        $data['titulo'] = $row[0][1];
        $data['servidor'] = $row[0][2];
        $data['alunosIniciais'] = $row[0][3];
        $data['dataInicio'] = $dataIni;
        $data['dataFim'] = $dataFim;
        $data['periodo'] = $row[0][7];
        $data['curso'] = $row[0][9];

        echo json_encode($data);
        break;
    case 'finalizarAcompanhamento':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $row = $acompanhamentoDAO->queryFinalizarAcompanhamento($id);

        echo $row;
        break;
}