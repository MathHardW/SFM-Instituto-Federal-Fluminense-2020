<?php

//IMPORTANDO A CLASSE
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/TipoAtividadeDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CidadeDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/NivelDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/ModalidadeDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/CursoDAO.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/UsuarioDAO.php';

//ESTANCIANDO A CLASSE

$acao = filter_input(INPUT_POST, 'acao');
$crud = filter_input(INPUT_POST, 'CRUD');

switch ($acao) {
    case 'plotarValores':
        switch ($crud) {
            case 'TipoAtividade':
                $tipoAtividadeDAO = new TipoAtividadeDAO();

                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $row = $tipoAtividadeDAO->querySelectId($id);

                $data['id'] = $row[0][0];
                $data['nome'] = $row[0][1];
                $data['descricao'] = $row[0][2];

                echo json_encode($data);
                break;
            case 'Cidade':
                $cidadeDAO = new CidadeDAO();

                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $row = $cidadeDAO->querySelectId($id);

                $data['id'] = $row[0][0];
                $data['nome'] = $row[0][1];
                $data['estado'] = $row[0][2];

                echo json_encode($data);
                break;
            case 'Nivel':
                $nivelDAO = new NivelDAO();

                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $row = $nivelDAO->querySelectId($id);

                $data['id'] = $row[0][0];
                $data['nome'] = $row[0][1];

                echo json_encode($data);
                break;
            case 'Modalidade':
                $modalidadeDAO = new ModalidadeDAO();

                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $row = $modalidadeDAO->querySelectId($id);

                $data['id'] = $row[0][0];
                $data['nome'] = $row[0][1];
                $data['nivel'] = $row[0][2];

                echo json_encode($data);
                break;
            case 'Curso':
                $cursoDAO = new CursoDAO();

                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $row = $cursoDAO->querySelectId($id);

                $data['id'] = $row[0][0];
                $data['nome'] = $row[0][1];
                $data['modalidade'] = $row[0][2];

                echo json_encode($data);
                break;
        }
        break;
    case 'Cadastrar':
        switch ($crud) {
            case 'TipoAtividade':
                $tipoAtividadeDAO = new TipoAtividadeDAO();

                $tipoAtividadeDAO->getTipoAtividade()->setNome(filter_input(INPUT_POST, 'nome'));
                $tipoAtividadeDAO->getTipoAtividade()->setDescricao(filter_input(INPUT_POST, 'descricao'));

                $row = $tipoAtividadeDAO->queryInsert();

                echo $row;
                break;
            case 'Nivel':
                $nivelDAO = new NivelDAO();

                $nivelDAO->getNivel()->setNome(filter_input(INPUT_POST, 'nome'));
                $row = $nivelDAO->queryInsert();

                echo $row;
                break;
            case 'Modalidade':
                $modalidadeDAO = new ModalidadeDAO();

                $modalidadeDAO->getModalidade()->setNome(filter_input(INPUT_POST, 'nome'));
                $modalidadeDAO->getModalidade()->setNivel(filter_input(INPUT_POST, 'nivel'));

                $row = $modalidadeDAO->queryInsert();

                echo $row;
                break;
            case 'Curso':
                $cursoDAO = new CursoDAO();

                $cursoDAO->getCurso()->setNome(filter_input(INPUT_POST, 'nome'));
                $cursoDAO->getCurso()->setModalidade(filter_input(INPUT_POST, 'modalidade'));

                $row = $cursoDAO->queryInsert();

                echo $row;
                break;
        }
        break;
    case 'Salvar':
        switch ($crud) {
            case 'TipoAtividade':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $tipoAtividadeDAO = new TipoAtividadeDAO();
                $tipoAtividadeDAO->getTipoAtividade()->setNome(filter_input(INPUT_POST, 'nome'));
                $tipoAtividadeDAO->getTipoAtividade()->setDescricao(filter_input(INPUT_POST, 'descricao'));

                $row = $tipoAtividadeDAO->queryUpdate($id);

                echo $row;
                break;
            case 'Nivel':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $nivelDAO = new NivelDAO();
                $nivelDAO->getNivel()->setNome(filter_input(INPUT_POST, 'nome'));

                $row = $nivelDAO->queryUpdate($id);

                echo $row;
                break;
            case 'Modalidade':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

                $modalidadeDAO = new ModalidadeDAO();
                $modalidadeDAO->getModalidade()->setNome(filter_input(INPUT_POST, 'nome'));
                $modalidadeDAO->getModalidade()->setNivel(filter_input(INPUT_POST, 'nivel'));

                $row = $modalidadeDAO->queryUpdate($id);

                echo $row;
                break;
        }
        break;
    case 'Excluir':
        switch ($crud) {
            case 'TipoAtividade':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $tipoAtividadeDAO = new TipoAtividadeDAO();
                $row = $tipoAtividadeDAO->queryDeleteId($id);

                echo $row;
                break;
            case 'Nivel':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $nivelDAO = new NivelDAO();
                $row = $nivelDAO->queryDeleteId($id);

                echo $row;
                break;
            case 'Modalidade':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $modalidadeDAO = new ModalidadeDAO();
                $row = $modalidadeDAO->queryDeleteId($id);

                echo $row;
                break;
            case 'Usuario':
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                $usuarioDAO = new UsuarioDAO();
                $row = $usuarioDAO->queryDeleteId($id);

                echo $row;
                break;
        }
        break;
    case 'aprovarUsuario':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $usuarioDAO = new UsuarioDAO();
        $row = $usuarioDAO->queryAprovarId($id);
        echo $row;
        break;
    case 'darDireitos':
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $usuarioDAO = new UsuarioDAO();
        $row = $usuarioDAO->queryDarDireitosId($id);
        echo $row;
        break;
}