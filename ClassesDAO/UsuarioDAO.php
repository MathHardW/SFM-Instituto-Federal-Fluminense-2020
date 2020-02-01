<?php

require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Usuario.php';

class UsuarioDAO {

    private $Connection;
    private $Usuario;

    function __construct() {
        $this->Connection = new Conexao();
        $this->Usuario = new Usuario();
    }

    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM dbmad3.usuario ORDER BY id DESC;");
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryAprovarId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("UPDATE `dbmad3`.`usuario` SET `situacao` = 1 WHERE `id` = ?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return "ok";
            } else {
                return "erro";
            };
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryDarDireitosId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("UPDATE `dbmad3`.`usuario` SET `permissao` = 1 WHERE `id` = ?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return "ok";
            } else {
                return "erro";
            };
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryDeleteId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("DELETE FROM `dbmad3`.`usuario` WHERE `id` = ?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return "ok";
            } else {
                return "erro";
            };
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryLogar() {
        try {
            $login = $this->Usuario->getLogin();
            $senha = $this->Usuario->getSenha();

            $retornoDB = $this->Connection->Conectar()->prepare("SELECT usuario.id, usuario.login, usuario.senha, usuario.situacao, usuario.permissao FROM dbmad3.usuario WHERE login = ? AND senha = ? LIMIT 1;");
            $retornoDB->bindParam(1, $login, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $senha, PDO::PARAM_STR);

            if ($retornoDB->execute()) {
                $result = $retornoDB->fetch();
                $linhas = $retornoDB->rowCount();

                if ($linhas === 0) {
                    return "erro";
                } else {
                    if ($result['situacao'] == 0) {
                        return "erroSituacao";
                    }

                    session_start();
                    $_SESSION['logado'] = "logado";
                    $_SESSION['usuarioID'] = $result['id'];
                    $_SESSION['permissao'] = $result['permissao'];

                    return "ok";
                }
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryLogado($dado) {
        $retornoDB = $this->Connection->Conectar()->prepare("SELECT id, nomeCompleto, email, login, senha FROM dbmad3.usuario WHERE id=?;");
        $retornoDB->bindParam(1, $dado, PDO::PARAM_INT);

        $retornoDB->execute();
        $result = $retornoDB->fetch();

        $_SESSION['nomeUsuario'] = $result['login'];
    }

    public function querySair() {
        session_destroy();
        header("location: http://localhost/PROJETO_VERSAO_3.0/index.php");
    }

    public function queryRegistrar() {
        try {
            $nome = $this->Usuario->getNomeCompleto();
            $email = $this->Usuario->getEmail();
            $matricula = $this->Usuario->getMatricula();
            $login = $this->Usuario->getLogin();
            $senha = $this->Usuario->getSenha();

            $permissao = $this->Usuario->getPermissao();
            $situacao = $this->Usuario->getSituacao();
            $data = $this->Usuario->getDataEntrada();

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `usuario` 
                                                                (`nomeCompleto`, 
                                                                `email`, 
                                                                `matricula`, 
                                                                `login`, 
                                                                `senha`, 
                                                                `permissao`, 
                                                                `situacao`, 
                                                                `dataEntrada`) 
                                                                VALUES 
                                                                (?,?,?,?,?,?,?,?); ");
            $retornoDB->bindParam(1, $nome, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $email, PDO::PARAM_STR);
            $retornoDB->bindParam(3, $matricula, PDO::PARAM_STR);
            $retornoDB->bindParam(4, $login, PDO::PARAM_STR);
            $retornoDB->bindParam(5, $senha, PDO::PARAM_STR);
            $retornoDB->bindParam(6, $permissao, PDO::PARAM_INT);
            $retornoDB->bindParam(7, $situacao, PDO::PARAM_INT);
            $retornoDB->bindParam(8, $data, PDO::PARAM_STR);

            if ($retornoDB->execute()) {
                return "ok";
            } else {
                return "erro";
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    function getUsuario() {
        return $this->Usuario;
    }

}
