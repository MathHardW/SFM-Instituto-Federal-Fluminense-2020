<?php

//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/AtividadeDAO.php';

//ESTANCIANDO A CLASSE
$atividadeDAO = new AtividadeDAO();

$acao = filter_input(INPUT_POST, 'acao');

switch ($acao) {
    case 'plotarValores':
        $id = filter_input(INPUT_POST, 'idAtividade');

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
        $id = filter_input(INPUT_POST, 'idAtividade');

        $atividadeDAO->getAtividade()->setTitulo(filter_input(INPUT_POST, 'tituloText'));
        $atividadeDAO->getAtividade()->setServidor(filter_input(INPUT_POST, 'servidorText'));
        $atividadeDAO->getAtividade()->setDescricao(filter_input(INPUT_POST, 'descricaoText'));
        $atividadeDAO->getAtividade()->setPublicoAlvo(filter_input(INPUT_POST, 'publicoAlvoText'));
        $atividadeDAO->getAtividade()->setResultadosEsperados(filter_input(INPUT_POST, 'resultadosEsperadosText'));
        $atividadeDAO->getAtividade()->setResultadosObtidos(filter_input(INPUT_POST, 'resultadosObtidosText'));
        $atividadeDAO->getAtividade()->setDataInicio(filter_input(INPUT_POST, 'dataInicioText'));
        $atividadeDAO->getAtividade()->setDataFim(filter_input(INPUT_POST, 'dataFimText'));

        echo $atividadeDAO->queryUpdate($id);
        break;
    default:
        echo $acao;
        echo 'Erro de solicitação';
        break;
}
