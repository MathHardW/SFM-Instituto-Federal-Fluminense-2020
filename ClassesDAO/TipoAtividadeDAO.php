<?php

require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/Conexao.php';
require_once 'C:/xampp/htdocs/PROJETO_VERSAO_3.0/Classes/TipoAtividade.php';

class TipoAtividadeDAO {

    private $Connection;
    private $TipoAtividade;

    function __construct() {
        $this->Connection = new Conexao();
        $this->TipoAtividade = new TipoAtividade();
    }

    public function querySelectId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `tipoatividade` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function querySelect() {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("SELECT * FROM `tipoatividade` ORDER BY id DESC;");
            $retornoDB->execute();

            return $retornoDB->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert() {
        try {
            $nome = $this->TipoAtividade->getNome();
            $descricao = $this->TipoAtividade->getDescricao();

            $retornoDB = $this->Connection->Conectar()->prepare("INSERT INTO `tipoatividade`(`nome`, `descricao`) VALUES (?, ?);");

            $retornoDB->bindParam(1, $nome, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $descricao, PDO::PARAM_STR);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function queryUpdate($id) {
        try {
            $nome = $this->TipoAtividade->getNome();
            $descricao = $this->TipoAtividade->getDescricao();

            $retornoDB = $this->Connection->Conectar()->prepare("UPDATE `tipoatividade` SET `nome` = ?, `descricao` = ? WHERE `id` = ?;");

            $retornoDB->bindParam(1, $nome, PDO::PARAM_STR);
            $retornoDB->bindParam(2, $descricao, PDO::PARAM_STR);
            $retornoDB->bindParam(3, $id, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function queryDeleteId($id) {
        try {
            $retornoDB = $this->Connection->Conectar()->prepare("DELETE FROM `tipoatividade` WHERE id=?;");
            $retornoDB->bindParam(1, $id, PDO::PARAM_INT);

            if ($retornoDB->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    function getTipoAtividade() {
        return $this->TipoAtividade;
    }

}
