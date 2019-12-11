<?php

//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/FichaDAO.php';

//ESTANCIANDO A CLASSE
$fichaDAO = new FichaDAO();

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

switch ($acao) {
    case 'plotarValores':
        $codigo = filter_input(INPUT_POST, 'codigoFicha', FILTER_SANITIZE_STRING);

        $row = $fichaDAO->querySelectCodigo($codigo);

        $data['trabalha'] = $row[0][3];
        $data['dependentes'] = $row[0][4];
        $data['atendimento'] = $row[0][5];
        $data['moradia'] = $row[0][6];
        $data['sexo'] = $row[0][7];
        $data['date'] = $row[0][8];
        $data['cidade'] = $row[0][10];

        echo json_encode($data);
        break;
    case 'incluirFicha':
        $codigo = filter_input(INPUT_POST, 'codigoFichaText', FILTER_SANITIZE_STRING);

        if ($codigo == "") {
            $fichaDAO->getFicha()->setAcompanhamento(filter_input(INPUT_POST, 'acompanhamentoFicha'));
            $fichaDAO->getFicha()->setTrabalha(filter_input(INPUT_POST, 'trabalhaText'));
            $fichaDAO->getFicha()->setDependentes(filter_input(INPUT_POST, 'dependentesText'));
            $fichaDAO->getFicha()->setAtendimentoEspecial(filter_input(INPUT_POST, 'atendimentoEspecialText'));
            $fichaDAO->getFicha()->setMoradia(filter_input(INPUT_POST, 'moradiaText'));
            $fichaDAO->getFicha()->setSexo(filter_input(INPUT_POST, 'sexoText'));
            $fichaDAO->getFicha()->setCidade(filter_input(INPUT_POST, 'cidadeText'));
            $fichaDAO->getFicha()->setData(filter_input(INPUT_POST, 'dataText'));

            $row = $fichaDAO->queryInsert();

            $data['id'] = $row[0][0];
            $data['codigo'] = $row[0][1];
            $data['trabalha'] = $row[0][3];
            $data['dependentes'] = $row[0][4];
            $data['atendimento'] = $row[0][5];
            $data['moradia'] = $row[0][6];
            $data['sexo'] = $row[0][7];
            $data['date'] = $row[0][8];
            $data['cidade'] = $row[0][10];

            echo json_encode($data);
        }
        break;
    default:
        echo 'Erro ao logar';
        break;
}
