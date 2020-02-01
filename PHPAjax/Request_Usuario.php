<?php

require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/ClassesDAO/UsuarioDAO.php';

$usuarioDAO = new UsuarioDAO();
$acao = filter_input(INPUT_POST, 'acao');

switch ($acao) {
    case 'fazerLogin':

        $usuarioDAO->getUsuario()->setLogin(filter_input(INPUT_POST, 'loginL', FILTER_SANITIZE_STRING));
        $usuarioDAO->getUsuario()->setSenha(filter_input(INPUT_POST, 'senhaL', FILTER_SANITIZE_STRING));

        echo $usuarioDAO->queryLogar();

        break;
    case 'fazerRegistro':
        $usuarioDAO->getUsuario()->setNomeCompleto(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
        $usuarioDAO->getUsuario()->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
        $usuarioDAO->getUsuario()->setMatricula(filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING));
        $usuarioDAO->getUsuario()->setLogin(filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING));
        $usuarioDAO->getUsuario()->setSenha(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

        $usuarioDAO->getUsuario()->setPermissao(0);
        $usuarioDAO->getUsuario()->setSituacao(0);
        $usuarioDAO->getUsuario()->setDataEntrada(date('d/m/y'));

        echo $usuarioDAO->queryRegistrar();

        break;
    default :
        echo "Operação Inválida";
        break;
}
