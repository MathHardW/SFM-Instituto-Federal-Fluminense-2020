<?php

//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AtividadeDAO.php';

//ESTANCIANDO A CLASSE
$atividadeDAO = new AtividadeDAO();

$acao = filter_input(INPUT_POST, 'acao');

switch ($acao) {
    case 'plotarValores':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $row = $atividadeDAO->querySelectCodigo($id);

        $data['id'] = $row[0][0];
        $data['titulo'] = $row[0][1];
        $data['servidor'] = $row[0][2];
        $data['descricao'] = $row[0][3];
        $data['publicoAlvo'] = $row[0][4];
        $data['resultadosEsperados'] = $row[0][5];
        $data['resultadosObtidos'] = $row[0][6];
        $data['dataInicio'] = $row[0][7];
        $data['dataFim'] = $row[0][8];
        $data['TipoAtividade'] = $row[0][10];

        echo json_encode($data);
        break;
    case 'salvarAtividade':
        $id = filter_input(INPUT_POST, 'id');

        $atividadeDAO->getAtividade()->setTitulo(filter_input(INPUT_POST, 'titulo'));
        $atividadeDAO->getAtividade()->setServidor(filter_input(INPUT_POST, 'servidor'));
        $atividadeDAO->getAtividade()->setDescricao(filter_input(INPUT_POST, 'descricao'));
        $atividadeDAO->getAtividade()->setPublicoAlvo(filter_input(INPUT_POST, 'publicoAlvo'));
        $atividadeDAO->getAtividade()->setResultadosEsperados(filter_input(INPUT_POST, 'resultadosEsperados'));
        $atividadeDAO->getAtividade()->setResultadosObtidos(filter_input(INPUT_POST, 'resultadosObtidos'));
        $atividadeDAO->getAtividade()->setDataInicio(filter_input(INPUT_POST, 'dataInicio'));
        $atividadeDAO->getAtividade()->setDataFim(filter_input(INPUT_POST, 'dataFim'));

        echo $atividadeDAO->queryUpdate($id);
        break;
    case 'deletarAtividade':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $row = $atividadeDAO->queryDelete($id);
        break;
    case 'incluirAtividade':
        $atividadeDAO->getAtividade()->setAcompanhamento(filter_input(INPUT_POST, 'acompanhamento'));
        
        $atividadeDAO->getAtividade()->setTipoAtividade(filter_input(INPUT_POST, 'tipoAtividade', FILTER_SANITIZE_NUMBER_INT));
        $atividadeDAO->getAtividade()->setTitulo(filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING));
        $atividadeDAO->getAtividade()->setServidor(filter_input(INPUT_POST, 'servidor', FILTER_SANITIZE_STRING));
        $atividadeDAO->getAtividade()->setDescricao(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING));
        $atividadeDAO->getAtividade()->setPublicoAlvo(filter_input(INPUT_POST, 'publicoAlvo', FILTER_SANITIZE_STRING));
        $atividadeDAO->getAtividade()->setResultadosEsperados(filter_input(INPUT_POST, 'resultadosEsperados', FILTER_SANITIZE_STRING));
        $atividadeDAO->getAtividade()->setResultadosObtidos(filter_input(INPUT_POST, 'resultadosObtidos', FILTER_SANITIZE_STRING));
        $atividadeDAO->getAtividade()->setDataInicio(filter_input(INPUT_POST, 'dataInicio'));
        $atividadeDAO->getAtividade()->setDataFim(filter_input(INPUT_POST, 'dataFim'));
        
        $row = $atividadeDAO->queryInsert();
        echo $row;
        break;
    default:
        echo $acao;
        echo 'Erro de solicitação';
        break;
}
